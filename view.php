<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Book details</title>
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
        
        padding: 5px;
        margin: 20px 0px;
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
    </style>
</head>
<body>
    <div class="container">
        <header>
            <h1>Book Details</h1>
            <div>
                <a href="index.php"><button>Back</button></a>

            </div>
        </header>
        <div class="book_details">
            <?php
            if(isset($_GET["id"])){

                $id = $_GET["id"];
                include("db.php");

                $sql = "SELECT * FROM books WHERE id = $id";
                $result = mysqli_query($conn, $sql);
                $row = mysqli_fetch_array($result);
            ?>

            <h2>Title</h2>
            <p><?php echo $row["title"]; ?></p>

            <h2>Description</h2>
            <p><?php echo $row["description"]; ?></p>
            

            <h2>Type</h2>
            <p><?php echo $row["type"]; ?></p>

            <h2>Author</h2>
            <p><?php echo $row["author"]; ?></p>

            <?php
            }
            ?>
        </div>
</div>
</body>
</html>