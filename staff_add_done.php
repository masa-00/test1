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

$staff_name=$_POST['name'];
$staff_number=$_POST['number'];
$staff_pass=$_POST['pass'];
$staff_store=$_POST['store'];
$staff_syokusyu=$_POST['syokusyu'];
$staff_gazou_name=$_POST['gazou_name'];

$staff_name=htmlspecialchars($staff_name,ENT_QUOTES,'UTF-8');
$staff_number=htmlspecialchars($staff_number,ENT_QUOTES,'UTF-8');
$staff_pass=htmlspecialchars($staff_pass,ENT_QUOTES,'UTF-8');

$dsn='mysql:dbname=kyouiku1;host=localhost;charset=utf8';
$user='root';
$password='';
$dbh=new PDO($dsn,$user,$password);
$dbh->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

$sql='INSERT INTO mst_staff(name,number,password,store,syokusyu,gazou) VALUE (?,?,?,?,?,?)';
$stmt=$dbh->prepare($sql);
$data[]=$staff_name;
$data[]=$staff_number;
$data[]=$staff_pass;
$data[]=$staff_store;
$data[]=$staff_syokusyu;
$data[]=$staff_gazou_name;
$stmt->execute($data);

$dbh=null;

print $staff_name;
print '<br />';
print '社員番号　'.$staff_number;
print '<br />';
print $staff_store;
print '<br />';
print $staff_syokusyu;
print '<br />';
print'<img src="../gazou/'.$staff_gazou_name.'">';
print '<br />';
print 'さんを追加しました　<br />';

}
catch(Exception $e)
{
    print '只今障害により大変ご迷惑をお掛けしております';
    exit();
}

?>

<button type="button" onclick="location.href='../mein/mein.html' " >OK</button>

</body>
</html>
