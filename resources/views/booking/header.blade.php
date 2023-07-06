<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>

    <!-- <link rel="stylesheet" href=" {{ asset('css/style.css') }}" /> -->
    <!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
        integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
    </script> -->
</head>

<body>
    <header>
        <div class="header" id="header-booking">
            <nav class="navbar navbar-expand-lg bg-body-tertiary">
                <div class="container-fluid">
                    <nav class="navbar bg-body-tertiary">
                        <div class="container-fluid booking-header-space-left">
                            <a href="" class="nav-link bold large" style="color: red">レストラン管理</a>
                        </div>
                    </nav>

                    <div class="collapse navbar-collapse left" id="navbarSupportedContent">
                        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                            <li class="nav-item">
                                <a class="nav-link active bold medium booking-text-line-height" aria-current="page"
                                    href="#">レストラン</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link active bold medium booking-text-line-height" href="">ブッキング</a>
                            </li>
                        </ul>
                    </div>
                    <form class="space-modifier" role="search">
                        <div class="search border border-danger rounded d-flex search-bar align-items-center"
                            style="background-color: white !important">
                            <input style="
                    background-color: rgb(0, 0, 0, 0) !important;
                    border: none !important;
                    width: 150px;
                  " type="search" class="form-control search_input" name="search" aria-label="Search" />
                            <div class="input-group-append">
                                <div class="dropdown input-group-append">
                                    <button class="btn btn-link dropdown" style="
                        background-color: white;
                        height: calc(1.5em + 0.75rem + 2px);
                      " type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true"
                                        aria-expanded="false">
                                        <i class="fas fa-chevron-down dropdown-icon"></i>
                                    </button>
                                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                        <a class="dropdown-item" href="#">Tiếng Việt</a>
                                        <a class="#dropdown-item" href="#">日本語</a>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                    <div class="avt">
                        <span class="circle">
                            <i class="fa-solid fa-user"></i>
                        </span>
                    </div>
                    <div class="dropdown">
                        <button class="btn btn-link email dropdown" type="button" id="dropdownMenuButton"
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
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
                </div>
            </nav>
        </div>
    </header>
</body>

</html>

<style>
#navbarSupportedContent .nav-item {
    margin-right: 50px;
}

.booking-header-space-left {
    margin-left: 30px;
}

.container-fluid .search-bar {
    margin: 0px 100px 0px;
}

.container-fluid .form-control {
    background-color: #f6ffa6;
    border-color: red;
}

.container-fluid .btn-outline-success {
    border-color: red;
    color: white;
    background-color: red;
}

.container-fluid .btn-outline-success:hover {
    background-color: #007bff;
}

.container-fluid .btn-primary {
    background-color: red;
    border-color: red;
}

#header-booking .navbar {
    background-color: white;
}

.container-fluid .nav-item .nav-link {
    color: black;
}

.container-fluid .nav-item .nav-link:hover {
    color: red;
}

#footer-booking .navbar {
    background-color: #7e1717;
    color: #f2bed1;
    font-weight: 600;
}

#header-booking .avt {
    margin-right: 10px;
}

#header-booking .avt .fa-solid {
    font-size: 20px;
    color: whitesmoke;
}

#header-booking .advise {
    text-align: center;
    background-color: red;
    font-weight: 500;
    color: white;
}

#header-booking .dropdown-menu {
    float: right;
    right: 0;
}

.dropdown {
    position: relative;
    display: inline-block;
}

.dropdown-content {
    display: none;
    background-color: #f9f9f9;
    min-width: 160px;
    box-shadow: 0px 8px 16px 0px rgba(0, 0, 0, 0.2);
    z-index: 1;
    margin-left: 30px;
}

.dropdown-content a {
    color: black;
    padding: 12px 16px;
    text-decoration: none;
    display: block;
}

.dropdown:hover .dropdown-content {
    display: block;
}

.left {
    margin-left: 200px;
}

.large {
    font-size: 24px;
}

.medium {
    font-size: 20px;
}

.bold {
    font-weight: 600;
}

#header-booking .avt .circle {
    display: inline-block;
    width: 50px;
    height: 50px;
    border-radius: 50%;
    background-color: #ffdede;
    text-align: center;
    line-height: 50px;
    border: 1px solid red;
}

.booking-text-line-height {
    line-height: 62px;
}
</style>