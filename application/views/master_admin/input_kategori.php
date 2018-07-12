
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
                              <form  method="post" action="<?php echo base_url()?>C_admin/save_insert_kategori">
                                <div class="planel panel-default" style="font-family: Candara;">

                                    <div class="panel-body">
                                            <div class="form-group">
                                                <div class="col-md-12" style="margin-left: 20px;padding-top:10px;">
                                                  

                                                     <div class="form-group">
                                                        <label class="col-sm-2">Kategori</label>
                                                        <input class="col-sm-10" cols="122" type="text" name="str_prodi" style="margin-bottom: 20px;" required="Judul Wajib diisi" />
                                                    </div>

                                                    <div class="form-group">
                                                        <label class="col-sm-2">Nama Kategori</label>
                                                        <input class="col-sm-10" cols="122" type="text" name="str_nmprodi" style="margin-bottom: 20px;" required="Judul Wajib diisi" />
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
                                                   
                                                    <!-- <div style="padding-left: 20px;padding-top:10px" align="right">
                                                        <input type="submit" name="batal" class="btn btn-warning" value="Kembali">
                                                        <input style="margin-left: 1%;margin-right: 1.5%;" type="Submit" name="simpan" class="btn btn-primary" value="Simpan">
                                                    </div> -->

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </form>
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

