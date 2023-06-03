@include('inc.header')
@include('layout.app')
@section('title', 'Home')
<br>
@include('home.restaurantFavorite')
<br>
@include('.home.restaurantHighRate')
<br>
@include('home.dishHighRate')
<br>
@include('inc.footer')
</body>
</html>