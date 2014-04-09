<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Lead_model extends MY_Model {

	protected $return_type = 'array';

	public function insert($lead) {

		// Insert into local db
		$lead['date'] = date("Y-m-d");
		$result = $this->db->insert('leads', $lead);
		$lead_id = $this->db->insert_id();

		// Insert into remote db
		if($result) {

			// Update lead array to match required structure/naming of remote db
			$lead['ht_leadid'] = $lead_id;
			$lead['ht_date'] = $lead['date'];
			unset($lead['date']);  // Remote db does not have a date column

			// UNCOMMENT BEFORE PUSHING CODE
			$remote_db = $this->load->database('remote', TRUE);
			$result  = $remote_db->insert('ht_form', $lead);
			$ht_id = $remote_db->insert_id();

			// FOR TESTING LOCALLY ONLY...REMOVE BEFORE PUSHING CODE
			//$result = $this->db->insert('ht_form', $lead);
			//$ht_id = $this->db->insert_id();

			// Lets update our local record with remote ht_id
			$this->db->where('id', $lead_id);
			$this->db->update('leads', array('ht_id' => $ht_id));

			return $lead_id;

		} else {

			return false;

		}

	}

	public function update($lead_id, $update) {

		// Update into local db
		$this->db->where('id', $lead_id);
		$this->db->update('leads', $update);

		// Lets pull up the ht_id from the lead record
		$lead = $this->get($lead_id);

		// UNCOMMENT BEFORE PUSHING CODE
		// Update remote db
		$remote_db = $this->load->database('remote', TRUE);
		$remote_db->where('ht_id', $lead['ht_id']);
		$result = $remote_db->update('ht_form', $update);

		// FOR TESTING LOCALLY ONLY...REMOVE BEFORE PUSHING CODE
		// Update ht_form on local
		//$this->db->where('ht_id', $lead['ht_id']);
		//$this->db->update('ht_form', $update);

	}

}