<?php namespace App\Models;

use CodeIgniter\Model;

class UserModel extends Model{
    protected $table = 'user_login';
    protected $allowedFields = ['username', 'password'];
    protected $beforeInsert = ['beforeInsert'];
    protected $beforeUpdate = ['beforeUpdate'];

    // everytime req user model to insert something in user_login database
    //before insert, it run this method if have any instruction
    protected function beforeInsert(array $data){
       // $data = $this->passwordHash($data);
        return $data;
    }

    // run once update something
    protected function beforeUpdate(array $data){
        //$data = $this->passwordHash($data);
        return $data;
    }

    protected function passwordHash(array $data){
        // return plain text to hash password into database
        if(isset($data['data']['password']))
        $data['data']['password'] =password_hash($data['data']['password'], PASSWORD_DEFAULT);
        return $data;//data return to user model will contain hash password 
        //password store in database in hash value not plain text
    }
}