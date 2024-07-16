<?php
namespace App\Models;
use CodeIgniter\Model;

class M_Auth extends Model
{
    protected $namadb;
    protected $session;
    
    // protected $table = 'kgd_user';

    public function __construct()
    {
        parent::__construct();
        
        $this->session = \Config\Services::session(); 
        // $this->namadb = db_connect('namadb');
    }

    function auth($id)
    {
        $results = true;

        if($results)
        {   
            $temp_data = [
                'user_id'  => $id,
                'user_name'  => $id,
                'user_email'     => $id,
            ];
            $this->session->set($temp_data);
            
            return true;
        }
        else
        {
            return false;
        }
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
