<?php

namespace Tests\Feature;

use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;
use Tests\TestCase;

class RoleTest extends TestCase
{
    use RefreshDatabase;
    /**
     * A basic feature test example.
     */
    public function test_admin_can_assign_role_to_user()
    {
        $role = Role::create(['name' => 'admin']);
        $user = User::factory()->create();

        $user->assignRole('admin');

        $this->assertTrue($user->hasRole('admin'));
    }

    public function test_user_with_permission_can_access_restricted_route()
    {
        $role = Role::create(['name' => 'editor']);
        $permission = Permission::create(['name' => 'edit articles']);

        $role->givePermissionTo($permission);

        $user = User::factory()->create();
        $user->assignRole('editor');

        $this->assertTrue($user->can('edit articles'));
    }
}
