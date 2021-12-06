<nav class="navbar navbar-dark bg-dark">
    <div class="container">
      <a class="navbar-brand" href="#">LARAVEL 2021</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link {{ Request::is('/')?'active' :'' }}" href="/">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link {{ Request::is('about')?'active' :'' }}" href="/about">About</a>
          </li>
          <li class="nav-item">
            <a class="nav-link {{ Request::is('news')?'active' :'' }}" href="/news">News</a>
          </li>
        </ul>
        <ul class="navbar-nav ms-auto">
        <li class="nav-item">
          <a class="nav-link {{ Request::is('login')?'active' :'' }}" href="/login"><i class="bi bi-box-arrow-in-right"></i> Login</a>
        </li>
      </ul>
      </div>
    </div>
</nav>