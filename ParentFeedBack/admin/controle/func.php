<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */


function chk($AdminEmail,$AdminPassword ) {//to do is to implement variable passing
    $adminemail = $AdminEmail;
    $adminpassword = $AdminPassword ;
    require 'saman.php';
    $query = "SELECT adminname,adminemail,adminpassword FROM admin WHERE adminemail = " . $adminemail;
    $sql = mysql_query("SELECT adminname,adminemail,adminpassword FROM admin WHERE adminemail = '$adminemail'",$con) or die(mysql_error());
    $num = mysql_num_rows($sql);
    if ($num == 0) {  // if user not found
        ?>
        <script type="text/javascript">
            document.getElementById("LoginInputMsg1").innerHTML="Email id is incorrect";
        </script>

        <?php

    } else { //if found
        $row = mysql_fetch_assoc($sql);
        $mypass =$row['adminpassword'];
        $myname = $row['adminname'];
        if ($adminpassword != $mypass) {
        ?>
        <script type="text/javascript">
            document.getElementById("LoginInputMsg2").innerHTML="password is incorrect";
        </script>

        <?php
        return 0;
        } else{
            return 1;
                        
        }
    }
}
function getUserName($adminemail){
    require 'saman.php';
    $sql = mysql_query("SELECT * FROM admin WHERE adminemail = '$adminemail'",$con) or die(mysql_error());
    $num = mysql_num_rows($sql);
    if($num==1){
        $row = mysql_fetch_assoc($sql);
        $myname = $row['adminname'];
        return $myname;
    }

    
    
}
?>
