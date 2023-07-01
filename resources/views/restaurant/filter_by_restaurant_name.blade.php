@include('inc.header')
@include('layout.app')

<div class="container-fluid p-4">
    <div class="row d-flex justify-content-around flex-row pl-4 pt-4">
        @include('inc.sidebar_restaurant')
        <div class="col-lg-9 d-flex flex-column align-items-center">
            @include('restaurant.list_content')
            
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
<style>
    .restaurant-wrap:hover {
        cursor: pointer;
    }
</style>

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

    function goToRestaurantDetailPage(id) {
        window.location.href = "/restaurant/" + id;
    }
</script>