<?php

use Illuminate\Database\Seeder;
use App\User;
use App\Period;

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
        DB::table('users')->insert([
            'username' => 'admin1',
            'password' => bcrypt('root'),
            'email' => 'admin1@gmail.com',
            'role' => 'admin',
            'created_at' => date("Y/m/d")
        ]);

        DB::table('users')->insert([
            'username' => 'consult1',
            'password' => bcrypt('root'),
            'email' => 'consult1@gmail.com',
            'role' => 'consultant',
            'created_at' => date("Y/m/d")
        ]);

        DB::table('users')->insert([
            'username' => 'client1',
            'password' => bcrypt('root'),
            'email' => 'client1@gmail.com',
            'role' => 'customer',
            'created_at' => date("Y/m/d")
        ]);

        DB::table('users')->insert([
            'username' => 'admin2',
            'password' => bcrypt('root'),
            'email' => 'admin2@gmail.com',
            'role' => 'admin',
            'created_at' => date("Y/m/d")
        ]);

        DB::table('users')->insert([
            'username' => 'consult2',
            'password' => bcrypt('root'),
            'email' => 'consult2@gmail.com',
            'role' => 'consultant',
            'created_at' => date("Y/m/d")
        ]);

        DB::table('users')->insert([
            'username' => 'client2',
            'password' => bcrypt('root'),
            'email' => 'client2@gmail.com',
            'role' => 'customer',
            'created_at' => date("Y/m/d")
        ]);

        DB::table('users')->insert([
            'username' => 'admin3',
            'password' => bcrypt('root'),
            'email' => 'admin3@gmail.com',
            'role' => 'admin',
            'created_at' => date("Y/m/d")
        ]);

        DB::table('users')->insert([
            'username' => 'consult3',
            'password' => bcrypt('root'),
            'email' => 'consult3@gmail.com',
            'role' => 'consultant',
            'created_at' => date("Y/m/d")
        ]);

        DB::table('users')->insert([
            'username' => 'client3',
            'password' => bcrypt('root'),
            'email' => 'client3@gmail.com',
            'role' => 'customer',
            'created_at' => date("Y/m/d")
        ]);

        //Create admins
        DB::table('admins')->insert([
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

        //Create Request
        DB::table('request')->insert([
            'id_customer' => 3,
            'id_admin' => 1,
            'id_consultant' => null,
            'schedule' => false,
            'subject' => 'Limpieza Equipo',
            'description' => 'Esta muy sucio',
            'importance' => 'Baja',
            'date_created' => date("2017/01/01"),
            'deadline' => date("2017/12/31"),
            'solved' => false
        ]);

        DB::table('request')->insert([
            'id_customer' => 3,
            'id_admin' => 1,
            'id_consultant' => null,
            'schedule' => false,
            'subject' => 'Impresora no Sirve',
            'description' => 'No imprime',
            'importance' => 'Media',
            'date_created' => date("2017/02/01"),
            'deadline' => date("2017/11/29"),
            'solved' => false
        ]);

        DB::table('request')->insert([
            'id_customer' => 9,
            'id_admin' => 1,
            'id_consultant' => null,
            'schedule' => false,
            'subject' => 'Computadora no Sirve',
            'description' => 'No prende',
            'importance' => 'Alta',
            'date_created' => date("2017/03/01"),
            'deadline' => date("2017/10/28"),
            'solved' => false
        ]);
    }
}