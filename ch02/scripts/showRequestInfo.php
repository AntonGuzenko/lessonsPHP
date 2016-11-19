<!doctype html>
<html lang="en">
<head>
   <link href="/css/phpMM.css" rel="stylesheet" type="text/css">
</head>
<body>
<div id="header"><h1>PHP & MySQL: The Missing Manual</h1></div>
<div id="example">Пример 2.2</div>

<div id="content">
    <p>Это написанно в массиве$_REQUEST:<p>
        <?php
        foreach ($_REQUEST as  $kay=> $value){
            echo "<p>Для-> ".$kay."Значение-> ".$value."<p>";
        }
        ?>
    </div>
<div id="footer"></div>

</body>
</html>