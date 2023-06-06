@include('inc.header')
@include('layout.app')

<div class="container-fluid p-4">
    <div class="row d-flex justify-content-around flex-row p-4">
        <div class="sidebar col-lg-3 col-md-6 col-sm-12 p-4">
            <div class="card">
                <div class="card-body">
                    <div class="sidebar-title d-flex">
                        <i class="fa-solid fa-bars mr-4"></i>
                        <h5 class="card-title">カテゴリィ</h5>
                    </div>
                    <hr>
                    <div class="category-item d-flex">
                        <i class="fa-solid fa-arrow-right"></i>
                        <h5 class="card-title dish dish_type1">ビーフン</h5>
                    </div>
                    <div class="category-item d-flex">
                        <i class="fa-solid fa-arrow-right"></i>
                        <h5 class="card-title dish dish_type2">Pho</h5>
                    </div>
                    <div class="category-item d-flex">
                        <i class="fa-solid fa-arrow-right"></i>
                        <h5 class="card-title dish dish_type3">パン</h5>
                    </div>
                    <div class="category-item d-flex">
                        <i class="fa-solid fa-arrow-right"></i>
                        <h5 class="card-title dish dish_type4">米</h5>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-9 d-flex flex-column align-items-center">
            <div class="dish-list d-flex justify-content-around flex-wrap" style="width: 100%">
                @foreach ($dishes as $dish)
                    <div class="dish-wrap mb-4" style="width: 31%">
                        <div class="card position-relative" style="height: 25rem">
                            <img class="card-img-top" src="{{ asset($dish->image_url) }}" alt="Product image" style="height: 55%; object-fit: cover;">
                            <div class="card-body d-flex flex-column justify-content-between">
                                <div>
                                    <h5 class="card-title" style="font-size: 2rem; font-weight: bold; color: red">{{$dish->name}}</h5>
                                    <p class="card-text mt-2">{{$dish->address}}</p>
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
                @if ($dishes->currentPage() > 1)
                    <a href="{{ $dishes->previousPageUrl() }}" class="page-link">前</a>
                @endif

                @for ($i = 1; $i <= $dishes->lastPage(); $i++)
                    <a href="{{ $dishes->url($i) }}" class="page-link{{ ($dishes->currentPage() == $i) ? ' active' : '' }}">{{ $i }}</a>
                @endfor

                @if ($dishes->hasMorePages())
                    <a href="{{ $dishes->nextPageUrl() }}" class="page-link">次</a>
                @endif
            </div>
        </div>

    </div>
</div>

@include('inc.footer')
<style>
    .dish-wrap:hover {
        box-shadow: 0 0 10px rgba(0,0,0,0.4);
    }

    .pagination a.active {
        border: 1px solid red;
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

</style>
