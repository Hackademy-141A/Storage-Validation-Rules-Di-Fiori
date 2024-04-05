<x-layout>
    
    
    <div class="container">
        <!-- @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
            @endif -->
            
            
            <div class="row">
                <div class="col-12 col-md-7">
                    
                    <form method="POST" action="{{route('song.store')}}" enctype="multipart/form-data">
                        
                        @csrf
                        
                        <div class="mb-3">
                            <label for="songName" class="form-label">nome canzone</label>
                            <input name="songName" type="text"
                            class="form-control @error('songName') is-invalid @enderror"id="songName"
                            value="{{old('songName')}}">
                            
                            @error('songName')
                            <p class="text-danger"> <small>{{$message}}</small></p>
                            @enderror
                        </div>
                        
                        <div class="mb-3">
                            <label for="artist" class="form-label">artista</label>
                            <input
                            name="artist"
                            type="text"
                            class="form-control  @error('artist') is-invalid @enderror"
                            id="artist"
                            value="{{old('artist')}}">
                            
                            @error('artist')
                            <p class="text-danger"> <small>{{$message}}</small></p>
                            @enderror
                        </div>
                        
                        <div class="mb-3">
                            <label for="duration" class="form-label">durata in minuti per difetto</label>
                            <input
                            name="duration"
                            type="number"
                            class="form-control  @error('duration') is-invalid @enderror"
                            id="duration"
                            value="{{old('duration')}}">
                            
                            @error('duration')
                            <p class="text-danger"> <small>{{$message}}</small></p>
                            @enderror
                        </div>
                        
                        <div class="mb-3">
                            <label for="year" class="form-label">anno di pubblicazione</label>
                            <input 
                            name="year"
                            type="string"
                            class="form-control  @error('year') is-invalid @enderror"
                            id="year"
                            value="{{old('year')}}">
                            
                            @error('year')
                            <p class="text-danger"> <small>{{$message}}</small></p>
                            @enderror
                        </div>
                        
                        <div class="mb-3">
                            <label for="img" class="form-label">immagine di copertina</label>
                            
                            <input
                            name="img"
                            type="file"
                            class="form-control  @error('img') is-invalid @enderror"
                            id="img">
                            
                            @error('img')
                            <p class="text-danger"> <small>{{$message}}</small></p>
                            @enderror   
                        </div>
                        
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                    
                </div>
            </div>
        </div>
    </x-layout>