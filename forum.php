<!-- 
FILE: forum.php
AUTHOR: Alyssa Oster
VERSION: 04/16/2019 



File uses database called 'java_juice_form' with sections name, comment, and id
-->

<?php

	require '../../../dbConnect.inc';
if ($mysqli) {
	  if (isset($_GET['name']) && isset($_GET['comment'])) {
	  if( $_GET['name']!='' && $_GET['comment']!='' ){
		/*
			we are using client entered data - therefore we HAVE TO USE a prepared statement
            
            https://www.w3schools.com/php/php_mysql_prepared_statements.asp
            
			1)prepare my query
			2)bind
			3)execute
			4)close
		*/

		$stmt=$mysqli->prepare("INSERT INTO java_juice_form (name, comment) VALUES (?, ?)");
		$stmt->bind_param("ss", $_GET['name'], $_GET['comment']);
		$stmt->execute();
		$stmt->close();

	  }//end of if to make sure data is sent using $_GET
      }//end of isset
	  //get contents of table and send back...
      $sql = 'SELECT name, comment FROM java_juice_form';
	  $res=$mysqli->query($sql);
	  if($res){
		while($rowHolder = mysqli_fetch_array($res,MYSQLI_ASSOC)){
			$records[] = $rowHolder;
		}
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
    <title>Forum</title>



    <style>


table{
	border-collapse: collapse;
	width: 100%;
	margin-bottom: 1em;
}
table td, th{
	border: 1px solid black;
	padding: 10px;
}
table th{
	padding-top: 12px:
	padding-bottom: 12px;
	text-align: center;
	background-color: #333;
	color: white;
}

table tr:nth-child(even){
	background-color: #f2f2f2;
}


    </style>
</head>

<body>

    <body>
        <section id="header">
            <div class="navbar topnav" id="myTopnav">
                <ul>
                    <li>
                        <a class="active navbar" href="../index.php"><img src="../assets/images/java-juice-full-white.png" alt="Java Juice" title="Java Juice" class="brand-nav-img" /></a>
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


	<!--Start header -->
	<div id="header">
		<h3>Have any comments? Leave them below!</h3>
	</div>
	<!--End header-->

	<!--<form action="index.php" method="GET">-->
	<form action = "<?php echo $_SERVER['PHP_SELF']; ?>" method = "GET">
		Name: <input type="text" id = "name" name="name" width="40" placeholder="Enter your name">
		<p>&nbsp;</p>
		Comment: <br /><textarea id = "comment" name="comment" cols ="80" rows="10"></textarea>
		<p><input type="submit" value = "Add to the List"/></p>

	</form>
	<!-- End form -->


	<!--Start past comments div-->
	<div id="pastComments">
		<br />
		<!-- Print out all comments -->
		<?php
		if(isset($records)){
			echo '<table><tr><th>Name</th><th>Comment</th></tr>';
			foreach($records as $commentLine){
				echo '<tr> <td>'.$commentLine['name'].'</td>';
				echo '<td>'.$commentLine['comment'].'</td></tr>';
			}
			echo '</table>';
		}
		else {
			echo '<h3>No comments to display</h3>';
		}
		?>
	</div>
	<!--End past comments div-->

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