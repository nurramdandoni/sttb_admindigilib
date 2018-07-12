
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
					<div class="">
							<div class="col-xs-12">
								<!-- PAGE CONTENT BEGINS -->
								<div class="row">
									<div class="col-xs-12">
										<div class="tabbable">
											<ul id="inbox-tabs" class="inbox-tabs nav nav-tabs padding-16 tab-size-bigger tab-space-1">
												<li class="li-new-mail pull-right">
													<a data-toggle="tab" href="#write" data-target="write" class="btn-new-mail" aria-expanded="false">
														<span class="btn btn-purple no-border">
															<i class="ace-icon fa fa-envelope bigger-130"></i>
															<span class="bigger-110">Balas</span>
														</span>
													</a>
												</li><!-- /.li-new-mail -->

												<li class="">
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
														<div id="id-message-list-navbar" class="message-navbar clearfix hide">
															<div class="message-bar">
																<div class="message-infobar" id="id-message-infobar">
																	<span class="blue bigger-150">Inbox</span>
																	<span class="grey bigger-110">(2 unread messages)</span>
																</div>

															</div>

															<div>
																<div class="messagebar-item-left">
																	<label class="inline middle">
																		<input type="checkbox" id="id-toggle-all" class="ace">
																		<span class="lbl"></span>
																	</label>

																	&nbsp;
																	<div class="inline position-relative">
																		<a href="#" data-toggle="dropdown" class="dropdown-toggle" aria-expanded="false">
																			<i class="ace-icon fa fa-caret-down bigger-125 middle"></i>
																		</a>

																	</div>
																</div>

																<div class="messagebar-item-right">
																	<div class="inline position-relative">
																		<a href="#" data-toggle="dropdown" class="dropdown-toggle" aria-expanded="false">
																			Sort &nbsp;
																			<i class="ace-icon fa fa-caret-down bigger-125"></i>
																		</a>

																		<ul class="dropdown-menu dropdown-lighter dropdown-menu-right dropdown-100">
																			<li>
																				<a href="#">
																					<i class="ace-icon fa fa-check green"></i>
																					Date
																				</a>
																			</li>

																			<li>
																				<a href="#">
																					<i class="ace-icon fa fa-check invisible"></i>
																					From
																				</a>
																			</li>

																			<li>
																				<a href="#">
																					<i class="ace-icon fa fa-check invisible"></i>
																					Subject
																				</a>
																			</li>
																		</ul>
																	</div>
																</div>

																<div class="nav-search minimized">
																	<form class="form-search">
																		<span class="input-icon">
																			<input type="text" autocomplete="off" class="input-small nav-search-input" placeholder="Search inbox ...">
																			<i class="ace-icon fa fa-search nav-search-icon"></i>
																		</span>
																	</form>
																</div>
															</div>
														</div>

														<div id="id-message-item-navbar" class="message-navbar clearfix">
															<div class="message-bar">
																<div class="message-toolbar">
																	

																</div>
															</div>

															<div>
																<div class="messagebar-item-left">
																	<a href="<?php echo base_url() ?>C_admin/InboxPesan" class="btn-back-message-list">
																		<i class="ace-icon fa fa-arrow-left blue bigger-110 middle"></i>
																		<b class="bigger-110 middle">Back</b>
																	</a>
																</div>

																<div class="messagebar-item-right">
																	<i class="ace-icon fa fa-clock-o bigger-110 orange"></i>
																	<span class="grey">Today, <?php echo date('Y-m-d')?></span>
																</div>
															</div>
														</div>

																

																

																
							<div class="message-content" id="id-message-content">
									<div class="message-header clearfix">
										<div class="pull-left">
											

											<div class="space-4"></div>

											<i class="ace-icon fa fa-star orange2"></i>

											<!-- &nbsp; -->
											<!-- <img class="middle" alt="John's Avatar" src="assets/avatars/avatar.png" width="32"> -->
											<!-- &nbsp; -->
											<a href="#" class="sender"><?php 
												echo $res_DetailInbox['str_nama'];

											?></a>

											&nbsp;
											<i class="ace-icon fa fa-clock-o bigger-110 orange middle"></i>
											<span class="time grey">Today, <?php echo date('Y-m-d')?> </span>
										</div>

										<div class="pull-right action-buttons">
											
											<a href="#">
												<i class="ace-icon fa fa-trash-o red icon-only bigger-130"></i>
											</a>
										</div>
									</div>

									<div class="hr hr-double"></div>

									<div class="message-body" style="position: relative;">


										<div style="height: auto;">
										<p>
											<?php 
												echo $res_DetailInbox['txt_message'];

											?>
										</p>

									</div></div>

									<div class="hr hr-double"></div>

									<div class="message-attachment clearfix">
									

									
										<div class="attachment-images pull-right">
											<div class="vspace-4-sm"></div>

											
										</div>
									</div>
								</div>

								<form id="id-message-form" class="form-horizontal message-form col-xs-12 hide">
									<div>
										<div class="form-group">
											<label class="col-sm-3 control-label no-padding-right" for="form-field-recipient">Recipient:</label>

											<div class="col-sm-9">
												<span class="input-icon">
													<input type="email" name="recipient" id="form-field-recipient" data-value="alex@doe.com" value="alex@doe.com" placeholder="Recipient(s)">
													<i class="ace-icon fa fa-user"></i>
												</span>
											</div>
										</div>

										<div class="hr hr-18 dotted"></div>

										<div class="form-group">
											<label class="col-sm-3 control-label no-padding-right" for="form-field-subject">Subject:</label>

											<div class="col-sm-6 col-xs-12">
												<div class="input-icon block col-xs-12 no-padding">
													<input maxlength="100" type="text" class="col-xs-12" name="subject" id="form-field-subject" placeholder="Subject">
													<i class="ace-icon fa fa-comment-o"></i>
												</div>
											</div>
										</div>

										<div class="hr hr-18 dotted"></div>

										<div class="form-group">
											<label class="col-sm-3 control-label no-padding-right">
												<span class="inline space-24 hidden-480"></span>
												Message:
											</label>

											<div class="col-sm-9">
												 <div class="wysiwyg-toolbar btn-toolbar center wysiwyg-style1"> <div class="btn-group">  <a class="btn btn-sm btn-default" data-edit="bold" title="" data-original-title="Bold (Ctrl/Cmd+B)"><i class=" ace-icon fa fa-bold"></i></a>  <a class="btn btn-sm btn-default" data-edit="italic" title="" data-original-title="Italic (Ctrl/Cmd+I)"><i class=" ace-icon fa fa-italic"></i></a>  <a class="btn btn-sm btn-default" data-edit="strikethrough" title="" data-original-title="Strikethrough"><i class=" ace-icon fa fa-strikethrough"></i></a>  <a class="btn btn-sm btn-default" data-edit="underline" title="" data-original-title="Underline"><i class=" ace-icon fa fa-underline"></i></a>  </div> <div class="btn-group">  <a class="btn btn-sm btn-default" data-edit="justifyleft" title="" data-original-title="Align Left (Ctrl/Cmd+L)"><i class=" ace-icon fa fa-align-left"></i></a>  <a class="btn btn-sm btn-default" data-edit="justifycenter" title="" data-original-title="Center (Ctrl/Cmd+E)"><i class=" ace-icon fa fa-align-center"></i></a>  <a class="btn btn-sm btn-default active" data-edit="justifyright" title="" data-original-title="Align Right (Ctrl/Cmd+R)"><i class=" ace-icon fa fa-align-right"></i></a>  </div> <div class="btn-group">  <div class="btn-group"> <a class="btn btn-sm btn-default dropdown-toggle" data-toggle="dropdown" title="" data-original-title="Hyperlink"><i class=" ace-icon fa fa-link"></i></a>  <div class="dropdown-menu dropdown-caret dropdown-menu-right">							 <div class="input-group">								<input class="form-control" placeholder="URL" type="text" data-edit="createLink">								<span class="input-group-btn">									<button class="btn btn-sm btn-primary" type="button">Add</button>								</span>							 </div>						</div> </div> <a class="btn btn-sm btn-default" data-edit="unlink" title="" data-original-title="Remove Hyperlink"><i class=" ace-icon fa fa-chain-broken"></i></a>  </div> <div class="btn-group">  <a class="btn btn-sm btn-default" data-edit="undo" title="" data-original-title="Undo (Ctrl/Cmd+Z)"><i class=" ace-icon fa fa-undo"></i></a>  <a class="btn btn-sm btn-default" data-edit="redo" title="" data-original-title="Redo (Ctrl/Cmd+Y)"><i class=" ace-icon fa fa-repeat"></i></a>  </div>  </div> <div class="wysiwyg-editor" contenteditable="true"></div>
											</div>
										</div>

										<div class="hr hr-18 dotted"></div>

										<div class="form-group no-margin-bottom">
											<label class="col-sm-3 control-label no-padding-right">Attachments:</label>

											<div class="col-sm-9">
												<div id="form-attachments">
													<div class="form-group file-input-container"><div class="col-sm-7"><label class="ace-file-input width-90 inline"><input type="file" name="attachment[]"><span class="ace-file-container" data-title="Choose"><span class="ace-file-name" data-title="No File ..."><i class=" ace-icon fa fa-upload"></i></span></span><a class="remove" href="#"><i class=" ace-icon fa fa-times"></i></a></label></div></div>
												</div>
											</div>
										</div>

										<div class="align-right">
											<button id="id-add-attachment" type="button" class="btn btn-sm btn-danger">
												<i class="ace-icon fa fa-paperclip bigger-140"></i>
												Add Attachment
											</button>
										</div>

										<div class="space"></div>
									</div>
								</form>
														</div>

														<div class="message-footer clearfix hide">
															<div class="pull-left"> 151 messages total </div>

															<div class="pull-right">
																<div class="inline middle"> page 1 of 16 </div>

																&nbsp; &nbsp;
																<ul class="pagination middle">
																	<li class="disabled">
																		<span>
																			<i class="ace-icon fa fa-step-backward middle"></i>
																		</span>
																	</li>

																	<li class="disabled">
																		<span>
																			<i class="ace-icon fa fa-caret-left bigger-140 middle"></i>
																		</span>
																	</li>

																	<li>
																		<span>
																			<input value="1" maxlength="3" type="text">
																		</span>
																	</li>

																	<li>
																		<a href="#">
																			<i class="ace-icon fa fa-caret-right bigger-140 middle"></i>
																		</a>
																	</li>

																	<li>
																		<a href="#">
																			<i class="ace-icon fa fa-step-forward middle"></i>
																		</a>
																	</li>
																</ul>
															</div>
														</div>

														<div class="message-footer message-footer-style2 clearfix">
														

															<div class="pull-right">
																<div class="inline middle"> message 1 of 151 </div>

																
															</div>
														</div>
													</div>
												</div>
											</div><!-- /.tab-content -->
										</div><!-- /.tabbable -->
									</div><!-- /.col -->
								</div><!-- /.row -->

								

								<!-- /.message-content -->

								<!-- PAGE CONTENT ENDS -->
							</div><!-- /.col -->
						</div>
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
