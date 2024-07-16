<?php

namespace App\Controllers;
use App\Models\M_testing;
use stdClass;


class Dashboard extends BaseController
{
    public $breadcrumbs;
    public $layout;
    public $menu;
    protected $M_testing;

    public function __construct()
    {
        $link_base = base_url();
        $this->M_testing = new M_testing();
        // $link_user = base_url().'User/List';
        $this->breadcrumbs[0] = '<li class="breadcrumb-item"><a href="'.$link_base.'" target="_blank">Home</a></li>';
        $this->layout = parent::layout();
        $this->menu = parent::menu();

        // $this->breadcrumbs[1] = '<li class="breadcrumb-item"><a href="'.$link_user.'" target="_blank">User</a></li>';
    }

    public function index()
    {
        // dd($_SESSION);
        if(array_key_exists('user_id',$_SESSION))
        {
            // var_dump('masuk sini'); die();
            return redirect()->to('Dashboard/Main');
        }
        else
        {
            // var_dump('masuk else'); die();
            return redirect()->to('Access/Login');
        }
    }

    public function Main()
    {
        $data_content['system_setting'] = array (
            'menubar' => $this->menu,
            'page' => "Main/Dashboard",
            'title' => "Dashboard",
            'breadcrumbs' => $this->breadcrumbs,
            'layout' => $this->layout,
            'menu' => $this->menu,
            'sideMenuDetails' => array (
                'parentmenu' => "Home",
                'childmenu' => "",
                'childmenu2' => "",
                'menu' => "active",
                'submenu' => "",
            ),
        );

        return view('Layout/Template', $data_content);
    }

    public function Data_example()
    {
        $data_content['system_setting'] = array (
            'menubar' => $this->menu,
            'page' => "Main/Data_exmp",
            'title' => "Dashboard",
            'breadcrumbs' => $this->breadcrumbs,
            'layout' => $this->layout,
            'menu' => $this->menu,
            'sideMenuDetails' => array (
                'parentmenu' => "Data",
                'childmenu' => "",
                'childmenu2' => "",
                'menu' => "active",
                'submenu' => "",
            ),
        );

        $data_content['query1']   = $this->M_testing->get_data();
        $data_content['query2']   = $this->M_testing->get_data2();

        return view('Layout/Template', $data_content);
    }

    public function testing()
    {
        $data_content['system_setting'] = array (
            'menubar' => $this->menu,
            'page' => "Test/test",
            'title' => "Dashboard",
            'breadcrumbs' => $this->breadcrumbs,
            'layout' => $this->layout,
            'menu' => $this->menu,
            'sideMenuDetails' => array (
                'parentmenu' => "Home",
                'childmenu' => "",
                'childmenu2' => "",
                'menu' => "active",
                'submenu' => "",
            ),
        );

        return view('Layout/Template', $data_content);
    }
}
