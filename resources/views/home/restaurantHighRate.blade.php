<div id="restaurant-high-rate">
  <hr />
  <div class="restaurant grid text-center" style="background-image: url(https://img.tastykitchen.vn/resize/764x-/2020/09/14/mon-ngon-3-mien-abbe.jpg)">
    <div class="row">
      @foreach($restaurants_high_rate as $restaurant)
      <div class="col mt-4 d-flex justify-content-center restaurant-wrap" id="restaurant-{{$restaurant->id}}">
        <div class="card position-relative" style="height: auto; width: 80%">
          <img class="card-img-top" src="{{ $restaurant->image_url }}" alt="Product image" style="height: 50%; object-fit: cover;" />
          <div class="card-body d-flex flex-column justify-content-between">
            <div style="text-align:left">
              <h5 class="card-title" style="font-size: 2rem; font-weight: bold; color: red">{{ $restaurant->name }}</h5>
              <input type="text" class="custom-input" placeholder="{{ $restaurant->address }}" />...
              <div class="star-button d-flex justify-content-between mt-4">
                @php
                $star = $restaurant->rating_avg;
                $maxRating = 5;
                $percent = ($star / $maxRating) * 100;
                @endphp

                <div class="star-group">
                  @for ($i = 1; $i <= 5; $i++) @if ($percent>= $i * 20)
                    <i class="fas fa-star" style="text-align:left"></i>
                    @elseif ($percent >= ($i - 0.5) * 20)
                    <i class="fas fa-star-half-alt"></i>
                    @else
                    <i class="far fa-star"></i>
                    @endif
                    @endfor
                </div>
                <a href="#" class="btn btn-danger">予約</a>
              </div>
            </div>
          </div>
        </div>
      </div>
      @endforeach
    </div>
    <a href="{{ route('restaurant.index') }}"><button class="btn btn-danger mt-4" style="width: 8%">続きを見る</button></a>
  </div>
</div>
<script>
  $(document).ready(function() {
    $('.restaurant-wrap').click(function() {
      var id = $(this).attr('id').split('-')[1];
      window.location.href = '/restaurant/' + id;
    });
  });
</script>