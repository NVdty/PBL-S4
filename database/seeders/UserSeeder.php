<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::Create([
            'name' => 'Admin',
            'role_id' => '1',
            'email' => 'admin@admin.com',
            'password' => Hash::make('password'),
        ]);

        User::Create([
            'name' => 'Aditya Eka Pratama',
            'role_id' => '2',
            'email' => 'user1@gmail.com',
            'password' => Hash::make('password'),
        ]);

        User::Create([
            'name' => 'Aji Nur Prasetyo',
            'role_id' => '2',
            'email' => 'user2@gmail.com',
            'password' => Hash::make('password'),
        ]);

        User::Create([
            'name' => 'At Tafani Fillah',
            'role_id' => '2',
            'email' => 'user3@gmail.com',
            'password' => Hash::make('password'),
        ]);
        User::Create([
            'name' => 'Clarissa Monique Maharani',
            'role_id' => '2',
            'email' => 'user4@gmail.com',
            'password' => Hash::make('password'),
        ]);
        User::Create([
            'name' => 'Faiz Nesa Aulia Noor',
            'role_id' => '2',
            'email' => 'user5@gmail.com',
            'password' => Hash::make('password'),
        ]);
        User::Create([
            'name' => 'Firdaus Anesta Surya',
            'role_id' => '2',
            'email' => 'user6@gmail.com',
            'password' => Hash::make('password'),
        ]);
        User::Create([
            'name' => 'Imam Muhyiddin',
            'role_id' => '2',
            'email' => 'user7@gmail.com',
            'password' => Hash::make('password'),
        ]);
        User::Create([
            'name' => 'Muhamad Eko Alfianto',
            'role_id' => '2',
            'email' => 'user8@gmail.com',
            'password' => Hash::make('password'),
        ]);
        User::Create([
            'name' => 'Nova Aditya',
            'role_id' => '2',
            'email' => 'user9@gmail.com',
            'password' => Hash::make('password'),
        ]);
        User::Create([
            'name' => 'Yudha Satria Abdi Susila',
            'role_id' => '2',
            'email' => 'user10@gmail.com',
            'password' => Hash::make('password'),
        ]);
        User::Create([
            'name' => 'Alfian Yuda Syahputra',
            'role_id' => '2',
            'email' => 'user11@gmail.com',
            'password' => Hash::make('password'),
        ]);
        User::Create([
            'name' => 'Asa Atina Zarra',
            'role_id' => '2',
            'email' => 'user12@gmail.com',
            'password' => Hash::make('password'),
        ]);
        User::Create([
            'name' => 'Arsyad Abdulghani Asrori',
            'role_id' => '2',
            'email' => 'user13@gmail.com',
            'password' => Hash::make('password'),
        ]);

        User::Create([
            'name' => 'Dionisus Lucky Noviantoro',
            'role_id' => '2',
            'email' => 'user14@gmail.com',
            'password' => Hash::make('password'),
        ]);
        User::Create([
            'name' => 'Jidar Titahjaya',
            'role_id' => '2',
            'email' => 'user15@gmail.com',
            'password' => Hash::make('password'),
        ]);
        User::Create([
            'name' => 'Kanca Dwi Sulistiyo',
            'role_id' => '2',
            'email' => 'user16@gmail.com',
            'password' => Hash::make('password'),
        ]);
        User::Create([
            'name' => 'Muhamad Angga Ferdyan',
            'role_id' => '2',
            'email' => 'user17@gmail.com',
            'password' => Hash::make('password'),
        ]);
        User::Create([
            'name' => 'Naufal Indra Permada',
            'role_id' => '2',
            'email' => 'user18@gmail.com',
            'password' => Hash::make('password'),
        ]);
        User::Create([
            'name' => 'Sarah Gracia Kapite',
            'role_id' => '2',
            'email' => 'user19@gmail.com',
            'password' => Hash::make('password'),
        ]);
        User::Create([
            'name' => 'Samuel Thomas Latekay',
            'role_id' => '2',
            'email' => 'user20@gmail.com',
            'password' => Hash::make('password'),
        ]);
        User::Create([
            'name' => 'Uun Saifudin',
            'role_id' => '2',
            'email' => 'user21@gmail.com',
            'password' => Hash::make('password'),
        ]);
    }
}
