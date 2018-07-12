<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_admin extends CI_Controller {


	function __construct()
	{
		parent::__construct();
		$this->load->helper(array('url','form','date'));

		$this->load->model(array('Model_Auth','Akun_Admin'));
    $this->load->library(array('form_validation','pagination','upload'));
    if (! $this->session->userdata('id_user')) {
     redirect('Auth');
   }

 }

 public function index()
 {
   
  $this->load->view('tamplate');
}
public function KategoriList()
{	
  $data['title'] = "List Kategori";
  // $jumlahKategori = $this->Akun_Admin->m_JumlahKategori();
// ----
  // $config['base_url']=base_url()."C_admin/KategoriList";
  // $config['total_rows']=$jumlahKategori;
  // $config['per_page']=10;
  // $form = $this->uri->segment(3);
  // $this->pagination->initialize($config);
// ----
  $data['dt_kategori'] = $this->Akun_Admin->m_KategoriList();
  // $data['paginator']   = $this->pagination->create_links();



  $this->load->view('master_admin/kategori',$data);
}

public function KategoriInsert()
{ 
  $data['title'] = "Tambah Kategori";
  $this->load->view('master_admin/kategori_insert',$data);
}


public function KategoriProsesInsert()
{ 
    // $data['title'] = "Tambah Kategori";

  $tgl =date('Y-m-d H:i:s');
  $this->form_validation->set_rules('kode_ktgr','Kode Kategori','required');
  $this->form_validation->set_rules('nama_ktgr','Nama Kategori','required');
  $this->form_validation->set_rules('status','status','required');

  if ($this->form_validation->run() !=false) {
    $kode_ktgr = $this->input->post('kode_ktgr');
    $nama_ktgr = $this->input->post('nama_ktgr');
    $status    = $this->input->post('status');


    $dt_ktgr = $this->Akun_Admin->m_KategoriGetKd($kode_ktgr,$nama_ktgr);
    if ($dt_ktgr->num_rows()>0) {
      ?>
      <script type="text/javascript">alert("Maaf Kode atau nama kategori Sudah Terdaftar")</script>

      <?php
      echo "<meta http-equiv='refresh' content='0; url=".base_url()."C_admin/KategoriInsert'> ";

    }else{

      $data = array('kode_ktgr' =>$kode_ktgr,
        'nama_ktgr' =>$nama_ktgr,
        'tgl_input' =>$tgl,
        'status'=>$status);
      $this->Akun_Admin->m_KategoriInsert($data);
      ?>
      <script type="text/javascript">alert("Kategori Berhasil Disimpan")</script>

      <?php
      echo "<meta http-equiv='refresh' content='0; url=".base_url()."C_admin/KategoriList'> ";

    }
  }else{
    $this->load->view('master_admin/kategori_insert');
  }
}

public function KategoriFind()
{
  $data['title'] = "Result Kategori";

  $nama_ktgr = $this->input->post('nama_ktgr');
  $data['dt_ktgr_result']=$this->Akun_Admin->m_KategoriSearch($nama_ktgr);
  $this->load->view('master_admin/kategori_find',$data);
}


public function KategoriEdit()
{
  $data['title'] = "Edit Kategori";
  $id_ktgr = $this->uri->segment(3);
  $data['dt_ktgr_result']=$this->Akun_Admin->m_KategoriGetId($id_ktgr)->row_array();
  $this->load->view('master_admin/kategori_edit',$data);
}


public function KategoriProsesUpdate()
{
  $tgl =date('Y-m-d H:i:s');
  $this->form_validation->set_rules('kode_ktgr','Kode Kategori','required');
  $this->form_validation->set_rules('nama_ktgr','Nama Kategori','required');
  $this->form_validation->set_rules('status','status','required');

  if ($this->form_validation->run() !=false) {
    $kode_ktgr = $this->input->post('kode_ktgr');
    $nama_ktgr = $this->input->post('nama_ktgr');
    $status    = $this->input->post('status');

    $id_ktgr  = $this->uri->segment(3);

    $data = array('kode_ktgr' =>$kode_ktgr,
      'nama_ktgr' =>$nama_ktgr,
      'tgl_input' =>$tgl,
      'status'=>$status);
    $this->Akun_Admin->m_KategoriUpdate($id_ktgr,$data);

    ?>
    <script type="text/javascript">alert("Kategori Berhasil Di Update")</script>

    <?php
    echo "<meta http-equiv='refresh' content='0; url=".base_url()."C_admin/KategoriList'> ";

  }else{
    $this->load->view('master_admin/KategoriEdit');
  }
}


public function KategoriDelete()
{
  $id_ktgr = $this->uri->segment(3);

  $this->Akun_Admin->m_KategoriDelete($id_ktgr);
  ?>
  <script type="text/javascript">alert("Kategori Berhasil Di Delete")</script>

  <?php
  echo "<meta http-equiv='refresh' content='0; url=".base_url()."C_admin/KategoriList'> ";
}

public function InboxPesan()
{

  $data['dt_inbox'] =$this->Akun_Admin->m_inbox();
  $this->load->view('master_admin/inbox',$data);
}

public function InboxDetail()
{
  $id = $this->uri->segment(3);
  $data['res_DetailInbox'] = $this->Akun_Admin->m_inboxDetail($id)->row_array();
  $this->load->view('master_admin/inboxDetail',$data);
}














// Doni
 // Ebook

public function dt_ebook()
{
  $data['id_ebook']=$this->session->userdata('id_ebook');
    $data['m_ebk']=$this->Akun_Admin->m_ebook();
    $data['title'] = "Data Buku";
    $data['small'] = "List Buku ";
    $this->load->view('master_admin/tb_data_ebook',$data);
}

public function ebook_insert()
  {
    $data['id_ebook'] = $this->session->userdata('id_ebook');
    $data['id_kategori'] = $this->session->userdata('id_kategori');
    $data['str_judul'] = $this->session->userdata('str_judul');
    $data['str_penulis'] = $this->session->userdata('str_penulis');
    $data['isi_ebook'] = $this->session->userdata('isi_ebook');
    $data['dte_publish'] = $this->session->userdata('dte_publish');
    $data['m_ebk']=$this->Akun_Admin->m_ebook();
    $data['m_ktgr']=$this->Akun_Admin->m_kategori();
    $data['title'] = "Data Buku";
    $data['small'] = "Tambah Buku ";
    $this->load->view('master_admin/input_ebook',$data);
  }


    public function save_insert_ebook()
  {
    
    $id_kategori = $this->input->post('str_nmprodi');
    $str_judul = $this->input->post('str_judul');
    $str_abstract = $this->input->post('txt_abstract');
    $str_penulis = $this->input->post('str_penulis');
    $file = $_FILES['file']['name'];
    $dte_publish = $this->input->post('dte_publish');
   

    $data = array (
        'id_kategori' => $id_kategori,
        'str_judul' => $str_judul,
        'txt_abstract' => $str_abstract,
        'dte_publish' => $dte_publish
      );
      $utama=$this->Akun_Admin->m_ebook_insert('table_ebook',$data);
      $data1 = array (
        'id_ebook' => $utama,
        'file' => $file,
        'str_penulis' => $str_penulis
      );
      $this->aksi_upload();
      $query=$this->Akun_Admin->m_ebook_insert('table_isiebook',$data1);

      

 

     // $this->session->set_flashdata('notif','<div class="alert alert-success" role="alert"> Data Berhasil ditambahkan <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');
      redirect('c_admin/dt_ebook',$data);
  }



 public function ebook_update()
  {
    $id_ebook=$this->uri->segment(3);
    $id_isiebook=$this->uri->segment(4);
    $data['id_ebook'] = $this->session->userdata('id_ebook');
    $data['id_kategori'] = $this->session->userdata('id_kategori');
    $data['str_judul'] = $this->session->userdata('str_judul');
    $data['str_penulis'] = $this->session->userdata('str_penulis');
    $data['isi_ebook'] = $this->session->userdata('isi_ebook');
    $data['dte_publish'] = $this->session->userdata('dte_publish');
    $data['m_upt_ebk']=$this->Akun_Admin->m_ebook_update($id_ebook,$id_isiebook);
    $data['m_ktgr']=$this->Akun_Admin->m_kategori();
    $data['title'] = "Data Buku";
    $data['small'] = "Edit Buku ";
    $this->load->view('master_admin/update_ebook',$data);
  }
function save_update_ebook()
  {
    $id_ebook=$this->uri->segment(3);
    $id_isiebook=$this->uri->segment(4);
    $id_kategori = $this->input->post('str_nmprodi');
    $str_judul = $this->input->post('str_judul');
    $str_abstract = $this->input->post('txt_abstract');
    $str_penulis = $this->input->post('str_penulis');
    $file = $_FILES['file']['name'];
    $nama_file = $this->input->post('nama_file');
    $dte_publish = $this->input->post('dte_publish');
   

    $data = array (
        'id_kategori' => $id_kategori,
        'str_judul' => $str_judul,
        'txt_abstract' => $str_abstract,
        'dte_publish' => $dte_publish
      );
      $this->Akun_Admin->m_save_updateebook('table_ebook',$id_ebook,$data);
          // if (!empty($file)) {
          //   $data1 = array (
          //         'file' => $file,
          //         'str_penulis' => $str_penulis
          //       );
          //   $this->Akun_Admin->m_save_updateisiebook('table_isiebook',$id_isiebook,$data1);
          //   $this->aksi_upload();
          // }else{
          //   $data2 = array (
          //         'str_penulis' => $str_penulis
          //       );
          //   $this->Akun_Admin->m_save_updateisiebook('table_isiebook',$id_isiebook,$data2);
          // }
        $config['upload_path']          = realpath('ebook');
        $config['allowed_types']        = 'txt|pdf';
        $config['max_size']             = 1024;


        $this->load->library('upload', $config);
        $this->upload->initialize($config);

          if ( ! $this->upload->do_upload('file')){
               //$error = array('error' => $this->upload->display_errors());
               // print $error['error'];
            $data1 = array (
                  'id_isiebook'=>$id_isiebook,
                  'file' => $nama_file,
                  'str_penulis' => $str_penulis
                );


            $this->Akun_Admin->m_save_updateisiebook($id_isiebook,$data1);
             print "<script>alert('Data Ebook berhasil Di Update!');
                javascript:history.go(-1);</script>";
              }else{
            
               $data2 = array (
                  'id_isiebook'=>$id_isiebook,
                  'file' => $file,
                  'str_penulis' => $str_penulis
                );


            $this->Akun_Admin->m_save_updateisiebook($id_isiebook,$data2);
             print "<script>alert('Data Ebook berhasil Di Update!');
                javascript:history.go(-1);</script>";
    

               }


      redirect('c_admin/dt_ebook',$data);
  }
  
  function delete_ebook()
  {

    $id_ebook=$this->uri->segment(3);
    $id_isiebook=$this->uri->segment(4);
    $data['id_ebook'] = $this->session->userdata('id_ebook');
    $data['id_kategori'] = $this->session->userdata('id_kategori');
    $data['str_judul'] = $this->session->userdata('str_judul');
    $data['str_penulis'] = $this->session->userdata('str_penulis');
    $data['isi_ebook'] = $this->session->userdata('isi_ebook');
    $data['dte_publish'] = $this->session->userdata('dte_publish');
    $data['m_ebk_delete']=$this->Akun_Admin->m_ebook_delete($id_ebook,$id_isiebook);
     print "<script>alert('Data berhasil Dihapus!');
                javascript:history.go(-1);</script>";
                exit(); 
  }

  // Ebook

  //Kategori

public function dt_kategori()
  {
    $data['id']=$this->session->userdata('id');
    $data['str_prodi']=$this->session->userdata('str_prodi');
    $data['str_nmprodi']=$this->session->userdata('str_nmprodi');
    $data['m_ktgr']=$this->Akun_Admin->m_kategori();
    $data['title'] = "Data Kategori";
    $data['small'] = "List Kategori ";
    $this->load->view('master_admin/tb_data_kategori',$data);
  }
  // Ebook
  public function kategori_insert()
  {
    $data['id']=$this->session->userdata('id');
    $data['str_prodi']=$this->session->userdata('str_prodi');
    $data['str_nmprodi']=$this->session->userdata('str_nmprodi');
    $data['m_ktgr']=$this->Akun_Admin->m_kategori();
    $data['title'] = "Data Kategori";
    $data['small'] = "Tambah Kategori ";
    $this->load->view('master_admin/input_kategori',$data);
  }

  public function save_insert_kategori()
  {
    // $id = $this->input->post('id');
    $str_prodi = $this->input->post('str_prodi');
    $str_nmprodi = $this->input->post('str_nmprodi');

    $data = array (
        
        'str_prodi' => $str_prodi,
        'str_nmprodi' => $str_nmprodi
      );
      $this->Akun_Admin->m_kategori_insert('table_kategoriebook',$data);
      redirect('c_admin/dt_kategori',$data);
    }

  public function kategori_update()
  {
    $id=$this->uri->segment(3);
    $data['id']=$this->session->userdata('id');
    $data['str_prodi']=$this->session->userdata('str_prodi');
    $data['str_nmprodi']=$this->session->userdata('str_nmprodi');
    $data['m_ktgr_update']=$this->Akun_Admin->m_kategori_update($id);
    $data['title'] = "Data Kategori";
    $data['small'] = "Edit Kategori ";
    $this->load->view('master_admin/update_kategori',$data);
  }
  
  public function save_update_kategori(){
    $id = $this->uri->segment(3);
    $str_prodi = $this->input->post('str_prodi');
    $str_nmprodi = $this->input->post('str_nmprodi');

    $data = array (
        'str_prodi' => $str_prodi,
        'str_nmprodi' => $str_nmprodi
      );
      $this->Akun_Admin->m_save_updatekategori($id,'table_kategoriebook',$data);
      redirect('c_admin/dt_kategori',$data);
    }
  
   function delete_kategori()
  {
    $id=$this->uri->segment(3);
    $data['id']=$this->session->userdata('id');
    $data['str_prodi']=$this->session->userdata('str_prodi');
    $data['str_nmprodi']=$this->session->userdata('str_nmprodi');
    $data['m_ktgr_delete']=$this->Akun_Admin->m_kategori_delete($id);
     print "<script>alert('Data berhasil Dihapus!');
                javascript:history.go(-1);</script>";
                exit(); 
  }

  function form_input_ebook()
  {
    $data['id_ebook'] = $this->session->userdata('id_ebook');
    $data['id_kategori'] = $this->session->userdata('id_kategori');
    $data['str_judul'] = $this->session->userdata('str_judul');
    $data['str_penulis'] = $this->session->userdata('str_penulis');
    $data['isi_ebook'] = $this->session->userdata('isi_ebook');
    $data['dte_publish'] = $this->session->userdata('dte_publish');
    $data['m_ebk']=$this->Akun_Admin->m_ebook();
    $this->load->view('master_admin/input_ebook');
  }


  function aksi_upload(){
  $config['upload_path']          =realpath('ebook');
  $config['allowed_types']        = 'txt|pdf';
  $config['max_size']             = 1024;


  $this->load->library('upload', $config);
  $this->upload->initialize($config);

  if ( ! $this->upload->do_upload('file')){
    $error = array('error' => $this->upload->display_errors());
    print $error['error'];
  }else{
   print "<script>alert('Data Ebook berhasil Diupload!');
                javascript:history.go(-1);</script>";
              
    

  }
}
















}
