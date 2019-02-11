<?php
/**
 * Created by PhpStorm.
 * User: magic
 * Date: 11.02.2019
 * Time: 13:10
 */

namespace App\Models;


use App\Db;
use App\Model;

class User
    extends Model
{
    public const TABLE = 'users';

    public $name;
    public $email;

}