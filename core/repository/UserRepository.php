<?php

namespace App\Repository;
use PDO;

class UserRepository extends BaseRepository
{

    private $table = 'user';

    public function getAll()
    {

        $query = $this->db->prepare("SELECT * FROM `$this->table`");
        $query->execute();
        $result = $query->fetch(PDO::FETCH_ASSOC);
    
        echo '<pre>'; print_r($result);
    }
}
