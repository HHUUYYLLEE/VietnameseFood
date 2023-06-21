<div class="sidebar col-lg-3 col-md-6 col-sm-12 border border-warning p-4">
    <div class="card">
        <div class="card-body">
            <div class="sidebar-title d-flex">
                <i class="category-title fa-solid fa-bars mr-4"></i>
                <h5 class="category-title card-title">カテゴリィ</h5>
            </div>
            <hr>
            <div class="category-item d-flex">
                <i class="fa-solid fa-greater-than"></i>
                <h5 class="card-title dish dish_type1" onclick="activeDish(1);"> ビーフンを売る</h5>
            </div>
            <div class="category-item d-flex">
                <i class="fa-solid fa-greater-than"></i>
                <h5 class="card-title dish dish_type2" onclick="activeDish(2);">Phoを売る</h5>
            </div>
            <div class="category-item d-flex">
                <i class="fa-solid fa-greater-than"></i>
                <h5 class="card-title dish dish_type3" onclick="activeDish(3);"> パンを売る</h5>
            </div>
            <div class="category-item d-flex">
                <i class="fa-solid fa-greater-than"></i>
                <h5 class="card-title dish dish_type4" onclick="activeDish(4);"> 米を売る</h5>
            </div>
        </div>
    </div>
    <div class="card mt-4">
        <div class="card-body">
            <div class="sidebar-title d-flex">
                <i class="city-box fa-solid fa-bars mr-4"></i>
                <h5 class="city-box card-title">都市</h5>
            </div>
            <hr>
            <div class="category-item d-flex">
                <i class="fa-solid fa-greater-than"></i>
                <h5 class="card-title city city_1" onclick="activeCity(1)"> Ha Noi</h5>
            </div>
            <div class="category-item d-flex">
                <i class="fa-solid fa-greater-than"></i>
                <h5 class="card-title city city_2" onclick="activeCity(2)"> Ho Chi Minh</h5>
            </div>
            <div class="category-item d-flex">
                <i class="fa-solid fa-greater-than"></i>
                <h5 class="card-title city city_3" onclick="activeCity(3)"> Da Nang</h5>
            </div>
            <div class="category-item d-flex">
                <i class="fa-solid fa-greater-than"></i>
                <h5 class="card-title city city_4" onclick="activeCity(4)"> Nha Trang</h5>
            </div>
        </div>
    </div>
    <div class="star-group-review mt-4">
        <div class="sidebar-title d-flex" style="margin-left: 45px;">
            <h5 class="star-box card-title" style="color: red">評価</h5>
        </div>
        <div class="star five-star-div row-star d-flex justify-content-around star_5" onclick="activeStar(5)">
            <div class="five-star">
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
            </div>
            <p class="invisible">以上</p>
        </div>
        <div class="star four-star-div row-star d-flex justify-content-around star_4" onclick="activeStar(4)">
            <div class="four-star">
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
                <i class="fa-regular fa-star"></i>
            </div>
            <p>以上</p>
        </div>

        <div class="star three-star-div row-star d-flex justify-content-around star_3" onclick="activeStar(3)">
            <div class="three-star">
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
                <i class="fa-regular fa-star"></i>
                <i class="fa-regular fa-star"></i>
            </div>
            <p>以上</p>
        </div>
        <div class="star two-star-div row-star d-flex justify-content-around star_2" onclick="activeStar(2)">
            <div class="two-star">
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
                <i class="fa-regular fa-star"></i>
                <i class="fa-regular fa-star"></i>
                <i class="fa-regular fa-star"></i>
            </div>
            <p>以上</p>
        </div>

        <div class="star one-star-div row-star d-flex justify-content-around star_1" onclick="activeStar(1)">
            <div class="one-star">
                <i class="fa-solid fa-star"></i>
                <i class="fa-regular fa-star"></i>
                <i class="fa-regular fa-star"></i>
                <i class="fa-regular fa-star"></i>
                <i class="fa-regular fa-star"></i>
            </div>
            <p>以上</p>
        </div>
    </div>
</div>

<script>
    function activeDish(dishId) {
        $('.dish_type1').removeClass('active');
        $('.dish_type2').removeClass('active');
        $('.dish_type3').removeClass('active');
        $('.dish_type4').removeClass('active');
        $('.dish_type' + dishId).addClass('active');

        // Show '>' when click on dish
        $('.dish_type' + dishId).parent().find('.fa-greater-than').css('color', 'red')
        $('.dish_type' + dishId).parent().find('.fa-greater-than').show();
    }

    function activeCity(city) {
        $('.city_1').removeClass('active');
        $('.city_2').removeClass('active');
        $('.city_3').removeClass('active');
        $('.city_4').removeClass('active');
        $('.city_' + city).addClass('active');

        $('.city_' + city).parent().find('.fa-greater-than').css('color', 'red')
        $('.city_' + city).parent().find('.fa-greater-than').show();
    }

    function activeStar(star) {
        $('.five-star-div').removeClass('active');
        $('.four-star-div').removeClass('active');
        $('.three-star-div').removeClass('active');
        $('.two-star-div').removeClass('active');
        $('.one-star-div').removeClass('active');
        $('.star_' + star).addClass('active');
    }
</script>