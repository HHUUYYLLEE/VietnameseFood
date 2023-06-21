{{--    seperate session --}}
<div class="container-fluid line-separate d-flex justify-content-between mt-5 mb-5">
    <hr style="width: 40%">
    <p class="menu-title font-weight-bold" style="line-height: 40px">レストランにある</p>
    <hr style="width: 40%">
</div>

<div class="container-fluid　mt-4">
    <div class="d-flex flex-column align-items-center">
        <div class="restaurant-list d-flex justify-content-around flex-wrap" style="width: 100%">
            @foreach ($restaurants as $restaurant)
                <div class="restaurant-wrap mb-4" style="width: 21%"
                     onclick="goToRestaurantDetailPage({{ $restaurant->id }})" data-id="{{ $restaurant->id }}">
                    <div class="card position-relative" style="height: 25rem">
                        <img class="card-img-top" src="{{ asset($restaurant->image_url) }}" alt="Product image"
                             style="height: 50%; object-fit: cover;">
                        <div class="card-body d-flex flex-column justify-content-between">
                            <div>
                                <h5 class="card-title"
                                    style="font-size: 2rem; font-weight: bold; color: red">{{$restaurant->name}}</h5>
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
    </div>
</div>
<style>
    .restaurant-wrap {
        cursor: pointer;
    }

    .menu-title {
        font-size: 1.8rem;
        color: red;
    }

    .line-separate hr {
        border: 1px solid #3c3d3e;
        margin-top: 20px;
    }

</style>
<script>

    function goToRestaurantDetailPage(id) {
        window.location.href = '/restaurant/' + id;
    }
</script>
