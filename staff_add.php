<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>教育システム1</title>
    </head>
    <body>
        
スタッフ登録画面<br/>
<br/>
<form method="post" action="staff_add_check.php"  enctype="multipart/form-data">
あなたに名前を登録してください<br/>
※登録はフルネームでお願いします<br />
<input type="text" name="name" style="width:200px"><br/>
社員番号を入力して下さい<br />
<input type="text" name="number" style="width:200px"><br/>

店舗を選んで下さい<br/>
<select name="store" ><br/>
    <option value="free"></option>
    <option value="BO1">丸の内</option>
    <option value="BO3">パリージャ</option>
    <option value="BO4">ヒカリエ</option>
    <option value="BO6">銀座</option>
    <option value="BO7">名古屋</option>
</select><br/>
職種を選んで下さい<br/>
<input type="radio" name="syokusyu" value="service">ホール<br/>
<input type="radio" name="syokusyu" value="cook">キッチン<br/>
画像を選んで下さい<br />
<input type="file" name="gazou" style="width:400px"><br />
パスワードを登録してください※半角英数字<br/>
<input type="password" name="pass" style="width:100px"><br />
確認のため、パスワードを入力してくださいもう一度<br/>
<input type="password" name="pass2" style="width:100px"><br/>
<br/>
<input type="button" onclick="history.back()" value="戻る">
<input type="submit" value="OK">
</form>

    </body>
</html>