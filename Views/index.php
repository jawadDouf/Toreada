<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
    require_once "../Controllers/Medcins.php";
    require_once "../Controllers/Pages.php";
    $medcin = new Medcins();
    //print_r($medcin->ShowMedcins());
   $data = $medcin->register("jdHK","doufare","mail@mail.mail","*******");
   $data = $medcin->ShowMedcins();
   $medcin->view('Page2',$data);
    ?>
</body>
</html>