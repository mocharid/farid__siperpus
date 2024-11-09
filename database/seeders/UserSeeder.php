<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::factory()->create([
            'name' => 'pustakawan',
            'email' => 'pustakawan@unsur.ad.id',
        ])
        ->assignRole('pustakawan')
        ->givePermissionTo(['edit_book','edit_user']);

        User::factory()->create([
            'name' => 'mahasiswa',
            'email' => 'mahasiswa@unsur.ad.id',
        ])->assignRole('mahasiswa')
        ->givePermissionTo(['view_book']);
    }
}
