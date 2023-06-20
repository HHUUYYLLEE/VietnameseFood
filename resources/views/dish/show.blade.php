<!DOCTYPE html>
<html>
<head>
    <title>Chia màn hình thành 2 nửa bằng nhau</title>
    <link rel="stylesheet" href=" {{ asset('css/style4.css') }}" />
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

</head>
<body>
@include('inc.header')
<div id="dishes-details">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-6">
                <img
                    src="{{$dish->image_url}}"
                    class="dishes-img"
                    alt="dish image"
                    srcset=""
                />
                <!-- Nội dung của nửa đầu -->
            </div>
            <div class="col-md-6">
                <h2>{{$dish->name}}</h2>
                <hr/>
                <div class="form-floating">
              <textarea
                  class="form-control"
                  placeholder="説明..."
                  id="floatingTextarea"
                  style="font-size: 1.5rem;"
              >{{$dish->introduction}}</textarea>
                </div>

                <!-- Nội dung của nửa sau -->
            </div>
        </div>
    </div>
</div>
</body>
</html>
