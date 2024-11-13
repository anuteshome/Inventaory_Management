
<?php
include 'db.php';
   
    // $result="";
    //     while($rows=$result->fetch_assoc()){ 
    //         $id=$rows['itemNo'];
            
    if (isset($_POST['delete'])) {
        
        $ido=$_POST['id'];

        $sql="DELETE FROM main WHERE itemNo='$ido'";
    $result=$conn->query($sql);

if($result){
    header("location:read.php");
}

    }
        



// }
?>