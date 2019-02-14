<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    
<?php foreach($countries as $country) :?>

<div class="country">
    <h3><?= $country->Name?></h3>
    <div class="data"></div>

<label for="">Population:</label>
<?= $country->Population?>

</div>
</div>
<?php endforeach ;?>



</body>
</html>