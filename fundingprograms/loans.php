<?php include 'TypeOneCookies.php';
$Vdata = file_get_contents('TypeOneCookies.php');
?>
<?php
session_start();
?>
<!DOCTYPE html>
<html>
  <head>
      <title>Loans</title>
      <link rel="shortcut icon" type="image/png" href="images/3d.png">
      <link rel="stylesheet" href="navigation.css">
    <link rel="stylesheet" href="loans.css">
    <link rel="stylesheet" href="footer.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css">
<script src="https://kit.fontawesome.com/a076d05399.js"></script>
<script src="i_g_l_validation.js"></script>
    <link rel="preconnect" href="https://fonts.gstatic.com">
  </head>
  <body>
    <header>
        <div class="containeer">
            <div class="div1"></div><div class="logo">
                <h4 style="font-family: 'Rajdhani', sans-serif;">
                <span>B</span><span>usiness</span>
                <span>P</span><span>romotions</span>  
                <span>A</span><span>gency</span>
                </h4>
            </div></div>
            <nav class="m-nav">
                <div class="nav-bar">
                <ul class="nav-l">
                    <li class="nav-l-i">
                        <a href="homepage.php" class="link" style="margin-left:140px;">Home</a>
                    </li>
                    <li class="nav-l-i">
                        <a href="Promotions.php" class="link">Promotions</a>
                    </li>
                    <li class="nav-l-i">
                        <a href="../products/Products.php" class="link">E-Shopping</a>
                    </li>
                    <li class="nav-l-i">
                      <div class="dropdown">
                        <button class="dropbtn"> <a href="fundingprograms.php" class="link">Funding  <i class="fa fa-caret-down" style="font-size:18px;resize:none;"></i></a>
                        </button>
                        <div class="dropdown-content">
                          <a href="loans.php">Loans</a>
                          <a href="investment.php">Investment Capital</a>
                          <a href="grants.php">Grants</a>
                        </div>
                      </div> 
                    </li>
                    <li class="nav-l-i">
                        <a href="Kontakti.php" class="link">Contact Us</a>
                    </li>
                    <li class="tre"><span class="tre3"></span></li>
                </ul>
            </nav>
        </nav>
        <nav class="account">
          <ul class="nav-l">
            <li class="nav-l-i">
            <?php
                    if(isset($_SESSION["useruid"])) {
                        echo "<a class='link link_button' href='profile.php'>Profile</a>";
                        echo '<a class="link link_button" href="logout.inc.php">Log out</a>';
                    }
                    else {
                        echo '<a class="link link_button" href="login.php">Join Us</a>';
                    }
                    ?>
            </li>
          </ul>
        </nav>
    </div>
  </div>
  <script>
    window.addEventListener('scroll', function () {
        let header = document.querySelector('header');
        let windowPosition = window.scrollY > 0;
        header.classList.toggle('scrolling-active', windowPosition);
    })
  </script>
        </header>
           <main>
            <div class="box1">
              <div class="content">
                <h1 data-text="Loans">Loans</h1>
                <p style="font-size: 22px;">
                Start or expand your business with loans. Find the perfect loan for your small business, today. Use Lender Match to find lenders.
              </p>
              </div>
          
              <button class="open-button" onclick="openForm()">Find Lenders</button>

<div class="form-popup" id="myForm">
  <form action="loansform.php" method="POST" class="form-container">
    <h1>Please complete the form below </h1>
    <label for="name"><b>Name</b></label>
    <input type="text" id="name" placeholder="Enter Name" name="name" required>
    <label for="surname"><b>Surname</b></label>
    <input type="text" id="surname" placeholder="Enter Surname" name="surname" required>
    <label for="email"><b>Email</b></label>
    <input type="text" id="email" placeholder="Enter Email" name="email" required>
    <label for="phone"><b>Number</b></label>
  <input type="tel" id="phone" name="phone" placeholder="383-45-678-234" >
  </br>
    <label for="subject"><b>What Are Your Future Goals?</b></label>
    <textarea id="subject" name="subject" placeholder="Enter text here.." style="width:100%;height:80px"></textarea>
   


    <button type="submit" class="btn" onclick="return validation()">Summbit</button>
    <button type="button" class="btn cancel" onclick="closeForm()">Close</button>
  </form>
</div>
<script>
  function openForm() {
    document.getElementById("myForm").style.display = "block";
  }
  
  function closeForm() {
    document.getElementById("myForm").style.display = "none";
  }
  </script>
              <div class="photo">
    <img src="imagesfunding/trend.jpg" >
   
              </div>
        </div>
        <div class="box4">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="rgb(196, 190, 190)" fill-opacity="1" d="M0,96L60,117.3C120,139,240,181,360,197.3C480,213,600,203,720,165.3C840,128,960,64,1080,58.7C1200,53,1320,107,1380,133.3L1440,160L1440,0L1380,0C1320,0,1200,0,1080,0C960,0,840,0,720,0C600,0,480,0,360,0C240,0,120,0,60,0L0,0Z"></path></svg>
          </div>
            <div class="box2">
                <div class="content1">
                    <h2 style="font-size: 30px;">Need a loan for your business?</h2>
                    <?php
                for ($i = 1; $i <= 3; $i++) {
                  if(!isset($_COOKIE[${"cookies".$i}->getName()])) {
                      echo "Cookie '" . ${"cookies".$i}->getName(). "' has not been set!"; echo "<br>";
                    } else {
                      echo "Cookie '" . ${"cookies".$i}->getName() . "' has been set!"; echo "<br>";
                      print_r($_COOKIE);
                      echo "<br>";
                      // printimi i vlerave te cookies
                      // foreach ($_COOKIE as $key => $value)
                      //     {
                          //     echo $key.' is '.$value. "<br>\n";
                          //   }
                    }
              }
                ?>
                    <p style = "font-size: 21px;">
                    <?php
                    // Variabel globale
                    $teksti = "Loans for different business sizes.";

                    // Variabel globale qe do ??aset nga funksioni sepse e ka keyword global
                    $teksti2 = "business ";
                    // Funksion me default paramter
                    function defaultValues($employees1, $employees2, int $defaultOption = 30000) {
                      // Nese printohet paraqet error sepse variabla eshte deklaruar jashte funksionit
                      // echo $teksti;

                      // Variabel lokale e deklaruar si static qe te pengon fshirjen e saj me vone
                      $teksti3 = "A ";
                      echo $teksti3;
                      global $teksti2;
                      echo $teksti2;
                      echo "with ". $employees1."-".$employees2." employees gets up to $".$defaultOption.".";
                        echo "<br>";
                    }
                    echo $teksti;
                    // Printimi i $teksti3 shkakton error.
                    // echo $teksti3;
                    echo "<br>";
                    defaultValues(1, 5, 2000);
                    defaultValues(6, 10);
                    defaultValues(11, 20, 100000);
                    defaultValues(21, 30, 500000);
                    ?>
                    </p>
                </div>
                </div>
                <div class="box3">
                    <img src="imagesfunding/businessloan.gif" style="width:600px;height:600px;">
                </div>
                <div class="box5">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="rgb(196, 190, 190)" fill-opacity="1" d="M0,96L60,117.3C120,139,240,181,360,197.3C480,213,600,203,720,165.3C840,128,960,64,1080,58.7C1200,53,1320,107,1380,133.3L1440,160L1440,320L1380,320C1320,320,1200,320,1080,320C960,320,840,320,720,320C600,320,480,320,360,320C240,320,120,320,60,320L0,320Z"></path></svg>
                  </div>
                  <div class="box6">
                    <figure>
                      <div class="photo1">
                 <img src="imagesfunding/8.gif">
                 <figcaption>Make a plan to turn into a good business</figcaption>
                </figure>
                </div>
                  </div>
                  <div class="box7">
                      
                    <h3>Why choose a loan with us?</h3>
                    <?php
                    // Perdorimi i built int functions: print_r(), explode() dhe implode()
                    $first = "We provide low rate loans personalized to yours and yours only.,
                    You get an instant decision when you apply online., We offer quick services. ";
                    print_r(explode(',', $first, 3));
                    echo "<br>"; echo "<br>";
                    $arr = array("We provide low rate loans personalized to yours and yours only.",
                    "You get an instant decision when you apply online", "We offer quick services. ");
                    echo implode("<br>", $arr);
                    ?>
                </div>
            <div class="box8">
                    <h1>Types of Small Business Loans</h1>
             <div class="container">
                <div class="llojet">
                    <div class="photos">
                        <img src="imagesfunding/equipment.png">
                    </div>
                    <h6>Equipment</h6>
                </div> 
                <div class="llojet"> 
                    <div class="photos">
                        <img src="imagesfunding/sba.png">
                    </div>
                    <h6>SBA Guaranteed</h6>
                 </div>  
                <div class="llojet">
                    <div class="photos">
                        <img src="imagesfunding/real.png">
                    </div>
                    <h6>Real Estate Construction</h6>
                  </div>  
                <div class="llojet">
                    <div class="photos">
                        <img src="imagesfunding/workingcap.png">
                    </div>
                    <h6>Working Capital</h6>
                  </div>  
             </div>
            </div>
               
            </main>
            <footer>
              <div class="footer-container">
                <div class="left-col">
                  <span style="font-size:29px;color:#ffff;background:#333;border-bottom:7px solid #d88e2c ;"><span style="color:#F79B44">B</span>USINESS</span>
                  <span style="font-size:29px;color:#ffff;background:#333;border-bottom:7px solid #d88e2c ;"><span style="color:#F79B44">P</span>ROMOTIONS</span>
                  <span style="font-size:29px;color:#ffff;background:#333;border-bottom:7px solid #d88e2c ;"><span style="color:#F79B44">A</span>GENCY</span>
                  <div class="social-media">
                    <a href="https://www.facebook.com/" target="_blank"><i class="fab fa-facebool-f"></i></a>
                    <a href="https://twitter.com/" target="_blank"><i class="fab fa-twitter"></i></a>
                    <a href="https://www.instagram.com/" target="_blank"><i class="fab fa-instagram"></i></a>
                    <a href="https://www.youtube.com/" target="_blank"><i class="fab fa-youtube"></i></a>
                    <a href="https://www.linkedin.com/" target="_blank"><i class="fab fa-linkedin-in"></i></a>
                  </div>
                  <p class="rights-text">&#169 Copyright 2021 Created By BPA All Rights Reserved</p>
                </div>
                <div class="right-col">
                  <h1>Contact Us</h1>
                  <div class="border"></div>
                <p>For any question contact us.</p>
                <div class="contact">
                <i class="fa fa-phone" style="color: #333;font-size:23px; "><span style="font-size:16px;">+38344111222</span></i>
                <i class="fa fa-envelope" style="color: #333;font-size:23px; "><a href="mailto:valeza.grainca@student.uni-pr.edu"><span style="font-size:16px;">Send Mail</span></a></i>
                  </div>
                </div>
              </div>
            </footer>
     
  </body>
</html>