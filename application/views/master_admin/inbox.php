
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

					<div class="tabbable">
						<ul id="inbox-tabs" class="inbox-tabs nav nav-tabs padding-16 tab-size-bigger tab-space-1">


							<li class="active">
								<a data-toggle="tab" href="#inbox" data-target="inbox" aria-expanded="true">
									<i class="blue ace-icon fa fa-inbox bigger-130"></i>
									<span class="bigger-110">Inbox</span>
								</a>
							</li>


							<!-- /.dropdown -->
						</ul>

						<div class="tab-content no-border no-padding">
							<div id="inbox" class="tab-pane in active">
								<div class="message-container">
									<div id="id-message-list-navbar" class="message-navbar clearfix">
										<div class="message-bar">
											<div class="message-infobar" id="id-message-infobar">
												<?php 
												$q = $this->db->query("SELECT * FROM  table_contactus ")->num_rows();

												
												?>
												<span class="blue bigger-150">Inbox</span>
												<span class="grey bigger-110">(<?php echo $q; ?>)</span>
											</div>

											<div class="message-toolbar hide">
												<div class="inline position-relative align-left">
													<button type="button" class="btn-white btn-primary btn btn-xs dropdown-toggle" data-toggle="dropdown">
														<span class="bigger-110">Action</span>

														<i class="ace-icon fa fa-caret-down icon-on-right"></i>
													</button>

													<ul class="dropdown-menu dropdown-lighter dropdown-caret dropdown-125">
														<li>
															<a href="#">
																<i class="ace-icon fa fa-mail-reply blue"></i>&nbsp; Reply
															</a>
														</li>

														<li>
															<a href="#">
																<i class="ace-icon fa fa-mail-forward green"></i>&nbsp; Forward
															</a>
														</li>

														<li>
															<a href="#">
																<i class="ace-icon fa fa-folder-open orange"></i>&nbsp; Archive
															</a>
														</li>

														<li class="divider"></li>

														<li>
															<a href="#">
																<i class="ace-icon fa fa-eye blue"></i>&nbsp; Mark as read
															</a>
														</li>

														<li>
															<a href="#">
																<i class="ace-icon fa fa-eye-slash green"></i>&nbsp; Mark unread
															</a>
														</li>

														<li>
															<a href="#">
																<i class="ace-icon fa fa-flag-o red"></i>&nbsp; Flag
															</a>
														</li>

														<li class="divider"></li>

														<li>
															<a href="#">
																<i class="ace-icon fa fa-trash-o red bigger-110"></i>&nbsp; Delete
															</a>
														</li>
													</ul>
												</div>

												<div class="inline position-relative align-left">
													<button type="button" class="btn-white btn-primary btn btn-xs dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
														<i class="ace-icon fa fa-folder-o bigger-110 blue"></i>
														<span class="bigger-110">Move to</span>

														<i class="ace-icon fa fa-caret-down icon-on-right"></i>
													</button>

													<ul class="dropdown-menu dropdown-lighter dropdown-caret dropdown-125">
														<li>
															<a href="#">
																<i class="ace-icon fa fa-stop pink2"></i>&nbsp; Tag#1
															</a>
														</li>

														<li>
															<a href="#">
																<i class="ace-icon fa fa-stop blue"></i>&nbsp; Family
															</a>
														</li>

														<li>
															<a href="#">
																<i class="ace-icon fa fa-stop green"></i>&nbsp; Friends
															</a>
														</li>

														<li>
															<a href="#">
																<i class="ace-icon fa fa-stop grey"></i>&nbsp; Work
															</a>
														</li>
													</ul>
												</div>

												<button type="button" class="btn btn-xs btn-white btn-primary">
													<i class="ace-icon fa fa-trash-o bigger-125 orange"></i>
													<span class="bigger-110">Delete</span>
												</button>
											</div>
										</div>

										<div>
											<div class="messagebar-item-left">
												<div class="inline position-relative">
													<a href="#" data-toggle="dropdown" class="dropdown-toggle" aria-expanded="false">
														<i class="ace-icon fa fa-caret-down bigger-125 middle"></i>
													</a>

													<ul class="dropdown-menu dropdown-lighter dropdown-100">
														<li>
															<a id="id-select-message-all" href="#">All</a>
														</li>

														<li>
															<a id="id-select-message-none" href="#">None</a>
														</li>

														<li class="divider"></li>

														<li>
															<a id="id-select-message-unread" href="#">Unread</a>
														</li>

														<li>
															<a id="id-select-message-read" href="#">Read</a>
														</li>
													</ul>
												</div>
											</div>

											
										</div>
									</div>

									<div id="id-message-item-navbar" class="message-navbar clearfix hide">
										<div class="message-bar">
											<div class="message-toolbar">
												<div class="inline position-relative align-left">
													<button type="button" class="btn-white btn-primary btn btn-xs dropdown-toggle" data-toggle="dropdown">
														<span class="bigger-110">Action</span>

														<i class="ace-icon fa fa-caret-down icon-on-right"></i>
													</button>

													<ul class="dropdown-menu dropdown-lighter dropdown-caret dropdown-125">
														<li>
															<a href="#">
																<i class="ace-icon fa fa-mail-reply blue"></i>&nbsp; Reply
															</a>
														</li>

														<li>
															<a href="#">
																<i class="ace-icon fa fa-mail-forward green"></i>&nbsp; Forward
															</a>
														</li>

														<li>
															<a href="#">
																<i class="ace-icon fa fa-folder-open orange"></i>&nbsp; Archive
															</a>
														</li>

														<li class="divider"></li>

														<li>
															<a href="#">
																<i class="ace-icon fa fa-eye blue"></i>&nbsp; Mark as read
															</a>
														</li>

														<li>
															<a href="#">
																<i class="ace-icon fa fa-eye-slash green"></i>&nbsp; Mark unread
															</a>
														</li>

														<li>
															<a href="#">
																<i class="ace-icon fa fa-flag-o red"></i>&nbsp; Flag
															</a>
														</li>

														<li class="divider"></li>

														<li>
															<a href="#">
																<i class="ace-icon fa fa-trash-o red bigger-110"></i>&nbsp; Delete
															</a>
														</li>
													</ul>
												</div>

												<div class="inline position-relative align-left">
													<button type="button" class="btn-white btn-primary btn btn-xs dropdown-toggle" data-toggle="dropdown">
														<i class="ace-icon fa fa-folder-o bigger-110 blue"></i>
														<span class="bigger-110">Move to</span>

														<i class="ace-icon fa fa-caret-down icon-on-right"></i>
													</button>

													<ul class="dropdown-menu dropdown-lighter dropdown-caret dropdown-125">
														<li>
															<a href="#">
																<i class="ace-icon fa fa-stop pink2"></i>&nbsp; Tag#1
															</a>
														</li>

														<li>
															<a href="#">
																<i class="ace-icon fa fa-stop blue"></i>&nbsp; Family
															</a>
														</li>

														<li>
															<a href="#">
																<i class="ace-icon fa fa-stop green"></i>&nbsp; Friends
															</a>
														</li>

														<li>
															<a href="#">
																<i class="ace-icon fa fa-stop grey"></i>&nbsp; Work
															</a>
														</li>
													</ul>
												</div>

												<button type="button" class="btn btn-xs btn-white btn-primary">
													<i class="ace-icon fa fa-trash-o bigger-125 orange"></i>
													<span class="bigger-110">Delete</span>
												</button>
											</div>
										</div>

										<div>
											<div class="messagebar-item-left">
												<a href="#" class="btn-back-message-list">
													<i class="ace-icon fa fa-arrow-left blue bigger-110 middle"></i>
													<b class="bigger-110 middle">Back</b>
												</a>
											</div>

											<div class="messagebar-item-right">
												<i class="ace-icon fa fa-clock-o bigger-110 orange"></i>
												<span class="grey">Today, 7:15 pm</span>
											</div>
										</div>
									</div>

									<div id="id-message-new-navbar" class="message-navbar clearfix hide">
										<div class="message-bar">
											<div class="message-toolbar">
												<button type="button" class="btn btn-xs btn-white btn-primary">
													<i class="ace-icon fa fa-floppy-o bigger-125"></i>
													<span class="bigger-110">Save Draft</span>
												</button>

												<button type="button" class="btn btn-xs btn-white btn-primary">
													<i class="ace-icon fa fa-times bigger-125 orange2"></i>
													<span class="bigger-110">Discard</span>
												</button>
											</div>
										</div>

										<div>
											<div class="messagebar-item-left">
												<a href="#" class="btn-back-message-list">
													<i class="ace-icon fa fa-arrow-left bigger-110 middle blue"></i>
													<b class="middle bigger-110">Back</b>
												</a>
											</div>

											<div class="messagebar-item-right">
												<span class="inline btn-send-message">
													<button type="button" class="btn btn-sm btn-primary no-border btn-white btn-round">
														<span class="bigger-110">Send</span>

														<i class="ace-icon fa fa-arrow-right icon-on-right"></i>
													</button>
												</span>
											</div>
										</div>
									</div>
									<?php
									foreach ($dt_inbox->result_array() as $row) {
														# code...

										?>
										<div class="message-list-container">
											<div class="message-list" id="message-list">
												<div class="message-item message-unread">


													<i class="message-star ace-icon fa fa-star orange2"></i>


													<span class="sender" title="Alex John Red Smith"><?php echo $row['str_nama'] ?> </span>
													<span class="time"><a href="<?php echo base_url() ?>C_admin/InboxDetail/<?php echo $row['id'] ?>">Detail </a></span>

													<span class="summary">
														<span class="text">
															<a href="<?php echo base_url() ?>C_admin/InboxDetail/<?php echo $row['id'] ?>">
																<?php echo $row['txt_message'] ?>
															</a>
														</span>
													</span>
												</div>
											</div>
										</div>
									</div>
								<?php }?>
								<div class="message-footer clearfix">
									<div class="pull-left"> <?php echo $q ?> messages total </div>

									<div class="pull-right">
										

									</div>
								</div>

								<div class="message-footer message-footer-style2 clearfix hide">
									<div class="pull-left"> simpler footer </div>

									<div class="pull-right">
										<div class="inline middle"> message 1 of 151 </div>

										&nbsp; &nbsp;
										<ul class="pagination middle">
											<li class="disabled">
												<span>
													<i class="ace-icon fa fa-angle-left bigger-150"></i>
												</span>
											</li>

											<li>
												<a href="#">
													<i class="ace-icon fa fa-angle-right bigger-150"></i>
												</a>
											</li>
										</ul>
									</div>
								</div>
							</div>
						</div>
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
