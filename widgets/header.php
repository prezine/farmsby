<nav class="navbar">
        <a href="#" class="sidebar-toggler">
          <i data-feather="menu"></i>
        </a>
        <div class="navbar-content">
          <form class="search-form">
            <div class="input-group">
              <div class="input-group-prepend">
                <div class="input-group-text">
                  <i data-feather="search"></i>
                </div>
              </div>
              <input type="text" class="form-control" id="navbarForm" placeholder="Search here...">
            </div>
          </form>
          <ul class="navbar-nav">
            <li class="nav-item dropdown nav-apps">
              <a class="nav-link dropdown-toggle" href="#" id="appsDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i data-feather="grid"></i>
              </a>
              <div class="dropdown-menu" aria-labelledby="appsDropdown">
                <div class="dropdown-header d-flex align-items-center justify-content-between">
                  <p class="mb-0 font-weight-medium">Farmsby Apps</p>
                </div>
                <div class="dropdown-body">
                  <div class="d-flex align-items-center apps">
                    <a href="#"><i data-feather="hash" class="icon-lg"></i><p>Main Site</p></a>
                    <a href="#"><i data-feather="message-square" class="icon-lg"></i><p>Forum</p></a>
                  </div>
                </div>
              </div>
            </li>
            <li class="nav-item dropdown nav-profile">
              <a class="nav-link dropdown-toggle" href="#" id="profileDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <img src="assets/images/faces/face1.jpg" alt="profile">
              </a>
              <div class="dropdown-menu" aria-labelledby="profileDropdown">
                <div class="dropdown-header d-flex flex-column align-items-center">
                  <div class="figure mb-3">
                    <img src="assets/images/faces/face1.jpg" alt="">
                  </div>
                  <div class="info text-center">
                    <p class="name font-weight-bold mb-0">Amiah Burton</p>
                    <p class="email text-muted mb-3">amiahburton@gmail.com</p>
                  </div>
                </div>
                <div class="dropdown-body">
                  <ul class="profile-nav p-0 pt-3">
                    <li class="nav-item">
                      <a href="pages/general/profile.html" class="nav-link">
                        <i data-feather="user"></i>
                        <span>My Account</span>
                      </a>
                    </li>
                    <li class="nav-item">
                      <a href="javascript:;" class="nav-link">
                        <i data-feather="log-out"></i>
                        <span>Log Out</span>
                      </a>
                    </li>
                  </ul>
                </div>
              </div>
            </li>
          </ul>
        </div>
      </nav>