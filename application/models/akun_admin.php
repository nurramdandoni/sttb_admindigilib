<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Akun_Admin extends CI_Model {

	
// Hena Sulaiman

	function m_KategoriList()
	{

		$q = $this->db->query("SELECT * FROM table_kategori_buku ORDER BY id_ktgr DESC");
		return $q;
	}
	
	function m_JumlahKategori()
	{
		$q = $this->db->query("SELECT * FROM table_kategori_buku")->num_rows();
		return $q;
	}
	function m_KategoriInsert($data)
	{
		$q = $this->db->insert('table_kategori_buku',$data);
		return $q;
	}

	function m_KategoriGetKd($kode_kategori, $nama_kategori)
	{
		$q = $this->db->query("SELECT * FROM table_kategori_buku WHERE kode_ktgr='$kode_kategori' OR nama_ktgr='$nama_kategori' ");
		return $q;
	}

	function m_KategoriSearch($nama_ktgr)
	{
		$q = $this->db->query("SELECT * FROM table_kategori_buku WHERE nama_ktgr LIKE '%".$this->db->escape_like_str($nama_ktgr)."%' ");
		return $q;
	}

	function m_KategoriGetId($id_ktgr)
	{
		$q = $this->db->query("SELECT * FROM table_kategori_buku WHERE id_ktgr = '$id_ktgr'");
		return $q;
	}


	function m_KategoriUpdate($id_ktgr,$data)
	{
		$this->db->where('id_ktgr',$id_ktgr);
		$this->db->update('table_kategori_buku',$data);
	}

	function m_KategoriDelete($id_ktgr)
	{
		$this->db->where('id_ktgr',$id_ktgr);
		$this->db->delete('table_kategori_buku');
	}


	public function m_inbox()
	{
		$q = $this->db->query("SELECT * FROM table_contactus");
		return $q;
	}

	public function m_inboxDetail($id)
	{
		$q = $this->db->query("SELECT * FROM table_contactus WHERE id='$id' ");
		return $q;
	}



// End 

	public function m_ebook()
	{
		$q=$this->db->query("SELECT * FROM table_ebook LEFT JOIN table_kategoriebook ON table_ebook.id_kategori=table_kategoriebook.id
													   LEFT JOIN table_isiebook ON table_ebook.id_ebook=table_isiebook.id_ebook ORDER BY table_isiebook.id_isiebook DESC");
		return $q;
	}
	public function m_kategori()
	{
		$q=$this->db->query("SELECT * FROM table_kategoriebook  ORDER by str_prodi");
		return $q;
	}


	public function m_ebook_insert($tabel,$data)
	{
		$hasil=$this->db->insert($tabel,$data);
		return $this->db->insert_id();
	}

	public function m_ebook_update($id_ebook,$id_isiebook)
	{
		$q=$this->db->query("SELECT * FROM table_ebook 
			LEFT JOIN table_kategoriebook ON table_kategoriebook.str_prodi=table_ebook.id_kategori 
			LEFT JOIN table_isiebook ON table_isiebook.id_ebook=table_ebook.id_ebook 
			WHERE table_isiebook.id_ebook ='$id_ebook' AND table_isiebook.id_isiebook='$id_isiebook' ");
		return $q;
	}

	public function m_save_updateebook($tabel,$id_ebook, $data){
		
		$q=$this->db->where('id_ebook',$id_ebook);
		$q=$this->db->update($tabel,$data);	
		return $q;
	}

	public function m_save_updateisiebook($id_isiebook,$data)
	{
		// $q = $this->db->query("UPDATE table_isiebook SET str_penulis='$str_penulis',  WHERE id_isiebook='$id_isiebook' ");
		// return $q;
		$this->db->where('id_isiebook',$id_isiebook);
		$this->db->update('table_isiebook',$data);
	}


	public function m_save_updatekategori($id,$tabel,$data){
		$this->db->where('id',$id);
		$this->db->update($tabel,$data);
	}

	public function m_kategori_insert($tabel,$data){
		$hasil=$this->db->insert($tabel,$data);
		return $hasil;
	}

	public function m_kategori_update($id){
		$q=$this->db->query('SELECT * FROM table_kategoriebook WHERE id='.$id.'');
		return $q;

	}

	public function m_ebook_delete($id_ebook){
		$q=$this->db->query('DELETE from table_ebook WHERE id_ebook = "'.$id_ebook.'" ');
		$q=$this->db->query('DELETE from table_isiebook WHERE id_ebook = "'.$id_ebook.'" ');
		return $q;
	}

	public function m_kategori_delete($id){
		$q=$this->db->query('DELETE FROM table_kategoriebook WHERE id='.$id.'');
		return $q;
	}

	public function delete_kategori($id_kategori){
		return $this->db->query('DELETE from table_kategoriebook WHERE id = "'.$id_kategori.'" ');
	}

	function getnmp($id){
		return $this->db->query('SELECT * FROM table_kategoriebook where str_prodi = "'.$id.'" ');
	}

	//Ebook//

	//Isi Ebook//
	public function m_file(){
		$q=$this->db->query('SELECT * FROM isi_ebook
			LEFT JOIN ebook ON ebook.str_judul=isi_ebook.str_judulisi WHERE isi_ebook.id_file = "'.$id_file.'" ');
		return $q;
	}

	public function m_file_insert($data)
	{
		$this->db->insert('isi_ebook',$data);
		return true;
	}

	function m_file_update($id)
	{
		$q=$this->db->query('SELECT * FROM isi_ebook WHERE id_file = "'.$id_file.'" ');
		return $q;
	}

	public function m_save_updatefile($id, $data){
		
		$this->db->where('id_file',$id_file);
		$this->db->update('isi_ebook',$data);	
	}

	public function m_file_delete($id){
		return $this->db->query('DELETE from isi_ebook WHERE id_file = "'.$id_file.'" ');
	}
	//Isi Ebook//

	// Verfifikasi akun registrasi
	public function m_verifikasi_akun($id,$data){
		$this->db->where('id_user',$id);
		$this->db->update('table_user',$data);
		redirect('C_admin');
	}
	

}

