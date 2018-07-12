
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
					<!-- /.ace-settings-container -->
					
					<div class="row">
						<div class="col-xs-12">

							<h3 class="header smaller lighter blue">Daftar Kategori Buku</h3>

							<div class="clearfix">
								<div class="pull-right tableTools-container">
									<div class="btn-group btn-overlap">
										<div class="ColVis btn-group" title="" data-original-title="Show/hide columns">

											<a href="<?php echo base_url() ?>C_admin/KategoriInsert">
												<button type="button" class="btn btn-info btn-lg">Tambah Data</button>
											</a>

											

										</div>
									</div>
								</div>
							</div>
							

							<!-- div.table-responsive -->

							<!-- div.dataTables_borderWrap -->
							
							<table align="center" id="tabel-data" class="table table-striped bordered" width="100%" cellspacing="0">
								<thead>
									<tr style="text-align: center;font-size: 12px;">

										<th scope="col" rowspan="2"><b>No</b></th>
										<th scope="col" rowspan="2"><b>Kode Kategori</b></th>
										<th scope="col" rowspan="2"><b>Nama Kategori</b></th>
										<!-- <th>Abstrak</th> -->
										<!-- <th rowspan="2"><b>Nomor E-Book</b></th> -->
										<!-- <th rowspan="2"><b>Abstrak</b></th> -->
										<th scope="col" rowspan="2"><b>Tanggal Input</b></th>
										<th scope="col" rowspan="2"><b>Status</b></th>
										
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
									foreach ($dt_kategori->result_array() as $row) { ?>
										<tr style="font-size: 12px;">
											<td data-header="No"><?php echo $no++ ?></td>
											<td data-header="Kategori"><?php echo $row['kode_ktgr'] ?></td>
											<td data-header="Nama Kategori"><?php echo $row['nama_ktgr'] ?></td>
											<td data-header="Penulis"><?php echo $row['tgl_input'] ?></td>
											<td data-header="Isi Buku">
												<?php  if ($row['status']==1) {
													echo "<span class='label label-sm label-success'>Aktif</span>";
												}else{
													echo "<span class='label label-sm label-danger'>Tidak Aktif</span>";
												}

												?>
												
											</td>

											<td data-title="Edit">

												<p style="text-align:center">
													<a href="<?php echo base_url();?>C_admin/KategoriEdit/<?php echo $row['id_ktgr'] ?>" style="font-size: 12px;">

														<i class="fa fa-pencil-square-o" style="font-size:24px">

														</i>
														<!-- Edit -->


													</a>
												</td>
												<td data-title="Hapus"><p style="text-align:center">
													<a href="<?php echo base_url();?>C_admin/KategoriDelete/<?php echo $row['id_ktgr'] ?>" onclick="return confirm('Anda yakin mau menghapus item ini ?')"><i class="fa fa-trash" style="font-size:24px"></i></a>
												</td>
											</tr>
										<?php } ?>
									</tbody>
								</table>
								<br>
								

							</div>

						</div><!-- /.page-content -->
					</div>
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
