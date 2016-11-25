<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Notif_Model extends CI_Model {

	public function getNotifUnread($id_agent){
		$this->db->select('id_notif,judul_notif,isi_notif');
		$this->db->from('notif_agent_admin');
		$this->db->where('id_agent',$id_agent);
		$this->db->where('status','unread');
		$query = $this->db->get();
		return $query;
	}

	public function setRead($id_notif,$data){
		$table ='notif_agent_admin';
		$this->db->where('id_notif',$id_notif);
		$this->db->update($table,$data);
	}
}