<!-- 
FILE: survey.php
AUTHOR: Alyssa Oster
VERSION: 04/16/2019 

Uses database called java_juice_survey
-->
<?php
	require '../../../dbConnect.inc';
		if ($mysqli) {
			  if (isset($_POST['name']) && isset($_POST['numTold']) && isset($_POST['vdate']) && isset($_POST['flesson']) && isset($_POST['comment'])) {
				  if( $_POST['name']!='' && $_POST['comment']!='' ){
					/*
						we are using client entered data - therefore we HAVE TO USE a prepared statement
			            
			            https://www.w3schools.com/php/php_mysql_prepared_statements.asp
			            
						1)prepare my query
						2)bind
						3)execute
						4)close
					*/

					$stmt=$mysqli->prepare("INSERT INTO java_juice_survey (name, numberTold, dateVisit, favoriteLesson, rating, comments) VALUES (?, ?, ?, ?, ?, ?)");
					$stmt->bind_param("sissis", $_POST['name'], $_POST['numTold'], $_POST['vdate'], $_POST['flesson'], $_POST['rating'], $_POST['comment']);
					$stmt->execute();
					$stmt->close();

				  }//end of if to make sure data is sent using $_POST
		      }//end of isset

      //Get the form values:
      	//Name
      	//Number of People told
      	//Visit Date
      	//Favorite Lesson
      	//Rating
      	//Additional Comments

			function test_input($data) {
			  $data = trim($data);
			  $data = stripslashes($data);
			  $data = htmlspecialchars($data);
			  return $data;
			}
			if(isset($_POST['submit'])){

				$visitor = $numTold = $vdate = $exer = $rating = $comment = null;
				$visitor  = test_input($_POST['name']);
				$numTold = test_input($_POST['numTold']);
				$vdate    = test_input($_POST['vdate']);
				$exer = test_input($_POST['flesson']);
				$rating = test_input($_POST['rating']);
				$comment = test_input($_POST['comment']);


			 	$destination_email = "ado7383@g.rit.edu";

			// After all your testing is done, THEN add my email 
			//    address below, with your own email address
			// $destination_email = 
			//	      "RITISTprofessor@gmail.com, axn9999@rit.edu";

			// change the $email_subject to reflect your favorite town
				$email_subject = "Java Juice - visitor";
			        $email_body = "Visitor name -> $visitor\n";
			        $email_body .= "Number of people told about this site -> $numTold\n";
			        $email_body .= "Date Visited -> $vdate\n";
			        $email_body .= "Favorite Exercise -> $exer\n";
			        $email_body .= "Rating -> $rating\n";
			        $email_body .= "Comments -> $comment";

				mail($destination_email, $email_subject, $email_body);	
				header("Location: thank-you.php");
				exit;
			}
	}
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link type="text/css" rel="stylesheet" href="assets/css/ex.css" />
    <script type="text/javascript" src="assets/js/responsive-menu.js"></script>
    <script type="text/javascript" src="assets/js/problems.js"></script>

    <!-- For the menubar -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Survey</title>


    <!-- Style for this page -->

    <style>
    	#error{
    		color: red;
    		background-color: pink;
    		border: 3px solid red;
    		width: 100%;
    		display: none;
    	}
    </style>

    <!-- Validate Form -->
    <script>
    	function validateForm() {
    		var name = document.forms["form"]["name"].value;
    		var numTold = document.forms["form"]["numTold"].value;
    		var vdate = document.forms["form"]["vdate"].value;
    		var flesson = document.forms["form"]["flesson"].value;
    		var rating = document.forms["form"]["rating"].value;
    		var comment = document.forms["form"]["comment"].value;
    		if (( name == "") || (numTold == "") || (vdate == "") ||
    			( flesson == "") || (rating == "") || (comment == "")){
    			document.getElementById("error").style="display: block";
    			return false;
    		}
    	}



		function checkDate(){
			var dateValid = true;
			var vdate = document.getElementById('visitDate').value;
			var today = new Date();
			console.log("Users date = " + vdate);
			var dd = today.getDate();
			var mm = today.getMonth() + 1;
			var yyyy = today.getFullYear();

			if(dd < 10){
				dd = '0' + dd;
			}
			if(mm < 10){
				mm = '0' + mm;
			}

			var td = "" + today.getFullYear() + "-" + mm + "-" + dd;
			console.log("System date = " + td);


			//Don't allow submission if the date is illegal 
			if(vdate >= td){
				document.getElementById("button").disabled = true;
				document.getElementById("error").style = "display: block;"
			}
			else{
				document.getElementById("button").disabled = false;
				document.getElementById("error").style = "display: none;"

			}
		}
    </script>

</head>

<body>

    <body>
        <section id="header">
            <div class="navbar topnav" id="myTopnav">
                <ul>
                    <li>
                       <!-- <a class="active navbar" href="../index.php"><img src="../assets/images/java-juice-full-white.png" alt="Java Juice" title="Java Juice" class="brand-nav-img" /></a>-->
                    <li><a class="navbar" style="padding-top: 1.5rem;padding-bottom: 1.25rem;" href="#lesources">Resources</a></li>
                    <li><a class="navbar" style="padding-top: 1.5rem;padding-bottom: 1.25rem;" href="#forum">Forum</a></li>
                    <li><a class="navbar" style="padding-top: 1.5rem;padding-bottom: 1.25rem;" href="#quiz">Quiz</a></li>
                    <li><a class="navbar" style="padding-top: 1.5rem;padding-bottom: 1.25rem;" href="#survey">Survey</a></li>
                    </li>
                    <div class="dropdown">
                        <li><a class="navbar dropMenu" style="padding-top: 1.5rem;padding-bottom: 1.25rem;" href="#lessons">Lessons</a>
                        </li>
                        <div class="dropdown-content">
                            <a href="../exercises/hello-ex.php">Hello World</a>
                            <a href="../exercises/types-ex.php">Variables</a>
                            <a href="../exercises/logic-ex.php">Logic</a>
                            <a href="../exercises/loops-ex.php">Loops</a>
                            <a href="../exercises/methods-ex.php">Methods</a>
                        </div> 
                    </div>
                </ul>
            </div>
            <!-- End of navbar -->
        </section>
        <!-- End of header section -->    




<!-- begins our main content (features, etc.) -->
  <!-- begins our main content (features, etc.) -->
          <section id="main">
              <!-- Contains the main content for the page -->
              <div class="topic-1">


	<!--Start top -->
	<div id="top">
		<h3>Let us know how we did!</h3>
		<p id="error"> * Please make sure all fields are filled out and an accurate date is entered.</p>
	</div>
	<!--End header-->

	<!--<form action="survey.php" method="GET">-->
	<form name = "form" action = "<?php echo $_SERVER['PHP_SELF']; ?>" method = "POST" onSubmit="return validateForm();">
		Name: <input type="text" id = "name" name="name" width="40" placeholder="Enter your name">
		<p>&nbsp;</p>

		How many people have you told about this site?
		<input type="number" name="numTold" id="numTold" min="0"><br>

		When did you visit?
		<input type = "date" id="visitDate" name="vdate" onchange="checkDate()">

		<fieldset>
			<legend>What was your favorite lesson?</legend>
			<label><input type ="radio" name="flesson" value="helloWorld"> Hello World</label><br>
			<label><input type ="radio" name="flesson" value="variables"> Variables</label><br>
			<label><input type ="radio" name="flesson" value="logic"> Logic</label><br>
			<label><input type ="radio" name="flesson" value="loops"> Loops</label><br>
			<label><input type ="radio" name="flesson" value="methods"> Methods</label><br>
		</fieldset>
		Rate your overall opinion of the site:</br>

		0 <input type="range" min="0" max="10" name="rating"> 10<br>

		Additional Comments: <br /><textarea id = "comment" name="comment" cols ="80" rows="10"></textarea>

		<input type="submit" name="submit" id="button" value="Submit"/>

	</form>
	<!-- End form -->


<!-- end the main content of the landing page, begin the footer -->
<section id="footer">
    <div class="text-right text-center-sm">Copyright &copy; 2019, Java Juice.</div>
</section>

<!-- loads the JS files last to optimize time to view -->
<script defer src="https://use.fontawesome.com/releases/v5.6.3/js/all.js" integrity="sha384-EIHISlAOj4zgYieurP0SdoiBYfGJKkgWedPHH4jCzpCXLmzVsw1ouK59MuUtP4a1" crossorigin="anonymous">
</script>
</body>
</body>

</html>    