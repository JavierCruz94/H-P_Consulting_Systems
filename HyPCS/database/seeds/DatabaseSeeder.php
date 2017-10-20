<?php

use Illuminate\Database\Seeder;
use App\User;
use App\Period;
use App\Admin;
use App\Consultant;
use App\Customer;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Create users

        User::create([
            'username' => 'admin1',
            'password' => bcrypt('root'),
            'email' =>'admin1@gmail.com',
            'role' => 'admin'
        ]);

        User::create([
            'username' => 'consult1',
            'password' => bcrypt('root'),
            'email' => 'consult1@gmail.com',
            'role' => 'consultant',
            'created_at' => date("Y/m/d")
        ]);

        User::create([
            'username' => 'client1',
            'password' => bcrypt('root'),
            'email' => 'client1@gmail.com',
            'role' => 'customer',
            'created_at' => date("Y/m/d")
        ]);

        User::create([
            'username' => 'admin2',
            'password' => bcrypt('root'),
            'email' => 'admin2@gmail.com',
            'role' => 'admin',
            'created_at' => date("Y/m/d")
        ]);

        User::create([
            'username' => 'consult2',
            'password' => bcrypt('root'),
            'email' => 'consult2@gmail.com',
            'role' => 'consultant',
            'created_at' => date("Y/m/d")
        ]);

        User::create([
            'username' => 'client2',
            'password' => bcrypt('root'),
            'email' => 'client2@gmail.com',
            'role' => 'customer',
            'created_at' => date("Y/m/d")
        ]);

        User::create([
            'username' => 'admin3',
            'password' => bcrypt('root'),
            'email' => 'admin3@gmail.com',
            'role' => 'admin',
            'created_at' => date("Y/m/d")
        ]);

        User::create([
            'username' => 'consult3',
            'password' => bcrypt('root'),
            'email' => 'consult3@gmail.com',
            'role' => 'consultant',
            'created_at' => date("Y/m/d")
        ]);

        User::create([
            'username' => 'client3',
            'password' => bcrypt('root'),
            'email' => 'client3@gmail.com',
            'role' => 'customer',
            'created_at' => date("Y/m/d")
        ]);

        //Create admins
        Admin::create([
            'id_admin' => 1,
            'firstname' => 'Hector',
            'lastname' => 'Cruz Admin',
            'registeredBy' => 1,
            'created_at' => date("Y/m/d")
        ]);

        DB::table('admins')->insert([
            'id_admin' => 4,
            'firstname' => 'Admin2',
            'lastname' => 'Admin2',
            'registeredBy' => 1,
            'created_at' => date("Y/m/d")
        ]);

        DB::table('admins')->insert([
            'id_admin' => 7,
            'firstname' => 'Admin3',
            'lastname' => 'Admin3',
            'registeredBy' => 1,
            'created_at' => date("Y/m/d")
        ]);

        //Create consultants
        DB::table('consultants')->insert([
            'id_consultant' => 2,
            'firstname' => 'Cons1',
            'lastname' => 'Cons1',
            'level' => 'master',
            'registeredBy' => 1,
            'created_at' => date("Y/m/d")
        ]);

        DB::table('consultants')->insert([
            'id_consultant' => 5,
            'firstname' => 'Cons2',
            'lastname' => 'Cons2',
            'level' => 'novice',
            'registeredBy' => 1,
            'created_at' => date("Y/m/d")
        ]);

        DB::table('consultants')->insert([
            'id_consultant' => 8,
            'firstname' => 'Cons3',
            'lastname' => 'Cons3',
            'level' => 'intermediate',
            'registeredBy' => 1,
            'created_at' => date("Y/m/d")
        ]);

        //Create customers
        DB::table('customers')->insert([
            'id_customer' => 3,
            'code' => 'CT1',
            'name' => 'Customer Test 1',
            'registeredBy' => 1,
            'created_at' => date("Y/m/d")
        ]);

        DB::table('customers')->insert([
            'id_customer' => 6,
            'code' => 'CT2',
            'name' => 'Customer Test 2',
            'registeredBy' => 1,
            'created_at' => date("Y/m/d")
        ]);

        DB::table('customers')->insert([
            'id_customer' => 9,
            'code' => 'CT3',
            'name' => 'Customer Test 3',
            'registeredBy' => 1,
            'created_at' => date("Y/m/d")
        ]);
    }
}