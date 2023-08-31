<nav class="navbar navbar-expand-lg navbar-dark" style="background-color: #393B87" >
    <div class="container">
      <a class="navbar-brand" href="/">FIXERS</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link {{ ($title == "Home") ? 'active' : '' }}" aria-current="page" href="/">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link {{ ($title == "Category") ? 'active' : '' }} "  href="/category">Category</a>
          </li>
          <li class="nav-item">
            <a class="nav-link {{ ($title == "About") ? 'active' : '' }} " href="/about">About</a>
          </li>
        </ul>
        <form class="d-flex">
          <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
          <button class="btn btn-outline-info me-5 " type="submit">Search</button>
        </form>
      </div>
      <a href="/admin">
        <button class="btn btn-outline-primary" type="submit">Login</button>
      </a>
    </div>
</nav>