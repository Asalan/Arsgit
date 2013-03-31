<!DOCTYPE html>
<?php
session_start();
include("controller.php")
?>


<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

        <title>Admin Pannel</title>
        <link href="css/loginuser.css" type="text/css" rel="stylesheet">

        <style type="text/css">
            <!--
            .style1 {color: #000000}
            -->
        </style>
    </head>
    <body>


        <div id="container">
            <?php
            if (isset($_SESSION['username'])) {
                $myuser = $_SESSION['username'];
                ?>
                <div id="header11">
                    <div id="h1Text"><h3>Parent Feedback</h3></div>
                    <div id="h1button"> <a href="AdminPannel.php?page=logout" class="style1">Logout</a></div>
                    <div id="h1LoginMode"><h3 ><?php echo $_SESSION['username']; ?></h3></div>


                </div>
                <div id="body">body7
                    <div id="box">

                        <div id="boxheader">
                            header

                        </div>
                        <div id="boxmain">
                            <?php
                            // put your code here
                            include($views);
                            ?>
                        </div>
                    </div>


                </div>
                <div id="footer"> footer</div>
                <?php
            } else {
                print ("Please signin first");
            }
            ?>
        </div>

    </body>
</html>
