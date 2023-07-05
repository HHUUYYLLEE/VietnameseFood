@include('inc.header')
@include('layout.app')
@if (Auth::check())
  @include('restaurant.popup_booking')
@endif
<br>
@include('restaurant.show.slider')
<br>
@include('restaurant.show.menu')
<br>
@include('restaurant.show.review')
<br>
@include('inc.footer')
