<?php

namespace TDD;

class challenge {

	public $host = "localhost";
	public $name = "ajax";
	public $user = "root";
	public $pw = "";
	public $conn = '';

	public function connect() {
		$this->conn = @mysqli_connect($this->host,$this->user,$this->pw,$this->name);
	}

	public function delete() {
		$this->connect();

		$sql = "DELETE FROM example WHERE id =''";

		$res = $this->conn->query($sql);

		mysqli_close($this->conn);

		if($res) {
			return "success";
		} else {
			return "error";
		}
	}
}

?>