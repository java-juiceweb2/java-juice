<!--
    FILE:    register/index.php
    DESC:    The index page for Java Juice register page
    AUTHOR:  Kevin J. Becker 
    VERSION: 04/16/2019
-->

<?php
// begins a session
session_start();

// if the user is already logged in
if(isset($_SESSION['user_name'])) {
    // header("Location: ***wherever it should redirect***");
}

function sanitize_response(String $value) {
    // returns the input with special characters converted to HTML entities,
    // stripped of slashes, and then excess whitespace removed
    return htmlspecialchars(stripslashes(trim($value)));
}

// if a post request has been made to login
if(isset($_POST['username'])) {
    // we only need the database if we've received a request (wasted memory to do)
    // otherwise
    require_once '../../../../dbConnect.inc';

    // sanitizes each input
    $firstName = sanitize_response($_POST['first-name']);
    $lastName = sanitize_response($_POST['last-name']);
    $email = sanitize_response($_POST['email']);
    $username = sanitize_response($_POST['username']);
    $password = sanitize_response($_POST['password']);

    // checks if the username is taken
    $res = mysqli_query(
        $CONN,
        "SELECT * FROM users WHERE user_name='$username' OR user_email='$email'"
    );

    // hashes the password using the default algorithm
    $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

    if(!mysqli_num_rows($res)) {
        // builds a prepared statement to insert the user
        $stmt = $CONN->prepare(
            "INSERT INTO users
                (user_name, user_pass, user_fn, user_ln, user_email)
            VALUES
                (?,         ?,         ?,       ?,       ?)"
        );

        // bind all of the parameters
        $stmt->bind_param("sssss", $username, $hashedPassword, $firstName, $lastName, $email);

        // execute the query
        $stmt->execute();

        // redirects the user to the login page
        // header("Location: ***login page***");
    } else {
        $error = "Username is already taken.";
    }
}

?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="theme-color" content="#eb5e55">
        <title>Java Juice &bull; Register</title>
        <link type="text/css" rel="stylesheet" href="../assets/css/style.css" />
        <link type="text/css" rel="stylesheet" href="assets/css/style.register.css" />
    </head>
    <body>
        <!-- this page doesn't have a true "navigation" bar as it is only a
             landing page; begin the header of the landing page -->
        <section id="header">
            <div class="brand-header">
                <img src="../assets/images/java-juice-full-white.png" alt="Java Juice" title="Java Juice" class="brand-header-img brand-header-sm" />
            </div>
            <div class="register-tag">
                Register for Java Juice
            </div>
            <?php 
            // if the username is set and we get here, that means login failed
            // show the error that username or password was incorrect
            if(isset($_POST['username'])) {
            ?>
                <div class="error">
                    An account with this username or email is already taken.  
                    Please ensure you have not made a Java Juice account before.
                </div>
            <?php
            }
            ?>
            <div class="register">
                <form method="post" onsubmit="return validateForm();">
                    <div class="input-row">
                        <label for="first-name">First Name</label>
                        <input type="text" 
                               id="first-name"
                               name="first-name"
                               placeholder="Enter your first name"
                               <?=
                                // echoes the first name into the field
                                    isset($_POST['first-name']) ? 
                                        "value='{$_POST['first-name']}'" : 
                                        ""; 
                                ?>
                               required />
                    </div>
                    <div class="input-row">
                        <label for="last-name">Last Name</label>
                        <input type="text" 
                               id="last-name"
                               name="last-name"
                               placeholder="Enter your last name"
                               <?=
                                    isset($_POST['last-name']) ? 
                                        "value='{$_POST['last-name']}'" : 
                                        ""; 
                                ?>
                               required />
                    </div>
                    <div class="input-row">
                        <label for="email">Email</label>
                        <input type="email" 
                               id="email"
                               name="email"
                               placeholder="Enter your email"
                               <?=
                                    isset($_POST['email']) ? 
                                        "value='{$_POST['email']}'" : 
                                        ""; 
                                ?>
                               required />
                    </div>
                    <div class="input-row">
                        <label for="username">Username</label>
                        <input type="text" 
                               id="username"
                               name="username"
                               placeholder="Enter your Java Juice username"
                               <?=
                                // echoes the username into the username field
                                // value if it's set
                                    isset($_POST['username']) ? 
                                        "value='{$_POST['username']}'" : 
                                        ""; 
                                ?>
                               required />
                    </div>
                    <div class="input-row">
                        <label for="password">Password</label>
                        <input type="password" 
                               id="password"
                               name="password"
                               placeholder="Enter your password"
                               required />
                    </div>
                    <div class="input-row">
                        <button type="submit" id="submit">
                            Register
                        </button>
                    </div>
                </form>
            </div>
        </section>

        
        <!-- end the main content of the landing page, begin the footer -->
        <section id="footer">
            <div class="text-right text-center-sm">Copyright &copy; 2019, Java Juice.</div>
        </section>

        <script>
        // verifies the entered information
        function validateForm() {
            // pulls out the different fields
            let firstName = document.getElementById("first-name").value;
            let lastName = document.getElementById("last-name").value;
            let email = document.getElementById("email").value;
            let password = document.getElementById("password").value;
            let userName = document.getElementById("username").value;

            // validates the email field (the only one that needs validation)
            let emailValid = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/.test(email);

            // returns whether everything is valid
            return firstName != "" && 
                   lastName != "" && 
                   email != "" &&
                   emailValid &&
                   password != "" &&
                   userName = "";
        }
        </script>

        <!-- loads the JS files last to optimize time to view -->
        <script defer src="https://use.fontawesome.com/releases/v5.6.3/js/all.js" 
            integrity="sha384-EIHISlAOj4zgYieurP0SdoiBYfGJKkgWedPHH4jCzpCXLmzVsw1ouK59MuUtP4a1" 
            crossorigin="anonymous"></script>
    </body>
</html>