<?php

namespace App\Model;

use App\Model\Db\DbTable;

class Article extends DbTable
{
    protected $table = 'articles_view';

    #si différent de 'id'
    #protected $primary = 'id_article';
}