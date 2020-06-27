<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>教育システム1</title>
</head>
<body>

<?php

try
{

$staff_number=$_POST['number'];
$staff_pass=$_POST['pass'];

$staff_number=htmlspecialchars($staff_number,ENT_QUOTES,'UTF-8');
$staff_pass=htmlspecialchars($staff_pass,ENT_QUOTES,'UTF-8');

$dsn='mysql:dbname=kyouiku1;host=localhost;charset=utf8';
$user='root';
$password='';
$dbh=new PDO($dsn,$user,$password);
$dbh->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

$sql='SELECT name,store,syokusyu,gazou FROM mst_staff WHERE number=? AND password=?';
$stmt=$dbh->prepare($sql);
$data[]=$staff_number;
$data[]=$staff_pass;

$stmt->execute($data);

$dbh=null;

$rec=$stmt->fetch(PDO::FETCH_ASSOC);

$staff_name=$rec['name'];
$staff_store=$rec['store'];
$staff_syokusyu=$rec['syokusyu'];
$staff_gazou_name=$rec['gazou'];





print $staff_name.'サン';
print '<br />';
print '社員番号　'.$staff_number;
print '<br />';
print $staff_store.'店' ;
print '<br />';
print $staff_syokusyu;
print '<br />';
print '<img src="./gazou/'.$staff_gazou_name.'">';
print '<br/>';
print 'ようこそ！　<br />';

}
catch(Exception $e)
{
    print '只今障害により大変ご迷惑をお掛けしております';
    exit();
}

?>

<button type="button" onclick="location.href='staff_login_check.php' ">戻る</button>
<button type="button" onclick="location.href='mein/index.html' " >OK</button>
</body>
</html>
