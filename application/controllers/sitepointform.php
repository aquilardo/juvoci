<?php
class Sitepointform extends CI_Controller
{
    public function index() {
        // Load the Form helper which provides methods to assist
        // working with forms.
        $this->load->helper("form");
        // Load the form validation classes
        $this->load->library("form_validation");

        // As you have loaded the validation classes, you can now
        // apply rules to the fields you want validated. The
        // functions below take three arguments:
        //     1. The name of form field
        //     2. The human name of the field to be displayed in
        //        the event of an error
        //     3. The names of the validation rules to apply
        $this->form_validation->set_rules("first", "First Name",
            "required");
        $this->form_validation->set_rules("last", "Last Name",
            "required");
        $this->form_validation->set_rules("email", "Email Address",
            "required|valid_email");

        // Check whether the form validates. If not, present the
        // form view otherwise present the success view.
        if ($this->form_validation->run() == false) {
            $this->load->view("sitepointform_view");
        }
        else {
            $this->load->view("formsuccess");
        }
    }
}