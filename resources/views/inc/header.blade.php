<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
    <link rel="stylesheet" href=" {{ asset('css/style.css') }}" />
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css"
      integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T"
      crossorigin="anonymous"
    />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
      integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    />
    <script
      src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
      integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js"
      integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"
      integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
      crossorigin="anonymous"
    ></script>
  </head>

  <body>
    <header>
      <div class="header" id="header">
        <div class="advise">11111111111でのアドバイスの連絡先</div>
        <nav class="navbar navbar-expand-lg bg-body-tertiary">
          <div class="container-fluid">
            <nav class="navbar bg-body-tertiary">
              <div class="container-fluid">
                <a class="navbar-brand" href="/">
                  <img
                    src="https://png.pngtree.com/png-clipart/20210801/ourmid/pngtree-lettering-doodle-vietnamese-food-typography-with-illustration-png-image_3764952.jpg"
                    alt="Logo"
                    width="40"
                    height="40"
                    class="d-inline-block align-text-top"
                  />
                  VietnameseFood
                </a>
              </div>
            </nav>

            <form class="d-flex" role="search">
              <input
                class="form-control me-2"
                type="search"
                placeholder="検索機能"
                aria-label="Search"
              />
              <button class="btn btn-outline-success" type="submit">
                <i class="fa-solid fa-magnifying-glass"></i>
              </button>
            </form>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                  <a class="nav-link active" aria-current="page" href="#"
                    >ホーム</a
                  >
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#">レストラン</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#">料理</a>
                </li>
              </ul>
            </div>
            @guest
              @if(Route::has('login'))
                <input type="button" class="btn btn-primary btn-lg" onclick="location.href='{{ route('login') }}'" value="ログイン">
              @endif
            @else
              <div class="avt">
                <i class="fa-solid fa-user"></i>
              </div>
              <div class="dropdown">
                <button
                  class="btn btn-secondary dropdown-toggle"
                  type="button"
                  id="dropdownMenuButton"
                  data-toggle="dropdown"
                  aria-haspopup="true"
                  aria-expanded="false"
                >
                  {{ Auth::user()->email }}
                </button>
                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                  <a class="dropdown-item" href="#">ブッキングの履歴</a>
                  <a class="dropdown-item" href="#"> ユーザー情報</a>
                  <a class="dropdown-item" href="#">評価履歴</a>
                  <hr class="dropdown-divider" />
                  <a class="dropdown-item" href="{{ route('logout') }}">ログアウト</a>
                </div>
              </div>
            @endguest
          </div>
        </nav>
      </div>
    </header>