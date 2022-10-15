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
if(isset($_POST['submit'])){
$Name = "name: \n".$_POST['name']."
";
$Email = "email: \n".$_POST['email']."
";
$DOB = "Dateofbirth: \n".$_POST['Dateofbirth']."
";

$Gender = "gender: \n".$_POST['gender']."
";

$Country = "country: \n".$_POST['country']."
";
 $file = fopen("userdata.csv", "a");
fwrite($file, $Name);
fwrite($file, $Email);
fwrite($file, $DOB);
fwrite($file, $Gender);
fwrite($file, $Country);
fclose($file);

}
?>

<h2>Thank You your details are as follows <?php print_r ($file) ?> </h2>

        



?>
</body>
</html>

