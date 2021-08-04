<?php

    $server="localhost";
    $username="root";
    $password="";
    $db="covinfo";

    $con=mysqli_connect($server, $username, $password, $db);

    if($con){
        ?>
        <script>
            alert("connection successful!!");
        </script>

        <?php
    }
    else{
        ?>
        <script>
            alert("connection failed!");
        </script>

        <?php
    }

?>