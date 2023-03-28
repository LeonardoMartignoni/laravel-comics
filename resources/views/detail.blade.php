@extends('home')

@section('main-content')
  <div class="container">
    <img src="{{ $comic['thumb'] }}" alt="Comic Poster">

    <div class="comic-header">
      <h2>{{ $comic['title'] }}</h2>
      <p>{{ $comic['description'] }}</p>
    </div>

    <div class="comic-infos">
      <div class="row row-cols-2">
        <div class="col">
          <div class="comic-credits">
            <h5>Talent</h5>
            <span>Art by:</span>
            @forelse ($comic['artists'] as $artist)
              <a href="#">{{ $artist }}</a>
              @unless($loop->last)
                ,
              @endunless
            @empty
              <span>Data not available</span>
            @endforelse

            <br>

            <span>Written by:</span>
            @forelse ($comic['writers'] as $writer)
              <a href="#">{{ $writer }}</a>
              @unless($loop->last)
                ,
              @endunless
            @empty
              <span>Data not available</span>
            @endforelse
          </div>
        </div>
        <div class="col">
          <div class="comic-specs">
            <span>Series:</span> <span>{{ $comic['series'] }}</span>
            <br>
            <span>U.S. Price:</span> <span>{{ $comic['price'] }}</span>
            <br>
            <span>On Sale Date:</span> <span>{{ $comic['sale_date'] }}</span>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection
