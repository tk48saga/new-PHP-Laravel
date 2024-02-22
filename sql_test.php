<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="UTF-8">
        <title>サンプルページ</title>
    </head>
    <body>

    <p>スタッフ名簿</p>

    <?php

    $dsn = 'mysql:dbname=practice;host=localhost';
    $user = 'Takahiro Koga';
    $password ='Tk100848';

    try{
        $dbh = new PDO($dsn, $user, $password);

        $sql = 'SELECT * FROM staffname';
        foreach ($dbh->query($sql) as $row){
            print($row['id'].',');
            print($row['name']);
            print('<br>');
        }    
    }catch (PDOException $e){
        print('Error:'.$e->getMessage());
        die();
    }

    $dbh = null;
    ?>
    
    </body>
</html>