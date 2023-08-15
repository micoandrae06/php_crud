<?php
include ("connect.php");

//you can get it in the name ="" that you declare 
//Create Data
if (isset($_POST["create"])){

//name of the name=""//  
    $title = mysqli_real_escape_string($conn, $_POST["title"]);
    $author = mysqli_real_escape_string($conn, $_POST["author"]);
    $type = mysqli_real_escape_string($conn, $_POST["type"]);
    $description = mysqli_real_escape_string($conn, $_POST["description"]);

//SQL query
    $sql = "INSERT INTO books (title, author, type, description) VALUES ('$title', '$author', '$type', '$description')";
//Save query statement
    if (mysqli_query($conn, $sql)){
        session_start();
        $_SESSION["create"] = "Book Added Successfully";
        header("Location:index.php");
    }
    else{
        die ("Somethings Wrong!");
    }
}

//you can get it in the name ="" that you declare 
//Edit Data
if (isset($_POST["edit"])){

    //name of the name=""//  
        $title = mysqli_real_escape_string($conn, $_POST["title"]);
        $author = mysqli_real_escape_string($conn, $_POST["author"]);
        $type = mysqli_real_escape_string($conn, $_POST["type"]);
        $description = mysqli_real_escape_string($conn, $_POST["description"]);
        $id = mysqli_real_escape_string($conn, $_POST["id"]);
    
    //SQL query
        $sql = "UPDATE books SET title = '$title', author = '$author', type = '$type', description = '$description' where id = $id";
    //Save query statement
        if (mysqli_query($conn, $sql)){
            session_start();
            $_SESSION["edit"] = "Book Updated Successfully";
            header("Location:index.php");
        }
        else{
            die ("Somethings Wrong!");
        }
    }

    if (isset($_GET['id'])){
        $id = $_GET['id'];
        include("connect.php");
        $sql = "DELETE FROM books where id = $id";
    
        if(mysqli_query($conn, $sql)){
            session_start();
            $_SESSION["delete"] = "Book Deleted Successfully";
            header("Location:index.php");
        }
    }
?>