<?php
	// Table model
class table_model extends CI_Model {
	//lebar tabel
	function table_width($pg){
		//initializ table full page
		$t_width = 'col-sm-12';
		switch ($pg) {
			case 1:
				//full page
				break;
			case 2:
				// 3/4 page
				$t_width = 'col-md-8';
				break;
			case 3:
				//half page
				$t_width = 'col-md-6';
				break;
			case 4:
				//3 variabel only
				$t_width = 'col-sm-4';
				break;
			case 5:
				//2 variabel only
				$t_width = 'col-md-3';
				break;
			default:
				# code...
				break;
		}

		return $t_width;
	}

	//variabel di tabel
	function table_variabel($pg){
		//initializ array
		$t_vari = array('example1', 'example2');
		switch ($pg) {
			case 1:
				//summary warung di dashboard
				$t_vari = array('ID Warung', 'Nama Warung', 'Total Sales', 'Total Order', 'Total Customer', 'Total Margin');
				break;
			case 2:
				//Top Produck di dashboard
				$t_vari = array('SKU Produk', 'Nama Warung', 'Total Sales', 'Total Order', 'Total Customer', 'Total Margin');
				break;
			case 3:
				//shop list
				$t_vari = array('Shop ID', 'Shop Name', 'Owner', 'Activated Date', 'Deactivated Date', 'Last Received Order', 'Last Sold Products');
				break;
			case 4:
				//
				$t_vari = array('SKU', 'Nama Produk', 'Sales');
				break;
			case 5:
				//
				$t_vari = array('SKU', 'Nama Produk', 'Quantity');
				break;
			case 6:
				//
				$t_vari = array('SKU', 'Nama Produk', 'Order');
				break;
			case 7:
				//
				$t_vari = array('Nama Customer', 'Purchase Qty', 'Purchase Price');
				break;
			case 8:
				//
				$t_vari = array('ID Customer', 'Nama Customer', 'Date');
				break;
			case 9:
				//top product in shop profile
				$t_vari = array('Item Code', 'Product Name', 'Sales');
				break;
			case 10:
				//daftar customer
				$t_vari = array('Customer ID', 'Customer Name', 'Shop Name', 'Registration Date', 'Last Purchase Date', 'Shopping Quantity', 'Total Purchase Price');
				break;
			case 11:
				//top product in customer profile
				$t_vari = array('Item Code', 'Product Name', 'Purchase Qty');
				break;
			case 12:
				//member card Management
				$t_vari = array('Customer ID', 'Customer Name', 'Shop Name', 'Registration Date', 'Last Print Member Card', 'Print Member Card');
				break;
			case 13:
				//Ticket list
				$t_vari = array('ID Ticket', 'Shop Name', 'Timestamps', 'Category', 'Title', 'Proggress', 'Status');
				break;
			case 14:
				//visit shop table in agent profile
				$t_vari = array('Shop ID', 'Shop Name', 'Owner', 'Last Visit Date');
				break;
			default:
				# code...
				break;
		}
		return $t_vari;
	}

	//table content (SQLnya)
	//catatan : urutan variabel harus sama dengan yang di fungsi table_variabel, klo gak sama viewnya nanti salah
	function table_content($pg){
		$SQL = '';
		switch ($pg) {
			case 1:
				//summary warung
				$SQL = '';
				break;
			case 2:
				//TOP produck
				$SQL = '';
				break;
			case 3:
				//Shop list : activated date dan deactivated date blm
				$SQL = 'SELECT 
						   DISTINCT w.id_warung AS idWarung,
						   w.pemilik AS namaPemilik,
						   w.nama_warung AS namaWarung, 
						   f.lastOrder AS lastOrder, 
						   f.lastProduck AS lastProduck
						FROM (SELECT *
						      FROM warung 
						      WHERE id_agen = '. $this->session->userdata('idAgent') .') w
						LEFT JOIN ((SELECT o.id_warung, o.lastOrder, b.lastProduck 
						           FROM (SELECT id_warung, MAX(waktu_order) AS lastOrder 
						                 FROM orderlist 
						                 WHERE id_agen = '. $this->session->userdata('idAgent') .' 
						                 GROUP BY id_warung) o 
						           LEFT JOIN (SELECT id_warung, MAX(waktu_order) AS lastProduck 
						                      FROM belanja 
						                      WHERE id_agen = '. $this->session->userdata('idAgent') .' 
						                      GROUP BY id_warung) b 
						           ON o.id_warung = b.id_warung)
						           UNION ALL
						           (SELECT o.id_warung, o.lastOrder, b.lastProduck
						           FROM (SELECT id_warung, MAX(waktu_order) AS lastOrder 
						                 FROM orderlist 
						                 WHERE id_agen = '. $this->session->userdata('idAgent') .' 
						                 GROUP BY id_warung) o 
						           RIGHT JOIN (SELECT id_warung, MAX(waktuOrder) AS lastProduck 
						                      		FROM belanja 
						                      		WHERE id_agen = '. $this->session->userdata('idAgent') .' 
						                      		GROUP BY id_warung) b 
						           ON o.id_warung = b.id_warung)) f
						ON w.id_warung = f.id_warung
						';
				break;
			case 4:
				//canceled order dan masih banyak lagi

				break;
			default:
				# code...
				break;
		}

		$Q = $this->db->query($SQL);
		return $Q->result_array();
	}
}
?>