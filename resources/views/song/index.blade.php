<x-layout>

    <div class="container">
        <div class="row">
            @foreach($songs as $song)
            <div class="col-12 col-md-4 mt-5">
                <img src="{{Storage::url($song->img)}}" class="img-fluid"  alt="">
  <h1>{{$song->songName}}</h1>
  <h2>{{$song->artist}}</h2>
  <p>{{$song->duration}}</p>
  <p>{{$song->year}}</p>
            </div>
            @endforeach
        </div>
    </div>
</x-layout>