<?php

namespace App\Repository;

use App\Core\Database;

class BaseRepository {

    protected $db;

    public function __construct() {
        $db=new Database();
        $this->db=$db->getConnection();
    }
}