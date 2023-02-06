
<style>

.table > tbody > tr > td{
	text-align: center;
	font-size:13px;
}

#theader{
	font-size:20px;
	font-weight:bold;
}

input[type='checkbox']{
	width: 20px;
}
</style>

<?php if($homeward_id!=0){
if(is_access_qa_edit_feedback()==false){ ?>
	<style>
		.form-control{
			pointer-events:none;
			background-color:#D5DBDB;
		}
	</style>
<?php } 
} ?>


<div class="wrap">
	<section class="app-content">
	
		<div class="row">
			<div class="col-12">
				<div class="widget">

				  <form id="form_audit_user" method="POST" action="" enctype="multipart/form-data">
					
					<div class="widget-body">
					 	<div class="table-responsive">
							<table class="table table-striped skt-table" width="100%">
								<tbody>
									<tr style="background-color:#AEB6BF">
										<td colspan="8" id="theader" style="font-size:30px">Homeward Health</td>
										<input type="hidden" name="audit_start_time" value="<?php echo CurrMySqlDate(); ?>">
									</tr>
									<tr>
									<?php
										if($homeward_id==0){
											$auditorName = get_username();
											$auditDate = CurrDateMDY();
											$clDate_val='';
										}else{
											if($homeward_health['entry_by']!=''){
												$auditorName = $homeward_health['auditor_name'];
											}else{
												$auditorName = $homeward_health['client_name'];
											}
											$auditDate = mysql2mmddyy($homeward_health['audit_date']);
											$clDate_val=mysql2mmddyy($homeward_health['call_date']);
										}
									?>
										<td>QA Name:</td>
										<td style="width:300px"><input type="text" class="form-control" value="<?php echo $auditorName; ?>" disabled></td>
										<td style="width:150px">Audit Date:</td>
										<td colspan="3"><input type="text" class="form-control" value="<?php echo $auditDate; ?>" disabled></td>
										<td style="width:200px">Call Date:</td>
										<td style="width:400px"><input type="text" class="form-control" id="call_date" name="call_date" value="<?php echo $clDate_val; ?>" required></td>
									</tr>
									<tr>
										<td>Agent:</td>
										<td>
											<select class="form-control" id="agent_id" name="agent_id" required>
												<option value="<?php echo $homeward_health['agent_id'] ?>"><?php echo $homeward_health['fname']." ".$homeward_health['lname'] ?></option>
												<option value="">-Select-</option>
												<?php foreach($agentName as $row):  ?>
													<option value="<?php echo $row['id']; ?>"><?php echo $row['name']; ?></option>
												<?php endforeach; ?>
											</select>
										</td>
										<td>Fusion ID:</td>
										<td colspan="3"><input type="text" class="form-control" id="fusion_id" name="" value="<?php echo $homeward_health['fusion_id']; ?>" readonly></td>
										<td>L1 Supervisor:</td>
										<td style="width:250px">
											<select class="form-control" id="tl_id" name="tl_id" readonly>
												<option value="<?php echo $homeward_health['tl_id'] ?>"><?php echo $homeward_health['tl_name'] ?></option>
												<option value="">--Select--</option>
												<?php foreach($tlname as $tl): ?>
													<option value="<?php echo $tl['id']; ?>"><?php echo $tl['fname']." ".$tl['lname']; ?></option>
												<?php endforeach; ?>	
											</select>
										</td>
									</tr>
									<tr>
										<td>Campaign:</td>
										<td><input type="text" class="form-control" id="" name="campaign" value="<?php echo $homeward_health['campaign']; ?>" required></td>
										<!-- <td><input type="text" class="form-control" id="campaign" name="campaign" onkeyup="word_length_limit()" value="<?php //echo $homeward_health['campaign']; ?>" required></td> -->
									</tr>
									<tr>
										<td>Audit Type:</td>
										<td>
											<select class="form-control" id="audit_type" name="audit_type" required>
											<option value="">-Select-</option>
											<option <?php echo $homeward_health['audit_type']=='CQ Audit'?"selected":""; ?> value="CQ Audit">CQ Audit</option>
											<option <?php echo $homeward_health['audit_type']=='BQ Audit'?"selected":""; ?> value="BQ Audit">BQ Audit</option>
											<option <?php echo $homeward_health['audit_type']=='Calibration'?"selected":""; ?> value="Calibration">Calibration</option>
											<option <?php echo $homeward_health['audit_type']=='Pre-Certificate Mock Call'?"selected":""; ?> value="Pre-Certificate Mock Call">Pre-Certificate Mock Call</option>
											<option <?php echo $homeward_health['audit_type']=='Certificate Audit'?"selected":""; ?> value="Certificate Audit">Certificate Audit</option>
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
										<td>VOC:</td>
										<td colspan="3">
											<select class="form-control" id="voc" name="voc" required>
												<option value="">-Select-</option>
												<option <?php echo $homeward_health['voc']=='1'?"selected":""; ?> value="1">1</option>
												<option <?php echo $homeward_health['voc']=='2'?"selected":""; ?> value="2">2</option>
												<option <?php echo $homeward_health['voc']=='3'?"selected":""; ?> value="3">3</option>
												<option <?php echo $homeward_health['voc']=='4'?"selected":""; ?> value="4">4</option>
												<option <?php echo $homeward_health['voc']=='5'?"selected":""; ?> value="5">5</option>
											</select>
										</td>
									</tr>
									<tr>
										<td>Call ID:</td>
										<td><input type="text" class="form-control" id="" name="call_id" value="<?php echo $homeward_health['call_id']; ?>" required></td>
										<td>Call Duration:</td>
										<td colspan="3"><input type="text" class="form-control" id="call_duration" name="call_duration" value="<?php echo $homeward_health['call_duration']; ?>" required></td>
										<td>Phone Number:</td>
										<td><input type="number" class="form-control" id="phone_number" name="phone_number" value="<?php echo $homeward_health['phone_number']; ?>" required>
										</td>
									</td>
									<tr>
										<td style="font-weight:bold">Possible Score:</td>
										<td colspan="2"><input type="text" readonly id="homewardPossibleScore" name="" class="form-control" style="font-weight:bold" ></td>
										<td style="font-weight:bold">Earned Score:</td>
										<td colspan="2"><input type="text" readonly id="homewardEarnedScore" name="" class="form-control" style="font-weight:bold" ></td>
										<td style="font-weight:bold">Overall Score:</td>
										<td colspan="2"><input type="text" readonly id="homewardOverallScore" name="overall_score" class="form-control" style="font-weight:bold" value="<?php echo $homeward_health['overall_score'] ?>"></td>
									</tr>
									<tr style="font-weight:bold; background-color:#3498DB; color:white"><td colspan=8>SOFT SKILLS</td></tr>
									<tr style="font-weight:bold; background-color:#1F618D; color:white">
										<td colspan=3>Opening (11)</td>
										<td>Weightage</td>
										<td>STATUS</td>
										<td colspan=2>REMARKS</td>
										<td>Error Type</td>
									</tr>
									<tr>
										<td colspan=3><b>Call Opening: Agent Name and Brand Name</b></td>
										<td>3</td>
										<td>
											<select class="form-control homewardVal business" id="" name="call_opening" required>
												<option homeward_val=3 <?php echo $homeward_health['call_opening']=='Yes'?"selected":""; ?> value="Yes">Yes</option>
												<option homeward_val=3 <?php echo $homeward_health['call_opening']=='No'?"selected":""; ?> value="No">No</option>
												<!-- <option homeward_val=3 <?php //echo $homeward_health['call_opening']=='N/A'?"selected":""; ?> value="N/A">N/A</option> -->
											</select>
										</td>
										<td colspan=2><input type="text" class="form-control" name="cmt1" value="<?php echo $homeward_health['cmt1'] ?>" ></td>
										<td>Business</td>
									</tr>
									<tr>
										<td colspan=3><b>Confirm the Members First Name</b></td>
										<td>2</td>
										<td>
											<select class="form-control homewardVal compliancee" id="" name="confirm_first_name" required>
												<option homeward_val=2 <?php echo $homeward_health['confirm_first_name']=='Yes'?"selected":""; ?> value="Yes">Yes</option>
												<option homeward_val=2 <?php echo $homeward_health['confirm_first_name']=='No'?"selected":""; ?> value="No">No</option>
												<option homeward_val=2 <?php echo $homeward_health['confirm_first_name']=='N/A'?"selected":""; ?> value="N/A">N/A</option>
											</select>
										</td>
										<td colspan=2><input type="text" class="form-control" name="cmt2" value="<?php echo $homeward_health['cmt2'] ?>" ></td>
										<td>Compliance</td>
									</tr>
									<tr>
										<td colspan=3><b>Use the appropriate scripting</b></td>
										<td>4</td>
										<td>
											<select class="form-control homewardVal compliancee" id="" name="appropriate_scripting" required>
												<option homeward_val=4 <?php echo $homeward_health['appropriate_scripting']=='Yes'?"selected":""; ?> value="Yes">Yes</option>
												<option homeward_val=4 <?php echo $homeward_health['appropriate_scripting']=='No'?"selected":""; ?> value="No">No</option>
												<!-- <option homeward_val=2 <?php //echo $homeward_health['appropriate_scripting']=='N/A'?"selected":""; ?> value="N/A">N/A</option> -->
											</select>
										</td>
										<td colspan=2><input type="text" class="form-control" name="cmt3" value="<?php echo $homeward_health['cmt3'] ?>" ></td>
										<td>Compliance</td>
									</tr>
									<tr>
										<td colspan=3><b>Greeting for inbound: answered within 5 seconds</b></td>
										<td>2</td>
										<td>
											<select class="form-control homewardVal business" id="" name="greetings_inbound" required>
												<option homeward_val=2 <?php echo $homeward_health['greetings_inbound']=='Yes'?"selected":""; ?> value="Yes">Yes</option>
												<option homeward_val=2 <?php echo $homeward_health['greetings_inbound']=='No'?"selected":""; ?> value="No">No</option>
												<option homeward_val=2 <?php echo $homeward_health['greetings_inbound']=='N/A'?"selected":""; ?> value="N/A">N/A</option>
											</select>
										</td>
										<td colspan=2><input type="text" class="form-control" name="cmt4" value="<?php echo $homeward_health['cmt4'] ?>" ></td>
										<td>Business</td>
									</tr>
									<tr style="font-weight:bold; background-color:#1F618D; color:white">
										<td colspan=3>Personalization (25%)</td>
										<td>Weightage</td>
										<td>STATUS</td>
										<td colspan=2>REMARKS</td>
										<td>Error Type</td>
									</tr>
									<tr>
										<td colspan=3><b>Serving with Empathy - Active Listening</b></td>
										<td>0-4</td>
										<td>
											<select class="form-control homewardVal customer" id="" name="active_listening" required>
												<option homeward_val=4 <?php echo $homeward_health['active_listening']=='4'?"selected":""; ?> value="4">4</option>
												<option homeward_val=3 <?php echo $homeward_health['active_listening']=='3'?"selected":""; ?> value="3">3</option>
												<option homeward_val=2 <?php echo $homeward_health['active_listening']=='2'?"selected":""; ?> value="2">2</option>
												<option homeward_val=1 <?php echo $homeward_health['active_listening']=='1'?"selected":""; ?> value="1">1</option>
												<option homeward_val=0 <?php echo $homeward_health['active_listening']=='0'?"selected":""; ?> value="0">0</option>
											</select>
										</td>
										<td colspan=2><input type="text" class="form-control" name="cmt5" value="<?php echo $homeward_health['cmt5'] ?>" ></td>
										<td>Customer</td>
									</tr>
									<tr>
										<td colspan=3><b>Serving with Empathy - Positive Tone</b></td>
										<td>4</td>
										<td>
											<select class="form-control homewardVal customer" id="" name="positive_tone" required>
												<option homeward_val=4 <?php echo $homeward_health['positive_tone']=='Yes'?"selected":""; ?> value="Yes">Yes</option>
												<option homeward_val=4 <?php echo $homeward_health['positive_tone']=='No'?"selected":""; ?> value="No">No</option>
												<!-- <option homeward_val=4 <?php //echo $homeward_health['positive_tone']=='N/A'?"selected":""; ?> value="N/A">N/A</option> -->
											</select>
										</td>
										<td colspan=2><input type="text" class="form-control" name="cmt6" value="<?php echo $homeward_health['cmt6'] ?>" ></td>
										<td>Customer</td>
									</tr>
									<tr>
										<td colspan=3><b>Serving with Empathy - Positive Language/ Rapport Building</b></td>
										<td>4</td>
										<td>
											<select class="form-control homewardVal customer" id="" name="positive_language" required>
												<option homeward_val=4 <?php echo $homeward_health['positive_language']=='Yes'?"selected":""; ?> value="Yes">Yes</option>
												<option homeward_val=4 <?php echo $homeward_health['positive_language']=='No'?"selected":""; ?> value="No">No</option>
												<!-- <option homeward_val=4 <?php //echo $homeward_health['negotiation']=='N/A'?"selected":""; ?> value="N/A">N/A</option> -->
											</select>
										</td>
										<td colspan=2><input type="text" class="form-control" name="cmt7" value="<?php echo $homeward_health['cmt7'] ?>" ></td>
										<td>Customer</td>
									</tr>
									<tr>
										<td colspan=3><b>Acknowledgements timely and effectively</b></td>
										<td>3</td>
										<td>
											<select class="form-control homewardVal customer" id="" name="effective_time" required>
												<option homeward_val=3 <?php echo $homeward_health['effective_time']=='Yes'?"selected":""; ?> value="Yes">Yes</option>
												<option homeward_val=3 <?php echo $homeward_health['effective_time']=='No'?"selected":""; ?> value="No">No</option>
												<!-- <option homeward_val=3 <?php //echo $homeward_health['positive_language']=='N/A'?"selected":""; ?> value="N/A">N/A</option> -->
											</select>
										</td>
										<td colspan=2><input type="text" class="form-control" name="cmt8" value="<?php echo $homeward_health['cmt8'] ?>" ></td>
										<td>Customer</td>
									</tr>
									<tr>
										<td colspan=3><b>Pace of Speech</b></td>
										<td>4</td>
										<td>
											<select class="form-control homewardVal customer" id="" name="pace_speech" required>
												<option homeward_val=4 <?php echo $homeward_health['pace_speech']=='Yes'?"selected":""; ?> value="Yes">Yes</option>
												<option homeward_val=4 <?php echo $homeward_health['pace_speech']=='No'?"selected":""; ?> value="No">No</option>
											</select>
										</td>
										<td colspan=2><input type="text" class="form-control" name="cmt9" value="<?php echo $homeward_health['cmt9'] ?>" ></td>
										<td>Customer</td>
									</tr>
									<tr>
										<td colspan=3><b>Did the agent used effective engagement</b></td>
										<td>3</td>
										<td>
											<select class="form-control homewardVal customer" id="" name="effective_management" required>
												<option homeward_val=3 <?php echo $homeward_health['effective_management']=='Yes'?"selected":""; ?> value="Yes">Yes</option>
												<option homeward_val=3 <?php echo $homeward_health['effective_management']=='No'?"selected":""; ?> value="No">No</option>
											</select>
										</td>
										<td colspan=2><input type="text" class="form-control" name="cmt10" value="<?php echo $homeward_health['cmt10'] ?>" ></td>
										<td>Customer</td>
									</tr>
									<tr>
										<td colspan=3><b>Address Caller by Name</b></td>
										<td>3</td>
										<td>
											<select class="form-control homewardVal customer" id="" name="address_caller" required>
												<option homeward_val=3 <?php echo $homeward_health['address_caller']=='Yes'?"selected":""; ?> value="Yes">Yes</option>
												<option homeward_val=3 <?php echo $homeward_health['address_caller']=='No'?"selected":""; ?> value="No">No</option>
											</select>
										</td>
										<td colspan=2><input type="text" class="form-control" name="cmt11" value="<?php echo $homeward_health['cmt11'] ?>" ></td>
										<td>Customer</td>
									</tr>
									<tr style="font-weight:bold; background-color:#1F618D; color:white">
										<td colspan=3>Active Listening and Engagement(10)</td>
										<td>Weightage</td>
										<td>STATUS</td>
										<td colspan=2>REMARKS</td>
										<td>Error Type</td>
									</tr>
									<tr>
										<td colspan=3><b>Did not Interrupt the caller</b></td>
										<td>3</td>
										<td>
											<select class="form-control homewardVal customer" id="" name="interrupt_caller" required>
												<option homeward_val=3 <?php echo $homeward_health['interrupt_caller']=='Yes'?"selected":""; ?> value="Yes">No</option>
												<option homeward_val=3 <?php echo $homeward_health['interrupt_caller']=='No'?"selected":""; ?> value="No">Yes</option>
											</select>
										</td>
										<td colspan=2><input type="text" class="form-control" name="cmt12" value="<?php echo $homeward_health['cmt12'] ?>" ></td>
										<td>Customer</td>
									</tr>
									<tr>
										<td colspan=3><b>Did the agent used correct USP (unique selling point) for retention</b></td>
										
										<td>3</td>
										<td>
											<select class="form-control homewardVal business" id="" name="correct_retension" required>
												<option homeward_val=3 <?php echo $homeward_health['correct_retension']=='Yes'?"selected":""; ?> value="Yes">Yes</option>
												<option homeward_val=3 <?php echo $homeward_health['correct_retension']=='No'?"selected":""; ?> value="No">No</option>
												<option homeward_val=3 <?php echo $homeward_health['correct_retension']=='N/A'?"selected":""; ?> value="N/A">N/A</option>
											</select>
										</td>
										<td colspan=2><input type="text" class="form-control" name="cmt13" value="<?php echo $homeward_health['cmt13'] ?>" ></td>
										<td>Business</td>
									</tr>
									<tr>
										<td colspan=3><b>Did the agent used correct USP (unique selling point) for retention</b></td>
										
										<td>4</td>
										<td>
											<select class="form-control homewardVal customer" id="" name="probing_questions" required>
												<option homeward_val=4 <?php echo $homeward_health['probing_questions']=='Yes'?"selected":""; ?> value="Yes">Yes</option>
												<option homeward_val=4 <?php echo $homeward_health['probing_questions']=='No'?"selected":""; ?> value="No">No</option>
												<option homeward_val=4 <?php echo $homeward_health['probing_questions']=='N/A'?"selected":""; ?> value="N/A">N/A</option>
											</select>
										</td>
										<td colspan=2><input type="text" class="form-control" name="cmt14" value="<?php echo $homeward_health['cmt14'] ?>" ></td>
										<td>Customer</td>
									</tr>
						
									<tr style="font-weight:bold; background-color:#1F618D; color:white">
										<td colspan=3>Hold/Transfer Policy (12%)</td>
										<td>Weightage</td>
										<td>STATUS</td>
										<td colspan=2>REMARKS</td>
										<td>Error Type</td>
									</tr>
									<tr>
										<td colspan=3><b>Hold Policy (60 Seconds)</b></td>
										<td>5</td>
										<td>
											<select class="form-control homewardVal compliancee" id="hold_policy" name="hold_policy" required>
												<option homeward_val=5 <?php echo $homeward_health['hold_policy']=='Yes'?"selected":""; ?> value="Yes">Yes</option>
												<option homeward_val=5 <?php echo $homeward_health['hold_policy']=='No'?"selected":""; ?> value="No">No</option>
												<option homeward_val=5 <?php echo $homeward_health['hold_policy']=='N/A'?"selected":""; ?> value="N/A">N/A</option>
											</select>
										</td>
										<td colspan=2><input type="text" class="form-control" name="cmt15" value="<?php echo $homeward_health['cmt15'] ?>" ></td>
										<td>Compliance</td>
									</tr>
									<tr>
										<td colspan=3><b>Dead Air</b></td>
										<td>4</td>
										<td>
											<select class="form-control homewardVal customer" id="dead_air" name="dead_air" required>
												<option homeward_val=4 <?php echo $homeward_health['dead_air']=='Yes'?"selected":""; ?> value="Yes">No</option>
												<option homeward_val=4 <?php echo $homeward_health['dead_air']=='No'?"selected":""; ?> value="No">Yes</option>
												<option homeward_val=4 <?php echo $homeward_health['dead_air']=='N/A'?"selected":""; ?> value="N/A">N/A</option>
											</select>
										</td>
										<td colspan=2><input type="text" class="form-control" name="cmt16" value="<?php echo $homeward_health['cmt16'] ?>" ></td>
										<td>Customer</td>
									</tr>
									<tr>
										<td colspan=3><b>Hold Verbiage</b></td>
										<td>3</td>
										<td>
											<select class="form-control homewardVal compliancee" id="hold_verbiage" name="hold_verbiage" required>
												<option homeward_val=3 <?php echo $homeward_health['hold_verbiage']=='Yes'?"selected":""; ?> value="Yes">Yes</option>
												<option homeward_val=3 <?php echo $homeward_health['hold_verbiage']=='No'?"selected":""; ?> value="No">No</option>
												<option homeward_val=3 <?php echo $homeward_health['hold_verbiage']=='N/A'?"selected":""; ?> value="N/A">N/A</option>
											</select>
										</td>
										<td colspan=2><input type="text" class="form-control" name="cmt17" value="<?php echo $homeward_health['cmt17'] ?>" ></td>
										<td>Compliance</td>
									</tr>

									<tr style="font-weight:bold; background-color:#1F618D; color:white">
										<td colspan=3>Resolution Accountability (20)</td>
										<td>Weightage</td>
										<td style="width: 150px;">STATUS</td>
										<td colspan=2>REMARKS</td>
										<td>Error Type</td>
									</tr>
									<tr>
										<td colspan=3><b>Accomplish the resolution accurately, and completely</b></td>
										<td>8</td>
										<td>
											<select class="form-control homewardVal business" id="accomplish_resolution" name="accomplish_resolution" required>
												<option homeward_val=8 <?php echo $homeward_health['accomplish_resolution']=='Yes'?"selected":""; ?> value="Yes">Yes</option>
												<option homeward_val=8 <?php echo $homeward_health['accomplish_resolution']=='No'?"selected":""; ?> value="No">No</option>
											</select>
										</td>
										<td colspan=2><input type="text" class="form-control" name="cmt18" value="<?php echo $homeward_health['cmt18'] ?>" ></td>
										<td>Business</td>
									</tr>
									<tr>
										<td colspan=3><b>Performed follow-up steps</b></td>
										<td>6</td>
										<td>
											<select class="form-control homewardVal business" id="followup_steps" name="followup_steps" required>
												<option homeward_val=6 <?php echo $homeward_health['followup_steps']=='Yes'?"selected":""; ?> value="Yes">Yes</option>
												<option homeward_val=6 <?php echo $homeward_health['followup_steps']=='No'?"selected":""; ?> value="No">No</option>
											</select>
										</td>
										<td colspan=2><input type="text" class="form-control" name="cmt19" value="<?php echo $homeward_health['cmt19'] ?>" ></td>
										<td>Business</td>
									</tr>
									<tr>
										<td colspan=3><b>Answered the caller inquiries</b></td>
										<td>6</td>
										<td>
											<select class="form-control homewardVal customer" id="answered_caller" name="answered_caller" required>
												<option homeward_val=6 <?php echo $homeward_health['answered_caller']=='Yes'?"selected":""; ?> value="Yes">Yes</option>
												<option homeward_val=6 <?php echo $homeward_health['answered_caller']=='No'?"selected":""; ?> value="No">No</option>
											</select>
										</td>
										<td colspan=2><input type="text" class="form-control" name="cmt20" value="<?php echo $homeward_health['cmt20'] ?>" ></td>
										<td>Customer</td>
									</tr>

									<tr style="font-weight:bold; background-color:#1F618D; color:white">
										<td colspan=3>Policies & Procedures (10)</td>
										<td>Weightage</td>
										<td>STATUS</td>
										<td colspan=2>REMARKS</td>
										<td>Error Type</td>
									</tr>
									<tr>
										<td colspan=3><b>Read out Policies & Procedures</b></td>
										<td>7</td>
										<td>
											<select class="form-control homewardVal compliancee" id="" name="policies_procedures" required>
												<option homeward_val=7 <?php echo $homeward_health['policies_procedures']=='Yes'?"selected":""; ?> value="Yes">Yes</option>
												<option homeward_val=7 <?php echo $homeward_health['policies_procedures']=='No'?"selected":""; ?> value="No">No</option>
												<option homeward_val=7 <?php echo $homeward_health['policies_procedures']=='N/A'?"selected":""; ?> value="N/A">N/A</option>
											</select>
										</td>
										<td colspan=2><input type="text" class="form-control" name="cmt21" value="<?php echo $homeward_health['cmt21'] ?>" ></td>
										<td>Compliance</td>
									</tr>
									<tr>
										<td colspan=3><b>Offers Internal/External Telephone</b></td>
										<td>3</td>
										<td>
											<select class="form-control homewardVal business" id="" name="offers_telephone" required>
												<option homeward_val=3 <?php echo $homeward_health['offers_telephone']=='Yes'?"selected":""; ?> value="Yes">Yes</option>
												<option homeward_val=3 <?php echo $homeward_health['offers_telephone']=='No'?"selected":""; ?> value="No">No</option>
												<option homeward_val=3 <?php echo $homeward_health['offers_telephone']=='N/A'?"selected":""; ?> value="N/A">N/A</option>
											</select>
										</td>
										<td colspan=2><input type="text" class="form-control" name="cmt22" value="<?php echo $homeward_health['cmt22'] ?>" ></td>
										<td>Business</td>
									</tr>

									<tr style="font-weight:bold; background-color:#1F618D; color:white">
										<td colspan=3>Call Closing (12)</td>
										<td>Weightage</td>
										<td>STATUS</td>
										<td colspan=2>REMARKS</td>
										<td>Error Type</td>
									</tr>
									<tr>
										<td colspan=3><b>Verify the Members Full Name, DOB, Address, and Phone Number (All 4)</b></td>
										<td>5</td>
										<td>
											<select class="form-control homewardVal compliancee" id="" name="verify_members" required>
												<option homeward_val=5 <?php echo $homeward_health['verify_members']=='Yes'?"selected":""; ?> value="Yes">Yes</option>
												<option homeward_val=5 <?php echo $homeward_health['verify_members']=='No'?"selected":""; ?> value="No">No</option>
												<option homeward_val=5 <?php echo $homeward_health['verify_members']=='N/A'?"selected":""; ?> value="N/A">N/A</option>
											</select>
										</td>
										<td colspan=2><input type="text" class="form-control" name="cmt23" value="<?php echo $homeward_health['cmt23'] ?>" ></td>
										<td>Compliance</td>
									</tr>
									<tr>
										<td colspan=3><b>Offer Additional Assistance</b></td>
										<td>3</td>
										<td>
											<select class="form-control homewardVal customer" id="" name="additional_assistance" required>
												<option homeward_val=3 <?php echo $homeward_health['additional_assistance']=='Yes'?"selected":""; ?> value="Yes">Yes</option>
												<option homeward_val=3 <?php echo $homeward_health['additional_assistance']=='No'?"selected":""; ?> value="No">No</option>
												<option homeward_val=3 <?php echo $homeward_health['additional_assistance']=='N/A'?"selected":""; ?> value="N/A">N/A</option>
											</select>
										</td>
										<td colspan=2><input type="text" class="form-control" name="cmt24" value="<?php echo $homeward_health['cmt24'] ?>" ></td>
										<td>Customer</td>
									</tr>
									<tr>
										<td colspan=3><b>Offer Additional Assistance</b></td>
										<td>4</td>
										<td>
											<select class="form-control homewardVal customer" id="" name="thanks_member" required>
												<option homeward_val=4 <?php echo $homeward_health['thanks_member']=='Yes'?"selected":""; ?> value="Yes">Yes</option>
												<option homeward_val=4 <?php echo $homeward_health['thanks_member']=='No'?"selected":""; ?> value="No">No</option>
											</select>
										</td>
										<td colspan=2><input type="text" class="form-control" name="cmt25" value="<?php echo $homeward_health['cmt25'] ?>" ></td>
										<td>Customer</td>
									</tr>
									<tr style="font-weight:bold; background-color:#1F618D; color:white">
										<td colspan=3>Documentation</td>
										<td>Weightage</td>
										<td>STATUS</td>
										<td colspan=2>REMARKS</td>
										<td>Error Type</td>
									</tr>
									<tr>
										<td style="color:red" colspan=3><b>Was the Call Documented appropriately</b></td>
										<td></td>
										<td>
											<select class="form-control homewardVal compliancee" id="homeward_AF1" name="call_documentated" required>
												<option homeward_val=0 <?php echo $homeward_health['call_documentated']=='Yes'?"selected":""; ?> value="Yes">Yes</option>
												<option homeward_val=0 <?php echo $homeward_health['call_documentated']=='No'?"selected":""; ?> value="No">No</option>
												
											</select>
										</td>
										<td colspan=2><input type="text" class="form-control" name="cmt26" value="<?php echo $homeward_health['cmt26'] ?>" ></td>
										<td>Compliance</td>
									</tr>
									<tr style="font-weight:bold; background-color:#1F618D; color:white">
										<td colspan=3>Unprofessionalism</td>
										<td>Weightage</td>
										<td>STATUS</td>
										<td colspan=2>REMARKS</td>
										<td>Error Type</td>
									</tr>
									<tr>
									<td style="color:red" colspan=3><b>If any one of these applies: 
										- Agent deliberately interrupted the caller
										- Agent used condescending tone
										- Agent used foul or unprofessional language
										- Agent exhibited impatience in the interaction 
										- Agent engaged in a verbal altercation</b></td>
										<td></td>
										<td>
											<select class="form-control homewardVal customer" id="homeward_AF2" name="unprofessionalism" required>
												<option homeward_val=0 <?php echo $homeward_health['unprofessionalism']=='No'?"selected":""; ?> value="No">No</option>
												<option homeward_val=0 <?php echo $homeward_health['unprofessionalism']=='Yes'?"selected":""; ?> value="Yes">Yes</option>
												<option homeward_val=0 <?php echo $homeward_health['unprofessionalism']=='N/A'?"selected":""; ?> value="N/A">N/A</option>	
											</select>
										</td>
										<td colspan=2><input type="text" class="form-control" name="cmt27" value="<?php echo $homeward_health['cmt27'] ?>" ></td>
										<td>Customer</td>
									</tr>
									<tr style="font-weight:bold; background-color:#1F618D; color:white">
										<td colspan=3>Critical Error</td>
										<td>Weightage</td>
										<td>STATUS</td>
										<td colspan=2>REMARKS</td>
										<td>Error Type</td>
									</tr>
									<tr>
									<td style="color:red" colspan=3><b>Agent Incurred a critical error in the process either as communicated to the caller or using the system</b></td>
										<td></td>
										<td>
											<select class="form-control homewardVal compliancee" id="homeward_AF3" name="critical_error" required>
												<option homeward_val=0 <?php echo $homeward_health['critical_error']=='No'?"selected":""; ?> value="No">No</option>
												<option homeward_val=0 <?php echo $homeward_health['critical_error']=='Yes'?"selected":""; ?> value="Yes">Yes</option>
												<option homeward_val=0 <?php echo $homeward_health['critical_error']=='N/A'?"selected":""; ?> value="N/A">N/A</option>	
											</select>
										</td>
										<td colspan=2><input type="text" class="form-control" name="cmt28" value="<?php echo $homeward_health['cmt28'] ?>" ></td>
										<td>Compliance</td>
									</tr>

									<tr style="background-color:#D2B4DE"><td colspan=3>Customer Score</td><td colspan=3>Business Score</td><td colspan=3>Compliance Score</td></tr>
									<tr style="background-color:#D2B4DE">
										<td>Earned:</td><td id="" colspan="2">
											<input type="text" readonly style="background-color:#D2B4DE; text-align:center" class="form-control" id="custSenEarned" name="custSenEarned" value="<?php echo $homeward_health['custSenEarned'] ?>">
										</td>
										<td>Earned:</td><td id="" colspan="2">
											<input type="text" readonly style="background-color:#D2B4DE; text-align:center" class="form-control" id="busiSenEarned" name="busiSenEarned" value="<?php echo $homeward_health['busiSenEarned'] ?>">
										</td>
										<td>Earned:</td><td id="" colspan="2">
											<input type="text" readonly style="background-color:#D2B4DE; text-align:center" class="form-control" id="complSenEarned" name="complSenEarned" value="<?php echo $homeward_health['complSenEarned'] ?>">
										</td>
									</tr>
									<tr style="background-color:#D2B4DE">
										<td>Possible:</td><td id="" colspan="2">
											<input type="text" readonly style="background-color:#D2B4DE; text-align:center" class="form-control" id="custSenPossible" name="custSenPossible" value="<?php echo $homeward_health['custSenPossible'] ?>">
										</td>
										<td>Possible:</td><td id="" colspan="2">
											<input type="text" readonly style="background-color:#D2B4DE; text-align:center" class="form-control" id="busiSenPossible" name="busiSenPossible" value="<?php echo $homeward_health['busiSenPossible'] ?>">
										</td>
										<td>Possible:</td><td id="" colspan="2">
											<input type="text" readonly style="background-color:#D2B4DE; text-align:center" class="form-control" id="complSenPossible" name="complSenPossible" value="<?php echo $homeward_health['complSenPossible'] ?>">
										</td>
									</tr>
									<tr style="background-color:#D2B4DE">
										<td>Percentage:</td><td colspan="2"><input type="text" readonly style="background-color:#D2B4DE; text-align:center" class="form-control" id="custSenScore" name="customer_score" value="<?php echo $homeward_health['customer_score'] ?>"></td>
										<td>Percentage:</td><td colspan="2"><input type="text" readonly style="background-color:#D2B4DE; text-align:center" class="form-control" id="busiSenScore" name="business_score" value="<?php echo $homeward_health['business_score'] ?>"></td>
										<td>Percentage:</td><td colspan="2"><input type="text" readonly style="background-color:#D2B4DE; text-align:center" class="form-control" id="complSenScore" name="compliance_score" value="<?php echo $homeward_health['compliance_score'] ?>"></td>
									</tr>


									<tr>
										<td>Call Summary:</td>
										<td colspan=3><textarea class="form-control" id="" name="call_summary"><?php echo $homeward_health['call_summary'] ?></textarea></td>
										<td>Feedback:</td>
										<td colspan=3><textarea class="form-control" id="" name="feedback"><?php echo $homeward_health['feedback'] ?></textarea></td>
									</tr>
									<tr>
										<td colspan="2">Upload Files</td>
										<?php if($homeward_id==0){ ?>
											<td colspan=6><input type="file" multiple class="form-control" id="attach_file" name="attach_file[]"></td>
										<?php }else{ 
											if($homeward_health['attach_file']!=''){ ?>
											<td colspan="6">
												<?php $attach_file = explode(",",$homeward_health['attach_file']);
												 foreach($attach_file as $mp){ ?>
													<audio controls='' style="background-color:#607F93"> 
													  <source src="<?php echo base_url(); ?>qa_files/qa_homeward_health/<?php echo $mp; ?>" type="audio/ogg">
													  <source src="<?php echo base_url(); ?>qa_files/qa_homeward_health/<?php echo $mp; ?>" type="audio/mpeg">
													</audio> </br>
												 <?php } ?>
											</td>
										<?php }else{
												echo '<td><b>No Files</b></td>';
											  }
										} ?>
									</tr>
										
									<?php if($homeward_id!=0){ ?>
										<tr><td colspan=3 style="font-size:16px; font-weight:bold">Agent Review:</td><td colspan=4><?php echo $homeward_health['agent_rvw_note'] ?></td></tr>
										<tr><td colspan=3 style="font-size:16px; font-weight:bold">Management Review:</td><td colspan=4><?php echo $homeward_health['mgnt_rvw_note'] ?></td></tr>
										<tr><td colspan=3 style="font-size:16px; font-weight:bold">Client Review:</td><td colspan=4><?php echo $homeward_health['client_rvw_note'] ?></td></tr>
										
										<tr><td colspan=3  style="font-size:16px">Your Review</td><td colspan=4><textarea class="form-control1" style="width:100%" id="note" name="note" required></textarea></td></tr>
									<?php } ?>
										
									<?php 
									if($homeward_id==0){
										if(is_access_qa_module()==true || is_access_qa_operations_module()==true){ ?>
											<tr><td colspan=8><button class="btn btn-success waves-effect" type="submit" id="qaformsubmit" style="width:500px">SAVE</button></td></tr>
									<?php 
										} 
									}else{ 
										if(is_access_qa_module()==true || is_access_qa_operations_module()==true){
											if(is_available_qa_feedback($homeward_health['entry_date'],72) == true){ ?>
												<tr><td colspan="8"><button class="btn btn-success waves-effect" type="submit" id='qaformsubmit' name='btnSave' value="SAVE" style="width:500px">SAVE</button></td></tr>
									<?php 	
											}
										}
									} 
									?>	
									
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


<script type="text/javascript">
	function word_length_limit(){
		var word = $("#call_type_2words").val();
		var wordcnt = word.split(" ");
		var wordcnt_length = wordcnt.length;
		if(wordcnt_length>2){
			alert("Maximun of 2 words");
			$("#call_type_2words").val("");
		}
	}
</script>
