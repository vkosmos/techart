<?php
/**
 * Created by PhpStorm.
 * User: magic
 * Date: 11.02.2019
 * Time: 12:29
 */

namespace App\Models;


use App\Db;
use App\Model;

class Article
    extends Model
{
    public const TABLE = 'news';

    public $title;
    public $content;

}