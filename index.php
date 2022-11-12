<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <select >


  <?php
  $start =2022;
  $end   =1905;
  for ($i = $start; $i >= $end; $i--)  {
        echo "<option>$i<option>";
  }
  ?>
  </select>
</body>
</html>
<?php

for($i = 1; $i <=5; $i++) {
  echo str_repeat("?", $i) . "<br>";
}

for($i = 5; $i >=1; $i--) {
  echo str_repeat("?", $i) . "<br>";
}

$num = 10;

for($i = 1; $i <=10; $i++){
$result = $num * $i;
echo "$num * $i = $result";
echo "<br>";
}


$users = [
  [
      'id' => 1,
      'name' => 'ifty',
      'email' => '505050@gmail.com',
  ],
  [
      'id' => 2,
      'name' => 'MYNUDDIN',
      'email' => '123451@gmail.com',
  ],
  [
      'id' => 3,
      'name' => 'ARMAN',
      'email' => '123452@gmail.com',
  ],
  [
      'id' => 4,
      'name' => 'FAHIM',
      'email' => '123453@gmail.com',
  ], [
      'id' => 5,
      'name' => 'ishat',
      'email' => '123454@gmail.com',
  ],
  [
      'id' => 6,
      'name' => 'isma',
      'email' => '123455@gmail.com',
  ],
  [
      'id' => 7,
      'name' => 'nigaT',
      'email' => '12346@gmail.com',
  ],

];
echo "<pre>";
print_r($users);
echo "</pre>";
foreach($users as $key => $user) {
    if ( $key < 3) {
        echo $user['name'] . "<br>";
    }
    else{
        break;
    }
  }


?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
</head>
<body>

<div class ="col-5 mx-auto mt-5">
        <form action="practice.php" method="post">
            <label  class="w-100">
                 Name
                <input type="text" class="form-control" name="name">
</label>
<label  class="w-100">
                Age
                <input type="text" class="form-control" name="age">
</label>
<button class="btn btn-primary mt-2 w-100">Submit</button>
</form>
</div>

</body>
</html>
 4  
php practice/practice.php
@@ -0,0 +1,4 @@
<?php 
echo"<pre>";
print_r($_POST);
echo"</pre>";