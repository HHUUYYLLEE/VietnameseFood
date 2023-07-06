@include('inc.header')
@include('layout.app')
<div class="booking-wrapper">
    <div class="container">
        <h5 style="color: red; font-weight: 600; padding:30px">ブッキングの履歴</h5>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">レストラン名</th>
                    <th scope="col">ブッキングの情報</th>
                    <th scope="col">スターテス</th>
                    <th scope="col">ブッキングはいつ</th>
                    <th scope="col"></th>
                </tr>
            </thead>
            <tbody>
                @foreach($data as $item)

                <tr>
                    <td id="hidden_restaurant_id" class="hidden">{{ $item->restaurant_id }} </td>
                    <td id= "restaurant_name" class="restaurant-name" scope="row">{!! $item->restaurant_name !!}</th>
                    <td>
                        <p class="fw-bold mb-1">{{ $item->booking_date }}</p>
                        <p class="fw-bold mb-0">{{$item->booking_time}}, {{$item->number_of_people}}人</p>
                    </td>
                    <td>
                        @if($item->status == 0)
                        確認中
                        @elseif($item->status == 1)
                        断った
                        @else
                        <i style="color:green" class="fa-solid fa-check-square"></i>
                        @endif
                    </td>
                    <td>
                        <p class="fw-bold mb-1">{{ $item->create_date }}</p>
                        <p class="fw-bold mb-0">{{$item->create_time}}</p>
                    </td>
                    <td>
                        @if($item->status == 2)
                        <button type="button" class="btn btn-danger create-comment" data-bs-toggle="modal" data-bs-target="#myModal">評価</button>
                        @else
                        <button type="button" class="btn btn-danger" disabled>評価</button>
                        @endif
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>


    <div class="modal" id="myModal">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header d-flex flex-column ">
                    <h5 class="modal-title">評価</h5>
                    <h5 class="modal-title"><u id ="modal_restaurant_name">レストラン名</u></h5>
                </div>
                <div class="modal-body d-flex justify-content-center">
                    <form method="post" action="{{ route('comment.create') }}" enctype="multipart/form-data">
                        @csrf
                        <div class=" mb-5 form-group d-flex justify-content-center">
                            <div class="star">
                                <i class="far fa-star fa-3x"></i>
                                <i class="far fa-star fa-3x"></i>
                                <i class="far fa-star fa-3x"></i>
                                <i class="far fa-star fa-3x"></i>
                                <i class="far fa-star fa-3x"></i>
                            </div>
                            <!-- hidden input for star rating -->
                            <input type="hidden" name="rating" class="rating-value" value="1">
                            <input type="hidden" id="modal_restaurant_id" name="restaurant_id" >
                        </div>
                        <div class="mb-5 form-group">
                            <span style="color:#A32525; font-size:x-small; font-weight:bold" class="p-2">
                                コメント</span>
                            <div class="input-group border border-danger rounded">
                                <textarea style=" background-color:#FAEAEA !important; border:none !important;" rows="7" placeholder="コメント" id="comment" name="comment" type="text" class="form-control"></textarea>
                            </div>
                        </div>
                        <div class="mb-5 form-group ">
                            <span style="color:#A32525; font-size:x-small; font-weight:bold" class="p-2">
                                イメージのURL・ファイル</span>
                            <div class="input-group border border-danger rounded mb-2">
                                <input style="background-color:#FAEAEA !important" type="file" name="photo" id="photo" class="form-control form-control-file">
                            </div>
                            <label for="photo" class="custom-file-upload d-flex align-items-center">
                                <i class="far fa-plus fa-2x p-2"></i>
                                <span style="color:#A32525; font-size:small; font-weight:bold">イメージのファイルを追加</span>
                            </label>
                        </div>
                        <div class="d-flex justify-content-around">
                            <button type="cancel" class="col-4 btn btn-primary btn-block btn-cancel" style="background-color: #5F28FD;" data-bs-dismiss="modal">キャンセル</button>
                            <button type="submit" class="col-4 btn btn-danger btn-block">OK</button>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
<style>
    .booking-wrapper {
        min-height: calc(100vh - 70px);
        /* 70px là chiều cao của header */
        position: relative;
    }

    .footer {
        position: absolute;
        bottom: 0;
        left: 0;
        width: 100%;
        height: 50px;
        /* Chiều cao của footer */
    }

    .restaurant-name {
        color: red;

    }

    thead th {
        font-size: large;
    }

    tbody td {

        font-weight: 600;
    }

    .modal-header,
    .modal-body,
    .modal-footer {
        background: #EAFFD0;
        color: #C0302B;
    }

    .required:after {
        content: "*";
        color: red;
    }

    .modal-title {
        font-weight: 600;
    }

    .star i {
        color: #8ECC09;
    }

    ::-webkit-file-upload-button {
        display: none;
    }

    #hidden_restaurant_id {
        display: none;
    }
</style>
<script>
    $(document).ready(function() {
        $('.star i').click(function() {
            //set rating value to input field
            $(this).addClass('fas').removeClass('far');
            $(this).prevAll().addClass('fas').removeClass('far');
            $(this).nextAll().addClass('far').removeClass('fas');
            var ratingValue;
            for (let i = 1; i <= 5; i++) {
                if ($('.star i:nth-child(' + i + ')').hasClass('fas')) {
                    ratingValue = i;
                }
            }
            $('.rating-value').val(ratingValue);


        });
    });

    $('.create-comment').click(function() {
       var restaurant_id = $(this).closest('tr').find('#hidden_restaurant_id').text();
       
         $('#modal_restaurant_id').val(restaurant_id);
        var restaurant_name = $(this).closest('tr').find('#restaurant_name').text();
        $('#modal_restaurant_name').text(restaurant_name);
    });
</script>
@include('inc.footer')