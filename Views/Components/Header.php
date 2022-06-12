<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../../Assets/Styles/reset.css?v=<?php echo time(); ?>">
    <link rel="stylesheet" href="./Assets/Styles/app.css?v=<?php echo time(); ?>">
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
    <link
        rel="stylesheet"
        type="text/css"
        href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"
      />
</head>
<body>
    <div class="app">
        <header class="header">
            <div class="center">
                <div class="header-top">
                   <div class="header-top-left">
                        <div class="logo">
                            FullStack
                        </div>
                        <?php include_once('Navbar.php') ?>
                   </div>
                   <div class="header-top-right">
                        <form action="#" method="get" class="search">
                            <input type="text" placeholder="Tìm kiếm khóa học">
                            <button><ion-icon name="search-outline"></ion-icon></button>
                        </form>
                        <a class="login" href="#">
                            <ion-icon name="person-outline"></ion-icon>
                            <span class="login-text">Đăng nhập</span>
                        </a>
                   </div>
                </div>
                <?php include_once('Slider.php') ?>
            </div>
        </header>