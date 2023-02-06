
<style>

.table > tbody > tr > td{
	text-align: center;
	font-size:13px;
}

#theader{
	font-size:20px;
	font-weight:bold;
	background-color:#CA6F1E;
}

input[type='checkbox']{
	width: 20px;
}

#fatalspan2{

	background-color: transparent;
	border: none;
	outline: none;
}

</style>

<?php if($email_id!=0){
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
										<td colspan="6" id="theader">VFS Email Monitoring Form 
										<input type="hidden" name="audit_start_time" value="<?php echo CurrMySqlDate(); ?>">
									</tr>
									<tr>
									<?php
										if($email_id==0){
											$auditorName = get_username();
											$auditDate = CurrDateMDY();
											$clDate_val='';
										}else{
											if($vfs_email['entry_by']!=''){
												$auditorName = $vfs_email['auditor_name'];
											}else{
												$auditorName = $vfs_email['client_name'];
											}
											$auditDate = mysql2mmddyy($vfs_email['audit_date']);
											$clDate_val=mysql2mmddyy($vfs_email['call_date']);
										}
									?>
										<td>QA Name:</td>
										<td style="width:300px"><input type="text" class="form-control" value="<?php echo $auditorName; ?>" disabled></td>
										<td style="width:150px">Audit Date:</td>
										<td><input type="text" class="form-control" value="<?php echo $auditDate; ?>" disabled></td>
										<td>Date and time Of Email:</td>
										<td><input type="text" class="form-control" id="call_date" name="call_date" value="<?php echo $clDate_val; ?>" required></td>
									</tr>
									<tr>
										<td>Employee Name:</td>
										<td>
											<select class="form-control" id="agent_id" name="agent_id" required>
												<option value="<?php echo $vfs_email['agent_id'] ?>"><?php echo $vfs_email['fname']." ".$vfs_email['lname'] ?></option>
												<option value="">-Select-</option>
												<?php foreach($agentName as $row):  ?>
													<option value="<?php echo $row['id']; ?>"><?php echo $row['name']; ?></option>
												<?php endforeach; ?>
											</select>
										</td>
										<td>Fusion ID:</td>
										<td><input type="text" class="form-control" id="fusion_id" name="" value="<?php echo $vfs_email['fusion_id']; ?>" readonly></td>
										<td>L1 Supervisor:</td>
										<td style="width:250px">
											<select class="form-control" id="tl_id" name="tl_id" readonly>
												<option value="<?php echo $vfs_email['tl_id'] ?>"><?php echo $vfs_email['tl_name'] ?></option>
												<option value="">--Select--</option>
												<?php foreach($tlname as $tl): ?>
													<option value="<?php echo $tl['id']; ?>"><?php echo $tl['fname']." ".$tl['lname']; ?></option>
												<?php endforeach; ?>	
											</select>
										</td>
									</tr>
									<tr>
										<td>Call Duration:</td>
										<td><input type="text" class="form-control" id="call_duration" name="call_duration" value="<?php echo $vfs_email['call_duration']; ?>" required></td>
										<td>Mission:</td>
										<td><input type="text" class="form-control"  name="mission" value="<?php echo $vfs_email['mission']; ?>" required></td>
										<td>Recording ID:</td>
										<td><input type="text" class="form-control"  name="recording_id" value="<?php echo $vfs_email['recording_id']; ?>" required></td>
									</tr>
									<tr>
										<td>Week:</td>
										<td>
											<select class="form-control"  name="week" required>
												<option value="<?php echo $vfs_email['week'] ?>"><?php echo $vfs_email['week'] ?></option>
												<option value="">-Select-</option>
												<option value="Week1">Week1</option>
												<option value="Week2">Week2</option>
												<option value="Week3">Week3</option>
												<option value="Week4">Week4</option>
												<option value="Week5">Week5</option>
											</select>
										</td>
										<td>Status:</td>
										<td><input type="text" class="form-control" id="fatalspan2" name="autofail_status" value="<?php echo $vfs_email['autofail_status']; ?>" readonly></td>
									</tr>
									<tr>
										<td>Audit Type:</td>
										<td>
											<select class="form-control" id="audit_type" name="audit_type" required>
											<option value="">-Select-</option>
											<option <?php echo $vfs_email['audit_type']=='CQ Audit'?"selected":""; ?> value="CQ Audit">CQ Audit</option>
											<option <?php echo $vfs_email['audit_type']=='BQ Audit'?"selected":""; ?> value="BQ Audit">BQ Audit</option>
											<option <?php echo $vfs_email['audit_type']=='Calibration'?"selected":""; ?> value="Calibration">Calibration</option>
											<option <?php echo $vfs_email['audit_type']=='Pre-Certificate Mock Call'?"selected":""; ?> value="Pre-Certificate Mock Call">Pre-Certificate Mock Call</option>
											<option <?php echo $vfs_email['audit_type']=='Certificate Audit'?"selected":""; ?> value="Certificate Audit">Certificate Audit</option>
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
										<td>
											<select class="form-control" id="voc" name="voc" required>
												<option value="">-Select-</option>
												<option <?php echo $vfs_email['voc']=='1'?"selected":""; ?> value="1">1</option>
												<option <?php echo $vfs_email['voc']=='2'?"selected":""; ?> value="2">2</option>
												<option <?php echo $vfs_email['voc']=='3'?"selected":""; ?> value="3">3</option>
												<option <?php echo $vfs_email['voc']=='4'?"selected":""; ?> value="4">4</option>
												<option <?php echo $vfs_email['voc']=='5'?"selected":""; ?> value="5">5</option>
											</select>
										</td>
									</tr>
									<tr>
										<td style="font-weight:bold">Total Score:</td>
										<td><input type="text" readonly id="vfsEarned" name="earned_score" class="form-control" style="font-weight:bold" value="<?php echo $vfs_email['overall_score'] ?>"></td>
										<td style="font-weight:bold">Target:</td>
										<td><input type="text" readonly id="vfsPossible" name="possible_score" class="form-control" style="font-weight:bold" value="<?php echo $vfs_email['overall_score'] ?>"></td>
										<td style="font-weight:bold">Overall Score Percentage:</td>
										<td><input type="text" readonly id="vfsOverallScore" name="overall_score" class="form-control vfsEmailFatal" style="font-weight:bold" value="<?php echo $vfs_email['overall_score'] ?>"></td>
									</tr>
									<tr style="font-weight:bold; background-color:#2471A3; color:white">
										<td colspan=2>Parameters</td>
										<td>Weightage</td>
										<td>Rating</td>
										<td>Final Score</td>
										<td>Remarks</td>
									</tr>
									<tr>
										<td style="background-color:#BFC9CA"><b>1</b></td>
										<td colspan=1 style="background-color:#BFC9CA">Content Writing (Look and feel)</td>
										<td style="background-color:#BFC9CA">10</td>
										<td style="background-color:#BFC9CA"></td>
										<td style="background-color:#BFC9CA" id="score_content_writing">10</td>
										<td style="background-color:#BFC9CA" ></td>
									</tr>
									<tr>
										<td></td>
										<td colspan=1>a. Used one idea per paragraph</td>
										<td>2</td>
										<td>
											<select class="form-control vfsVal"  data-id="content_writing" name="use_paragraph_idea" required>
												<option vfs_val=2 <?php echo $vfs_email['use_paragraph_idea']=='Yes'?"selected":""; ?> value="Yes">Yes</option>
												<option vfs_val=2 <?php echo $vfs_email['use_paragraph_idea']=='No'?"selected":""; ?> value="No">No</option>
												<option vfs_val=0 <?php echo $vfs_email['use_paragraph_idea']=='N/A'?"selected":""; ?> value="N/A">N/A</option>
											</select>
										</td>
										<td id="score_use_paragraph_idea">2</td>
										<td><textarea class="form-control" name="comm1"><?php echo $vfs_email['comm1'] ?></textarea></td>
									</tr>
									<tr>
										<td></td>
										<td colspan=1>b. Used bullet points where appropriate</td>
										<td>3</td>
										<td>
											<select class="form-control vfsVal"  data-id="content_writing" name="use_bullet_point" required>
												<option vfs_val=3 <?php echo $vfs_email['use_bullet_point']=='Yes'?"selected":""; ?> value="Yes">Yes</option>
												<option vfs_val=3 <?php echo $vfs_email['use_bullet_point']=='No'?"selected":""; ?> value="No">No</option>
												<option vfs_val=0 <?php echo $vfs_email['use_bullet_point']=='N/A'?"selected":""; ?> value="N/A">N/A</option>
											</select>
										</td>
										<td id="score_use_bullet_point">3</td>
										<td><textarea class="form-control" name="comm2"><?php echo $vfs_email['comm2'] ?></textarea></td>
									</tr>
									<tr>
										<td></td>
										<td colspan=1>c. Simple & definite statements</td>
										<td>2</td>
										<td>
											<select class="form-control vfsVal"  data-id="content_writing" name="adhered_word_limit" required>
												<option vfs_val=2 <?php echo $vfs_email['adhered_word_limit']=='Yes'?"selected":""; ?> value="Yes">Yes</option>
												<option vfs_val=2 <?php echo $vfs_email['adhered_word_limit']=='No'?"selected":""; ?> value="No">No</option>
												<option vfs_val=0 <?php echo $vfs_email['adhered_word_limit']=='N/A'?"selected":""; ?> value="N/A">N/A</option>
											</select>
										</td>
										<td id="score_adhered_word_limit">2</td>
										<td><textarea class="form-control" name="comm3"><?php echo $vfs_email['comm3'] ?></textarea></td>
									</tr>
									<tr>
										<td></td>
										<td colspan=1>d. Template Adherence where applicable</td>
										<td>3</td>
										<td>
											<select class="form-control vfsVal"  data-id="content_writing" name="template_adherence" required>
												<option vfs_val=3 <?php echo $vfs_email['template_adherence']=='Yes'?"selected":""; ?> value="Yes">Yes</option>
												<option vfs_val=3 <?php echo $vfs_email['template_adherence']=='No'?"selected":""; ?> value="No">No</option>
												<option vfs_val=0 <?php echo $vfs_email['template_adherence']=='N/A'?"selected":""; ?> value="N/A">N/A</option>
											</select>
										</td>
										<td id="score_template_adherence">3</td>
										<td><textarea class="form-control" name="comm4"><?php echo $vfs_email['comm4'] ?></textarea></td>
									</tr>
									<tr>
										<td style="background-color:#BFC9CA"><b>2</b></td>
										<td colspan=1 style="background-color:#BFC9CA">Accuracy / follow up </td>
										<td style="background-color:#BFC9CA">38</td>
										<td style="background-color:#BFC9CA"></td>
										<td style="background-color:#BFC9CA" id="score_accuracy">38</td>
										<td style="background-color:#BFC9CA" ></td>
									</tr>
									<tr>
										<td></td>
										<td colspan=1>a. Interim response provided (if applicable) & trail answered as per TAT provided</td>
										<td>3</td>
										<td>
											<select class="form-control vfsVal" data-id="accuracy" name="interim_responce" required>
												<option vfs_val=3 <?php echo $vfs_email['interim_responce']=='Yes'?"selected":""; ?> value="Yes">Yes</option>
												<option vfs_val=3 <?php echo $vfs_email['interim_responce']=='No'?"selected":""; ?> value="No">No</option>
												<option vfs_val=0 <?php echo $vfs_email['interim_responce']=='N/A'?"selected":""; ?> value="N/A">N/A</option>
											</select>
										</td>
										<td id="score_interim_responce">3</td>
										<td><textarea class="form-control" name="comm5"><?php echo $vfs_email['comm5'] ?></textarea></td>
									</tr>
									<tr>
										<td></td>
										<td colspan=1>b. FCR achieved</td>
										<td>4</td>
										<td>
											<select class="form-control vfsVal"  data-id="accuracy" name="FCR_achieved" required>
												<option vfs_val=4 <?php echo $vfs_email['FCR_achieved']=='Yes'?"selected":""; ?> value="Yes">Yes</option>
												<option vfs_val=4 <?php echo $vfs_email['FCR_achieved']=='No'?"selected":""; ?> value="No">No</option>
												<option vfs_val=0 <?php echo $vfs_email['FCR_achieved']=='N/A'?"selected":""; ?> value="N/A">N/A</option>
											</select>
										</td>
										<td id="score_FCR_achieved">4</td>
										<td><textarea class="form-control" name="comm6"><?php echo $vfs_email['comm6'] ?></textarea></td>
									</tr>
									<tr>
										<td></td>
										<td colspan=1>c. Complete and accurate information</td>
										<td>5</td>
										<td>
											<select class="form-control vfsVal"  data-id="accuracy" name="complete_information" required>
												<option vfs_val=5 <?php echo $vfs_email['complete_information']=='Yes'?"selected":""; ?> value="Yes">Yes</option>
												<option vfs_val=5 <?php echo $vfs_email['complete_information']=='No'?"selected":""; ?> value="No">No</option>
												<option vfs_val=0 <?php echo $vfs_email['complete_information']=='N/A'?"selected":""; ?> value="N/A">N/A</option>
											</select>
										</td>
										<td id="score_complete_information">5</td>
										<td><textarea class="form-control" name="comm6"><?php echo $vfs_email['comm6'] ?></textarea></td>
									</tr>
									<tr>
										<td></td>
										<td colspan=1>d. Understand the issue of the customer</td>
										<td>9</td>
										<td>
											<select class="form-control vfsVal"  data-id="accuracy" name="understand_issue" required>
												<option vfs_val=9 <?php echo $vfs_email['understand_issue']=='Yes'?"selected":""; ?> value="Yes">Yes</option>
												<option vfs_val=9 <?php echo $vfs_email['understand_issue']=='No'?"selected":""; ?> value="No">No</option>
												<option vfs_val=0 <?php echo $vfs_email['understand_issue']=='N/A'?"selected":""; ?> value="N/A">N/A</option>
											</select>
										</td>
										<td id="score_understand_issue">9</td>
										<td><textarea class="form-control" name="comm7"><?php echo $vfs_email['comm7'] ?></textarea></td>
									</tr>
									<tr>
										<td></td>
										<td colspan=1>e. Attentiveness displayed</td>
										<td>6</td>
										<td>
											<select class="form-control vfsVal"  data-id="accuracy" name="attentiveness_display" required>
												<option vfs_val=6 <?php echo $vfs_email['attentiveness_display']=='Yes'?"selected":""; ?> value="Yes">Yes</option>
												<option vfs_val=6 <?php echo $vfs_email['attentiveness_display']=='No'?"selected":""; ?> value="No">No</option>
												<option vfs_val=0 <?php echo $vfs_email['attentiveness_display']=='N/A'?"selected":""; ?> value="N/A">N/A</option>
											</select>
										</td>
										<td id="score_attentiveness_display">6</td>
										<td><textarea class="form-control" name="comm8"><?php echo $vfs_email['comm8'] ?></textarea></td>
									</tr>
									<tr>
										<td></td>
										<td colspan=1>f. Used all the available resources for providing resolution</td>
										<td>9</td>
										<td>
											<select class="form-control vfsVal"  data-id="accuracy" name="use_available_resource" required>
												<option vfs_val=9 <?php echo $vfs_email['use_available_resource']=='Yes'?"selected":""; ?> value="Yes">Yes</option>
												<option vfs_val=9 <?php echo $vfs_email['use_available_resource']=='No'?"selected":""; ?> value="No">No</option>
												<option vfs_val=0 <?php echo $vfs_email['use_available_resource']=='N/A'?"selected":""; ?> value="N/A">N/A</option>
											</select>
										</td>
										<td id="score_use_available_resource">9</td>
										<td><textarea class="form-control" name="comm9"><?php echo $vfs_email['comm9'] ?></textarea></td>
									</tr>
									<tr>
										<td></td>
										<td colspan=1>g. Standardized subject line on trail mails</td>
										<td>2</td>
										<td>
											<select class="form-control vfsVal"  data-id="accuracy" name="standardized_subject" required>
												<option vfs_val=2 <?php echo $vfs_email['standardized_subject']=='Yes'?"selected":""; ?> value="Yes">Yes</option>
												<option vfs_val=2 <?php echo $vfs_email['standardized_subject']=='No'?"selected":""; ?> value="No">No</option>
												<option vfs_val=0 <?php echo $vfs_email['standardized_subject']=='N/A'?"selected":""; ?> value="N/A">N/A</option>
											</select>
										</td>
										<td id="score_standardized_subject">2</td>
										<td><textarea class="form-control" name="comm10"><?php echo $vfs_email['comm10'] ?></textarea></td>
									</tr>
									<tr>
										<td style="background-color:#BFC9CA"><b>3</b></td>
										<td colspan=1 style="background-color:#BFC9CA">Additions</td>
										<td style="background-color:#BFC9CA">14</td>
										<td style="background-color:#BFC9CA"></td>
										<td style="background-color:#BFC9CA" id="score_additions">14</td>
										<td style="background-color:#BFC9CA" ></td>
									</tr>
									<tr>
										<td></td>
										<td colspan=1>a. Offers VAS options wherever applicable</td>
										<td>10</td>
										<td>
											<select class="form-control vfsVal"  data-id="additions" name="VAS_option" required>
												<option vfs_val=10 <?php echo $vfs_email['VAS_option']=='Yes'?"selected":""; ?> value="Yes">Yes</option>
												<option vfs_val=10 <?php echo $vfs_email['VAS_option']=='No'?"selected":""; ?> value="No">No</option>
												<option vfs_val=0 <?php echo $vfs_email['VAS_option']=='N/A'?"selected":""; ?> value="N/A">N/A</option>
											</select>
										</td>
										<td id="score_VAS_option">10</td>
										<td><textarea class="form-control" name="comm11"><?php echo $vfs_email['comm11'] ?></textarea></td>
									</tr>
									<tr>
										<td></td>
										<td colspan=1>b. Awareness created with regards to VFS website (wherever applicable)</td>
										<td>4</td>
										<td>
											<select class="form-control vfsVal"  data-id="additions" name="awarreness_created" required>
												<option vfs_val=4 <?php echo $vfs_email['awarreness_created']=='Yes'?"selected":""; ?> value="Yes">Yes</option>
												<option vfs_val=4 <?php echo $vfs_email['awarreness_created']=='No'?"selected":""; ?> value="No">No</option>
												<option vfs_val=0 <?php echo $vfs_email['awarreness_created']=='N/A'?"selected":""; ?> value="N/A">N/A</option>
											</select>
										</td>
										<td id="score_awarreness_created">4</td>
										<td><textarea class="form-control" name="comm12"><?php echo $vfs_email['comm12'] ?></textarea></td>
									</tr>
									<tr>
										<td style="background-color:#BFC9CA"><b>4</b></td>
										<td colspan=1 style="background-color:#BFC9CA">Tool/Application Documentation</td>
										<td style="background-color:#BFC9CA">10</td>
										<td style="background-color:#BFC9CA"></td>
										<td style="background-color:#BFC9CA" id="score_Documentation">10</td>
										<td style="background-color:#BFC9CA" ></td>
									</tr>
									<tr>
										<td></td>
										<td colspan=1>a. Correct dispostion</td>
										<td>5</td>
										<td>
											<select class="form-control vfsVal"  data-id="Documentation" name="correct_disposition" required>
												<option vfs_val=5 <?php echo $vfs_email['correct_disposition']=='Yes'?"selected":""; ?> value="Yes">Yes</option>
												<option vfs_val=5 <?php echo $vfs_email['correct_disposition']=='No'?"selected":""; ?> value="No">No</option>
												<option vfs_val=0 <?php echo $vfs_email['correct_disposition']=='N/A'?"selected":""; ?> value="N/A">N/A</option>
											</select>
										</td>
										<td id="score_correct_disposition">5</td>
										<td><textarea class="form-control" name="comm13"><?php echo $vfs_email['comm13'] ?></textarea></td>
									</tr>
									<tr>
										<td></td>
										<td colspan=1>b. Update ASM/V2</td>
										<td>5</td>
										<td>
											<select class="form-control vfsVal" data-id="Documentation" name="update_ASM" required>
												<option vfs_val=5 <?php echo $vfs_email['update_ASM']=='Yes'?"selected":""; ?> value="Yes">Yes</option>
												<option vfs_val=5 <?php echo $vfs_email['update_ASM']=='No'?"selected":""; ?> value="No">No</option>
												<option vfs_val=0 <?php echo $vfs_email['update_ASM']=='N/A'?"selected":""; ?> value="N/A">N/A</option>
											</select>
										</td>
										<td id="score_update_ASM">5</td>
										<td><textarea class="form-control" name="comm14"><?php echo $vfs_email['comm14'] ?></textarea></td>
									</tr>
									<tr>
										<td style="background-color:#BFC9CA"><b>5</b></td>
										<td colspan=1 style="background-color:#BFC9CA">Composition</td>
										<td style="background-color:#BFC9CA">28</td>
										<td style="background-color:#BFC9CA"></td>
										<td style="background-color:#BFC9CA" id="score_Composition">28</td>
										<td style="background-color:#BFC9CA" ></td>
									</tr>
									<tr>
										<td></td>
										<td colspan=1>a. Formatting</td>
										<td>5</td>
										<td>
											<select class="form-control vfsVal" data-id="Composition" name="formatting" required>
												<option vfs_val=5 <?php echo $vfs_email['formatting']=='Yes'?"selected":""; ?> value="Yes">Yes</option>
												<option vfs_val=5 <?php echo $vfs_email['formatting']=='No'?"selected":""; ?> value="No">No</option>
												<option vfs_val=0 <?php echo $vfs_email['formatting']=='N/A'?"selected":""; ?> value="N/A">N/A</option>
											</select>
										</td>
										<td id="score_formatting">5</td>
										<td><textarea class="form-control" name="comm15"><?php echo $vfs_email['comm15'] ?></textarea></td>
									</tr>
									<tr>
										<td></td>
										<td colspan=1>b. Shows respect and makes the customer feel valued</td>
										<td>5</td>
										<td>
											<select class="form-control vfsVal"  data-id="Composition" name="show_customer_feel_value" required>
												<option vfs_val=5 <?php echo $vfs_email['show_customer_feel_value']=='Yes'?"selected":""; ?> value="Yes">Yes</option>
												<option vfs_val=5 <?php echo $vfs_email['show_customer_feel_value']=='No'?"selected":""; ?> value="No">No</option>
												<option vfs_val=0 <?php echo $vfs_email['show_customer_feel_value']=='N/A'?"selected":""; ?> value="N/A">N/A</option>
											</select>
										</td>
										<td id="score_show_customer_feel_value">5</td>
										<td><textarea class="form-control" name="comm16"><?php echo $vfs_email['comm16'] ?></textarea></td>
									</tr>
									<tr>
										<td></td>
										<td colspan=1>c. Telling the customer what to do next, Step by step procedure guide</td>
										<td>3</td>
										<td>
											<select class="form-control vfsVal" data-id="Composition" name="procedure_guide_step" required>
												<option vfs_val=3 <?php echo $vfs_email['procedure_guide_step']=='Yes'?"selected":""; ?> value="Yes">Yes</option>
												<option vfs_val=3 <?php echo $vfs_email['procedure_guide_step']=='No'?"selected":""; ?> value="No">No</option>
												<option vfs_val=0 <?php echo $vfs_email['procedure_guide_step']=='N/A'?"selected":""; ?> value="N/A">N/A</option>
											</select>
										</td>
										<td id="score_procedure_guide_step">3</td>
										<td><textarea class="form-control" name="comm17"><?php echo $vfs_email['comm17'] ?></textarea></td>
									</tr>
									<tr>
										<td></td>
										<td colspan=1>d. Avoid Slangs  & Jargons</td>
										<td>3</td>
										<td>
											<select class="form-control vfsVal"  data-id="Composition" name="avoid_slangs" required>
												<option vfs_val=3 <?php echo $vfs_email['avoid_slangs']=='Yes'?"selected":""; ?> value="Yes">Yes</option>
												<option vfs_val=3 <?php echo $vfs_email['avoid_slangs']=='No'?"selected":""; ?> value="No">No</option>
												<option vfs_val=0 <?php echo $vfs_email['avoid_slangs']=='N/A'?"selected":""; ?> value="N/A">N/A</option>
											</select>
										</td>
										<td id="score_avoid_slangs">3</td>
										<td><textarea class="form-control" name="comm18"><?php echo $vfs_email['comm18'] ?></textarea></td>
									</tr>
									<tr>
										<td></td>
										<td colspan=1>e. Correct and accurate grammar usage</td>
										<td>5</td>
										<td>
											<select class="form-control vfsVal"  data-id="Composition" name="correct_grammar_use" required>
												<option vfs_val=5 <?php echo $vfs_email['correct_grammar_use']=='Yes'?"selected":""; ?> value="Yes">Yes</option>
												<option vfs_val=5 <?php echo $vfs_email['correct_grammar_use']=='No'?"selected":""; ?> value="No">No</option>
												<option vfs_val=0 <?php echo $vfs_email['correct_grammar_use']=='N/A'?"selected":""; ?> value="N/A">N/A</option>
											</select>
										</td>
										<td id="score_correct_grammar_use">5</td>
										<td><textarea class="form-control" name="comm19"><?php echo $vfs_email['comm19'] ?></textarea></td>
									</tr>
									<tr>
										<td></td>
										<td colspan=1>f .Correct closing</td>
										<td>4</td>
										<td>
											<select class="form-control vfsVal"  data-id="Composition" name="correct_closing" required>
												<option vfs_val=4 <?php echo $vfs_email['correct_closing']=='Yes'?"selected":""; ?> value="Yes">Yes</option>
												<option vfs_val=4 <?php echo $vfs_email['correct_closing']=='No'?"selected":""; ?> value="No">No</option>
												<option vfs_val=0 <?php echo $vfs_email['correct_closing']=='N/A'?"selected":""; ?> value="N/A">N/A</option>
											</select>
										</td>
										<td id="score_correct_closing">4</td>
										<td><textarea class="form-control" name="comm20"><?php echo $vfs_email['comm20'] ?></textarea></td>
									</tr>
									<tr>
										<td></td>
										<td colspan=1>g. Further assistance</td>
										<td>3</td>
										<td>
											<select class="form-control vfsVal"  data-id="Composition" name="further_assistance" required>
												<option vfs_val=3 <?php echo $vfs_email['further_assistance']=='Yes'?"selected":""; ?> value="Yes">Yes</option>
												<option vfs_val=3 <?php echo $vfs_email['further_assistance']=='No'?"selected":""; ?> value="No">No</option>
												<option vfs_val=0 <?php echo $vfs_email['further_assistance']=='N/A'?"selected":""; ?> value="N/A">N/A</option>
											</select>
										</td>
										<td id="score_further_assistance">3</td>
										<td><textarea class="form-control" name="comm21"><?php echo $vfs_email['comm21'] ?></textarea></td>
									</tr>
									<tr>
										<td style="background-color:#BFC9CA"><b>7</b></td>
										<td colspan=1 style="background-color:#BFC9CA">Fatal Parameter</td>
										<td style="background-color:#BFC9CA"></td>
										<td style="background-color:#BFC9CA"></td>
										<td style="background-color:#BFC9CA"></td>
										<td style="background-color:#BFC9CA" ></td>
									</tr>
									<tr>	
										<td></td>									
										<td colspan=1 style="background-color:#D98880">a. Rude or unprofessional on email</td>
										<td></td>
										<td>
											<select class="form-control vfsVal fatal_epi" id="emailAutof1" name="rude_on_email" required>
												<option vfs_val=0 <?php echo $vfs_email['rude_on_email']=='No'?"selected":""; ?> value="No">No</option>
												<option vfs_val=0 <?php echo $vfs_email['rude_on_email']=='Yes'?"selected":""; ?> value="Yes">Yes</option>
											</select>
										</td>
										<td></td>
										<td><textarea class="form-control" name="comm22"><?php echo $vfs_email['comm22'] ?></textarea></td>
									</tr>
									<tr>	
										<td></td>									
										<td colspan=1 style="background-color:#D98880">b. Incomplete / Inaccurate Information shared</td>
										<td></td>
										<td>
											<select class="form-control vfsVal fatal_epi" id="emailAutof2" name="inacurate_information" required>
												<option vfs_val=0 <?php echo $vfs_email['inacurate_information']=='No'?"selected":""; ?> value="No">No</option>
												<option vfs_val=0 <?php echo $vfs_email['inacurate_information']=='Yes'?"selected":""; ?> value="Yes">Yes</option>
											</select>
										</td>
										<td></td>
										<td><textarea class="form-control" name="comm23"><?php echo $vfs_email['comm23'] ?></textarea></td>
									</tr>
									<tr>	
										<td></td>									
										<td colspan=1 style="background-color:#D98880">c. Email hygiene</td>
										<td></td>
										<td>
											<select class="form-control vfsVal fatal_epi" id="emailAutof3" name="email_hygiene" required>
												<option vfs_val=0 <?php echo $vfs_email['email_hygiene']=='No'?"selected":""; ?> value="No">No</option>
												<option vfs_val=0 <?php echo $vfs_email['email_hygiene']=='Yes'?"selected":""; ?> value="Yes">Yes</option>
											</select>
										</td>
										<td></td>
										<td><textarea class="form-control" name="comm24"><?php echo $vfs_email['comm24'] ?></textarea></td>
									</tr>
									<tr>	
										<td></td>									
										<td colspan=1 style="background-color:#D98880">d. Complaint Avoidance</td>
										<td></td>
										<td>
											<select class="form-control vfsVal fatal_epi" id="emailAutof4" name="complaint_avoidance" required>
												<option vfs_val=0 <?php echo $vfs_email['complaint_avoidance']=='No'?"selected":""; ?> value="No">No</option>
												<option vfs_val=0 <?php echo $vfs_email['complaint_avoidance']=='Yes'?"selected":""; ?> value="Yes">Yes</option>
											</select>
										</td>
										<td></td>
										<td><textarea class="form-control" name="comm25"><?php echo $vfs_email['comm25'] ?></textarea></td>
									</tr>
									<tr>
										<td>Reason For Fatal Error:</td>
										<td colspan=2><textarea class="form-control"  name="reason_for_fatal"><?php echo $vfs_email['reason_for_fatal'] ?></textarea></td>
										<td>Inprovement Area:</td>
										<td colspan=2><textarea class="form-control"  name="inprovement_area"><?php echo $vfs_email['inprovement_area'] ?></textarea></td>
									</tr>
									<tr>
										<td>Email Summary:</td>
										<td colspan=2><textarea class="form-control"  name="call_summary"><?php echo $vfs_email['call_summary'] ?></textarea></td>
										<td>Feedback:</td>
										<td colspan=2><textarea class="form-control"  name="feedback"><?php echo $vfs_email['feedback'] ?></textarea></td>
									</tr>
									<!-- <tr>
										<td colspan="2">Upload Files</td>
										<?php if($email_id==0){ ?>
											<td colspan=4><input type="file" multiple class="form-control" id="attach_file" name="attach_file[]"></td>
										<?php }else{ 
											if($vfs_email['attach_file']!=''){ ?>
											<td colspan="4">
												<?php $attach_file = explode(",",$vfs_email['attach_file']);
												 foreach($attach_file as $mp){ ?>
													<audio controls='' style="background-color:#607F93"> 
													  <source src="<?php echo base_url(); ?>qa_files/qa_vfs/email/<?php echo $mp; ?>" type="audio/ogg">
													  <source src="<?php echo base_url(); ?>qa_files/qa_vfs/email/<?php echo $mp; ?>" type="audio/mpeg">
													</audio> </br>
												 <?php } ?>
											</td>
										<?php }else{
												echo '<td><b>No Files</b></td>';
											  }
										} ?>
									</tr> -->
										
									<?php if($email_id!=0){ ?>
										<tr><td colspan=2 style="font-size:16px; font-weight:bold">Agent Review:</td><td colspan=4><?php echo $vfs_email['agent_rvw_note'] ?></td></tr>
										<tr><td colspan=2 style="font-size:16px; font-weight:bold">Management Review:</td><td colspan=4><?php echo $vfs_email['mgnt_rvw_note'] ?></td></tr>
										<tr><td colspan=2 style="font-size:16px; font-weight:bold">Client Review:</td><td colspan=4><?php echo $vfs_email['client_rvw_note'] ?></td></tr>
										
										<tr><td colspan=2  style="font-size:16px">Your Review</td><td colspan=4><textarea class="form-control1" style="width:100%" id="note" name="note" required></textarea></td></tr>
									<?php } ?>
										
									<?php 
									if($email_id==0){
										if(is_access_qa_module()==true || is_access_qa_operations_module()==true){ ?>
											<tr><td colspan=6><button class="btn btn-success waves-effect" type="submit" id="qaformsubmit" style="width:500px">SAVE</button></td></tr>
									<?php 
										} 
									}else{ 
										if(is_access_qa_module()==true || is_access_qa_operations_module()==true){
											if(is_available_qa_feedback($vfs_email['entry_date'],72) == true){ ?>
												<tr><td colspan="6"><button class="btn btn-success waves-effect" type="submit" id='qaformsubmit' name='btnSave' value="SAVE" style="width:500px">SAVE</button></td></tr>
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
