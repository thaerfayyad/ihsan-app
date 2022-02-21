<?php

namespace App\Http\Controllers\api;

use App\Helpers\Messages;
use App\Http\Controllers\Controller;
use App\Models\Broker;
use App\Models\User;
use Dotenv\Validator;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Hash;
use Symfony\Component\HttpFoundation\Response;

class AuthController extends Controller
{


    public function register(Request $request)
    {
        $validator = Validator($request->all(), [
            'name' => 'required|string|min:3|max:45',
            'email' => 'required|email|unique:users,email',
            'mobile' => 'required|numeric|unique:users,mobile|digits:8',
            'password' => 'required|string|min:3',
        ]);

        if (!$validator->fails()) {
            $user = new User();
            $user->name = $request->input('name');
            $user->email = $request->input('email');
            $user->mobile = $request->input('mobile');
            $user->password = Hash::make($request->input('password'));
            $isSaved = $user->save();
            return response()->json([
                'message' => Messages::getMessage($isSaved ? 'REGISTERED_SUCCESSFULLY' : 'REGISTRATION_FAILED'),
            ], $isSaved ? Response::HTTP_CREATED : Response::HTTP_BAD_REQUEST);
        } else {
            return response()->json(['message' => $validator->getMessageBag()->first()], Response::HTTP_BAD_REQUEST);
        }
    }
    public function login(Request $request)
    {
        if (!Auth::attempt($request->only('mobile', 'password')))
        {
            return response()
                ->json(['message' => 'Unauthorized'], 401);
        }

        $user = User::where('mobile', $request['mobile'])->firstOrFail();

        $token = $user->createToken('auth_token')->plainTextToken;

        return response()
            ->json(['message' => 'Hi '.$user->name.', welcome to Ihsan App','access_token' => $token, 'token_type' => 'Bearer', ]);
    }


    public function forgetPassword(Request $request)
    {
        $validator  = Validator($request->all(), [
            'email' =>'required|email|exists:users,email',
        ]);
        if(!$validator->fails()) {
            $user = User::where('email',$request->input('email'))->first();
            $authCode = random_int(1000,9999); // 4  digit code
            $user->auth_code = Hash::make($authCode);
            $isSaved = $user->save();
            return response()->json(
                [
                'status' =>$isSaved,
                'message' => $isSaved ? 'Reset code sent successfully' :' Failed to send reset code !',
                'code'   => $authCode,// just for test
            ], $isSaved ? Response::HTTP_OK : Response::HTTP_BAD_REQUEST
        );


        } else {
            return response()->json(['message' => $validator->getMessageBag()->first()], Response::HTTP_BAD_REQUEST);
        }
    }


    public function resetPassword(Request $request)
    {
        $validator = Validator($request->all(), [
            'email' => 'required|email|exists:users,email',
            'auth_code' => 'required|numeric|digits:4',
            'password' => 'required|string|min:3|max:15|confirmed'
        ]);

        if (!$validator->fails()) {
            $user = User::where('email', '=', $request->input('email'))->first();
            if (!is_null($user->auth_code)) {
                if (Hash::check($request->input('auth_code'), $user->auth_code)) {
                    $user->password = Hash::make($request->input('password'));
                    $user->auth_code = null;
                    $isSaved = $user->save();
                    return response()->json(
                        [
                            'status' => $isSaved,
                            'message' => Messages::getMessage($isSaved ? 'RESET_PASSWORD_SUCCESS' : 'RESET_PASSWORD_FAILED'),
                        ],
                        $isSaved ? Response::HTTP_OK : Response::HTTP_BAD_REQUEST
                    );
                } else {
                    return response()->json([
                        'status' => false,
                        'message' => Messages::getMessage('AUTH_CODE_ERROR')
                    ], Response::HTTP_BAD_REQUEST);
                }
            } else {
                return response()->json([
                    'status' => false,
                    'message' => Messages::getMessage('NO_PASSWORD_RESET_CODE')
                ], Response::HTTP_BAD_REQUEST);
            }
        } else {
            return response()->json([
                'message' => $validator->getMessageBag()->first()
            ], Response::HTTP_BAD_REQUEST);
        }
    }


    public function logout(Request $request)
    {
        $token = $request->user('user-api')->token();
        $revoked = $token->revoke();
        return response()->json([
            'status' => $revoked,
            'message' => Messages::getMessage($revoked ? 'LOGGED_OUT_SUCCESSFULLY' : 'LOGGED_OUT_FAILED'),
        ]);
    }



}
