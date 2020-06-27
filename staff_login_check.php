<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>教育システム1</title>
</head>
<body>
<?php

$staff_number=$_POST['number'];
$staff_pass=$_POST['pass'];

$staff_number=htmlspecialchars($staff_number,ENT_QUOTES,'UTF-8');
$staff_pass=htmlspecialchars($staff_pass,ENT_QUOTES,'UTF-8');

if($staff_number=='')
{
    print '社員番号が入力されていません<br />';
}
else
{
  print '社員番号:';
  print $staff_number;
  print '<br />';
  print 'ですね？';
}
if($staff_pass=='')
{
    print 'パスワードが入力されていません <br/>';
}




if($staff_number==''||$staff_pass=='')
{
  print '<form>';
  print '<input type="button" onclick="history.back()" value="戻る">';
  print '<br />';
}
else
{
  $staff_pass=md5($staff_pass);
  print '<form method="post" action="staff_login_done.php">';
  print '<input type="hidden" name="number" value="'.$staff_number.'">';
  print '<input type="hidden" name="pass" value="'.$staff_pass.'">';

  print '<br />';
  print '<input type="button" onclick="history.back()" value="戻る">';
  print '<input type="submit" value="OK">';
  print '</form>';
}

?>

</body>
</html>