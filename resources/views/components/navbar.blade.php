<nav class="navbar navbar-expand-lg bg-body-tertiary">
<div class="container-fluid">
<a class="navbar-brand" href="{{route('homepage')}}">TRY1</a>
<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" 
aria-expanded="false" aria-label="Toggle navigation">
<span class="navbar-toggler-icon"></span>
</button>
<div class="collapse navbar-collapse" id="navbarSupportedContent">
<ul class="navbar-nav me-auto mb-2 mb-lg-0">
<li class="nav-item">
<a class="nav-link active" aria-current="page" href="{{route('homepage')}}">Home</a>
</li>
@auth

<li class="nav-item">
<a class="nav-link" href="{{route('song.create')}}">Inserisci una canzone</a>
</li>

<li class="nav-item">
    <a class="nav-link" href="{{route('album.create')}}">inserisci un album</a>
    </li>
@endauth

<li class="nav-item">
<a class="nav-link" href="{{route('song.index')}}">Tutte le nostre canzoni</a>
</li>

<li class="nav-item">
    <a class="nav-link" href="{{route('album.index')}}">Tutti i nostri album</a>
    </li>
@auth
<li class="nav-item dropdown">

<a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
aria-expanded="false">


Benvenuto {{Auth::user()->name}}
</a>
<ul class="dropdown-menu">
<li>
    <form  method="POST" action="{{route('logout')}}">
        @csrf
        <button type="submit" class="btn btn-danger">Logout</button>
    </form>
</li>

</ul>
</li>
@else
<li class="nav-item dropdown">

<a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
aria-expanded="false">
Benvenuto ospite
</a>
<ul class="dropdown-menu">
<li><a class="dropdown-item" href="{{route('register')}}">Registrati</a></li>
<li><a class="dropdown-item" href="{{route('login')}}">Accedi</a></li>
</ul>
</li>
@endauth

<!-- <li class="nav-item">
<a class="nav-link disabled" aria-disabled="true">Disabled</a>
</li> -->
</ul>
</div>
</div>
</nav>