<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Lead_model extends CI_Model {

	var $leadid = '';

	function __construct()
    {
        // Call the Model constructor
        parent::__construct();

        date_default_timezone_set('America/New_York');
    }

	public function submitClient($fname, $lname, $email, $phone, $address, $city, $state, $zip, $leadid, $iref) {

		$today = date("Y-m-d");

		$data = array(
		   'ht_date' => $today,
		   'fname' => $fname,
		   'lname' => $lname,
		   'email' => $email,
		   'phone' => $phone,
		   'address1' => $address,
		   'city' => $city,
		   'state' => $state,
		   'zipcode' => $zip,
		   'ht_leadid' => $leadid,
		   'iref' => $iref
		);

		if ($data !== FALSE) {
			try {

				$this->secondDB = $this->load->database('second', TRUE);

				$this->secondDB->insert('ht_form', $data);

				$this->secondDB->close();

				return TRUE;
			}
			catch(Exception $e) {
				 return FALSE;
			}
		}
		else
        {
            return FALSE;
        }

	}

	public function submitInternal($fname, $lname, $email, $phone, $address, $city, $state, $zip, $iref) {

		$today = date("Y-m-d");

		$data = array(
		   'date' => $today,
		   'fname' => $fname,
		   'lname' => $lname,
		   'email' => $email,
		   'phone' => $phone,
		   'address1' => $address,
		   'city' => $city,
		   'state' => $state,
		   'zipcode' => $zip,
		   'iref' => $iref
		);

		if ($data !== FALSE) {
			try {
				$this->load->database();

				$this->db->insert('leads', $data);
				$insert_id = $this->db->insert_id();

				return $insert_id;
			}
			catch(Exception $e) {
				return FALSE;
			}
		}
		else
        {
            return FALSE;
        }

	}

}