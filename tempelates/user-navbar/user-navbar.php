<nav class="navbar navbar-expand-lg navbar-dark navigation">
        <a class="navbar-brand" id="iti" href="home">iTi Caffee</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
          <ul class="navbar-nav mr-auto">
            <li id="home">
              <a class="nav-link" id="homee" href="home">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="/orders">My Orders</a>
            </li>
          </ul>
          <ul class="ml-auto navbar-nav ">

          <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <span class="nav-user"> <?= $_SESSION['userName'] ?> </span>
          <img class="nav-img" src=<?= $_SESSION['userImg']?> width="50px">
        
        </a>
        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="/changePassword">Change Password</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="/logout">Logout</a>
        </div>
      </li>
          </ul>
        </div>
      </nav>
