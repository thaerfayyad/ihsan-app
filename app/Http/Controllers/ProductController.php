<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Http\Requests\StoreProductRequest;
use App\Http\Requests\UpdateProductRequest;
use App\Models\Category;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Symfony\Component\HttpFoundation\Response;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $products = Product::with('category')->get();
        if ($request->expectsJson()) {
            return response()->json(['status', true, 'data' => $products]);
        } else {
            return response()->view('cms.products.index', [
                'products' => $products,

            ]);
        }

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::all();
        return response()->view('cms.products.create', [
            'categories' => $categories,
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreProductRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $validator = Validator($request->all(), [
            "name" => ['required', 'min:3'],
            "category_id" => ['required', 'exists:categories,id'],
            "image" => ['sometimes', 'image'],
            'description' => ['required', 'min:3'],
            'price' => ['required'],
            'size' => ['required'],
            'quantity' => ['required'],
            // 'status' => 'required|boolean',
        ]);

        if (!$validator->fails()) {
            $request_data = $request->all();


            $request_data = $request->except('image');
            $request_data['image']    = $request->file('image')->store('products_images', 'public');
            $isSaved =   Product::create($request_data);
            return response()->json(['message' => $isSaved ? 'Created Successfully' : 'Failed To Create'], $isSaved ? Response::HTTP_CREATED : Response::HTTP_BAD_REQUEST);
        } else {
            return response()->json(['message' => $validator->getMessageBag()->first()], Response::HTTP_BAD_REQUEST);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product)
    {
        //
        $categories = Category::where('status','=', true)->get();
        return response()->view('cms.products.edit', [
            'product'    => $product,
            'categories' => $categories,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateProductRequest  $request
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Product $product)
    {
        //
        $validator = Validator($request->all(), [
            "name" => ['required', 'min:3'],
            "category_id" => ['required', 'exists:categories,id'],
            "image" => ['sometimes', 'image'],
            'description' => ['required', 'min:3'],
            'price' => ['required'],
            'size' => ['required'],
            'quantity' => ['required'],
            // 'status' => 'required|boolean',
        ]);

        if (!$validator->fails()) {
            $request_data = $request->all();

            if ($request->image) {

                Storage::disk('local')->delete('public/' . $product->image);

                $request_data['image'] = $request->file('image')->store('products_images','public');
            }

          $isSaved = $product->update($request_data);

            return response()->json(['message' => $isSaved ? 'Created Successfully' : 'Failed To Create'], $isSaved ? Response::HTTP_CREATED : Response::HTTP_BAD_REQUEST);
        } else {
            return response()->json(['message' => $validator->getMessageBag()->first()], Response::HTTP_BAD_REQUEST);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {

        // $imageName = $product->image;
        $deleted = $product->delete();
        if ($deleted) Storage::disk('local')->delete('public/' . $product->image);
        return response()->json([
            'title' => $deleted ? 'Deleted successfully' : "Delete failed",
            'icon' => $deleted ? 'success' : "error",
        ], $deleted ? Response::HTTP_OK : Response::HTTP_BAD_REQUEST);
    }
}
