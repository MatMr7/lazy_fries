<?php

namespace Tests;

use App\Models\User;
use Illuminate\Foundation\Testing\TestCase as BaseTestCase;

abstract class TestCase extends BaseTestCase
{
    use CreatesApplication;

    public function loginToken(User $user, $password =  'password')
    {
        $response = $this->post('/api/login', [
            'cpf' => $user->cpf,
            'password' => $password
        ]);

        return $response->json()['plainTextToken'];
    }
}
