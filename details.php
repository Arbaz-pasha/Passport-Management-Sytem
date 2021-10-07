<?php
    include('header.php');

    function finder($v1, $v2){
        // $mid=0; $nid=-5; $v11='go';
        
        require_once 'includes/dbh.inc.php';
        $userName = $_SESSION["useruid"];
        //way one:
        $query1=mysqli_query($connection, sprintf("SELECT MAX(%d) FROM %s",$v1,$v2));
        // echo $query1;
        //way two: this will only work with the string inside ""
        // $query1=mysqli_query($connection, "SELECT MAX({v1}) FROM {$v2}");
        $row=mysqli_fetch_array($query1);
            echo $row;
            echo $row["gender"];
       
    }
    finder('gender', 'application');
    ///

        //write same code and return row as $row1 $row2 $row3 etc..
    //


    // $sql = "SELECT * FROM signup WHERE usersUid=? ;";
    // // $sql = "SELECT * FROM signup WHERE usersUid=? ;";

    // $stmt = mysqli_stmt_init($connection);

    // if(!mysqli_stmt_prepare($stmt,$sql)){
    //     // header("location:../signup.php?error = stmtfailed");
    //     exit();
    // }
    // mysqli_stmt_bind_param($stmt,"s",$userName);

    // mysqli_stmt_execute($stmt);

    // $resultData = mysqli_stmt_get_result($stmt);
    
    // if($row1 = mysqli_fetch_assoc($resultData)){//returns true if there is data and at the same time initializes
    //     echo $row1["usersUid"];
    //     echo "<br>";
    //     echo $row1["usersId"];
    //     // echo $row["usersId"];
    //     echo "<br>";
    // }
    // else{
    //     $result = false;
    //     return $result;
    // }

    // mysqli_stmt_close($stmt);




    // function getData($tablename){

        // echo $tablename;
        // $tablename='application';
        // $sql = "SELECT * FROM  `{$tablename}` WHERE usersUid=? ;";
        // // $sql = "SELECT * FROM signup WHERE usersUid=? ;";

        // $stmt = mysqli_stmt_init($connection);

        // if(!mysqli_stmt_prepare($stmt,$sql)){
        //     // header("location:../signup.php?error = stmtfailed");
        //     exit();
        // }
        // mysqli_stmt_bind_param($stmt,"s",$userName);

        // mysqli_stmt_execute($stmt);

        // $resultData = mysqli_stmt_get_result($stmt);
        
        // if($row = mysqli_fetch_assoc($resultData)){//returns true if there is data and at the same time initializes
        //     // return $row;
        //     echo $row["gender"];
        // }
        // else{
        //     $result = false;
        //     return $result;
        // }

        // mysqli_stmt_close($stmt);

//     }


//     $actualdata = getData('application');
//    echo  $actualdata["gender"];




?>

