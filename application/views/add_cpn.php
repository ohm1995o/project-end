<div class="main-content">
				<div class="main-content-inner">
					<div class="breadcrumbs ace-save-state" id="breadcrumbs">
						<ul class="breadcrumb">
							<li>
								<i class="ace-icon fa fa-cube cube-icon"></i>
								<a href="company">Register Company</a>
							</li>
							<!-- <li class="active"><?php echo $setHeadContent;?></li> -->
						</ul><!-- /.breadcrumb -->

						
					</div>

					<div class="page-content">
						<div class="ace-settings-container" id="ace-settings-container">
							

							<div class="ace-settings-box clearfix" id="ace-settings-box">
								<div class="pull-left width-50">
									<div class="ace-settings-item">
										<div class="pull-left">
											<select id="skin-colorpicker" class="hide">
												<option data-skin="no-skin" value="#438EB9">#438EB9</option>
												<option data-skin="skin-1" value="#222A2D">#222A2D</option>
												<option data-skin="skin-2" value="#C6487E">#C6487E</option>
												<option data-skin="skin-3" value="#D0D0D0">#D0D0D0</option>
											</select>
										</div>
										<span>&nbsp; Choose Skin</span>
									</div>

									<div class="ace-settings-item">
										<input type="checkbox" class="ace ace-checkbox-2 ace-save-state" id="ace-settings-navbar" autocomplete="off" />
										<label class="lbl" for="ace-settings-navbar"> Fixed Navbar</label>
									</div>

									<div class="ace-settings-item">
										<input type="checkbox" class="ace ace-checkbox-2 ace-save-state" id="ace-settings-sidebar" autocomplete="off" />
										<label class="lbl" for="ace-settings-sidebar"> Fixed Sidebar</label>
									</div>

									<div class="ace-settings-item">
										<input type="checkbox" class="ace ace-checkbox-2 ace-save-state" id="ace-settings-breadcrumbs" autocomplete="off" />
										<label class="lbl" for="ace-settings-breadcrumbs"> Fixed Breadcrumbs</label>
									</div>

									<div class="ace-settings-item">
										<input type="checkbox" class="ace ace-checkbox-2" id="ace-settings-rtl" autocomplete="off" />
										<label class="lbl" for="ace-settings-rtl"> Right To Left (rtl)</label>
									</div>

									<div class="ace-settings-item">
										<input type="checkbox" class="ace ace-checkbox-2 ace-save-state" id="ace-settings-add-container" autocomplete="off" />
										<label class="lbl" for="ace-settings-add-container">
											Inside
											<b>.container</b>
										</label>
									</div>
								</div><!-- /.pull-left -->

								<div class="pull-left width-50">
									<div class="ace-settings-item">
										<input type="checkbox" class="ace ace-checkbox-2" id="ace-settings-hover" autocomplete="off" />
										<label class="lbl" for="ace-settings-hover"> Submenu on Hover</label>
									</div>

									<div class="ace-settings-item">
										<input type="checkbox" class="ace ace-checkbox-2" id="ace-settings-compact" autocomplete="off" />
										<label class="lbl" for="ace-settings-compact"> Compact Sidebar</label>
									</div>

									<div class="ace-settings-item">
										<input type="checkbox" class="ace ace-checkbox-2" id="ace-settings-highlight" autocomplete="off" />
										<label class="lbl" for="ace-settings-highlight"> Alt. Active Item</label>
									</div>
								</div><!-- /.pull-left -->
							</div><!-- /.ace-settings-box -->
						</div><!-- /.ace-settings-container -->




						<!-- 								<div id="sel_item_exp" class="modal hide" > -->
							<div id="sel_item_exp" class="modal fade"  role="dialog">
								  <div class="modal-dialog">

								    <!-- Modal content-->
								    <div class="modal-content">
								      <div class="modal-dialog" >
										<div class="modal-content">
											<div class="modal-header no-padding">
												<div class="table-header">
													<button type="button" class="close" data-dismiss="modal" aria-hidden="true">
														<span class="white">&times;</span>
													</button>
													Please select Item Code
												</div>
											</div>

											<div class="modal-body no-padding" style="height: 400px; overflow: auto;">
												<!-- <div style="height: 400px; overflow: auto;"> -->
												<table class="table table-striped table-bordered table-hover no-margin-bottom no-border-top" id="table23" >
													<thead>
														<tr>
															<th style="text-align:center;" width="10%">No.</th>
															<th style="text-align:center;" width="20%">Select</th>
															<th style="text-align:center;" width="70%">Item Code</th>

														</tr>
													</thead>

													<tbody>
													
													</tbody>
												</table>
												<!-- </div> -->
											</div>

											<div class="modal-footer no-margin-top">
												<button class="btn btn-sm btn-danger " data-dismiss="modal" name="back3" id="back3" onclick="clearselItemexp()">
													<i class="ace-icon fa fa-undo"></i>
													Cancel  
												</button>

												&nbsp; &nbsp; &nbsp;

												<button class="btn btn-sm btn-success pull-right" data-dismiss="modal" name="selitem" id="selitem" onclick="selItemexp()">
													<i class="ace-icon glyphicon glyphicon-ok"></i>
													Submit &nbsp;&nbsp;
												</button>

												
											</div>
										</div><!-- /.modal-content -->
									</div><!-- /.modal-dialog -->
								</div>
								</div>
								</div>






						<div class="page-header">
							<h1>
								Register
								<small>
									<i class="ace-icon fa fa-angle-double-right"></i>
									Company
								</small>
							</h1>
						</div><!-- /.page-header -->

						<div class="row">
							<div class="col-xs-6">
								<!-- PAGE CONTENT BEGINS -->
								<div class="jarviswidget" id="wid-id-4" data-widget-editbutton="false" data-widget-custombutton="false">
                                    
                                    <form action="<?php echo base_url()?>company/registercpn" method="post" class='form-horizontal'>
										
									<div class="row">
									<div class="col-xs-12">
										
											<h3 class="lighter block green">ENTER YOUR INFORMATION</h3><br>

											<div class="form-group">
												<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Username </label>
														<div class="col-xs-10 col-sm-6">
																	<span class="block input-icon input-icon-right">
																		<input type="text" name="cpn_user" placeholder="Username" value="<?php echo set_value('box_cd'); ?>" class="width-100" />
																	</span>
																</div>
											</div>


											<div class="form-group">
												<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Password </label>
														<div class="col-xs-10 col-sm-6">
																	<span class="block input-icon input-icon-right">
																		<input type="password" name="cpn_pass" placeholder="Password" value="<?php echo set_value('box_name'); ?>" class="width-100" />
																		
																	</span>
																</div>
                                            </div>


                                            <div class="form-group">
												<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Company Name </label>
														<div class="col-xs-10 col-sm-6">
																	<span class="block input-icon input-icon-right">
																		<input type="text" name="cpn_name" placeholder="Company Name" value="<?php echo set_value('box_name'); ?>" class="width-100" />
																		
																	</span>
																</div>
                                            </div>
                                            

                                            <div class="form-group">
												<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Company Address </label>
														<div class="col-xs-10 col-sm-6">
																	<span class="block input-icon input-icon-right">
																		<input type="text" name="cpn_address" placeholder="Company Address" value="<?php echo set_value('box_name'); ?>" class="width-100" />
																		
																	</span>
																</div>
											</div>


                                            <div class="form-group">
												<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Company Email </label>
														<div class="col-xs-10 col-sm-6">
																	<span class="block input-icon input-icon-right">
																		<input type="text" name="cpn_email" placeholder="Company Email" value="<?php echo set_value('box_name'); ?>" class="width-100" />
																		
																	</span>
																</div>
                                            </div>


                                            <div class="form-group">
												<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Company Phonnumber </label>
														<div class="col-xs-10 col-sm-6">
																	<span class="block input-icon input-icon-right">
																		<input type="text" name="cpn_phnumber" placeholder="Company Phonnumber" value="<?php echo set_value('box_name'); ?>" class="width-100" />
																		
																	</span>
																</div>
                                            </div>
                                            
											<!-- <div class="form-group">
												<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Box Type </label>
														<div class="col-xs-10 col-sm-6">
																	<span class="block input-icon input-icon-right">
																		<input type="text" name="box_type" placeholder="Box Type" value="<?php echo set_value('box_type'); ?>" class="width-100" />
																	</span>
																</div>
											</div> -->

											<!-- <div class="form-group">
												<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Part Name </label>
														<div class="col-xs-10 col-sm-6">
																	<span class="block input-icon input-icon-right">
																		<input type="text" name="par_des" placeholder="Please input detail" value="<?php echo set_value('par_des'); ?>" class="width-100" />
																	</span>
																</div>
											</div>

											<div class="form-group">
												<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Model </label>
														<div class="col-xs-10 col-sm-6">
																	<span class="block input-icon input-icon-right">
																		<input type="text" name="lot_no" placeholder="Description" value="<?php echo set_value('lot_no'); ?>" class="width-100" />
																	</span>
																</div>
											</div> -->

											<!-- <div class="form-group">
												<label class="col-sm-3 control-label no-padding-right" for="form-field-1">Item Code </label>
														<div class="col-xs-10 col-sm-6">
															<span class="block input-icon input-icon-right">
																<input type="text" name="item_cd" id="item_cd" placeholder="Please Input Item Code or search" value="<?php echo set_value('item_cd'); ?>" class="width-100" />
															</span>
														</div>

																<div class="col-xs-3 col-sm-3">
																	<span class="block input-icon input-icon-right">
																		<input type="button" class="btn btn-sm btn-default" id="search_item" name="search_item" onclick="searchExp()" value="Search">
																			
																	</span>
																</div>
											</div> -->

											<!-- <div class="form-group">
												<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> SNP. </label>
														<div class="col-xs-4 col-sm-4">
																	<span class="block input-icon input-icon-right">
																		<input type="text" name="snp" value="<?php echo set_value('snp'); ?>" class="width-100" id="snp"/>
																	</span>
																</div>

											</div> -->

											

											<div class="form-group">
												<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Upload Picture </label>
														<div class="col-xs-10 col-sm-6">
																	<span class="block input-icon input-icon-right">
																		<input multiple="" type="file" id="id-input-file-3" name="id-input-file-3" />
																	</span>
																</div>
											</div>

											<!-- <div class="form-group">
												<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Color </label>
														<div class="col-xs-10 col-sm-6">
																	<select id="simple-colorpicker-1" class="hide" name="col_txt">
																		<option value="#ac725e">#ac725e</option>
																		<option value="#d06b64">#d06b64</option>
																		<option value="#f83a22">#f83a22</option>
																		<option value="#fa573c">#fa573c</option>
																		<option value="#ff7537">#ff7537</option>
																		<option value="#ffad46">#ffad46</option>
																		<option value="#42d692">#42d692</option>
																		<option value="#16a765">#16a765</option>
																		<option value="#7bd148">#7bd148</option>
																		<option value="#b3dc6c">#b3dc6c</option>
																		<option value="#fbe983">#fbe983</option>
																		<option value="#fad165">#fad165</option>
																		<option value="#92e1c0">#92e1c0</option>
																		<option value="#9fe1e7">#9fe1e7</option>
																		<option value="#9fc6e7">#9fc6e7</option>
																		<option value="#4986e7">#4986e7</option>
																		<option value="#9a9cff">#9a9cff</option>
																		<option value="#b99aff">#b99aff</option>
																		<option value="#c2c2c2" selected="">#c2c2c2</option>
																		<option value="#cabdbf">#cabdbf</option>
																		<option value="#cca6ac">#cca6ac</option>
																		<option value="#f691b2">#f691b2</option>
																		<option value="#cd74e6">#cd74e6</option>
																		<option value="#a47ae2">#a47ae2</option>
																		<option value="#555">#555</option>
																	</select>
																</div>
											</div> -->

															<div >
																<div class="center">

																	<button type="submit" class="btn btn-primary">
																	Submit
																</button>
																<input type="hidden" name="action" value="<?php echo base64_encode('addBox');?>"  />

																	<!-- &nbsp; &nbsp; &nbsp;
																	<button class="btn" type="reset">
																		<i class="ace-icon fa fa-undo bigger-110"></i>
																		Reset
																	</button> -->
																</div>
															</div>
												</form>
											</div>
										</div>
									<?php echo form_close();?>


								</div>
								<!-- PAGE CONTENT ENDS -->
							</div><!-- /.col -->
						</div><!-- /.row -->
					</div><!-- /.page-content -->
				</div>
			</div><!-- /.main-content -->