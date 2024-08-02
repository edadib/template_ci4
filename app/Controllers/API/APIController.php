<?php

namespace App\Controllers;

use CodeIgniter\HTTP\ResponseInterface;
use CodeIgniter\RESTful\ResourceController;
use CodeIgniter\API\ResponseTrait;

//tambah model disini

class APIController extends ResourceController
{
    protected $Model;

    use ResponseTrait;

    public function __construct()
    {
        // $this->Model = new Model(); contoh declare Model
    }

    function ContohAPI()
    {
        // dd($list_User);
        $status = TRUE;
        $message = "SUCCESS";
        $response = [
            'status'   => $status,
            'messages' => $message,
            'data' => "hello",
        ];

        return $this->setResponseFormat('json')->respond($response);
    }

    function ContohAPIPost()
    {
        $json = $this->request->getJSON();
		if($json){
			$data = [
				'contoh1' => $json->contoh1,
			];
		}else{
			$input = $this->request->getRawInput();
			$data = [
			    'contoh1' => $input['contoh1'],
			];
		}
        // dd($list_User);
        $status = TRUE;
        $message = "SUCCESS";
        $response = [
            'status'   => $status,
            'messages' => $message,
            'data' => $data,
        ];

        return $this->setResponseFormat('json')->respond($response);
    }

    // call api
    function retrieve_data()
    {
        $user_id = '920202075225';
        $url = 'https://ossdev3.usm.my/ecutiv3/public/index.php/ECuti/UserProfilCuti';
        $var = array(
            'id' => $user_id,
        );

        $body = json_encode($var);
        $curl = curl_init();

        curl_setopt_array($curl, array(
            CURLOPT_URL => $url,
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => '',
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 0,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => 'POST',
            CURLOPT_POSTFIELDS => $body,
        ));

        $response = curl_exec($curl);
        curl_close($curl);
        $raw = json_decode($response);
        dd($raw);
    }

    /**
     * Return an array of resource objects, themselves in array format.
     *
     * @return ResponseInterface
     */
    public function index()
    {
        //
    }

    /**
     * Return the properties of a resource object.
     *
     * @param int|string|null $id
     *
     * @return ResponseInterface
     */
    public function show($id = null)
    {
        //
    }

    /**
     * Return a new resource object, with default properties.
     *
     * @return ResponseInterface
     */
    public function new()
    {
        //
    }

    /**
     * Create a new resource object, from "posted" parameters.
     *
     * @return ResponseInterface
     */
    public function create()
    {
        //
    }

    /**
     * Return the editable properties of a resource object.
     *
     * @param int|string|null $id
     *
     * @return ResponseInterface
     */
    public function edit($id = null)
    {
        //
    }

    /**
     * Add or update a model resource, from "posted" properties.
     *
     * @param int|string|null $id
     *
     * @return ResponseInterface
     */
    public function update($id = null)
    {
        //
    }

    /**
     * Delete the designated resource object from the model.
     *
     * @param int|string|null $id
     *
     * @return ResponseInterface
     */
    public function delete($id = null)
    {
        //
    }
}
