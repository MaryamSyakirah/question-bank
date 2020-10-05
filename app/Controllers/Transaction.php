<?php namespace App\Controllers;

use App\Models\TransactionModel;

class Transaction extends BaseController
{
    public function index()
    {
        $data = [];
        $data['types'] = [
            'Dropdown',
            'Multiple Choice'
        ];
        //  if ($_POST){
        //      echo '<pre>';
        //      print_r($_POST);
        //      echo 'pre';
        //  }
        return view('transaction/create',$data);
    }
    // function post($slug){
    //     echo view('templates/header', $data);
    //     return view('forms', $data);
    //     echo view('templates/footer'); 
    // }
    function create(){
        helper('form');
        $model = new TransactionModel();
        if (! $this->validate([
            'subject' => 'required|min_length[3]|max_length[255]',
            'types' => 'required',
            'question' => 'required',

        ])){
            echo view('templates/header');
            echo view('transaction/create');
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