<x-layout>
    
    <div class="container">
        <div class="row">
            @foreach($albums as $album)
            <div class="col-12 col-md-4 mt-5">
                <img src="{{Storage::url($album->img)}}" class="img-fluid"  alt="">
                <h1>{{$album->name}}</h1>
                <h2>{{$album->artist}}</h2>
                {{-- <p>Album del {{$album->year}}</p>
                <p>{{$album->NumberOfSongs}} Canzoni</p> --}}
                <a href="{{route('album.show', compact('album'))}}">Vai al dettaglio</a>
            </div>
            @endforeach
        </div>
    </div>
</x-layout>