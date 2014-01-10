<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Main extends CI_Controller {

    // An array of variables to be passed through to the view
    protected $data = array();

	public function __construct() {
		parent::__construct();

		$this->load->model('front/lead_model', 'leads');

		// Store iref if set in the query string
        if($this->input->get('iref')) {
            $this->session->set_userdata('iref', $this->input->get('iref'));
        } else {
        		$this->session->set_userdata('iref', 'iDRTV');
        }
	}

	public function index() {
		$this->load->view('front/index');
	}

  public function confirmation() {
		$fname = $this->input->post('first_name');
		$lname = $this->input->post('last_name');
		$data['name'] = $fname . ' ' . $lname;
		$email = $data['email'] = $this->input->post('email');
		$phone = $data['phone'] = $this->formatPhone($this->input->post('phone'));
		$address = $data['address'] = $this->input->post('address');
		$city = $data['city'] = $this->input->post('city');
		$state = $data['state'] = $this->input->post('state');
		$zip = $data['zip'] = $this->input->post('zip');
		$iref = $this->session->userdata('iref');
		$leadid = $data['leadid'] = $this->leads->submitInternal($fname, $lname, $email, $phone, $address, $city, $state, $zip, $iref);

		if ( $leadid !== FALSE ) {
			$this->leads->submitClient($fname, $lname, $email, $phone, $address, $city, $state, $zip, $leadid, $iref);
			$this->load->view('front/confirmation', $data);
		}
		else {
			$this->load->view('front/error');
		}

	}

	protected function formatPhone($phone) {
		$strip = array("(", ")", " ", "-");
		$numbers = str_replace($strip, "", $phone);
		$newphone = "(".substr($numbers, 0, 3).") ".substr($numbers, 3, 3)."-".substr($numbers,6);
		return $newphone;
	}

}