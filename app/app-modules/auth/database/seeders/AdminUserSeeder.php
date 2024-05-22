<?php

declare(strict_types=1);

namespace Booking\Auth\Database\Seeders;

use Booking\Auth\Models\User;
use Illuminate\Database\Seeder;

class AdminUserSeeder extends Seeder
{
    public function run(): void
    {
        User::create([
            'name' => 'Administrator',
            'email' => 'superadmin@booking.com',
            'password' => bcrypt('password'),
            'email_verified_at' => now(),
            'role_id' => 1, // Administrator
        ]);
    }
}
