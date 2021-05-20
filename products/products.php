<?php
session_start();
?>
<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" type="text/css" href="products.css">
    <link rel="stylesheet" type="text/css" href="singleproduct.css">
    <link rel="stylesheet" type="text/css" href="navigation.css">
    <title>E-Shopping</title>
    <link rel="shortcut icon" type="image/png" href="../fundingprograms/images/3d.png">
    <script src="form_validation.js"></script>
    <script type="text/javascript" src="jquery-3.5.1.js"></script>
    <script src="https://kit.fontawesome.com/096e4d997b.js" crossorigin="anonymous"></script>
</head>

<body>

    <section class="section1" style="background:#999999;">
        <header>
            <div class="containeer">
                <div class="div1"></div>
                <div class="logo">
                    <h4>
                        <span>B</span><span>usiness</span>
                        <span>P</span><span>romotions</span>
                        <span>A</span><span>gency</span>
                    </h4>
                </div>
            </div>
            <nav class="m-nav">
                <div class="nav-bar">
                    <ul class="nav-l">
                        <li class="nav-l-i">
                            <a href="../fundingprograms/homepage.php" class="link" style="margin-left:140px;">Home</a>
                        </li>
                        <li class="nav-l-i">
                            <a href="../fundingprograms/Promotions.php" class="link">Promotions</a>
                        </li>
                        <li class="nav-l-i">
                            <a href="Products.php" class="link">E-Shopping</a>
                        </li>
                        <li class="nav-l-i">
                            <div class="dropdown">
                                <button class="dropbtn"> <a href="../fundingprograms/fundingprograms.php" class="link">Funding <i
                                            class="fa fa-caret-down" style="font-size:18px;"></i></a>
                                </button>
                                <div class="dropdown-content">
                                    <a href="../fundingprograms/loans.php">Loans</a>
                                    <a href="../fundingprograms/investment.php">Investment Capital</a>
                                    <a href="../fundingprograms/grants.php">Grants</a>
                                </div>
                            </div>

                        </li>
                        <li class="nav-l-i">
                            <a href="../fundingprograms/Kontakti.php" class="link">Contact Us</a>
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
                        echo "<a class='link link_button' href='../fundingprograms/profile.php'>Profile</a>";
                        echo '<a class="link link_button" href="../fundingprograms/logout.inc.php">Log out</a>';
                    }
                    else {
                        echo '<a class="link link_button" href="../fundingprograms/login.php">Join Us</a>';
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
    </section>
    <section id="seksioni-produktet" style="position: relative; z-index: 4000;">

        <section>
            <div id="icons">
                <i class="fas fa-th"></i>
                <a href="tableview.php" title="Table View" style="text-shadow: none;"><i class="fas fa-list"></i></a>
            </div>
            <div id="Art">
                <div>
                    <h1 class="category" id="art-h1">ART</h1>
                </div>
                <div class="container" id="art-container"></div>
            </div>
            <div id="Food">
                <div>
                    <h1 class="category">CULTURE</h1>
                </div>
                <div class="container" id="food-container"></div>
            </div>
            <div id="Textile">
                <div>
                    <h1 class="category">FOODS</h1>
                </div>
                <div class="container" id="textile-container"></div>
            </div>
        </section>

        <div id="yourCart" style="z-index: 3000; margin-top:20px;">
            <h2 style="text-decoration: underline; color:#333;">Your Cart</h2>
            <div id="scrollable">
                <dl id="cartList">

                </dl>
            </div>
            <div id="bottom">
                <h2 id = "bottom-h2" style="color:#333;">Total: <span id="totalPrice" style="color:#333;">0.00€</span><span id="discount"></span><span id="newTotal"></span></h2>
                <button id="checkout" onclick="openForm()" style="width: 120px; background-color: #d88e2c;"
                    onMouseOver="this.style.backgroundColor='#333'"
                    onMouseOut="this.style.backgroundColor=' #d88e2c'">CHECKOUT</button>
            </div>
        </div>

        <div id="bigDiv" style=" z-index: 6000;">
            <div class="form-popup" id="myForm" style="border-radius: 15px;">
                <form action="productsform.php" method="POST" class="form-container">
                    <h4>Contact information</h4>
                    <input type="email" id="email" placeholder="Email" name="email">
                    <h4>Shipping address</h4>
                    <input type="text" id="name" placeholder="Name" name="name">
                    <input type="text" id="surname" placeholder="Surname" name="surname">
                    <input type="text" id="address" placeholder="Address" name="address">
                    <input type="text" id="pcode" placeholder="Postal Code" name="pcode">
                    <input type="text" id="city" placeholder="City" name="city">
                    <select id="mySelect" name="mySelect" onchange="change_placeholder(this)">
                        <option value="">Select your country...</option>
                        <option value="Albania">Albania</option>
                        <option value="Kosovo">Kosovo</option>
                        <option value="Montenegro">Montenegro</option>
                        <option value="North Macedonia">North Macedonia</option>
                        <option value="Serbia">Serbia</option>
                    </select>
                    <input type="tel" id="phone" name="phone" placeholder="Phone number">
                    <input type="checkbox">
                    <p style="color:#201c1c">Save this information for next time</p>
                    </br>
                    <button type="submit" class="btn" onclick="return validation() ">Submit</button>
                    <button type="button" class="btn cancel" onclick="closeForm()">Close</button>
                </form>
            </div>
        </div>
    </section>
    <script type="text/javascript" src="Products.js"></script>
    <div class="custom-shape-divider-top-1610755808">
        <svg data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120" preserveAspectRatio="none">
            <path d="M0,0V6c0,21.6,291,111.46,741,110.26,445.39,3.6,459-88.3,459-110.26V0Z" class="shape-fill"></path>
        </svg>
    </div>
    <div class="custom-shape-divider-bottom-1610755546" style="margin-bottom:-2400px;">
        <svg data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120" preserveAspectRatio="none">
            <path d="M0,0V6c0,21.6,291,111.46,741,110.26,445.39,3.6,459-88.3,459-110.26V0Z" class="shape-fill"></path>
        </svg>
    </div>

</body>
</html>