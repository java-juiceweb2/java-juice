<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link type="text/css" rel="stylesheet" href="../assets/css/ex.css" />
    <link type="text/css" rel="stylesheet" href="../assets/css/quiz.css" />
    <link type="text/css" rel="stylesheet" href="../assets/css/forum.css" />
    <script type="text/javascript" src="../assets/js/responsive-menu.js"></script>
    <script type="text/javascript" src="../assets/js/problems.js"></script>
    <script type="text/javascript" src="../assets/js/validateQuiz.js"></script>
    <!-- Icon -->
    <link rel="icon" href="../assets/images/java-juice-icon-small.png">

    <!-- For the menubar -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title><?php echo $pagename ?></title>
</head>

<body>

    <body>
        <!-- this page doesn't have a true "navigation" bar as it is only a
             landing page; begin the header of the landing page -->
        <section id="header">
            <div class="navbar topnav" id="myTopnav">
                <ul>
                    <li>
                        <a class="active navbar" href="../index.php"><img src="../assets/images/java-juice-full-white.png" alt="Java Juice" title="Java Juice" class="brand-nav-img" /></a></li>
                    <li><a class="navbar" style="padding-top: 1.5rem;padding-bottom: 1.25rem;" href="resources.php">Resources</a></li>
                    <li><a class="navbar" style="padding-top: 1.5rem;padding-bottom: 1.25rem;" href="forum.php">Forum</a></li>
                    <li><a class="navbar" style="padding-top: 1.5rem;padding-bottom: 1.25rem;" href="login.php">Quiz</a></li>
                    <li><a class="navbar" style="padding-top: 1.5rem;padding-bottom: 1.25rem;" href="survey.php">Survey</a></li>
                    </li>
                    <div class="dropdown">
                        <li><a class="navbar dropMenu" style="padding-top: 1.5rem;padding-bottom: 1.25rem;" href="#lessons">Lessons</a>
                        </li>
                        <div class="dropdown-content">
                            <a href="./hello-ex.php">Hello World</a>
                            <a href="./types-ex.php">Variables</a>
                            <a href="./logic-ex.php">Logic</a>
                            <a href="./loops-ex.php">Loops</a>
                            <a href="./methods-ex.php">Methods</a>
                        </div>
                    </div>
                </ul>
            </div>
            <!-- End of navbar -->
        </section>
        <!-- End of header section -->
