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
            <div class="dish-card-item d-flex mt-5 border border-danger rounded" style="width: 40%; height: 200px">
                <img src="{{$dish->image_url}}" class="card-img-top" alt="..."
                     style="max-width: 40%; height: auto; object-fit: cover">
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
        width: 80%;
        height: auto;
    }

    .menu-session {
        margin-bottom: 100px;
    }
</style>
