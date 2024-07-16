<?php
namespace App\Models;
use CodeIgniter\Model;

class M_testing extends Model
{
    protected $namadb;
    protected $session;
    
    // protected $table = 'kgd_user';

    public function __construct()
    {
        parent::__construct();
        
        $this->session = \Config\Services::session(); 
        $this->namadb = db_connect('default');
    }

    function get_data()
    {
        $query   = $this->namadb->table("users A");
        $query->select("A.name, A.email, B.role");
        $query->join('role_user B', 'A.role = B.id', 'left');
        $query->where('A.role = 1');
        $results = $query->get();
        return $results->getResult();
    }

    function get_data2()
    {
        $results   = $this->namadb->query("SELECT A.name, A.email, B.role 
                                            FROM users A
                                            LEFT JOIN role_user B on A.role = B.id
                                            WHERE A.role = 1
                                        ");
        return $results->getResult();
    }

    function get_connection_status()
    {
        $database = db_connect('dbsmus');
        if ($database) 
        {
            $result = "Connection_Cun";
        }
        else
        {
            $result = "Connection_X_Cun";
        }
        return $result;
    }
}
