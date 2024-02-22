<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" cintent="width=device-width, user-scalable=no, 
        initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>登録画面</title>
    </head>
    <body>
        <h1>登録画面</h1>
        <form action="" method="post">
            @csrf
            <label for="name">名前</label>
            <input type="text" name="name" id="name"><br>
            <iabel for="email">E-Mail</label>
            <input type="email" name="email" id="email"><br>
            <label for="password">パスワード</label>
            <input type="password" name="password" id="password"><br>
            <button type="submit">返信</button>
        </form>
    </body>
</html>