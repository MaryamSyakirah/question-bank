<?php namespace App\Controllers;
use App\Models\QuestionModel;

class Questions extends BaseController
{
	
    public function index()
    {
        $question = new QuestionModel();
        //$data['pageTitle'] = 'Transaction';

        $data['table'] = $question->getList();
        echo view('templates/header', $data);
		echo view('questions/index', $data);
        echo view('templates/footer');
    }
    
    
     
    public function add()
	{
        echo view('templates/header');
		echo view('questions/add');
        echo view('templates/footer');
    }

    public function save(){
        $questionModel = new QuestionModel();//declare App/Models/UserModel if want to use this
        //save data to new model
        $newData = [
            'subject' => $this->request->getVar('subject'),
            'types' => $this->request->getVar('types'),
            'question' => $this->request->getVar('question'),

        ];
        $questionModel->save($newData);
        $session = session();
        $session->setFlashData('success', 'Successful');
        return $this->response->redirect(site_url('questions'));
    }

    public function edit($question_id)
    {
        $questionModel = new QuestionModel();//declare App/Models/UserModel if want to use this
        $data['forEdit'] = $questionModel->getForEdit($question_id);
        echo view('templates/header', $data);
		echo view('questions/edit', $data );
        echo view('templates/footer');
    }

    public function kemaskini(){
        $questionModel = new QuestionModel();//declare App/Models/UserModel if want to use this
        //save data to new model
        $newData = [
            'subject' => $this->request->getVar('subject'),
            'types' => $this->request->getVar('types'),
            'question' => $this->request->getVar('question'),

        ];
        $questionModel->update($this->request->getVar('question_id'), $newData);
        $session = session();
        $session->setFlashData('success', 'Successful');
        return $this->response->redirect(site_url('questions'));
    }

    public function delete($question_id){

        $questionModel = new QuestionModel();
        $questionModel->delete($question_id);
        $session = session();
        $session->setFlashData('success', 'Successful');
        return $this->response->redirect(site_url('questions'));
    }
}