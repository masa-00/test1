<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>教育システム1</title>
</head>
<body>
<?php

$staff_name=$_POST['name'];
$staff_number=$_POST['number'];
$staff_pass=$_POST['pass'];
$staff_pass2=$_POST['pass2'];
$staff_store=$_POST['store'];
$staff_syokusyu=$_POST['syokusyu'];
$staff_gazou=$_FILES['gazou'];

$staff_name=htmlspecialchars($staff_name,ENT_QUOTES,'UTF-8');
$staff_number=htmlspecialchars($staff_number,ENT_QUOTES,'UTF-8');
$staff_pass=htmlspecialchars($staff_pass,ENT_QUOTES,'UTF-8');
$staff_pass2=htmlspecialchars($staff_pass2,ENT_QUOTES,'UTF-8');
$staff_store=htmlspecialchars($staff_store,ENT_QUOTES,'UTF-8');
$staff_syokusyu=htmlspecialchars($staff_syokusyu,ENT_QUOTES,'UTF-8');

if($staff_name=='')
{
    print 'スタッフ名が入力されていません<br />';
}
else
{
  print 'スタッフ名:';
  print $staff_name;
  print '<br />';
  print '社員番号';
  print $staff_number;
  print '<br />';
  print $staff_store;
  print '<br />';  
  print $staff_syokusyu;
  print '<br />';
}

if($staff_pass=='')
{
    print 'パスワードが入力されていません <br/>';
}

if($staff_pass!=$staff_pass2)
{
  print 'passwordが一致しません <br />';
}

if($staff_number=='')
{
  print '社員番号が入力されていません';
}

if($staff_store=='')
{
  print '所属店舗が入力されていません';
}

if($staff_syokusyu=='')
{
  print '職種が入力されていません';
}

if($staff_gazou['size']>0)
{
  if($staff_gazou['size']>1000000)
  {
    print '画像が大き過ぎます';
  }
  else
  {
    move_uploaded_file($staff_gazou['tmp_name'],'../gazou/'.$staff_gazou['name']);
    print'<img src="../gazou/'.$staff_gazou['name'].'">';
    print'<br/>';
    print 'さんですね？';
  }
}

if($staff_name==''||$staff_pass==''||$staff_number==''||$staff_store==''||$staff_syokusyu==''||$staff_pass!=$staff_pass2||$staff_gazou['size']>1000000)
{
  print '<form>';
  print '<input type="button" onclick="history.back()" value="戻る">';
  print '<br />';
}
else
{
  $staff_pass=md5($staff_pass);
  print '<form method="post" action="staff_add_done.php">';
  print '<input type="hidden" name="name" value="'.$staff_name.'">';
  print '<input type="hidden" name="number" value="'.$staff_number.'">';
  print '<input type="hidden" name="pass" value="'.$staff_pass.'">';
  print '<input type="hidden" name="store" value="'.$staff_store.'">';
  print '<input type="hidden" name="syokusyu" value="'.$staff_syokusyu.'">';
  print '<input type="hidden" name="gazou_name" value="'.$staff_gazou['name'].'">';
  print '<br />';
  print '<input type="button" onclick="history.back()" value="戻る">';
  print '<input type="submit" value="OK">';
  print '</form>';
}

?>
</body>
</html>
