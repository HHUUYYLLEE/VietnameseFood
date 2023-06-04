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
                        <h5 class="card-title">ビーフンを売る</h5>
                    </div>
                    <div class="category-item d-flex">
                        <i class="fa-solid fa-arrow-right"></i>
                        <h5 class="card-title">Phoを売る</h5>
                    </div>
                    <div class="category-item d-flex">
                        <i class="fa-solid fa-arrow-right"></i>
                        <h5 class="card-title">パンを売る</h5>
                    </div>
                    <div class="category-item d-flex">
                        <i class="fa-solid fa-arrow-right"></i>
                        <h5 class="card-title">米を売る</h5>
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
                        <h5 class="card-title">Hanoi</h5>
                    </div>
                    <div class="category-item d-flex">
                        <i class="fa-solid fa-arrow-right"></i>
                        <h5 class="card-title">Ho Chi Minh</h5>
                    </div>
                    <div class="category-item d-flex">
                        <i class="fa-solid fa-arrow-right"></i>
                        <h5 class="card-title">Da Nang</h5>
                    </div>
                    <div class="category-item d-flex">
                        <i class="fa-solid fa-arrow-right"></i>
                        <h5 class="card-title">Nha Trang</h5>
                    </div>
                </div>
            </div>
            <div class="star-group-review mt-4">
                <div class="row-star d-flex justify-content-around">
                    <div class="five-star">
                        <i class="fa-regular fa-star"></i>
                        <i class="fa-regular fa-star"></i>
                        <i class="fa-regular fa-star"></i>
                        <i class="fa-regular fa-star"></i>
                        <i class="fa-regular fa-star"></i>
                    </div>
                    <p>以上</p>
                </div>
                <div class="row-star d-flex justify-content-around">
                    <div class="four-star">
                        <i class="fa-regular fa-star"></i>
                        <i class="fa-regular fa-star"></i>
                        <i class="fa-regular fa-star"></i>
                        <i class="fa-regular fa-star"></i>
                        <i class="fa-regular fa-star"></i>
                    </div>
                    <p>以上</p>
                </div>

                <div class="row-star d-flex justify-content-around">
                    <div class="three-star">
                        <i class="fa-regular fa-star"></i>
                        <i class="fa-regular fa-star"></i>
                        <i class="fa-regular fa-star"></i>
                        <i class="fa-regular fa-star"></i>
                        <i class="fa-regular fa-star"></i>
                    </div>
                    <p>以上</p>
                </div>
                <div class="row-star d-flex justify-content-around">
                    <div class="two-star">
                        <i class="fa-regular fa-star"></i>
                        <i class="fa-regular fa-star"></i>
                        <i class="fa-regular fa-star"></i>
                        <i class="fa-regular fa-star"></i>
                        <i class="fa-regular fa-star"></i>
                    </div>
                    <p>以上</p>
                </div>

                <div class="row-star d-flex justify-content-around">
                    <div class="one-star">
                        <i class="fa-regular fa-star"></i>
                        <i class="fa-regular fa-star"></i>
                        <i class="fa-regular fa-star"></i>
                        <i class="fa-regular fa-star"></i>
                        <i class="fa-regular fa-star"></i>
                    </div>
                    <p>以上</p>
                </div>
            </div>
        </div>
        <div class="col-lg-9 d-flex justify-content-between flex-wrap">
            @foreach ($restaurants as $restaurant)
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
        </div>
        {{--Tạo đường link phân trang cho danh sách nhà hàng--}}
        <div class="pagination mt-4">
            @if ($restaurants->currentPage() > 1)
                <a href="{{ $restaurants->previousPageUrl() }}" class="page-link">前</a>
            @endif

            @for ($i = 1; $i <= $restaurants->lastPage(); $i++)
                <a href="{{ $restaurants->url($i) }}" class="page-link{{ ($restaurants->currentPage() == $i) ? ' active' : '' }}">{{ $i }}</a>
            @endfor

            @if ($restaurants->hasMorePages())
                <a href="{{ $restaurants->nextPageUrl() }}" class="page-link">次</a>
            @endif
        </div>

    </div>
</div>

@include('inc.footer')
<style>
    .pagination a.active {
        border: 1px solid red;
    }
</style>
