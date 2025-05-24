<?php
declare(strict_types=1);

namespace App\Models;

use Core\Database;
use Core\Model;

class User extends Model
{
    public function __construct()
    {        
        $this->table = 'users';
        parent::__construct($this->table);
    }

    public function test()
    {
        $db = new Database();
        $tables = $db->query('SELECT * FROM ' . $this->table);
        return $tables;
    }
}