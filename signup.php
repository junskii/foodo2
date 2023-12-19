<?
session_start();
include 'koneksi.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Signup | foodo</title>
    <link rel="stylesheet" href="style/signuppage.css">
    <link rel="icon" href="assets/logoonly.png" type="image/x-icon">

</head>

<body>
    <div class="container">
        <div class="header">
            <div class="logo">
                <img src="assets/logosidered.png" alt="logo">
            </div>
        </div>
        <!-- /*--------------------loginform--------------------*/ -->

        <div class="loginform">
            <h1>Sign Up<span id="titik">.</span></h1>
            <form action="signupproses.php" method="post">
                <div class="text-field">
                    <label for="firstname">First Name:
                        <br>
                        <input type="text" id="firstname" name="fname" autocomplete="off" placeholder="Your First Name"
                            required>
                    </label>
                </div>
                <br>
                <div class="text-field">
                    <label for="lastname">Last Name:
                        <br>
                        <input type="text" id="lastname" name="lname" autocomplete="off" placeholder="Your Last Name"
                            required>
                    </label>
                </div>
                <br>
                <div class="text-field">
                    <label for="phonenumber">Phone Number:
                        <br>
                        <input type="text" id="phonenumber" name="phonenumber" autocomplete="off"
                            placeholder="Your Phone Number" required>
                    </label>
                </div>
                <br>
                <div class="text-field">
                    <label for="email">Email:
                        <br>
                        <input type="email" id="email" name="email" autocomplete="off" placeholder="Your Email"
                            required>
                    </label>
                </div>
                <br>
                <div class="text-field">
                    <label for="password">Password:
                        <br>
                        <input id="password" type="password" name="password" placeholder="Your Password" title="Minimum 6 characters at 
                                                        least 1 Alphabet and 1 Number"
                            pattern="^(?=.*[A-Za-z])(?=.*\d)[A-Za-z\d]{6,}$" required>
                    </label>
                </div>
                <br><br>
                <input type="submit" value="Sign Up" id="signupbutton">
            </form>
        </div>
        <!-- /*--------------------pictarea--------------------*/ -->
        <div class="pict">
            <div class="loginpic">
                <img src="assets/loginpic.jpg">
            </div>
        </div>
    </div>
</body>

</html>