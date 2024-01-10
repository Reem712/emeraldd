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
    * {
        padding: 0;
        margin: 0;
        box-sizing: border-box;
        font-family: sans-serif;
    }

    .section {
        display: flex;
        height: 100vh;
        justify-content: center;
        align-items: center;
        background-size: 100%;
    }

    .container {
        width: 100%;
        max-width: 650px;
        background: rgba(0, 0, 0, 0.5);
        padding: 28px;
        margin: 0 28px;
        border-radius: 10px;
        box-shadow: inset -2px 2px 2px white;
    }

    .form-title {
        font-size: 26px;
        font-weight: 600;
        text-align: center;
        padding-bottom: 6px;
        color: white;
        text-shadow: 2px 2px 2px black;
        border-bottom: solid 1px white;
    }

    .main-user-info {
        display: flex;
        flex-wrap: wrap;
        justify-content: space-between;
        padding: 20px 0;
    }

    .user-input-box:nth-child(2n) {
        justify-content: end;
    }

    .user-input-box {
        display: flex;
        flex-wrap: wrap;
        width: 50%;
        padding-bottom: 15px;
    }

    .user-input-box label {
        width: 95%;
        color: white;
        font-size: 20px;
        font-weight: 400;
        margin: 5px 0;
    }

    .user-input-box input {
        height: 40px;
        width: 95%;
        border-radius: 7px;
        outline: none;
        border: 1px solid grey;
        padding: 0 10px;
    }

    .gender-title {
        color: white;
        font-size: 24px;
        font-weight: 600;
        border-bottom: 1px solid white;
    }

    .gender-category {
        margin: 15px 0;
        color: white;
    }

    .gender-category label {
        padding: 0 20px 0 5px;
    }

    .gender-category label,
    .gender-category input,
    .form-submit-btn input {
        cursor: pointer;
    }

    .form-submit-btn {
        margin-top: 40px;
    }

    .form-submit-btn input {
        display: block;
        width: 100%;
        margin-top: 10px;
        font-size: 20px;
        padding: 10px;
        border: none;
        border-radius: 3px;
        color: rgb(209, 209, 209);
        background: rgba(63, 114, 76, 0.7);
    }

    .form-submit-btn input:hover {
        background: rgba(56, 204, 93, 0.7);
        color: rgb(255, 255, 255);
    }

    @media(max-width: 600px) {
        .container {
            min-width: 280px;
        }

        .user-input-box {
            margin-bottom: 12px;
            width: 100%;
        }

        .user-input-box:nth-child(2n) {
            justify-content: space-between;
        }

        .gender-category {
            display: flex;
            justify-content: space-between;
            width: 100%;
        }

        .main-user-info {
            max-height: 380px;
            overflow: auto;
        }

        .main-user-info::-webkit-scrollbar {
            width: 0;
        }
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
    <a href="index.html" class="logo" ><img src="./img/bb.jpg" width="30" height="30" class="i"></a>
<style>
.logo{
    margin-left: 45%;

}
</style>
        <h1 class="form-title">Registration</h1>
        <form action="includes/formhandler.php" method="post" onsubmit="return validateForm()">
            <div class="main-user-info">
                <div class="user-input-box">
                    <label for="Username">Username </label>
                    <input type="text" id="Username" name="Username" placeholder="Enter username" />
                </div>
                <div class="user-input-box">
                    <label for="EMAIL">Email</label>
                    <input type="email" id="EMAIL" name="EMAIL" placeholder="Enter email" />
                </div>
                <div class="user-input-box">
                    <label for="password">Password</label>
                    <input type="password" id="password" name="password" placeholder="Enter password" />
                </div>
                <div class="user-input-box">
                    <label for="Phone_Number">Phone number</label>
                    <input type="number" id="Phone_Number" name="Phone_Number" placeholder="Enter Phone" />
                </div>
            </div>
            <div class="form-submit-btn">
                <input type="submit" value="Register" />
            </div>
        </form>
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
