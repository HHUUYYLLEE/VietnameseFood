{{--    seperate session --}}
<div class="container-fluid line-separate d-flex justify-content-between mt-5">
    <hr style="width: 40%">
    <p class="menu-title font-weight-bold" style="line-height: 40px">メニュー</p>
    <hr style="width: 40%">
</div>

{{-- menu session --}}
<div class="container menu-session">
    <div class="row d-flex justify-content-between gx-50">
        @foreach ($dishes as $dish)
            <div class="dish-card-item d-flex mt-5 border border-danger rounded" style="width: 40%; min-height: 200px" onclick="goToRestaurantDetailPage({{ $dish->id }})" data-id="{{ $dish->id }}">
                <img src="{{$dish->image_url}}" class="card-img-top" alt="..."
                     style="max-width: 45%; height: auto; object-fit: cover">
                <div class="card-body ml-4 mt-4">
                    <h5 class="card-title" style="color: red;font-size: 2rem">{{$dish->name}}</h5>
                    <p class="card-text mt-4" style="font-size: 1.5rem">{{ number_format($dish->price, 0, ',', '.') }}
                        đ</p>
                </div>
            </div>
        @endforeach
    </div>
</div>

<style>
    .menu-title {
        font-size: 1.8rem;
        color: red;
    }

    .dish-card-item {
        width: 100%;
        height: auto;
    }

    .menu-session {
        margin-bottom: 100px;
    }

    .dish-card-item:hover {
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.4);
        cursor: pointer;
    }

</style>

<script>
    function goToRestaurantDetailPage(id) {
        window.location.href = '/dish/' + id;
    }
</script>
