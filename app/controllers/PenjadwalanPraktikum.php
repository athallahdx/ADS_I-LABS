<?php

class PenjadwalanPraktikum extends Controller {
    public function index() {
        if(!Session::exists('user_id')){
            header('Location: ' . BASEURL . 'Login/index');
        }
        $this->view('PenjadwalanPraktikum/index');
    }

}