<!-- <script src="<?php echo base_url() ?>application/third_party/ckeditor/ckeditor.js"></script> -->

<style>
input{

	text-align:center;
}

.table > tbody > tr > td{
	text-align: center;
	font-size:13px;
}

#theader{
	font-size:20px;
	font-weight:bold;
}

.eml{
	font-weight:bold;
	background-color:#D4EFDF;
}

select {
  text-align: center;
  text-align-last: center;
  /* webkit*/
}
option {
  text-align: left;
  /* reset to left*/
}

textarea{
	text-align: center;
  text-align-last: center;
}
.file_class input[type="file"] {
  border: 1px solid #ccc!important;
  padding: 8px;
  text-align: left;
}
.btn-new{
  width: 200px;
  padding: 10px!important;
}

</style>
<?php 
// echo"<pre>";
// print_r($agent_data_each);
// echo"</pre>";
?>
<?php 
$upload_raw_id = $agent_data_each['id'];
?>
<div class="wrap">
	<section class="app-content">

		<div class="row">
			<div class="col-12">
				<div class="widget">
				  <form id="form_audit_user" method="POST" action="<?php echo base_url('Qa_agent_coaching_upload/add_edit_mgnt_coaching')?>" enctype="multipart/form-data">
				  	<input type="hidden" name="tl_id" value="<?php echo $agent_data_each['tl_id']; ?>">
				  	<input type="hidden" name="agent_id" value="<?php echo $agent_data_each['agent_id']; ?>">
				  	<input type="hidden" name="upload_raw_id" value="<?php echo $agent_data_each['id']; ?>">
				  	
					<div class="widget-body">
					 	<div class="table-responsive">
							<table class="table table-striped skt-table" width="100%">
								<tbody>
									<tr style="background-color: #569CE9;color: #fff;">
										<td colspan="6" id="theader" style="font-size:30px">OFFICE DEPOT: NPS COACHING FORM</td>
									</tr>
									<tr>
										<td >Client</td>
										<td >
										<select class="form-control" style="text-align:center" id="client_id" name="client_id" required>
												<option value="42" selected>Office Depot</option>
											</select>
										</td>
											<td >Process</td>
										<td >
											<select class="form-control" style="text-align:center" id="process_id" name="process_id" readonly>
												<?php 
												if($agent_data_each['process_id']!=''){
													?>
													<option value="<?php echo $agent_data_each['process_id'] ?>"><?php echo $agent_data_each['process_name'] ?></option>
													<?php 
												}else{
													?>
													<option value="">-Select-</option>
													<?php
												}
												?>
												
												
												<?php foreach ($process_details as $key => $value){ ?>
												<option value="<?php echo $value['id'] ?>"><?php echo $value['name'] ?></option>
											<?php } ?>
											</select>
										</td>
									</tr>
									<?php 
									$auditDate = ($agent_data_each['audit_date']);
									if($agent_data_each['callout_date']!=''){
										$call_out_Date = ($agent_data_each['callout_date']);
									}
									?>
									<tr>
										<td >Date of Coaching</td>
										<td >
										<input type="text" class="form-control" name="date_coaching" id="audit_date" value = "<?php echo $agent_data_each['audit_date']; ?>" readonly>
										</td>
											<td >Callout Date</td>
										<td >
											<input type="text" class="form-control" name="callout_date" id="callout_date" value = "<?php echo $agent_data_each['callout_date']; ?>">
										</td>
									</tr>

									<tr>
										<td >Coaching Age</td>
										<td >
										<input type="text" class="form-control" name="coaching_age" id="coaching_age" value="<?php echo $agent_data_each['coaching_age']; ?>">
										</td>
											<td >Team Lead</td>
										<td >
											<input type="text" class="form-control" name="tead_lead" value="<?php echo $agent_data_each['tl_name']; ?>">
										</td>
									</tr>

									<?php 
									$clDate_val=mysql2mmddyy($agent_data_each['call_date']);
									?>
									<tr>
										<td >Survey Date</td>
										<td >
										<input type="text" class="form-control" name="survey_date" id="survey_date" value="<?php echo $agent_data_each['call_date']; ?>">
										</td>
											<td style="color:red;">Category 1</td>
										<td >
											<input type="text" class="form-control" name="category1" value="<?php echo $agent_data_each['category1']; ?>">
										</td>
									</tr>


									<tr>
										<td >Queue Name</td>
										<td >
										<input type="text" class="form-control" name="queue_name" value="<?php echo $agent_data_each['queue_name']; ?>">
										</td>
											<td style="color:red;">Sub Category</td>
										<td >
											<input type="text" class="form-control" name="sub_category" value="<?php echo $agent_data_each['sub_Category']; ?>">
										</td>
									</tr>


									<tr>
										<td >Session ID</td>
										<td >
										<input type="text" class="form-control" name="session_id" value="<?php echo $agent_data_each['session_id']; ?>">
										</td>
											<td >NPS Comments</td>
										<td >
											<!-- <input type="text" class="form-control" name="nps_comment" value="<?php //echo $agent_data_each['nps_comment']; ?>"> -->
											<textarea class="form-control" id="nps_comment" name="nps_comment" value="<?php echo $agent_data_each['nps_comment']; ?>" required><?php echo $agent_data_each['nps_comment']; ?></textarea>
										</td>
									</tr>


									<tr>
										<td >Agent</td>
										<td >
										<input type="text" class="form-control" name="agent" value="<?php echo $agent_data_each['agent_name']; ?>">
										</td>
											<td >RCA L1</td>
										<td >
											<select class="form-control" name="rcal1" id="rcal1">
												<option vlaue="">Select</option>
												<option <?php echo $agent_data_each['rca_level1']=='Agent'?"selected":""; ?> value="Agent">Agent</option>
												<option <?php echo $agent_data_each['rca_level1']=='Customer'?"selected":""; ?> value="Customer">Customer</option>
												<option <?php echo $agent_data_each['rca_level1']=='Process'?"selected":""; ?> value="Process">Process</option>
												<option <?php echo $agent_data_each['rca_level1']=='Technology'?"selected":""; ?> value="Technology">Technology</option>
											</select>

											<!-- <input type="text" class="form-control" name="rcal1" value="<?php //echo $agent_data_each['rca_level1']; ?>"> -->
										</td>
									</tr>


									<tr>
										<td >Tenurity</td>
										<td >
										<input type="text" class="form-control" name="tenuarity" value="<?php echo $agent_data_each['tenuarity']; ?>">
										</td>
											<td >RCA L2</td>
										<td >
											<select class="form-control" name="rcal2" id="rcal2">
												<option vlaue="" disabled>Select</option>
												<?php 
												if($agent_data_each['rca_level2']!=''){
													?>
													<option value="<?php echo $agent_data_each['rca_level2'];?>"><?php echo $agent_data_each['rca_level2'];?></option>
													<?php 
												}
												?>
											</select>
											<!-- <input type="text" class="form-control" name="rcal2" value="<?php //echo $agent_data_each['rca_level2']; ?>"> -->
										</td>
									</tr>


									<tr>
										<td >NPS Score</td>
										<td >
										<input type="text" class="form-control" name="nps_score" value="<?php echo $agent_data_each['nps_score']; ?>">
										</td>
											<td >Controllable/Uncontrollable</td>
										<td >
											<select class="form-control" name="controllable_uncontrollable">
												<option vlaue="" disabled>Select</option>
												<option <?php echo $agent_data_each['controllable_uncontrollable']=='controllable'?"selected":""; ?> value="controllable">controllable</option>
												<option <?php echo $agent_data_each['controllable_uncontrollable']=='uncontrollable'?"selected":""; ?> value="uncontrollable">uncontrollable</option>
											</select>
										</td>
									</tr>


									<tr>
										<td >Month</td>
										<td >
										<input type="text" class="form-control" name="month" value="<?php echo date('F', strtotime('m')); ?>">
										</td>
										<td>VOC:</td>
										<td colspan="3">
											<select class="form-control" id="voc" name="voc" required>
												<option value="">-Select-</option>
												<option <?php echo $agent_data_each['voc']=='1'?"selected":""; ?> value="1">1</option>
												<option <?php echo $agent_data_each['voc']=='2'?"selected":""; ?> value="2">2</option>
												<option <?php echo $agent_data_each['voc']=='3'?"selected":""; ?> value="3">3</option>
												<option <?php echo $agent_data_each['voc']=='4'?"selected":""; ?> value="4">4</option>
												<option <?php echo $agent_data_each['voc']=='5'?"selected":""; ?> value="5">5</option>
											</select>
										</td>
											
									</tr>
									<tr>
										<td>Audit Type:</td>
										<td>
											<select class="form-control" id="audit_type" name="audit_type" required>
											<option value="">-Select-</option>
											<option <?php echo $agent_data_each['audit_type']=='CQ Audit'?"selected":""; ?> value="CQ Audit">CQ Audit</option>
											<option <?php echo $agent_data_each['audit_type']=='BQ Audit'?"selected":""; ?> value="BQ Audit">BQ Audit</option>
											<option <?php echo $agent_data_each['audit_type']=='Calibration'?"selected":""; ?> value="Calibration">Calibration</option>
											<option <?php echo $agent_data_each['audit_type']=='Pre-Certificate Mock Call'?"selected":""; ?> value="Pre-Certificate Mock Call">Pre-Certificate Mock Call</option>
											<option <?php echo $agent_data_each['audit_type']=='Certificate Audit'?"selected":""; ?> value="Certificate Audit">Certificate Audit</option>
											</select>
										</td>
										<td class="auType">Auditor Type</td>
										<td class="auType">
											<select class="form-control" id="auditor_type" name="auditor_type">
												<option value="">-Select-</option>
												<option value="Master">Master</option>
												<option value="Regular">Regular</option>
											</select>
										</td>
										
									</tr>
									<tr>
										<td>Fusion ID:</td>
										
										<td><input type="text" readonly class="form-control"  id="fusion_id" name="fusion_id" value="<?php echo $agent_data_each['fusion_id']; ?>"></td>
									</tr>

									<tr><td colspan="6" style="background-color:#C5C8C8"></td></tr>

									<tr>
										<td >RCA Details</td>
										<td >
										<textarea class="form-control" id="rca_details" name="rca_details" value="<?php echo $agent_data_each['rca_details']; ?>" required><?php echo $agent_data_each['rca_details']; ?></textarea>
										</td>
											<td >Recommendation</td>
										<td >
											<textarea class="form-control" id="recommendation" name="recommendation" value="<?php echo $agent_data_each['recommendation']; ?>" required><?php echo $agent_data_each['recommendation']; ?></textarea>
										</td>
									</tr>

								</tbody>
							</table>
								<table class="table table-striped skt-table" width="100%" style="margin-top:-19px;">
								<tbody>
									<tr><td colspan="11" style="background-color:#C5C8C8"></td></tr>
									<tr>
										<td colspan="3">Audio Files</td>
										<?php 
										if($agent_data_each['attach_file']==''){
											?>
												<td colspan="3" class="file_class"><input type="file" multiple class="form-control" id="attach_file" name="attach_file[]"></td>
											<?php
										}else{
											?>
												<td colspan="3" class="file_class"><input type="file" multiple class="form-control" id="attach_file" name="attach_file[]"></td>
												<td colspan=5>
												<?php if($agent_data_each['attach_file']!=''){ 
													$attach_file = explode(",",$agent_data_each['attach_file']);
													 foreach($attach_file as $mp){ ?>
														<audio controls='' style="background-color:#607F93"> 
														  <source src="<?php echo base_url(); ?>qa_files/qa_agent_coaching/<?php echo $mp; ?>" type="audio/ogg">
														  <source src="<?php echo base_url(); ?>qa_files/qa_agent_coaching/<?php echo $mp; ?>" type="audio/mpeg">
														</audio> </br>
													 <?php }  
												}?>
											</td>
											<?php
										}
										?>
										

									</tr>
									<?php if($upload_raw_id!=0){ ?>
										<tr><td colspan=3 style="font-size:16px; font-weight:bold">Agent Review:</td><td colspan=4><?php echo $agent_data_each['agent_rvw_note'] ?></td></tr>
										<tr><td colspan=3 style="font-size:16px; font-weight:bold">Management Review:</td><td colspan=4><?php echo $agent_data_each['mgnt_rvw_note'] ?></td></tr>
										<tr><td colspan=3 style="font-size:16px; font-weight:bold">Client Review:</td><td colspan=4><?php echo $agent_data_each['client_rvw_note'] ?></td></tr>
										
										<tr><td colspan=3  style="font-size:16px">Your Review</td><td colspan=4><textarea class="form-control1" style="width:100%" id="note" name="note" required></textarea></td></tr>
									<?php } 
									if(is_access_qa_module()==true || is_access_qa_operations_module()==true){
											if(is_available_qa_feedback($agent_data_each['entry_date'],72) == true){ ?>
												<tr><td colspan="10"><button class="btn btn-success waves-effect" type="submit" id='qaformsubmit' name='btnSave' value="SAVE" style="width:500px">SAVE</button></td></tr>
									<?php 	
											}
										}
									?>
							
									<!-- <tr>
										<td colspan="10"><button class="btn btn-success btn-new waves-effect" type="submit" id="qaformsubmit" >SAVE</button></td>

									</tr> -->

								</tbody>
							</table>
						</div>
					</div>

				  </form>

				</div>
			</div>
		</div>

	</section>
</div>


<script>
    // Replace the <textarea id="editor1"> with a CKEditor
    // instance, using default configuration.
    //CKEDITOR.replace( 'coaching_comment' );
    //CKEDITOR.replace( 'rca_details' );
    //CKEDITOR.replace( 'recommendation' );
</script>

