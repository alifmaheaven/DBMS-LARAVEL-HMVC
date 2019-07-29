<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use JWTAuth;
use Tymon\JWTAuth\Exceptions\JWTException;

class UserController extends Controller
{
    public function authenticate(Request $request)
        {
            $credentials = array('user_email' => $request->user_email, 
                                'password' => $request->user_password);

            

            try {
                if (! $token = JWTAuth::attempt($credentials)) {
                    return response()->json(['error' => 'invalid_credentials'], 400);
                }
            } catch (JWTException $e) {
                return response()->json(['error' => 'could_not_create_token'], 500);
            }

            

            return response()->json(['token' => $token,
                                    'type' => 'Bearer',
                                    'header' => 'Authorization']);
        }

        // public function register(Request $request)
        // {
        //         $validator = Validator::make($request->all(), [
        //         'user_name' => 'required|string|max:255',
        //         'user_email' => 'required|string|email|max:255|unique:users',
        //         'user_password' => 'required|string|min:6',
        //     ]);

        //     if($validator->fails()){
        //             return response()->json($validator->errors()->toJson(), 400);
        //     }

        //     $user = User::create([
        //         'user_name' => $request->get('user_name'),
        //         'user_email' => $request->get('user_email'),
        //         'user_password' => Hash::make($request->get('user_password')),
        //     ]);

        //     $token = JWTAuth::fromUser($user);

        //     return response()->json(compact('user','token'),201);
        // }

        public function test(){
            return response()->json(['bisa' => 'iya']);

        }

        public function getAuthenticatedUser()
            {
                    try {

                            if (! $user = JWTAuth::parseToken()->authenticate()) {
                                    return response()->json(['user_not_found'], 404);
                            }

                    } catch (Tymon\JWTAuth\Exceptions\TokenExpiredException $e) {

                            return response()->json(['token_expired'], $e->getStatusCode());

                    } catch (Tymon\JWTAuth\Exceptions\TokenInvalidException $e) {

                            return response()->json(['token_invalid'], $e->getStatusCode());

                    } catch (Tymon\JWTAuth\Exceptions\JWTException $e) {

                            return response()->json(['token_absent'], $e->getStatusCode());

                    }

                    return response()->json(compact('user'));
            }
}
