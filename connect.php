<?php 
    $username = $_POST['username']; 
    $password = $_POST['password'];
    $email=$_POST['email']; 
    $phone=$_POST['phone']; 
    $price=$_POST['price']; 
    $CardNumber=$_POST['CardNumber']; 
    $Days=$_POST['Days']; 
    $Month=$_POST['Month']; 
    $Year=$_POST['Year']; 
    
 
 
    $conn = new mysqli('localhost','root','','lab_final'); 


    if ($conn->connect_error) { 
        die('Connection failed: '.$conn->connect_error); 
    } 
    else{ 
        $stmt = $conn->prepare("insert into exam(username, password, email ,phone, CardNumber,Days,Month,Year,price) values(?, ? ,?, ?,?,?,?,?,?)"); 
        $stmt->bind_param("ssssiiiii",$username, $password ,$email , $phone,  $CardNumber,$Days,$Month,$Year,$price); 
        $stmt->execute(); 
        echo "Login Successfully"; 
        $stmt->close(); 
        $conn->close(); 
 
    }

  
?>