<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Store;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
//    DB::table('users')->insert([
//        'name' => 'Administrator',
//        'email' => 'admin@admin.com',
//        'email_verified_at' => now(),
//        'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
//        'remember_token' => 'okokoakasdasdsd'
//    ]);

        User::factory()->count(40)->create()->each(function ($user) {
            $user->store()->save(Store::factory()->make());
    });
    }
}
