<head>
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
</head>
<body style='background-color:#E0FFFF;opacity:0.5'>
<h1 style='position:relative;left:44%'> CSE-B</h1>
</body>
<fieldset style='display:inline;position:relative;left:39%;border-radius:10px'>
<form  method='post'>
<p style='font-size:13px'>ENTER YOUR ROLL NUMBER</p>
<input placeholder="ROLL" style='border-radius:10px; margin-bottom:10px' type='text' name='data'\><br>
<input value="submit" style='border-radius:10px;margin-bottom:10px;position:relative;left:25%' type='submit'>
</form>
</fieldset>
<?php
echo "<pre>\n";
// PHP Data Objects(PDO) Sample Code:
try {
    $conn = new PDO("sqlsrv:server = tcp:cseb.database.windows.net,1433; Database = firsrdb", "vinay", "ardhanisou@123");
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}
catch (PDOException $e) {
    print("Error connecting to SQL Server.");
    die(print_r($e));
}
echo "connected succesfully</br>";
$sql="CREATE TABLE student(
      ROLL varchar(128),
      name varchar(128)
      )";
$conn->exec($sql);
echo "table created";
echo $sql;
       
$y = $x->query("SELECT * FROM student WHERE ROLL='$_POST[data]'");
while($row = $y->fetch(PDO::FETCH_ASSOC)){
   echo "ROLL NUMBER:".$row[ROLL]."</br>";
   echo "NAME:".$row[name]."</br>";
}
echo "</pre>\n";
   
?>
