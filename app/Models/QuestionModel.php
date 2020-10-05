<?php namespace App\Models;

use CodeIgniter\Model;

class QuestionModel extends Model
{
    protected $table      = 'forms';
    protected $primaryKey = 'question_id';
    protected $allowedFields = ['subject', 'types', 'question'];

    // get table item
    public function getList()
    {
        return $this->findAll();
    }
    // public function getQuestions($question_id = null){
    //     if($question_id){
    //         return $this->findAll();
    //     }
    //     return $this->asArray()
    //                 ->where(['question_id' => $question_id])
    //                 ->first();
    // } 

    public function getForEdit($question_id)
    {
        return $this->find($question_id);
    }
}