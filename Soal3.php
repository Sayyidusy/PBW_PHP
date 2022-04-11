
<?php
$str = 'My Password';
$user = 'username';

echo sprintf("md5 hash %s : %s\n", $str, md5($str.$user));
echo '<br>';

echo sprintf("sha1 hash %s : %s\n",$str, sha1($str.$user));
echo '<br>';

echo sprintf("crypt hash %s : %s\n",$str, crypt($str, $user));

?>