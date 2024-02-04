<nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
    <div class="position-sticky pt-3">
      <ul class="nav flex-column">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="{{route('dashboard')}}">
            <span data-feather="home"></span>
            Dashboard
          </a>
        </li>



      </ul>

      <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted">
        <span>Home page</span>
        <a class="link-secondary" href="#" aria-label="Add a new report">
          <span data-feather="plus-circle"></span>
        </a>
      </h6>

      <ul class="nav flex-column">

        <li class="nav-item">
          <a class="nav-link" href="{{route('home_service_index')}}">
            <span data-feather="file"></span>
            Home Service All
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{route('home_service_create')}}">
            <span data-feather="file"></span>
            Home Service Create
          </a>
        </li>


      </ul>




      <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted">
        <span>Portfolio</span>
        <a class="link-secondary" href="#" aria-label="Add a new report">
          <span data-feather="plus-circle"></span>
        </a>
      </h6>
      <ul class="nav flex-column mb-2">
        <li class="nav-item">
            <a class="nav-link" href="{{route('projects.index')}}">
              <span data-feather="file"></span>
              Projects All
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{route('projects.create')}}">
              <span data-feather="file"></span>
              Project Create
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{route('projectsingle.create')}}">
              <span data-feather="file"></span>
              Project Single view Create
            </a>
          </li>

      </ul>


      <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted">
        <span>Project single view </span>
        <a class="link-secondary" href="#" aria-label="Add a new report">
          <span data-feather="plus-circle"></span>
        </a>
      </h6>
      <ul class="nav flex-column mb-2">
        <li class="nav-item">
            <a class="nav-link" href="{{route('projectsingle.index')}}">
              <span data-feather="file"></span>
              Single Projects All
            </a>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="{{route('projectsingle.create')}}">
              <span data-feather="file"></span>
              Project Single view Create
            </a>
          </li>

      </ul>



      <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted">
        <span>FAQ</span>
        <a class="link-secondary" href="#" aria-label="Add a new report">
          <span data-feather="plus-circle"></span>
        </a>
      </h6>
      <ul class="nav flex-column mb-2">
        <li class="nav-item">
            <a class="nav-link" href="{{route('faqs.index')}}">
              <span data-feather="file"></span>
              FAQ All
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{route('faqs.create')}}">
              <span data-feather="file"></span>
              FAQ Create
            </a>
          </li>

      </ul>


    </div>
  </nav>
