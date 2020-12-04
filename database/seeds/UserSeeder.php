<?php

use Illuminate\Database\Seeder;
use App\User;
use App\Permission\Models\Role;
use App\Permission\Models\Permission;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //truncate tables
        DB::statement("SET foreign_key_checks=0");
            DB::table('role_user')->truncate();
            DB::table('permission_role')->truncate();
            Permission::truncate();
            Role::truncate();
        DB::statement("SET foreign_key_checks=1");



        //user admin

        $useradmin= User::where('email','admin@admin.com')->first();
        if ($useradmin) {
            $useradmin->delete();
        }
        $useradmin= User::create([
            'name'      => 'admin',
            'email'     => 'admin@admin.com',
            'rol'       => 'Admin',
            'adscripcion'=> 'Administrador',
            'password'  => Hash::make('admin')
        ]);

        //rol admin
        $roladmin=Role::create([
            'name' => 'Admin',
            'slug' => 'admin',
            'description' => 'Administrator',
            'full-access' => 'yes'

        ]);

        //rol investigador
        $roleinve=Role::create([
          'name' => 'Investigador',
          'slug' => 'investigador',
          'description' => 'Profesor/Investigador',
          'full-access' => 'no'
        ]);

        //rol DEFOINVE
        $roledefoinve=Role::create([
          'name' => 'Defoinve',
          'slug' => 'defoinve',
          'description' => 'Departamento de fomento a la investigacion ',
          'full-access' => 'no'
        ]);

        //rol direccion de investigacion
        $roleinve=Role::create([
          'name' => 'Direccion de Investigacion',
          'slug' => 'di',
          'description' => 'Direccion de investigacion',
          'full-access' => 'no'
        ]);

        //rol Direccion General (DGIP)
        $roleinve=Role::create([
          'name' => 'DGIP',
          'slug' => 'dgip',
          'description' => 'Direcion General de investigacion y posgrado',
          'full-access' => 'no'
        ]);

        //table role_user
        $useradmin->roles()->sync([ $roladmin->id ]);


        //permission
        $permission_all = [];


        //permission role
        $permission = Permission::create([
            'name' => 'List role',
            'slug' => 'role.index',
            'description' => 'A user can list role',
        ]);

        $permission_all[] = $permission->id;

        $permission = Permission::create([
            'name' => 'Show role',
            'slug' => 'role.show',
            'description' => 'A user can see role',
        ]);

        $permission_all[] = $permission->id;

        $permission = Permission::create([
            'name' => 'Create role',
            'slug' => 'role.create',
            'description' => 'A user can create role',
        ]);

        $permission_all[] = $permission->id;

        $permission = Permission::create([
            'name' => 'Edit role',
            'slug' => 'role.edit',
            'description' => 'A user can edit role',
        ]);

        $permission_all[] = $permission->id;

        $permission = Permission::create([
            'name' => 'Destroy role',
            'slug' => 'role.destroy',
            'description' => 'A user can destroy role',
        ]);

        $permission_all[] = $permission->id;




        //permission user
        $permission = Permission::create([
            'name' => 'List user',
            'slug' => 'user.index',
            'description' => 'A user can list user',
        ]);

        $permission_all[] = $permission->id;

        $permission = Permission::create([
            'name' => 'Show user',
            'slug' => 'user.show',
            'description' => 'A user can see user',
        ]);

        $permission_all[] = $permission->id;

        $permission = Permission::create([
            'name' => 'Edit user',
            'slug' => 'user.edit',
            'description' => 'A user can edit user',
        ]);

        $permission_all[] = $permission->id;

        $permission = Permission::create([
            'name' => 'Destroy user',
            'slug' => 'user.destroy',
            'description' => 'A user can destroy user',
        ]);

        $permission_all[] = $permission->id;


        //new
        $permission = Permission::create([
            'name' => 'Show own user',
            'slug' => 'userown.show',
            'description' => 'A user can see own user',
        ]);

        $permission_all[] = $permission->id;

        $permission = Permission::create([
            'name' => 'Edit own user',
            'slug' => 'userown.edit',
            'description' => 'A user can edit own user',
        ]);
        $permission_all[] = $permission->id;

        $permission = Permission::create([
            'name' => 'Delete own user',
            'slug' => 'userown.destroy',
            'description' => 'A user can destroy own user',
        ]);
        $permission_all[] = $permission->id;

        //permission application latter
        $permission = Permission::create([
            'name' => 'List latter',
            'slug' => 'latter.index',
            'description' => 'A user can list latters',
        ]);

        $permission_all[] = $permission->id;

        $permission = Permission::create([
            'name' => 'Show latter',
            'slug' => 'latter.show',
            'description' => 'A user can view latters',
        ]);

        $permission_all[] = $permission->id;

        /*$permission = Permission::create([
            'name' => 'Create latter',
            'slug' => 'latter.create',
            'description' => 'A user can create a latters',
        ]);

        $permission_all[] = $permission->id;

        $permission = Permission::create([
            'name' => 'Edit latter',
            'slug' => 'latter.edit',
            'description' => 'A user can edit latters',
        ]);

        $permission_all[] = $permission->id;

        $permission = Permission::create([
            'name' => 'Destroy latter',
            'slug' => 'latter.destroy',
            'description' => 'A user can destroy a latter',
        ]);

        $permission_all[] = $permission->id; */

        //permission own application latter
        $permission = Permission::create([
            'name' => 'List own latter',
            'slug' => 'latterrown.index',
            'description' => 'A user can list own latter',
        ]);

        $permission_all[] = $permission->id;

        $permission = Permission::create([
            'name' => 'Show own latter',
            'slug' => 'latterrown.show',
            'description' => 'A user can see own latter',
        ]);

        $permission_all[] = $permission->id;

        $permission = Permission::create([
            'name' => 'Create own latter',
            'slug' => 'latterown.create',
            'description' => 'A user can create own latters',
        ]);

        $permission_all[] = $permission->id;

        $permission = Permission::create([
            'name' => 'Edit own latter',
            'slug' => 'latterown.edit',
            'description' => 'A user can edit own latter',
        ]);

        $permission_all[] = $permission->id;

        $permission = Permission::create([
            'name' => 'Destroy own latter',
            'slug' => 'latterrown.destroy',
            'description' => 'A user can destroy own latter',
        ]);

        $permission_all[] = $permission->id;
        /*$permission = Permission::create([
            'name' => 'Create user',
            'slug' => 'user.create',
            'description' => 'A user can create user',
        ]);

        $permission_all[] = $permission->id;
        */

        //table permission_role
        //$roladmin->permissions()->sync( $permission_all);

    }
}
