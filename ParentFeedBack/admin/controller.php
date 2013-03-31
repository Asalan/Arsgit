<?php


if(!isset ($_REQUEST["page"])){
    $page="main";
}
else{
$page = $_REQUEST["page"];
}
if(!isset ($_REQUEST["action"])){
    $pag="main";
}
else{
$pag = $_REQUEST["action"];
}

$views = "views/main.php";
//$message = "";
//$messageType = "";

if (!empty($page))
    $views = "views/" . $page . ".php";


?>
