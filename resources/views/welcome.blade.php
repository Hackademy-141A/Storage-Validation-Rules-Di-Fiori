<x-layout>
    @if(session('message'))
    <div class="alert alert-success">
        {{session('message')}}
    </div>
    @endif

    @if ($errors->any())
     <div class="alert alert-danger">
         <ul>
             @foreach ($errors->all() as $error)
                 <li>{{ $error }}</li>
             @endforeach
         </ul>
     </div>
 @endif
    <div class="container">
        <div class="row">
            <div class="col-12 text-center">
                <h1>
                    Benvenuti su TRY1
                </h1>
            </div>
        </div>
    </div>
</x-layout>