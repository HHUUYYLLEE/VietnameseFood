@include('inc.header')
@include('layout.app')

<div class="container-fluid p-4">
    <div class="row d-flex justify-content-around flex-row pl-4 pt-4">
        @include('inc.sidebar_restaurant')
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
                                    @for ($i = 1; $i <= 5; $i++)
                                        @if ($percent>= $i * 20)
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
                @php
                    if(isset($_GET['restaurantName'])){
                        $restaurantName = $_GET['restaurantName'];
                        $append = '&restaurantName='.$restaurantName;
                    }
                    else{
                        $append = '';
                    }
                @endphp

                @if ($restaurants->currentPage() > 1)
                    <a href="{{ $restaurants->previousPageUrl(). $append }}" class="page-link">前</a>
                @endif

                @for ($i = 1; $i <= $restaurants->lastPage(); $i++)
                    <a href="{{$restaurants->url($i) . $append }} " class="page-link{{ ($restaurants->currentPage() == $i) ? ' active' : '' }}">{{ $i }}</a>
                @endfor

                @if ($restaurants->hasMorePages())
                    <a href="{{ $restaurants->nextPageUrl(). $append }}" class="page-link">次</a>
                @endif
            </div>
        </div>
    </div>
</div>

@include('inc.footer')
<script>
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
            }
            window.location.href = '/restaurant/filterByCriteria?dishID=' + activeDishId + '&cityID=' + activeCityId + '&starID=' + activeStarId;
        })
    })
</script>