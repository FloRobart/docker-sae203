<?php
    $dbuser = 'review_site';
    $dbpass = 'JxSLRkdutW';
    $conn = new mysqli("localhost", $dbuser, $dbpass, "forum");

    if(! $conn ) {
        die('Could not connect: ');
    }
    
    echo 'Connected successfully';
    mysqli_close($conn);
?>