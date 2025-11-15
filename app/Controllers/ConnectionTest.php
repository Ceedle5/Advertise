<?php

namespace App\Controllers;

use CodeIgniter\Controller;

class ConnectionTest extends Controller
{
    protected $ffe;
    protected $db;

    public function __construct()
    {
        $this->db = \Config\Database::connect();
    }

    public function index()
    {
        if ($this->db->connect()) {
            echo 'Connected to  database';
        } else {
            echo 'Failed to connect to database';
        }
    }

    public function test()
    {
        if ($this->db->connect()) {
            echo 'Connected to Default database';
        } else {
            echo 'Failed to connect to Default database';
        }
    }
}
