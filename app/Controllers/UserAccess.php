<?php

namespace App\Controllers;

use App\Models\M_Auth;
use App\Models\M_User;
use App\Models\M_Staf;

// header('Access-Control-Allow-Origin: *');
// header("Access-Control-Allow-Methods: GET, OPTIONS");

class UserAccess extends BaseController
{

    public $M_Auth;
    protected $M_user;
    protected $M_staf;
    public $breadcrumbs;
    public $layout;
    public $layout_login;

    public function __construct()
    {
        $this->M_Auth = new M_Auth();
        $link_base = base_url();
        $this->breadcrumbs[0] = '<li class="breadcrumb-item"><a href="'.$link_base.'" target="_blank">Home</a></li>';
        $this->breadcrumbs[1] = '<li class="breadcrumb-item">Profile</li>';
        $this->layout = parent::layout();
        $this->layout_login = parent::layout_login();
    }
    
    public function index()
    {
        if($_SESSION)
        {
            var_dump('masuk sini'); die();
            return redirect()->to('Dashboard/Main');
        }
        else
        {
            var_dump('masuk else'); die();
            return redirect()->to('Access/Login');
        }
    }

    public function Login()
    {
        $page = "Manage/Login/Login";

        $data_content['system_setting'] = array (
            'menubar' => "Layout/MenuBar",
            'page' => $page,
            'title' => "Login Form",
            'breadcrumbs' => $this->breadcrumbs,
            'layout' => $this->layout_login,
            'sideMenuDetails' => array (
                'parentmenu' => "Apply",
                'childmenu' => "listawt",
                'childmenu2' => "",
                'menu' => "menu-open",
                'submenu' => "active",
            ),
        );

        return view('Layout/Template', $data_content);
    }

    public function Login_Auth()
    {
        $id = null;
        extract($_POST);
        
        $data_content['user_detail']    = $this->M_Auth->auth($id);
        if($data_content['user_detail'])
        {
            return redirect()->to('Dashboard');
        }
        else
        {
            return redirect()->to('Access/Login');
        }
    }

    public function Logout()
    {
        $this->session->destroy();
    
        return redirect()->to('Access/Login');
    }

}
