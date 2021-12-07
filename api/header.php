<!-- this is for the alert user interface  -->
<!DOCTYPE html>
<html lang="en">
  <head>
      <!-- meta tags -->
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      
      <!-- CSS only (bootstrap)-->
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
            
      <!-- my CSS file -->
      <link rel="stylesheet" href="css/style.css ">

      <!-- Add icon library -->
      <script src="https://kit.fontawesome.com/67c6af2bf9.js" crossorigin="anonymous"></script>
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  </head>
  <body>
    <!-- navigation bar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
      <div class="container">
        <span class="navbar-brand mb-0 h1">LAN Party</span>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-end" id="navbarNavDropdown">
          <ul class="navbar-nav">
            <li class="nav-item dropdown">
              <button class="nav-link dropdown-toggle" id="navbarDropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false" type="button"><i class="fa fa-bell fa-lg"></i><span class="bell_badge">!</span></button>
              <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdownMenuLink">
                <li><a class="dropdown-item" href="#"><i class="fas fa-circle fa-xs" style="font-size: 0.5rem;"></i>You matched with another user. Click to start chatting now.</a></li>
                <li><a class="dropdown-item" href="#"><i class="fas fa-circle fa-xs" style="font-size: 0.5rem;"></i>You matched with another user. Click to start chatting now.</a></li>
                <li><a class="dropdown-item" href="#"><i class="fas fa-circle fa-xs" style="font-size: 0.5rem;"></i>You matched with another user. Click to start chatting now.</a></li>
              </ul>
            </li>
            <li class="nav-item dropdown">
              <button class="nav-link dropdown-toggle" id="navbarDropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false" type="button"><i class="fa fa-comments fa-lg"></i><span class="bell_badge">!</span></button>
              <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdownMenuLink">
                <li><a class="dropdown-item" href="#"><i class="fas fa-circle fa-xs" style="font-size: 0.5rem;"></i>You got a message from a user.</a></li>
                <li><a class="dropdown-item" href="#"><i class="fas fa-circle fa-xs" style="font-size: 0.5rem;"></i>You got a message from a user.</a></li>
                <!-- <li><a class="dropdown-item" href="#">You got a message from a user.</a></li> -->
              </ul>
            </li>
            <li class="nav-item">
              <a href="profile.php"><button class="btn"><i class="fa fa-user fa-lg"></i></button></a>
            </li>
          </ul>
        </div>
        <form class="d flex">
            <!-- <a class="btn btn-primary btn-md" href="profile.php" style="margin-right: 10px;">Profile</a> -->
            <a class="btn btn-primary btn-md" href="logout.php" style="margin-right: 10px;">Logout</a>
        </form>
      </div>
    </nav>
    
    <!-- JavaScript Bundle with Popper (bootstrap)-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  </body>
</html>