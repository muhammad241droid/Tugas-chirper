<h1>Chirps</h1>

@foreach ($chirps as $chirp)
    <p><strong>{{ $chirp['author'] }}</strong>: {{ $chirp['message'] }}</p>
@endforeach