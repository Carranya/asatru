<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/output.css">
  
</head>
<body>
    <div class='flex justify-center bg-green-500'>
        <li id='test1' class='p-3 bg-green-500 hover:bg-green-300 text-white font-bold cursor-pointer'>Test1
            <ul id='htest1' class='hidden'>
            <li>Unterorder 1</li>
            <li>Unterorder 1</li>
            <li>Unterorder 1</li>
            </ul>
        </li>
        <li class='p-3 bg-green-500 hover:bg-green-300 text-white font-bold cursor-pointer'>Test2</li>
        <li class='p-3 bg-green-500 hover:bg-green-300 text-white font-bold cursor-pointer'>Test3</li>
        <li class='p-3 bg-green-500 hover:bg-green-300 text-white font-bold cursor-pointer'>Test4</li>
        <li class='p-3 bg-green-500 hover:bg-green-300 text-white font-bold cursor-pointer'>Test5</li>
    </div>
      <script>
        document.getElementById('test1').addEventListener('click', open);
        function open(){
            document.getElementById('htest1').style.display = 'block';
        }
    </script>
</body>
</html>