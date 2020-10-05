<?php namespace App\Models;

use CodeIgniter\Model;

class FormModel extends Model{
    protected $table = 'forms';
   //protected $allowedFields = ['subject', 'types', 'question'];

    public function getForms($question = null){
        if(!$question){
            return $this->findAll();
        }
        return $this->asArray()
                    ->where(['question' => $question])
                    ->first();
    }
}