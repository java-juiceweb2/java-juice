<!--
    FILE:    index.php
    DESC:    The index page for Java Juice (project landing)
    AUTHOR:  Kevin J. Becker 
    VERSION: 02/12/2019
-->
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="theme-color" content="#eb5e55">
        <title>Java Juice &bull; Home</title>
        <link type="image/svg+xml" rel="preload" href="assets/images/ripple.svg" />
        <link type="text/css" rel="stylesheet" href="assets/css/style.css" />
    </head>
    <body>
        <!DOCTYPE html>
<html lang="en">

<body>
    <!-- this page doesn't have a true "navigation" bar as it is only a
            landing page; begin the header of the landing page -->
    <section id="header">
        <div class="navbar topnav" id="myTopnav">
            <ul>
                <div class="dropdown">
                    <li><a class="navbar dropMenu" style="padding-top: 1.5rem;padding-bottom: 1.25rem;" href="#lessons">Lessons</a>
                    </li>
                    <div class="dropdown-content">
                        <a href="#">Hello World</a>
                        <a href="exercises/types-ex.php">Variables</a>
                        <a href="exercises/logic-ex.php">Logic</a>
                        <a href="exercises/loops-ex.php">Loops</a>
                        <a href="#">Functions</a>
                    </div>
                </div>
                <li><a class="navbar" style="padding-top: 1.5rem;padding-bottom: 1.25rem;" href="#lesources">Resources</a></li>
                <li><a class="navbar" style="padding-top: 1.5rem;padding-bottom: 1.25rem;" href="#forum">Forum</a></li>
                <li><a class="navbar" style="padding-top: 1.5rem;padding-bottom: 1.25rem;" href="#quiz">Quiz</a></li>
                <li><a class="navbar" style="padding-top: 1.5rem;padding-bottom: 1.25rem;" href="#survey">Survey</a></li>
            </ul>
        </div>
        <!-- End of navbar -->
    </section>
        <!-- End of header section -->
        <section id="header">
            <div class="brand-header">
                <img src="assets/images/java-juice-full-white.png" alt="Java Juice" title="Java Juice" class="brand-header-img" />
            </div>
            <div class="brand-tag">
                Learning Java has never been easier.
            </div>
            <div class="signup">
                <div class="prompt">
                    Create your free account now
                </div>
                <!-- this is just set to NOT submit for the time being -->
                <form method="post" onsubmit="return false;">
                    <div class="input-row">
                        <input type="email" placeholder="Enter your email" />
                        <button>
                            Start learning now
                        </button>
                    </div>
                </form>
            </div>
        </section>

        <!-- places in our ripple svg on the page below the initial header -->
        <section class="transition-ripple"></section>

        <!-- begins our main content (features, etc.) -->
        <section id="main">
            <!-- the first thing we have are our "feature" cards which
                 discuss the benefits to using our system -->
            <div class="feature-cards">
                <div class="feature-cards-heading">
                        Features
                </div>
                <div class="card">
                    <div class="card-title">
                        <i class="fas fa-desktop card-icon"></i>
                        Simplicity
                    </div>
                    <div class="card-content">
                        Java was designed to be simple to learn, understand and
                        write.  Software can be written once and run on most
                        systems, making Java the choice candidate for many
                        applications. Java Juice makes the learning process 
                        intuitive and fun.
                    </div>
                </div>
                <div class="card">
                    <div class="card-title">
                        <i class="far fa-comments card-icon"></i>
                        Community
                    </div>
                    <div class="card-content">
                        Java has been around since the mid-1990s.  Throughout
                        its years of existence, Java has built up a large
                        community of people sharing their knowledge.  Don't know 
                        how to do something? There's a good chance someone else 
                        will.
                    </div>
                </div>
                <div class="card">
                    <div class="card-title">
                        <i class="far fa-money-bill-alt card-icon"></i>
                        Opportunity
                    </div>
                    <div class="card-content">
                        According to the 
                        <a href="https://www.tiobe.com/tiobe-index/" target="_blank">TIOBE Index</a>,
                        Java is the software industry's widest adopted language.
                        From companies like Netflix and Airbnb, to LinkedIn and
                        Lyft, Java can be found nearly everywhere.
                    </div>
                </div>
            </div>
        </section>
        <!-- end the main content of the landing page, begin the footer -->
        <section id="footer">
            <div class="text-right text-center-sm">Copyright &copy; 2019, Java Juice.</div>
        </section>

        <!-- loads the JS files last to optimize time to view -->
        <script defer src="https://use.fontawesome.com/releases/v5.6.3/js/all.js" 
            integrity="sha384-EIHISlAOj4zgYieurP0SdoiBYfGJKkgWedPHH4jCzpCXLmzVsw1ouK59MuUtP4a1" 
            crossorigin="anonymous"></script>
    </body>
</html>