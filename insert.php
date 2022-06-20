<?php
require_once('index.php');

$insertData=new Database();


if(isset($_POST['submit'])){
    // $userId=$_POST['userId'];
    $firstname=$_POST['firstname'];
    $lastname=$_POST['lastname'];
    $telephone=$_POST['telephone'];
    $gender=$_POST['Gender'];
    $nationality=$_POST['nationality'];
    $username=$_POST['username'];
    $email=$_POST['email'];
    $password=$_POST['password'];


    $sql=$insertData->insert($firstname,$lastname,$telephone,$gender,$nationality,$username,$email,$password);

    if($sql){
        echo "<script>alert('Record inserted successfully')</script>";
    }else{
        echo "<script>alert('Record was not entered')</script>";
    }
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crud</title>
    <link rel="stylesheet" href="index.css">
</head>
<body>
     <h1>Create user</h1>
    <form action='' method='POST' >
       
       
    <input  class='text'type="text"  name="firstname" placeholder="firstName" value="" required/>
 
 <input   class='text' type="text"  name="lastname" placeholder="lastName" value="" required/>

 <input   class='text' type="text"  name="telephone" placeholder="telephone" value="" required/>

 <input  class='text' type="text"  name="Gender" value="" placeholder="gender" required/>

 <input   class='text' type="text"  name="nationality" value="" placeholder="nationarity" required/>

 <input   class='text' type="text"  name="username" placeholder="username" value="" required/>

 <input   class='text'type="text"  name="email" placeholder="emial" value="" required/>

 <input   class='text'type="text"  name="password" placeholder="password" value="" required/>

<button   class='button' name="submit"  value="submit">Submit</button>

    </form>
</body>
</html>