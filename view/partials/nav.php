<nav class="navbar navbar-expand-lg bg-body-tertiary py-3">
      <div class="container-fluid">
        <a class="navbar-brand" href="#">Notes App</a>
        <button
          class="navbar-toggler"
          type="button"
          data-bs-toggle="collapse"
          data-bs-target="#navbarSupportedContent"
          aria-controls="navbarSupportedContent"
          aria-expanded="false"
          aria-label="Toggle navigation"
        >
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="#">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Notes</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Create Note</a>
            </li>
            <li class="nav-item d-inline-flex flex-sm-row">
              <a class="nav-link">Login</a>
              <span>
                <i class="bi bi-person-circle"></i>
              </span>
            </li>
          </ul>
          <form class="d-flex" role="search">
            <input
              class="form-control me-2"
              type="search"
              placeholder="Search by name or note"
              aria-label="Search"
            />
            <button class="btn btn-outline-success" type="submit">
              Search
            </button>
          </form>
        </div>
      </div>
    </nav>