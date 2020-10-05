<?php namespace App\Controllers;
use App\Models\FormModel;

class Form extends BaseController
{
	public function index()
	{
		// $data = [];
		// $data['types'] = [
		// 	'Dropdown',
		// 	'Multiple Choice',
		// ];
		//echo view('templates/header', $data);
		//echo view('form', $data);
		//echo view('templates/footer');	
	}
	// public function index()
	// {
	// 	return view('welcome_message');
	// }

	//--------------------------------------------------------------------
		function create(){
        helper('form');
        $model = new FormModel();
        if (! $this->validate([
            'subject' => 'required|min_length[3]|max_length[255]',
            'types' => 'required',
            'question' => 'required',

        ])){
            echo view('templates/header');
            echo view('form');
            echo view('templates/footer');
        }else{
            $model->save(
                [
                    'subject' => $this->request->getVar('subject'),
                    'types' => $this->request->getVar('types'),
                    'question' => $this->request->getVar('question'),
                ]
                );
                return redirect()->to('/dashboard');
        }
    }
}
