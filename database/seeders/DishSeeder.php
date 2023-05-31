<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DishSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $dishes = [
            [
                'Name' => 'Phở bò',
                'Introduction' => 'Món ăn truyền thống của Việt Nam được làm từ bò, nui, hành tây và rau thơm.',
                'Image_URL' => 'https://via.placeholder.com/150',
                'TypeID' => 1,
                'updated_at' => now(),
                'created_at' => now()
            ],
            [
                'Name' => 'Bún chả',
                'Introduction' => 'Món ăn đặc trưng của Hà Nội gồm bún (bánh phở xé nhỏ) và chả lụa (chả giò), thường ăn kèm với rau sống và nước chấm.',
                'Image_URL' => 'https://via.placeholder.com/150',
                'TypeID' => 2,
                'updated_at' => now(),
                'created_at' => now()
            ],
            [
                'Name' => 'Bánh mì thịt nướng',
                'Introduction' => 'Bánh mì được nướng giòn và ăn kèm với thịt nướng, rau sống và nước chấm.',
                'Image_URL' => 'https://via.placeholder.com/150',
                'TypeID' => 3,
                'updated_at' => now(),
                'created_at' => now()
            ],
            [
                'Name' => 'Gà nướng',
                'Introduction' => 'Thịt gà được nướng trên than hoa với gia vị đậm đà, thơm ngon.',
                'Image_URL' => 'https://via.placeholder.com/150',
                'TypeID' => 11,
                'updated_at' => now(),
                'created_at' => now()
            ],
            [
                'Name' => 'Cơm tấm',
                'Introduction' => 'Món ăn phổ biến của miền Nam Việt Nam, bao gồm cơm, thịt heo, trứng, dưa leo và nước chấm.',
                'Image_URL' => 'https://via.placeholder.com/150',
                'TypeID' => 4,
                'updated_at' => now(),
                'created_at' => now()
            ],
            [
                'Name' => 'Bún riêu',
                'Introduction' => 'Món ăn truyền thống của miền Bắc Việt Nam, bao gồm bún, nước dùng từ cua và tôm, thịt băm, giò heo, chả, rau sống và mắm tôm.',
                'Image_URL' => 'https://via.placeholder.com/150',
                'TypeID' => 2,
                'updated_at' => now(),
                'created_at' => now()
            ],
            [
                'Name' => 'Cháo lòng',
                'Introduction' => 'Món ăn phổ biến trong các quán ăn sáng tại Việt Nam, bao gồm cháo (cơm nấu thành cháo) và lòng heo.',
                'Image_URL' => 'https://via.placeholder.com/150',
                'TypeID' => 5,
                'updated_at' => now(),
                'created_at' => now()
            ],
            [
                'Name' => 'Bánh cuốn',
                'Introduction' => 'Món ăn truyền thống của Việt Nam, bao gồm bánh cuốn (bánh phở cuộn) và nhân bên trong có thịt heo, nấm hương hoặc tôm.',
                'Image_URL' => 'https://via.placeholder.com/150',
                'TypeID' => 6,
                'updated_at' => now(),
                'created_at' => now()
            ],
            [
                'Name' => 'Mì Quảng',
                'Introduction' => 'Món ăn đặc trưng của miền Trung Việt Nam, bao gồm mì Quảng (loại mì dẹt), thịt heo, tôm, chả cá, rau sống và nước chấm.',
                'Image_URL' => 'https://via.placeholder.com/150',
                'TypeID' => 7,
                'updated_at' => now(),
                'created_at' => now()
            ],
            [
                'Name' => 'Bánh xèo',
                'Introduction' => 'Món ăn của miền Nam Việt Nam, bao gồm bột mì pha với nước, thịt heo, tôm, hành tây và rau thơm.',
                'Image_URL' => 'https://via.placeholder.com/150',
                'TypeID' => 6,
                'updated_at' => now(),
                'created_at' => now()
            ],
            [
                'Name' => 'Lẩu thái',
                'Introduction' => 'Món ăn đặc trưng của Thái Lan, bao gồm nước dùng cay, thịt gà hoặc hải sản và rau sống.',
                'Image_URL' => 'https://via.placeholder.com/150',
                'TypeID' => 8,
                'updated_at' => now(),
                'created_at' => now()
            ],
            [
                'Name' => 'Cá kho tộ',
                'Introduction' => 'Món ăn ngon của miền Nam Việt Nam, bao gồm cá kho (cá được nấu chung với nước mắm, đường, tỏi, hành và ớt).',
                'Image_URL' => 'https://via.placeholder.com/150',
                'TypeID' => 12,
                'updated_at' => now(),
                'created_at' => now()
            ],
            [
                'Name' => 'Thịt kho tàu',
                'Introduction' => 'Món ăn truyền thống của miền Nam Việt Nam, bao gồm thịt heo kho (thịt heo được nấu chung với nước mắm, đường, tỏi, hành và trứng).',
                'Image_URL' => 'https://via.placeholder.com/150',
                'TypeID' => 12,
                'updated_at' => now(),
                'created_at' => now()
            ],
            [
                'Name' => 'Nem rán',
                'Introduction' => 'Món ăn đặc trưng của Miền Bắc Việt Nam, bao gồm nem rán (chả giò) với nhân là thịt heo xay, tôm và nấm.',
                'Image_URL' => 'https://via.placeholder.com/150',
                'TypeID' => 11,
                'updated_at' => now(),
                'created_at' => now()
            ],
            [
                'Name' => 'Bún bò Huế',
                'Introduction' => 'Món ăn đặc trưng của Huế, bao gồm bún, thịt bò, giò heo, mắm ruốc, rau sống và nước dùng cay.',
                'Image_URL' => 'https://via.placeholder.com/150',
                'TypeID' => 2,
                'updated_at' => now(),
                'created_at' => now()
            ],
            [
                'Name' => 'Gỏi cuốn',
                'Introduction' => 'Món ăn phổ biến của Việt Nam, bao gồm bánh tráng cuộn với rau sống, tôm, thịt heo hoặc gà.',
                'Image_URL' => 'https://via.placeholder.com/150',
                'TypeID' => 11,
                'updated_at' => now(),
                'created_at' => now()
            ],
            [
                'Name' => 'Bò lúc lắc',
                'Introduction' => 'Món ăn đặc trưng của miền Nam Việt Nam, bao gồm thịt bò xào với hành tây, tỏi và gia vị đặc trưng.',
                'Image_URL' => 'https://via.placeholder.com/150',
                'TypeID' => 12,
                'updated_at' => now(),
                'created_at' => now()
            ],
            [
                'Name' => 'Cá lóc chiên giòn',
                'Introduction' => 'Món ăn ngon của miền Nam Việt Nam, bao gồm cá lóc chiên giòn với gia vị đặc trưng.',
                'Image_URL' => 'https://via.placeholder.com/150',
                'TypeID' => 12,
                'updated_at' => now(),
                'created_at' => now()
            ],
            [
                'Name' => 'Bún ốc',
                'Introduction' => 'Món ăn phổ biến của miền Bắc Việt Nam, bao gồm bún (bánh phở xé nhỏ) và ốc luộc, nước dùng từ xương heo và hành tươi.',
                'Image_URL' => 'https://via.placeholder.com/150',
                'TypeID' => 2,
                'updated_at' => now(),
                'created_at' => now()
            ],
            [
                'Name' => 'Lẩu cá diêu hồng',
                'Introduction' => 'Món ăn đặc trưng của miền Trung Việt Nam, bao gồm lẩu cá diêu hồng với rau sống và nước chấm.',
                'Image_URL' => 'https://via.placeholder.com/150',
                'TypeID' => 8,
                'updated_at' => now(),
                'created_at' => now()
            ],
            [
                'Name' => 'Bánh tráng nướng',
                'Introduction' => 'Món ăn đường phố phổ biến của Việt Nam, bao gồm bánh tráng nướng với trứng gà, thịt heo xé và tôm.',
                'Image_URL' => 'https://via.placeholder.com/150',
                'TypeID' => 6,
                'updated_at' => now(),
                'created_at' => now()
            ],
            [
                'Name' => 'Gỏi cuốn chay',
                'Introduction' => 'Món ăn chay phổ biến của Việt Nam, bao gồm bánh tráng cuộn với rau sống, đậu hủ non và nấm.',
                'Image_URL' => 'https://via.placeholder.com/150',
                'TypeID' => 12,
                'updated_at' => now(),
                'created_at' => now()
            ],
            [
                'Name' => 'Cơm tấm sườn nướng',
                'Introduction' => 'Cơm tấm được ăn kèm với sườn nướng, trứng và dưa leo.',
                'Image_URL' => 'https://via.placeholder.com/150',
                'TypeID' => 4,
                'updated_at' => now(),
                'created_at' => now()
            ],
            [
                'Name' => 'Xôi gấc',
                'Introduction' => 'Món ăn truyền thống của Việt Nam, bao gồm xôi (cơm nếp) với màu đỏ từ trái gấc và được ăn kèm với đậu xanh.',
                'Image_URL' => 'https://via.placeholder.com/150',
                'TypeID' => 11,
                'updated_at' => now(),
                'created_at' => now()
            ],
            [
                'Name' => 'Bánh canh',
                'Introduction' => 'Món ăn phổ biến của miền Trung Việt Nam, bao gồm bánh canh (loại bánh phở to hơn) và nước dùng từ xương heo, tôm hoặc thịt heo.',
                'Image_URL' => 'https://via.placeholder.com/150',
                'TypeID' => 7,
                'updated_at' => now(),
                'created_at' => now()
            ],
            [
                'Name' => 'Cá nục kho',
                'Introduction' => 'Món ăn ngon của miền Trung Việt Nam, bao gồm cá nục được nấu chung với nước mắm, đường, tỏi, hành và ớt.',
                'Image_URL' => 'https://via.placeholder.com/150',
                'TypeID' => 4,
                'updated_at' => now(),
                'created_at' => now()
            ],
            [
                'Name' => 'Bún chả cá',
                'Introduction' => 'Món ăn đặc trưng của miền Nam Việt Nam, bao gồm bún, chả cá và nước dùng từ xương cá.',
                'Image_URL' => 'https://via.placeholder.com/150',
                'TypeID' => 2,
                'updated_at' => now(),
                'created_at' => now()
            ],
            [
                'Name' => 'Phở gà',
                'Introduction' => 'Món ăn truyền thống của Việt Nam, bao gồm phở (bánh phở xé nhỏ) với thịt gà và nước dùng từ xương gà.',
                'Image_URL' => 'https://via.placeholder.com/150',
                'TypeID' => 1,
                'updated_at' => now(),
                'created_at' => now()
            ],
            [
                'Name' => 'Gà chiên giòn',
                'Introduction' => 'Thịt gà được rán giòn với bột chiên xù và gia vị đặc trưng.',
                'Image_URL' => 'https://via.placeholder.com/150',
                'TypeID' => 4,
                'updated_at' => now(),
                'created_at' => now()
            ],
            [
                'Name' => 'Bánh bao',
                'Introduction' => 'Món ăn truyền thống của Việt Nam, bao gồm bánh bao nhân thịt heo xay, tôm hoặc củ cải.',
                'Image_URL' => 'https://via.placeholder.com/150',
                'TypeID' => 6,
                'updated_at' => now(),
                'created_at' => now()
            ],
            [
                'Name' => 'Chè',
                'Introduction' => 'Món ăn truyền thống của Việt Nam, bao gồm chè (loại dessert) với ngũ cốc, đậu, trái cây hoặc thạch.',
                'Image_URL' => 'https://via.placeholder.com/150',
                'TypeID' => 10,
                'updated_at' => now(),
                'created_at' => now()
            ],
        ];
        DB::table('dishes')->insert($dishes);
    }
}
