<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Main extends CI_Controller {

  // An array of variables to be passed through to the view
  protected $data = array();

	public function __construct() {
		parent::__construct();

	}

	public function index() {
    // Store iref if set in the query string
    if($this->input->get('iref')) {
         $this->session->set_userdata('iref', $this->input->get('iref'));
     } else if ($this->input->get('src')) { $this->session->set_userdata('iref', $this->input->get('src'));
      } else {
         $this->session->set_userdata('iref', 'iDRTV');
     }

    $this->load->view('front/index');
	}

  public function confirmation() {
		$data['lead'] = array(
			'fname' => $this->input->post('fname'),
			'lname' => $this->input->post('lname'),
			'email' => $this->input->post('email'),
			'phone' => formatPhone($this->input->post('phone')),
			'zipcode' => $this->input->post('zip'),
			'iref' =>  $this->session->userdata('iref')
		);

		$data['leadid'] = $this->lead_model->insert($data['lead']);

		if($data['leadid']) {
			$this->load->view('front/confirmation', $data);
		} else {
			$this->load->view('front/error');
		}
	}


  public function update_lead() {

    $lead_update = array(
      'address1' => $this->input->post('address1'),
      'address2' => $this->input->post('address2'),
      'city' => $this->input->post('city'),
      'state' => $this->input->post('state'),
      'zipcode' => $this->input->post('zipcode'),
      'comments' => 'send_brochure'
    );

    $this->lead_model->update($this->input->post('lead_id'), $lead_update);

    $this->load->view('front/confirmation2');

  }
}