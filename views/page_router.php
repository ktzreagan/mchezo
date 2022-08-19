<?php
session_start();
if(!isset($_SESSION["SESSION_ID"])){
    $_SESSION["SESSION_ID"] = md5(rand(120,80000000).rand(5000,783539393763).rand(90,5353544343233257272).rand(9000,535636653));
}
$page = "views/pages/home.php";
if (isset($_SERVER["REDIRECT_URL"])){
    $url= $_SERVER["REDIRECT_URL"];

    $page = "views/pages/home";
    switch($url){
        case("/mchezo/admin/tables"):{
            $page = "views/pages/tables";
            break;
        }
        case("/mchezo/admin/charts"):{
            $page = "views/pages/chartjs";
            break;
        }
        case("/mchezo/admin/forms"):{
            $page = "views/pages/forms";
            break;
        }
        case("/mchezo/admin/buttons"):{
            $page = "views/pages/buttons";
            break;
        }

        case("/mchezo/admin/action"):{
            $page = "actions/action";
            break;
        }


        case("/mchezo/admin/add_category"):{
            $page = "views/pages/add_category";
            break;
        }

        case("/mchezo/admin/factory"):{
            $page = "views/pages/factory";
            break;
        }

        case("/mchezo/admin/items"):{
            $page = "views/pages/items";
            break;
        }



        case("/mchezo/admin/login"):{
            $page = "views/pages/login";
            break;
        }

        case("/mchezo/admin/transactions"):{
            $page = "views/pages/transactions";
            break;
        }
    }
}else{
    $page = "views/pages/home";
}

if(!isset($_SESSION["user_info"])){
    $page =  $page = "views/pages/login";
}
?>
