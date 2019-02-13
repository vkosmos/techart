<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <!--    <link href="/templates/style.css" rel="stylesheet">-->
    <link href="/css/style.css" rel="stylesheet">

    <title>Новость</title>
</head>
<body>

    <main class="main-content">
        <section class="article">

            <div class="main-headline-wrapper">
                <h1 class="main-headline"><?=$this->article->title?></h1>
            </div>

            <div><?=$this->article->content?></div>

            <div class="news-link-wrapper">
                <a href="news.php">Все новости >></a>
            </div>

        </section>

    </main>

</body>
</html>