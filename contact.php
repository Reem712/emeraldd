<!DOCTYPE html>
<html>
<head>
    <title>Home</title>
    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="stylesheet" type="text/css" href="contact.css">
    <script src="script.js"></script>
    <script src="contact.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

  </head>
  <body>
<form action="includes1\formhnadler.php" method="post">
    <header id="navContent">
        <input type="checkbox" name="" id="toggler">
        <label for="toggler"class="fas fa-bars"></label>     
        <a href="index.html" class="logo" ><img src="./img/bb.jpg" width="30" height="25" class="i">EMERALDA<span>.</span></a>
       <nav class="navbar">
        <a href="index.html" class="">Home</a>
        <a href="about.html" class="">About</a>
        <a href="productsm.html" class="">Men</a>
        <a href="productsw.html" class="">Women</a>
        <a href="contact.php" class="">Contact Us</a>
        <a href="login.php" class="">Login/Sign-up</a>
    
    </nav>
        <div class="icon">
        <a href="#" class="fas fa-heart"></a>
            <a href="cart.php" class="fas fa-shopping-cart"></a>
            <a href="#" class="fas fa-user"></a>
        </div>
    
    </header>

      <div id="loader">
          <div class="Ripple">
              <div class="loader">
                <div></div>
                <div></div>
              </div>
          </div>
        </div>
  <div id="stars"></div>
  <div id="stars2"></div>
  <div id="stars3"></div>
  <main id="pageContent">
    <div class="background">
      <div class="container">
        <div class="screen">
          <div class="screen-header">
            <div class="screen-header-left"></div>
            <div class="screen-header-right">
              <div class="screen-header-ellipsis"></div>
              <div class="screen-header-ellipsis"></div>
              <div class="screen-header-ellipsis"></div>
            </div>
          </div>
          <div class="screen-body">
            <div class="screen-body-item left">
              <div class="app-title">
                <span>CONTACT</span>
                <span>US</span>
              </div>
              <div class="app-contact">CONTACT INFO : +62 81 314 928 595 </div>
              <div class="app-contact" style="  margin-top: 5%; display: flex;
    justify-content: space-between;">
              <a href="#" target="_blank">
      <img src="./img/i1.png" width="30" height="30" alt="Instagram" >
    </a>
    <a href="#" target="_blank">
      <img src="./img/f2.png" width="30" height="30" alt="Facebook">
    </a>
    <a href="#" target="_blank">
      <img src="./img/t1.png" width="30" height="30" alt="Twitter">
    </a>
    <a href="#" target="_blank">
      <img src="./img/w1.png" width="30" height="30" alt="WhatsApp" >
    </a>
              </div>
              
              
            </div>
            <div class="screen-body-item">
              <div class="app-form">
                <form id="contactForm">
                  <div class="app-form-group">
                    <input type="text" name="name1" class="app-form-control" placeholder="NAME" required>
                  </div>
                  <div class="app-form-group">
                    <input type="text" name="email1" class="app-form-control" placeholder="EMAIL" required>
                  </div>
                  <div class="app-form-group">
                    <input type="text" name="contact1" class="app-form-control" placeholder="CONTACT NO" required>
                  </div>
                  <div class="app-form-group message">
                    <input type="text" name="message1" class="app-form-control" placeholder="MESSAGE" required>
                  </div>
                  <div class="app-form-group buttons">
                    <button type="submit" class="app-form-button cancel">CANCEL</button>
                    <button type="submit" class="app-form-button send">SEND</button>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

      <script src="contact.js"></script>
  </main>
  <script src="contact.js"></script>
</body>
</html>
