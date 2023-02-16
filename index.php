<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Fun with Bootstrap</title>
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD"
      crossorigin="anonymous"
    />
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN"
      crossorigin="anonymous"
    ></script>
    <link rel="stylesheet" href="style.css" />
    <link rel="shortcut icon" href="favicon.icon" type="image/x-icon" />
  </head>
  <body>
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
    <div class="container-fluid">
      <div class="container py-3">
        <div class="text-center my-5 rounded">
          <h1 class="display-5 text-start">Create Notes...</h1>
        </div>
        <div class="text-center my-5">
          <!-- notes cards -->
          <div class="my-3 shadow-sm p-3 mb-5 bg-body-tertiary rounded">
            <p class="text-start">
              Lorem ipsum, dolor sit amet consectetur adipisicing elit.
              Doloribus necessitatibus at accusantium error earum maxime
              provident, mollitia molestias commodi quibusdam reprehenderit.
              Consectetur, ea omnis dolorem temporibus eveniet consequatur
              voluptate minus doloribus suscipit?
            </p>
            <h1 class="display-6 text-end mx-3">
              Kevin <i class="fa-light fa-circle-user"></i>
            </h1>
          </div>
          <div class="my-3 shadow-sm p-3 mb-5 bg-body-tertiary rounded">
            <p class="text-start">
              Lorem ipsum, dolor sit amet consectetur adipisicing elit.
              Doloribus necessitatibus at accusantium error earum maxime
              provident, mollitia molestias commodi quibusdam reprehenderit.
              Consectetur, ea omnis dolorem temporibus eveniet consequatur
              voluptate minus doloribus suscipit?
            </p>
            <h1 class="display-6 text-end mx-3">Marilyn</h1>
          </div>
          <div class="my-3 shadow-sm p-3 mb-5 bg-body-tertiary rounded">
            <p class="text-start">
              Lorem ipsum, dolor sit amet consectetur adipisicing elit.
              Doloribus necessitatibus at accusantium error earum maxime
              provident, mollitia molestias commodi quibusdam reprehenderit.
              Consectetur, ea omnis dolorem temporibus eveniet consequatur
              voluptate minus doloribus suscipit?
            </p>
            <h1 class="display-6 text-end mx-3">Doe</h1>
          </div>
        </div>
      </div>
    </div>
  </body>
</html>