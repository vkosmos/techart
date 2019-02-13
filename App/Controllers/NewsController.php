<?php

namespace App\Controllers;


use App\Config;
use App\Controller;
use App\Models\Article;
use App\View;

class NewsController
    extends Controller
{

    public function getFilteredPage()
    {
        if (isset($_GET['page'])){
            $page = $this->clearUserInput('page');
        }

        return (false != $page) ? $page : 1;
    }

    /**
     * Отображает одну из страниц списка новостей
     *
     * @return void
     */
    public function __invoke()
    {
        $config = Config::getInstance();
        $newsPerPage = ($config->getData()['newsPerPage']);
        $newsNumber = (int)(Article::getCount())->number;
        $pagesNumber = ceil($newsNumber / $newsPerPage);

        $page = $this->getFilteredPage();

        if ($page < 1 || $page > $pagesNumber){
            $page = 1;
        }

        $this->view->news = Article::getPage($page, $newsPerPage);
        $this->view->pagesNumber = $pagesNumber;
        $this->view->currentPage = $page;

        $this->view->display(__DIR__ . '/../../templates/news.php');
    }

}