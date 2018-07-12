
<!DOCTYPE html>
<html lang="en">

<div id="navbar" class="navbar navbar-default">
	<!-- Header start -->
	<?php $this->load->view('header') ?>

	
</div>
<!--  header end-->

<!-- body start -->
<body class="no-skin">


	<div class="main-container" id="main-container">
		<script type="text/javascript">
			try{ace.settings.check('main-container' , 'fixed')}catch(e){}
		</script>

		<div id="sidebar" class="sidebar responsive">
			<!-- Sidebar -->
			<?php $this->load->view('sidebar') ?>

			<!--  -->
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
									<i class="ace-icon fa fa-home home-icon"></i>
									<a href="<?php echo base_url() ?>C_admin">Home</a>
								</li>

								<!-- <li class="active">Blank Page</li> -->
							</ul><!-- /.breadcrumb -->

							<div class="nav-search" id="nav-search">
								<form class="form-search">
									<span class="input-icon">
										<input type="text" placeholder="Search ..." class="nav-search-input" id="nav-search-input" autocomplete="off">
										<i class="ace-icon fa fa-search nav-search-icon"></i>
									</span>
								</form>
							</div><!-- /.nav-search -->
						</div>

						<div class="page-content">
							<!-- page-content  -->
							<div class="page-header">
								<h1>
									Edit Kategori
									<small>
										<i class="ace-icon fa fa-angle-double-right"></i>
										Isi Data Dengan Lengkap
									</small>
								</h1>
							</div>
							<?php  echo validation_errors(); ?>
							<form class="form-horizontal" role="form" action="<?php echo base_url() ?>C_admin/KategoriProsesUpdate/<?php echo $dt_ktgr_result['id_ktgr'] ?>" method="POST">
								<div class="form-group">
									<label class="col-sm-1 control-label no-padding-right" for="form-field-1" style="width: auto;" > Kode Kategori </label>
									

									<div class="col-sm-9">

										<input type="text" id="form-field-1" placeholder="Kode Kategori" name="kode_ktgr" value="<?php echo $dt_ktgr_result['kode_ktgr'] ?>" class="form-control" readonly="true">
									</div>
								</div>
								<div class="form-group">
									<label class="col-sm-1 control-label no-padding-right " for="form-field-1"  style="width: auto;" > Nama Kategori </label>
									
									<div class="col-sm-9">
										<input type="text" id="form-field-1" placeholder="Nama Kategori" name="nama_ktgr" value="<?php echo $dt_ktgr_result['nama_ktgr'] ?>" class="radius form-control ">
									</div>
								</div>
								<div class="form-group">
									
									<label class="col-sm-1 control-label no-padding-right" for="form-field-1" style="width: auto;" > Status Kategori </label>

									<div class="col-sm-9">
										<select class="form-control" name="status" >

												<option value="">-Pilih Kategori</option>
												<option value="1" <?php if ($dt_ktgr_result['status']==1) {
													echo "selected='true' ";
												} ?>>Aktif</option>
												<option value="0"  <?php if ($dt_ktgr_result['status']==0) {
													echo "selected='true' ";
												} ?>>Tidak Aktif</option>
										
											
										</select>
									</div>
								</div>

								<div class="clearfix form-actions">
									<div class="col-md-offset-3 col-md-9">
										<button class="btn btn-info" type="submit">
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

							</form>
							




						</div><!-- /.page-content -->

					</div>
				</div>
				<!-- Content -->
			</div>
		</div><!-- /.main-content -->

		<div class="footer">
			<?php $this->load->view('footer') ?>
		</div>

		<a href="#" id="btn-scroll-up" class="btn-scroll-up btn btn-sm btn-inverse">
			<i class="ace-icon fa fa-angle-double-up icon-only bigger-110"></i>
		</a>
	</div><!-- /.main-container -->
</body>

<!-- body end -->
</html>
