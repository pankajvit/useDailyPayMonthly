<?php
    include 'dbcon.php';
    if(isset($_POST['add'])){
        $cname=$_POST['name'];
        $address=$_POST['address'];
        $mobile=$_POST['mobile'];
        $cgroup=$_POST['cgroup'];
        $product=$_POST['product'];
        $productlist=implode(",",$product);
        $insertquery=" insert into customerdb(name, address, mobileno, customerGroup, customerProduct)value('$cname', '$address', '$mobile', '$cgroup', '$productlist') ";
        $res=mysqli_query($con,$insertquery);
        print_r($res);
        if($res){
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
    header('location:customers.php');
?>