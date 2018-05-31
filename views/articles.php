<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Blog</title>
    <link rel="stylesheet" href="../css/style.css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,800&amp;subset=cyrillic" rel="stylesheet">

</head>
<body>
        <header>БВП</header>
        <div class="hellopage">
            БЛОГ ВЕБ ПАЦАНОВ
        </div>
        <a href="admin">Панелька</a>
        <div class="blog">
        <?php foreach ($articles as $a): ?> 
            <div>
                <h3><a href="article.php?id=<?=$a['id']?>">
                        <?=$a['title']?>
                        Заголовок!
                    </a></h3>
                <em>Опубликовано:<?=$a['date']?></em>
                <p><?=articles_intro($a['content'])?>...</p>
            </div>
        <?php endforeach ?> 
        </div>
</body>
</html>