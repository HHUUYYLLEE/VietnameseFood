<div id="review-restaurant-list">
    <hr />
    <div class="review-wrapper">
        <div class="container">
            <div class="d-flex justify-content-between mb-4">
                <button class="btn btn-light border px-5" style="background-color: #FDFFFB;">5
                    <i class="fa-solid fa-star" style="color: #CEC71C"></i>
                    (
                    {!! $star[5] !!}
                    )</button>
                <button class="btn btn-light border px-5" style="background-color: #FDFFFB;">4
                    <i class="fa-solid fa-star" style="color: #CEC71C"></i>
                    (
                    {!! $star[4] !!}
                    )</button>
                <button class="btn btn-light border px-5" style="background-color: #FDFFFB;">3
                    <i class="fa-solid fa-star" style="color: #CEC71C"></i>
                    (
                    {!! $star[3] !!}
                    )</button>
                <button class="btn btn-light border px-5" style="background-color: #FDFFFB;">2
                    <i class="fa-solid fa-star" style="color: #CEC71C"></i>
                    (
                    {!! $star[2] !!}
                    )</button>
                <button class="btn btn-light border px-5" style="background-color: #FDFFFB;">1
                    <i class="fa-solid fa-star" style="color: #CEC71C"></i>
                    (
                    {!! $star[1] !!}
                    )</button>
            </div>
            <div class="dropdown mb-5">
                <button style="background-color: #FDFFFB;" class="btn btn-light border dropdown-toggle px-5" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="width: 200px;">
                    一番新しい
                </button>
                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                    <a class="dropdown-item" href="#">Action</a>
                    <a class="dropdown-item" href="#">Another action</a>
                    <a class="dropdown-item" href="#">Something else here</a>
                </div>
            </div>
            @foreach ($comments as $comment)
            @if ($loop->iteration == 3)
            <div class="more d-none">
                @endif
                <div class="card">
                    <div class="card-header d-flex border-0 justify-content-between" style="background-color: #FDFFFB;">
                        <div class="block-avt-name-rating d-flex">
                            <img src="https://mdbcdn.b-cdn.net/img/new/avatars/1.webp" class="rounded-circle shadow-4" style="width: 50px; height: 50px;" alt="Avatar" />
                            <div class="name-rating">
                                <h5>{!! $comment->user->email !!}</h5>
                                <div class="rating">
                                    @for ($i = 1; $i <= $comment->rating; $i++)
                                        <i class="fa-solid fa-star" style="color: #CEC71C"></i>
                                        @endfor
                                </div>
                            </div>
                        </div>
                        @can('updateComment', $comment)
                        <div class="edit">
                            <div class="dropdown">
                                <button class="btn btn-link dropdown text-decoration-none" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <i class="fa-solid fa-ellipsis"></i>
                                </button>
                                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                    <a class="dropdown-item" href="#"> 編集</a>
                                    <a class="dropdown-item" href="#">コメントを削除</a>
                                </div>
                            </div>
                        </div>
                        @endcan
                    </div>
                    <div class="card-body">
                        {!! $comment->comment !!}
                    </div>
                </div>
                @endforeach
            </div>
            <div class="mt-5 d-flex border-0 justify-content-center">
                <div class="btn showmore btn-danger">続きを見る</div>
            </div>
        </div>

    </div>
</div>
<script>
    $(document).ready(function() {
        $('.showmore').click(function() {
            $('.more').toggleClass('d-none');
            if ($('.more').hasClass('d-none')) {
                $('.showmore').html('もっと見る');
            } else {
                $('.showmore').html('閉じる');
            }
        });
    });
</script>

<style>
    #review-restaurant-list hr {
        border: none;
        border-top: 3px solid #333;
        color: #333;
        text-align: center;
        height: 10px;
    }

    #review-restaurant-list hr::after {
        content: "評価";
    }
</style>