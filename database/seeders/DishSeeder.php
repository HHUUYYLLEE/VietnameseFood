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
                'name' => 'Phở bò',
                'introduction' => 'Món ăn truyền thống của Việt Nam được làm từ bò, nui, hành tây và rau thơm.',
                'image_url' => 'https://via.placeholder.com/150',
                'type_id' => 1,
                'updated_at' => now(),
                'created_at' => now()
            ],
            [
                'name' => 'Bún chả',
                'introduction' => 'Món ăn đặc trưng của Hà Nội gồm bún (bánh phở xé nhỏ) và chả lụa (chả giò), thường ăn kèm với rau sống và nước chấm.',
                'image_url' => 'https://via.placeholder.com/150',
                'type_id' => 2,
                'updated_at' => now(),
                'created_at' => now()
            ],
            [
                'name' => 'Bánh mì thịt nướng',
                'introduction' => 'Bánh mì được nướng giòn và ăn kèm với thịt nướng, rau sống và nước chấm.',
                'image_url' => 'https://via.placeholder.com/150',
                'type_id' => 3,
                'updated_at' => now(),
                'created_at' => now()
            ],
            [
                'name' => 'Gà nướng',
                'introduction' => 'Thịt gà được nướng trên than hoa với gia vị đậm đà, thơm ngon.',
                'image_url' => 'https://via.placeholder.com/150',
                'type_id' => 11,
                'updated_at' => now(),
                'created_at' => now()
            ],
            [
                'name' => 'Cơm tấm',
                'introduction' => 'Món ăn phổ biến của miền Nam Việt Nam, bao gồm cơm, thịt heo, trứng, dưa leo và nước chấm.',
                'image_url' => 'https://via.placeholder.com/150',
                'type_id' => 4,
                'updated_at' => now(),
                'created_at' => now()
            ],
            [
                'name' => 'Bún riêu',
                'introduction' => 'Món ăn truyền thống của miền Bắc Việt Nam, bao gồm bún, nước dùng từ cua và tôm, thịt băm, giò heo, chả, rau sống và mắm tôm.',
                'image_url' => 'https://via.placeholder.com/150',
                'type_id' => 2,
                'updated_at' => now(),
                'created_at' => now()
            ],
            [
                'name' => 'Cháo lòng',
                'introduction' => 'Món ăn phổ biến trong các quán ăn sáng tại Việt Nam, bao gồm cháo (cơm nấu thành cháo) và lòng heo.',
                'image_url' => 'https://via.placeholder.com/150',
                'type_id' => 5,
                'updated_at' => now(),
                'created_at' => now()
            ],
            [
                'name' => 'Bánh cuốn',
                'introduction' => 'Món ăn truyền thống của Việt Nam, bao gồm bánh cuốn (bánh phở cuộn) và nhân bên trong có thịt heo, nấm hương hoặc tôm.',
                'image_url' => 'https://via.placeholder.com/150',
                'type_id' => 6,
                'updated_at' => now(),
                'created_at' => now()
            ],
            [
                'name' => 'Mì Quảng',
                'introduction' => 'Món ăn đặc trưng của miền Trung Việt Nam, bao gồm mì Quảng (loại mì dẹt), thịt heo, tôm, chả cá, rau sống và nước chấm.',
                'image_url' => 'https://via.placeholder.com/150',
                'type_id' => 7,
                'updated_at' => now(),
                'created_at' => now()
            ],
            [
                'name' => 'Bánh xèo',
                'introduction' => 'Món ăn của miền Nam Việt Nam, bao gồm bột mì pha với nước, thịt heo, tôm, hành tây và rau thơm.',
                'image_url' => 'https://via.placeholder.com/150',
                'type_id' => 6,
                'updated_at' => now(),
                'created_at' => now()
            ],
            [
                'name' => 'Lẩu thái',
                'introduction' => 'Món ăn đặc trưng của Thái Lan, bao gồm nước dùng cay, thịt gà hoặc hải sản và rau sống.',
                'image_url' => 'https://via.placeholder.com/150',
                'type_id' => 8,
                'updated_at' => now(),
                'created_at' => now()
            ],
            [
                'name' => 'Cá kho tộ',
                'introduction' => 'Món ăn ngon của miền Nam Việt Nam, bao gồm cá kho (cá được nấu chung với nước mắm, đường, tỏi, hành và ớt).',
                'image_url' => 'https://via.placeholder.com/150',
                'type_id' => 12,
                'updated_at' => now(),
                'created_at' => now()
            ],
            [
                'name' => 'Thịt kho tàu',
                'introduction' => 'Món ăn truyền thống của miền Nam Việt Nam, bao gồm thịt heo kho (thịt heo được nấu chung với nước mắm, đường, tỏi, hành và trứng).',
                'image_url' => 'https://via.placeholder.com/150',
                'type_id' => 12,
                'updated_at' => now(),
                'created_at' => now()
            ],
            [
                'name' => 'Nem rán',
                'introduction' => 'Món ăn đặc trưng của Miền Bắc Việt Nam, bao gồm nem rán (chả giò) với nhân là thịt heo xay, tôm và nấm.',
                'image_url' => 'https://via.placeholder.com/150',
                'type_id' => 11,
                'updated_at' => now(),
                'created_at' => now()
            ],
            [
                'name' => 'Bún bò Huế',
                'introduction' => 'Món ăn đặc trưng của Huế, bao gồm bún, thịt bò, giò heo, mắm ruốc, rau sống và nước dùng cay.',
                'image_url' => 'https://via.placeholder.com/150',
                'type_id' => 2,
                'updated_at' => now(),
                'created_at' => now()
            ],
            [
                'name' => 'Gỏi cuốn',
                'introduction' => 'Món ăn phổ biến của Việt Nam, bao gồm bánh tráng cuộn với rau sống, tôm, thịt heo hoặc gà.',
                'image_url' => 'https://via.placeholder.com/150',
                'type_id' => 11,
                'updated_at' => now(),
                'created_at' => now()
            ],
            [
                'name' => 'Bò lúc lắc',
                'introduction' => 'Món ăn đặc trưng của miền Nam Việt Nam, bao gồm thịt bò xào với hành tây, tỏi và gia vị đặc trưng.',
                'image_url' => 'https://via.placeholder.com/150',
                'type_id' => 12,
                'updated_at' => now(),
                'created_at' => now()
            ],
            [
                'name' => 'Cá lóc chiên giòn',
                'introduction' => 'Món ăn ngon của miền Nam Việt Nam, bao gồm cá lóc chiên giòn với gia vị đặc trưng.',
                'image_url' => 'https://via.placeholder.com/150',
                'type_id' => 12,
                'updated_at' => now(),
                'created_at' => now()
            ],
            [
                'name' => 'Bún ốc',
                'introduction' => 'Món ăn phổ biến của miền Bắc Việt Nam, bao gồm bún (bánh phở xé nhỏ) và ốc luộc, nước dùng từ xương heo và hành tươi.',
                'image_url' => 'https://via.placeholder.com/150',
                'type_id' => 2,
                'updated_at' => now(),
                'created_at' => now()
            ],
            [
                'name' => 'Lẩu cá diêu hồng',
                'introduction' => 'Món ăn đặc trưng của miền Trung Việt Nam, bao gồm lẩu cá diêu hồng với rau sống và nước chấm.',
                'image_url' => 'https://via.placeholder.com/150',
                'type_id' => 8,
                'updated_at' => now(),
                'created_at' => now()
            ],
            [
                'name' => 'Bánh tráng nướng',
                'introduction' => 'Món ăn đường phố phổ biến của Việt Nam, bao gồm bánh tráng nướng với trứng gà, thịt heo xé và tôm.',
                'image_url' => 'https://via.placeholder.com/150',
                'type_id' => 6,
                'updated_at' => now(),
                'created_at' => now()
            ],
            [
                'name' => 'Gỏi cuốn chay',
                'introduction' => 'Món ăn chay phổ biến của Việt Nam, bao gồm bánh tráng cuộn với rau sống, đậu hủ non và nấm.',
                'image_url' => 'https://via.placeholder.com/150',
                'type_id' => 12,
                'updated_at' => now(),
                'created_at' => now()
            ],
            [
                'name' => 'Cơm tấm sườn nướng',
                'introduction' => 'Cơm tấm được ăn kèm với sườn nướng, trứng và dưa leo.',
                'image_url' => 'https://via.placeholder.com/150',
                'type_id' => 4,
                'updated_at' => now(),
                'created_at' => now()
            ],
            [
                'name' => 'Xôi gấc',
                'introduction' => 'Món ăn truyền thống của Việt Nam, bao gồm xôi (cơm nếp) với màu đỏ từ trái gấc và được ăn kèm với đậu xanh.',
                'image_url' => 'https://via.placeholder.com/150',
                'type_id' => 11,
                'updated_at' => now(),
                'created_at' => now()
            ],
            [
                'name' => 'Bánh canh',
                'introduction' => 'Món ăn phổ biến của miền Trung Việt Nam, bao gồm bánh canh (loại bánh phở to hơn) và nước dùng từ xương heo, tôm hoặc thịt heo.',
                'image_url' => 'https://via.placeholder.com/150',
                'type_id' => 7,
                'updated_at' => now(),
                'created_at' => now()
            ],
            [
                'name' => 'Cá nục kho',
                'introduction' => 'Món ăn ngon của miền Trung Việt Nam, bao gồm cá nục được nấu chung với nước mắm, đường, tỏi, hành và ớt.',
                'image_url' => 'https://via.placeholder.com/150',
                'type_id' => 4,
                'updated_at' => now(),
                'created_at' => now()
            ],
            [
                'name' => 'Bún chả cá',
                'introduction' => 'Món ăn đặc trưng của miền Nam Việt Nam, bao gồm bún, chả cá và nước dùng từ xương cá.',
                'image_url' => 'https://via.placeholder.com/150',
                'type_id' => 2,
                'updated_at' => now(),
                'created_at' => now()
            ],
            [
                'name' => 'Phở gà',
                'introduction' => 'Món ăn truyền thống của Việt Nam, bao gồm phở (bánh phở xé nhỏ) với thịt gà và nước dùng từ xương gà.',
                'image_url' => 'https://via.placeholder.com/150',
                'type_id' => 1,
                'updated_at' => now(),
                'created_at' => now()
            ],
            [
                'name' => 'Gà chiên giòn',
                'introduction' => 'Thịt gà được rán giòn với bột chiên xù và gia vị đặc trưng.',
                'image_url' => 'https://via.placeholder.com/150',
                'type_id' => 4,
                'updated_at' => now(),
                'created_at' => now()
            ],
            [
                'name' => 'Bánh bao',
                'introduction' => 'Món ăn truyền thống của Việt Nam, bao gồm bánh bao nhân thịt heo xay, tôm hoặc củ cải.',
                'image_url' => 'https://via.placeholder.com/150',
                'type_id' => 6,
                'updated_at' => now(),
                'created_at' => now()
            ],
            [
                'name' => 'Chè',
                'introduction' => 'Món ăn truyền thống của Việt Nam, bao gồm chè (loại dessert) với ngũ cốc, đậu, trái cây hoặc thạch.',
                'image_url' => 'https://via.placeholder.com/150',
                'type_id' => 10,
                'updated_at' => now(),
                'created_at' => now()
            ],
        ];
        DB::table('dishes')->insert($dishes);
    }
}
