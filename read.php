<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"/> 
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script> 
   <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script> 
   <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <title>Document</title>
</head>
<body>
    <table>
        <tr>
            <td>FirstName</td>
            <td>lastName</td>
            <td>telephone</td>
            <td>Gender</td>
            <td>Nationality</td>
            <td>Username</td>
            <td>Email</td>
            <td>password</td>
            <td>Edit</td>
            <td>Delete</td>
        </tr>
    </table>
</body>
</html>

<?php
require_once('index.php');

$fetchdata=new Database();
$sql=$fetchdata->read();
$count=1;
while($row=mysqli_fetch_array($sql)){
?>
<tr>
    <td><?php echo $count?></td>
    <td><?php  echo $row['firstname'];?></td>
    <td><?php  echo $row['lastname'];?></td>
    <td><?php  echo $row['telephone'];?></td>
    <td><?php  echo $row['gender'];?></td>
    <td><?php  echo $row['nationality'];?></td>
    <td><?php  echo $row['username'];?></td>
    <td><?php  echo $row['email'];?></td>
    <td><?php  echo $row['passoword'];?></td>
    <td><a href="update.php?id=<?php echo $row['userid'];?>"><button type="submit"  class="btn btn-primary ">update</button></a></td>
    <td><a href="delete.php?del=<?php echo $row['deleteid'];?>"><button type="submit"  class="btn btn-danger ">Delete</button></a></td>
</tr>

<?php
$count++;
};
?>