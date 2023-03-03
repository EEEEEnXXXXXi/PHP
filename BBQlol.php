<?php
    $name=$_POST["name"];
    $id=$_POST["id"];
    $email=$_POST["email"];
    
if(isset($_POST["dept"])){
    $dept=$_POST["dept"];
    if($dept=="會"){
        echo"你".$dept."參加系烤!<br/>";
        if(isset($_POST["name"])){
            echo"你的姓名是: ".$name."<br/>";
            if(isset($_POST["id"])){
                echo"你的學號是: ".$id."<br/>";
                if(isset($_POST["email"])){
                    echo"你的email是: ".$email."<br/>";
                }else{
                    echo"你的email是？";
                }
            }else{
                echo"你的學號是？";
            }
        }else{
            echo"你是誰？";
        }
    }else{
    echo"okay bye~";
    }
}else{
    echo"那你是會不會來系烤勒？回去把它填完！";
}

?>