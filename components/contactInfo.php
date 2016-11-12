<!-- Account settings -->
<div class="panel panel-flat">
	<div class="panel-heading">
		<h5 class="panel-title">Contact Details</h5>
		<div class="heading-elements">
			<ul class="icons-list">
			    <li><a data-action="collapse" class="rotate-180"></a></li>
				<li><a data-action="reload"></a></li>
				<li><a data-action="close"></a></li>
			</ul>
		</div>
		<a class="heading-elements-toggle"><i class="icon-more"></i></a>
	</div>
	<div class="panel-body">
		<form action="#">
			<div class="form-group">
				<div class="row">
					<div class="col-md-6">
						<label>Phone No</label>
						<input type="text" id="phone" value="<?php echo $loginUser['phone'];?>" class="form-control">
					</div>
					<div class="col-md-6">
						<label>Alt Phone No</label>
						<input type="text" id="altphone" value="<?php echo $loginUser['altphone'];?>" class="form-control">
					</div>
				</div>
			</div>
			<h6>Correspondence Address</h6>
			<div class="form-group">
				<div class="row">
					<div class="col-md-6">
						<label>Address Line 1</label>
						<input type="text" id="add1" value="<?php echo $loginUser['add1'];?>" class="form-control">
					</div>
					<div class="col-md-6">
						<label>Address Line 2</label>
						<input type="text" id="add2" value="<?php echo $loginUser['add2'];?>" class="form-control">
					</div>
				</div>
			</div>
			<div class="form-group">
				<div class="row">
					<div class="col-md-4">
						<label>City</label>
						<input type="text" id="city" value="<?php echo $loginUser['city']; ?>" class="form-control">
					</div>
					<div class="col-md-4">
						<label>State</label>
						<select class="form-control" id="state">
							<option value="<?php if($loginUser['state']!="") echo $loginUser['state']; else echo ""; ?>"><?php if($loginUser['state']!="") echo $loginUser['state']; else echo "select one"; ?></option>
							<option value="Andaman And Nicobar ">Andaman And Nicobar </option>
							<option value="Andhra Pradesh ">Andhra Pradesh </option>
							<option value="Arunachal Pradesh ">Arunachal Pradesh </option>
							<option value="Assam ">Assam </option>
							<option value="Bihar ">Bihar </option>
							<option value="Chandigarh ">Chandigarh </option>
							<option value="Chhattisgarh ">Chhattisgarh </option>
							<option value="Dadra And Nagar Haveli ">Dadra And Nagar Haveli </option>
							<option value="Delhi ">Delhi </option>
							<option value="Goa ">Goa </option>
							<option value="Gujarat ">Gujarat </option>
							<option value="Haryana ">Haryana </option>
							<option value="Himachal Pradesh ">Himachal Pradesh </option>
							<option value="Jammu And Kashmir ">Jammu And Kashmir </option>
							<option value="Karnataka ">Karnataka </option>
							<option value="Kerala ">Kerala </option>
							<option value="Lakshadweep ">Lakshadweep </option>
							<option value="Madhya Pradesh ">Madhya Pradesh </option>
							<option value="Maharashtra ">Maharashtra </option>
							<option value="Manipur ">Manipur </option>
							<option value="Meghalaya ">Meghalaya </option>
							<option value="Mizoram ">Mizoram </option>
							<option value="Nagaland ">Nagaland </option>
							<option value="Odisha ">Odisha </option>
							<option value="Puducherry ">Puducherry </option>
							<option value="Punjab ">Punjab </option>
							<option value="Rajasthan ">Rajasthan </option>
							<option value="Sikkim ">Sikkim </option>
							<option value="Tamil Nadu ">Tamil Nadu </option>
							<option value="Telangana ">Telangana </option>
							<option value="Tripura ">Tripura </option>
							<option value="Uttar Pradesh ">Uttar Pradesh </option>
							<option value="Uttarakhand ">Uttarakhand </option>
							<option value="West Bengal">West Bengal</option>
						</select>
					</div>
					<div class="col-md-4">
						<label>Pin Code</label>
						<input type="text" id="pin" value="<?php echo $loginUser['pin']; ?>" class="form-control">
					</div>
				</div>
			</div>
	</div>
	<div class="panel-body">
		<h6>Permanent Address</h6>
		<input type="checkbox" id="sameAsC" /> Same as Correspondence Address
			<div class="form-group">
				<div class="row">
					<div class="col-md-6">
						<label>Address Line 1</label>
						<input type="text" id="padd1" value="<?php echo $loginUser['add1'];?>" class="form-control">
					</div>
					<div class="col-md-6">
						<label>Address Line 2</label>
						<input type="text" id="padd2" value="<?php echo $loginUser['add2'];?>" class="form-control">
					</div>
				</div>
			</div>
			<div class="form-group">
				<div class="row">
					<div class="col-md-4">
						<label>City</label>
						<input type="text" value="<?php echo $loginUser['pcity'];?>" id="pcity" class="form-control">
					</div>
					<div class="col-md-4">
						<label>State</label>
						<select class="form-control" id="pstate">
							<option value="<?php if($loginUser['pstate']!="") echo $loginUser['pstate']; else echo ""; ?>"><?php if($loginUser['pstate']!="") echo $loginUser['pstate']; else echo "select one"; ?></option>
							<option value="Andaman And Nicobar ">Andaman And Nicobar </option>
							<option value="Andhra Pradesh ">Andhra Pradesh </option>
							<option value="Arunachal Pradesh ">Arunachal Pradesh </option>
							<option value="Assam ">Assam </option>
							<option value="Bihar ">Bihar </option>
							<option value="Chandigarh ">Chandigarh </option>
							<option value="Chhattisgarh ">Chhattisgarh </option>
							<option value="Dadra And Nagar Haveli ">Dadra And Nagar Haveli </option>
							<option value="Delhi ">Delhi </option>
							<option value="Goa ">Goa </option>
							<option value="Gujarat ">Gujarat </option>
							<option value="Haryana ">Haryana </option>
							<option value="Himachal Pradesh ">Himachal Pradesh </option>
							<option value="Jammu And Kashmir ">Jammu And Kashmir </option>
							<option value="Karnataka ">Karnataka </option>
							<option value="Kerala ">Kerala </option>
							<option value="Lakshadweep ">Lakshadweep </option>
							<option value="Madhya Pradesh ">Madhya Pradesh </option>
							<option value="Maharashtra ">Maharashtra </option>
							<option value="Manipur ">Manipur </option>
							<option value="Meghalaya ">Meghalaya </option>
							<option value="Mizoram ">Mizoram </option>
							<option value="Nagaland ">Nagaland </option>
							<option value="Odisha ">Odisha </option>
							<option value="Puducherry ">Puducherry </option>
							<option value="Punjab ">Punjab </option>
							<option value="Rajasthan ">Rajasthan </option>
							<option value="Sikkim ">Sikkim </option>
							<option value="Tamil Nadu ">Tamil Nadu </option>
							<option value="Telangana ">Telangana </option>
							<option value="Tripura ">Tripura </option>
							<option value="Uttar Pradesh ">Uttar Pradesh </option>
							<option value="Uttarakhand ">Uttarakhand </option>
							<option value="West Bengal">West Bengal</option>
						</select>
					</div>
					<div class="col-md-4">
						<label>Pin Code</label>
						<input type="text" id="ppin" value="<?php echo $loginUser['ppin'];?>" class="form-control">
					</div>
				</div>
			</div>
			<div class="text-right">
				<button type="button" onclick="saveContactInformation()" class="btn btn-primary"><i class="glyphicon glyphicon-save position-right"></i> Save</button>
			</div>
		</form>
	</div>
</div>
<!-- /account settings -->
<script type="text/javascript">
	$("#sameAsC").change(function() {
	    if(this.checked) {
	        $('#padd1').val($('#add1').val());
	        $('#padd2').val($('#add2').val());
	        $('#pcity').val($('#city').val());
	        $('#pstate').val($('#state').val());
	        $('#ppin').val($('#pin').val());
	    }
	});
</script>