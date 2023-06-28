<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;

class PermissionTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $permissions=[
            'role_list',
            'role_create',
            'role_edit',
            'role_delete',
            'permission_list',
            'permission_create',
            'permission_edit',
            'permission_delete',
            'ipt_create',
            'ipt_edit',
            'ipt_delete',
            'manage','manage_ipt','student','admin_dashboard','hr_dashboard','student_dashboard'
        ];
       foreach ($permissions as $permission) {
             Permission::create(['name' => $permission]);
        }
    }
}
