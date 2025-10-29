<?php
if(isset($_GET["id"])){
    $id = $_GET["id"];
    include("db.php");

    $sql= "DELETE FROM books WHERE id= $id";

    $result = mysqli_query($conn, $sql);
    
    if($result = mysqli_query($conn, $sql)){
        session_start();
        $_SESSION["delete"]= "Book deleted successfully";
        // echo "updated Successfully";
        header("Location: index.php");
        // echo "Deleted Successfully!";
    }
    else{
       die("Something went wrong") ;
    }
}
?>