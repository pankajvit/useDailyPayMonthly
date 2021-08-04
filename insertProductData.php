<?php
    include 'dbcon.php';
    if(isset($_POST['add'])){
        // print_r($_POST['add']);exit();
        $pname=$_POST['pname'];
        $price=$_POST['price'];
        $insertquery=" insert into productdb(productName,price)value('$pname', '$price') ";
       
        $res=mysqli_query($con,$insertquery);
        // print_r($res);
        if($res==true){
        ?>
            <script>
                alert("data inserted properly");
            </script>
        <?php
        }else{
        ?>
            <script>
                alert("data not inserted properly");
            </script>
        <?php
        }
    }
    header('location:products.php');
?>