<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Department;
use App\Models\Status;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        Department::factory()->create(['name' => 'Department 1']);

        User::factory()->create([
            'id'         => 1,
            'first_name' => 'Og',
            'last_name'  => 'Bassey',
            'email'      => 'ask4rapzo@gmail.com'
        ])->appointments()->create(['id' => 1, 'department_id' => 1])->update(['created_by' => 1]);

        User::factory()->create([
            'id'         => 2,
            'first_name' => 'Ogar',
            'last_name'  => 'Job',
            'email'      => 'ogarjobbassey@gmail.com',
            'phone'      => '08126012460',
        ])->update(['created_by' => 1]);

        Status::factory()->create(['name' => 'Confirmed', 'sequence' => 1])->update(['created_by' => 1]);

        Status::factory()->create(['name' => 'In-progress', 'sequence' => 2])->update(['created_by' => 1]);

        Status::factory()->create(['name' => 'Cancelled', 'sequence' => 3,])->update(['created_by' => 1]);

        Status::factory()->create(['name' => 'Completed', 'sequence' => 4])->update(['created_by' => 1]);

    }
}
