<head>
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
		<meta charset="utf-8" />
		<title>Dashboard - Ace Admin</title>

		<meta name="description" content="overview &amp; stats" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />

		<!-- bootstrap & fontawesome -->
		<link rel="stylesheet" href="<?php echo base_url() ?>assets/css/bootstrap.min.css" />
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css" />
		
		<!-- page specific plugin styles -->

		<!-- text fonts -->
		<link rel="stylesheet" href="<?php echo base_url() ?>assets/css/fonts.googleapis.com.css" />

		<!-- ace styles -->
		<link rel="stylesheet" href="<?php echo base_url() ?>assets/css/ace.min.css" class="ace-main-stylesheet" id="main-ace-style" />

		<!--[if lte IE 9]>
			<link rel="stylesheet" href="assets/css/ace-part2.min.css" class="ace-main-stylesheet" />
		<![endif]-->
		<!-- DATA TABEL -->
		<script src="<?php echo base_url() ?>assets/js/ace-extra.min.js"></script>
		<script src="<?php echo base_url() ?>assets/datatables/jquery-3.1.0.js"></script>
		<script src="<?php echo base_url() ?>assets/datatables/jquery.dataTables.min.js"></script>
		<script src="<?php echo base_url() ?>assets/datatables/dataTables.bootstrap.min.js"></script>

		<!-- DATA TABEL -->
		<!--[if lte IE 9]>
		  <link rel="stylesheet" href="assets/css/ace-ie.min.css" />
		<![endif]-->

		<!-- inline styles related to this page -->

		<!-- ace settings handler -->
		<script src="<?php echo base_url() ?>assets/js/ace-extra.min.js"></script>

		<!-- HTML5shiv and Respond.js for IE8 to support HTML5 elements and media queries -->

		<!--[if lte IE 8]>
		<script src="assets/js/html5shiv.min.js"></script>
		<script src="assets/js/respond.min.js"></script>
		<![endif]-->
	</head>

	<body class="no-skin">
<div id="navbar" class="navbar navbar-default">
			<script type="text/javascript">
				try{ace.settings.check('navbar' , 'fixed')}catch(e){}
			</script>

			<div class="navbar-container" id="navbar-container">
				<button type="button" class="navbar-toggle menu-toggler pull-left" id="menu-toggler" data-target="#sidebar">
					<span class="sr-only">Toggle sidebar</span>

					<span class="icon-bar"></span>

					<span class="icon-bar"></span>

					<span class="icon-bar"></span>
				</button>

				<div class="navbar-header pull-left">
					<a href="index.html" class="navbar-brand">
						<small>
							<i class="fa fa-leaf"></i>
							DIGITAL LIBRARY
						</small>
					</a>
				</div>

				<div class="navbar-buttons navbar-header pull-right" role="navigation">
					<ul class="nav ace-nav">
						<li class="red">
							<a data-toggle="dropdown" class="dropdown-toggle" href="#">
								<i class="ace-icon fa fa-envelope icon-animated-vertical"></i>
								<span class="badge badge-success"><?php 
										$q = $this->db->query("SELECT * FROM  table_contactus ")->num_rows();
										echo $q;
												

									?>
										
									</span>
							</a>

							<ul class="dropdown-menu-right dropdown-navbar dropdown-menu dropdown-caret dropdown-close">
								<li class="dropdown-header">
									<i class="ace-icon fa fa-envelope-o"></i>
									
								</li>

								<li class="dropdown-content ace-scroll" style="position: relative;"><div class="scroll-track" style="display: none;"><div class="scroll-bar"></div></div><div class="scroll-content" style="max-height: 200px;">
									<ul class="dropdown-menu dropdown-navbar">

										<?php
											$query= $this->db->query("SELECT * FROM  table_contactus ORDER BY id DESC LIMIT 2 ");
											foreach ($query->result_array() as $row) {
											
											

										?>
										<li>
									
											<a href="<?php echo base_url() ?>C_admin/InboxDetail/<?php echo $row['id'] ?>" class="clearfix">
												<img src="<?php echo base_url() ?>assets/img/avatar.png" class="msg-photo" alt="Alex's Avatar">
												<span class="msg-body">

													<span class="msg-title">
														<span class="blue"><?php echo $row['str_nama'] ?>:</span>

														<?php 

															$sub_kalimat= substr($row['txt_message'], 0,20);
															$jumlah_string = strlen($sub_kalimat);

															if ($jumlah_string==20) {
																?>
																
															
																<?php
																echo $sub_kalimat."....";
															}else{

																echo $sub_kalimat;
															}
															
														 ?>

													</span>
												
													<span class="msg-time">
														<i class="ace-icon fa fa-clock-o"></i>
														<span>a moment ago</span>
													</span>
												</span>
											</a>
										</li>
									<?php }?>
										
									</ul>
								</div>
							</li>

								<li class="dropdown-footer">
									<a href="<?php echo base_url() ?>C_admin/InboxPesan">
										See all messages
										<i class="ace-icon fa fa-arrow-right"></i>
									</a>
								</li>
							</ul>
						</li>

						<li class="light-blue">
							<a data-toggle="dropdown" href="#" class="dropdown-toggle">
								<img class="nav-user-photo" src="assets/avatars/user.jpg" alt="<?php echo $this->session->userdata('nama_user') ?>">
								<span class="user-info">
									<small>Welcome</small>
									<?php echo $this->session->userdata('nama_user') ?>
								</span>

								<i class="ace-icon fa fa-caret-down"></i>
							</a>

							<ul class="user-menu dropdown-menu-right dropdown-menu dropdown-yellow dropdown-caret dropdown-close">
								<li>
									<a href="#">
										<i class="ace-icon fa fa-cog"></i>
										Settings
									</a>
								</li>

								<li>
									<a href="profile.html">
										<i class="ace-icon fa fa-user"></i>
										Profile
									</a>
								</li>

								<li class="divider"></li>

								<li>
									<a href="<?php echo base_url() ?>Auth/logout">
										<i class="ace-icon fa fa-power-off"></i>
										Logout
									</a>
								</li>
							</ul>
						</li>
					</ul>
				</div>
			</div><!-- /.navbar-container -->
		</div>