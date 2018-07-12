
<!DOCTYPE html>
<html lang="en">

<div id="navbar" class="navbar navbar-default">
  <?php $this->load->view('header') ?>
</div>

<div class="main-container" id="main-container">
	<script type="text/javascript">
		try{ace.settings.check('main-container' , 'fixed')}catch(e){}
	</script>
	<style type="text/css">
  .col-sm-12{
    padding-left: 0px;
    padding-right: 0px;
}
</style>
<style>
@media screen and (max-width: 650px) {
    table {
        width: 100%;
    }
    .dataTables_filter input[type=text], .dataTables_filter input[type=search] {
        width: 80px;
        height: 18px;
        
    }

    thead th.column-primary {
        width: 100%;
    }

    thead th:not(.column-primary) {
        display:none;
    }
    
    th[scope="row"] {
        vertical-align: top;
    }
    
    td {
        display: block;
        width: auto;
        text-align: right;
    }
    thead th::before {
        text-transform: uppercase;
        font-weight: bold;
        content: attr(data-header);
    }
    thead th:first-child span {
        display: none;
    }
    td::before {
        float: left;
        text-transform: uppercase;
        font-weight: bold;
        content: attr(data-header);
    }

    /*div#tabel-data-length.dataTables_length{
        display: inline-block;
        width: 10%;
        }*/
/*
    .col-sm-6{
        display: inline-block;
        width: 50%;
        }*/
    }
</style>

<div id="sidebar" class="sidebar responsive">
  <?php $this->load->view('sidebar') ?>
</div>

<div class="main-content">
    <div class="main-content-inner">
        <!-- Content -->

        <div class="main-content">
            <div class="main-content-inner">
                <div class="breadcrumbs" id="breadcrumbs">
                    <script type="text/javascript">
                        try{ace.settings.check('breadcrumbs' , 'fixed')}catch(e){}
                    </script>

                    <ul class="breadcrumb">
                        <li>
                            <i class="fa fa-home"></i>
                            <a href="<?php echo base_url() ?>C_admin">Home</a>
                        </li>
                    </ul><!-- /.breadcrumb -->
                </div>

                <div class="page-content">
                    <!-- /.ace-settings-container -->

                    <div class="row">
                        <div class="col-xs-12">
                            <!-- PAGE CONTENT BEGINS -->
                            <div class="page-header">
                                <h2>
                                    <?php 
                                    echo $title;
                                    ?>
                                    <small>
                                        <i class="ace-icon fa fa-angle-double-right"></i>
                                        <?php 
                                        echo $small;
                                        ?>
                                    </small>
                                </h2>
                            </div>
                            <!-- PAGE CONTENT ENDS -->
                        </div><!-- /.col -->
                    </div><!-- /.row -->
                    <div class="row">
                        
                        <div class="col-sm-12">
                           <a href="<?php echo base_url('C_admin/ebook_insert') ?>" class="btn btn-primary" style="margin-top: 25px;margin-left: 12px;width: 101px; margin-bottom: 10px; margin-top: 10px; border-radius: 5px;"><i class="fa fa-plus">.  Tambah</i></a>

                           
                           

                           <!-- akhit tabel -->

                           <table align="center" id="tabel-data" class="table table-striped bordered" width="100%" cellspacing="0">
                            <thead>
                                <tr style="text-align: center;font-size: 12px;">
                                    
                                    <th scope="col" rowspan="2"><b>No</b></th>
                                    <th scope="col" rowspan="2"><b>Kategori</b></th>
                                    <th scope="col" rowspan="2"><b>Judul Buku</b></th>
                                    <!-- <th>Abstrak</th> -->
                                    <!-- <th rowspan="2"><b>Nomor E-Book</b></th> -->
                                    <!-- <th rowspan="2"><b>Abstrak</b></th> -->
                                    <th scope="col" rowspan="2"><b>Penulis</b></th>
                                    <th scope="col" rowspan="2"><b>Isi Ebook</b></th>
                                    <th scope="col" rowspan="2"><b>Tanggal Publish</b></th>
                                    <th scope="row" colspan="4"><b><center>Aksi</center></b></th>
                                </tr>
                                <tr style="text-align: center;font-size: 12px;">
                                  <!-- <td><p ><b>Tambah</b></p></td> -->
                                  <th scope="row" ><p ><b><center>Ubah</center></b></p></th>
                                  <th scope="row" ><p ><b><center>Hapus</center></b></p></th>

                              </tr>
                          </thead>
                          <tbody>
                             <?php 
                             $no = 1;
                             foreach ($m_ebk->result_array() as $bk) { ?>
                                <tr style="font-size: 12px;">
                                    <td data-header="No"><?php echo $no++ ?></td>
                                    <td data-header="Kategori"><?php echo $bk['id_kategori'] ?></td>
                                    <td data-header="Judul Buku"><?php echo $bk['str_judul'] ?></td>
                                    <!-- <td><?php echo $bk['txt_abstract'] ?></td> -->
                                    <td data-header="Penulis"><?php echo $bk['str_penulis'] ?></td>
                                    <td data-header="Isi Buku"><?php echo $bk['file'] ?></td>
                                    <td data-header="Tanggal Publish"><?php echo $bk['dte_publish'] ?>  </td>
                                    <!-- <td><?php echo substr ($bk['file'],0,30) ?></td> -->

                                    <td data-title="Edit">

                                        <p style="text-align:center">
                                            <a href="<?php echo base_url();?>C_admin/ebook_update/<?php echo $bk['id_ebook'] ?>/<?php echo $bk['id_isiebook'] ?>"style="font-size: 12px;">
                                                
                                                <i class="fa fa-pencil-square-o" style="font-size:24px">
                                                    
                                                </i>
                                                <!-- Edit -->
                                                
                                                
                                            </a>
                                        </td>
                                        <td data-title="Hapus"><p style="text-align:center">
                                            <a href="<?php echo base_url();?>C_admin/KategoriDelete/<?php echo $bk['id_ebook'] ?>/<?php echo $bk['id_isiebook'] ?>" onclick="return confirm('Anda yakin mau menghapus item ini ?')"><i class="fa fa-trash" style="font-size:24px"></i></a>
                                        </td>
                                    </tr>
                                <?php } ?>
                            </tbody>
                        </table>
                    </div>

                    

                    

                </div>

                

                <div class="footer">
                  <?php $this->load->view('footer') ?>
              </div>
              <a href="#" id="btn-scroll-up" class="btn-scroll-up btn btn-sm btn-inverse">
                 <i class="ace-icon fa fa-angle-double-up icon-only bigger-110"></i>
             </a>
         </div>


     </body>
     </html>

