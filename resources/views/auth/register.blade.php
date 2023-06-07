@extends('layout.app')
<link rel="stylesheet" href="{{ asset('css/auth.css') }}">
<section class="pt-5 pb-5 mt-0 align-items-center d-flex bg-dark" style="min-height: 100vh; background-size: cover; background-image: url(https://cdn.tcdulichtphcm.vn/upload/2-2021/images/2021-04-02/1617361813-maderin-02-a-web-tc.jpg);">
    <div class="container-fluid">
        <div class="row justify-content-end align-items-center d-flex-row text-center h-100 ">
            <div class="card col-6 col-xl-4 col-md-4 col-lg-3 h-50 " style="border-radius: 1rem; background-color:#FFF8F8;">
                <div class="card-body mx-4">
                    <h2 class="card-title mt-3 text-center" style="color:#B91616; font-weight:bold;">サインアップ</h2>
                    <br>
                    <form class="d-flex align-items-start flex-column" method="POST" action="{{ route('register') }}">
                        @csrf
                        <span style="color:#A32525; font-size:x-small; font-weight:bold"> メールアドレス</span>
                        <div class=" form-group input-group border border-danger rounded">
                            <div class="input-group-prepend">
                                <span class="input-group-text" style=" background-color:rgba(0,0,0,0) !important;
       border:none !important;"> <i class="fa fa-user"></i> </span>
                            </div>
                            <input style=" background-color:rgba(0,0,0,0) !important;
       border:none !important;" placeholder="123456@gmail.com" id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">
                            @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        <span style="color:#A32525; font-size:x-small; font-weight:bold">電話番号</span>
                        <div class="form-group input-group border border-danger rounded">
                            <div class="input-group-prepend">
                                <span class="input-group-text" style=" background-color:rgba(0,0,0,0) !important;
       border:none !important;"> <i class="fa fa-phone"></i> </span>
                            </div>
                            <input style=" background-color:rgba(0,0,0,0) !important;
       border:none !important;" placeholder="12345678" id="phone_number" type="tel" class="form-control @error('phone_number') is-invalid @enderror" name="phone_number" value="{{ old('phone_number') }}" required autocomplete="phone_number">

                            @error('phone_number')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        <span style="color:#A32525;font-size:x-small; font-weight:bold">パスワード</span>
                        <div class="form-group input-group border border-danger rounded">
                            <div class="input-group-prepend">
                                <span class="input-group-text" style=" background-color:rgba(0,0,0,0) !important;
       border:none !important;"><i class="fa fa-lock"></i></span>
                            </div>
                            <input style=" background-color:rgba(0,0,0,0) !important;
       border:none !important;" placeholder="*********" id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">
                            <div class="input-group-append">
                                <button class="btn btn-outline" type="button" id="togglePassword">
                                    <i class="fa fa-eye-slash"></i>
                                </button>
                            </div>
                            @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        <span style="color:#A32525;font-size:x-small; font-weight:bold">パスワード（確認）</span>

                        <div class="form-group input-group border border-danger rounded">
                            <div class="input-group-prepend">
                                <span class="input-group-text" style=" background-color:rgba(0,0,0,0) !important;
       border:none !important;"> <i class="fa fa-lock"></i> </span>
                            </div>
                            <input style=" background-color:rgba(0,0,0,0) !important;
       border:none !important;" placeholder="*********" id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            <div class="input-group-append">
                                <button class="btn btn-outline" type="button" id="toggleConfirmPassword">
                                    <i class="fa fa-eye-slash"></i>
                                </button>
                            </div>
                            @error('password_confirmation')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        <div class="form-group w-100 ">
                            <button type="submit" class="col-12 btn btn-block btn-primary " style="background-color:#E31818; border-radius: 10px;">
                                {{ __('サインアップ') }}
                            </button>
                        </div>
                        <p class="text-center" style="font-size:x-small; font-weight:bold">もうメンバになりましたか？
                            <a href="{{ route('login') }}" style="color: #fda491; font-size:x-small; font-weight:bold">すぐログイン</a>
                        </p>
                    </form>

                </div>
            </div>
            <div class="col-6 col-xl-2 col-md-4 col-lg-3 h-50"></div>
        </div>
    </div>
</section>

<script>
    const togglePassword = document.querySelector('#togglePassword');
    const password = document.querySelector('#password');
    togglePassword.addEventListener('click', function(e) {
        // toggle the type attribute
        const type = password.getAttribute('type') === 'password' ? 'text' : 'password';
        password.setAttribute('type', type);
        // change icon not slash
        if (type === 'password') {
            togglePassword.innerHTML = '<i class="fa fa-eye-slash"></i>';
        } else {
            togglePassword.innerHTML = '<i class="fa fa-eye"></i>';
        }


    });

    const toggleConfirmPassword = document.querySelector('#toggleConfirmPassword');
    const confirmPassword = document.querySelector('#password-confirm');
    toggleConfirmPassword.addEventListener('click', function(e) {
        // toggle the type attribute
        const type = confirmPassword.getAttribute('type') === 'password' ? 'text' : 'password';
        confirmPassword.setAttribute('type', type);
        if (type === 'password') {
            toggleConfirmPassword.innerHTML = '<i class="fa fa-eye-slash"></i>';
        } else {
            toggleConfirmPassword.innerHTML = '<i class="fa fa-eye"></i>';
        }
    });
</script>