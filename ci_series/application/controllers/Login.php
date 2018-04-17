<?php
class Login extends CI_Controller
{
    public function index()
    {
        $this->load->helper('form');
        $this->load->view('admin_login');

    }

    public function admin_login()
    {
        $this->load->library('form_validation');
        $this->form_validation->set_rules('enteremail', 'email', 'required|trim');
        $this->form_validation->set_rules('enterpassword', ' Password', 'required');

        if ($this->form_validation->run()) {

            //success
            $username= $this->input->post('enteremail');
            $password=$this->input->post('enterpassword');


           $this->load->model('loginmodel');

           // session for the user
            $login_id=$this->loginmodel->login_valid($username,$password);
            if($login_id){
                $this->load->library('session');
                $this->session->set_userdata('user_id','$login_id');
                $this->load->view('shopping_cart.php');

                //credential valid ,,, allow to login user.
            }

            else{
                echo "password do not matched";
            }
        } else {

            $this->load->view('admin_login');
            echo "unsuccess";
            // echo  validation_errors();

        }
    }
    }
?>