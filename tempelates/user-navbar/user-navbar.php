<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
        <a class="navbar-brand" href="/home">iTi Caffee</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
              <a class="nav-link" href="/home">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="/orders">My Orders</a>
            </li>
          </ul>
          <ul class="ml-auto navbar-nav ">
              <li class="nav-item">
                  <a class="nav-link" href="#">Welcome <?php echo $_SESSION['userName'] ?></a></li>
          </ul>
        </div>
      </nav>