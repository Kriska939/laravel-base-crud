<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container-fluid">
    <a class="navbar-brand fancy text-primary" href="#">
      <img src="{{ asset('images/book-icon.png')}}" alt="icona" width="25" height="25" class="d-inline-block align-text-top">
      DC Comics Library</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item fancy">
          <a class="nav-link fw-bold {{ request()->routeIs('home') ? 'active' : ''}}" aria-current="page" href="{{route('home')}}">Home</a>
        </li>
        <li class="nav-item fancy">
          <a class="nav-link fw-bold {{ request()->routeIs('comics.index') ? 'active' : ''}}" href="#">Comics</a>
        </li>
      </ul>
    </div>
  </div>
</nav>