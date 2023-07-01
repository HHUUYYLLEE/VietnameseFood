@if (Auth::check())
  @include('restaurant.popup_booking')
@endif
<div class="restaurant-list d-flex justify-content-around flex-wrap" style="width: 100%">
  @foreach ($restaurants as $restaurant)
  <div class="restaurant-wrap mb-4" style="width: 31%" data-id="{{ $restaurant->id }}">
    <div class="card position-relative" style="height: 25rem">
      <img class="card-img-top" src="{{ asset($restaurant->image_url) }}" alt="Product image" style="height: 50%; object-fit: cover;">
      <div class="card-body d-flex flex-column justify-content-between">
        <div onclick="goToRestaurantDetailPage({{ $restaurant->id }})">
          <h5 class="card-title" style="font-size: 2rem; font-weight: bold; color: red">{{$restaurant->name}}</h5>
          <p class="card-text mt-2">{{$restaurant->address}}</p>
        </div>
        <div class="star-button d-flex justify-content-between mt-4">
          @php
          $star = $restaurant->rating_avg;
          $maxRating = 5;
          $percent = ($star / $maxRating) * 100;
          @endphp

          <div class="star-group">
            @for ($i = 1; $i <= 5; $i++) @if ($percent>= $i * 20)
              <i class="fas fa-star"></i>
              @elseif ($percent >= ($i - 0.5) * 20)
              <i class="fas fa-star-half-alt"></i>
              @else
              <i class="far fa-star"></i>
              @endif
              @endfor
          </div>
          <button class="btn btn-danger btn-booking" data-bs-toggle="modal" data-bs-target="#myModal">予約</button>
        </div>
      </div>
    </div>
  </div>
  @endforeach
</div>

<script>
  // When click btn-booking button
  $('.btn-booking').click(function() {
    // var restaurantId = $(this).closest('.restaurant-wrap').data('id');
    // console.log(restaurantId);
    @guest
      warningNotification({
        title: 'ログインしてください',
        message: 'ログインしてください'
      });
    @else
      restaurantId = $(this).closest('.restaurant-wrap').data('id');
      // Show modal
      $('#myModal').modal('show');
    @endguest
  });
</script>