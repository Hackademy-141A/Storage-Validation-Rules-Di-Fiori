<x-layout>
    
    <div class="container">
        <div class="row">
       
            <div class="col-12 col-md-4 mt-5">
                <img src="{{Storage::url($album->img)}}" class="img-fluid"  alt="">
                <h1>{{$album->name}}</h1>
                <h2>{{$album->user->name}}</h2>
                <p>Album del {{$album->year}}</p>
                <p>{{$album->NumberOfSongs}} Canzoni</p>
                <a class="btn btn-warning" href="{{route('album.edit', compact('album'))}}">Modifica album</a> <br>
                <form method="POST" action="{{route('album.delete', compact('album'))}}">
@csrf
@method("DELETE")
                    <button type="submit" class="btn btn-danger">Elimina album </button> 
                </form>
                <a href="{{route('album.index', compact('album'))}}">Torna indietro</a>
            </div>

        </div>
    </div>
</x-layout>