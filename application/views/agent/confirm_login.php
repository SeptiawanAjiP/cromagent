<?php
	if($user[0]['nama'] != NULL) {
		$this->session->set_userdata('idAgent', $idAgent);
		$this->session->set_userdata('user', $user[0]['nama']);
		header('Location: '.base_url().'index.php/agent/agent_web');
	} else {
		$this->session->set_userdata('error', 'Maaf ID atau Password anda salah');
	 	header('Location: '.base_url().'index.php/agent');
	}
?>