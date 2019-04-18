<!-- 
FILE: forum.php
AUTHOR: Alyssa Oster
VERSION: 04/16/2019 
File uses database called 'java_juice_form' with sections name, comment, and id
-->

<?php
	$filename = "quiz.php";
	$pagename = "Quiz";
	
	require '../../../../dbConnect.inc';
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

	include "../assets/inc/header.php";

?>

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
	</section>

<?php

	include "../assets/inc/footer.php";

?>	