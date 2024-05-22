<?php

declare(strict_types=1);

namespace Booking\Auth\Actions;
use Booking\Auth\Http\Requests\RegisterUserRequest;
use Booking\Auth\Models\User;
use Illuminate\Support\Facades\Hash;

class CreateUserAction
{
    public function __invoke(RegisterUserRequest $request): User
    {
        return User::create([
            ...$request->validated(),
            'password' => Hash::make($request->password),
        ]);
    }
}
