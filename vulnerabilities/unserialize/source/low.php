<?php

class ContactCard{

	function __construct(){
		$this->first_name = $_REQUEST['FName'];
		$this->last_name = $_REQUEST['LName'];
		$this->phone = $_REQUEST['Phone'];
	}
}

class DangerZone{
	private $data = 'Really important data to save to a file';
	private $filename = '/tmp/datafile';

	public function __destruct(){
		file_put_contents($this->filename, $this->data);
	}
}

if( isset($_COOKIE['contact'])){
	$html .= "Welcome back!</br>";
	$firstcontact = unserialize($_COOKIE["contact"]);
	$html .= $firstcontact->first_name." ".$firstcontact->last_name;
}

if( isset( $_POST[ 'Submit' ]  ) ) {
		$firstcontact = new ContactCard();
		$passfirstcontact = serialize($firstcontact);
		setcookie('contact',$passfirstcontact);
		$html = "Contact Info Updated: ".$firstcontact->first_name;
	};

?>
