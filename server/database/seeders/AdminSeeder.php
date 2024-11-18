<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\Admin;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $admin = new Admin();
        $admin->name = "Mai Văn Khải";
        $admin->email = "khaimen57@gmail.com";
        $admin->username = "khaimen57";
        $admin->password = Hash::make(123);
        $admin->phone = "0368193004";
        $admin->address = "Quận Gò Vấp, TP.HCM";
        $admin->roles = 1;
        $admin->gender = 1;
        $admin->save();

        echo "Them Admin thanh cong!";
    }
}
