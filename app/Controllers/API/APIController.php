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
