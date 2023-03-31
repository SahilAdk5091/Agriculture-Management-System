<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <!--<title> Responsiive Admin Dashboard | CodingLab </title>-->
    <link rel="stylesheet" href="dashboardadmin1.css">
    <!-- Boxicons CDN Link -->
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
   </head>
<body>
  <section class="head">
    <header class="header1">
        <div class="top">
            <div class="logo">
                <a href="dashboardforadmin.php"><img src="img/Logo.png" alt="logo"></a>
            </div>
            <p class="toptex">Agriculture is a key role for Nepal Economy and For Natural Beauty </p>
            <img class="flag" src="nepalflag.gif" alt="">
        </div>
    </header>
  <div class="sidebar">
    <div class="logo-details">
      <span class="logo_name">Agroo</span>
    </div>
      <ul class="nav-links">
        <li>
          <a href="dashboardforadmin.php" class="active">
            <i class='bx bx-grid-alt' ></i>
            <span class="links_name">Dashboard</span>
          </a>
        </li>
        <li>
          <a href="Profileforadmin.html">
            <i class='bx bx-box' ></i>
            <span class="links_name">Profile</span>
          </a>
        </li>
        <li>
          <a href="adduser.php">
            <i class='bx bx-list-ul' ></i>
            <span class="links_name">Add details</span>
          </a>
        </li>
        <li>
          <a href="displayadmin.php">
            <i class='bx bx-pie-chart-alt-2' ></i>
            <span class="links_name">View User details </span>
          </a>
        </li>
        <li>
          <a href="displayinadmin.php">
            <i class='bx bx-pie-chart-alt-2' ></i>
            <span class="links_name">View Farmer details </span>
          </a>
        </li>
        <li class="log_out">
          <a href="../Main.php">
            <i class='bx bx-log-out'></i>
            <span class="links_name">Log out</span>
          </a>
        </li>
      </ul>
  </div>
  <section class="home-section">
    <nav>
      <div class="sidebar-button">
        <i class='bx bx-menu sidebarBtn'></i>
        <span class="dashboard">Dashboard</span>
      </div>
      
    </nav>

    <div class="home-content">
      <div class="overview-boxes">
       

      <div class="sales-boxes">
        <div class="recent-sales box">
          <div class="title">Admin user</div>

          <div class="button">
            <a href="adduser.php">Add user</a>
          </div>
        </div>
        <div class="top-sales box">
          <div class="title">User detail</div>
          <div class="button">
            <a href="displayadmin.php">View</a>
          </div>
        </div>
      </div>
    </div>
    <div class="sales-boxes">
      <div class="recent-sales box">
        <div class="title">Farmer details</div>
        <div class="button">
          <a href="displayinadmin.php">View</a>
        </div>
      </div>
  </section>
  <section class="last">
    <div class="last1">
        <H2><span class="span5"><i class="fa-solid fa-address-card"></i></span>Contact Us</H2>
        <h3>Department of Agriculture</h3>
        <h4><span class="span5"><i class="fa-solid fa-earth-americas"></i></span>Nagpokhari,Kathmandu</h4>
        <h4><span class="span5"><i class="fa-solid fa-earth-americas"></i></span></i>Nagpokhari,Kathmandu</h4>
        <h4><span class="span5"><i class="fa-solid fa-phone"></i></span></i>Phone : +977-9807991363, 5524229, 5524226</h4>
        <h4><span class="span5"><i class="fa-solid fa-message"></i></span> Agridepart.gov.np</h4>
    </div>
    <div class="last2">
        <H2><span class="span5"><i class="fa-solid fa-location-dot"></i></span>Location</H2>
        <div class="map">
        </div>
    </div>
  </section>

  <script>
   let sidebar = document.querySelector(".sidebar");
let sidebarBtn = document.querySelector(".sidebarBtn");
sidebarBtn.onclick = function() {
  sidebar.classList.toggle("active");
  if(sidebar.classList.contains("active")){
  sidebarBtn.classList.replace("bx-menu" ,"bx-menu-alt-right");
}else
  sidebarBtn.classList.replace("bx-menu-alt-right", "bx-menu");
}
 </script>

</body>
</html>

