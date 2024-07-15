<?php namespace App\Libraries;

class Controller_List
{
    public function __construct()
    {
    }

    function load_controller_cuti()
    {
        $Controllers = directory_map(APPPATH.'/Controllers');
        $ListController = array();
        if($Controllers)
        {
            foreach($Controllers as $c)
            {
                if(!is_array($c))
                {
                    $temp = explode('.', $c);
                    $C_name = $temp[0];
                    // dd($C_name);
                    $pattern = "/Controller/i";
                    if(preg_match($pattern, $C_name) == 0)
                    {
                        $ListController[] = $C_name; 
                    }
                }
            }
        }
        // die();
        return($ListController);
    }
}