<!--
    FILE:    index.php
    DESC:    The index page for Java Juice login page
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

// if a post request has been made to login
if(isset($_POST['username']) &&
   !(empty($_POST['username']) || empty($_POST['password']))) {
    // we only need the database if we've received a request (wasted memory to do)
    // otherwise
    require_once '../../../../dbConnect.inc';

    // builds a query to select the user information
    $res = $CONN->query(
        "SELECT *
        FROM users
        WHERE user_name='{$_POST['username']}'
        LIMIT 1"
    );

    // any number that isn't 0 is true in PHP, this will run if there is a row
    if(mysqli_num_rows($res)) {
        // fetches the first row
        $row = mysqli_fetch_assoc($res);

        // verifies the password is correct
        if(password_verify($_POST['password'], $row['user_pass'])) {
            // sets session variables
            $_SESSION['user_name'] = $row['user_name'];

            // redirects user to the page they are loggin in to
            //header("Location: ***wherever it should redirect***");
        }
    }
}

  include "../assets/inc/header.php";

?>
            <div class="login-tag">
                Login to Java Juice
            </div>
            <?php
            // if the username is set and we get here, that means login failed
            // show the error that username or password was incorrect
            if(isset($_POST['username'])) {
            ?>
                <div class="error">
                    Username or password is incorrect. Please try again.
                </div>
            <?php
            }
            ?>
            <div class="signin">
                <!-- this is just set to NOT submit for the time being -->
                <form method="post">
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
                            Login
                        </button>
                    </div>
                </form>
            </div>
        </section>

<?php

  include "../assets/inc/footer.php";

 ?>
