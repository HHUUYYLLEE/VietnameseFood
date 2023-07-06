@include('layout.app')


<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<link href="https://cdn.jsdelivr.net/npm/sweetalert2@11.0.20/dist/sweetalert2.min.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.0.20/dist/sweetalert2.all.min.js"></script>


<div class="app booking-screen-app">
    @include('booking.header')
    <div class="booking-header-space">

    </div>
    <div class="container-fluid wrap-box">
        <p class="booking-confirming-text">確認中</p>
        <div class="booking-confirming-wrap">

            @php
            $i = 1;
            @endphp

            @foreach($bookings_confirming as $booking_confirming_item)

            <div class="booking-confirming-box d-flex justify-content-between align-item-center">
                <span class="modal-dropdown-span" data-toggle="modal" data-target="#exampleModal" data-booking-id="{{$booking_confirming_item->id}}" data-booking-name="{{$booking_confirming_item->name}}" data-booking-number_of_people="{{$booking_confirming_item->number_of_people}}" data-booking-phone_number="{{$booking_confirming_item->phone_number}}" data-booking-email="{{$booking_confirming_item->email}}" data-booking-time="{{$booking_confirming_item->booking_date_time}}" style="width:70%;">
                    <p>ブッキング{{$i}}</p>
                </span>

                <span>
                    <button type=" button" class="btn btn-primary bg-primary custom-margin-right-btn-small accept-button" data-booking-id="{{ $booking_confirming_item->id }}">受け入れる</button>
                    <button type="button" data-booking-id="{{ $booking_confirming_item->id }}" class=" btn btn-danger bg-danger custom-margin-right-btn reject-button">断る</button>
                </span>

            </div>

            @php
            $i++;
            @endphp

            @endforeach
        </div>

        <p class=" booking-confirming-text mt-5">確認済み</p>

        <div class="booking-confirmed-wrap">

            @php
            $j = $i;
            @endphp

            @foreach($bookings_confirmed as $booking_confirmed_item)

            <div class="booking-confirming-box d-flex justify-content-between align-item-center background-color-custom booking-confirmed-box">
                <span class="modal-dropdown-span" data-toggle="modal" data-target="#exampleModal" data-booking-id="{{$booking_confirming_item->id}}" data-booking-name="{{$booking_confirming_item->name}}" data-booking-number_of_people="{{$booking_confirming_item->number_of_people}}" data-booking-phone_number="{{$booking_confirming_item->phone_number}}" data-booking-email="{{$booking_confirming_item->email}}" data-booking-time="{{$booking_confirming_item->booking_date_time}}" style="width: 80%;">
                    <p>ブッキング{{$j}}</p>
                </span>

                <span>
                    <button type=" button" data-booking-id="{{ $booking_confirmed_item->id }}" class="btn btn-danger bg-danger custom-margin-right-btn delete-button">削除・Delete</button>
                </span>

            </div>


            @php
            $j++;
            $total_booking = $j - 1;
            @endphp

            @endforeach
        </div>

        <!-- phan popup -->
        <div id="booking-popup-details">
            <!-- Button trigger modal -->
            <!-- <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
                Launch demo modal
            </button> -->

            <!-- Modal -->
            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header" style="display: grid">
                            <h1 class="modal-title" id="exampleModalLabel">
                                ブッキングの情報
                            </h1>
                        </div>
                        <div class="modal-body">
                            <div class="row">
                                <div class="col d-flex justify-content-center">
                                    <div class="booking-space">
                                        <form class="space-modifier" role="search">
                                            <div class="search border border-danger rounded d-flex align-items-center" style="background-color: #ffdede !important">
                                                <input id="input-name-booking" style="
                            background-color: rgb(0, 0, 0, 0) !important;
                            border: none !important;
                            height: calc(1.5em + 1.75rem + 2px);
                          " type="search" class="form-control search_input" name="search" placeholder="名前" aria-label="Search" />
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col d-flex justify-content-center">
                                    <div class="booking-space">
                                        <form class="space-modifier" role="search">
                                            <div class="search border border-danger rounded d-flex align-items-center" style="background-color: #ffdede !important">
                                                <input id="input-booking-number-people" style=" background-color: rgb(0, 0, 0, 0) !important;
                                                    border: none !important; height: calc(1.5em + 1.75rem +
                                                    2px); " type=" search" class="form-control search_input" name="search" placeholder="人数" aria-label="Search" />
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col d-flex justify-content-center">
                                    <div class="booking-space">
                                        <form class="space-modifier" role="search">
                                            <div class="search border border-danger rounded d-flex align-items-center" style="background-color: #ffdede !important">
                                                <input id="input-booking-phone" style="
                            background-color: rgb(0, 0, 0, 0) !important;
                            border: none !important;
                            height: calc(1.5em + 1.75rem + 2px);
                          " type="search" class="form-control search_input" name="search" placeholder="電話番号" aria-label="Search" />
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col d-flex justify-content-center">
                                    <div class="booking-space">
                                        <form class="space-modifier" role="search">
                                            <div class="search border border-danger rounded d-flex align-items-center" style="background-color: #ffdede !important">
                                                <input id="input-booking-datetime" style=" background-color: rgb(0, 0, 0, 0) !important; border:
                                                    none !important; height: calc(1.5em + 1.75rem + 2px); " type="
                                                    search" class="form-control search_input" name="search" placeholder="日時" aria-label="Search" />
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col d-flex justify-content-center">
                                    <div class="booking-space">
                                        <form class="space-modifier" role="search">
                                            <div class="search border border-danger rounded d-flex align-items-center" style="background-color: #ffdede !important">
                                                <input id="input-booking-email" style=" background-color: rgb(0, 0, 0, 0) !important; border:
                                                    none !important; height: calc(1.5em + 1.75rem + 2px); " type="
                                                    search" class="form-control search_input" name="search" placeholder="メール" aria-label="Search" />
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <div class="booking-popup-footer">
                                <button type="submit" class="btn btn-primary-1 btn-close-modal">OK</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>


<style>
    .booking-screen-app {
        background-color: #B7B7B7;
        padding-bottom: 100px;
    }

    .booking-header-space {
        height: 180px;
        background-color: #B7B7B7;
    }

    #header-booking {
        background-color: white;
        display: flex;
        align-items: center;
        justify-content: center;
        padding: 25px 0;
        position: fixed;
        top: 0;
        left: 0;
        right: 0;
    }

    .wrap-box {
        width: 90%;
        background-color: white;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
        /* Thay đổi giá trị box shadow nếu cần */
        padding: 50px 80px 100px;
    }

    .booking-confirming-box {
        margin-bottom: 20px;
        border: 1px solid #000;
        background-color: #fadcdf;
        padding: 10px 40px;
        color: red;
    }

    .accept-button,
    .reject-button,
    .delete-button {
        margin-top: 9px;
    }

    .booking-confirming-box span p {
        font-size: 2rem;
        font-weight: bold;
        padding-top: 5px;
    }


    .booking-confirming-box span {
        line-height: 63.99px;
    }

    .booking-confirming-wrap {
        margin-top: 10px;
    }

    .custom-margin-right-btn {
        margin-right: 100px;
    }

    .custom-margin-right-btn-small {
        margin-right: 20px;
    }

    .booking-confirming-text {
        font-size: 2rem;
        font-weight: bold;
        color: red;
    }

    .background-color-custom {
        background-color: #fff;
    }


    /* phần popup */
    #booking-popup-details .modal-dialog .modal-header {
        text-align: center;
        justify-content: center;
    }

    #booking-popup-details .modal-dialog .modal-header h1 {
        font-weight: 600;
        margin-top: 40px;
        margin-bottom: 10px;
        color: #b31312;
    }

    #booking-popup-details .modal-dialog .modal-header p {
        font-weight: 600;
        font-size: 20px;
        color: red;
        margin-bottom: 20px;
    }

    #booking-popup-details .modal-dialog {
        max-width: 800px;
    }

    #booking-popup-details .row {
        margin-bottom: 20px;
        margin-top: 10px;
    }

    #booking-popup-details .row p {
        color: red;
        font-weight: 500;
    }

    #booking-popup-details .booking-space .space-modifier {
        width: 600px;
    }

    #booking-popup-details .booking-space ::placeholder {
        color: red;
        font-size: 24px;
        font-weight: 500;
        opacity: 0.25;
    }

    #booking-popup-details .booking-popup-footer .btn {
        width: 150px;
        height: 50px;
        font-size: 22px;
        font-weight: 500;
    }

    #booking-popup-details .booking-popup-footer .btn-primary-1 {
        color: #fff;
        background-color: red;
        border-color: red;
    }

    #booking-popup-details .modal-content {
        background-color: #e1ecc8;
    }

    #booking-popup-details .modal-dialog {
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
    }

    #booking-popup-details .modal-header {
        border-bottom: 1px solid black;
    }

    #booking-popup-details .modal-footer {
        border-top: none;
        padding-bottom: 30px;
        margin-top: 10px;
    }

    #booking-popup-details .booking-space {
        margin-top: 5px;
        margin-bottom: 5px;
    }
</style>

<script src="https://code.jquery.com/jquery-3.7.0.min.js" integrity="sha256-2Pmvv0kuTBOenSvLm6bvfBSSHrUJ+3A7x6P5Ebd07/g=" crossorigin="anonymous">
</script>
<script>
    $(document).ready(function() {

        // Xử lý sự kiện click nút "Đồng ý" trên modal
        $('.accept-button').on('click', function() {

            var bookingId = $(this).data('booking-id');
            //Gửi yêu cầu AJAX đến máy chủ Laravel để xác nhận booking
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
            $.ajax({
                url: '/bookings/' + bookingId + '/confirm',
                type: 'PUT',

                success: function(response) {
                    // alert('Xác nhận thành công');
                    // Kiểm tra phản hồi từ máy chủ Laravel

                    // Hiển thị thông báo đã xác nhận thành công
                    Swal.fire({
                        title: "Xác nhận thành công",
                        text: "Booking đã được xác nhận.",
                        icon: "success",
                        timer: 2000, // Thời gian hiển thị thông báo (tính bằng miligiây)
                        buttons: false
                    });
                    // Điều hướng trang web đến route booking.index sau 3 giây
                    setTimeout(function() {
                        window.location.href = '/bookings/show';
                    }, 2000);

                },
                error: function(xhr, status, error) {
                    // Xử lý khi yêu cầu thất bại
                    console.log(error);
                    // Xử lý lỗi
                    Swal.fire({
                        title: "Xác nhận thất bại",
                        text: "Có lỗi xảy ra khi xác nhận booking.",
                        icon: "error",
                        timer: 2000, // Thời gian hiển thị thông báo (tính bằng miligiây)
                        buttons: false
                    });
                }
            });


        });


        // Xử lý sự kiện click nút "Từ chối" trên modal
        $('.reject-button').on('click', function() {
            var bookingId = $(this).data('booking-id');

            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
            // Gửi yêu cầu Ajax khi nút "断る" được nhấp

            $.ajax({
                type: 'PUT',
                url: '/bookings/' + bookingId + '/reject',
                success: function(response) {
                    // Xử lý khi yêu cầu thành công
                    // Kiểm tra phản hồi từ máy chủ Laravel
                    if (response.success) {
                        // Hiển thị thông báo đã xác nhận thành công
                        Swal.fire({
                            title: "Từ chối thành công",
                            text: "Đã từ chối.",
                            icon: "success",
                            timer: 2000, // Thời gian hiển thị thông báo (tính bằng miligiây)
                            buttons: false
                        });

                    }
                    // Điều hướng trang web đến route booking.index sau 3 giây
                    setTimeout(function() {
                        window.location.href = '/bookings/show';
                    }, 2000);
                },
                error: function(xhr, status, error) {
                    console.log(error);
                    // Xử lý khi yêu cầu thất bại
                    Swal.fire('Lỗi', 'Có lỗi xảy ra. Vui lòng thử lại sau.',
                        'error');
                }
            });
            // Điều hướng trang web đến route booking.index sau 3 giây
            // window.location.href = '/booking/show';
        });



        // Xử lý sự kiện click nút xóa booking
        $('.delete-button').on('click', function() {
            var bookingId = $(this).data('booking-id');
            // Gửi yêu cầu Ajax khi nút "断る" được nhấp
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
            $.ajax({
                type: 'DELETE',
                url: '/bookings/' + bookingId,
                success: function(response) {
                    // Xử lý khi yêu cầu thành công
                    // Kiểm tra phản hồi từ máy chủ Laravel
                    if (response.success) {
                        // Hiển thị thông báo đã xác nhận thành công
                        Swal.fire({
                            title: "Xóa Booking thành công",
                            text: "Đã xóa.",
                            icon: "success",
                            timer: 2000, // Thời gian hiển thị thông báo (tính bằng miligiây)
                            buttons: false
                        });
                        // Điều hướng trang web đến route booking.index sau 3 giây
                        setTimeout(function() {
                            window.location.href = '/bookings/show';
                        }, 2000);

                    }

                },
                error: function(xhr, status, error) {
                    console.log(error);
                    // Xử lý khi yêu cầu thất bại
                    Swal.fire('Lỗi',
                        'Có lỗi xảy ra. Vui lòng thử lại sau.',
                        'error');
                }
            });

        });

        // phần logic xử lí popup

        $('.modal-dropdown-span').click(function() {
            var bookingItemId = $(this).data('booking-id');
            var bookingUserName = $(this).data('booking-name');
            var bookingUserPhone = $(this).data('booking-phone_number');
            var bookingUserEmail = $(this).data('booking-email');
            var bookingUserDate = $(this).data('booking-time');
            var bookingNumberPeople = $(this).data('booking-number_of_people');


            $('#input-name-booking').val(bookingUserName);
            $('#input-booking-phone').val(bookingUserPhone);
            $('#input-booking-email').val(bookingUserEmail);
            $('#input-booking-datetime').val(bookingUserDate);
            $('#input-booking-number-people').val(bookingNumberPeople);

        });

        // // click vào nút ok trong modal
        // $('btn-close-modal').click(function() {
        //     jQuery.noConflict();
        //     $('#exampleModal').hide();
        // });


    });
</script>