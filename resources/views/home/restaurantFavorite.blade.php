@foreach($restaurants as $restaurant)
    <h3>{{ $restaurant->name }}</h3>
    <p>Rating Average: {{ $restaurant->rating_avg }}</p>
@endforeach