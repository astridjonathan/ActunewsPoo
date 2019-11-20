<?php

namespace App\Model;

use App\Model\Db\DbTable;

class Category extends DbTable
{
    protected $table = 'categorie';
    #si différent de 'id'
    #protected $primary = 'id_categorie';
}