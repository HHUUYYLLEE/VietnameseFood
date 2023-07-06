@include('inc.header')
<div class="container custom-margin">
    <div class="row d-flex">
        <div class="user-avatar col-lg-6">
            <div class="user-avatar-image">
                <div class="avatar">
                    <img src="https://i0.wp.com/thatnhucuocsong.com.vn/wp-content/uploads/2023/02/Hinh-anh-avatar-Facebook.jpg?ssl=1"
                        alt="Avatar">
                </div>
                <i class="icon-camera fa-solid fa-camera"></i>
            </div>
            <p class="user-email custom-margin text-center font-weight-bold">メール：{{$user->email}}</p>
            <div class="d-flex flex-column align-items-center justify-content-center">
                <button type="button" class="btn btn-danger font-weight-bold">パースワード更新</button>
                <button type="button" class="custom-margin-bottom btn btn-danger font-weight-bold"
                    onclick="window.location.href = '{{ route('booking.show') }}'">あなたのレストランを管理
                </button>
            </div>
        </div>
        <div class="user-info col-lg-6">
            <p>ユーザー情報</p>
            <hr>
            <div class="input-with-icon mt-5 mb-5">
                <input type="text" placeholder="{{$user->name}}">
                <i class="fa-solid fa-pencil"></i>
            </div>

            <div class="input-with-icon mt-5 mb-5">
                <input type="text" placeholder="{{$user->address}}">
                <i class="fa-solid fa-pencil"></i>
            </div>

            <div class="input-with-icon mt-5 mb-5">
                <input type="text" placeholder="{{$user->phone_number}}">
                <i class="fa-solid fa-pencil"></i>
            </div>

            <div style="display: flex; justify-content: flex-end;">
                <button type="button" class="btn btn-danger font-weight-bold ok-button">OK</button>
            </div>

        </div>



    </div>

</div>


@include('inc.footer')
<style>
.user-avatar-image {
    position: relative;
}

.user-avatar-image .avatar {
    width: 400px;
    /* Đặt kích thước mong muốn cho avatar */
    height: 400px;
    border: 2px solid #333333;
    border-radius: 50%;
    /* Làm tròn hình ảnh thành hình tròn */
    overflow: hidden;
    /* Ẩn phần ngoài vùng làm tròn */
}

.user-avatar .avatar img {
    width: 100%;
    /* Đảm bảo hình ảnh lấp đầy toàn bộ vùng làm tròn */
    height: 100%;
    object-fit: cover;
    /* Hiển thị hình ảnh theo tỷ lệ khung chứa */
}

.custom-margin {
    margin-top: 100px;
}

.user-avatar .icon-camera {
    position: absolute;
    bottom: 0px;
    right: 50px;
    font-size: 60px;
    color: red;
    padding: 20px;
    border-radius: 50%;
    cursor: pointer;
}

.user-avatar .user-email {
    font-size: 1.5rem;
    color: #332222;
}

.user-avatar .btn {
    display: inline-block;
    width: 50%;
    font-size: 1.5rem;
    margin-top: 50px;
}

.user-avatar .custom-margin-bottom {
    margin-bottom: 100px;
}

.user-info hr {
    border: 2px solid #333333;
}

.user-info p {
    font-size: 3.5rem;
    font-weight: bold;
    color: #f40a0a;
}

.input-with-icon {
    position: relative;
    display: inline-block;
    width: 100%;
}

.input-with-icon input {
    width: 100%;
    padding-right: 100px;
    /* Để tạo chỗ trống bên phải để hiển thị biểu tượng */
    padding-left: 20px;
    padding-top: 20px;
    padding-bottom: 20px;
    border: 2px solid #c73939;
    border-radius: 5px;
}

.input-with-icon i {
    position: absolute;
    top: 50%;
    right: 10px;
    transform: translateY(-50%);
}

.input-with-icon i.fa-pencil {
    font-size: 30px;
    color: #c73939;
    cursor: pointer;
}

.input-with-icon i.fa-pencil:hover {
    color: #f40a0a;
}

.input-with-icon i.fa-pencil:active {
    color: #c73939;
}

.ok-button {
    font-size: 1.5rem;
    margin-top: 50px;
    padding: 20px 80px;
}
</style>