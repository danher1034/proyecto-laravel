<nav class="navbar bg-secondary-subtle navbar-expand-lg bg-body-tertiary" >
    <div class="container-fluid">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <a class="navbar-brand" href="/index"><img id="logo-navbar" width="100px" height="100px" src="/images/image-logo.png" alt="Logo"></a>
        <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
                <a class="nav-link" href="#">Link</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Link</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Link</a>
            </li>
            </ul>
            @auth
            <div class="container-fluid">
                <ul class="navbar-nav">
                  <!-- Avatar -->
                  <li class="nav-item dropdown">
                    <a
                      data-mdb-dropdown-init
                      class="nav-link dropdown-toggle d-flex align-items-center"
                      href="#"
                      id="navbarDropdownMenuLink"
                      role="button"
                      aria-expanded="false"
                    >
                      <img
                        src="https://mdbcdn.b-cdn.net/img/Photos/Avatars/img (31).webp"
                        class="rounded-circle"
                        height="22"
                        alt="Portrait of a Woman"
                        loading="lazy"
                      />
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                      <li>
                        <a class="dropdown-item" href="#">My profile</a>
                      </li>
                      <li>
                        <a class="dropdown-item" href="#">Settings</a>
                      </li>
                      <li>
                        <a class="dropdown-item" href="#">Logout</a>
                      </li>
                    </ul>
                  </li>
                </ul>
              </div>
            @else
                <div class="d-flex align-items-center">
                    <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                        <a class="btn btn-secondary" role="button" href="/signupForm" aria-disabled="true">Login</a>
                        <a class="btn btn-secondary" role="button" href="/signup" aria-disabled="true">Sign up</a>
                    </div>
                </div>
            @endauth

        </div>
    </div>
</nav>

