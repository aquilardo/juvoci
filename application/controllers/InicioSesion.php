<?php
public function index() {
    $this->load->helper("form");
    $this->load->library("form_validation");

    $this->form_validation->set_rules("first", "First Name",
        "required");
    $this->form_validation->set_rules("last", "Last Name",
        "required");
    $this->form_validation->set_rules("email", "Email Address",
        "required|valid_email");

    if ($this->form_validation->run() == false) {
        $this->load->view("login_view");
    }
    else {
        $first = $_POST["first"];
        $last = $_POST["last"];
        $email = $_POST["email"];
        $data = array("first_name" => $first,
                      "last_name" => $last,
                      "email" => $email);

        $this->load->model("iniciosession_model");
        $this->sitepointform_model->insert_address($data);
        $this->load->view("formsuccess");
    }
}