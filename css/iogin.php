<?php
     $username =$_POST['usernane'];
     $Email =$_POST['Email'];
     $Password =$_POST['password'];
     $Repeatpassword =$_POST['Repeat password'];


     $conn =new mysqli('localhost','root','','test');
     if($conn->connect_error){
          die('localhost','root','test');
     }else{
          $stmt=$conn->prepare("insert into registration(username, Email, password, repeatpassword) 
          values(?, ?, ?, ?, ?, ?)");
     $stmt->bind_param("ssss",  $username, $Email, $password, $Repeatpassword);
     $stmt->execute();
     echo "registration sucessfully";
     $stmt->close();
     $conn->close();    }
?>
