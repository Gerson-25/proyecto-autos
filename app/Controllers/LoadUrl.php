<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Css_js_load extends BaseController {

function __construct() {
parent::__construct();

$this->load->helper('http://localhost:8080/');
}

public function index() {

$this->load->view('welcome_message');
}
}
?>