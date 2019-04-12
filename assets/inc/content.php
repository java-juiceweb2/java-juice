<?php

   $path = './';
   require $path.'../../../../dbConnect.inc';

    // Getting the content from the db
    $sql = "SELECT content FROM java_juice_exContent WHERE exNumber LIKE '$pagenumber';";
    $res = mysqli_query($mysqli, $sql);

    // If the query went through
    if ($res) {
        while ($contentArray = mysqli_fetch_array($res, MYSQLI_ASSOC)) {
            // Getting all the content in the array and setting
            // them to vars that will be used in the content page
            $content  = $contentArray["content"];
        }
    }

    // Starting the HTML content
    include 'header.php';
?>    

<!-- begins our main content (features, etc.) -->
<?php echo $content; ?>
<!-- End main content section -->

<?php 

    include "footer.php";

?>    