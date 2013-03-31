<?php
session_start();
include 'controle/func.php';
?>
<!DOCTYPE html>

<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

        <title>"Parent Feedback" </title>
        <link href="css/Login.css" type="text/css" rel="stylesheet">

    </head>
    <body>
        <div id="container">
            <div id="Header1"></div>


            <div id="Header2">
                <div id="H2Text">
                    <h1>Parent Feedback </h1> 
                </div>

                <div id="H2Inputsec">


                    <form method="POST" action="index.php">
                        <table id="inptable">
                            <tr>
                                <td>Email id</td>
                                <td>Enter Password</td>
                                <td>&nbsp;</td>
                            </tr>                        

                            <tr>
                                <td>
                                    <input type="text" id="adminemail" name="adminemail" required="1" title="adminemail"> </input>                                
                                </td>
                                <td>
                                    <input type="password" id="password" name="password" required="1" title="password"> </input>
                                </td>
                                <td> <input type="submit" id="submit" name="submit" value="login" ></input> </td>

                            </tr>
                            <tr >
                                <td> <div id="LoginInputMsg1">&nbsp; </div>  </td>

                                <td> <div id="LoginInputMsg2">&nbsp; </div> </td>                                      

                                <td> </td>
                                <td > &nbsp;</td> 
                            </tr>
                        </table>
                    </form>
                    <?php
                    if (isset($_POST['submit'])) {
                        $AdminEmail = $_POST['adminemail'];
                        $AdminPassword = $_POST['password'];

                        if (chk($AdminEmail, $AdminPassword)) {
                            $_SESSION['username'] = getUserName($AdminEmail);
                            $_SESSION['password'] = $AdminPassword;
                            $_SESSION['emailid'] = $AdminEmail;
                            //echo $_SESSION['username'];
                          // $newURL = "http://localhost:8083/ParentFeedBack/AdminPannel.php";
                            header("location:http://localhost:8083/ParentFeedBack/AdminPannel.php" );
                           
                          
                            exit;
                        }
                    }
                    ?>



                </div><!--input source div end here -->



            </div><!-- Header 2 div end here                   -->

            <div id="body">  hi    </div>


            <div id="footer">foot</div>


        </div> <!--  container div end here                    -->

    </body>
