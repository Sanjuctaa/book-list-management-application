<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Book</title>
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
            <h1>Add New Book</h1>
            <div>
                <a href="index.php"><button>Back</button></a>

            </div>
        </header>
        <form action="process.php" method="post">
            <div class="element">
                <input type="text" name="title" class="book" placeholder="Enter the Book title">
            </div>
            <div class="element">
                <input type="text" name="author" class="book" placeholder="Enter the Author Name">
            </div>
            <div class="element">
                <select name="type">
                    <option value="">Select Book Type</option>
                    <option value="Adventure">Adventure</option>
                    <option value="Fantasy">Fantasy</option>
                    <option value="Sci-fi">Sci-fi</option>
                    <option value="Horror">Horror</option>
                </select>
            </div>
            <div class="element">
                <input type="text" name="description" class="book" placeholder="Enter the description">
            </div>
            <div class="element">
                <input type="submit" class="btn" name="create" value="Add Book">
            </div>
        </form>
    </div>
</body>
</html>