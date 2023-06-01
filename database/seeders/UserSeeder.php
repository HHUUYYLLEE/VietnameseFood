<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
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
        $users = [
            [
                'name' => 'Nguyễn Văn A',
                'address' => '123 Đường A, Quận 1, TP HCM',
                'phone_number' => '0901234567',
                'email' => 'user1@example.com',
                'password' => Hash::make('123456'),
                'role' => 0,
                'avatar_url' => null,
                'updated_at' => now(),
                'created_at' => now()
            ],
            [
                'name' => 'Trần Thị B',
                'address' => '456 Đường B, Quận Tân Bình, TP HCM',
                'phone_number' => '0902345678',
                'email' => 'user2@example.com',
                'password' => Hash::make('123456'),
                'role' => 1,
                'avatar_url' => null,
                'updated_at' => now(),
                'created_at' => now()
            ],
            [
                'name' => 'Lê Văn C',
                'address' => '789 Đường C, Quận Gò Vấp, TP HCM',
                'phone_number' => '0903456789',
                'email' => 'user3@example.com',
                'password' => Hash::make('123456'),
                'role' => 0,
                'avatar_url' => null,
                'updated_at' => now(),
                'created_at' => now()
            ],
            [
                'name' => 'Trần Thị A',
                'address' => '123 Đường D, Quận Tân Bình, TP HCM',
                'phone_number' => '0912345677',
                'email' => 'user4@example.com',
                'password' => Hash::make('123456'),
                'role' => 0,
                'avatar_url' => null,
                'updated_at' => now(),
                'created_at' => now()
            ],
            [
                'name' => 'Nguyễn Văn B',
                'address' => '456 Đường E, Quận Bình Thạnh, TP HCM',
                'phone_number' => '0987654320',
                'email' => 'user5@example.com',
                'password' => Hash::make('123456'),
                'role' => 0,
                'avatar_url' => null,

                'updated_at' => now(),
                'created_at' => now()
            ],
            [
                'name' => 'Phạm Thị C',
                'address' => '789 Đường F, Quận 3, TP HCM',
                'phone_number' => '0934567890',
                'email' => 'user6@example.com',
                'password' => Hash::make('123456'),
                'role' => 0,
                'avatar_url' => null,
                'updated_at' => now(),
                'created_at' => now()
            ],
            [
                'name' => 'Hoàng Văn D',
                'address' => '321 Đường G, Quận 10, TP HCM',
                'phone_number' => '0911111112',
                'email' => 'user7@example.com',
                'password' => Hash::make('123456'),
                'role' => 0,
                'avatar_url' => null,
                'updated_at' => now(),
                'created_at' => now()
            ],
            [
                'name' => 'Võ Thị E',
                'address' => '654 Đường H, Quận 5, TP HCM',
                'phone_number' => '0999999999',
                'email' => 'user8@example.com',
                'password' => Hash::make('123456'),
                'role' => 0,
                'avatar_url' => null,
                'updated_at' => now(),
                'created_at' => now()
            ],
            [
                'name' => 'Nguyễn Văn F',
                'address' => '987 Đường I, Quận 1, TP HCM',
                'phone_number' => '0944444444',
                'email' => 'user9@example.com',
                'password' => Hash::make('123456'),
                'role' => 0,
                'avatar_url' => null,
                'updated_at' => now(),
                'created_at' => now()
            ],
            [
                'name' => 'Lê Thị G',
                'address' => '246 Đường J, Quận 2, TP HCM',
                'phone_number' => '0966666666',
                'email' => 'user10@example.com',
                'password' => Hash::make('123456'),
                'role' => 0,
                'avatar_url' => null,
                'updated_at' => now(),
                'created_at' => now()
            ],
            [
                'name' => 'Trần Văn H',
                'address' => '369 Đường K, Quận Phú Nhuận, TP HCM',
                'phone_number' => '0912345678',
                'email' => 'user11@example.com',
                'password' => Hash::make('123456'),
                'role' => 0,
                'avatar_url' => null,
                'updated_at' => now(),
                'created_at' => now()
            ],
            [
                'name' => 'Phạm Văn I',
                'address' => '258 Đường L, Quận Tân Phú, TP HCM',
                'phone_number' => '0987654322',
                'email' => 'user12@example.com',
                'password' => Hash::make('123456'),
                'role' => 0,
                'avatar_url' => null,
                'updated_at' => now(),
                'created_at' => now()
            ],
            [
                'name' => 'Nguyễn Thị K',
                'address' => '753 Đường M, Quận Bình Tân, TP HCM',
                'phone_number' => '0934567891',
                'email' => 'user13@example.com',
                'password' => Hash::make('123456'),
                'role' => 0,
                'avatar_url' => null,

                'updated_at' => now(),
                'created_at' => now()
            ],
            [
                'name' => 'Hoàng Văn L',
                'address' => '159 Đường N, Quận 4, TP HCM',
                'phone_number' => '0911111111',
                'email' => 'user14@example.com',
                'password' => Hash::make('123456'),
                'role' => 0,
                'avatar_url' => null,
                'updated_at' => now(),
                'created_at' => now()
            ],
            [
                'name' => 'Võ Thị M',
                'address' => '864 Đường O, Quận 8, TP HCM',
                'phone_number' => '0999999998',
                'email' => 'user15@example.com',
                'password' => Hash::make('123456'),
                'role' => 0,
                'avatar_url' => null,
                'updated_at' => now(),
                'created_at' => now()
            ],
            [
                'name' => 'Nguyễn Văn N',
                'address' => '357 Đường P, Quận 7, TP HCM',
                'phone_number' => '0944444442',
                'email' => 'user16@example.com',
                'password' => Hash::make('123456'),
                'role' => 0,
                'avatar_url' => null,

                'updated_at' => now(),
                'created_at' => now()
            ],
            [
                'name' => 'Lê Thị O',
                'address' => '951 Đường Q, Quận 6, TP HCM',
                'phone_number' => '0966666667',
                'email' => 'user17@example.com',
                'password' => Hash::make('123456'),
                'role' => 0,
                'avatar_url' => null,
                'updated_at' => now(),
                'created_at' => now()
            ],
            [
                'name' => 'Trần Văn P',
                'address' => '258 Đường R, Quận 11, TP HCM',
                'phone_number' => '0912345676',
                'email' => 'user18@example.com',
                'password' => Hash::make('123456'),
                'role' => 0,
                'avatar_url' => null,

                'updated_at' => now(),
                'created_at' => now()
            ],
            [
                'name' => 'Phạm Văn Q',
                'address' => '753 Đường S, Quận Gò Vấp, TP HCM',
                'phone_number' => '0987654321',
                'email' => 'user19@example.com',
                'password' => Hash::make('123456'),
                'role' => 0,
                'avatar_url' => null,
                'updated_at' => now(),
                'created_at' => now()
            ],
            [
                'name' => 'Nguyễn Thị R',
                'address' => '159 Đường T, Quận Thủ Đức, TP HCM',
                'phone_number' => '0934567893',
                'email' => 'user20@example.com',
                'password' => Hash::make('123456'),
                'role' => 0,
                'avatar_url' => null,
                'updated_at' => now(),
                'created_at' => now()
            ],
        ];

        DB::table('users')->insert($users);
    }
}
