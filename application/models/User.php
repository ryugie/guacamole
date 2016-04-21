<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Model {

	public function registerUser($userdata) {
		$sql = "INSERT INTO users (first_name, last_name, email, password) VALUES (?, ?, ?, ?)";
		$params = [
			$userData['firstName'],
			$userData['lastName'],
			$userData['email'],
			$userData['password']
		];

		$this->db->query($sql, $params);
	}

}