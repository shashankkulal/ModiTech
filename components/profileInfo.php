
<div class="panel panel-flat">
											<div class="panel-heading">
												<h6 class="panel-title">Personal information</h6>
												<div class="heading-elements">
													<ul class="icons-list">
								                		<li><a data-action="collapse" class="rotate-180"></a></li>
								                		<li><a data-action="reload"></a></li>
								                		<li><a data-action="close"></a></li>
								                	</ul>
							                	</div>
											<a class="heading-elements-toggle"><i class="icon-more"></i></a></div>

											<div class="panel-body">
												<form id="profileInformationForm">
													<div class="form-group">
														<div class="row">
															<div class="col-md-6">
																<label>Your Key</label>
																<input type="text" disabled="" value="<?php echo $loginUser['appkey']; ?>" class="form-control">
															</div>
															<div class="col-md-6">
																<label>Full name</label>
																<input type="text" id="sname" value="<?php echo $loginUser['fname']," ",$loginUser['lname'];?>" class="form-control">
															</div>
														</div>
													</div>

													<div class="form-group">
														<div class="row">
															<div class="col-md-6">
																<label>Father's Name</label>
																<input type="text" id="father" value="<?php echo $loginUser['father'];?>" class="form-control">
															</div>
															<div class="col-md-6">
																<label>Mother's Name</label>
																<input type="text" id="mother" value="<?php echo $loginUser['mother'];?>" class="form-control">
															</div>
														</div>
													</div>

													<div class="form-group">
														<div class="row">
															<div class="col-md-6">
																<label>Gaurdian<small> (if any)</small></label>
																<input type="text" id="gaurdian" value="<?php echo $loginUser['gaurdian'];?>" class="form-control">
															</div>
															<div class="col-md-6">
																<label>Spouse<small> (if married)</small></label>
																<input type="text" id="spouse" value="<?php echo $loginUser['spouse'];?>" class="form-control">
															</div>
														</div>
													</div>

													<div class="form-group">
														<div class="row">
															<div class="col-md-6">
																<label>Gender</label>
																<select id="gender" value="<?php echo $loginUser['gender'];?>" class="form-control">
																	<option value="">select One</option>
																	<option <?php if($loginUser['gender'] == "male") echo "selected"; ?> value="male">Male</option>
																	<option <?php if($loginUser['gender'] == "female") echo "selected"; ?> value="female">Female</option>
																</select>
															</div>
															<div class="col-md-6">
																<label>Category</label>
																<select id="category" value="<?php echo $loginUser['category'];?>" class="form-control">
																	<option value="">select One</option>
																	<option <?php if($loginUser['category'] == "general") echo "selected"; ?> value="general">GEN</option>
																	<option <?php if($loginUser['category'] == "st") echo "selected"; ?> value="st">ST</option>
																	<option <?php if($loginUser['category'] == "sc") echo "selected"; ?> value="sc">SC</option>
																	<option <?php if($loginUser['category'] == "obc") echo "selected"; ?> value="obc">OBC</option>
																</select>
															</div>
														</div>
													</div>

							                        <div class="text-right">
							                        	<button type="button" onclick="savePersonalInformation()" class="btn btn-primary"><i class="glyphicon glyphicon-save position-right"></i> Save</button>
							                        </div>
												</form>
											</div>
										</div>