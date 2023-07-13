<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Vietnamese Food</title>
  <link rel="icon" href="/image/logo.png">
  <link rel="stylesheet" href=" {{ asset('css/style.css') }}" />
  <link rel="stylesheet" href=" {{ asset('css/style2.css') }}" />
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
  </script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
  </script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
  </script>

  <!-- jQuery library -->
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.4/dist/jquery.slim.min.js"></script>

  <!-- Popper JS -->
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>

  <!-- Latest compiled JavaScript -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>

  <link rel="stylesheet" href="{{ asset('css/notifications.css') }}" />
  <script src="{{ asset('js/notifications.js') }}"></script>

  <link rel="stylesheet" href="{{ asset('css/style_popup_booking.css') }}" />
</head>

<body>
  <header>
    <div class="header" id="header">
      <div class="advise">11111111111でのアドバイスの連絡先</div>
      <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
          <nav class="navbar bg-body-tertiary p-0 m-0">

            <a class="navbar-brand" href="/">
              <img src="/image/logo.png" alt="Logo" width="50 " height="50" class="logo d-inline-block align-text-top" />
            </a>


          </nav>

          <div class="space-modifier" role="search">
            <div class="search border border-danger rounded d-flex align-items-center" style=" background-color:#F6FFA6 !important;">
              <input style=" background-color:rgb(0,0,0,0) !important; border:none !important;" type="search" class="form-control search_input" placeholder="検索機能" aria-label="Search">
              <div class="input-group-append">
                <div class="dropdown input-group-append">
                  <button class="btn btn-link dropdown" style="background-color: #F6FFA6;" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <i class="fas fa-chevron-down dropdown-icon"></i>
                  </button>
                  <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                    <a class="dropdown-item" href="#">レストラン</a>
                    <a class="dropdown-item" href="#">アドレス</a>
                    <a class="dropdown-item" href="#">料理</a>
                  </div>
                </div>
              </div>

              <button class="btn btn-outline-success" type="submit">
                <i class="fa-solid fa-magnifying-glass"></i>
              </button>
            </div>
          </div>

          <ul class="collapse navbar-collapse navbar-nav mb-2 mb-lg-0 row" id="navbarSupportedContent">
            <li class="nav-item ">
              <a class="nav-link col-12" aria-current="page" href="{{ route('home.index') }}">ホーム</a>
            </li>
            <li class="nav-item">
              <a class="nav-link col-12" href="{{ route('restaurant.index') }}">レストラン</a>
            </li>
            <li class="nav-item">
              <a class="nav-link col-12" href="{{ route('dish.index') }}">料理</a>
            </li>
          </ul>
          @guest
          @if(Route::has('login'))
          <input type="button" class="btn btn-primary btn-lg" onclick="location.href='{{ route('login') }}'" value="ログイン">
          @endif
          @else
          <div class="avt">
            <i class="fa-solid fa-user"></i>
          </div>
          <div class="dropdown">
            <button class="btn btn-link email dropdown" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              {{ Auth::user()->email }}
            </button>
            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
              <a class="dropdown-item" href="{{ route('booking.history') }}">ブッキングの履歴</a>
              <a class="dropdown-item" href="{{route('profile')}}"> ユーザー情報</a>
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
  <style>
    .nav-link {
      font-weight: 600;
    }

    .navbar .navb {
      padding: 0px 0px 0px 0px;
      margin: 0px 0px 0px 0px;
    }

    .logo {
      scale: 2.3;
    }

    .email {
      color: red !important;
      font-weight: 600 !important;
    }
  </style>
  <script>
    // red color the nav-link if this page is nav-link's page
    var url = new URL(window.location.href);
    var pathPage = url.pathname; // "/dish"
    if (pathPage == "/") {
      pathPage = "/home";
    }
    var page = pathPage.substring(1); // "dish"
    page = page.split("/")[0];
    var navLinks = document.querySelectorAll(".nav-link");
    navLinks.forEach((navLink) => {
      // example http://localhost/dish?page=3 -> dish

      const pathUrl = new URL(navLink.getAttribute("href"));
      const path = pathUrl.pathname; // "/restaurant/fileter  "
      const pg = path.substring(1); // "dish"
      if (pg == page) {
        navLink.classList.add("active");
        //add color red
        navLink.style.color = "red";
      }
    });

    const dropdownIcon = document.querySelector(".dropdown-icon");
    let select_dropdown = null;

    // check if click dropdown-item\
    const dropdownItems = document.querySelectorAll(".dropdown-item");
    dropdownItems.forEach((dropdownItem) => {
      dropdownItem.addEventListener("click", function() {
        select_dropdown = dropdownItem.innerHTML;
      });
    });

    // check if click btn search
    const btnSearch = document.querySelector(".btn-outline-success");
    var search_input = document.querySelector(".search_input");
    var errorNotification = window.createNotification({
      closeOnClick: true,
      displayCloseButton: true,
      positionClass: "nfc-top-right",
      onclick: false,
      showDuration: 3500,
      theme: "error",
    });

    var warningNotification = window.createNotification({
      closeOnClick: true,
      displayCloseButton: true,
      positionClass: "nfc-top-right",
      onclick: false,
      showDuration: 3500,
      theme: "warning",
    });

    var successNotification = window.createNotification({
      closeOnClick: true,
      displayCloseButton: true,
      positionClass: "nfc-top-right",
      onclick: false,
      showDuration: 3500,
      theme: "success",
    });

    btnSearch.addEventListener("click", function() {
      if (select_dropdown == null) {
        // showNotification('error', 'エラー!', 'ドロップダウンを選択してください');
        errorNotification({
          title: "エラー!",
          message: "ドロップダウンを選択してください",
        });
      } else if (search_input.value == "") {
        // showNotification('error', 'エラー!', '検索ワードを入力してください');
        errorNotification({
          title: "エラー!",
          message: "検索ワードを入力してください",
        });
      } else {
        if (select_dropdown == 'レストラン') {
          window.location.href = "/restaurant/filterByRestaurantName?restaurantName=" + search_input
            .value;
        } else if (select_dropdown == 'アドレス') {
          window.location.href = "/restaurant/filterByAddressName?addressName=" + search_input.value;
        } else if (select_dropdown == '料理') {
          window.location.href = "/dish/filterByDishName?dishName=" + search_input.value;
        }
      }
    });
  </script>
