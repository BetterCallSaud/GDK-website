


<?php

session_start();

if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !==true)
{
    header("location: adminlogin.php");
}


?>



<?php include('header.php');  ?>









<!-- ======= About Us Section ======= -->
<section id="about" class="about">
      <div class="container">

        <div class="section-title">
        <h2><?php echo " Welcome to Admin Dashboard  ". $_SESSION['username']?>!! </h2>
  </div>

        <div class="row">
        <div class="col-lg-4 order-1 order-lg-2">
        <a href="create.php">
            <img src="assets\img\admin\createblogs.png" class="img-fluid" alt="">
        </a>
          </div>

          <div class="col-lg-4 order-2 order-lg-2">
          <a href="register.php">
            <img src="assets\img\admin\createuser.png" class="img-fluid" alt="">
        </a>
          </div>

          <div class="col-lg-4 order-3 order-lg-2">
          <a href="seeappointment.php">
            <img src="assets\img\admin\seeapp.png" class="img-fluid" alt="">
        </a>
          </div>
          
        </div>

        </br></br>


<a href="adminlogout.php"><button class="btn btn-primary">LOG OUT</button></a>
</br></br>

      </div>
    </section><!-- End About Us Section -->






<?php include('footer.php');  ?>
