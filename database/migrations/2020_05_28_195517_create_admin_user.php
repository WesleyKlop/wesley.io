<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Carbon;

class CreateAdminUser extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        \App\User::create([
            'name' => 'Wesley',
            'email' => 'wesley19097@gmail.com',
            'email_verified_at' => Carbon::now(),
            'password' => \Illuminate\Support\Facades\Hash::make(env('ADMIN_PASSWORD', 'test')),
        ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        \App\User::query()->delete();
    }
}
