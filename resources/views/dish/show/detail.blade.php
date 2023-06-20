
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

