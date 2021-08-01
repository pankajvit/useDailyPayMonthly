<?php
    $server= "localhost";
    $user = "root";
    $password = "";
    $db ="usedailypaymonthly";

    $con = mysqli_connect($server,$user,$password,$db);

    if($con) {
    ?>
        <script>
            alert("Connection Successful");
        </script>
    <?php
    } else {
    ?>
        <script>
            alert("Connection not successful");
        </script>
    <?php
    }
?>