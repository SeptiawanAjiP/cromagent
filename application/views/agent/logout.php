<?php
	$this->session->unset_userdata('user');
	$this->session->unset_userdata('idAgent');
	session_destroy();
	header('Location: '.base_url().'index.php/agent');
?>