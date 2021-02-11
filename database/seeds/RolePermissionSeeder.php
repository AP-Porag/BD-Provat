<?php

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class RolePermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Create Role

        $roleSupperAdmin = Role::create(['name' => 'supper-admin']);
        $roleAdmin = Role::create(['name' => 'admin']);
        $roleChiefEditor = Role::create(['name' => 'chief-editor']);
        $roleActingChiefEditor = Role::create(['name' => 'acting-chief-editor']);
        $roleActingEditor = Role::create(['name' => 'acting-editor']);
        $roleExecutiveEditor = Role::create(['name' => 'executive-editor']);
        $roleEditor = Role::create(['name' => 'editor']);
        $roleNewsInCharge = Role::create(['name' => 'news-in-charge']);
        $roleReporter = Role::create(['name' => 'reporter']);
        $roleStaffReporter = Role::create(['name' => 'staff-reporter']);
        $roleJournalist = Role::create(['name' => 'journalist']);
        $roleSubscriber = Role::create(['name' => 'subscriber']);
        //Permission list as array
        $permissions = [
            //Admin permission
            [
                'group_id'=>'1',
                'permissions'=>[
                    'dashboard-settings',
                    'dashboard'
                ]
            ],
            //Role permission
            [
                'group_id'=>'2',
                'permissions'=>[
                    'user-settings',
                    'user-list',
                    'user-edit',
                    'user-soft-delete',
                    'user-assign-role',
                    'user-assign-permission',
                    'role-edit',
                    'role-delete',
                ]
            ],
            //dashboard
            [
                'group_id'=>'3',
                'permissions'=>[
                    'post-settings',
                    'post-list',
                    'add-post',
                    'view-post',
                    'edit-post',
                    'delete-post',
                    'comment-approval',
                    'give-reply',
                ]
            ],
            //Profile permission
            [
                'group_id'=>'4',
                'permissions'=>[
                    'category-settings',
                    'category-list',
                    'add-category',
                    'edit-category',
                    'delete-category',
                ]
            ],
            //blog permission
            [
                'group_id'=>'5',
                'permissions'=>[
                    'subcategory-settings',
                    'subcategory-list',
                    'add-subcategory',
                    'edit-subcategory',
                    'delete-subcategory',
                ]
            ],
            [
                'group_id'=>'6',
                'permissions'=>[
                    'tag-settings',
                    'tag-list',
                    'add-tag',
                    'edit-tag',
                    'delete-tag',
                ]
            ],
            [
                'group_id'=>'7',
                'permissions'=>[
                    'author-settings',
                    'author'
                ]
            ],
            [
                'group_id'=>'8',
                'permissions'=>[
                    'subscriber-settings',
                    'subscriber-info'
                ]
            ],
            [
                'group_id'=>'9',
                'permissions'=>[
                    'advertisement-settings',
                    'advertisement'
                ]
            ],


        ];
        //Create and Assign Permissions

        for ($i=0; $i<count($permissions); $i++){

            $permissionGroup = $permissions[$i]['group_id'];

            for ($j=0; $j<count($permissions[$i]['permissions']); $j++){

                $permission = Permission::create(['name' => $permissions[$i]['permissions'][$j],'group_id'=>$permissionGroup]);

                //create permission for supper-admin
                $roleSupperAdmin->givePermissionTo($permission);
                $permission->assignRole($roleSupperAdmin);

                //creating permission for admin
                $roleAdmin->givePermissionTo($permission);
                $permission->assignRole($roleAdmin);
            }

        }
    }
}
