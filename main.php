<?php
var_dump( $_POST);

// $ahmed = ['name' => "mahmoud", 'password' => "123"];
// $nums = [1,2,3];
// echo $nums[1];
// echo $ahmed['password'];

// echo $_POST['username'];
// echo $_POST['password'];
$all_arrors =[];
$username = $_POST['username'];
$flag=0;
if(isset($username)) {
    if(empty($username)) {
        $all_arrors['un_empty'] ="error1";
    }
    else{
        $flag++;
    }
    if((strlen($username)<3)) {
        $all_arrors['un_length'] ="error2";
    }
    else{
        $flag++;
    }
    if(!preg_match("/senior$/" ,$username)) {
        $all_arrors['un_senior'] ="error3";
    }
    else{
        $flag++;
    }
}


if(isset($_POST['password'])) {
    if(empty($_POST['password'])) {
        $all_arrors['un_empty'] ="error4";
    }
    else{
        $flag++;
    }
    if((strlen($_POST['password'])<9)) {
        $all_arrors['un_length'] ="error5";
    }
    else{
        $flag++;
    }
    if (!is_numeric($_POST['password'])) {
        $all_arrors['un_number'] ="error6";
    }
    else{
        $flag++;
    }
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
        <input type="text" placeholder="username" name="username">
        <input type="text" placeholder="password" name="password">

        <button name="sumbitBTN">login</button>
    </form>
    <?php foreach ($all_arrors as $er):  ?>
 <h1> <?= $er  ?> </h1>
    <?php endforeach ?>
</body>
</html>
