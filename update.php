<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Book</title>
    <style>
      .container{
        width: 80%;
        border: 2px solid gray;
        border-radius: 5px;
        background-color: gainsboro;
        margin: 30px auto;
        padding: 20px;
        /* text-align: center; */
      } 

      header{
        display: flex;
        justify-content: space-between;
      }

      h1{
        text-align: center;
        padding: 5px;
        margin: 20px;
      }
      .element{
        padding: 5px;
        margin: auto auto;
      } 
      .element input{
        width: 98%;
        
        border-radius: 5px;
        padding: 10px;
      }

      .element select{
        width: 100%;
        color: grey;
        border: 2px solid black;
        border-radius: 5px;
        padding: 10px;
      }

      button{
        
        margin: 30px 10px;
        background-color: blue;
        color: white;
        font-weight: bolder;
        padding: 10px 20px;
        border: none;
        font-size: 14px;
        border-radius: 5px;
      }

      .element input.btn{
        width: 100%;
        justify-content: center;
        border-radius: 5px;
        padding: 10px; 
        margin: 20px auto;
        background-color: black;
        color: white;
        font-weight: bolder;
      }
    </style>
</head>
<body>
    <div class="container">
        <header>
            <h1>Edit Book</h1>
            <div>
                <a href="index.php"><button>Back</button></a>

            </div>
        </header>

        <?php

        if(isset($_GET["id"])){
            $id= $_GET["id"];
            include("db.php");

            $sql= "SELECT * FROM books WHERE id = $id";

            $result = mysqli_query($conn, $sql);
            $row = mysqli_fetch_array($result);

        
        ?>

        <form action="process.php" method="post">
            <div class="element">
                <input type="text" name="title" class="book" value="<?php echo $row["title"]; ?>" placeholder="Enter the Book title">
            </div>
            <div class="element">
                <input type="text" name="author" class="book" value="<?php echo $row["author"]; ?>" placeholder="Enter the Author Name">
            </div>
            <div class="element">
                <select name="type">
                    <option value="">Select Book Type</option>
                    <option value="Adventure" <?php if($row['type']== "Adventure"){echo "Selected";} ?> >Adventure</option>
                    <option value="Fantasy" <?php if($row['type']== "Fantasy"){echo "Selected";} ?> >Fantasy</option>
                    <option value="Sci-fi" <?php if($row['type']== "Sci-fi"){echo "Selected";} ?> >Sci-fi</option>
                    <option value="Horror" <?php if($row['type']== "Horror"){echo "Selected";} ?> >Horror</option>
                </select>
            </div>
            <div class="element">
                <input type="text" name="description" class="book" value="<?php echo $row["description"]; ?>" placeholder="Enter the description">
            </div>
            <input type="hidden" name="id" value='<?php echo $row['id']; ?>' >
            <div class="element">
                <input type="submit" class="btn" name="edit" value="Edit book">
            </div>
        </form>

        <?php
        }
        ?>
    </div>
</body>
</html>