
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
        .row{
            padding-right: 40px;
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
                                <?php echo form_open_multipart('C_admin/save_insert_ebook');?>
                                <div class="planel panel-default" style="font-family: Candara;">

                                    <div class="panel-body">
                                            <div class="form-group">
                                                <div class="col-md-12" style="margin-left: 20px;padding-top:10px;">
                                                    <div class="form-group">
                                                        <label class="col-sm-2">Kategori</label>
                                                          <select name="str_nmprodi" class="col-sm-10" show-tick" style="margin-bottom: 20px;"  required="Kategori Wajib diisi">
                                                            <option class="col-sm-10">-Pilih Kategori Buku-</option>
                                                           <?php foreach($m_ktgr->result_array() as $a){ ?> 
                                                            <option class="col-sm-10" name="str_nmprodi" value="<?php echo $a['str_prodi']; ?>" ><?php echo $a['str_nmprodi']; ?>
                                                            </option>
                                                            <?php } ?>
                                                          </select> 
                                                    </div>
                                                    




                                                     <div class="form-group">
                                                        <label class="col-sm-2">Judul</label>
                                                        <input class="col-sm-10" cols="122" type="text" name="str_judul" style="margin-bottom: 20px;" required="Judul Wajib diisi" />
                                                    </div>

                                                     <div class="form-group">
                                                        <label class="col-sm-2">Abstrak</label>
                                                        <textarea class="col-sm-10" id="ckeditor" class="col-sm-12" type="text" cell="3" name="txt_abstract" style="margin-bottom: 20px;"  required="Abstrak Wajib diisi"/></textarea>
                                                    </div>

                                                    <div class="form-group">
                                                        <label class="col-sm-2">Penulis</label>
                                                        <input class="col-sm-10" cols="122" type="text" name="str_penulis" style="margin-bottom: 20px;"  required="Penulis Wajib diisi"/>
                                                    </div>

                                                    <div class="form-group">
                                                        <label class="col-sm-2">File Ebook</label>
                                                        <input class="col-sm-10"id="ckeditor" class="col-sm-12" type="file" cell="3" name="file" style="margin-bottom: 20px;"  required="File Wajib diisi"/></input>

                                                    </div>

                                                    <div class="form-group">
                                                        <label class="col-sm-2">Tanggal Publish</label>
                                                        <input class="col-sm-10" cols="122" type="date" name="dte_publish" style="margin-bottom: 20px;"  required="Tanggal Wajib diisi"/>
                                                    </div>

                                                    <div class="col-sm-12">
                                                        <div class="clearfix form-actions">
                                                            <div class="col-md-offset-3 col-md-9">
                                                                <button class="btn btn-info" type="Submit">
                                                                <i class="ace-icon fa fa-check bigger-110"></i>
                                                                    Submit
                                                                </button>

                                                                &nbsp; &nbsp; &nbsp;
                                                                <button class="btn" type="reset">
                                                                <i class="ace-icon fa fa-undo bigger-110"></i>
                                                                    Reset
                                                            </button>
                                                        </div>
                                                        </div>
                                                    </div>

                                                   <!--  <div style="padding-left: 20px;padding-top:10px" align="right">
                                                        <input type="Reset" name="batal" class="btn btn-warning" value="Reset">
                                                        <input style="margin-left: 1%;margin-right: 1.5%;" type="submit" name="simpan" class="btn btn-primary" value="Simpan">
                                                    </div>


 -->
                                                </div>

                                            </div>
                                        </div>
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

