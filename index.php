<!DOCTYPE html>
<html lang="de" style="scroll-behavior: smooth">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Demo</title>
    <link rel="stylesheet" href="css/output.css">
    <script type="text/javascript" src="js/navigation.js"></script>
</head>
<body class='bg-gradient-to-t from-lime-100 to-lime-600'>
    <?php require ('functions/pageFunctions.php'); ?>
    <!-- Banner -->
    <div id='banner'>
        <img src='img/header.gif' class='w-full h-40 object-cover'>
    </div>
    <!-- Navigation -->

    <?php include 'pages/global/navigation.php'; ?>

    <div class='flex justify-center text-justify'>
        <div class='w-1/2'>
            <?php 
                getPage(@$_GET['page']);
            ?>
        </div>
    </div>
</div>
</body>
</html>