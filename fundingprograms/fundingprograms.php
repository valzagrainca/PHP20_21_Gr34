<!DOCTYPE html>
<html>
  <head>
    <title>Funding Programs</title>
    <link rel="shortcut icon" type="image/png" href="images/3d.png">
    <link rel="stylesheet" href="navigation.css">
    <link rel="stylesheet" href="fundingprograms.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
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
      <div class="conteiner">
        <div class="box" >
          <div class="icon"style="font-size: 35px;">LOANS</div>
        </br>
          <div class="photo">
            <img src="imagesfunding/loans.png" style="width:200px;height:200px;">
          </div>
          <div class="content" style="font-size: 20px;">
            Great enterprises start because the founders want to change the world.
            Start your business with guaranteed loans.
          </br>
          <a  href="loans.php">Read more</a>
          </div>
          
        </div>
  
      </div>
      <div class="conteiner">
        <div class="box" >
          <div class="icon"> <span style="font-family:'Poppins', sans-serif; font-size:30px;">INVESTMENT CAPITAL </span></div>
          </br>
          <div class="photo">
            <img src="imagesfunding/idea.png" style="width:200px;height:200px;">
          </div>
          <div class="content" style="font-size: 20px;">
            So your firm can grow and flourish, a capital investment is more than welcome. 
            Let's see which company is more suitable for you.
          </br>
            <a  href="investment.php">Read more</a>
          </div> 
        </div>
  </div>
  <div class="conteiner">
    <div class="box" >
      <div class="icon" style="font-size: 35px;">GRANTS</div>
    </br>
    <div class="photo">
      <img src="imagesfunding/grants.png" style="width:200px;height:200px;">
    </div>
      <div class="content" style="font-size: 20px;">
        As new businesses, you might need a little push. Luckily, our investors are ready to fund you.
        Apply now to get a head starting grant.
      </br>
      <a  href="grants.php">Read more</a>
      </div>
      
    </div>

  </div>

  </body>
</html>