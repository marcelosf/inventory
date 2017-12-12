<?php

namespace Inventory\Http\Controllers\Api\Auth;

use Illuminate\Http\Request;
use Inventory\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{

    public function __construct()
    {

        $this->middleware('auth:api', ['except' => ['login']]);

    }

    public function login(Request $request)
    {

        $credentials = $request->input();

        if ($token = $this->guard()->attempt($credentials)) {

            return $this->respondWithToken($token);

        }

        return response()->json(['error' => 'Unauthorized'], 401);

    }


    public function me()
    {

        return response()->json($this->guard()->user());

    }


    public function logout()
    {

        $this->guard()->logout();

        return response()->json(['message' => 'Successfully logged out']);

    }


    public function refresh()
    {

        return $this->respondWithToken($this->guard()->refresh());

    }


    protected function respondWithToken($token)
    {

        return response()->json([

            'access_token' => $token,

            'token_type' => 'bearer',

            'expires_in' => $this->guard()->factory()->getTTL() * 60

        ]);

    }

    public function guard()
    {

        return Auth::guard();

    }

}
