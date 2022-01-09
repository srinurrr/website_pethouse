<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Inputan;//model table users
use Illuminate\Support\Facades\Hash;
use Illuminate\Foundation\Auth\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $inputan['name'] = 'Sri Nuraeni';
        $inputan['email'] = 'srinuraeni430@gmail.com';//ganti pake emailmu
        $inputan['password'] = Hash::make('123258');//passwordnya 123258
        $inputan['phone'] = '088802017718';
        $inputan['alamat'] = 'Pasireungit Tonggoh Rt 02 Rw 01';
        $inputan['role'] = 'admin';//kita akan membuat akun atau users in dengan role admin
        User::create($inputan);

    }
}
