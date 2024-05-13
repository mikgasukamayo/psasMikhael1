<?php

namespace Database\Seeders;

use App\Models\Outlet;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class OutletsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Outlet::create([
            'code' => Str::random(),
            'name' => 'Dimas Alvan',
            'status' => 'selesai',
            'address' => 'Bojong Gede',
            'phone' => '08778668888',
        ]);

        Outlet::create([
            'code' => Str::random(),
            'name' => 'Bredsten',
            'status' => 'Berlangsung',
            'address' => 'Sentul',
            'phone' => '089877899087',
        ]);

        Outlet::create([
            'code' => Str::random(),
            'name' => 'Ageng Cahyo',
            'status' => 'selesai',
            'address' => 'Cibinong',
            'phone' => '098789797654',
        ]);

        Outlet::create([
            'code' => Str::random(),
            'name' => 'Ahmad Zaky',
            'status' => 'berlangsung',
            'address' => 'Depok',
            'phone' => '089876574534',
        ]);

        Outlet::create([
            'code' => Str::random(),
            'name' => 'Weka Budi',
            'status' => 'selesai',
            'address' => 'Sukahati',
            'phone' => '078797687676',
        ]);
    }
}