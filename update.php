
<?php
 include_once('index.php');
$userId=$_GET['userId'];
$onerecord=new Database();
$sql=$onerecord->readOne($userId);


while($row=mysqli_fetch_array($sql)){
    ?>
     <link rel="stylesheet" href="index.css">
     <h1>Update user</h1>
        <form action='' method='POST' >
           
    <input  class='text'type="text"  name="firstname" placeholder="firstName" value="<?php echo $row['firstname'] ?>" required/>
     
     <input   class='text' type="text"  name="lastname" placeholder="lastName" value="<?php echo $row['lastname'] ?>" required/>
    
     <input   class='text' type="text"  name="telephone" placeholder="telephone" value="<?php echo $row['telephone'] ?>" required/>
    
     <input  class='text' type="text"  name="Gender" value="<?php echo $row['gender'] ?>" placeholder="gender" required/>
    
     <input   class='text' type="text"  name="nationality" value="<?php echo $row['nationality'] ?>" placeholder="nationarity" required/>
    
     <input   class='text' type="text"  name="username" placeholder="username" value="<?php echo $row['username'] ?>" required/>
    
     <input   class='text'type="text"  name="email" placeholder="emial" value="<?php echo $row['email'] ?>" required/>
    
     <input   class='text'type="text"  name="password" placeholder="password" value="<?php echo $row['passoword'] ?>" required/>
    
    <?php
    }
    ?> 
    <button   class='text' name="update" type="Update" value="update">Update</button>
        </form>


<?php
 include_once('index.php');

 $updatedata=new Database();

 if(isset($_POST['update'])){


    $userId=$_GET['userId'];
    $firstname=$_POST['firstname'];
    $lastname=$_POST['lastname'];
    $telephone=$_POST['telephone'];
    $gender=$_POST['Gender'];
    $nationality=$_POST['nationality'];
    $username=$_POST['username'];
    $email=$_POST['email'];
    $password=$_POST['password'];

    $sql=$updatedata->update($userId,$firstname,$lastname,$telephone,$gender,$nationality,$username,$email,$password);

    if($sql){
        echo "<script>alert('Record  updated successfully')</script>";
    }else{
        echo "<script>alert('Record was not updated')</script>";
    }

 }
?>



