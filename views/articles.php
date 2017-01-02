<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf8">
        <title>Мой первый блог</title>
        <link rel="stylesheet" href="style.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    </head>
    <body>
        <div class="container">
            <h1>Мой первый блог</h1>
            <a href="admin">Панель администратора</a>
            <div>
                <?php foreach($articles as $article): ?>
            <div class="article">
                <h3><a href="article.php?id=<?=$article['id']?>"><?=$article['title']?></a></h3>
                <em>Опубликованно: <?=$article['date']?></em>
                <p><?=articles_intro($article['content'])?></p>
            </div>
            <?php endforeach ?>
            </div>
            <footer>
                <p>Мой первый блог<br>Coryright &copy; 2016</p>
            </footer>
        </div>
    </body>
</html>