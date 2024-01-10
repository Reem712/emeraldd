<!doctype html>
<html lang="en">
<head>
  <title>Login</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="stylesheet" href="https://unicons.iconscout.com/release/v2.1.9/css/unicons.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="login.css">
  <script src="script.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

</head>
<style>

    .section {
    font-family: Arial, sans-serif;
    margin: 0;
    padding: 0;
    display: flex;
    flex-direction: column;
    align-items: center;
    height: 100vh;
    background-size: 250vh;
    background-position: center;
  }

  .container {
    background-color: #000000;
    border-radius: 10px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    text-align: center;
    padding: 10px;
    opacity: 75%;
    margin-top: 20px;
    width: 550px;
  }

  .signup-form {
    max-width: 400px;
    margin: 0 auto;
  }

  p {
  font-weight: 500;
  font-size: 17px;
}

  h2 {
    font-size: 24px;
    color: #fff;
  }

  form {
    display: flex;
    flex-direction: column;
    gap: 10px;
  }

  label {
    font-weight: bold;
    color: #fff;
  }

  input {
    padding: 10px;
    border: 1px solid #009688;
    border-radius: 5px;
  }

  button {
    font-family: monospace;
    background: rgba(63, 114, 76, 0.7);
    color: #fff ;
    border: none;
    border-radius: 8px;
    width: 120px;
    height: 45px;
    transition: .3s;
    margin-right: 100px;
    align-items: center;
  }

  .home-link {
    margin-top: 20px;
  }

  .home-link a {
    text-decoration: none;
    color: #fff;
    border: solid;
    border-radius: 25px;
    padding-left: 5px;
    padding-right: 5px;
  }

  .home-link p {
    color: #fff;
  }

  button:hover {
    background: rgba(56, 204, 93, 0.7);
    box-shadow: 0 0 0 5px #000000;
    color: #fff;
  }
</style>
<body>
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
    <div class="section">
    <div class="container">
    <div class="signup-form">
    <a href="index.html" class="logo" ><img src="./img/bb.jpg" width="30" height="30" class="i"></a>

      <h2>login</h2>

      <form action="includes/checkHandler.php" method="post">
        <label for=" Username">Username</label>
        <input type="text" id="Username" name="username" required />
        <br />

        <label for="password">Password</label>
        <input type="password" id="password" name="password" required />
        <br />

        <pre>

              <button type="submit" name="login" style="align-items: center">Login</button>
        </pre>

      </form>
    </div>
    <div class="home-link">
      <p>dont have an account? <br><a href="./register.php">Register </a></p>
    </div>
  </div>
    </div>

    <script>
    function validateForm() {
        var username = document.getElementById("Username").value;
        var email = document.getElementById("EMAIL").value;
        var password = document.getElementById("password").value;
        var phoneNumber = document.getElementById("Phone_Number").value;

        if (username === "" || email === "" || password === "" || phoneNumber === "") {
            alert("Please fill in all fields before submitting the form.");
            return false;
        }

        // Additional validation and password hashing can be added here

        return true;
    }
</script>
</main>

</body>
</html>
