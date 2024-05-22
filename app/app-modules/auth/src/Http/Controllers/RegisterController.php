<?php

declare(strict_types=1);

namespace Booking\Auth\Http\Controllers;

use Booking\Auth\Actions\CreateUserAction;
use Booking\Auth\Http\Requests\RegisterUserRequest;
use Illuminate\Http\JsonResponse;

class RegisterController
{
    public function __invoke(RegisterUserRequest $request, CreateUserAction $createUser): JsonResponse
    {
        $user = $createUser($request);

        return response()->json([
            'access_token' => $user->createToken('client')->plainTextToken,
        ]);
    }
}
