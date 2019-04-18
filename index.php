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

        <!-- Icon -->
        <link rel="icon" href="assets/images/java-juice-icon-small.png">

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
                <li><a class="navbar" style="padding-top: 1.5rem;padding-bottom: 1.25rem;" href="#lesources">Resources</a></li>
                <li><a class="navbar" style="padding-top: 1.5rem;padding-bottom: 1.25rem;" href="exercises/forum.php">Forum</a></li>
                <li><a class="navbar" style="padding-top: 1.5rem;padding-bottom: 1.25rem;" href="exercises/login.php">Quiz</a></li>
                <li><a class="navbar" style="padding-top: 1.5rem;padding-bottom: 1.25rem;" href="#survey">Survey</a></li>
                <div class="dropdown">
                    <li><a class="navbar dropMenu" style="padding-top: 1.5rem;padding-bottom: 1.25rem;" href="#lessons">Lessons</a>
                    </li>
                    <div class="dropdown-content">
                        <a href="exercises/hello-ex.php">Hello World</a>
                        <a href="exercises/types-ex.php">Variables</a>
                        <a href="exercises/logic-ex.php">Logic</a>
                        <a href="exercises/loops-ex.php">Loops</a>
                        <a href="exercises/methods-ex.php">Methods</a>
                    </div>
                </div>
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

        <section id="lesson-cards">
            <div class="feature-cards">
                <div class="feature-cards-heading">
                        Lessons
                </div>
                <div class="card card-hover" onclick="location.href='exercises/hello-ex.php';" style="width: 45%;">
                    <div class="card-title">
                        Hello World
                    </div>
                    <div class="card-content">
                        An introduction to Java and Object Oriented Programming (OOP). This lesson will teach the user how to write their first Java program, discuss classes and methods. As well as multiple ways to compile and run your Java program.
                    </div>
                </div>
                <div class="card card-hover" onclick="location.href='exercises/types-ex.php';" style="width: 45%;">
                    <div class="card-title">
                        Variables
                    </div>
                    <div class="card-content">
                        Discusses how to define variables, set and change them. Along with explanations of different data type, Primitives and Objects in Java.
                    </div>
                </div>
                <div class="card card-hover" onclick="location.href='exercises/logic-ex.php';" style="width: 45%;">
                    <div class="card-title">
                        Logic
                    </div>
                    <div class="card-content">
                        Basic logic in Java with topics including if and else blocks, comparison operators, truth evaluation and combining conditions together.
                    </div>
                </div>
                <div class="card card-hover" onclick="location.href='exercises/loops-ex.php';" style="width: 45%;">
                    <div class="card-title">
                        Loops
                    </div>
                    <div class="card-content">
                        When you need to repeat a block of code you can loop over it! In this section for, while and do while loops are explained.
                    </div>
                </div>
                <div class="card card-hover" onclick="location.href='exercises/methods-ex.php';" style="width: 45%; display: block; margin: 0 auto; padding: 2rem;">
                    <div class="card-title">
                        Methods
                    </div>
                    <div class="card-content">
                        Methods (also known as functions) are a core to Object Oriented Programming as they allow you to execute a block of code when you call the method, allowing for better functionality and less repeat code.
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
