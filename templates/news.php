<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

<!--    <link href="/templates/style.css" rel="stylesheet">-->
    <link href="/css/style.css" rel="stylesheet">

    <title>Список новостей</title>
</head>
<body>

    <main class="main-content">
        <section class="news">

            <div class="main-headline-wrapper">
                <h1 class="main-headline">Новости</h1>
            </div>

            <ul class="news-list">
                <?php
                foreach ($this->news as $article):
                ?>
                    <li class="news-item">
                        <p class="news-item-title">
                            <?php
                                echo '<span class="news-item-date">' . date('d.m.Y', $article->idate) . '</span>';
                            ?>
                            <span> <a href="view.php?id=<?=$article->id?>" class="news-item-link"><?=$article->title ?></a> </span>
                        </p>
                        <p><?=$article->announce?></p>
                    </li>
                <?php
                endforeach;
                ?>
            </ul>
        </section>

        <div class="navigation-wrapper">
            <nav class="navigation">
                <h3 class="navigation-headline">Страницы:</h3>
                <ul class="navigation-list">
                    <?php
                    for ($i = 1; $i <= $this->pagesNumber; $i++):
                        ?>
                        <li class="navigation-item
                        <?php
                        if ($i == $this->currentPage){
                            echo ' active';
                        }
                        ?>
                        "><a href="news.php?page=<?=$i?>"><?=$i?></a>
                        </li>
                    <?php
                    endfor;
                    ?>
                </ul>
            </nav>
        </div>
    </main>

</body>
</html>

