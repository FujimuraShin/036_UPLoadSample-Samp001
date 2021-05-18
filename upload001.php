<?php
    if(isset($_POST['send001'])){
        $tempfile=$_FILES['image']['tmp_name'];
        var_dump($tempfile);
        //アップロード画像の移動先
        //$filename='/Applications/XAMPP/xampfiles/htdocs/upload_test/img/';
        //$filename='/xampp/htdocs/xampp/mineXAMPP/036_UPLoadSample-Samp001/img';
        //$filename=__DIR__.'/../img/';
        $filename='./img/img001.jpg';
        //move_uploadede_file関数を利用して、アップロードした画像を指定した場所に移動させる
        move_uploaded_file($tempfile,$filename);
    }

    if(isset($_POST['send002'])){
        $tempfile=$_FILES['image']['tmp_name'];
        var_dump($tempfile);
        //アップロード画像の移動先
        //$filename='/Applications/XAMPP/xampfiles/htdocs/upload_test/img/';
        //$filename='/xampp/htdocs/xampp/mineXAMPP/036_UPLoadSample-Samp001/img';
        //$filename=__DIR__.'/../img/';
        $filename='./img/img002.jpg';
        //move_uploadede_file関数を利用して、アップロードした画像を指定した場所に移動させる
        move_uploaded_file($tempfile,$filename);
    }

    if(isset($_POST['send003'])){
        $tempfile=$_FILES['image']['tmp_name'];
        var_dump($tempfile);
        //アップロード画像の移動先
        //$filename='/Applications/XAMPP/xampfiles/htdocs/upload_test/img/';
        //$filename='/xampp/htdocs/xampp/mineXAMPP/036_UPLoadSample-Samp001/img';
        //$filename=__DIR__.'/../img/';
        $filename='./img/img003.jpg';
        //move_uploadede_file関数を利用して、アップロードした画像を指定した場所に移動させる
        move_uploaded_file($tempfile,$filename);
    }



?>

<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>画像アップロード</title>
</head>
<body>
    <h1>アップロード画像の表示</h1>
        <p>
            <img src="img/img001.jpg">
            <img src="img/img002.jpg">
            <img src="img/img003.jpg">
        </p>

    <h1>画像001のアプロード作業</h1>
    <form action="" method="POST" enctype="multipart/form-data">
        画像<br>
        <input type="file" name="image"><br>
        <input type="submit" value="画像001アップロード" name="send001">
    </form>

    <h1>画像002のアプロード作業</h1>
    <form action="" method="POST" enctype="multipart/form-data">
        画像<br>
        <input type="file" name="image"><br>
        <input type="submit" value="画像002アップロード" name="send002">
    </form>

    <h1>画像002のアプロード作業</h1>
    <form action="" method="POST" enctype="multipart/form-data">
        画像<br>
        <input type="file" name="image"><br>
        <input type="submit" value="画像003アップロード" name="send003">
    </form>
</body>
</html>


