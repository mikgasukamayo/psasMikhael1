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
            'name' => 'Rafael Delano',
            'status' => 'selesai',
            'address' => 'Bogor',
            'phone' => '08778664440',
        ]);

        Outlet::create([
            'code' => Str::random(),
            'name' => 'Abang',
            'status' => 'Berlangsung',
            'address' => 'Sentul',
            'phone' => '08987740222',
        ]);

        Outlet::create([
            'code' => Str::random(),
            'name' => 'Zaky Ahmad',
            'status' => 'selesai',
            'address' => 'Cibinong',
            'phone' => '098789033320',
        ]);

        Outlet::create([
            'code' => Str::random(),
            'name' => 'Akhtar',
            'status' => 'berlangsung',
            'address' => 'Depok',
            'phone' => '0898763330',
        ]);

        Outlet::create([
            'code' => Str::random(),
            'name' => 'Fahmi Faisal',
            'status' => 'selesai',
            'address' => 'Sukahati',
            'phone' => '078797423400',
        ]);
    }
}
