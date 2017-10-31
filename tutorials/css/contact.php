<?php
$page = "contact";
?>
<html>
<head>
    <title>Karl's styled page!</title>

    <!-- RESET CSS AND REMOVE DEFAULTS -->
    <link rel="stylesheet" href="reset.css">

    <style>
        div.page {
            display:block;
            margin: 0 auto;
            width: 850px;
        }
        div.header {
            width: calc(100% - 80px);
            padding: 100px 40px;
            background-image: url("https://cdn-s3.si.com/styles/marquee_large_2x/s3/images/trump-5.jpg");
            background-size: cover;
            background-repeat: no-repeat;
            background-position: center center;
        }
        div.header h1 {
            font-size: 24px;
            text-decoration: underline;
            font-family: "Arial Narrow";
            color: #fff;
        }

        div.main {
            width: 550px;
            display:inline-block;
        }

        div.sidebar {
            width: 250px;
            display:inline-block;
        }

        ul {
            list-style-type: none;
            margin: 0;
            padding: 0;
            overflow: hidden;
            background-color: #333;
        }

        ul > li {
            float: left;
        }

        ul > li a {
            display: block;
            color: white;
            text-align: center;
            padding: 14px 16px;
            text-decoration: none;
        }

        ul > li a:hover {
            background-color: #111;
        }

        ul > li a.active {
            background-color: grey;
        }
    </style>
</head>
<body>
<div class="page">
    <div class="header col-md-5 g faab ">
        <h1>Karl's Golf Forum</h1>
    </div>
    <ul>
        <li><a <?php if($page == "home") echo "class=\"active\""; ?> href="index.php">Home</a></li>
        <li><a <?php if($page == "news") echo "class=\"active\""; ?> href="#news">News</a></li>
        <li><a <?php if($page == "contact") echo "class=\"active\""; ?> href="contact.php">Contact</a></li>
        <li><a <?php if($page == "about") echo "class=\"active\""; ?> href="#about">About</a></li>
    </ul>
    <div class="main">
        This is the main body of the site!
    </div>
    <div class="sidebar">
        Links!
    </div>
</div>

</body>
</html>