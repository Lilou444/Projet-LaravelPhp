<?php

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use App\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         $role1 = Role::create(['name' => 'compagny']);
         $role2 = Role::create(['name' => 'student']);
        //$permission1= Permission::create(['name' => 'add job']);
        //$permission2 = Permission::create(['name' => 'delete job']);
        //$permission3 = Permission::create(['name' => 'postulant']);

        $student = Role::findByName("student");
        $compagny = Role::findByName('compagny');



        factory(User::class, 1)->create()->each(function ($user) {
            $user-> assignRole('compagny');


        });

        factory(User::class, 10)->create()->each(function ($user) {
            $user-> assignRole('student');



        });

    }
}
