@include('inc.header')
@include('layout.app')

<div class="container-fluid p-4">
    <div class="row d-flex justify-content-around flex-row p-4">

        <div class="sidebar col-lg-3 col-md-6 col-sm-12 border border-warning p-4">
            <div class="card">
                <div class="card-body">
                    <div class="sidebar-title d-flex">
                        <i class="fa-solid fa-bars mr-4"></i>
                        <h5 class="card-title">カテゴリィ</h5>
                    </div>
                    <hr>
                    <div class="category-item d-flex">
                        <i class="fa-solid fa-arrow-right"></i>
                        <h5 class="card-title dish_type1" onclick="filterByDish(1)">ビーフンを売る</h5>
                    </div>
                    <div class="category-item d-flex">
                        <i class="fa-solid fa-arrow-right"></i>
                        <h5 class="card-title dish_type2" onclick="filterByDish(2)">Phoを売る</h5>
                    </div>
                    <div class="category-item d-flex">
                        <i class="fa-solid fa-arrow-right"></i>
                        <h5 class="card-title dish_type3" onclick="filterByDish(3)">パンを売る</h5>
                    </div>
                    <div class="category-item d-flex">
                        <i class="fa-solid fa-arrow-right"></i>
                        <h5 class="card-title dish_type4" onclick="filterByDish(4)">米を売る</h5>
                    </div>
                </div>
            </div>
            <div class="card mt-4">
                <div class="card-body">
                    <div class="sidebar-title d-flex">
                        <i class="fa-solid fa-bars mr-4"></i>
                        <h5 class="card-title">都市</h5>
                    </div>
                    <hr>
                    <div class="category-item d-flex">
                        <i class="fa-solid fa-arrow-right"></i>
                        <h5 class="card-title city1" onclick="filterByCity('Ha Noi')">Ha Noi</h5>
                    </div>
                    <div class="category-item d-flex">
                        <i class="fa-solid fa-arrow-right"></i>
                        <h5 class="card-title city2" onclick="filterByCity('Ho Chi Minh')">Ho Chi Minh</h5>
                    </div>
                    <div class="category-item d-flex">
                        <i class="fa-solid fa-arrow-right"></i>
                        <h5 class="card-title city3" onclick="filterByCity('Da Nang')">Da Nang</h5>
                    </div>
                    <div class="category-item d-flex">
                        <i class="fa-solid fa-arrow-right"></i>
                        <h5 class="card-title city4" onclick="filterByCity('Nha Trang')">Nha Trang</h5>
                    </div>
                </div>
            </div>
            <div class="star-group-review mt-4">
                <div class=" five-star-div row-star d-flex justify-content-around" onclick="filterByStar(5)">
                    <div class="five-star">
                        <i class="fa-regular fa-star" style="color: yellow"></i>
                        <i class="fa-regular fa-star" style="color: yellow"></i>
                        <i class="fa-regular fa-star" style="color: yellow"></i>
                        <i class="fa-regular fa-star" style="color: yellow"></i>
                        <i class="fa-regular fa-star" style="color: yellow"></i>
                    </div>
                </div>
                <div class="four-star-div row-star d-flex justify-content-around" onclick="filterByStar(4)">
                    <div class="four-star">
                        <i class="fa-regular fa-star" style="color: yellow"></i>
                        <i class="fa-regular fa-star" style="color: yellow"></i>
                        <i class="fa-regular fa-star" style="color: yellow"></i>
                        <i class="fa-regular fa-star" style="color: yellow"></i>
                        <i class="fa-regular fa-star"></i>
                    </div>
                    <p>以上</p>
                </div>

                <div class="three-star-div row-star d-flex justify-content-around" onclick="filterByStar(3)">
                    <div class="three-star">
                        <i class="fa-regular fa-star" style="color: yellow"></i>
                        <i class="fa-regular fa-star" style="color: yellow"></i>
                        <i class="fa-regular fa-star" style="color: yellow"></i>
                        <i class="fa-regular fa-star"></i>
                        <i class="fa-regular fa-star"></i>
                    </div>
                    <p>以上</p>
                </div>
                <div class="two-star-div row-star d-flex justify-content-around" onclick="filterByStar(2)">
                    <div class="two-star">
                        <i class="fa-regular fa-star" style="color: yellow"></i>
                        <i class="fa-regular fa-star" style="color: yellow"></i>
                        <i class="fa-regular fa-star"></i>
                        <i class="fa-regular fa-star"></i>
                        <i class="fa-regular fa-star"></i>
                    </div>
                    <p>以上</p>
                </div>

                <div class="one-star-div row-star d-flex justify-content-around" onclick="filterByStar(1)">
                    <div class="one-star">
                        <i class="fa-regular fa-star" style="color: yellow"></i>
                        <i class="fa-regular fa-star"></i>
                        <i class="fa-regular fa-star"></i>
                        <i class="fa-regular fa-star"></i>
                        <i class="fa-regular fa-star"></i>
                    </div>
                    <p>以上</p>
                </div>
            </div>
        </div>

        <div class="col-lg-9 d-flex justify-content-center flex-wrap">
            @foreach ($restaurants_filter as $restaurant)
                <div class="col-lg-4 col-md-4 col-sm-6 mb-4" style="width: 80%">
                    <div class="card position-relative" style="height: auto">
                        <img class="card-img-top" src="{{ asset($restaurant->image_url) }}" alt="Product image">
                        <div class="card-body d-flex flex-column justify-content-between">
                            <div>
                                <h5 class="card-title" style="font-size: 2rem; font-weight: bold; color: red">{{$restaurant->name}}</h5>
                                <p class="card-text mt-2">{{$restaurant->address}}</p>
                            </div>
                            <div class="star-button d-flex justify-content-around mt-4">
                                <div class="star-group">
                                    <i class="fa-regular fa-star"></i>
                                    <i class="fa-regular fa-star"></i>
                                    <i class="fa-regular fa-star"></i>
                                    <i class="fa-regular fa-star"></i>
                                    <i class="fa-regular fa-star"></i>
                                </div>
                                <a href="#" class="btn btn-danger">予約</a>
                            </div>

                        </div>
                    </div>
                </div>
            @endforeach

            {{--Tạo đường link phân trang cho danh sách nhà hàng--}}
            <div class="pagination mt-4">
                @if ($restaurants_filter->currentPage() > 1)
                    <a href="{{ $restaurants_filter->previousPageUrl() }}" class="page-link">前</a>
                @endif

                @for ($i = 1; $i <= $restaurants_filter->lastPage(); $i++)
                    <a href="{{ $restaurants_filter->url($i) }}" class="page-link{{ ($restaurants_filter->currentPage() == $i) ? ' active' : '' }}">{{ $i }}</a>
                @endfor

                @if ($restaurants_filter->hasMorePages())
                    <a href="{{ $restaurants_filter->nextPageUrl() }}" class="page-link">次</a>
                @endif
            </div>

        </div>

    </div>
</div>

@include('inc.footer')
<style>
    .pagination a.active {
        border: 1px solid red;
    }

    .dish_type1,.dish_type2,.dish_type3,.dish_type4:hover{
        cursor: pointer;
    }

    .city1,.city2,.city3,.city4:hover {
        cursor: pointer;
    }

    .highlight{
        color: red;
    }

    .five-star-div,.four-star-div,.three-star-div,.two-star-div,.one-star-div:hover {
        cursor: pointer;
    }

</style>

<script>
    function filterByDish(dishId) {
        window.location.href = '/restaurant/filterByDish/' + dishId;
    }

    function filterByCity(city) {
        window.location.href = '/restaurant/filterByCity/' + city;
    }

    function filterByStar(star) {
        window.location.href = '/restaurant/filterByStar/' +star;
    }

    // to mau theo dish
    const dishType1Node = document.querySelector('.dish_type1');
    const dishType2Node = document.querySelector('.dish_type2');
    const dishType3Node = document.querySelector('.dish_type3');
    const dishType4Node = document.querySelector('.dish_type4');

    const path_dish = window.location.pathname;
    const dishId = parseInt(path_dish.split('/').pop());
    switch (dishId){
        case 1:
            dishType1Node.classList.add("highlight");
            break;
        case 2:
            dishType2Node.classList.add("highlight");
            break;
        case 3:
            dishType3Node.classList.add("highlight");
            break;
        case 4:
            dishType3Node.classList.add("highlight");
            break;
    }

    // to mau theo city
    const city1Node = document.querySelector('.city1');
    const city2Node = document.querySelector('.city2');
    const city3Node = document.querySelector('.city3');
    const city4Node = document.querySelector('.city4');

    const path_city = window.location.pathname;
    const city = path_city.split('/').pop();
    console.log(city);
    switch (city) {
        case 'Ha%20Noi':
            city1Node.classList.add("highlight");
            break;
        case 'Ho%20Chi%20Minh':
            city2Node.classList.add("highlight");
            break;
        case 'Da%20Nang':
            city3Node.classList.add("highlight");
            break;
        case 'Nha%20Trang':
            city4Node.classList.add("highlight");
            break;
    }
</script>


