<?php

namespace Database\Seeders;

use App\Models\Menu;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MenusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public $menus; 
    public function __construct()
    {
        $this->menus = [
            [
                'name'=>'Dashboard','slug'=>'dashborard','route'=>'dashboard',
                'icon'=>'bx bxs-home','parent'=>'0','order'=>'0','enabled'=>'1','admin'=>'0'
            ],            
            [
                'name'=>'Vehicles','slug'=>'admin/vehicles','route'=>'admin.vehicles',
                'icon'=>'bx bxs-truck','parent'=>'0','order'=>'0','enabled'=>'1','admin'=>'1'
            ],
            [
                'name'=>'Admin User','slug'=>'admin/user','route'=>'admin.users',
                'icon'=>'bx bx-shield-quarter','parent'=>'0','order'=>'1','enabled'=>'1','admin'=>'1'
            ],
            [
                'name'=>'Permissions','slug'=>'admin/permissions','route'=>'admin.permissions',
                'icon'=>'bx bx-check-shield','parent'=>'3','order'=>'1','enabled'=>'1','admin'=>'1'
            ],
            [
                'name'=>'Roles','slug'=>'admin/roles','route'=>'admin.roles',
                'icon'=>'bx bxs-user-detail','parent'=>'3','order'=>'2','enabled'=>'1','admin'=>'1'
            ],
            [
                'name'=>'Users','slug'=>'admin/users','route'=>'admin.users',
                'icon'=>'bx bx-user-pin','parent'=>'3','order'=>'3','enabled'=>'1','admin'=>'1'
            ]
        ];
    }
    public function run(): void
    {
        foreach ($this->menus as $menu) {            
            Menu::create($menu);       
        }
        // $this->call([PermissionSeeder::class,RoleSeeder::class,UsersSeeder::class]);        
    }
}
