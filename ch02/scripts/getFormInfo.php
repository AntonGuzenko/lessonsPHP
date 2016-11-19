<?php
$first_name = trim($_REQUEST['first_name']);
$last_name = trim($_REQUEST['last_name']);
$email = trim($_REQUEST['email']);
$facebook_url = str_replace("facebook.org","facebook.com", trim($_REQUEST['facebook_url']));
$pos = strpos($facebook_url,'facebook.com');
if ($pos==false){
    $facebook_url="http://www.facebook.com/" .$facebook_url;
}
$twitter_handle = trim($_REQUEST['twitter_handle']);
$twitter_url = "http://www.twitter.com/";
$position = strpos($twitter_handle, "@");
if ($position === false) {
    $twitter_url = $twitter_url . $twitter_handle;
} else {  $twitter_url = $twitter_url . substr($twitter_handle, $position + 1); }

?>

<html>
<head>
    <link href="../../css/phpMM.css" rel="stylesheet" type="text/css" />
</head>
<body>
<div id="header"><h1>PHP & MySQL: The Missing Manual</h1></div>

<div id="example">Пример 2.1</div>

<div id="content">

        <p>Это запись той информации, которую вы отправили:</p>
    <p>
        Имя: <?php echo $first_name.' '.$last_name; echo $pos;?><br />

        Адрес электронной почты: <?php echo $email; ?><br />

        <a href="<?php echo $facebook_url; ?>">URL-aдрес в Facebook:</a><br />

        <a href="<?php echo $twitter_url; ?>">Проверьте свои записи в Twitter</a><br />
    </p>

</div>

<div id="footer"></div>
</body>
</html>