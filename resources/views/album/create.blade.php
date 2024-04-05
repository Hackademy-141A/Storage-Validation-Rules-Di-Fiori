<x-layout>
    <div class="container">
        <div class="row">
            <div class="col-12 text-center">
                <h1 class="display-1">Inserisci il tuo album</h1>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-7">

                <form method="POST" action="{{route('album.store')}}" enctype="multipart/form-data">
                    @csrf

                    <div class="mb-3">
                        <label for="name" class="form-label">nome album</label>
                        <input name="name" type="text"
                        class="form-control @error('name') is-invalid @enderror"id="name"
                        value="{{old('name')}}">
                        
                        @error('name')
                        <p class="text-danger"> <small>{{$message}}</small></p>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="artistAlbum" class="form-label">Artista</label>
                        <input name="artist" type="text"
                        class="form-control @error('artist') is-invalid @enderror"id="artistAlbum"
                        value="{{Auth::user()->name}}">
                        
                        @error('artist')
                        <p class="text-danger"> <small>{{$message}}</small></p>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="yearAlbum" class="form-label">anno di pubblicazione</label>
                        <input 
                        name="year"
                        type="number"
                        class="form-control  @error('year') is-invalid @enderror"
                        id="yearAlbum"
                        value="{{old('year')}}">
                        
                        @error('year')
                        <p class="text-danger"> <small>{{$message}}</small></p>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="NumberOfSongs" class="form-label">Numero di canzoni</label>
                        <input
                        name="NumberOfSongs"
                        type="number"
                        class="form-control  @error('NumberOfSongs') is-invalid @enderror"
                        id="NumberOfSongs"
                        value="{{old('NumberOfSongs')}}">
                        
                        @error('NumberOfSongs')
                        <p class="text-danger"> <small>{{$message}}</small></p>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="imgAlbum" class="form-label">immagine di copertina</label>
                        
                        <input
                        name="img"
                        type="file"
                        class="form-control  @error('img') is-invalid @enderror"
                        id="imgAlbum">
                        
                        @error('img')
                        <p class="text-danger"> <small>{{$message}}</small></p>
                        @enderror   
                    </div>

                    <button type="submit" class="btn btn-info">Inserici Album</button>
                </form>


            </div>
        </div>
    </div>
</x-layout>