<?php include('header.php');  ?>
<?php

    include "logic.php";

?>

  <!-- ======= Hero Section ======= -->
  <section id="hero">
    <div id="heroCarousel" data-bs-interval="5000" class="carousel slide carousel-fade" data-bs-ride="carousel">

      <ol class="carousel-indicators" id="hero-carousel-indicators"></ol>

      <div class="carousel-inner" role="listbox">

        <!-- Slide 1 -->
        <div class="carousel-item active" style="background-image: url(assets/img/slide/gdk.jpg)">
          <div class="carousel-container">
            <div class="container">
              <h2 class="animate__animated animate__fadeInDown">Welcome to <span>GDK &amp; GDK PG!</span></h2>
              <p class="animate__animated animate__fadeInUp">Ut velit est quam dolor ad a aliquid qui aliquid. Sequi ea ut et est quaerat sequi nihil ut aliquam. Occaecati alias dolorem mollitia ut. Similique ea voluptatem. Esse doloremque accusamus repellendus deleniti vel. Minus et tempore modi architecto.</p>
              <a href="#about" class="btn-get-started animate__animated animate__fadeInUp scrollto">Read More</a>
            </div>
          </div>
        </div>

        <!-- Slide 2 -->
        <div class="carousel-item" style="background-image: url(assets/img/slide/presentation.jpg)">
          <div class="carousel-container">
            <div class="container">
              <h2 class="animate__animated animate__fadeInDown">Welcome to <span>GDK &amp; presentation</span></h2>
              <p class="animate__animated animate__fadeInUp">Ut velit est quam dolor ad a aliquid qui aliquid. Sequi ea ut et est quaerat sequi nihil ut aliquam. Occaecati alias dolorem mollitia ut. Similique ea voluptatem. Esse doloremque accusamus repellendus deleniti vel. Minus et tempore modi architecto.</p>
              <a href="pages/presentation.php" class="btn-get-started animate__animated animate__fadeInUp scrollto">Read More</a>
            </div>
          </div>
        </div>

        <!-- Slide 3 -->
        <div class="carousel-item" style="background-image: url(assets/img/slide/services.jpg)">
          <div class="carousel-container">
            <div class="container">
              <h2 class="animate__animated animate__fadeInDown">Welcome to <span>GDK &amp; services</span></h2>
              <p class="animate__animated animate__fadeInUp">Ut velit est quam dolor ad a aliquid qui aliquid. Sequi ea ut et est quaerat sequi nihil ut aliquam. Occaecati alias dolorem mollitia ut. Similique ea voluptatem. Esse doloremque accusamus repellendus deleniti vel. Minus et tempore modi architecto.</p>
              <a href="pages/services.php" class="btn-get-started animate__animated animate__fadeInUp scrollto">Read More</a>
            </div>
          </div>
        </div>


          <!-- Slide 3 -->
          <div class="carousel-item" style="background-image: url(assets/img/slide/slide-1.jpg)">
          <div class="carousel-container">
            <div class="container">
              <h2 class="animate__animated animate__fadeInDown">Welcome to <span>GDK &amp; Associates pg4</span></h2>
              <p class="animate__animated animate__fadeInUp">Ut velit est quam dolor ad a aliquid qui aliquid. Sequi ea ut et est quaerat sequi nihil ut aliquam. Occaecati alias dolorem mollitia ut. Similique ea voluptatem. Esse doloremque accusamus repellendus deleniti vel. Minus et tempore modi architecto.</p>
              <a href="#about" class="btn-get-started animate__animated animate__fadeInUp scrollto">Read More</a>
            </div>
          </div>
        </div>



      </div>

      <a class="carousel-control-prev" href="#heroCarousel" role="button" data-bs-slide="prev">
        <span class="carousel-control-prev-icon bi bi-chevron-left" aria-hidden="true"></span>
      </a>

      <a class="carousel-control-next" href="#heroCarousel" role="button" data-bs-slide="next">
        <span class="carousel-control-next-icon bi bi-chevron-right" aria-hidden="true"></span>
      </a>

    </div>
  </section><!-- End Hero -->

  <main id="main">

    <!-- ======= Featured Services Section ======= --></br></br>
    <section id="featured-services" class="featured-services section-bg">
    <div class="section-title">
          <h2>BLOGS</h2>
               </div>    

  <div class="container mt-5">
     

     <!-- Display posts from database -->
     <div class="row">
         <?php foreach($query as $q){ ?>
             <div class="col-12 col-lg-4 d-flex justify-content-center">
                 <div class="card text-white bg-dark mt-5" style="width: 18rem;">
                     <div class="card-body">
                         <h5 class="card-title"><?php echo $q['title'];?></h5>
                         <p class="card-text"><?php echo substr($q['content'], 0, 50000);?>...</p>
                         
                     </div>
                 </div>
             </div>
         <?php }?>
     </div>
     
     </div>
    </section><!-- End Featured Services Section -->

    <!-- ======= About Us Section ======= -->
    <section id="about" class="about">
      <div class="container">

        <div class="section-title">
          <h2>Calander</h2>
         
              </div>

        <div class="row">
          <div class="responsiveCal">
          <iframe src="https://calendar.google.com/calendar/embed?height=600&amp;wkst=1&amp;bgcolor=%23ffffff&amp;ctz=Asia%2FKolkata&amp;src=Z2RrYW5kYXNzb2NpYXRlc0BnbWFpbC5jb20&amp;src=YWRkcmVzc2Jvb2sjY29udGFjdHNAZ3JvdXAudi5jYWxlbmRhci5nb29nbGUuY29t&amp;src=ZW4uaW5kaWFuI2hvbGlkYXlAZ3JvdXAudi5jYWxlbmRhci5nb29nbGUuY29t&amp;color=%237986CB&amp;color=%237986CB&amp;color=%237986CB" style="border:solid 1px #777" width="1100" height="600" frameborder="0" scrolling="no"></iframe>
          </div>

          <style>

.responsiveCal {
 
 position: relative; padding-bottom: 75%; height: 0; overflow: hidden;
  
 }
  
 .responsiveCal iframe {
  
 position: absolute; top:0; left: 0; width: 100%; height: 100%;
  
 }
          </style>
   
        </div>

      </div>
    </section><!-- End About Us Section -->

   

    <!-- ======= Our Clients Section ======= -->
    <section id="clients" class="clients">
      <div class="container">

        <div class="section-title">
          <h2>Industries</h2>
               </div>

        <div class="clients-slider swiper-container">
          <div class="swiper-wrapper align-items-center">
          
            <div class="swiper-slide"><img src="assets\img\industries\banking.jpg" class="img-fluid" alt=""></div>
            <div class="swiper-slide"><img src="assets\img\industries\chemical.jpg" class="img-fluid" alt=""></div>
            <div class="swiper-slide"><img src="assets\img\industries\constuction.jpg" class="img-fluid" alt=""></div>
            <div class="swiper-slide"><img src="assets\img\industries\cooperative.jpg" class="img-fluid" alt=""></div>
            <div class="swiper-slide"><img src="assets\img\industries\dairy.jpg" class="img-fluid" alt=""></div>
            <div class="swiper-slide"><img src="assets\img\industries\educational.jpg" class="img-fluid" alt=""></div>
            <div class="swiper-slide"><img src="assets\img\industries\Electrical Engineering.jpg" class="img-fluid" alt=""></div>
            <div class="swiper-slide"><img src="assets\img\industries\energy.jpg" class="img-fluid" alt=""></div>
          </div>
          </br>
          <div class="swiper-pagination"></div>
        </div>

      </div>
    </section><!-- End Our Clients Section -->

    <!-- ======= Services Section ======= -->
    <section id="services" class="services">
      <div class="container">

        <div class="section-title">
          <h2>Services</h2>
          <p> some data here </p>
        </div>

        <div class="row">
          <div class="col-lg-3 col-md-6 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="100">
            <div class="icon-box iconbox-blue">
              <div class="icon">
                <svg width="100" height="100" viewBox="0 0 600 600" xmlns="http://www.w3.org/2000/svg">
                  <path stroke="none" stroke-width="0" fill="#f5f5f5" d="M300,521.0016835830174C376.1290562159157,517.8887921683347,466.0731472004068,529.7835943286574,510.70327084640275,468.03025145048787C554.3714126377745,407.6079735673963,508.03601936045806,328.9844924480964,491.2728898941984,256.3432110539036C474.5976632858925,184.082847569629,479.9380746630129,96.60480741107993,416.23090153303,58.64404602377083C348.86323505073057,18.502131276798302,261.93793281208167,40.57373210992963,193.5410806939664,78.93577620505333C130.42746243093433,114.334589627462,98.30271207620316,179.96522072025542,76.75703585869454,249.04625023123273C51.97151888228291,328.5150500222984,13.704378332031375,421.85034740162234,66.52175969318436,486.19268352777647C119.04800174914682,550.1803526380478,217.28368757567262,524.383925680826,300,521.0016835830174"></path>
                </svg>
                <i class="bx bxl-dribbble"></i>
              </div>
              <h4><a href="pages/audit.php">Audit Experience in the Banking Sector</a></h4>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 d-flex align-items-stretch mt-4 mt-md-0" data-aos="zoom-in" data-aos-delay="200">
            <div class="icon-box iconbox-orange ">
              <div class="icon">
                <svg width="100" height="100" viewBox="0 0 600 600" xmlns="http://www.w3.org/2000/svg">
                  <path stroke="none" stroke-width="0" fill="#f5f5f5" d="M300,582.0697525312426C382.5290701553225,586.8405444964366,449.9789794690241,525.3245884688669,502.5850820975895,461.55621195738473C556.606425686781,396.0723002908107,615.8543463187945,314.28637112970534,586.6730223649479,234.56875336149918C558.9533121215079,158.8439757836574,454.9685369536778,164.00468322053177,381.49747125262974,130.76875717737553C312.15926192815925,99.40240125094834,248.97055460311594,18.661163978235184,179.8680185752513,50.54337015887873C110.5421016452524,82.52863877960104,119.82277516462835,180.83849132639028,109.12597500060166,256.43424936330496C100.08760227029461,320.3096726198365,92.17705696193138,384.0621239912766,124.79988738764834,439.7174275375508C164.83382741302287,508.01625554203684,220.96474134820875,577.5009287672846,300,582.0697525312426"></path>
                </svg>
                <i class="bx bx-file"></i>
              </div>
              <h4><a href="pages/audit1.php">Audit Experience of Companies incorporated under the Indian Companies Act</a></h4>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 d-flex align-items-stretch mt-4 mt-lg-0" data-aos="zoom-in" data-aos-delay="300">
            <div class="icon-box iconbox-pink">
              <div class="icon">
                <svg width="100" height="100" viewBox="0 0 600 600" xmlns="http://www.w3.org/2000/svg">
                  <path stroke="none" stroke-width="0" fill="#f5f5f5" d="M300,541.5067337569781C382.14930387511276,545.0595476570109,479.8736841581634,548.3450877840088,526.4010558755058,480.5488172755941C571.5218469581645,414.80211281144784,517.5187510058486,332.0715597781072,496.52539010469104,255.14436215662573C477.37192572678356,184.95920475031193,473.57363656557914,105.61284051026155,413.0603344069578,65.22779650032875C343.27470386102294,18.654635553484475,251.2091493199835,5.337323636656869,175.0934190732945,40.62881213300186C97.87086631185822,76.43348514350839,51.98124368387456,156.15599469081315,36.44837278890362,239.84606092416172C21.716077023791087,319.22268207091537,43.775223500013084,401.1760424656574,96.891909868211,461.97329694683043C147.22146801428983,519.5804099606455,223.5754009179313,538.201503339737,300,541.5067337569781"></path>
                </svg>
                <i class="bx bx-tachometer"></i>
              </div>
              <h4><a href="pages/audit2.php">Audit Experience of Non-Corporate Entities</a></h4>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 d-flex align-items-stretch mt-4" data-aos="zoom-in" data-aos-delay="100">
            <div class="icon-box iconbox-yellow">
              <div class="icon">
                <svg width="100" height="100" viewBox="0 0 600 600" xmlns="http://www.w3.org/2000/svg">
                  <path stroke="none" stroke-width="0" fill="#f5f5f5" d="M300,503.46388370962813C374.79870501325706,506.71871716319447,464.8034551963731,527.1746412648533,510.4981551193396,467.86667711651364C555.9287308511215,408.9015244558933,512.6030010748507,327.5744911775523,490.211057578863,256.5855673507754C471.097692560561,195.9906835881958,447.69079081568157,138.11976852964426,395.19560036434837,102.3242989838813C329.3053358748298,57.3949838291264,248.02791733380457,8.279543830951368,175.87071277845988,42.242879143198664C103.41431057327972,76.34704239035025,93.79494320519305,170.9812938413882,81.28167332365135,250.07896920659033C70.17666984294237,320.27484674793965,64.84698225790005,396.69656628748305,111.28512138212992,450.4950937839243C156.20124167950087,502.5303643271138,231.32542653798444,500.4755392045468,300,503.46388370962813"></path>
                </svg>
                <i class="bx bx-layer"></i>
              </div>
              <h4><a href="pages/directtax.php">Experience of Direct Taxes &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a></h4>
            </div>
          </div>


         </div>




         <div class="row">
          <div class="col-lg-3 col-md-6 d-flex align-items-stretch mt-4" data-aos="zoom-in" data-aos-delay="200">
            <div class="icon-box iconbox-red">
              <div class="icon">
                <svg width="100" height="100" viewBox="0 0 600 600" xmlns="http://www.w3.org/2000/svg">
                  <path stroke="none" stroke-width="0" fill="#f5f5f5" d="M300,532.3542879108572C369.38199826031484,532.3153073249985,429.10787420159085,491.63046689027357,474.5244479745417,439.17860296908856C522.8885846962883,383.3225815378663,569.1668002868075,314.3205725914397,550.7432151929288,242.7694973846089C532.6665558377875,172.5657663291529,456.2379748765914,142.6223662098291,390.3689995646985,112.34683881706744C326.66090330228417,83.06452184765237,258.84405631176094,53.51806209861945,193.32584062364296,78.48882559362697C121.61183558270385,105.82097193414197,62.805066853699245,167.19869350419734,48.57481801355237,242.6138429142374C34.843463184063346,315.3850353017275,76.69343916112496,383.4422959591041,125.22947124332185,439.3748458443577C170.7312796277747,491.8107796887764,230.57421082200815,532.3932930995766,300,532.3542879108572"></path>
                </svg>
                <i class="bx bx-slideshow"></i>
              </div>
              <h4><a href="pages/indirecttax.php">Experience of Indirect Taxes  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a></h4>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 d-flex align-items-stretch mt-4" data-aos="zoom-in" data-aos-delay="300">
            <div class="icon-box iconbox-teal">
              <div class="icon">
                <svg width="100" height="100" viewBox="0 0 600 600" xmlns="http://www.w3.org/2000/svg">
                  <path stroke="none" stroke-width="0" fill="#f5f5f5" d="M300,566.797414625762C385.7384707136149,576.1784315230908,478.7894351017131,552.8928747891023,531.9192734346935,484.94944893311C584.6109503024035,417.5663521118492,582.489472248146,322.67544863468447,553.9536738515405,242.03673114598146C529.1557734026468,171.96086150256528,465.24506316201064,127.66468636344209,395.9583748389544,100.7403814666027C334.2173773831606,76.7482773500951,269.4350130405921,84.62216499799875,207.1952322260088,107.2889140133804C132.92018162631612,134.33871894543012,41.79353780512637,160.00259165414826,22.644507872594943,236.69541883565114C3.319112789854554,314.0945973066697,72.72355303640163,379.243833228382,124.04198916343866,440.3218312028393C172.9286146004772,498.5055451809895,224.45579914871206,558.5317968840102,300,566.797414625762"></path>
                </svg>
                <i class="bx bx-arch"></i>
              </div>
              <h4><a href="pages/eclm.php">Experience of Corporate Law Matters</a></h4>
            </div>
          </div>
 

          <div class="col-lg-3 col-md-6 d-flex align-items-stretch mt-4" data-aos="zoom-in" data-aos-delay="300">
          <div class="icon-box iconbox-blue">
              <div class="icon">
                <svg width="100" height="100" viewBox="0 0 600 600" xmlns="http://www.w3.org/2000/svg">
                  <path stroke="none" stroke-width="0" fill="#f5f5f5" d="M300,521.0016835830174C376.1290562159157,517.8887921683347,466.0731472004068,529.7835943286574,510.70327084640275,468.03025145048787C554.3714126377745,407.6079735673963,508.03601936045806,328.9844924480964,491.2728898941984,256.3432110539036C474.5976632858925,184.082847569629,479.9380746630129,96.60480741107993,416.23090153303,58.64404602377083C348.86323505073057,18.502131276798302,261.93793281208167,40.57373210992963,193.5410806939664,78.93577620505333C130.42746243093433,114.334589627462,98.30271207620316,179.96522072025542,76.75703585869454,249.04625023123273C51.97151888228291,328.5150500222984,13.704378332031375,421.85034740162234,66.52175969318436,486.19268352777647C119.04800174914682,550.1803526380478,217.28368757567262,524.383925680826,300,521.0016835830174"></path>
                </svg>
                <i class="bx bxl-dribbble"></i>
              </div>
              <h4><a href="pages/oas.php"> &nbsp;&nbsp; Other areas of  &nbsp;&nbsp;&nbsp;&nbsp; Services  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a></h4>
            </div>
          </div>
         
        




        </div>

      </div>
    </section><!-- End Services Section -->

<?php 

$insert = false;

require_once "config.php";

if (isset($_POST['name'])){

$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$services = $_POST['services'];
$partnername = $_POST['partnername'];
$datetime = $_POST['datetime'];


$sql ="INSERT INTO `appointment`(`id`, `name`, `email`, `phone`, `services`, `partnername`, `datetime`) VALUES (NULL, '$name', '$email', '$phone', '$services', '$partnername', '$datetime');";


if($conn->query($sql) == true){
  //echo "Successfully inserted";

  // Flag for successful insertion
  $insert = true;
}
else{
  echo "ERROR: $sql <br> $conn->error";
}

// Close the database connection
$conn->close();

}
?>
    <!-- ======= About Us Section ======= -->
    <section id="about" class="about">
      <div class="container">

        <div class="section-title">
          <h2>Get an Appointment</h2>
         
              </div>
<form action="index.php" method="post">
        <div class="row">
          <div class="col-lg-4 order-1 order-lg-2">
            
         <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                   <div class="validation"></div>
          </div>
         
          <div class="col-lg-4 order-2 order-lg-2">
          <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" data-rule="email" data-msg="Please enter a valid email" />
                  <div class="validation"></div>
          </div>


          <div class="col-lg-4 order-3 order-lg-2">
          <input type="tel" class="form-control" name="phone" id="email" placeholder="Your phone no." data-rule="email" data-msg="Please enter a valid phone no." />
                 
          </div>
        </div>

         </br></br>
        <div class="row">
          <div class="col-lg-6 order-1 order-lg-2">


        <select class="form-control" name="services" id="Selectid"  placeholder="Select Services" >
                    <option value="please select" >Select Services</option>
                    <option value="Audit Experience in the Banking Sector" >Audit Experience in the Banking Sector</option>
                    <option value="Audit Experience of Companies incorporated under the Indian Companies Act." >Audit Experience of Companies incorporated under the Indian Companies Act.</option>
                    <option value="Stock Verification Audits">Stock Verification Audits</option>
                    <option value="personal loan">Personal loan</option>
                    <option value="Audit Experience of Non-Corporate Entities">Audit Experience of Non-Corporate Entities</option>
                    <option value="Experience of Direct Taxes">Experience of Direct Taxes</option>
                    <option value="Experience of Indirect Taxes">Experience of Indirect Taxes</option>
                    <option  value="Experience of Corporate Law Matters">Experience of Corporate Law Matters</option>
                    </select>

         </div>


         <div class="col-lg-6 order-2 order-lg-2">


<select class="form-control" name="partnername" id="Selectid"  placeholder="Select Services" >
            <option value="please select" >meeting partner name</option>
            <option value="business loan" >Business loan</option>
            <option value="Home loan" >Home loan</option>
            <option value="mortgauge loan">Mortgauge loan</option>
            <option value="personal loan">Personal loan</option>
            <option value="working capital loan">Working capital loan</option>
            <option value="term loan">Term loan</option>
            <option value="equity funding">Equity funding</option>
            <option  value="educational loan">Educational loan</option>
             <option value="equity funding">GST</option>
            <option  value="educational loan">IT Filling</option>
             <option  value="educational loan">Others</option>
            </select>

 </div>
         </div>


         </br></br>




           <div class="row">
           <div class="col-lg-6 order-2 order-lg-2">

           <input type="datetime-local" name="datetime" class="form-control" id="name" placeholder="Please enter the date and time of the appointment" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
           
          
          </div>
         </div>

         </br></br>

         <div class="row">
           <div class="col-lg-12 order-2 order-lg-2">

           <div class="text-center">
           <button type="submit" class="btn btn-success" >Submit</button>
         </div>
          </div>
         </div>

         <h4><?php
        if($insert == true){
        echo "<p class='submitMsg'>Thanks for submitting your data, our team will be in touch with you shortly.</p>";
        }
    ?></h4>

</form>

     

      </div>
    </section><!-- End About Us Section -->





    

  </main><!-- End #main -->


  <?php include('footer.php');  ?>

  