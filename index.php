<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Book List</title>
    <style>

        body{
            padding: 30px;
        }

        .alertt{
            background-color: lightblue;
            padding: 20px 30px;
        }

        header{
            display: flex;
            justify-content: space-between;
        }
        h1{
            
            padding: 5px;
            margin: 20px;
        }
        .tablecon{
            /* border: 3px solid grey; */
            /* padding: 10px;
            width: 100%; */
            border-radius: 10px;
        }
        table{
            border-collapse: collapse ;
            width: 100%;
            table-layout: auto;

        }

        th, td{
            border: 1px solid #ddd;
            padding: 10px ;
            text-align: center;
        }

        th{
            background-color: bisque;

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

        .read button{
            background-color: green;
            color: white;
        }

        .update button{
            background-color: orange;
            color: white;
        }

        .delete button{
            background-color: purple;
            color: white;
        }


    </style>
</head>
<body>
    <div class="container">
        <header>
            <h1>Book List</h1>
            <div>
                <a href="create.php"><button>Add new book</button></a>

            </div>
        </header>

        <?php
        session_start();
        if(isset($_SESSION["create"])){
            ?>
            <div class="alertt">

            <?php
            echo $_SESSION["create"];
            unset($_SESSION["create"]) ;
            ?>
            </div>
            <?php
        }

        ?>

        <?php
        
        if(isset($_SESSION["update"])){
            ?>
            <div class="alertt">

            <?php
            echo $_SESSION["update"];
            unset($_SESSION["update"]) ;
            ?>
            </div>
            <?php
        }

        ?>

        <?php
        
        if(isset($_SESSION["delete"])){
            ?>
            <div class="alertt">
            
            <?php
            echo $_SESSION["delete"];
            unset($_SESSION["delete"]) ;
            ?>
            </div>
            <?php
        }

        ?>

        <table class="tablecon">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Title</th>
                    <th>Author</th>
                    <th>Type</th>
                    <th>Action</th>
                </tr>
            </thead>

            <tbody>
                <?php
                include("db.php");
                $sql= "SELECT * FROM books";

                $result= mysqli_query($conn,$sql);
                

                while($row= mysqli_fetch_array($result)){
                ?>
                    <tr>
                        <td><?php echo $row["id"];?></td>
                        <td><?php echo $row["title"];?></td>
                        <td><?php echo $row["author"];?></td>
                        <td><?php echo $row["type"];?></td>
                        

                        <td>
                            <a href="view.php?id=<?php echo $row["id"];?>" class="read"><button>Read More</button></a>
                        
                            <a href="update.php?id=<?php echo $row["id"];?>" class="update"><button>Update</button></a>
                    
                            <a href="delete.php?id=<?php echo $row["id"];?>" class="delete"><button>Delete</button></a>
                        </td>
                        
                    </tr>
                <?php
                }
                ?>
            </tbody>
            
        </table>

</div>

</body>
</html>