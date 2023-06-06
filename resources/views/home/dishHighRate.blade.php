@foreach($dishes as $dish)
    <h3>{{ $dish->name }}</h3>
    <p>{{ $dish->introduction }}</p>
@endforeach