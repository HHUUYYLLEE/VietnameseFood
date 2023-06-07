@include('inc.header')
@include('layout.app')

<div class="container-fluid p-4">
    <div class="row d-flex justify-content-around flex-row pl-4 pt-4">
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



        <div class="col-lg-9 d-flex flex-column align-items-center">
            <div class="restaurant-list d-flex justify-content-around flex-wrap" style="width: 100%">
                @foreach ($restaurants as $restaurant)
                <div class="restaurant-wrap mb-4" style="width: 31%">
                    <div class="card position-relative" style="height: 25rem">
                        <img class="card-img-top" src="{{ asset($restaurant->image_url) }}" alt="Product image" style="height: 50%; object-fit: cover;">
                        <div class="card-body d-flex flex-column justify-content-between">
                            <div>
                                <h5 class="card-title" style="font-size: 2rem; font-weight: bold; color: red">{{$restaurant->name}}</h5>
                                <p class="card-text mt-2">{{$restaurant->address}}</p>
                            </div>
                            <div class="star-button d-flex justify-content-between mt-4">
                                @php
                                $star = $restaurant->rating_avg;
                                $maxRating = 5;
                                $percent = ($star / $maxRating) * 100;
                                @endphp

                                <div class="star-group">
                                    @for ($i = 1; $i <= 5; $i++) @if ($percent>= $i * 20)
                                        <i class="fas fa-star"></i>
                                        @elseif ($percent >= ($i - 0.5) * 20)
                                        <i class="fas fa-star-half-alt"></i>
                                        @else
                                        <i class="far fa-star"></i>
                                        @endif
                                        @endfor
                                </div>
                                <a href="#" class="btn btn-danger">予約</a>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach

            </div>
            {{--Tạo đường link phân trang cho danh sách nhà hàng--}}
            <div class="pagination mt-4">
                @if ($restaurants->currentPage() > 1)
                <a href="{{ $restaurants->previousPageUrl() }}" class="page-link">前</a>
                @endif

                @for ($i = 1; $i <= $restaurants->lastPage(); $i++)
                    @php
                    if(isset($_GET['dishID']) && isset($_GET['cityID']) && isset($_GET['star'])){
                    $dishID = $_GET['dishID'];
                    $cityID = $_GET['cityID'];
                    $star = $_GET['star'];
                    $links = $restaurants->url($i) . '&&dishID=' . $dishID . '&&cityID=' . $cityID . '&&star=' . $star;
                    }
                    else{
                    $links = $restaurants->url($i);
                    }


                    @endphp
                    <a href="{{$links }} " class="page-link{{ ($restaurants->currentPage() == $i) ? ' active' : '' }}">{{ $i }}</a>
                    @endfor

                    @if ($restaurants->hasMorePages())
                    <a href="{{ $restaurants->nextPageUrl() }}" class="page-link">次</a>
                    @endif
            </div>
        </div>


    </div>
</div>

@include('inc.footer')
<!-- <style>
    .restaurant-wrap:hover {
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.4);
    }

    .pagination a.active {
        border: 1px solid red;
    }

    .category-title {
        color: red;
        font-weight: bold;
        font-size: 20px;
    }

    .city-box {
        color: red;
        font-weight: bold;
        font-size: 20px;
    }

    h5.card-title {
        font-weight: bold;
        font-family: Arial, sans-serif;
        font-size: 15px;
    }

    .dish_type1,
    .dish_type2,
    .dish_type3,
    .dish_type4:hover {
        cursor: pointer;
    }

    .city_1,
    .city_2,
    .city_3,
    .city_4:hover {
        cursor: pointer;
    }

    .five-star-div,
    .four-star-div,
    .three-star-div,
    .two-star-div,
    .one-star-div:hover {
        cursor: pointer;
    }

    .active {
        color: red;
    }

    .active .fa-star {
        color: red;
    }

    .fa-star,
    .fa-star-half-alt {
        color: #D4B122;
    }

    .card {
        border-radius: 10px;
        background-color: #FEF7F7;
    }
</style> -->
<!-- <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script> -->
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

    $(document).ready(function() {
        // Hide '>'
        $('.fa-greater-than').hide();
        $('.dish , .city , .star').click(function() {
            //get dish active id
            if ($('.dish.active').attr('class') == undefined) {
                var activeDishId = 0;
            } else {
                var activeDishId = $('.dish.active').attr('class').split(' ')[2].split('dish_type')[1];
            }
            //get city active id
            if ($('.city.active').attr('class') == undefined) {
                var activeCityId = 0;
            } else {
                var activeCityId = $('.city.active').attr('class').split(' ')[2].split('_')[1];
            }
            //get star active id
            if ($('.star.active').attr('class') == undefined) {
                var activeStarId = 0;
            } else {
                var activeStarId = $('.star.active').attr('class').split(' ')[5].split('_')[1];
                console.log(activeStarId);
            }
            window.location.href = '/restaurant/filterByCriteria?dishID=' + activeDishId + '&cityID=' + activeCityId + '&starID=' + activeStarId;
        })
        //get dishId, cityId, starId from url
        var url = window.location.href;
        if (url.split('dishID=')[1] == undefined) {
            var $dishId = 0;
        } else {
            var $dishId = url.split('dishID=')[1].split('&')[0];
        }
        if (url.split('cityID=')[1] == undefined) {
            var $cityId = 0;
        } else {
            var $cityId = url.split('cityID=')[1].split('&')[0];
        }
        if (url.split('starID=')[1] == undefined) {
            var $starID = 0;
        } else {
            var $starID = url.split('starID=')[1];
        }
        activeDish($dishId);
        activeCity($cityId);
        activeStar($starID);
    })
</script>
