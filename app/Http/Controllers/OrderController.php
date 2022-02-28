<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Illuminate\Auth\Events\Validated;
use Illuminate\Contracts\Validation\Validator;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Symfony\Component\HttpFoundation\Response;
use Haruncpi\LaravelIdGenerator\IdGenerator;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $data = Order::with('products')->get();

        return response()->view('cms.orders.index',['orders'=>$data]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $validator = Validator($request->all(), [
            'address_address' => 'nullable|string',
            'address_latitude' => 'nullable|string',
            'address_longitude' => 'nullable|string',
            'status' => 'required|boolean',

            'product_id' => 'required|array',
        ]);

        if ($validator->fails()) {
            $request_data = $request->except(['order_id', 'price', 'quantity']);

            $order_no = Order::orderBy('id', 'DESC')->pluck('id')->first();
            if($order_no == null or $order_no == ""){
            #If Table is Empty
            $order_no = 0001;
            }
            else{
            #If Table has Already some Data
            $order_no = $order_no + 1;
          }

          $request_data['order_no']    = $order_no;
          $order = Order::create($request_data);

            DB::table('order_product')->insert([
                'price' => $request->input('price'),
                'quantity' => $request->input('quantity'),
                'product_id' => $request->input('product_id'),
                'order_id' =>$order->id,
            ]);
            // $order->products()->sync($request->product_id);

            return response()->json(['status', true, 200, 'message' =>'Order created successfully']);
        } else {
            return response()->json(['status', false, 401, 'message' =>' failed ']);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

        $order = Order::query()->with(['products'])->find($id);
        //   return $order;


        return response()->view('cms.orders.show',['orders'=>$order]);

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function edit(Order $order)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Order $order)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $isDeleted = Order::where('id',$id)->delete();
        if ($isDeleted) {
            return response()->json(['title' => 'Deleted!', 'message' => ' Deleted Successfully', 'icon' => 'success'], Response::HTTP_OK);
        } else {
            return response()->json(['title' => 'Failed!', 'message' => 'Delete Failed', 'icon' => 'error'],  Response::HTTP_BAD_REQUEST);
        }
    }
}
