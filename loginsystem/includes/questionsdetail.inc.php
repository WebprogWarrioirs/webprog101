<?php
include 'dbh.inc.php';

//$idcomment = mysqli_real_escape_string($conn, $_GET['id']);
$sql = "SELECT * FROM posts WHERE posts_id=".$_GET['id'];
$result = mysqli_query($conn, $sql);
$resultCheck = mysqli_num_rows($result);

if ($resultCheck > 0) {
    // output data of each row


    while($row = mysqli_fetch_assoc($result)) {





        echo' 
              

               <h3>'.$row["posts_category"].'</h3>
               <h4>'.$row['posts_title'].'</h4>
               <hr>

               <p>'.$row['posts_content'].'</p>
               <h6>Asked by: @'.$row['posts_username'].'</h6>';

    }

}
