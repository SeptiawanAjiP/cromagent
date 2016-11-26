<?php
/**
* Agent model
*/
class Agent_model extends CI_Model {
	
	function __construct() {
		$this->load->database();
	}

	function confirm_login($id, $pass){
		$SQL = '
			SELECT nama
			FROM pegawai 
			WHERE id_pegawai = '. $id .' AND password = "'. $pass . '" AND kategori = "1"';

		$Q = $this->db->query($SQL);
		return $Q->result_array();
	}

	function new_shop(){
		//generate id
		$sqlID = "SELECT MAX(idWarung) AS newID FROM warung";
		$maxID = $this->db->query($sqlID);
		$maxIDarr = $maxID->result_array();
		
		//atribut yg akan disimpan
		$newID = $maxIDarr[0]['newID'] + 1;
		$idAgent = $this->session->userdata('idAgent');
		$npwp = $this->input->post('npwp');
		$pemilik = $this->input->post('namaPemilik');
		$noKTP = $this->input->post('noKTPwarung');
		$alamatPemilik = $this->input->post('alamatPemilik');
		$alamat = $this->input->post('alamatToko');
		$gpsData = $this->input->post('gpsData');
		$status = "";
		$kategori = $this->input->post('kategoriWarung');
		$tingkatKepuasan = "";
		$noTel = $this->input->post('noTelfonWarung');
		$noMobile = $this->input->post('noHpWarung');
		$tglAktifasi = "";
		$tglDeaktifasi = "";
		$namaWarung = $this->input->post('namaToko');

		//sql
		$data = array(
			'idWarung' => $newID,
			'idAgentPemegang' => $idAgent, 
			'npwp' => $npwp,
			'alamat_pemilik' => $alamatPemilik,
			'pemilik' => $pemilik,
			'no_ktp_pemilik' => $noKTP,
			'alamat' => $alamat,
			'gpsData' => $gpsData,
			'status' => '',
			'kategori' => $kategori,
			'tingkatKepuasan' => '',
			'noTel' => $noTel,
			'noMobile' => $noMobile,
			'tgl_aktivasi' => '',
			'tgl_deaktivasi' => '',
			'nama_warung' => $namaWarung
		);
		$maxID->free_result();
		$this->db->insert('warung',$data);
	}

	function list_shop($pg){
		if ($pg == 3) {
			# code...
			$SQL = 'SELECT 
					   DISTINCT w.idWarung,
					   w.no_ktp_pemilik AS noKtp, 
					   w.pemilik AS namaPemilik,
					   w.nama_warung AS namaWarung, 
					   w.tgl_aktivasi AS tglActivasi, 
					   w.tgl_deaktivasi AS tglDeactivasi, 
					   f.lastOrder AS lastOrder, 
					   f.lastProduck AS lastProduck
					FROM (SELECT *
					      FROM warung 
					      WHERE idAgentPemegang = '. $this->session->userdata('idAgent') .') w
					LEFT JOIN ((SELECT o.idWarung, o.lastOrder, b.lastProduck 
					           FROM (SELECT idWarung, MAX(waktuOrder) AS lastOrder 
					                 FROM orderlist 
					                 WHERE idAgentPemegang = '. $this->session->userdata('idAgent') .' 
					                 GROUP BY idWarung) o 
					           LEFT JOIN (SELECT idWarung, MAX(waktuOrder) AS lastProduck 
					                      		FROM belanjacustomer 
					                      		WHERE idAgentPemegang = '. $this->session->userdata('idAgent') .' 
					                      		GROUP BY idWarung) b 
					           ON o.idWarung = b.idWarung)
					           UNION ALL
					           (SELECT o.idWarung, o.lastOrder, b.lastProduck
					           FROM (SELECT idWarung, MAX(waktuOrder) AS lastOrder 
					                 FROM orderlist 
					                 WHERE idAgentPemegang = '. $this->session->userdata('idAgent') .' 
					                 GROUP BY idWarung) o 
					           RIGHT JOIN (SELECT idWarung, MAX(waktuOrder) AS lastProduck 
					                      		FROM belanjacustomer 
					                      		WHERE idAgentPemegang = '. $this->session->userdata('idAgent') .' 
					                      		GROUP BY idWarung) b 
					           ON o.idWarung = b.idWarung)) f
					ON w.idWarung = f.idWarung
					';

			$Q = $this->db->query($SQL);
			return $Q->result_array();
		}
		return null;
	}

	function new_customer(){
		$sqlID = "SELECT MAX(idCustomerWarung) AS newID FROM customerwarung";
		$maxID = $this->db->query($sqlID);
		$maxIDarr = $maxID->result_array();

		//astribute yang akan disimpan
		$newID = $maxIDarr[0]['newID'] + 1;
		//$idWarung = $this->input->post('idWarung');
		//dummy
		$idWarung = $this->input->post('idWarung');
		$idAgent = $this->session->userdata('idAgent');
		$noKTP = $this->input->post('noKTPCustomer');
		$noTel = $this->input->post('noTelCustomer');
		$nama = $this->input->post('namaCustomer');
		$warungPendaftar = $this->input->post('idWarung');
		$pekerjaan = $this->input->post('pekerjaanCustomer');
		$email = $this->input->post('emailCustomer');
		$rangeIncome = $this->input->post('rangeIncomeCustomer');
		$alamatAsli = $this->input->post('alamatAsliCustomer');
		$jumlahKeluarga = $this->input->post('jumlahKeluargaCustomer');

		//$this->load->library('agent', $config);
		$data = array(
			'idCustomerWarung' => $newID,
			'idWarung' => $idWarung, 
			'idAgentPemegang' => $idAgent,
			'noTel' => $noTel,
			'nama' => $nama,
			'warungPendaftar' => $warungPendaftar,
			'pekerjaan' => $pekerjaan,
			'email' => $email,
			'rangeIncome' => $rangeIncome,
			'noKTP' => $noKTP
		);
		$maxID->free_result();
		$this->db->insert('customerwarung',$data);
	}

	function get_idWarung(){
		$idAgent = $this->session->userdata('idAgent');
		$SQL ='
			 SELECT
				 idWarung
			 FROM
				 warung
			 WHERE
			 	 idAgentPemegang = '.$idAgent.'
			';
		$Q = $this->db->query($SQL);
		return $Q->result();
		$Q->free_result();
	}
}
?>
