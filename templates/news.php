<ul>
<?php
foreach ($this->news as $article):
?>
    <li>
        <h3> <a href="view.php?id=<?=$article->id?>"><?=$article->title ?></a> </h3>
        <p><?=$article->announce?></p>
        <p>
            <?php
            echo '<p>' . date('d-m-Y', $article->idate) . '</p>';
            ?>
        </p>
    </li>
<?php
endforeach;
?>
</ul>


<hr>
<h3>Список ссылок</h3>
<ul>
<?php
for ($i = 1; $i <= $this->pagesNumber; $i++):
?>

<li><a href="news.php?page=<?=$i?>"><?=$i?></a></li>

<?php
endfor;
?>
</ul>
