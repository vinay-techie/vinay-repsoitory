<body style='background-color:#E0FFFF;opacity:0.5'>
<h1 style='text-align:center'> CSE-B</h1>
</body>
<fieldset style='display:inline;position:relative;left:40%;border-radius:10px'>
<form  method='post'>
<p style='font-size:13px'>ENTER YOUR ROLL NUMBER</p>
<input placeholder="ROLL" style='border-radius:10px; margin-bottom:10px' type='text' name='data'\><br>
<input value="submit" style='border-radius:10px;margin-bottom:10px;position:relative;left:25%' type='submit'>
</form>
</fieldset>
<?php
echo "<pre>\n";
$x = new PDO('mysql:host=localhost;dbname=cse','root','root');
echo "connected succesfully</br>";
$y = $x->query("SELECT * FROM student WHERE ROLL='$_POST[data]'");
while($row = $y->fetch(PDO::FETCH_ASSOC)){
   echo "ROLL NUMBER:".$row[ROLL]."</br>";
   echo "NAME:".$row[name]."</br>";
}
echo "</pre>\n";
   
?>
