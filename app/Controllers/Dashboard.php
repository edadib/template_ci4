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

    public function testingmail()
    {
        $data_content['system_setting'] = array (
            'menubar' => "Layout/MenuBar",
            'page' => "Manage/Test/test_email",
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

        // return view('Manage/Test/TestPage', $data_content);
        return view('Layout/Template', $data_content);
    }
    
    function SendEmail()
    {
        // dd($_POST);
        $emails = $this->email;
        $message_alert = "";
        // dd($emails);
        if(($_POST['email_sender'] != null && $_POST['email_sender'] != "") && ($_POST['email_receiver'] != null && $_POST['email_receiver'] != ""))
        {    
            $emails->setFrom('noreply_eCuti@usm.my', 'ECUTIV3');
            $emails->setTo($_POST['email_receiver']);
            $emails->setCC('adib.farhan@usm.my');
            // $emails->setBCC('them@their-example.com');
            
            $emails->setSubject('Email Testing CI4');
            $emails->setMessage($_POST['content_email']);
            
            $result = $emails->send();
            if($result)
            {
                $message_alert = "Berjaya";
                return redirect()->to('Dashboard/Mail_Test')->with('message', $message_alert);
            }
            else
            {
                $message_alert = "X berjaya";
                dd($emails->printDebugger(['Headers']));
            }
        }
        else
        {
            $message_alert = "X dk sender dan receiver";
            return redirect()->to('Dashboard/Mail_Test')->with('message', $message_alert);
        }
        // $emails->printDebugger();
        // dd($emails->printDebugger(['Headers']));
    }

    public function file_form()
    {
        $data_content['system_setting'] = array (
            'menubar' => "Layout/MenuBar",
            'page' => "Manage/Test/test_upload",
            'title' => "Dashboard",
            'breadcrumbs' => $this->breadcrumbs,
            'layout' => $this->layout,
            'menu' => $this->menu,
            'sideMenuDetails' => array (
                'parentmenu' => "Admin",
                'childmenu' => "test",
                'childmenu2' => "upload",
                'menu' => "active",
                'submenu' => "",
            ),
        );

        
        $list_files = $this->M_testing->load_file_uploaded();
        $data_content['list_files']    = $list_files;

        return view('Layout/Template', $data_content);
    }
    
    function Upload_File()
    {
        $filepath = "";
        $validationRule = [
            'file_content' => [
                'rules' => [
                    'uploaded[file_content]',
                    'mime_in[file_content,application/msword,application/vnd.openxmlformats-officedocument.wordprocessingml.document,application/pdf]',
                ],
            ],
        ];
        if (! $this->validateData([], $validationRule)) {
            $data_content['errors']    = $this->validator->getErrors();
            dd($data_content['errors']);

            // return view('Layout/Template', $data_content);
        }
        else
        {
            $files = $this->request->getFiles();
            if(array_key_exists('file_content',$files))
            {
                foreach($files['file_content'] as $fail)
                {
                    if ($fail->isValid() && ! $fail->hasMoved()) 
                    {
                        // d(WRITEPATH);
                        $newName = $fail->getRandomName();
                        $fail->move(WRITEPATH . 'uploads/DokumenSokongan/', $newName);
                        $filepath = WRITEPATH . 'uploads/DokumenSokongan/' . $newName;
                    }
                    // if ($fail->isValid())
                    // {
                    //     $newName = $fail->getRandomName();
                    //     $result_store = $fail->store('DokumenSokongan/', $newName);
                    //     d($result_store);
                    // }
                }
            }
        }
        return redirect()->to('Dashboard/File')->with('message', $filepath);
    }
}
