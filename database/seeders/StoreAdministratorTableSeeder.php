<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class StoreAdministratorTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table( 'store_administrators' ) -> insert(
        [
            "resource_id"       =>  hexdec( uniqid() ),
            "store_resource_id" =>  "8572852475",

            "email"             =>  "billyston@gmail.com",
            "password"          =>  bcrypt( 'password123' ),

            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);
        DB::table( 'store_administrators' ) -> insert(
        [
            "resource_id"       =>  hexdec( uniqid() ),
            "store_resource_id" =>  "8574525262644",

            "email"             =>  "billyston@yahoo.com",
            "password"          =>  bcrypt( 'password123' ),

            "created_at"        => date("Y-m-d H:i:s"),
            "updated_at"        => date("Y-m-d H:i:s"),
        ]);
    }
}
