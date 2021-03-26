<?php

require_once "backend/database.php";

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Realtime Chat App</title>
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
</head>

<body>
    <div class="wrapper">
        <section class="users">
            <header>
                <div class="content">
                    <img src="avatar.jpg" alt="hieu tran">
                    <div class="details">
                        <span>Hieu Tran</span>
                        <p>Active now</p>
                    </div>
                </div>
                <a href="#" class="logout">Logout</a>
            </header>
            <div class="search">
                <span class="text">Select an user to start chat</span>
                <input type="text" placeholder="Enter name to search...">
                <button><i class="fas fa-search"></i></button>
            </div>
            <div class="users-list">
                <a href="#">
                    <div class="content">
                        <img src="avatar-user.jpg" alt="">
                        <div class="details">
                            <span>Thien Trang</span>
                            <p>This is test message</p>
                        </div>
                    </div>
                    <div class="status-dot"><i class="fas fa-circle"></i></div>
                </a>
                <a href="#">
                    <div class="content">
                        <img src="avatar-user.jpg" alt="">
                        <div class="details">
                            <span>Thien Trang</span>
                            <p>This is test message</p>
                        </div>
                    </div>
                    <div class="status-dot"><i class="fas fa-circle"></i></div>
                </a>
                <a href="#">
                    <div class="content">
                        <img src="avatar-user.jpg" alt="">
                        <div class="details">
                            <span>Thien Trang</span>
                            <p>This is test message</p>
                        </div>
                    </div>
                    <div class="status-dot"><i class="fas fa-circle"></i></div>
                </a>
                <a href="#">
                    <div class="content">
                        <img src="avatar-user.jpg" alt="">
                        <div class="details">
                            <span>Thien Trang</span>
                            <p>This is test message</p>
                        </div>
                    </div>
                    <div class="status-dot"><i class="fas fa-circle"></i></div>
                </a>
                <a href="#">
                    <div class="content">
                        <img src="avatar-user.jpg" alt="">
                        <div class="details">
                            <span>Thien Trang</span>
                            <p>This is test message</p>
                        </div>
                    </div>
                    <div class="status-dot"><i class="fas fa-circle"></i></div>
                </a>
                <a href="#">
                    <div class="content">
                        <img src="avatar-user.jpg" alt="">
                        <div class="details">
                            <span>Thien Trang</span>
                            <p>This is test message</p>
                        </div>
                    </div>
                    <div class="status-dot"><i class="fas fa-circle"></i></div>
                </a>
            </div>
            
        </section>

    </div>
    <script src="javascript/users.js"></script>
</body>

</html>