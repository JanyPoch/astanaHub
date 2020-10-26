<?php

namespace Database\Seeders;

use App\Models\Role;
use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [];
        foreach (Role::ROLES as $role){
            array_push($data, ['key' => $role, 'name' => $role, 'created_at' => Carbon::now()]);
        }
        DB::table('roles')->insert($data);
    }
}
