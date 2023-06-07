@include('inc.header')
@include('layout.app')

<div class="container-fluid p-4">
    <div class="row d-flex justify-content-around flex-row p-4">
        <div class="sidebar col-lg-3 col-md-6 col-sm-12 p-4">
            <div class="card">
                <div class="card-body">
                    <div class="sidebar-title d-flex">
                        <i class="category-title fa-solid fa-bars mr-4"></i>
                        <h5 class="category-title card-title">カテゴリィ</h5>
                    </div>
                    <hr>
                    <div class="category-item d-flex">
                        <i class="fa-solid fa-arrow-right"></i>
                        <h5 class="card-title dish dish_type1" onclick="activeDish(1)">ビーフン</h5>
                    </div>
                    <div class="category-item d-flex">
                        <i class="fa-solid fa-arrow-right"></i>
                        <h5 class="card-title dish dish_type2" onclick="activeDish(2)">Pho</h5>
                    </div>
                    <div class="category-item d-flex">
                        <i class="fa-solid fa-arrow-right"></i>
                        <h5 class="card-title dish dish_type3" onclick="activeDish(3)">パン</h5>
                    </div>
                    <div class="category-item d-flex">
                        <i class="fa-solid fa-arrow-right"></i>
                        <h5 class="card-title dish dish_type4" onclick="activeDish(4)">米</h5>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-9 d-flex flex-column align-items-center">
            <div class="dish-list d-flex justify-content-around flex-wrap" style="width: 100%">
                @foreach ($dishes as $dish)
                <div class="dish-wrap mb-4" style="width: 31%">
                    <div class="card dish-box dish-box-height position-relative">
                        <img class="card-img-top" src="{{ asset($dish->image_url) }}" alt="Product image" style="height: 55%; object-fit: cover;">
                        <div class="card-body d-flex flex-column justify-content-between">
                            <div>
                                <h5 class="card-title" style="font-size: 2rem; font-weight: bold; color: red">{{$dish->name}}</h5>
                                <p class="card-text mt-2">{{$dish->address}}</p>
                            </div>
                            <div class="dish-description mt-2">
                                <p class="visible dish-description-btn" onclick="displayDescription(event)">
                                    説明…
                                </p>
                                <p class="invisible description-detail">
                                    {{$dish->introduction}}
                                </p>
                            </div>

                        </div>
                    </div>
                </div>
                @endforeach

            </div>

            {{--Tạo đường link phân trang cho danh sách nhà hàng--}}
            <div class="pagination mt-4">
            @php
                    if(isset($_GET['dishID'])){
                    $dishID = $_GET['dishID'];
                    $append = '&dishID=' . $dishID;
                    }
                    else{
                    $append = '';
                    }
                    @endphp
                @if ($dishes->currentPage() > 1)
                <a href="{{ $dishes->previousPageUrl(). $append }}" class="page-link">前</a>
                @endif

                @for ($i = 1; $i <= $dishes->lastPage(); $i++)
                  
                    <a href="{{$dishes->url($i). $append }}" class="page-link{{ ($dishes->currentPage() == $i) ? ' active' : '' }}">{{ $i }}</a>
                    @endfor

                    @if ($dishes->hasMorePages())
                    <a href="{{ $dishes->nextPageUrl(). $append }}" class="page-link">次</a>
                    @endif
            </div>
        </div>

    </div>
</div>

@include('inc.footer')
<style>
    .dish-wrap:hover {
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.4);
    }

    .dish-box-height {
        height: 25rem;
    }

    .dish-box-height-modify {
        height: auto;
    }

    .pagination a.active {
        border: 1px solid red;
    }

    .category-title {
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

    .active {
        color: red;
    }

    .dish-description-btn {
        font-size: 20px;
        color: #783232;
    }

    .dish-description-btn:hover {
        cursor: pointer;
        color: red;
    }

    .card {
        border-radius: 10px;
        background-color: #FEF7F7;
    }
</style>

{{--Jquery--}}
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<script>
    function displayDescription($event) {

        const clickedElement = $event.target;
        const parentElement = clickedElement.closest('.dish-description'); // Tìm phần tử cha gần nhất có class 'dish-description'
        const descriptionDetail = parentElement.querySelector('.description-detail'); // Tìm phần tử 'description-detail' con của phần tử cha
        const dishBox = clickedElement.closest('.dish-box');
        if (descriptionDetail.classList.contains("visible")) {
            descriptionDetail.classList.remove('visible');
            descriptionDetail.classList.add('invisible');
            dishBox.classList.remove('dish-box-height-modify');
            dishBox.classList.add('dish-box-height');
        } else {
            descriptionDetail.classList.remove('invisible');
            descriptionDetail.classList.add('visible');
            dishBox.classList.remove('dish-box-height');
            dishBox.classList.add('dish-box-height-modify');
        }

    }

    function activeDish(dishId) {
        $('.dish_type1').removeClass('active');
        $('.dish_type2').removeClass('active');
        $('.dish_type3').removeClass('active');
        $('.dish_type4').removeClass('active');
        $('.dish_type' + dishId).addClass('active');
    }

    $(document).ready(function() {
        $('.dish').click(function() {
            //get dish active id
            if ($('.dish.active').attr('class') == undefined) {
                var activeDishId = 0;
            } else {
                var activeDishId = $('.dish.active').attr('class').split(' ')[2].split('dish_type')[1];
            }

            window.location.href = '/dish/filterByCriteria?dishID=' + activeDishId;
        })
        //get dishId from url
        var url = window.location.href;
        if (url.split('dishID=')[1] == undefined) {
            var $dishId = 0;
        } else {
            var $dishId = url.split('dishID=')[1].split('&')[0];
        }

        activeDish($dishId);
    })
</script>