<!-- navbar -->
<div class="header">
<nav class="navbar navbar-expand-lg py-3">
  <div class="container">
    <a class="navbar-brand" href="<?php echo $home_url; ?>"><img src="img/capital-iom_Logo.svg" class="w-75" alt="Capital-iom SVG"></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <?php
            // check if users / customer was logged in
// if user was logged in, show "Edit Profile", "Orders" and "Logout" options
if(isset($_SESSION['logged_in']) && $_SESSION['logged_in']==true){
    ?>
      <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link <?php echo $page_title=="Index" ? "class='active'" : ""; ?>" aria-current="page" href="<?php echo $home_url; ?>">Home</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
          <?php echo $_SESSION['firstname']; ?>
          </a>
          <ul class="dropdown-menu">
            <li><a href="<?php echo $home_url; ?>edit_profile.php" class="dropdown-item">Settings</a></li>
            <li><a href="<?php echo $home_url; ?>logout.php" class="dropdown-item">Logout</a></li>
            <!--<li><a class="dropdown-item" href="#">Action</a></li>
            <li><a class="dropdown-item" href="#">Another action</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="#">Something else here</a></li>-->
          </ul>
        </li>
      </ul>
      <?php
    }
      else{
    ?>
    <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
    <li class="nav-item">
      <a class="nav-link <?php echo $page_title=="Index" ? "class='active'" : ""; ?>" aria-current="page" href="<?php echo $home_url; ?>">Home</a>
    </li>
    <li class="nav-item">
      <a class="nav-link <?php echo $page_title=="Login" ? "class='active'" : ""; ?>" href="<?php echo $home_url  . 'login.php'; ?>">Login</a>
    </li>
    <li class="nav-item">
      <a class="nav-link <?php echo $page_title=="Register" ? "class='active'" : ""; ?>" href="<?php echo $home_url . 'register.php'; ?>">Register</a>
    </li>
  </ul>
      <!--form class="d-flex" role="search">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form-->
      <?php
      }
      ?>
    </div>
  </div>
</nav>
</div>
<!-- /navbar -->