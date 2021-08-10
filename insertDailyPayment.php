<?php
include 'dbcon.php';
$custid = $_GET['id'];
?>
<?php
// print_r($_POST);
if (isset($_POST['save'])) {
    $Date = date('d-m-y');
    $totalAmt = $_POST['totalAmt'];
    // print_r($_POST['totalAmt']);
    $payableAmt = $_POST['payableAmt'];
    $insertquery = " insert into dailytaskdb(date, customerid, totalAmt, paidAmt)values('$Date', '$custid', '$totalAmt', '$payableAmt') ";
    // print_r($insertquery);
    $res = mysqli_query($con, $insertquery);
    if ($res) {
        ?>
        <script>
            alert("data inserted properly");
        </script>
    <?php
    } else {
    ?>
        <script>
            alert("data not inserted properly");
        </script>
    <?php
    }
    $custid_search = "select * from custdueamt where custid=$custid";
    $custidSearhQuery = mysqli_query($con, $custid_search);
    $custSearch = mysqli_num_rows($custidSearhQuery);
    if ($custSearch) {
        $selectUser = "select * from custdueamt where custid=$custid";
        $resultUser = mysqli_query($con, $selectUser);
        $resCust = mysqli_fetch_array($resultUser);
        $dueAmt = $resCust['dueAmt'];
        if($totalAmt == )
        if($payableAmt == NULL) {
            $dueAmt=$dueAmt + $totalAmt;
            $updateDueAmtQuery = "update custdueamt set dueAmt='$dueAmt' where custid='$custid'";
            $res = mysqli_query($con,$updateDueAmtQuery);          
            if ($res) {
            ?>
                <script>
                    alert("data updated properly");
                </script>
            <?php
            } else {
            ?>
                <script>
                    alert("data not updated properly");
                </script>
            <?php
            }
        } else if($payableAmt == $totalAmt) {

        }
    } else {
        if ($payableAmt == NULL) {
            $insertDueAmountQuery = "INSERT INTO custdueamt(custid, dueAmt) VALUES ('$custid', '$totalAmt')";
            $insertDueAmountQueryResult = mysqli_query($con, $insertDueAmountQuery);
            if ($insertDueAmountQueryResult) {
                ?>
                <script>
                    alert("data inserted properly");
                </script>
            <?php
            } else {
            ?>
                <script>
                    alert("data not inserted properly");
                </script>
            <?php
            }
        } else if($payableAmt < $totalAmt) {
            $DuesAmount = (int)$totalAmt - (int)$payableAmt;
            $insertDueAmountQuery = "INSERT INTO custdueamt(custid, dueAmt) VALUES ('$custid', '$DuesAmount')";
            $insertDueAmountQueryResult = mysqli_query($con, $insertDueAmountQuery);
            if ($insertDueAmountQueryResult) {
            ?>
                <script>
                    alert("data inserted properly");
                </script>
            <?php
            } else {
            ?>
                <script>
                    alert("data not inserted properly");
                </script>
            <?php
            }
        } else if ($payableAmt > $totalAmt) {
            $AdvAmount = (int)$totalAmt - (int)$payableAmt;
            $insertDueAmountQuery = "INSERT INTO custdueamt(custid, dueAmt) VALUES ('$custid', '$AdvAmount')";
            $insertDueAmountQueryResult = mysqli_query($con, $insertDueAmountQuery);
            if ($insertDueAmountQueryResult) {
            ?>
                <script>
                    alert("data inserted properly");
                </script>
            <?php
            } else {
            ?>
                <script>
                    alert("data not inserted properly");
                </script>
            <?php
            }
        } else if ($payableAmt == $totalAmt) {
            $insertDueAmountQuery = "INSERT INTO custdueamt(custid, dueAmt) VALUES ('$custid', '0')";
            $insertDueAmountQueryResult = mysqli_query($con, $insertDueAmountQuery);
            if ($insertDueAmountQueryResult) {
            ?>
                <script>
                    alert("data inserted properly");
                </script>
            <?php
            } else {
            ?>
                <script>
                    alert("data not inserted properly");
                </script>
            <?php
            }
        }
    }
}
header('location: index.php');
?>