<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

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
                'Name' => 'Nguyễn Văn A',
                'Address' => '123 Đường A, Quận 1, TP HCM',
                'Phone_number' => '0901234567',
                'Email' => 'user1@example.com',
                'Password' => '123456',
                'Role' => 0,
                'Avatar_URL' => null,
                'updated_at' => now(),
                'created_at' => now()
            ],
            [
                'Name' => 'Trần Thị B',
                'Address' => '456 Đường B, Quận Tân Bình, TP HCM',
                'Phone_number' => '0902345678',
                'Email' => 'user2@example.com',
                'Password' => '123456',
                'Role' => 1,
                'Avatar_URL' => null,
                'updated_at' => now(),
                'created_at' => now()
            ],
            [
                'Name' => 'Lê Văn C',
                'Address' => '789 Đường C, Quận Gò Vấp, TP HCM',
                'Phone_number' => '0903456789',
                'Email' => 'user3@example.com',
                'Password' => '123456',
                'Role' => 0,
                'Avatar_URL' => null,
                'updated_at' => now(),
                'created_at' => now()
            ],
            [
                'Name' => 'Trần Thị A',
                'Address' => '123 Đường D, Quận Tân Bình, TP HCM',
                'Phone_number' => '0912345677',
                'Email' => 'user4@example.com',
                'Password' => '123456',
                'Role' => 0,
                'Avatar_URL' => null,
                'updated_at' => now(),
                'created_at' => now()
            ],
            [
                'Name' => 'Nguyễn Văn B',
                'Address' => '456 Đường E, Quận Bình Thạnh, TP HCM',
                'Phone_number' => '0987654320',
                'Email' => 'user5@example.com',
                'Password' => '123456',
                'Role' => 0,
                'Avatar_URL' => null,

                'updated_at' => now(),
                'created_at' => now()
            ],
            [
                'Name' => 'Phạm Thị C',
                'Address' => '789 Đường F, Quận 3, TP HCM',
                'Phone_number' => '0934567890',
                'Email' => 'user6@example.com',
                'Password' => '123456',
                'Role' => 0,
                'Avatar_URL' => null,
                'updated_at' => now(),
                'created_at' => now()
            ],
            [
                'Name' => 'Hoàng Văn D',
                'Address' => '321 Đường G, Quận 10, TP HCM',
                'Phone_number' => '0911111112',
                'Email' => 'user7@example.com',
                'Password' => '123456',
                'Role' => 0,
                'Avatar_URL' => null,
                'updated_at' => now(),
                'created_at' => now()
            ],
            [
                'Name' => 'Võ Thị E',
                'Address' => '654 Đường H, Quận 5, TP HCM',
                'Phone_number' => '0999999999',
                'Email' => 'user8@example.com',
                'Password' => '123456',
                'Role' => 0,
                'Avatar_URL' => null,
                'updated_at' => now(),
                'created_at' => now()
            ],
            [
                'Name' => 'Nguyễn Văn F',
                'Address' => '987 Đường I, Quận 1, TP HCM',
                'Phone_number' => '0944444444',
                'Email' => 'user9@example.com',
                'Password' => '123456',
                'Role' => 0,
                'Avatar_URL' => null,
                'updated_at' => now(),
                'created_at' => now()
            ],
            [
                'Name' => 'Lê Thị G',
                'Address' => '246 Đường J, Quận 2, TP HCM',
                'Phone_number' => '0966666666',
                'Email' => 'user10@example.com',
                'Password' => '123456',
                'Role' => 0,
                'Avatar_URL' => null,
                'updated_at' => now(),
                'created_at' => now()
            ],
            [
                'Name' => 'Trần Văn H',
                'Address' => '369 Đường K, Quận Phú Nhuận, TP HCM',
                'Phone_number' => '0912345678',
                'Email' => 'user11@example.com',
                'Password' => '123456',
                'Role' => 0,
                'Avatar_URL' => null,
                'updated_at' => now(),
                'created_at' => now()
            ],
            [
                'Name' => 'Phạm Văn I',
                'Address' => '258 Đường L, Quận Tân Phú, TP HCM',
                'Phone_number' => '0987654322',
                'Email' => 'user12@example.com',
                'Password' => '123456',
                'Role' => 0,
                'Avatar_URL' => null,
                'updated_at' => now(),
                'created_at' => now()
            ],
            [
                'Name' => 'Nguyễn Thị K',
                'Address' => '753 Đường M, Quận Bình Tân, TP HCM',
                'Phone_number' => '0934567891',
                'Email' => 'user13@example.com',
                'Password' => '123456',
                'Role' => 0,
                'Avatar_URL' => null,

                'updated_at' => now(),
                'created_at' => now()
            ],
            [
                'Name' => 'Hoàng Văn L',
                'Address' => '159 Đường N, Quận 4, TP HCM',
                'Phone_number' => '0911111111',
                'Email' => 'user14@example.com',
                'Password' => '123456',
                'Role' => 0,
                'Avatar_URL' => null,
                'updated_at' => now(),
                'created_at' => now()
            ],
            [
                'Name' => 'Võ Thị M',
                'Address' => '864 Đường O, Quận 8, TP HCM',
                'Phone_number' => '0999999998',
                'Email' => 'user15@example.com',
                'Password' => '123456',
                'Role' => 0,
                'Avatar_URL' => null,
                'updated_at' => now(),
                'created_at' => now()
            ],
            [
                'Name' => 'Nguyễn Văn N',
                'Address' => '357 Đường P, Quận 7, TP HCM',
                'Phone_number' => '0944444442',
                'Email' => 'user16@example.com',
                'Password' => '123456',
                'Role' => 0,
                'Avatar_URL' => null,

                'updated_at' => now(),
                'created_at' => now()
            ],
            [
                'Name' => 'Lê Thị O',
                'Address' => '951 Đường Q, Quận 6, TP HCM',
                'Phone_number' => '0966666667',
                'Email' => 'user17@example.com',
                'Password' => '123456',
                'Role' => 0,
                'Avatar_URL' => null,
                'updated_at' => now(),
                'created_at' => now()
            ],
            [
                'Name' => 'Trần Văn P',
                'Address' => '258 Đường R, Quận 11, TP HCM',
                'Phone_number' => '0912345676',
                'Email' => 'user18@example.com',
                'Password' => '123456',
                'Role' => 0,
                'Avatar_URL' => null,

                'updated_at' => now(),
                'created_at' => now()
            ],
            [
                'Name' => 'Phạm Văn Q',
                'Address' => '753 Đường S, Quận Gò Vấp, TP HCM',
                'Phone_number' => '0987654321',
                'Email' => 'user19@example.com',
                'Password' => '123456',
                'Role' => 0,
                'Avatar_URL' => null,
                'updated_at' => now(),
                'created_at' => now()
            ],
            [
                'Name' => 'Nguyễn Thị R',
                'Address' => '159 Đường T, Quận Thủ Đức, TP HCM',
                'Phone_number' => '0934567893',
                'Email' => 'user20@example.com',
                'Password' => '123456',
                'Role' => 0,
                'Avatar_URL' => null,
                'updated_at' => now(),
                'created_at' => now()
            ],
        ];

        DB::table('users')->insert($users);
    }
}
