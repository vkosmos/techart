<?php

namespace App\Controllers;

use App\Controller;
use App\Errors\Page404Exception;
use App\Models\Article;
use App\View;

class ArticleController
    extends Controller
{

    /**
     * Получает данные выбранной новости
     * Отображает соответствующий шаблон
     *
     * @return void
     */
    public function __invoke()
    {
        $id = $this->clearUserInput('id');
        if (false == $id){
            throw new Page404Exception('404. Новость не найдена.');
        }

        $this->view->article = Article::findById($id);
        if (false == $this->view->article){
            throw new Page404Exception('404. Новость не найдена.');
            //die('Такой страницы не существует.');
        }
        $this->view->display(__DIR__ . '/../../templates/article.php');
    }
}