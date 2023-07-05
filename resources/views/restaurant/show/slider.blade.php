<div class="container">
    <div class="row gx-25">
        <div id="restaurant-slider mt-4" class="col-lg-5 pr-5">
            <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img class="d-block w-100" src="{{$restaurant->image_url}}" alt="First slide">
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100" src="{{$restaurant_imgs[0]}}" alt="Second slide">
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100" src="{{$restaurant_imgs[1]}}" alt="Third slide">
                    </div>
                </div>

            </div>

            <div class="image-box d-flex justify-content-between mt-4">
                <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                    <i class="prev-slider fas fa-chevron-left"></i>
                </a>
                <div class="image-box-item" style="width: 32%">
                    <img src="{{$restaurant->image_url}}" alt="First slide">
                </div>
                <div class="image-box-item" style="width: 32%">
                    <img src="{{$restaurant_imgs[0]}}" alt="Second slide">
                </div>
                <div class="image-box-item" style="width: 32%">
                    <img src="{{$restaurant_imgs[1]}}" alt="Third slide">
                </div>
                <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                    <i class="next-slider fas fa-chevron-right"></i>
                </a>
            </div>

        </div>
        <div class="restaurant-info col-lg-7">
            <div class="restaurant-info-top pl-5 d-flex">
                <div class="restaurant-name-star col-lg-7">
                    <h2 class="restaurant-name">{{$restaurant->name}}</h2>
                    <div class="star-button d-flex justify-content-between mt-4">
                        @php
                            $star = $restaurant->rating_avg;
                            $maxRating = 5;
                            $percent = ($star / $maxRating) * 100;
                        @endphp

                        <div class="star-group">
                            @for ($i = 1; $i <= 5; $i++)
                                @if ($percent>= $i * 20)
                                    <i class="review-star fas fa-star"></i>
                                @elseif ($percent >= ($i - 0.5) * 20)
                                    <i class="review-star fas fa-star-half-alt"></i>
                                @else
                                    <i class="review-star far fa-star"></i>
                                @endif
                            @endfor
                        </div>
                    </div>
                </div>
                <div class="restaurant-time col-lg-5 pl-5">
                    <div class="time-info mt-3">
                        <p class="time-line">{{$restaurant->opening_time}}</p>
                        <p class="time-line">{{$restaurant->closing_time}}</p>
                    </div>
                    <button type="button" class="btn btn-danger btn-order btn-booking">予約</button>
                </div>
            </div>
            <hr>
            <p class="restaurant-address">{{$restaurant->address}}</p>
            <div class="text-box mt-4" style="width: 100%">
                <p>{{$restaurant->introduction}}</p>
            </div>
        </div>
    </div>

</div>

<style>
    * {
        box-sizing: border-box;
    }

    .carousel-inner {
        box-shadow: 0 0 10px 0 rgba(0, 0, 0, .6);
    }


    .image-box {
        border: 2px solid #3e3b3b;
        padding: 10px 0;
        height: auto;
        position: relative;
    }

    .image-box-item {
        padding: 0 10px;
        height: 120px;
    }

    .image-box-item img {
        width: 100%;
        height: 120px;
        object-fit: cover;
    }

    .prev-slider {
        width: 50px;
        height: 50px;
        font-size: 50px;
        color: #1a202c;
        position: absolute;
        top: calc(50% - 25px);
        left: -45px;
    }

    .next-slider {
        width: 50px;
        height: 50px;
        font-size: 50px;
        color: #1a202c;
        position: absolute;
        top: calc(50% - 25px);
        right: -45px;
    }

    .review-star {
        font-size: 3rem;
    }

    .restaurant-name {
        font-size: 2.8rem;
        font-weight: bold;
        color: red;
    }

    .time-line {
        font-size: 1.8rem;
        font-weight: bold;
        color: #1a202c;
        line-height: 1.6rem;
    }

    .btn-order {
        padding: 10px 50px;
        font-size: 1.5rem;
        font-weight: bold;
        color: #fff;
        background-color: #e53e3e;
        border: none;
        border-radius: 5px;
    }

    hr {
        border: 1px solid #3c3d3e;
        margin-top: 20px;
        margin-left: 50px;
    }

    .restaurant-address {
        font-size: 1.8rem;
        font-weight: bold;
        color: #1a202c;
        margin-left: 50px;
    }

    .text-box {
        width: 300px;
        border: 1px solid #ac1b1b;
        padding: 10px;
        border-radius: 5px;
        margin-left: 50px;
        min-height: 200px;
    }

</style>

<script>
    $(".btn-booking").click(function() {
        @guest
            warningNotification({
                title: 'ログインしてください',
                message: 'ログインしてください'
            });
        @else
            restaurantId = {{$restaurant->id}};
            // Test get myModal
            jQuery.noConflict(); 
            $('#myModal').modal('show');
        @endguest
    });
</script>