<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class FrontController extends Controller
{
    public function index()
    {
        return view('front.index');
    }
    public function contact_us(Request $request)
    {
        $validator = Validator($request->all(), [
            'name' => 'required|string|min:2|max:50|unique:categories,name',
            'email' => '|string|email|min:3|max:100',
        ]);
        if (!$validator->fails()) {
            $isSaved = Contact::create($request->all());
            return response()->json(['message' => $isSaved ? 'Created Successfully' : 'Failed To Create'], $isSaved ? Response::HTTP_CREATED : Response::HTTP_BAD_REQUEST);
        } else {
            return response()->json(['message' => $validator->getMessageBag()->first()], Response::HTTP_BAD_REQUEST);
        }

    }
}
