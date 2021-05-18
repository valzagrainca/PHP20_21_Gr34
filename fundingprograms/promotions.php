<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" type="text/css" href="promotions.css">
    <link rel="stylesheet" href="navigation.css">
   <title>Promotions</title>
   <link rel="shortcut icon" type="image/png" href="images/3d.png">
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <style>
        
        #fotoR {
            width: 280px;
            height: 280px;
        }
    </style>
</head>

<body>

    <section class="section1">
        <header>
            <div class="containeer">
                <div class="div1"></div><div class="logo">
                    <h4 >
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
                            <a href="Products/Products.php" class="link">E-Shopping</a>
                        </li>
                        <li class="nav-l-i">
                          <div class="dropdown">
                            <button class="dropbtn"> <a href="fundingprograms.php" class="link">Funding  <i class="fa fa-caret-down" style="font-size:18px;"></i></a>
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
                  <a class="link link_button" href="login.php">Join Us</a>
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

        
    </section>
    <section class="section2">
        <div class="custom-shape-divider-bottom-1610632061">
            <svg data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120" preserveAspectRatio="none">
                <path d="M741,116.23C291,117.43,0,27.57,0,6V120H1200V6C1200,27.93,1186.4,119.83,741,116.23Z" class="shape-fill"></path>
            </svg>
        </div>
        
        <div class="teksti1"><span>C</span><span>Categories</span></div>
       
        <div class="container1">
            <div class="box1">
                <div class="img1">
                    <a href="#"><img src="images/art.jpg" id="fotoR"></a>
                </div>
                <div class="content1">
                    <div>
                        <a href="#" style="text-decoration: none;"><h2>ART</h2></a>
                    </div>
                </div>
            </div>
            <div class="box1">
                <div class="img1">
                    <a href="#"><img src="images/textil.jpg" id="fotoR"></a>
                </div>
                <div class="content1">
                    <div>
                        <a href="#" style="text-decoration: none;"><h2>CULTURE</h2></a>

                    </div>
                </div>
            </div>
            <div class="box1" id="afterf">
                <div class="img1">
                    <a href="#"></a><img src="images/food.jpg" id="fotoR"></a>
                </div>
                <div class="content1">
                    <div>
                        <a href="#" style="text-decoration: none;"><h2>FOODS</h2></a>
                    </div>
                </div>
            </div>
            
        </div>
    </section>
</body>

</html>