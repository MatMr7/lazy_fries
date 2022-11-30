<?php

namespace App\Http\Controllers\Transportadora;

use App\Http\Controllers\Controller;
use App\Http\Requests\Transportadora\UserRequest;
use App\Models\Role;
use App\Models\User;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class MotoristaController extends Controller
{
    public function index()
    {
        return User::query()->where('role_id', Role::DRIVER)->paginate();
    }

    public function store(UserRequest $request)
    {
        $motorista = User::query()->create([
            'name' => request('name'),
            'password' => bcrypt(request('password')),
            'role_id' => Role::DRIVER,
            'cpf' => request('cpf')
        ]);

        return response()->json([
            'data' => $motorista
        ], Response::HTTP_CREATED);
    }

    public function update($userId)
    {

        User::query()->where('id', $userId)->update(array_filter([
            'name' => request('name'),
            'cpf' => request('cpf')
        ]));

        return response()->json([], Response::HTTP_NO_CONTENT);
    }

    public function destroy(User $user)
    {
        $user->delete();

        return response()->json([
            'data' => $user->refresh()
        ], Response::HTTP_NO_CONTENT);
    }

    public function show(User $user)
    {
        return response()->json([
            'data' => $user
        ], Response::HTTP_OK);
    }
}
