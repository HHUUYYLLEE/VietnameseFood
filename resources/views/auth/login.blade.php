@extends('layout.app')
<link rel="stylesheet" href="{{ asset('css/auth.css') }}">
<section class="pt-5 pb-5 mt-0 align-items-center d-flex bg-dark" style="min-height: 100vh; background-size: cover; background-image: url(https://cdn.tcdulichtphcm.vn/upload/2-2021/images/2021-04-02/1617361813-maderin-02-a-web-tc.jpg);">
  <div class="container-fluid">
    <div class="row justify-content-end align-items-center d-flex-row text-center h-100 ">
      <div class="card col-6 col-xl-4 col-md-4 col-lg-3 h-50 " style="border-radius: 1rem; background-color:#FFF8F8;">
        <div class="card-body mx-4">
          <h2 class="card-title mt-3 text-center" style="color:#B91616; font-weight:bold;">ログイン</h2> @if(session('error'))
          <div class="alert alert-error">
            {{ session('error') }}
          </div>
          @endif

          <br>
          <form class="d-flex align-items-start flex-column" method="POST" action="{{ route('login') }}">
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

            <div class="checkbox_remember">
              <div class="form-check">
                <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                <label class="form-check-label" for="remember" style="font-size:x-small; font-weight:bold">
                  {{ __('私を覚えてくれ') }}
                </label>
              </div>
            </div>
            <br>
            <div class="form-group w-100 ">
              <button type="submit" class="col-12 btn btn-block btn-primary " style="background-color:#E31818; border-radius: 10px;">
                {{ __('ログイン') }}
              </button>
            </div>
            <p class="text-right w-100" style="font-size:x-small; font-weight:bold">メンバーじゃないか？
              <a href="{{ route('register')}}" style="color: #fda491; font-size:x-small; font-weight:bold">すぐサインアップ</a>
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
</script>