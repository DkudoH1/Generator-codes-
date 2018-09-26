<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>The fb script</title>
  <style>
  body {background:powderblue;}
  b {color:black;}
  p {color:red;}
  </style>
</head>
<body>
  <h2>Random Code Generator</h2>
  <p>Random guess</p>
<?php
$code = "Random Code Generator :-";
print $code.rand(123456,789123);  // rand (int , int max ) Access memory port

echo "<br>";

$A1 = "ABOUT ME :-";
$a1 = strtolower($A1);
$a2 = ucfirst($a1);
echo $a2;

echo "<br>";

echo "Please read the attached file for more";


?>
</body>
</html>
