<?php
session_start();
define('DB_SERVER','localhost');
define('DB_USER','Rca250');
define('DB_PASS' ,'Edenabc');
define('DB_NAME', 'Crud');

class Database{
    function __construct(){
        $con=mysqli_connect(DB_SERVER,DB_USER,DB_PASS,DB_NAME);
        $this->dbh=$con;

        //checking the connection 
        if(mysqli_connect_error()){
            echo "Connection Failed".mysqli_connect_error();
        }
    }


    // Data insertion

    public function insert($firstname,$lastname,$telephone,$gender,$nationality,$username,$email,$password){
        $insertUser=mysqli_query($this->dbh,"insert into User(firstname,lastname,telephone,gender,nationality,username,email,passoword) values('$firstname','$lastname','$telephone','$nationality','$gender','$username','$email','$password')");
        return $insertUser;
    }
    //Data read 

    public function read(){
        $result=mysqli_query($this->dbh,"select * from User");
        return $result;
    }

    //Data one record read
    public function readOne($userId){
        $readUser=mysqli_query($this->dbh,"select * from User where userid=$userId");
        return $readUser;
    }

    //Data update
    public function update($userId,$firstname,$lastname,$telephone,$gender,$nationality,$username,$email,$password){
        $UpdateUser=mysqli_query($this->dbh,"update User set userId='$userId', firstname='$firstname',lastname='$lastname',telephone='$telephone',gender='$gender',nationality='$nationality',username='$username',email='$email',passoword='$password'");
        return $UpdateUser;
    }
    //Data deletion function

    public function delete($deleteid){
        $deleteUser=mysqli_query($this->dbh,"delete from User where userid=$deleteid");
        return $deleteUser;
    }

}



?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="index.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"/> 
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script> 
   <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script> 
   <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <title>Document</title>
</head>

<body>

    <table>
        <tr>
            <th>FirstName</th>
            <th>lastName</th>
            <th>telephone</th>
            <th>Gender</th>
            <th>Nationality</th>
            <th>Username</th>
            <th>Email</th>
            <th>password</th>
            <th>Edit</th>
            <th>Delete</th>
        </tr>
    </table>
</body>
</html>

<?php

$fetchdata=new Database();
$sql=$fetchdata->read();
$count=1;
while($row=mysqli_fetch_array($sql)){
?>
<tr>
    <td><?php echo  $count ;?></td>
    <!-- <td><?php  echo $row['userId'];?></td> -->
    <td><?php  echo $row['firstname'];?></td>
    <td><?php  echo $row['lastname'];?></td>
    <td><?php  echo $row['telephone'];?></td>
    <td><?php  echo $row['gender'];?></td>
    <td><?php  echo $row['nationality'];?></td>
    <td><?php  echo $row['username'];?></td>
    <td><?php  echo $row['email'];?></td>
    <td><?php  echo $row['passoword'];?></td>
    <td><a href="update.php?userId=<?php echo $row['userId'];?>"><button class="btn btn-primary btn-xs"><span class="glyphicon glyphicon-pencil"></span>Update</button></a></td>
    <td><a href="delete.php?del=<?php echo $row['userId'];?>"><button type="submit"  class="btn btn-danger ">Delete</button></a></td>
</tr>

<?php
$count++;
};
?>
