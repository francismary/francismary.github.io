<?php
$con =mysqli_connect("localhost","root","") or die("unable to connect");
mysqli_select_db($con,"cite");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>search</title>
</head>
<body>
    <h3 style="margin-bottom:20px">Search results...</h3>
<?php
$search = $_POST['search'];

$sql = "select * from user where username like '%$search%'";
$result = $con->query($sql);

if($result->num_rows>0){
    while($row=$result->fetch_assoc()){
        echo $row["username"]."  ".$row["password"]."<br>";
    }
}else{
    echo "no records found";
}
$con->close();

?>
</body>
</html>
