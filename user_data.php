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
    createUserData();
}
    
    function createUserData(){
 $file = fopen("./userdata.csv", "a");
//         creates an array that handles those data
         $registrationData = array(
        'name' => $Name,
        'email' => $email,
        'Dateofbirth' => $DOB,
         'gender' => $gender,
         'country' => $Country
    );
        // then check if user already exist
    if(checkUserExist($email)){
        echo "User Already exist"
        }
        else{
           // enter the data into the file
        $file = fopen('../userdata.csv', 'a');
        fputcsv($file, $registrationData);
        fclose($file);
        <h2>Thank You your details are as follows <?php print_r ($file) ?> </h2>
    }
            
function checkUserExist ($email){
 $file = fopen('../userdata.csv', 'r');
 while(!feof($file)){
    $line = fgetcsv($file);
    if($line[1] == $email) {
        return true;
    }
 }
 return false;
?>


        



?>
</body>
</html>

