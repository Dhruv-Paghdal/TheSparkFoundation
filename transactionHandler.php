<?php

    $SNAME=$_POST["sname"];
    $RNAME=$_POST["rname"];
    $AMOUNT=$_POST["amount"];

    $STATUS="Failed";
            
    $CON=mysqli_connect("localhost","root","","ibank");
    $OLDQUREY="SELECT `BALANCE` FROM `customer` WHERE `NAME`='$RNAME'";
    $RESULT=mysqli_query($CON,$OLDQUREY);
    if(mysqli_num_rows($RESULT)>0){
        while($DATA=mysqli_fetch_assoc($RESULT)){
            $BALANCE=$DATA['BALANCE'];
        }
    }
    $NEWBALANCE=$BALANCE+$AMOUNT;
    $UPDATEQUERY="UPDATE `customer` SET `BALANCE`='$NEWBALANCE' WHERE `NAME`='$RNAME'";
    $UPDATERESULT=mysqli_query($CON,$UPDATEQUERY);
    if($UPDATERESULT){
        $STATUS="Success";
    }
    $HISTORYQUERY="INSERT INTO `history`(`SENDER`, `RECIVER`,`AMOUNT`, `STATUS`) VALUES ('$SNAME','$RNAME','$AMOUNT','$STATUS')";
    mysqli_query($CON,$HISTORYQUERY);

    header("location: ./pages/transactionHistory.php");
?>

