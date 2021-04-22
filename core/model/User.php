<?php

namespace App\Model;

class User {

	private $id;

	private $name;

	private $password;

	private $data;

	private $status;

	public function setName($name) {
		$this->name=$name;
	}

	public function getName() {
		return $this->name;
	}
}