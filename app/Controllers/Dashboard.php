<?php  namespace App\Controllers;
// use App\Models\TransactionModel;
use App\Models\QuestionModel;

class Dashboard extends BaseController
{
    public function index()
    {
        // $questionModel = new QuestionModel();
        // // bring back all data store in database
        // $data['questions'] = $questionModel->getForms();
        $questionModel = new QuestionModel();
        $data['questionsView'] = $questionModel->findAll();

        echo view('templates/header');
        return view('dashboard', $data);
        echo view('templates/footer');
    }
    public function edit($question_id = null)
    {
        $questionModel = new QuestionModel();//declare App/Models/UserModel if want to use this
        $data['question'] = $questionModel->where('question_id', $question_id)->first();
        return view('questions/edit', $data);

    }
}