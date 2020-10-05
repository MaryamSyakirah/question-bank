<?php namespace App\Controllers;
use App\Models\UserModel;
class Users extends BaseController
{
	public function index()
	{

      
	
		//$this->load->view('login'); //ni ci punya code, cara nak panggil view dalam controller and sebab tu dlm route dia, xdek kita usik
	
        $data = [];
        helper(['form']);

        if($this->request->getMethod() == 'post'){
            // validation rules
            $rules = [
                'username' => 'required|min_length[3]|max_length[20]',
                'password' => 'required|min_length[2]|max_length[5]',
            ];

            $errors = [
                //can customize error message for validate user
                'password' => [
                    // validateUser in UserRules
                    'validateUser' => 'Username or Password don\'t match'
                ]
            ];
            if(!$this->validate($rules)){
                //if validation not success
                $data['validation'] = $this->validator;
            }else{
                $model = new UserModel();//declare App/Models/UserModel if want to use this
               $user = $model->where('username', $this->request->getVar('username'))
                             ->first();

                $this->setUserSession($user);
                return redirect()->to('questions');
            } 
        }
        echo view('templates/header', $data);
        echo view('login');
        echo view('templates/footer');
    }

    private function setUserSession($user){
        $data = [
            'id' => $user['id'],
            'username' => $user['username'],
            'isLoggedIn' => true,
        ];
        session()->set($data);
        return true;
    }
    
    public function register(){
        $data = [];
        helper(['form']);
        // if have post req n validation apply
        if($this->request->getMethod() == 'post'){
            // validation rules
            $rules = [
                'username' => 'required|min_length[3]|max_length[20]',
                'password' => 'required|min_length[2]|max_length[5]',
                'confirm_password' => 'matches[password]',
            ];
            if(!$this->validate($rules)){
                //if the form is not valid,
                //create variable to pass to the view
                $data['validation'] = $this->validator;
            }else{
                // store the user in the database
                // if validation success, create new usermodel
                $model = new UserModel();//declare App/Models/UserModel if want to use this
                //save data to new model
                $newData = [
                    'username' => $this->request->getVar('username'),
                    'password' => $this->request->getVar('password'),
                ];
                $model->save($newData);

                // success registration message
                $session = session();
                $session->setFlashData('success', 'Successful Registration');
                return redirect()->to('/');
            } 
        }
        echo view('templates/header', $data);
        echo view('register');
        echo view('templates/footer');
    }

    public function logout(){
        $session = session();
        session_destroy();
        return redirect()->to('/');
    }

	//--------------------------------------------------------------------

}