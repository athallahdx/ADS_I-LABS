<?php

class PraktikumPage extends Controller {
    public function index() {
        if(!Session::exists('user_id')){
            header('Location: ' . BASEURL . 'Login/index');
        }
        $this->view('PraktikumPage/index');
    }

}