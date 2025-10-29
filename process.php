<?php

include("db.php");

if(isset($_POST["create"])){
    $title= $_POST["title"];
    $author= $_POST["author"];
    $type= $_POST["type"];
    $description= $_POST["description"];

    $sql= "INSERT INTO books (title, author, type, description) VALUES ('$title','$author', '$type','$description')";

    $result= mysqli_query($conn, $sql);

    if($result){
        session_start();
        $_SESSION["create"]= "Book added successfully";
        // echo"Inserted Successfully";

        header("Location: index.php");
    }

    else{
       die("Something went wrong") ;
    }
}

if(isset($_POST["edit"])){
    $id= $_POST["id"];
    $title= $_POST["title"];
    $author= $_POST["author"];
    $type= $_POST["type"];
    $description= $_POST["description"];

    $sql= "UPDATE books SET title='$title', author='$author', type='$type', description='$description' WHERE id= $id ";

    $result= mysqli_query($conn, $sql);

    if($result){
        session_start();
        $_SESSION["update"]= "Book updated successfully";
        // echo "updated Successfully";
        header("Location: index.php");
    }

    else{
       die("Something went wrong") ;
    }
}


?>