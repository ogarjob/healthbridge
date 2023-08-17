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

        Department::factory()->create(['name' => 'ANAESTHESIOLOGY']);
        Department::factory()->create(['name' => 'AUDIOLOGIST']);
        Department::factory()->create(['name' => 'CARDIOLOGY']);
        Department::factory()->create(['name' => 'DENTISTRY']);
        Department::factory()->create(['name' => 'DERMATOLOGY']);
        Department::factory()->create(['name' => 'DIETETICS']);
        Department::factory()->create(['name' => 'ENDOCRINOLOGY']);
        Department::factory()->create(['name' => 'GASTROENTEROLOGY']);
        Department::factory()->create(['name' => 'HAEMATOLOGY']);
        Department::factory()->create(['name' => 'NEPHROLOGY']);
        Department::factory()->create(['name' => 'NEUROLOGY']);
        Department::factory()->create(['name' => 'OPHTHALMOLOGY']);
        Department::factory()->create(['name' => 'OPTOMETRY']);
        Department::factory()->create(['name' => 'ORTHODONTICS']);
        Department::factory()->create(['name' => 'ORTHOPAEDICS']);
        Department::factory()->create(['name' => 'PHYSIOTHERAPY']);
        Department::factory()->create(['name' => 'PSYCHIATRY']);
        Department::factory()->create(['name' => 'PULMONOLOGY']);
        Department::factory()->create(['name' => 'RHEUMATOLOGY']);
        Department::factory()->create(['name' => 'UROLOGY']);

        User::factory()->create([
            'id'         => 1,
            'first_name' => 'Ogar',
            'last_name'  => 'Job',
            'email'      => 'ask4rapzo@gmail.com'
        ])->appointments()->create(['id' => 1, 'department_id' => 1])->update(['created_by' => 1]);

        User::factory()->create([
            'id'         => 2,
            'first_name' => 'Joseph',
            'last_name'  => 'Bassey',
            'email'      => 'ogarjobbassey@gmail.com',
            'phone'      => '08126012460',
        ])->update(['created_by' => 1]);

        User::factory()->create([
            'id'         => 3,
            'first_name' => 'Samuel',
            'last_name'  => 'Mashok',
            'type'       => 'patient',
            'email'      => 'sammmash@gmail.com',
            'phone'      => '08126012678',
        ])->update(['created_by' => 1]);

        Status::factory()->create(['name' => 'Confirmed', 'sequence' => 1])->update(['created_by' => 1]);

        Status::factory()->create(['name' => 'In-progress', 'sequence' => 2])->update(['created_by' => 1]);

        Status::factory()->create(['name' => 'Cancelled', 'sequence' => 3,])->update(['created_by' => 1]);

        Status::factory()->create(['name' => 'Completed', 'sequence' => 4])->update(['created_by' => 1]);

    }
}
