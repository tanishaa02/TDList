<?php include 'config.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css?v=<?=$version?>">
</head>
<body>
<h1 class="top-heading">To Do List</h1>
    <div class="container">
        <form action="handleActions.php" method="post">
            <div class="input-container">
                <input type="text" name="inputBox" id="inputBox" required>
                <button type="submit" name="add" id="add">ADD</button>
            </div>
            <ul class="list">
                <li class="item">
                    <p>Item 1</p>
                    <div class="icon-container">
                    <button type="submit" name="checked" id="check"><i class="fa-regular fa-circle-check"></i></button>
                    <button type="submit" name="deleted" id="delete"><i class="fa-solid fa-trash"></i></button>
                    </div>
                </li>
            </ul>
            <ul class="list">
                <li class="item">
                <p>Item 1</p>
                    <div class="icon-container">
                    <button type="submit" name="" id="check"><i class="fa-regular fa-circle-check"></i></button>
                    <button type="submit" name="deleted" id="delete"><i class="fa-solid fa-trash"></i></button>
                    </div>
                </li>
            </ul>
            <hr>
            <ul class="list">
                <li class="item fade">
                <p class="deleted-text"><span>Item 1</span></p>
                    <div class="icon-container">
                    <button type="submit" name="" id="check"><i class="fa-regular fa-circle-check hidden"></i></button>
                    <button type="submit" name="" id="delete"><i class="fa-solid fa-trash"></i></button>
                    </div>
                </li>
            </ul>
        </form>
    </div>
    <script src="https://kit.fontawesome.com/2725214ca4.js" crossorigin="anonymous"></script>
</body>
</html>





