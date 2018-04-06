<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(User::class, 1)->create()->each(function ($u) {
            $u->name = env('ADMIN_NAME', false);
            $u->surname = env('ADMIN_SURNAME', false);
            $u->email = env('ADMIN_EMAIL', false);
            $u->password= Hash::make(env('ADMIN_PASS', false));
            $u->type = env('ADMIN_TYPE', false);
            $u->save();
        });

        factory(User::class, 100)->create()->each(function ($u) {
            $u->save();
        });
    }
}
