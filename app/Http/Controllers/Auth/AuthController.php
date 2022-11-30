<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Symfony\Component\HttpFoundation\Response;

class AuthController extends Controller
{
    public function login(Request $request)
    {
        $user = User::query()->where('cpf', request('cpf'))->first();

        if(Hash::check(request('password'), $user->password)) {
            return response()->json(
                 $user->createToken('API TOKEN')
            );
        }

        return response()->json([
            'error' => 'Invalid credentials'
        ], Response::HTTP_BAD_REQUEST);
    }
}
