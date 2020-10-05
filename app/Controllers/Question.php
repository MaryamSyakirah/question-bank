<?php namespace App\Controllers;
use App\Models\QuestionModel;

class Question extends BaseController
{
	// public function index()
	// {
    //     $data = [];
    //     $data['types'] = [
    //         'Dropdown',
    //         'Multiple Choice'
    //     ];
    //     //  if ($_POST){
    //     //      echo '<pre>';
    //     //      print_r($_POST);
    //     //      echo 'pre';
    //     //  }
    //     return view('questions/add',$data['types']);
    // }
    public function index()
    {
        $question = new QuestionModel();
        //$data['pageTitle'] = 'Transaction';

        $data['table'] = $question->getList();
        echo view('templates/header', $data);
		echo view('questions/index', $data);
        echo view('templates/footer');
    }
    
    // function show($question_id){
    //     $questionModel = new QuestionModel();//declare App/Models/UserModel if want to use this
    //     $data['post'] =$questionModel->getQuestions($question_id);
    //     echo view('templates/header', $data);
	// 	return view('questions/edit');
    //     echo view('templates/footer');
    // }
     
    public function add()
	{
        // $questionModel = new QuestionModel();
        // $data['questions'] = $questionModel->findAll();
        echo view('templates/header');
		echo view('questions/add');
        echo view('templates/footer');
    }

    public function save(){
         $questionModel = new QuestionModel();//declare App/Models/UserModel if want to use this
         //$questionModel->insert($_POST);
        //         //save data to new model
                $newData = [
                    'subject' => $this->request->getVar('subject'),
                    'types' => $this->request->getVar('types'),
                    'question' => $this->request->getVar('question'),

                ];
                $questionModel->save($newData);
                $session = session();
                $session->setFlashData('success', 'Successful');
                return $this->response->redirect(site_url('dashboard'));

                
    }

    public function edit($question_id)
    {
        $questionModel = new QuestionModel();//declare App/Models/UserModel if want to use this
        $data['forEdit'] = $questionModel->getForEdit($id);
        echo view('templates/header', $data);
		echo view('questions/edit', $data );
        echo view('templates/footer');
    }

    public function update()
    {
        $questionModel = new QuestionModel();//declare App/Models/UserModel if want to use this
        $questionModel->update($_POST['question_id'], $_POST);
        return $this->response->redirect(site_url('questions'));
        
    }
    // public function edit($question_id = null)
    // {
    //     $questionModel = new QuestionModel();//declare App/Models/UserModel if want to use this
    //     $data['question'] = $questionModel->where('question_id', $question_id)->first();
    //     return view('questions/edit', $data);

    // }
	//--------------------------------------------------------------------

}