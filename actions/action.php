<?php
session_start();
if(isset($_GET["__AUTH_ID__"])){
if($_GET["__AUTH_ID__"]==$_SESSION["SESSION_ID"]){
    require("../../db/database.php");
    require("../../admin/security/crypt.php");

    if(isset($_REQUEST["save__item"])){

        $item_name =  htmlspecialchars(htmlentities($_REQUEST['item_name']));
        $item_category =htmlspecialchars(htmlentities($_REQUEST['item_category']));
        $item_price =htmlspecialchars(htmlentities($_REQUEST['item_price']));
        $item_desc =htmlspecialchars(htmlentities($_REQUEST['item_desc']));
        
        $image_names = "";

        if(isset($_FILES["item_images"])){

            foreach($_FILES as $file){
                $image_name = rand(1,10000000).rand(3499,789998388838).$file['name'];
                $image_names.=$image_name.",";
                move_uploaded_file($file['tmp_name'],"../../images/".$image_name);

            }

        }

        $item = new DB("item");

        $item->insertArray([
            "name" =>$item_name,
            'category_id'=>$item_category,
            'description'=>$item_desc,
            'cost'=>$item_price,
            'quantity_id'=>$item_category,
            'images'=>$image_names,
        ]);


        $_SESSION['success'] = "Game has been Added Successfully!";

        header("location:../forms");

    
    }

    if(isset($_REQUEST["login"])){

        print_r($_REQUEST);

        $email = htmlspecialchars($_REQUEST['email']);
        $pass = encrypt(htmlspecialchars($_REQUEST['password']));

        $user_info = DB::select("SELECT * from users where users.email='$email' and users.password='$pass' limit 1 ");

        if($user_info!=null){
            if(count($user_info)>0){
                $_SESSION["user_info"] = $user_info[0];
                header("location:../home");
                $_SESSION["info"] = "Hello, ".$user_info[0]['full_name']." You have logged in successfully!!";
            }else{
                $_SESSION["error"] = "Login failed, Please provide the right credentials!";
                header("location:../login");
            }

        }else{
            $_SESSION["error"] = "Login failed, Please provide the right credentials!";
            header("location:../login");
       
        }

    }
}else{
    print_r("invalid request");
}

}

print_r($_REQUEST);

if(isset($_REQUEST["logout"])){
    session_unset();
    session_destroy();
    unset($_SESSION["user_info"]);
    header("location:../login");

}
