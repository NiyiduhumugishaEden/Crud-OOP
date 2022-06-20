<?php
require_once('index.php');
if(isset($_GET['del'])){

    $userdelete=$_GET['del'];
    $deletedata=new Database();

    $sql=$deletedata->delete($userdelete);

    if($sql){
        echo "<script>alert('Record deleted successfully')</script>";
    }else{
        echo "<script>alert('Record not deleted')</script>";
    }
}

?>