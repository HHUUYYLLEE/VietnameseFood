<div id="dishes-high-rate">
  <hr />
    <div class="dishes grid text-center" style="background-image: url(https://img.tastykitchen.vn/resize/764x-/2020/09/14/mon-ngon-3-mien-abbe.jpg)">
      <div class="row">
        @foreach($dishes as $dish)
        <div class="col mt-4 d-flex justify-content-center">
          <div class="card position-relative" style="height: auto; width: 80%">
            <img class="card-img-top" src="{{ $dish->image_url }}" alt="Product image"/>
            <div class="card-body d-flex flex-column justify-content-between">
              <div>
                <h5
                  class="card-title"
                  style="font-size: 2rem; font-weight: bold; color: red"
                ></h5>
                <p class="card-text mt-2"></p>
                <h5>{{ $dish->name }}</h5>
                <input type="text" class="custom-input" placeholder="{{ $dish->introduction }}" />
              </div>
            </div>
          </div>
        </div>
        @endforeach
      </div>
    </div>
</div>