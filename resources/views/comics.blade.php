@extends('home')

@section('main-content')
  <div class="container">
    <div class="row row-cols-6 g-4">
      @foreach ($comics as $comic)
        <div class="col">
          <a href="{{ route('detail', ['index' => $loop->index]) }}">
            <div class="comic-content">
              <img class="d-block comic-poster w-100" src="{{ $comic['thumb'] }}" alt="Comic poster">
              <span>{{ $comic['series'] }}</span>
            </div>
          </a>
        </div>
      @endforeach
    </div>
  </div>
@endsection
