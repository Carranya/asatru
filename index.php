
<!DOCTYPE html>
<html lang="de" style="scroll-behavior: smooth">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Asatru Schweiz</title>
    <link rel="stylesheet" href="css/output.css">
    <link rel="stylesheet" href="css/style.css">
    <script type="text/javascript" src="js/navigation.js"></script>
</head>
<body class='bg-gradient-to-t from-lime-100 to-lime-600'>
    <?php
        session_start();
        include 'config/config.php';
        include 'functions/pageFunctions.php';
        include 'functions/adminFunctions.php';
        include 'events.php';
    ?>
    <!-- Logo -->
    <?php include 'pages/global/logo.php'; ?>
    
    <!-- Banner -->
    <div id='banner'>
        <?php 
            getBanner(@$_GET['page']);
        ?>
    </div>
    <!-- Navigation -->
    <div id='top'></div>
    <?php include 'pages/global/navigation.php'; ?>
    <div class='flex justify-center text-justify'>
        <div class='w-full p-5 md:w-1/2'>
            <?php 
                getPage(@$_GET['page']);
            ?>
        </div>
    </div>

<div id='end'></div>
<?php include 'pages/global/footer.php'; ?>
</body>
</html>