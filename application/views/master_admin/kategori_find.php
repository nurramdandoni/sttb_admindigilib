
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
									<div class="table-header">
										Results for "Latest Registered Domains"
									</div>

									<!-- div.table-responsive -->

									<!-- div.dataTables_borderWrap -->
									<div>
										<div id="dynamic-table_wrapper" class="dataTables_wrapper form-inline no-footer">
											<div class="row">
												<div class="col-xs-12">
													<div id="dynamic-table_filter" class="dataTables_filter">
														<label>
															<form action="<?php echo base_url() ?>C_admin/KategoriFind" method="POST">
																<input type="text" class="form-control input-sm" placeholder="Nama Kategori" aria-controls="dynamic-table" style="height: 23px;" name="nama_ktgr">
																<button type="submit" class="btn btn-info btn-sm">
																	<i class="ace-icon fa fa-search bigger-110"></i>Search
																</button>
															</form>

														</label>
													</div>
												</div>
											</div>


											<table id="dynamic-table" class="table table-striped table-bordered table-hover dataTable no-footer DTTT_selectable" role="grid" aria-describedby="dynamic-table_info">
												<thead>

													<th class="sorting" tabindex="0" aria-controls="dynamic-table" rowspan="1" colspan="1" aria-label="Domain: activate to sort column ascending">Kode Kategori</th>
													<th class="sorting" tabindex="0" aria-controls="dynamic-table" rowspan="1" colspan="1" aria-label="Price: activate to sort column ascending">Nama Kategori</th>
													<th class="sorting" tabindex="0" aria-controls="dynamic-table" rowspan="1" colspan="1" aria-label="

													Update
													: activate to sort column ascending">
													<i class="ace-icon fa fa-clock-o bigger-110 hidden-480"></i>
													Tanggal Update
												</th>
												<th class="hidden-480 sorting" tabindex="0" aria-controls="dynamic-table" rowspan="1" colspan="1" aria-label="Status: activate to sort column ascending">Status</th>
												<th class="sorting_disabled" rowspan="1" colspan="1" aria-label="">Aksi</th>
											</tr>

										</thead>

										<tbody>
											<?php 
												if ($dt_ktgr_result->num_rows()>0) {
													

												foreach ($dt_ktgr_result->result_array() as $row) {



												?>
												<tr role="row" class="even">

													<td><?php echo $row['kode_ktgr'] ?></td>
													<td class="hidden-480"><?php echo $row['nama_ktgr'] ?></td>
													<td><?php echo $row['tgl_input'] ?></td>
													<td class="hidden-480">
														<?php
														if ($row['status']==0) {
															?>
															<span class="label label-sm label-danger">Tidak Aktif</span>
															<?php


														}else{
															?>
															<span class="label label-sm label-success">Aktif</span>
															<?php
														}

														?>


													</td>
													<td>
														<div class="hidden-sm hidden-xs action-buttons">

															<a class="green" href="<?php echo base_url() ?>C_admin/KategoriEdit/<?php echo $row['id_ktgr'] ?>">
																<span class="fa fa-pencil bigger-130"></>
																</a>

																<a class="red" onclick="return confirm('Delete Data ?')" href="<?php echo base_url() ?>C_admin/KategoriDelete/<?php echo $row['id_ktgr'] ?>">
																	<i class="ace-icon fa fa-trash-o bigger-130"></i>
																</a>
															</div>

															<div class="hidden-md hidden-lg">
																<div class="inline pos-rel">
																	<button class="btn btn-minier btn-yellow dropdown-toggle" data-toggle="dropdown" data-position="auto">
																		<i class="ace-icon fa fa-caret-down icon-only bigger-120"></i>
																	</button>

																	<ul class="dropdown-menu dropdown-only-icon dropdown-yellow dropdown-menu-right dropdown-caret dropdown-close">
																		<li>
																			<a href="#" class="tooltip-info" data-rel="tooltip" title="" data-original-title="View">
																				<span class="blue">
																					<i class="ace-icon fa fa-search-plus bigger-120"></i>
																				</span>
																			</a>
																		</li>

																		<li>
																			<a href="" class="tooltip-success" data-rel="tooltip" title="" data-original-title="Edit">
																				<span class="green">
																					<i class="ace-icon fa fa-pencil-square-o bigger-120"></i>
																				</span>
																			</a>
																		</li>

																		<li>
																			<a href="#" class="tooltip-error" data-rel="tooltip" title="" data-original-title="Delete">
																				<span class="red">
																					<i class="ace-icon fa fa-trash-o bigger-120"></i>
																				</span>
																			</a>
																		</li>
																	</ul>
																</div>
															</div>
														</td>
													</tr>

												<?php }?>

												
												<?php
												}else{
													?>	
														<tr>
															<td colspan="5">Data Tidak Ada Disistem</td>
															
														</tr>
													<?php
													}



													?>



												
											</tbody>
										</table><br>
										<center>
										</center>

									</div>
								</div>
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
