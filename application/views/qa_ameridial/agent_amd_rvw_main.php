<style> 

.table > tbody > tr > td{
	text-align: center;
	font-size:16px;
}

.eml{
	font-weight:bold;
	background-color:#F5CBA7;
}

.eml1{
	font-weight:bold;
	background-color:#E5E8E8;
}
   .eml{
   font-weight:bold;
   background-color:#AED6F1;
   }

   .eml2 {
    font-size: 24px;
    font-weight: bold;
    background-color: #008B8B;
    color: white;
}

</style>


<div class="wrap">
	<section class="app-content">


		<div class="row">
			<div class="col-12">
				<div class="widget">

					<div class="widget-body">
						<div class="table-responsive">
							<table class="table table-striped skt-table" width="100%">
								<tbody>
									<tr style="background-color:#AEB6BF">
										<?php
											if($campaign=='fortunebuilder'){
												$cmpng="Fortune Builder";
											}else if($campaign=='hoveround'){
												$cmpng="Hoveround";
											}else if($campaign=='ncpssm'){
												$cmpng="NCPSSM";
											}else if($campaign=='stc'){
												$cmpng="STC Scoresheet";
											}else if($campaign=='touchfuse'){
												$cmpng="Touchfuse";
											}else if($campaign=='touchfuse_new'){
												$cmpng="Touchfuse_new";
											}else if($campaign=='tbn'){
												$cmpng="TBN Scoresheet";
											}else if($campaign=='purity_free_bottle'){
												$cmpng="Purity Free Bottle";
											}else if($campaign=='purity_catalog'){
												$cmpng="Purity Catalog";
											}else if($campaign=='purity_care'){
												$cmpng="Purity Care";
											}else if($campaign=='puritycare_new'){
												$cmpng="Purity Care New";
											}else if($campaign=='conduent'){
												$cmpng="Conduent";
											}else if($campaign=='jfmi'){
												$cmpng="JFMI";
											}else if($campaign=='tpm'){
												$cmpng="TPM Scoresheet";
											}else if($campaign=='patchology'){
												$cmpng="Patchology Agent Improvement";
											}else if($campaign=='aspca'){
												$cmpng="ASPCA";
											}else if($campaign=='ffai'){
												$cmpng="Filter Fast Agent Improvement Form Scorecard";
											}else if($campaign=='lifi'){
												$cmpng="Life Quote LIFI QA evalution";
											}else if($campaign=='heatsurge'){
												$cmpng="Heat Surge CS Monitoring Form";
											}else if($campaign=='stauers_sales'){
												$cmpng="Stauers sales";
											}else if($campaign=='operation_smile'){
												$cmpng="Operation Smile";
											}else if($campaign=='5_11_tactical'){
												$cmpng="5-11 Tactical";
											}else if($campaign=='jmmi'){
												$cmpng="JMMI";
											}else if($campaign=='non_profit'){
												$cmpng="Non-Profit";
											}else if($campaign=='revel_new'){
												$cmpng="Icario";
											}
											// else if($campaign=='icario'){
											// 	$cmpng="Icario New";
											// }
											else if($campaign=='ica'){
												$cmpng="Icario New";
											}else if($campaign=='qpc'){
												$cmpng="QPC";
											}else if($campaign=='ancient_nutrition'){
												$cmpng="Ancient Nutrition";
											}else if($campaign=='powerfan'){
												$cmpng="Power Fan";
											}else if($campaign=='nuwave'){
												$cmpng="NuWave";
											}else if($campaign=='sabal'){
												$cmpng="SABAL";
											}else if($campaign=='curative'){
												$cmpng="CURATIVE";
											}else if($campaign=='episource'){
												$cmpng="EPISOURCE";
											}else if($campaign=='magnilife'){
												$cmpng="MAGNILIFE";
											}else if($campaign=='blains'){
												$cmpng="BLAINS";
											}else if($campaign=='pajamagram'){
												$cmpng="Pajamagram";
											}else if($campaign=='delta'){
												$cmpng="DELTA DENTAL [ILLINOIS]";
											}else if($campaign=='delta_iowa'){
												$cmpng="DELTA DENTAL [IOWA]";
											}else if($campaign=='brightway_prescreen_new'){
												$cmpng="Brightway Prescreen";
											}else if($campaign=='brightway_prescreen'){
												$cmpng="Brightway Prescreen(Old)";
											}else if($campaign=='brightway_evaluation'){
												$cmpng="Brightway Evaluation(old)";
											}else if($campaign=='brightway_evaluation_new'){
												$cmpng="Brightway Evaluation";
											}else if($campaign=='mercy_ship'){
												$cmpng="Mercy Ship";
											}else if($campaign=='trapollo'){
												$cmpng="TRAPOLLO";
											}else if($campaign=='sontiq'){
												$cmpng="SONTIQ";
											}else if($campaign=='airmethod'){
												$cmpng="Air Method";
											}else if($campaign=='airmethod_email'){
												$cmpng="Air Method Email";
											}else if($campaign=='foodsaver'){
												$cmpng="Food Saver";
											}else if($campaign=='ubp'){
												$cmpng="UBP";
											}else if($campaign=='sas'){
												$cmpng="Specialty Answering Service";
											}else if($campaign=='gap'){
												$cmpng="Great American Power";
											}else if($campaign=='suarez'){
												$cmpng="Suarez";
											}else if($campaign=='sfe'){
												$cmpng="SFE Scorecard";
											}else if($campaign=='brightway_ib_bank'){
												$cmpng="IB BANKS AND CANCELLATION";
											}else if($campaign=='offline'){
												$cmpng="Offline Qa";
											}else if($campaign=='phone_inbound'){
												$cmpng="Phone Inbound Qa";
											}else if($campaign=='phone_inbound_new'){
												$cmpng="Phone Inbound Qa New";
											}else if($campaign=='processing'){
												$cmpng="Processing Qa";
											}else if($campaign=='processing_new'){
												$cmpng="Processing Qa New";
											}else if($campaign=='qpc_esal'){
												$cmpng="QPC ESAL";
											}else if($campaign=='pcare_cs'){
												$cmpng="Purity [Conscious Selling]";
											}else if($campaign=='MPC'){
												$cmpng="Maryland Physicians Care";
											}else if($campaign=='ab_commercial'){
												$cmpng="AB Commercial Offline";
											}else if($campaign=="empire"){
												$cmpng="Empire";
											}else if($campaign=="cinemark"){
												$cmpng="Cinemark";
											}else if($campaign=="hcpss"){
												$cmpng="HCPSS";
											}else if($campaign=="cmn"){
												$cmpng="CMN";
											}else if($campaign=="pilgrim"){
												$cmpng="Pilgrim";
											}else if($campaign=="bluebenefits"){
												$cmpng="Blue Benefits";
											}else if($campaign=="healthbridge"){
												$cmpng="Health Bridge";
											}else if($campaign=="healthbridgenew"){
												$cmpng="Health Bridge New";
											}else if($campaign=="compliance"){
												$cmpng="Compliance";
											}else if($campaign=="mcKinsey"){
												$cmpng="mcKinsey";
											}else if($campaign=="affinity"){
												$cmpng="affinity";
											}else if($campaign=="affinity_pro"){
												$cmpng="affinity_pro";
											}else if($campaign=="cci_medicare"){
												$cmpng="cci_medicare";
											}else if($campaign=="cci_commercial"){
												$cmpng="cci_commercial";
											}else if($campaign=="lockheed"){
												$cmpng="lockheed";
											}else if($campaign=="agnt_feedback"){
												$cmpng="agnt_feedback";
											}
										?>
										<td colspan="8" style="font-size:30px; font-weight:bold">AMERIDIAL <?php echo ' ['.$cmpng.']'; ?></td>
									</tr>

								<?php if($campaign=='brightway_prescreen_new'){ ?>

									  <tr>
										<td colspan="6" id="theader" style="font-size:40px">Ameridial Brightway Prescreen</td>
										<input type="hidden" name="audit_start_time" value="<?php echo CurrMySqlDate(); ?>">
									</tr>
									<?php
										if($pnid==0){
											$auditorName = get_username();
											$auditDate = CurrDateMDY();
											$clDate_val='';
										}else{
											if($agnt_feedback['entry_by']!=''){
												$auditorName = $agnt_feedback['auditor_name'];
											}else{
												$auditorName = $agnt_feedback['client_name'];
											}
											$auditDate = mysql2mmddyy($agnt_feedback['audit_date']);
											$clDate_val = mysql2mmddyy($agnt_feedback['call_date']);
										}
									?>
									<tr>
										<td style="width:150px">Auditor Name:</td>
										<td style="width:300px"><input type="text" class="form-control" value="<?php echo $auditorName; ?>" disabled></td>
										<td>Audit Date:</td>
										<td style="width:250px"><input type="text" class="form-control" value="<?php echo $auditDate; ?>" disabled></td>
										<td>Call Date:</td>
										<td style="width:150px"><input type="text" class="form-control" id="call_date" name="call_date" value="<?php echo $clDate_val; ?>" disabled ></td>
									</tr>

									<tr>
										<td>Agent:</td>
										<td>
											<select class="form-control agentName" id="agent_id" name="data[agent_id]" disabled>

												<?php if($agnt_feedback['agent_id']){?><option value="<?php echo $agnt_feedback['agent_id'] ?>"><?php echo $agnt_feedback['fname']." ".$agnt_feedback['lname'] ?></option><?php } ?>
												<option value="">Select</option>
												<?php foreach($agentName as $row):  ?>
													<option value="<?php echo $row['id']; ?>"><?php echo $row['name']; ?></option>
												<?php endforeach; ?>
											</select>
										</td>
										<td>Fusion ID:</td>
										<td><input type="text" readonly class="form-control" id="fusion_id" value="<?php echo $agnt_feedback['fusion_id'] ?>" disabled></td>
										<td>L1 Supervisor:</td>
										<td>
											<select class="form-control" id="tl_id" name="data[tl_id]" readonly>
												<option value="<?php echo $agnt_feedback['tl_id'] ?>"><?php echo $agnt_feedback['tl_name'] ?></option>
												<option value="">--Select--</option>
												<?php foreach($tlname as $tl): ?>
													<option value="<?php echo $tl['id']; ?>"><?php echo $tl['fname']." ".$tl['lname']; ?></option>
												<?php endforeach; ?>
											</select>
										</td>
									</tr>
									<tr>
										<td>Process:</td>
										<td><input type="text" class="form-control" id="campaign" value="<?php echo $agnt_feedback['process'] ?>" readonly ></td>
										<td>Site/Location:</td>
										<td><input type="text" readonly class="form-control" value="<?php echo $agnt_feedback['office_id'] ?>" id="office_id"></td>
										<td>Call Duration:</td>
										<td><input type="text" class="form-control" id="call_duration" name="data[call_duration]" value="<?php echo $agnt_feedback['call_duration']; ?>" disabled ></td>
									</tr>
									<tr>
									</tr>
									<tr>

										<td>File No:</td>
										<td><input type="text" class="form-control" id="" name="data[file_no]" value="<?php echo $agnt_feedback['file_no']; ?>" disabled ></td>
										<td>Campaign Code:</td>
										<td><input type="text" class="form-control" id="" name="data[site]" value="<?php echo $agnt_feedback['site']; ?>" disabled ></td>
										<td>Filler 2:</td>
										<td><input type="text" class="form-control" id="" name="data[filler]" value="<?php echo $agnt_feedback['filler']; ?>" disabled ></td>
									</tr>
									<tr>
										<td>Audit Type:</td>
										<td>
											<select class="form-control" id="audit_type" name="data[audit_type]" disabled >
												<option value="">-Select-</option>
												<option <?php echo $agnt_feedback['audit_type']=='CQ Audit'?"selected":""; ?> value="CQ Audit">CQ Audit</option>
												<option <?php echo $agnt_feedback['audit_type']=='BQ Audit'?"selected":""; ?> value="BQ Audit">BQ Audit</option>
												<option <?php echo $agnt_feedback['audit_type']=='Calibration'?"selected":""; ?> value="Calibration">Calibration</option>
												<option <?php echo $agnt_feedback['audit_type']=='Pre-Certificate Mock Call'?"selected":""; ?> value="Pre-Certificate Mock Call">Pre-Certificate Mock Call</option>
												<option <?php echo $agnt_feedback['audit_type']=='Certificate Audit'?"selected":""; ?> value="Certificate Audit">Certificate Audit</option>
												<?php if(get_login_type()!="client"){ ?>
													<option <?php echo $agnt_feedback['audit_type']=='Operation Audit'?"selected":""; ?> value="Operation Audit">Operation Audit</option>
													<option <?php echo $agnt_feedback['audit_type']=='Trainer Audit'?"selected":""; ?> value="Trainer Audit">Trainer Audit</option>
												<?php } ?>
											</select>
										</td>
										<td class="auType">Auditor Type</td>
										<td class="auType">
											<select class="form-control" id="auditor_type" name="data[auditor_type]">
												<option value="">-Select-</option>
												<option value="Master">Master</option>
												<option value="Regular">Regular</option>
											</select>
										</td>
										<td>VOC:</td>
										<td>
											<select class="form-control" id="voc" name="data[voc]" disabled >
												<option value="">-Select-</option>
												<option <?php echo $agnt_feedback['voc']=='1'?"selected":""; ?> value="1">1</option>
												<option <?php echo $agnt_feedback['voc']=='2'?"selected":""; ?> value="2">2</option>
												<option <?php echo $agnt_feedback['voc']=='3'?"selected":""; ?> value="3">3</option>
												<option <?php echo $agnt_feedback['voc']=='4'?"selected":""; ?> value="4">4</option>
												<option <?php echo $agnt_feedback['voc']=='5'?"selected":""; ?> value="5">5</option>
											</select>
										</td>
									</tr>
									<tr>
									<td>Phone Number:</td>
									<td><input type="text" class="form-control" id="" name="data[phone]" value="<?php echo $agnt_feedback['phone']; ?>" disabled ></td>
									<td>Area Code:</td>
									<td><input type="text" class="form-control" id="" name="data[area_code]" value="<?php echo $agnt_feedback['area_code']; ?>" disabled ></td>
									</tr>
									<tr>
										<td style="font-weight:bold; font-size:16px">Earned Score</td>
										<td><input type="text" readonly id="" name="data[earned_score]" value="<?php echo $agnt_feedback['earned_score']; ?>" class="form-control" style="font-weight:bold"></td>
										<td style="font-weight:bold; font-size:16px">Possible Score</td>
										<td><input type="text" readonly id="" name="data[possible_score]" value="<?php echo $agnt_feedback['possible_score']; ?>" class="form-control" style="font-weight:bold"></td>
										<td style="font-weight:bold; font-size:16px">Overall Score3:</td>
										<td><input type="text" readonly id="" name="data[overall_score]" value="<?php echo $agnt_feedback['overall_score'].'%'; ?>" class="form-control" style="font-weight:bold"></td>
									</tr>

									<?php } else if($campaign=='brightway_evaluation_new'){ ?>

									  <tr>
										<td colspan="6" id="theader" style="font-size:40px">Ameridial Brightway Evaluation</td>
										<input type="hidden" name="audit_start_time" value="<?php echo CurrMySqlDate(); ?>">
									</tr>
									<?php
										if($pnid==0){
											$auditorName = get_username();
											$auditDate = CurrDateMDY();
											$clDate_val='';
										}else{
											if($agnt_feedback['entry_by']!=''){
												$auditorName = $agnt_feedback['auditor_name'];
											}else{
												$auditorName = $agnt_feedback['client_name'];
											}
											$auditDate = mysql2mmddyy($agnt_feedback['audit_date']);
											$clDate_val = mysql2mmddyy($agnt_feedback['call_date']);
										}
									?>
									<tr>
										<td style="width:150px">Auditor Name:</td>
										<td style="width:300px"><input type="text" class="form-control" value="<?php echo $auditorName; ?>" disabled></td>
										<td>Audit Date:</td>
										<td style="width:250px"><input type="text" class="form-control" value="<?php echo $auditDate; ?>" disabled></td>
										<td>Call Date:</td>
										<td style="width:150px"><input type="text" class="form-control" id="call_date" name="call_date" value="<?php echo $clDate_val; ?>" disabled ></td>
									</tr>

									<tr>
										<td>Agent:</td>
										<td>
											<select class="form-control agentName" id="agent_id" name="data[agent_id]" disabled>

												<?php if($agnt_feedback['agent_id']){?><option value="<?php echo $agnt_feedback['agent_id'] ?>"><?php echo $agnt_feedback['fname']." ".$agnt_feedback['lname'] ?></option><?php } ?>
												<option value="">Select</option>
												<?php foreach($agentName as $row):  ?>
													<option value="<?php echo $row['id']; ?>"><?php echo $row['name']; ?></option>
												<?php endforeach; ?>
											</select>
										</td>
										<td>Fusion ID:</td>
										<td><input type="text" readonly class="form-control" id="fusion_id" value="<?php echo $agnt_feedback['fusion_id'] ?>" disabled></td>
										<td>L1 Supervisor:</td>
										<td>
											<select class="form-control" id="tl_id" name="data[tl_id]" readonly>
												<option value="<?php echo $agnt_feedback['tl_id'] ?>"><?php echo $agnt_feedback['tl_name'] ?></option>
												<option value="">--Select--</option>
												<?php foreach($tlname as $tl): ?>
													<option value="<?php echo $tl['id']; ?>"><?php echo $tl['fname']." ".$tl['lname']; ?></option>
												<?php endforeach; ?>
											</select>
										</td>
									</tr>
									<tr>
										<td>Process:</td>
										<td><input type="text" class="form-control" id="campaign" value="<?php echo $agnt_feedback['process'] ?>" readonly ></td>
										<td>Site/Location:</td>
										<td><input type="text" readonly class="form-control" value="<?php echo $agnt_feedback['office_id'] ?>" id="office_id"></td>
										<td>Call Duration:</td>
										<td><input type="text" class="form-control" id="call_duration" name="data[call_duration]" value="<?php echo $agnt_feedback['call_duration']; ?>" disabled ></td>
									</tr>
									<tr>
									</tr>
									<tr>

										<td>File No:</td>
										<td><input type="text" class="form-control" id="" name="data[file_no]" value="<?php echo $agnt_feedback['file_no']; ?>" disabled ></td>
										<td>Campaign Code:</td>
										<td><input type="text" class="form-control" id="" name="data[site]" value="<?php echo $agnt_feedback['site']; ?>" disabled ></td>
										<td>Filler 2:</td>
										<td><input type="text" class="form-control" id="" name="data[filler]" value="<?php echo $agnt_feedback['filler']; ?>" disabled ></td>
									</tr>
									<tr>
										<td>Audit Type:</td>
										<td>
											<select class="form-control" id="audit_type" name="data[audit_type]" disabled >
												<option value="">-Select-</option>
												<option <?php echo $agnt_feedback['audit_type']=='CQ Audit'?"selected":""; ?> value="CQ Audit">CQ Audit</option>
												<option <?php echo $agnt_feedback['audit_type']=='BQ Audit'?"selected":""; ?> value="BQ Audit">BQ Audit</option>
												<option <?php echo $agnt_feedback['audit_type']=='Calibration'?"selected":""; ?> value="Calibration">Calibration</option>
												<option <?php echo $agnt_feedback['audit_type']=='Pre-Certificate Mock Call'?"selected":""; ?> value="Pre-Certificate Mock Call">Pre-Certificate Mock Call</option>
												<option <?php echo $agnt_feedback['audit_type']=='Certificate Audit'?"selected":""; ?> value="Certificate Audit">Certificate Audit</option>
												<?php if(get_login_type()!="client"){ ?>
													<option <?php echo $agnt_feedback['audit_type']=='Operation Audit'?"selected":""; ?> value="Operation Audit">Operation Audit</option>
													<option <?php echo $agnt_feedback['audit_type']=='Trainer Audit'?"selected":""; ?> value="Trainer Audit">Trainer Audit</option>
												<?php } ?>
											</select>
										</td>
										<td class="auType">Auditor Type</td>
										<td class="auType">
											<select class="form-control" id="auditor_type" name="data[auditor_type]">
												<option value="">-Select-</option>
												<option value="Master">Master</option>
												<option value="Regular">Regular</option>
											</select>
										</td>
										<td>VOC:</td>
										<td>
											<select class="form-control" id="voc" name="data[voc]" disabled >
												<option value="">-Select-</option>
												<option <?php echo $agnt_feedback['voc']=='1'?"selected":""; ?> value="1">1</option>
												<option <?php echo $agnt_feedback['voc']=='2'?"selected":""; ?> value="2">2</option>
												<option <?php echo $agnt_feedback['voc']=='3'?"selected":""; ?> value="3">3</option>
												<option <?php echo $agnt_feedback['voc']=='4'?"selected":""; ?> value="4">4</option>
												<option <?php echo $agnt_feedback['voc']=='5'?"selected":""; ?> value="5">5</option>
											</select>
										</td>
									</tr>
									<tr>
									<td>Phone Number:</td>
									<td><input type="text" class="form-control" id="" name="data[phone]" value="<?php echo $agnt_feedback['phone']; ?>" disabled ></td>
									<td>Area Code:</td>
									<td><input type="text" class="form-control" id="" name="data[area_code]" value="<?php echo $agnt_feedback['area_code']; ?>" disabled ></td>
									</tr>
									<tr>
										<td style="font-weight:bold; font-size:16px">Earned Score</td>
										<td><input type="text" readonly id="" name="data[earned_score]" value="<?php echo $agnt_feedback['earned_score']; ?>" class="form-control" style="font-weight:bold"></td>
										<td style="font-weight:bold; font-size:16px">Possible Score</td>
										<td><input type="text" readonly id="" name="data[possible_score]" value="<?php echo $agnt_feedback['possible_score']; ?>" class="form-control" style="font-weight:bold"></td>
										<td style="font-weight:bold; font-size:16px">Overall Score3:</td>
										<td><input type="text" readonly id="" name="data[overall_score]" value="<?php echo $agnt_feedback['overall_score'].'%'; ?>" class="form-control" style="font-weight:bold"></td>
									</tr>

								<?php } else if($campaign=='purity_care'){ ?>
										<tr>
											<td>QA Name:</td> <td></b><?php echo $agnt_feedback['auditor_name'] ?></b></td>
											<td>Audit Date:</td> <td><b><?php echo $agnt_feedback['audit_date'] ?></b></td>
											<td>Call Date:</td> <td><b><?php echo $agnt_feedback['call_date'] ?></b></td>
											<td>Agent:</td> <td><b><?php echo $agnt_feedback['fname'].' '.$agnt_feedback['lname'] ?></b></td>
										</tr>
										<tr>
											<td>Fusion ID:</td><td><b><?php echo $agnt_feedback['fusion_id'] ?></b></td>
											<td>Li Super:</td> <td><b><?php echo $agnt_feedback['tl_name'] ?></b></td>
											<td>Location:</td> <td><b><?php echo $agnt_feedback['office_id'] ?></b></td>
											<td>Call 1 Call Duration:</td> <td><b><?php echo $agnt_feedback['call_one_call_duration'] ?></b></td>
										</tr>
										<tr>
											<td>Call 1 File No:</td> <td><b><?php echo $agnt_feedback['call_one_file_no'] ?></b></td>
											<td>Call 2 Call Duration:</td> <td><b><?php echo $agnt_feedback['call_two_call_duration'] ?></b></td>
											<td>Call 2 File No:</td> <td><b><?php echo $agnt_feedback['call_two_file_no'] ?></b></td>
										</tr>
										<tr>
											<!-- <td>Call 2 VOC:</td> <td><b><?php echo $agnt_feedback['call_two_voc'] ?></b></td> -->
											<td>Call 3 Call Duration:</td> <td><b><?php echo $agnt_feedback['call_three_call_duration'] ?></b></td>
											<td>Call 3 File No:</td> <td><b><?php echo $agnt_feedback['call_three_file_no'] ?></b></td>
											<!-- <td>Call 3 VOC:</td> <td><b><?php echo $agnt_feedback['call_three_voc'] ?></b></td> -->
										</tr>
										<tr>
											<td>Audit Type:</td> <td><b><?php echo $agnt_feedback['audit_type'] ?></b></td>
											<td>VOC:</td> <td><b><?php echo $agnt_feedback['voc'] ?></b></td>
										</tr>

									<?php }elseif($campaign=='puritycare_new'){ ?>

										<tr>
											<td>Auditor:</td> <td></b><?php echo $agnt_feedback['auditor_name'] ?></b></td>
											<td>Audit Date:</td> <td><b><?php echo $agnt_feedback['audit_date'] ?></b></td>
											<td>Agent:</td> <td><b><?php echo $agnt_feedback['fname'].' '.$agnt_feedback['lname'] ?></b></td>
											<td>Fusion ID:</td><td><b><?php echo $agnt_feedback['fusion_id'] ?></b></td>
										</tr>
										<tr>
											<td>Location:</td> <td><b><?php echo $agnt_feedback['office_id'] ?></b></td>
											<td>Audit Type:</td> <td><b><?php echo $agnt_feedback['audit_type'] ?></b></td>
											<td>VOC:</td> <td><b><?php echo $agnt_feedback['voc'] ?></b></td>
											<td>Call1 Date:</td> <td><b><?php echo $agnt_feedback['call_date1'] ?></b></td>
										</tr>
										<tr>
											<td>Call2 Date:</td> <td><b><?php echo $agnt_feedback['call_date2'] ?></b></td>
											<td>Call3 Date:</td> <td><b><?php echo $agnt_feedback['call_date3'] ?></b></td>
											<td>Call4 Date:</td> <td><b><?php echo $agnt_feedback['call_date4'] ?></b></td>
											<td>Call5 Date:</td> <td><b><?php echo $agnt_feedback['call_date5'] ?></b></td>
										</tr>
										<tr>
											<td>Call1 Duration:</td> <td><b><?php echo $agnt_feedback['call_duration1'] ?></b></td>
											<td>Call2 Duration:</td> <td><b><?php echo $agnt_feedback['call_duration2'] ?></b></td>
											<td>Call3 Duration:</td> <td><b><?php echo $agnt_feedback['call_duration3'] ?></b></td>
											<td>Call4 Duration:</td> <td><b><?php echo $agnt_feedback['call_duration4'] ?></b></td>
										</tr>
											<td>Call5 Duration:</td> <td><b><?php echo $agnt_feedback['call_duration5'] ?></b></td>
											<td>Customer Number1:</td> <td><b><?php echo $agnt_feedback['file_no1'] ?></b></td>
											<td>Customer Number2:</td> <td><b><?php echo $agnt_feedback['file_no2'] ?></b></td>
											<td>Customer Number3:</td> <td><b><?php echo $agnt_feedback['file_no3'] ?></b></td>
										</tr>
										<tr>
											<td>Customer Number4:</td> <td><b><?php echo $agnt_feedback['file_no4'] ?></b></td>
											<td>Customer Number5:</td> <td><b><?php echo $agnt_feedback['file_no5'] ?></b></td>
											<td>Call1 VOC:</td> <td><b><?php echo $agnt_feedback['voc1'] ?></b></td>
											<td>Call2 VOC:</td> <td><b><?php echo $agnt_feedback['voc2'] ?></b></td>
										</tr>
										<tr>
											<td>Call3 VOC:</td> <td><b><?php echo $agnt_feedback['voc3'] ?></b></td>
											<td>Call4 VOC:</td> <td><b><?php echo $agnt_feedback['voc4'] ?></b></td>
											<td>Call5 VOC:</td> <td><b><?php echo $agnt_feedback['voc5'] ?></b></td>
										</tr>

									<?php }elseif($campaign=='episource'){ ?>

										<tr>
											<td>QA Name:</td> <td></b><?php echo $agnt_feedback['auditor_name'] ?></b></td>
											<td>Audit Date:</td> <td><b><?php echo $agnt_feedback['audit_date'] ?></b></td>
											<td>Call Date:</td> <td><b><?php echo $agnt_feedback['call_date'] ?></b></td>
											<td>Agent:</td> <td><b><?php echo $agnt_feedback['fname'].' '.$agnt_feedback['lname'] ?></b></td>
										</tr>
										<tr>
											<td>Fusion ID:</td><td><b><?php echo $agnt_feedback['fusion_id'] ?></b></td>
											<td>Li Super:</td> <td><b><?php echo $agnt_feedback['tl_name'] ?></b></td>
											<td>Location:</td> <td><b><?php echo $agnt_feedback['office_id'] ?></b></td>
										</tr>
										<tr>
											<td>call reference:</td> <td><b><?php echo $agnt_feedback['call_ref'] ?></b></td>
											<td>Call Status:</td> <td><b><?php echo $agnt_feedback['call_status'] ?></b></td>
											<td>System:</td> <td><b><?php echo $agnt_feedback['system'] ?></b></td>
										</tr>
										<tr>
											<td>Audit Type:</td> <td><b><?php echo $agnt_feedback['audit_type'] ?></b></td>
											<td>VOC:</td> <td><b><?php echo $agnt_feedback['voc'] ?></b></td>
										</tr>
									<?php }elseif($campaign=='magnilife'){ ?>
											<tr>
											<td>QA Name:</td> <td></b><?php echo $agnt_feedback['auditor_name'] ?></b></td>
											<td>Audit Date:</td> <td><b><?php echo $agnt_feedback['audit_date'] ?></b></td>
											<td>File No:</td> <td><b><?php echo $agnt_feedback['file_no'] ?></b></td>
											<td>Agent:</td> <td><b><?php echo $agnt_feedback['fname'].' '.$agnt_feedback['lname'] ?></b></td>
										</tr>
										<tr>
											<td>Fusion ID:</td><td><b><?php echo $agnt_feedback['fusion_id'] ?></b></td>
											<td>Li Super:</td> <td><b><?php echo $agnt_feedback['tl_name'] ?></b></td>
											<td>Disposition:</td> <td><b><?php echo $agnt_feedback['disposition'] ?></b></td>
											<td>Call Date:</td> <td><b><?php echo $agnt_feedback['call_date'] ?></b></td>
										</tr>
										<tr>
											<td>Call Duration:</td> <td><b><?php echo $agnt_feedback['call_duration'] ?></b></td>
											<td>Audit Type:</td> <td><b><?php echo $agnt_feedback['audit_type'] ?></b></td>
											<td>VOC:</td> <td><b><?php echo $agnt_feedback['voc'] ?></b></td>
										</tr>
										<?php }elseif($campaign=='blains'){?>
											<tr>
											<td>QA Name:</td> <td></b><?php echo $agnt_feedback['auditor_name'] ?></b></td>
											<td>Audit Date:</td> <td><b><?php echo $agnt_feedback['audit_date'] ?></b></td>
											<td>Phone No:</td> <td><b><?php echo $agnt_feedback['phone'] ?></b></td>
											<td>Agent:</td> <td><b><?php echo $agnt_feedback['fname'].' '.$agnt_feedback['lname'] ?></b></td>
										</tr>
										<tr>
											<td>Fusion ID:</td><td><b><?php echo $agnt_feedback['fusion_id'] ?></b></td>
											<td>Li Super:</td> <td><b><?php echo $agnt_feedback['tl_name'] ?></b></td>
											<td>File No:</td> <td><b><?php echo $agnt_feedback['file_no'] ?></b></td>

										</tr>
										<tr>
											<td>Call Date:</td> <td><b><?php echo $agnt_feedback['call_date'] ?></b></td>
											<td>Call Duration:</td> <td><b><?php echo $agnt_feedback['call_duration'] ?></b></td>
											<td>Audit Type:</td> <td><b><?php echo $agnt_feedback['audit_type'] ?></b></td>
											<td>VOC:</td> <td><b><?php echo $agnt_feedback['voc'] ?></b></td>
										</tr>
										<tr>
											<td>Campaign Code:</td> <td><b><?php echo $agnt_feedback['site'] ?></b></td>
											<td>Filler 2:</td> <td><b><?php echo $agnt_feedback['filler'] ?></b></td>
											<td>Area Code:</td> <td><b><?php echo $agnt_feedback['area_code'] ?></b></td>
										</tr>
										<?php }elseif($campaign=='pajamagram'){?>
											<tr>
											<td>QA Name:</td> <td></b><?php echo $agnt_feedback['auditor_name'] ?></b></td>
											<td>Audit Date:</td> <td><b><?php echo $agnt_feedback['audit_date'] ?></b></td>
											<td>Phone No:</td> <td><b><?php echo $agnt_feedback['phone'] ?></b></td>
											<td>Agent:</td> <td><b><?php echo $agnt_feedback['fname'].' '.$agnt_feedback['lname'] ?></b></td>
										</tr>
										<tr>
											<td>Fusion ID:</td><td><b><?php echo $agnt_feedback['fusion_id'] ?></b></td>
											<td>Li Super:</td> <td><b><?php echo $agnt_feedback['tl_name'] ?></b></td>
											<td>File No:</td> <td><b><?php echo $agnt_feedback['file_no'] ?></b></td>

										</tr>
										<tr>
											<td>Call Date:</td> <td><b><?php echo $agnt_feedback['call_date'] ?></b></td>
											<td>Call Duration:</td> <td><b><?php echo $agnt_feedback['call_duration'] ?></b></td>
											<td>Audit Type:</td> <td><b><?php echo $agnt_feedback['audit_type'] ?></b></td>
											<td>VOC:</td> <td><b><?php echo $agnt_feedback['voc'] ?></b></td>
										</tr>
										<!-- <tr>
											<td>Campaign Code:</td> <td><b><?php echo $agnt_feedback['site'] ?></b></td>
											<td>Filler 2:</td> <td><b><?php echo $agnt_feedback['filler'] ?></b></td>
											<td>Area Code:</td> <td><b><?php echo $agnt_feedback['area_code'] ?></b></td>
										</tr> -->
									<?php }elseif($campaign=='delta'){?>
											<tr>
											<td>QA Name:</td> <td></b><?php echo $agnt_feedback['auditor_name'] ?></b></td>
											<td>Audit Date:</td> <td><b><?php echo $agnt_feedback['audit_date'] ?></b></td>
											<td>Phone No:</td> <td><b><?php echo $agnt_feedback['phone'] ?></b></td>
											<td>Agent:</td> <td><b><?php echo $agnt_feedback['fname'].' '.$agnt_feedback['lname'] ?></b></td>
										</tr>
										<tr>
											<td>Fusion ID:</td><td><b><?php echo $agnt_feedback['fusion_id'] ?></b></td>
											<td>Li Super:</td> <td><b><?php echo $agnt_feedback['tl_name'] ?></b></td>
											<td>File No:</td> <td><b><?php echo $agnt_feedback['file_no'] ?></b></td>

										</tr>
										<tr>
											<td>Call Date:</td> <td><b><?php echo $agnt_feedback['call_date'] ?></b></td>
											<td>Call Duration:</td> <td><b><?php echo $agnt_feedback['call_duration'] ?></b></td>
											<td>Audit Type:</td> <td><b><?php echo $agnt_feedback['audit_type'] ?></b></td>
											<td>VOC:</td> <td><b><?php echo $agnt_feedback['voc'] ?></b></td>
										</tr>
									<?php }elseif($campaign=='brightway_prescreen'){?>
											<tr>
											<td>QA Name:</td> <td></b><?php echo $agnt_feedback['auditor_name'] ?></b></td>
											<td>Audit Date:</td> <td><b><?php echo $agnt_feedback['audit_date'] ?></b></td>
											<td>Phone No:</td> <td><b><?php echo $agnt_feedback['phone'] ?></b></td>
											<td>Agent:</td> <td><b><?php echo $agnt_feedback['fname'].' '.$agnt_feedback['lname'] ?></b></td>
										</tr>
										<tr>
											<td>Fusion ID:</td><td><b><?php echo $agnt_feedback['fusion_id'] ?></b></td>
											<td>Li Super:</td> <td><b><?php echo $agnt_feedback['tl_name'] ?></b></td>
											<td>File No:</td> <td><b><?php echo $agnt_feedback['file_no'] ?></b></td>

										</tr>
										<tr>
											<td>Call Date:</td> <td><b><?php echo $agnt_feedback['call_date'] ?></b></td>
											<td>Call Duration:</td> <td><b><?php echo $agnt_feedback['call_duration'] ?></b></td>
											<td>Audit Type:</td> <td><b><?php echo $agnt_feedback['audit_type'] ?></b></td>
											<td>VOC:</td> <td><b><?php echo $agnt_feedback['voc'] ?></b></td>
										</tr>
										<tr>
											<td>Campaign Code:</td> <td><b><?php echo $agnt_feedback['site'] ?></b></td>
											<td>Filler 2:</td> <td><b><?php echo $agnt_feedback['filler'] ?></b></td>
											<td>Area Code:</td> <td><b><?php echo $agnt_feedback['area_code'] ?></b></td>
										</tr>
									<?php }elseif($campaign=='brightway_evaluation'){?>
										<tr>
											<td>QA Name:</td> <td></b><?php echo $agnt_feedback['auditor_name'] ?></b></td>
											<td>Audit Date:</td> <td><b><?php echo $agnt_feedback['audit_date'] ?></b></td>
											<td>Phone No:</td> <td><b><?php echo $agnt_feedback['phone'] ?></b></td>
											<td>Agent:</td> <td><b><?php echo $agnt_feedback['fname'].' '.$agnt_feedback['lname'] ?></b></td>
										</tr>
										<tr>
											<td>Fusion ID:</td><td><b><?php echo $agnt_feedback['fusion_id'] ?></b></td>
											<td>Li Super:</td> <td><b><?php echo $agnt_feedback['tl_name'] ?></b></td>
											<td>File No:</td> <td><b><?php echo $agnt_feedback['file_no'] ?></b></td>

										</tr>
										<tr>
											<td>Call Date:</td> <td><b><?php echo $agnt_feedback['call_date'] ?></b></td>
											<td>Call Duration:</td> <td><b><?php echo $agnt_feedback['call_duration'] ?></b></td>
											<td>Audit Type:</td> <td><b><?php echo $agnt_feedback['audit_type'] ?></b></td>
											<td>VOC:</td> <td><b><?php echo $agnt_feedback['voc'] ?></b></td>
										</tr>
										<tr>
											<td>Enter Policy Information:</td> <td><b><?php echo $agnt_feedback['epinfo'] ?></b></td>
											<td>Skill - Select all the Apply:</td> <td><b><?php echo $agnt_feedback['skill'] ?></b></td>
										</tr>

									<?php }elseif($campaign=='mercy_ship'){ ?>
										<tr>
											<td>QA Name:</td> <td></b><?php echo $agnt_feedback['auditor_name'] ?></b></td>
											<td>Audit Date:</td> <td><b><?php echo $agnt_feedback['audit_date'] ?></b></td>
											<td>Call Date:</td> <td><b><?php echo $agnt_feedback['date'] ?></b></td>
											<td>Agent:</td> <td><b><?php echo $agnt_feedback['fname'].' '.$agnt_feedback['lname'] ?></b></td>
										</tr>
										<tr>
											<td>Fusion ID:</td> <td></b><?php echo $agnt_feedback['fusion_id'] ?></b></td>
											<td>L1 Super:</td> <td><b><?php echo $agnt_feedback['tl_name'] ?></b></td>
											<td>Call Type:</td> <td><b><?php echo $agnt_feedback['call_type'] ?></b></td>
											<td>Contact Duration:</td> <td><b><?php echo $agnt_feedback['call_duration'] ?></b></td>
										</tr>
										<tr>
											<td>Disposition:</td> <td></b><?php echo $agnt_feedback['disposition'] ?></b></td>
											<td>CDR ID:</td> <td><b><?php echo $agnt_feedback['cdrid'] ?></b></td>
											<td>Audit Type:</td> <td><b><?php echo $agnt_feedback['audit_type'] ?></b></td>
											<td>VOC:</td> <td><b><?php echo $agnt_feedback['voc'] ?></b></td>
										</tr>

									<?php }elseif($campaign=='trapollo'){ ?>
										<tr>
											<td>QA Name:</td> <td></b><?php echo $agnt_feedback['auditor_name'] ?></b></td>
											<td>Audit Date:</td> <td><b><?php echo $agnt_feedback['audit_date'] ?></b></td>
											<td>Phone No:</td> <td><b><?php echo $agnt_feedback['phone'] ?></b></td>
											<td>Agent:</td> <td><b><?php echo $agnt_feedback['fname'].' '.$agnt_feedback['lname'] ?></b></td>
										</tr>
										<tr>
											<td>Fusion ID:</td><td><b><?php echo $agnt_feedback['fusion_id'] ?></b></td>
											<td>Li Super:</td> <td><b><?php echo $agnt_feedback['tl_name'] ?></b></td>
											<td>File No:</td> <td><b><?php echo $agnt_feedback['file_no'] ?></b></td>

										</tr>
										<tr>
											<td>Call Date:</td> <td><b><?php echo $agnt_feedback['call_date'] ?></b></td>
											<td>Call Duration:</td> <td><b><?php echo $agnt_feedback['call_duration'] ?></b></td>
											<td>Audit Type:</td> <td><b><?php echo $agnt_feedback['audit_type'] ?></b></td>
											<td>VOC:</td> <td><b><?php echo $agnt_feedback['voc'] ?></b></td>
										</tr>

									<?php }elseif($campaign=='sontiq'){ ?>
										<tr>
											<td>QA Name:</td> <td></b><?php echo $agnt_feedback['auditor_name'] ?></b></td>
											<td>Audit Date:</td> <td><b><?php echo $agnt_feedback['audit_date'] ?></b></td>
											<td>CALL ID:</td> <td><b><?php echo $agnt_feedback['CALL_ID'] ?></b></td>
											<td>Agent:</td> <td><b><?php echo $agnt_feedback['fname'].' '.$agnt_feedback['lname'] ?></b></td>
										</tr>
										<tr>
											<td>Fusion ID:</td><td><b><?php echo $agnt_feedback['fusion_id'] ?></b></td>
											<td>Li Super:</td> <td><b><?php echo $agnt_feedback['tl_name'] ?></b></td>
											<td>Record/Call Type:</td> <td><b><?php echo $agnt_feedback['CALL_TYPE'] ?></b></td>

										</tr>
										<tr>
											<td>End/Wrap Up Type:</td><td><b><?php echo $agnt_feedback['WRAP_TYPE'] ?></b></td>
											<td>CASE Type:</td> <td><b><?php echo $agnt_feedback['CASE_ID'] ?></b></td>
										</tr>
										<tr>
											<td>Call Date:</td> <td><b><?php echo $agnt_feedback['call_date'] ?></b></td>
											<td>Call Duration:</td> <td><b><?php echo $agnt_feedback['call_duration'] ?></b></td>
											<td>Audit Type:</td> <td><b><?php echo $agnt_feedback['audit_type'] ?></b></td>
											<td>VOC:</td> <td><b><?php echo $agnt_feedback['voc'] ?></b></td>
										</tr>

									<?php }else if($campaign=='suarez'){ ?>
										<tr>
											<td>QA Name:</td> <td></b><?php echo $agnt_feedback['auditor_name'] ?></b></td>
											<td>Audit Date:</td> <td><b><?php echo $agnt_feedback['audit_date'] ?></b></td>
											<td>Call Date:</td> <td><b><?php echo $agnt_feedback['call_date'] ?></b></td>

										</tr>
										<tr>
											<td>Agent:</td> <td><b><?php echo $agnt_feedback['fname'].' '.$agnt_feedback['lname'] ?></b></td>
											<td>Fusion ID:</td><td><b><?php echo $agnt_feedback['fusion_id'] ?></b></td>
											<td>L1 Super:</td> <td><b><?php echo $agnt_feedback['tl_name'] ?></b></td>


										</tr>
										<tr>
											<td>Process:</td> <td><b><?php echo $agnt_feedback['process_name'] ?></b></td>
											<td>Location:</td> <td><b><?php echo $agnt_feedback['office_id'] ?></b></td>
											<td>Call Duration:</td> <td><b><?php echo $agnt_feedback['call_duration'] ?></b></td>
										</tr>
										<tr>
											<td>This call was a/an:</td> <td><b><?php echo $agnt_feedback['call_an'] ?></b></td>
											<td>Account Identifiers:</td> <td><b><?php echo $agnt_feedback['account_identifiers'] ?></b></td>
											<td>Date of Coaching/Copy Received : </td> <td><b><?php echo $agnt_feedback['copy_received'] ?></b></td>
										</tr>
										<tr>
											<td>Audit Type:</td> <td><b><?php echo $agnt_feedback['audit_type'] ?></b></td>
											<td>VOC:</td> <td><b><?php echo $agnt_feedback['voc'] ?></b></td>
										</tr>
										<tr>
											<td>Earned Score</td> <td><b><?php echo $agnt_feedback['earned_score'] ?></b></td>
											<td>Possible Score</td> <td><b><?php echo $agnt_feedback['possible_score'] ?></b></td>
											<td>Overall Score: </td> <td><b><?php echo $agnt_feedback['overall_score'] ?></b></td>
										</tr>

									<?php }else if($campaign=='qpc_esal'){ ?>

										<tr>
											<td>QA Name:</td> <td></b><?php echo $agnt_feedback['auditor_name'] ?></b></td>
											<td>Audit Date:</td> <td><b><?php echo $agnt_feedback['audit_date'] ?></b></td>
											<td>Call Date:</td> <td><b><?php echo $agnt_feedback['call_date'] ?></b></td>
										</tr>
										<tr>
											<td>Agent:</td> <td><b><?php echo $agnt_feedback['fname'].' '.$agnt_feedback['lname'] ?></b></td>
											<td>Fusion ID:</td><td><b><?php echo $agnt_feedback['fusion_id'] ?></b></td>
											<td>L1 Super:</td> <td><b><?php echo $agnt_feedback['tl_name'] ?></b></td>
										</tr>
										<tr>
											<td>Process:</td> <td><b><?php echo $agnt_feedback['process_name'] ?></b></td>
											<td>Location:</td> <td><b><?php echo $agnt_feedback['office_id'] ?></b></td>
											<td>Call Duration:</td> <td><b><?php echo $agnt_feedback['call_duration'] ?></b></td>
										</tr>
										<tr>
											<td>File No:</td> <td><b><?php echo $agnt_feedback['file_no'] ?></b></td>
											<td>Call ID:</td> <td><b><?php echo $agnt_feedback['call_id'] ?></b></td>
											<td>Call Type:</td> <td><b><?php echo $agnt_feedback['call_type'] ?></b></td>
										</tr>
										<tr>
											<td>Audit Type:</td> <td><b><?php echo $agnt_feedback['audit_type'] ?></b></td>
											<td>VOC:</td> <td><b><?php echo $agnt_feedback['voc'] ?></b></td>
										</tr>

									<?php }else if($campaign=='pcare_cs'){ ?>

										<tr>
											<td>Auditor:</td> <td></b><?php echo $agnt_feedback['auditor_name'] ?></b></td>
											<td>Audit Date:</td> <td><b><?php echo $agnt_feedback['audit_date'] ?></b></td>
											<td>Agent:</td> <td><b><?php echo $agnt_feedback['fname'].' '.$agnt_feedback['lname'] ?></b></td>
											<td>Call Date:</td><td><b><?php echo $agnt_feedback['call_date'] ?></b></td>
										</tr>
										<tr>
											<td>Customer Number:</td><td><b><?php echo $agnt_feedback['customer_no'] ?></b></td>
											<td>Call Type:</td><td><b><?php echo $agnt_feedback['call_type'] ?></b></td>
											<td>Audit Type:</td> <td><b><?php echo $agnt_feedback['audit_type'] ?></b></td>
											<td>VOC:</td> <td><b><?php echo $agnt_feedback['voc'] ?></b></td>
										</tr>
									<?php }else if($campaign=='offline'){ ?>

									<?php
										if($pnid==0){
											$auditorName = get_username();
											$auditDate = CurrDateMDY();
											$clDate_val='';
										}else{
											if($agnt_feedback['entry_by']!=''){
												$auditorName = $agnt_feedback['auditor_name'];
											}else{
												$auditorName = $agnt_feedback['client_name'];
											}
											$auditDate = mysql2mmddyy($agnt_feedback['audit_date']);
											$clDate_val = mysql2mmddyy($agnt_feedback['call_date']);
										}
									?>
									<tr>
										<td>Auditor Name:</td>
										<td><input type="text" class="form-control" value="<?php echo $auditorName; ?>" disabled></td>
										<td>Audit Date:</td>
										<td><input type="text" class="form-control" value="<?php echo $auditDate; ?>" disabled></td>
										<td>Phone:</td>
										<td style="width:200px"><input type="text" class="form-control" id="phone" name="data[phone]" value="<?php echo $agnt_feedback['phone'] ?>" disabled></td>
									</tr>
									<tr>
										<td>Agent:</td>
										<td>
											<select class="form-control" id="agent_id" name="data[agent_id]" disabled >
												<option value="<?php echo $agnt_feedback['agent_id'] ?>"><?php echo $agnt_feedback['fname']." ".$agnt_feedback['lname'] ?></option>
												<option value="">-Select-</option>
												<?php foreach($agentName as $row):  ?>
													<option value="<?php echo $row['id']; ?>"><?php echo $row['name']; ?></option>
												<?php endforeach; ?>
											</select>
										</td>
										<td>Fusion ID:</td>
										<td><input type="text" class="form-control" id="fusion_id" value="<?php echo $agnt_feedback['fusion_id'] ?>" readonly ></td>
										<td>L1 Supervisor:</td>
										<td>
											<select class="form-control" id="tl_id" name="data[tl_id]" readonly>
												<option value="<?php echo $agnt_feedback['tl_id'] ?>"><?php echo $agnt_feedback['tl_name'] ?></option>
												<option value="">--Select--</option>
												<?php foreach($tlname as $tl): ?>
													<option value="<?php echo $tl['id']; ?>"><?php echo $tl['fname']." ".$tl['lname']; ?></option>
												<?php endforeach; ?>
											</select>
										</td>
									</tr>
									<tr>
										<td>Call Date:</td>
										<td style="width:200px"><input type="text" class="form-control" id="call_date" name="call_date" value="<?php echo $clDate_val; ?>" disabled></td>
										<td>Call Duration:</td>
										<td><input type="text" class="form-control" id="call_duration"  name="data[call_duration]" value="<?php echo $agnt_feedback['call_duration'] ?>" disabled ></td>
										<td>Rep:</td>
										<td><input type="text" class="form-control" name="data[rep]" value="<?php echo $agnt_feedback['rep'] ?>" disabled ></td>
									</tr>

									<tr>
										<td>Audit Type:</td>
										<td>
											<select class="form-control" id="audit_type" name="data[audit_type]" disabled>
												<option value="<?php echo $agnt_feedback['audit_type'] ?>"><?php echo $agnt_feedback['audit_type'] ?></option>
												<option value="">-Select-</option>
												<option value="CQ Audit">CQ Audit</option>
												<option value="BQ Audit">BQ Audit</option>
												<option value="Calibration">Calibration</option>
												<option value="Pre-Certificate Mock Call">Pre-Certificate Mock Call</option>
												<option value="Certification Audit">Certification Audit</option>
												<option value="Operation Audit">Operation Audit</option>
												<option value="Trainer Audit">Trainer Audit</option>
											</select>
										</td>
										<td class="auType">Auditor Type</td>
										<td class="auType">
											<select class="form-control" id="auditor_type" name="data[auditor_type]">
												<option value="">-Select-</option>
												<option value="Master">Master</option>
												<option value="Regular">Regular</option>
											</select>
										</td>
										<td>VOC:</td>
										<td>
											<select class="form-control" id="voc" name="data[voc]" disabled>
												<option value="<?php echo $agnt_feedback['voc'] ?>"><?php echo $agnt_feedback['voc'] ?></option>
												<option value="">-Select-</option>
												<option value="1">1</option>
												<option value="2">2</option>
												<option value="3">3</option>
												<option value="4">4</option>
												<option value="5">5</option>
												<option value="6">6</option>
												<option value="7">7</option>
												<option value="8">8</option>
												<option value="9">9</option>
												<option value="10">10</option>
											</select>
										</td>
									</tr>
									<tr>
										<td>Enter Policy Information:</td>
										<td><input type="text" class="form-control" name="data[enter_policy_information]" value="<?php echo $agnt_feedback['enter_policy_information'] ?>" disabled ></td>
										<td>Florida or National?:</td>
										<td>
											<select class="form-control" id="florida_or_national" name="data[florida_or_national]" disabled>
												<option value="<?php echo $agnt_feedback['florida_or_national'] ?>"><?php echo $agnt_feedback['florida_or_national'] ?></option>
												<option value="Yes">Yes</option>
												<option value="No">No</option>
											</select>
										</td>
										<td>Type of Policy:</td>
										<td><input type="text" class="form-control" name="data[type_of_policy]" value="<?php echo $agnt_feedback['type_of_policy'] ?>" disabled ></td>
									</tr>

									<tr>
										<td style="font-weight:bold; font-size:16px">Possible Score:</td>
										<td><input type="text" readonly id="possibleScore_offline" name="data[possible_score]" class="form-control" style="font-weight:bold" value="<?php echo $agnt_feedback['possible_score'] ?>"></td>
										<td style="font-weight:bold; font-size:16px">Earned Score:</td>
										<td><input type="text" readonly id="earnedScore_offline" name="data[earned_score]" class="form-control" style="font-weight:bold" value="<?php echo $agnt_feedback['earned_score'] ?>"></td>
										<td style="font-weight:bold; font-size:16px; text-align:right">Overall Score:</td>
										<td><input type="text" readonly id="overallScore_offline" name="data[overall_score]" class="form-control offlineFatal" style="font-weight:bold" value="<?php echo $agnt_feedback['overall_score'] ?>"></td>
									</tr>
									<tr style="height:25px; font-weight:bold; background-color:#85C1E9">
										<td colspan=3>PROCESSES AND PROCEDURES</td>
										<td>YES/NO or N/A</td>
										<td colspan=2>FEEDBACK</td>

									</tr>
									<tr>
										<td class="eml1" colspan=3>Did the associate handle the request according to Brightway's standards?</td>
										<td>
											<select class="form-control offline" name="data[associate_handle_request_according_Brightway]" disabled>
												<option value="">-Select-</option>
												<option offline_val=5 <?php echo $agnt_feedback['associate_handle_request_according_Brightway'] == "Yes"?"selected":"";?> value="Yes">Yes</option>
												<option offline_val=5 <?php echo $agnt_feedback['associate_handle_request_according_Brightway'] == "No"?"selected":"";?> value="No">No</option>
												<option offline_val=0 <?php echo $agnt_feedback['associate_handle_request_according_Brightway'] == "N/A"?"selected":"";?> value="N/A">N/A</option>
											</select>
										</td>
										<td colspan=2><input type="text" class="form-control" name="data[cmt1]" value="<?php echo $agnt_feedback['cmt1'] ?>" disabled></td>

									</tr>

									<tr>
										<td class="eml1" colspan=3>Did the associate handle the request according to the carrier's standards?</td>
										<td>
											<select class="form-control offline" name="data[associate_handle_request_according_carrier]" disabled>
												<option value="">-Select-</option>
												<option offline_val=5 <?php echo $agnt_feedback['associate_handle_request_according_carrier'] == "Yes"?"selected":"";?> value="Yes">Yes</option>
												<option offline_val=5 <?php echo $agnt_feedback['associate_handle_request_according_carrier'] == "No"?"selected":"";?> value="No">No</option>
												<option offline_val=0 <?php echo $agnt_feedback['associate_handle_request_according_carrier'] == "N/A"?"selected":"";?> value="N/A">N/A</option>
											</select>
										</td>
										<td colspan=2><input type="text" class="form-control" name="data[cmt2]" value="<?php echo $agnt_feedback['cmt2'] ?>" disabled></td>
									</tr>


                                    <tr>
										<td class="eml1" colspan=3>Did the associate process the change correctly?</td>
										<td>
											<select class="form-control offline" name="data[associate_process_change]" disabled>
												<option value="">-Select-</option>
												<option offline_val=5 <?php echo $agnt_feedback['associate_process_change'] == "Yes"?"selected":"";?> value="Yes">Yes</option>
												<option offline_val=5 <?php echo $agnt_feedback['associate_process_change'] == "No"?"selected":"";?> value="No">No</option>
												<option offline_val=0 <?php echo $agnt_feedback['associate_process_change'] == "N/A"?"selected":"";?> value="N/A">N/A</option>
											</select>
										</td>
										<td colspan=2><input type="text" class="form-control" name="data[cmt3]" value="<?php echo $agnt_feedback['cmt3'] ?>" disabled></td>
									</tr>
									<tr>
										<td class="eml1" colspan=3>Did the associate use the appropriate verbiage, tone, pace, and professionalism?</td>
										<td>
											<select class="form-control offline" name="data[associate_use_appropriate_verbiage]" disabled>
												<option value="">-Select-</option>
												<option offline_val=5 <?php echo $agnt_feedback['associate_use_appropriate_verbiage'] == "Yes"?"selected":"";?> value="Yes">Yes</option>
												<option offline_val=5 <?php echo $agnt_feedback['associate_use_appropriate_verbiage'] == "No"?"selected":"";?> value="No">No</option>
												<option offline_val=0 <?php echo $agnt_feedback['associate_use_appropriate_verbiage'] == "N/A"?"selected":"";?> value="N/A">N/A</option>
											</select>
										</td>
										<td colspan=2><input type="text" class="form-control" name="data[cmt4]" value="<?php echo $agnt_feedback['cmt4'] ?>" disabled></td>
									</tr>
									<tr>
										<td class="eml1" colspan=3>All verbal and written information provided by associate to insured and other parties was clear, accurate and included all relevant information</td>
										<td>
											<select class="form-control offline" name="data[All_verbal_written_information]" disabled>
												<option value="">-Select-</option>
												<option offline_val=10 <?php echo $agnt_feedback['All_verbal_written_information'] == "Yes"?"selected":"";?> value="Yes">Yes</option>
												<option offline_val=10 <?php echo $agnt_feedback['All_verbal_written_information'] == "No"?"selected":"";?> value="No">No</option>
												<option offline_val=0 <?php echo $agnt_feedback['All_verbal_written_information'] == "N/A"?"selected":"";?> value="N/A">N/A</option>
											</select>
										</td>
										<td colspan=2><input type="text" class="form-control" name="data[cmt5]" value="<?php echo $agnt_feedback['cmt5'] ?>" disabled></td>
									</tr>
									<!-- <tr><td colspan=6 style="background-color:#7DCEA0">AUTO-FAIL</td></tr> -->
									<tr>
										<td class="eml1" colspan=3 style="color:red">Was the customer adversely impacted?</td>
										<td>
											<select class="form-control offline" id="fatal1" name="data[was_customer_adversely]" disabled>
												<option value="">-Select-</option>
												<option offline_val=0 <?php echo $agnt_feedback['was_customer_adversely'] == "No"?"selected":"";?> value="No">No</option>
												<option offline_val=0 <?php echo $agnt_feedback['was_customer_adversely'] == "Yes"?"selected":"";?> value="Yes">Yes</option>
												<option offline_val=0 <?php echo $agnt_feedback['was_customer_adversely'] == "N/A"?"selected":"";?> value="N/A">N/A</option>
											</select>
										</td>
										<td colspan=2><input type="text" class="form-control" name="data[cmt6]" value="<?php echo $agnt_feedback['cmt6'] ?>" disabled></td>
									</tr>
									<tr>
										<td class="eml1" colspan=3 style="color:red">Were there any additional adverse impacts?</td>
										<td>
											<select class="form-control offline" id="fatal2" name="data[were_there_any_additional]" disabled>
												<option value="">-Select-</option>
												<option offline_val=0 <?php echo $agnt_feedback['were_there_any_additional'] == "No"?"selected":"";?> value="No">No</option>
												<option offline_val=0 <?php echo $agnt_feedback['were_there_any_additional'] == "Yes"?"selected":"";?> value="Yes">Yes</option>
												<option offline_val=0 <?php echo $agnt_feedback['were_there_any_additional'] == "N/A"?"selected":"";?> value="N/A">N/A</option>
											</select>
										</td>
										<td colspan=2><input type="text" class="form-control" name="data[cmt7]" value="<?php echo $agnt_feedback['cmt7'] ?>" disabled></td>
									</tr>
									</tr><tr><td colspan=6 style="background-color:#7DCEA0"></td></tr>
									<tr>
										<td>Call Summary:</td>
										<td colspan="2"><textarea class="form-control"   name="data[call_summary]" disabled><?php echo $agnt_feedback['call_summary'] ?></textarea></td>
										<td>Feedback:</td>
										<td colspan="2"><textarea class="form-control"   name="data[feedback]" disabled><?php echo $agnt_feedback['feedback'] ?></textarea></td>
									</tr>

									<tr>
										<td colspan=2>Upload Files</td>
										<?php
											if($agnt_feedback['attach_file']!=''){ ?>
												<td colspan=4>
													<?php $attach_file = explode(",",$agnt_feedback['attach_file']);
													 foreach($attach_file as $mp){ ?>
														<audio controls='' style="background-color:#607F93">
														  <source src="<?php echo base_url(); ?>qa_files/offline/<?php echo $mp; ?>" type="audio/ogg">
														  <source src="<?php echo base_url(); ?>qa_files/offline/<?php echo $mp; ?>" type="audio/mpeg">
														</audio> </br>
													 <?php } ?>
												</td>
										<?php }else{
												echo '<td colspan=6><b>No Files</b></td>';
											  }
										?>
									</tr>

									<?php }else{ ?>

										<tr>
											<td>QA Name:</td> <td></b><?php echo $agnt_feedback['auditor_name'] ?></b></td>
											<td>Audit Date:</td> <td><b><?php echo $agnt_feedback['audit_date'] ?></b></td>
											<td>Call Date:</td> <td><b><?php echo $agnt_feedback['call_date'] ?></b></td>
											<td>Agent:</td> <td><b><?php echo $agnt_feedback['fname'].' '.$agnt_feedback['lname'] ?></b></td>
										</tr>
										<tr>
											<td>Fusion ID:</td><td><b><?php echo $agnt_feedback['fusion_id'] ?></b></td>
											<td>Li Super:</td> <td><b><?php echo $agnt_feedback['tl_name'] ?></b></td>
											<td>Location:</td> <td><b><?php echo $agnt_feedback['office_id'] ?></b></td>
											<td>Call Duration:</td> <td><b><?php echo $agnt_feedback['call_duration'] ?></b></td>
										</tr>
										<tr>
											<?php if(($campaign!='ab_commercial') || ($campaign!='revel_new')){?>
											<!-- <td>File No:</td> <td><b> --><?php //echo $agnt_feedback['file_no'] ?></b></td>
										    <?php } ?>
											<td>Audit Type:</td> <td><b><?php echo $agnt_feedback['audit_type'] ?></b></td>
											<td>VOC:</td> <td><b><?php echo $agnt_feedback['voc'] ?></b></td>
										</tr>
										<?php if($campaign=='revel'){ ?>
											<tr>
												<td>CSR ID:</td> <td><b><?php echo $agnt_feedback['csr_id'] ?></b></td>
											</tr>
										<?php }

										}
										?>
                                     <!--Nilkanta-->
                                     <?php if($campaign=='phone_inbound'){ ?>


                                    <tr>
										<td>Evaluator Name:</td>
										<td><input type="text" class="form-control" name="data[evaluator_name]" value="<?php echo $agnt_feedback['evaluator_name'] ?>" disabled></td>
										<td>ANI:</td>
										<td><input type="text" class="form-control" name="data[ani]" value="<?php echo $agnt_feedback['ani'] ?>" disabled></td>
										<td>DNIS:</td>
										<td><input type="text" class="form-control" name="data[dnis]" value="<?php echo $agnt_feedback['dnis'] ?>" disabled></td>
										<td>Contact ID:</td>
										<td><input type="text" class="form-control" name="data[contact_id]" value="<?php echo $agnt_feedback['contact_id'] ?>" disabled></td>
									</tr>
									<tr>
										<td>Direction Type Description:</td>
										<td colspan=""><input type="text" class="form-control" id="direction_type" name="data[direction_type]" value="<?php echo $agnt_feedback['direction_type'] ?>" disabled></td>
										<td>Skill Name:</td>
										<td colspan="2"><input type="text" class="form-control" name="data[skill_name]" value="<?php echo $agnt_feedback['skill_name'] ?>" disabled></td>
										<td>Segment Duration:</td>
										<td colspan="2"><input type="text" class="form-control" id="sigment_duration" name="data[segment_duration]" value="<?php echo $agnt_feedback['segment_duration'] ?>" disabled></td>
									</tr>
									<tr style="font-size:18px; font-weight:bold">
										<td>Earned Score</td>
										<td><input type="text" readonly class="form-control" id="phone_earnedScore" name="data[earned_score]" value="<?php echo $agnt_feedback['earned_score'] ?>"></td>
										<td>Possible Score</td>
										<td colspan="2"><input type="text" readonly class="form-control" id="phone_possibleScore" name="data[possible_score]" value="<?php echo $agnt_feedback['possible_score'] ?>"></td>
										<td>Overall Score:</td>
										<td colspan="2"><input type="text" readonly class="form-control phoneAutofail" id="phone_overallScore" name="data[overall_score]" value="<?php echo $agnt_feedback['overall_score'] ?>"></td>
									</tr>
                                   <!--  <tr>
										<td colspan="7" style="font-weight:bold; font-size:16px; text-align:right">Overall Score:</td>
										<td><input type="text" readonly name="data[overall_score]" class="form-control" style="font-weight:bold" value="<?php echo $agnt_feedback['overall_score'] ?>"></td>
									</tr> -->
									<tr>
										
									</tr>
									<tr style="height:25px; font-weight:bold; background-color:#85C1E9">
										<td colspan=4>Item</td>
										<td>Rating</td>
										<td colspan=3>Comment</td>
									</tr>

									<tr><td class="eml" colspan=8>Call Information(In the comment area, explain in detail the reason for the call.)</td></tr>
									<tr>
										<td style="text-align:left;" colspan=3>Line of Business</td>
										<td>
											<td colspan=7><input type="text" class="form-control" name="data[line_of_business]" value="<?php echo $agnt_feedback['line_of_business'] ?>" disabled></td>
										</td>
									</tr>
									<tr>
										<td style="text-align:left;" colspan=3>State of Policy</td>
										<td>
											<td colspan=7><input type="text" class="form-control" name="data[state_of_policy]" value="<?php echo $agnt_feedback['state_of_policy'] ?>" disabled></td>
										</td>
									</tr>
									<tr>
										<td style="text-align:left;" colspan=3>Comment</td>
										<td>
											<td colspan=7><input type="text" class="form-control" name="data[call_information_comment]" value="<?php echo $agnt_feedback['call_information_comment'] ?>" disabled></td>
										</td>
									</tr>
									
									<tr><td class="eml" colspan=9>1. Authentication</td></tr>
									<tr>
										<td style="text-align:left;" colspan=3>1.a. Did the CSR complete the correct caller verification for either a first-party or a third-party caller?</td>
										<td>
											<select class="form-control phone_inbound soft_skill authentication_grade" name="data[complete_correct_caller]" id="complete_correct_caller" disabled>
												<option phone_inbound_val=2 authentication_val=2 <?php echo $agnt_feedback['complete_correct_caller'] == "2"?"selected":"";?> value="2">2</option>
												<option phone_inbound_val=1 authentication_val=1 <?php echo $agnt_feedback['complete_correct_caller'] == "1"?"selected":"";?> value="1">1</option>
												<option phone_inbound_val=0 authentication_val=0 <?php echo $agnt_feedback['complete_correct_caller'] == "0"?"selected":"";?> value="0">0</option>
												<option phone_inbound_val=2 authentication_val=2 <?php echo $agnt_feedback['complete_correct_caller'] == "NA"?"selected":"";?> value="NA">NA</option>
											</select>
										</td>
										<td colspan=4><input type="text" class="form-control" name="data[cmt1]" value="<?php echo $agnt_feedback['cmt1'] ?>"></td>
									</tr>
									<tr>
										<td style="text-align:left;" colspan=3>1.b. During the authentication process, if any new contact information was provided, was this captured?</td>
										<td>
											<select class="form-control phone_inbound soft_skill authentication_grade" name="data[authentication_process]" id="authentication_process" disabled>
												<option phone_inbound_val=2 authentication_val=2 <?php echo $agnt_feedback['authentication_process'] == "2"?"selected":"";?> value="2">2</option>
												<option phone_inbound_val=0 authentication_val=0 <?php echo $agnt_feedback['authentication_process'] == "0"?"selected":"";?> value="0">0</option>
												<option phone_inbound_val=2 authentication_val=2 <?php echo $agnt_feedback['authentication_process'] == "NA"?"selected":"";?> value="NA">NA</option>
											</select>
										</td>
										<td colspan=4><input type="text" class="form-control" name="data[cmt2]" value="<?php echo $agnt_feedback['cmt2'] ?>"></td>
									</tr>
									<tr style="background-color:white;">
										
										<td colspan="3" style="font-weight:bold; font-size:16px; text-align:middle">Overall Grade:</td>
										<td colspan="6"><input type="text" readonly id="authentication_overall" name="data[authentication_grade]" class="form-control phoneAutofail" style="font-weight:bold" value="<?php echo $agnt_feedback['authentication_grade'] ?>"></td>
									</tr>
									<tr><td class="eml" colspan=9>2. Professionalism</td></tr>
									<tr>
										<td style="text-align:left;" colspan=3>2.a.Did the CSR demonstrate soft skills effectively throughout the call?</td>
										<td>
											<select class="form-control phone_inbound soft_skill professionalism_grade" name="data[demonstrate_soft_skills]" disabled>
												<option phone_inbound_val=2 professionalism_val=2 <?php echo $agnt_feedback['demonstrate_soft_skills'] == "2"?"selected":"";?> value="2">2</option>
												<option phone_inbound_val=1 professionalism_val=1 <?php echo $agnt_feedback['demonstrate_soft_skills'] == "1"?"selected":"";?> value="1">1</option>
												<option phone_inbound_val=0 professionalism_val=0 <?php echo $agnt_feedback['demonstrate_soft_skills'] == "0"?"selected":"";?> value="0">0</option>
												<option phone_inbound_val=2 professionalism_val=2 <?php echo $agnt_feedback['demonstrate_soft_skills'] == "NA"?"selected":"";?> value="NA">NA</option>
											</select>
										</td>
										<td colspan=4><input type="text" class="form-control" name="data[cmt3]" value="<?php echo $agnt_feedback['cmt3'] ?>"></td>
									</tr>
									<tr>
										<td style="text-align:left;" colspan=3>2.b.Did the CSR provide empathy or sympathy if applicable?</td>
										<td>
											<select class="form-control phone_inbound soft_skill professionalism_grade" name="data[provide_empathy_sympathy]" disabled>

												<option phone_inbound_val=2 professionalism_val=2 <?php echo $agnt_feedback['provide_empathy_sympathy'] == "2"?"selected":"";?> value="2">2</option>
												<option phone_inbound_val=0 professionalism_val=0 <?php echo $agnt_feedback['provide_empathy_sympathy'] == "0"?"selected":"";?> value="0">0</option>

												<option phone_inbound_val=2 professionalism_val=2 <?php echo $agnt_feedback['provide_empathy_sympathy'] == "NA"?"selected":"";?> value="NA">NA</option>
											</select>
										</td>
										<td colspan=4><input type="text" class="form-control" name="data[cmt4]" value="<?php echo $agnt_feedback['cmt4'] ?>"></td>
									</tr>
                                     <tr>
										<td style="text-align:left;" colspan=3>2.c. Did the CSR demonstrate call control effectively throughout the call?</td>
										<td>
											<select class="form-control phone_inbound soft_skill professionalism_grade" name="data[demonstrate_call_control]" disabled>
												<option phone_inbound_val=2 professionalism_val=2 <?php echo $agnt_feedback['demonstrate_call_control'] == "2"?"selected":"";?> value="2">2</option>
												<option phone_inbound_val=0 professionalism_val=0 <?php echo $agnt_feedback['demonstrate_call_control'] == "0"?"selected":"";?> value="0">0</option>
												<option phone_inbound_val=2 professionalism_val=2 <?php echo $agnt_feedback['demonstrate_call_control'] == "NA"?"selected":"";?> value="NA">NA</option>
											</select>
										</td>
										<td colspan=4><input type="text" class="form-control" name="data[cmt5]" value="<?php echo $agnt_feedback['cmt5'] ?>"></td>
									</tr>
									<tr style="background-color:white;">
										
										<td colspan="3" style="font-weight:bold; font-size:16px; text-align:middle">Overall Grade:</td>
										<td colspan="6"><input type="text" readonly id="professionalism_overall" name="data[professionalism_grade]" class="form-control phoneAutofail" style="font-weight:bold" value="<?php echo $agnt_feedback['professionalism_grade'] ?>"></td>
									</tr>
									<tr><td class="eml" colspan=9>3. Call Handling Skills</td></tr>
									<tr>
										<td style="text-align:left;" colspan=3>3.a. Did the CSR provide the proper Brightway-approved greeting?</td>
										<td>
											<select class="form-control phone_inbound soft_skill call_handling_skills_grade" name="data[provide_the_proper_brightway]" disabled>
											<option phone_inbound_val=2 call_handling_skills_val=2 <?php echo $agnt_feedback['provide_the_proper_brightway'] == "2"?"selected":"";?> value="2">2</option>
											<option phone_inbound_val=1 call_handling_skills_val=1 <?php echo $agnt_feedback['provide_the_proper_brightway'] == "1"?"selected":"";?> value="1">1</option>
											<option phone_inbound_val=0 call_handling_skills_val=0 <?php echo $agnt_feedback['provide_the_proper_brightway'] == "0"?"selected":"";?> value="0">0</option>
											<option phone_inbound_val=2 call_handling_skills_val=2 <?php echo $agnt_feedback['provide_the_proper_brightway'] == "NA"?"selected":"";?> value="NA">NA</option>
											</select>
										</td>
										<td colspan=4><input type="text" class="form-control" name="data[cmt6]" value="<?php echo $agnt_feedback['cmt6'] ?>"></td>
									</tr>
									<tr>
										<td style="text-align:left;" colspan=3>3.b. Did the CSR advise the caller that the call will be recorded?</td>
										<td>
											<select class="form-control phone_inbound soft_skill call_handling_skills_grade" name="data[advise_the_caller_that]" disabled>
												<option phone_inbound_val=1 call_handling_skills_val=1 <?php echo $agnt_feedback['advise_the_caller_that'] == "1"?"selected":"";?> value="1">1</option>
												<option phone_inbound_val=0 call_handling_skills_val=0 <?php echo $agnt_feedback['advise_the_caller_that'] == "0"?"selected":"";?> value="0">0</option>
												<option phone_inbound_val=1 call_handling_skills_val=1 <?php echo $agnt_feedback['advise_the_caller_that'] == "NA"?"selected":"";?> value="NA">NA</option>
												
											</select>
										</td>
										<td colspan=4><input type="text" class="form-control" name="data[cmt7]" value="<?php echo $agnt_feedback['cmt7'] ?>"></td>
									</tr>
									<tr>
										<td style="text-align:left;" colspan=3>3.c. Did the CSR follow the proper hold process, if applicable?</td>
										<td>
											<select class="form-control phone_inbound soft_skill call_handling_skills_grade" name="data[follow_the_proper_hold]" disabled>
												<option phone_inbound_val=2 call_handling_skills_val=2 <?php echo $agnt_feedback['follow_the_proper_hold'] == "2"?"selected":"";?> value="2">2</option>
												<option phone_inbound_val=1 call_handling_skills_val=1 <?php echo $agnt_feedback['follow_the_proper_hold'] == "1"?"selected":"";?> value="1">1</option>
												<option phone_inbound_val=0 call_handling_skills_val=0 <?php echo $agnt_feedback['follow_the_proper_hold'] == "0"?"selected":"";?> value="0">0</option>
												<option phone_inbound_val=2 call_handling_skills_val=2 <?php echo $agnt_feedback['follow_the_proper_hold'] == "NA"?"selected":"";?> value="NA">NA</option>
											</select>
										</td>
										<td colspan=4><input type="text" class="form-control" name="data[cmt8]" value="<?php echo $agnt_feedback['cmt8'] ?>"></td>
									</tr>
									<tr>
										<td style="text-align:left;" colspan=3>3.d. Did the CSR follow the proper transfer process, if applicable?</td>
										<td>
											<select class="form-control phone_inbound soft_skill call_handling_skills_grade" name="data[follow_the_proper_transfer]" disabled>
												<option phone_inbound_val=2 call_handling_skills_val=2 <?php echo $agnt_feedback['follow_the_proper_transfer'] == "2"?"selected":"";?> value="2">2</option>
												<option phone_inbound_val=1 call_handling_skills_val=1 <?php echo $agnt_feedback['follow_the_proper_transfer'] == "1"?"selected":"";?> value="1">1</option>
												<option phone_inbound_val=0 call_handling_skills_val=0 <?php echo $agnt_feedback['follow_the_proper_transfer'] == "0"?"selected":"";?> value="0">0</option>
												<option phone_inbound_val=2 call_handling_skills_val=2 <?php echo $agnt_feedback['follow_the_proper_transfer'] == "NA"?"selected":"";?> value="NA">NA</option>
											</select>
										</td>
										<td colspan=4><input type="text" class="form-control" name="data[cmt9]" value="<?php echo $agnt_feedback['cmt9'] ?>"></td>
									</tr>
									<tr>
										<td style="text-align:left;" colspan=3>3.e. If the call disconnected did the CSR attempt to call back?</td>
										<td>
											<select class="form-control phone_inbound soft_skill call_handling_skills_grade" name="data[disconnected_did_the_csr]" disabled>
												<option phone_inbound_val=1 call_handling_skills_val=1 <?php echo $agnt_feedback['disconnected_did_the_csr'] == "1"?"selected":"";?> value="1">1</option>
												<option phone_inbound_val=0 call_handling_skills_val=0 <?php echo $agnt_feedback['disconnected_did_the_csr'] == "0"?"selected":"";?> value="0">0</option>
												<option phone_inbound_val=1 call_handling_skills_val=1 <?php echo $agnt_feedback['disconnected_did_the_csr'] == "NA"?"selected":"";?> value="NA">NA</option>
											</select>
										</td>
										<td colspan=4><input type="text" class="form-control" name="data[cmt10]" value="<?php echo $agnt_feedback['cmt10'] ?>"></td>
									</tr>
									<tr>
										<td style="text-align:left;" colspan=3>3.f. Did the CSR use the proper closing?</td>
										<td>
											<select class="form-control phone_inbound soft_skill call_handling_skills_grade" name="data[the_proper_closing]" disabled>
												<option phone_inbound_val=1 call_handling_skills_val=1 <?php echo $agnt_feedback['the_proper_closing'] == "1"?"selected":"";?> value="1">1</option>
												<option phone_inbound_val=0 call_handling_skills_val=0 <?php echo $agnt_feedback['the_proper_closing'] == "0"?"selected":"";?> value="0">0</option>
												<option phone_inbound_val=1 call_handling_skills_val=1 <?php echo $agnt_feedback['the_proper_closing'] == "NA"?"selected":"";?> value="NA">NA</option>
											</select>
										</td>
										<td colspan=4><input type="text" class="form-control" name="data[cmt11]" value="<?php echo $agnt_feedback['cmt11'] ?>"></td>
									</tr>
									<tr style="background-color:white;">
										
										<td colspan="3" style="font-weight:bold; font-size:16px; text-align:middle">Overall Grade:</td>
										<td colspan="6"><input type="text" readonly id="call_handling_skills_overall" name="data[call_handling_skills_grade]" class="form-control phoneAutofail" style="font-weight:bold" value="<?php echo $agnt_feedback['call_handling_skills_grade'] ?>"></td>
									</tr>
									<tr><td class="eml" colspan=9>4. Use of Appropriate Resources and Tools/ Brightway Knowledge</td></tr>
									<tr>
										<td style="text-align:left;" colspan=3>4.a. Did the CSR use the necessary tools and resources to effectively and accurately assist the customer?</td>
										<td>
											<select class="form-control phone_inbound soft_skill brightway_knowledge_grade" name="data[the_necessary_tools_and]" disabled>
												<option phone_inbound_val=3 brightway_knowledge_val=3 <?php echo $agnt_feedback['the_necessary_tools_and'] == "3"?"selected":"";?> value="3">3</option>
												<option phone_inbound_val=0 brightway_knowledge_val=0 <?php echo $agnt_feedback['the_necessary_tools_and'] == "0"?"selected":"";?> value="0">0</option>
												<option phone_inbound_val=3 brightway_knowledge_val=3 <?php echo $agnt_feedback['the_necessary_tools_and'] == "NA"?"selected":"";?> value="NA">NA</option>
											</select>
										</td>
										<td colspan=4><input type="text" class="form-control" name="data[cmt12]" value="<?php echo $agnt_feedback['cmt12'] ?>"></td>
									</tr>

									<tr>
										<td style="text-align:left;" colspan=3>4.b. Did the CSR demonstrate knowledge of Brightway's carriers and lines of business when relaying information to the caller?</td>
										<td>
											<select class="form-control phone_inbound soft_skill brightway_knowledge_grade" name="data[demonstrate_knowledge]" disabled>
												<option phone_inbound_val=3 brightway_knowledge_val=3 <?php echo $agnt_feedback['demonstrate_knowledge'] == "3"?"selected":"";?> value="3">3</option>
												<option phone_inbound_val=0 brightway_knowledge_val=0 <?php echo $agnt_feedback['demonstrate_knowledge'] == "0"?"selected":"";?> value="0">0</option>
												<option phone_inbound_val=3 brightway_knowledge_val=3 <?php echo $agnt_feedback['demonstrate_knowledge'] == "NA"?"selected":"";?> value="NA">NA</option>
											</select>
										</td>
										<td colspan=4><input type="text" class="form-control" name="data[cmt13]" value="<?php echo $agnt_feedback['cmt13'] ?>"></td>
									</tr>
									<tr style="background-color:white;">
										
										<td colspan="3" style="font-weight:bold; font-size:16px; text-align:middle">Overall Grade:</td>
										<td colspan="6"><input type="text" readonly id="brightway_knowledge_overall" name="data[brightway_knowledge]" class="form-control phoneAutofail" style="font-weight:bold" value="<?php echo $agnt_feedback['brightway_knowledge'] ?>"></td>
									</tr>
									<tr><td class="eml" colspan=9>5.Documentation</td></tr>
									<tr>
										<td style="text-align:left;" colspan=3>5.a. Did the CSR accurately document the interaction from start to finish?</td>
										<td>
											<select class="form-control phone_inbound soft_skill documentation_grade" name="data[accurately_document]" disabled>
												<option phone_inbound_val=3 documentation_val=3 <?php echo $agnt_feedback['accurately_document'] == "3"?"selected":"";?> value="3">3</option>
												<option phone_inbound_val=1 documentation_val=1 <?php echo $agnt_feedback['accurately_document'] == "1"?"selected":"";?> value="1">1</option>
												<option phone_inbound_val=0 documentation_val=0 <?php echo $agnt_feedback['accurately_document'] == "0"?"selected":"";?> value="0">0</option>
												<option phone_inbound_val=3 documentation_val=3 <?php echo $agnt_feedback['accurately_document'] == "NA"?"selected":"";?> value="NA">NA</option>
											</select>
										</td>
										<td colspan=4><input type="text" class="form-control" name="data[cmt14]" value="<?php echo $agnt_feedback['cmt14'] ?>"></td>
									</tr>
									<tr>
										<td style="text-align:left;" colspan=3>5.b. Did the CSR provide clear notes that provide clarity and understanding of what happened during the interaction</td>
										<td>
											<select class="form-control phone_inbound soft_skill documentation_grade" name="data[provide_clear_notes]" disabled>
												<option phone_inbound_val=3 documentation_val=3 <?php echo $agnt_feedback['provide_clear_notes'] == "3"?"selected":"";?> value="3">3</option>
												<option phone_inbound_val=1 documentation_val=1 <?php echo $agnt_feedback['provide_clear_notes'] == "1"?"selected":"";?> value="1">1</option>
												<option phone_inbound_val=0 documentation_val=0 <?php echo $agnt_feedback['provide_clear_notes'] == "0"?"selected":"";?> value="0">0</option>
												<option phone_inbound_val=3 documentation_val=3 <?php echo $agnt_feedback['provide_clear_notes'] == "NA"?"selected":"";?> value="NA">NA</option>
											</select>
										</td>
										<td colspan=4><input type="text" class="form-control" name="data[cmt15]" value="<?php echo $agnt_feedback['cmt15'] ?>"></td>
									</tr>
									<tr style="background-color:white;">
										
										<td colspan="3" style="font-weight:bold; font-size:16px; text-align:middle">Overall Grade:</td>
										<td colspan="6"><input type="text" readonly id="documentation_overall" name="data[documentation_grade]" class="form-control phoneAutofail" style="font-weight:bold" value="<?php echo $agnt_feedback['documentation_grade'] ?>"></td>
									</tr>
									<tr><td class="eml" colspan=9>6. Contact Resolution</td></tr>
									<tr>
										<td style="text-align:left;" colspan=3>6.a. Did the CSR properly advise the caller of any follow-up expectations and set for themselves?</td>
										<td>
											<select class="form-control phone_inbound soft_skill contact_resolution_grade" name="data[properly_advise_the_caller]" disabled>
												<option phone_inbound_val=4 contact_resolution_val=4 <?php echo $agnt_feedback['properly_advise_the_caller'] == "4"?"selected":"";?> value="4">4</option>
												<option phone_inbound_val=1 contact_resolution_val=1 <?php echo $agnt_feedback['properly_advise_the_caller'] == "1"?"selected":"";?> value="1">1</option>
												<option phone_inbound_val=0 contact_resolution_val=0 <?php echo $agnt_feedback['properly_advise_the_caller'] == "0"?"selected":"";?> value="0">0</option>
												<option phone_inbound_val=4 contact_resolution_val=4 <?php echo $agnt_feedback['properly_advise_the_caller'] == "NA"?"selected":"";?> value="NA">NA</option>
											</select>
										</td>
										<td colspan=4><input type="text" class="form-control" name="data[cmt16]" value="<?php echo $agnt_feedback['cmt16'] ?>"></td>
									</tr>
									<tr>
										<td style="text-align:left;" colspan=3>6.b. Did the CSR clearly explain options or solutions to the customer and focus on an end solution?</td>
										<td>
											<select class="form-control phone_inbound soft_skill contact_resolution_grade" name="data[clearly_explain_options]" disabled>
												<option phone_inbound_val=4 contact_resolution_val=4 <?php echo $agnt_feedback['clearly_explain_options'] == "4"?"selected":"";?> value="4">4</option>
												<option phone_inbound_val=1 contact_resolution_val=1 <?php echo $agnt_feedback['clearly_explain_options'] == "1"?"selected":"";?> value="1">1</option>
												<option phone_inbound_val=0 contact_resolution_val=0 <?php echo $agnt_feedback['clearly_explain_options'] == "0"?"selected":"";?> value="0">0</option>
												<option phone_inbound_val=4 contact_resolution_val=4 <?php echo $agnt_feedback['clearly_explain_options'] == "NA"?"selected":"";?> value="NA">NA</option>
											</select>
										</td>
										<td colspan=4><input type="text" class="form-control" name="data[cmt17]" value="<?php echo $agnt_feedback['cmt17'] ?>"></td>
									</tr>
									<tr>
										<td style="text-align:left;" colspan=3>6.c. Were all necessary policies updated in AMS and the carrier website?</td>
										<td>
											<select class="form-control phone_inbound soft_skill contact_resolution_grade" name="data[necessary_policies_updated]" disabled>
												<option phone_inbound_val=4 contact_resolution_val=4 <?php echo $agnt_feedback['necessary_policies_updated'] == "4"?"selected":"";?> value="4">4</option>
												<option phone_inbound_val=0 contact_resolution_val=0 <?php echo $agnt_feedback['necessary_policies_updated'] == "0"?"selected":"";?> value="0">0</option>
												<option phone_inbound_val=4 contact_resolution_val=4 <?php echo $agnt_feedback['necessary_policies_updated'] == "NA"?"selected":"";?> value="NA">NA</option>
											</select>
										</td>
										<td colspan=4><input type="text" class="form-control" name="data[cmt18]" value="<?php echo $agnt_feedback['cmt18'] ?>"></td>
									</tr>
									<tr>
										<td style="text-align:left;" colspan=3>6.d. Did the CSR offer helpful options as applicable such as webforms, etc.?</td>
										<td>
											<select class="form-control phone_inbound soft_skill contact_resolution_grade" name="data[offer_helpful_options]" disabled>
												<option phone_inbound_val=1 contact_resolution_val=1 <?php echo $agnt_feedback['offer_helpful_options'] == "1"?"selected":"";?> value="1">1</option>
												<option phone_inbound_val=0 contact_resolution_val=0 <?php echo $agnt_feedback['offer_helpful_options'] == "0"?"selected":"";?> value="0">0</option>
												<option phone_inbound_val=1 contact_resolution_val=1 <?php echo $agnt_feedback['offer_helpful_options'] == "NA"?"selected":"";?> value="NA">NA</option>
											</select>
										</td>
										<td colspan=4><input type="text" class="form-control" name="data[cmt19]" value="<?php echo $agnt_feedback['cmt19'] ?>"></td>
									</tr>
									<tr style="background-color:white;">
										
										<td colspan="3" style="font-weight:bold; font-size:16px; text-align:middle">Overall Grade:</td>
										<td colspan="6"><input type="text" readonly id="contact_resolution_overall" name="data[contact_resolution_grade]" class="form-control phoneAutofail" style="font-weight:bold" value="<?php echo $agnt_feedback['contact_resolution_grade'] ?>"></td>
									</tr>
									<tr><td class="eml" colspan=9>7.Bonus Questions</td></tr>
									<tr>
										<td style="text-align:left;" colspan=3>7.a. Was CSR able to retain a customer who had considered cancelling a policy with Brightway?</td>
										<td>
											<select class="form-control phone_inbound soft_skill bonus_questions_grade" name="data[retain_customer_who_had]" disabled>
												<option phone_inbound_val=1 bonus_questions_val=1 <?php echo $agnt_feedback['retain_customer_who_had'] == "1"?"selected":"";?> value="1">1</option>
												<option phone_inbound_val=1 bonus_questions_val=1 <?php echo $agnt_feedback['retain_customer_who_had'] == "NA"?"selected":"";?> value="NA">NA</option>
											</select>
										</td>
										<td colspan=4><input type="text" class="form-control" name="data[cmt20]" value="<?php echo $agnt_feedback['cmt20'] ?>"></td>
									</tr>
									<tr>
										<td style="text-align:left;" colspan=3>7.b. Did the CSR identify a cross-sell opportunity and put the customer in touch with their agent of record?</td>
										<td>
											<select class="form-control phone_inbound soft_skill bonus_questions_grade" name="data[identify_cross_sell]" disabled>
												<option phone_inbound_val=1 bonus_questions_val=1 <?php echo $agnt_feedback['identify_cross_sell'] == "1"?"selected":"";?> value="1">1</option>
												<option phone_inbound_val=1 bonus_questions_val=1 <?php echo $agnt_feedback['identify_cross_sell'] == "NA"?"selected":"";?> value="NA">NA</option>
											</select>
										</td>
										<td colspan=4><input type="text" class="form-control" name="data[cmt21]" value="<?php echo $agnt_feedback['cmt21'] ?>"></td>
									</tr>
									<tr>
										<td style="text-align:left;" colspan=3>7.c. Did the CSR receive a kudos for this interaction due to exemplary performance?</td>
										<td>
											<select class="form-control phone_inbound soft_skill bonus_questions_grade" name="data[kudos_for_this_interaction]" disabled>
												<option phone_inbound_val=1 bonus_questions_val=1 <?php echo $agnt_feedback['kudos_for_this_interaction'] == "1"?"selected":"";?> value="1">1</option>
												<option phone_inbound_val=1 bonus_questions_val=1 <?php echo $agnt_feedback['kudos_for_this_interaction'] == "NA"?"selected":"";?> value="NA">NA</option>
											</select>
										</td>
										<td colspan=4><input type="text" class="form-control" name="data[cmt22]" value="<?php echo $agnt_feedback['cmt22'] ?>"></td>
									</tr>
									<tr style="background-color:white;">
										
										<td colspan="3" style="font-weight:bold; font-size:16px; text-align:middle">Overall Grade:</td>
										<td colspan="6"><input type="text" readonly id="bonus_questions_overall" name="data[bonus_questions_grade]" class="form-control phoneAutofail" style="font-weight:bold" value="<?php echo $agnt_feedback['bonus_questions_grade'] ?>"></td>
									</tr>
									<tr><td class="eml" colspan=9>8.Penalty Questions</td></tr>
									<tr>
										<td style="text-align:left;" colspan=3>8.a. Did CSR demonstrate behavior that is considered offensive by using unprofessional language, tone or any other action that impacted the customer experience?</td>
										<td>
											<select class="form-control phone_inbound penalty_questions_grade" id="phone_FAT1" name="data[considered_offensive]" disabled>
												<option phone_inbound_val=0 penalty_questions_val=0 <?php echo $agnt_feedback['considered_offensive'] == "No"?"selected":"";?> value="No">No</option>
												<option phone_inbound_val=0 penalty_questions_val=0 <?php echo $agnt_feedback['considered_offensive'] == "Yes"?"selected":"";?> value="Yes">Yes</option>
												<option phone_inbound_val=0 penalty_questions_val=0 <?php echo $agnt_feedback['considered_offensive'] == "NA"?"selected":"";?> value="NA">NA</option>
											</select>
										</td>
										<td colspan=4><input type="text" class="form-control" name="data[cmt23]" value="<?php echo $agnt_feedback['cmt23'] ?>"></td>
									</tr>
									<tr>
										<td style="text-align:left;" colspan=3>8.b. Did CSR provide information or complete a transaction that could lead to an Errors and Omissions claim or impact the customer in a negative manner?</td>
										<td>
											<select class="form-control phone_inbound penalty_questions_grade" id="phone_FAT2" name="data[complete_transaction]" disabled>
												<option phone_inbound_val=0 penalty_questions_val=0 <?php echo $agnt_feedback['complete_transaction'] == "No"?"selected":"";?> value="No">No</option>
												<option phone_inbound_val=0 penalty_questions_val=0 <?php echo $agnt_feedback['complete_transaction'] == "Yes"?"selected":"";?> value="Yes">Yes</option>
												<option phone_inbound_val=0 penalty_questions_val=0 <?php echo $agnt_feedback['complete_transaction'] == "NA"?"selected":"";?> value="NA">NA</option>
											</select>
										</td>
										<td colspan=4><input type="text" class="form-control" name="data[cmt24]" value="<?php echo $agnt_feedback['cmt24'] ?>"></td>
									</tr>
									
									<tr>
										<td colspan="3">Call Summary:</td>
										<td colspan="2"><textarea class="form-control"   name="data[call_summary]" disabled=""><?php echo $agnt_feedback['call_summary'] ?></textarea></td>
										<td>Feedback:</td>
										<td colspan="4"><textarea class="form-control"   name="data[feedback]" disabled=""><?php echo $agnt_feedback['feedback'] ?></textarea></td>
									</tr>

									<tr>
										<td colspan=3>Upload Files</td>
										<?php if($pnid==0){ ?>
											<td colspan=4><input type="file" multiple class="form-control" id="attach_file" name="attach_file[]"></td>
										<?php }else{
											if($agnt_feedback['attach_file']!=''){ ?>
												<td colspan=4>
													<?php $attach_file = explode(",",$agnt_feedback['attach_file']);
													 foreach($attach_file as $mp){ ?>
														<audio controls='' style="background-color:#607F93"> 
														  <source src="<?php echo base_url(); ?>qa_files/qa_phone_inbound/<?php echo $mp; ?>" type="audio/ogg">
														  <source src="<?php echo base_url(); ?>qa_files/qa_phone_inbound/<?php echo $mp; ?>" type="audio/mpeg">
														</audio> </br>
													 <?php } ?>
												</td>
										<?php }else{
												echo '<td colspan=6><b>No Files</b></td>';
											  }
										} ?>
									</tr>

                                <?php  } ?>



                                <?php if($campaign=='phone_inbound_new'){ ?>


                                   <tr>
										<td>Call Duration:</td>
										<td><input type="text" class="form-control" id="call_duration" name="data[call_duration]" value="<?php echo $agnt_feedback['call_duration'] ?>" disabled></td>
										<td>State:</td>
										<td><input type="text" class="form-control" name="data[State]" value="<?php echo $agnt_feedback['State'] ?>" disabled></td>
										<td colspan="2">Policy Number:</td>
										<td colspan="2"><input type="text" class="form-control" name="data[Policy_Number]" value="<?php echo $agnt_feedback['Policy_Number'] ?>" disabled></td>
									</tr>
									<tr>
										<td>Line of Business:</td>
										<td><input type="text" class="form-control" name="data[LOB]" value="<?php echo $agnt_feedback['LOB'] ?>" disabled></td>
										<td>Overview:</td>
										<td><input type="text" class="form-control" name="data[Overview]" value="<?php echo $agnt_feedback['Overview'] ?>" disabled></td>
										<td colspan="2">Carrier:</td>
										<td colspan="2"><input type="text" class="form-control" name="data[Carrier]" value="<?php echo $agnt_feedback['Carrier'] ?>" disabled></td>
									</tr>
									<tr>
										<td>Master ID:</td>
										<td><input type="text" class="form-control" name="data[master_id]" value="<?php echo $agnt_feedback['master_id'] ?>" required></td>
										<td>Rate of Call:</td>
										<td>
											<select class="form-control" name="data[call_rate]" required>
												<option value="">Select</option>
												<option <?php echo $agnt_feedback['call_rate']=="1"?"selected":"";?> value="1">1</option>
												<option <?php echo $agnt_feedback['call_rate']=="2"?"selected":"";?> value="2">2</option>
												<option <?php echo $agnt_feedback['call_rate']=="3"?"selected":"";?> value="3">3</option>
												<option <?php echo $agnt_feedback['call_rate']=="4"?"selected":"";?> value="4">4</option>
												<option <?php echo $agnt_feedback['call_rate']=="5"?"selected":"";?> value="5">5</option>
											</select>
										</td>
									</tr>
									<tr>
										<!-- <td>Segment Duration:</td>
										<td><input type="text" class="form-control" id="sigment_duration" name="data[segment_duration]" value="<?php echo $agnt_feedback['segment_duration'] ?>" disabled></td> -->
										<td>Audit Type:</td>
										<td>
											<select class="form-control" id="audit_type" name="data[audit_type]" disabled>
												<option value="<?php echo $agnt_feedback['audit_type'] ?>"><?php echo $agnt_feedback['audit_type'] ?></option>
												<option value="CQ Audit">CQ Audit</option>
												<option value="BQ Audit">BQ Audit</option>
												<!-- <option value="Calibration">Calibration</option> -->
												<option value="Pre-Certificate Mock Call">Pre-Certificate Mock Call</option>
												<option value="Certification Audit">Certification Audit</option>
												<option value="Operation Audit">Operation Audit</option>
												<option value="Trainer Audit">Trainer Audit</option>
											</select>
										</td>
										<td class="auType">Auditor Type</td>
										<td class="auType">
											<select class="form-control" id="auditor_type" name="data[auditor_type]">
												
												<option value="Master">Master</option>
												<option value="Regular">Regular</option>
											</select>
										</td>
										<td>VOC:</td>
										<td colspan="6">
											<select class="form-control" id="voc" name="data[voc]" disabled>
												<option value="<?php echo $agnt_feedback['voc'] ?>"><?php echo $agnt_feedback['voc'] ?></option>
												
												<option value="1">1</option>
												<option value="2">2</option>
												<option value="3">3</option>
												<option value="4">4</option>
												<option value="5">5</option>
												<option value="6">6</option>
												<option value="7">7</option>
												<option value="8">8</option>
												<option value="9">9</option>
												<option value="10">10</option>
											</select>
										</td>
									</tr>
									<tr style="font-size:18px; font-weight:bold">
										<td>Earned Score</td>
										<td><input type="text" readonly class="form-control" id="phone_earnedScore" name="data[earned_score]" value="<?php echo $agnt_feedback['earned_score'] ?>"></td>
										<td>Possible Score</td>
										<td><input type="text" readonly class="form-control" id="phone_possibleScore" name="data[possible_score]" value="<?php echo $agnt_feedback['possible_score'] ?>"></td>
										<td colspan="2">Overall Score:</td>
										<td colspan="2"><input type="text" readonly class="form-control phoneInbAutofail" id="phone_overallScore" name="data[overall_score]" value="<?php echo $agnt_feedback['overall_score'] ?>"></td>
									</tr>
									<tr style="height:25px; font-weight:bold; background-color:#85C1E9">
										<td colspan=>Parameter</td>
										<td colspan=3>Item</td>
										<td>Rating</td>
										<td colspan=4>Comment</td>
									</tr>

									
									
									<tr><td class="eml" colspan=8>1. Authentication</td></tr>
									<tr>
										<td class="eml" rowspan=1>Verification</td>
										<td style="text-align:left;" colspan=3>1.a. Completed the correct caller verification for either a first-party or a third-party caller</td>
										<td>
											<select class="form-control phone_inbound soft_skill authentication_grade" name="data[Verification]" id="Verification" disabled>
												<option value="">-Select-</option>
												<option phone_inbound_val=10.25 phone_inbound_max_val=10.25 <?php echo $agnt_feedback['Verification'] == "Yes"?"selected":"";?> value="Yes">Yes</option>
												<option phone_inbound_val=0 phone_inbound_max_val=10.25 <?php echo $agnt_feedback['Verification'] == "No"?"selected":"";?> value="No">No</option>
												<option phone_inbound_val=0 phone_inbound_max_val=0 <?php echo $agnt_feedback['Verification'] == "NA"?"selected":"";?> value="NA">NA</option>
												
											</select>
										</td>
										<td colspan=3><input type="text" class="form-control" name="data[cmt1]" value="<?php echo $agnt_feedback['cmt1'] ?>" disabled></td>
									</tr>
									<tr>
										<td class="eml" rowspan=1>Capture contact information </td>
										<td style="text-align:left;" colspan=3>1.b. New contact information was captured</td>
										<td>
											<select class="form-control phone_inbound soft_skill authentication_grade" name="data[information]" id="information" disabled>
												<option value="">-Select-</option>
												<option phone_inbound_val=10.25 phone_inbound_max_val=10.25 <?php echo $agnt_feedback['information'] == "Yes"?"selected":"";?> value="Yes">Yes</option>
												<option phone_inbound_val=0 phone_inbound_max_val=10.25 <?php echo $agnt_feedback['information'] == "No"?"selected":"";?> value="No">No</option>
												<option phone_inbound_val=0 phone_inbound_max_val=0 <?php echo $agnt_feedback['information'] == "NA"?"selected":"";?> value="NA">NA</option>
											</select>
										</td>
										<td colspan=3><input type="text" class="form-control" name="data[cmt2]" value="<?php echo $agnt_feedback['cmt2'] ?>" disabled></td>
									</tr>
									
									<tr><td class="eml" colspan=8>2. Professionalism</td></tr>
									<tr>
										<td class="eml" rowspan=1>Empathy/Sympathy </td>
										<td style="text-align:left;" colspan=3>2.a.Empathy/ Sympathy was provided on the call</td>
										<td>
											<select class="form-control phone_inbound soft_skill professionalism_grade" name="data[Sympathy]" disabled>
												<option value="">-Select-</option>
												<option phone_inbound_val=5.3 phone_inbound_max_val=5.3 <?php echo $agnt_feedback['Sympathy'] == "Yes"?"selected":"";?> value="Yes">Yes</option>
												<option phone_inbound_val=0 phone_inbound_max_val=5.3 <?php echo $agnt_feedback['Sympathy'] == "No"?"selected":"";?> value="No">No</option>
												<option phone_inbound_val=0 phone_inbound_max_val=0 <?php echo $agnt_feedback['Sympathy'] == "NA"?"selected":"";?> value="NA">NA</option>
											</select>
										</td>
										<td colspan=3><input type="text" class="form-control" name="data[cmt3]" value="<?php echo $agnt_feedback['cmt3'] ?>" disabled></td>
									</tr>
									<tr>
										<td class="eml" rowspan=1>Call Control </td>
										<td style="text-align:left;" colspan=3>2.b. Demonstrated call control effectively throughout the call  by listening and acknowledging</td>
										<td>
											<select class="form-control phone_inbound soft_skill professionalism_grade" name="data[Control]" disabled>
												<option value="">-Select-</option>
												<option phone_inbound_val=5.3 phone_inbound_max_val=5.3 <?php echo $agnt_feedback['Control'] == "Yes"?"selected":"";?> value="Yes">Yes</option>
												<option phone_inbound_val=0 phone_inbound_max_val=5.3 <?php echo $agnt_feedback['Control'] == "No"?"selected":"";?> value="No">No</option>
												<option phone_inbound_val=0 phone_inbound_max_val=0 <?php echo $agnt_feedback['Control'] == "NA"?"selected":"";?> value="NA">NA</option>
											</select>
										</td>
										<td colspan=3><input type="text" class="form-control" name="data[cmt4]" value="<?php echo $agnt_feedback['cmt4'] ?>" disabled></td>
									</tr>
                                     <tr>
                                     	<td class="eml" rowspan=1>Transfer and Hold Procedures</td>
										<td style="text-align:left;" colspan=3>2.c. Followed a common-sense approach to placing a caller on hold or transferring them</td>
										<td>
											<select class="form-control phone_inbound soft_skill professionalism_grade" name="data[Procedures]" disabled>
												<option value="">-Select-</option>
												<option phone_inbound_val=5.3 phone_inbound_max_val=5.3 <?php echo $agnt_feedback['Procedures'] == "Yes"?"selected":"";?> value="Yes">Yes</option>
												<option phone_inbound_val=0 phone_inbound_max_val=5.3 <?php echo $agnt_feedback['Procedures'] == "No"?"selected":"";?> value="No">No</option>
												<option phone_inbound_val=0 phone_inbound_max_val=0 <?php echo $agnt_feedback['Procedures'] == "NA"?"selected":"";?> value="NA">NA</option>
											</select>
										</td>
										<td colspan=3><input type="text" class="form-control" name="data[cmt5]" value="<?php echo $agnt_feedback['cmt5'] ?>" disabled></td>
									</tr>
									<tr>
                                     	<td class="eml" rowspan=1>Call Back</td>
										<td style="text-align:left;" colspan=3>2.d. If the call disconnected, the customer was called back</td>
										<td>
											<select class="form-control phone_inbound soft_skill professionalism_grade" name="data[Call_Back]" disabled>
												<option value="">-Select-</option>
												<option phone_inbound_val=5.3 phone_inbound_max_val=5.3 <?php echo $agnt_feedback['Call_Back'] == "Yes"?"selected":"";?> value="Yes">Yes</option>
												<option phone_inbound_val=0 phone_inbound_max_val=5.3 <?php echo $agnt_feedback['Call_Back'] == "No"?"selected":"";?> value="No">No</option>
												<option phone_inbound_val=0 phone_inbound_max_val=0 <?php echo $agnt_feedback['Call_Back'] == "NA"?"selected":"";?> value="NA">NA</option>
											</select>
										</td>
										<td colspan=3><input type="text" class="form-control" name="data[cmt6]" value="<?php echo $agnt_feedback['cmt6'] ?>" disabled></td>
									</tr>
									<tr>
                                     	<td class="eml" rowspan=1>Call Completion</td>
										<td style="text-align:left;" colspan=3>2.e. Additional assistance offered if applicable</td>
										<td>
											<select class="form-control phone_inbound soft_skill professionalism_grade" name="data[Completion]" disabled>
												<option value="">-Select-</option>
												<option phone_inbound_val=5.3 phone_inbound_max_val=5.3 <?php echo $agnt_feedback['Completion'] == "Yes"?"selected":"";?> value="Yes">Yes</option>
												<option phone_inbound_val=0 phone_inbound_max_val=5.3 <?php echo $agnt_feedback['Completion'] == "No"?"selected":"";?> value="No">No</option>
												<option phone_inbound_val=0 phone_inbound_max_val=0 <?php echo $agnt_feedback['Completion'] == "NA"?"selected":"";?> value="NA">NA</option>
											</select>
										</td>
										<td colspan=3><input type="text" class="form-control" name="data[cmt7]" value="<?php echo $agnt_feedback['cmt7'] ?>" disabled></td>
									</tr>
									
									<tr><td class="eml" colspan=8>3. Use of Appropriate Resources / Tools and Documentation</td></tr>
									<tr>
										<td class="eml" rowspan=1>Utilization of Correct Tools</td>
										<td style="text-align:left;" colspan=3>3.a. Use the necessary resources to assist the customer effectively and accurately</td>
										<td>
											<select class="form-control phone_inbound soft_skill call_handling_skills_grade" name="data[Tools]" disabled>
												<option value="">-Select-</option>
											<option phone_inbound_val=13.25 phone_inbound_max_val=13.25 <?php echo $agnt_feedback['Tools'] == "Yes"?"selected":"";?> value="Yes">Yes</option>
												<option phone_inbound_val=0 phone_inbound_max_val=13.25 <?php echo $agnt_feedback['Tools'] == "No"?"selected":"";?> value="No">No</option>
												<option phone_inbound_val=0 phone_inbound_max_val=0 <?php echo $agnt_feedback['Tools'] == "NA"?"selected":"";?> value="NA">NA</option>
											</select>
										</td>
										<td colspan=3><input type="text" class="form-control" name="data[cmt8]" value="<?php echo $agnt_feedback['cmt8'] ?>" disabled></td>
									</tr>
									<tr>
										<td class="eml" rowspan=1>Documentation</td>
										<td style="text-align:left;" colspan=3>3.b. Accurately document the interaction from start to finish</td>
										<td>
											<select class="form-control phone_inbound soft_skill call_handling_skills_grade" name="data[Documentation]" disabled>
												<option value="">-Select-</option>
												<option phone_inbound_val=13.25 phone_inbound_max_val=13.25 <?php echo $agnt_feedback['Documentation'] == "Yes"?"selected":"";?> value="Yes">Yes</option>
												<option phone_inbound_val=0 phone_inbound_max_val=13.25 <?php echo $agnt_feedback['Documentation'] == "No"?"selected":"";?> value="No">No</option>
												<option phone_inbound_val=0 phone_inbound_max_val=0 <?php echo $agnt_feedback['Documentation'] == "NA"?"selected":"";?> value="NA">NA</option>
												
											</select>
										</td>
										<td colspan=3><input type="text" class="form-control" name="data[cmt9]" value="<?php echo $agnt_feedback['cmt9'] ?>" disabled></td>
									</tr>
									
									
									<tr><td class="eml" colspan=8>4. Contact Resolution</td></tr>
									<tr>
										<td class="eml" rowspan=1>Handling Follow-Ups</td>
										<td style="text-align:left;" colspan=3>4.a. Properly advised the caller of any follow-up expectations and set a follow-up for themselves, if applicable</td>
										<td>
											<select class="form-control phone_inbound soft_skill brightway_knowledge_grade" name="data[Follow_Ups]" disabled>
												<option value="">-Select-</option>
												<option phone_inbound_val=8.83 phone_inbound_max_val=8.83 <?php echo $agnt_feedback['Follow_Ups'] == "Yes"?"selected":"";?> value="Yes">Yes</option>
												<option phone_inbound_val=0 phone_inbound_max_val=8.83 <?php echo $agnt_feedback['Follow_Ups'] == "No"?"selected":"";?> value="No">No</option>
												<option phone_inbound_val=0 phone_inbound_max_val=0 <?php echo $agnt_feedback['Follow_Ups'] == "NA"?"selected":"";?> value="NA">NA</option>
											</select>
										</td>
										<td colspan=3><input type="text" class="form-control" name="data[cmt10]" value="<?php echo $agnt_feedback['cmt10'] ?>" disabled></td>
									</tr>

									<tr>
										<td class="eml" rowspan=1>Focus on End Solution </td>
										<td style="text-align:left;" colspan=3>4.b. Clearly explained options or solutions to the customer and focus on an end solution</td>
										<td>
											<select class="form-control phone_inbound soft_skill brightway_knowledge_grade" name="data[End_Solution]" disabled>
												<option value="">-Select-</option>
												<option phone_inbound_val=8.83 phone_inbound_max_val=8.83 <?php echo $agnt_feedback['End_Solution'] == "Yes"?"selected":"";?> value="Yes">Yes</option>
												<option phone_inbound_val=0 phone_inbound_max_val=8.83 <?php echo $agnt_feedback['End_Solution'] == "No"?"selected":"";?> value="No">No</option>
												<option phone_inbound_val=0 phone_inbound_max_val=0 <?php echo $agnt_feedback['End_Solution'] == "NA"?"selected":"";?> value="NA">NA</option>
											</select>
										</td>
										<td colspan=3><input type="text" class="form-control" name="data[cmt11]" value="<?php echo $agnt_feedback['cmt11'] ?>" disabled></td>
									</tr>

									<tr>
										<td class="eml" rowspan=1>Completion of All Necessary Updates </td>
										<td style="text-align:left;" colspan=3>4.c. Properly update necessary policies / information in AMS and the carrier website, if applicable</td>
										<td>
											<select class="form-control phone_inbound soft_skill brightway_knowledge_grade" name="data[Necessary_Updates]" disabled>
												<option value="">-Select-</option>
												<option phone_inbound_val=8.83 phone_inbound_max_val=8.83 <?php echo $agnt_feedback['Necessary_Updates'] == "Yes"?"selected":"";?> value="Yes">Yes</option>
												<option phone_inbound_val=0 phone_inbound_max_val=8.83 <?php echo $agnt_feedback['Necessary_Updates'] == "No"?"selected":"";?> value="No">No</option>
												<option phone_inbound_val=0 phone_inbound_max_val=0 <?php echo $agnt_feedback['Necessary_Updates'] == "NA"?"selected":"";?> value="NA">NA</option>
											</select>
										</td>
										<td colspan=3><input type="text" class="form-control" name="data[cmt12]" value="<?php echo $agnt_feedback['cmt12'] ?>" disabled></td>
									</tr>
									
									<tr><td class="eml" colspan=8>5.Bonus Questions: Additional 20%</td></tr>
									<tr>
										<td class="eml" rowspan=1> Kudos</td>
										<td style="text-align:left;" colspan=3>5.a. Received kudos for this interaction due to exemplary performance</td>
										<td>
											<select class="form-control phone_inbound soft_skill documentation_grade" name="data[Kudos]" disabled>
												<option value="">-Select-</option>
												<option phone_inbound_val=20 phone_inbound_max_val=20 <?php echo $agnt_feedback['Kudos'] == "Yes"?"selected":"";?> value="Yes">Yes</option>
												<option phone_inbound_val=0 phone_inbound_max_val=20 <?php echo $agnt_feedback['Kudos'] == "No"?"selected":"";?> value="No">No</option>
												<option phone_inbound_val=0 phone_inbound_max_val=0 <?php echo $agnt_feedback['Kudos'] == "NA"?"selected":"";?> value="NA">NA</option>
											</select>
										</td>
										<td colspan=3><input type="text" class="form-control" name="data[cmt13]" value="<?php echo $agnt_feedback['cmt13'] ?>" disabled></td>
									</tr>
									
									
									<tr><td class="eml" colspan=8>6. Penalty Questions: Zero for call</td></tr>
									<tr>
										<td class="eml" rowspan=1>Customer Interaction</td>
										<td style="text-align:left;" colspan=3>6.a. Did CSR demonstrate behavior that is considered offensive by using unprofessional language, tone or any other action that impacted the customer experience?</td>
										<td>
											<select class="form-control phone_inbound soft_skill contact_resolution_grade" name="data[Interaction]" id="phone_FAT1" disabled>
												<option value="">-Select-</option>
												<option phone_inbound_val=10.25 phone_inbound_max_val=10.25 <?php echo $agnt_feedback['Interaction'] == "Yes"?"selected":"";?> value="Yes">Yes</option>
												<option phone_inbound_val=0 phone_inbound_max_val=10.25 <?php echo $agnt_feedback['Interaction'] == "No"?"selected":"";?> value="No">No</option>
												<option phone_inbound_val=0 phone_inbound_max_val=0 <?php echo $agnt_feedback['Interaction'] == "NA"?"selected":"";?> value="NA">NA</option>
											</select>
										</td>
										<td colspan=3><input type="text" class="form-control" name="data[cmt14]" value="<?php echo $agnt_feedback['cmt14'] ?>" disabled></td>
									</tr>
									<tr>
										<td class="eml" rowspan=1>Errors and Omissions</td>
										<td style="text-align:left;" colspan=3>6.b. Did CSR provide information or complete a transaction that could lead to an Errors and Omissions claim or impact the customer in a negative manner?</td>
										<td>
											<select class="form-control phone_inbound soft_skill contact_resolution_grade" name="data[Omissions]" id="phone_FAT2" disabled>
												<option value="">-Select-</option>
												<option phone_inbound_val=10.25 phone_inbound_max_val=10.25 <?php echo $agnt_feedback['Omissions'] == "Yes"?"selected":"";?> value="Yes">Yes</option>
												<option phone_inbound_val=0 phone_inbound_max_val=10.25 <?php echo $agnt_feedback['Omissions'] == "No"?"selected":"";?> value="No">No</option>
												<option phone_inbound_val=0 phone_inbound_max_val=0 <?php echo $agnt_feedback['Omissions'] == "NA"?"selected":"";?> value="NA">NA</option>
											</select>
										</td>
										<td colspan=3><input type="text" class="form-control" name="data[cmt15]" value="<?php echo $agnt_feedback['cmt15'] ?>" disabled></td>
									</tr>
									
									<tr>
										<td >Call Summary:</td>
										<td ><textarea class="form-control"   name="data[call_summary]" disabled=""><?php echo $agnt_feedback['call_summary'] ?></textarea></td>
										<td colspan="2">Feedback:</td>
										<td colspan="4"><textarea class="form-control"   name="data[feedback]" disabled=""><?php echo $agnt_feedback['feedback'] ?></textarea></td>
									</tr>

									<tr>
										<td colspan=3>Upload Files</td>
										<?php if($pnid==0){ ?>
											<td colspan=4><input type="file" multiple class="form-control" id="attach_file" name="attach_file[]"></td>
										<?php }else{
											if($agnt_feedback['attach_file']!=''){ ?>
												<td colspan=4>
													<?php $attach_file = explode(",",$agnt_feedback['attach_file']);
													 foreach($attach_file as $mp){ ?>
														<audio controls='' style="background-color:#607F93"> 
														  <source src="<?php echo base_url(); ?>qa_files/qa_phone_inbound/<?php echo $mp; ?>" type="audio/ogg">
														  <source src="<?php echo base_url(); ?>qa_files/qa_phone_inbound/<?php echo $mp; ?>" type="audio/mpeg">
														</audio> </br>
													 <?php } ?>
												</td>
										<?php }else{
												echo '<td colspan=6><b>No Files</b></td>';
											  }
										} ?>
									</tr>

                                <?php  } ?>



                                <?php if($campaign=='processing'){ ?>
                                	<tr>
										<td>Evaluator Name:</td>
										<td><input type="text" class="form-control" name="data[evaluator_name]" value="<?php echo $agnt_feedback['evaluator_name'] ?>" disabled></td>
										<td>ANI:</td>
										<td><input type="text" class="form-control" name="data[ani]" value="<?php echo $agnt_feedback['ani'] ?>" disabled></td>
										<td>DNIS:</td>
										<td><input type="text" class="form-control" name="data[dnis]" value="<?php echo $agnt_feedback['dnis'] ?>" disabled></td>
										<td>Contact ID:</td>
										<td><input type="text" class="form-control" name="data[contact_id]" value="<?php echo $agnt_feedback['contact_id'] ?>" disabled></td>
									</tr>
									<tr>
										<td>Direction Type Description:</td>
										<td><input type="text" class="form-control" id="direction_type" name="data[direction_type]" value="<?php echo $agnt_feedback['direction_type'] ?>" disabled></td>
										<td>Skill Name:</td>
										<td colspan="2"><input type="text" class="form-control" name="data[skill_name]" value="<?php echo $agnt_feedback['skill_name'] ?>" disabled></td>
										<td>Segment Duration:</td>
										<td colspan="2"><input type="text" class="form-control" name="data[segment_duration]" value="<?php echo $agnt_feedback['segment_duration'] ?>" disabled></td>
									</tr>

									<tr>
										<td style="font-size:16px; font-weight:bold" colspan="">Earned Score</td>
										<td><input type="text" readonly class="form-control" id="phone_earnedScore" name="data[earned_score]" value="<?php //echo $processing_data['earned_score'] ?>"></td><td style="font-size:16px; font-weight:bold">Possible Score</td>
										<td colspan="2"><input type="text" readonly class="form-control" id="phone_possibleScore" name="data[possible_score]" value="<?php //echo $processing_data['possible_score'] ?>"></td>
										<td style="font-weight:bold; font-size:16px; text-align:right">Overall Score:</td>
										<td colspan="2"><input type="text" readonly id="phone_overallScore" name="data[overall_score]" class="form-control processingAutofail" style="font-weight:bold" value="<?php echo $agnt_feedback['overall_score'] ?>"></td>
									</tr>
									<tr style="height:25px; font-weight:bold; background-color:#85C1E9">
										<td colspan=4>Item</td>
										<td>Rating</td>
										<td colspan=3>Comment</td>
									</tr>

									<tr><td class="eml" colspan=8>Call Information(In the comment area, explain in detail the reason for the call.)</td></tr>
									<tr>
										<td style="text-align:left;" colspan=3>Line of Business</td>
										<td>
											<td colspan=7><input type="text" class="form-control" name="data[line_of_business]" value="<?php echo $agnt_feedback['line_of_business'] ?>" disabled></td>
										</td>
									</tr>
									<tr>
										<td style="text-align:left;" colspan=3>State of Policy</td>
										<td>
											<td colspan=7><input type="text" class="form-control" name="data[state_of_policy]" value="<?php echo $agnt_feedback['state_of_policy'] ?>" disabled></td>
										</td>
									</tr>
									<tr>
										<td style="text-align:left;" colspan=3>Comment</td>
										<td>
											<td colspan=7><input type="text" class="form-control" name="data[call_information_comment]" value="<?php echo $agnt_feedback['call_information_comment'] ?>" disabled></td>
										</td>
									</tr>
									
									<tr><td class="eml" colspan=8>1. Authentication-Outbound Call</td></tr>
									<tr>
										<td style="text-align:left;" colspan=3>1.a. Did the CSR complete the correct caller verification for either a first-party or a third-party caller?</td>
										<td>
											<select class="form-control processing_point soft_skill" name="data[complete_correct_caller]" disabled>
												<option processing_val=2 <?php echo $agnt_feedback['complete_correct_caller'] == "2"?"selected":"";?> value="2">2</option>
												<option processing_val=1 <?php echo $agnt_feedback['complete_correct_caller'] == "1"?"selected":"";?> value="1">1</option>
												<option processing_val=0 <?php echo $agnt_feedback['complete_correct_caller'] == "0"?"selected":"";?> value="0">0</option>
												<option processing_val=2 <?php echo $agnt_feedback['complete_correct_caller'] == "NA"?"selected":"";?> value="NA">NA</option>
											</select>
										</td>
										<td colspan=7><input type="text" class="form-control" name="data[cmt1]" value="<?php echo $agnt_feedback['cmt1'] ?>" disabled></td>
									</tr>
									<tr>
										<td style="text-align:left;" colspan=3>1.b. Was new contact information captured?</td>
										<td>
											<select class="form-control processing_point soft_skill" name="data[authentication_process]" disabled>
												<option processing_val=2 <?php echo $agnt_feedback['authentication_process'] == "1"?"selected":"";?> value="1">1</option>
												<option processing_val=0 <?php echo $agnt_feedback['authentication_process'] == "0"?"selected":"";?> value="0">0</option>
												<option processing_val=2 <?php echo $agnt_feedback['authentication_process'] == "NA"?"selected":"";?> value="NA">NA</option>
											</select>
										</td>
										<td colspan=7><input type="text" class="form-control" name="data[cmt2]" value="<?php echo $agnt_feedback['cmt2'] ?>" disabled></td>
									</tr>

									<tr><td class="eml" colspan=8>2. Professionalism- Outbound Call/Voicemai</td></tr>
									<tr>
										<td style="text-align:left;" colspan=3>2.a. Did the CSR demonstrate soft skills effectively throughout the call?</td>
										<td>
											<select class="form-control processing_point soft_skill" name="data[demonstrate_soft_skills]" disabled>
												<option processing_val=2 <?php echo $agnt_feedback['demonstrate_soft_skills'] == "2"?"selected":"";?> value="2">2</option>
												<option processing_val=1 <?php echo $agnt_feedback['demonstrate_soft_skills'] == "1"?"selected":"";?> value="1">1</option>
												<option processing_val=0 <?php echo $agnt_feedback['demonstrate_soft_skills'] == "0"?"selected":"";?> value="0">0</option>
												<option processing_val=2 <?php echo $agnt_feedback['demonstrate_soft_skills'] == "NA"?"selected":"";?> value="NA">NA</option>
											</select>
										</td>
										<td colspan=7><input type="text" class="form-control" name="data[cmt3]" value="<?php echo $agnt_feedback['cmt3'] ?>" disabled></td>
									</tr>
									<tr>
										<td style="text-align:left;" colspan=3>2.b.Did the CSR provide empathy or sympathy if applicable ?</td>
										<td>
											<select class="form-control processing_point soft_skill" name="data[provide_empathy_sympathy]" disabled>

												<option processing_val=2 <?php echo $agnt_feedback['provide_empathy_sympathy'] == "2"?"selected":"";?> value="2">2</option>
												<option processing_val=0 <?php echo $agnt_feedback['provide_empathy_sympathy'] == "0"?"selected":"";?> value="0">0</option>

												<option processing_val=2 <?php echo $agnt_feedback['provide_empathy_sympathy'] == "NA"?"selected":"";?> value="NA">NA</option>
											</select>
										</td>
										<td colspan=7><input type="text" class="form-control" name="data[cmt4]" value="<?php echo $agnt_feedback['cmt4'] ?>" disabled></td>
									</tr>
                                     <tr>
										<td style="text-align:left;" colspan=3>2.c. Did the CSR demonstrate call control effectively throughout the call?</td>
										<td>
											<select class="form-control processing_point soft_skill" name="data[demonstrate_call_control]" disabled>
												<option processing_val=2 <?php echo $agnt_feedback['demonstrate_call_control'] == "2"?"selected":"";?> value="2">2</option>
												<option processing_val=0 <?php echo $agnt_feedback['demonstrate_call_control'] == "0"?"selected":"";?> value="0">0</option>
												<option processing_val=2 <?php echo $agnt_feedback['demonstrate_call_control'] == "NA"?"selected":"";?> value="NA">NA</option>
											</select>
										</td>
										<td colspan=7><input type="text" class="form-control" name="data[cmt5]" value="<?php echo $agnt_feedback['cmt5'] ?>" disabled></td>
									</tr>

									<tr><td class="eml" colspan=8>3. Call Handling Skills-Outbound Call/ Voicemail</td></tr>
									<tr>
										<td style="text-align:left;" colspan=3>3.a. Did the CSR provide the proper Brightway-approved greeting?</td>
										<td>
											<select class="form-control processing_point soft_skill" name="data[provide_the_proper_brightway]" disabled>
											<option processing_val=2 <?php echo $agnt_feedback['provide_the_proper_brightway'] == "2"?"selected":"";?> value="2">2</option>
											<option processing_val=1 <?php echo $agnt_feedback['provide_the_proper_brightway'] == "1"?"selected":"";?> value="1">1</option>
											<option processing_val=0 <?php echo $agnt_feedback['provide_the_proper_brightway'] == "0"?"selected":"";?> value="0">0</option>
											<option processing_val=2 <?php echo $agnt_feedback['provide_the_proper_brightway'] == "NA"?"selected":"";?> value="NA">NA</option>
											</select>
										</td>
										<td colspan=7><input type="text" class="form-control" name="data[cmt6]" value="<?php echo $agnt_feedback['cmt6'] ?>" disabled></td>
									</tr>
									<tr>
										<td style="text-align:left;" colspan=3>3.b. Did the CSR advise the caller that the call will be recorded?</td>
										<td>
											<select class="form-control processing_point soft_skill" name="data[advise_the_caller_that]" disabled>
												<option processing_val=1 <?php echo $agnt_feedback['advise_the_caller_that'] == "1"?"selected":"";?> value="1">1</option>
												<option processing_val=0 <?php echo $agnt_feedback['advise_the_caller_that'] == "0"?"selected":"";?> value="0">0</option>
												<option processing_val=1 <?php echo $agnt_feedback['advise_the_caller_that'] == "NA"?"selected":"";?> value="NA">NA</option>
											</select>
										</td>
										<td colspan=7><input type="text" class="form-control" name="data[cmt7]" value="<?php echo $agnt_feedback['cmt7'] ?>" disabled></td>
									</tr>
									<tr>
										<td style="text-align:left;" colspan=3>3.c. Did the CSR follow the proper hold process, if applicable?</td>
										<td>
											<select class="form-control processing_point soft_skill" name="data[follow_the_proper_hold]" disabled>
												<option processing_val=2 <?php echo $agnt_feedback['follow_the_proper_hold'] == "2"?"selected":"";?> value="2">2</option>
												<option processing_val=1 <?php echo $agnt_feedback['follow_the_proper_hold'] == "1"?"selected":"";?> value="1">1</option>
												<option processing_val=0 <?php echo $agnt_feedback['follow_the_proper_hold'] == "0"?"selected":"";?> value="0">0</option>
												<option processing_val=2 <?php echo $agnt_feedback['follow_the_proper_hold'] == "NA"?"selected":"";?> value="NA">NA</option>
											</select>
										</td>
										<td colspan=7><input type="text" class="form-control" name="data[cmt8]" value="<?php echo $agnt_feedback['cmt8'] ?>" disabled></td>
									</tr>
									<tr>
										<td style="text-align:left;" colspan=3>3.d. Did the CSR follow the proper transfer process, if applicable?</td>
										<td>
											<select class="form-control processing_point soft_skill" name="data[follow_the_proper_transfer]" disabled>
												<option processing_val=2 <?php echo $agnt_feedback['follow_the_proper_transfer'] == "2"?"selected":"";?> value="2">2</option>
												<option processing_val=1 <?php echo $agnt_feedback['follow_the_proper_transfer'] == "1"?"selected":"";?> value="1">1</option>
												<option processing_val=0 <?php echo $agnt_feedback['follow_the_proper_transfer'] == "0"?"selected":"";?> value="0">0</option>
												<option processing_val=2 <?php echo $agnt_feedback['follow_the_proper_transfer'] == "NA"?"selected":"";?> value="NA">NA</option>
											</select>
										</td>
										<td colspan=7><input type="text" class="form-control" name="data[cmt9]" value="<?php echo $agnt_feedback['cmt9'] ?>" disabled></td>
									</tr>
									
									<tr>
										<td style="text-align:left;" colspan=3>3.e. If the call disconnected did the CSR attempt to call back?</td>
										<td>
											<select class="form-control processing_point soft_skill" name="data[disconnected_did_the_csr]" disabled>
												<option processing_val=1 <?php echo $agnt_feedback['disconnected_did_the_csr'] == "1"?"selected":"";?> value="1">1</option>
												<option processing_val=0 <?php echo $agnt_feedback['disconnected_did_the_csr'] == "0"?"selected":"";?> value="0">0</option>
												<option processing_val=1 <?php echo $agnt_feedback['disconnected_did_the_csr'] == "NA"?"selected":"";?> value="NA">NA</option>
											</select>
										</td>
										<td colspan=7><input type="text" class="form-control" name="data[cmt10]" value="<?php echo $agnt_feedback['cmt10'] ?>" disabled></td>
									</tr>

									<tr>
										<td style="text-align:left;" colspan=3>3.f. Did the CSR use the proper closing?</td>
										<td>
											<select class="form-control processing_point soft_skill" name="data[the_proper_closing]" disabled>
												<option processing_val=1 <?php echo $agnt_feedback['the_proper_closing'] == "1"?"selected":"";?> value="1">1</option>
												<option processing_val=0 <?php echo $agnt_feedback['the_proper_closing'] == "0"?"selected":"";?> value="0">0</option>
												<option processing_val=1 <?php echo $agnt_feedback['the_proper_closing'] == "NA"?"selected":"";?> value="NA">NA</option>
											</select>
										</td>
										<td colspan=7><input type="text" class="form-control" name="data[cmt11]" value="<?php echo $agnt_feedback['cmt11'] ?>" disabled></td>
									</tr>

									<tr><td class="eml" colspan=8>4.  Use of Appropriate Resources and Tools/ Brightway Knowledg</td></tr>
									<tr>
										<td style="text-align:left;" colspan=3>4.a. Did the CSR use the necessary tools and resources to effectively and accurately assist the customer?</td>
										<td>
											<select class="form-control processing_point soft_skill" name="data[the_necessary_tools_and]" disabled>
												<option processing_val=3 <?php echo $agnt_feedback['the_necessary_tools_and'] == "3"?"selected":"";?> value="3">3</option>
												<option processing_val=0 <?php echo $agnt_feedback['the_necessary_tools_and'] == "0"?"selected":"";?> value="0">0</option>
												<option processing_val=3 <?php echo $agnt_feedback['the_necessary_tools_and'] == "NA"?"selected":"";?> value="NA">NA</option>
											</select>
										</td>
										<td colspan=7><input type="text" class="form-control" name="data[cmt12]" value="<?php echo $agnt_feedback['cmt12'] ?>" disabled></td>
									</tr>

									<tr>
										<td style="text-align:left;" colspan=3>4.b. Did the CSR demonstrate knowledge of Brightway's carriers and lines of business when relaying information to the caller?</td>
										<td>
											<select class="form-control processing_point soft_skill" name="data[demonstrate_knowledge]" disabled>
												<option processing_val=3 <?php echo $agnt_feedback['demonstrate_knowledge'] == "3"?"selected":"";?> value="3">3</option>
												<option processing_val=0 <?php echo $agnt_feedback['demonstrate_knowledge'] == "0"?"selected":"";?> value="0">0</option>
												<option processing_val=3 <?php echo $agnt_feedback['demonstrate_knowledge'] == "NA"?"selected":"";?> value="NA">NA</option>
											</select>
										</td>
										<td colspan=7><input type="text" class="form-control" name="data[cmt13]" value="<?php echo $agnt_feedback['cmt13'] ?>" disabled></td>
									</tr>

									<tr><td class="eml" colspan=8>5.Documentation</td></tr>
									<tr>
										<td style="text-align:left;" colspan=3>5.a. Did the CSR accurately document the interaction from start to finish?</td>
										<td>
											<select class="form-control processing_point soft_skill" name="data[accurately_document]" disabled="">
												<option processing_val=3 <?php echo $agnt_feedback['accurately_document'] == "3"?"selected":"";?> value="3">3</option>
												<option processing_val=1 <?php echo $agnt_feedback['accurately_document'] == "1"?"selected":"";?> value="1">1</option>
												<option processing_val=0 <?php echo $agnt_feedback['accurately_document'] == "0"?"selected":"";?> value="0">0</option>
												<option processing_val=3 <?php echo $agnt_feedback['accurately_document'] == "NA"?"selected":"";?> value="NA">NA</option>
											</select>
										</td>
										<td colspan=7><input type="text" class="form-control" name="data[cmt14]" value="<?php echo $agnt_feedback['cmt14'] ?>" disabled></td>
									</tr>
									<tr>
										<td style="text-align:left;" colspan=3>5.b.Did the CSR provide clear notes that fully captures their whole interaction</td>
										<td>
											<select class="form-control processing_point soft_skill" name="data[provide_clear_notes]" disabled="">
												<option processing_val=3 <?php echo $agnt_feedback['provide_clear_notes'] == "3"?"selected":"";?> value="3">3</option>
												<option processing_val=1 <?php echo $agnt_feedback['provide_clear_notes'] == "1"?"selected":"";?> value="1">1</option>
												<option processing_val=0 <?php echo $agnt_feedback['provide_clear_notes'] == "0"?"selected":"";?> value="0">0</option>
												<option processing_val=3 <?php echo $agnt_feedback['provide_clear_notes'] == "NA"?"selected":"";?> value="NA">NA</option>
											</select>
										</td>
										<td colspan=7><input type="text" class="form-control" name="data[cmt15]" value="<?php echo $agnt_feedback['cmt15'] ?>" disabled></td>
									</tr>

									<tr><td class="eml" colspan=8>6.Email Writing Skills</td></tr>
									<tr>
										<td style="text-align:left;" colspan=3>6.a. Did the CSR use proper spelling, grammar and punctuation throughout the whole email interaction?</td>
										<td>
											<select class="form-control processing_point soft_skill" name="data[proper_spelling]" disabled="">
												<option processing_val=2 <?php echo $agnt_feedback['proper_spelling'] == "2"?"selected":"";?> value="2">2</option>
												<option processing_val=1 <?php echo $agnt_feedback['proper_spelling'] == "1"?"selected":"";?> value="1">1</option>
												<option processing_val=0 <?php echo $agnt_feedback['proper_spelling'] == "0"?"selected":"";?> value="0">0</option>
												<option processing_val=2 <?php echo $agnt_feedback['proper_spelling'] == "NA"?"selected":"";?> value="NA">NA</option>
											</select>
										</td>
										<td colspan=7><input type="text" class="form-control" name="data[cmt16]" value="<?php echo $agnt_feedback['cmt16'] ?>" disabled></td>
									</tr>
									<tr>
										<td style="text-align:left;" colspan=3>6.b.Did the CSR personalize the email ensuring the customer's name, policy information and any other information was mentioned?</td>
										<td>
											<select class="form-control processing_point soft_skill" name="data[email_ensuring]" disabled="">
												<option processing_val=3 <?php echo $agnt_feedback['email_ensuring'] == "3"?"selected":"";?> value="3">3</option>
												<option processing_val=0 <?php echo $agnt_feedback['email_ensuring'] == "0"?"selected":"";?> value="0">0</option>
												<option processing_val=3 <?php echo $agnt_feedback['email_ensuring'] == "NA"?"selected":"";?> value="NA">NA</option>
											</select>
										</td>
										<td colspan=7><input type="text" class="form-control" name="data[cmt17]" value="<?php echo $agnt_feedback['cmt17'] ?>" disabled></td>
									</tr>

									<tr><td class="eml" colspan=8>7. Contact Resolution</td></tr>
									<tr>
										<td style="text-align:left;" colspan=3>7.a. Did the CSR properly advise the caller of any follow-up expectations and set for themselves?</td>
										<td>
											<select class="form-control processing_point soft_skill" name="data[properly_advise_the_caller]" disabled="">
												<option processing_val=4 <?php echo $agnt_feedback['properly_advise_the_caller'] == "4"?"selected":"";?> value="4">4</option>
												<option processing_val=1 <?php echo $agnt_feedback['properly_advise_the_caller'] == "1"?"selected":"";?> value="1">1</option>
												<option processing_val=0 <?php echo $agnt_feedback['properly_advise_the_caller'] == "0"?"selected":"";?> value="0">0</option>
												<option processing_val=4 <?php echo $agnt_feedback['properly_advise_the_caller'] == "NA"?"selected":"";?> value="NA">NA</option>
											</select>
										</td>
										<td colspan=7><input type="text" class="form-control" name="data[cmt18]" value="<?php echo $agnt_feedback['cmt18'] ?>" disabled></td>
									</tr>
									<tr>
										<td style="text-align:left;" colspan=3>7.b. Did the CSR clearly explain options or solutions to the customer and focus on an end solution?</td>
										<td>
											<select class="form-control processing_point soft_skill" name="data[clearly_explain_options]" disabled="">
												<option processing_val=4 <?php echo $agnt_feedback['clearly_explain_options'] == "4"?"selected":"";?> value="4">4</option>
												<option processing_val=1 <?php echo $agnt_feedback['clearly_explain_options'] == "1"?"selected":"";?> value="1">1</option>
												<option processing_val=0 <?php echo $agnt_feedback['clearly_explain_options'] == "0"?"selected":"";?> value="0">0</option>
												<option processing_val=4 <?php echo $agnt_feedback['clearly_explain_options'] == "NA"?"selected":"";?> value="NA">NA</option>
											</select>
										</td>
										<td colspan=7><input type="text" class="form-control" name="data[cmt19]" value="<?php echo $agnt_feedback['cmt19'] ?>" disabled></td>
									</tr>
									<tr>
										<td style="text-align:left;" colspan=3>7.c. Were all necessary policies updated in AMS and the carrier website?</td>
										<td>
											<select class="form-control processing_point soft_skill" name="data[necessary_policies_updated]" disabled="">
												<option processing_val=4 <?php echo $agnt_feedback['necessary_policies_updated'] == "4"?"selected":"";?> value="4">4</option>
												<option processing_val=0 <?php echo $agnt_feedback['necessary_policies_updated'] == "0"?"selected":"";?> value="0">0</option>
												<option processing_val=4 <?php echo $agnt_feedback['necessary_policies_updated'] == "NA"?"selected":"";?> value="NA">NA</option>
											</select>
										</td>
										<td colspan=7><input type="text" class="form-control" name="data[cmt20]" value="<?php echo $agnt_feedback['cmt20'] ?>" disabled></td>
									</tr>
									<tr>
										<td style="text-align:left;" colspan=3>7.d. Did the CSR leave a message with a clear reason for the call along with contact information?</td>
										<td>
											<select class="form-control processing_point soft_skill" name="data[clear_reason_for_the]" disabled="">
												<option processing_val=2 <?php echo $agnt_feedback['clear_reason_for_the'] == "2"?"selected":"";?> value="2">2</option>
												<option processing_val=0 <?php echo $agnt_feedback['clear_reason_for_the'] == "0"?"selected":"";?> value="0">0</option>
												<option processing_val=2 <?php echo $agnt_feedback['clear_reason_for_the'] == "NA"?"selected":"";?> value="NA">NA</option>
											</select>
										</td>
										<td colspan=7><input type="text" class="form-control" name="data[cmt21]" value="<?php echo $agnt_feedback['cmt21'] ?>" disabled></td>
									</tr>
									<tr>
										<td style="text-align:left;" colspan=3>7.e. Did the CSR offer helpful options as applicable such as webforms, etc.?</td>
										<td>
											<select class="form-control processing_point soft_skill" name="data[offer_helpful_options]" disabled="">
												<option processing_val=1 <?php echo $agnt_feedback['offer_helpful_options'] == "1"?"selected":"";?> value="1">1</option>
												<option processing_val=0 <?php echo $agnt_feedback['offer_helpful_options'] == "0"?"selected":"";?> value="0">0</option>
												<option processing_val=1 <?php echo $agnt_feedback['offer_helpful_options'] == "NA"?"selected":"";?> value="NA">NA</option>
											</select>
										</td>
										<td colspan=7><input type="text" class="form-control" name="data[cmt22]" value="<?php echo $agnt_feedback['cmt22'] ?>" disabled></td>
									</tr>
									<tr><td class="eml" colspan=8>7.Bonus Questions</td></tr>
									<tr>
										<td style="text-align:left;" colspan=3>Was CSR able to retain a customer who had considered cancelling a policy with Brightway?</td>
										<td>
											<select class="form-control processing_point soft_skill" name="data[retain_customer_who_had]" disabled="">
												<option processing_val=1 <?php echo $agnt_feedback['retain_customer_who_had'] == "1"?"selected":"";?> value="1">1</option>
												<option processing_val=1 <?php echo $agnt_feedback['retain_customer_who_had'] == "NA"?"selected":"";?> value="NA">NA</option>
											</select>
										</td>
										<td colspan=7><input type="text" class="form-control" name="data[cmt23]" value="<?php echo $agnt_feedback['cmt23'] ?>" disabled></td>
									</tr>
									<tr>
										<td style="text-align:left;" colspan=3>Did the CSR identify a cross-sell opportunity and put the customer in touch with their agent of record?</td>
										<td>
											<select class="form-control processing_point soft_skill" name="data[identify_cross_sell]" disabled="">
												<option processing_val=1 <?php echo $agnt_feedback['identify_cross_sell'] == "1"?"selected":"";?> value="1">1</option>
												<option processing_val=1 <?php echo $agnt_feedback['identify_cross_sell'] == "NA"?"selected":"";?> value="NA">NA</option>
											</select>
										</td>
										<td colspan=7><input type="text" class="form-control" name="data[cmt24]" value="<?php echo $agnt_feedback['cmt24'] ?>" disabled></td>
									</tr>
									<tr>
										<td style="text-align:left;" colspan=3>Did the CSR receive a kudos for this interaction due to exemplary performance?</td>
										<td>
											<select class="form-control processing_point soft_skill" name="data[kudos_for_this_interaction]" disabled="">
												<option processing_val=1 <?php echo $agnt_feedback['kudos_for_this_interaction'] == "1"?"selected":"";?> value="1">1</option>
												<option processing_val=1 <?php echo $agnt_feedback['kudos_for_this_interaction'] == "NA"?"selected":"";?> value="NA">NA</option>
											</select>
										</td>
										<td colspan=7><input type="text" class="form-control" name="data[cmt25]" value="<?php echo $agnt_feedback['cmt25'] ?>" disabled></td>
									</tr>
									<tr><td class="eml" colspan=8>8.Penalty Questions</td></tr>
									<tr>
										<td style="text-align:left;" colspan=3>Did CSR demonstrate behavior that is considered offensive by using unprofessional language, tone or any other action that impacted the customer experience?</td>
										<td>
											<select class="form-control processing_point" id="processing_FAT1" name="data[considered_offensive]" disabled="">
												<option processing_val=0 <?php echo $agnt_feedback['considered_offensive'] == "No"?"selected":"";?> value="No">No</option>
												<option processing_val=0 <?php echo $agnt_feedback['considered_offensive'] == "Yes"?"selected":"";?> value="Yes">Yes</option>
												<option processing_val=0 <?php echo $agnt_feedback['considered_offensive'] == "NA"?"selected":"";?> value="NA">NA</option>
											</select>
										</td>
										<td colspan=7><input type="text" class="form-control" name="data[cmt26]" value="<?php echo $agnt_feedback['cmt26'] ?>" disabled></td>
									</tr>
									<tr>
										<td style="text-align:left;" colspan=3>Did CSR provide information or complete a transaction that could lead to an Errors and Omissions claim or impact the customer in a negative manner?</td>
										<td>
											<select class="form-control processing_point" id="processing_FAT2" name="data[complete_transaction]" disabled="">
												<option processing_val=0 <?php echo $agnt_feedback['complete_transaction'] == "No"?"selected":"";?> value="No">No</option>
												<option processing_val=0 <?php echo $agnt_feedback['complete_transaction'] == "Yes"?"selected":"";?> value="Yes">Yes</option>
												<option processing_val=0 <?php echo $agnt_feedback['complete_transaction'] == "NA"?"selected":"";?> value="NA">NA</option>
											</select>
										</td>
										<td colspan=7><input type="text" class="form-control" name="data[cmt27]" value="<?php echo $agnt_feedback['cmt27'] ?>" disabled></td>
									</tr>
									
									<tr>
										<td>Call Summary:</td>
										<td colspan="2"><textarea class="form-control"   name="data[call_summary]" disabled=""><?php echo $agnt_feedback['call_summary'] ?></textarea></td>
										<td>Feedback:</td>
										<td colspan="2"><textarea class="form-control"   name="data[feedback]" disabled=""><?php echo $agnt_feedback['feedback'] ?></textarea></td>
									</tr>

									<tr>
										<td colspan=2>Upload Files</td>
										<?php if($pnid==0){ ?>
											<td colspan=4><input type="file" multiple class="form-control" id="attach_file" name="attach_file[]"></td>
										<?php }else{
											if($agnt_feedback['attach_file']!=''){ ?>
												<td colspan=4>
													<?php $attach_file = explode(",",$agnt_feedback['attach_file']);
													 foreach($attach_file as $mp){ ?>
														<audio controls='' style="background-color:#607F93"> 
														  <source src="<?php echo base_url(); ?>qa_files/qa_ameridial/qa_processing/<?php echo $mp; ?>" type="audio/ogg">
														  <source src="<?php echo base_url(); ?>qa_files/qa_ameridial/qa_processing/<?php echo $mp; ?>" type="audio/mpeg">
														</audio> </br>
													 <?php } ?>
												</td>
										<?php }else{
												echo '<td colspan=6><b>No Files</b></td>';
											  }
										} ?>
									</tr>

                                <?php } ?>


                                <?php if($campaign=='processing_new'){ ?>
                                	<tr>
										<td>Evaluator Name:</td>
										<td><input type="text" class="form-control" name="data[evaluator_name]" value="<?php echo $agnt_feedback['evaluator_name'] ?>" disabled></td>
										<td>ANI:</td>
										<td><input type="text" class="form-control" name="data[ani]" value="<?php echo $agnt_feedback['ani'] ?>" disabled></td>
										<td>DNIS:</td>
										<td><input type="text" class="form-control" name="data[dnis]" value="<?php echo $agnt_feedback['dnis'] ?>" disabled></td>
										<td>Contact ID:</td>
										<td><input type="text" class="form-control" name="data[contact_id]" value="<?php echo $agnt_feedback['contact_id'] ?>" disabled></td>
									</tr>
									<tr>
										<td>Direction Type Description:</td>
										<td><input type="text" class="form-control" id="direction_type" name="data[direction_type]" value="<?php echo $agnt_feedback['direction_type'] ?>" disabled></td>
										<td>Skill Name:</td>
										<td colspan="2"><input type="text" class="form-control" name="data[skill_name]" value="<?php echo $agnt_feedback['skill_name'] ?>" disabled></td>
										<td>Segment Duration:</td>
										<td colspan="2"><input type="text" class="form-control" name="data[segment_duration]" value="<?php echo $agnt_feedback['segment_duration'] ?>" disabled></td>
									</tr>

									<tr>
										<td style="font-size:16px; font-weight:bold">Earned Score</td>
										<td><input type="text" readonly class="form-control" id="phone_earnedScore" name="data[earned_score]" value="<?php echo $agnt_feedback['earned_score'] ?>"></td>
										<td style="font-size:16px; font-weight:bold">Possible Score</td>
										<td colspan="2"><input type="text" readonly class="form-control" id="phone_possibleScore" name="data[possible_score]" value="<?php echo $agnt_feedback['possible_score'] ?>"></td>
										<td style="font-weight:bold; font-size:16px; text-align:right">Overall Score:</td>
										<td colspan="2"><input type="text" readonly id="phone_overallScore" name="data[overall_score]" class="form-control phoneInbAutofail" style="font-weight:bold" value="<?php echo $agnt_feedback['overall_score'] ?>"></td>
									</tr>
									<tr style="height:25px; font-weight:bold; background-color:#85C1E9">
										<td colspan=4>Item</td>
										<td>Rating</td>
										<td colspan=3>Comment</td>
									</tr>

									
									
									<tr><td class="eml" colspan=8>1. Authentication</td></tr>
									<tr>
										<td style="text-align:left;" colspan=3>1.a. Completed the correct caller verification for either a first-party or a third-party caller</td>
										<td>
											<select class="form-control phone_inbound soft_skill authentication_grade" name="data[Verification]" id="Verification" disabled>
												<option value="">-Select-</option>
												<option phone_inbound_val=8.75 phone_inbound_max_val=8.75 <?php echo $agnt_feedback['Verification'] == "Yes"?"selected":"";?> value="Yes">Yes</option>
												<option phone_inbound_val=0 phone_inbound_max_val=8.75 <?php echo $agnt_feedback['Verification'] == "No"?"selected":"";?> value="No">No</option>
												<option phone_inbound_val=8.75 phone_inbound_max_val=8.75 <?php echo $agnt_feedback['Verification'] == "NA"?"selected":"";?> value="NA">NA</option>
												
											</select>
										</td>
										<td colspan=7><input type="text" class="form-control" name="data[cmt1]" value="<?php echo $agnt_feedback['cmt1'] ?>" disabled></td>
									</tr>
									<tr>
										<td style="text-align:left;" colspan=3>1.b. New contact information was captured</td>
										<td>
											<select class="form-control phone_inbound soft_skill authentication_grade" name="data[information]" id="information" disabled>
												<option value="">-Select-</option>
												<option phone_inbound_val=8.75 phone_inbound_max_val=8.75 <?php echo $agnt_feedback['information'] == "Yes"?"selected":"";?> value="Yes">Yes</option>
												<option phone_inbound_val=0 phone_inbound_max_val=8.75 <?php echo $agnt_feedback['information'] == "No"?"selected":"";?> value="No">No</option>
												<option phone_inbound_val=8.75 phone_inbound_max_val=8.75 <?php echo $agnt_feedback['information'] == "NA"?"selected":"";?> value="NA">NA</option>
												
											</select>
										</td>
										<td colspan=7><input type="text" class="form-control" name="data[cmt2]" value="<?php echo $agnt_feedback['cmt2'] ?>" disabled></td>
									</tr>

									<tr>
										<td style="text-align:left;" colspan=3>1.c. Authenticated the information/ documented that was received (correct document to suffice policy) prior to taking actions with the carrier or other</td>
										<td>
											<select class="form-control phone_inbound soft_skill authentication_grade" name="data[Authentication]" id="Authentication" disabled>
												<option value="">-Select-</option>
												<option phone_inbound_val=8.75 phone_inbound_max_val=8.75 <?php echo $agnt_feedback['Authentication'] == "Yes"?"selected":"";?> value="Yes">Yes</option>
												<option phone_inbound_val=0 phone_inbound_max_val=8.75 <?php echo $agnt_feedback['Authentication'] == "No"?"selected":"";?> value="No">No</option>
												<option phone_inbound_val=8.75 phone_inbound_max_val=8.75 <?php echo $agnt_feedback['Authentication'] == "NA"?"selected":"";?> value="NA">NA</option>
												
											</select>
										</td>
										<td colspan=7><input type="text" class="form-control" name="data[cmt3]" value="<?php echo $agnt_feedback['cmt3'] ?>" disabled></td>
									</tr>

									<tr>
										<td style="text-align:left;" colspan=3>1.d. Confirmed the correct policy and eligibility to service prior to taking action</td>
										<td>
											<select class="form-control phone_inbound soft_skill authentication_grade" name="data[Service]" id="Service" disabled>
												<option value="">-Select-</option>
												<option phone_inbound_val=8.75 phone_inbound_max_val=8.75 <?php echo $agnt_feedback['Service'] == "Yes"?"selected":"";?> value="Yes">Yes</option>
												<option phone_inbound_val=0 phone_inbound_max_val=8.75 <?php echo $agnt_feedback['Service'] == "No"?"selected":"";?> value="No">No</option>
												<option phone_inbound_val=8.75 phone_inbound_max_val=8.75 <?php echo $agnt_feedback['Service'] == "NA"?"selected":"";?> value="NA">NA</option>
												
											</select>
										</td>
										<td colspan=7><input type="text" class="form-control" name="data[cmt4]" value="<?php echo $agnt_feedback['cmt4'] ?>" disabled></td>
									</tr>

									<tr><td class="eml" colspan=8>2. Professionalism</td></tr>
									<tr>
										<td style="text-align:left;" colspan=3>2.a. Empathy/ Sympathy was provided on the call</td>
										<td>
											<select class="form-control phone_inbound soft_skill authentication_grade" name="data[Sympathy]" id="Sympathy" disabled>
												<option value="">-Select-</option>
												<option phone_inbound_val=2.5 phone_inbound_max_val=2.5 <?php echo $agnt_feedback['Sympathy'] == "Yes"?"selected":"";?> value="Yes">Yes</option>
												<option phone_inbound_val=0 phone_inbound_max_val=2.5 <?php echo $agnt_feedback['Sympathy'] == "No"?"selected":"";?> value="No">No</option>
												<option phone_inbound_val=2.5 phone_inbound_max_val=2.5 <?php echo $agnt_feedback['Sympathy'] == "NA"?"selected":"";?> value="NA">NA</option>
												
											</select>
										</td>
										<td colspan=7><input type="text" class="form-control" name="data[cmt5]" value="<?php echo $agnt_feedback['cmt5'] ?>" disabled></td>
									</tr>
									<tr>
										<td style="text-align:left;" colspan=3>2.b. Demonstrated call control effectively throughout the call  by listening and acknowledging</td>
										<td>
											<select class="form-control phone_inbound soft_skill authentication_grade" name="data[Control]" id="Control" disabled>
												<option value="">-Select-</option>
												<option phone_inbound_val=2.5 phone_inbound_max_val=2.5 <?php echo $agnt_feedback['Control'] == "Yes"?"selected":"";?> value="Yes">Yes</option>
												<option phone_inbound_val=0 phone_inbound_max_val=2.5 <?php echo $agnt_feedback['Control'] == "No"?"selected":"";?> value="No">No</option>
												<option phone_inbound_val=2.5 phone_inbound_max_val=2.5 <?php echo $agnt_feedback['Control'] == "NA"?"selected":"";?> value="NA">NA</option>
												
											</select>
										</td>
										<td colspan=7><input type="text" class="form-control" name="data[cmt6]" value="<?php echo $agnt_feedback['cmt6'] ?>" disabled></td>
									</tr>
                                     <tr>
										<td style="text-align:left;" colspan=3>2.c. Followed a common-sense approach to placing a caller on hold or transferring them</td>
										<td>
											<select class="form-control phone_inbound soft_skill authentication_grade" name="data[Procedures]" id="Procedures" disabled>
												<option value="">-Select-</option>
												<option phone_inbound_val=2.5 phone_inbound_max_val=2.5 <?php echo $agnt_feedback['Procedures'] == "Yes"?"selected":"";?> value="Yes">Yes</option>
												<option phone_inbound_val=0 phone_inbound_max_val=2.5 <?php echo $agnt_feedback['Procedures'] == "No"?"selected":"";?> value="No">No</option>
												<option phone_inbound_val=2.5 phone_inbound_max_val=2.5 <?php echo $agnt_feedback['Procedures'] == "NA"?"selected":"";?> value="NA">NA</option>
												
											</select>
										</td>
										<td colspan=7><input type="text" class="form-control" name="data[cmt7]" value="<?php echo $agnt_feedback['cmt7'] ?>" disabled></td>
									</tr>

									<tr>
										<td style="text-align:left;" colspan=3>2.d. If the call disconnected, the customer was called back</td>
										<td>
											<select class="form-control phone_inbound soft_skill authentication_grade" name="data[Back]" id="Back" disabled>
												<option value="">-Select-</option>
												<option phone_inbound_val=2.5 phone_inbound_max_val=2.5 <?php echo $agnt_feedback['Back'] == "Yes"?"selected":"";?> value="Yes">Yes</option>
												<option phone_inbound_val=0 phone_inbound_max_val=2.5 <?php echo $agnt_feedback['Back'] == "No"?"selected":"";?> value="No">No</option>
												<option phone_inbound_val=2.5 phone_inbound_max_val=2.5 <?php echo $agnt_feedback['Back'] == "NA"?"selected":"";?> value="NA">NA</option>
												
											</select>
										</td>
										<td colspan=7><input type="text" class="form-control" name="data[cmt8]" value="<?php echo $agnt_feedback['cmt8'] ?>" disabled></td>
									</tr>

									<tr>
										<td style="text-align:left;" colspan=3>2.e. Additional assistance offered if applicable</td>
										<td>
											<select class="form-control phone_inbound soft_skill authentication_grade" name="data[Completion]" id="Completion" disabled>
												<option value="">-Select-</option>
												<option phone_inbound_val=2.5 phone_inbound_max_val=2.5 <?php echo $agnt_feedback['Completion'] == "Yes"?"selected":"";?> value="Yes">Yes</option>
												<option phone_inbound_val=0 phone_inbound_max_val=2.5 <?php echo $agnt_feedback['Completion'] == "No"?"selected":"";?> value="No">No</option>
												<option phone_inbound_val=2.5 phone_inbound_max_val=2.5 <?php echo $agnt_feedback['Completion'] == "NA"?"selected":"";?> value="NA">NA</option>
												
											</select>
										</td>
										<td colspan=7><input type="text" class="form-control" name="data[cmt9]" value="<?php echo $agnt_feedback['cmt9'] ?>" disabled></td>
									</tr>
									<tr>
										<td style="text-align:left;" colspan=3>2.f. Written communication follows a common sense approach (template standards) or was the applicable template used</td>
										<td>
											<select class="form-control phone_inbound soft_skill authentication_grade" name="data[Communication]" id="Communication" disabled>
												<option value="">-Select-</option>
												<option phone_inbound_val=2.5 phone_inbound_max_val=2.5 <?php echo $agnt_feedback['Communication'] == "Yes"?"selected":"";?> value="Yes">Yes</option>
												<option phone_inbound_val=0 phone_inbound_max_val=2.5 <?php echo $agnt_feedback['Communication'] == "No"?"selected":"";?> value="No">No</option>
												<option phone_inbound_val=2.5 phone_inbound_max_val=2.5 <?php echo $agnt_feedback['Communication'] == "NA"?"selected":"";?> value="NA">NA</option>
												
											</select>
										</td>
										<td colspan=7><input type="text" class="form-control" name="data[cmt10]" value="<?php echo $agnt_feedback['cmt10'] ?>" disabled></td>
									</tr>

									<tr><td class="eml" colspan=8>3. Use of Appropriate Resources / Tools and Documentation</td></tr>
									<tr>
										<td style="text-align:left;" colspan=3>3.a.Use the necessary resources to assist the customer effectively and accurately</td>
										<td>
											<select class="form-control phone_inbound soft_skill authentication_grade" name="data[Tools]" id="Tools" disabled>
												<option value="">-Select-</option>
												<option phone_inbound_val=12.5 phone_inbound_max_val=12.5 <?php echo $agnt_feedback['Tools'] == "Yes"?"selected":"";?> value="Yes">Yes</option>
												<option phone_inbound_val=0 phone_inbound_max_val=12.5 <?php echo $agnt_feedback['Tools'] == "No"?"selected":"";?> value="No">No</option>
												<option phone_inbound_val=12.5 phone_inbound_max_val=12.5 <?php echo $agnt_feedback['Tools'] == "NA"?"selected":"";?> value="NA">NA</option>
												
											</select>
										</td>
										<td colspan=7><input type="text" class="form-control" name="data[cmt11]" value="<?php echo $agnt_feedback['cmt11'] ?>" disabled></td>
									</tr>
									<tr>
										<td style="text-align:left;" colspan=3>3.b. Accurately document the interaction from start to finish</td>
										<td>
											<select class="form-control phone_inbound soft_skill authentication_grade" name="data[Documentation]" id="Documentation" disabled>
												<option value="">-Select-</option>
												<option phone_inbound_val=12.5 phone_inbound_max_val=12.5 <?php echo $agnt_feedback['Documentation'] == "Yes"?"selected":"";?> value="Yes">Yes</option>
												<option phone_inbound_val=0 phone_inbound_max_val=12.5 <?php echo $agnt_feedback['Documentation'] == "No"?"selected":"";?> value="No">No</option>
												<option phone_inbound_val=12.5 phone_inbound_max_val=12.5 <?php echo $agnt_feedback['Documentation'] == "NA"?"selected":"";?> value="NA">NA</option>
												
											</select>
										</td>
										<td colspan=7><input type="text" class="form-control" name="data[cmt12]" value="<?php echo $agnt_feedback['cmt12'] ?>" disabled></td>
									</tr>
									
									

									<tr><td class="eml" colspan=8>4.  Contact Resolution</td></tr>
									<tr>
										<td style="text-align:left;" colspan=3>4.a. Properly advised the caller of any follow-up expectations and set a follow-up for themselves, if applicable</td>
										<td>
											<select class="form-control phone_inbound soft_skill authentication_grade" name="data[Follow_Ups]" id="Follow_Ups" disabled>
												<option value="">-Select-</option>
												<option phone_inbound_val=8.33 phone_inbound_max_val=8.33 <?php echo $agnt_feedback['Follow_Ups'] == "Yes"?"selected":"";?> value="Yes">Yes</option>
												<option phone_inbound_val=0 phone_inbound_max_val=8.33 <?php echo $agnt_feedback['Follow_Ups'] == "No"?"selected":"";?> value="No">No</option>
												<option phone_inbound_val=8.33 phone_inbound_max_val=8.33 <?php echo $agnt_feedback['Follow_Ups'] == "NA"?"selected":"";?> value="NA">NA</option>
												
											</select>
										</td>
										<td colspan=7><input type="text" class="form-control" name="data[cmt13]" value="<?php echo $agnt_feedback['cmt13'] ?>" disabled></td>
									</tr>

									<tr>
										<td style="text-align:left;" colspan=3>4.b. Clearly explained options or solutions to the customer and focus on an end solution</td>
										<td>
											<select class="form-control phone_inbound soft_skill authentication_grade" name="data[Solution]" id="Solution" disabled>
												<option value="">-Select-</option>
												<option phone_inbound_val=8.33 phone_inbound_max_val=8.33 <?php echo $agnt_feedback['Solution'] == "Yes"?"selected":"";?> value="Yes">Yes</option>
												<option phone_inbound_val=0 phone_inbound_max_val=8.33 <?php echo $agnt_feedback['Solution'] == "No"?"selected":"";?> value="No">No</option>
												<option phone_inbound_val=8.33 phone_inbound_max_val=8.33 <?php echo $agnt_feedback['Solution'] == "NA"?"selected":"";?> value="NA">NA</option>
												
											</select>
										</td>
										<td colspan=7><input type="text" class="form-control" name="data[cmt14]" value="<?php echo $agnt_feedback['cmt14'] ?>" disabled></td>
									</tr>
									<tr>
										<td style="text-align:left;" colspan=3>4.c. Properly update necessary policies / information in AMS and the carrier website, if applicable</td>
										<td>
											<select class="form-control phone_inbound soft_skill authentication_grade" name="data[Updates]" id="Updates" disabled>
												<option value="">-Select-</option>
												<option phone_inbound_val=8.33 phone_inbound_max_val=8.33 <?php echo $agnt_feedback['Updates'] == "Yes"?"selected":"";?> value="Yes">Yes</option>
												<option phone_inbound_val=0 phone_inbound_max_val=8.33 <?php echo $agnt_feedback['Updates'] == "No"?"selected":"";?> value="No">No</option>
												<option phone_inbound_val=8.33 phone_inbound_max_val=8.33 <?php echo $agnt_feedback['Updates'] == "NA"?"selected":"";?> value="NA">NA</option>
												
											</select>
										</td>
										<td colspan=7><input type="text" class="form-control" name="data[cmt15]" value="<?php echo $agnt_feedback['cmt15'] ?>" disabled></td>
									</tr>
									



									<tr><td class="eml" colspan=8>5.Bonus Questions</td></tr>
									<tr>
										<td style="text-align:left;" colspan=3>5.a. Received kudos for this interaction due to exemplary performance</td>
										<td>
											<select class="form-control phone_inbound soft_skill authentication_grade" name="data[Kudos]" id="Kudos" disabled>
												<option value="">-Select-</option>
												<option phone_inbound_val=20 phone_inbound_max_val=20 <?php echo $agnt_feedback['Kudos'] == "Yes"?"selected":"";?> value="Yes">Yes</option>
												<option phone_inbound_val=0 phone_inbound_max_val=20 <?php echo $agnt_feedback['Kudos'] == "No"?"selected":"";?> value="No">No</option>
												<option phone_inbound_val=20 phone_inbound_max_val=20 <?php echo $agnt_feedback['Kudos'] == "NA"?"selected":"";?> value="NA">NA</option>
												
											</select>
										</td>
										<td colspan=7><input type="text" class="form-control" name="data[cmt16]" value="<?php echo $agnt_feedback['cmt16'] ?>" disabled></td>
									</tr>
									
									<tr><td class="eml" colspan=86>6.Penalty Questions</td></tr>
									<tr>
										<td style="text-align:left;" colspan=3>6.a. Did CSR demonstrate behavior that is considered offensive by using unprofessional language, tone or any other action that impacted the customer experience? </td>
										<td>
											<select class="form-control phone_inbound soft_skill " name="data[Interaction]" id="phone_FAT1" disabled>
												<option value="">-Select-</option>
												<option phone_inbound_val=0 phone_inbound_max_val=0 <?php echo $agnt_feedback['Interaction'] == "Yes"?"selected":"";?> value="Yes">Yes</option>
												<option phone_inbound_val=0 phone_inbound_max_val=0 <?php echo $agnt_feedback['Interaction'] == "No"?"selected":"";?> value="No">No</option>
												
												
											</select>
										</td>
										<td colspan=7><input type="text" class="form-control" name="data[cmt17]" value="<?php echo $agnt_feedback['cmt17'] ?>" disabled></td>
									</tr>
									<tr>
										<td style="text-align:left;" colspan=3>6.b. Did CSR provide information or complete a transaction that could lead to an Errors and Omissions claim or impact the customer in a negative manner?</td>
										<td>
											<select class="form-control phone_inbound soft_skill " name="data[Omissions]" id="phone_FAT2" disabled>
												<option  value="">-Select-</option>
												<option phone_inbound_val=0 phone_inbound_max_val=0 <?php echo $agnt_feedback['Omissions'] == "Yes"?"selected":"";?> value="Yes">Yes</option>
												<option phone_inbound_val=0 phone_inbound_max_val=0 <?php echo $agnt_feedback['Omissions'] == "No"?"selected":"";?> value="No">No</option>
												
												
											</select>
										</td>
										<td colspan=7><input type="text" class="form-control" name="data[cmt18]" value="<?php echo $agnt_feedback['cmt18'] ?>" disabled></td>
									</tr>

									
									<tr>
										<td>Call Summary:</td>
										<td colspan="2"><textarea class="form-control"   name="data[call_summary]" disabled=""><?php echo $agnt_feedback['call_summary'] ?></textarea></td>
										<td>Feedback:</td>
										<td colspan="2"><textarea class="form-control"   name="data[feedback]" disabled=""><?php echo $agnt_feedback['feedback'] ?></textarea></td>
									</tr>

									<tr>
										<td colspan=2>Upload Files</td>
										<?php if($pnid==0){ ?>
											<td colspan=4><input type="file" multiple class="form-control" id="attach_file" name="attach_file[]"></td>
										<?php }else{
											if($agnt_feedback['attach_file']!=''){ ?>
												<td colspan=4>
													<?php $attach_file = explode(",",$agnt_feedback['attach_file']);
													 foreach($attach_file as $mp){ ?>
														<audio controls='' style="background-color:#607F93"> 
														  <source src="<?php echo base_url(); ?>qa_files/qa_ameridial/qa_processing/<?php echo $mp; ?>" type="audio/ogg">
														  <source src="<?php echo base_url(); ?>qa_files/qa_ameridial/qa_processing/<?php echo $mp; ?>" type="audio/mpeg">
														</audio> </br>
													 <?php } ?>
												</td>
										<?php }else{
												echo '<td colspan=6><b>No Files</b></td>';
											  }
										} ?>
									</tr>

                                <?php } ?>

                                     <?php if($campaign=='revel_new'){ ?>
												<tr>
										<!--<td style="font-size:16px; font-weight:bold" colspan="2">MECHANICS Earned Score</td>
										<td><input type="text" readonly class="form-control" id="fb_earnedScore2" name="data[earned_score]" value="<?php //echo $agnt_feedback['earned_score'] ?>"></td><td style="font-size:16px; font-weight:bold" colspan="2">MECHANICS Possible Score</td>
										<td><input type="text" readonly class="form-control" id="fb_possibleScore2" name="data[possible_score]" value="<?php //echo $agnt_feedback['possible_score'] ?>"></td>
										<td style="font-weight:bold; font-size:16px; text-align:right">MECHANICS Overall Score:</td>
										<td><input type="text" readonly id="icario_overallScore2" name="data[mechanics_overall_score]" class="form-control" style="font-weight:bold" value="<?php //echo $agnt_feedback['mechanics_overall_score'] ?>"></td>
									</tr>-->
									<!--<tr>
										<td style="font-size:16px; font-weight:bold" colspan="2">SOFT SKILLS Earned Score</td>
										<td><input type="text" readonly class="form-control" id="fb_earnedScore3" name="data[earned_score]" value="<?php //echo $agnt_feedback['earned_score'] ?>"></td><td style="font-size:16px; font-weight:bold" colspan="2">SOFT SKILLS Possible Score</td>
										<td><input type="text" readonly class="form-control" id="fb_possibleScore3" name="data[soft_skills_overall_score]" value="<?php //echo $agnt_feedback['soft_skills_overall_score'] ?>"></td>
										<td style="font-weight:bold; font-size:16px; text-align:right">SOFT SKILLS Overall Score:</td>
										<td><input type="text" readonly id="icario_overallScore3" name="data[overall_score]" class="form-control" style="font-weight:bold" value="<?php //echo $agnt_feedback['overall_score'] ?>"></td>
									</tr>-->
									<tr>
										<td style="font-size:16px; font-weight:bold" colspan="1">Earned Score</td>
										<td><input type="text" readonly class="form-control" id="fb_earnedScore1" name="data[earned_score]" value="<?php echo $agnt_feedback['earned_score'] ?>" disabled></td><td style="font-size:16px; font-weight:bold" colspan="2">Possible Score</td>
										<td colspan="2"><input type="text" class="form-control" id="fb_possibleScore1" name="data[possible_score]" value="<?php echo $agnt_feedback['possible_score'] ?>" disabled></td>
										<td style="font-weight:bold; font-size:16px; text-align:right">Overall Score:</td>
										<td><input type="text" readonly id="icario_overallScore" name="data[overall_score]" class="form-control icarioAutofail" style="font-weight:bold" value="<?php echo $agnt_feedback['overall_score'] ?>" disabled></td>
									</tr>
									<tr><td colspan="6"></td><td style="font-weight:bold; font-size:16px; text-align:right">Bonus Score:</td><td><input type="text" readonly id="bonus_overallScore" name="data[bonus_overallScore]" class="form-control bonusAutofail" style="font-weight:bold" value="<?php echo $agnt_feedback['bonus_overallscore'] ?>"></td></tr>
									<tr style="height:25px; font-weight:bold; background-color:#85C1E9">
										<td colspan=4>Item</td>
										<td  colspan=1>Rating</td>
										<td>Coefficient</td>
										<td colspan=2>Proposition</td>
									</tr>

									<tr><td class="eml" colspan=8>MECHANICS</td></tr>
									<tr>
										<td style="text-align:left;" colspan=4>1.M.1  Agent greeted the member, used correct client opening, introduced themselves, and continued following the basic scripting to open the call</td>
										<td>
											<select class="form-control icario_point  mechanic" id="" name="data[agent_greeted_the_member]" disabled="">
												<option icario_val=4 <?php echo $agnt_feedback['agent_greeted_the_member'] == "Yes"?"selected":"";?> value="Yes">Yes</option>
												<option icario_val=4 <?php echo $agnt_feedback['agent_greeted_the_member'] == "No"?"selected":"";?> value="No">No</option>
											</select>
										</td>
										<td>4</td>
										<td colspan=2><input type="text" class="form-control" name="data[cmt1]" value="<?php echo $agnt_feedback['cmt1'] ?>" disabled></td>
									</tr>
									<tr>
										<td style="text-align:left;" colspan=4>1.M.2 Agent properly authenticated the member</td>
										<td>
											<select class="form-control icario_point mechanic" name="data[agent_properly_authenticated]" disabled="">
												<option icario_val=5 <?php echo $agnt_feedback['agent_properly_authenticated'] == "Yes"?"selected":"";?> value="Yes">Yes</option>
												<option icario_val=5 <?php echo $agnt_feedback['agent_properly_authenticated'] == "No"?"selected":"";?> value="No">No</option>
											</select>
										</td>
										<td>5</td>
										<td colspan=2><input type="text" class="form-control" name="data[cmt2]" value="<?php echo $agnt_feedback['cmt2'] ?>" disabled></td>
									</tr>
									<tr>
										<td style="text-align:left;" colspan=4>1.M.3  Did Agent attempt to update Email/SMS/IVR/Phone Number?</td>
										<td>
											<select class="form-control icario_point mechanic" name="data[did_agent_attempt]" disabled="">
												<option icario_val=3 <?php echo $agnt_feedback['did_agent_attempt'] == "Yes"?"selected":"";?> value="Yes">Yes</option>
												<option icario_val=3 <?php echo $agnt_feedback['did_agent_attempt'] == "No"?"selected":"";?> value="No">No</option>
											</select>
										</td>
										<td>3</td>
										<td colspan=2><input type="text" class="form-control" name="data[cmt3]" value="<?php echo $agnt_feedback['cmt3'] ?>" disabled></td>
									</tr>

									<tr>
										<td style="text-align:left;" colspan=4>1.M.4  Agent gave Health Care Activity info Correctly</td>
										<td>
											<select class="form-control icario_point mechanic" name="data[agent_gave_health]" disabled="">
												<option icario_val=5 <?php echo $agnt_feedback['agent_gave_health'] == "Yes"?"selected":"";?> value="Yes">Yes</option>
												<option icario_val=5 <?php echo $agnt_feedback['agent_gave_health'] == "No"?"selected":"";?> value="No">No</option>
											</select>
										</td>
										<td>5</td>
										<td colspan=2><input type="text" class="form-control" name="data[cmt4]" value="<?php echo $agnt_feedback['cmt4'] ?>" disabled></td>
									</tr>
									<tr>
										<td style="text-align:left;" colspan=4>1.M.5  Agent collected Health Care Activity information correctly</td>
										<td>
											<select class="form-control icario_point mechanic" name="data[agent_collected_health]" disabled="">
												<option icario_val=4 <?php echo $agnt_feedback['agent_collected_health'] == "Yes"?"selected":"";?> value="Yes">Yes</option>
												<option icario_val=4 <?php echo $agnt_feedback['agent_collected_health'] == "No"?"selected":"";?> value="No">No</option>
											</select>
										</td>
										<td>4</td>
										<td colspan=2><input type="text" class="form-control" name="data[cmt5]" value="<?php echo $agnt_feedback['cmt5'] ?>" disabled></td>
									</tr>

									<tr>
										<td style="text-align:left;" colspan=4>1.M.7 Agent gave correct Gift Card information</td>
										<td>
											<select class="form-control icario_point mechanic" name="data[agent_gave_correct_gift]" disabled="">
												<option icario_val=4 <?php echo $agnt_feedback['agent_gave_correct_gift'] == "Yes"?"selected":"";?> value="Yes">Yes</option>
												<option icario_val=4 <?php echo $agnt_feedback['agent_gave_correct_gift'] == "No"?"selected":"";?> value="No">No</option>
											</select>
										</td>
										<td>4</td>
										<td colspan=2><input type="text" class="form-control" name="data[cmt6]" value="<?php echo $agnt_feedback['cmt6'] ?>" disabled></td>
									</tr>
									<tr>
										<td style="text-align:left;" colspan=4>1.M.8 Agent offered to provide information on the Health Care Activities that the member has remaining to complete</td>
										<td>
											<select class="form-control icario_point mechanic" name="data[agent_offered_to_provide]" disabled="">
												<option icario_val=12 <?php echo $agnt_feedback['agent_offered_to_provide'] == "Yes"?"selected":"";?> value="Yes">Yes</option>
												<option icario_val=12 <?php echo $agnt_feedback['agent_offered_to_provide'] == "No"?"selected":"";?> value="No">No</option>
											</select>
										</td>
										<td>12</td>
										<td colspan=2><input type="text" class="form-control" name="data[cmt7]" value="<?php echo $agnt_feedback['cmt7'] ?>" disabled></td>
									</tr>
									<tr>
										<td style="text-align:left;" colspan=4>1.M.9  Agent provided online, self-service information</td>
										<td>
											<select class="form-control icario_point mechanic" name="data[agent_provided_online]" disabled="">
												<option icario_val=4 <?php echo $agnt_feedback['agent_provided_online'] == "Yes"?"selected":"";?> value="Yes">Yes</option>
												<option icario_val=4 <?php echo $agnt_feedback['agent_provided_online'] == "No"?"selected":"";?> value="No">No</option>
											</select>
										</td>
										<td>4</td>
										<td colspan=2><input type="text" class="form-control" name="data[cmt8]" value="<?php echo $agnt_feedback['cmt8'] ?>" disabled></td>
									</tr>
									<tr>
										<td style="text-align:left;" colspan=4>1.M.10  Agent used correct transfer procedure</td>
										<td>
											<select class="form-control icario_point mechanic" name="data[agent_used_correct]" disabled="">
												<option icario_val=3 <?php echo $agnt_feedback['agent_used_correct'] == "Yes"?"selected":"";?> value="Yes">Yes</option>
												<option icario_val=3 <?php echo $agnt_feedback['agent_used_correct'] == "No"?"selected":"";?> value="No">No</option>
											</select>
										</td>
										<td>3</td>
										<td colspan=2><input type="text" class="form-control" name="data[cmt9]" value="<?php echo $agnt_feedback['cmt9'] ?>" disabled></td>
									</tr>

									<tr>
										<td style="text-align:left;" colspan=4>1.M.11 Agent logged call correctly in all appropriate systems</td>
										<td>
											<select class="form-control icario_point mechanic" name="data[agent_logged_call]" disabled="">
												<option icario_val=3 <?php echo $agnt_feedback['agent_logged_call'] == "Yes"?"selected":"";?> value="Yes">Yes</option>
												<option icario_val=3 <?php echo $agnt_feedback['agent_logged_call'] == "No"?"selected":"";?> value="No">No</option>
											</select>
										</td>
										<td>3</td>
										<td colspan=2><input type="text" class="form-control" name="data[cmt10]" value="<?php echo $agnt_feedback['cmt10'] ?>" disabled></td>
									</tr>
									<tr>
										<td style="text-align:left;" colspan=4>1.M.12 Agent followed script guidelines</td>
										<td>
											<select class="form-control icario_point mechanic" name="data[agent_followed_script]" disabled="">
												<option icario_val=12 <?php echo $agnt_feedback['agent_followed_script'] == "Yes"?"selected":"";?> value="Yes">Yes</option>
												<option icario_val=12 <?php echo $agnt_feedback['agent_followed_script'] == "No"?"selected":"";?> value="No">No</option>
											</select>
										</td>
										<td>12</td>
										<td colspan=2><input type="text" class="form-control" name="data[cmt11]" value="<?php echo $agnt_feedback['cmt11'] ?>" disabled></td>
									</tr>
									<tr>
										<td style="text-align:left;" colspan=4>NEW&#160;&#160; Agent gave correct and complete information</td>
										<td>
											<select class="form-control icario_point mechanic" name="data[agent_gave_correct]" disabled="">
												<option icario_val=5 <?php echo $agnt_feedback['agent_gave_correct'] == "Yes"?"selected":"";?> value="Yes">Yes</option>
												<option icario_val=5 <?php echo $agnt_feedback['agent_gave_correct'] == "No"?"selected":"";?> value="No">No</option>
											</select>
										</td>
										<td>5</td>
										<td colspan=2><input type="text" class="form-control" name="data[cmt12]" value="<?php echo $agnt_feedback['cmt12'] ?>" disabled></td>
									</tr>
									<tr>
										<td style="text-align:left;" colspan=4>1.M.13 Agent resolved all questions and concerns</td>
										<td>
											<select class="form-control icario_point mechanic" name="data[agent_resolved_all]" disabled="">
												<option icario_val=6 <?php echo $agnt_feedback['agent_resolved_all'] == "Yes"?"selected":"";?> value="Yes">Yes</option>
												<option icario_val=6 <?php echo $agnt_feedback['agent_resolved_all'] == "No"?"selected":"";?> value="No">No</option>
											</select>
										</td>
										<td>6</td>
										<td colspan=2><input type="text" class="form-control" name="data[cmt13]" value="<?php echo $agnt_feedback['cmt13'] ?>" disabled></td>
									</tr>
									<tr><td class="eml" colspan=8>SOFT SKILLS</td></tr>
									<tr>
										<td style="text-align:left;" colspan=4>2.S.1 Agent displayed active listening skills and probed for details effectively</td>
										<td>
											<select class="form-control icario_point soft_skill" name="data[agent_displayed_active]" disabled="">
												<option icario_val=3 <?php echo $agnt_feedback['agent_displayed_active'] == "Yes"?"selected":"";?> value="Yes">Yes</option>
												<option icario_val=3 <?php echo $agnt_feedback['agent_displayed_active'] == "No"?"selected":"";?> value="No">No</option>
											</select>
										</td>
										<td>3</td>
										<td colspan=2><input type="text" class="form-control" name="data[cmt14]" value="<?php echo $agnt_feedback['cmt14'] ?>" disabled></td>
									</tr>
									<tr>
										<td style="text-align:left;" colspan=4>NEW &#160;&#160; Agent Yesly engaged with the caller</td>
										<td>
											<select class="form-control icario_point soft_skill" name="data[agent_effectively_engaged]" disabled="">
												<option icario_val=3 <?php echo $agnt_feedback['agent_effectively_engaged'] == "Yes"?"selected":"";?> value="Yes">Yes</option>
												<option icario_val=3 <?php echo $agnt_feedback['agent_effectively_engaged'] == "No"?"selected":"";?> value="No">No</option>
											</select>
										</td>
										<td>3</td>
										<td colspan=2><input type="text" class="form-control" name="data[cmt15]" value="<?php echo $agnt_feedback['cmt15'] ?>" disabled></td>
									</tr>
									<tr>
										<td style="text-align:left;" colspan=4>2.S.2  Agent displayed a polite/appropriate tone</td>
										<td>
											<select class="form-control icario_point soft_skill" name="data[agent_displayed_polite]" disabled="">
												<option icario_val=3 <?php echo $agnt_feedback['agent_displayed_polite'] == "Yes"?"selected":"";?> value="Yes">Yes</option>
												<option icario_val=3 <?php echo $agnt_feedback['agent_displayed_polite'] == "No"?"selected":"";?> value="No">No</option>
											</select>
										</td>
										<td>3</td>
										<td colspan=2><input type="text" class="form-control" name="data[cmt16]" value="<?php echo $agnt_feedback['cmt16'] ?>" disabled></td>
									</tr>
									<tr>
										<td style="text-align:left;" colspan=4>2.S.3  Agent sounded confident and knowledgeable</td>
										<td>
											<select class="form-control icario_point soft_skill" name="data[agent_sounded_confident]" disabled="">
												<option icario_val=3 <?php echo $agnt_feedback['agent_sounded_confident'] == "Yes"?"selected":"";?> value="Yes">Yes</option>
												<option icario_val=3 <?php echo $agnt_feedback['agent_sounded_confident'] == "No"?"selected":"";?> value="No">No</option>
											</select>
										</td>
										<td>3</td>
										<td colspan=2><input type="text" class="form-control" name="data[cmt17]" value="<?php echo $agnt_feedback['cmt17'] ?>" disabled></td>
									</tr>
									<tr>
										<td style="text-align:left;" colspan=4>2.S.4  Agent did not interrupt or talk over the customer</td>
										<td>
											<select class="form-control icario_point soft_skill" name="data[agent_did_not_interrupt]" disabled="">
												<option icario_val=3 <?php echo $agnt_feedback['agent_did_not_interrupt'] == "Yes"?"selected":"";?> value="Yes">Yes</option>
												<option icario_val=3 <?php echo $agnt_feedback['agent_did_not_interrupt'] == "No"?"selected":"";?> value="No">No</option>
											</select>
										</td>
										<td>3</td>
										<td colspan=2><input type="text" class="form-control" name="data[cmt18]" value="<?php echo $agnt_feedback['cmt18'] ?>" disabled></td>
									</tr>
									<tr>
										<td style="text-align:left;" colspan=4>2.S.5  Agent used pleasing words and phrases</td>
										<td>
											<select class="form-control icario_point soft_skill" name="data[agent_used_pleasing]" disabled="">
												<option icario_val=3 <?php echo $agnt_feedback['agent_used_pleasing'] == "Yes"?"selected":"";?> value="Yes">Yes</option>
												<option icario_val=3 <?php echo $agnt_feedback['agent_used_pleasing'] == "No"?"selected":"";?> value="No">No</option>
											</select>
										</td>
										<td>3</td>
										<td colspan=2><input type="text" class="form-control" name="data[cmt19]" value="<?php echo $agnt_feedback['cmt19'] ?>" disabled></td>
									</tr>
									<tr>
										<td style="text-align:left;" colspan=4>2.S.6  Agent maintained call control</td>
										<td>
											<select class="form-control icario_point soft_skill" name="data[agent_maintained_call]" disabled="">
												<option icario_val=3 <?php echo $agnt_feedback['agent_maintained_call'] == "Yes"?"selected":"";?> value="Yes">Yes</option>
												<option icario_val=3 <?php echo $agnt_feedback['agent_maintained_call'] == "No"?"selected":"";?> value="No">No</option>
											</select>
										</td>
										<td>3</td>
										<td colspan=2><input type="text" class="form-control" name="data[cmt20]" value="<?php echo $agnt_feedback['cmt20'] ?>" disabled></td>
									</tr>
									<tr>
										<td style="text-align:left;" colspan=4>2.S.7  Agent used correct grammar avoided slang</td>
										<td>
											<select class="form-control icario_point soft_skill" name="data[agent_used_correct_grammer]" disabled="">
												<option icario_val=3 <?php echo $agnt_feedback['agent_used_correct_grammer'] == "Yes"?"selected":"";?> value="Yes">Yes</option>
												<option icario_val=3 <?php echo $agnt_feedback['agent_used_correct_grammer'] == "No"?"selected":"";?> value="No">No</option>
											</select>
										</td>
										<td>3</td>
										<td colspan=2><input type="text" class="form-control" name="data[cmt21]" value="<?php echo $agnt_feedback['cmt21'] ?>" disabled></td>
									</tr>
									<tr>
										<td style="text-align:left;" colspan=4>NEW &#160;&#160; Agent offered additional assistance</td>
										<td>
											<select class="form-control icario_point soft_skill" name="data[agent_offered_additional]" disabled="">
												<option icario_val=3 <?php echo $agnt_feedback['agent_offered_additional'] == "Yes"?"selected":"";?> value="Yes">Yes</option>
												<option icario_val=3 <?php echo $agnt_feedback['agent_offered_additional'] == "No"?"selected":"";?> value="No">No</option>
											</select>
										</td>
										<td>3</td>
										<td colspan=2><input type="text" class="form-control" name="data[cmt22]" value="<?php echo $agnt_feedback['cmt22'] ?>" disabled></td>
									</tr>
									<tr>
										<td style="text-align:left;" colspan=4>2.S.8  Agent used correct client closing</td>
										<td>
											<select class="form-control icario_point soft_skill" name="data[agent_used_correct_client]" disabled="">
												<option icario_val=3 <?php echo $agnt_feedback['agent_used_correct_client'] == "Yes"?"selected":"";?> value="Yes">Yes</option>
												<option icario_val=3 <?php echo $agnt_feedback['agent_used_correct_client'] == "No"?"selected":"";?> value="No">No</option>
											</select>
										</td>
										<td>3</td>
										<td colspan=2><input type="text" class="form-control" name="data[cmt23]" value="<?php echo $agnt_feedback['cmt23'] ?>" disabled></td>
									</tr>
									<tr><td class="eml" colspan=8>AUTO-FAIL</td></tr>
									<tr>
										<td style="text-align:left; color:red" colspan=4>3.A.1 Agent submitted escalation in system when disabled (Auto-Fail)</td>
										<td>
											<select class="form-control icario_point soft_skill" id="autoF1" name="data[agent_submitted_escalation]" disabled="">
												<option icario_val=0 <?php echo $agnt_feedback['agent_submitted_escalation']=="Yes"?"selected":"";?> value="Yes">Yes</option>
												<option icario_val=0 <?php echo $agnt_feedback['agent_submitted_escalation']=="No"?"selected":"";?> value="No">No</option>
											</select>
										</td>
										<td>0</td>
										<td colspan=2><input type="text" class="form-control" name="data[cmt24]" value="<?php echo $agnt_feedback['cmt24'] ?>" disabled></td>
									</tr>
									<tr>
										<td style="text-align:left; color:red" colspan=4>3.A.2  Agent was not rude or inappropriate? (Auto-Fail)</td>
										<td>
											<select class="form-control icario_point soft_skill" id="autoF2" name="data[agent_was_not_rude]" disabled="">
												<option icario_val=0 <?php echo $agnt_feedback['agent_was_not_rude']=="No"?"selected":"";?> value="No">No</option>
												<option icario_val=0 <?php echo $agnt_feedback['agent_was_not_rude']=="Yes"?"selected":"";?> value="Yes">Yes</option>
											</select>
										</td>
										<td>0</td>
										<td colspan=2><input type="text" class="form-control" name="data[cmt25]" value="<?php echo $agnt_feedback['cmt25'] ?>" disabled></td>
									</tr>
									<tr>
										<td style="text-align:left; color:red" colspan=4>3.A.3 Agent used the correct client name during the call (Auto-Fail)</td>
										<td>
											<select class="form-control icario_point soft_skill" id="autoF3" name="data[agent_used_the_correct]" disabled="">
												<option icario_val=0 <?php echo $agnt_feedback['agent_used_the_correct'] == "No"?"selected":"";?> value="No">No</option>
												<option icario_val=0 <?php echo $agnt_feedback['agent_used_the_correct'] == "Yes"?"selected":"";?> value="Yes">Yes</option>
											</select>
										</td>
										<td>0</td>
										<td colspan=2><input type="text" class="form-control" name="data[cmt26]" value="<?php echo $agnt_feedback['cmt26'] ?>" disabled></td>
									</tr>
									<tr>
										<td style="text-align:left; color:red" colspan=4>NEW&#160;&#160; Agent did not demonstrate call avoidance (Auto-Fail)</td>
										<td>
											<select class="form-control icario_point soft_skill" id="autoF4" name="data[agent_did_not_demonstrate]" disabled="">
												<option icario_val=0 <?php echo $agnt_feedback['agent_did_not_demonstrate'] == "No"?"selected":"";?> value="No">No</option>
												<option icario_val=0 <?php echo $agnt_feedback['agent_did_not_demonstrate'] == "Yes"?"selected":"";?> value="Yes">Yes</option>
											</select>
										</td>
										<td>0</td>
										<td colspan=2><input type="text" class="form-control" name="data[cmt27]" value="<?php echo $agnt_feedback['cmt27'] ?>" disabled></td>
									</tr>
									<tr>
										<td style="text-align:left; color:red" colspan=4>NEW&#160;&#160; Agent properly authenticated the member</td>
										<td>
											<select class="form-control icario_point soft_skill" id="autoF5" name="data[properly_authenticated_member]" disabled="">
												<option icario_val=0 <?php echo $agnt_feedback['properly_authenticated_member'] == "No"?"selected":"";?> value="No">No</option>
												<option icario_val=0 <?php echo $agnt_feedback['properly_authenticated_member'] == "Yes"?"selected":"";?> value="Yes">Yes</option>
											</select>
										</td>
										<td>0</td>
										<td colspan=2><input type="text" class="form-control" name="data[cmt28]" value="<?php echo $agnt_feedback['cmt28'] ?>" disabled></td>
									</tr>
									<tr><td class="eml" colspan=8>BONUS POINTS</td></tr>
									<tr>
										<td style="text-align:left;" colspan=4>4.B.1The agent received direct appreciation from the member</td>
										<td>
											<select class="form-control icario_point" id="autoF6" name="data[the_agent_received]" disabled="">
												<option icario_val=0 <?php echo $agnt_feedback['the_agent_received'] == "No"?"selected":"";?> value="No">No</option>
												<option icario_val=5 <?php echo $agnt_feedback['the_agent_received'] == "Yes"?"selected":"";?> value="Yes">Yes</option>
											</select>
										</td>
										<td>5</td>
										<td colspan=2><input type="text" class="form-control" name="data[cmt29]" value="<?php echo $agnt_feedback['cmt29'] ?>" disabled></td>
									</tr>

									<tr><td class="eml" colspan=8>TRACKING</td></tr>
									<tr>
										<td style="text-align:left;" colspan=4>5.T.1 Is the recording quality acceptable? (Tracking)</td>
										<td>
											<select class="form-control icario_point" name="data[is_the_recording]" disabled="">
												<option icario_val=0 <?php echo $agnt_feedback['is_the_recording'] == "Yes"?"selected":"";?> value="Yes">Yes</option>
												<option icario_val=0 <?php echo $agnt_feedback['is_the_recording'] == "No"?"selected":"";?> value="No">No</option>
											</select>
										</td>
										<td>0</td>
										<td colspan=2><input type="text" class="form-control" name="data[cmt30]" value="<?php echo $agnt_feedback['cmt30'] ?>" disabled></td>
									</tr>
									<tr>
										<td style="text-align:left;" colspan=4>5.T.2 Would play this for the client?  (Tracking)</td>
										<td>
											<select class="form-control icario_point" name="data[would_play_this]" disabled="">
												<option icario_val=0 <?php echo $agnt_feedback['would_play_this'] == "Yes"?"selected":"";?> value="Yes">Yes</option>
												<option icario_val=0 <?php echo $agnt_feedback['would_play_this'] == "No"?"selected":"";?> value="No">No</option>
											</select>
										</td>
										<td>0</td>
										<td colspan=2><input type="text" class="form-control" name="data[cmt31]" value="<?php echo $agnt_feedback['cmt31'] ?>" disabled></td>
									</tr>


									<tr>
										<td>Call Summary:</td>
										<td colspan="2"><textarea class="form-control"   name="data[call_summary]" disabled=""><?php echo $agnt_feedback['call_summary'] ?></textarea></td>
										<td>Feedback:</td>
										<td colspan="2"><textarea class="form-control"   name="data[feedback]" disabled=""><?php echo $agnt_feedback['feedback'] ?></textarea></td>
									</tr>

									<tr>
										<td colspan=2>Upload Files</td>
										<?php if($pnid==0){ ?>
											<td colspan=4><input type="file" multiple class="form-control" id="attach_file" name="attach_file[]"></td>
										<?php }else{
											if($agnt_feedback['attach_file']!=''){ ?>
												<td colspan=4>
													<?php $attach_file = explode(",",$agnt_feedback['attach_file']);
													 foreach($attach_file as $mp){ ?>
														<audio controls='' style="background-color:#607F93">
														  <source src="<?php echo base_url(); ?>qa_files/qa_icario/<?php echo $mp; ?>" type="audio/ogg">
														  <source src="<?php echo base_url(); ?>qa_files/qa_icario/<?php echo $mp; ?>" type="audio/mpeg">
														</audio> </br>
													 <?php } ?>
												</td>
										<?php }else{
												echo '<td colspan=6><b>No Files</b></td>';
											  }
										} ?>
									</tr>

									<?php } ?>

                                     <?php if($campaign=='icario'){ ?>
												<tr>
										<tr>
										<td style="font-size:18px; font-weight:bold" colspan="">Customer Score</td>
										<td style="font-size:18px; font-weight:bold" colspan=""><input type="text" readonly class="form-control" id="cust_score_percent" name="data[cust_score]" value="<?php echo $agnt_feedback['cust_score'] ?>"></td><td style="font-size:18px; font-weight:bold" colspan="">Business Score</td>
										<td style="font-size:18px; font-weight:bold" colspan=""><input type="text" readonly class="form-control" id="busi_score_percent" name="data[busi_score]" value="<?php echo $agnt_feedback['busi_score'] ?>"></td>
										<td style="font-size:18px; font-weight:bold" colspan="">Compliance Score:</td>
										<td style="font-size:18px; font-weight:bold" colspan=""><input type="text" readonly class="form-control" id="comp_score_percent" name="data[comp_score]" value="<?php echo $agnt_feedback['comp_score'] ?>"></td>
									</tr>
									<tr>
										<td style="font-size:16px; font-weight:bold" colspan="1">Earned Score</td>
										<td><input type="text" readonly class="form-control" id="fb_earnedScore1" name="data[earned_score]" value="<?php echo $agnt_feedback['earned_score'] ?>" disabled></td><td style="font-size:16px; font-weight:bold" colspan="2">Possible Score</td>
										<td colspan="4"><input type="text" class="form-control" id="fb_possibleScore1" name="data[possible_score]" value="<?php echo $agnt_feedback['possible_score'] ?>" disabled></td>
										<td style="font-weight:bold; font-size:16px; text-align:right" colspan="1">Overall Score:</td>
										<td colspan="2"><input type="text" readonly id="icario_overallScore" name="data[overall_score]" class="form-control icarioAutofail" style="font-weight:bold" value="<?php echo $agnt_feedback['overall_score'] ?>" disabled></td>
									</tr>
									
									<tr style="height:25px; font-weight:bold; background-color:#85C1E9">
										<td colspan=4>Item</td>
										<td  colspan=1>Rating</td>
										<td>Coefficient</td>
										<td colspan=2>Proposition</td>
									</tr>

									<tr><td class="eml" colspan=8>MECHANICS</td></tr>
									<tr>
										<td style="text-align:left;" colspan=4>1.M.1  Agent greeted the member, used correct client opening, introduced themselves, and continued following the basic scripting to open the call</td>
										<td>
											<select class="form-control icario_point  mechanic" id="" name="data[mechanics1]" disabled>
												<option icario_val=6 <?php echo $agnt_feedback['mechanics1'] == "Yes"?"selected":"";?> value="Yes">Yes</option>
												<option icario_val=6 <?php echo $agnt_feedback['mechanics1'] == "No"?"selected":"";?> value="No">No</option>
											</select>
										</td>
										<td>6</td>
										<td colspan=4><input type="text" class="form-control" name="data[cmt1]" value="<?php echo $agnt_feedback['cmt1'] ?>" disabled></td>
									</tr>
									<tr>
										<td style="text-align:left;" colspan=4>1.M.2 Agent properly authenticated the member</td>
										<td>
											<select class="form-control icario_point mechanic" name="data[mechanics2]" disabled>
												<option icario_val=5 <?php echo $agnt_feedback['mechanics2'] == "Yes"?"selected":"";?> value="Yes">Yes</option>
												<option icario_val=5 <?php echo $agnt_feedback['mechanics2'] == "No"?"selected":"";?> value="No">No</option>
											</select>
										</td>
										<td>5</td>
										<td colspan=4><input type="text" class="form-control" name="data[cmt2]" value="<?php echo $agnt_feedback['cmt2'] ?>" disabled></td>
									</tr>
									<tr>
										<td style="text-align:left;" colspan=4>1.M.3  Agent collected Health Care information/Responses correctly</td>
										<td>
											<select class="form-control icario_point mechanic" name="data[mechanics3]" disabled>
												<option icario_val=5 <?php echo $agnt_feedback['mechanics3'] == "Yes"?"selected":"";?> value="Yes">Yes</option>
												<option icario_val=5 <?php echo $agnt_feedback['mechanics3'] == "No"?"selected":"";?> value="No">No</option>
											</select>
										</td>
										<td>5</td>
										<td colspan=4><input type="text" class="form-control" name="data[cmt3]" value="<?php echo $agnt_feedback['cmt3'] ?>" disabled></td>
									</tr>
									
									<tr>
										<td style="text-align:left;" colspan=4>1.M.4  Agent gave correct and complete information</td>
										<td>
											<select class="form-control icario_point mechanic" name="data[mechanics4]" disabled>
												<option icario_val=5 <?php echo $agnt_feedback['mechanics4'] == "Yes"?"selected":"";?> value="Yes">Yes</option>
												<option icario_val=5 <?php echo $agnt_feedback['mechanics4'] == "No"?"selected":"";?> value="No">No</option>
											</select>
										</td>
										<td>5</td>
										<td colspan=4><input type="text" class="form-control" name="data[cmt4]" value="<?php echo $agnt_feedback['cmt4'] ?>" disabled></td>
									</tr>
									<tr>
										<td style="text-align:left;" colspan=4>1.M.5  Agent gave correct incentive information </td>
										<td>
											<select class="form-control icario_point mechanic" name="data[mechanics5]" disabled>
												<option icario_val=5 <?php echo $agnt_feedback['mechanics5'] == "Yes"?"selected":"";?> value="Yes">Yes</option>
												<option icario_val=5 <?php echo $agnt_feedback['mechanics5'] == "No"?"selected":"";?> value="No">No</option>
											</select>
										</td>
										<td>5</td>
										<td colspan=4><input type="text" class="form-control" name="data[cmt5]" value="<?php echo $agnt_feedback['cmt5'] ?>" disabled></td>
									</tr>
					
									<tr>
										<td style="text-align:left;" colspan=4>1.M.6 Agent provided online, self-service information</td>
										<td>
											<select class="form-control icario_point mechanic" name="data[mechanics6]" disabled>
												<option icario_val=3 <?php echo $agnt_feedback['mechanics6'] == "Yes"?"selected":"";?> value="Yes">Yes</option>
												<option icario_val=3 <?php echo $agnt_feedback['mechanics6'] == "No"?"selected":"";?> value="No">No</option>
											</select>
										</td>
										<td>3</td>
										<td colspan=4><input type="text" class="form-control" name="data[cmt6]" value="<?php echo $agnt_feedback['cmt6'] ?>" disabled></td>
									</tr>
									<tr>
										<td style="text-align:left;" colspan=4>1.M.7 Agent logged call correctly in all appropriate systems </td>
										<td>
											<select class="form-control icario_point mechanic" name="data[mechanics7]" disabled>
												<option icario_val=3 <?php echo $agnt_feedback['mechanics7'] == "Yes"?"selected":"";?> value="Yes">Yes</option>
												<option icario_val=3 <?php echo $agnt_feedback['mechanics7'] == "No"?"selected":"";?> value="No">No</option>
											</select>
										</td>
										<td>3</td>
										<td colspan=4><input type="text" class="form-control" name="data[cmt7]" value="<?php echo $agnt_feedback['cmt7'] ?>" disabled></td>
									</tr>
									<tr>
										<td style="text-align:left;" colspan=4>1.M.8  Agent followed script guidelines</td>
										<td>
											<select class="form-control icario_point mechanic" name="data[mechanics8]" disabled>
												<option icario_val=12 <?php echo $agnt_feedback['mechanics8'] == "Yes"?"selected":"";?> value="Yes">Yes</option>
												<option icario_val=12 <?php echo $agnt_feedback['mechanics8'] == "No"?"selected":"";?> value="No">No</option>
											</select>
										</td>
										<td>12</td>
										<td colspan=4><input type="text" class="form-control" name="data[cmt8]" value="<?php echo $agnt_feedback['cmt8'] ?>" disabled></td>
									</tr>
									<tr>
										<td style="text-align:left;" colspan=4>1.M.9  Agent resolved all questions and concerns</td>
										<td>
											<select class="form-control icario_point mechanic" name="data[mechanics9]" disabled>
												<option icario_val=6 <?php echo $agnt_feedback['mechanics9'] == "Yes"?"selected":"";?> value="Yes">Yes</option>
												<option icario_val=6 <?php echo $agnt_feedback['mechanics9'] == "No"?"selected":"";?> value="No">No</option>
											</select>
										</td>
										<td>6</td>
										<td colspan=4><input type="text" class="form-control" name="data[cmt9]" value="<?php echo $agnt_feedback['cmt9'] ?>" disabled></td>
									</tr>
									
									<tr><td class="eml" colspan=8>SOFT SKILLS</td></tr>
									<tr>
										<td style="text-align:left;" colspan=4>2.S.1 Agent displayed active listening skills and probed for details effectively</td>
										<td>
											<select class="form-control icario_point soft_skill" name="data[soft_skills1]" disabled>
												<option icario_val=4 <?php echo $agnt_feedback['soft_skills1'] == "Yes"?"selected":"";?> value="Yes">Yes</option>
												<option icario_val=4 <?php echo $agnt_feedback['soft_skills1'] == "No"?"selected":"";?> value="No">No</option>
											</select>
										</td>
										<td>4</td>
										<td colspan=4><input type="text" class="form-control" name="data[cmt10]" value="<?php echo $agnt_feedback['cmt10'] ?>" disabled></td>
									</tr>
									<tr>
										<td style="text-align:left;" colspan=4>2.S.2 Agent effectively engaged with the caller</td>
										<td>
											<select class="form-control icario_point soft_skill" name="data[soft_skills2]" disabled>
												<option icario_val=4 <?php echo $agnt_feedback['soft_skills2'] == "Yes"?"selected":"";?> value="Yes">Yes</option>
												<option icario_val=4 <?php echo $agnt_feedback['soft_skills2'] == "No"?"selected":"";?> value="No">No</option>
											</select>
										</td>
										<td>4</td>
										<td colspan=4><input type="text" class="form-control" name="data[cmt11]" value="<?php echo $agnt_feedback['cmt11'] ?>" disabled></td>
									</tr>
									<tr>
										<td style="text-align:left;" colspan=4>2.S.3  Agent maintained appropriate pace with caller</td>
										<td>
											<select class="form-control icario_point soft_skill" name="data[soft_skills3]" disabled>
												<option icario_val=4 <?php echo $agnt_feedback['soft_skills3'] == "Yes"?"selected":"";?> value="Yes">Yes</option>
												<option icario_val=4 <?php echo $agnt_feedback['soft_skills3'] == "No"?"selected":"";?> value="No">No</option>
											</select>
										</td>
										<td>4</td>
										<td colspan=4><input type="text" class="form-control" name="data[cmt12]" value="<?php echo $agnt_feedback['cmt12'] ?>" disabled></td>
									</tr>
									<tr>
										<td style="text-align:left;" colspan=4>2.S.4  Agent Displayed a polite and appropriate tone</td>
										<td>
											<select class="form-control icario_point soft_skill" name="data[soft_skills4]" disabled>
												<option icario_val=4 <?php echo $agnt_feedback['soft_skills4'] == "Yes"?"selected":"";?> value="Yes">Yes</option>
												<option icario_val=4 <?php echo $agnt_feedback['soft_skills4'] == "No"?"selected":"";?> value="No">No</option>
											</select>
										</td>
										<td>4</td>
										<td colspan=4><input type="text" class="form-control" name="data[cmt13]13" value="<?php echo $agnt_feedback['cmt13'] ?>" disabled></td>
									</tr>
									<tr>
										<td style="text-align:left;" colspan=4>2.S.5  Agent sounded confident and knowledgeable</td>
										<td>
											<select class="form-control icario_point soft_skill" name="data[soft_skills5]" disabled>
												<option icario_val=4 <?php echo $agnt_feedback['soft_skills5'] == "Yes"?"selected":"";?> value="Yes">Yes</option>
												<option icario_val=4 <?php echo $agnt_feedback['soft_skills5'] == "No"?"selected":"";?> value="No">No</option>
											</select>
										</td>
										<td>4</td>
										<td colspan=4><input type="text" class="form-control" name="data[cmt14]" value="<?php echo $agnt_feedback['cmt14'] ?>" disabled></td>
									</tr>
									<tr>
										<td style="text-align:left;" colspan=4>2.S.6  Agent did not interrupt or talk over the member</td>
										<td>
											<select class="form-control icario_point soft_skill" name="data[soft_skills6]" disabled>
												<option icario_val=4 <?php echo $agnt_feedback['soft_skills6'] == "Yes"?"selected":"";?> value="Yes">Yes</option>
												<option icario_val=4 <?php echo $agnt_feedback['soft_skills6'] == "No"?"selected":"";?> value="No">No</option>
											</select>
										</td>
										<td>4</td>
										<td colspan=4><input type="text" class="form-control" name="data[cmt15]" value="<?php echo $agnt_feedback['cmt15'] ?>" disabled></td>
									</tr>
									<tr>
										<td style="text-align:left;" colspan=4>2.S.7  Agent used pleasing words and phrases between member responses</td>
										<td>
											<select class="form-control icario_point soft_skill" name="data[soft_skills7]" disabled>
												<option icario_val=4 <?php echo $agnt_feedback['soft_skills7'] == "Yes"?"selected":"";?> value="Yes">Yes</option>
												<option icario_val=4 <?php echo $agnt_feedback['soft_skills7'] == "No"?"selected":"";?> value="No">No</option>
											</select>
										</td>
										<td>4</td>
										<td colspan=4><input type="text" class="form-control" name="data[cmt16]" value="<?php echo $agnt_feedback['cmt16'] ?>" disabled></td>
									</tr>
									<tr>
										<td style="text-align:left;" colspan=4>2.S.8  Agent used pleasing words and phrases at beginning and end of call</td>
										<td>
											<select class="form-control icario_point soft_skill" name="data[soft_skills8]" disabled>
												<option icario_val=4 <?php echo $agnt_feedback['soft_skills8'] == "Yes"?"selected":"";?> value="Yes">Yes</option>
												<option icario_val=4 <?php echo $agnt_feedback['soft_skills8'] == "No"?"selected":"";?> value="No">No</option>
											</select>
										</td>
										<td>4</td>
										<td colspan=4><input type="text" class="form-control" name="data[cmt17]" value="<?php echo $agnt_feedback['cmt17'] ?>" disabled></td>
									</tr>
									<tr>
										<td style="text-align:left;" colspan=4>2.S.9 Agent maintained call control</td>
										<td>
											<select class="form-control icario_point soft_skill" name="data[soft_skills9]" disabled>
												<option icario_val=4 <?php echo $agnt_feedback['soft_skills9'] == "Yes"?"selected":"";?> value="Yes">Yes</option>
												<option icario_val=4 <?php echo $agnt_feedback['soft_skills9'] == "No"?"selected":"";?> value="No">No</option>
											</select>
										</td>
										<td>4</td>
										<td colspan=4><input type="text" class="form-control" name="data[cmt18]" value="<?php echo $agnt_feedback['cmt18'] ?>"></td>
									</tr>
									<tr>
										<td style="text-align:left;" colspan=4>2.S.10  Agent managed silence/hold times</td>
										<td>
											<select class="form-control icario_point soft_skill" name="data[soft_skills10]" disabled>
												<option icario_val=4 <?php echo $agnt_feedback['soft_skills10'] == "Yes"?"selected":"";?> value="Yes">Yes</option>
												<option icario_val=4 <?php echo $agnt_feedback['soft_skills10'] == "No"?"selected":"";?> value="No">No</option>
											</select>
										</td>
										<td>4</td>
										<td colspan=4><input type="text" class="form-control" name="data[cmt19]" value="<?php echo $agnt_feedback['cmt19'] ?>" disabled></td>
									</tr>
									<tr>
										<td style="text-align:left;" colspan=4>2.S.11  Agent used correct grammar avoided slang</td>
										<td>
											<select class="form-control icario_point soft_skill" name="data[soft_skills11]" disabled>
												<option icario_val=4 <?php echo $agnt_feedback['soft_skills11'] == "Yes"?"selected":"";?> value="Yes">Yes</option>
												<option icario_val=4 <?php echo $agnt_feedback['soft_skills11'] == "No"?"selected":"";?> value="No">No</option>
											</select>
										</td>
										<td>4</td>
										<td colspan=4><input type="text" class="form-control" name="data[cmt20]" value="<?php echo $agnt_feedback['cmt20'] ?>" disabled></td>
									</tr>
									<tr>
										<td style="text-align:left;" colspan=4>2.S.12  Agent used correct client closing</td>
										<td>
											<select class="form-control icario_point soft_skill" name="data[soft_skills12]" disabled>
												<option icario_val=6 <?php echo $agnt_feedback['soft_skills12'] == "Yes"?"selected":"";?> value="Yes">Yes</option>
												<option icario_val=6 <?php echo $agnt_feedback['soft_skills12'] == "No"?"selected":"";?> value="No">No</option>
											</select>
										</td>
										<td>6</td>
										<td colspan=4><input type="text" class="form-control" name="data[cmt21]" value="<?php echo $agnt_feedback['cmt21'] ?>" disabled></td>
									</tr>


									<tr><td class="eml" colspan=8>AUTO-FAIL</td></tr>
									<tr>
										<td style="text-align:left; color:red" colspan=4>3.A.1 Agent submitted escalation in system when required (Auto-Fail)</td>
										<td>
											<select class="form-control icario_point soft_skill" id="icarioF1" name="data[auto_fail1]" disabled>
												<option icario_val=0 <?php echo $agnt_feedback['auto_fail1']=="Yes"?"selected":"";?> value="Yes">Yes</option>
												<option icario_val=0 <?php echo $agnt_feedback['auto_fail1']=="No"?"selected":"";?> value="No">No</option>
											</select>
										</td>
										<td>0</td>
										<td colspan=4><input type="text" class="form-control" name="data[cmt22]" value="<?php echo $agnt_feedback['cmt22'] ?>" disabled></td>
									</tr>
									<tr>
										<td style="text-align:left; color: red;" colspan=4>3.A.2  Agent was not rude or inappropriate? (Auto-Fail)</td>
										<td>
											<select class="form-control icario_point soft_skill" id="icarioF2" name="data[auto_fail2]" disabled>
												<option icario_val=0 <?php echo $agnt_feedback['auto_fail2']=="Yes"?"selected":"";?> value="Yes">Yes</option>
												<option icario_val=0 <?php echo $agnt_feedback['auto_fail2']=="No"?"selected":"";?> value="No">No</option>
												
											</select>
										</td>
										<td>0</td>
										<td colspan=4><input type="text" class="form-control" name="data[cmt23]" value="<?php echo $agnt_feedback['cmt23'] ?>" disabled></td>
									</tr>
									<tr>
										<td style="text-align:left; color: red;" colspan=4>3.A.3 Agent used incorrect client name during the call (Auto-Fail)</td>
										<td>
											<select class="form-control icario_point soft_skill" id="icarioF3" name="data[auto_fail3]" disabled>
												<option icario_val=0 <?php echo $agnt_feedback['auto_fail3'] == "Yes"?"selected":"";?> value="Yes">Yes</option>
												<option icario_val=0 <?php echo $agnt_feedback['auto_fail3'] == "No"?"selected":"";?> value="No">No</option>
												
											</select>
										</td>
										<td>0</td>
										<td colspan=4><input type="text" class="form-control" name="data[cmt24]" value="<?php echo $agnt_feedback['cmt24'] ?>" disabled></td>
									</tr>
									<tr>
										<td style="text-align:left; color:red" colspan=4>3.A.4 Agent did not demonstrate call avoidance (Auto-Fail)</td>
										<td>
											<select class="form-control icario_point soft_skill" id="icarioF4" name="data[auto_fail4]" disabled>
												<option icario_val=0 <?php echo $agnt_feedback['auto_fail4'] == "Yes"?"selected":"";?> value="Yes">Yes</option>
												<option icario_val=0 <?php echo $agnt_feedback['auto_fail4'] == "No"?"selected":"";?> value="No">No</option>
												
											</select>
										</td>
										<td>0</td>
										<td colspan=4><input type="text" class="form-control" name="data[cmt25]" value="<?php echo $agnt_feedback['cmt25'] ?>" disabled></td>
									</tr>
									<tr>
										<td style="text-align:left; color:red" colspan=4>3.A.5 Agent properly authenticated the member  (Auto-Fail)</td>
										<td>
											<select class="form-control icario_point soft_skill" id="icarioF5" name="data[auto_fail5]" disabled>
												<option icario_val=0 <?php echo $agnt_feedback['auto_fail5'] == "Yes"?"selected":"";?> value="Yes">Yes</option>
												<option icario_val=0 <?php echo $agnt_feedback['auto_fail5'] == "No"?"selected":"";?> value="No">No</option>
												
											</select>
										</td>
										<td>0</td>
										<td colspan=4><input type="text" class="form-control" name="data[cmt26]" value="<?php echo $agnt_feedback['cmt26'] ?>" disabled></td>
									</tr>


									<tr>
										<td>Call Summary:</td>
										<td colspan="2"><textarea class="form-control"   name="data[call_summary]" disabled=""><?php echo $agnt_feedback['call_summary'] ?></textarea></td>
										<td>Feedback:</td>
										<td colspan="4"><textarea class="form-control"   name="data[feedback]" disabled=""><?php echo $agnt_feedback['feedback'] ?></textarea></td>
									</tr>

									<tr>
										<td colspan=2>Upload Files</td>
										<?php if($pnid==0){ ?>
											<td colspan=4><input type="file" multiple class="form-control" id="attach_file" name="attach_file[]"></td>
										<?php }else{
											if($agnt_feedback['attach_file']!=''){ ?>
												<td colspan=4>
													<?php $attach_file = explode(",",$agnt_feedback['attach_file']);
													 foreach($attach_file as $mp){ ?>
														<audio controls='' style="background-color:#607F93">
														  <source src="<?php echo base_url(); ?>qa_files/qa_icario/<?php echo $mp; ?>" type="audio/ogg">
														  <source src="<?php echo base_url(); ?>qa_files/qa_icario/<?php echo $mp; ?>" type="audio/mpeg">
														</audio> </br>
													 <?php } ?>
												</td>
										<?php }else{
												echo '<td colspan=6><b>No Files</b></td>';
											  }
										} ?>
									</tr>
										<?php } ?>



										<?php if($campaign=='ica'){ ?>
												<tr>
										<tr>
										<td style="font-size:18px; font-weight:bold" colspan="">Customer Score</td>
										<td style="font-size:18px; font-weight:bold" colspan=""><input type="text" readonly class="form-control" id="cust_score_percent" name="data[cust_score]" value="<?php echo $agnt_feedback['cust_score'] ?>"></td><td style="font-size:18px; font-weight:bold" colspan="">Business Score</td>
										<td style="font-size:18px; font-weight:bold" colspan="2"><input type="text" readonly class="form-control" id="busi_score_percent" name="data[busi_score]" value="<?php echo $agnt_feedback['busi_score'] ?>"></td>
										<td style="font-size:18px; font-weight:bold" colspan="">Compliance Score:</td>
										<td style="font-size:18px; font-weight:bold" colspan="2"><input type="text" readonly class="form-control" id="comp_score_percent" name="data[comp_score]" value="<?php echo $agnt_feedback['comp_score'] ?>"></td>
									</tr>
									<tr>
										<td style="font-size:16px; font-weight:bold" colspan="1">Earned Score</td>
										<td><input type="text" readonly class="form-control" id="fb_earnedScore1" name="data[earned_score]" value="<?php echo $agnt_feedback['earned_score'] ?>"></td><td style="font-size:16px; font-weight:bold" colspan="1">Possible Score</td>
										<td colspan="2"><input type="text" readonly class="form-control" id="fb_possibleScore1" name="data[possible_score]" value="<?php echo $agnt_feedback['possible_score'] ?>"></td>
										<td style="font-weight:bold; font-size:16px; text-align:right">Overall Score:</td>
										<td colspan="2"><input type="text" readonly id="icario_overallScore" name="data[overall_score]" class="form-control icarioAutofail" style="font-weight:bold" value="<?php echo $agnt_feedback['overall_score'] ?>"></td>
									</tr>
									
									<tr style="height:25px; font-weight:bold; background-color:#85C1E9">
										<td colspan=4>Item</td>
										
										<td>Coefficient</td>
										<td>Rating</td>
										<td colspan=2>Proposition</td>
									</tr>

									<tr><td class="eml" colspan=8>MECHANICS</td></tr>
									<tr>
										<td style="text-align:left;" colspan=4>1.M.1 Agent greeted the member, used correct client opening, introduced themselves, and continued following the basic scripting to open the call</td>
										<td>
											<select class="form-control icario_point  mechanic" id="" name="data[mechanics1]" disabled="">
												<option icario_val=6 <?php echo $agnt_feedback['mechanics1'] == "Yes"?"selected":"";?> value="Yes">Yes</option>
												<option icario_val=6 <?php echo $agnt_feedback['mechanics1'] == "No"?"selected":"";?> value="No">No</option>
												<option icario_val=6 <?php echo $agnt_feedback['mechanics1'] == "N/A"?"selected":"";?> value="N/A">N/A</option>
											</select>
										</td>
										<td>6</td>
										<td colspan=2><input type="text" class="form-control" name="data[cmt1]" value="<?php echo $agnt_feedback['cmt1'] ?>"disabled></td>
									</tr>
									<tr>
										<td style="text-align:left;" colspan=4>1.M.2 Agent properly authenticated the member</td>
										<td>
											<select class="form-control icario_point mechanic" name="data[mechanics2]" disabled>
												<option icario_val=5 <?php echo $agnt_feedback['mechanics2'] == "Yes"?"selected":"";?> value="Yes">Yes</option>
												<option icario_val=5 <?php echo $agnt_feedback['mechanics2'] == "No"?"selected":"";?> value="No">No</option>
												<option icario_val=5 <?php echo $agnt_feedback['mechanics2'] == "N/A"?"selected":"";?> value="N/A">N/A</option>
											</select>
										</td>
										<td>5</td>
										<td colspan=2><input type="text" class="form-control" name="data[cmt2]" value="<?php echo $agnt_feedback['cmt2'] ?>"disabled></td>
									</tr>
									<tr>
										<td style="text-align:left;" colspan=4>1.M.3 Did Agent attempt to update Email/SMS/IVR/Phone Number?</td>
										<td>
											<select class="form-control icario_point mechanic" name="data[mechanics3]" disabled>
												<option icario_val=5 <?php echo $agnt_feedback['mechanics3'] == "Yes"?"selected":"";?> value="Yes">Yes</option>
												<option icario_val=5 <?php echo $agnt_feedback['mechanics3'] == "No"?"selected":"";?> value="No">No</option>
												<option icario_val=5 <?php echo $agnt_feedback['mechanics3'] == "N/A"?"selected":"";?> value="N/A">N/A</option>
											</select>
										</td>
										<td>5</td>
										<td colspan=2><input type="text" class="form-control" name="data[cmt3]" value="<?php echo $agnt_feedback['cmt3'] ?>"disabled></td>
									</tr>
									
									<tr>
										<td style="text-align:left;" colspan=4>1.M.4 Agent gave Health Care Activity info Correctly</td>
										<td>
											<select class="form-control icario_point mechanic" name="data[mechanics4]" disabled>
												<option icario_val=5 <?php echo $agnt_feedback['mechanics4'] == "Yes"?"selected":"";?> value="Yes">Yes</option>
												<option icario_val=5 <?php echo $agnt_feedback['mechanics4'] == "No"?"selected":"";?> value="No">No</option>
												<option icario_val=5 <?php echo $agnt_feedback['mechanics4'] == "N/A"?"selected":"";?> value="N/A">N/A</option>
											</select>
										</td>
										<td>5</td>
										<td colspan=2><input type="text" class="form-control" name="data[cmt4]" value="<?php echo $agnt_feedback['cmt4'] ?>"disabled></td>
									</tr>
									<tr>
										<td style="text-align:left;" colspan=4>1.M.5 Agent collected Health Care Activity information correctly</td>
										<td>
											<select class="form-control icario_point mechanic" name="data[mechanics5]" disabled>
												<option icario_val=5 <?php echo $agnt_feedback['mechanics5'] == "Yes"?"selected":"";?> value="Yes">Yes</option>
												<option icario_val=5 <?php echo $agnt_feedback['mechanics5'] == "No"?"selected":"";?> value="No">No</option>
												<option icario_val=5 <?php echo $agnt_feedback['mechanics5'] == "N/A"?"selected":"";?> value="N/A">N/A</option>
											</select>
										</td>
										<td>5</td>
										<td colspan=2><input type="text" class="form-control" name="data[cmt5]" value="<?php echo $agnt_feedback['cmt5'] ?>"disabled></td>
									</tr>
					
									<tr>
										<td style="text-align:left;" colspan=4>1.M.6 Agent gave correct Gift Card information</td>
										<td>
											<select class="form-control icario_point mechanic" name="data[mechanics6]" disabled>
												<option icario_val=5 <?php echo $agnt_feedback['mechanics6'] == "Yes"?"selected":"";?> value="Yes">Yes</option>
												<option icario_val=5 <?php echo $agnt_feedback['mechanics6'] == "No"?"selected":"";?> value="No">No</option>
												<option icario_val=5 <?php echo $agnt_feedback['mechanics6'] == "N/A"?"selected":"";?> value="N/A">N/A</option>
											</select>
										</td>
										<td>5</td>
										<td colspan=2><input type="text" class="form-control" name="data[cmt6]" value="<?php echo $agnt_feedback['cmt6'] ?>"disabled></td>
									</tr>
									<tr>
										<td style="text-align:left;" colspan=4>1.M.7 Agent offered to provide information on the Health Care Activities that the member has remaining to complete</td>
										<td>
											<select class="form-control icario_point mechanic" name="data[mechanics7]" disabled>
												<option icario_val=10 <?php echo $agnt_feedback['mechanics7'] == "Yes"?"selected":"";?> value="Yes">Yes</option>
												<option icario_val=10 <?php echo $agnt_feedback['mechanics7'] == "No"?"selected":"";?> value="No">No</option>
												<option icario_val=10 <?php echo $agnt_feedback['mechanics7'] == "N/A"?"selected":"";?> value="N/A">N/A</option>
											</select>
										</td>
										<td>10</td>
										<td colspan=2><input type="text" class="form-control" name="data[cmt7]" value="<?php echo $agnt_feedback['cmt7'] ?>"disabled></td>
									</tr>
									<tr>
										<td style="text-align:left;" colspan=4>1.M.8 Agent provided online, self-service information</td>
										<td>
											<select class="form-control icario_point mechanic" name="data[mechanics8]" disabled>
												<option icario_val=4 <?php echo $agnt_feedback['mechanics8'] == "Yes"?"selected":"";?> value="Yes">Yes</option>
												<option icario_val=4 <?php echo $agnt_feedback['mechanics8'] == "No"?"selected":"";?> value="No">No</option>
												<option icario_val=4 <?php echo $agnt_feedback['mechanics8'] == "N/A"?"selected":"";?> value="N/A">N/A</option>
											</select>
										</td>
										<td>4</td>
										<td colspan=2><input type="text" class="form-control" name="data[cmt8]" value="<?php echo $agnt_feedback['cmt8'] ?>"disabled></td>
									</tr>
									<tr>
										<td style="text-align:left;" colspan=4>1.M.9 Agent used correct transfer procedure</td>
										<td>
											<select class="form-control icario_point mechanic" name="data[mechanics9]" disabled>
												<option icario_val=2 <?php echo $agnt_feedback['mechanics9'] == "Yes"?"selected":"";?> value="Yes">Yes</option>
												<option icario_val=2 <?php echo $agnt_feedback['mechanics9'] == "No"?"selected":"";?> value="No">No</option>
												<option icario_val=2 <?php echo $agnt_feedback['mechanics9'] == "N/A"?"selected":"";?> value="N/A">N/A</option>
											</select>
										</td>
										<td>2</td>
										<td colspan=2><input type="text" class="form-control" name="data[cmt9]" value="<?php echo $agnt_feedback['cmt9'] ?>"disabled></td>
									</tr>


									<tr>
										<td style="text-align:left;" colspan=4>1.M.10 Agent logged call correctly in all appropriate systems</td>
										<td>
											<select class="form-control icario_point mechanic" name="data[mechanics10]" disabled>
												<option icario_val=3 <?php echo $agnt_feedback['mechanics10'] == "Yes"?"selected":"";?> value="Yes">Yes</option>
												<option icario_val=3 <?php echo $agnt_feedback['mechanics10'] == "No"?"selected":"";?> value="No">No</option>
												<option icario_val=3 <?php echo $agnt_feedback['mechanics10'] == "N/A"?"selected":"";?> value="N/A">N/A</option>
											</select>
										</td>
										<td>3</td>
										<td colspan=2><input type="text" class="form-control" name="data[cmt10]" value="<?php echo $agnt_feedback['cmt10'] ?>"disabled></td>
									</tr>

									<tr>
										<td style="text-align:left;" colspan=4>1.M.11 Agent followed script guidelines</td>
										<td>
											<select class="form-control icario_point mechanic" name="data[mechanics11]" disabled>
												<option icario_val=5 <?php echo $agnt_feedback['mechanics11'] == "Yes"?"selected":"";?> value="Yes">Yes</option>
												<option icario_val=5 <?php echo $agnt_feedback['mechanics11'] == "No"?"selected":"";?> value="No">No</option>
												<option icario_val=5 <?php echo $agnt_feedback['mechanics11'] == "N/A"?"selected":"";?> value="N/A">N/A</option>
											</select>
										</td>
										<td>5</td>
										<td colspan=2><input type="text" class="form-control" name="data[cmt11]" value="<?php echo $agnt_feedback['cmt11'] ?>"disabled></td>
									</tr>


									<tr>
										<td style="text-align:left;" colspan=4>1,M.12 Agent gave correct and complete information</td>
										<td>
											<select class="form-control icario_point mechanic" name="data[mechanics12]" disabled>
												<option icario_val=5 <?php echo $agnt_feedback['mechanics12'] == "Yes"?"selected":"";?> value="Yes">Yes</option>
												<option icario_val=5 <?php echo $agnt_feedback['mechanics12'] == "No"?"selected":"";?> value="No">No</option>
												<option icario_val=5 <?php echo $agnt_feedback['mechanics12'] == "N/A"?"selected":"";?> value="N/A">N/A</option>
											</select>
										</td>
										<td>5</td>
										<td colspan=2><input type="text" class="form-control" name="data[cmt12]" value="<?php echo $agnt_feedback['cmt12'] ?>"disabled></td>
									</tr>

									<tr>
										<td style="text-align:left;" colspan=4>1.M.13 Agent resolved all questions and concerns</td>
										<td>
											<select class="form-control icario_point mechanic" name="data[mechanics13]" disabled>
												<option icario_val=5 <?php echo $agnt_feedback['mechanics13'] == "Yes"?"selected":"";?> value="Yes">Yes</option>
												<option icario_val=5 <?php echo $agnt_feedback['mechanics13'] == "No"?"selected":"";?> value="No">No</option>
												<option icario_val=5 <?php echo $agnt_feedback['mechanics13'] == "N/A"?"selected":"";?> value="N/A">N/A</option>
											</select>
										</td>
										<td>5</td>
										<td colspan=2><input type="text" class="form-control" name="data[cmt13]" value="<?php echo $agnt_feedback['cmt13'] ?>"disabled></td>
									</tr>
									
									<tr><td class="eml" colspan=8>SOFT SKILLS</td></tr>
									<tr>
										<td style="text-align:left;" colspan=4>2.S.1 Agent displayed active listening skills and probed for details effectively</td>
										<td>
											<select class="form-control icario_point soft_skill" name="data[soft_skills1]" disabled>
												<option icario_val=2 <?php echo $agnt_feedback['soft_skills1'] == "Yes"?"selected":"";?> value="Yes">Yes</option>
												<option icario_val=2 <?php echo $agnt_feedback['soft_skills1'] == "No"?"selected":"";?> value="No">No</option>
												<option icario_val=2 <?php echo $agnt_feedback['soft_skills1'] == "N/A"?"selected":"";?> value="N/A">N/A</option>
											</select>
										</td>
										<td>2</td>
										<td colspan=2><input type="text" class="form-control" name="data[cmt14]" value="<?php echo $agnt_feedback['cmt14'] ?>"disabled></td>
									</tr>
									<tr>
										<td style="text-align:left;" colspan=4>2.S.2 Agent effectively engaged with the caller</td>
										<td>
											<select class="form-control icario_point soft_skill" name="data[soft_skills2]" disabled>
												<option icario_val=3 <?php echo $agnt_feedback['soft_skills2'] == "Yes"?"selected":"";?> value="Yes">Yes</option>
												<option icario_val=3 <?php echo $agnt_feedback['soft_skills2'] == "No"?"selected":"";?> value="No">No</option>
												<option icario_val=3 <?php echo $agnt_feedback['soft_skills2'] == "N/A"?"selected":"";?> value="N/A">N/A</option>
											</select>
										</td>
										<td>3</td>
										<td colspan=2><input type="text" class="form-control" name="data[cmt15]" value="<?php echo $agnt_feedback['cmt15'] ?>"disabled></td>
									</tr>
									<tr>
										<td style="text-align:left;" colspan=4>2.S.3 Agent displayed a polite/appropriate tone</td>
										<td>
											<select class="form-control icario_point soft_skill" name="data[soft_skills3]" disabled>
												<option icario_val=3 <?php echo $agnt_feedback['soft_skills3'] == "Yes"?"selected":"";?> value="Yes">Yes</option>
												<option icario_val=3 <?php echo $agnt_feedback['soft_skills3'] == "No"?"selected":"";?> value="No">No</option>
												<option icario_val=3 <?php echo $agnt_feedback['soft_skills3'] == "N/A"?"selected":"";?> value="N/A">N/A</option>
											</select>
										</td>
										<td>3</td>
										<td colspan=2><input type="text" class="form-control" name="data[cmt16]" value="<?php echo $agnt_feedback['cmt16'] ?>"disabled></td>
									</tr>
									<tr>
										<td style="text-align:left;" colspan=4>2.S.4 Agent sounded confident and knowledgeable</td>
										<td>
											<select class="form-control icario_point soft_skill" name="data[soft_skills4]" disabled>
												<option icario_val=6 <?php echo $agnt_feedback['soft_skills4'] == "Yes"?"selected":"";?> value="Yes">Yes</option>
												<option icario_val=6 <?php echo $agnt_feedback['soft_skills4'] == "No"?"selected":"";?> value="No">No</option>
												<option icario_val=6 <?php echo $agnt_feedback['soft_skills4'] == "N/A"?"selected":"";?> value="N/A">N/A</option>
											</select>
										</td>
										<td>6</td>
										<td colspan=2><input type="text" class="form-control" name="data[cmt17]" value="<?php echo $agnt_feedback['cmt17'] ?>"disabled></td>
									</tr>
									<tr>
										<td style="text-align:left;" colspan=4>2.S.5 Agent did not interrupt or talk over the customer</td>
										<td>
											<select class="form-control icario_point soft_skill" name="data[soft_skills5]" disabled>
												<option icario_val=2 <?php echo $agnt_feedback['soft_skills5'] == "Yes"?"selected":"";?> value="Yes">Yes</option>
												<option icario_val=2 <?php echo $agnt_feedback['soft_skills5'] == "No"?"selected":"";?> value="No">No</option>
												<option icario_val=2 <?php echo $agnt_feedback['soft_skills5'] == "N/A"?"selected":"";?> value="N/A">N/A</option>
											</select>
										</td>
										<td>2</td>
										<td colspan=2><input type="text" class="form-control" name="data[cmt18]" value="<?php echo $agnt_feedback['cmt18'] ?>"disabled></td>
									</tr>
									<tr>
										<td style="text-align:left;" colspan=4>2.S.6 Agent used pleasing words and phrases</td>
										<td>
											<select class="form-control icario_point soft_skill" name="data[soft_skills6]" disabled>
												<option icario_val=3 <?php echo $agnt_feedback['soft_skills6'] == "Yes"?"selected":"";?> value="Yes">Yes</option>
												<option icario_val=3 <?php echo $agnt_feedback['soft_skills6'] == "No"?"selected":"";?> value="No">No</option>
												<option icario_val=3 <?php echo $agnt_feedback['soft_skills6'] == "N/A"?"selected":"";?> value="N/A">N/A</option>
											</select>
										</td>
										<td>3</td>
										<td colspan=2><input type="text" class="form-control" name="data[cmt19]" value="<?php echo $agnt_feedback['cmt19'] ?>"disabled></td>
									</tr>
									<tr>
										<td style="text-align:left;" colspan=4>2.S.7 Agent maintained call control</td>
										<td>
											<select class="form-control icario_point soft_skill" name="data[soft_skills7]" disabled>
												<option icario_val=6 <?php echo $agnt_feedback['soft_skills7'] == "Yes"?"selected":"";?> value="Yes">Yes</option>
												<option icario_val=6 <?php echo $agnt_feedback['soft_skills7'] == "No"?"selected":"";?> value="No">No</option>
												<option icario_val=6 <?php echo $agnt_feedback['soft_skills7'] == "N/A"?"selected":"";?> value="N/A">N/A</option>
											</select>
										</td>
										<td>6</td>
										<td colspan=2><input type="text" class="form-control" name="data[cmt20]" value="<?php echo $agnt_feedback['cmt20'] ?>"disabled></td>
									</tr>
									<tr>
										<td style="text-align:left;" colspan=4>2.S.8 Agent offered additional assistance</td>
										<td>
											<select class="form-control icario_point soft_skill" name="data[soft_skills8]" disabled>
												<option icario_val=2 <?php echo $agnt_feedback['soft_skills8'] == "Yes"?"selected":"";?> value="Yes">Yes</option>
												<option icario_val=2 <?php echo $agnt_feedback['soft_skills8'] == "No"?"selected":"";?> value="No">No</option>
												<option icario_val=2 <?php echo $agnt_feedback['soft_skills8'] == "N/A"?"selected":"";?> value="N/A">N/A</option>
											</select>
										</td>
										<td>2</td>
										<td colspan=2><input type="text" class="form-control" name="data[cmt21]" value="<?php echo $agnt_feedback['cmt21'] ?>"disabled></td>
									</tr>
									<tr>
										<td style="text-align:left;" colspan=4>2.S.9 Agent used correct client closing</td>
										<td>
											<select class="form-control icario_point soft_skill" name="data[soft_skills9]" disabled>
												<option icario_val=2 <?php echo $agnt_feedback['soft_skills9'] == "Yes"?"selected":"";?> value="Yes">Yes</option>
												<option icario_val=2 <?php echo $agnt_feedback['soft_skills9'] == "No"?"selected":"";?> value="No">No</option>
												<option icario_val=2 <?php echo $agnt_feedback['soft_skills9'] == "N/A"?"selected":"";?> value="N/A">N/A</option>
											</select>
										</td>
										<td>2</td>
										<td colspan=2><input type="text" class="form-control" name="data[cmt22]" value="<?php echo $agnt_feedback['cmt22'] ?>"disabled></td>
									</tr>
									

									<tr><td class="eml" colspan=8>AUTO-FAIL</td></tr>
									<tr>
										<td style="text-align:left; color:red" colspan=4>3.A.1 Agent used correct grammar avoided slang</td>
										<td>
											<select class="form-control icario_point soft_skill" id="icarioF6" name="data[auto_fail1]" disabled>
												<option icario_val=1 <?php echo $agnt_feedback['auto_fail1']=="Yes"?"selected":"";?> value="Yes">Yes</option>
												<option icario_val=1 <?php echo $agnt_feedback['auto_fail1']=="No"?"selected":"";?> value="No">No</option>
											</select>
										</td>
										<td>1</td>
										<td colspan=2><input type="text" class="form-control" name="data[cmt23]" value="<?php echo $agnt_feedback['cmt23'] ?>"disabled></td>
									</tr>
									<tr>
										<td style="text-align:left; color: red;" colspan=4>3.A.2 Agent submitted escalation in system when disabled (Auto-Fail)</td>
										<td>
											<select class="form-control icario_point soft_skill" id="icarioF7" name="data[auto_fail2]" disabled>
												<option icario_val=1 <?php echo $agnt_feedback['auto_fail2']=="Yes"?"selected":"";?> value="Yes">Yes</option>
												<option icario_val=1 <?php echo $agnt_feedback['auto_fail2']=="No"?"selected":"";?> value="No">No</option>
												
											</select>
										</td>
										<td>1</td>
										<td colspan=2><input type="text" class="form-control" name="data[cmt24]" value="<?php echo $agnt_feedback['cmt24'] ?>"disabled></td>
									</tr>
									<tr>
										<td style="text-align:left; color: red;" colspan=4>3.A.3 Agent was not rude or inappropriate? (Auto-Fail)</td>
										<td>
											<select class="form-control icario_point soft_skill" id="icarioF8" name="data[auto_fail3]" disabled>
												<option icario_val=1 <?php echo $agnt_feedback['auto_fail3'] == "Yes"?"selected":"";?> value="Yes">Yes</option>
												<option icario_val=1 <?php echo $agnt_feedback['auto_fail3'] == "No"?"selected":"";?> value="No">No</option>
												
											</select>
										</td>
										<td>1</td>
										<td colspan=2><input type="text" class="form-control" name="data[cmt25]" value="<?php echo $agnt_feedback['cmt25'] ?>"disabled></td>
									</tr>
									<tr>
										<td style="text-align:left; color:red" colspan=4>3.A.4 Agent used the correct client name during the call (Auto-Fail)</td>
										<td>
											<select class="form-control icario_point soft_skill" id="icarioF9" name="data[auto_fail4]" disabled>
												<option icario_val=1 <?php echo $agnt_feedback['auto_fail4'] == "Yes"?"selected":"";?> value="Yes">Yes</option>
												<option icario_val=1 <?php echo $agnt_feedback['auto_fail4'] == "No"?"selected":"";?> value="No">No</option>
												
											</select>
										</td>
										<td>1</td>
										<td colspan=2><input type="text" class="form-control" name="data[cmt26]" value="<?php echo $agnt_feedback['cmt26'] ?>"disabled></td>
									</tr>
									<tr>
										<td style="text-align:left; color:red" colspan=4>3.A.5 Agent did not demonstrate call avoidance (Auto-Fail)</td>
										<td>
											<select class="form-control icario_point soft_skill" id="icarioF10" name="data[auto_fail5]" disabled>
												<option icario_val=1 <?php echo $agnt_feedback['auto_fail5'] == "Yes"?"selected":"";?> value="Yes">Yes</option>
												<option icario_val=1 <?php echo $agnt_feedback['auto_fail5'] == "No"?"selected":"";?> value="No">No</option>
												
											</select>
										</td>
										<td>1</td>
										<td colspan=2><input type="text" class="form-control" name="data[cmt27]" value="<?php echo $agnt_feedback['cmt27'] ?>"disabled></td>
									</tr>

									<tr>
										<td style="text-align:left; color:red" colspan=4>3.A.6 Agent properly authenticated the member</td>
										<td>
											<select class="form-control icario_point soft_skill" id="icarioF10" name="data[auto_fail6]" disabled>
												<option icario_val=1 <?php echo $agnt_feedback['auto_fail6'] == "Yes"?"selected":"";?> value="Yes">Yes</option>
												<option icario_val=1 <?php echo $agnt_feedback['auto_fail6'] == "No"?"selected":"";?> value="No">No</option>
												
											</select>
										</td>
										<td>1</td>
										<td colspan=2><input type="text" class="form-control" name="data[cmt28]" value="<?php echo $agnt_feedback['cmt28'] ?>"disabled></td>
									</tr>


					
									<tr><td class="eml" colspan=8>BONUS POINTS</td></tr>

									<tr>
										<td style="text-align:left;" colspan=4>4.B.1 The agent received direct appreciation from the member</td>
										<td>
											<select class="form-control icario_point soft_skill" id="icarioF10" name="data[bonus_point]" disabled>
												<option icario_val=5 <?php echo $agnt_feedback['bonus_point'] == "Yes"?"selected":"";?> value="Yes">Yes</option>
												<option icario_val=5 <?php echo $agnt_feedback['bonus_point'] == "No"?"selected":"";?> value="No">No</option>
												
											</select>
										</td>
										<td>5</td>
										<td colspan=2><input type="text" class="form-control" name="data[cmt30]" value="<?php echo $agnt_feedback['cmt30'] ?>"disabled></td>
									</tr>


									<tr><td class="eml" colspan=8>TRACKING</td></tr>

									<tr>
										<td style="text-align:left;" colspan=4>5.T.1 Is the recording quality acceptable? (Tracking)</td>
										<td>
											<select class="form-control icario_point soft_skill" id="icarioF10" name="data[tracking1]" disabled>
												<option icario_val=0 <?php echo $agnt_feedback['tracking1'] == "Yes"?"selected":"";?> value="Yes">Yes</option>
												<option icario_val=0 <?php echo $agnt_feedback['tracking1'] == "No"?"selected":"";?> value="No">No</option>
												
											</select>
										</td>
										<td>0</td>
										<td colspan=2><input type="text" class="form-control" name="data[cmt31]" value="<?php echo $agnt_feedback['cmt31'] ?>"disabled></td>
									</tr>

									<tr>
										<td style="text-align:left;" colspan=4>5.T.2 Would play this for the client? (Tracking)</td>
										<td>
											<select class="form-control icario_point soft_skill" id="icarioF10" name="data[tracking2]" disabled>
												<option icario_val=0 <?php echo $agnt_feedback['tracking2'] == "Yes"?"selected":"";?> value="Yes">Yes</option>
												<option icario_val=0 <?php echo $agnt_feedback['tracking2'] == "No"?"selected":"";?> value="No">No</option>
												
											</select>
										</td>
										<td>0</td>
										<td colspan=2><input type="text" class="form-control" name="data[cmt32]" value="<?php echo $agnt_feedback['cmt32'] ?>"disabled></td>
									</tr>
									
									
									<tr>
										<td>Call Summary:</td>
										<td colspan="2"><textarea class="form-control"   name="data[call_summary]"><?php echo $agnt_feedback['call_summary'] ?></textarea></td>
										<td>Feedback:</td>
										<td colspan="2"><textarea class="form-control"   name="data[feedback]"><?php echo $agnt_feedback['feedback'] ?></textarea></td>
									</tr>

									<tr>
										<td colspan=2>Upload Files</td>
										<?php if($pnid==0){ ?>
											<td colspan=4><input type="file" multiple class="form-control" id="attach_file" name="attach_file[]"></td>
										<?php }else{
											if($agnt_feedback['attach_file']!=''){ ?>
												<td colspan=4>
													<?php $attach_file = explode(",",$agnt_feedback['attach_file']);
													 foreach($attach_file as $mp){ ?>
														<audio controls='' style="background-color:#607F93">
														  <source src="<?php echo base_url(); ?>qa_files/qa_icario/<?php echo $mp; ?>" type="audio/ogg">
														  <source src="<?php echo base_url(); ?>qa_files/qa_icario/<?php echo $mp; ?>" type="audio/mpeg">
														</audio> </br>
													 <?php } ?>
												</td>
										<?php }else{
												echo '<td colspan=6><b>No Files</b></td>';
											  }
										} ?>
									</tr>
										<?php } ?>






                                       <?php if($campaign=='ab_commercial'){ ?>
                                      						<tr>
										<td colspan="" style="font-weight:bold; font-size:16px; text-align:right"></td>
										<td></td>
										<td colspan="" style="font-weight:bold; font-size:16px; text-align:right"></td>
										<td></td>
										<td colspan="2" style="font-weight:bold; font-size:16px; text-align:right">Overall Score:</td>
										<td colspan="2"><input type="text" readonly id="commercial_overoll_score" name="data[overall_score]" class="form-control" style="font-weight:bold" value="<?php if($agnt_feedback['overall_score']!=''){ echo $agnt_feedback['overall_score'].'%'; } else { ?>100%<?php } ?>"></td>
									</tr>
									<tr style="background-color:#A9CCE3; font-weight:bold"><td>Parameter</td><td colspan=3>Sub Parameter</td><td>Marking</td><td colspan="3">Remark</td></tr>

									<tr>
										<td rowspan=4 style="background-color:#A9CCE3; font-weight:bold">Email 40%</td>
										<td colspan=3>Correct Subject line</td>

										<td>
											<select class="form-control commercial_point effort_point" id="cmthScriptAF6" name="data[correct_subject]" disabled>
												<option commercial_val=10 <?php echo $agnt_feedback['correct_subject']=='Yes'?"selected":""; ?> value="Yes">Yes</option>
												<option commercial_val=0 <?php echo $agnt_feedback['correct_subject']=='No'?"selected":""; ?> value="No">No</option>
											</select>
										</td>
										<td colspan=3><input type="text" class="form-control" name="data[cmt1]" value="<?php echo $agnt_feedback['cmt1'] ?>" disabled></td>
									</tr>
									<tr>
										<td colspan=3>Correct Signature/Billing/ Docusign/Bank fax sent if necessary</td>

										<td>
											<select class="form-control commercial_point effort_point" id="cmthScriptAF7" name="data[correct_signature]" disabled>
												<option commercial_val=10 <?php echo $agnt_feedback['correct_signature']=='Yes'?"selected":""; ?> value="Yes">Yes</option>
												<option commercial_val=0 <?php echo $agnt_feedback['correct_signature']=='No'?"selected":""; ?> value="No">No</option>
											</select>
										</td>
										<td colspan=3><input type="text" class="form-control" name="data[cmt2]" value="<?php echo $agnt_feedback['cmt2'] ?>" disabled></td>
									</tr>
									<tr>
										<td colspan=3>Subjectivities mentioned on email</td>

										<td>
											<select class="form-control commercial_point effort_point" id="cmthScriptAF8" name="data[subjectivities]" disabled>
												<option commercial_val=10 <?php echo $agnt_feedback['subjectivities']=='Yes'?"selected":""; ?> value="Yes">Yes</option>
												<option commercial_val=0 <?php echo $agnt_feedback['subjectivities']=='No'?"selected":""; ?> value="No">No</option>
											</select>
										</td>
										<td colspan=3><input type="text" class="form-control" name="data[cmt3]" value="<?php echo $agnt_feedback['cmt3'] ?>" disabled></td>
									</tr>
									<tr>
										<td colspan=3>Coverage changes mentioned on email</td>

										<td>
											<select class="form-control commercial_point effort_point" id="cmthScriptAF9" name="data[coverage_changes]" disabled>
												<option commercial_val=10 <?php echo $agnt_feedback['coverage_changes']=='Yes'?"selected":""; ?> value="Yes">Yes</option>
												<option commercial_val=0 <?php echo $agnt_feedback['coverage_changes']=='No'?"selected":""; ?> value="No">No</option>
											</select>
										</td>
										<td colspan=3><input type="text" class="form-control" name="data[cmt4]" value="<?php echo $agnt_feedback['cmt4'] ?>" disabled></td>
									</tr>

									<tr>
										<td rowspan=4 style="background-color:#A9CCE3; font-weight:bold">Packet 20% </td>
										<td colspan=3>Correct invoice included</td>

										<td>
											<select class="form-control commercial_point effort_point" id="cmthScriptAF6" name="data[correct_invoice]" disabled>
												<option commercial_val=5 <?php echo $agnt_feedback['correct_invoice']=='Yes'?"selected":""; ?> value="Yes">Yes</option>
												<option commercial_val=0 <?php echo $agnt_feedback['correct_invoice']=='No'?"selected":""; ?> value="No">No</option>
											</select>
										</td>
										<td colspan=3><input type="text" class="form-control" name="data[cmt5]" value="<?php echo $agnt_feedback['cmt5'] ?>" disabled></td>
									</tr>
									<tr>
										<td colspan=3>Quote included</td>

										<td>
											<select class="form-control commercial_point effort_point" id="cmthScriptAF7" name="data[quote_included]" disabled>
												<option commercial_val=5 <?php echo $agnt_feedback['quote_included']=='Yes'?"selected":""; ?> value="Yes">Yes</option>
												<option commercial_val=0 <?php echo $agnt_feedback['quote_included']=='No'?"selected":""; ?> value="No">No</option>
											</select>
										</td>
										<td colspan=3><input type="text" class="form-control" name="data[cmt6]" value="<?php echo $agnt_feedback['cmt6'] ?>" disabled></td>
									</tr>
									<tr>
										<td colspan=3>Correct edits made</td>

										<td>
											<select class="form-control commercial_point effort_point" id="cmthScriptAF8" name="data[correct_edits_made]" disabled>
												<option commercial_val=5 <?php echo $agnt_feedback['correct_edits_made']=='Yes'?"selected":""; ?> value="Yes">Yes</option>
												<option commercial_val=0 <?php echo $agnt_feedback['correct_edits_made']=='No'?"selected":""; ?> value="No">No</option>
											</select>
										</td>
										<td colspan=3><input type="text" class="form-control" name="data[cmt7]" value="<?php echo $agnt_feedback['cmt7'] ?>" disabled></td>
									</tr>
									<tr>
										<td colspan=3>Application/forms included if necessary</td>

										<td>
											<select class="form-control commercial_point effort_point" id="cmthScriptAF9" name="data[application_forms]" disabled>
												<option commercial_val=5 <?php echo $agnt_feedback['application_forms']=='Yes'?"selected":""; ?> value="Yes">Yes</option>
												<option commercial_val=0 <?php echo $agnt_feedback['application_forms']=='No'?"selected":""; ?> value="No">No</option>
											</select>
										</td>
										<td colspan=3><input type="text" class="form-control" name="data[cmt8]" value="<?php echo $agnt_feedback['cmt8'] ?>" disabled></td>
									</tr>

									<tr>
										<td rowspan=3 style="background-color:#A9CCE3; font-weight:bold">Requirements Met 20% </td>
										<td colspan=3>DE suspense sent if necessary</td>

										<td>
											<select class="form-control commercial_point call_control_point" id="cmthScriptAF1" name="data[de_suspense_sent]" disabled>
												<option commercial_val=6.66 <?php echo $agnt_feedback['de_suspense_sent']=='Yes'?"selected":""; ?> value="Yes">Yes</option>
												<option commercial_val=0 <?php echo $agnt_feedback['de_suspense_sent']=='No'?"selected":""; ?> value="No">No</option>
											</select>
										</td>
										<td colspan=3><input type="text" class="form-control" name="data[cmt9]" value="<?php echo $agnt_feedback['cmt9'] ?>" disabled></td>
									</tr>

									<tr>
										<td colspan=3>Prem increase suspense sent if necessary</td>

										<td>
											<select class="form-control commercial_point call_control_point" id="cmthScriptAF3" name="data[prem_increase_suspense]" disabled>
												<option commercial_val=6.67 <?php echo $agnt_feedback['prem_increase_suspense']=='Yes'?"selected":""; ?> value="Yes">Yes</option>
												<option commercial_val=0 <?php echo $agnt_feedback['prem_increase_suspense']=='No'?"selected":""; ?> value="No">No</option>
											</select>
										</td>
										<td colspan=3><input type="text" class="form-control" name="data[cmt10]" value="<?php echo $agnt_feedback['cmt10'] ?>" disabled></td>
									</tr>

									<tr>
										<td colspan=3>Coverage Change suspense sent if necessary</td>

										<td>
											<select class="form-control commercial_point call_control_point" id="cmthScriptAF5" name="data[coverage_change]" disabled>
												<option commercial_val=6.67 <?php echo $agnt_feedback['coverage_change']=='Yes'?"selected":""; ?> value="Yes">Yes</option>
												<option commercial_val=0 <?php echo $agnt_feedback['coverage_change']=='No'?"selected":""; ?> value="No">No</option>
											</select>
										</td>
										<td colspan=3><input type="text" class="form-control" name="data[cmt11]" value="<?php echo $agnt_feedback['cmt11'] ?>" disabled></td>
									</tr>

									<tr>
										<td rowspan=4 style="background-color:#A9CCE3; font-weight:bold">Status Update 20 % </td>
										<td colspan=3>Suspense status updated</td>

										<td>
											<select class="form-control commercial_point " id="cmthScriptAF1" name="data[suspense_status]" disabled>
												<option commercial_val=5 <?php echo $agnt_feedback['suspense_status']=='Yes'?"selected":""; ?> value="Yes">Yes</option>
												<option commercial_val=0 <?php echo $agnt_feedback['suspense_status']=='No'?"selected":""; ?> value="No">No</option>
											</select>
										</td>
										<td colspan=3><input type="text" class="form-control" name="data[cmt12]" value="<?php echo $agnt_feedback['cmt12'] ?>" disabled></td>
									</tr>

									<tr>
										<td colspan=3>Renewal sheet updated</td>

										<td>
											<select class="form-control commercial_point " id="cmthScriptAF3" name="data[renewal_sheet]" disabled>
												<option commercial_val=5 <?php echo $agnt_feedback['renewal_sheet']=='Yes'?"selected":""; ?> value="Yes">Yes</option>
												<option commercial_val=0 <?php echo $agnt_feedback['renewal_sheet']=='No'?"selected":""; ?> value="No">No</option>
											</select>
										</td>
										<td colspan=3><input type="text" class="form-control" name="data[cmt13]" value="<?php echo $agnt_feedback['cmt13'] ?>" disabled></td>
									</tr>
									<tr>
										<td colspan=3>Correct activity entered into AMS with email attached</td>

										<td>
											<select class="form-control commercial_point" id="cmthScriptAF4" name="data[correct_activity]" disabled>
												<option commercial_val=5 <?php echo $agnt_feedback['correct_activity']=='Yes'?"selected":""; ?> value="Yes">Yes</option>
												<option commercial_val=0 <?php echo $agnt_feedback['correct_activity']=='No'?"selected":""; ?> value="No">No</option>
											</select>
										</td>
										<td colspan=3><input type="text" class="form-control" name="data[cmt14]" value="<?php echo $agnt_feedback['cmt14'] ?>" disabled></td>
									</tr>
									<tr>
										<td colspan=3>Correct requirements via Docusign (if appliable)</td>

										<td>
											<select class="form-control commercial_point" id="cmthScriptAF5" name="data[correct_requirements]" disabled>
												<option commercial_val=5 <?php echo $agnt_feedback['correct_requirements']=='Yes'?"selected":""; ?> value="Yes">Yes</option>
												<option commercial_val=0 <?php echo $agnt_feedback['correct_requirements']=='No'?"selected":""; ?> value="No">No</option>
											</select>
										</td>
										<td colspan=3><input type="text" class="form-control" name="data[cmt15]" value="<?php echo $agnt_feedback['cmt15'] ?>" disabled></td>
									</tr>

									<tr>
										<td>Call Summary:</td>
										<td colspan=3><textarea class="form-control" id="" name="data[call_summary]" disabled=""><?php echo $agnt_feedback['call_summary'] ?></textarea></td>
										<td>Feedback:</td>
										<td colspan=4><textarea class="form-control" id="" name="data[feedback]" disabled=""><?php echo $agnt_feedback['feedback'] ?></textarea></td>
									</tr>

									<?php if($pnid==0){ ?>
									<tr>
										<td colspan=2>Upload Files</td>
										<td colspan=8><input type="file" multiple class="form-control" id="attach_file" name="attach_file[]"></td>
									</tr>
									<?php }else{ ?>
									<tr>
										<td colspan=2>Upload Files</td>
										<?php if($agnt_feedback['attach_file']!=''){ ?>
											<td colspan=4>
												<?php $attach_file = explode(",",$agnt_feedback['attach_file']);
												 foreach($attach_file as $mp){ ?>
													<audio controls='' style="background-color:#607F93">
													  <source src="<?php echo base_url(); ?>qa_files/qa_ab_commercial/<?php echo $mp; ?>" type="audio/ogg">
													  <source src="<?php echo base_url(); ?>qa_files/qa_ab_commercial/<?php echo $mp; ?>" type="audio/mpeg">
													</audio> </br>
												 <?php } ?>
											</td>
										<?php }else{
												//echo '<td colspan=6><b>No Files</b></td>';
											  }
										} ?>
									</tr>
                                      <?php }  ?>

                                      <?php if($campaign=='brightway_ib_bank'){ ?>

                                       <tr>
											<td>Enter Policy Information::</td><td><b><?php echo $agnt_feedback['epinfo'] ?></b></td>
											<td>Skill - Select all the Apply:</td> <td><b><?php echo $agnt_feedback['skill'] ?></b></td>
											<td>Bonus Point:</td> <td><b><?php if(($agnt_feedback['bonus_question']=="AB") || ($agnt_feedback['bonus_question']=="AS")){ echo '5'; } ?></b></td>
											<td></td><td><b></b></td>
										</tr>

								     <?php } ?>

									<tr><td colspan="8" style="background-color:#C5C8C8"></td></tr>



									<?php if($campaign=='fortunebuilder'){ ?>

										<tr>
											<td>Overall Score:</td> <td><b><?php echo $agnt_feedback['overall_score'] ?></b></td>
										</tr>
										<tr>
											<td colspan="3">PARAMETER</td> <td>STATUS</td>
											<td colspan="3">PARAMETER</td> <td>STATUS</td>
										</tr>
										<tr>
											<td colspan=3>Was the call answered within 5 seconds?</td> <td><b><?php echo $agnt_feedback['Greet_customer'] ?></b></td>
											<td colspan=3>Did the agent introduce him/herself to the caller?</td> <td><b><?php echo $agnt_feedback['Uses_professionalism'] ?></b></td>
										</tr>
										<tr>
											<td colspan=3>Did the agent advise the call is being recorded?</td> <td><b><?php echo $agnt_feedback['Shows_gratitude'] ?></b></td>
											<td colspan=3>Did the agent use the standard greeting? ("Thank you for calling the Real Estate Registration Line. Who do I have the pleasure of speaking with?")</td> <td><b><?php echo $agnt_feedback['Collects_verifies'] ?></b></td>
										</tr>
										<tr>
											<td colspan=3>Did the agent ask for the zip code?</td> <td><b><?php echo $agnt_feedback['guardians_program'] ?></b></td>
											<td colspan=3>Did the agent verify caller's first and last name and complete address?</td> <td><b><?php echo $agnt_feedback['monthly_guardian'] ?></b></td>
										</tr>
										<tr>
											<td colspan=3>Did the agent ask for and verify the caller's email address (must read back phonetically)</td> <td><b><?php echo $agnt_feedback['gift_scripting'] ?></b></td>
											<td colspan=3>Did the agent correctly offer the seminars?</td> <td><b><?php echo $agnt_feedback['payment_scripting'] ?></b></td>
										</tr>
										<tr>
											<td colspan=3>Did the agent correctly ask for and verify the phone number?</td> <td><b><?php echo $agnt_feedback['Animal_champion'] ?></b></td>
											<td colspan=3>Did the agent inform the caller about the text reminders he/she will receive?</td> <td><b><?php echo $agnt_feedback['donation_processing'] ?></b></td>
										</tr>
										<tr>
											<td colspan=3>Did the agent summarize the call with relevant details?</td> <td><b><?php echo $agnt_feedback['onetime_donation'] ?></b></td>
											<td colspan=3>Did the agent offer to register a guest?</td> <td><b><?php echo $agnt_feedback['pet_insurance'] ?></b></td>
										</tr>
										<tr>
											<td colspan=3>Did the agents collect and verify the guests email address(es)? (must read back phonetically)</td> <td><b><?php echo $agnt_feedback['correct_script'] ?></b></td>
											<td colspan=3>Did the agent demonstrate knowledge of Fortune Builders?</td> <td><b><?php echo $agnt_feedback['call_control'] ?></b></td>
										</tr>
										<tr>
											<td colspan=3>Did the agent use appropriate grammar and pronunciation?</td> <td><b><?php echo $agnt_feedback['min_deadair'] ?></b></td>
											<td colspan=3>Did the agent use good pacing and tone?</td> <td><b><?php echo $agnt_feedback['faq'] ?></b></td>
										</tr>
										<tr>
											<td colspan=3>Did the agent display professionalism and handle difficult callers appropriately?</td> <td><b><?php echo $agnt_feedback['personalizes_call'] ?></b></td>

										</tr>

										<tr>
											<td>Call Summary:</td> <td colspan=3><b><?php echo $agnt_feedback['call_summary'] ?></b></td>
											<td>Feedback:</td> <td colspan=3><b><?php echo $agnt_feedback['feedback'] ?></b></td>
										</tr>
										<?php if($agnt_feedback['attach_file']!=''){ ?>
										<tr oncontextmenu="return false;">
											<td colspan=3>Audio Files</td>
											<td colspan=5>
												<?php $attach_file = explode(",",$agnt_feedback['attach_file']);
												 foreach($attach_file as $mp){ ?>
													<audio controls='' style="background-color:#607F93">
													  <source src="<?php echo base_url(); ?>qa_files/qa_ameridial/fortune_builder/<?php echo $mp; ?>" type="audio/ogg">
													  <source src="<?php echo base_url(); ?>qa_files/qa_ameridial/fortune_builder/<?php echo $mp; ?>" type="audio/mpeg">
													</audio> </br>
												 <?php } ?>
											</td>
										</tr>
										<?php } ?>

									<?php }else if($campaign=='touchfuse'){ ?>

										<tr>
											<td>Overall Score:</td> <td><b><?php echo $agnt_feedback['overall_score'] ?></b></td>
										</tr>
										<tr>
											<td colspan="3">PARAMETER</td> <td>STATUS</td>
											<td colspan="3">PARAMETER</td> <td>STATUS</td>
										</tr>
										<tr>
											<td colspan=3>Was the call answered promptly?</td> <td><b><?php echo $agnt_feedback['callasnwer'] ?></b></td>
											<td colspan=3>Did the agent answer with thank you for calling (financial advisor's name)</td> <td><b><?php echo $agnt_feedback['agentanswer'] ?></b></td>
										</tr>
										<tr>
											<td colspan=3>Did the agent ask for the zip code?</td> <td><b><?php echo $agnt_feedback['agentzip'] ?></b></td>
											<td colspan=3>Did the agent correctly offer the seminars?</td> <td><b><?php echo $agnt_feedback['agentoffer'] ?></b></td>
										</tr>
										<tr>
											<td colspan=3>Did the caller wish to cancel the seminar?</td> <td><b><?php echo $agnt_feedback['callerwish'] ?></b></td>
											<td colspan=3>Did the agent confirm the caller's first & last name?</td> <td><b><?php echo $agnt_feedback['agentconfirm'] ?></b></td>
										</tr>
										<tr>
											<td colspan=3>Did the agent confirm the caller's address?</td> <td><b><?php echo $agnt_feedback['calleraddress'] ?></b></td>
											<td colspan=3>Did the agent ask for and correctly verify the email phonetically?</td> <td><b><?php echo $agnt_feedback['calleremail'] ?></b></td>
										</tr>
										<tr>
											<td colspan=3>Did the agent correctly ask for and verify the phone number</td> <td><b><?php echo $agnt_feedback['agentphone'] ?></b></td>
											<td colspan=3>Did the agent summarize the call with relevant detail?</td> <td><b><?php echo $agnt_feedback['agentsummerize'] ?></b></td>
										</tr>
										<tr>
											<td colspan=3>Did the agent offer to register a guest and attempt to collect and verify guests email address phonetically?</td> <td><b><?php echo $agnt_feedback['registerguest'] ?></b></td>
											<td colspan=3>Did the agent correctly disposition the call?</td> <td><b><?php echo $agnt_feedback['dispocall'] ?></b></td>
										</tr>
										<tr>
											<td colspan=3>Did the agent use the appropriate closing?</td> <td><b><?php echo $agnt_feedback['agentclosing'] ?></b></td>
											<td colspan=3>Did the agent use appropriate tone/pacing/grammar/pronunciation?</td> <td><b><?php echo $agnt_feedback['agenttone'] ?></b></td>
										</tr>
										<tr>
											<td colspan=3>Did the agent use active listening throughout the call?</td> <td><b><?php echo $agnt_feedback['activelistening'] ?></b></td>
											<td colspan=3>Was the agent professional throughout the call?</td> <td><b><?php echo $agnt_feedback['agentprofession'] ?></b></td>
										</tr>
										<tr>
											<td colspan=3>Did the agent show knowledge of TouchFuse throughout the call?</td> <td><b><?php echo $agnt_feedback['agentknowledge'] ?></b></td>
											<td colspan=3>Did the agent maintain call control throughout the call?</td> <td><b><?php echo $agnt_feedback['callcontrol'] ?></b></td>
										</tr>
										<tr>
											<td>Call Summary:</td> <td colspan=3><b><?php echo $agnt_feedback['call_summary'] ?></b></td>
											<td>Feedback:</td> <td colspan=3><b><?php echo $agnt_feedback['feedback'] ?></b></td>
										</tr>
										<?php if($agnt_feedback['attach_file']!=''){ ?>
										<tr oncontextmenu="return false;">
											<td colspan=3>Audio Files</td>
											<td colspan=5>
												<?php $attach_file = explode(",",$agnt_feedback['attach_file']);
												 foreach($attach_file as $mp){ ?>
													<audio controls='' style="background-color:#607F93">
													  <source src="<?php echo base_url(); ?>qa_files/qa_ameridial/touchfuse/<?php echo $mp; ?>" type="audio/ogg">
													  <source src="<?php echo base_url(); ?>qa_files/qa_ameridial/touchfuse/<?php echo $mp; ?>" type="audio/mpeg">
													</audio> </br>
												 <?php } ?>
											</td>
										</tr>
										<?php } ?>

									<?php }else if($campaign=='touchfuse_new'){ ?>

										<tr>
											<td>Overall Score:</td> <td><b><?php echo $agnt_feedback['overall_score'] ?></b></td>
										</tr>
										<tr>
											<td colspan="3">PARAMETER</td> <td>STATUS</td>
											<td colspan="3">PARAMETER</td> <td>STATUS</td>
										</tr>
										<tr>
											<td colspan=3>Was the call answered promptly?</td> <td><b><?php echo $agnt_feedback['callasnwer'] ?></b></td>
											<td colspan=3>Did the agent answer with thank you for calling (financial advisor's name)</td> <td><b><?php echo $agnt_feedback['agentanswer'] ?></b></td>
										</tr>
										<tr>
											<td colspan=3>Did the agent use appropriate tone/pacing/grammar/pronunciation?</td> <td><b><?php echo $agnt_feedback['agentzip'] ?></b></td>
											<td colspan=3>Did the agent use active listening throughout the call?</td> <td><b><?php echo $agnt_feedback['agentoffer'] ?></b></td>
										</tr>
										<tr>
											<td colspan=3>Was the agent professional throughout the call?</td> <td><b><?php echo $agnt_feedback['callerwish'] ?></b></td>
											<td colspan=3>Did the agent maintain call control throughout the call?</td> <td><b><?php echo $agnt_feedback['agentconfirm'] ?></b></td>
										</tr>
										<tr>
											<td colspan=3>Did the agent show knowledge of TouchFuse throughout the call?</td> <td><b><?php echo $agnt_feedback['calleraddress'] ?></b></td>
											<td colspan=3>Did the agent ask for the zip code?</td> <td><b><?php echo $agnt_feedback['calleremail'] ?></b></td>
										</tr>
										<tr>
											<td colspan=3>Did the agent correctly offer the seminars?</td> <td><b><?php echo $agnt_feedback['agentphone'] ?></b></td>
											<td colspan=3>Did the caller wish to cancel the seminar?</td> <td><b><?php echo $agnt_feedback['agentsummerize'] ?></b></td>
										</tr>
										<tr>
											<td colspan=3>Did the agent confirm the caller's address?</td> <td><b><?php echo $agnt_feedback['registerguest'] ?></b></td>
											<td colspan=3>Did the agent correctly ask for and verify the phone number</td> <td><b><?php echo $agnt_feedback['dispocall'] ?></b></td>
										</tr>
										<tr>
											<td colspan=3>Did the agent summarize the call with relevant detail?</td> <td><b><?php echo $agnt_feedback['agentclosing'] ?></b></td>
											<td colspan=3>Did the agent correctly disposition the call?</td> <td><b><?php echo $agnt_feedback['agenttone'] ?></b></td>
										</tr>
										<tr>
											<td colspan=3>Did the agent use the appropriate closing?</td> <td><b><?php echo $agnt_feedback['activelistening'] ?></b></td>
											<td colspan=3>Did the agent spell back the customer's first and last name?</td> <td><b><?php echo $agnt_feedback['agentprofession'] ?></b></td>
										</tr>
										<tr>
											<td colspan=3>Did the agent ask for and correctly verify the email phonetically (Use NATO Phonetics?	</td> <td><b><?php echo $agnt_feedback['agentknowledge'] ?></b></td>
											<td colspan=3>Rude Remarks</td> <td><b><?php echo $agnt_feedback['callcontrol'] ?></b></td>
										</tr>

										<tr>
											<td colspan=3>Security Breach / Call Dumping / Avoidance</td> <td><b><?php echo $agnt_feedback['Avoidance'] ?></b></td>
											
										</tr>
										<tr>
											<td>Call Summary:</td> <td colspan=3><b><?php echo $agnt_feedback['call_summary'] ?></b></td>
											<td>Feedback:</td> <td colspan=3><b><?php echo $agnt_feedback['feedback'] ?></b></td>
										</tr>
										<?php if($agnt_feedback['attach_file']!=''){ ?>
										<tr oncontextmenu="return false;">
											<td colspan=3>Audio Files</td>
											<td colspan=5>
												<?php $attach_file = explode(",",$agnt_feedback['attach_file']);
												 foreach($attach_file as $mp){ ?>
													<audio controls='' style="background-color:#607F93">
													  <source src="<?php echo base_url(); ?>qa_files/qa_ameridial/touchfuse/<?php echo $mp; ?>" type="audio/ogg">
													  <source src="<?php echo base_url(); ?>qa_files/qa_ameridial/touchfuse/<?php echo $mp; ?>" type="audio/mpeg">
													</audio> </br>
												 <?php } ?>
											</td>
										</tr>
										<?php } ?>

									<?php }else if($campaign=='brightway_prescreen_new'){ ?>

									<tr class="eml" style="height:25px; font-weight:bold">
										<td colspan=3>Prescreen</td>
										<td>Rating</td>
										<td colspan=2>Comments/Notes</td>
									</tr>
									<!--<tr>
										<td style="text-align:left;font-weight:bold;" colspan=3>Did the CSR Transfer to: </td>
										<td>
											<select class="form-control prescreen_point" id="" name="data[appropriate_greeting]" disabled>
												<option value="">-Select-</option>
												<option prescreen_val=-39 <?php echo $agnt_feedback['appropriate_greeting']=='Agent'?"selected":""; ?> value="Agent">Agent</option>
												<option prescreen_val=0 <?php echo $agnt_feedback['appropriate_greeting']=='Agency'?"selected":""; ?> value="Agency">Agency</option>
												<option prescreen_val=0 <?php echo $agnt_feedback['appropriate_greeting']=='Correct cold Transfer'?"selected":""; ?> value="Correct cold Transfer">Correct cold Transfer</option>
												<option prescreen_val=-39 <?php echo $agnt_feedback['appropriate_greeting']=='Incorrect cold Transfer'?"selected":""; ?> value="Incorrect cold Transfer">Incorrect cold Transfer</option>

											</select>
										</td>
										<td colspan=2><input type="text" class="form-control" name="data[cmt1]" value="<?php echo $agnt_feedback['cmt1']; ?>" disabled></td>
									</tr>-->
									<tr>
										<td style="text-align:left;" colspan=3>1.1 Did the CSR use the appropriate greeting? </td>
										<td>
											<select class="form-control prescreen_point" id="" name="data[appropriate_greeting]" disabled>
												<option value="">-Select-</option>
												<option prescreen_val=5 <?php echo $agnt_feedback['appropriate_greeting']=='Effective'?"selected":""; ?> value="Effective">Effective</option>
												<option prescreen_val=5 <?php echo $agnt_feedback['appropriate_greeting']=='Unacceptable'?"selected":""; ?> value="Unacceptable">Unacceptable</option>
												<option prescreen_val=5 <?php echo $agnt_feedback['appropriate_greeting']=='N/A'?"selected":""; ?> value="N/A">N/A</option>
											</select>
										</td>
										<td colspan=2><input type="text" class="form-control" name="data[cmt1]" value="<?php echo $agnt_feedback['cmt1']; ?>" disabled></td>
									</tr>
									<tr>
										<td style="text-align:left;" colspan=3>1.2 Was the Pre-Screen template completed correctly?</td>
										<td>
											<select class="form-control prescreen_point" id="" name="data[pre_screen_template]" disabled>
												<option value="">-Select-</option>
												<option prescreen_val=5 <?php echo $agnt_feedback['pre_screen_template']=='Effective'?"selected":""; ?> value="Effective">Effective</option>
												<option prescreen_val=5 <?php echo $agnt_feedback['pre_screen_template']=='Unacceptable'?"selected":""; ?> value="Unacceptable">Unacceptable</option>
												<option prescreen_val=5 <?php echo $agnt_feedback['pre_screen_template']=='N/A'?"selected":""; ?> value="N/A">N/A</option>
											</select>
										</td>
										<td colspan=2><input type="text" class="form-control" name="data[cmt2]" value="<?php echo $agnt_feedback['cmt2']; ?>" disabled></td>
									</tr>
									<tr>
										<td style="text-align:left;" colspan=3>1.3 Did the CSR disposition the call correctly?</td>
										<td>
											<select class="form-control prescreen_point" id="" name="data[csr_disposition]" disabled>
												<option value="">-Select-</option>
												<option prescreen_val=5 <?php echo $agnt_feedback['csr_disposition']=='Effective'?"selected":""; ?> value="Effective">Effective</option>
												<option prescreen_val=5 <?php echo $agnt_feedback['csr_disposition']=='Unacceptable'?"selected":""; ?> value="Unacceptable">Unacceptable</option>
												<option prescreen_val=5 <?php echo $agnt_feedback['csr_disposition']=='N/A'?"selected":""; ?> value="N/A">N/A</option>
											</select>
										</td>
										<td colspan=2><input type="text" class="form-control" name="data[cmt3]" value="<?php echo $agnt_feedback['cmt3']; ?>" disabled></td>
									</tr>
									<tr>
										<td style="text-align:left;" colspan=3>1.4 Did the agent use appropriate soft skills, no overtalk, and demonstrated professionalism? </td>
										<td>
											<select class="form-control prescreen_point" id="" name="data[appropriate_soft_skills]" disabled>
												<option value="">-Select-</option>
												<option prescreen_val=5 <?php echo $agnt_feedback['appropriate_soft_skills']=='Effective'?"selected":""; ?> value="Effective">Effective</option>
												<option prescreen_val=5 <?php echo $agnt_feedback['appropriate_soft_skills']=='Unacceptable'?"selected":""; ?> value="Unacceptable">Unacceptable</option>
												<option prescreen_val=5 <?php echo $agnt_feedback['appropriate_soft_skills']=='N/A'?"selected":""; ?> value="N/A">N/A</option>
											</select>
										</td>
										<td colspan=2><input type="text" class="form-control" name="data[cmt4]" value="<?php echo $agnt_feedback['cmt4']; ?>" disabled></td>
									</tr>
									<tr>
										<td style="text-align:left;" colspan=3>1.5 Did the CSR use the proper hold procedure?</td>
										<td>
											<select class="form-control prescreen_point" id="" name="data[csr_use_the_proper]" disabled>
												<option value="">-Select-</option>
												<option prescreen_val=3 <?php echo $agnt_feedback['csr_use_the_proper']=='Effective'?"selected":""; ?> value="Effective">Effective</option>
												<option prescreen_val=3 <?php echo $agnt_feedback['csr_use_the_proper']=='Unacceptable'?"selected":""; ?> value="Unacceptable">Unacceptable</option>
												<option prescreen_val=3 <?php echo $agnt_feedback['csr_use_the_proper']=='N/A'?"selected":""; ?> value="N/A">N/A</option>
											</select>
										</td>
										<td colspan=2><input type="text" class="form-control" name="data[cmt5]" value="<?php echo $agnt_feedback['cmt5']; ?>" disabled></td>
									</tr>
									<tr>
										<td style="text-align:left;" colspan=3>1.6  Did the CSR transfer to the correct skill based on the decision flow diagram?</td>
										<td>
											<select class="form-control prescreen_point" id="" name="data[csr_transfer_correct]" disabled>
												<option value="">-Select-</option>
												<option prescreen_val=10 <?php echo $agnt_feedback['csr_transfer_correct']=='Effective'?"selected":""; ?> value="Effective">Effective</option>
												<option prescreen_val=10 <?php echo $agnt_feedback['csr_transfer_correct']=='Unacceptable'?"selected":""; ?> value="Unacceptable">Unacceptable</option>
												<option prescreen_val=10 <?php echo $agnt_feedback['csr_transfer_correct']=='N/A'?"selected":""; ?> value="N/A">N/A</option>
											</select>
										</td>
										<td colspan=2><input type="text" class="form-control" name="data[cmt6]" value="<?php echo $agnt_feedback['cmt6']; ?>" disabled></td>
									</tr>
									<tr>
										<td style="text-align:left;" colspan=3>1.7  Was the caller appropriately authenticated? </td>
										<td>
											<select class="form-control prescreen_point" id="" name="data[appropriately_authenticated]" disabled>
												<option value="">-Select-</option>
												<option prescreen_val=3 <?php echo $agnt_feedback['appropriately_authenticated']=='Effective'?"selected":""; ?> value="Effective">Effective</option>
												<option prescreen_val=3 <?php echo $agnt_feedback['appropriately_authenticated']=='Unacceptable'?"selected":""; ?> value="Unacceptable">Unacceptable</option>
												<option prescreen_val=3 <?php echo $agnt_feedback['appropriately_authenticated']=='N/A'?"selected":""; ?> value="N/A">N/A</option>
											</select>
										</td>
										<td colspan=2><input type="text" class="form-control" name="data[cmt7]" value="<?php echo $agnt_feedback['cmt7']; ?>" disabled></td>
									</tr>
									<tr>
										<td style="text-align:left;" colspan=3>1.8 Did the CSR experience any audio issues? (For Tracking Puposes Only)</td>
										<td>
											<select class="form-control" id="" name="data[experience_any_audio]" disabled>
												<option value="">-Select-</option>
												<option <?php echo $agnt_feedback['experience_any_audio']=='Yes'?"selected":""; ?> value="Yes">Yes</option>
												<option <?php echo $agnt_feedback['experience_any_audio']=='No'?"selected":""; ?> value="No">No</option>
											</select>
										</td>
										<td colspan=2><input type="text" class="form-control" name="data[cmt8]" value="<?php echo $agnt_feedback['cmt8']; ?>" disabled></td>
									</tr>
									<tr>
										<td style="text-align:left;" colspan=3>1.9  If verified and change necessary, was AMS updated correctly?</td>
										<td>
											<select class="form-control prescreen_point" id="" name="data[verified_and_change]" disabled>
												<option value="">-Select-</option>
												<option prescreen_val=3 <?php echo $agnt_feedback['verified_and_change']=='Effective'?"selected":""; ?> value="Effective">Effective</option>
												<option prescreen_val=3 <?php echo $agnt_feedback['verified_and_change']=='Unacceptable'?"selected":""; ?> value="Unacceptable">Unacceptable</option>
												<option prescreen_val=3 <?php echo $agnt_feedback['verified_and_change']=='N/A'?"selected":""; ?> value="N/A">N/A</option>
											</select>
										</td>
										<td colspan=2><input type="text" class="form-control" name="data[cmt9]" value="<?php echo $agnt_feedback['cmt9']; ?>" disabled></td>
									</tr>

									<tr>
										<td colspan=2>Call Summary:</td>
										<td colspan=4><textarea class="form-control" id="" name="data[call_summary]" disabled><?php echo $agnt_feedback['call_summary'] ?></textarea></td>
									</tr>
									<tr>
										<td colspan=2>Feedback:</td>
										<td colspan=4><textarea class="form-control" id="" name="data[feedback]" disabled><?php echo $agnt_feedback['feedback'] ?></textarea></td>
									</tr>

									<?php if($pnid==0){ ?>
									<tr>
										<td colspan=2>Upload Files</td>
										<td colspan=4><input type="file" multiple class="form-control" id="attach_file" name="attach_file[]"></td>
									</tr>
									<?php }else{ ?>
									<tr>
										<td colspan=2>Upload Files</td>
										<?php if($agnt_feedback['attach_file']!=''){ ?>
											<td colspan=4>
												<?php $attach_file = explode(",",$agnt_feedback['attach_file']);
												 foreach($attach_file as $mp){ ?>
													<audio controls='' style="background-color:#607F93">
													  <source src="<?php echo base_url(); ?>qa_files/qa_ameridial/prescreen_new/<?php echo $mp; ?>" type="audio/ogg">
													  <source src="<?php echo base_url(); ?>qa_files/qa_ameridial/prescreen_new/<?php echo $mp; ?>" type="audio/mpeg">
													</audio> </br>
												 <?php } ?>
											</td>
										<?php }else{
												echo '<td colspan=6><b>No Files</b></td>';
											  }
										} ?>
									</tr>

									<?php if($pnid!=0){ ?>
										<tr><td colspan=2 style="font-size:16px; font-weight:bold">Agent Feedback Acceptance:</td><td colspan=4><?php echo $agnt_feedback['agnt_fd_acpt'] ?></td></tr>
										<tr><td colspan=2 style="font-size:16px; font-weight:bold">Agent Review:</td><td colspan=4><?php echo $agnt_feedback['agent_rvw_note'] ?></td></tr>
										<tr><td colspan=2 style="font-size:16px; font-weight:bold">Management Review:</td><td colspan=4><?php echo $agnt_feedback['mgnt_rvw_note'] ?></td></tr>
										<tr><td colspan=2 style="font-size:16px; font-weight:bold">Client Review:</td><td colspan=4><?php echo $agnt_feedback['client_rvw_note'] ?></td></tr>

									<?php } ?>

								<?php } else if($campaign=='brightway_evaluation_new') { ?>

                                  <tr cla
                                  ss="eml" style="height:25px; font-weight:bold">
										<td colspan=3>evaluation</td>
										<td>Rating</td>
										<td colspan=2>Comments/Notes</td>
									</tr>
									<tr style="background-color:#aac3aa; height:25px;
									 font-weight:bold">
										<td colspan=6>Call Opening</td>
									</tr>
									<tr>
										<td style="text-align:left;" colspan=3>1.1 Did the CSR use the appropriate greeting including Brightway branding, their own name, and ask how he/she can assist?</td>
										<td>
											<select class="form-control evaluation_point" id="" name="data[appropriate_greeting_including]" disabled>
												<option value="">-Select-</option>
												<option evaluation_val=5 <?php echo $agnt_feedback['appropriate_greeting_including']=='Effective'?"selected":""; ?> value="Effective">Effective</option>
												<option evaluation_val=5 <?php echo $agnt_feedback['appropriate_greeting_including']=='Unacceptable'?"selected":""; ?> value="Unacceptable">Unacceptable</option>
												<option evaluation_val=5 <?php echo $agnt_feedback['appropriate_greeting_including']=='N/A'?"selected":""; ?> value="N/A">N/A</option>
											</select>
										</td>
										<td colspan=2><input type="text" class="form-control" name="data[cmt1]" value="<?php echo $agnt_feedback['cmt1']; ?>"></td>
									</tr>
									<tr>
										<td style="text-align:left;" colspan=3>1.2 Did the CSR confirm and capture all necessary information? (name of caller, name of insured, policy #, coverage location & callback #) :</td>
										<td>
											<select class="form-control evaluation_point" id="" name="data[confirm_and_capture]" disabled>
												<option value="">-Select-</option>
												<option evaluation_val=5 <?php echo $agnt_feedback['confirm_and_capture']=='Effective'?"selected":""; ?> value="Effective">Effective</option>
												<option evaluation_val=5 <?php echo $agnt_feedback['confirm_and_capture']=='Unacceptable'?"selected":""; ?> value="Unacceptable">Unacceptable</option>
												<option evaluation_val=5 <?php echo $agnt_feedback['confirm_and_capture']=='N/A'?"selected":""; ?> value="N/A">N/A</option>
											</select>
										</td>
										<td colspan=2><input type="text" class="form-control" name="data[cmt2]" value="<?php echo $agnt_feedback['cmt2']; ?>"></td>
									</tr>
									<tr>
										<td style="text-align:left;" colspan=3>1.3 If outbound, did the CSP advise they were on a recorded line?</td>
										<td>
											<select class="form-control evaluation_point" id="" name="data[csr_advise_they]" disabled>
												<option value="">-Select-</option>
												<option evaluation_val=5 <?php echo $agnt_feedback['csr_advise_they']=='Effective'?"selected":""; ?> value="Effective">Effective</option>
												<option evaluation_val=5 <?php echo $agnt_feedback['csr_advise_they']=='Unacceptable'?"selected":""; ?> value="Unacceptable">Unacceptable</option>
												<option evaluation_val=5 <?php echo $agnt_feedback['csr_advise_they']=='N/A'?"selected":""; ?> value="N/A">N/A</option>
											</select>
										</td>
										<td colspan=2><input type="text" class="form-control" name="data[cmt3]" value="<?php echo $agnt_feedback['cmt3']; ?>"></td>
									</tr>
									<tr style="background-color:#aac3aa; height:25px; font-weight:bold">
										<td colspan=8>Soft Skills</td>
									</tr>
									<tr>
										<td style="text-align:left;" colspan=4>2.1 Was the CSR professional and use appropriate tone and pace on the call?</td>
										<td>
											<select class="form-control evaluation_point" id="" name="data[csr_professional_appropriate]" disabled>
												<option value="">-Select-</option>
												<option evaluation_val=5 <?php echo $agnt_feedback['csr_professional_appropriate']=='Effective'?"selected":""; ?> value="Effective">Effective</option>
												<option evaluation_val=5 <?php echo $agnt_feedback['csr_professional_appropriate']=='Unacceptable'?"selected":""; ?> value="Unacceptable">Unacceptable</option>
												<option evaluation_val=5 <?php echo $agnt_feedback['csr_professional_appropriate']=='N/A'?"selected":""; ?> value="N/A">N/A</option>
											</select>
										</td>
										<td colspan=2><input type="text" class="form-control" name="data[cmt4]" value="<?php echo $agnt_feedback['cmt4']; ?>"></td>
									</tr>
									<tr>
										<td style="text-align:left;" colspan=4>2.2 Did the CSR demonstrate emapthy or sympathy, as needed?</td>
										<td>
											<select class="form-control evaluation_point" id="" name="data[csr_demonstrate_emapthy]" disabled>
												<option value="">-Select-</option>
												<option evaluation_val=5 <?php echo $agnt_feedback['csr_demonstrate_emapthy']=='Effective'?"selected":""; ?> value="Effective">Effective</option>
												<option evaluation_val=5 <?php echo $agnt_feedback['csr_demonstrate_emapthy']=='Unacceptable'?"selected":""; ?> value="Unacceptable">Unacceptable</option>
												<option evaluation_val=5 <?php echo $agnt_feedback['csr_demonstrate_emapthy']=='N/A'?"selected":""; ?> value="N/A">N/A</option>
											</select>
										</td>
										<td colspan=2><input type="text" class="form-control" name="data[cmt5]" value="<?php echo $agnt_feedback['cmt5']; ?>"></td>
									</tr>
									<tr>
										<td style="text-align:left;" colspan=4>2.3 Did the CSR actively listen to understand the needs of the customer?</td>
										<td>
											<select class="form-control evaluation_point" id="" name="data[csr_actively_listen]" disabled>
												<option value="">-Select-</option>
												<option evaluation_val=5 <?php echo $agnt_feedback['csr_actively_listen']=='Effective'?"selected":""; ?> value="Effective">Effective</option>
												<option evaluation_val=5 <?php echo $agnt_feedback['csr_actively_listen']=='Unacceptable'?"selected":""; ?> value="Unacceptable">Unacceptable</option>
												<option evaluation_val=5 <?php echo $agnt_feedback['csr_actively_listen']=='N/A'?"selected":""; ?> value="N/A">N/A</option>
											</select>
										</td>
										<td colspan=2><input type="text" class="form-control" name="data[cmt6]" value="<?php echo $agnt_feedback['cmt6']; ?>"></td>
									</tr>
									<tr>
										<td style="text-align:left;" colspan=4>2.4 Did the CSR use probing questions and verbally verify the information obtained and processed? </td>
										<td>
											<select class="form-control evaluation_point" id="" name="data[csr_probing_questions]" disabled>
												<option value="">-Select-</option>
												<option evaluation_val=5 <?php echo $agnt_feedback['csr_probing_questions']=='Effective'?"selected":""; ?> value="Effective">Effective</option>
												<option evaluation_val=5 <?php echo $agnt_feedback['csr_probing_questions']=='Unacceptable'?"selected":""; ?> value="Unacceptable">Unacceptable</option>
												<option evaluation_val=5 <?php echo $agnt_feedback['csr_probing_questions']=='N/A'?"selected":""; ?> value="N/A">N/A</option>
											</select>
										</td>
										<td colspan=2><input type="text" class="form-control" name="data[cmt7]" value="<?php echo $agnt_feedback['cmt7']; ?>"></td>
									</tr>
									<tr>
										<td style="text-align:left;" colspan=4>2.5 Did the CSR follow appropriate hold procedure?</td>
										<td>
											<select class="form-control evaluation_point" id="" name="data[csr_follow_appropriate]" disabled>
												<option value="">-Select-</option>
												<option evaluation_val=5 <?php echo $agnt_feedback['csr_follow_appropriate']=='Effective'?"selected":""; ?> value="Effective">Effective</option>
												<option evaluation_val=5 <?php echo $agnt_feedback['csr_follow_appropriate']=='Unacceptable'?"selected":""; ?> value="Unacceptable">Unacceptable</option>
												<option evaluation_val=5 <?php echo $agnt_feedback['csr_follow_appropriate']=='N/A'?"selected":""; ?> value="N/A">N/A</option>
											</select>
										</td>
										<td colspan=2><input type="text" class="form-control" name="data[cmt8]" value="<?php echo $agnt_feedback['cmt8']; ?>"></td>
									</tr>
									<tr>
										<td style="text-align:left;" colspan=4>2.6 Did the CSR maintain call control and avoid dead air?</td>
										<td>
											<select class="form-control evaluation_point" id="" name="data[csr_maintain_call]" disabled>
												<option value="">-Select-</option>
												<option evaluation_val=3 <?php echo $agnt_feedback['csr_maintain_call']=='Effective'?"selected":""; ?> value="Effective">Effective</option>
												<option evaluation_val=3 <?php echo $agnt_feedback['csr_maintain_call']=='Unacceptable'?"selected":""; ?> value="Unacceptable">Unacceptable</option>
												<option evaluation_val=3 <?php echo $agnt_feedback['csr_maintain_call']=='N/A'?"selected":""; ?> value="N/A">N/A</option>
											</select>
										</td>
										<td colspan=2><input type="text" class="form-control" name="data[cmt9]" value="<?php echo $agnt_feedback['cmt9']; ?>"></td>
									</tr>
									<tr>
										<td style="text-align:left;" colspan=3>2.7  Did the CSR provide accurate information both verbally and in writing?</td>
										<td>
											<select class="form-control evaluation_point" id="" name="data[csr_provide_accurate]" disabled>
												<option value="">-Select-</option>
												<option evaluation_val=10 <?php echo $agnt_feedback['csr_provide_accurate']=='Effective'?"selected":""; ?> value="Effective">Effective</option>
												<option evaluation_val=10 <?php echo $agnt_feedback['csr_provide_accurate']=='Unacceptable'?"selected":""; ?> value="Unacceptable">Unacceptable</option>
												<option evaluation_val=10 <?php echo $agnt_feedback['csr_provide_accurate']=='N/A'?"selected":""; ?> value="N/A">N/A</option>
											</select>
										</td>
										<td colspan=2><input type="text" class="form-control" name="data[cmt10]" value="<?php echo $agnt_feedback['cmt10']; ?>"></td>
									</tr>

                                    <tr style="background-color:#aac3aa; height:25px; font-weight:bold">
										<td colspan=6>Processes and Procedures</td>
									</tr>

									<tr>
										<td style="text-align:left;" colspan=3>3.1  If call was transferred, was correct transfer process used?</td>
										<td>
											<select class="form-control evaluation_point" id="" name="data[call_was_transferred]" disabled>
												<option value="">-Select-</option>
												<option evaluation_val=5 <?php echo $agnt_feedback['call_was_transferred']=='Effective'?"selected":""; ?> value="Effective">Effective</option>
												<option evaluation_val=5 <?php echo $agnt_feedback['call_was_transferred']=='Unacceptable'?"selected":""; ?> value="Unacceptable">Unacceptable</option>
												<option evaluation_val=5 <?php echo $agnt_feedback['call_was_transferred']=='N/A'?"selected":""; ?> value="N/A">N/A</option>
											</select>
										</td>
										<td colspan=2><input type="text" class="form-control" name="data[cmt11]" value="<?php echo $agnt_feedback['cmt1']; ?>"></td>
									</tr>
									<tr>
										<td style="text-align:left;" colspan=3>3.2  Did the CSR attempt a callback if the call was disconnected?</td>
										<td>
											<select class="form-control evaluation_point" id="" name="data[csr_attempt_callback]" disabled>
												<option value="">-Select-</option>
												<option evaluation_val=5 <?php echo $agnt_feedback['csr_attempt_callback']=='Effective'?"selected":""; ?> value="Effective">Effective</option>
												<option evaluation_val=5 <?php echo $agnt_feedback['csr_attempt_callback']=='Unacceptable'?"selected":""; ?> value="Unacceptable">Unacceptable</option>
												<option evaluation_val=5 <?php echo $agnt_feedback['csr_attempt_callback']=='N/A'?"selected":""; ?> value="N/A">N/A</option>
											</select>
										</td>
										<td colspan=2><input type="text" class="form-control" name="data[cmt12]" value="<?php echo $agnt_feedback['cmt12']; ?>"></td>
									</tr>
									<tr>
										<td style="text-align:left;" colspan=3>3.3  Did the CSR connect activities to the current/correct policy?</td>
										<td>
											<select class="form-control evaluation_point" id="" name="data[csr_connect_activities]" disabled>
												<option value="">-Select-</option>
												<option evaluation_val=5 <?php echo $agnt_feedback['csr_connect_activities']=='Effective'?"selected":""; ?> value="Effective">Effective</option>
												<option evaluation_val=5 <?php echo $agnt_feedback['csr_connect_activities']=='Unacceptable'?"selected":""; ?> value="Unacceptable">Unacceptable</option>
												<option evaluation_val=5 <?php echo $agnt_feedback['csr_connect_activities']=='N/A'?"selected":""; ?> value="N/A">N/A</option>
											</select>
										</td>
										<td colspan=2><input type="text" class="form-control" name="data[cmt13]" value="<?php echo $agnt_feedback['cmt13']; ?>"></td>
									</tr>
									<tr>
										<td style="text-align:left;" colspan=3>3.4 Did the CSR document correctly in all areas (notes, activities, templates, etc.)</td>
										<td>
											<select class="form-control evaluation_point" id="" name="data[csr_document_correctly]" disabled>
												<option value="">-Select-</option>
												<option evaluation_val=6 <?php echo $agnt_feedback['csr_document_correctly']=='Effective'?"selected":""; ?> value="Effective">Effective</option>
												<option evaluation_val=6 <?php echo $agnt_feedback['csr_document_correctly']=='Unacceptable'?"selected":""; ?> value="Unacceptable">Unacceptable</option>
												<option evaluation_val=6 <?php echo $agnt_feedback['csr_document_correctly']=='N/A'?"selected":""; ?> value="N/A">N/A</option>
											</select>
										</td>
										<td colspan=2><input type="text" class="form-control" name="data[cmt14]" value="<?php echo $agnt_feedback['cmt14']; ?>"></td>
									</tr>
									<tr>
										<td style="text-align:left;" colspan=3>3.5 Did CSR include all attachments including emails, fax confirmation, documents sent, etc.</td>
										<td>
											<select class="form-control evaluation_point" id="" name="data[include_all_attachments]" disabled>
												<option value="">-Select-</option>
												<option evaluation_val=3 <?php echo $agnt_feedback['include_all_attachments']=='Effective'?"selected":""; ?> value="Effective">Effective</option>
												<option evaluation_val=3 <?php echo $agnt_feedback['include_all_attachments']=='Unacceptable'?"selected":""; ?> value="Unacceptable">Unacceptable</option>
												<option evaluation_val=3 <?php echo $agnt_feedback['include_all_attachments']=='N/A'?"selected":""; ?> value="N/A">N/A</option>
											</select>
										</td>
										<td colspan=2><input type="text" class="form-control" name="data[cmt15]" value="<?php echo $agnt_feedback['cmt15']; ?>"></td>
									</tr>
									<tr>
										<td style="text-align:left;" colspan=3>3.6 Did the CSR successfully resolve all issues and concerns? (If not, did the CSR correctly document status?)</td>
										<td>
											<select class="form-control evaluation_point" id="" name="data[csr_successfully_resolve]" disabled>
												<option value="">-Select-</option>
												<option evaluation_val=5 <?php echo $agnt_feedback['csr_successfully_resolve']=='Effective'?"selected":""; ?> value="Effective">Effective</option>
												<option evaluation_val=5 <?php echo $agnt_feedback['csr_successfully_resolve']=='Unacceptable'?"selected":""; ?> value="Unacceptable">Unacceptable</option>
												<option evaluation_val=5 <?php echo $agnt_feedback['csr_successfully_resolve']=='N/A'?"selected":""; ?> value="N/A">N/A</option>
											</select>
										</td>
										<td colspan=2><input type="text" class="form-control" name="data[cmt16]" value="<?php echo $agnt_feedback['cmt16']; ?>"></td>
									</tr>
									<tr>
										<td style="text-align:left;" colspan=3>3.7 Did the CSR access and effectively utilize all available systems/resources?</td>
										<td>
											<select class="form-control evaluation_point" id="" name="data[csr_access_effectively]" disabled>
												<option value="">-Select-</option>
												<option evaluation_val=4 <?php echo $agnt_feedback['csr_access_effectively']=='Effective'?"selected":""; ?> value="Effective">Effective</option>
												<option evaluation_val=4 <?php echo $agnt_feedback['csr_access_effectively']=='Unacceptable'?"selected":""; ?> value="Unacceptable">Unacceptable</option>
												<option evaluation_val=4 <?php echo $agnt_feedback['csr_access_effectively']=='N/A'?"selected":""; ?> value="N/A">N/A</option>
											</select>
										</td>
										<td colspan=2><input type="text" class="form-control" name="data[cmt17]" value="<?php echo $agnt_feedback['cmt17']; ?>"></td>
									</tr>
									<tr>
										<td style="text-align:left;" colspan=3>3.8  If a renewal payment was processed, and there is an open renewal suspense, was the suspense updated and closed?</td>
										<td>
											<select class="form-control evaluation_point" id="" name="data[renewal_payment]" disabled>
												<option value="">-Select-</option>
												<option evaluation_val=4 <?php echo $agnt_feedback['renewal_payment']=='Effective'?"selected":""; ?> value="Effective">Effective</option>
												<option evaluation_val=4 <?php echo $agnt_feedback['renewal_payment']=='Unacceptable'?"selected":""; ?> value="Unacceptable">Unacceptable</option>
												<option evaluation_val=4 <?php echo $agnt_feedback['renewal_payment']=='N/A'?"selected":""; ?> value="N/A">N/A</option>
											</select>
										</td>
										<td colspan=2><input type="text" class="form-control" name="data[cmt18]" value="<?php echo $agnt_feedback['cmt18']; ?>"></td>
									</tr>
									<tr>
										<td style="text-align:left;" colspan=3>3.9 Did the agent experience any audio issues? (For Tracking Purposes Only)</td>
										<td>
											<select class="form-control" id="" name="data[agent_experience]" disabled>
												<option value="">-Select-</option>
												<option <?php echo $agnt_feedback['agent_experience']=='Yes'?"selected":""; ?> value="Yes">Yes</option>
												<option <?php echo $agnt_feedback['agent_experience']=='No'?"selected":""; ?> value="No">No</option>
											</select>
										</td>
										<td colspan=2><input type="text" class="form-control" name="data[cmt19]" value="<?php echo $agnt_feedback['cmt19']; ?>"></td>
									</tr>
									<tr style="background-color:#aac3aa; height:25px; font-weight:bold">
										<td colspan=6>Call Closing</td>
									</tr>

									<tr>
										<td style="text-align:left;" colspan=3>4.1 Did CSR offer additional assistance and thank the customer?</td>
										<td>
											<select class="form-control evaluation_point" id="" name="data[offer_additional_assistance]" disabled>
												<option value="">-Select-</option>
												<option evaluation_val=2 <?php echo $agnt_feedback['offer_additional_assistance']=='Effective'?"selected":""; ?> value="Effective">Effective</option>
												<option evaluation_val=2 <?php echo $agnt_feedback['offer_additional_assistance']=='Unacceptable'?"selected":""; ?> value="Unacceptable">Unacceptable</option>
												<option evaluation_val=2 <?php echo $agnt_feedback['offer_additional_assistance']=='N/A'?"selected":""; ?> value="N/A">N/A</option>
											</select>
										</td>
										<td colspan=2><input type="text" class="form-control" name="data[cmt20]" value="<?php echo $agnt_feedback['cmt20']; ?>"></td>
									</tr>
									<tr>
										<td style="text-align:left;" colspan=3>4.2 Did the CSR offer additional assistance before concluding the call?</td>
										<td>
											<select class="form-control evaluation_point" id="" name="data[concluding_the_call]" disabled>
												<option value="">-Select-</option>
												<option evaluation_val=2 <?php echo $agnt_feedback['concluding_the_call']=='Effective'?"selected":""; ?> value="Effective">Effective</option>
												<option evaluation_val=2 <?php echo $agnt_feedback['concluding_the_call']=='Unacceptable'?"selected":""; ?> value="Unacceptable">Unacceptable</option>
												<option evaluation_val=2 <?php echo $agnt_feedback['concluding_the_call']=='N/A'?"selected":""; ?> value="N/A">N/A</option>
											</select>
										</td>
										<td colspan=2><input type="text" class="form-control" name="data[cmt21]" value="<?php echo $agnt_feedback['cmt21']; ?>"></td>
									</tr>

									<tr style="background-color:#aac3aa; height:25px; font-weight:bold">
										<td colspan=6>Auto-Fail</td>
									</tr>

									<tr>
										<td style="text-align:left;color: red;" colspan=3>5.1 Was the customer adversely impacted in any way? </td>
										<td>
											<select class="form-control evaluation_point" id="fatal1" name="data[customer_adversely]" disabled>
												<option value="">-Select-</option>
												<option evaluation_val=5 <?php echo $agnt_feedback['customer_adversely']=='Effective'?"selected":""; ?> value="Effective">Effective</option>
												<option evaluation_val=5 <?php echo $agnt_feedback['customer_adversely']=='Unacceptable'?"selected":""; ?> value="Unacceptable">Unacceptable</option>
												<option evaluation_val=5 <?php echo $agnt_feedback['customer_adversely']=='N/A'?"selected":""; ?> value="N/A">N/A</option>
											</select>
										</td>
										<td colspan=2><input type="text" class="form-control" name="data[cmt22]" value="<?php echo $agnt_feedback['cmt22']; ?>"></td>
									</tr>
									<tr>
										<td style="text-align:left;color: red;" colspan=3>5.2 Were there any additional adverse impacts?</td>
										<td>
											<select class="form-control evaluation_point" id="fatal2" name="data[additional_adverse]" disabled>
												<option value="">-Select-</option>
												<option evaluation_val=5 <?php echo $agnt_feedback['additional_adverse']=='Effective'?"selected":""; ?> value="Effective">Effective</option>
												<option evaluation_val=5 <?php echo $agnt_feedback['additional_adverse']=='Unacceptable'?"selected":""; ?> value="Unacceptable">Unacceptable</option>
												<option evaluation_val=5 <?php echo $agnt_feedback['additional_adverse']=='N/A'?"selected":""; ?> value="N/A">N/A</option>
											</select>
										</td>
										<td colspan=2><input type="text" class="form-control" name="data[cmt23]" value="<?php echo $agnt_feedback['cmt23']; ?>"></td>
									</tr>

									<tr>
										<td colspan=2>Call Summary:</td>
										<td colspan=4><textarea class="form-control" id="" name="data[call_summary]"><?php echo $agnt_feedback['call_summary'] ?></textarea></td>
									</tr>
									<tr>
										<td colspan=2>Feedback:</td>
										<td colspan=4><textarea class="form-control" id="" name="data[feedback]"><?php echo $agnt_feedback['feedback'] ?></textarea></td>
									</tr>

									<?php if($pnid==0){ ?>
									<tr>
										<td colspan=2>Upload Files</td>
										<td colspan=4><input type="file" multiple class="form-control" id="attach_file" name="attach_file[]"></td>
									</tr>
									<?php }else{ ?>
									<tr>
										<td colspan=2>Upload Files</td>
										<?php if($agnt_feedback['attach_file']!=''){ ?>
											<td colspan=4>
												<?php $attach_file = explode(",",$agnt_feedback['attach_file']);
												 foreach($attach_file as $mp){ ?>
													<audio controls='' style="background-color:#607F93">
													  <source src="<?php echo base_url(); ?>qa_files/qa_ameridial/evaluation_new/<?php echo $mp; ?>" type="audio/ogg">
													  <source src="<?php echo base_url(); ?>qa_files/qa_ameridial/evaluation_new/<?php echo $mp; ?>" type="audio/mpeg">
													</audio> </br>
												 <?php } ?>
											</td>
										<?php }else{
												echo '<td colspan=6><b>No Files</b></td>';
											  }
										} ?>
									</tr>

									<?php if($pnid!=0){ ?>
										<tr><td colspan=2 style="font-size:16px; font-weight:bold">Agent Feedback Acceptance:</td><td colspan=4><?php echo $agnt_feedback['agnt_fd_acpt'] ?></td></tr>
										<tr><td colspan=2 style="font-size:16px; font-weight:bold">Agent Review:</td><td colspan=4><?php echo $agnt_feedback['agent_rvw_note'] ?></td></tr>
										<tr><td colspan=2 style="font-size:16px; font-weight:bold">Management Review:</td><td colspan=4><?php echo $agnt_feedback['mgnt_rvw_note'] ?></td></tr>
										<tr><td colspan=2 style="font-size:16px; font-weight:bold">Client Review:</td><td colspan=4><?php echo $agnt_feedback['client_rvw_note'] ?></td></tr>

									<?php } ?>

								<?php }else if($campaign=='hoveround'){ ?>

										<tr>
											<td>Overall Score:</td> <td><b><?php echo $agnt_feedback['overall_score'] ?></b></td>
										</tr>
										<tr>
											<td colspan="3">PARAMETER</td> <td>STATUS</td>
											<td colspan="3">PARAMETER</td> <td>STATUS</td>
										</tr>
										<tr>
											<td colspan=3>Was the agent ready for the call (no dead air)?</td> <td><b><?php echo $agnt_feedback['agentreadyforcall'] ?></b></td>
											<td colspan=3>Did the agent give the proper introduction including company name?</td> <td><b><?php echo $agnt_feedback['agentgiveintro'] ?></b></td>
										</tr>
										<tr>
											<td colspan=3>Did the agent correctly probe and transfer if applicable?</td> <td><b><?php echo $agnt_feedback['agentcorrectprobe'] ?></b></td>
											<td colspan=3>Did the agent verify all customer information/NATO spell back of email address?</td> <td><b><?php echo $agnt_feedback['agentverifycustomer'] ?></b></td>
										</tr>
										<tr>
											<td colspan=3>Did the agent close the call with proper branding?</td> <td><b><?php echo $agnt_feedback['agentclosecall'] ?></b></td>
											<td colspan=3>Did the agent disposition the call properly?</td> <td><b><?php echo $agnt_feedback['agentdisposition'] ?></b></td>
										</tr>
										<tr>
											<td colspan=3>Was the agent polite and courteous?</td> <td><b><?php echo $agnt_feedback['agentpolite'] ?></b></td>
											<td colspan=3>Did the agent show energy, empathy and enthusiasm?</td> <td><b><?php echo $agnt_feedback['agentshowenergy'] ?></b></td>
										</tr>
										<tr>
											<td colspan=3>Did the agent have good tone, pacing, grammar & pronunciation?</td> <td><b><?php echo $agnt_feedback['agenthavegoodtone'] ?></b></td>
											<td colspan=3>Did the agent give accurate information and show a complete grasp of information?</td> <td><b><?php echo $agnt_feedback['agentgiveaccurateinfo'] ?></b></td>
										</tr>
										<tr>
											<td>Call Summary:</td> <td colspan=3><b><?php echo $agnt_feedback['call_summary'] ?></b></td>
											<td>Feedback:</td> <td colspan=3><b><?php echo $agnt_feedback['feedback'] ?></b></td>
										</tr>
										<?php if($agnt_feedback['attach_file']!=''){ ?>
										<tr oncontextmenu="return false;">
											<td colspan=3>Audio Files</td>
											<td colspan=5>
												<?php $attach_file = explode(",",$agnt_feedback['attach_file']);
												 foreach($attach_file as $mp){ ?>
													<audio controls='' style="background-color:#607F93">
													  <source src="<?php echo base_url(); ?>qa_files/qa_ameridial/hoveround/<?php echo $mp; ?>" type="audio/ogg">
													  <source src="<?php echo base_url(); ?>qa_files/qa_ameridial/hoveround/<?php echo $mp; ?>" type="audio/mpeg">
													</audio> </br>
												 <?php } ?>
											</td>
										</tr>
										<?php } ?>

									<?php }else if($campaign=='ncpssm'){ ?>

										<tr>
											<td>Overall Score:</td> <td><b><?php echo $agnt_feedback['overall_score'] ?></b></td>
										</tr>
										<tr>
											<td colspan=2>PARAMETER</td>
											<td colspan=2>SUB PARAMETER</td> <td>STATUS</td>
											<td colspan=2>SUB PARAMETER</td> <td>STATUS</td>
										</tr>
										<tr>
											<td colspan=2>Intro</td>
											<td colspan=2>Thanks caller for calling NCPSSM</td> <td><b><?php echo $agnt_feedback['introcaller'] ?></b></td>
											<td colspan=2>Verified opening info (First and Last Name, Member?)</td> <td><b><?php echo $agnt_feedback['introopenning'] ?></b></td>
										</tr>
										<tr>
											<td rowspan=3 colspan=2>Script and ask</td>
											<td colspan=2>Gathered and spelled back all necessary information</td> <td><b><?php echo $agnt_feedback['scriptgathered'] ?></b></td>
											<td colspan=2>Verified/Asked for Email Address</td> <td><b><?php echo $agnt_feedback['scriptemail'] ?></b></td>
										</tr>
										<tr>
											<td colspan=2>Makes thank you/supporting statements</td> <td><b><?php echo $agnt_feedback['scriptstatement'] ?></b></td>
											<td colspan=2>Familiarity with FAQ -Organization, SS & Medicare Issues</td> <td><b><?php echo $agnt_feedback['scriptmedicareissue'] ?></b></td>
										</tr>
										<tr>
											<td colspan=2>Personalized call (Mr./Mrs etc)</td> <td><b><?php echo $agnt_feedback['scriptpersonalizecall'] ?></b></td>
											<td colspan=2>Thanked Caller for being a member/previous support</td> <td><b><?php echo $agnt_feedback['scriptcallersupport'] ?></b></td>
										</tr>
										<tr>
											<td rowspan=4 colspan=2>Tone/Inflection</td>
											<td colspan=2>Energy/enthusiasm</td> <td><b><?php echo $agnt_feedback['toneenthusiasm'] ?></b></td>
											<td colspan=2>Proper pace</td> <td><b><?php echo $agnt_feedback['toneproperpace'] ?></b></td>
										</tr>
										<tr>
											<td colspan=2>Maintained control of the conversation/Minimal Dead Air</td> <td><b><?php echo $agnt_feedback['tonecontroldeadair'] ?></b></td>
											<td colspan=2>Spoke clearly/utilized proper grammar (NO SLANG)</td> <td><b><?php echo $agnt_feedback['tonespokeclearly'] ?></b></td>
										</tr>
										<tr>
											<td colspan=2>Good listening skills/Does not interrupt</td> <td><b><?php echo $agnt_feedback['tonegoodlistening'] ?></b></td>
											<td colspan=2>Empathized with caller</td> <td><b><?php echo $agnt_feedback['toneempathized'] ?></b></td>
										</tr>
										<tr>
											<td colspan=2>Overall professionalism</td> <td><b><?php echo $agnt_feedback['toneprofessionalism'] ?></b></td>
										</tr>
										<tr>
											<td rowspan=2 colspan=2>Close</td>
											<td colspan=2>Proper thanks at call conclusion</td> <td><b><?php echo $agnt_feedback['closecallconslusion'] ?></b></td>
											<td colspan=2>Provided correct and appropriate information</td> <td><b><?php echo $agnt_feedback['closecorrectinfo'] ?></b></td>
										</tr>
										<tr>
											<td colspan=2>Confirmed caller has no further questions</td> <td><b><?php echo $agnt_feedback['closeconfirmcaller'] ?></b></td>
										</tr>
										<tr>
											<td rowspan=2 colspan=2>Other (Any score here =ZERO total for call)</td>
											<td colspan=2>False/inappropriate information</td> <td><b><?php echo $agnt_feedback['autofailinfo'] ?></b></td>
											<td colspan=2>Hung up inappropriately</td> <td><b><?php echo $agnt_feedback['autofailhungup'] ?></b></td>
										</tr>
										<tr>
											<td colspan=2>Unprofessional behavior</td> <td><b><?php echo $agnt_feedback['autofailbehaviour'] ?></b></td>
											<td colspan=2>Inappropriate language</td> <td><b><?php echo $agnt_feedback['autofaillanguage'] ?></b></td>
										</tr>
										<tr>
											<td>Call Summary:</td> <td colspan=3><b><?php echo $agnt_feedback['call_summary'] ?></b></td>
											<td>Feedback:</td> <td colspan=3><b><?php echo $agnt_feedback['feedback'] ?></b></td>
										</tr>
										<?php if($agnt_feedback['attach_file']!=''){ ?>
										<tr oncontextmenu="return false;">
											<td colspan=3>Audio Files</td>
											<td colspan=5>
												<?php $attach_file = explode(",",$agnt_feedback['attach_file']);
												 foreach($attach_file as $mp){ ?>
													<audio controls='' style="background-color:#607F93">
													  <source src="<?php echo base_url(); ?>qa_files/qa_ameridial/ncpssm/<?php echo $mp; ?>" type="audio/ogg">
													  <source src="<?php echo base_url(); ?>qa_files/qa_ameridial/ncpssm/<?php echo $mp; ?>" type="audio/mpeg">
													</audio> </br>
												 <?php } ?>
											</td>
										</tr>
										<?php } ?>

									<?php }else if($campaign=='stc'){ ?>

										<tr>
											<td>Overall Score:</td> <td><b><?php echo $agnt_feedback['overall_score'].'%' ?></b></td>
										</tr>
										<tr>
											<td colspan="3">PARAMETER</td> <td>STATUS</td>
											<td colspan="3">PARAMETER</td> <td>STATUS</td>
										</tr>
										<tr>
											<td colspan=3>Did the agent use proper introduction?</td> <td><b><?php echo $agnt_feedback['agentproperintro'] ?></b></td>
											<td colspan=3>Did the agent correctly capture and verify donor name?</td> <td><b><?php echo $agnt_feedback['agentcapturedonorname'] ?></b></td>
										</tr>
										<tr>
											<td colspan=3>Did the agent read first request as scripted?</td> <td><b><?php echo $agnt_feedback['agentreadscript'] ?></b></td>
											<td colspan=3>Did the agent cover second monthly request (if applicable)?</td> <td><b><?php echo $agnt_feedback['agentcovermonthlyrequest'] ?></b></td>
										</tr>
										<tr>
											<td colspan=3>Did the agent correctly capture and verify donation amount?</td> <td><b><?php echo $agnt_feedback['agentcapturedonationamount'] ?></b></td>
											<td colspan=3>Did the agent offer payment types (EFT, CC, Pledge)?</td> <td><b><?php echo $agnt_feedback['agentofferpayment'] ?></b></td>
										</tr>
										<tr>
											<td colspan=3>Did the agent correctly capture and verify donor address?</td> <td><b><?php echo $agnt_feedback['agentcapturedonoraddress'] ?></b></td>
											<td colspan=3>Did the agent correctly capture and verify donor phone number?</td> <td><b><?php echo $agnt_feedback['agentcapturedonorphone'] ?></b></td>
										</tr>
										<tr>
											<td colspan=3>Did the agent correctly capture and verify donor email address?</td> <td><b><?php echo $agnt_feedback['agentcapturedonoremail'] ?></b></td>
											<td colspan=3>Did the agent properly present rebuttals (if applicable)?</td> <td><b><?php echo $agnt_feedback['agentproperlyrebuttals'] ?></b></td>
										</tr>
										<tr>
											<td colspan=3>Did the agent follow overall script adherence?</td> <td><b><?php echo $agnt_feedback['agentfollowscript'] ?></b></td>
											<td colspan=3>Did the agent show familiarity with Save the Children?</td> <td><b><?php echo $agnt_feedback['agentshowfamiliarity'] ?></b></td>
										</tr>
										<tr>
											<td colspan=3>Did the agent use appropriate script navigation and proper disposition?</td> <td><b><?php echo $agnt_feedback['agentusescriptnavigation'] ?></b></td>
											<td colspan=3>Did the agent follow proper close?</td> <td><b><?php echo $agnt_feedback['agentfollowproperclose'] ?></b></td>
										</tr>
										<tr>
											<td colspan=3>Did the agent use effective communication?</td> <td><b><?php echo $agnt_feedback['agentuseeffectivecommunication'] ?></b></td>
											<td colspan=3>Did the agent maintain control of the conversation and talk time?</td> <td><b><?php echo $agnt_feedback['agentmaintaincontrol'] ?></b></td>
										</tr>
										<tr>
											<td colspan=3>Did the agent show appreciation for donor and donations?</td> <td><b><?php echo $agnt_feedback['agentshowappreciation'] ?></b></td>
											<td colspan=3>***Did the agent give false or inappropriate information?</td> <td><b><?php echo $agnt_feedback['autofailfalseinfo'] ?></b></td>
										</tr>
										<tr>
											<td colspan=3>***Did the agent hang up inappropriately?</td> <td><b><?php echo $agnt_feedback['autofailhungup'] ?></b></td>
											<td colspan=3>***Did the agent show any rudeness or unprofessional behavior?</td> <td><b><?php echo $agnt_feedback['autofailagentbehaviuor'] ?></b></td>
										</tr>
										<tr>
											<td>Call Summary:</td> <td colspan=3><b><?php echo $agnt_feedback['call_summary'] ?></b></td>
											<td>Feedback:</td> <td colspan=3><b><?php echo $agnt_feedback['feedback'] ?></b></td>
										</tr>
										<?php if($agnt_feedback['attach_file']!=''){ ?>
										<tr oncontextmenu="return false;">
											<td colspan=3>Audio Files</td>
											<td colspan=5>
												<?php $attach_file = explode(",",$agnt_feedback['attach_file']);
												 foreach($attach_file as $mp){ ?>
													<audio controls='' style="background-color:#607F93">
													  <source src="<?php echo base_url(); ?>qa_files/qa_ameridial/stc/<?php echo $mp; ?>" type="audio/ogg">
													  <source src="<?php echo base_url(); ?>qa_files/qa_ameridial/stc/<?php echo $mp; ?>" type="audio/mpeg">
													</audio> </br>
												 <?php } ?>
											</td>
										</tr>
										<?php } ?>

									<?php }else if($campaign=='tbn'){ ?>

										<tr>
											<td>Overall Score:</td> <td><b><?php echo $agnt_feedback['overall_score'].'%'; ?></b></td>
										</tr>
										<tr>
											<td colspan=2>PARAMETER</td>
											<td colspan=2>SUB PARAMETER</td> <td>STATUS</td>
											<td colspan=2>SUB PARAMETER</td> <td>STATUS</td>
										</tr>
										<tr>
											<td rowspan=3 colspan=2>Intro</td>
											<td colspan=2>Full Recording Between Communicator and Caller is Captured</td> <td><b><?php echo $agnt_feedback['introrecord'] ?></b></td>
											<td colspan=2>Communicator Properly Prepared for Call</td> <td><b><?php echo $agnt_feedback['introcall'] ?></b></td>
										</tr>
										<tr>
											<td colspan=2>Communicator Gave Her/His First Name</td> <td><b><?php echo $agnt_feedback['introname'] ?></b></td>
											<td colspan=2>Stated "This Call May Be Recorded For Training Purposes"</td> <td><b><?php echo $agnt_feedback['introstate'] ?></b></td>
										</tr>
										<tr>
											<td colspan=2>Stated Offer Title as Scripted</td> <td><b><?php echo $agnt_feedback['introscript'] ?></b></td>
											<td colspan=2>Stated No Offer Disclosure (if applicable)</td> <td><b><?php echo $agnt_feedback['introdisclose'] ?></b></td>
										</tr>
										<tr>
											<td rowspan=7 colspan=2>Verification</td>
											<td colspan=2>Spelled Donors Full Name Back on ALL CALLS</td> <td><b><?php echo $agnt_feedback['verifydonor'] ?></b></td>
											<td colspan=2>EXISTING File - Communicator Verified Address</td> <td><b><?php echo $agnt_feedback['verifyaddress'] ?></b></td>
										</tr>
										<tr>
											<td colspan=2>IF NEW ADDRESS - Communicator Spelled Address</td> <td><b><?php echo $agnt_feedback['verifyspelled'] ?></b></td>
											<td colspan=2>IF No Existing Email - Asked for Email</td> <td><b><?php echo $agnt_feedback['verifyemail'] ?></b></td>
										</tr>
										<tr>
											<td colspan=2>Spelled Back Email</td> <td><b><?php echo $agnt_feedback['verifyback'] ?></b></td>
											<td colspan=2>Asked for Phone Number</td> <td><b><?php echo $agnt_feedback['verifyasked'] ?></b></td>
										</tr>
										<tr>
											<td colspan=2>Confirmed Phone Number</td> <td><b><?php echo $agnt_feedback['verifyconfirm'] ?></b></td>
											<td colspan=2>Verified Phone Number Type</td> <td><b><?php echo $agnt_feedback['verifytype'] ?></b></td>
										</tr>
										<tr>
											<td colspan=2>IF Cell Asked for Consent</td> <td><b><?php echo $agnt_feedback['verifycell'] ?></b></td>
											<td colspan=2>Asked for Alternate Phone Number</td> <td><b><?php echo $agnt_feedback['verifyaskalterphn'] ?></b></td>
										</tr>
										<tr>
											<td colspan=2>Verified Alternate Phone Number</td> <td><b><?php echo $agnt_feedback['verifyalterphn'] ?></b></td>
											<td colspan=2>Verified Alternate Number Type</td> <td><b><?php echo $agnt_feedback['verifyalterno'] ?></b></td>
										</tr>
										<tr>
											<td colspan=2>IF Alternate Phone Number is Cell - Asked for Consent</td> <td><b><?php echo $agnt_feedback['verifyconsent'] ?></b></td>
										</tr>
										<tr>
											<td rowspan=4 colspan=2>Presentation</td>
											<td colspan=2>Read First Request as Scripted</td> <td><b><?php echo $agnt_feedback['presentrequest'] ?></b></td>
											<td colspan=2>Appropriately Presented Higher Tier Offers (if applicable)</td> <td><b><?php echo $agnt_feedback['presenttieroffer'] ?></b></td>
										</tr>
										<tr>
											<td colspan=2>Read Monthly Ask As Scripted (if applicable)</td> <td><b><?php echo $agnt_feedback['presentmonthask'] ?></b></td>
											<td colspan=2>Navigates Script With Ease</td> <td><b><?php echo $agnt_feedback['presentnavigate'] ?></b></td>
										</tr>
										<tr>
											<td colspan=2>Displays TBN Knowledge and Answers Questions Appropriately</td> <td><b><?php echo $agnt_feedback['presenttbnknowledge'] ?></b></td>
											<td colspan=2>Correctly Pronounces Speaker/Author Name and Title of Offer</td> <td><b><?php echo $agnt_feedback['presentauthor'] ?></b></td>
										</tr>
										<tr>
											<td colspan=2>Overall Script Adherence</td> <td><b><?php echo $agnt_feedback['presentadherence'] ?></b></td>
										</tr>
										<tr>
											<td rowspan=3 colspan=2>Review Cart and Close</td>
											<td colspan=2>Verified Donation Frequency (One-Time/Monthly)</td> <td><b><?php echo $agnt_feedback['cartclosedonation'] ?></b></td>
											<td colspan=2>Verified Donation Amount</td> <td><b><?php echo $agnt_feedback['cartcloseamount'] ?></b></td>
										</tr>
										<tr>
											<td colspan=2>Verified Monthly Donation Beginning and End Date (if applicable)</td> <td><b><?php echo $agnt_feedback['cartclosemonthly'] ?></b></td>
											<td colspan=2>Verified Resource Donor Will Be Receiving (if applicable)</td> <td><b><?php echo $agnt_feedback['cartcloseresource'] ?></b></td>
										</tr>
										<tr>
											<td colspan=2>Read Close as Scripted</td> <td><b><?php echo $agnt_feedback['cartclosescript'] ?></b></td>
										</tr>
										<tr>
											<td class="eml" rowspan=4>Effective Call Handling</td>
											<td colspan=2>Speaks Clearly with Proper Articulation (no slang)</td> <td><b><?php echo $agnt_feedback['callhandleclearly'] ?></b></td>
											<td colspan=2>Pleasant Demeanor</td> <td><b><?php echo $agnt_feedback['callhandledemeanor'] ?></b></td>
										</tr>
										<tr>
											<td colspan=2>Speaks at an Appropriate Pace</td> <td><b><?php echo $agnt_feedback['callhandlepace'] ?></b></td>
											<td colspan=2>Actively Listens and Responds Appropriately</td> <td><b><?php echo $agnt_feedback['callhandlelisten'] ?></b></td>
										</tr>
										<tr>
											<td colspan=2>Exhibits Empathy (if appropriate)</td> <td><b><?php echo $agnt_feedback['callhandleexhibit'] ?></b></td>
											<td colspan=2>Communicator Shows Sincere Appreciation for Donor and Donations</td> <td><b><?php echo $agnt_feedback['callhandlecommunicate'] ?></b></td>
										</tr>
										<tr>
											<td colspan=2>Maintained Control of the Conversation and Talk Time</td> <td><b><?php echo $agnt_feedback['callhandlecontrol'] ?></b></td>
										</tr>
										<tr>
											<td rowspan=2>Auto Fail</td>
											<td colspan=2>False and/or Inappropriate Information</td> <td><b><?php echo $agnt_feedback['autofinfo'] ?></b></td>
											<td colspan=2>Inappropriately Ended Call</td> <td><b><?php echo $agnt_feedback['autofcall'] ?></b></td>
										</tr>
										<tr>
											<td colspan=2>Rudeness/Unprofessional Behavior</td> <td><b><?php echo $agnt_feedback['autofbehaviour'] ?></b></td>
										</tr>
										<tr>
											<td>Call Summary:</td> <td colspan=3><b><?php echo $agnt_feedback['call_summary'] ?></b></td>
											<td>Feedback:</td> <td colspan=3><b><?php echo $agnt_feedback['feedback'] ?></b></td>
										</tr>
										<?php if($agnt_feedback['attach_file']!=''){ ?>
										<tr oncontextmenu="return false;">
											<td colspan=3>Audio Files</td>
											<td colspan=5>
												<?php $attach_file = explode(",",$agnt_feedback['attach_file']);
												 foreach($attach_file as $mp){ ?>
													<audio controls='' style="background-color:#607F93">
													  <source src="<?php echo base_url(); ?>qa_files/qa_ameridial/tbn/<?php echo $mp; ?>" type="audio/ogg">
													  <source src="<?php echo base_url(); ?>qa_files/qa_ameridial/tbn/<?php echo $mp; ?>" type="audio/mpeg">
													</audio> </br>
												 <?php } ?>
											</td>
										</tr>
										<?php } ?>

									<?php } else if($campaign == 'purity_free_bottle'){?>
										<tr>
											<td>Overall Score:</td> <td><b><?php echo $agnt_feedback['overall_score'].'%'; ?></b></td>
										</tr>
										<tr>
											<td colspan="3">PARAMETER</td> <td>STATUS</td>
											<td colspan="3">PARAMETER</td> <td>STATUS</td>
										</tr>
										<tr>
											<td colspan=3>Did the rep greet the customer promptly and properly?</td> <td><b><?php echo $agnt_feedback['customer_prompt'] ?></b></td>
											<td colspan=3>Did the rep use their soft skills appropriately?</td> <td><b><?php echo $agnt_feedback['soft_skills'] ?></b></td>
										</tr>
										<tr>
											<td colspan=3>Did the rep collect and verify the customers information appropriately?</td> <td><b><?php echo $agnt_feedback['customer_information'] ?></b></td>
											<td colspan=3>Did the rep cover the super saver offer appropriately?</td> <td><b><?php echo $agnt_feedback['super_saver_offer'] ?></b></td>
										</tr>
										<tr>
											<td colspan=3>Did the rep cover the upsell appropriately?</td> <td><b><?php echo $agnt_feedback['upsell'] ?></b></td>
											<td colspan=3>Did the rep cover the payment procedures appropriately?</td> <td><b><?php echo $agnt_feedback['payment_procedure'] ?></b></td>
										</tr>
										<tr>
											<td colspan=3>Did the rep demonstrate knowledge of the product/program?</td> <td><b><?php echo $agnt_feedback['knowledge_of_product'] ?></b></td>
											<td colspan=3>Did the rep maintain call control?</td> <td><b><?php echo $agnt_feedback['call_control'] ?></b></td>
										</tr>
										<tr>
											<td colspan=3>Did the rep use the tools/FAQ's appropriately?</td> <td><b><?php echo $agnt_feedback['faq'] ?></b></td>
											<td colspan=3>Did the rep use the appropriate objection responses?</td> <td><b><?php echo $agnt_feedback['objection_response'] ?></b></td>
										</tr>
										<tr>
											<td colspan=3>Did the rep use the callers last name to personalize the call at least once per section?</td> <td><b><?php echo $agnt_feedback['personalize_the_call'] ?></b></td>
											<td colspan=3>Did the rep complete the correct confirmation and closing?</td> <td><b><?php echo $agnt_feedback['correct_confirmation'] ?></b></td>
										</tr>
										<tr>
											<td colspan=3 style="color:red">***Did the rep cover the frequency and cost of each delivery when applicable?</td> <td><b><?php echo $agnt_feedback['cost_of_delivery'] ?></b></td>
											<td colspan=3 style="color:red">***Did the rep have any misrepresentation?</td> <td><b><?php echo $agnt_feedback['misrepresentation'] ?></b></td>
										</tr>
										<tr>
											<td colspan=3 style="color:red">***Did the rep response appropriately to a DNC response?</td> <td><b><?php echo $agnt_feedback['dnc_response'] ?></b></td>
										</tr>
										<tr>
											<td>Call Summary:</td> <td colspan=3><b><?php echo $agnt_feedback['call_summary'] ?></b></td>
											<td>Feedback:</td> <td colspan=3><b><?php echo $agnt_feedback['feedback'] ?></b></td>
										</tr>
										<?php if($agnt_feedback['attach_file']!=''){ ?>
										<tr oncontextmenu="return false;">
											<td colspan=3>Audio Files</td>
											<td colspan=5>
												<?php $attach_file = explode(",",$agnt_feedback['attach_file']);
												 foreach($attach_file as $mp){ ?>
													<audio controls='' style="background-color:#607F93">
													  <source src="<?php echo base_url(); ?>qa_files/qa_ameridial/purity_bottle/<?php echo $mp; ?>" type="audio/ogg">
													  <source src="<?php echo base_url(); ?>qa_files/qa_ameridial/purity_bottle/<?php echo $mp; ?>" type="audio/mpeg">
													</audio> </br>
												 <?php } ?>
											</td>
										</tr>
										<?php } ?>

									<?php } else if($campaign == 'purity_catalog'){?>
										<tr>
											<td>Overall Score:</td> <td><b><?php echo $agnt_feedback['overall_score'].'%'; ?></b></td>
										</tr>
										<tr>
											<td colspan="3">PARAMETER</td> <td>STATUS</td>
											<td colspan="3">PARAMETER</td> <td>STATUS</td>
										</tr>
										<tr>
											<td colspan=3>Proper Greeting</td> <td><b><?php echo $agnt_feedback['proper_greeting'] ?></b></td>
											<td colspan=3>Customer First Name and Address Verification</td> <td><b><?php echo $agnt_feedback['customer_first_name_address_verification'] ?></b></td>
										</tr>
										<tr>
											<td colspan=3>Identifies Type of Account Properly</td> <td><b><?php echo $agnt_feedback['identified_type_of_account'] ?></b></td>
											<td colspan=3>***Properly transfers the Account</td> <td><b><?php echo $agnt_feedback['properly_transfer_account'] ?></b></td>
										</tr>
										<tr>
											<td colspan=3>Accurate Notes Taken/Info Verified Appropriately</td> <td><b><?php echo $agnt_feedback['accurate_note_taken'] ?></b></td>
											<td colspan=3>Correct Information Given</td> <td><b><?php echo $agnt_feedback['correct_information_given'] ?></b></td>
										</tr>
										<tr>
											<td colspan=3>Proper Terminology/Use of Disc Names, etc.</td> <td><b><?php echo $agnt_feedback['proper_terminology'] ?></b></td>
											<td colspan=3>Free Gift Scripting</td> <td><b><?php echo $agnt_feedback['free_gift_scripting'] ?></b></td>
										</tr>
										<tr>
											<td colspan=3>Bulk Offer</td> <td><b><?php echo $agnt_feedback['bulk_offer'] ?></b></td>
											<td colspan=3>Promotions Offered Correctly</td> <td><b><?php echo $agnt_feedback['promotion_offered_correctly'] ?></b></td>
										</tr>
										<tr>
											<td colspan=3>Super Saver Offered and Explained Properly</td> <td><b><?php echo $agnt_feedback['super_saver_offer_explained_correctly'] ?></b></td>
											<td colspan=3>Additional Product Offered</td> <td><b><?php echo $agnt_feedback['additional_product_offered'] ?></b></td>
										</tr>
										<tr>
											<td colspan=3>***Order Placed Properly/Cancelled Properly</td> <td><b><?php echo $agnt_feedback['order_placed_properly'] ?></b></td>
											<td colspan=3>Order Confirmation</td> <td><b><?php echo $agnt_feedback['order_confirmation'] ?></b></td>
										</tr>
										<tr>
											<td colspan=3>Uses Tools and FAQ's</td> <td><b><?php echo $agnt_feedback['user_tool_faq'] ?></b></td>
											<td colspan=3>Address Verification at Confirmation</td> <td><b><?php echo $agnt_feedback['address_verification_at_confirmation'] ?></b></td>
										</tr>
										<tr>
											<td colspan=3>Credit Card Verification/Charged Correct Information</td> <td><b><?php echo $agnt_feedback['credit_card_verification'] ?></b></td>
											<td colspan=3>Attempt to Gather CVV Code</td> <td><b><?php echo $agnt_feedback['attemp_to_gather_cvv_code'] ?></b></td>
										</tr>
										<tr>
											<td colspan=3>Daily Special Offer</td> <td><b><?php echo $agnt_feedback['daily_special_offer'] ?></b></td>
											<td colspan=3>Product/Benefits Offered with Daily Special</td> <td><b><?php echo $agnt_feedback['product_offered_with_daily_special'] ?></b></td>
										</tr>
										<tr>
											<td colspan=3>Thank You Statement</td> <td><b><?php echo $agnt_feedback['thank_you_statement'] ?></b></td>
											<td colspan=3>Maintained Call Control/Call Flow</td> <td><b><?php echo $agnt_feedback['maintained_call_control'] ?></b></td>
										</tr>
										<tr>
											<td colspan=3>Response Time/Minimal Dead Air</td> <td><b><?php echo $agnt_feedback['response_time'] ?></b></td>
											<td colspan=3>Used Proper Hold Techniques</td> <td><b><?php echo $agnt_feedback['used_proper_hold_techniques'] ?></b></td>
										</tr>
										<tr>
											<td colspan=3>Good Attitude/Maintained Composure</td> <td><b><?php echo $agnt_feedback['good_attitude'] ?></b></td>
											<td colspan=3>Energy/Enthusiasm/Attentiveness</td> <td><b><?php echo $agnt_feedback['energy_attentiveness'] ?></b></td>
										</tr>
										<tr>
											<td colspan=3>Context Related Responses</td> <td><b><?php echo $agnt_feedback['context_related_response'] ?></b></td>
											<td colspan=3>Empathy/Respectfulness/Courteous</td> <td><b><?php echo $agnt_feedback['empathy_respectfulness'] ?></b></td>
										</tr>
										<tr>
											<td>Call Summary:</td> <td colspan=3><b><?php echo $agnt_feedback['call_summary'] ?></b></td>
											<td>Feedback:</td> <td colspan=3><b><?php echo $agnt_feedback['feedback'] ?></b></td>
										</tr>
										<?php if($agnt_feedback['attach_file']!=''){ ?>
										<tr oncontextmenu="return false;">
											<td colspan=3>Audio Files</td>
											<td colspan=5>
												<?php $attach_file = explode(",",$agnt_feedback['attach_file']);
												 foreach($attach_file as $mp){ ?>
													<audio controls='' style="background-color:#607F93">
													  <source src="<?php echo base_url(); ?>qa_files/qa_ameridial/purity_catalog/<?php echo $mp; ?>" type="audio/ogg">
													  <source src="<?php echo base_url(); ?>qa_files/qa_ameridial/purity_catalog/<?php echo $mp; ?>" type="audio/mpeg">
													</audio> </br>
												 <?php } ?>
											</td>
										</tr>
										<?php } ?>

									<?php } else if($campaign == 'purity_care'){?>
										<tr><td>Overall Score:</td> <td><b><?php echo $agnt_feedback['overall_score'].'%'; ?></b></td></tr>
										<tr>
											<td colspan="8">PARAMETER</td>
										</tr>
										<tr>
											<td colspan="8">Proper Greeting</td>
										</tr>
										<tr>
											<td colspan="3"></td>
											<td>Call 1</td>
											<td>Call 2</td>
											<td>Call 3</td>
											<td>Calls Reviewed</td>
											<td>Score</td>
										</tr>
										<tr>
											<td colspan="3">Proper Introduction</td>
											<td><?php echo $agnt_feedback['call_one_proper_introduction'];?></td>
											<td><?php echo $agnt_feedback['call_two_proper_introduction'];?></td>
											<td><?php echo $agnt_feedback['call_three_proper_introduction'];?></td>
											<td><?php echo $agnt_feedback['review_proper_introduction'];?></td>
											<td><?php echo $agnt_feedback['score_proper_introduction'];?></td>
										</tr>
										<tr>
											<td colspan="3">Customer First Name & Address Verification</td>
											<td><?php echo $agnt_feedback['call_one_cust_fname_addrs_verification'];?></td>
											<td><?php echo $agnt_feedback['call_two_cust_fname_addrs_verification'];?></td>
											<td><?php echo $agnt_feedback['call_three_cust_fname_addrs_verification'];?></td>
											<td><?php echo $agnt_feedback['review_cust_fname_addrs_verification'];?></td>
											<td><?php echo $agnt_feedback['score_cust_fname_addrs_verification'];?></td>
										</tr>
										<tr>
											<td colspan="3">Opening Question</td>
											<td><?php echo $agnt_feedback['call_one_opening_question'];?></td>
											<td><?php echo $agnt_feedback['call_two_opening_question'];?></td>
											<td><?php echo $agnt_feedback['call_three_opening_question'];?></td>
											<td><?php echo $agnt_feedback['review_opening_question'];?></td>
											<td><?php echo $agnt_feedback['score_opening_question'];?></td>
										</tr>
										<tr>
											<td colspan="6"></td>
											<td>Points Possible</td>
											<td>
												<?php
												$possible_score_proper_greeting	= $agnt_feedback["score_proper_introduction"]+$agnt_feedback["score_cust_fname_addrs_verification"]+$agnt_feedback["score_opening_question"];
												echo $possible_score_proper_greeting;
												?>
											</td>
										</tr>
										<tr>
											<td colspan="8">Accurate Information</td>
										</tr>
										<tr>
											<td colspan="3">Accurate Notes Taken</td>
											<td><?php echo $agnt_feedback['call_one_accurate_note'];?></td>
											<td><?php echo $agnt_feedback['call_two_accurate_note'];?></td>
											<td><?php echo $agnt_feedback['call_three_accurate_note'];?></td>
											<td><?php echo $agnt_feedback['review_accurate_note'];?></td>
											<td><?php echo $agnt_feedback['score_accurate_note'];?></td>
										</tr>
										<tr>
											<td colspan="3">Correct Reason Code</td>
											<td><?php echo $agnt_feedback['call_one_correct_reason'];?></td>
											<td><?php echo $agnt_feedback['call_two_correct_reason'];?></td>
											<td><?php echo $agnt_feedback['call_three_correct_reason'];?></td>
											<td><?php echo $agnt_feedback['review_correct_reason'];?></td>
											<td><?php echo $agnt_feedback['score_correct_reason'];?></td>
										</tr>
										<tr>
											<td colspan="3">Correct Information Given</td>
											<td><?php echo $agnt_feedback['call_one_correct_information_given'];?></td>
											<td><?php echo $agnt_feedback['call_two_correct_information_given'];?></td>
											<td><?php echo $agnt_feedback['call_three_correct_information_given'];?></td>
											<td><?php echo $agnt_feedback['review_correct_information_given'];?></td>
											<td><?php echo $agnt_feedback['score_correct_information_given'];?></td>
										</tr>
										<tr>
											<td colspan="3">Proper Terminology/use of disc names, etc.</td>
											<td><?php echo $agnt_feedback['call_one_proper_terminology'];?></td>
											<td><?php echo $agnt_feedback['call_two_proper_terminology'];?></td>
											<td><?php echo $agnt_feedback['call_three_proper_terminology'];?></td>
											<td><?php echo $agnt_feedback['review_proper_terminology'];?></td>
											<td><?php echo $agnt_feedback['score_proper_terminology'];?></td>
										</tr>
										<tr>
											<td colspan="6"></td>
											<td>Points Possible</td>
											<td>
												<?php
												$possible_score_accurate_information	=	$agnt_feedback["score_accurate_note"]+$agnt_feedback["score_correct_reason"]+$agnt_feedback["score_correct_information_given"]+$agnt_feedback["score_proper_terminology"];
												echo $possible_score_accurate_information;
												?>
											</td>
										</tr>
										<tr>
											<td colspan="8">Problem Solving</td>
										</tr>
										<tr>
											<td colspan="3">Proper Inquiry</td>
											<td><?php echo $agnt_feedback['call_one_proper_inquiry'];?></td>
											<td><?php echo $agnt_feedback['call_two_proper_inquiry'];?></td>
											<td><?php echo $agnt_feedback['call_three_proper_inquiry'];?></td>
											<td><?php echo $agnt_feedback['review_proper_inquiry'];?></td>
											<td><?php echo $agnt_feedback['score_proper_inquiry'];?></td>
										</tr>
										<tr>
											<td colspan="3">Company Promotion</td>
											<td><?php echo $agnt_feedback['call_one_company_promotion'];?></td>
											<td><?php echo $agnt_feedback['call_two_company_promotion'];?></td>
											<td><?php echo $agnt_feedback['call_three_company_promotion'];?></td>
											<td><?php echo $agnt_feedback['review_company_promotion'];?></td>
											<td><?php echo $agnt_feedback['score_company_promotion'];?></td>
										</tr>
										<tr>
											<td colspan="3">Correct Use of Actions</td>
											<td><?php echo $agnt_feedback['call_one_correct_use_of_action'];?></td>
											<td><?php echo $agnt_feedback['call_two_correct_use_of_action'];?></td>
											<td><?php echo $agnt_feedback['call_three_correct_use_of_action'];?></td>
											<td><?php echo $agnt_feedback['review_correct_use_of_action'];?></td>
											<td><?php echo $agnt_feedback['score_correct_use_of_action'];?></td>
										</tr>
										<tr>
											<td colspan="3">Database Follow Up</td>
											<td><?php echo $agnt_feedback['call_one_database_follow_up'];?></td>
											<td><?php echo $agnt_feedback['call_two_database_follow_up'];?></td>
											<td><?php echo $agnt_feedback['call_three_database_follow_up'];?></td>
											<td><?php echo $agnt_feedback['review_database_follow_up'];?></td>
											<td><?php echo $agnt_feedback['score_database_follow_up'];?></td>
										</tr>
										<tr>
											<td colspan="3">Product Promotion</td>
											<td><?php echo $agnt_feedback['call_one_product_promotion'];?></td>
											<td><?php echo $agnt_feedback['call_two_product_promotion'];?></td>
											<td><?php echo $agnt_feedback['call_three_product_promotion'];?></td>
											<td><?php echo $agnt_feedback['review_product_promotion'];?></td>
											<td><?php echo $agnt_feedback['score_product_promotion'];?></td>
										</tr>
										<tr>
											<td colspan="6"></td>
											<td>Points Possible</td>
											<td>
												<?php
												$possible_score_problem_solving	=	$agnt_feedback["score_proper_inquiry"]+$agnt_feedback["score_company_promotion"]+$agnt_feedback["score_correct_use_of_action"]+$agnt_feedback["score_database_follow_up"]+$agnt_feedback["score_product_promotion"];
												echo $possible_score_problem_solving;
												?>
											</td>
										</tr>
										<tr>
											<td colspan="8">Strategies Used</td>
										</tr>
										<tr>
											<td colspan="3">Reason for Cancel</td>
											<td><?php echo $agnt_feedback['call_one_reason_for_cancel'];?></td>
											<td><?php echo $agnt_feedback['call_two_reason_for_cancel'];?></td>
											<td><?php echo $agnt_feedback['call_three_reason_for_cancel'];?></td>
											<td><?php echo $agnt_feedback['review_reason_for_cancel'];?></td>
											<td><?php echo $agnt_feedback['score_reason_for_cancel'];?></td>
										</tr>
										<tr>
											<td colspan="3">Legitimate Offers/Sequence of Offers</td>
											<td><?php echo $agnt_feedback['call_one_legimate_sequence_offer'];?></td>
											<td><?php echo $agnt_feedback['call_two_legimate_sequence_offer'];?></td>
											<td><?php echo $agnt_feedback['call_three_legimate_sequence_offer'];?></td>
											<td><?php echo $agnt_feedback['review_legimate_sequence_offer'];?></td>
											<td><?php echo $agnt_feedback['score_legimate_sequence_offer'];?></td>
										</tr>
										<tr>
											<td colspan="3">1st Retention Offer</td>
											<td><?php echo $agnt_feedback['call_one_first_retention_offer'];?></td>
											<td><?php echo $agnt_feedback['call_two_first_retention_offer'];?></td>
											<td><?php echo $agnt_feedback['call_three_first_retention_offer'];?></td>
											<td><?php echo $agnt_feedback['review_first_retention_offer'];?></td>
											<td><?php echo $agnt_feedback['score_first_retention_offer'];?></td>
										</tr>
										<tr>
											<td colspan="3">2nd Retention Offer</td>
											<td><?php echo $agnt_feedback['call_one_second_retention_offer'];?></td>
											<td><?php echo $agnt_feedback['call_two_second_retention_offer'];?></td>
											<td><?php echo $agnt_feedback['call_three_second_retention_offer'];?></td>
											<td><?php echo $agnt_feedback['review_second_retention_offer'];?></td>
											<td><?php echo $agnt_feedback['score_second_retention_offer'];?></td>
										</tr>
										<tr>
											<td colspan="3">Valid Delay</td>
											<td><?php echo $agnt_feedback['call_one_valid_delay'];?></td>
											<td><?php echo $agnt_feedback['call_two_valid_delay'];?></td>
											<td><?php echo $agnt_feedback['call_three_valid_delay'];?></td>
											<td><?php echo $agnt_feedback['review_valid_delay'];?></td>
											<td><?php echo $agnt_feedback['score_valid_delay'];?></td>
										</tr>
										<tr>
											<td colspan="3">Preserved Avg # Units/Shipment</td>
											<td><?php echo $agnt_feedback['call_one_preserved_avg_unit'];?></td>
											<td><?php echo $agnt_feedback['call_two_preserved_avg_unit'];?></td>
											<td><?php echo $agnt_feedback['call_three_preserved_avg_unit'];?></td>
											<td><?php echo $agnt_feedback['review_preserved_avg_unit'];?></td>
											<td><?php echo $agnt_feedback['score_preserved_avg_unit'];?></td>
										</tr>
										<tr>
											<td colspan="6"></td>
											<td>Points Possible</td>
											<td>
												<?php
												$possible_score_accurate_information	=	$agnt_feedback["score_reason_for_cancel"]+$agnt_feedback["score_legimate_sequence_offer"]+$agnt_feedback["score_first_retention_offer"]+$agnt_feedback["score_second_retention_offer"]+$agnt_feedback["score_valid_delay"]+$agnt_feedback["score_preserved_avg_unit"];
												echo $possible_score_accurate_information;
												?>
											</td>
										</tr>
										<tr>
											<td colspan="8">Proper Closing</td>
										</tr>
										<tr>
											<td colspan="3">Proper Confirmation</td>
											<td><?php echo $agnt_feedback['call_one_proper_confirmation'];?></td>
											<td><?php echo $agnt_feedback['call_two_proper_confirmation'];?></td>
											<td><?php echo $agnt_feedback['call_three_proper_confirmation'];?></td>
											<td><?php echo $agnt_feedback['review_proper_confirmation'];?></td>
											<td><?php echo $agnt_feedback['score_proper_confirmation'];?></td>
										</tr>
										<tr>
											<td colspan="3">Daily Special Offer</td>
											<td><?php echo $agnt_feedback['call_one_daily_special_offer'];?></td>
											<td><?php echo $agnt_feedback['call_two_daily_special_offer'];?></td>
											<td><?php echo $agnt_feedback['call_three_daily_special_offer'];?></td>
											<td><?php echo $agnt_feedback['review_daily_special_offer'];?></td>
											<td><?php echo $agnt_feedback['score_daily_special_offer'];?></td>
										</tr>
										<tr>
											<td colspan="3">Anything Else Statement</td>
											<td><?php echo $agnt_feedback['call_one_anything_else'];?></td>
											<td><?php echo $agnt_feedback['call_two_anything_else'];?></td>
											<td><?php echo $agnt_feedback['call_three_anything_else'];?></td>
											<td><?php echo $agnt_feedback['review_anything_else'];?></td>
											<td><?php echo $agnt_feedback['score_anything_else'];?></td>
										</tr>
										<tr>
											<td colspan="3">Thank You Statement</td>
											<td><?php echo $agnt_feedback['call_one_thank_you'];?></td>
											<td><?php echo $agnt_feedback['call_two_thank_you'];?></td>
											<td><?php echo $agnt_feedback['call_three_thank_you'];?></td>
											<td><?php echo $agnt_feedback['review_thank_you'];?></td>
											<td><?php echo $agnt_feedback['score_thank_you'];?></td>
										</tr>
										<tr>
											<td colspan="6"></td>
											<td>Points Possible</td>
											<td>
												<?php
												$possible_score_proper_closing	=	$agnt_feedback["score_proper_confirmation"]+$agnt_feedback["score_daily_special_offer"]+$agnt_feedback["score_anything_else"]+$agnt_feedback["score_thank_you"];
												echo $possible_score_proper_closing;
												?>
											</td>
										</tr>
										<tr>
											<td colspan="8">Call Management</td>
										</tr>
										<tr>
											<td colspan="3">Proper Confirmation</td>
											<td><?php echo $agnt_feedback['call_one_mantained_call'];?></td>
											<td><?php echo $agnt_feedback['call_two_mantained_call'];?></td>
											<td><?php echo $agnt_feedback['call_three_mantained_call'];?></td>
											<td><?php echo $agnt_feedback['review_mantained_call'];?></td>
											<td><?php echo $agnt_feedback['score_mantained_call'];?></td>
										</tr>
										<tr>
											<td colspan="3">Response Time/Minimal dead air</td>
											<td><?php echo $agnt_feedback['call_one_response_time'];?></td>
											<td><?php echo $agnt_feedback['call_two_response_time'];?></td>
											<td><?php echo $agnt_feedback['call_three_response_time'];?></td>
											<td><?php echo $agnt_feedback['review_response_time'];?></td>
											<td><?php echo $agnt_feedback['score_response_time'];?></td>
										</tr>
										<tr>
											<td colspan="3">Uses proper hold techniques</td>
											<td><?php echo $agnt_feedback['call_one_proper_hold_technique'];?></td>
											<td><?php echo $agnt_feedback['call_two_proper_hold_technique'];?></td>
											<td><?php echo $agnt_feedback['call_three_proper_hold_technique'];?></td>
											<td><?php echo $agnt_feedback['review_proper_hold_technique'];?></td>
											<td><?php echo $agnt_feedback['score_proper_hold_technique'];?></td>
										</tr>
										<tr>
											<td colspan="6"></td>
											<td>Points Possible</td>
											<td>
												<?php
												$possible_score_call_management	=	$agnt_feedback["score_mantained_call"]+$agnt_feedback["score_response_time"]+$agnt_feedback["score_proper_hold_technique"];
												echo $possible_score_call_management;
												?>
											</td>
										</tr>
										<tr>
											<td colspan="8">Professionalism</td>
										</tr>
										<tr>
											<td colspan="3">Good Attitude/Maintained Composure</td>
											<td><?php echo $agnt_feedback['call_one_good_attitude'];?></td>
											<td><?php echo $agnt_feedback['call_two_good_attitude'];?></td>
											<td><?php echo $agnt_feedback['call_three_good_attitude'];?></td>
											<td><?php echo $agnt_feedback['review_good_attitude'];?></td>
											<td><?php echo $agnt_feedback['score_good_attitude'];?></td>
										</tr>
										<tr>
											<td colspan="3">Energy/Enthusiasm/Attentiveness</td>
											<td><?php echo $agnt_feedback['call_one_attentiveness'];?></td>
											<td><?php echo $agnt_feedback['call_two_attentiveness'];?></td>
											<td><?php echo $agnt_feedback['call_three_attentiveness'];?></td>
											<td><?php echo $agnt_feedback['review_attentiveness'];?></td>
											<td><?php echo $agnt_feedback['score_attentiveness'];?></td>
										</tr>
										<tr>
											<td colspan="3">Context Related Responses</td>
											<td><?php echo $agnt_feedback['call_one_context_related_response'];?></td>
											<td><?php echo $agnt_feedback['call_two_context_related_response'];?></td>
											<td><?php echo $agnt_feedback['call_three_context_related_response'];?></td>
											<td><?php echo $agnt_feedback['review_context_related_response'];?></td>
											<td><?php echo $agnt_feedback['score_context_related_response'];?></td>
										</tr>
										<tr>
											<td colspan="3">Empathy/Respectfulness/Courteous</td>
											<td><?php echo $agnt_feedback['call_one_empathy'];?></td>
											<td><?php echo $agnt_feedback['call_two_empathy'];?></td>
											<td><?php echo $agnt_feedback['call_three_empathy'];?></td>
											<td><?php echo $agnt_feedback['review_empathy'];?></td>
											<td><?php echo $agnt_feedback['score_empathy'];?></td>
										</tr>
										<tr>
											<td colspan="3">Badgering</td>
											<td><?php echo $agnt_feedback['call_one_badgering'];?></td>
											<td><?php echo $agnt_feedback['call_two_badgering'];?></td>
											<td><?php echo $agnt_feedback['call_three_badgering'];?></td>
											<td><?php echo $agnt_feedback['review_badgering'];?></td>
											<td><?php echo $agnt_feedback['score_badgering'];?></td>
										</tr>
										<tr>
											<td colspan="6"></td>
											<td>Points Possible</td>
											<td>
												<?php
												$possible_score_professionalism		=	$agnt_feedback["score_good_attitude"]+$agnt_feedback["score_attentiveness"]+$agnt_feedback["score_context_related_response"]+$agnt_feedback["score_empathy"]+$agnt_feedback["score_badgering"];
												echo $possible_score_professionalism;
												?>
											</td>
										</tr>
										<tr>
											<td colspan="8">Overall</td>
										</tr>
										<tr>
											<td colspan="3">Average Calls Per Hour/4 or More</td>
											<td><?php echo $agnt_feedback['call_one_avg_call'];?></td>
											<td><?php echo $agnt_feedback['call_two_avg_call'];?></td>
											<td><?php echo $agnt_feedback['call_three_avg_call'];?></td>
											<td><?php echo $agnt_feedback['review_avg_call'];?></td>
											<td><?php echo $agnt_feedback['score_avg_call'];?></td>
										</tr>
										<tr>
											<td colspan="3">Average Save % Above 44%</td>
											<td><?php echo $agnt_feedback['call_one_avg_save'];?></td>
											<td><?php echo $agnt_feedback['call_two_avg_save'];?></td>
											<td><?php echo $agnt_feedback['call_three_avg_save'];?></td>
											<td><?php echo $agnt_feedback['review_avg_save'];?></td>
											<td><?php echo $agnt_feedback['score_avg_save'];?></td>
										</tr>
										<tr>
											<td colspan="3">Average Call Length Does Not Exceed 8 min.</td>
											<td><?php echo $agnt_feedback['call_one_avg_call_length'];?></td>
											<td><?php echo $agnt_feedback['call_two_avg_call_length'];?></td>
											<td><?php echo $agnt_feedback['call_three_avg_call_length'];?></td>
											<td><?php echo $agnt_feedback['review_avg_call_length'];?></td>
											<td><?php echo $agnt_feedback['score_avg_call_length'];?></td>
										</tr>
										<tr>
											<td colspan="6"></td>
											<td>Points Possible</td>
											<td>
												<?php
												$possible_score_overall	=	$agnt_feedback["score_avg_call"]+$agnt_feedback["score_avg_save"]+$agnt_feedback["score_avg_call_length"];
												echo $possible_score_overall;
												?>
											</td>
										</tr>

									<?php }else if($campaign == 'puritycare_new'){ ?>

										<tr>
											<td style="font-weight:bold; text-align:right">Earned Score:</td>
											<td><input type="text" readonly id="pcare_new_earned" name="earned_score" class="form-control" style="font-weight:bold" value="<?php echo $agnt_feedback['earned_score']; ?>"></td>
											<td colspan=2 style="font-weight:bold; text-align:right">Possible Score:</td>
											<td><input type="text" readonly id="pcare_new_possible" name="possible_score" class="form-control" style="font-weight:bold" value="<?php echo $agnt_feedback['possible_score']; ?>"></td>
											<td colspan=2 style="font-weight:bold; text-align:right">Overall Score:</td>
											<td><input type="text" readonly id="pcare_new_OvlScore" name="overall_score" class="form-control" style="font-weight:bold" value="<?php echo $agnt_feedback['overall_score']; ?>"></td>
										</tr>
										<tr style="background-color:#A3E4D7; font-weight:bold">
											<td colspan=2>GREETING</td>
											<td style="width:120px">Call 1</td>
											<td>Call 2</td>
											<td>Call 3</td>
											<td>Call 4</td>
											<td style="width:120px">Call 5</td>
											<td>Score</td>
										</tr>
										<tr>
											<td colspan=2>Identification of Agent & Department</td>
											<td>
												<select class="form-control greet_point call1" id="" name="agent_identification_call1" disabled>
													<option greet_val=1 cl1=1 <?php echo $agnt_feedback['agent_identification_call1']=='Yes'?"selected":""; ?> value="Yes">Yes</option>
													<option greet_val=1 cl1=0 <?php echo $agnt_feedback['agent_identification_call1']=='No'?"selected":""; ?> value="No">No</option>
												</select>
											</td>
											<td>
												<select class="form-control greet_point call2" id="" name="agent_identification_call2" disabled>
													<option greet_val=1 cl2=1 <?php echo $agnt_feedback['agent_identification_call2']=='Yes'?"selected":""; ?> value="Yes">Yes</option>
													<option greet_val=1 cl2=0 <?php echo $agnt_feedback['agent_identification_call2']=='No'?"selected":""; ?> value="No">No</option>
												</select>
											</td>
											<td>
												<select class="form-control greet_point call3" id="" name="agent_identification_call3" disabled>
													<option greet_val=1 cl3=1 <?php echo $agnt_feedback['agent_identification_call3']=='Yes'?"selected":""; ?> value="Yes">Yes</option>
													<option greet_val=1 cl3=0 <?php echo $agnt_feedback['agent_identification_call3']=='No'?"selected":""; ?> value="No">No</option>
												</select>
											</td>
											<td>
												<select class="form-control greet_point call4" id="" name="agent_identification_call4" disabled>
													<option greet_val=1 cl4=1 <?php echo $agnt_feedback['agent_identification_call4']=='Yes'?"selected":""; ?> value="Yes">Yes</option>
													<option greet_val=1 cl4=0 <?php echo $agnt_feedback['agent_identification_call4']=='No'?"selected":""; ?> value="No">No</option>
												</select>
											</td>
											<td>
												<select class="form-control greet_point call5" id="" name="agent_identification_call5" disabled>
													<option greet_val=1 cl5=1 <?php echo $agnt_feedback['agent_identification_call5']=='Yes'?"selected":""; ?> value="Yes">Yes</option>
													<option greet_val=1 cl5=0 <?php echo $agnt_feedback['agent_identification_call5']=='No'?"selected":""; ?> value="No">No</option>
												</select>
											</td>
											<td rowspan=4><input type="text" class="pcare" readonly id="greetScore" name=""></td>
										</tr>
										<tr>
											<td colspan=2>Customer Identification (Mr. or Ms. _________)</td>
											<td>
												<select class="form-control greet_point call1" id="" name="customer_identification_call1" disabled>
													<option greet_val=1 cl1=1 <?php echo $agnt_feedback['customer_identification_call1']=='Yes'?"selected":""; ?> value="Yes">Yes</option>
													<option greet_val=1 cl1=0 <?php echo $agnt_feedback['customer_identification_call1']=='No'?"selected":""; ?> value="No">No</option>
												</select>
											</td>
											<td>
												<select class="form-control greet_point call2" id="" name="customer_identification_call2" disabled>
													<option greet_val=1 cl2=1 <?php echo $agnt_feedback['customer_identification_call2']=='Yes'?"selected":""; ?> value="Yes">Yes</option>
													<option greet_val=1 cl2=0 <?php echo $agnt_feedback['customer_identification_call2']=='No'?"selected":""; ?> value="No">No</option>
												</select>
											</td>
											<td>
												<select class="form-control greet_point call3" id="" name="customer_identification_call3" disabled>
													<option greet_val=1 cl3=1 <?php echo $agnt_feedback['customer_identification_call3']=='Yes'?"selected":""; ?> value="Yes">Yes</option>
													<option greet_val=1 cl3=0 <?php echo $agnt_feedback['customer_identification_call3']=='No'?"selected":""; ?> value="No">No</option>
												</select>
											</td>
											<td>
												<select class="form-control greet_point call4" id="" name="customer_identification_call4" disabled>
													<option greet_val=1 cl4=1 <?php echo $agnt_feedback['customer_identification_call4']=='Yes'?"selected":""; ?> value="Yes">Yes</option>
													<option greet_val=1 cl4=0 <?php echo $agnt_feedback['customer_identification_call4']=='No'?"selected":""; ?> value="No">No</option>
												</select>
											</td>
											<td>
												<select class="form-control greet_point call5" id="" name="customer_identification_call5" disabled>
													<option greet_val=1 cl5=1 <?php echo $agnt_feedback['customer_identification_call5']=='Yes'?"selected":""; ?> value="Yes">Yes</option>
													<option greet_val=1 cl5=0 <?php echo $agnt_feedback['customer_identification_call5']=='No'?"selected":""; ?> value="No">No</option>
												</select>
											</td>
										</tr>
										<tr>
											<td colspan=2>Customer Verification (Address, etc.)</td>
											<td>
												<select class="form-control greet_point call1" id="" name="customer_verification_call1" disabled>
													<option greet_val=1 cl1=1 <?php echo $agnt_feedback['customer_verification_call1']=='Yes'?"selected":""; ?> value="Yes">Yes</option>
													<option greet_val=1 cl1=0 <?php echo $agnt_feedback['customer_verification_call1']=='No'?"selected":""; ?> value="No">No</option>
												</select>
											</td>
											<td>
												<select class="form-control greet_point call2" id="" name="customer_verification_call2" disabled>
													<option greet_val=1 cl2=1 <?php echo $agnt_feedback['customer_verification_call2']=='Yes'?"selected":""; ?> value="Yes">Yes</option>
													<option greet_val=1 cl2=0 <?php echo $agnt_feedback['customer_verification_call2']=='No'?"selected":""; ?> value="No">No</option>
												</select>
											</td>
											<td>
												<select class="form-control greet_point call3" id="" name="customer_verification_call3" disabled>
													<option greet_val=1 cl3=1 <?php echo $agnt_feedback['customer_verification_call3']=='Yes'?"selected":""; ?> value="Yes">Yes</option>
													<option greet_val=1 cl3=0 <?php echo $agnt_feedback['customer_verification_call3']=='No'?"selected":""; ?> value="No">No</option>
												</select>
											</td>
											<td>
												<select class="form-control greet_point call4" id="" name="customer_verification_call4" disabled>
													<option greet_val=1 cl4=1 <?php echo $agnt_feedback['customer_verification_call4']=='Yes'?"selected":""; ?> value="Yes">Yes</option>
													<option greet_val=1 cl4=0 <?php echo $agnt_feedback['customer_verification_call4']=='No'?"selected":""; ?> value="No">No</option>
												</select>
											</td>
											<td>
												<select class="form-control greet_point call5" id="" name="customer_verification_call5" disabled>
													<option greet_val=1 cl5=1 <?php echo $agnt_feedback['customer_verification_call5']=='Yes'?"selected":""; ?> value="Yes">Yes</option>
													<option greet_val=1 cl5=0 <?php echo $agnt_feedback['customer_verification_call5']=='No'?"selected":""; ?> value="No">No</option>
												</select>
											</td>
										</tr>
										<tr>
											<td colspan=2>Opening question</td>
											<td>
												<select class="form-control greet_point call1" id="" name="opening_question_call1" disabled>
													<option greet_val=1 cl1=1 <?php echo $agnt_feedback['opening_question_call1']=='Yes'?"selected":""; ?> value="Yes">Yes</option>
													<option greet_val=1 cl1=0 <?php echo $agnt_feedback['opening_question_call1']=='No'?"selected":""; ?> value="No">No</option>
												</select>
											</td>
											<td>
												<select class="form-control greet_point call2" id="" name="opening_question_call2" disabled>
													<option greet_val=1 cl2=1 <?php echo $agnt_feedback['opening_question_call2']=='Yes'?"selected":""; ?> value="Yes">Yes</option>
													<option greet_val=1 cl2=0 <?php echo $agnt_feedback['opening_question_call2']=='No'?"selected":""; ?> value="No">No</option>
												</select>
											</td>
											<td>
												<select class="form-control greet_point call3" id="" name="opening_question_call3" disabled>
													<option greet_val=1 cl3=1 <?php echo $agnt_feedback['opening_question_call3']=='Yes'?"selected":""; ?> value="Yes">Yes</option>
													<option greet_val=1 cl3=0 <?php echo $agnt_feedback['opening_question_call3']=='No'?"selected":""; ?> value="No">No</option>
												</select>
											</td>
											<td>
												<select class="form-control greet_point call4" id="" name="opening_question_call4" disabled>
													<option greet_val=1 cl4=1 <?php echo $agnt_feedback['opening_question_call4']=='Yes'?"selected":""; ?> value="Yes">Yes</option>
													<option greet_val=1 cl4=0 <?php echo $agnt_feedback['opening_question_call4']=='No'?"selected":""; ?> value="No">No</option>
												</select>
											</td>
											<td>
												<select class="form-control greet_point call5" id="" name="opening_question_call5" disabled>
													<option greet_val=1 cl5=1 <?php echo $agnt_feedback['opening_question_call5']=='Yes'?"selected":""; ?> value="Yes">Yes</option>
													<option greet_val=1 cl5=0 <?php echo $agnt_feedback['opening_question_call5']=='No'?"selected":""; ?> value="No">No</option>
												</select>
											</td>
										</tr>
										<tr style="background-color:#A3E4D7; font-weight:bold">
											<td colspan=2>Discovery & Inquiry</td>
											<td>Call 1</td>
											<td>Call 2</td>
											<td>Call 3</td>
											<td>Call 4</td>
											<td>Call 5</td>
											<td>Score</td>
										</tr>
										<tr>
											<td colspan=2>Identify Reason for Discontinuing/ Discovery</td>
											<td>
												<select class="form-control discovery_point call1" id="" name="identify_reason_call1" disabled>
													<option discovery_val=2 cl1=2 <?php echo $agnt_feedback['identify_reason_call1']=='Yes'?"selected":""; ?> value="Yes">Yes</option>
													<option discovery_val=2 cl1=0 <?php echo $agnt_feedback['identify_reason_call1']=='No'?"selected":""; ?> value="No">No</option>
													<option discovery_val=0 cl1=0 <?php echo $agnt_feedback['identify_reason_call1']=='N/A'?"selected":""; ?> value="N/A">N/A</option>
												</select>
											</td>
											<td>
												<select class="form-control discovery_point call2" id="" name="identify_reason_call2" disabled>
													<option discovery_val=2 cl2=2 <?php echo $agnt_feedback['identify_reason_call2']=='Yes'?"selected":""; ?> value="Yes">Yes</option>
													<option discovery_val=2 cl2=0 <?php echo $agnt_feedback['identify_reason_call2']=='No'?"selected":""; ?> value="No">No</option>
													<option discovery_val=0 cl1=0 <?php echo $agnt_feedback['identify_reason_call2']=='N/A'?"selected":""; ?> value="N/A">N/A</option>
												</select>
											</td>
											<td>
												<select class="form-control discovery_point call3" id="" name="identify_reason_call3" disabled>
													<option discovery_val=2 cl3=2 <?php echo $agnt_feedback['identify_reason_call3']=='Yes'?"selected":""; ?> value="Yes">Yes</option>
													<option discovery_val=2 cl3=0 <?php echo $agnt_feedback['identify_reason_call3']=='No'?"selected":""; ?> value="No">No</option>
													<option discovery_val=0 cl1=0 <?php echo $agnt_feedback['identify_reason_call3']=='N/A'?"selected":""; ?> value="N/A">N/A</option>
												</select>
											</td>
											<td>
												<select class="form-control discovery_point call4" id="" name="identify_reason_call4" disabled>
													<option discovery_val=2 cl4=2 <?php echo $agnt_feedback['identify_reason_call4']=='Yes'?"selected":""; ?> value="Yes">Yes</option>
													<option discovery_val=2 cl4=0 <?php echo $agnt_feedback['identify_reason_call4']=='No'?"selected":""; ?> value="No">No</option>
													<option discovery_val=0 cl1=0 <?php echo $agnt_feedback['identify_reason_call4']=='N/A'?"selected":""; ?> value="N/A">N/A
												</select>
											</td>
											<td>
												<select class="form-control discovery_point call5" id="" name="identify_reason_call5" disabled>
													<option discovery_val=2 cl5=2 <?php echo $agnt_feedback['identify_reason_call5']=='Yes'?"selected":""; ?> value="Yes">Yes</option>
													<option discovery_val=2 cl5=0 <?php echo $agnt_feedback['identify_reason_call5']=='No'?"selected":""; ?> value="No">No</option>
													<option discovery_val=0 cl1=0 <?php echo $agnt_feedback['identify_reason_call5']=='N/A'?"selected":""; ?> value="N/A">N/A
												</select>
											</td>
											<td rowspan=3><input type="text" class="pcare" readonly id="discoveryScore" name=""></td>
										</tr>
										<tr>
											<td colspan=2>Acknowledge Response</td>
											<td>
												<select class="form-control discovery_point call1" id="" name="acknowledge_responce_call1" disabled>
													<option discovery_val=2 cl1=2 <?php echo $agnt_feedback['acknowledge_responce_call1']=='Yes'?"selected":""; ?> value="Yes">Yes</option>
													<option discovery_val=2 cl1=0 <?php echo $agnt_feedback['acknowledge_responce_call1']=='No'?"selected":""; ?> value="No">No</option>
												</select>
											</td>
											<td>
												<select class="form-control discovery_point call2" id="" name="acknowledge_responce_call2" disabled>
													<option discovery_val=2 cl2=2 <?php echo $agnt_feedback['acknowledge_responce_call2']=='Yes'?"selected":""; ?> value="Yes">Yes</option>
													<option discovery_val=2 cl2=0 <?php echo $agnt_feedback['acknowledge_responce_call2']=='No'?"selected":""; ?> value="No">No</option>
												</select>
											</td>
											<td>
												<select class="form-control discovery_point call3" id="" name="acknowledge_responce_call3" disabled>
													<option discovery_val=2 cl3=2 <?php echo $agnt_feedback['acknowledge_responce_call3']=='Yes'?"selected":""; ?> value="Yes">Yes</option>
													<option discovery_val=2 cl3=0 <?php echo $agnt_feedback['acknowledge_responce_call3']=='No'?"selected":""; ?> value="No">No</option>
												</select>
											</td>
											<td>
												<select class="form-control discovery_point call4" id="" name="acknowledge_responce_call4" disabled>
													<option discovery_val=2 cl4=2 <?php echo $agnt_feedback['acknowledge_responce_call4']=='Yes'?"selected":""; ?> value="Yes">Yes</option>
													<option discovery_val=2 cl4=0 <?php echo $agnt_feedback['acknowledge_responce_call4']=='No'?"selected":""; ?> value="No">No</option>
												</select>
											</td>
											<td>
												<select class="form-control discovery_point call5" id="" name="acknowledge_responce_call5" disabled>
													<option discovery_val=2 cl5=2 <?php echo $agnt_feedback['acknowledge_responce_call5']=='Yes'?"selected":""; ?> value="Yes">Yes</option>
													<option discovery_val=2 cl5=0 <?php echo $agnt_feedback['acknowledge_responce_call5']=='No'?"selected":""; ?> value="No">No</option>
												</select>
											</td>
										</tr>
										<tr>
											<td colspan=2>Inquiry/Probing/Diagnosis</td>
											<td>
												<select class="form-control discovery_point call1" id="" name="inquiry_probing_call1" disabled>
													<option discovery_val=3 cl1=3 <?php echo $agnt_feedback['inquiry_probing_call1']=='Yes'?"selected":""; ?> value="Yes">Yes</option>
													<option discovery_val=3 cl1=0 <?php echo $agnt_feedback['inquiry_probing_call1']=='No'?"selected":""; ?> value="No">No</option>
												</select>
											</td>
											<td>
												<select class="form-control discovery_point call2" id="" name="inquiry_probing_call2" disabled>
													<option discovery_val=3 cl2=3 <?php echo $agnt_feedback['inquiry_probing_call2']=='Yes'?"selected":""; ?> value="Yes">Yes</option>
													<option discovery_val=3 cl2=0 <?php echo $agnt_feedback['inquiry_probing_call2']=='No'?"selected":""; ?> value="No">No</option>
												</select>
											</td>
											<td>
												<select class="form-control discovery_point call3" id="" name="inquiry_probing_call3" disabled>
													<option discovery_val=3 cl3=3 <?php echo $agnt_feedback['inquiry_probing_call3']=='Yes'?"selected":""; ?> value="Yes">Yes</option>
													<option discovery_val=3 cl3=0 <?php echo $agnt_feedback['inquiry_probing_call3']=='No'?"selected":""; ?> value="No">No</option>
												</select>
											</td>
											<td>
												<select class="form-control discovery_point call4" id="" name="inquiry_probing_call4" disabled>
													<option discovery_val=3 cl4=3 <?php echo $agnt_feedback['inquiry_probing_call4']=='Yes'?"selected":""; ?> value="Yes">Yes</option>
													<option discovery_val=3 cl4=0 <?php echo $agnt_feedback['inquiry_probing_call4']=='No'?"selected":""; ?> value="No">No</option>
												</select>
											</td>
											<td>
												<select class="form-control discovery_point call5" id="" name="inquiry_probing_call5" disabled>
													<option discovery_val=3 cl5=3 <?php echo $agnt_feedback['inquiry_probing_call5']=='Yes'?"selected":""; ?> value="Yes">Yes</option>
													<option discovery_val=3 cl5=0 <?php echo $agnt_feedback['inquiry_probing_call5']=='No'?"selected":""; ?> value="No">No</option>
												</select>
											</td>
										</tr>
										<tr style="background-color:#A3E4D7; font-weight:bold">
											<td colspan=2>Value Proposition</td>
											<td>Call 1</td>
											<td>Call 2</td>
											<td>Call 3</td>
											<td>Call 4</td>
											<td>Call 5</td>
											<td>Score</td>
										</tr>
										<tr>
											<td colspan=2>Value Proposition-(Product/Company Promo-"Why offer makes sense or solves customer's issues.")</td>
											<td>
												<select class="form-control value_point call1" id="" name="value_proposition_call1" disabled>
													<option value_val=5 cl1=5 <?php echo $agnt_feedback['value_proposition_call1']=='Yes'?"selected":""; ?> value="Yes">Yes</option>
													<option value_val=5 cl1=0 <?php echo $agnt_feedback['value_proposition_call1']=='No'?"selected":""; ?> value="No">No</option>
												</select>
											</td>
											<td>
												<select class="form-control value_point call2" id="" name="value_proposition_call2" disabled>
													<option value_val=5 cl2=5 <?php echo $agnt_feedback['value_proposition_call2']=='Yes'?"selected":""; ?> value="Yes">Yes</option>
													<option value_val=5 cl2=0 <?php echo $agnt_feedback['value_proposition_call2']=='No'?"selected":""; ?> value="No">No</option>
												</select>
											</td>
											<td>
												<select class="form-control value_point call3" id="" name="value_proposition_call3" disabled>
													<option value_val=5 cl3=5 <?php echo $agnt_feedback['value_proposition_call3']=='Yes'?"selected":""; ?> value="Yes">Yes</option>
													<option value_val=5 cl3=0 <?php echo $agnt_feedback['value_proposition_call3']=='No'?"selected":""; ?> value="No">No</option>
												</select>
											</td>
											<td>
												<select class="form-control value_point call4" id="" name="value_proposition_call4" disabled>
													<option value_val=5 cl4=5 <?php echo $agnt_feedback['value_proposition_call4']=='Yes'?"selected":""; ?> value="Yes">Yes</option>
													<option value_val=5 cl4=0 <?php echo $agnt_feedback['value_proposition_call4']=='No'?"selected":""; ?> value="No">No</option>
												</select>
											</td>
											<td>
												<select class="form-control value_point call5" id="" name="value_proposition_call5" disabled>
													<option value_val=5 cl5=5 <?php echo $agnt_feedback['value_proposition_call5']=='Yes'?"selected":""; ?> value="Yes">Yes</option>
													<option value_val=5 cl5=0 <?php echo $agnt_feedback['value_proposition_call5']=='No'?"selected":""; ?> value="No">No</option>
												</select>
											</td>
											<td><input type="text" class="pcare" readonly id="valueScore" name=""></td>
										</tr>
										<tr style="background-color:#A3E4D7; font-weight:bold">
											<td colspan=2>Retention</td>
											<td>Call 1</td>
											<td>Call 2</td>
											<td>Call 3</td>
											<td>Call 4</td>
											<td>Call 5</td>
											<td>Score</td>
										</tr>
										<tr>
											<td colspan=2>1st Retention Attempt-(Must use 2 or more tools)</td>
											<td>
												<select class="form-control retention_point call1" id="" name="1st_retention_call1" disabled>
													<option retention_val=5 cl1=5 <?php echo $agnt_feedback['1st_retention_call1']=='Yes'?"selected":""; ?> value="Yes">Yes</option>
													<option retention_val=5 cl1=0 <?php echo $agnt_feedback['1st_retention_call1']=='No'?"selected":""; ?> value="No">No</option>
												</select>
											</td>
											<td>
												<select class="form-control retention_point call2" id="" name="1st_retention_call2" disabled>
													<option retention_val=5 cl2=5 <?php echo $agnt_feedback['1st_retention_call2']=='Yes'?"selected":""; ?> value="Yes">Yes</option>
													<option retention_val=5 cl2=0 <?php echo $agnt_feedback['1st_retention_call2']=='No'?"selected":""; ?> value="No">No</option>
												</select>
											</td>
											<td>
												<select class="form-control retention_point call3" id="" name="1st_retention_call3" disabled>
													<option retention_val=5 cl3=5 <?php echo $agnt_feedback['1st_retention_call3']=='Yes'?"selected":""; ?> value="Yes">Yes</option>
													<option retention_val=5 cl3=0 <?php echo $agnt_feedback['1st_retention_call3']=='No'?"selected":""; ?> value="No">No</option>
												</select>
											</td>
											<td>
												<select class="form-control retention_point call4" id="" name="1st_retention_call4" disabled>
													<option retention_val=5 cl4=5 <?php echo $agnt_feedback['1st_retention_call4']=='Yes'?"selected":""; ?> value="Yes">Yes</option>
													<option retention_val=5 cl4=0 <?php echo $agnt_feedback['1st_retention_call4']=='No'?"selected":""; ?> value="No">No</option>
												</select>
											</td>
											<td>
												<select class="form-control retention_point call5" id="" name="1st_retention_call5" disabled>
													<option retention_val=5 cl5=5 <?php echo $agnt_feedback['1st_retention_call5']=='Yes'?"selected":""; ?> value="Yes">Yes</option>
													<option retention_val=5 cl5=0 <?php echo $agnt_feedback['1st_retention_call5']=='No'?"selected":""; ?> value="No">No</option>
												</select>
											</td>
											<td rowspan=4><input type="text" class="pcare" readonly id="retentionScore" name=""></td>
										</tr>
										<tr>
											<td colspan=2>Tactical Hold</td>
											<td>
												<select class="form-control retention_point call1" id="" name="tactical_hold_call1" disabled>
													<option retention_val=2 cl1=2 <?php echo $agnt_feedback['tactical_hold_call1']=='Yes'?"selected":""; ?> value="Yes">Yes</option>
													<option retention_val=2 cl1=0 <?php echo $agnt_feedback['tactical_hold_call1']=='No'?"selected":""; ?> value="No">No</option>
													<option retention_val=0 cl1=0 <?php echo $agnt_feedback['tactical_hold_call1']=='N/A'?"selected":""; ?> value="N/A">N/A</option>
												</select>
											</td>
											<td>
												<select class="form-control retention_point call2" id="" name="tactical_hold_call2" disabled>
													<option retention_val=2 cl2=2 <?php echo $agnt_feedback['tactical_hold_call2']=='Yes'?"selected":""; ?> value="Yes">Yes</option>
													<option retention_val=2 cl2=0 <?php echo $agnt_feedback['tactical_hold_call2']=='No'?"selected":""; ?> value="No">No</option>
													<option retention_val=0 cl1=0 <?php echo $agnt_feedback['tactical_hold_call2']=='N/A'?"selected":""; ?> value="N/A">N/A</option>
												</select>
											</td>
											<td>
												<select class="form-control retention_point call3" id="" name="tactical_hold_call3" disabled>
													<option retention_val=2 cl3=2 <?php echo $agnt_feedback['tactical_hold_call3']=='Yes'?"selected":""; ?> value="Yes">Yes</option>
													<option retention_val=2 cl3=0 <?php echo $agnt_feedback['tactical_hold_call3']=='No'?"selected":""; ?> value="No">No</option>
													<option retention_val=0 cl1=0 <?php echo $agnt_feedback['tactical_hold_call3']=='N/A'?"selected":""; ?> value="N/A">N/A</option>
												</select>
											</td>
											<td>
												<select class="form-control retention_point call4" id="" name="tactical_hold_call4" disabled>
													<option retention_val=2 cl4=2 <?php echo $agnt_feedback['tactical_hold_call4']=='Yes'?"selected":""; ?> value="Yes">Yes</option>
													<option retention_val=2 cl4=0 <?php echo $agnt_feedback['tactical_hold_call4']=='No'?"selected":""; ?> value="No">No</option>
													<option retention_val=0 cl1=0 <?php echo $agnt_feedback['tactical_hold_call4']=='N/A'?"selected":""; ?> value="N/A">N/A</option>
												</select>
											</td>
											<td>
												<select class="form-control retention_point call5" id="" name="tactical_hold_call5" disabled>
													<option retention_val=2 cl5=2 <?php echo $agnt_feedback['tactical_hold_call5']=='Yes'?"selected":""; ?> value="Yes">Yes</option>
													<option retention_val=2 cl5=0 <?php echo $agnt_feedback['tactical_hold_call5']=='No'?"selected":""; ?> value="No">No</option>
													<option retention_val=0 cl1=0 <?php echo $agnt_feedback['tactical_hold_call5']=='N/A'?"selected":""; ?> value="N/A">N/A</option>
												</select>
											</td>
										</tr>
										<tr>
											<td colspan=2>2nd Retention Attempt-(Must use 2 or more tools)</td>
											<td>
												<select class="form-control retention_point call1" id="" name="2nd_retention_call1" disabled>
													<option retention_val=5 cl1=5 <?php echo $agnt_feedback['2nd_retention_call1']=='Yes'?"selected":""; ?> value="Yes">Yes</option>
													<option retention_val=5 cl1=0 <?php echo $agnt_feedback['2nd_retention_call1']=='No'?"selected":""; ?> value="No">No</option>
													<option retention_val=0 cl1=0 <?php echo $agnt_feedback['2nd_retention_call1']=='N/A'?"selected":""; ?> value="N/A">N/A</option>
												</select>
											</td>
											<td>
												<select class="form-control retention_point call2" id="" name="2nd_retention_call2" disabled>
													<option retention_val=5 cl2=5 <?php echo $agnt_feedback['2nd_retention_call2']=='Yes'?"selected":""; ?> value="Yes">Yes</option>
													<option retention_val=5 cl2=0 <?php echo $agnt_feedback['2nd_retention_call2']=='No'?"selected":""; ?> value="No">No</option>
													<option retention_val=0 cl1=0 <?php echo $agnt_feedback['2nd_retention_call2']=='N/A'?"selected":""; ?> value="N/A">N/A</option>
												</select>
											</td>
											<td>
												<select class="form-control retention_point call3" id="" name="2nd_retention_call3" disabled>
													<option retention_val=5 cl3=5 <?php echo $agnt_feedback['2nd_retention_call3']=='Yes'?"selected":""; ?> value="Yes">Yes</option>
													<option retention_val=5 cl3=0 <?php echo $agnt_feedback['2nd_retention_call3']=='No'?"selected":""; ?> value="No">No</option>
													<option retention_val=0 cl1=0 <?php echo $agnt_feedback['2nd_retention_call3']=='N/A'?"selected":""; ?> value="N/A">N/A</option>
												</select>
											</td>
											<td>
												<select class="form-control retention_point call4" id="" name="2nd_retention_call4" disabled>
													<option retention_val=5 cl4=5 <?php echo $agnt_feedback['2nd_retention_call4']=='Yes'?"selected":""; ?> value="Yes">Yes</option>
													<option retention_val=5 cl4=0 <?php echo $agnt_feedback['2nd_retention_call4']=='No'?"selected":""; ?> value="No">No</option>
													<option retention_val=0 cl1=0 <?php echo $agnt_feedback['2nd_retention_call4']=='N/A'?"selected":""; ?> value="N/A">N/A</option>
												</select>
											</td>
											<td>
												<select class="form-control retention_point call5" id="" name="2nd_retention_call5" disabled>
													<option retention_val=5 cl5=5 <?php echo $agnt_feedback['2nd_retention_call5']=='Yes'?"selected":""; ?> value="Yes">Yes</option>
													<option retention_val=5 cl5=0 <?php echo $agnt_feedback['2nd_retention_call5']=='No'?"selected":""; ?> value="No">No</option>
													<option retention_val=0 cl1=0 <?php echo $agnt_feedback['2nd_retention_call5']=='N/A'?"selected":""; ?> value="N/A">N/A</option>
												</select>
											</td>
										</tr>
										<tr>
											<td colspan=2>Correct Delay Length, Correct Sequence (Guidelines of the Offer)</td>
											<td>
												<select class="form-control retention_point call1" id="" name="delay_length_call1" disabled>
													<option retention_val=3 cl1=3 <?php echo $agnt_feedback['delay_length_call1']=='Yes'?"selected":""; ?> value="Yes">Yes</option>
													<option retention_val=3 cl1=0 <?php echo $agnt_feedback['delay_length_call1']=='No'?"selected":""; ?> value="No">No</option>
												</select>
											</td>
											<td>
												<select class="form-control retention_point call2" id="" name="delay_length_call2" disabled>
													<option retention_val=3 cl2=3 <?php echo $agnt_feedback['delay_length_call2']=='Yes'?"selected":""; ?> value="Yes">Yes</option>
													<option retention_val=3 cl2=0 <?php echo $agnt_feedback['delay_length_call2']=='No'?"selected":""; ?> value="No">No</option>
												</select>
											</td>
											<td>
												<select class="form-control retention_point call3" id="" name="delay_length_call3" disabled>
													<option retention_val=3 cl3=3 <?php echo $agnt_feedback['delay_length_call3']=='Yes'?"selected":""; ?> value="Yes">Yes</option>
													<option retention_val=3 cl3=0 <?php echo $agnt_feedback['delay_length_call3']=='No'?"selected":""; ?> value="No">No</option>
												</select>
											</td>
											<td>
												<select class="form-control retention_point call4" id="" name="delay_length_call4" disabled>
													<option retention_val=3 cl4=3 <?php echo $agnt_feedback['delay_length_call4']=='Yes'?"selected":""; ?> value="Yes">Yes</option>
													<option retention_val=3 cl4=0 <?php echo $agnt_feedback['delay_length_call4']=='No'?"selected":""; ?> value="No">No</option>
												</select>
											</td>
											<td>
												<select class="form-control retention_point call5" id="" name="delay_length_call5" disabled>
													<option retention_val=3 cl5=3 <?php echo $agnt_feedback['delay_length_call5']=='Yes'?"selected":""; ?> value="Yes">Yes</option>
													<option retention_val=3 cl5=0 <?php echo $agnt_feedback['delay_length_call5']=='No'?"selected":""; ?> value="No">No</option>
												</select>
											</td>
										</tr>
										<tr style="background-color:#A3E4D7; font-weight:bold">
											<td colspan=2>Conclusion</td>
											<td>Call 1</td>
											<td>Call 2</td>
											<td>Call 3</td>
											<td>Call 4</td>
											<td>Call 5</td>
											<td>Score</td>
										</tr>
										<tr>
											<td colspan=2>Supersaver Confirmation/Cancellation-(6 point on active SuperSaver and/or Cancellation #)</td>
											<td>
												<select class="form-control conclusion_point call1" id="" name="supersaver_call1" disabled>
													<option conclusion_val=5 cl1=5 <?php echo $agnt_feedback['supersaver_call1']=='Yes'?"selected":""; ?> value="Yes">Yes</option>
													<option conclusion_val=5 cl1=0 <?php echo $agnt_feedback['supersaver_call1']=='No'?"selected":""; ?> value="No">No</option>
												</select>
											</td>
											<td>
												<select class="form-control conclusion_point call2" id="" name="supersaver_call2" disabled>
													<option conclusion_val=5 cl2=5 <?php echo $agnt_feedback['supersaver_call2']=='Yes'?"selected":""; ?> value="Yes">Yes</option>
													<option conclusion_val=5 cl2=0 <?php echo $agnt_feedback['supersaver_call2']=='No'?"selected":""; ?> value="No">No</option>
												</select>
											</td>
											<td>
												<select class="form-control conclusion_point call3" id="" name="supersaver_call3" disabled>
													<option conclusion_val=5 cl3=5 <?php echo $agnt_feedback['supersaver_call3']=='Yes'?"selected":""; ?> value="Yes">Yes</option>
													<option conclusion_val=5 cl3=0 <?php echo $agnt_feedback['supersaver_call3']=='No'?"selected":""; ?> value="No">No</option>
												</select>
											</td>
											<td>
												<select class="form-control conclusion_point call4" id="" name="supersaver_call4" disabled>
													<option conclusion_val=5 cl4=5 <?php echo $agnt_feedback['supersaver_call4']=='Yes'?"selected":""; ?> value="Yes">Yes</option>
													<option conclusion_val=5 cl4=0 <?php echo $agnt_feedback['supersaver_call4']=='No'?"selected":""; ?> value="No">No</option>
												</select>
											</td>
											<td>
												<select class="form-control conclusion_point call5" id="" name="supersaver_call5" disabled>
													<option conclusion_val=5 cl5=5 <?php echo $agnt_feedback['supersaver_call5']=='Yes'?"selected":""; ?> value="Yes">Yes</option>
													<option conclusion_val=5 cl5=0 <?php echo $agnt_feedback['supersaver_call5']=='No'?"selected":""; ?> value="No">No</option>
												</select>
											</td>
											<td rowspan=3><input type="text" class="pcare" readonly id="conclusionScore" name=""></td>
										</tr>
										<tr>
											<td colspan=2>Daily Special-(Mandatory-Must be presented after confirmation and include feedback on if agent did/did not add value proposition)</td>
											<td>
												<select class="form-control conclusion_point call1" id="" name="daily_special_call1" disabled>
													<option conclusion_val=5 cl1=5 <?php echo $agnt_feedback['daily_special_call1']=='Yes'?"selected":""; ?> value="Yes">Yes</option>
													<option conclusion_val=5 cl1=0 <?php echo $agnt_feedback['daily_special_call1']=='No'?"selected":""; ?> value="No">No</option>
												</select>
											</td>
											<td>
												<select class="form-control conclusion_point call2" id="" name="daily_special_call2" disabled>
													<option conclusion_val=5 cl2=5 <?php echo $agnt_feedback['daily_special_call2']=='Yes'?"selected":""; ?> value="Yes">Yes</option>
													<option conclusion_val=5 cl2=0 <?php echo $agnt_feedback['daily_special_call2']=='No'?"selected":""; ?> value="No">No</option>
												</select>
											</td>
											<td>
												<select class="form-control conclusion_point call3" id="" name="daily_special_call3" disabled>
													<option conclusion_val=5 cl3=5 <?php echo $agnt_feedback['daily_special_call3']=='Yes'?"selected":""; ?> value="Yes">Yes</option>
													<option conclusion_val=5 cl3=0 <?php echo $agnt_feedback['daily_special_call3']=='No'?"selected":""; ?> value="No">No</option>
												</select>
											</td>
											<td>
												<select class="form-control conclusion_point call4" id="" name="daily_special_call4" disabled>
													<option conclusion_val=5 cl4=5 <?php echo $agnt_feedback['daily_special_call4']=='Yes'?"selected":""; ?> value="Yes">Yes</option>
													<option conclusion_val=5 cl4=0 <?php echo $agnt_feedback['daily_special_call4']=='No'?"selected":""; ?> value="No">No</option>
												</select>
											</td>
											<td>
												<select class="form-control conclusion_point call5" id="" name="daily_special_call5" disabled>
													<option conclusion_val=5 cl5=5 <?php echo $agnt_feedback['daily_special_call5']=='Yes'?"selected":""; ?> value="Yes">Yes</option>
													<option conclusion_val=5 cl5=0 <?php echo $agnt_feedback['daily_special_call5']=='No'?"selected":""; ?> value="No">No</option>
												</select>
											</td>
										</tr>
										<tr>
											<td colspan=2>Thank you Closing Statement/Identify Purity Products</td>
											<td>
												<select class="form-control conclusion_point call1" id="" name="closing_statement_call1" disabled>
													<option conclusion_val=2 cl1=2 <?php echo $agnt_feedback['closing_statement_call1']=='Yes'?"selected":""; ?> value="Yes">Yes</option>
													<option conclusion_val=2 cl1=0 <?php echo $agnt_feedback['closing_statement_call1']=='No'?"selected":""; ?> value="No">No</option>
												</select>
											</td>
											<td>
												<select class="form-control conclusion_point call2" id="" name="closing_statement_call2" disabled>
													<option conclusion_val=2 cl2=2 <?php echo $agnt_feedback['closing_statement_call2']=='Yes'?"selected":""; ?> value="Yes">Yes</option>
													<option conclusion_val=2 cl2=0 <?php echo $agnt_feedback['closing_statement_call2']=='No'?"selected":""; ?> value="No">No</option>
												</select>
											</td>
											<td>
												<select class="form-control conclusion_point call3" id="" name="closing_statement_call3" disabled>
													<option conclusion_val=2 cl3=2 <?php echo $agnt_feedback['closing_statement_call3']=='Yes'?"selected":""; ?> value="Yes">Yes</option>
													<option conclusion_val=2 cl3=0 <?php echo $agnt_feedback['closing_statement_call3']=='No'?"selected":""; ?> value="No">No</option>
												</select>
											</td>
											<td>
												<select class="form-control conclusion_point call4" id="" name="closing_statement_call4" disabled>
													<option conclusion_val=2 cl4=2 <?php echo $agnt_feedback['closing_statement_call4']=='Yes'?"selected":""; ?> value="Yes">Yes</option>
													<option conclusion_val=2 cl4=0 <?php echo $agnt_feedback['closing_statement_call4']=='No'?"selected":""; ?> value="No">No</option>
												</select>
											</td>
											<td>
												<select class="form-control conclusion_point call5" id="" name="closing_statement_call5" disabled>
													<option conclusion_val=2 cl5=2 <?php echo $agnt_feedback['closing_statement_call5']=='Yes'?"selected":""; ?> value="Yes">Yes</option>
													<option conclusion_val=2 cl5=0 <?php echo $agnt_feedback['closing_statement_call5']=='No'?"selected":""; ?> value="No">No</option>
												</select>
											</td>
										</tr>
										<tr style="background-color:#A3E4D7; font-weight:bold">
											<td colspan=2>One Time Order-move below conclusion</td>
											<td>Call 1</td>
											<td>Call 2</td>
											<td>Call 3</td>
											<td>Call 4</td>
											<td>Call 5</td>
											<td>Score</td>
										</tr>
										<tr>
											<td colspan=2>Full Conf & Cst Acknowledgement before processed-(Only when applicable)</td>
											<td>
												<select class="form-control conf_point call1" id="" name="full_conf_call1" disabled>
													<option conf_val=4 cl1=4 <?php echo $agnt_feedback['full_conf_call1']=='Yes'?"selected":""; ?> value="Yes">Yes</option>
													<option conf_val=4 cl1=0 <?php echo $agnt_feedback['full_conf_call1']=='No'?"selected":""; ?> value="No">No</option>
													<option conf_val=0 cl1=0 <?php echo $agnt_feedback['full_conf_call1']=='N/A'?"selected":""; ?> value="N/A">N/A</option>
												</select>
											</td>
											<td>
												<select class="form-control conf_point call2" id="" name="full_conf_call2" disabled>
													<option conf_val=4 cl2=4 <?php echo $agnt_feedback['full_conf_call2']=='Yes'?"selected":""; ?> value="Yes">Yes</option>
													<option conf_val=4 cl2=0 <?php echo $agnt_feedback['full_conf_call2']=='No'?"selected":""; ?> value="No">No</option>
													<option conf_val=0 cl1=0 <?php echo $agnt_feedback['full_conf_call2']=='N/A'?"selected":""; ?> value="N/A">N/A</option>
												</select>
											</td>
											<td>
												<select class="form-control conf_point call3" id="" name="full_conf_call3" disabled>
													<option conf_val=4 cl3=4 <?php echo $agnt_feedback['full_conf_call3']=='Yes'?"selected":""; ?> value="Yes">Yes</option>
													<option conf_val=4 cl3=0 <?php echo $agnt_feedback['full_conf_call3']=='No'?"selected":""; ?> value="No">No</option>
													<option conf_val=0 cl1=0 <?php echo $agnt_feedback['full_conf_call3']=='N/A'?"selected":""; ?> value="N/A">N/A</option>
												</select>
											</td>
											<td>
												<select class="form-control conf_point call4" id="" name="full_conf_call4" disabled>
													<option conf_val=4 cl4=4 <?php echo $agnt_feedback['full_conf_call4']=='Yes'?"selected":""; ?> value="Yes">Yes</option>
													<option conf_val=4 cl4=0 <?php echo $agnt_feedback['full_conf_call4']=='No'?"selected":""; ?> value="No">No</option>
													<option conf_val=0 cl1=0 <?php echo $agnt_feedback['full_conf_call4']=='N/A'?"selected":""; ?> value="N/A">N/A</option>
												</select>
											</td>
											<td>
												<select class="form-control conf_point call5" id="" name="full_conf_call5" disabled>
													<option conf_val=4 cl5=4 <?php echo $agnt_feedback['full_conf_call5']=='Yes'?"selected":""; ?> value="Yes">Yes</option>
													<option conf_val=4 cl5=0 <?php echo $agnt_feedback['full_conf_call5']=='No'?"selected":""; ?> value="No">No</option>
													<option conf_val=0 cl1=0 <?php echo $agnt_feedback['full_conf_call5']=='N/A'?"selected":""; ?> value="N/A">N/A</option>
												</select>
											</td>
											<td><input type="text" class="pcare" readonly id="confScore" name=""></td>
										</tr>
										<tr style="background-color:#A3E4D7; font-weight:bold">
											<td colspan=2>Packages/ Package Return</td>
											<td>Call 1</td>
											<td>Call 2</td>
											<td>Call 3</td>
											<td>Call 4</td>
											<td>Call 5</td>
											<td>Score</td>
										</tr>
										<tr>
											<td colspan=2>Made offer to save package-(Only applicable if cst requested return. Can be combined with SS retention. Location in call flexible)</td>
											<td>
												<select class="form-control package_point call1" id="" name="made_offer_call1" disabled>
													<option package_val=5 cl1=5 <?php echo $agnt_feedback['made_offer_call1']=='Yes'?"selected":""; ?> value="Yes">Yes</option>
													<option package_val=5 cl1=0 <?php echo $agnt_feedback['made_offer_call1']=='No'?"selected":""; ?> value="No">No</option>
													<option package_val=0 cl1=0 <?php echo $agnt_feedback['made_offer_call1']=='N/A'?"selected":""; ?> value="N/A">N/A</option>
												</select>
											</td>
											<td>
												<select class="form-control package_point call2" id="" name="made_offer_call2" disabled>
													<option package_val=5 cl2=5 <?php echo $agnt_feedback['made_offer_call2']=='Yes'?"selected":""; ?> value="Yes">Yes</option>
													<option package_val=5 cl2=0 <?php echo $agnt_feedback['made_offer_call2']=='No'?"selected":""; ?> value="No">No</option>
													<option package_val=0 cl1=0 <?php echo $agnt_feedback['made_offer_call2']=='N/A'?"selected":""; ?> value="N/A">N/A</option>
												</select>
											</td>
											<td>
												<select class="form-control package_point call3" id="" name="made_offer_call3" disabled>
													<option package_val=5 cl3=5 <?php echo $agnt_feedback['made_offer_call3']=='Yes'?"selected":""; ?> value="Yes">Yes</option>
													<option package_val=5 cl3=0 <?php echo $agnt_feedback['made_offer_call3']=='No'?"selected":""; ?> value="No">No</option>
													<option package_val=0 cl1=0 <?php echo $agnt_feedback['made_offer_call3']=='N/A'?"selected":""; ?> value="N/A">N/A</option>
												</select>
											</td>
											<td>
												<select class="form-control package_point call4" id="" name="made_offer_call4" disabled>
													<option package_val=5 cl4=5 <?php echo $agnt_feedback['made_offer_call4']=='Yes'?"selected":""; ?> value="Yes">Yes</option>
													<option package_val=5 cl4=0 <?php echo $agnt_feedback['made_offer_call4']=='No'?"selected":""; ?> value="No">No</option>
													<option package_val=0 cl1=0 <?php echo $agnt_feedback['made_offer_call4']=='N/A'?"selected":""; ?> value="N/A">N/A</option>
												</select>
											</td>
											<td>
												<select class="form-control package_point call5" id="" name="made_offer_call5" disabled>
													<option package_val=5 cl5=5 <?php echo $agnt_feedback['made_offer_call5']=='Yes'?"selected":""; ?> value="Yes">Yes</option>
													<option package_val=5 cl5=0 <?php echo $agnt_feedback['made_offer_call5']=='No'?"selected":""; ?> value="No">No</option>
													<option package_val=0 cl1=0 <?php echo $agnt_feedback['made_offer_call5']=='N/A'?"selected":""; ?> value="N/A">N/A</option>
												</select>
											</td>
											<td><input type="text" class="pcare" readonly id="packageScore" name=""></td>
										</tr>
										<tr style="background-color:#A3E4D7; font-weight:bold">
											<td colspan=2>Other Offers/Opt-Ins</td>
											<td>Call 1</td>
											<td>Call 2</td>
											<td>Call 3</td>
											<td>Call 4</td>
											<td>Call 5</td>
											<td>Score</td>
										</tr>
										<tr>
											<td colspan=2>Web Login-if applicable</td>
											<td>
												<select class="form-control optins_point call1" id="" name="web_login_call1" disabled>
													<option optins_val=2 cl1=2 <?php echo $agnt_feedback['web_login_call1']=='Yes'?"selected":""; ?> value="Yes">Yes</option>
													<option optins_val=2 cl1=0 <?php echo $agnt_feedback['web_login_call1']=='No'?"selected":""; ?> value="No">No</option>
													<option optins_val=0 cl1=0 <?php echo $agnt_feedback['web_login_call1']=='N/A'?"selected":""; ?> value="N/A">N/A</option>
												</select>
											</td>
											<td>
												<select class="form-control optins_point call2" id="" name="web_login_call2" disabled>
													<option optins_val=2 cl2=2 <?php echo $agnt_feedback['web_login_call2']=='Yes'?"selected":""; ?> value="Yes">Yes</option>
													<option optins_val=2 cl2=0 <?php echo $agnt_feedback['web_login_call2']=='No'?"selected":""; ?> value="No">No</option>
													<option optins_val=0 cl1=0 <?php echo $agnt_feedback['web_login_call2']=='N/A'?"selected":""; ?> value="N/A">N/A</option>
												</select>
											</td>
											<td>
												<select class="form-control optins_point call3" id="" name="web_login_call3" disabled>
													<option optins_val=2 cl3=2 <?php echo $agnt_feedback['web_login_call3']=='Yes'?"selected":""; ?> value="Yes">Yes</option>
													<option optins_val=2 cl3=0 <?php echo $agnt_feedback['web_login_call3']=='No'?"selected":""; ?> value="No">No</option>
													<option optins_val=0 cl1=0 <?php echo $agnt_feedback['web_login_call3']=='N/A'?"selected":""; ?> value="N/A">N/A</option>
												</select>
											</td>
											<td>
												<select class="form-control optins_point call4" id="" name="web_login_call4" disabled>
													<option optins_val=2 cl4=2 <?php echo $agnt_feedback['web_login_call4']=='Yes'?"selected":""; ?> value="Yes">Yes</option>
													<option optins_val=2 cl4=0 <?php echo $agnt_feedback['web_login_call4']=='No'?"selected":""; ?> value="No">No</option>
													<option optins_val=0 cl1=0 <?php echo $agnt_feedback['web_login_call4']=='N/A'?"selected":""; ?> value="N/A">N/A</option>
												</select>
											</td>
											<td>
												<select class="form-control optins_point call5" id="" name="web_login_call5" disabled>
													<option optins_val=2 cl5=2 <?php echo $agnt_feedback['web_login_call5']=='Yes'?"selected":""; ?> value="Yes">Yes</option>
													<option optins_val=2 cl5=0 <?php echo $agnt_feedback['web_login_call5']=='No'?"selected":""; ?> value="No">No</option>
													<option optins_val=0 cl1=0 <?php echo $agnt_feedback['web_login_call5']=='N/A'?"selected":""; ?> value="N/A">N/A</option>
												</select>
											</td>
											<td rowspan=3><input type="text" class="pcare" readonly id="optinsScore" name=""></td>
										</tr>
										<tr>
											<td colspan=2>Email Capture-if applicable</td>
											<td>
												<select class="form-control optins_point call1" id="" name="email_capture_call1" disabled>
													<option optins_val=2 cl1=2 <?php echo $agnt_feedback['email_capture_call1']=='Yes'?"selected":""; ?> value="Yes">Yes</option>
													<option optins_val=2 cl1=0 <?php echo $agnt_feedback['email_capture_call1']=='No'?"selected":""; ?> value="No">No</option>
													<option optins_val=0 cl1=0 <?php echo $agnt_feedback['email_capture_call1']=='N/A'?"selected":""; ?> value="N/A">N/A</option>
												</select>
											</td>
											<td>
												<select class="form-control optins_point call2" id="" name="email_capture_call2" disabled>
													<option optins_val=2 cl2=2 <?php echo $agnt_feedback['email_capture_call2']=='Yes'?"selected":""; ?> value="Yes">Yes</option>
													<option optins_val=2 cl2=0 <?php echo $agnt_feedback['email_capture_call2']=='No'?"selected":""; ?> value="No">No</option>
													<option optins_val=0 cl1=0 <?php echo $agnt_feedback['email_capture_call2']=='N/A'?"selected":""; ?> value="N/A">N/A</option>
												</select>
											</td>
											<td>
												<select class="form-control optins_point call3" id="" name="email_capture_call3" disabled>
													<option optins_val=2 cl3=2 <?php echo $agnt_feedback['email_capture_call3']=='Yes'?"selected":""; ?> value="Yes">Yes</option>
													<option optins_val=2 cl3=0 <?php echo $agnt_feedback['email_capture_call3']=='No'?"selected":""; ?> value="No">No</option>
													<option optins_val=0 cl1=0 <?php echo $agnt_feedback['email_capture_call3']=='N/A'?"selected":""; ?> value="N/A">N/A</option>
												</select>
											</td>
											<td>
												<select class="form-control optins_point call4" id="" name="email_capture_call4" disabled>
													<option optins_val=2 cl4=2 <?php echo $agnt_feedback['email_capture_call4']=='Yes'?"selected":""; ?> value="Yes">Yes</option>
													<option optins_val=2 cl4=0 <?php echo $agnt_feedback['email_capture_call4']=='No'?"selected":""; ?> value="No">No</option>
													<option optins_val=0 cl1=0 <?php echo $agnt_feedback['email_capture_call4']=='N/A'?"selected":""; ?> value="N/A">N/A</option>
												</select>
											</td>
											<td>
												<select class="form-control optins_point call5" id="" name="email_capture_call5" disabled>
													<option optins_val=2 cl5=2 <?php echo $agnt_feedback['email_capture_call5']=='Yes'?"selected":""; ?> value="Yes">Yes</option>
													<option optins_val=2 cl5=0 <?php echo $agnt_feedback['email_capture_call5']=='No'?"selected":""; ?> value="No">No</option>
													<option optins_val=0 cl1=0 <?php echo $agnt_feedback['email_capture_call5']=='N/A'?"selected":""; ?> value="N/A">N/A</option>
												</select>
											</td>
										</tr>
										<tr>
											<td colspan=2>SMS Opt-In-if applicable</td>
											<td>
												<select class="form-control optins_point call1" id="" name="sms_opt_call1" disabled>
													<option optins_val=2 cl1=2 <?php echo $agnt_feedback['sms_opt_call1']=='Yes'?"selected":""; ?> value="Yes">Yes</option>
													<option optins_val=2 cl1=0 <?php echo $agnt_feedback['sms_opt_call1']=='No'?"selected":""; ?> value="No">No</option>
													<option optins_val=0 cl1=0 <?php echo $agnt_feedback['sms_opt_call1']=='N/A'?"selected":""; ?> value="N/A">N/A</option>
												</select>
											</td>
											<td>
												<select class="form-control optins_point call2" id="" name="sms_opt_call2" disabled>
													<option optins_val=2 cl2=2 <?php echo $agnt_feedback['sms_opt_call2']=='Yes'?"selected":""; ?> value="Yes">Yes</option>
													<option optins_val=2 cl2=0 <?php echo $agnt_feedback['sms_opt_call2']=='No'?"selected":""; ?> value="No">No</option>
													<option optins_val=0 cl1=0 <?php echo $agnt_feedback['sms_opt_call2']=='N/A'?"selected":""; ?> value="N/A">N/A</option>
												</select>
											</td>
											<td>
												<select class="form-control optins_point call3" id="" name="sms_opt_call3" disabled>
													<option optins_val=2 cl3=2 <?php echo $agnt_feedback['sms_opt_call3']=='Yes'?"selected":""; ?> value="Yes">Yes</option>
													<option optins_val=2 cl3=0 <?php echo $agnt_feedback['sms_opt_call3']=='No'?"selected":""; ?> value="No">No</option>
													<option optins_val=0 cl1=0 <?php echo $agnt_feedback['sms_opt_call3']=='N/A'?"selected":""; ?> value="N/A">N/A</option>
												</select>
											</td>
											<td>
												<select class="form-control optins_point call4" id="" name="sms_opt_call4" disabled>
													<option optins_val=2 cl4=2 <?php echo $agnt_feedback['sms_opt_call4']=='Yes'?"selected":""; ?> value="Yes">Yes</option>
													<option optins_val=2 cl4=0 <?php echo $agnt_feedback['sms_opt_call4']=='No'?"selected":""; ?> value="No">No</option>
													<option optins_val=0 cl1=0 <?php echo $agnt_feedback['sms_opt_call4']=='N/A'?"selected":""; ?> value="N/A">N/A</option>
												</select>
											</td>
											<td>
												<select class="form-control optins_point call5" id="" name="sms_opt_call5" disabled>
													<option optins_val=2 cl5=2 <?php echo $agnt_feedback['sms_opt_call5']=='Yes'?"selected":""; ?> value="Yes">Yes</option>
													<option optins_val=2 cl5=0 <?php echo $agnt_feedback['sms_opt_call5']=='No'?"selected":""; ?> value="No">No</option>
													<option optins_val=0 cl1=0 <?php echo $agnt_feedback['sms_opt_call5']=='N/A'?"selected":""; ?> value="N/A">N/A</option>
												</select>
											</td>
										</tr>
										<tr style="background-color:#A3E4D7; font-weight:bold">
											<td colspan=2>Database Followup</td>
											<td>Call 1</td>
											<td>Call 2</td>
											<td>Call 3</td>
											<td>Call 4</td>
											<td>Call 5</td>
											<td>Score</td>
										</tr>
										<tr>
											<td colspan=2>Proper Reason Code & Accurate Notes-(Use current guidelines)</td>
											<td>
												<select class="form-control database_point call1" id="" name="reason_code_call1" disabled>
													<option database_val=3 cl1=3 <?php echo $agnt_feedback['reason_code_call1']=='Yes'?"selected":""; ?> value="Yes">Yes</option>
													<option database_val=3 cl1=0 <?php echo $agnt_feedback['reason_code_call1']=='No'?"selected":""; ?> value="No">No</option>
												</select>
											</td>
											<td>
												<select class="form-control database_point call2" id="" name="reason_code_call2" disabled>
													<option database_val=3 cl2=3 <?php echo $agnt_feedback['reason_code_call2']=='Yes'?"selected":""; ?> value="Yes">Yes</option>
													<option database_val=3 cl2=0 <?php echo $agnt_feedback['reason_code_call2']=='No'?"selected":""; ?> value="No">No</option>
												</select>
											</td>
											<td>
												<select class="form-control database_point call3" id="" name="reason_code_call3" disabled>
													<option database_val=3 cl3=3 <?php echo $agnt_feedback['reason_code_call3']=='Yes'?"selected":""; ?> value="Yes">Yes</option>
													<option database_val=3 cl3=0 <?php echo $agnt_feedback['reason_code_call3']=='No'?"selected":""; ?> value="No">No</option>
												</select>
											</td>
											<td>
												<select class="form-control database_point call4" id="" name="reason_code_call4" disabled>
													<option database_val=3 cl4=3 <?php echo $agnt_feedback['reason_code_call4']=='Yes'?"selected":""; ?> value="Yes">Yes</option>
													<option database_val=3 cl4=0 <?php echo $agnt_feedback['reason_code_call4']=='No'?"selected":""; ?> value="No">No</option>
												</select>
											</td>
											<td>
												<select class="form-control database_point call5" id="" name="reason_code_call5" disabled>
													<option database_val=3 cl5=3 <?php echo $agnt_feedback['reason_code_call5']=='Yes'?"selected":""; ?> value="Yes">Yes</option>
													<option database_val=3 cl5=0 <?php echo $agnt_feedback['reason_code_call5']=='No'?"selected":""; ?> value="No">No</option>
												</select>
											</td>
											<td rowspan=2><input type="text" class="pcare" readonly id="databaseScore" name=""></td>
										</tr>
										<tr>
											<td colspan=2>Correctly Used Purity Points-(Use PP Deposit guidelines)</td>
											<td>
												<select class="form-control database_point call1" id="" name="used_purity_call1" disabled>
													<option database_val=3 cl1=3 <?php echo $agnt_feedback['used_purity_call1']=='Yes'?"selected":""; ?> value="Yes">Yes</option>
													<option database_val=3 cl1=0 <?php echo $agnt_feedback['used_purity_call1']=='No'?"selected":""; ?> value="No">No</option>
													<option database_val=0 cl1=0 <?php echo $agnt_feedback['used_purity_call1']=='N/A'?"selected":""; ?> value="N/A">N/A</option>
												</select>
											</td>
											<td>
												<select class="form-control database_point call2" id="" name="used_purity_call2" disabled>
													<option database_val=3 cl2=3 <?php echo $agnt_feedback['used_purity_call2']=='Yes'?"selected":""; ?> value="Yes">Yes</option>
													<option database_val=3 cl2=0 <?php echo $agnt_feedback['used_purity_call2']=='No'?"selected":""; ?> value="No">No</option>
													<option database_val=0 cl1=0 <?php echo $agnt_feedback['used_purity_call2']=='N/A'?"selected":""; ?> value="N/A">N/A</option>
												</select>
											</td>
											<td>
												<select class="form-control database_point call3" id="" name="used_purity_call3" disabled>
													<option database_val=3 cl3=3 <?php echo $agnt_feedback['used_purity_call3']=='Yes'?"selected":""; ?> value="Yes">Yes</option>
													<option database_val=3 cl3=0 <?php echo $agnt_feedback['used_purity_call3']=='No'?"selected":""; ?> value="No">No</option>
													<option database_val=0 cl1=0 <?php echo $agnt_feedback['used_purity_call3']=='N/A'?"selected":""; ?> value="N/A">N/A</option>
												</select>
											</td>
											<td>
												<select class="form-control database_point call4" id="" name="used_purity_call4" disabled>
													<option database_val=3 cl4=3 <?php echo $agnt_feedback['used_purity_call4']=='Yes'?"selected":""; ?> value="Yes">Yes</option>
													<option database_val=3 cl4=0 <?php echo $agnt_feedback['used_purity_call4']=='No'?"selected":""; ?> value="No">No</option>
													<option database_val=0 cl1=0 <?php echo $agnt_feedback['used_purity_call4']=='N/A'?"selected":""; ?> value="N/A">N/A</option>
												</select>
											</td>
											<td>
												<select class="form-control database_point call5" id="" name="used_purity_call5" disabled>
													<option database_val=3 cl5=3 <?php echo $agnt_feedback['used_purity_call5']=='Yes'?"selected":""; ?> value="Yes">Yes</option>
													<option database_val=3 cl5=0 <?php echo $agnt_feedback['used_purity_call5']=='No'?"selected":""; ?> value="No">No</option>
													<option database_val=0 cl1=0 <?php echo $agnt_feedback['used_purity_call5']=='N/A'?"selected":""; ?> value="N/A">N/A</option>
												</select>
											</td>
										</tr>
										<tr style="background-color:#A3E4D7; font-weight:bold">
											<td colspan=2>Information Accuracy</td>
											<td>Call 1</td>
											<td>Call 2</td>
											<td>Call 3</td>
											<td>Call 4</td>
											<td>Call 5</td>
											<td>Score</td>
										</tr>
										<tr>
											<td colspan=2>Agent provided correct information to caller and did not mislead (Product, shipping, cost, etc.)</td>
											<td>
												<select class="form-control info_point call1" id="" name="information_accuracy_call1" disabled>
													<option info_val=3 cl1=3 <?php echo $agnt_feedback['information_accuracy_call1']=='Yes'?"selected":""; ?> value="Yes">Yes</option>
													<option info_val=3 cl1=0 <?php echo $agnt_feedback['information_accuracy_call1']=='No'?"selected":""; ?> value="No">No</option>
												</select>
											</td>
											<td>
												<select class="form-control info_point call2" id="" name="information_accuracy_call2" disabled>
													<option info_val=3 cl2=3 <?php echo $agnt_feedback['information_accuracy_call2']=='Yes'?"selected":""; ?> value="Yes">Yes</option>
													<option info_val=3 cl2=0 <?php echo $agnt_feedback['information_accuracy_call2']=='No'?"selected":""; ?> value="No">No</option>
												</select>
											</td>
											<td>
												<select class="form-control info_point call3" id="" name="information_accuracy_call3" disabled>
													<option info_val=3 cl3=3 <?php echo $agnt_feedback['information_accuracy_call3']=='Yes'?"selected":""; ?> value="Yes">Yes</option>
													<option info_val=3 cl3=0 <?php echo $agnt_feedback['information_accuracy_call3']=='No'?"selected":""; ?> value="No">No</option>
												</select>
											</td>
											<td>
												<select class="form-control info_point call4" id="" name="information_accuracy_call4" disabled>
													<option info_val=3 cl4=3 <?php echo $agnt_feedback['information_accuracy_call4']=='Yes'?"selected":""; ?> value="Yes">Yes</option>
													<option info_val=3 cl4=0 <?php echo $agnt_feedback['information_accuracy_call4']=='No'?"selected":""; ?> value="No">No</option>
												</select>
											</td>
											<td>
												<select class="form-control info_point call5" id="" name="information_accuracy_call5" disabled>
													<option info_val=3 cl5=3 <?php echo $agnt_feedback['information_accuracy_call5']=='Yes'?"selected":""; ?> value="Yes">Yes</option>
													<option info_val=3 cl5=0 <?php echo $agnt_feedback['information_accuracy_call5']=='No'?"selected":""; ?> value="No">No</option>
												</select>
											</td>
											<td><input type="text" class="pcare" readonly id="infoScore" name=""></td>
										</tr>
										<tr style="background-color:#A3E4D7; font-weight:bold">
											<td colspan=2>Call Management</td>
											<td>Call 1</td>
											<td>Call 2</td>
											<td>Call 3</td>
											<td>Call 4</td>
											<td>Call 5</td>
											<td>Score</td>
										</tr>
										<tr>
											<td colspan=2>Soft Skills (Empathy, positive demeanor, etc.)</td>
											<td>
												<select class="form-control call_point call1" id="" name="soft_skill_call1" disabled>
													<option call_val=3 cl1=3 <?php echo $agnt_feedback['soft_skill_call1']=='Yes'?"selected":""; ?> value="Yes">Yes</option>
													<option call_val=3 cl1=0 <?php echo $agnt_feedback['soft_skill_call1']=='No'?"selected":""; ?> value="No">No</option>
												</select>
											</td>
											<td>
												<select class="form-control call_point call2" id="" name="soft_skill_call2" disabled>
													<option call_val=3 cl2=3 <?php echo $agnt_feedback['soft_skill_call2']=='Yes'?"selected":""; ?> value="Yes">Yes</option>
													<option call_val=3 cl2=0 <?php echo $agnt_feedback['soft_skill_call2']=='No'?"selected":""; ?> value="No">No</option>
												</select>
											</td>
											<td>
												<select class="form-control call_point call3" id="" name="soft_skill_call3" disabled>
													<option call_val=3 cl3=3 <?php echo $agnt_feedback['soft_skill_call3']=='Yes'?"selected":""; ?> value="Yes">Yes</option>
													<option call_val=3 cl3=0 <?php echo $agnt_feedback['soft_skill_call3']=='No'?"selected":""; ?> value="No">No</option>
												</select>
											</td>
											<td>
												<select class="form-control call_point call4" id="" name="soft_skill_call4" disabled>
													<option call_val=3 cl4=3 <?php echo $agnt_feedback['soft_skill_call4']=='Yes'?"selected":""; ?> value="Yes">Yes</option>
													<option call_val=3 cl4=0 <?php echo $agnt_feedback['soft_skill_call4']=='No'?"selected":""; ?> value="No">No</option>
												</select>
											</td>
											<td>
												<select class="form-control call_point call5" id="" name="soft_skill_call5" disabled>
													<option call_val=3 cl5=3 <?php echo $agnt_feedback['soft_skill_call5']=='Yes'?"selected":""; ?> value="Yes">Yes</option>
													<option call_val=3 cl5=0 <?php echo $agnt_feedback['soft_skill_call5']=='No'?"selected":""; ?> value="No">No</option>
												</select>
											</td>
											<td rowspan=3><input type="text" class="pcare" readonly id="callScore" name=""></td>
										</tr>
										<tr>
											<td colspan=2>Rapport</td>
											<td>
												<select class="form-control call_point call1" id="" name="rapport_call1" disabled>
													<option call_val=3 cl1=3 <?php echo $agnt_feedback['rapport_call1']=='Yes'?"selected":""; ?> value="Yes">Yes</option>
													<option call_val=3 cl1=0 <?php echo $agnt_feedback['rapport_call1']=='No'?"selected":""; ?> value="No">No</option>
												</select>
											</td>
											<td>
												<select class="form-control call_point call2" id="" name="rapport_call2" disabled>
													<option call_val=3 cl2=3 <?php echo $agnt_feedback['rapport_cal2']=='Yes'?"selected":""; ?> value="Yes">Yes</option>
													<option call_val=3 cl2=0 <?php echo $agnt_feedback['rapport_call2']=='No'?"selected":""; ?> value="No">No</option>
												</select>
											</td>
											<td>
												<select class="form-control call_point call3" id="" name="rapport_call3" disabled>
													<option call_val=3 cl3=3 <?php echo $agnt_feedback['rapport_call3']=='Yes'?"selected":""; ?> value="Yes">Yes</option>
													<option call_val=3 cl3=0 <?php echo $agnt_feedback['rapport_call3']=='No'?"selected":""; ?> value="No">No</option>
												</select>
											</td>
											<td>
												<select class="form-control call_point call4" id="" name="rapport_call4" disabled>
													<option call_val=3 cl4=3 <?php echo $agnt_feedback['rapport_call4']=='Yes'?"selected":""; ?> value="Yes">Yes</option>
													<option call_val=3 cl4=0 <?php echo $agnt_feedback['rapport_call4']=='No'?"selected":""; ?> value="No">No</option>
												</select>
											</td>
											<td>
												<select class="form-control call_point call5" id="" name="rapport_call5" disabled>
													<option call_val=3 cl5=3 <?php echo $agnt_feedback['rapport_call5']=='Yes'?"selected":""; ?> value="Yes">Yes</option>
													<option call_val=3 cl5=0 <?php echo $agnt_feedback['rapport_call5']=='No'?"selected":""; ?> value="No">No</option>
												</select>
											</td>
										</tr>
										<tr>
											<td colspan=2>Maintaining Call Control-(dead air, pauses, call control, off topic, etc.)</td>
											<td>
												<select class="form-control call_point call1" id="" name="call_control_call1" disabled>
													<option call_val=3 cl1=3 <?php echo $agnt_feedback['call_control_call1']=='Yes'?"selected":""; ?> value="Yes">Yes</option>
													<option call_val=3 cl1=0 <?php echo $agnt_feedback['call_control_call1']=='No'?"selected":""; ?> value="No">No</option>
												</select>
											</td>
											<td>
												<select class="form-control call_point call2" id="" name="call_control_call2" disabled>
													<option call_val=3 cl2=3 <?php echo $agnt_feedback['call_control_call2']=='Yes'?"selected":""; ?> value="Yes">Yes</option>
													<option call_val=3 cl2=0 <?php echo $agnt_feedback['call_control_call2']=='No'?"selected":""; ?> value="No">No</option>
												</select>
											</td>
											<td>
												<select class="form-control call_point call3" id="" name="call_control_call3" disabled>
													<option call_val=3 cl3=3 <?php echo $agnt_feedback['call_control_call3']=='Yes'?"selected":""; ?> value="Yes">Yes</option>
													<option call_val=3 cl3=0 <?php echo $agnt_feedback['call_control_call3']=='No'?"selected":""; ?> value="No">No</option>
												</select>
											</td>
											<td>
												<select class="form-control call_point call4" id="" name="call_control_call4" disabled>
													<option call_val=3 cl4=3 <?php echo $agnt_feedback['call_control_call4']=='Yes'?"selected":""; ?> value="Yes">Yes</option>
													<option call_val=3 cl4=0 <?php echo $agnt_feedback['call_control_call4']=='No'?"selected":""; ?> value="No">No</option>
												</select>
											</td>
											<td>
												<select class="form-control call_point call5" id="" name="call_control_call5" disabled>
													<option call_val=3 cl5=3 <?php echo $agnt_feedback['call_control_call5']=='Yes'?"selected":""; ?> value="Yes">Yes</option>
													<option call_val=3 cl5=0 <?php echo $agnt_feedback['call_control_call5']=='No'?"selected":""; ?> value="No">No</option>
												</select>
											</td>
										</tr>

										<tr style="background-color:#CD6155; font-weight:bold">
											<td colspan=2>Critical Drivers-Auto-Fails</td>
											<td>Call 1</td>
											<td>Call 2</td>
											<td>Call 3</td>
											<td>Call 4</td>
											<td>Call 5</td>
											<td></td>
										</tr>
										<tr>
											<td colspan=2>***Unauthorized Shipments/Not following up in the database</td>
											<td>
												<select class="form-control autofCall1" id="cl1af1" name="unauthorized_shipment_call1" disabled>
													<option cl1=0 <?php echo $agnt_feedback['unauthorized_shipment_call1']=='No'?"selected":""; ?> value="No">No</option>
													<option cl1=0 <?php echo $agnt_feedback['unauthorized_shipment_call1']=='Yes'?"selected":""; ?> value="Yes">Yes</option>
												</select>
											</td>
											<td>
												<select class="form-control autofCall2" id="cl2af1" name="unauthorized_shipment_call2" disabled>
													<option cl2=0 <?php echo $agnt_feedback['unauthorized_shipment_call2']=='No'?"selected":""; ?> value="No">No</option>
													<option cl2=0 <?php echo $agnt_feedback['unauthorized_shipment_call2']=='Yes'?"selected":""; ?> value="Yes">Yes</option>
												</select>
											</td>
											<td>
												<select class="form-control autofCall3" id="cl3af1" name="unauthorized_shipment_call3" disabled>
													<option cl3=0 <?php echo $agnt_feedback['unauthorized_shipment_call3']=='No'?"selected":""; ?> value="No">No</option>
													<option cl3=0 <?php echo $agnt_feedback['unauthorized_shipment_call3']=='Yes'?"selected":""; ?> value="Yes">Yes</option>
												</select>
											</td>
											<td>
												<select class="form-control autofCall4" id="cl4af1" name="unauthorized_shipment_call4" disabled>
													<option cl4=0 <?php echo $agnt_feedback['unauthorized_shipment_call4']=='No'?"selected":""; ?> value="No">No</option>
													<option cl4=0 <?php echo $agnt_feedback['unauthorized_shipment_call4']=='Yes'?"selected":""; ?> value="Yes">Yes</option>
												</select>
											</td>
											<td>
												<select class="form-control autofCall5" id="cl5af1" name="unauthorized_shipment_call5" disabled>
													<option cl5=0 <?php echo $agnt_feedback['unauthorized_shipment_call5']=='No'?"selected":""; ?> value="No">No</option>
													<option cl5=0 <?php echo $agnt_feedback['unauthorized_shipment_call5']=='Yes'?"selected":""; ?> value="Yes">Yes</option>
												</select>
											</td>
											<td rowspan=6></td>
										</tr>
										<tr>
											<td colspan=2>***Inappropriate Language/Unprofessional Behavior</td>
											<td>
												<select class="form-control autofCall1" id="cl1af2" name="inappropiate_language_call1" disabled>
													<option cl1=0 <?php echo $agnt_feedback['inappropiate_language_call1']=='No'?"selected":""; ?> value="No">No</option>
													<option cl1=0 <?php echo $agnt_feedback['inappropiate_language_call1']=='Yes'?"selected":""; ?> value="Yes">Yes</option>
												</select>
											</td>
											<td>
												<select class="form-control autofCall2" id="cl2af2" name="inappropiate_language_call2" disabled>
													<option cl2=0 <?php echo $agnt_feedback['inappropiate_language_call2']=='No'?"selected":""; ?> value="No">No</option>
													<option cl2=0 <?php echo $agnt_feedback['inappropiate_language_call2']=='Yes'?"selected":""; ?> value="Yes">Yes</option>
												</select>
											</td>
											<td>
												<select class="form-control autofCall3" id="cl3af2" name="inappropiate_language_call3" disabled>
													<option cl3=0 <?php echo $agnt_feedback['inappropiate_language_call3']=='No'?"selected":""; ?> value="No">No</option>
													<option cl3=0 <?php echo $agnt_feedback['inappropiate_language_call3']=='Yes'?"selected":""; ?> value="Yes">Yes</option>
												</select>
											</td>
											<td>
												<select class="form-control autofCall4" id="cl4af2" name="inappropiate_language_call4" disabled>
													<option cl4=0 <?php echo $agnt_feedback['inappropiate_language_call4']=='No'?"selected":""; ?> value="No">No</option>
													<option cl4=0 <?php echo $agnt_feedback['inappropiate_language_call4']=='Yes'?"selected":""; ?> value="Yes">Yes</option>
												</select>
											</td>
											<td>
												<select class="form-control autofCall5" id="cl5af2" name="inappropiate_language_call5" disabled>
													<option cl5=0 <?php echo $agnt_feedback['inappropiate_language_call5']=='No'?"selected":""; ?> value="No">No</option>
													<option cl5=0 <?php echo $agnt_feedback['inappropiate_language_call5']=='Yes'?"selected":""; ?> value="Yes">Yes</option>
												</select>
											</td>
										</tr>
										<!--<tr>
											<td colspan=2>***Hanging up on Customer</td>
											<td>
												<select class="form-control autofCall1" id="cl1af3" name="hanging_up_call1" disabled>
													<option cl1=0 <?php echo $agnt_feedback['hanging_up_call1']=='No'?"selected":""; ?> value="No">No</option>
													<option cl1=0 <?php echo $agnt_feedback['hanging_up_call1']=='Yes'?"selected":""; ?> value="Yes">Yes</option>
												</select>
											</td>
											<td>
												<select class="form-control autofCall2" id="cl2af3" name="hanging_up_call2" disabled>
													<option cl2=0 <?php echo $agnt_feedback['hanging_up_call2']=='No'?"selected":""; ?> value="No">No</option>
													<option cl2=0 <?php echo $agnt_feedback['hanging_up_call2']=='Yes'?"selected":""; ?> value="Yes">Yes</option>
												</select>
											</td>
											<td>
												<select class="form-control autofCall3" id="cl3af3" name="hanging_up_call3" disabled>
													<option cl3=0 <?php echo $agnt_feedback['hanging_up_call3']=='No'?"selected":""; ?> value="No">No</option>
													<option cl3=0 <?php echo $agnt_feedback['hanging_up_call3']=='Yes'?"selected":""; ?> value="Yes">Yes</option>
												</select>
											</td>
											<td>
												<select class="form-control autofCall4" id="cl4af3" name="hanging_up_call4" disabled>
													<option cl4=0 <?php echo $agnt_feedback['hanging_up_call4']=='No'?"selected":""; ?> value="No">No</option>
													<option cl4=0 <?php echo $agnt_feedback['hanging_up_call4']=='Yes'?"selected":""; ?> value="Yes">Yes</option>
												</select>
											</td>
											<td>
												<select class="form-control autofCall5" id="cl5af3" name="hanging_up_call5" disabled>
													<option cl5=0 <?php echo $agnt_feedback['hanging_up_call5']=='No'?"selected":""; ?> value="No">No</option>
													<option cl5=0 <?php echo $agnt_feedback['hanging_up_call5']=='Yes'?"selected":""; ?> value="Yes">Yes</option>
												</select>
											</td>
										</tr>-->
										<tr>
											<td colspan=2>***Badgering/Arguing with Customer</td>
											<td>
												<select class="form-control autofCall1" id="cl1af4" name="badgering_call1" disabled>
													<option cl1=0 <?php echo $agnt_feedback['badgering_call1']=='No'?"selected":""; ?> value="No">No</option>
													<option cl1=0 <?php echo $agnt_feedback['badgering_call1']=='Yes'?"selected":""; ?> value="Yes">Yes</option>
												</select>
											</td>
											<td>
												<select class="form-control autofCall2" id="cl2af4" name="badgering_call2" disabled>
													<option cl2=0 <?php echo $agnt_feedback['badgering_call2']=='No'?"selected":""; ?> value="No">No</option>
													<option cl2=0 <?php echo $agnt_feedback['badgering_call2']=='Yes'?"selected":""; ?> value="Yes">Yes</option>
												</select>
											</td>
											<td>
												<select class="form-control autofCall3" id="cl3af4" name="badgering_call3" disabled>
													<option cl3=0 <?php echo $agnt_feedback['badgering_call3']=='No'?"selected":""; ?> value="No">No</option>
													<option cl3=0 <?php echo $agnt_feedback['badgering_call3']=='Yes'?"selected":""; ?> value="Yes">Yes</option>
												</select>
											</td>
											<td>
												<select class="form-control autofCall4" id="cl4af4" name="badgering_call4" disabled>
													<option cl4=0 <?php echo $agnt_feedback['badgering_call4']=='No'?"selected":""; ?> value="No">No</option>
													<option cl4=0 <?php echo $agnt_feedback['badgering_call4']=='Yes'?"selected":""; ?> value="Yes">Yes</option>
												</select>
											</td>
											<td>
												<select class="form-control autofCall5" id="cl5af4" name="badgering_call5" disabled>
													<option cl5=0 <?php echo $agnt_feedback['badgering_call5']=='No'?"selected":""; ?> value="No">No</option>
													<option cl5=0 <?php echo $agnt_feedback['badgering_call5']=='Yes'?"selected":""; ?> value="Yes">Yes</option>
												</select>
											</td>
										</tr>
										<tr>
											<td colspan=2>***Incorrect use of actions Autofail</td>
											<td>
												<select class="form-control autofCall1" id="cl1af5" name="action_autofail_call1" disabled>
													<option cl1=0 <?php echo $agnt_feedback['action_autofail_call1']=='No'?"selected":""; ?> value="No">No</option>
													<option cl1=0 <?php echo $agnt_feedback['action_autofail_call1']=='Yes'?"selected":""; ?> value="Yes">Yes</option>
												</select>
											</td>
											<td>
												<select class="form-control autofCall2" id="cl2af5" name="action_autofail_call2" disabled>
													<option cl2=0 <?php echo $agnt_feedback['action_autofail_call2']=='No'?"selected":""; ?> value="No">No</option>
													<option cl2=0 <?php echo $agnt_feedback['action_autofail_call2']=='Yes'?"selected":""; ?> value="Yes">Yes</option>
												</select>
											</td>
											<td>
												<select class="form-control autofCall3" id="cl3af5" name="action_autofail_call3" disabled>
													<option cl3=0 <?php echo $agnt_feedback['action_autofail_call3']=='No'?"selected":""; ?> value="No">No</option>
													<option cl3=0 <?php echo $agnt_feedback['action_autofail_call3']=='Yes'?"selected":""; ?> value="Yes">Yes</option>
												</select>
											</td>
											<td>
												<select class="form-control autofCall4" id="cl4af5" name="action_autofail_call4" disabled>
													<option cl4=0 <?php echo $agnt_feedback['action_autofail_call4']=='No'?"selected":""; ?> value="No">No</option>
													<option cl4=0 <?php echo $agnt_feedback['action_autofail_call4']=='Yes'?"selected":""; ?> value="Yes">Yes</option>
												</select>
											</td>
											<td>
												<select class="form-control autofCall5" id="cl5af5" name="action_autofail_call5" disabled>
													<option cl5=0 <?php echo $agnt_feedback['action_autofail_call5']=='No'?"selected":""; ?> value="No">No</option>
													<option cl5=0 <?php echo $agnt_feedback['action_autofail_call5']=='Yes'?"selected":""; ?> value="Yes">Yes</option>
												</select>
											</td>
										</tr>
										<tr>
											<td colspan=2>***Making Health Claims</td>
											<td>
												<select class="form-control autofCall1" id="cl1af6" name="health_claim_call1" disabled>
													<option cl1=0 <?php echo $agnt_feedback['health_claim_call1']=='No'?"selected":""; ?> value="No">No</option>
													<option cl1=0 <?php echo $agnt_feedback['health_claim_call1']=='Yes'?"selected":""; ?> value="Yes">Yes</option>
												</select>
											</td>
											<td>
												<select class="form-control autofCall2" id="cl2af6" name="health_claim_call2" disabled>
													<option cl2=0 <?php echo $agnt_feedback['health_claim_call2']=='No'?"selected":""; ?> value="No">No</option>
													<option cl2=0 <?php echo $agnt_feedback['health_claim_call2']=='Yes'?"selected":""; ?> value="Yes">Yes</option>
												</select>
											</td>
											<td>
												<select class="form-control autofCall3" id="cl3af6" name="health_claim_call3" disabled>
													<option cl3=0 <?php echo $agnt_feedback['health_claim_call3']=='No'?"selected":""; ?> value="No">No</option>
													<option cl3=0 <?php echo $agnt_feedback['health_claim_call3']=='Yes'?"selected":""; ?> value="Yes">Yes</option>
												</select>
											</td>
											<td>
												<select class="form-control autofCall4" id="cl4af6" name="health_claim_call4" disabled>
													<option cl4=0 <?php echo $agnt_feedback['health_claim_call4']=='No'?"selected":""; ?> value="No">No</option>
													<option cl4=0 <?php echo $agnt_feedback['health_claim_call4']=='Yes'?"selected":""; ?> value="Yes">Yes</option>
												</select>
											</td>
											<td>
												<select class="form-control autofCall5" id="cl5af6" name="health_claim_call5" disabled>
													<option cl5=0 <?php echo $agnt_feedback['health_claim_call5']=='No'?"selected":""; ?> value="No">No</option>
													<option cl5=0 <?php echo $agnt_feedback['health_claim_call5']=='Yes'?"selected":""; ?> value="Yes">Yes</option>
												</select>
											</td>
										</tr>
										<tr>
										<td colspan=2>***No Confirmation</td>
											<td>
												<select class="form-control autofCall1" id="cl1af7" name="no_confirmation1" disabled>
													<option cl1=0 <?php echo $agnt_feedback['no_confirmation1']=='No'?"selected":""; ?> value="No">No</option>
													<option cl1=0 <?php echo $agnt_feedback['no_confirmation1']=='Yes'?"selected":""; ?> value="Yes">Yes</option>
													<option cl1=0 <?php echo $agnt_feedback['no_confirmation1']=='NA'?"selected":""; ?> value="NA">NA</option>
												</select>
											</td>
											<td>
												<select class="form-control autofCall2" id="cl2af7" name="no_confirmation2" disabled>
													<option cl2=0 <?php echo $agnt_feedback['no_confirmation2']=='No'?"selected":""; ?> value="No">No</option>
													<option cl2=0 <?php echo $agnt_feedback['no_confirmation2']=='Yes'?"selected":""; ?> value="Yes">Yes</option>
													<option cl2=0 <?php echo $agnt_feedback['no_confirmation2']=='NA'?"selected":""; ?> value="NA">NA</option>
												</select>
											</td>
											<td>
												<select class="form-control autofCall3" id="cl3af7" name="no_confirmation3" disabled>
													<option cl3=0 <?php echo $agnt_feedback['no_confirmation3']=='No'?"selected":""; ?> value="No">No</option>
													<option cl3=0 <?php echo $agnt_feedback['no_confirmation3']=='Yes'?"selected":""; ?> value="Yes">Yes</option>
													<option cl3=0 <?php echo $agnt_feedback['no_confirmation3']=='NA'?"selected":""; ?> value="NA">NA</option>
												</select>
											</td>
											<td>
												<select class="form-control autofCall4" id="cl4af7" name="no_confirmation4" disabled>
													<option cl4=0 <?php echo $agnt_feedback['no_confirmation4']=='No'?"selected":""; ?> value="No">No</option>
													<option cl4=0 <?php echo $agnt_feedback['no_confirmation4']=='Yes'?"selected":""; ?> value="Yes">Yes</option>
													<option cl4=0 <?php echo $agnt_feedback['no_confirmation4']=='NA'?"selected":""; ?> value="NA">NA</option>
												</select>
											</td>
											<td>
												<select class="form-control autofCall5" id="cl5af7" name="no_confirmation5" disabled>
													<option cl5=0 <?php echo $agnt_feedback['no_confirmation5']=='No'?"selected":""; ?> value="No">No</option>
													<option cl5=0 <?php echo $agnt_feedback['no_confirmation5']=='Yes'?"selected":""; ?> value="Yes">Yes</option>
													<option cl5=0 <?php echo $agnt_feedback['no_confirmation5']=='NA'?"selected":""; ?> value="NA">NA</option>
												</select>
											</td>
										</tr>
										<tr>
											<td colspan=2>***No Retention</td>
											<td>
												<select class="form-control autofCall1" id="cl1af8" name="no_retention1" disabled>
													<option cl1=0 <?php echo $agnt_feedback['no_retention1']=='No'?"selected":""; ?> value="No">No</option>
													<option cl1=0 <?php echo $agnt_feedback['no_retention1']=='Yes'?"selected":""; ?> value="Yes">Yes</option>
													<option cl1=0 <?php echo $agnt_feedback['no_retention1']=='NA'?"selected":""; ?> value="NA">NA</option>
												</select>
											</td>
											<td>
												<select class="form-control autofCall2" id="cl2af8" name="no_retention2" disabled>
													<option cl2=0 <?php echo $agnt_feedback['no_retention2']=='No'?"selected":""; ?> value="No">No</option>
													<option cl2=0 <?php echo $agnt_feedback['no_retention2']=='Yes'?"selected":""; ?> value="Yes">Yes</option>
													<option cl2=0 <?php echo $agnt_feedback['no_retention2']=='NA'?"selected":""; ?> value="NA">NA</option>
												</select>
											</td>
											<td>
												<select class="form-control autofCall3" id="cl3af8" name="no_retention3" disabled>
													<option cl3=0 <?php echo $agnt_feedback['no_retention3']=='No'?"selected":""; ?> value="No">No</option>
													<option cl3=0 <?php echo $agnt_feedback['no_retention3']=='Yes'?"selected":""; ?> value="Yes">Yes</option>
													<option cl3=0 <?php echo $agnt_feedback['no_retention3']=='NA'?"selected":""; ?> value="NA">NA</option>
												</select>
											</td>
											<td>
												<select class="form-control autofCall4" id="cl4af8" name="no_retention4" disabled>
													<option cl4=0 <?php echo $agnt_feedback['no_retention4']=='No'?"selected":""; ?> value="No">No</option>
													<option cl4=0 <?php echo $agnt_feedback['no_retention4']=='Yes'?"selected":""; ?> value="Yes">Yes</option>
													<option cl4=0 <?php echo $agnt_feedback['no_retention4']=='NA'?"selected":""; ?> value="NA">NA</option>
												</select>
											</td>
											<td>
												<select class="form-control autofCall5" id="cl5af8" name="no_retention5" disabled>
													<option cl5=0 <?php echo $agnt_feedback['no_retention5']=='No'?"selected":""; ?> value="No">No</option>
													<option cl5=0 <?php echo $agnt_feedback['no_retention5']=='Yes'?"selected":""; ?> value="Yes">Yes</option>
													<option cl5=0 <?php echo $agnt_feedback['no_retention5']=='NA'?"selected":""; ?> value="NA">NA</option>
												</select>
											</td>
										</tr>
										<tr style="background-color:#2ECC71; font-weight:bold">
											<td colspan=2>Total Call Scores</td>
											<td id="call1"></td>
											<td id="call2"></td>
											<td id="call3"></td>
											<td id="call4"></td>
											<td id="call5"></td>
											<td id=""></td>
										</tr>
										<tr style="font-weight:bold" oncontextmenu="return false;">
											<td colspan=2>Upload Files</td>
											<td>
												<?php if($agnt_feedback['attach_file1']!=''){
												$attach_file1 = explode(",",$agnt_feedback['attach_file1']);
												 foreach($attach_file1 as $mp1){ ?>
													<audio controls='' style="width:120px; background-color:#607F93">
													  <source src="<?php echo base_url(); ?>qa_files/qa_ameridial/purity_care/pcare_new/<?php echo $mp1; ?>" type="audio/ogg">
													  <source src="<?php echo base_url(); ?>qa_files/qa_ameridial/purity_care/pcare_new/<?php echo $mp1; ?>" type="audio/mpeg">
													</audio> </br>
												<?php }
												}else{
													echo '<b>No Files</b>';
												}
												?>
											</td>
											<td>
												<?php if($agnt_feedback['attach_file2']!=''){
												$attach_file2 = explode(",",$agnt_feedback['attach_file2']);
												 foreach($attach_file2 as $mp2){ ?>
													<audio controls='' style="width:120px; background-color:#607F93">
													  <source src="<?php echo base_url(); ?>qa_files/qa_ameridial/purity_care/pcare_new/<?php echo $mp2; ?>" type="audio/ogg">
													  <source src="<?php echo base_url(); ?>qa_files/qa_ameridial/purity_care/pcare_new/<?php echo $mp2; ?>" type="audio/mpeg">
													</audio> </br>
												<?php }
												}else{
													echo '<b>No Files</b>';
												}
												?>
											</td>
											<td>
												<?php if($agnt_feedback['attach_file3']!=''){
												$attach_file3 = explode(",",$agnt_feedback['attach_file3']);
												 foreach($attach_file3 as $mp3){ ?>
													<audio controls='' style="width:120px; background-color:#607F93">
													  <source src="<?php echo base_url(); ?>qa_files/qa_ameridial/purity_care/pcare_new/<?php echo $mp3; ?>" type="audio/ogg">
													  <source src="<?php echo base_url(); ?>qa_files/qa_ameridial/purity_care/pcare_new/<?php echo $mp3; ?>" type="audio/mpeg">
													</audio> </br>
												<?php }
												}else{
													echo '<b>No Files</b>';
												}
												?>
											</td>
											<td>
												<?php if($agnt_feedback['attach_file4']!=''){
												$attach_file4 = explode(",",$agnt_feedback['attach_file4']);
												 foreach($attach_file4 as $mp4){ ?>
													<audio controls='' style="width:120px; background-color:#607F93">
													  <source src="<?php echo base_url(); ?>qa_files/qa_ameridial/purity_care/pcare_new/<?php echo $mp4; ?>" type="audio/ogg">
													  <source src="<?php echo base_url(); ?>qa_files/qa_ameridial/purity_care/pcare_new/<?php echo $mp4; ?>" type="audio/mpeg">
													</audio> </br>
												<?php }
												}else{
													echo '<b>No Files</b>';
												}
												?>
											</td>
											<td>
												<?php if($agnt_feedback['attach_file5']!=''){
												$attach_file5 = explode(",",$agnt_feedback['attach_file5']);
												 foreach($attach_file5 as $mp5){ ?>
													<audio controls='' style="width:120px; background-color:#607F93">
													  <source src="<?php echo base_url(); ?>qa_files/qa_ameridial/purity_care/pcare_new/<?php echo $mp5; ?>" type="audio/ogg">
													  <source src="<?php echo base_url(); ?>qa_files/qa_ameridial/purity_care/pcare_new/<?php echo $mp5; ?>" type="audio/mpeg">
													</audio> </br>
												<?php }
												}else{
													echo '<b>No Files</b>';
												}
												?>
											</td>
											<td></td>
										</tr>
										<tr>
											<td colspan=3>Call Summary / Feedback #1:</td>
											<td colspan=5><textarea class="form-control" id="" name="" disabled><?php echo $agnt_feedback['call_summary1'] ?></textarea></td>
										</tr>
										<tr>
											<td colspan=3>Call Summary / Feedback #2:</td>
											<td colspan=5><textarea class="form-control" id="" name="" disabled><?php echo $agnt_feedback['call_summary2'] ?></textarea></td>
										</tr>
										<tr>
											<td colspan=3>Call Summary / Feedback #3:</td>
											<td colspan=5><textarea class="form-control" id="" name="" disabled><?php echo $agnt_feedback['call_summary3'] ?></textarea></td>
										</tr>
										<tr>
											<td colspan=3>Call Summary / Feedback #4:</td>
											<td colspan=5><textarea class="form-control" id="" name="" disabled><?php echo $agnt_feedback['call_summary4'] ?></textarea></td>
										</tr>
										<tr>
											<td colspan=3>Call Summary / Feedback #5:</td>
											<td colspan=5><textarea class="form-control" id="" name="" disabled><?php echo $agnt_feedback['call_summary5'] ?></textarea></td>
										</tr>

										<!--<tr>
											<td colspan=2>Feedback:</td>
											<td><textarea class="form-control" id="" name="" disabled><?php //echo $agnt_feedback['feedback1'] ?></textarea></td>
											<td><textarea class="form-control" id="" name="" disabled><?php //echo $agnt_feedback['feedback2'] ?></textarea></td>
											<td><textarea class="form-control" id="" name="" disabled><?php //echo $agnt_feedback['feedback3'] ?></textarea></td>
											<td><textarea class="form-control" id="" name="" disabled><?php //echo $agnt_feedback['feedback4'] ?></textarea></td>
											<td><textarea class="form-control" id="" name="" disabled><?php //echo $agnt_feedback['feedback5'] ?></textarea></td>
											<td></td>
										</tr>-->

									<?php } else if($campaign == 'jfmi'){ ?>

										<tr>
											<td>Overall Score:</td> <td><b><?php echo $agnt_feedback['overall_score'].'%'; ?></b></td>
										</tr>
										<tr>
											<td colspan="3">PARAMETER</td> <td>STATUS</td>
											<td colspan="3">PARAMETER</td> <td>STATUS</td>
										</tr>
										<tr>
											<td colspan=3>Greets the customer promptly and properly</td> <td><b><?php echo $agnt_feedback['greets_customer_promptly'] ?></b></td>
											<td colspan=3>Uses professionalism/courtesy/enthusiasm/proper grammar/no jargon</td> <td><b><?php echo $agnt_feedback['uses_professionalism'] ?></b></td>
										</tr>
										<tr>
											<td colspan=3>Shows gratitude throughout the call</td> <td><b><?php echo $agnt_feedback['shows_gratitude'] ?></b></td>
											<td colspan=3>Collects and verifies all customer information/uses phonetic when applicable</td> <td><b><?php echo $agnt_feedback['collects_and_verifies_customer_information'] ?></b></td>
										</tr>
										<tr>
											<td colspan=3>Follows correct Scripting Path</td> <td><b><?php echo $agnt_feedback['follows_correct_scripting_path'] ?></b></td>
											<td colspan=3>Collects information to provide to Partner Relations if necessary</td> <td><b><?php echo $agnt_feedback['collects_information_to_provide_to_partner_relations'] ?></b></td>
										</tr>
										<tr>
											<td colspan=3>Covers all payment scripting and responses properly</td> <td><b><?php echo $agnt_feedback['covers_all_payment_scripting'] ?></b></td>
											<td colspan=3>Maintains call control</td> <td><b><?php echo $agnt_feedback['maintains_call_control'] ?></b></td>
										</tr>
										<tr>
											<td colspan=3>Keeps dead air to a minimum</td> <td><b><?php echo $agnt_feedback['keeps_dead_air_to_minimum'] ?></b></td>
											<td colspan=3>Uses FAQ's/Agent notes to answer questions properly</td> <td><b><?php echo $agnt_feedback['uses_faq_agent_note'] ?></b></td>
										</tr>
										<tr>
											<td colspan=3>Brands the call with proper close</td> <td><b><?php echo $agnt_feedback['brands_the_call_with_proper_close'] ?></b></td>
											<td colspan=3 style="color:red">Not stopping the recording for credit card capture</td> <td><b><?php echo $agnt_feedback['stop_recording'] ?></b></td>
										</tr>
										<tr>
											<td colspan=3 style="color:red">Agent read legal scripting to the caller</td> <td><b><?php echo $agnt_feedback['read_legal_script'] ?></b></td>
										</tr>
										<tr>
											<td>Call Summary:</td> <td colspan=3><b><?php echo $agnt_feedback['call_summary'] ?></b></td>
											<td>Feedback:</td> <td colspan=3><b><?php echo $agnt_feedback['feedback'] ?></b></td>
										</tr>
										<?php if($agnt_feedback['attach_file']!=''){ ?>
										<tr oncontextmenu="return false;">
											<td colspan=3>Audio Files</td>
											<td colspan=5>
												<?php $attach_file = explode(",",$agnt_feedback['attach_file']);
												 foreach($attach_file as $mp){ ?>
													<audio controls='' style="background-color:#607F93">
													  <source src="<?php echo base_url(); ?>qa_files/qa_ameridial/purity_catalog/<?php echo $mp; ?>" type="audio/ogg">
													  <source src="<?php echo base_url(); ?>qa_files/qa_ameridial/purity_catalog/<?php echo $mp; ?>" type="audio/mpeg">
													</audio> </br>
												 <?php } ?>
											</td>
										</tr>
										<?php } ?>

									<?php }else if($campaign=='tpm'){ ?>

										<tr>
											<td>Overall Score:</td> <td><b><?php echo $agnt_feedback['overall_score'].'%'; ?></b></td>
										</tr>
										<tr>
											<td colspan=2>PARAMETER</td>
											<td colspan=2>SUB PARAMETER</td> <td>STATUS</td>
											<td colspan=2>SUB PARAMETER</td> <td>STATUS</td>
										</tr>
										<tr>
											<td colspan=2>Intro</td>
											<td colspan=2>Read Call Opening as Scripted</td> <td><b><?php echo $agnt_feedback['introcall'] ?></b></td>
										</tr>
										<tr>
											<td rowspan=7 colspan=2>Verification</td>
											<td colspan=2>Are You Calling From the US or Canada</td> <td><b><?php echo $agnt_feedback['verifycall'] ?></b></td>
											<td colspan=2>Verify Form of Payment</td> <td><b><?php echo $agnt_feedback['verifypayment'] ?></b></td>
										</tr>
										<tr>
											<td colspan=2>Communicator Asked for Name</td> <td><b><?php echo $agnt_feedback['verifycommunicator'] ?></b></td>
											<td colspan=2>Communicator Spelled Name</td> <td><b><?php echo $agnt_feedback['verifyspelledname'] ?></b></td>
										</tr>
										<tr>
											<td colspan=2>Communicator Asked for Address</td> <td><b><?php echo $agnt_feedback['verifyaskedaddress'] ?></b></td>
											<td colspan=2>Communicator Spelled Address</td> <td><b><?php echo $agnt_feedback['verifyspelledaddress'] ?></b></td>
										</tr>
										<tr>
											<td colspan=2>Communicator Asked for Phone Number</td> <td><b><?php echo $agnt_feedback['verifyaskedphone'] ?></b></td>
											<td colspan=2>Communicator Verified Phone Number</td> <td><b><?php echo $agnt_feedback['verifycommunicatorphone'] ?></b></td>
										</tr>
										<tr>
											<td colspan=2>Communicator Verified Landline or Cell</td> <td><b><?php echo $agnt_feedback['verifylandline'] ?></b></td>
											<td colspan=2>If Cell, Communicator Read Consent to Call Verbatim</td> <td><b><?php echo $agnt_feedback['verifycallverbatim'] ?></b></td>
										</tr>
										<tr>
											<td colspan=2>If Cell, Communicator Read Consent to Text Verbatim</td> <td><b><?php echo $agnt_feedback['verifytextverbatim'] ?></b></td>
											<td colspan=2>Communicator Asked for Email</td> <td><b><?php echo $agnt_feedback['verifyaskedemail'] ?></b></td>
										</tr>
										<tr>
											<td colspan=2>Communicator Spelled Email</td> <td><b><?php echo $agnt_feedback['verifyspelledemail'] ?></b></td>
										</tr>
										<tr>
											<td rowspan=2 colspan=2>Script Presentation</td>
											<td colspan=2>Overall Script Adherence</td> <td><b><?php echo $agnt_feedback['scriptadherence'] ?></b></td>
											<td colspan=2>Appropriately Presented higher Tier Offers (If applicable)</td> <td><b><?php echo $agnt_feedback['scripthighertier'] ?></b></td>
										</tr>
										<tr>
											<td colspan=2>Navigates Script with Ease</td> <td><b><?php echo $agnt_feedback['scriptnavigate'] ?></b></td>
											<td colspan=2>Displays TPM Knowledge and Answers Questions Appropriately</td> <td><b><?php echo $agnt_feedback['scriptdisplaytpm'] ?></b></td>
										</tr>
										<tr>
											<td rowspan=3 colspan=2>Close</td>
											<td colspan=2>Verified Contents of the Cart</td> <td><b><?php echo $agnt_feedback['closedcontent'] ?></b></td>
											<td colspan=2>Monthly Ask Presented (If Applicable)</td> <td><b><?php echo $agnt_feedback['closedmonthlyask'] ?></b></td>
										</tr>
										<tr>
											<td colspan=2>Reviewed Shipping Time Frame</td> <td><b><?php echo $agnt_feedback['closedshippingtime'] ?></b></td>
											<td colspan=2>Provided Cart Total Including Shipping (If Applicable)</td> <td><b><?php echo $agnt_feedback['closedprovidecart'] ?></b></td>
										</tr>
										<tr>
											<td colspan=2>Read Close As Scripted</td> <td><b><?php echo $agnt_feedback['closedreadscript'] ?></b></td>
										</tr>
										<tr>
											<td colspan=2 rowspan=4>Effective Call Handling</td>
											<td colspan=2>Speaks Clearly and Articulately</td> <td><b><?php echo $agnt_feedback['callhandlespeakclearly'] ?></b></td>
											<td colspan=2>Pleasant Demeanor</td> <td><b><?php echo $agnt_feedback['callhandledemeanor'] ?></b></td>
										</tr>
										<tr>
											<td colspan=2>Professionalism</td> <td><b><?php echo $agnt_feedback['callhandleprofesionalism'] ?></b></td>
											<td colspan=2>Speaks at an appropriate Pace</td> <td><b><?php echo $agnt_feedback['callhandlepace'] ?></b></td>
										</tr>
										<tr>
											<td colspan=2>Listens and Responds Approriately</td> <td><b><?php echo $agnt_feedback['callhandleresponds'] ?></b></td>
											<td colspan=2>Exibits Empathy If Applicable</td> <td><b><?php echo $agnt_feedback['callhandleemphaty'] ?></b></td>
										</tr>
										<tr>
											<td colspan=2>Communicator Shows Sincere Appreciation for Donor and Donations</td> <td><b><?php echo $agnt_feedback['callhandledonor'] ?></b></td>
											<td colspan=2>Maintained control of the conversation/talk time</td> <td><b><?php echo $agnt_feedback['callhandletalktime'] ?></b></td>
										</tr>
										<tr>
											<td colspan=2 rowspan=2>Auto Fail</td>
											<td colspan=2>Blatantly False/Inappropriate Information</td> <td><b><?php echo $agnt_feedback['autofinfo'] ?></b></td>
											<td colspan=2>Rudely Hung up on Donor</td> <td><b><?php echo $agnt_feedback['autofhungup'] ?></b></td>
										</tr>
										<tr>
											<td colspan=2>Rude/Hostile/Uses Profanity</td> <td><b><?php echo $agnt_feedback['autofrude'] ?></b></td>
										</tr>
										<tr>
											<td>Call Summary:</td> <td colspan=3><b><?php echo $agnt_feedback['call_summary'] ?></b></td>
											<td>Feedback:</td> <td colspan=3><b><?php echo $agnt_feedback['feedback'] ?></b></td>
										</tr>
										<?php if($agnt_feedback['attach_file']!=''){ ?>
										<tr oncontextmenu="return false;">
											<td colspan=3>Audio Files</td>
											<td colspan=5>
												<?php $attach_file = explode(",",$agnt_feedback['attach_file']);
												 foreach($attach_file as $mp){ ?>
													<audio controls='' style="background-color:#607F93">
													  <source src="<?php echo base_url(); ?>qa_files/qa_ameridial/tpm/<?php echo $mp; ?>" type="audio/ogg">
													  <source src="<?php echo base_url(); ?>qa_files/qa_ameridial/tpm/<?php echo $mp; ?>" type="audio/mpeg">
													</audio> </br>
												 <?php } ?>
											</td>
										</tr>
										<?php } ?>

									<?php }else if($campaign=='patchology'){ ?>

										<tr>
											<td>Overall Score:</td> <td><b><?php echo $agnt_feedback['overall_score'].'%'; ?></b></td>
										</tr>
										<tr>
											<td colspan=4>Parameter</td>
											<td>Status</td>
											<td colspan=3>Notes (If any)</td>
										</tr>
										<tr>
											<td colspan=4>Call Opening - Did the agent open the call using their name and the appropriate branding for the call?</td>
											<td><b><?php echo $agnt_feedback['agentcallopening'] ?></b></td>
											<td rowspan=2 colspan=3><?php echo $agnt_feedback['remarks1'] ?></td>
										</tr>
										<tr>
											<td colspan=4>Call Opening - Did the agent close the call using the appropriate branding</td>
											<td><b><?php echo $agnt_feedback['agentclosecall'] ?></b></td>
										</tr>
										<tr>
											<td colspan=4>Account Verification - Did the agent verify/confirm all necessary information?</td>
											<td><b><?php echo $agnt_feedback['agentverifyinformation'] ?></b></td>
											<td rowspan=3 colspan=3><?php echo $agnt_feedback['remarks2'] ?></td>
										</tr>
										<tr>
											<td colspan=4>Account Verification - Did agent provide consistent/accurate information regarding products and availability?</td>
											<td><b><?php echo $agnt_feedback['agentprovideinformation'] ?></b></td>
										</tr>
										<tr>
											<td colspan=4>Account Verification - Did agent provide/confirm shipping information/next steps/resolution of issue?</td>
											<td><b><?php echo $agnt_feedback['agenthippinginformation'] ?></b></td>
										</tr>
										<tr>
											<td colspan=4>Customer Experience - Was call answered in a timely manner?</td>
											<td><b><?php echo $agnt_feedback['callanswertimely'] ?></b></td>
											<td rowspan=4 colspan=3><?php echo $agnt_feedback['remarks3'] ?></td>
										</tr>
										<tr>
											<td colspan=4>Customer Experience - Was agent engaged/helpful with customer?</td>
											<td><b><?php echo $agnt_feedback['agentengagedcustomer'] ?></b></td>
										</tr>
										<tr>
											<td colspan=4>Customer Experience - Was customer satisfied/fulfilled?</td>
											<td><b><?php echo $agnt_feedback['customersatisfaction'] ?></b></td>
										</tr>
										<tr>
											<td colspan=4>Customer Experience - If escalated, were all resources explored before sending escalation form?</td>
											<td><b><?php echo $agnt_feedback['escalatedresources'] ?></b></td>
										</tr>
										<tr>
											<td>Call Summary:</td> <td colspan=3><b><?php echo $agnt_feedback['call_summary'] ?></b></td>
											<td>Feedback:</td> <td colspan=3><b><?php echo $agnt_feedback['feedback'] ?></b></td>
										</tr>
										<?php if($agnt_feedback['attach_file']!=''){ ?>
										<tr oncontextmenu="return false;">
											<td colspan=3>Audio Files</td>
											<td colspan=5>
												<?php $attach_file = explode(",",$agnt_feedback['attach_file']);
												 foreach($attach_file as $mp){ ?>
													<audio controls='' style="background-color:#607F93">
													  <source src="<?php echo base_url(); ?>qa_files/qa_ameridial/patchology/<?php echo $mp; ?>" type="audio/ogg">
													  <source src="<?php echo base_url(); ?>qa_files/qa_ameridial/patchology/<?php echo $mp; ?>" type="audio/mpeg">
													</audio> </br>
												 <?php } ?>
											</td>
										</tr>
										<?php } ?>


									<?php }else if($campaign == 'aspca'){?>
										<tr>
											<td>Overall Score:</td> <td><b><?php echo $agnt_feedback['overall_score'].'%'; ?></b></td>
											
											<td> Compliance Overall Percentage:</td><td><?php echo $agnt_feedback['compliance_score_percent'].'%'; ?></td>
											<td>Customer Overall Percentage:</td><td ><?php echo $agnt_feedback['customer_score_percent'].'%'; ?></td>
											<td colspan="">Business Overall Percentage:</td><td ><?php echo $agnt_feedback['business_score_percent'].'%'; ?></td>
									
										</tr>
										<tr>
											<td colspan="3">PARAMETER</td> <td>STATUS</td>
											<td colspan="3">PARAMETER</td> <td>STATUS</td>
										</tr>
										<tr>
											<td colspan=3>Greets the customer promptly and properly</td> <td><b><?php echo $agnt_feedback['Greet_customer'] ?></b></td>
											<td colspan=3>Uses professionalism/courtesy/enthusiasm/proper grammar/no jargon</td> <td><b><?php echo $agnt_feedback['Uses_professionalism'] ?></b></td>
										</tr>
										<tr>
											<td colspan=3>Shows gratitude throughout the call</td> <td><b><?php echo $agnt_feedback['Shows_gratitude'] ?></b></td>
											<td colspan=3>Collects and verifies all customer information/uses phonetic when applicable</td> <td><b><?php echo $agnt_feedback['Collects_verifies'] ?></b></td>
										</tr>
										<tr>
											<td colspan=3>Asks if they are calling to join ASPCA guardians program</td> <td><b><?php echo $agnt_feedback['guardians_program'] ?></b></td>
											<td colspan=3 style="color:red;">Covered monthly guardian/roundup upsell $25</td> <td><b><?php echo $agnt_feedback['monthly_guardian'] ?></b></td>
										</tr>
										<tr>
											<td colspan=3>Covered one time gift scripting (when applicable)</td> <td><b><?php echo $agnt_feedback['gift_scripting'] ?></b></td>
											<td colspan=3>Covered all payment scripting and responses properly</td> <td><b><?php echo $agnt_feedback['payment_scripting'] ?></b></td>
										</tr>
										<tr>
											<td colspan=3>Offers the Animal Champion T-Shirt</td> <td><b><?php echo $agnt_feedback['Animal_champion'] ?></b></td>
											<td colspan=3>Covers donation processing script</td> <td><b><?php echo $agnt_feedback['donation_processing'] ?></b></td>
										</tr>
										<tr>
											<td colspan=3 style="color:red;"><b style="color:red;">***</b>Covers additional one time donation</td> <td><b><?php echo $agnt_feedback['onetime_donation'] ?></b></td>
											<td colspan=3>Covers pet insurance / proper close</td> <td><b><?php echo $agnt_feedback['pet_insurance'] ?></b></td>
										</tr>
										<tr>
											<td colspan=3>Followed correct script path/followed transfer procedures and scripting</td> <td><b><?php echo $agnt_feedback['correct_script'] ?></b></td>
											<td colspan=3>Maintains call control</td> <td><b><?php echo $agnt_feedback['call_control'] ?></b></td>
										</tr>
										<tr>
											<td colspan=3>Uses FAQ's/KB's to answer questions properly</td> <td><b><?php echo $agnt_feedback['min_deadair'] ?></b></td>
											<td colspan=3>Agent correctly disposed the call</td> <td><b><?php echo $agnt_feedback['call_disposed'] ?></b></td>
										</tr>
										<tr>
											<td colspan=3>Covered monthly guardian/roundup upsell $25</td> <td><b><?php echo $agnt_feedback['faq'] ?></b></td>
											<td colspan=3>Personalizes the call</td> <td><b><?php echo $agnt_feedback['personalizes_call'] ?></b></td>
										</tr>
										<tr>
											<td colspan=3 style="color:red;">Rude Remarks</td> <td><b><?php echo $agnt_feedback['rude_remarks'] ?></b></td>
											<td colspan=3 style="color:red;">Call Avoidance</td> <td><b><?php echo $agnt_feedback['call_avoidance'] ?></b></td>
										</tr>
										<tr>
											<td>Call Summary:</td> <td colspan=3><b><?php echo $agnt_feedback['call_summary'] ?></b></td>
											<td>Feedback:</td> <td colspan=3><b><?php echo $agnt_feedback['feedback'] ?></b></td>
										</tr>
										<?php if($agnt_feedback['attach_file']!=''){ ?>
										<tr oncontextmenu="return false;">
											<td colspan=3>Audio Files</td>
											<td colspan=5>
												<?php $attach_file = explode(",",$agnt_feedback['attach_file']);
												 foreach($attach_file as $mp){ ?>
													<audio controls='' style="background-color:#607F93">
													  <source src="<?php echo base_url(); ?>qa_files/qa_ameridial/aspca/<?php echo $mp; ?>" type="audio/ogg">
													  <source src="<?php echo base_url(); ?>qa_files/qa_ameridial/aspca/<?php echo $mp; ?>" type="audio/mpeg">
													</audio> </br>
												 <?php } ?>
											</td>
										</tr>
										<?php } ?>
										<?php }else if($campaign == 'conduent'){?>

										<tr>
										<td>Site:</td><td><?php echo $agnt_feedback['site_location']; ?></td>
										<td>Overall Score:</td> <td><b><?php echo $agnt_feedback['overall_score'].'%'; ?></b></td>
										</tr>
										<tr>
											<td colspan="3">PARAMETER</td> <td>STATUS</td>
											<td colspan="3">PARAMETER</td> <td>STATUS</td>
										</tr>
										<tr>
											<td colspan=3>Clearly gave name and Branded.</td> <td><b><?php echo $agnt_feedback['name_branded'] ?></b></td>
											<td colspan=3>Did CSP demonstrate a good tone of voice throughout the call?</td> <td><b><?php echo $agnt_feedback['throughout'] ?></b></td>
										</tr>
										<tr>
											<td colspan=3>Did CSP properly verify account & make appropriate updates if necessary?</td> <td><b><?php echo $agnt_feedback['necessary'] ?></b></td>
											</tr>
										<tr>
											<td colspan=3>Did CSP deliver assurance statement after purpose?</td> <td><b><?php echo $agnt_feedback['purpose'] ?></b></td>
											<td colspan=3>Did CSP refer to customer by last name at least once through the call?</td> <td><b><?php echo $agnt_feedback['csp_customer'] ?></b></td>
										</tr>
										<tr>
											<!-- <td colspan=3>Did agent accurately and clearly fill out pulse on Monday.com?</td> <td><b><?php echo $agnt_feedback['agent_accurately_clearly'] ?></b></td> -->
											<td colspan=3>Did CSP maintain control of call?</td> <td><b><?php echo $agnt_feedback['csp_maintain'] ?></b></td>
											<td colspan=3>Did CSP follow appropriate Hold/Wait process & avoid DEAD AIR?</td> <td><b><?php echo $agnt_feedback['avoid_dead_air'] ?></b></td>
										</tr>
										<tr>
											<td colspan=3>Did CSP use soft skills?</td> <td><b><?php echo $agnt_feedback['soft_skills'] ?></b></td>
											<td colspan=3>Did CSP demonstrate active listening skills?</td> <td><b><?php echo $agnt_feedback['listening_skills'] ?></b></td>
										</tr>

										<tr>
											<td colspan=3>Proper use of probing questions?</td> <td><b><?php echo $agnt_feedback['questions'] ?></b></td>
											<td colspan=3>Did CSP use all available systems and tools towards a One Call Resolution?</td> <td><b><?php echo $agnt_feedback['resolution'] ?></b></td>
										</tr>
										<tr>
											<td colspan=3>Did CSP provide complete and accurate information?</td> <td><b><?php echo $agnt_feedback['information'] ?></b></td>
											<td colspan=3>Did CSP meet documentation expectations?</td> <td><b><?php echo $agnt_feedback['expectations'] ?></b></td>
										</tr>
										<tr>
											<td colspan=3>Did CSP select the correct disposition?</td> <td><b><?php echo $agnt_feedback['disposition'] ?></b></td>
											<td colspan=3>Did the CSP close the call properly?</td> <td><b><?php echo $agnt_feedback['properly'] ?></b></td>
										</tr>
										<tr>
											<td colspan=3 style="color: red;">CSP released account information or made changes to an unverified Cardholder</td> <td><b><?php echo $agnt_feedback['cardholder'] ?></b></td>
											<td colspan=3 style="color: red;">CSP did not resolve the Customer’s issue and did not demonstrate willingness to assist</td> <td><b><?php echo $agnt_feedback['assist'] ?></b></td>
										</tr>
										<tr>
											<td colspan=3 style="color: red;">CSP hang up on customer</td> <td><b><?php echo $agnt_feedback['customer'] ?></b></td>
											<td colspan=3 style="color: red;">CSP gives blatant incorrect information to Cardholder.</td> <td><b><?php echo $agnt_feedback['incorrect_information'] ?></b></td>
										</tr>
										<tr>
											<td colspan=3 style="color: red;">CSP used inappropriate condescending /argumentative language or tone during the call.</td> <td><b><?php echo $agnt_feedback['condescending'] ?></b></td>
											<td colspan=3 style="color: red;">CSP did not successfully complete transaction/process.</td> <td><b><?php echo $agnt_feedback['transaction'] ?></b></td>
										</tr>
										<tr>
											<td colspan=3 style="color: red;">CSP did not leave any memos on accessed account.</td> <td><b><?php echo $agnt_feedback['account'] ?></b></td>
											<td colspan=3 style="color: red;">Call Avoidance</td> <td><b><?php echo $agnt_feedback['avoidance'] ?></b></td>
										</tr>
										<tr>
											<td>Call Summary:</td> <td colspan=3><b><?php echo $agnt_feedback['call_summary'] ?></b></td>
											<td>Feedback:</td> <td colspan=3><b><?php echo $agnt_feedback['feedback'] ?></b></td>
										</tr>
										<?php if($agnt_feedback['attach_file']!=''){ ?>
										<tr oncontextmenu="return false;">
											<td colspan=3>Audio Files</td>
											<td colspan=5>
												<?php $attach_file = explode(",",$agnt_feedback['attach_file']);
												foreach($attach_file as $mp){ ?>
													<audio controls='' style="background-color:#607F93">
													<source src="<?php echo base_url(); ?>qa_files/qa_ameridial/conduent/<?php echo $mp; ?>" type="audio/ogg">
													<source src="<?php echo base_url(); ?>qa_files/qa_ameridial/conduent/<?php echo $mp; ?>" type="audio/mpeg">
													</audio> </br>
												<?php } ?>
											</td>
										</tr>
										<?php } ?>
									<?php }else if($campaign == 'ffai'){?>

										<tr>
											<td>Overall Score:</td> <td><b><?php echo $agnt_feedback['overall_score'].'%'; ?></b></td>
											<td>Compliance Score:</td><td ><input type="text" readonly class="form-control" id="complJiCisScore" name="data[compliance_score_percent]"></td>
											<td>Customer Score:</td><td ><input type="text" readonly class="form-control" id="custJiCisScore" name="data[customer_score_percent]"></td>
											<td>Business Score:</td><td ><input type="text" readonly class="form-control" id="busiJiCisScore" name="data[business_score_percent]"></td>
										</tr>
										<tr>
											<td colspan="3">PARAMETER</td> <td>STATUS</td>
											<td colspan="3">PARAMETER</td> <td>STATUS</td>
										</tr>
										<tr>
											<td colspan=3>Did the agent open the call using their name and the appropriate branding for the call?</td> <td><b><?php echo $agnt_feedback['open_call_appropriate_branding'] ?></b></td>
											<td colspan=3>Did the agent close the call using the appropriate branding?</td> <td><b><?php echo $agnt_feedback['close_call_appropriate_branding'] ?></b></td>
										</tr>
										<tr>
											<td colspan=3>Did the agent verify/confirm all necessary information and spell back email address using NATO?</td> <td><b><?php echo $agnt_feedback['address_using_nato'] ?></b></td>
											</tr>
										<tr>
											<td colspan=3>Did agent provide consistent/accurate information regarding products and availability?</td> <td><b><?php echo $agnt_feedback['products_availability'] ?></b></td>
											<td colspan=3>Did agent provide confirm shipping information/next steps/resolution of issue to ensure one call resolution?</td> <td><b><?php echo $agnt_feedback['one_call_resolution'] ?></b></td>
										</tr>
										<tr>
											<!-- <td colspan=3>Did agent accurately and clearly fill out pulse on Monday.com?</td> <td><b><?php echo $agnt_feedback['agent_accurately_clearly'] ?></b></td> -->
											<td colspan=3>Was agent engaged/empathetic with customer?</td> <td><b><?php echo $agnt_feedback['agent_engaged_customer'] ?></b></td>
											<td colspan=3>Did agent offer membership in the Home Filter Club (if applicable)?</td> <td><b><?php echo $agnt_feedback['membership'] ?></b></td>
										</tr>
										<tr>
											<td colspan=3>Did agent offer donation to Wine to Water?</td> <td><b><?php echo $agnt_feedback['offer_donation'] ?></b></td>
											<td colspan=3>Was customer satisfied/fulfilled?</td> <td><b><?php echo $agnt_feedback['was_cust_sat_fulfilled'] ?></b></td>
										</tr>
									
										<tr>
											<td colspan=3>Did agent offer the survey?</td> <td><b><?php echo $agnt_feedback['did_agent_offer_survey'] ?></b></td>
											<td colspan=3>Use stop recording button?</td> <td><b><?php echo $agnt_feedback['use_stop_recording_button'] ?></b></td>
										</tr>
										<tr>
											<td colspan=3>Rude Remarks</td> <td><b><?php echo $agnt_feedback['rude_remarks'] ?></b></td>
											<td colspan=3>Call Avoidance / Dumping</td> <td><b><?php echo $agnt_feedback['call_avoidance'] ?></b></td>
										</tr>
										<tr>
											<td>Call Summary:</td> <td colspan=3><b><?php echo $agnt_feedback['call_summary'] ?></b></td>
											<td>Feedback:</td> <td colspan=3><b><?php echo $agnt_feedback['feedback'] ?></b></td>
										</tr>
										<?php if($agnt_feedback['attach_file']!=''){ ?>
										<tr oncontextmenu="return false;">
											<td colspan=3>Audio Files</td>
											<td colspan=5>
												<?php $attach_file = explode(",",$agnt_feedback['attach_file']);
												 foreach($attach_file as $mp){ ?>
													<audio controls='' style="background-color:#607F93">
													  <source src="<?php echo base_url(); ?>qa_files/qa_ameridial/ffai/<?php echo $mp; ?>" type="audio/ogg">
													  <source src="<?php echo base_url(); ?>qa_files/qa_ameridial/ffai/<?php echo $mp; ?>" type="audio/mpeg">
													</audio> </br>
												 <?php } ?>
											</td>
										</tr>
										<?php } ?>

									<?php }else if($campaign == 'lifi'){?>

										<tr>
											<td>Overall Score:</td> <td><b><?php echo $agnt_feedback['overall_score'].'%'; ?></b></td>
										</tr>
										<tr>
											<td colspan="3">PARAMETER</td> <td>STATUS</td>
											<td colspan="3">PARAMETER</td> <td>STATUS</td>
										</tr>
										<tr>
											<td colspan=3>Life Quotes Greeting & Introduction</td> <td><b><?php echo $agnt_feedback['life_quotes_greeting'] ?></b></td>
											<td colspan=3>Did the agent give positive response to the caller</td> <td><b><?php echo $agnt_feedback['agent_positive_response'] ?></b></td>
										</tr>
										<tr>
											<td colspan=3>Customer Name Capture</td> <td><b><?php echo $agnt_feedback['customer_name_capture'] ?></b></td>
											<td colspan=3>Did the agent capture the address of the customer</td> <td><b><?php echo $agnt_feedback['capture_address'] ?></b></td>
										</tr>
										<tr>
											<td colspan=3>Phone Number confirmation</td> <td><b><?php echo $agnt_feedback['phone_number_confirmation'] ?></b></td>
											<td colspan=3>Email address</td> <td><b><?php echo $agnt_feedback['email_Address'] ?></b></td>
										</tr>
										<tr>
											<td colspan=3>Customer's DOB</td> <td><b><?php echo $agnt_feedback['customer_dob'] ?></b></td>
											<td colspan=3>Overall Script Adherence</td> <td><b><?php echo $agnt_feedback['script_adherence'] ?></b></td>
										</tr>
										<tr>
											<td colspan=3>Did the agent ask for coverage amount of the Insurance</td> <td><b><?php echo $agnt_feedback['coverage_amount_insurance'] ?></b></td>
											<td colspan=3>Confirmation of Tobacco or smoking</td> <td><b><?php echo $agnt_feedback['tobacco_smoking'] ?></b></td>
										</tr>
										<tr>
											<td colspan=3>Did the agent ask for Height & Weight of the customer</td> <td><b><?php echo $agnt_feedback['height_weight_customer'] ?></b></td>
											<td colspan=3>Did the agent mention about price comparison report</td> <td><b><?php echo $agnt_feedback['overall_confidence_level'] ?></b></td>
										</tr>
										<tr>
											<td colspan=3>Overall confidence level, professionalism & tone</td> <td><b><?php echo $agnt_feedback['call_closing'] ?></b></td>
										</tr>

										<tr>
											<td>Call Summary:</td> <td colspan=3><b><?php echo $agnt_feedback['call_summary'] ?></b></td>
											<td>Feedback:</td> <td colspan=3><b><?php echo $agnt_feedback['feedback'] ?></b></td>
										</tr>
										<?php if($agnt_feedback['attach_file']!=''){ ?>
										<tr oncontextmenu="return false;">
											<td colspan=3>Audio Files</td>
											<td colspan=5>
												<?php $attach_file = explode(",",$agnt_feedback['attach_file']);
												 foreach($attach_file as $mp){ ?>
													<audio controls='' style="background-color:#607F93">
													  <source src="<?php echo base_url(); ?>qa_files/qa_ameridial/lifi/<?php echo $mp; ?>" type="audio/ogg">
													  <source src="<?php echo base_url(); ?>qa_files/qa_ameridial/lifi/<?php echo $mp; ?>" type="audio/mpeg">
													</audio> </br>
												 <?php } ?>
											</td>
										</tr>
										<?php } ?>

									<?php }else if($campaign=='heatsurge'){ ?>

										<tr>
											<td>Overall Score:</td> <td><b><?php echo $agnt_feedback['overall_score'].'%'; ?></b></td>
										</tr>
										<tr>
											<td colspan=2>PARAMETER</td>
											<td colspan=2>SUB PARAMETER</td> <td>STATUS</td>
											<td colspan=2>SUB PARAMETER</td> <td>STATUS</td>
										</tr>
										<tr>
											<td colspan=2 rowspan=3>Introduction</td>
											<td colspan=2>Was the agent Prepared for call\answer within 5 seconds</td> <td><b><?php echo $agnt_feedback['callprepared5sec'] ?></b></td>
											<td colspan=2>Did the agent use inbound\outbound greeting-- identify self and company</td> <td><b><?php echo $agnt_feedback['useibobgreeting'] ?></b></td>
										</tr>
										<tr>
											<td colspan=2>Accesses customers accounts (or any reports needed )</td> <td><b><?php echo $agnt_feedback['accesscustomeraccount'] ?></b></td>
											<td colspan=2>Agent verifies cst name, address, phone and TPA if needed</td> <td><b><?php echo $agnt_feedback['vreifynameaddress'] ?></b></td>
										</tr>
										<tr>
											<td colspan=2>Verifies or Asks for email address, spelling and gave email disclaimer</td> <td><b><?php echo $agnt_feedback['askforemail'] ?></b></td>
											<td colspan=2>Reads mini-Miranda and or Recording statement on outbound calls</td> <td><b><?php echo $agnt_feedback['readminiMiranda'] ?></b></td>
										</tr>
										<tr>
											<td colspan=2 rowspan=5>Product Knowledge\Problem Solving</td>
											<td colspan=2>Gives accurate pricing \refund \return information</td> <td><b><?php echo $agnt_feedback['giveaccuratepricing'] ?></b></td>
											<td colspan=2>Gives accurate shipping \ delivery information</td> <td><b><?php echo $agnt_feedback['giveaccurateshiping'] ?></b></td>
										</tr>
										<tr>
											<td colspan=2>Accurately describes product \ promo\ answers questions</td> <td><b><?php echo $agnt_feedback['accuratedescribeproduct'] ?></b></td>
											<td colspan=2>Asks for Upsell\add on product where appropriate</td> <td><b><?php echo $agnt_feedback['askforupsellproduct'] ?></b></td>
										</tr>
										<tr>
											<td colspan=2>Provides appropriate solution \ alternatives</td> <td><b><?php echo $agnt_feedback['provideappropiatesolution'] ?></b></td>
											<td colspan=2>Keyed \ coded order correctly and corrected info as needed</td> <td><b><?php echo $agnt_feedback['codedordercorrectly'] ?></b></td>
										</tr>
										<tr>
											<td colspan=2>Asks for cancelation reason</td> <td><b><?php echo $agnt_feedback['askforcancelarion'] ?></b></td>
											<td colspan=2>1st save attempt did agent use PK- key buying factors</td> <td><b><?php echo $agnt_feedback['usePKkeybuying'] ?></b></td>
										</tr>
										<tr>
											<td colspan=2>2nd save attempt used appropriately and per guidelines</td> <td><b><?php echo $agnt_feedback['useappropiateguideline'] ?></b></td>
										</tr>
										<tr>
											<td colspan=2 rowspan=3>Customer update\Payment info</td>
											<td colspan=2>Asks for billing Name as it appears on cc or check</td> <td><b><?php echo $agnt_feedback['askforbillingname'] ?></b></td>
											<td colspan=2>If billing name is different than caller-- </br> agent verified caller is an authorized user of the cc or check</td> <td><b><?php echo $agnt_feedback['authorizeuserofcheck'] ?></b></td>
										</tr>
										<tr>
											<td colspan=2>Asks for billing address for payment method used</td> <td><b><?php echo $agnt_feedback['billingaddressforpayment'] ?></b></td>
											<td colspan=2>Asks for permission to authorize payment ( cc or check)</td> <td><b><?php echo $agnt_feedback['permissiontoauthorizepayment'] ?></b></td>
										</tr>
										<tr>
											<td colspan=2>Agent verifies shipping address</td> <td><b><?php echo $agnt_feedback['vrifyshippingaddress'] ?></b></td>
										</tr>
										<tr>
											<td colspan=2 rowspan=2>CS Close</td>
											<td colspan=2>Notates account with issue\resolution, </br> adds follow up or report work as needed</td> <td><b><?php echo $agnt_feedback['accountwithissue'] ?></b></td>
											<td colspan=2>Summarizes and reviews call\appropriate closure to call</td> <td><b><?php echo $agnt_feedback['summarizesreviewcall'] ?></b></td>
										</tr>
										<tr>
											<td colspan=2>(Declines) Gave CS hours of operation and CS phone number</td> <td><b><?php echo $agnt_feedback['gaveCSphonenumber'] ?></b></td>
										</tr>
										<tr>
											<td colspan=2 rowspan=2>Professionalism|Presentation</td>
											<td colspan=2>Was the agent polite, courteous and patient</td> <td><b><?php echo $agnt_feedback['wasagentpolite'] ?></b></td>
											<td colspan=2>Agent refrained from using inappropriate comments\presentation</td> <td><b><?php echo $agnt_feedback['usinginappropiatecomment'] ?></b></td>
										</tr>
										<tr>
											<td colspan=2>Uses hold and transfers properly</td> <td><b><?php echo $agnt_feedback['usesholdtrasferproperly'] ?></b></td>
										</tr>
										<tr>
											<td colspan=4 style="color:red">Automatic Zero</td> <td><b><?php echo $agnt_feedback['automaticzero'] ?></b></td>
										</tr>
										<tr>
											<td>Call Summary:</td> <td colspan=3><b><?php echo $agnt_feedback['call_summary'] ?></b></td>
											<td>Feedback:</td> <td colspan=3><b><?php echo $agnt_feedback['feedback'] ?></b></td>
										</tr>
										<?php if($agnt_feedback['attach_file']!=''){ ?>
										<tr oncontextmenu="return false;">
											<td colspan=3>Audio Files</td>
											<td colspan=5>
												<?php $attach_file = explode(",",$agnt_feedback['attach_file']);
												 foreach($attach_file as $mp){ ?>
													<audio controls='' style="background-color:#607F93">
													  <source src="<?php echo base_url(); ?>qa_files/qa_ameridial/heatsurge/<?php echo $mp; ?>" type="audio/ogg">
													  <source src="<?php echo base_url(); ?>qa_files/qa_ameridial/heatsurge/<?php echo $mp; ?>" type="audio/mpeg">
													</audio> </br>
												 <?php } ?>
											</td>
										</tr>
										<?php } ?>

									<?php }else if($campaign=='stauers_sales'){ ?>

										<tr>
											<td>Overall Score:</td> <td><b><?php echo $agnt_feedback['overall_score'].'%'; ?></b></td>
										</tr>
										<tr>
											<td colspan="3">PARAMETER</td> <td>STATUS</td>
											<td colspan="3">PARAMETER</td> <td>STATUS</td>
										</tr>
										<tr>
											<td colspan=3>Was the call answered within 5 seconds?</td> <td><b><?php echo $agnt_feedback['call_answered_5_seconds'] ?></b></td>
											<td colspan=3>Did the agent verify the customer's name and address on the account?</td> <td><b><?php echo $agnt_feedback['agent_verify_customer_name_address'] ?></b></td>
										</tr>
										<tr>
											<td colspan=3>Did the agent capture the correct offer code?</td> <td><b><?php echo $agnt_feedback['agent_capture_correct_offer'] ?></b></td>
											<td colspan=3>Did the agent verify the phone number with the customer?</td> <td><b><?php echo $agnt_feedback['agent_verify_phone_number'] ?></b></td>
										</tr>
										<tr>
											<td colspan=3>Did the agent verify the customer's email address?</td> <td><b><?php echo $agnt_feedback['agent_verify_customer_email'] ?></b></td>
											<td colspan=3>Did the agent compliment the caller's purchase choice?</td> <td><b><?php echo $agnt_feedback['agent_compliment_caller_purchase'] ?></b></td>
										</tr>
										<tr>
											<td colspan=3>Did the agent recap the item and ask if the customer would be interested in any other product(s)?</td> <td><b><?php echo $agnt_feedback['agent_recap_item'] ?></b></td>
											<td colspan=3>Did the agent cover at least one upsell?</td> <td><b><?php echo $agnt_feedback['agent_cover_one_upsell'] ?></b></td>
										</tr>
										<tr>
											<td colspan=3>Did the agent cover the replacement guarantee pitch?</td> <td><b><?php echo $agnt_feedback['agent_cover_replacement'] ?></b></td>
											<td colspan=3>Did the agent use an appropriate rebuttal if the replacement guarantee was declined?</td> <td><b><?php echo $agnt_feedback['agent_appropriate_rebuttal'] ?></b></td>
										</tr>
										<tr>
											<td colspan=3>Did the agent cover the membership pitch?</td> <td><b><?php echo $agnt_feedback['agent_cover_membership'] ?></b></td>
											<td colspan=3>Did the agent use an appropriate rebuttal if the membership pitch was declined?</td> <td><b><?php echo $agnt_feedback['agent_appropriate_rebuttal_declined'] ?></b></td>
										</tr>
										<tr>
											<td colspan=3>Did the agent offer the membership accurately?</td> <td><b><?php echo $agnt_feedback['agent_offer_membership'] ?></b></td>
											<td colspan=3>Did the agent cover the auto-renew offer correctly?</td> <td><b><?php echo $agnt_feedback['agent_cover_autorenew'] ?></b></td>
										</tr>
										<tr>
											<td colspan=3>Was the shipping address verified?</td> <td><b><?php echo $agnt_feedback['shipping_address_verified'] ?></b></td>
											<td colspan=3>Did the agent quote the correct delivery time?</td> <td><b><?php echo $agnt_feedback['quote_correct_delivery_time'] ?></b></td>
										</tr>
										<tr>
											<td colspan=3>Did the agent give a total product quote appropriately?</td> <td><b><?php echo $agnt_feedback['agent_total_product_appropriately'] ?></b></td>
											<td colspan=3>Did the agent quote shipping & taxes correctly?</td> <td><b><?php echo $agnt_feedback['agent_quote_shipping_taxes'] ?></b></td>
										</tr>
										<tr>
											<td colspan=3>Did the agent give the total to be charged and verify the credit card to be charged correctly?</td> <td><b><?php echo $agnt_feedback['agent_give_total_charged'] ?></b></td>
											<td colspan=3>Did the agent provide the order number correctly?</td> <td><b><?php echo $agnt_feedback['agent_provide_order_number'] ?></b></td>
										</tr>
										<tr>
											<td colspan=3>Did the agent close the call with the brand correctly?</td> <td><b><?php echo $agnt_feedback['agent_close_call_brand_correctly'] ?></b></td>
											<td colspan=3>Was the customer satisfied with his/her experience?</td> <td><b><?php echo $agnt_feedback['customer_satisfied_experience'] ?></b></td>
										</tr>
										<tr>
											<td colspan=3>Was the customer dissatisfied with the agent's professionalism and/or tone?</td> <td><b><?php echo $agnt_feedback['customer_dissatisfied_professionalism'] ?></b></td>
										</tr>

										<tr>
											<td>Call Summary:</td> <td colspan=3><b><?php echo $agnt_feedback['call_summary'] ?></b></td>
											<td>Feedback:</td> <td colspan=3><b><?php echo $agnt_feedback['feedback'] ?></b></td>
										</tr>
										<?php if($agnt_feedback['attach_file']!=''){ ?>
										<tr oncontextmenu="return false;">
											<td colspan=3>Audio Files</td>
											<td colspan=5>
												<?php $attach_file = explode(",",$agnt_feedback['attach_file']);
												 foreach($attach_file as $mp){ ?>
													<audio controls='' style="background-color:#607F93">
													  <source src="<?php echo base_url(); ?>qa_files/qa_ameridial/stauers_sales/<?php echo $mp; ?>" type="audio/ogg">
													  <source src="<?php echo base_url(); ?>qa_files/qa_ameridial/stauers_sales/<?php echo $mp; ?>" type="audio/mpeg">
													</audio> </br>
												 <?php } ?>
											</td>
										</tr>
										<?php } ?>

									<?php }else if($campaign=='operation_smile'){ ?>

										<tr>
											<td>Overall Score:</td> <td><b><?php echo $agnt_feedback['overall_score'].'%'; ?></b></td>
										</tr>
										<tr>
											<td colspan="3">PARAMETER</td> <td>STATUS</td>
											<td colspan="3">PARAMETER</td> <td>STATUS</td>
										</tr>
										<tr>
											<td colspan=3>Was the agent ready to handle the call promptly and answer properly?</td> <td><b><?php echo $agnt_feedback['agentreadytohandle'] ?></b></td>
											<td colspan=3>Did the agent greet the caller read the scripted opening?</td> <td><b><?php echo $agnt_feedback['agentgreetthecaller'] ?></b></td>
										</tr>
										<tr>
											<td colspan=3>Did the agent confirm all information and utilize phonetic spell back when necessary?</td> <td><b><?php echo $agnt_feedback['agentconfirminfo'] ?></b></td>
											<td colspan=3>Does the agent show gratitude and acknowledge callers concerns?</td> <td><b><?php echo $agnt_feedback['agentshowgraduate'] ?></b></td>
										</tr>
										<tr>
											<td colspan=3>Did the agent use rebuttals appropriately?</td> <td><b><?php echo $agnt_feedback['agentuserebuttals'] ?></b></td>
											<td colspan=3>Did the agent offer the upsell?</td> <td><b><?php echo $agnt_feedback['agentofferupsell'] ?></b></td>
										</tr>
										<tr>
											<td colspan=3>Did the agent follow the script correctly and with confidence?</td> <td><b><?php echo $agnt_feedback['agentfollowscript'] ?></b></td>
											<td colspan=3>Did the agent address questions about the program and utilize the FAQ's correctly?</td> <td><b><?php echo $agnt_feedback['agentaddressquestion'] ?></b></td>
										</tr>
										<tr>
											<td colspan=3>Did the agent speak with energy and enthusiasm?</td> <td><b><?php echo $agnt_feedback['agentspeakenergy'] ?></b></td>
											<td colspan=3>Did the agent use proper pacing?</td> <td><b><?php echo $agnt_feedback['agentuseproperpacing'] ?></b></td>
										</tr>
										<tr>
											<td colspan=3>Did the agent maintain control of the conversation and minimize dead air?</td> <td><b><?php echo $agnt_feedback['agentmaintaincontrol'] ?></b></td>
											<td colspan=3>Was the agent professional and speak with proper enunciation, grammar and tone?</td> <td><b><?php echo $agnt_feedback['agentprofessionalspeak'] ?></b></td>
										</tr>
										<tr>
											<td colspan=3>Did the agent use good listening skills and does not interrupt?</td> <td><b><?php echo $agnt_feedback['agentgoodlistening'] ?></b></td>
											<td colspan=3>Did the agent empathize with the caller?</td> <td><b><?php echo $agnt_feedback['agentempathize'] ?></b></td>
										</tr>
										<tr>
											<td colspan=3>Did the agent provide a good donor experience and show appropriate appreciation?</td> <td><b><?php echo $agnt_feedback['agentprovidedonor'] ?></b></td>
											<td colspan=3>Did the agent ask what prompted them to call today?</td> <td><b><?php echo $agnt_feedback['agnetaskprompted'] ?></b></td>
										</tr>
										<tr>
											<td colspan=3>Did the agent thank the caller for their call today and close appropriately?</td> <td><b><?php echo $agnt_feedback['agentthankcaller'] ?></b></td>
											<td colspan=3 style="color:red">***Did the agent give false or inappropriate information?</td> <td><b><?php echo $agnt_feedback['agentgaveinformation'] ?></b></td>
										</tr>
										<tr>
											<td colspan=3 style="color:red">***Did the agent hang up inappropriately?</td> <td><b><?php echo $agnt_feedback['agenthangup'] ?></b></td>
											<td colspan=3 style="color:red">***Did the agent use inappropriate language?</td> <td><b><?php echo $agnt_feedback['agentlaguage'] ?></b></td>
										</tr>
										<tr>
											<td>Call Summary:</td> <td colspan=3><b><?php echo $agnt_feedback['call_summary'] ?></b></td>
											<td>Feedback:</td> <td colspan=3><b><?php echo $agnt_feedback['feedback'] ?></b></td>
										</tr>
										<?php if($agnt_feedback['attach_file']!=''){ ?>
										<tr oncontextmenu="return false;">
											<td colspan=3>Audio Files</td>
											<td colspan=5>
												<?php $attach_file = explode(",",$agnt_feedback['attach_file']);
												 foreach($attach_file as $mp){ ?>
													<audio controls='' style="background-color:#607F93">
													  <source src="<?php echo base_url(); ?>qa_files/qa_ameridial/operation_smile/<?php echo $mp; ?>" type="audio/ogg">
													  <source src="<?php echo base_url(); ?>qa_files/qa_ameridial/operation_smile/<?php echo $mp; ?>" type="audio/mpeg">
													</audio> </br>
												 <?php } ?>
											</td>
										</tr>
										<?php } ?>

									<?php }else if($campaign=='5_11_tactical'){ ?>

										<tr>
										<td>Overall Score:</td> <td><b><?php echo $agnt_feedback['overall_score'].'%'; ?></b></td>
										<td>Compliance Score:</td><td ><input type="text" readonly class="form-control" id="complJiCisScore" name="data[compliance_score_percent]"></td>
										<td>Customer Score:</td><td ><input type="text" readonly class="form-control" id="custJiCisScore" name="data[customer_score_percent]"></td>
										<td>Business Score:</td><td ><input type="text" readonly class="form-control" id="busiJiCisScore" name="data[business_score_percent]"></td>
									</tr>
										<tr>
											<td colspan="3">PARAMETER</td> <td>STATUS</td>
											<td colspan="3">PARAMETER</td> <td>STATUS</td>
										</tr>
										<tr>
											<td colspan=3>Did the rep greet the customer promptly and properly?</td> <td><b><?php echo $agnt_feedback['greetthecustomer'] ?></b></td>
											<td colspan=3>Did the rep confirm the customer's item to order (product, size, colour, price)</td> <td><b><?php echo $agnt_feedback['customeritemtoorder'] ?></b></td>
										</tr>
										<tr>
											<td colspan=3>Did the rep ask "is there anything else you would like to add to your order"?</td> <td><b><?php echo $agnt_feedback['wouldaddyourorder'] ?></b></td>
											<td colspan=3>Did the rep ask for customer login information or continue as guest appropriately</td> <td><b><?php echo $agnt_feedback['customerlogininformation'] ?></b></td>
										</tr>
										<tr>
											<td colspan=3>Did the rep gather/verify the callers information for accuracy</td> <td><b><?php echo $agnt_feedback['callerinformationaccuracy'] ?></b></td>
											<td colspan=3>Did the rep cover the final confirmation (each product, total cost to be charged?)</td> <td><b><?php echo $agnt_feedback['coverfinalconfirmation'] ?></b></td>
										</tr>
										<tr>
											<td colspan=3>Did the rep give customer their order number?</td> <td><b><?php echo $agnt_feedback['givecustomerordernumber'] ?></b></td>
											<td colspan=3>Did the rep use all applicable search method?</td> <td><b><?php echo $agnt_feedback['userapplicablesearch'] ?></b></td>
										</tr>
										<tr>
											<td colspan=3>Did the rep cover the returns process appropriately?</td> <td><b><?php echo $agnt_feedback['coverreturnprocess'] ?></b></td>
											<td colspan=3>Did the rep cover the exchange process appropriately?</td> <td><b><?php echo $agnt_feedback['coverexchangeprocess'] ?></b></td>
										</tr>
										<tr>
											<td colspan=3>Did the rep cover the refund process appropriately?</td> <td><b><?php echo $agnt_feedback['coverrefundprocess'] ?></b></td>
											<td colspan=3>Did the rep track the package appropriately</td> <td><b><?php echo $agnt_feedback['trackthepackage'] ?></b></td>
										</tr>
										<tr>
											<td colspan=3>Did the agent ask "is there anything else I can assist you with today?"</td> <td><b><?php echo $agnt_feedback['agentaskforassist'] ?></b></td>
											<td colspan=3>Did the agent close and brand the call appropriately?</td> <td><b><?php echo $agnt_feedback['agentbrandthecall'] ?></b></td>
										</tr>
										<tr>
											<td colspan=3>Did the rep answer questions appropriately</td> <td><b><?php echo $agnt_feedback['answerquestions'] ?></b></td>
											<td colspan=3>Did the rep maintain call control?</td> <td><b><?php echo $agnt_feedback['maintaincallcontrol'] ?></b></td>
										</tr>
										<tr>
											<td colspan=3>Did the rep properly notate AX?</td> <td><b><?php echo $agnt_feedback['properlynotateAX'] ?></b></td>
											<!-- <td colspan=3>If an escalation was done, was it warranted?</td> <td><b><?php //echo $agnt_feedback['escalationwaranted'] ?></b></td> -->
											<td colspan=3>Did the agent disposition the call appropriately ?</td> <td><b><?php echo $agnt_feedback['agentdispositioncall'] ?></b></td>
										</tr>
										<tr>
											<td colspan=3>Did the rep maintain professionalism throughout the call?</td> <td><b><?php echo $agnt_feedback['maintainprofessionalism'] ?></b></td>
											<td colspan=3>If an escalation was done, was it warranted?</td> <td><b><?php echo $agnt_feedback['warranted'] ?></b></td>
										</tr>
										<tr>
											<td colspan=3>Call dumping / avoidance</td> <td><b><?php echo $agnt_feedback['avoidance'] ?></b></td>
											<td colspan=3>Rudeness / inappropriate language / behavior</td> <td><b><?php echo $agnt_feedback['behavior'] ?></b></td>
										</tr>
										<tr>
											<td>Call Summary:</td> <td colspan=3><b><?php echo $agnt_feedback['call_summary'] ?></b></td>
											<td>Feedback:</td> <td colspan=3><b><?php echo $agnt_feedback['feedback'] ?></b></td>
										</tr>
										<?php if($agnt_feedback['attach_file']!=''){ ?>
										<tr oncontextmenu="return false;">
											<td colspan=3>Audio Files</td>
											<td colspan=5>
												<?php $attach_file = explode(",",$agnt_feedback['attach_file']);
												 foreach($attach_file as $mp){ ?>
													<audio controls='' style="background-color:#607F93">
													  <source src="<?php echo base_url(); ?>qa_files/qa_ameridial/tactical_5_11/<?php echo $mp; ?>" type="audio/ogg">
													  <source src="<?php echo base_url(); ?>qa_files/qa_ameridial/tactical_5_11/<?php echo $mp; ?>" type="audio/mpeg">
													</audio> </br>
												 <?php } ?>
											</td>
										</tr>
										<?php } ?>

									<?php }else if($campaign=='jmmi'){ ?>

										<tr>
											<td>Overall Score:</td> <td><b><?php echo $agnt_feedback['overall_score'].'%'; ?></b></td>
										</tr>
										<tr>
											<td colspan="3">PARAMETER</td> <td>STATUS</td>
											<td colspan="3">PARAMETER</td> <td>STATUS</td>
										</tr>
										<tr>
											<td colspan=3>1) Did the agent give appropriate greeting?</td> <td><b><?php echo $agnt_feedback['agent_appropriate_greeting'] ?></b></td>
											<td colspan=3>2) Did the agent give excellent conversational responses to caller's requests?</td> <td><b><?php echo $agnt_feedback['agent_excellent_conversational_responses'] ?></b></td>
										</tr>
										<tr>
											<td colspan=3>3) Did the agent verify the opening information (name, zip code, address, phone number)?</td> <td><b><?php echo $agnt_feedback['agent_verify_opening_information'] ?></b></td>
											<td colspan=3>4) Did the agent follow call flow with caller's initial request (orders what the caller asks for)?</td> <td><b><?php echo $agnt_feedback['agent_follow_call_flow'] ?></b></td>
										</tr>
										<tr>
											<td colspan=3>5) Did the agent show appropriate gratitude throughout the call?</td> <td><b><?php echo $agnt_feedback['agent_appropriate_gratitude'] ?></b></td>
											<td colspan=3>6) Did the agent share upsells when presented?</td> <td><b><?php echo $agnt_feedback['agent_share_upsells'] ?></b></td>
										</tr>
										<tr>
											<td colspan=3>7) Did the agent show familiarity and search all options for offers products?</td> <td><b><?php echo $agnt_feedback['agent_show_familiarity_search'] ?></b></td>
											<td colspan=3>8) If partner-did the agent thank the caller specifically?</td> <td><b><?php echo $agnt_feedback['agent_thank_caller_specifically'] ?></b></td>
										</tr>
										<tr>
											<td colspan=3>9) Did the agent share HOM/JMM facts as appropriate and make good use of dead air?</td> <td><b><?php echo $agnt_feedback['agent_share_facts_appropriate'] ?></b></td>
											<td colspan=3>10) Was the agent professional with communication?</td> <td><b><?php echo $agnt_feedback['agent_professional_communication'] ?></b></td>
										</tr>
										<tr>
											<td colspan=3>11) Did the agent use proper pace, energy & enthusiasm?</td> <td><b><?php echo $agnt_feedback['agent_proper_enthusiasm'] ?></b></td>
											<td colspan=3>12) Did the agent maintain control of the conversation?</td> <td><b><?php echo $agnt_feedback['agent_maintain_control_conversation'] ?></b></td>
										</tr>
										<tr>
											<td colspan=3>13) Did the agent spoke clearly and utilize proper grammar (no slang)?</td> <td><b><?php echo $agnt_feedback['agent_spoke_clearly'] ?></b></td>
											<td colspan=3>14) Did the agent use good listening skills and appropriate responses?</td> <td><b><?php echo $agnt_feedback['agent_good_listening_skills_responses'] ?></b></td>
										</tr>
										<tr>
											<td colspan=3>15) Did the agent empathize with the caller and show compassion?</td> <td><b><?php echo $agnt_feedback['agent_empathize_caller_and_compassion'] ?></b></td>
											<td colspan=3>16) Did the agent have minimal dead air?</td> <td><b><?php echo $agnt_feedback['agent_have_minimal_dead_air'] ?></b></td>
										</tr>
										<tr>
											<td colspan=3>17) Did the agent have the caller provide the address if not populated on review screen?</td> <td><b><?php echo $agnt_feedback['agent_have_caller_provide_address'] ?></b></td>
											<td colspan=3>18) Did the agent confirm dollar amount and frequency as well as reviewing cart?</td> <td><b><?php echo $agnt_feedback['agent_confirm_dollar_amount'] ?></b></td>
										</tr>
										<tr>
											<td colspan=3>19) Did the agent read shipping information as scripted/share charges as appropriate?</td> <td><b><?php echo $agnt_feedback['agent_read_shipping_information'] ?></b></td>
											<td colspan=3>20) Did the agent ask caller for email and tv information?</td> <td><b><?php echo $agnt_feedback['agent_ask_caller_email_tv_information'] ?></b></td>
										</tr>
										<tr>
											<td colspan=3>21) Did the agent use proper thanks at the call conclusion?</td> <td><b><?php echo $agnt_feedback['agent_proper_thanks'] ?></b></td>
											<td colspan=3>22) Did the agent transfer the call to prayer/CS when appropriate?</td> <td><b><?php echo $agnt_feedback['agent_transfer_call_prayer_appropriate'] ?></b></td>
										</tr>
										<tr>
											<td colspan=3>23) <b style="color:red"> ***</br>Did the agent follow payment industry compliance policies properly?</td> <td><b><?php echo $agnt_feedback['agent_follow_payment'] ?></b></td>
											<td colspan=3>24) <b style="color:red"> ***</br>Did the agent read back the customer's details properly? Like name,phone number etc.</td> <td><b><?php echo $agnt_feedback['agent_read_back_customer_details_properly'] ?></b></td>
										</tr>

										<tr>
											<td>Call Summary:</td> <td colspan=3><b><?php echo $agnt_feedback['call_summary'] ?></b></td>
											<td>Feedback:</td> <td colspan=3><b><?php echo $agnt_feedback['feedback'] ?></b></td>
										</tr>
										<?php if($agnt_feedback['attach_file']!=''){ ?>
										<tr oncontextmenu="return false;">
											<td colspan=3>Audio Files</td>
											<td colspan=5>
												<?php $attach_file = explode(",",$agnt_feedback['attach_file']);
												 foreach($attach_file as $mp){ ?>
													<audio controls='' style="background-color:#607F93">
													  <source src="<?php echo base_url(); ?>qa_files/qa_ameridial/jmmi/<?php echo $mp; ?>" type="audio/ogg">
													  <source src="<?php echo base_url(); ?>qa_files/qa_ameridial/jmmi/<?php echo $mp; ?>" type="audio/mpeg">
													</audio> </br>
												 <?php } ?>
											</td>
										</tr>
										<?php } ?>

									<?php }else if($campaign=='non_profit'){ ?>

										<tr>
											<td>Overall Score:</td> <td><b><?php echo $agnt_feedback['overall_score'].'%'; ?></b></td>
										</tr>
										<tr>
											<td colspan=2>PARAMETER</td>
											<td colspan=2>SUB PARAMETER</td> <td>STATUS</td>
											<td colspan=2>SUB PARAMETER</td> <td>STATUS</td>
										</tr>
										<tr>
											<td colspan=2 rowspan=3>Introduction</td>
											<td colspan=2>Properly prepared to take calls</td> <td><b><?php echo $agnt_feedback['preparedtakecall'] ?></b></td>
											<td colspan=2>Clearly stated 'paid caller from Donor Care Center'/recorded line</td> <td><b><?php echo $agnt_feedback['paidcallerfromdonor'] ?></b></td>
										</tr>
										<tr>
											<td colspan=2>Communicator stated his/her full name</td> <td><b><?php echo $agnt_feedback['communicatorstarted'] ?></b></td>
											<td colspan=2>Pronounced clients name correctly</td> <td><b><?php echo $agnt_feedback['pronouncedclients'] ?></b></td>
										</tr>
										<tr><td colspan=2>Gave a warm, friendly greeting</td> <td><b><?php echo $agnt_feedback['gavewarmgreeting'] ?></b></td></tr>
										<tr>
											<td colspan=2 rowspan=2>1st REQUEST</td>
											<td colspan=2>Followed scripted 1st request as scripted</td> <td><b><?php echo $agnt_feedback['followedscript1stReq'] ?></b></td>
											<td colspan=2>Used correct dollar amounts</td> <td><b><?php echo $agnt_feedback['usedcorrectdollar'] ?></b></td>
										</tr>
										<tr><td colspan=2>Assumptive gift ask</td> <td><b><?php echo $agnt_feedback['assumptivegiftask'] ?></b></td></tr>
										<tr>
											<td colspan=2 rowspan=3>OBJECTIONS & INTERRUPTIONS</td>
											<td colspan=2>Showed empathy/Concern</td> <td><b><?php echo $agnt_feedback['shownempathy'] ?></b></td>
											<td colspan=2>Repeated the objection</td> <td><b><?php echo $agnt_feedback['repeatedobjection'] ?></b></td>
										</tr>
										<tr>
											<td colspan=2>Personalized the objection</td> <td><b><?php echo $agnt_feedback['personalizedobjection'] ?></b></td>
											<td colspan=2>Attempted to handle objection</td> <td><b><?php echo $agnt_feedback['attemptedhandleobjection'] ?></b></td>
										</tr>
										<tr>
											<td colspan=2>Did not reinforce the negative</td> <td><b><?php echo $agnt_feedback['reinforcethenegative'] ?></b></td>
											<td colspan=2>Exited a dead-end call</td> <td><b><?php echo $agnt_feedback['deadendcall'] ?></b></td>
										</tr>
										<tr>
											<td colspan=2 rowspan=2>2nd REQUEST</td>
											<td colspan=2>Followed scripted 2nd request as scripted</td> <td><b><?php echo $agnt_feedback['followed2ndReq'] ?></b></td>
											<td colspan=2>Used correct dollar amounts</td> <td><b><?php echo $agnt_feedback['usedoller2ndReq'] ?></b></td>
										</tr>
										<tr><td colspan=2>Assumptive gift ask</td> <td><b><?php echo $agnt_feedback['assumptive2ndReq'] ?></b></td></tr>
										<tr>
											<td colspan=2 rowspan=2>3rd REQUEST</td>
											<td colspan=2>Attempted third request as scripted (when applicable)</td> <td><b><?php echo $agnt_feedback['attempted3rdReq'] ?></b></td>
											<td colspan=2>Used correct dollar amounts</td> <td><b><?php echo $agnt_feedback['usedoller3rdReq'] ?></b></td>
										</tr>
										<tr><td colspan=2>Assumptive gift ask</td> <td><b><?php echo $agnt_feedback['assumptive3rdReq'] ?></b></td></tr>
										<tr>
											<td colspan=2 rowspan=4>CLOSE</td>
											<td colspan=2>Confirmation question/Confirmed gift amount & waited for response</td> <td><b><?php echo $agnt_feedback['confirmationgiftamount'] ?></b></td>
											<td colspan=2>Assumed the higher dollar amount</td> <td><b><?php echo $agnt_feedback['assumedhigherdoller'] ?></b></td>
										</tr>
										<tr>
											<td colspan=2>Showed meaningful gratitude/Thanked the donor or volunteer</td> <td><b><?php echo $agnt_feedback['meaningfulgratitude'] ?></b></td>
											<td colspan=2>Read credit card/ACH ask verbatim/assumptively asked for credit card</td> <td><b><?php echo $agnt_feedback['readcreditcard'] ?></b></td>
										</tr>
										<tr>
											<td colspan=2>Confirmed full name and address</td> <td><b><?php echo $agnt_feedback['confirmedfullname'] ?></b></td>
											<td colspan=2>Followed Maybe Close appropriately</td> <td><b><?php echo $agnt_feedback['followedmaybeclose'] ?></b></td>
										</tr>
										<tr>
											<td colspan=2>Read close as scripted</td> <td><b><?php echo $agnt_feedback['readclosescript'] ?></b></td>
											<td colspan=2>Ended call in a reasonable time</td> <td><b><?php echo $agnt_feedback['endedcalltime'] ?></b></td>
										</tr>
										<tr>
											<td colspan=2 rowspan=3>INTERNALIZATION</td>
											<td colspan=2>Sounded conversational, used good voice inflection, not read, or monotone</td> <td><b><?php echo $agnt_feedback['soundedconversational'] ?></b></td>
											<td colspan=2>Mirrored donor / Used appropriate pace</td> <td><b><?php echo $agnt_feedback['useappropiatepace'] ?></b></td>
										</tr>
										<tr>
											<td colspan=2>Confident presentation w/out hesitation, filler words or uptalking</td> <td><b><?php echo $agnt_feedback['confidentpresentation'] ?></b></td>
											<td colspan=2>Did not lose control of the conversation</td> <td><b><?php echo $agnt_feedback['didnotlosecontrol'] ?></b></td>
										</tr>
										<tr>
											<td colspan=2>Proper personalization</td> <td><b><?php echo $agnt_feedback['properpersonalization'] ?></b></td>
											<td colspan=2>Utilized proper grammar & pronunciation</td> <td><b><?php echo $agnt_feedback['utilizedpropergrammer'] ?></b></td>
										</tr>
										<tr>
											<td colspan=2 rowspan=5>ZERO CALLS (Auto Fail)</td>
											<td colspan=2>BAILING</td> <td><b><?php echo $agnt_feedback['bailing'] ?></b></td>
											<td colspan=2>DID NOT ASK FOR A CREDIT CARD/ACH</td> <td><b><?php echo $agnt_feedback['askforcreditcard'] ?></b></td>
										</tr>
										<tr>
											<td colspan=2>GAVE FALSE INFORMATION</td> <td><b><?php echo $agnt_feedback['gavefalseinformation'] ?></b></td>
											<td colspan=2>OMITTED "PAID CALLER FROM DONOR CARE CENTER" STATEMENT</td> <td><b><?php echo $agnt_feedback['donorcarecenter'] ?></b></td>
										</tr>
										<tr>
											<td colspan=2>DID NOT ASK CONFIRMATION QUESTION</td> <td><b><?php echo $agnt_feedback['askconfirmationquestion'] ?></b></td>
											<td colspan=2>UNSOLID GIFT</td> <td><b><?php echo $agnt_feedback['unsolidgift'] ?></b></td>
										</tr>
										<tr>
											<td colspan=2>NOT CODING A REFUSAL/CODING A REFUSAL INAPPROPRIATELY</td> <td><b><?php echo $agnt_feedback['codingrefusal'] ?></b></td>
											<td colspan=2>UNPROFESSIONAL BEHAVIOR/RUDENESS (not extreme)</td> <td><b><?php echo $agnt_feedback['unprofessionalbehaviour'] ?></b></td>
										</tr>
										<tr>
											<td colspan=2>IMPROPER PRESENTATION</td> <td><b><?php echo $agnt_feedback['improperpresentation'] ?></b></td>
											<td colspan=2>OMITTED "DNC" CODE/USED "DNC" CODE INCORRECTLY</td> <td><b><?php echo $agnt_feedback['omittedDNCcode'] ?></b></td>
										</tr>
										<tr><td colspan=2>FALSIFICATION OF A GIFT</td> <td><b><?php echo $agnt_feedback['falsificationgift'] ?></b></td></tr>

										<tr>
											<td>Call Summary:</td> <td colspan=3><b><?php echo $agnt_feedback['call_summary'] ?></b></td>
											<td>Feedback:</td> <td colspan=3><b><?php echo $agnt_feedback['feedback'] ?></b></td>
										</tr>
										<?php if($agnt_feedback['attach_file']!=''){ ?>
										<tr oncontextmenu="return false;">
											<td colspan=3>Audio Files</td>
											<td colspan=5>
												<?php $attach_file = explode(",",$agnt_feedback['attach_file']);
												 foreach($attach_file as $mp){ ?>
													<audio controls='' style="background-color:#607F93">
													  <source src="<?php echo base_url(); ?>qa_files/qa_ameridial/non_profit/<?php echo $mp; ?>" type="audio/ogg">
													  <source src="<?php echo base_url(); ?>qa_files/qa_ameridial/non_profit/<?php echo $mp; ?>" type="audio/mpeg">
													</audio> </br>
												 <?php } ?>
											</td>
										</tr>
										<?php } ?>

									<?php }else if($campaign=='revel'){ ?>

										<tr><td>Overall Score:</td> <td><b><?php echo $agnt_feedback['overall_score'].'%'; ?></b></td></tr>
										<tr>
											<td colspan=4>PARAMETER</td>
											<td>RATING</td>
											<td>COMMENTS/NOTES</td>
										</tr>
										<tr>
											<td rowspan=3>Greeting</td>
											<td colspan=3>1.1 Did the rep greet the customer promptly and properly?</td> <td><b><?php echo $agnt_feedback['repgreetingcustomer'] ?></b></td>
											<td><?php echo $agnt_feedback['cmt1'] ?></td>
										</tr>
										<tr>
											<td colspan=3>1.2 Did the rep use a pleasant, respectful tone and use the caller's name (Mr.Ms. ________) at least once?</td> <td><b><?php echo $agnt_feedback['repuserespectfultone'] ?></b></td>
											<td><?php echo $agnt_feedback['cmt2'] ?></td>
										</tr>
										<tr>
											<td colspan=3>1.3 Did the rep answer in a timely manner? (within 5 seconds)</td> <td><b><?php echo $agnt_feedback['repasnwertimelymanner'] ?></b></td>
											<td><?php echo $agnt_feedback['cmt3'] ?></td>
										</tr>
										<tr>
											<td>Authentication</td>
											<td colspan=3>2.1 Did the rep collect and verify the caller's information appropriately and accurately?</td> <td><b><?php echo $agnt_feedback['repcollectcallerinformation'] ?></b></td>
											<td><?php echo $agnt_feedback['cmt4'] ?></td>
										</tr>
										<tr>
											<td rowspan=3>Listening Skills</td>
											<td colspan=3>3.1 Did the rep use active listening skills throughout the inquiry so the caller did not have to repeat themselves? (do not deduct agent for system issues causing sound difficulties)</td> <td><b><?php echo $agnt_feedback['repuselisteningskills'] ?></b></td>
											<td><?php echo $agnt_feedback['cmt5'] ?></td>
										</tr>
										<tr>
											<td colspan=3>3.2  Did the rep demonstrate use of call control techniques?</td> <td><b><?php echo $agnt_feedback['repdemonstratecalltechnique'] ?></b></td>
											<td><?php echo $agnt_feedback['cmt6'] ?></td>
										</tr>
										<tr>
											<td colspan=3>3.3 Did the rep refrain from interrupting the caller?</td> <td><b><?php echo $agnt_feedback['repreframeinterruptcaller'] ?></b></td>
											<td><?php echo $agnt_feedback['cmt7'] ?></td>
										</tr>
										<tr>
											<td rowspan=5>Soft Skills</td>
											<td colspan=3>4.1 Did the rep speak clearly and concisely and at an appropriate pace?</td> <td><b><?php echo $agnt_feedback['repspeakclearlyatpace'] ?></b></td>
											<td><?php echo $agnt_feedback['cmt8'] ?></td>
										</tr>
										<tr>
											<td colspan=3>4.2 Did the rep avoid use of internal terms, technical terms, slang and jargon?</td> <td><b><?php echo $agnt_feedback['repavoiduseofterms'] ?></b></td>
											<td><?php echo $agnt_feedback['cmt9'] ?></td>
										</tr>
										<tr>
											<td colspan=3>4.3 Did the rep demonstrate confidence in responses?</td> <td><b><?php echo $agnt_feedback['repconfidentinresponce'] ?></b></td>
											<td><?php echo $agnt_feedback['cmt10'] ?></td>
										</tr>
										<tr>
											<td colspan=3>4.4 Did the rep use the callers last name to personalize the call at least once per section?</td> <td><b><?php echo $agnt_feedback['repusercallerlastname'] ?></b></td>
											<td><?php echo $agnt_feedback['cmt11'] ?></td>
										</tr>
										<tr>
											<td colspan=3>4.5 Did the rep minimize silences and use fillers to obtain additional information? (no more than 10 secs of consecutive dead air throughout the entire call.)</td> <td><b><?php echo $agnt_feedback['repusefiltertoobtain'] ?></b></td>
											<td><?php echo $agnt_feedback['cmt12'] ?></td>
										</tr>
										<tr>
											<td rowspan=4>Knowledge, Procedure& Call Flow</td>
											<td colspan=3>5.1 Did the rep maintain call control?</td> <td><b><?php echo $agnt_feedback['repmaintaincallcontrol'] ?></b></td>
											<td><?php echo $agnt_feedback['cmt13'] ?></td>
										</tr>
										<tr>
											<td colspan=3>5.2 Did the rep use the tools appropriately?</td> <td><b><?php echo $agnt_feedback['repusetoolappropiately'] ?></b></td>
											<td><?php echo $agnt_feedback['cmt14'] ?></td>
										</tr>
										<tr>
											<td colspan=3>5.3  Did the rep demonstrate knowledge of the product/program?</td> <td><b><?php echo $agnt_feedback['repdemonstrateproductknowledge'] ?></b></td>
											<td><?php echo $agnt_feedback['cmt15'] ?></td>
										</tr>
										<tr>
											<td colspan=3>5.4 Did the rep use the appropriate scripting responses verbatim?</td> <td><b><?php echo $agnt_feedback['repuseappropiatescript'] ?></b></td>
											<td><?php echo $agnt_feedback['cmt16'] ?></td>
										</tr>
										<tr>
											<td rowspan=3>Closing</td>
											<td colspan=3>6.1 Did the rep accurately and completely document the call?</td> <td><b><?php echo $agnt_feedback['repaccuratelycalldocument'] ?></b></td>
											<td><?php echo $agnt_feedback['cmt17'] ?></td>
										</tr>
										<tr>
											<td colspan=3>6.2 Did the rep complete the correct confirmation and closing?</td> <td><b><?php echo $agnt_feedback['repcompletecorrectclosing'] ?></b></td>
											<td><?php echo $agnt_feedback['cmt18'] ?></td>
										</tr>
										<tr>
											<td colspan=3>6.3 Did the rep thank the caller before closing?</td> <td><b><?php echo $agnt_feedback['repthankthecaller'] ?></b></td>
											<td><?php echo $agnt_feedback['cmt19'] ?></td>
										</tr>
										<tr>
											<td>Auto-Fail</td>
											<td colspan=3 style="color:red">7.1 ***Did the rep attempt give Medical Advice to the caller?</td> <td><b><?php echo $agnt_feedback['repgiveMedicaladvice'] ?></b></td>
											<td><?php echo $agnt_feedback['cmt20'] ?></td>
										</tr>
										<tr>
											<td colspan=3 style="color:red">7.2 ***Did the agent miscode the call?</td> <td><b><?php echo $agnt_feedback['agentMiscodeCall'] ?></b></td>
											<td><?php echo $agnt_feedback['cmt21'] ?></td>
										</tr>
										<tr>
											<td>Call Summary:</td> <td colspan=3><b><?php echo $agnt_feedback['call_summary'] ?></b></td>
											<td>Feedback:</td> <td colspan=3><b><?php echo $agnt_feedback['feedback'] ?></b></td>
										</tr>
										<?php if($agnt_feedback['attach_file']!=''){ ?>
										<tr oncontextmenu="return false;">
											<td colspan=3>Audio Files</td>
											<td colspan=5>
												<?php $attach_file = explode(",",$agnt_feedback['attach_file']);
												 foreach($attach_file as $mp){ ?>
													<audio controls='' style="background-color:#607F93">
													  <source src="<?php echo base_url(); ?>qa_files/qa_ameridial/revel/<?php echo $mp; ?>" type="audio/ogg">
													  <source src="<?php echo base_url(); ?>qa_files/qa_ameridial/revel/<?php echo $mp; ?>" type="audio/mpeg">
													</audio> </br>
												 <?php } ?>
											</td>
										</tr>
										<?php } ?>

									<?php }else if($campaign=='qpc'){ ?>

										<tr><td>Overall Score:</td> <td><b><?php echo $agnt_feedback['overall_score'].'%'; ?></b></td></tr>
										<tr>
											<td colspan=4>PARAMETER</td>
											<td>RATING</td>
											<td>COMMENTS/NOTES</td>
										</tr>
										<tr>
											<td rowspan=2>Open/Close</td>
											<td colspan=3>Unprepared to Introduce Call</td> <td><b><?php echo $agnt_feedback['unpreparedCallIntroduce'] ?></b></td>
											<td><?php echo $agnt_feedback['cmt1'] ?></td>
										</tr>
										<tr>
											<td colspan=3>Did Not Use Branding</td> <td><b><?php echo $agnt_feedback['didnotUseBranding'] ?></b></td>
											<td><?php echo $agnt_feedback['cmt2'] ?></td>
										</tr>
										<tr>
											<td rowspan=4>Data Accuracy</td>
											<td colspan=3>Data Not Collected or Collected Incorrectly</td> <td><b><?php echo $agnt_feedback['dataNotCollected'] ?></b></td>
											<td><?php echo $agnt_feedback['cmt3'] ?></td>
										</tr>
										<tr>
											<td colspan=3>Second Data Occurrence</td> <td><b><?php echo $agnt_feedback['secondDataOccurrence'] ?></b></td>
											<td><?php echo $agnt_feedback['cmt4'] ?></td>
										</tr>
										<tr>
											<td colspan=3>Inaccurate Call Result Code</td> <td><b><?php echo $agnt_feedback['inaccurateCallResult'] ?></b></td>
											<td><?php echo $agnt_feedback['cmt5'] ?></td>
										</tr>
										<tr>
											<td colspan=3>Inappropriate or Unusable After-Call Comments</td> <td><b><?php echo $agnt_feedback['unusableAfterCallComment'] ?></b></td>
											<td><?php echo $agnt_feedback['cmt6'] ?></td>
										</tr>
										<tr>
											<td rowspan=2>Active Listening</td>
											<td colspan=3>Underutilized Call Narration</td> <td><b><?php echo $agnt_feedback['underutilizedCallNarration'] ?></b></td>
											<td><?php echo $agnt_feedback['cmt7'] ?></td>
										</tr>
										<tr>
											<td colspan=3>Inappropriate FAQ Responses</td> <td><b><?php echo $agnt_feedback['inappropiateFAQResponce'] ?></b></td>
											<td><?php echo $agnt_feedback['cmt8'] ?></td>
										</tr>
										<tr>
											<td rowspan=5>Customer Experience</td>
											<td colspan=3>No or Improper Transitions</td> <td><b><?php echo $agnt_feedback['imprpperTransaction'] ?></b></td>
											<td><?php echo $agnt_feedback['cmt9'] ?></td>
										</tr>
										<tr>
											<td colspan=3>Under-Acknowledged Caller's Concerns</td> <td><b><?php echo $agnt_feedback['underAcknowledgeCaller'] ?></b></td>
											<td><?php echo $agnt_feedback['cmt10'] ?></td>
										</tr>
										<tr>
											<td colspan=3>Inappropriate Script Navigation</td> <td><b><?php echo $agnt_feedback['inappropiateScript'] ?></b></td>
											<td><?php echo $agnt_feedback['cmt11'] ?></td>
										</tr>
										<tr>
											<td colspan=3>Did Not Display Ownership</td> <td><b><?php echo $agnt_feedback['notDisplayOwnership'] ?></b></td>
											<td><?php echo $agnt_feedback['cmt12'] ?></td>
										</tr>
										<tr>
											<td colspan=3>Incorrect Transfer or Referral</td> <td><b><?php echo $agnt_feedback['incorrectTransfer'] ?></b></td>
											<td><?php echo $agnt_feedback['cmt13'] ?></td>
										</tr>
										<tr>
											<td rowspan=4>Auto-Fail (Automatic Zero)</td>
											<td colspan=3>***Did the agent abruptly end the call or display any rude behavior?</td> <td><b><?php echo $agnt_feedback['didagentabruptendcall'] ?></b></td>
											<td><?php echo $agnt_feedback['cmt14'] ?></td>
										</tr>
										<tr>
											<td colspan=3>***Did the agent answer premium/cover questions?</td> <td><b><?php echo $agnt_feedback['didagentanswerpremiumquestion'] ?></b></td>
											<td><?php echo $agnt_feedback['cmt15'] ?></td>
										</tr>
										<tr>
											<td colspan=3>***Did the agent give a wrong callback or referral number?</td> <td><b><?php echo $agnt_feedback['didagentgivewrongcallback'] ?></b></td>
											<td><?php echo $agnt_feedback['cmt16'] ?></td>
										</tr>
										<tr>
											<td colspan=3>***Did the agent use an incorrect carrier name?</td> <td><b><?php echo $agnt_feedback['didagentuseincorrectname'] ?></b></td>
											<td><?php echo $agnt_feedback['cmt17'] ?></td>
										</tr>
										<tr>
											<td>Call Summary:</td> <td colspan=3><b><?php echo $agnt_feedback['call_summary'] ?></b></td>
											<td>Feedback:</td> <td colspan=3><b><?php echo $agnt_feedback['feedback'] ?></b></td>
										</tr>
										<?php if($agnt_feedback['attach_file']!=''){ ?>
										<tr oncontextmenu="return false;">
											<td colspan=3>Audio Files</td>
											<td colspan=5>
												<?php $attach_file = explode(",",$agnt_feedback['attach_file']);
												 foreach($attach_file as $mp){ ?>
													<audio controls='' style="background-color:#607F93">
													  <source src="<?php echo base_url(); ?>qa_files/qa_ameridial/qpc/<?php echo $mp; ?>" type="audio/ogg">
													  <source src="<?php echo base_url(); ?>qa_files/qa_ameridial/qpc/<?php echo $mp; ?>" type="audio/mpeg">
													</audio> </br>
												 <?php } ?>
											</td>
										</tr>
										<?php } ?>

									<?php }else if($campaign=='ancient_nutrition'){ ?>

										<tr><td>Overall Score:</td> <td><b><?php echo $agnt_feedback['overall_score'].'%'; ?></b></td></tr>
										<tr>
											<td colspan=4>PARAMETER</td>
											<td>RATING</td>
											<td>COMMENTS/NOTES</td>
										</tr>
										<tr>
											<td rowspan=3>Greeting</td>
											<td colspan=3>1.1 Did the rep greet the customer promptly and properly?</td> <td><b><?php echo $agnt_feedback['repgreetingcustomer'] ?></b></td>
											<td><?php echo $agnt_feedback['cmt1'] ?></td>
										</tr>
										<tr>
											<td colspan=3>1.2 Did the rep use a pleasant, respectful tone and use the caller's name (Mr.Ms. ________) at least once?</td> <td><b><?php echo $agnt_feedback['repuserespectfultone'] ?></b></td>
											<td><?php echo $agnt_feedback['cmt2'] ?></td>
										</tr>
										<tr>
											<td colspan=3>1.3 Did the rep answer in a timely manner? (within 5 seconds)</td> <td><b><?php echo $agnt_feedback['repasnwertimelymanner'] ?></b></td>
											<td><?php echo $agnt_feedback['cmt3'] ?></td>
										</tr>
										<tr>
											<td rowspan=2>Authentication</td>
											<td colspan=3>2.1 Did the rep collect and verify the caller's information appropriately and accurately?</td> <td><b><?php echo $agnt_feedback['repcollectcustomerinfo'] ?></b></td>
											<td><?php echo $agnt_feedback['cmt4'] ?></td>
										</tr>
										<tr>
											<td colspan=3>2.2 Did the rep cover the payment procedures appropriately?</td> <td><b><?php echo $agnt_feedback['repcoverpaymentprocedure'] ?></b></td>
											<td><?php echo $agnt_feedback['cmt5'] ?></td>
										</tr>
										<tr>
											<td rowspan=3>Listening Skills</td>
											<td colspan=3>3.1 Did the rep use active listening skills throughout the inquiry so the caller did not have to repeat themselves? (do not deduct agent for system issues causing sound difficulties)</td> <td><b><?php echo $agnt_feedback['repuselisteningskills'] ?></b></td>
											<td><?php echo $agnt_feedback['cmt6'] ?></td>
										</tr>
										<tr>
											<td colspan=3>3.2 Did the rep demonstrate use of call control techniques?</td> <td><b><?php echo $agnt_feedback['repdemonstratecalltechnique'] ?></b></td>
											<td><?php echo $agnt_feedback['cmt7'] ?></td>
										</tr>
										<tr>
											<td colspan=3>3.3 Did the rep refrain from interrupting the caller?</td> <td><b><?php echo $agnt_feedback['repreframeinterruptcaller'] ?></b></td>
											<td><?php echo $agnt_feedback['cmt8'] ?></td>
										</tr>
										<tr>
											<td rowspan=5>Soft Skills</td>
											<td colspan=3>4.1 Did the rep speak clearly and concisely and at an appropriate pace?</td> <td><b><?php echo $agnt_feedback['repspeakclearlyatpace'] ?></b></td>
											<td><?php echo $agnt_feedback['cmt9'] ?></td>
										</tr>
										<tr>
											<td colspan=3>4.2 Did the rep avoid use of internal terms, technical terms, slang and jargon?</td> <td><b><?php echo $agnt_feedback['repavoiduseinternalterms'] ?></b></td>
											<td><?php echo $agnt_feedback['cmt10'] ?></td>
										</tr>
										<tr>
											<td colspan=3>4.3 Did the rep demonstrate confidence in responses?</td> <td><b><?php echo $agnt_feedback['repconfidentinresponce'] ?></b></td>
											<td><?php echo $agnt_feedback['cmt11'] ?></td>
										</tr>
										<tr>
											<td colspan=3>4.4 Did the rep use the callers last name to personalize the call at least once per section?</td> <td><b><?php echo $agnt_feedback['repusercallerlastname'] ?></b></td>
											<td><?php echo $agnt_feedback['cmt12'] ?></td>
										</tr>
										<tr>
											<td colspan=3>4.5 Did the rep minimize silences and use fillers to obtain additional information? (no more than 10 secs of consecutive dead air throughout the entire call.)</td> <td><b><?php echo $agnt_feedback['repusefiltertoobtain'] ?></b></td>
											<td><?php echo $agnt_feedback['cmt13'] ?></td>
										</tr>
										<tr>
											<td rowspan=8>Knowledge, Procedure& Call Flow</td>
											<td colspan=3>5.1 Did the rep cover the Auto Shipping appropriately? </td> <td><b><?php echo $agnt_feedback['repcoverautoshipping'] ?></b></td>
											<td><?php echo $agnt_feedback['cmt14'] ?></td>
										</tr>
										<tr>
											<td colspan=3>5.2 If rep gathered email, did they read the complete email scripting?</td> <td><b><?php echo $agnt_feedback['repgatheredemail'] ?></b></td>
											<td><?php echo $agnt_feedback['cmt15'] ?></td>
										</tr>
										<tr>
											<td colspan=3>5.3 Did the rep cover the Rush Shipping appropriately?</td> <td><b><?php echo $agnt_feedback['repcoverRushshipping'] ?></b></td>
											<td><?php echo $agnt_feedback['cmt16'] ?></td>
										</tr>
										<tr>
											<td colspan=3>5.4 Did the rep complete order confirmation?</td> <td><b><?php echo $agnt_feedback['repcompleteorderconfirmation'] ?></b></td>
											<td><?php echo $agnt_feedback['cmt17'] ?></td>
										</tr>
										<tr>
											<td colspan=3>5.5 Did the rep maintain call control?</td> <td><b><?php echo $agnt_feedback['repmaintaincallcontrol'] ?></b></td>
											<td><?php echo $agnt_feedback['cmt18'] ?></td>
										</tr>
										<tr>
											<td colspan=3>5.6 Did the rep use the tools appropriately?</td> <td><b><?php echo $agnt_feedback['repusetoolappropiately'] ?></b></td>
											<td><?php echo $agnt_feedback['cmt19'] ?></td>
										</tr>
										<tr>
											<td colspan=3>5.7 Did the rep demonstrate knowledge of the product/program?</td> <td><b><?php echo $agnt_feedback['repdemonstrateproductknowledge'] ?></b></td>
											<td><?php echo $agnt_feedback['cmt20'] ?></td>
										</tr>
										<tr>
											<td colspan=3>5.8 Did the rep use the appropriate objection responses?</td> <td><b><?php echo $agnt_feedback['repuseappropiateobjection'] ?></b></td>
											<td><?php echo $agnt_feedback['cmt21'] ?></td>
										</tr>
										<tr>
											<td rowspan=3>Closing</td>
											<td colspan=3>6.1 Did the rep accurately and completely document the call?</td> <td><b><?php echo $agnt_feedback['repaccuratelycalldocument'] ?></b></td>
											<td><?php echo $agnt_feedback['cmt22'] ?></td>
										</tr>
										<tr>
											<td colspan=3>6.2 Did the rep complete the correct confirmation and closing?</td> <td><b><?php echo $agnt_feedback['repcompletecorrectclosing'] ?></b></td>
											<td><?php echo $agnt_feedback['cmt23'] ?></td>
										</tr>
										<tr>
											<td colspan=3>6.3 Did the rep thank the caller before closing?</td> <td><b><?php echo $agnt_feedback['repthankthecallerbeforeclosing'] ?></b></td>
											<td><?php echo $agnt_feedback['cmt24'] ?></td>
										</tr>
										<tr>
											<td rowspan=2>Auto-Fail</td>
											<td colspan=3 style="color:red">7.1 ***Did the rep attempt give Medical Advice to the caller?</td> <td><b><?php echo $agnt_feedback['repcoveroffersappropiately'] ?></b></td>
											<td><?php echo $agnt_feedback['cmt25'] ?></td>
										</tr>
										<tr>
											<td colspan=3 style="color:red">7.2 ***Did the rep cover the upsell appropriately?</td> <td><b><?php echo $agnt_feedback['repcoverupsellappropiately'] ?></b></td>
											<td><?php echo $agnt_feedback['cmt26'] ?></td>
										</tr>
										<tr>
											<td colspan=3 style="color:red">7.3 ***Did the agent read the confirmation script if email address was obtained?</td> <td><b><?php echo $agnt_feedback['agentReadConfirmScript'] ?></b></td>
											<td><?php echo $agnt_feedback['cmt27'] ?></td>
										</tr>
										<tr>
											<td>Call Summary:</td> <td colspan=3><b><?php echo $agnt_feedback['call_summary'] ?></b></td>
											<td>Feedback:</td> <td colspan=3><b><?php echo $agnt_feedback['feedback'] ?></b></td>
										</tr>
										<?php if($agnt_feedback['attach_file']!=''){ ?>
										<tr oncontextmenu="return false;">
											<td colspan=3>Audio Files</td>
											<td colspan=5>
												<?php $attach_file = explode(",",$agnt_feedback['attach_file']);
												 foreach($attach_file as $mp){ ?>
													<audio controls='' style="background-color:#607F93">
													  <source src="<?php echo base_url(); ?>qa_files/qa_ameridial/ancient_nutrition/<?php echo $mp; ?>" type="audio/ogg">
													  <source src="<?php echo base_url(); ?>qa_files/qa_ameridial/ancient_nutrition/<?php echo $mp; ?>" type="audio/mpeg">
													</audio> </br>
												 <?php } ?>
											</td>
										</tr>
										<?php } ?>

									<?php }else if($campaign=='powerfan'){ ?>

										<tr><td>Overall Score:</td> <td><b><?php echo $agnt_feedback['overall_score'].'%'; ?></b></td></tr>
										<tr>
											<td rowspan=3>Introduction</td>
											<td colspan=4>Was the agent Prepared for call\answer within 5 seconds</td> <td><b><?php echo $agnt_feedback['answerCallWithin5sec'] ?></b></td>
										</tr>
										<tr>
											<td colspan=4>Did the agent identify self and the company?</td> <td><b><?php echo $agnt_feedback['agentIdentifySelftandCompany'] ?></b></td>
										</tr>
										<tr>
											<td colspan=4>Collects intro information ( Claim code, zip code)</td> <td><b><?php echo $agnt_feedback['collectIntroInformation'] ?></b></td>
										</tr>
										<tr>
											<td rowspan=4>Sales, Knowledge, Objections</td>
											<td colspan=4>Main Sell- agent accurately gave terms of offer, asks for sale per script\quanity</td> <td><b><?php echo $agnt_feedback['mainSelftAgentGiveTerms'] ?></b></td>
										</tr>
										<tr>
											<td colspan=4>Did the agent promote upsell\downsell, asks for sale per script</td> <td><b><?php echo $agnt_feedback['agentPromoteUpsell'] ?></b></td>
										</tr>
										<tr>
											<td colspan=4>Accurately Described Product\answered</td> <td><b><?php echo $agnt_feedback['describedProductAccurately'] ?></b></td>
										</tr>
										<tr>
											<td colspan=4>Used appropriate Objection Handling</td> <td><b><?php echo $agnt_feedback['useAppropiateObjection'] ?></b></td>
										</tr>
										<tr>
											<td rowspan=6>Customer update\Payment info</td>
											<td colspan=4>Asks for billing Name as it appears on cc or check</td> <td><b><?php echo $agnt_feedback['askForBillingNamesOnCheck'] ?></b></td>
										</tr>
										<tr>
											<td colspan=4>If billing name is different than caller-- agent verified caller is an authorized user of the cc or check</td> <td><b><?php echo $agnt_feedback['agentVerifyCallerUseofCheck'] ?></b></td>
										</tr>
										<tr>
											<td colspan=4>Asks for billing address for payment method used</td> <td><b><?php echo $agnt_feedback['askForBillingAddressForPayment'] ?></b></td>
										</tr>
										<tr>
											<td colspan=4>Agent verifies shipping address</td> <td><b><?php echo $agnt_feedback['agentVerifyShippingAddress'] ?></b></td>
										</tr>
										<tr>
											<td colspan=4>Order was set up and or coded correctly</td> <td><b><?php echo $agnt_feedback['orderWasSetUpAndCodedCorrectly'] ?></b></td>
										</tr>
										<tr>
											<td colspan=4>Asks for email address, spelling and gave email disclaimer</td> <td><b><?php echo $agnt_feedback['askForEmailAddress'] ?></b></td>
										</tr>
										<tr>
											<td rowspan=5>Sales Close</td>
											<td colspan=4>Gave total amount charged\payment information</td> <td><b><?php echo $agnt_feedback['gaveTotalAmountCharged'] ?></b></td>
										</tr>
										<tr>
											<td colspan=4>Gave correct shipping information</td> <td><b><?php echo $agnt_feedback['gaveCorrectShippingInfo'] ?></b></td>
										</tr>
										<tr>
											<td colspan=4>Gave MBG\return info in</td> <td><b><?php echo $agnt_feedback['gaveMBGInfo'] ?></b></td>
										</tr>
										<tr>
											<td colspan=4>Gave CS phone number</td> <td><b><?php echo $agnt_feedback['gaveCSPhoneNumber'] ?></b></td>
										</tr>
										<tr>
											<td colspan=3>Asks for permission to authorize payment ( cc or check)</td> <td><b><?php echo $agnt_feedback['permissionToAuthorizePayment'] ?></b></td>
										</tr>
										<tr>
											<td rowspan=3>Professionalism\Presentation</td>
											<td colspan=4>Was the agent polite, courteous and patient</td> <td><b><?php echo $agnt_feedback['wasAgentPolite'] ?></b></td>
										</tr>
										<tr>
											<td colspan=4>Agent refrained from using inappropriate comments\presentation</td> <td><b><?php echo $agnt_feedback['agentUsingAppropiateComment'] ?></b></td>
										</tr>
										<tr>
											<td colspan=4>Uses hold and transfers properly</td> <td><b><?php echo $agnt_feedback['useHoldAndTransferProperly'] ?></b></td>
										</tr>
										<tr>
											<td colspan=5 style="color:red">Auto Fail</td> <td><b><?php echo $agnt_feedback['power_fan_autofail'] ?></b></td>
										</tr>
										<tr>
											<td>Call Summary:</td> <td colspan=3><b><?php echo $agnt_feedback['call_summary'] ?></b></td>
											<td>Feedback:</td> <td colspan=3><b><?php echo $agnt_feedback['feedback'] ?></b></td>
										</tr>
										<?php if($agnt_feedback['attach_file']!=''){ ?>
										<tr oncontextmenu="return false;">
											<td colspan=3>Audio Files</td>
											<td colspan=5>
												<?php $attach_file = explode(",",$agnt_feedback['attach_file']);
												 foreach($attach_file as $mp){ ?>
													<audio controls='' style="background-color:#607F93">
													  <source src="<?php echo base_url(); ?>qa_files/qa_ameridial/power_fan/<?php echo $mp; ?>" type="audio/ogg">
													  <source src="<?php echo base_url(); ?>qa_files/qa_ameridial/power_fan/<?php echo $mp; ?>" type="audio/mpeg">
													</audio> </br>
												 <?php } ?>
											</td>
										</tr>
										<?php } ?>

									<?php }else if($campaign=='nuwave'){ ?>

										<tr><td>Overall Score:</td> <td><b><?php echo $agnt_feedback['overall_score'].'%'; ?></b></td></tr>
										<tr>
											<td colspan=3>Greeting & Identification: Example: Thank you for calling NuWave , my name is __________ , how may I assit you today?</td> <td><b><?php echo $agnt_feedback['greeting_identification'] ?></b></td>
											<td colspan=3>Asked and Verified Customer Information: May I please have your Order ID (Primary)name or e-mail address? Thank you</td> <td><b><?php echo $agnt_feedback['verified_customer'] ?></b></td>
										</tr>
										<tr>
											<td colspan=3>Used the Caller’s Name: CSR should address the customer as he/she addresses him/herself Mr., Mrs., Dr., Rev., etc. Note: CSR should get permission from customer to use customer’s first name.</td> <td><b><?php echo $agnt_feedback['use_caller_CSR_name'] ?></b></td>
											<td colspan=3>Active Listening: Doesn’t interrupt the customer, understands customer’s frame of reference, doesn’t anticipate or make assumptions, remembers important facts.</td> <td><b><?php echo $agnt_feedback['doesnot_interrupt_customer'] ?></b></td>
										</tr>
										<tr>
											<td colspan=3>Communication Skills: Converses in a clear, concise manner. Adjusts to the customer's tone & to the situation. Speaks at the customer's level of expertise. Good grammar, pace, and volume. Does not interrupt the customer. (**very important).</td> <td><b><?php echo $agnt_feedback['converses_clear_concise_mannaer'] ?></b></td>
											<td colspan=3>Professionalism: Avoids the use of slang, jargon, and acronyms. Represents NuWave in the utmost professional manner. Does not divulge information about NuWave that may cause customers to question the integrity of the company.</td> <td><b><?php echo $agnt_feedback['avoid_use_slang_jargon'] ?></b></td>
										</tr>
										<tr>
											<td colspan=3>Empathy Towards Customer: CSR sounds sincere about helping the customer, and apologizes for the customer’s experience and inconvenience.</td> <td><b><?php echo $agnt_feedback['empathy_toward_customer'] ?></b></td>
											<td colspan=3>Courtesy: CSR “sounds” helpful, upbeat, friendly, and patient. CSR does not sound indifferent, impatient or frustrated.</td> <td><b><?php echo $agnt_feedback['CSR_sound_helpful'] ?></b></td>
										</tr>
										<tr>
											<td colspan=3>Put On Hold: Asked customer “May I put you on hold” or “Could you hold while I research this further please?” Gains the customers permission. Waits for the customer to respond yes/no.</td> <td><b><?php echo $agnt_feedback['gain_customer_permission'] ?></b></td>
											<td colspan=3>Thanked Customer for Holding: CSR “thanked” customer for holding” upon returning to customer’s call, and apologizes for the hold time.</td> <td><b><?php echo $agnt_feedback['thanks_customer_holding'] ?></b></td>
										</tr>
										<tr>
											<td colspan=3>Hold Time/Reason Appropriate/Inappropriate: Was it really necessary for the CSR to put the customer on hold? Should the CSR have been able to look up info while customer was on the line? Was the hold time excessive?</td> <td><b><?php echo $agnt_feedback['hold_time_appropiate'] ?></b></td>
											<td colspan=3>Escalation/Referral Procedures: Utilized established guidelines and procedures/policy from the leadership team.</td> <td><b><?php echo $agnt_feedback['utilized_established_guidelines'] ?></b></td>
										</tr>
										<tr>
											<td colspan=3>Fact Finding: Used probing questions and resources to identify problem.</td> <td><b><?php echo $agnt_feedback['use_probing_question'] ?></b></td>
											<td colspan=3>Verbally Verified Problem Reported: Clearly defined and restated needs reported by the customer.</td> <td><b><?php echo $agnt_feedback['verbally_verfied_problem'] ?></b></td>
										</tr>
										<tr>
											<td colspan=3>Managed Customer Expectations: Regarding the order of the product and the shipping time. Ask customer's critical needs and offers possible temporary or backup alternative solution.</td> <td><b><?php echo $agnt_feedback['manage_customer_expectation'] ?></b></td>
											<td colspan=3>Explained: Reason for troubleshooting for possible resolution.</td> <td><b><?php echo $agnt_feedback['reason_for_troubleshooting'] ?></b></td>
										</tr>
										<tr>
											<td colspan=3>Used Available Resources Well: Referred to knowledge, training, or other resource programs for order/troubleshooting.</td> <td><b><?php echo $agnt_feedback['use_available_resources'] ?></b></td>
											<td colspan=3>Complete & Accurate Customer Documentation: Complete description of the order and/or the troubleshooting steps. disabled fields were completed correctly. Notes were added.</td> <td><b><?php echo $agnt_feedback['complete_customer_documentation'] ?></b></td>
										</tr>
										<tr>
											<td colspan=3>Trial Close: Confirmed customer is comfortable with outcome. Example: "Do you have any questions Sir/Madam on what we just covered?"</td> <td><b><?php echo $agnt_feedback['customer_comfortable_with_outcome'] ?></b></td>
											<td colspan=3>Additional Needs Uncovered: CSR asked, "Is there anything else that I can assist you with today?"</td> <td><b><?php echo $agnt_feedback['additional_needs_uncovered'] ?></b></td>
										</tr>
										<tr>
											<td colspan=3>Upsale: Ask customer if the product completely serves their needs. Suggest an upgrade or additional products, and educated the customer with some basic information.</td> <td><b><?php echo $agnt_feedback['product_served_their_needs'] ?></b></td>
											<td colspan=3>Used Correct Closing/ Gave Customer Order Number: “Mr./Ms./Mrs., I would like to thank you for ordering with “NuWave", your order number is ####, and you have a wonderful day.</td> <td><b><?php echo $agnt_feedback['used_correct_closing'] ?></b></td>
										</tr>
										<tr style="background-color:#EDBB99">
											<td>Infractions</td><td><b><?php echo $agnt_feedback['infractions'] ?></b></td>
											<td>Sub-Infractions</td><td colspan=3><b><?php echo $agnt_feedback['sub_infractions'] ?></b></td>
										</tr>
										<tr>
											<td>Call Summary:</td> <td colspan=3><b><?php echo $agnt_feedback['call_summary'] ?></b></td>
											<td>Feedback:</td> <td colspan=3><b><?php echo $agnt_feedback['feedback'] ?></b></td>
										</tr>
										<?php if($agnt_feedback['attach_file']!=''){ ?>
										<tr oncontextmenu="return false;">
											<td colspan=3>Audio Files</td>
											<td colspan=5>
												<?php $attach_file = explode(",",$agnt_feedback['attach_file']);
												 foreach($attach_file as $mp){ ?>
													<audio controls='' style="background-color:#607F93">
													  <source src="<?php echo base_url(); ?>qa_files/qa_ameridial/nuwave/<?php echo $mp; ?>" type="audio/ogg">
													  <source src="<?php echo base_url(); ?>qa_files/qa_ameridial/nuwave/<?php echo $mp; ?>" type="audio/mpeg">
													</audio> </br>
												 <?php } ?>
											</td>
										</tr>
										<?php } ?>

									<?php }else if($campaign=='sabal'){ ?>

										<tr><td>Overall Score:</td> <td><b><?php echo $agnt_feedback['overall_score'].'%'; ?></b></td></tr>
										<tr>
											<td colspan=4>PARAMETER</td>
											<td>RATING</td>
											<td>COMMENTS/NOTES</td>
										</tr>
										<tr>
											<td rowspan=3>Greeting</td>
											<td colspan=3>Did the agent ask for the individual by "Mr. or Mrs. Last Name?" (Not by first name)</td> <td><b><?php echo $agnt_feedback['agentaskIndividualName'] ?></b></td>
											<td><?php echo $agnt_feedback['cmt1'] ?></td>
										</tr>
										<tr>
											<td colspan=3>Did the agent introduce him/herself?</td> <td><b><?php echo $agnt_feedback['agentIntroduceHimHerself'] ?></b></td>
											<td><?php echo $agnt_feedback['cmt2'] ?></td>
										</tr>
										<tr>
											<td colspan=3>Did the agent state he/she is a Customer Service Specialist for WellCare?</td> <td><b><?php echo $agnt_feedback['agentStateCustomerService'] ?></b></td>
											<td><?php echo $agnt_feedback['cmt3'] ?></td>
										</tr>
										<tr>
											<td rowspan=3>Call Flow</td>
											<td colspan=3>Did the agent apologize for the unannounced phone call and state reason for the call?</td> <td><b><?php echo $agnt_feedback['agentApologizePhoneCall'] ?></b></td>
											<td><?php echo $agnt_feedback['cmt4'] ?></td>
										</tr>
										<tr>
											<td colspan=3>Did the agent ask how the individual's Rx plan is currently working for him/her and respond with the appropriate scripted response?</td> <td><b><?php echo $agnt_feedback['agentIndividualRXplan'] ?></b></td>
											<td><?php echo $agnt_feedback['cmt5'] ?></td>
										</tr>
										<tr>
											<td colspan=3>Did the agent read the listed examples of benefits they could add? </br>
														• Comprehensive Dental </br>
														• Complete Vision </br>
														• Extensive Hearing </br>
														• Transportation </br>
														• Free membership to fitness centers and some even come with a free Fitbit!</td> <td><b><?php echo $agnt_feedback['agentReadListedExample'] ?></b></td>
											<td><?php echo $agnt_feedback['cmt6'] ?></td>
										</tr>
										<tr>
											<td rowspan=3>Data Collection</td>
											<td colspan=3>Did the agent ask for the individual's red, white and blue card and explain why this was needed?</td> <td><b><?php echo $agnt_feedback['agentAskIndividualColorCard'] ?></b></td>
											<td><?php echo $agnt_feedback['cmt7'] ?></td>
										</tr>
										<tr>
											<td colspan=3>Did the agent ask for the individual's updated Medicare ID, and accurately record the inforamtion? </td> <td><b><?php echo $agnt_feedback['agentAskIndividualUpdate'] ?></b></td>
											<td><?php echo $agnt_feedback['cmt8'] ?></td>
										</tr>
										<tr>
											<td colspan=3>Did the agent ask for the individual's Part A effective date and accurately record the information? </td> <td><b><?php echo $agnt_feedback['agentAskIndividualEffectiveDate'] ?></b></td>
											<td><?php echo $agnt_feedback['cmt9'] ?></td>
										</tr>
										<tr>
											<td rowspan=3>Rebuttals</td>
											<td colspan=3>Did the agent use correct rebuttal is individual doesn't want to give ID over the phone?</td> <td><b><?php echo $agnt_feedback['agentUseCorrectRebuttal'] ?></b></td>
											<td><?php echo $agnt_feedback['cmt10'] ?></td>
										</tr>
										<tr>
											<td colspan=3>Did the agent use scripting if the individual wants to know the cost to him/her?</td> <td><b><?php echo $agnt_feedback['agentUseIndividualScript'] ?></b></td>
											<td><?php echo $agnt_feedback['cmt11'] ?></td>
										</tr>
										<tr>
											<td colspan=3>Did the agent use correct rebuttal if the agent says he/she is not interested?</td> <td><b><?php echo $agnt_feedback['agentSaysHeShenotInterested'] ?></b></td>
											<td><?php echo $agnt_feedback['cmt12'] ?></td>
										</tr>
										<tr>
											<td rowspan=4>Auto-Fail (Automatic Zero)</td>
											<td colspan=3 style="color:red">***Did the agent abruptly end the call or display any rude behavior?</td> <td><b><?php echo $agnt_feedback['agentAbruptlyEndCall'] ?></b></td>
											<td><?php echo $agnt_feedback['cmt13'] ?></td>
										</tr>
										<tr>
											<td colspan=3 style="color:red">***Did the agent become argumentative with the individual?</td> <td><b><?php echo $agnt_feedback['agentbecomeUrgumentative'] ?></b></td>
											<td><?php echo $agnt_feedback['cmt14'] ?></td>
										</tr>
										<tr>
											<td colspan=3 style="color:red">***Did the agent record the incorrect Medicare member's information?</td> <td><b><?php echo $agnt_feedback['agentRecordIncirrectMedicare'] ?></b></td>
											<td><?php echo $agnt_feedback['cmt15'] ?></td>
										</tr>
										<tr>
											<td colspan=3 style="color:red">***Did agent provide any false or misleading information?</td> <td><b><?php echo $agnt_feedback['agentProvideFalseInformation'] ?></b></td>
											<td><?php echo $agnt_feedback['cmt16'] ?></td>
										</tr>
										<tr>
											<td>Call Summary:</td> <td colspan=3><b><?php echo $agnt_feedback['call_summary'] ?></b></td>
											<td>Feedback:</td> <td colspan=3><b><?php echo $agnt_feedback['feedback'] ?></b></td>
										</tr>
										<?php if($agnt_feedback['attach_file']!=''){ ?>
										<tr oncontextmenu="return false;">
											<td colspan=3>Audio Files</td>
											<td colspan=5>
												<?php $attach_file = explode(",",$agnt_feedback['attach_file']);
												 foreach($attach_file as $mp){ ?>
													<audio controls='' style="background-color:#607F93">
													  <source src="<?php echo base_url(); ?>qa_files/qa_ameridial/sabal/<?php echo $mp; ?>" type="audio/ogg">
													  <source src="<?php echo base_url(); ?>qa_files/qa_ameridial/sabal/<?php echo $mp; ?>" type="audio/mpeg">
													</audio> </br>
												 <?php } ?>
											</td>
										</tr>
										<?php } ?>

									<?php }else if($campaign=='curative'){ ?>

										<tr><td>Overall Score:</td> <td><b><?php echo $agnt_feedback['overall_score'].'%'; ?></b></td></tr>
										<tr>
											<td colspan=4>PARAMETER</td>
											<td>RATING</td>
											<td>COMMENTS/NOTES</td>
										</tr>
										<tr>
											<td rowspan=3>Greeting</td>
											<td colspan=3>1.1 Did the rep greet the customer promptly and properly?</td> <td><b><?php echo $agnt_feedback['greetCustomerProperly'] ?></b></td>
											<td><?php echo $agnt_feedback['cmt1'] ?></td>
										</tr>
										<tr>
											<td colspan=3>1.2 Did the rep use a pleasant, respectful tone?</td> <td><b><?php echo $agnt_feedback['useRespectfulTone'] ?></b></td>
											<td><?php echo $agnt_feedback['cmt2'] ?></td>
										</tr>
										<tr>
											<td colspan=3>1.3 Did the rep answer in a timely manner? (within 5 seconds)</td> <td><b><?php echo $agnt_feedback['answerInTimelyManner'] ?></b></td>
											<td><?php echo $agnt_feedback['cmt3'] ?></td>
										</tr>
										<tr>
											<td rowspan=7>HIPAA/Verification ***(auto-fails)***</td>
											<td colspan=3>2.1 Did the rep collect and verify the customers information appropriately and accurately? (Name, DOB)</td> <td><b><?php echo $agnt_feedback['verifyCustomerInformation'] ?></b></td>
											<td><?php echo $agnt_feedback['cmt4'] ?></td>
										</tr>
										<tr>
											<td colspan=3>2.2 Did the rep verify patient’s PHI (name, email, phone number, address, email address) is entered correctly in Patient Portal?</td> <td><b><?php echo $agnt_feedback['verifyPatientPHI'] ?></b></td>
											<td><?php echo $agnt_feedback['cmt5'] ?></td>
										</tr>
										<tr>
											<td colspan=3>2.3 Did the agent accurately send the email regarding correct use of all PHI?</td> <td><b><?php echo $agnt_feedback['accidentalIncorrectInformation'] ?></b></td>
											<td><?php echo $agnt_feedback['cmt7'] ?></td>
										</tr>
										<tr>
											<td colspan=3>2.4 Did the agent escalate to Tier 2 when necessary? (i.e.-Helpscout ticket tag "Tier 2 Escalation") Test Cancelled</td> <td><b><?php echo $agnt_feedback['agentEscalateTier2Correctly'] ?></b></td>
											<td><?php echo $agnt_feedback['cmt8'] ?></td>
										</tr>
										<tr>
											<td colspan=3>2.5 Did the agent respect the patient's privacy and provide results only to the verified caller?</td> <td><b><?php echo $agnt_feedback['agentRespectPatientPrivacy'] ?></b></td>
											<td><?php echo $agnt_feedback['cmt9'] ?></td>
										</tr>
										<tr>
											<td colspan=3>2.6 Did the agent ensure the email address was correct prior to sending the email message and only send to the verified caller?</td> <td><b><?php echo $agnt_feedback['agentEnsureEmailAddress'] ?></b></td>
											<td><?php echo $agnt_feedback['cmt20'] ?></td>
										</tr>
										<tr>
											<td rowspan=9>Soft Skills</td>
											<td colspan=3>3.1 Did the agent speak clearly, concisely and at an appropriate pace?</td> <td><b><?php echo $agnt_feedback['agentSpeakConcisely'] ?></b></td>
											<td><?php echo $agnt_feedback['cmt10'] ?></td>
										</tr>
										<tr>
											<td colspan=3>3.2 Did the agent avoid use of internal terms, technical terms, slang and jargon on the call and in email?</td> <td><b><?php echo $agnt_feedback['agentAvoidInternalTerms'] ?></b></td>
											<td><?php echo $agnt_feedback['cmt11'] ?></td>
										</tr>
										<tr>
											<td colspan=3>3.3 Did the agent demonstrate a strong use of empathy in responses where disabled on the call and in email?</td> <td><b><?php echo $agnt_feedback['agentDemonstrateEmpathyUse'] ?></b></td>
											<td><?php echo $agnt_feedback['cmt12'] ?></td>
										</tr>
										<tr>
											<td colspan=3>3.4 Did the agent use "please" and "thank you" throughout the call and in email communication?</td> <td><b><?php echo $agnt_feedback['agentUsePleaseThankyou'] ?></b></td>
											<td><?php echo $agnt_feedback['cmt13'] ?></td>
										</tr>
										<tr>
											<td colspan=3>3.5 Did the agent minimize extended silences throughout the call?</td> <td><b><?php echo $agnt_feedback['agentMinimizeExtendedSilence'] ?></b></td>
											<td><?php echo $agnt_feedback['cmt14'] ?></td>
										</tr>
										<tr>
											<td colspan=3>3.6 Did the agent speak with sincere warmth in his/her voice?</td> <td><b><?php echo $agnt_feedback['agentSpeakWarmthVoice'] ?></b></td>
											<td><?php echo $agnt_feedback['cmt15'] ?></td>
										</tr>
										<tr>
											<td colspan=3>3.7 Did the agent use correct sentence structure and grammar in email commumnication?</td> <td><b><?php echo $agnt_feedback['agentUseCorrectSentence'] ?></b></td>
											<td><?php echo $agnt_feedback['cmt21'] ?></td>
										</tr>
										<tr>
											<td colspan=3>3.8 Did the agent demonstrate patience with the caller?</td> <td><b><?php echo $agnt_feedback['agentDemonstrateCallerPatient'] ?></b></td>
											<td><?php echo $agnt_feedback['cmt16'] ?></td>
										</tr>
										<tr>
											<td colspan=3>3.9 Did the caller give the agent a KUDOS or express happiness with the rep?</td> <td><b><?php echo $agnt_feedback['callerGaveAgentKUDOS'] ?></b></td>
											<td><?php echo $agnt_feedback['cmt22'] ?></td>
										</tr>
										<tr>
											<td rowspan=5>Closing</td>
											<td colspan=3>4.1 Did the rep accurately and completely document the call?</td> <td><b><?php echo $agnt_feedback['repCompletlyCallDocument'] ?></b></td>
											<td><?php echo $agnt_feedback['cmt17'] ?></td>
										</tr>
										<tr>
											<td colspan=3>4.2 Did the rep complete the correct confirmation and closing?</td> <td><b><?php echo $agnt_feedback['repConfirmCompleteClosing'] ?></b></td>
											<td><?php echo $agnt_feedback['cmt18'] ?></td>
										</tr>
										<tr>
											<td colspan=3>4.3 Did the rep thank the caller before closing?</td> <td><b><?php echo $agnt_feedback['thankCallerBeforeClosing'] ?></b></td>
											<td><?php echo $agnt_feedback['cmt19'] ?></td>
										</tr>
										<tr>
											<td colspan=3>4.4 Did the agent provide accurate results? (Positive/Negative/Inconclusive, etc.)</td> <td><b><?php echo $agnt_feedback['repDoEverythingPossible'] ?></b></td>
											<td><?php echo $agnt_feedback['cmt23'] ?></td>
										</tr>
										<tr>
											<td colspan=3>4.5 Did the rep anticipate the caller's needs? (to avoid unecessary callbacks or confusion)</td> <td><b><?php echo $agnt_feedback['repAncipateCallerNeed'] ?></b></td>
											<td><?php echo $agnt_feedback['cmt24'] ?></td>
										</tr>
										<tr>
											<td colspan=3>4.6 Did the rep do everything possible to assist the caller?</td> <td><b><?php echo $agnt_feedback['agentProvideAccurateResult'] ?></b></td>
											<td><?php echo $agnt_feedback['cmt6'] ?></td>
										</tr>
										<tr>
											<td>Call Summary:</td> <td colspan=3><b><?php echo $agnt_feedback['call_summary'] ?></b></td>
											<td>Feedback:</td> <td colspan=3><b><?php echo $agnt_feedback['feedback'] ?></b></td>
										</tr>
										<?php if($agnt_feedback['attach_file']!=''){ ?>
										<tr oncontextmenu="return false;">
											<td colspan=3>Audio Files</td>
											<td colspan=5>
												<?php $attach_file = explode(",",$agnt_feedback['attach_file']);
												 foreach($attach_file as $mp){ ?>
													<audio controls='' style="background-color:#607F93">
													  <source src="<?php echo base_url(); ?>qa_files/qa_ameridial/curative/<?php echo $mp; ?>" type="audio/ogg">
													  <source src="<?php echo base_url(); ?>qa_files/qa_ameridial/curative/<?php echo $mp; ?>" type="audio/mpeg">
													</audio> </br>
												 <?php } ?>
											</td>
										</tr>
										<?php } ?>

									<?php }elseif ($campaign=='episource') { ?>

										<tr><td>Overall Score:</td> <td><b><?php echo $agnt_feedback['overall_score'].'%'; ?></b></td></tr>
										<tr>
											<td colspan=7>Sub Category</td>
											<td>Status</td>
										</tr>
										<tr>

											<td colspan=7>Did the agent provide the appropriate introduction per the campaign scripting?</td> <td><b><?php echo $agnt_feedback['identifynameatbeginning'] ?></b></td>
										</tr>
										<tr>
											<td colspan=7>Did the agent provide a clear reason for the call and the benefits of the visit by using the script?</td> <td><b><?php echo $agnt_feedback['completeinformationtaken'] ?></b></td>
										</tr>
										<tr>
											<td colspan=7>Did the agent accurately respond to the member’s questions/objections and then ask for the appointment?</td> <td><b><?php echo $agnt_feedback['askforpaymentonphone'] ?></b></td>
										</tr>
										<tr>
											<td colspan=7>Did the agent allow the member to speak uninterrupted / avoid talking over the member?</td> <td><b><?php echo $agnt_feedback['askforpostdelaypayment'] ?></b></td>
										</tr>
										<tr>
											<td colspan=7>Did the agent avoid long periods of silence, advise member what they are doing and the expected wait time?</td> <td><b><?php echo $agnt_feedback['accountforfollowupcall'] ?></b></td>
										</tr>
										<tr>
											<td colspan=7>Did the agent ask to schedule the visit.</td> <td><b><?php echo $agnt_feedback['splitbalanceinpart'] ?></b></td>
										</tr>
										<tr>
											<td colspan=7>Did the agent verify,confirm and provide all the information per the script in order to schedule the member?</td> <td><b><?php echo $agnt_feedback['offersumsettlement'] ?></b></td>
										</tr>
										<tr>
											<td colspan=7>Did the agent include all relevant details for the appointment including location or telehealth text confirmation?</td> <td><b><?php echo $agnt_feedback['paymentplanwithpayment'] ?></b></td>
										</tr>
										<tr>
											<td colspan=7>Did the agent verify the full address, contact number/cellphone number for telehealth, and document any member details that are to be updated and/or corrected?</td> <td><b><?php echo $agnt_feedback['collectorfollowpropernegotiation'] ?></b></td>
										</tr>
										<tr>
											<td colspan=7>Did the agent advise member to take note of all confirmation details, including, date, time, provider name, call back # number?</td> <td><b><?php echo $agnt_feedback['collectortrynegotiatepayment'] ?></b></td>
										</tr>
										<tr>
											<td colspan=7>Did the agent accurately document notes to NP?</td> <td><b><?php echo $agnt_feedback['offergoodfaithpayment'] ?></b></td>
										</tr>
										<tr>
											<td colspan=7>Did the agent provide two response attempts to overcome the member's objections to scheduling the visit?</td> <td><b><?php echo $agnt_feedback['makeanyfalserepresentation'] ?></b></td>
										</tr>
										<tr>
											<td colspan=7>Did the agent advise of a reminder call 24-48 hours prior to the appointment or, if telehealth did the agent advise of the confirmation text 24 hours prior to the appointment</td> <td><b><?php echo $agnt_feedback['contactcustomerusualtime'] ?></b></td>
										</tr>
										<tr>
											<td colspan=7>Did the agent provide a fitting  closing for each call.</td> <td><b><?php echo $agnt_feedback['misrepresentidentity'] ?></b></td>
										</tr>
										<tr>
											<td colspan=7>Did the agent status and document Salesforce correctly?</td> <td><b><?php echo $agnt_feedback['discussoflegalaction'] ?></b></td>
										</tr>
										<tr>
											<td colspan=7>Did the agent advise the member he/she was on a recorded line?</td> <td><b><?php echo $agnt_feedback['confirmauthoriseduser'] ?></b></td>
										</tr>
										<tr>
											<td colspan=7>Did the agent follow verification requirements for the script?</td> <td><b><?php echo $agnt_feedback['recapthecallverify'] ?></b></td>
										</tr>
										<tr>
											<td colspan=7>Did the agent maintain security of PHI and abide by HIPAA requirements?</td> <td><b><?php echo $agnt_feedback['properpaymentscript'] ?></b></td>
										</tr>
										<tr>
											<td colspan=7>Did the agent Inappropriately release the call prior ot providing an approptiate closing?</td> <td><b><?php echo $agnt_feedback['paymentprocessingfee'] ?></b></td>
										</tr>
										<tr>
											<td colspan=7>Did the agent perform any unauthorized action on a member profile.  I.E altering a phone number unless the member has stated the preferred contact number?</td> <td><b><?php echo $agnt_feedback['obtainpermissionfromconsumer'] ?></b></td>
										</tr>
										<tr>
											<td colspan=7>Did the agent knowingly providing false information on a member call to secure an appointment?</td> <td><b><?php echo $agnt_feedback['educatetheconsumer'] ?></b></td>
										</tr>
										<tr>
											<td colspan=7>Did the agent place blame, use profanity, or exhibit any non-businesslike behavior?</td> <td><b><?php echo $agnt_feedback['consumerconfirmationcode'] ?></b></td>
										</tr>
										<tr>
											<td>Call Summary:</td> <td colspan=3><b><?php echo $agnt_feedback['call_summary'] ?></b></td>
											<td>Feedback:</td> <td colspan=3><b><?php echo $agnt_feedback['feedback'] ?></b></td>
										</tr>

									<?php }elseif ($campaign=='magnilife') { ?>

										<tr><td>Overall Score:</td> <td><b><?php echo $agnt_feedback['overall_score'].'%'; ?></b></td></tr>
										<tr>
											<td colspan=7>Sub Category</td>
											<td>Status</td>
										</tr>
										<tr>

											<td colspan=7>Greeting (Agent complied with greeting mentioned Brand and call reason )</td> <td><b><?php echo $agnt_feedback['identifynameatbeginning'] ?></b></td>
										</tr>
										<tr>
											<td colspan=7>Enthusiasm (Agent sounds with enthusiasm good energy when speaking)</td> <td><b><?php echo $agnt_feedback['assurancetsatementverbatim'] ?></b></td>
										</tr>
										<tr>
											<td colspan=7>Clarity (Agent demonstrate a good level of grammar pronunciation pace and confidence at the time of speaking)</td> <td><b><?php echo $agnt_feedback['msbFinancial'] ?></b></td>
										</tr>
										<tr>
											<td colspan=7>Professionalism (listening skills phone etiquette maintain call control and ethics agent's ethics)</td> <td><b><?php echo $agnt_feedback['speakingtorightparty'] ?></b></td>
										</tr>
										<tr>
											<td colspan=7>Product knowledge (Agent answers product  questions  sounds as a product expert)</td> <td><b><?php echo $agnt_feedback['SbSResolution'] ?></b></td>
										</tr>
										<tr>
											<td colspan=7>Accuracy (Agent provides accurate product information to the customer avoid providing false expectation/information to the customer)</td> <td><b><?php echo $agnt_feedback['demographicsinformation'] ?></b></td>
										</tr>
										<tr>
											<td colspan=7>Efficiency (Agent works effectively during the call to complete the purpose of the call )</td> <td><b><?php echo $agnt_feedback['minimirandadisclosure'] ?></b></td>
										</tr>
										<tr>
											<td colspan=7>System Knowledge (Agent demonstrates program knowledge)</td> <td><b><?php echo $agnt_feedback['statetheclientname'] ?></b></td>
										</tr>
										<tr>
											<td colspan=7>Offer Information (Agents read offer information to the customer including price and features with good and clear pace)</td> <td><b><?php echo $agnt_feedback['askforbalancedue'] ?></b></td>
										</tr>
										<tr>
											<td colspan=7>Purchase confirmation (Agent confirms purchase information including prices provides confirmation number to the customer)</td> <td><b><?php echo $agnt_feedback['completeinformationtaken'] ?></b></td>
										</tr>
										<tr>
											<td>Call Summary:</td> <td colspan=3><b><?php echo $agnt_feedback['call_summary'] ?></b></td>
											<td>Feedback:</td> <td colspan=3><b><?php echo $agnt_feedback['feedback'] ?></b></td>
										</tr>

									<?php }elseif ($campaign=='blains') { ?>

										<tr><td>Overall Score:</td> <td><b><?php echo $agnt_feedback['overall_score'].'%'; ?></b></td></tr>
										<tr style="height:45px">
										<td class="eml2">Category</td>
										<td class="eml2" colspan=4>Sub Category</td>
										<td class="eml2" style="width:150px">Status</td>
										<td class="eml2" colspan=4>Remarks</td>
										</tr>
										
										<tr>
										<td rowspan=2 class="eml1">Introduction and Call Path Procedure</td>
										<td class="eml" colspan=4>Call opening with Brand Name 
										</td>
										<td><b><?php echo $agnt_feedback['brand_name'] ?></b></td>
										<td colspan=2><?php echo $agnt_feedback['cmt1'] ?></td>
									</tr>

									<tr>
										<td class="eml" colspan=4>Customer's name at least once</td>
										<td>
											<?php echo $agnt_feedback['least_once'] ?>
										</td>
										<td colspan=2><?php echo $agnt_feedback['cmt2'] ?></td>
									</tr>
										
										<tr>
										<td rowspan=5 class="eml1">Script and FAQ's</td>
										<td class="eml" colspan=4>Verified the customer's name,address,email and phone number</td>
										<td>
											<?php echo $agnt_feedback['phone_number'] ?>
										</td>
									<td colspan=2><?php echo $agnt_feedback['cmt3'] ?></td></tr>
									<tr>
										<td class="eml" colspan=4>Correct use of Flagging & Notating</td>
										<td>
											<?php echo $agnt_feedback['flagging_notating'] ?>
										</td>
									<td colspan=2>
										<?php echo $agnt_feedback['cmt4'] ?></td></tr>
									<tr>
										<td class="eml" colspan=4>Transfer to store if required</td>
										<td>
											<?php echo $agnt_feedback['if_required'] ?>
											
										</td>
									<td colspan=2>
										<?php echo $agnt_feedback['cmt5'] ?></td></tr>
									<tr>
										<td class="eml" colspan=4>Did the agent follow training docs along with ACP and Blains Website</td>
										<td>
											<?php echo $agnt_feedback['blains_website'] ?>
											
										</td>
									<td colspan=2><?php echo $agnt_feedback['cmt6'] ?></td></tr>
									<tr>
										<td class="eml" colspan=4>Integrity, Accountability, Teamwork, and Results.</td>
										<td>
											<?php echo $agnt_feedback['and_results'] ?>
											
										</td>
									<td colspan=2><?php echo $agnt_feedback['cmt7'] ?></td></tr>
									<tr>
										<td rowspan=5 class="eml1">Tone and Professionalism</td>
										<td class="eml" colspan=4>Demonstrates an attitude with every customer encounter through words and actions to show the customer respect and recgnition. </td>
										<td>
											<?php echo $agnt_feedback['and_recgnition'] ?>
											
										</td>
									<td colspan=2><?php echo $agnt_feedback['cmt8'] ?></td></tr>
									<tr>
										<td class="eml" colspan=4>Did the agent avoid dead air</td>
										<td>
											<?php echo $agnt_feedback['dead_air'] ?>
											
										</td>
									<td colspan=2>
										<?php echo $agnt_feedback['cmt9'] ?></td></tr>
									<tr>
										<td class="eml" colspan=4>Tone, Over talking and pacing</td>
										<td>
											<?php echo $agnt_feedback['and_pacing'] ?>
											
										</td>
									<td colspan=2><?php echo $agnt_feedback['cmt10'] ?></td></tr>

									<tr>
										<td class="eml" colspan=4>Listening to the words a customer is speaking and understanding the request.</td>
										<td>
											<?php echo $agnt_feedback['the_request'] ?>
											
										</td>
									<td colspan=2><?php echo $agnt_feedback['cmt11'] ?></td></tr>

									<tr>
										<td class="eml" colspan=4>Empathized with customer</td>
										<td>
											<?php echo $agnt_feedback['with_customer'] ?>
											
										</td>
									<td colspan=2><?php echo $agnt_feedback['cmt12'] ?></td></tr>

									<tr>
										<td rowspan=1 class="eml1">E-Alerts and Upselling</td>
										<td class="eml" colspan=4>Offering more items to the customer when an order is placed, or signing up for newsletter when the time is right.</td>
										<td>
											<?php echo $agnt_feedback['time_is_right'] ?>
											
										</td>
									<td colspan=2><?php echo $agnt_feedback['cmt13'] ?></td></tr>

									<tr>
										<td rowspan=1 class="eml1">Closing Script</td>
										<td class="eml" colspan=4>Did the agent close the call properly</td>
										<td>
											<?php echo $agnt_feedback['call_properly'] ?>
											
										</td>
									<td colspan=2><?php echo $agnt_feedback['cmt14'] ?></td></tr>

											<td>Call Summary:</td> <td colspan=3><b><?php echo $agnt_feedback['call_summary'] ?></b></td>
											<td>Feedback:</td> <td colspan=3><b><?php echo $agnt_feedback['feedback'] ?></b></td>
										</tr>

									<?php }elseif ($campaign=='pajamagram') { ?>

										<tr><td>Overall Score:</td> <td><b><?php echo $agnt_feedback['overall_score'].'%'; ?></b></td></tr>
										<tr>
											<td colspan=7>Sub Category</td>
											<td>Status</td>
										</tr>
										<tr>

											<td colspan=7>Caller is ready and logged in to website to handle call  </td> <td><b><?php echo $agnt_feedback['identifynameatbeginning'] ?></b></td>
										</tr>
										<tr>
											<td colspan=7>Greet caller and Thank them for calling Pajamagram or Vermont Teddy Bear</td> <td><b><?php echo $agnt_feedback['assurancetsatementverbatim'] ?></b></td>
										</tr>
										<tr>
											<td colspan=7>Ask caller what can we order for them today</td> <td><b><?php echo $agnt_feedback['msbFinancial'] ?></b></td>
										</tr>
										<tr>
											<td colspan=7>Verify all  caller and product information</td> <td><b><?php echo $agnt_feedback['speakingtorightparty'] ?></b></td>
										</tr>
										<tr>
											<td colspan=7>Assist search if caller doesn’t know specific item</td> <td><b><?php echo $agnt_feedback['SbSResolution'] ?></b></td>
										</tr>
										<tr>
											<td colspan=7>Offer personalization if available</td> <td><b><?php echo $agnt_feedback['demographicsinformation'] ?></b></td>
										</tr>
										<tr>
											<td colspan=7>Offer Upsell</td> <td><b><?php echo $agnt_feedback['minimirandadisclosure'] ?></b></td>
										</tr>
										<tr>
											<td colspan=7>Ask for additional items</td> <td><b><?php echo $agnt_feedback['statetheclientname'] ?></b></td>
										</tr>
										<tr>
											<td colspan=7>Confirm email and phone number</td> <td><b><?php echo $agnt_feedback['askforbalancedue'] ?></b></td>
										</tr>
										<tr>
											<td colspan=7>Energy/enthusiasm</td> <td><b><?php echo $agnt_feedback['completeinformationtaken'] ?></b></td>
										</tr>
										<tr>
											<td colspan=7>Proper pace</td> <td><b><?php echo $agnt_feedback['askforpaymentonphone'] ?></b></td>
										</tr>
										<tr>
											<td colspan=7>Maintained control of the conversation/Minimal Dead Air</td> <td><b><?php echo $agnt_feedback['askforpostdelaypayment'] ?></b></td>
										</tr>
										<tr>
											<td colspan=7>Spoke clearly/utilized proper grammar (NO SLANG)</td> <td><b><?php echo $agnt_feedback['accountforfollowupcall'] ?></b></td>
										</tr>
										<tr>
											<td colspan=7>Good listening skills/Does not interrupt</td> <td><b><?php echo $agnt_feedback['promisetopayaccount'] ?></b></td>
										</tr>
										<tr>
											<td colspan=7>Empathized with caller</td> <td><b><?php echo $agnt_feedback['splitbalanceinpart'] ?></b></td>
										</tr>
										<tr>
											<td colspan=7>Overall professionalism</td> <td><b><?php echo $agnt_feedback['offersumsettlement'] ?></b></td>
										</tr>
										<tr>
											<td colspan=7>Ask for Priority code if caller has catalog</td> <td><b><?php echo $agnt_feedback['paymentplanwithpayment'] ?></b></td>
										</tr>
										<tr>
											<td colspan=7>Enter advertising source from CRM screen or ask caller for it</td> <td><b><?php echo $agnt_feedback['collectorfollowpropernegotiation'] ?></b></td>
										</tr>
										<tr>
											<td colspan=7>Close call with order confirmaiton and Thank caller for their order</td> <td><b><?php echo $agnt_feedback['pajamaCloseCall'] ?></b></td>
										</tr>
										<tr>
											<td colspan=7>False/inappropriate information</td> <td><b><?php echo $agnt_feedback['pajamaFalseInfo'] ?></b></td>
										</tr>
										<tr>
											<td colspan=7>Hung up inappropriately</td> <td><b><?php echo $agnt_feedback['pajamaHungUp'] ?></b></td>
										</tr>
										<tr>
											<td colspan=7>Unprofessional, or rude behavior</td> <td><b><?php echo $agnt_feedback['pajamaUnproBehavior'] ?></b></td>
										</tr>
										<tr>
											<td colspan=7>Inappropriate language</td> <td><b><?php echo $agnt_feedback['pajamaInapLang'] ?></b></td>
										</tr>
										<tr>
											<td>Call Summary:</td> <td colspan=3><b><?php echo $agnt_feedback['call_summary'] ?></b></td>
											<td>Feedback:</td> <td colspan=3><b><?php echo $agnt_feedback['feedback'] ?></b></td>
										</tr>

									<?php }elseif ($campaign=='delta') { ?>
										<tr><td>Overall Score:</td> <td><b><?php echo $agnt_feedback['overall_score'].'%'; ?></b></td></tr>
										<tr>
											<td colspan=7>Sub Category</td>
											<td>Status</td>
										</tr>
										<tr>
											<td colspan=7>1.1 Did CER appropriately greet the caller? (Introduce him/herself and offer assistance) </td> <td><b><?php echo $agnt_feedback['identifynameatbeginning'] ?></b></td>
										</tr>
										<tr>
											<td colspan=7>1.2 Did CER use a pleasant, respectful tone and use the caller's name at least once during the call?   </td> <td><b><?php echo $agnt_feedback['assurancetsatementverbatim'] ?></b></td>
										</tr>
										<tr>
											<td colspan=7>1.3 Did CER answer in a timely manner? (within 5 seconds)</td> <td><b><?php echo $agnt_feedback['msbFinancial'] ?></b></td>
										</tr>
										<tr>
											<td colspan=7>2.1 Did CER obtain 3 pieces of PHI? (See Guidelines Tab for details)</td> <td><b><?php echo $agnt_feedback['speakingtorightparty'] ?></b></td>
										</tr>
										<tr>
											<td colspan=7>2.2 Did CER obtain member's information first and then provider's if on provider call?</td> <td><b><?php echo $agnt_feedback['SbSResolution'] ?></b></td>
										</tr>
										<tr>
											<td colspan=7>2.3 If Non-Covered Parent, did the caller answer yes to all 3 questions on Guidelines tab?</td> <td><b><?php echo $agnt_feedback['demographicsinformation'] ?></b></td>
										</tr>
										<tr>
											<td colspan=7>3.1 Did CER ask appropriate questions to determine the purpose of the call?</td> <td><b><?php echo $agnt_feedback['minimirandadisclosure'] ?></b></td>
										</tr>
										<tr>
											<td colspan=7>3.2 Did CER assess all information before responding to the caller? (BVN)</td> <td><b><?php echo $agnt_feedback['statetheclientname'] ?></b></td>
										</tr>
										<tr>
											<td colspan=7>3.3 Did CER pose appropriate questions to clarify the caller's issue? (Restate Issue) </td> <td><b><?php echo $agnt_feedback['askforbalancedue'] ?></b></td>
										</tr>
										<tr>
											<td colspan=7>3.4 Did CER utilize active listening skills throughout the inquiry? (Caller did not have to repeat themselves)</td> <td><b><?php echo $agnt_feedback['completeinformationtaken'] ?></b></td>
										</tr>
										<tr>
											<td colspan=7>3.5 Did CER demonstrate use of call control techniques?</td> <td><b><?php echo $agnt_feedback['askforpaymentonphone'] ?></b></td>
										</tr>
										<tr>
											<td colspan=7>3.6 Did CER refrain from interrupting the caller?</td> <td><b><?php echo $agnt_feedback['askforpostdelaypayment'] ?></b></td>
										</tr>
										<tr>
											<td colspan=7>4.1 Did CER speak clearly and concisely and at an appropriate pace?</td> <td><b><?php echo $agnt_feedback['accountforfollowupcall'] ?></b></td>
										</tr>
										<tr>
											<td colspan=7>4.2 Did CER avoid use of internal terms, technical terms, slang and jargon?</td> <td><b><?php echo $agnt_feedback['promisetopayaccount'] ?></b></td>
										</tr>
										<tr>
											<td colspan=7>4.3 Did CER demonstrate confidence in responses?</td> <td><b><?php echo $agnt_feedback['splitbalanceinpart'] ?></b></td>
										</tr>
										<tr>
											<td colspan=7>4.5 Did CER minimize silences and use fillers to obtain additional information? (no more than 10 secs of consecutive dead air throughtout the entire call.)</td> <td><b><?php echo $agnt_feedback['offersumsettlement'] ?></b></td>
										</tr>
										<tr>
											<td colspan=7>5.1 Did CER provide accurate information and/or demonstrate knowledge of client's benefit programs?</td> <td><b><?php echo $agnt_feedback['paymentplanwithpayment'] ?></b></td>
										</tr>
										<tr>
											<td colspan=7>5.2 Did CER take correct action to resolve the caller's issues?</td> <td><b><?php echo $agnt_feedback['collectorfollowpropernegotiation'] ?></b></td>
										</tr>
										<tr>
											<td colspan=7>5.5 Did CER promote self-service options where appropriate?</td> <td><b><?php echo $agnt_feedback['didcerpromote'] ?></b></td>
										</tr>
										<tr>
											<td colspan=7>5.6 Did CER answer questions clearly and completely?</td> <td><b><?php echo $agnt_feedback['didceranswer'] ?></b></td>
										</tr>
										<tr>
											<td colspan=7>5.7 Was CER proactive by anticipating additional needs of the caller?</td> <td><b><?php echo $agnt_feedback['wascerproactive'] ?></b></td>
										</tr>
										<tr>
											<td colspan=7>6.1 Did CER accurately and completely document the call's outcome?</td> <td><b><?php echo $agnt_feedback['didceraccurately'] ?></b></td>
										</tr>
										<tr>
											<td colspan=7>6.4 Did the CER document the callers phone number, name, call type, CITS code etc.?</td> <td><b><?php echo $agnt_feedback['didcerdocument'] ?></b></td>
										</tr>
										<tr>
											<td colspan=7>6.5 Did CER close CITS if it did not require a follow up?</td> <td><b><?php echo $agnt_feedback['didcerclose'] ?></b></td>
										</tr>
										<tr>
											<td colspan=7>7.1 Did CER confirm resolution of the caller's question?</td> <td><b><?php echo $agnt_feedback['didcerconfirm'] ?></b></td>
										</tr>
										<tr>
											<td colspan=7>7.2 Did CER ask if any additional information could be provided?</td> <td><b><?php echo $agnt_feedback['didcerask'] ?></b></td>
										</tr>
										<tr>
											<td colspan=7>7.4  Did CER thank the individual for calling and release the call within 5 seconds.</td> <td><b><?php echo $agnt_feedback['didcerthank'] ?></b></td>
										</tr>
										<tr>
											<td>Call Summary:</td> <td colspan=3><b><?php echo $agnt_feedback['call_summary'] ?></b></td>
											<td>Feedback:</td> <td colspan=3><b><?php echo $agnt_feedback['feedback'] ?></b></td>
										</tr>

									<?php }else if($campaign=='delta_iowa'){ ?>
										<tr><td>Overall Score:</td> <td><b><?php echo $agnt_feedback['overall_score'].'%'; ?></b></td></tr>
										<tr><td>Greeting</td></tr>
										<tr>
											<td>1.1 Answered the call promptly (within 5 seconds)</td><td><b><?php echo $agnt_feedback['answer_call_promptly'] ?></b></td><td colspan=2><?php echo $agnt_feedback['cmt1'] ?></td>
											<td>1.2 Opens the call properly, obtains caller's name (ex-"May I ask who I'm speaking with?")</td><td><b><?php echo $agnt_feedback['open_call_property'] ?></b></td><td colspan=2><?php echo $agnt_feedback['cmt2'] ?></td>
										</tr>
										<tr>
											<td>1.3 Verifies all identifying information to continue the call</td><td><b><?php echo $agnt_feedback['verify_identify_information'] ?></b></td><td colspan=2><?php echo $agnt_feedback['cmt3'] ?></td>
										</tr>
										<tr><td>Call Handling</td></tr>
										<tr>
											<td>2.1 Adhered to HIPAA/PCI guidelines depending on the type of call and/or the caller's</td><td><b><?php echo $agnt_feedback['adhered_HIPAA'] ?></b></td><td colspan=2><?php echo $agnt_feedback['cmt4'] ?></td>
											<td>2.2 Adhered to Client Policies & Procedures</td><td><b><?php echo $agnt_feedback['adhere_client_policies'] ?></b></td><td colspan=2><?php echo $agnt_feedback['cmt5'] ?></td>
										</tr>
										<tr>
											<td>2.3 Performed the correct actions for the caller</td><td><b><?php echo $agnt_feedback['perform_correct_action'] ?></b></td><td colspan=2><?php echo $agnt_feedback['cmt6'] ?></td>
											<td>2.4 Set approriate expectations (e.g. turnaround time and/or next steps when applicable)</td><td><b><?php echo $agnt_feedback['set_appropiate_expectation'] ?></b></td><td colspan=2><?php echo $agnt_feedback['cmt7'] ?></td>
										</tr>
										<tr>
											<td>2.5 Gave accurate and complete information, educating the customer (correct benefits for plan type, etc.)</td><td><b><?php echo $agnt_feedback['gave_accurate_info'] ?></b></td><td colspan=2><?php echo $agnt_feedback['cmt8'] ?></td>
											<td>2.6 Routed issue to the appropriate department (if applicable)</td><td><b><?php echo $agnt_feedback['routed_issue'] ?></b></td><td colspan=2><?php echo $agnt_feedback['cmt9'] ?></td>
										</tr>
										<tr>
											<td>2.7 Completed all necessary documentation</td><td><b><?php echo $agnt_feedback['complete_documentation'] ?></b></td><td colspan=2><?php echo $agnt_feedback['cmt10'] ?></td>
										</tr>
										<tr><td>Soft Skills</td></tr>
										<tr>
											<td>3.1 Used courtesy phrases like "please" and "thank you" throughout the call</td><td><b><?php echo $agnt_feedback['phrases_courtsey'] ?></b></td><td colspan=2><?php echo $agnt_feedback['cmt11'] ?></td>
											<td>3.2 Used the caller's name at least once during the call</td><td><b><?php echo $agnt_feedback['use_caller_name'] ?></b></td><td colspan=2><?php echo $agnt_feedback['cmt12'] ?></td>
										</tr>
										<tr>
											<td>3.3 Followed acceptable hold and transfer procedures</td><td><b><?php echo $agnt_feedback['hold_and_transfer'] ?></b></td><td colspan=2><?php echo $agnt_feedback['cmt13'] ?></td>
											<td>3.4 Allowed the caller to state the reason for the call</td><td><b><?php echo $agnt_feedback['state_call_reason'] ?></b></td><td colspan=2><?php echo $agnt_feedback['cmt14'] ?></td>
										</tr>
										<tr>
											<td>3.5 Avoided the use of jargon, acronyms and slang</td><td><b><?php echo $agnt_feedback['use_jargon'] ?></b></td><td colspan=2><?php echo $agnt_feedback['cmt15'] ?></td>
											<td>3.6 Allowed the caller to speak without interruption</td><td><b><?php echo $agnt_feedback['allow_caller_speak'] ?></b></td><td colspan=2><?php echo $agnt_feedback['cmt16'] ?></td>
										</tr>
										<tr>
											<td>3.7 Explained all positives of the plan-type without "pushing" the caller to purchase</td><td><b><?php echo $agnt_feedback['positive_plan_type'] ?></b></td><td colspan=2><?php echo $agnt_feedback['cmt17'] ?></td>
											<td>3.8 Stated a willingness to help the caller, usually at the beginning of the call</td><td><b><?php echo $agnt_feedback['willingness_help_caller'] ?></b></td><td colspan=2><?php echo $agnt_feedback['cmt18'] ?></td>
										</tr>
										<tr>
											<td>3.9 Gained agreement with the caller on the proposed solution</td><td><b><?php echo $agnt_feedback['gained_agrrement'] ?></b></td><td colspan=2><?php echo $agnt_feedback['cmt19'] ?></td>
											<td>3.10 Demonstrated an empathetic manner, professional tone; especially when confronted with an angry customer</td><td><b><?php echo $agnt_feedback['emphathetic_manner'] ?></b></td><td colspan=2><?php echo $agnt_feedback['cmt20'] ?></td>
										</tr>
										<tr><td>Closing</td></tr>
										<tr>
											<td>4.1 Closed call by offering further assistance (if disabled) and thanking customer</td><td><b><?php echo $agnt_feedback['closed_call'] ?></b></td><td colspan=2><?php echo $agnt_feedback['cmt21'] ?></td>
											<td>4.2 Resolved and followed through on all actions to resolve the customer's issue</td><td><b><?php echo $agnt_feedback['resolved_customer_issue'] ?></b></td><td colspan=2><?php echo $agnt_feedback['cmt22'] ?></td>
										</tr>
										<tr>
											<td>4.3 Assured customer their concern will be handled to resolution when possible</td><td><b><?php echo $agnt_feedback['assure_customer_comcern'] ?></b></td><td colspan=2><?php echo $agnt_feedback['cmt23'] ?></td>
											<td>4.4 Made an effective attempt to handle a difficult situation</td><td><b><?php echo $agnt_feedback['effective_attempt'] ?></b></td><td colspan=2><?php echo $agnt_feedback['cmt24'] ?></td>
										</tr>
										<tr><td>Auto Fail</td></tr>
										<tr>
											<td>Agent disconnects customer inappropriately</td><td><b><?php echo $agnt_feedback['agent_disconnect_customer'] ?></b></td><td colspan=2><?php echo $agnt_feedback['cmt25'] ?></td>
											<td>Agent transfers customer without notifying customer (must notify and warm transfer)</td><td><b><?php echo $agnt_feedback['agent_transfer_customer'] ?></b></td><td colspan=2><?php echo $agnt_feedback['cmt26'] ?></td>
										</tr>
										<tr>
											<td>Agent uses offensive words or profanity</td><td><b><?php echo $agnt_feedback['agent_use_offensive_word'] ?></b></td><td colspan=2><?php echo $agnt_feedback['cmt27'] ?></td>
											<td>Agent was antagonistic, talked back or talked down to caller</td><td><b><?php echo $agnt_feedback['agent_talked_down_caller'] ?></b></td><td colspan=2><?php echo $agnt_feedback['cmt28'] ?></td>
										</tr>
										<tr>
											<td>Agent discloses confidential information inappropriately</td><td><b><?php echo $agnt_feedback['agent_disclosed_info'] ?></b></td><td colspan=2><?php echo $agnt_feedback['cmt29'] ?></td>
										</tr>
										<tr>
											<td>Call Summary:</td> <td colspan=3><b><?php echo $agnt_feedback['call_summary'] ?></b></td>
											<td>Feedback:</td> <td colspan=3><b><?php echo $agnt_feedback['feedback'] ?></b></td>
										</tr>

									<?php }elseif ($campaign=='brightway_prescreen') { ?>
										<tr><td>Overall Score:</td> <td><b><?php echo $agnt_feedback['overall_score'].'%'; ?></b></td></tr>
										<tr>
											<td colspan=7>Sub Category</td>
											<td>Status</td>
										</tr>
										<tr>

											<td colspan=7>Transfer to </td> <td><b><?php echo $agnt_feedback['transfer_to'] ?></b></td>
										</tr>
										<tr>
											<td colspan=7>Did the associate use the appropriate greeting?</td> <td><b><?php echo $agnt_feedback['associate_use'] ?></b></td>
										</tr>
										<tr>
											<td colspan=7>Was the Pre-Screen template completed correctly?</td> <td><b><?php echo $agnt_feedback['PreScreen_template'] ?></b></td>
										</tr>
										<tr>
											<td colspan=7>Did the associate disposition the call correctly?</td> <td><b><?php echo $agnt_feedback['associate_disposition'] ?></b></td>
										</tr>
										<tr>
											<td colspan=7>Did the associate use the appropriate verbiage, tone, pace, and professionalism?</td> <td><b><?php echo $agnt_feedback['appropriate_verbiage'] ?></b></td>
										</tr>
										<tr>
											<td colspan=7>Did the associate transfer to the correct skill based on the decision flow diagram?</td> <td><b><?php echo $agnt_feedback['correct_skill'] ?></b></td>
										</tr>
										<tr>
											<td colspan=7>Was the caller appropriately authenticated?</td> <td><b><?php echo $agnt_feedback['appropriately_authenticated'] ?></b></td>
										</tr>
										<tr>
											<td colspan=7>If verified and change needed was AMS updated?</td> <td><b><?php echo $agnt_feedback['AMS_updated'] ?></b></td>
										</tr>
										<tr>
											<td>Call Summary:</td> <td colspan=3><b><?php echo $agnt_feedback['call_summary'] ?></b></td>
											<td>Feedback:</td> <td colspan=3><b><?php echo $agnt_feedback['feedback'] ?></b></td>
										</tr>

									<?php }elseif ($campaign=='brightway_evaluation') { ?>
										<tr><td>Overall Score:</td> <td><b><?php echo $agnt_feedback['overall_score'].'%'; ?></b></td></tr>
										<tr>
											<td colspan=7>Sub Category</td>
											<td>Status</td>
										</tr>
										<tr>

											<td colspan=7>Did the CSR use the approved greeting, including Brightway branding, name, customername and policy number, and offer assistance, including verified and captured points ofcontact according to procedure? </td> <td><b><?php echo $agnt_feedback['CSR_greeting'] ?></b></td>
										</tr>
										<tr>
											<td colspan=7>If applicable, did rep advise they were on a recorded line?</td> <td><b><?php echo $agnt_feedback['recorded_line'] ?></b></td>
										</tr>
										<tr>
											<td colspan=7>Did the associate use the appropriate tone, pace, and professionalism while avoidinginsurance jargon?</td> <td><b><?php echo $agnt_feedback['appropriate_tone'] ?></b></td>
										</tr>
										<tr>
											<td colspan=7>Did the associate demonstrate the right level of empathy or sympathy?</td> <td><b><?php echo $agnt_feedback['right_level'] ?></b></td>
										</tr>
										<tr>
											<td colspan=7>Did the associate listen carefully to understand and address the customers needs, askingprobing questions and verbally verify the information obtained and processed?</td> <td><b><?php echo $agnt_feedback['associate_listen'] ?></b></td>
										</tr>
										<tr>
											<td colspan=7>Did the CSR follow the appropriate hold procedure and provide a wrap-up summary,including the CSR’s and caller’s action items?</td> <td><b><?php echo $agnt_feedback['hold_procedure'] ?></b></td>
										</tr>
										<tr>
											<td colspan=7>The associate maintained call control throughout the call by guiding the conversation to stayon topic, avoiding long periods of silence that negatively impacted the call</td> <td><b><?php echo $agnt_feedback['negatively_impacted'] ?></b></td>
										</tr>
										<tr>
											<td colspan=7>All verbal and written information provided by associate to insured and other parties wasclear, accurate and included all relevant information.</td> <td><b><?php echo $agnt_feedback['information_provided'] ?></b></td>
										</tr>
										<tr>
											<td colspan=7>If call was transferred, was the appropriate transfer process followed?</td> <td><b><?php echo $agnt_feedback['call_transferred'] ?></b></td>
										</tr>
										<tr>
											<td colspan=7>If the call was disconnected prior to resolution, did the CSR attempt to contact the callerback to complete the call?</td> <td><b><?php echo $agnt_feedback['prior_resolution'] ?></b></td>
										</tr>
										<tr>
											<td colspan=7>Worked correct policy</td> <td><b><?php echo $agnt_feedback['correct_policy'] ?></b></td>
										</tr>
										<tr>
											<td colspan=7>Created all activities corresponding with the interaction with clear, descriptive notes andfully capture what occurred on the call.</td> <td><b><?php echo $agnt_feedback['fully_capture'] ?></b></td>
										</tr>
										<tr>
											<td colspan=7>Were the correct interaction templates used?</td> <td><b><?php echo $agnt_feedback['interaction_templates'] ?></b></td>
										</tr>
										<tr>
											<td colspan=7>Attached all emails, fax confirmations, and other documents as needed.</td> <td><b><?php echo $agnt_feedback['fax_confirmations'] ?></b></td>
										</tr>
										<tr>
											<td colspan=7>Was the issue or request resolved/completed?</td> <td><b><?php echo $agnt_feedback['request_resolved'] ?></b></td>
										</tr>
										<tr>
											<td colspan=7>Effectively accessed and utilized all appropriate systems and resources to obtaininformation</td> <td><b><?php echo $agnt_feedback['accessed_utilized'] ?></b></td>
										</tr>
										<tr>
											<td colspan=7>If a renewal payment was processed, and there is an open renewal suspense, was thesuspense updated and closed?</td> <td><b><?php echo $agnt_feedback['renewal_payment'] ?></b></td>
										</tr>
										<tr>
											<td colspan=7>Did the associate offer additional assistance, thanked the customer?</td> <td><b><?php echo $agnt_feedback['additional_assistance'] ?></b></td>
										</tr>
										<tr>
											<td colspan=7>Was the customer adversely impacted? (Question is Auto-Fail)</td> <td><b><?php echo $agnt_feedback['customer_adversely_impacted'] ?></b></td>
										</tr>
										<tr>
											<td colspan=7>Were there any additional adverse impacts? (Question is Auto-Fail)</td> <td><b><?php echo $agnt_feedback['additional_adverse_impacts'] ?></b></td>
										</tr>
										<tr>
											<td>Call Summary:</td> <td colspan=3><b><?php echo $agnt_feedback['call_summary'] ?></b></td>
											<td>Feedback:</td> <td colspan=3><b><?php echo $agnt_feedback['feedback'] ?></b></td>
										</tr>

									<?php }elseif($campaign=='airmethod'){ ?>

										<tr><td>Overall Score:</td> <td><b><?php echo $agnt_feedback['overall_score'].'%'; ?></b></td></tr>
										<tr>
											<td colspan=4>PARAMETER</td>
											<td>RATING</td>
											<td>COMMENTS/NOTES</td>
										</tr>
										<tr>
											<td rowspan=3>Greeting</td>
											<td colspan=3>1.1 Did the rep greet the customer promptly and properly?</td> <td><b><?php echo $agnt_feedback['greet_caller_properly'] ?></b></td>
											<td><?php echo $agnt_feedback['cmt1'] ?></td>
										</tr>
										<tr>
											<td colspan=3>1.2 Did the rep use a pleasant, respectful tone?</td> <td><b><?php echo $agnt_feedback['use_respectful_tone'] ?></b></td>
											<td><?php echo $agnt_feedback['cmt2'] ?></td>
										</tr>
										<tr>
											<td colspan=3>1.3 Did the rep answer in a timely manner? (within 5 seconds)</td> <td><b><?php echo $agnt_feedback['answer_timely_manner'] ?></b></td>
											<td><?php echo $agnt_feedback['cmt3'] ?></td>
										</tr>
										<tr>
											<td rowspan=5>Data Collection/Case Details</td>
											<td colspan=3>2.1 Did the rep collect and verify the customers information appropriately and accurately? (Name, Phone Number)</td> <td><b><?php echo $agnt_feedback['collect_verify_customer_info'] ?></b></td>
											<td><?php echo $agnt_feedback['cmt4'] ?></td>
										</tr>
										<tr>
											<td colspan=3>2.2 Did the rep correctly collect caller's work location and store phone number, if available?</td> <td><b><?php echo $agnt_feedback['collect_caller_work_location'] ?></b></td>
											<td><?php echo $agnt_feedback['cmt5'] ?></td>
										</tr>
										<tr>
											<td colspan=3>2.3 Did the agent correctly define Type of Case?</td> <td><b><?php echo $agnt_feedback['correctly_define_case_type'] ?></b></td>
											<td><?php echo $agnt_feedback['cmt6'] ?></td>
										</tr>
										<tr>
											<td colspan=3>2.4 Did the rep correctly mark the Date of Test and Expected Results?</td> <td><b><?php echo $agnt_feedback['correctly_marl_test_date'] ?></b></td>
											<td><?php echo $agnt_feedback['cmt7'] ?></td>
										</tr>
										<tr>
											<td colspan=3>2.5 Did the rep Contact Trace and ensure this case was/was not connected to any others?</td> <td><b><?php echo $agnt_feedback['ensure_contact_trace'] ?></b></td>
											<td><?php echo $agnt_feedback['cmt8'] ?></td>
										</tr>
										<tr>
											<td rowspan=8>Soft Skills</td>
											<td colspan=3>3.1 Did the agent speak clearly, concisely and at an appropriate pace?</td> <td><b><?php echo $agnt_feedback['agent_speak_clearly'] ?></b></td>
											<td><?php echo $agnt_feedback['cmt9'] ?></td>
										</tr>
										<tr>
											<td colspan=3>3.3 Did the agent demonstrate a strong use of empathy in responses where disabled on the call and in email?</td> <td><b><?php echo $agnt_feedback['agent_demonstrate_call_email'] ?></b></td>
											<td><?php echo $agnt_feedback['cmt10'] ?></td>
										</tr>
										<tr>
											<td colspan=3>3.4 Did the agent use "please" and "thank you" throughout the call and in email communication?</td> <td><b><?php echo $agnt_feedback['agent_use_please_through_call'] ?></b></td>
											<td><?php echo $agnt_feedback['cmt11'] ?></td>
										</tr>
										<tr>
											<td colspan=3>3.5 Did the agent minimize extended silences throughout the call?</td> <td><b><?php echo $agnt_feedback['agent_minimize_silence_on_call'] ?></b></td>
											<td><?php echo $agnt_feedback['cmt12'] ?></td>
										</tr>
										<tr>
											<td colspan=3>3.6 Did the agent speak with sincere warmth in his/her voice?</td> <td><b><?php echo $agnt_feedback['agent_speak_sincere_voice'] ?></b></td>
											<td><?php echo $agnt_feedback['cmt13'] ?></td>
										</tr>
										<tr>
											<td colspan=3>3.7 Did the agent use correct sentence structure and grammar in email communication?</td> <td><b><?php echo $agnt_feedback['agent_use_correct_sentence'] ?></b></td>
											<td><?php echo $agnt_feedback['cmt14'] ?></td>
										</tr>
										<tr>
											<td colspan=3>3.8 Did the agent demonstrate patience with the caller on call and in email communication?</td> <td><b><?php echo $agnt_feedback['agent_demonstrate_call_patience'] ?></b></td>
											<td><?php echo $agnt_feedback['cmt15'] ?></td>
										</tr>
										<tr>
											<td colspan=3>3.9 Did the caller give the agent a KUDOS or express happiness with the rep during this call?</td> <td><b><?php echo $agnt_feedback['caller_give_agnet_KUDOS'] ?></b></td>
											<td><?php echo $agnt_feedback['cmt16'] ?></td>
										</tr>
										<tr>
											<td rowspan=5>Status/Condition</td>
											<td colspan=3>4.1 Did the rep accurately and completely document the call?</td> <td><b><?php echo $agnt_feedback['completely_document_call'] ?></b></td>
											<td><?php echo $agnt_feedback['cmt17'] ?></td>
										</tr>
										<tr>
											<td colspan=3>4.2 Did the rep complete the correct confirmation and closing?</td> <td><b><?php echo $agnt_feedback['complete_correct_closing'] ?></b></td>
											<td><?php echo $agnt_feedback['cmt18'] ?></td>
										</tr>
										<tr>
											<td colspan=3>4.3 Did the rep provide the correct instructions based upon the Type of Case? (Symptomatic, Positive, etc.)</td> <td><b><?php echo $agnt_feedback['provide_correct_instruction'] ?></b></td>
											<td><?php echo $agnt_feedback['cmt19'] ?></td>
										</tr>
										<tr>
											<td colspan=3>4.4 Did the rep do everything provide clear, concise direction on isolation or quarantine?</td> <td><b><?php echo $agnt_feedback['provide_clear_concise_direction'] ?></b></td>
											<td><?php echo $agnt_feedback['cmt20'] ?></td>
										</tr>
										<tr>
											<td colspan=3>4.5 Did the rep make appropriate contact to the individual, managers, departments and Supervisors when disabled, and/or email any requested files and Guidance Letters? </td> <td><b><?php echo $agnt_feedback['make_appropiate_contact'] ?></b></td>
											<td><?php echo $agnt_feedback['cmt21'] ?></td>
										</tr>
										<tr>
											<td>Call Summary:</td> <td colspan=3><b><?php echo $agnt_feedback['call_summary'] ?></b></td>
											<td>Feedback:</td> <td colspan=3><b><?php echo $agnt_feedback['feedback'] ?></b></td>
										</tr>

									<?php }elseif($campaign=='airmethod_email'){ ?>

										<tr><td>Overall Score:</td> <td><b><?php echo $agnt_feedback['overall_score'].'%'; ?></b></td></tr>
										<tr style="height:25px; font-weight:bold">
										<td colspan=4></td>
										<td colspan="2">RATING</td>
										<td colspan=2>COMMENTS/NOTES</td>
									</tr>
									<tr><td class="eml" colspan=8>Email  Etiquette ***(auto-fails)***</td></tr>
									<tr>
										<td style="text-align:left;" colspan=4>1.1 Did the agent use appropriate letter structure for all guidance letters and emails?</td>
										<td colspan="2">
											<select class="form-control amd_point" id="" name="data[appropriate_letter_structure]" disabled>
												<option value="">-Select-</option>
												<option amd_val=5 <?php echo $agnt_feedback['appropriate_letter_structure']=='Effective'?"selected":""; ?> value="Effective">Effective</option>
												<option amd_val=5 <?php echo $agnt_feedback['appropriate_letter_structure']=='Unacceptable'?"selected":""; ?> value="Unacceptable">Unacceptable</option>
												<option amd_val=0 <?php echo $agnt_feedback['appropriate_letter_structure']=='N/A'?"selected":""; ?> value="N/A">N/A</option>
											</select>
										</td>
										<td colspan=2><input type="text" class="form-control" name="data[cmt1]" value="<?php echo $agnt_feedback['cmt1']; ?>" disabled></td>
									</tr>
									<tr>
										<td style="text-align:left;" colspan=4>1.2 Did the agent accurately send the email regarding correct use of all client processes (for all situations)?</td>
										<td colspan=2>
											<select class="form-control amd_point" id="" name="data[agent_accurately]" disabled>
												<option value="">-Select-</option>
												<option amd_val=5 <?php echo $agnt_feedback['agent_accurately']=='Effective'?"selected":""; ?> value="Effective">Effective</option>
												<option amd_val=5 <?php echo $agnt_feedback['agent_accurately']=='Unacceptable'?"selected":""; ?> value="Unacceptable">Unacceptable</option>
												<option amd_val=0 <?php echo $agnt_feedback['agent_accurately']=='N/A'?"selected":""; ?> value="N/A">N/A</option>
											</select>
										</td>
										<td colspan=2><input type="text" class="form-control" name="data[cmt2]" value="<?php echo $agnt_feedback['cmt2']; ?>" disabled></td>
									</tr>
									<tr>
										<td style="text-align:left;" colspan=4>1.3 Did the agent verify there are no duplicates in Reliance prior to beginning a case?</td>
										<td colspan=2>
											<select class="form-control amd_point" id="" name="data[reliance_prior]" disabled>
												<option value="">-Select-</option>
												<option amd_val=5 <?php echo $agnt_feedback['reliance_prior']=='Effective'?"selected":""; ?> value="Effective">Effective</option>
												<option amd_val=5 <?php echo $agnt_feedback['reliance_prior']=='Unacceptable'?"selected":""; ?> value="Unacceptable">Unacceptable</option>
												<option amd_val=0 <?php echo $agnt_feedback['reliance_prior']=='N/A'?"selected":""; ?> value="N/A">N/A</option>
											</select>
										</td>
										<td colspan=2><input type="text" class="form-control" name="data[cmt3]" value="<?php echo $agnt_feedback['cmt3']; ?>" disabled></td>
									</tr>
									<tr>
										<td style="text-align:left;" colspan=4>1.4 Did the agent enter all details into Reliance thoroughly and accurately?</td>
										<td colspan=2>
											<select class="form-control amd_point" id="" name="data[reliance_thoroughly]" disabled>
												<option value="">-Select-</option>
												<option amd_val=5 <?php echo $agnt_feedback['reliance_thoroughly']=='Effective'?"selected":""; ?> value="Effective">Effective</option>
												<option amd_val=5 <?php echo $agnt_feedback['reliance_thoroughly']=='Unacceptable'?"selected":""; ?> value="Unacceptable">Unacceptable</option>
												<option amd_val=0 <?php echo $agnt_feedback['reliance_thoroughly']=='N/A'?"selected":""; ?> value="N/A">N/A</option>
											</select>
										</td>
										<td colspan=2><input type="text" class="form-control" name="data[cmt4]" value="<?php echo $agnt_feedback['cmt4']; ?>" disabled></td>
									</tr>
									<tr>
										<td style="text-align:left;" colspan=4>1.5 Did the agent use an accurate response with correct guidance? </td>
										<td colspan=2>
											<select class="form-control amd_point" id="" name="data[accurate_response]" disabled>
												<option value="">-Select-</option>
												<option amd_val=5 <?php echo $agnt_feedback['accurate_response']=='Effective'?"selected":""; ?> value="Effective">Effective</option>
												<option amd_val=5 <?php echo $agnt_feedback['accurate_response']=='Unacceptable'?"selected":""; ?> value="Unacceptable">Unacceptable</option>
												<option amd_val=0 <?php echo $agnt_feedback['accurate_response']=='N/A'?"selected":""; ?> value="N/A">N/A</option>
											</select>
										</td>
										<td colspan=2><input type="text" class="form-control" name="data[cmt5]" value="<?php echo $agnt_feedback['cmt5']; ?>" disabled></td>
									</tr>
									<tr>
										<td style="text-align:left;" colspan=4>1.6 Did the agent respect the patient's privacy and provide results only to the verified recipient?  (ensure the email was sent only to the correct party)</td>
										<td colspan="2">
											<select class="form-control amd_point" id="" name="data[verified_recipient]" disabled>
												<option value="">-Select-</option>
												<option amd_val=5 <?php echo $agnt_feedback['verified_recipient']=='Effective'?"selected":""; ?> value="Effective">Effective</option>
												<option amd_val=5 <?php echo $agnt_feedback['verified_recipient']=='Unacceptable'?"selected":""; ?> value="Unacceptable">Unacceptable</option>
												<option amd_val=0 <?php echo $agnt_feedback['verified_recipient']=='N/A'?"selected":""; ?> value="N/A">N/A</option>
											</select>
										</td>
										<td colspan=2><input type="text" class="form-control" name="data[cmt14]" value="<?php echo $agnt_feedback['cmt14']; ?>" disabled></td>
									</tr>
									<tr><td class="eml" colspan=8>Soft Skills</td></tr>
									<tr>
										<td style="text-align:left;" colspan=4>2.1 Did the agent avoid use of internal terms, technical terms, slang and jargon on the call and in email?</td>
										<td colspan=2>
											<select class="form-control amd_point" id="" name="data[internal_terms]" disabled>
												<option value="">-Select-</option>
												<option amd_val=2 <?php echo $agnt_feedback['internal_terms']=='Effective'?"selected":""; ?> value="Effective">Effective</option>
												<option amd_val=2 <?php echo $agnt_feedback['internal_terms']=='Unacceptable'?"selected":""; ?> value="Unacceptable">Unacceptable</option>
												<option amd_val=0 <?php echo $agnt_feedback['internal_terms']=='N/A'?"selected":""; ?> value="N/A">N/A</option>
											</select>
										</td>
										<td colspan=2><input type="text" class="form-control" name="data[cmt6]" value="<?php echo $agnt_feedback['cmt6']; ?>" disabled></td>
									</tr>
									<tr>
										<td style="text-align:left;" colspan=4>2.2 Did the agent demonstrate a strong use of empathy in responses where disabled on the call and in email (as needed)?</td>
										<td colspan=2>
											<select class="form-control amd_point" id="" name="data[agent_demonstrate]" disabled>
												<option value="">-Select-</option>
												<option amd_val=2 <?php echo $agnt_feedback['agent_demonstrate']=='Effective'?"selected":""; ?> value="Effective">Effective</option>
												<option amd_val=2 <?php echo $agnt_feedback['agent_demonstrate']=='Unacceptable'?"selected":""; ?> value="Unacceptable">Unacceptable</option>
												<option amd_val=0 <?php echo $agnt_feedback['agent_demonstrate']=='N/A'?"selected":""; ?> value="N/A">N/A</option>
											</select>
										</td>
										<td colspan=2><input type="text" class="form-control" name="data[cmt7]" value="<?php echo $agnt_feedback['cmt7']; ?>" disabled></td>
									</tr>
									<tr>
										<td style="text-align:left;" colspan=4>2.3 Did the agent use "please" and "thank you" throughout the email communication?</td>
										<td colspan=2>
											<select class="form-control amd_point" id="" name="data[use_please_and_thankyou]" disabled>
												<option value="">-Select-</option>
												<option amd_val=2 <?php echo $agnt_feedback['use_please_and_thankyou']=='Effective'?"selected":""; ?> value="Effective">Effective</option>
												<option amd_val=2 <?php echo $agnt_feedback['use_please_and_thankyou']=='Unacceptable'?"selected":""; ?> value="Unacceptable">Unacceptable</option>
												<option amd_val=0 <?php echo $agnt_feedback['use_please_and_thankyou']=='N/A'?"selected":""; ?> value="N/A">N/A</option>
											</select>
										</td>
										<td colspan=2><input type="text" class="form-control" name="data[cmt8]" value="<?php echo $agnt_feedback['cmt8']; ?>" disabled></td>
									</tr>
									<tr>
										<td style="text-align:left;" colspan=4>2.4 Did the agent use correct sentence structure and grammar in email communication?</td>
										<td colspan=2>
											<select class="form-control amd_point" id="" name="data[correct_sentence_structure]" disabled>
												<option value="">-Select-</option>
												<option amd_val=2 <?php echo $agnt_feedback['correct_sentence_structure']=='Effective'?"selected":""; ?> value="Effective">Effective</option>
												<option amd_val=2 <?php echo $agnt_feedback['correct_sentence_structure']=='Unacceptable'?"selected":""; ?> value="Unacceptable">Unacceptable</option>
												<option amd_val=0 <?php echo $agnt_feedback['correct_sentence_structure']=='N/A'?"selected":""; ?> value="N/A">N/A</option>
											</select>
										</td>
										<td colspan=2><input type="text" class="form-control" name="data[cmt9]" value="<?php echo $agnt_feedback['cmt9']; ?>" disabled></td>
									</tr>
									<tr>
										<td style="text-align:left;" colspan=4>2.5 Did the agent demonstrate patience with the caller in email communication? (is the agent using the correctly provided verbiage)</td>
										<td colspan=2>
											<select class="form-control amd_point" id="" name="data[email_communication]" disabled>
												<option value="">-Select-</option>
												<option amd_val=2 <?php echo $agnt_feedback['email_communication']=='Effective'?"selected":""; ?> value="Effective">Effective</option>
												<option amd_val=2 <?php echo $agnt_feedback['email_communication']=='Unacceptable'?"selected":""; ?> value="Unacceptable">Unacceptable</option>
												<option amd_val=0 <?php echo $agnt_feedback['email_communication']=='N/A'?"selected":""; ?> value="N/A">N/A</option>
											</select>
										</td>
										<td colspan=2><input type="text" class="form-control" name="data[cmt10]" value="<?php echo $agnt_feedback['cmt10']; ?>" disabled></td>
									</tr>
									<tr><td class="eml" colspan=8>Accuracy</td></tr>
									<tr>
										<td style="text-align:left;" colspan=4>3.1 Did the agent email the correct email group on all responses?</td>
										<td colspan=2>
											<select class="form-control amd_point" id="" name="data[email_the_correct]" disabled>
												<option value="">-Select-</option>
												<option amd_val=2 <?php echo $agnt_feedback['email_the_correct']=='Effective'?"selected":""; ?> value="Effective">Effective</option>
												<option amd_val=2 <?php echo $agnt_feedback['email_the_correct']=='Unacceptable'?"selected":""; ?> value="Unacceptable">Unacceptable</option>
												<option amd_val=0 <?php echo $agnt_feedback['email_the_correct']=='N/A'?"selected":""; ?> value="N/A">N/A</option>
											</select>
										</td>
										<td colspan=2><input type="text" class="form-control" name="data[cmt11]" value="<?php echo $agnt_feedback['cmt11']; ?>" disabled></td>
									</tr>
									<tr>
										<td style="text-align:left;" colspan=4>3.2 Did the agent leave the case "open" until all updates have been received?</td>
										<td colspan=2>
											<select class="form-control amd_point" id="" name="data[leave_the_case]" disabled>
												<option value="">-Select-</option>
												<option amd_val=2 <?php echo $agnt_feedback['leave_the_case']=='Effective'?"selected":""; ?> value="Effective">Effective</option>
												<option amd_val=2 <?php echo $agnt_feedback['leave_the_case']=='Unacceptable'?"selected":""; ?> value="Unacceptable">Unacceptable</option>
												<option amd_val=0 <?php echo $agnt_feedback['leave_the_case']=='N/A'?"selected":""; ?> value="N/A">N/A</option>
											</select>
										</td>
										<td colspan=2><input type="text" class="form-control" name="data[cmt11]" value="<?php echo $agnt_feedback['cmt11']; ?>" disabled></td>
									</tr>
									<tr>
										<td style="text-align:left;" colspan=4>3.3 Did the agent accurately record all data questionnaire feedback into Reliance?</td>
										<td colspan=2>
											<select class="form-control amd_point" id="" name="data[accurately_record]" disabled>
												<option value="">-Select-</option>
												<option amd_val=2 <?php echo $agnt_feedback['accurately_record']=='Effective'?"selected":""; ?> value="Effective">Effective</option>
												<option amd_val=2 <?php echo $agnt_feedback['accurately_record']=='Unacceptable'?"selected":""; ?> value="Unacceptable">Unacceptable</option>
												<option amd_val=0 <?php echo $agnt_feedback['accurately_record']=='N/A'?"selected":""; ?> value="N/A">N/A</option>
											</select>
										</td>
										<td colspan=2><input type="text" class="form-control" name="data[cmt12]" value="<?php echo $agnt_feedback['cmt12']; ?>" disabled></td>
									</tr>
									<tr>
										<td style="text-align:left;" colspan=4>3.4 Did the agent provide timely feedback to any and all emails received?</td>
										<td colspan=2>
											<select class="form-control amd_point" id="" name="data[provide_timely]" disabled>
												<option value="">-Select-</option>
												<option amd_val=2 <?php echo $agnt_feedback['provide_timely']=='Effective'?"selected":""; ?> value="Effective">Effective</option>
												<option amd_val=2 <?php echo $agnt_feedback['provide_timely']=='Unacceptable'?"selected":""; ?> value="Unacceptable">Unacceptable</option>
												<option amd_val=0 <?php echo $agnt_feedback['provide_timely']=='N/A'?"selected":""; ?> value="N/A">N/A</option>
											</select>
										</td>
										<td colspan=2><input type="text" class="form-control" name="data[cmt13]" value="<?php echo $agnt_feedback['cmt13']; ?>" disabled></td>
									</tr>
										<tr>
											<td>Call Summary:</td> <td colspan=3><b><?php echo $agnt_feedback['call_summary'] ?></b></td>
											<td>Feedback:</td> <td colspan=3><b><?php echo $agnt_feedback['feedback'] ?></b></td>
										</tr>

									<?php }else if($campaign=='foodsaver'){ ?>

										<tr><td>Overall Score:</td> <td><b><?php echo $agnt_feedback['overall_score'].'%'; ?></b></td></tr>
										<tr>
											<td colspan=4>PARAMETER</td>
											<td>RATING</td>
											<td>COMMENTS/NOTES</td>
										</tr>
										<tr>
											<td rowspan=2>Greeting</td>
											<td colspan=3>1.1 Did the rep greet the caller promptly and properly with the correct scripted greeting? (Thank you for calling Food Saver, my name is___________ and I'll be helping you with your VS3000 Vacuum Sealing Bonus order Today!)</td> <td><b><?php echo $agnt_feedback['greet_caller_properly'] ?></b></td>
											<td><?php echo $agnt_feedback['cmt1'] ?></td>
										</tr>
										<tr>
											<td colspan=3>1.2 Did the rep use a pleasant, respectful tone?</td> <td><b><?php echo $agnt_feedback['read_entire_script'] ?></b></td>
											<td><?php echo $agnt_feedback['cmt2'] ?></td>
										</tr>
										<tr>
											<td rowspan=6>Rebuttals</td>
											<td colspan=3>2.1 If the caller said no to the initial offer, did the rep use the 1st rebuttal, explaining about the 30-day risk guarantee?</td> <td><b><?php echo $agnt_feedback['caller_no_initial_offer'] ?></b></td>
											<td><?php echo $agnt_feedback['cmt3'] ?></td>
										</tr>
										<tr>
											<td colspan=3>2.2 Did the rep also include the 2nd and 3rd points to explain how FoodSaver preserves to the highest quality and that they can prepare portion meals?</td> <td><b><?php echo $agnt_feedback['preserve_highest_quality'] ?></b></td>
											<td><?php echo $agnt_feedback['cmt4'] ?></td>
										</tr>
										<tr>
											<td colspan=3>2.3 Did the rep ask the question, "Which credit or debit card would you like to use?"</td> <td><b><?php echo $agnt_feedback['rep_ask_question'] ?></b></td>
											<td><?php echo $agnt_feedback['cmt5'] ?></td>
										</tr>
										<tr>
											<td colspan=3>2.4 If the caller said no to this first rebuttal, did the rep use the 2nd rebuttal advising of the lowered price at just $99.99 with free shipping and handling?</td> <td><b><?php echo $agnt_feedback['caller_no_first_rebuttal'] ?></b></td>
											<td><?php echo $agnt_feedback['cmt6'] ?></td>
										</tr>
										<tr>
											<td colspan=3>2.5 If the caller still said no, did the rep advise "We appreciate your call and your interest in FoodSaver…" as in the scripting?</td> <td><b><?php echo $agnt_feedback['caller_no_rep_advise'] ?></b></td>
											<td><?php echo $agnt_feedback['cmt7'] ?></td>
										</tr>
										<tr>
											<td colspan=3>2.6 Did the rep thank the caller for calling today?</td> <td><b><?php echo $agnt_feedback['re_thank_caller'] ?></b></td>
											<td><?php echo $agnt_feedback['cmt8'] ?></td>
										</tr>
										<tr>
											<td rowspan=6>"Yes" to offer</td>
											<td colspan=3>3.1 Did the rep advise of the 2 Pack of 11 x 16 Rolls at $19.99?</td> <td><b><?php echo $agnt_feedback['rep_advise_price_tag'] ?></b></td>
											<td><?php echo $agnt_feedback['cmt9'] ?></td>
										</tr>
										<tr>
											<td colspan=3>3.3 Did the rep ask, "Would you like to add these to your order and confrim how many they want to add?"</td> <td><b><?php echo $agnt_feedback['rep_ask_order_confirmation'] ?></b></td>
											<td><?php echo $agnt_feedback['cmt10'] ?></td>
										</tr>
										<tr>
											<td colspan=3>3.4 Did the rep offer Auto Delivery at a 20% savings? </td> <td><b><?php echo $agnt_feedback['rep_offer_auto_delivary'] ?></b></td>
											<td><?php echo $agnt_feedback['cmt11'] ?></td>
										</tr>
										<tr>
											<td colspan=3>3.5 Did the rep ask if the caller would like to add another Food Saver as a gift?</td> <td><b><?php echo $agnt_feedback['ask_caller_foodsaver_gift'] ?></b></td>
											<td><?php echo $agnt_feedback['cmt12'] ?></td>
										</tr>
										<tr>
											<td colspan=3>3.6 Did the rep ask for an email address? (If caller is hesitant, did the rep let them know we need this to complete the transaction?)</td> <td><b><?php echo $agnt_feedback['rep_ask_email_address'] ?></b></td>
											<td><?php echo $agnt_feedback['cmt13'] ?></td>
										</tr>
										<tr>
											<td colspan=3>3.7 Did the rep ask which credit card the caller will be using? (And advise checks or money orders are not accepted if necessary)</td> <td><b><?php echo $agnt_feedback['rep_ask_about_credit_card'] ?></b></td>
											<td><?php echo $agnt_feedback['cmt14'] ?></td>
										</tr>
										<tr>
											<td rowspan=4>Closure</td>
											<td colspan=3>4.1 Did the rep thank the caller for the order?</td> <td><b><?php echo $agnt_feedback['thank_caller_for_order'] ?></b></td>
											<td><?php echo $agnt_feedback['cmt15'] ?></td>
										</tr>
										<tr>
											<td colspan=3>4.2 Did the rep review the order summary and total cost?</td> <td><b><?php echo $agnt_feedback['review_order_summary'] ?></b></td>
											<td><?php echo $agnt_feedback['cmt16'] ?></td>
										</tr>
										<tr>
											<td colspan=3>4.3 Did the rep ask if there was anything else we could help with?</td> <td><b><?php echo $agnt_feedback['rep_ask_for_help'] ?></b></td>
											<td><?php echo $agnt_feedback['cmt17'] ?></td>
										</tr>
										<tr>
											<td colspan=3>4.4 Did the rep end with a positive statement? (We know you'll love your purchase! Have a great day! Etc.)</td> <td><b><?php echo $agnt_feedback['rep_end_positive_statement'] ?></b></td>
											<td><?php echo $agnt_feedback['cmt18'] ?></td>
										</tr>
										<tr>
											<td rowspan=4>AutoFails</td>
											<td colspan=3 style="color:red">Did the rep enter an incorrect credit card number?</td> <td><b><?php echo $agnt_feedback['enter_incorrect_credit_card'] ?></b></td>
											<td><?php echo $agnt_feedback['cmt19'] ?></td>
										</tr>
										<tr>
											<td colspan=3 style="color:red">Did the rep speak rudely to the caller in any way?</td> <td><b><?php echo $agnt_feedback['rep_speak_rudely'] ?></b></td>
											<td><?php echo $agnt_feedback['cmt20'] ?></td>
										</tr>
										<tr>
											<td colspan=3 style="color:red">Did the rep badger the caller?</td> <td><b><?php echo $agnt_feedback['rep_badger_caller'] ?></b></td>
											<td><?php echo $agnt_feedback['cmt21'] ?></td>
										</tr>
										<tr>
											<td colspan=3 style="color:red">Did the rep disconnect the call without reason?</td> <td><b><?php echo $agnt_feedback['disconnet_call_without_reason'] ?></b></td>
											<td><?php echo $agnt_feedback['cmt22'] ?></td>
										</tr>
										<tr>
											<td>Call Summary:</td> <td colspan=3><b><?php echo $agnt_feedback['call_summary'] ?></b></td>
											<td>Feedback:</td> <td colspan=3><b><?php echo $agnt_feedback['feedback'] ?></b></td>
										</tr>
										<?php if($agnt_feedback['attach_file']!=''){ ?>
										<tr oncontextmenu="return false;">
											<td colspan=3>Audio Files</td>
											<td colspan=5>
												<?php $attach_file = explode(",",$agnt_feedback['attach_file']);
												 foreach($attach_file as $mp){ ?>
													<audio controls='' style="background-color:#607F93">
													  <source src="<?php echo base_url(); ?>qa_files/qa_ameridial/foodsaver/<?php echo $mp; ?>" type="audio/ogg">
													  <source src="<?php echo base_url(); ?>qa_files/qa_ameridial/foodsaver/<?php echo $mp; ?>" type="audio/mpeg">
													</audio> </br>
												 <?php } ?>
											</td>
										</tr>
										<?php } ?>

									<?php }else if($campaign=='sas'){ ?>

									<tr>
										<td>Overall Score:</td> <td><b><?php echo $agnt_feedback['overall_score'].'%'; ?></b></td>
										<td>Compliance Score:</td><td ><input type="text" readonly class="form-control" id="complJiCisScore" name="data[compliance_score_percent]"></td>
										<td>Customer Score:</td><td ><input type="text" readonly class="form-control" id="custJiCisScore" name="data[customer_score_percent]"></td>
										<td>Business Score:</td><td ><input type="text" readonly class="form-control" id="busiJiCisScore" name="data[business_score_percent]"></td>
									</tr>
										<tr>
											<td colspan=2>PARAMETER</td><td>RATING</td><td>COMMENTS/NOTES</td>
											<td colspan=2>PARAMETER</td><td>RATING</td><td>COMMENTS/NOTES</td>
										</tr>
										<tr>
											<td colspan=2>1.1 Did the rep greet the customer promptly?</td><td><b><?php echo $agnt_feedback['greet_customer_properly'] ?></b></td><td><?php echo $agnt_feedback['cmt1'] ?></td>
											<td colspan=2>1.2 Did the rep use the proper scripting for the Greeting?</td><td><b><?php echo $agnt_feedback['use_respectful_tone'] ?></b></td><td><?php echo $agnt_feedback['cmt2'] ?></td>
										</tr>
										<tr>
											<td colspan=2 style="color:red">2.1 Did the agent use any inappropriate language?</td><td><b><?php echo $agnt_feedback['use_inappropiate_language'] ?></b></td><td><?php echo $agnt_feedback['cmt3'] ?></td>
											<td colspan=2 style="color:red">2.2 Did the agent end the call before completing each disabled step?</td><td><b><?php echo $agnt_feedback['end_call_before_complete'] ?></b></td><td><?php echo $agnt_feedback['cmt4'] ?></td>
										</tr>
										<tr>
											<td colspan=2 style="color:red">2.3 Did the agent attempt to give any medical advice?</td><td><b><?php echo $agnt_feedback['give_medical_advise'] ?></b></td><td><?php echo $agnt_feedback['cmt5'] ?></td>
											<td colspan=2 style="color:red">2.4 Did the agent fail to use mute or hold properly? (There should be no background noise)</td><td><b><?php echo $agnt_feedback['did_the_agent_fail'] ?></b></td><td><?php echo $agnt_feedback['cmt16'] ?></td>

										</tr>
										<tr><td colspan=2>3.1 Did the agent have a pleasant tone?</td><td><b><?php echo $agnt_feedback['agent_have_pleasant_tone'] ?></b></td><td><?php echo $agnt_feedback['cmt6'] ?></td></tr>
										<tr>
											<td colspan=2>3.2 Did the agent follow all processes and procedures?</td><td><b><?php echo $agnt_feedback['agent_follow_all_procedure'] ?></b></td><td><?php echo $agnt_feedback['cmt7'] ?></td>
											<td colspan=2>3.3 Did the agent use please and thank you throughout the call?</td><td><b><?php echo $agnt_feedback['agent_use_please_thank'] ?></b></td><td><?php echo $agnt_feedback['cmt8'] ?></td>
										</tr>
										<tr>
											<td colspan=2>3.4 Did the agent schedule the appointment correctly if necessary?</td><td><b><?php echo $agnt_feedback['agent_schedule_appointment'] ?></b></td><td><?php echo $agnt_feedback['cmt9'] ?></td>
											<td colspan=2>3.5 Did the agent minimize extended silences throughout the call?</td><td><b><?php echo $agnt_feedback['agent_minimise_extended_silence'] ?></b></td><td><?php echo $agnt_feedback['cmt10'] ?></td>
										</tr>
										<tr>
											<td colspan=2>3.6 Did the agent answer any and all questions the caller had effectively?</td><td><b><?php echo $agnt_feedback['agent_answer_all_question'] ?></b></td><td><?php echo $agnt_feedback['cmt11'] ?></td>
											<td colspan=2>3.7 Did the agent verify the caller's information? (name, ph #, address, email, etc.)</td>
											<td><b><?php echo $agnt_feedback['did_the_agent_verify_the_caller'] ?></b></td><td><?php echo $agnt_feedback['cmt17'] ?></td>

										</tr>
										<tr><td colspan=2>3.8 Did the agent use the caller's name at least once during the call ?</td>
											<td><b><?php echo $agnt_feedback['agent_use_the_caller'] ?></b></td><td><?php echo $agnt_feedback['cmt18'] ?></td>
											<td colspan=2>4.1 Did the agent close correctly by thanking the caller?</td><td><b><?php echo $agnt_feedback['agent_correct_thinking_caller'] ?></b></td><td><?php echo $agnt_feedback['cmt13'] ?></td></tr>
										<tr>
											<td colspan=2>4.2 Did the agent document appropriately?</td><td><b><?php echo $agnt_feedback['agent_document_appropiately'] ?></b></td><td><?php echo $agnt_feedback['cmt14'] ?></td>
											<td colspan=2>4.3 Did the agent correctly transfer the call (if necessary)?</td><td><b><?php echo $agnt_feedback['agent_correct_call_transfer'] ?></b></td><td><?php echo $agnt_feedback['cmt15'] ?></td>
										</tr>
										<tr>
											<td>Call Summary:</td> <td colspan=3><b><?php echo $agnt_feedback['call_summary'] ?></b></td>
											<td>Feedback:</td> <td colspan=3><b><?php echo $agnt_feedback['feedback'] ?></b></td>
										</tr>
										<?php if($agnt_feedback['attach_file']!=''){ ?>
										<tr oncontextmenu="return false;">
											<td colspan=3>Audio Files</td>
											<td colspan=5>
												<?php $attach_file = explode(",",$agnt_feedback['attach_file']);
												 foreach($attach_file as $mp){ ?>
													<audio controls='' style="background-color:#607F93">
													  <source src="<?php echo base_url(); ?>qa_files/qa_ameridial/sas/<?php echo $mp; ?>" type="audio/ogg">
													  <source src="<?php echo base_url(); ?>qa_files/qa_ameridial/sas/<?php echo $mp; ?>" type="audio/mpeg">
													</audio> </br>
												 <?php } ?>
											</td>
										</tr>
										<?php } ?>

									<?php }else if($campaign=='gap'){ ?>

										<tr><td>Overall Score:</td> <td><b><?php echo $agnt_feedback['overall_score'].'%'; ?></b></td></tr>
										<tr>
											<td colspan=2>PARAMETER</td><td>RATING</td><td>COMMENTS/NOTES</td>

										</tr>
										<tr>
											<td colspan=2>1.1 Did the rep greet the customer promptly and properly?</td><td><b><?php echo $agnt_feedback['greet_customer_properly'] ?></b></td><td><?php echo $agnt_feedback['cmt1'] ?></td>
											<td colspan=2>1.2 Did the rep use a pleasant, respectful tone?</td><td><b><?php echo $agnt_feedback['use_respectful_tone'] ?></b></td><td><?php echo $agnt_feedback['cmt2'] ?></td>
										</tr>
										<tr>
											<td colspan=2 style="color:red">2.1 Did the agent properly identify themselves, GAP, and the purpose of the call at the beginning of the phone call?</td><td><b><?php echo $agnt_feedback['properly_identify_GAP'] ?></b></td><td><?php echo $agnt_feedback['cmt3'] ?></td>
											<td colspan=2 style="color:red">2.2 Did the agent make all disabled disclosures during the sales call?</td><td><b><?php echo $agnt_feedback['make_disclosure_during_call'] ?></b></td><td><?php echo $agnt_feedback['cmt4'] ?></td>
										</tr>
										<tr>
											<td colspan=2 style="color:red">2.3 Did the agent attempt to alter any customer information. In other words, attempting to “get around” the ATPV security features by entering incorrect phone numbers, account numbers, etc.</td><td><b><?php echo $agnt_feedback['alter_customer_information'] ?></b></td><td><?php echo $agnt_feedback['cmt5'] ?></td>
											<td colspan=2 style="color:red">2.4 Did the agent attempt to obtain any customer information that is not part of GAP’s enrollment form (for example, last four of social security number, banking info, etc.)?</td><td><b><?php echo $agnt_feedback['obtain_customer_information'] ?></b></td><td><?php echo $agnt_feedback['cmt6'] ?></td>
										</tr>
										<tr>
											<td colspan=2 style="color:red">2.5 Did the agent pose as customers to complete TPV or play recorded responses to complete TPV?</td><td><b><?php echo $agnt_feedback['pose_customer_to_complete_TPV'] ?></b></td><td><?php echo $agnt_feedback['cmt7'] ?></td>
											<td colspan=2 style="color:red">2.6 Did the agent use any intimidation or undue pressure with the customer?</td><td><b><?php echo $agnt_feedback['use_intimidation_to_customer'] ?></b></td><td><?php echo $agnt_feedback['cmt8'] ?></td>
										</tr>
										<tr>
											<td colspan=2 style="color:red">2.7 Did the agent contact customers that are on the Internal DNC list?</td><td><b><?php echo $agnt_feedback['contact_customer_on_internal_DNC'] ?></b></td><td><?php echo $agnt_feedback['cmt9'] ?></td>
											<td colspan=2 style="color:red">2.8 Did the agent fail to disposition a call as "Do Not Call" when a customer states they do not want to be contacted?</td><td><b><?php echo $agnt_feedback['call_disposition_fail'] ?></b></td><td><?php echo $agnt_feedback['cmt10'] ?></td>
										</tr>
										<tr>
											<td colspan=2 style="color:red">2.9 Did the agent have any Call Center Violations?</td><td><b><?php echo $agnt_feedback['call_center_violation'] ?></b></td><td><?php echo $agnt_feedback['cmt11'] ?></td>
											<td colspan=2 style="color:red">2.10 Did the agent have any Misrepresentation/Deception?</td><td><b><?php echo $agnt_feedback['agent_have_misrepresentation'] ?></b></td><td><?php echo $agnt_feedback['cmt12'] ?></td>
										</tr>
										<tr>
											<td colspan=2 style="color:red">2.11 Did the agent suggest that customer is disabled to choose a competitive energy supplier (they can remain with, or choose to switch back to, the utility)?</td><td><b><?php echo $agnt_feedback['suggest_customer_to_choose_CES'] ?></b></td><td><?php echo $agnt_feedback['cmt13'] ?></td>
											<td colspan=2 style="color:red">2.12 Did the agent represent that the rate guarantees savings?</td><td><b><?php echo $agnt_feedback['represent_rate_guarantees_saving'] ?></b></td><td><?php echo $agnt_feedback['cmt14'] ?></td>
										</tr>
										<tr>
											<td colspan=2>3.1 Did the agent must make clear that he/she does not work for, and is independent of, the utility and any supplier that is not Great American Power?</td><td><b><?php echo $agnt_feedback['make_clear_not_work_GAP'] ?></b></td><td><?php echo $agnt_feedback['cmt15'] ?></td>
											<td colspan=2>3.2 Did the agent properly disclose the rate/kWh and the 0.50 cent daily fee?</td><td><b><?php echo $agnt_feedback['properly_disclose_rate'] ?></b></td><td><?php echo $agnt_feedback['cmt16'] ?></td>
										</tr>
										<tr>
											<td colspan=2>3.3 Did the agent disclose the 36-month term and the term during which the rate/kWh is fixed?</td><td><b><?php echo $agnt_feedback['properly_disclose_36month_term'] ?></b></td><td><?php echo $agnt_feedback['cmt17'] ?></td>
											<td colspan=2>3.4 Did the agent explain that the customer may rescind the contract within 3 business days of receipt of the welcome packet by calling Great American Power at 1-877-215-4140?</td><td><b><?php echo $agnt_feedback['explain_customer_rescind_contact'] ?></b></td><td><?php echo $agnt_feedback['cmt18'] ?></td>
										</tr>
										<tr>
											<td colspan=2>3.5 Did the agent minimize extended silences throughout the call?</td><td><b><?php echo $agnt_feedback['extended_silence_through_call'] ?></b></td><td><?php echo $agnt_feedback['cmt19'] ?></td>
											<td colspan=2>3.6 Did the agent explain that the customer may cancel the agreement at any time without penalty by calling Great American Power at 1-877-215-4140?</td><td><b><?php echo $agnt_feedback['explain_customer_agreement_cencel_without_penalty'] ?></b></td><td><?php echo $agnt_feedback['cmt20'] ?></td>
										</tr>
										<tr>
											<td colspan=2>3.7 Did the agent explain that after the sales call, the customer will be sent an electronic copy of the T&Cs that they must sign in order for the enrollment to be complete?</td><td><b><?php echo $agnt_feedback['explain_customer_send_electronic_copy_after_call'] ?></b></td><td><?php echo $agnt_feedback['cmt21'] ?></td>
											<td colspan=2>3.8 Did the agent demonstrate patience with the caller on call and in email communication?</td><td><b><?php echo $agnt_feedback['agent_demonstrate_patient_on_call'] ?></b></td><td><?php echo $agnt_feedback['cmt22'] ?></td>
										</tr>
										<tr>
											<td colspan=2>4.1 Did the agent advise that the verification representative is NOT AUTHORIZED to answer any questions?</td><td><b><?php echo $agnt_feedback['advise_verification_not_authorised'] ?></b></td><td><?php echo $agnt_feedback['cmt23'] ?></td>
											<td colspan=2>4.2 Did the agent ask if there were any questions he/she could answer before transferring to the verifier?</td><td><b><?php echo $agnt_feedback['answer_question_before_transfering'] ?></b></td><td><?php echo $agnt_feedback['cmt24'] ?></td>
										</tr>
										<tr>
											<td colspan=2>4.3 Did the agent ask if the caller could please hold while he/she gets the verifier on the line?</td><td><b><?php echo $agnt_feedback['ask_caller_hold_line'] ?></b></td><td><?php echo $agnt_feedback['cmt25'] ?></td>
											<td colspan=2>4.4 Did the agent correctly transfer the call?</td><td><b><?php echo $agnt_feedback['agent_correctly_transfer_call'] ?></b></td><td><?php echo $agnt_feedback['cmt26'] ?></td>
										</tr>
										<tr>
											<td>Call Summary:</td> <td colspan=3><b><?php echo $agnt_feedback['call_summary'] ?></b></td>
											<td>Feedback:</td> <td colspan=3><b><?php echo $agnt_feedback['feedback'] ?></b></td>
										</tr>
										<?php if($agnt_feedback['attach_file']!=''){ ?>
										<tr oncontextmenu="return false;">
											<td colspan=3>Audio Files</td>
											<td colspan=5>
												<?php $attach_file = explode(",",$agnt_feedback['attach_file']);
												 foreach($attach_file as $mp){ ?>
													<audio controls='' style="background-color:#607F93">
													  <source src="<?php echo base_url(); ?>qa_files/qa_ameridial/gap/<?php echo $mp; ?>" type="audio/ogg">
													  <source src="<?php echo base_url(); ?>qa_files/qa_ameridial/gap/<?php echo $mp; ?>" type="audio/mpeg">
													</audio> </br>
												 <?php } ?>
											</td>
										</tr>
										<?php } ?>

									<?php }elseif($campaign=='mercy_ship'){ ?>

										<tr><td>Overall Score:</td> <td><b><?php echo $agnt_feedback['overall_score'].'%'; ?></b></td></tr>
										<tr><td colspan=8>Category</td></tr>
										<tr>
											<td colspan=2>Sub Category</td>
											<td>Status</td>
											<td>Comment</td>
											<td colspan=2>Sub Category</td>
											<td>Status</td>
											<td>Comment</td>
										</tr>
										<tr><td colspan=8>Inbound Agent Call Calibration Scoring Matrix - Criteria</td></tr>
										<tr>
											<td colspan=2>Greeting / Closing</td><td><b><?php echo $agnt_feedback['identifynameatbeginning'] ?></b></td><td><b><?php echo $agnt_feedback['cmt1'] ?></b></td>
											<td colspan=2>Smile / Enthusiasm</td><td><b><?php echo $agnt_feedback['assurancetsatementverbatim 	'] ?></b></td><b><?php echo $agnt_feedback['cmt2'] ?></b>
										</tr>
										<tr>
											<td colspan=2>Info Capture / Verification</td><td><b><?php echo $agnt_feedback['msbFinancial'] ?></b></td><td><b><?php echo $agnt_feedback['cmt3'] ?></b></td>
											<td colspan=2>Accuracy of Data Entry in ACDD CRM & Qgiv Payment Processing Page</td><td><b><?php echo $agnt_feedback[' 	speakingtorightparty '] ?></b></td><b><?php echo $agnt_feedback['cmt4'] ?></b>
										</tr>
										<tr>
											<td colspan=2>Acknowledgement or Empathy </td><td><b><?php echo $agnt_feedback['SbSResolution'] ?></b></td><td><b><?php echo $agnt_feedback['cmt5'] ?></b></td>
											<td colspan=3>Appreciation (Donor Services Desire to Volunteer Etc.)</td><td><b><?php echo $agnt_feedback['demographicsinformation'] ?></b></td><b><?php echo $agnt_feedback['cmt6'] ?></b>
										</tr>
										<tr>
											<td colspan=2>Tone / Pace</td><td><b><?php echo $agnt_feedback['minimirandadisclosure'] ?></b></td><td><b><?php echo $agnt_feedback['cmt7'] ?></b></td>
											<td colspan=2>Positive Phrasing</td><td><b><?php echo $agnt_feedback['statetheclientname'] ?></b></td><b><?php echo $agnt_feedback['cmt8'] ?></b>
										</tr>
										<tr>
											<td colspan=2>Script Adherence</td><td><b><?php echo $agnt_feedback['askforbalancedue'] ?></b></td><td><b><?php echo $agnt_feedback['cmt9'] ?></b></td>
											<td colspan=2>Active Listening</td><td><b><?php echo $agnt_feedback['completeinformationtaken'] ?></b></td><b><?php echo $agnt_feedback['cmt10'] ?></b>
										</tr>
										<tr>
											<td colspan=2>Proper Use of Navigational Tools / Help Buttons / FAQs</td><td><b><?php echo $agnt_feedback['vocabulaire'] ?></b></td><td><b><?php echo $agnt_feedback['cmt11'] ?></b></td>
											<td colspan=2>Disposition of Call</td><td><b><?php echo $agnt_feedback['directivite'] ?></b></td><b><?php echo $agnt_feedback['cmt12'] ?></b>
										</tr>
										<tr>
											<td colspan=2>Redirect/Rebuttals</td><td><b><?php echo $agnt_feedback['positivisme'] ?></b></td><td><b><?php echo $agnt_feedback['cmt13'] ?></b></td>
											<td colspan=2>Agent Engagement</td><td><b><?php echo $agnt_feedback['dynamisme'] ?></b></td><b><?php echo $agnt_feedback['cmt14'] ?></b>
										</tr>

									<?php }elseif($campaign=='trapollo'){	?>
										<tr><td>Overall Score:</td> <td><b><?php echo $agnt_feedback['overall_score'].'%'; ?></b></td></tr>
										<tr>
											<td colspan=7>Sub Category</td>
											<td>Status</td>
										</tr>

										<?php
										 for($i=0;$i<$cnt;$i++){
										 	$x=$i;
										 	?>
										<tr>
											<td colspan=7><?php echo $scoreParametername[$x] ?></td>
											 <td><b><?php echo $agnt_feedback[$columname[$x]] ?></b></td>
										</tr>
											<?php } ?>

										<tr>
											<td>Call Summary:</td> <td colspan=3><b><?php echo $agnt_feedback['call_summary'] ?></b></td>
											<td>Feedback:</td> <td colspan=3><b><?php echo $agnt_feedback['feedback'] ?></b></td>
										</tr>

										<?php if($agnt_feedback['attach_file']!=''){ ?>
										<tr oncontextmenu="return false;">
											<td colspan=3>Audio Files</td>
											<td colspan=5>
												<?php $attach_file = explode(",",$agnt_feedback['attach_file']);
												 foreach($attach_file as $mp){ ?>
													<audio controls='' style="background-color:#607F93">
													  <source src="<?php echo base_url(); ?>qa_files/qa_ameridial/trapollo/<?php echo $mp; ?>" type="audio/ogg">
													  <source src="<?php echo base_url(); ?>qa_files/qa_ameridial/trapollo/<?php echo $mp; ?>" type="audio/mpeg">
													</audio> </br>
												 <?php } ?>
											</td>
										</tr>
										<?php }
											echo 'No Uploaded File';
										?>


									<?php }elseif($campaign=='sontiq'){	?>
										<tr><td>Overall Score:</td> <td><b><?php echo $agnt_feedback['overall_score'].'%'; ?></b></td></tr>
										<tr>
											<td colspan=7>Sub Category</td>
											<td>Status</td>
										</tr>

										<?php
										 for($i=0;$i<$cnt;$i++){
										 	$x=$i;
										 	?>
										<tr>
											<td colspan=7><?php echo $scoreParametername[$x] ?></td>
											 <td><b><?php echo $agnt_feedback[$columname[$x]] ?></b></td>
										</tr>
											<?php } ?>


									<?php }elseif($campaign=='ubp'){	?>
										<tr><td>Overall Score:</td> <td><b><?php echo $agnt_feedback['overall_score'].'%'; ?></b></td></tr>
										<tr>
											<td colspan=7>Sub Category</td>
											<td>Status</td>
										</tr>

										<?php
										$j=0;
										 for($i=0;$i<$cnt;$i++){ ?>
										<tr>
											<td colspan=7><?php echo $scoreParametername[$i++] ?></td>
											 <td><b><?php echo $agnt_feedback[$columname[$j++]] ?></b></td>
										</tr>
											<?php } ?>


								<?php }else if($campaign=='suarez'){ ?>

									<tr style="height:25px; font-weight:bold">
										<td colspan=3>PARAMETER</td>
										<td>RATING</td>
										<td colspan=2>COMMENTS/NOTES</td>
									</tr>
									<tr>
										<td rowspan=4>Greeting</td>
										<td colspan=4>Did you answer the call promptly and sound ready to take the call?</td><td><b><?php echo $agnt_feedback['call_promptly_sound_ready'] ?></b></td>
										<td colspan=2><?php echo $agnt_feedback['cmt1'] ?></td>
									</tr>
									<tr>
										<td colspan=4>Was your introduction clear and free of excess Unacceptableise and distraction?</td><td><b><?php echo $agnt_feedback['introduction_clear_noise'] ?></b></td>
										<td colspan=2><?php echo $agnt_feedback['cmt2'] ?></td>
									</tr>
									<tr>
										<td colspan=4>Did you use the correct greeting?</td><td><b><?php echo $agnt_feedback['correct_greeting'] ?></b></td>
										<td colspan=2><?php echo $agnt_feedback['cmt3'] ?></td>
									</tr>
									<tr>
										<td colspan=4>Did you smile and sound friendly, and happy to take the customer’s call?</td><td><b><?php echo $agnt_feedback['friendly_happy'] ?></b></td>
										<td colspan=2><?php echo $agnt_feedback['cmt4'] ?></td>
									</tr>
									<tr>
										<td rowspan=5>Script and Procedure Adherence</td>
										<td colspan=4>Was the drop code captured correctly?</td><td><b><?php echo $agnt_feedback['captured_correctly'] ?></b></td>
										<td colspan=2><?php echo $agnt_feedback['cmt5'] ?></td>
									</tr>
									<tr>
										<td colspan=4>Did you adhere to the script correctly and follow the appropriate decision points?</td><td><b><?php echo $agnt_feedback['script_correctly'] ?></b></td>
										<td colspan=2><?php echo $agnt_feedback['cmt6'] ?></td>
									</tr>
									<tr>
										<td colspan=4>Did you ask for and verify all information correctly?</td><td><b><?php echo $agnt_feedback['information_correctly'] ?></b></td>
										<td colspan=2><?php echo $agnt_feedback['cmt7'] ?></td>
									</tr>
									<tr>
										<td colspan=4>Did you read all disclaimers, and special Unacceptabletes offered in the script?</td><td><b><?php echo $agnt_feedback['disclaimers_offered'] ?></b></td>
										<td colspan=2><?php echo $agnt_feedback['cmt8'] ?></td>
									</tr>
									<tr>
										<td colspan=4>Did you complete the call properly? (Assume the sale)?</td><td><b><?php echo $agnt_feedback['call_properly_sale'] ?></b></td>
										<td colspan=2><?php echo $agnt_feedback['cmt9'] ?></td>
									</tr>
									<tr>
										<td rowspan=6>Sales Ability</td>
										<td colspan=4>Did you sound confident about the product and/or offer?</td><td><b><?php echo $agnt_feedback['sound_confident'] ?></b></td>
										<td colspan=2><?php echo $agnt_feedback['cmt10'] ?></td>
									</tr>
									<tr>
										<td colspan=4>Were all disabled upsells offered correctly?</td><td><b><?php echo $agnt_feedback['upsells_offered_correctly'] ?></b></td>
										<td colspan=2><?php echo $agnt_feedback['cmt11'] ?></td>
									</tr>
									<tr>
										<td colspan=4>Did you go above and beyond the requirements to obtain a sale, additional units or additional upsell opportunity?</td><td><b><?php echo $agnt_feedback['obtain_requirement_scale'] ?></b></td>
										<td colspan=2><?php echo $agnt_feedback['cmt12'] ?></td>
									</tr>
									<tr>
										<td colspan=4>Additional units or additional upselladditional_upsell_opportunity opportunity?</td><td><b><?php echo $agnt_feedback['additional_upsell_opportunity'] ?></b></td>
										<td colspan=2><?php echo $agnt_feedback['cmt13'] ?></td>
									</tr>
									<tr>
										<td colspan=4>Did you control the call without excessive chatting and Unacceptablen-business conversation?</td><td><b><?php echo $agnt_feedback['call_without_excessive'] ?></b></td>
										<td colspan=2><?php echo $agnt_feedback['cmt14'] ?></td>
									</tr>
									<tr>
										<td colspan=4>Did you lose a sale?</td><td><b><?php echo $agnt_feedback['lose_a_sale'] ?></b></td>
										<td colspan=2><?php echo $agnt_feedback['cmt15'] ?></td>
									</tr>
									<tr>
										<td rowspan=5>Soft Skills</td>
										<td colspan=4>Did you appropriately answer the customer’s questions and make every effort to satisfy the customer and the purpose of the call?</td><td><b><?php echo $agnt_feedback['appropriately_answer'] ?></b></td>
										<td colspan=2><?php echo $agnt_feedback['cmt16'] ?></td>
									</tr>
									<tr>
										<td colspan=4>Did the customer have your full attention?/ were you listening while the customer was speaking?</td><td><b><?php echo $agnt_feedback['full_attention'] ?></b></td>
										<td colspan=2><?php echo $agnt_feedback['cmt17'] ?></td>
									</tr>
									<tr>
										<td colspan=4>Were you heard interrupting the customer, raising your voice, or using an unfriendly or unprofessional tone?</td><td><b><?php echo $agnt_feedback['heard_interrupting'] ?></b></td>
										<td colspan=2><?php echo $agnt_feedback['cmt18'] ?></td>
									</tr>
									<tr>
										<td colspan=4>What is the Specialist's impression of customer “temperature” at the END of the call?</td><td><b><?php echo $agnt_feedback['impression_of_customer'] ?></b></td>
										<td colspan=2><?php echo $agnt_feedback['cmt19'] ?></td>
									</tr>
									<tr>
										<td colspan=4>Was there a Unacceptableticeable change in customer "temperature" during the call?</td><td><b><?php echo $agnt_feedback['noticeable_change'] ?></b></td>
										<td colspan=2><?php echo $agnt_feedback['cmt20'] ?></td>
									</tr>
									<tr>
										<td rowspan=5>Additional Details</td>
										<td colspan=4>Did you use hold times appropriately in regard to this call?</td><td><b><?php echo $agnt_feedback['times_appropriately'] ?></b></td>
										<td colspan=2><?php echo $agnt_feedback['cmt21'] ?></td>
									</tr>
									<tr>
										<td colspan=4>Was the order keyed correctly?</td><td><b><?php echo $agnt_feedback['keyed_correctly'] ?></b></td>
										<td colspan=2><?php echo $agnt_feedback['cmt22'] ?></td>
									</tr>
									<tr>
										<td colspan=4>Was there anything regarding this customer’s account or experience that you missed?</td><td><b><?php echo $agnt_feedback['account_or_experience'] ?></b></td>
										<td colspan=2><?php echo $agnt_feedback['cmt23'] ?></td>
									</tr>
									<tr>
										<td colspan=4>On this call, was it obvious that you use your down time to study products, promotions and procedures?</td><td><b><?php echo $agnt_feedback['promotions_and_procedures'] ?></b></td>
										<td colspan=2><?php echo $agnt_feedback['cmt24'] ?></td>
									</tr>
									<tr>
										<td colspan=4>Were you heard saying anything negative or unprofessional in regard to this call, on or off the phone?</td><td><b><?php echo $agnt_feedback['negative_or_unprofessional'] ?></b></td>
										<td colspan=2><?php echo $agnt_feedback['cmt24'] ?></td>
									</tr>
									<tr>
										<td colspan=>Call Summary:</td><td colspan=3><?php echo $agnt_feedback['call_summary'] ?></td>
										<td>Feedback:</td><td colspan=3><?php echo $agnt_feedback['call_summary'] ?></td>
									</tr>
										<?php if($agnt_feedback['attach_file']!=''){ ?>
										<tr oncontextmenu="return false;">
											<td colspan=3>Audio Files</td>
											<td colspan=5>
												<?php $attach_file = explode(",",$agnt_feedback['attach_file']);
												 foreach($attach_file as $mp){ ?>
													<audio controls='' style="background-color:#607F93">
													  <source src="<?php echo base_url(); ?>qa_files/qa_ameridial/suarez/<?php echo $mp; ?>" type="audio/ogg">
													  <source src="<?php echo base_url(); ?>qa_files/qa_ameridial/suarez/<?php echo $mp; ?>" type="audio/mpeg">
													</audio> </br>
												 <?php } ?>
											</td>
										</tr>
										<?php } ?>


									<?php }else if($campaign=='sfe'){ ?>

										<tr><td>Overall Score:</td> <td><b><?php echo $agnt_feedback['overall_score'].'%'; ?></b></td></tr>
										<tr>
											<td colspan=6>PARAMETER</td>
											<td>RATING</td>
											<td>COMMENTS/NOTES</td>
										</tr>
										<tr>
											<td rowspan=2>Greeting</td>
											<td colspan=5>1.1 Did the agent advise who he/she is, who he/she is calling from and who he/she represents?</td> <td><b><?php echo $agnt_feedback['is_agent_advice'] ?></b></td>
											<td><?php echo $agnt_feedback['cmt1'] ?></td>
										</tr>
										<tr>
											<td colspan=5>1.2 Did the agent advise the call is being recorded for quality assurance and training purposes?</td> <td><b><?php echo $agnt_feedback['is_agent_advice_record'] ?></b></td>
											<td><?php echo $agnt_feedback['cmt2'] ?></td>
										</tr>
										<tr>
											<td rowspan=6>Details</td>
											<td colspan=5>2.1 Did the agent provide all program benefits, including rates, explanation and benefits?</td> <td><b><?php echo $agnt_feedback['agent_provide_all_program'] ?></b></td>
											<td><?php echo $agnt_feedback['cmt3'] ?></td>
										</tr>
										<tr>
											<td colspan=5>2.2 Did the agent ask if he/she was speaking with the account holder?</td> <td><b><?php echo $agnt_feedback['agent_speaking_account_holder'] ?></b></td>
											<td><?php echo $agnt_feedback['cmt4'] ?></td>
										</tr>
										<tr>
											<td colspan=5>2.3 Did the agent ask for the address and email?</td> <td><b><?php echo $agnt_feedback['do_ask_addr_email'] ?></b></td>
											<td><?php echo $agnt_feedback['cmt23'] ?></td>
										</tr>
										<tr>
											<td colspan=5>2.4 Did the agent ask if the caller was receiving any government assistance?</td> <td><b><?php echo $agnt_feedback['agent_ask_caller_receiving_govt_assist'] ?></b></td>
											<td><?php echo $agnt_feedback['cmt5'] ?></td>
										</tr>
										<tr>
											<td colspan=5>2.5 Did the agent ask if the caller was 18 years or older?</td> <td><b><?php echo $agnt_feedback['is_caller_18_years_old'] ?></b></td>
											<td><?php echo $agnt_feedback['cmt6'] ?></td>
										</tr>
										<tr>
											<td colspan=5 style="color:red">2.6 Did the agent ask for the address and email?</td> <td><b><?php echo $agnt_feedback['do_ask_addr_email'] ?></b></td>
											<td><?php echo $agnt_feedback['cmt23'] ?></td>
										</tr>
										<tr></tr>
										<tr></tr>
										<tr>
											<td rowspan=6>Soft Skills</td>
											<td colspan=5>3.1 Did the rep sound confident and polite to the person on the phone?</td> <td><b><?php echo $agnt_feedback['is_rep_sound_confident_polite'] ?></b></td>
											<td><?php echo $agnt_feedback['cmt7'] ?></td>
										</tr>
										<tr>
											<td colspan=5>3.2 Did the agent address the caller by name at least once?</td> <td><b><?php echo $agnt_feedback['agent_address_caller'] ?></b></td>
											<td><?php echo $agnt_feedback['cmt8'] ?></td>
										</tr>
										<tr>
											<td colspan=5>3.3 Did the agent use "please" and "thank you" throughout the call?</td> <td><b><?php echo $agnt_feedback['is_agent_use_greeting'] ?></b></td>
											<td><?php echo $agnt_feedback['cmt9'] ?></td>
										</tr>
										<tr>
											<td colspan=5>3.4 Did the agent minimize extended silences throughout the call?</td> <td><b><?php echo $agnt_feedback['is_agent_extended_silence'] ?></b></td>
											<td><?php echo $agnt_feedback['cmt10'] ?></td>
										</tr>
										<tr>
											<td colspan=5>3.5 Did the agent speak clearly?</td> <td><b><?php echo $agnt_feedback['agent_speak_clearly'] ?></b></td>
											<td><?php echo $agnt_feedback['cmt11'] ?></td>
										</tr>
										<tr></tr>
										<tr>
											<td rowspan=6>Rebuttls</td>
											<td colspan=5>3.1 Did the agent use the first rebuttal correctly if the caller was not interested?</td> <td><b><?php echo $agnt_feedback['agent_first_rebuttal_correctly'] ?></b></td>
											<td><?php echo $agnt_feedback['cmt12'] ?></td>
										</tr>
										<tr>
											<td colspan=5>3.2 Did the agent use the second rebuttal correctly if the caller was not interested?</td> <td><b><?php echo $agnt_feedback['agent_second_rebuttal_correctly'] ?></b></td>
											<td><?php echo $agnt_feedback['cmt13'] ?></td>
										</tr>
										<tr>
											<td colspan=5>3.3 Did the agent provide the phone number for call back it the caller was not interested?</td> <td><b><?php echo $agnt_feedback['agent_provide_phone_call_back'] ?></b></td>
											<td><?php echo $agnt_feedback['cmt14'] ?></td>
										</tr>
                                        <tr></tr><tr></tr><tr></tr>
										<tr>
											<td rowspan=6>Closure</td>
											<td colspan=5>4.1 Did the agent advise of the Welcome Package would be sent, including the program details and contact information?</td>
											<td><b><?php echo $agnt_feedback['agent_advice_welcome_package'] ?></b></td>
											<td><?php echo $agnt_feedback['cmt15'] ?></td>
										</tr>
										<tr>
											<td colspan=5>4.2 Did the agent ask for the sale and gain a "yes" before proceeding?</td> <td><b><?php echo $agnt_feedback['agent_ask_for_sale'] ?></b></td>
											<td><?php echo $agnt_feedback['cmt16'] ?></td>
										</tr>
										<tr>
											<td colspan=5>4.3 Did the rep finalize the date for the quote?</td> <td><b><?php echo $agnt_feedback['rep_finalize_date_for_quote'] ?></b></td>
											<td><?php echo $agnt_feedback['cmt17'] ?></td>
										</tr>
										<tr>
											<td colspan=5>4.4 Did the rep take complete, detailed notes?</td> <td><b><?php echo $agnt_feedback['rep_take_complete_notes'] ?></b></td>
											<td><?php echo $agnt_feedback['cmt18'] ?></td>
										</tr>
										<tr></tr><tr></tr>
										<tr>
											<td rowspan=6>AutoFails</td>
											<td colspan=5 style="color:red">4.1 Did the rep proceed with the call without a firm "yes"</td> <td><b><?php echo $agnt_feedback['rep_proceed_call_without_yes'] ?></b></td>
											<td><?php echo $agnt_feedback['cmt19'] ?></td>
										</tr>
										<tr>
											<td colspan=5 style="color:red">4.2 Did the rep provide accurate information?</td> <td><b><?php echo $agnt_feedback['rep_provide_accurate_information'] ?></b></td>
											<td><?php echo $agnt_feedback['cmt20'] ?></td>
										</tr>
										<tr>
											<td colspan=5 style="color:red">4.3 Did the rep mislead the caller in any way?</td> <td><b><?php echo $agnt_feedback['rep_mislead_caller_any_way'] ?></b></td>
											<td><?php echo $agnt_feedback['cmt21'] ?></td>
										</tr>
										<tr>
											<td colspan=5 style="color:red">4.4 Did the rep advise that he/she uses this service?</td> <td><b><?php echo $agnt_feedback['rep_advice_to_uses_service'] ?></b></td>
											<td><?php echo $agnt_feedback['cmt22'] ?></td>
										</tr>
										<tr>
											<td colspan=5 style="color:red">6.5 Did the rep advise that he/she uses this service? (need more detail for this)</td> <td><b><?php echo $agnt_feedback['do_rep_advice_service'] ?></b></td>
											<td><?php echo $agnt_feedback['cmt24'] ?></td>
										</tr>
										<tr></tr><tr></tr>
										<tr>
											<td>Call Summary:</td> <td colspan=3><b><?php echo $agnt_feedback['call_summary'] ?></b></td>
											<td>Feedback:</td> <td colspan=3><b><?php echo $agnt_feedback['feedback'] ?></b></td>
										</tr>
										<?php if($agnt_feedback['attach_file']!=''){ ?>
										<tr oncontextmenu="return false;">
											<td colspan=3>Audio Files</td>
											<td colspan=5>
												<?php $attach_file = explode(",",$agnt_feedback['attach_file']);
												 foreach($attach_file as $mp){ ?>
													<audio controls='' style="background-color:#607F93">
													  <source src="<?php echo base_url(); ?>qa_files/qa_ameridial/sfe/<?php echo $mp; ?>" type="audio/ogg">
													  <source src="<?php echo base_url(); ?>qa_files/qa_ameridial/sfe/<?php echo $mp; ?>" type="audio/mpeg">
													</audio> </br>
												 <?php } ?>
											</td>
										</tr>
										<?php } ?>

								<?php }else if($campaign=='mpc'){ ?>

										<tr><td>Overall Score:</td> <td><b><?php echo $agnt_feedback['overall_score'].'%'; ?></b></td></tr>
										<tr>
											<td colspan=6>PARAMETER</td>
											<td>RATING</td>
											<td>COMMENTS/NOTES</td>
										</tr>
										<tr>
											<td rowspan=2>Greeting</td>
											<td colspan=4>1.1 Did the rep greet the customer promptly and properly?</td> <td><b><?php echo $agnt_feedback['greet_customer_properly'] ?></b></td>
											<td colspan=2><?php echo $agnt_feedback['cmt1'] ?></td>
										</tr>
										<tr>
											<td colspan=4>1.2 Did the rep use a pleasant, respectful tone?</td> <td><b><?php echo $agnt_feedback['use_respectful_tone'] ?></b></td>
											<td colspan=2><?php echo $agnt_feedback['cmt2'] ?></td>
										</tr>
										<tr>
											<td rowspan=4>Verification</td>
											<td colspan=4>2.1 Did the agent properly identify themselves, and ask to speak with the Head of Household/Authorized contact?</td> <td><b><?php echo $agnt_feedback['properly_identify_themselve'] ?></b></td>
											<td colspan=2><?php echo $agnt_feedback['cmt3'] ?></td>
										</tr>
										<tr>
											<td colspan=4>2.2 Did the agent advise that the call is being recorded for quality purposes?</td> <td><b><?php echo $agnt_feedback['call_being_recorded'] ?></b></td>
											<td colspan=2><?php echo $agnt_feedback['cmt4'] ?></td>
										</tr>
										<tr>
											<td colspan=4>2.3 Did the agent attempt to alter any customer information. In other words, attempting to “get around” the ATPV security features by entering incorrect phone numbers, account numbers, etc.</td> <td><b><?php echo $agnt_feedback['alter_customer_information'] ?></b></td>
											<td colspan=2><?php echo $agnt_feedback['cmt5'] ?></td>
										</tr>
										<tr>
											<td colspan=4 style="color:red">2.4 Did the agent violate HIPAA in any way?</td> <td><b><?php echo $agnt_feedback['agent_violate_HIPAA'] ?></b></td>
											<td colspan=2><?php echo $agnt_feedback['cmt6'] ?></td>
										</tr>
										<tr>
											<td rowspan=8>Soft Skills</td>
											<td colspan=4>3.1 Did the agent speak clearly, concisely and at an appropriate pace?</td> <td><b><?php echo $agnt_feedback['agtent_speak_clearly'] ?></b></td>
											<td colspan=2><?php echo $agnt_feedback['cmt7'] ?></td>
										</tr>
										<tr>
											<td colspan=4>3.2 Did the agent avoid use of internal terms, technical terms, slang and jargon on the call and in email?</td> <td><b><?php echo $agnt_feedback['agent_avoid_internal_term'] ?></b></td>
											<td colspan=2><?php echo $agnt_feedback['cmt8'] ?></td>
										</tr>
										<tr>
											<td colspan=4>3.3 Did the agent demonstrate a strong use of empathy in responses where disabled on the call and in email?</td> <td><b><?php echo $agnt_feedback['agent_demonstrate_strong_use'] ?></b></td>
											<td colspan=2><?php echo $agnt_feedback['cmt9'] ?></td>
										</tr>
										<tr>
											<td colspan=4>3.4 Did the agent use "please" and "thank you" throughout the call and in email communication?</td> <td><b><?php echo $agnt_feedback['agent_use_please_thankyou'] ?></b></td>
											<td colspan=2><?php echo $agnt_feedback['cmt10'] ?></td>
										</tr>
										<tr>
											<td colspan=4>3.5 Did the agent minimize extended silences throughout the call?</td> <td><b><?php echo $agnt_feedback['agent_minimize_extended_silence'] ?></b></td>
											<td colspan=2><?php echo $agnt_feedback['cmt11'] ?></td>
										</tr>
										<tr>
											<td colspan=4>3.6 Did the agent speak with sincere warmth in his/her voice?</td> <td><b><?php echo $agnt_feedback['agent_speak_sincere_warmth'] ?></b></td>
											<td colspan=2><?php echo $agnt_feedback['cmt12'] ?></td>
										</tr>
										<tr>
											<td colspan=4>3.7 Did the agent use correct sentence structure and grammar in email commumnication?</td> <td><b><?php echo $agnt_feedback['agent_use_correct_sentence'] ?></b></td>
											<td colspan=2><?php echo $agnt_feedback['cmt13'] ?></td>
										</tr>
										<tr>
											<td colspan=4>3.8 Did the agent demonstrate patience with the caller on call and in email communication?</td> <td><b><?php echo $agnt_feedback['agent_demonstarte_patient'] ?></b></td>
											<td colspan=2><?php echo $agnt_feedback['cmt14'] ?></td>
										</tr>
										<tr>
											<td rowspan=6>Process Flow</td>
											<td colspan=4>4.1 Did the agent advise "Maryland Medicaid has recently informed us that your MPC HealthChoice benefits will expire soon. Once you lose your benefits, you no longer have medical coverage with Maryland Physicians Care (MPC) or MD Medicaid?"</td> <td><b><?php echo $agnt_feedback['agent_advise_maryland_Medicaid'] ?></b></td>
											<td colspan=2><?php echo $agnt_feedback['cmt15'] ?></td>
										</tr>
										<tr>
											<td colspan=4>4.2 Did the agent ask if the caller has recertified for benefits this year? (For all members)</td> <td><b><?php echo $agnt_feedback['agent_ask_caller_rectified'] ?></b></td>
											<td colspan=2><?php echo $agnt_feedback['cmt16'] ?></td>
										</tr>
										<tr>
											<td colspan=4>4.3 Did the agent provide the MPC Customer Service phone number (1-800-953-8854) for questions and concerns if no timeframe was given for last renewal,?</td> <td><b><?php echo $agnt_feedback['agent_provide_MPC_customer_advise'] ?></b></td>
											<td colspan=2><?php echo $agnt_feedback['cmt17'] ?></td>
										</tr>
										<tr>
											<td colspan=4>4.4 Did the agent use "please" and "thank you" throughout the call?</td> <td><b><?php echo $agnt_feedback['agent_use_please_through_call'] ?></b></td>
											<td colspan=2><?php echo $agnt_feedback['cmt18'] ?></td>
										</tr>
										<tr>
											<td colspan=4>4.5 Did the agent transfer to the MD Health Exchange correctly, if applicable?</td> <td><b><?php echo $agnt_feedback['agent_transfer_MD_helthcare'] ?></b></td>
											<td colspan=2><?php echo $agnt_feedback['cmt19'] ?></td>
										</tr>
										<tr>
											<td colspan=4>4.6 If caller did not want to be transferred, did the agent advise : "You can also renew your MPC and Medicaid benefits by calling Maryland Health Connection at 855-642-8572 or online by visiting www.marylandhealthconnection.gov"?</td> <td><b><?php echo $agnt_feedback['agent_advise_Medicaid_benefit'] ?></b></td>
											<td colspan=2><?php echo $agnt_feedback['cmt20'] ?></td>
										</tr>
										<tr>
											<td rowspan=6>Closing</td>
											<td colspan=4>5.1 Did the rep accurately and completely document the call?</td> <td><b><?php echo $agnt_feedback['rep_completely_call_document'] ?></b></td>
											<td colspan=2><?php echo $agnt_feedback['cmt21'] ?></td>
										</tr>
										<tr>
											<td colspan=4>5.2 Did the rep complete the correct confirmation and closing?</td> <td><b><?php echo $agnt_feedback['rep_complete_correct_confirmation'] ?></b></td>
											<td colspan=2><?php echo $agnt_feedback['cmt22'] ?></td>
										</tr>
										<tr>
											<td colspan=4>5.3 Did the rep thank the caller before closing?</td> <td><b><?php echo $agnt_feedback['rep_thank_caller_before_closing'] ?></b></td>
											<td colspan=2><?php echo $agnt_feedback['cmt23'] ?></td>
										</tr>
										<tr>
											<td colspan=4>5.4 Did the rep do everything possible to assist the caller?</td> <td><b><?php echo $agnt_feedback['rep_assist_the_caller'] ?></b></td>
											<td colspan=2><?php echo $agnt_feedback['cmt24'] ?></td>
										</tr>
										<tr>
											<td colspan=4>5.5 Did the rep anticipate the caller's needs? (to avoid unecessary callbacks or confusion)</td> <td><b><?php echo $agnt_feedback['rep_anticipate_caller_need'] ?></b></td>
											<td colspan=2><?php echo $agnt_feedback['cmt25'] ?></td>
										</tr>
										<tr>
											<td>Call Summary:</td> <td colspan=3><b><?php echo $agnt_feedback['call_summary'] ?></b></td>
											<td>Feedback:</td> <td colspan=3><b><?php echo $agnt_feedback['feedback'] ?></b></td>
										</tr>
										<?php if($agnt_feedback['attach_file']!=''){ ?>
										<tr oncontextmenu="return false;">
											<td colspan=3>Audio Files</td>
											<td colspan=5>
												<?php $attach_file = explode(",",$agnt_feedback['attach_file']);
												 foreach($attach_file as $mp){ ?>
													<audio controls='' style="background-color:#607F93">
													  <source src="<?php echo base_url(); ?>qa_files/qa_ameridial/mpc/<?php echo $mp; ?>" type="audio/ogg">
													  <source src="<?php echo base_url(); ?>qa_files/qa_ameridial/mpc/<?php echo $mp; ?>" type="audio/mpeg">
													</audio> </br>
												 <?php } ?>
											</td>
										</tr>
										<?php } ?>

                                <?php }else if($campaign=='brightway_ib_bank'){ ?>

									<tr>
										<td style="font-weight:bold; font-size:16px">Possible Score:</td>
										<td><input type="text" readonly id="possibleScore1" name="data[possible_score]" class="form-control" style="font-weight:bold" value="<?php echo $agnt_feedback['possible_score'] ?>"></td>
										<td style="font-weight:bold; font-size:16px">Earned Score:</td>
										<td><input type="text" readonly id="earnedScore1" name="data[earned_score]" class="form-control" style="font-weight:bold" value="<?php echo $agnt_feedback['earned_score'] ?>"></td>
										<td style="font-weight:bold; font-size:16px; text-align:right">Overall Score:</td>
										<td><input type="text" readonly id="overallScore1" name="data[overall_score]" class="form-control ibbankFatal" style="font-weight:bold" value="<?php echo $agnt_feedback['overall_score'] ?>"></td>
										<td></td><td><b></b></td>
									</tr>
									<tr style="height:25px; font-weight:bold; background-color:#85C1E9">
										<td colspan=3>PARAMETER</td>
										<td></td><td><b></b></td>
										<td>STATUS</td>
										<td colspan=2>COMMENT</td>

									</tr>
									<tr><td colspan=8 style="background-color:#7DCEA0">Call Opening</td></tr>
									<tr>
										<td class="eml1" colspan=5>1. Did the CSR use the approved greeting, including Brightway branding, name, customer name and policy number, and offer assistance?</td>
										<td>
											<select class="form-control ib_point" name="data[did_csr_use_approved_greeting]" disabled>
												<option value="">-Select-</option>
												<option ib_val=2 <?php echo $agnt_feedback['did_csr_use_approved_greeting'] == "Yes"?"selected":"";?> value="Yes">Yes</option>
												<option ib_val=2 <?php echo $agnt_feedback['did_csr_use_approved_greeting'] == "No"?"selected":"";?> value="No">No</option>
												<option ib_val=0 <?php echo $agnt_feedback['did_csr_use_approved_greeting'] == "N/A"?"selected":"";?> value="N/A">N/A</option>
											</select>
										</td>
										<td colspan=2><input type="text" class="form-control" name="data[cmt1]" value="<?php echo $agnt_feedback['cmt1'] ?>" disabled></td>

									</tr>
									<tr>
										<td class="eml1" colspan=5>2. If applicable, did rep advise they were on a recorded line?</td>
										<td>
											<select class="form-control ib_point" name="data[did_applicable_rep_advice]" disabled>
												<option value="">-Select-</option>
												<option ib_val=1 <?php echo $agnt_feedback['did_applicable_rep_advice'] == "Yes"?"selected":"";?> value="Yes">Yes</option>
												<option ib_val=1 <?php echo $agnt_feedback['did_applicable_rep_advice'] == "No"?"selected":"";?> value="No">No</option>
												<option ib_val=0 <?php echo $agnt_feedback['did_applicable_rep_advice'] == "N/A"?"selected":"";?> value="N/A">N/A</option>
											</select>
										</td>
										<td colspan=2><input type="text" class="form-control" name="data[cmt2]" value="<?php echo $agnt_feedback['cmt2'] ?>" disabled></td>

									</tr>
									<tr>
										<td class="eml1" colspan=5>3. Verified and captured points of contact according to procedure.</td>
										<td>
											<select class="form-control ib_point" name="data[verified_captured_point_contact]" disabled>
												<option value="">-Select-</option>
												<option ib_val=2 <?php echo $agnt_feedback['verified_captured_point_contact'] == "Yes"?"selected":"";?> value="Yes">Yes</option>
												<option ib_val=2 <?php echo $agnt_feedback['verified_captured_point_contact'] == "No"?"selected":"";?> value="No">No</option>
												<option ib_val=0 <?php echo $agnt_feedback['verified_captured_point_contact'] == "N/A"?"selected":"";?> value="N/A">N/A</option>
											</select>
										</td>
										<td colspan=2><input type="text" class="form-control" name="data[cmt3]" value="<?php echo $agnt_feedback['cmt3'] ?>" disabled></td>
									</tr>



									<tr><td colspan=8 style="background-color:#7DCEA0">SOFT SKILLS</td></tr>
									<tr>
										<td class="eml1" colspan=5>1. Did the associate use the appropriate tone, pace, and professionalism?</td>
										<td>
											<select class="form-control ib_point" name="data[did_associate_use_tone]" disabled>
												<option value="">-Select-</option>
												<option ib_val=5 <?php echo $agnt_feedback['did_associate_use_tone'] == "Yes"?"selected":"";?> value="Yes">Yes</option>
												<option ib_val=5 <?php echo $agnt_feedback['did_associate_use_tone'] == "No"?"selected":"";?> value="No">No</option>
												<option ib_val=0 <?php echo $agnt_feedback['did_associate_use_tone'] == "N/A"?"selected":"";?> value="N/A">N/A</option>
											</select>
										</td>
										<td colspan=2><input type="text" class="form-control" name="data[cmt4]" value="<?php echo $agnt_feedback['cmt4'] ?>" disabled></td>
									</tr>
									<tr>
										<td class="eml1" colspan=5>2. Did the associate avoid insurance jargon and used proper grammar throughout the call?</td>
										<td>
											<select class="form-control ib_point" name="data[did_associate_avoid_insurance]" disabled>
												<option value="">-Select-</option>
												<option ib_val=3 <?php echo $agnt_feedback['did_associate_avoid_insurance'] == "Yes"?"selected":"";?> value="Yes">Yes</option>
												<option ib_val=3 <?php echo $agnt_feedback['did_associate_avoid_insurance'] == "No"?"selected":"";?> value="No">No</option>
												<option ib_val=0 <?php echo $agnt_feedback['did_associate_avoid_insurance'] == "N/A"?"selected":"";?> value="N/A">N/A</option>
											</select>
										</td>
										<td colspan=2><input type="text" class="form-control" name="data[cmt5]" value="<?php echo $agnt_feedback['cmt5'] ?>" disabled></td>

									</tr>
									<tr>
										<td class="eml1" colspan=5>3. Did the associate demonstrate the right level of empathy or sympathy?</td>
										<td>
											<select class="form-control ib_point" name="data[did_associate_demonstrate]" disabled>
												<option value="">-Select-</option>
												<option ib_val=3 <?php echo $agnt_feedback['did_associate_demonstrate'] == "Yes"?"selected":"";?> value="Yes">Yes</option>
												<option ib_val=3 <?php echo $agnt_feedback['did_associate_demonstrate'] == "No"?"selected":"";?> value="No">No</option>
												<option ib_val=0 <?php echo $agnt_feedback['did_associate_demonstrate'] == "N/A"?"selected":"";?> value="N/A">N/A</option>
											</select>
										</td>
										<td colspan=2><input type="text" class="form-control" name="data[cmt6]" value="<?php echo $agnt_feedback['cmt6'] ?>" disabled></td>

									</tr>
									<tr>
										<td class="eml1" colspan=5>4. Did the associate listen carefully to understand and address the customers needs?</td>
										<td>
											<select class="form-control ib_point" name="data[did_associate_listen_carefully]" disabled>
												<option value="">-Select-</option>
												<option ib_val=5 <?php echo $agnt_feedback['did_associate_listen_carefully'] == "Yes"?"selected":"";?> value="Yes">Yes</option>
												<option ib_val=5 <?php echo $agnt_feedback['did_associate_listen_carefully'] == "No"?"selected":"";?> value="No">No</option>
												<option ib_val=0 <?php echo $agnt_feedback['did_associate_listen_carefully'] == "N/A"?"selected":"";?> value="N/A">N/A</option>
											</select>
										</td>
										<td colspan=2><input type="text" class="form-control" name="data[cmt7]" value="<?php echo $agnt_feedback['cmt7'] ?>" disabled></td>

									</tr>
									<tr>
										<td class="eml1" colspan=5>5. Did the associate ask to place the caller on hold, set proper time expectations, and thank them when returning?</td>
										<td>
											<select class="form-control ib_point" name="data[did_associate_ask_place]" disabled>
												<option value="">-Select-</option>
												<option ib_val=3 <?php echo $agnt_feedback['did_associate_ask_place'] == "0"?"selected":"";?> value="0">0</option>
												<option ib_val=1 ib_val2=3 <?php echo $agnt_feedback['did_associate_ask_place'] == "1"?"selected":"";?> value="1">1</option>
												<option ib_val=2 ib_val2=3 <?php echo $agnt_feedback['did_associate_ask_place'] == "2"?"selected":"";?> value="2">2</option>
												<option ib_val=3 <?php echo $agnt_feedback['did_associate_ask_place'] == "3"?"selected":"";?> value="3">3</option>
												<option ib_val=0 <?php echo $clio['did_associate_ask_place'] == "N/A"?"selected":"";?> value="N/A">N/A</option>
											</select>
										</td>
										<td colspan=2><input type="text" class="form-control" name="data[cmt8]" value="<?php echo $agnt_feedback['cmt8'] ?>" disabled></td>

									</tr>
									<tr>
										<td class="eml1" colspan=5>6. The associate maintained call control throughout the call by guiding the conversation to stay on topic.
										</td>
										<td>
											<select class="form-control ib_point" name="data[associate_maintained_call]" disabled>
												<option value="">-Select-</option>
												<option ib_val=3 <?php echo $agnt_feedback['associate_maintained_call'] == "Yes"?"selected":"";?> value="Yes">Yes</option>
												<option ib_val=3 <?php echo $agnt_feedback['associate_maintained_call'] == "No"?"selected":"";?> value="No">No</option>
												<option ib_val=0 <?php echo $agnt_feedback['associate_maintained_call'] == "N/A"?"selected":"";?> value="N/A">N/A</option>
											</select>
										</td>
										<td colspan=2><input type="text" class="form-control" name="data[cmt9]" value="<?php echo $agnt_feedback['cmt9'] ?>" disabled></td>

									</tr>
									<tr>
										<td class="eml1" colspan=5>7. There was not any silence, dead air, or self talking that had a negative impact on the call.</td>
										<td>
											<select class="form-control ib_point" name="data[not_any_silence_dead_air]" disabled>
												<option value="">-Select-</option>
												<option ib_val=3 <?php echo $agnt_feedback['not_any_silence_dead_air'] == "Yes"?"selected":"";?> value="Yes">Yes</option>
												<option ib_val=3 <?php echo $agnt_feedback['not_any_silence_dead_air'] == "No"?"selected":"";?> value="No">No</option>
												<option ib_val=0 <?php echo $agnt_feedback['not_any_silence_dead_air'] == "N/A"?"selected":"";?> value="N/A">N/A</option>
											</select>
										</td>
										<td colspan=2><input type="text" class="form-control" name="data[cmt10]" value="<?php echo $agnt_feedback['cmt10'] ?>" disabled></td>

									</tr>

									<tr>
										<td class="eml1" colspan=5>8. All verbal and written information provided by associate to insured and other parties was clear, accurate and included all relevant information. (2pts for each)</td>
										<td>
											<select class="form-control ib_point" name="data[all_verbal_written_information]" disabled>
												<option value="">-Select-</option>
												<option ib_val=6 <?php echo $agnt_feedback['all_verbal_written_information'] == "0"?"selected":"";?> value="0">0</option>
												<option ib_val=2 ib_val2=6 <?php echo $agnt_feedback['all_verbal_written_information'] == "2"?"selected":"";?> value="2">2</option>
												<option ib_val=4 ib_val2=6 <?php echo $agnt_feedback['all_verbal_written_information'] == "4"?"selected":"";?> value="4">4</option>
												<option ib_val=6 <?php echo $agnt_feedback['all_verbal_written_information'] == "6"?"selected":"";?> value="Yes">6</option>
												<option ib_val=0 <?php echo $clio['all_verbal_written_information'] == "N/A"?"selected":"";?> value="N/A">N/A</option>
											</select>
										</td>
										<td colspan=2><input type="text" class="form-control" name="data[cmt11]" value="<?php echo $agnt_feedback['cmt11'] ?>" disabled></td>

									</tr>

									</tr><tr><td colspan=8 style="background-color:#7DCEA0">PROCESSES AND PROCEDURES</td></tr>
									<tr>
										<td class="eml1" colspan=5>1. Did the associate ask probing questions and verbally verify the changes requested and information provided?</td>
										<td>
											<select class="form-control ib_point" name="data[did_associate_ask_probing]" disabled>
												<option value="">-Select-</option>
												<option ib_val=5 <?php echo $agnt_feedback['did_associate_ask_probing'] == "Yes"?"selected":"";?> value="Yes">Yes</option>
												<option ib_val=5 <?php echo $agnt_feedback['did_associate_ask_probing'] == "No"?"selected":"";?> value="No">No</option>
												<option ib_val=0 <?php echo $agnt_feedback['did_associate_ask_probing'] == "N/A"?"selected":"";?> value="N/A">N/A</option>
											</select>
										</td>
										<td colspan=2><input type="text" class="form-control" name="data[cmt12]" value="<?php echo $agnt_feedback['cmt12'] ?>" disabled></td>

									</tr>
									<tr>
										<td class="eml1" colspan=5>2. If applicable, was the call warm transferred?</td>
										<td>
											<select class="form-control ib_point" name="data[applicable_call_warn_transferred]" disabled>
												<option value="">-Select-</option>
												<option ib_val=1 <?php echo $agnt_feedback['applicable_call_warn_transferred'] == "Yes"?"selected":"";?> value="Yes">Yes</option>
												<option ib_val=1 <?php echo $agnt_feedback['applicable_call_warn_transferred'] == "No"?"selected":"";?> value="No">No</option>
												<option ib_val=0 <?php echo $agnt_feedback['applicable_call_warn_transferred'] == "N/A"?"selected":"";?> value="N/A">N/A</option>
											</select>
										</td>
										<td colspan=2><input type="text" class="form-control" name="data[cmt13]" value="<?php echo $agnt_feedback['cmt13'] ?>" disabled></td>

									</tr>
									<tr>
										<td class="eml1" colspan=5>3. Expectations provided and time frame for follow up, if any, was met.</td>
										<td>
											<select class="form-control ib_point" name="data[expectation_provided]" disabled>
												<option value="">-Select-</option>
												<option ib_val=2 <?php echo $agnt_feedback['expectation_provided'] == "Yes"?"selected":"";?> value="Yes">Yes</option>
												<option ib_val=2 <?php echo $agnt_feedback['expectation_provided'] == "No"?"selected":"";?> value="No">No</option>
												<option ib_val=0 <?php echo $agnt_feedback['expectation_provided'] == "N/A"?"selected":"";?> value="N/A">N/A</option>
											</select>
										</td>
										<td colspan=2><input type="text" class="form-control" name="data[cmt14]" value="<?php echo $agnt_feedback['cmt14'] ?>" disabled></td>

									</tr>
									<tr>
										<td class="eml1" colspan=5>4. If the call was disconnected prior to resolution, did the CSR attempt to contact the caller back to complete the call?</td>
										<td>
											<select class="form-control ib_point" name="data[if_call_dicconnected_prior]" disabled>
												<option value="">-Select-</option>
												<option ib_val=4 <?php echo $agnt_feedback['if_call_dicconnected_prior'] == "Yes"?"selected":"";?> value="Yes">Yes</option>
												<option ib_val=4 <?php echo $agnt_feedback['if_call_dicconnected_prior'] == "No"?"selected":"";?> value="No">No</option>
												<option ib_val=0 <?php echo $agnt_feedback['if_call_dicconnected_prior'] == "N/A"?"selected":"";?> value="N/A">N/A</option>
											</select>
										</td>
										<td colspan=2><input type="text" class="form-control" name="data[cmt15]" value="<?php echo $agnt_feedback['cmt15'] ?>" disabled></td>

									</tr>
									<tr>
										<td class="eml1" colspan=5>5. Documented correct policy is AMS</td>
										<td>
											<select class="form-control ib_point" name="data[documented_correct_policy]" disabled>
												<option value="">-Select-</option>
												<option ib_val=2 <?php echo $agnt_feedback['documented_correct_policy'] == "Yes"?"selected":"";?> value="Yes">Yes</option>
												<option ib_val=2 <?php echo $agnt_feedback['documented_correct_policy'] == "No"?"selected":"";?> value="No">No</option>
												<option ib_val=0 <?php echo $agnt_feedback['documented_correct_policy'] == "N/A"?"selected":"";?> value="N/A">N/A</option>
											</select>
										</td>
										<td colspan=2><input type="text" class="form-control" name="data[cmt16]" value="<?php echo $agnt_feedback['cmt16'] ?>" disabled></td>

									</tr>
									<tr>
										<td class="eml1" colspan=5>6. Are the notes clear, descriptive and fully capture what occurred on the call so others understand what was discussed and if anything additional is needed?</td>
										<td>
											<select class="form-control ib_point" name="data[are_notes_clear]" disabled>
												<option value="">-Select-</option>
												<option ib_val=5 <?php echo $agnt_feedback['are_notes_clear'] == "Yes"?"selected":"";?> value="Yes">Yes</option>
												<option ib_val=5 <?php echo $agnt_feedback['are_notes_clear'] == "No"?"selected":"";?> value="No">No</option>
												<option ib_val=0 <?php echo $agnt_feedback['are_notes_clear'] == "N/A"?"selected":"";?> value="N/A">N/A</option>
											</select>
										</td>
										<td colspan=2><input type="text" class="form-control" name="data[cmt17]" value="<?php echo $agnt_feedback['cmt17'] ?>" disabled></td>

									</tr>
									<tr>
										<td class="eml1" colspan=5>7. Created all activities corresponding with the interaction.</td>
										<td>
											<select class="form-control ib_point" name="data[created_all_activities]" disabled>
												<option value="">-Select-</option>
												<option ib_val=2 <?php echo $agnt_feedback['created_all_activities'] == "Yes"?"selected":"";?> value="Yes">Yes</option>
												<option ib_val=2 <?php echo $agnt_feedback['created_all_activities'] == "No"?"selected":"";?> value="No">No</option>
												<option ib_val=0 <?php echo $agnt_feedback['created_all_activities'] == "N/A"?"selected":"";?> value="N/A">N/A</option>
											</select>
										</td>
										<td colspan=2><input type="text" class="form-control" name="data[cmt18]" value="<?php echo $agnt_feedback['cmt18'] ?>" disabled></td>
									</tr>
									<tr>
										<td class="eml1" colspan=5>8. Were the correct templates used?</td>
										<td>
											<select class="form-control ib_point" name="data[do_correct_template_used]" disabled>
												<option value="">-Select-</option>
												<option ib_val=2 <?php echo $agnt_feedback['do_correct_template_used'] == "Yes"?"selected":"";?> value="Yes">Yes</option>
												<option ib_val=2 <?php echo $agnt_feedback['do_correct_template_used'] == "No"?"selected":"";?> value="No">No</option>
												<option ib_val=0 <?php echo $agnt_feedback['do_correct_template_used'] == "N/A"?"selected":"";?> value="N/A">N/A</option>
											</select>
										</td>
										<td colspan=2><input type="text" class="form-control" name="data[cmt19]" value="<?php echo $agnt_feedback['cmt19'] ?>" disabled></td>

									</tr>
									<tr>
										<td class="eml1" colspan=5>9. Attached all emails, fax confirmations, and other documents as needed.</td>
										<td>
											<select class="form-control ib_point" name="data[attached_all_email]" disabled>
												<option value="">-Select-</option>
												<option ib_val=2 <?php echo $agnt_feedback['attached_all_email'] == "Yes"?"selected":"";?> value="Yes">Yes</option>
												<option ib_val=2 <?php echo $agnt_feedback['attached_all_email'] == "No"?"selected":"";?> value="No">No</option>
												<option ib_val=0 <?php echo $agnt_feedback['attached_all_email'] == "N/A"?"selected":"";?> value="N/A">N/A</option>
											</select>
										</td>
										<td colspan=2><input type="text" class="form-control" name="data[cmt20]" value="<?php echo $agnt_feedback['cmt20'] ?>" disabled></td>

									</tr>
									<tr>
										<td class="eml1" colspan=5>10. Was the issue or request resolved/completed?</td>
										<td>
											<select class="form-control ib_point" name="data[was_the_issue]" disabled>
												<option value="">-Select-</option>
												<option ib_val=5 <?php echo $agnt_feedback['was_the_issue'] == "Yes"?"selected":"";?> value="Yes">Yes</option>
												<option ib_val=5 <?php echo $agnt_feedback['was_the_issue'] == "No"?"selected":"";?> value="No">No</option>
												<option ib_val=0 <?php echo $agnt_feedback['was_the_issue'] == "N/A"?"selected":"";?> value="N/A">N/A</option>
											</select>
										</td>
										<td colspan=2><input type="text" class="form-control" name="data[cmt21]" value="<?php echo $agnt_feedback['cmt21'] ?>" disabled></td>

									</tr>
									<tr>
										<td class="eml1" colspan=5>11. Requested all signed documents/supporting documentation when further action is disabled from the customer. CSR did not request any unnecessary or incorrect documents.</td>
										<td>
											<select class="form-control ib_point" name="data[requested_all_signed_documents]" disabled>
												<option value="">-Select-</option>
												<option ib_val=5 <?php echo $agnt_feedback['requested_all_signed_documents'] == "Yes"?"selected":"";?> value="Yes">Yes</option>
												<option ib_val=5 <?php echo $agnt_feedback['requested_all_signed_documents'] == "No"?"selected":"";?> value="No">No</option>
												<option ib_val=0 <?php echo $agnt_feedback['requested_all_signed_documents'] == "N/A"?"selected":"";?> value="N/A">N/A</option>
											</select>
										</td>
										<td colspan=2><input type="text" class="form-control" name="data[cmt22]" value="<?php echo $agnt_feedback['cmt22'] ?>" disabled></td>

									</tr>
									<tr>
										<td class="eml1" colspan=5>12. CSR offered any possible alternative options or solutions to caller’s request.</td>
										<td>
											<select class="form-control ib_point" name="data[csr_offered_any_possible]" disabled>
												<option value="">-Select-</option>
												<option ib_val=4 <?php echo $agnt_feedback['csr_offered_any_possible'] == "Yes"?"selected":"";?> value="Yes">Yes</option>
												<option ib_val=4 <?php echo $agnt_feedback['csr_offered_any_possible'] == "No"?"selected":"";?> value="No">No</option>
												<option ib_val=0 <?php echo $agnt_feedback['csr_offered_any_possible'] == "N/A"?"selected":"";?> value="N/A">N/A</option>
											</select>
										</td>
										<td colspan=2><input type="text" class="form-control" name="data[cmt23]" value="<?php echo $agnt_feedback['cmt23'] ?>" disabled></td>

									</tr>
									<tr>
										<td class="eml1" colspan=5>13. Effectively accessed and utilized all appropriate systems and resources.</td>
										<td>
											<select class="form-control ib_point" name="data[effectively_accessed]" disabled>
												<option value="">-Select-</option>
												<option ib_val=3 <?php echo $agnt_feedback['effectively_accessed'] == "Yes"?"selected":"";?> value="Yes">Yes</option>
												<option ib_val=3 <?php echo $agnt_feedback['effectively_accessed'] == "No"?"selected":"";?> value="No">No</option>
												<option ib_val=0 <?php echo $agnt_feedback['effectively_accessed'] == "N/A"?"selected":"";?> value="N/A">N/A</option>
											</select>
										</td>
										<td colspan=2><input type="text" class="form-control" name="data[cmt24]" value="<?php echo $agnt_feedback['cmt24'] ?>" disabled></td>

									</tr>
									<tr>
										<td class="eml1" colspan=5>14. Were all changes made in AMS and/or carrier site?.</td>
										<td>
											<select class="form-control ib_point" name="data[ware_all_changes_made]" disabled>
												<option value="">-Select-</option>
												<option ib_val=4 <?php echo $agnt_feedback['ware_all_changes_made'] == "Yes"?"selected":"";?> value="Yes">Yes</option>
												<option ib_val=4 <?php echo $agnt_feedback['ware_all_changes_made'] == "No"?"selected":"";?> value="No">No</option>
												<option ib_val=0 <?php echo $agnt_feedback['ware_all_changes_made'] == "N/A"?"selected":"";?> value="N/A">N/A</option>
											</select>
										</td>
										<td colspan=2><input type="text" class="form-control" name="data[cmt25]" value="<?php echo $agnt_feedback['cmt25'] ?>" disabled></td>

									</tr>
									<tr>
										<td class="eml1" colspan=5>15. All associated policies were updated as needed (for example, flood and umbrella).</td>
										<td>
											<select class="form-control ib_point" name="data[all_associated_policies]" disabled>
												<option value="">-Select-</option>
												<option ib_val=2 <?php echo $agnt_feedback['all_associated_policies'] == "Yes"?"selected":"";?> value="Yes">Yes</option>
												<option ib_val=2 <?php echo $agnt_feedback['all_associated_policies'] == "No"?"selected":"";?> value="No">No</option>
												<option ib_val=0 <?php echo $agnt_feedback['all_associated_policies'] == "N/A"?"selected":"";?> value="N/A">N/A</option>
											</select>
										</td>
										<td colspan=2><input type="text" class="form-control" name="data[cmt26]" value="<?php echo $agnt_feedback['cmt26'] ?>" disabled></td>

									</tr>
									<tr>
										<td class="eml1" colspan=5>16. Was the appropriate suspense created for follow up if needed?.</td>
										<td>
											<select class="form-control ib_point" name="data[was_the_appropriate_suspense]" disabled>
												<option value="">-Select-</option>
												<option ib_val=5 <?php echo $agnt_feedback['was_the_appropriate_suspense'] == "Yes"?"selected":"";?> value="Yes">Yes</option>
												<option ib_val=5 <?php echo $agnt_feedback['was_the_appropriate_suspense'] == "No"?"selected":"";?> value="No">No</option>
												<option ib_val=0 <?php echo $agnt_feedback['was_the_appropriate_suspense'] == "N/A"?"selected":"";?> value="N/A">N/A</option>
											</select>
										</td>
										<td colspan=2><input type="text" class="form-control" name="data[cmt27]" value="<?php echo $agnt_feedback['cmt27'] ?>" disabled></td>

									</tr>
									<tr>
										<td class="eml1" colspan=5>17. Addressed any service-related suspense items that were open at the time they spoke with the customer.</td>
										<td>
											<select class="form-control ib_point" name="data[address_any_service_related]" disabled>
												<option value="">-Select-</option>
												<option ib_val=4 <?php echo $agnt_feedback['address_any_service_related'] == "Yes"?"selected":"";?> value="Yes">Yes</option>
												<option ib_val=4 <?php echo $agnt_feedback['address_any_service_related'] == "No"?"selected":"";?> value="No">No</option>
												<option ib_val=0 <?php echo $agnt_feedback['address_any_service_related'] == "N/A"?"selected":"";?> value="N/A">N/A</option>
											</select>
										</td>
										<td colspan=2><input type="text" class="form-control" name="data[cmt28]" value="<?php echo $agnt_feedback['cmt28'] ?>" disabled></td>

									</tr>
									<tr>
										<td class="eml1" colspan=5>18. CSR updated any suspense that was addressed during the call and closed if applicable.</td>
										<td>
											<select class="form-control ib_point" name="data[csr_updated_any_suspense]" disabled>
												<option value="">-Select-</option>
												<option ib_val=4 <?php echo $agnt_feedback['csr_updated_any_suspense'] == "Yes"?"selected":"";?> value="Yes">Yes</option>
												<option ib_val=4 <?php echo $agnt_feedback['csr_updated_any_suspense'] == "No"?"selected":"";?> value="No">No</option>
												<option ib_val=0 <?php echo $agnt_feedback['csr_updated_any_suspense'] == "N/A"?"selected":"";?> value="N/A">N/A</option>
											</select>
										</td>
										<td colspan=2><input type="text" class="form-control" name="data[cmt29]" value="<?php echo $agnt_feedback['cmt29'] ?>" disabled></td>

									</tr>
									<tr>
										<td class="eml1" colspan=5>19. Was the correct disposition selected.</td>
										<td>
											<select class="form-control ib_point" name="data[was_correct_disposion_selected]" disabled>
												<option value="">-Select-</option>
												<option ib_val=0 <?php echo $agnt_feedback['was_correct_disposion_selected'] == "Yes"?"selected":"";?> value="Yes">Yes</option>
												<option ib_val=0 <?php echo $agnt_feedback['was_correct_disposion_selected'] == "No"?"selected":"";?> value="No">No</option>
												<option ib_val=0 <?php echo $agnt_feedback['was_correct_disposion_selected'] == "N/A"?"selected":"";?> value="N/A">N/A</option>
											</select>
										</td>
										<td colspan=2><input type="text" class="form-control" name="data[cmt30]" value="<?php echo $agnt_feedback['cmt30'] ?>" disabled></td>

									</tr>
									<tr><td colspan=8 style="background-color:#7DCEA0">CALL CLOSING</td></tr>
									<tr>
										<td class="eml1" colspan=5>1. Did the CSR provide a wrap-up summary, including the CSR’s and caller’s action items?</td>
										<td>
											<select class="form-control ib_point" name="data[did_csr_provide_summary]" disabled>
												<option value="">-Select-</option>
												<option ib_val=3 <?php echo $agnt_feedback['did_csr_provide_summary'] == "Yes"?"selected":"";?> value="Yes">Yes</option>
												<option ib_val=3 <?php echo $agnt_feedback['did_csr_provide_summary'] == "No"?"selected":"";?> value="No">No</option>
												<option ib_val=0 <?php echo $agnt_feedback['did_csr_provide_summary'] == "N/A"?"selected":"";?> value="N/A">N/A</option>
											</select>
										</td>
										<td colspan=2><input type="text" class="form-control" name="data[cmt31]" value="<?php echo $agnt_feedback['cmt31'] ?>" disabled></td>

									</tr>
									<tr>
										<td class="eml1" colspan=5>2. Did the associate offer additional assistance, thanked the customer?</td>
										<td>
											<select class="form-control ib_point" name="data[did_associate_offer]" disabled>
												<option value="">-Select-</option>
												<option ib_val=2 <?php echo $agnt_feedback['did_associate_offer'] == "0"?"selected":"";?> value="0">0</option>
												<option ib_val=1 ib_val2=2 <?php echo $agnt_feedback['did_associate_offer'] == "1"?"selected":"";?> value="1">1</option>
												<option ib_val=2 <?php echo $agnt_feedback['did_associate_offer'] == "2"?"selected":"";?> value="Yes">2</option>
												<option ib_val=0 <?php echo $clio['did_associate_offer'] == "N/A"?"selected":"";?> value="N/A">N/A</option>
											</select>
										</td>
										<td colspan=2><input type="text" class="form-control" name="data[cmt32]" value="<?php echo $agnt_feedback['cmt32'] ?>" disabled></td>

									</tr>

									<tr><td colspan=8 style="background-color:#7DCEA0">AUTO-FAIL</td></tr>
									<tr>
										<td class="eml1" colspan=5 style="color:red">1. Was the call an Auto-Fail?</td>
										<td>
											<select class="form-control ib_point" id="brightwayIBAF1" name="data[do_call_auto_fail]" disabled>
												<option value="">-Select-</option>
												<option ib_val=0 <?php echo $agnt_feedback['do_call_auto_fail'] == "Yes"?"selected":"";?> value="Yes">Yes</option>
												<option ib_val=0 <?php echo $agnt_feedback['do_call_auto_fail'] == "No"?"selected":"";?> value="No">No</option>
												<option ib_val=0 <?php echo $agnt_feedback['do_call_auto_fail'] == "N/A"?"selected":"";?> value="N/A">N/A</option>
											</select>
										</td>
										<td colspan=2><input type="text" class="form-control" name="data[cmt33]" value="<?php echo $agnt_feedback['cmt33'] ?>" disabled></td>
									</tr>

									<tr><td colspan=8 style="background-color:#7DCEA0">BONUS QUESTIONS</td></tr>
									<tr>
										<td class="eml1" colspan=5>1. Bonus Question</td>
										<td>
											<select class="form-control ib_bonus" id="bonus_point" name="bonus_question" disabled>
												<option value="">-Select-</option>
												<option ib_val=5 <?php echo $agnt_feedback['bonus_question'] == "AB"?"selected":"";?> value="AB">Associate was able to retain customer that indicated they were going to leave Brightway.</option>
												<option ib_val=5 <?php echo $agnt_feedback['bonus_question'] == "AS"?"selected":"";?> value="AS">Associate identified a cross sell opportunity and was able to refer to agent for additional quotes.</option>
												<option ib_val=0 <?php echo $agnt_feedback['bonus_question'] == "N/A"?"selected":"";?> value="N/A">N/A</option>
											</select>
										</td>
										<td colspan=2><input type="text" class="form-control" name="data[cmt34]" value="<?php echo $agnt_feedback['cmt34'] ?>" disabled></td>
									</tr>

									</tr><tr><td colspan=8 style="background-color:#7DCEA0"></td></tr>

									<tr>
										<td>Call Summary:</td>
										<td colspan="4"><textarea class="form-control"   name="data[call_summary]" disabled><?php echo $agnt_feedback['call_summary'] ?></textarea></td>
										<td>Feedback:</td>
										<td colspan="4"><textarea class="form-control"   name="data[feedback]" disabled><?php echo $agnt_feedback['feedback'] ?></textarea></td>
									</tr>


									<tr>
										<td colspan=5>Upload Files</td>
										<?php	if($agnt_feedback['attach_file']!=''){ ?>
												<td colspan=4>
													<?php $attach_file = explode(",",$agnt_feedback['attach_file']);
													 foreach($attach_file as $mp){ ?>
														<audio controls='' style="background-color:#607F93">
														  <source src="<?php echo base_url(); ?>qa_files/brightway_ibbank/<?php echo $mp; ?>" type="audio/ogg">
														  <source src="<?php echo base_url(); ?>qa_files/brightway_ibbank/<?php echo $mp; ?>" type="audio/mpeg">
														</audio> </br>
													 <?php } ?>
												</td>
										<?php }else{
												echo '<td colspan=6><b>No Files</b></td>';
											  }
									 ?>
									</tr>

									<?php } else if($campaign=='qpc_esal'){ ?>

										<tr><td>Overall Score:</td> <td><b><?php echo $agnt_feedback['overall_score'].'%'; ?></b></td></tr>
										<tr>
											<td colspan=6>PARAMETER</td>
											<td>RATING</td>
											<td>COMMENTS/NOTES</td>
										</tr>
										<tr>
											<td>Greeting</td>
											<td colspan=5>1. Opens the call with a correct introduction</td> <td><b><?php echo $agnt_feedback['open_call_introduction'] ?></b></td>
											<td><?php echo $agnt_feedback['cmt1'] ?></td>
										</tr>										<tr>
											<td rowspan=3>Communication</td>
											<td colspan=5>2. Accurate translation (keeping the same meaning)</td> <td><b><?php echo $agnt_feedback['accurate_translation'] ?></b></td>
											<td><?php echo $agnt_feedback['cmt2'] ?></td>
										</tr>
										<tr>
											<td colspan=5>3. Provides correct data (phone number, policy number, mileage, address)</td> <td><b><?php echo $agnt_feedback['provide_correct_data'] ?></b></td>
											<td><?php echo $agnt_feedback['cmt3'] ?></td>
										</tr>
										<tr>
											<td colspan=5>4. Uses correct grammar (mayor errors that may lead into a misunderstanding)</td> <td><b><?php echo $agnt_feedback['use_correct_grammar'] ?></b></td>
											<td><?php echo $agnt_feedback['cmt4'] ?></td>
										</tr>
										<tr>
											<td rowspan=3>Soft skills</td>
											<td colspan=5>5. Effective communication (clear, concise, correct volume)</td> <td><b><?php echo $agnt_feedback['effective_communication'] ?></b></td>
											<td><?php echo $agnt_feedback['cmt5'] ?></td>
										</tr>
										<tr>
											<td colspan=5>6. Active listening (not connectivity issue related)</td> <td><b><?php echo $agnt_feedback['active_listening'] ?></b></td>
											<td><?php echo $agnt_feedback['cmt6'] ?></td>
										</tr>
										<tr>
											<td colspan=5>7. Avoids long silence gaps (long delays between translation)</td> <td><b><?php echo $agnt_feedback['avoid_silence_gap'] ?></b></td>
											<td><?php echo $agnt_feedback['cmt7'] ?></td>
										</tr>
										<tr>
											<td rowspan=2>Professionalism</td>
											<td colspan=5>8. Communicates in a polite and respectful manner</td> <td><b><?php echo $agnt_feedback['communicate_respectful_manner'] ?></b></td>
											<td><?php echo $agnt_feedback['cmt8'] ?></td>
										</tr>
										<tr>
											<td colspan=5>9. Correctly indicates can't translate profanity</td> <td><b><?php echo $agnt_feedback['cannot_translet_profanity'] ?></b></td>
											<td><?php echo $agnt_feedback['cmt9'] ?></td>
										</tr>
										<tr>
											<td>Closing</td>
											<td colspan=5>10. Closes the call accordingly</td> <td><b><?php echo $agnt_feedback['close_call'] ?></b></td>
											<td><?php echo $agnt_feedback['cmt10'] ?></td>
										</tr>
										<tr>
											<td>Call Summary:</td> <td colspan=3><b><?php echo $agnt_feedback['call_summary'] ?></b></td>
											<td>Feedback:</td> <td colspan=3><b><?php echo $agnt_feedback['feedback'] ?></b></td>
										</tr>
										<?php if($agnt_feedback['attach_file']!=''){ ?>
										<tr oncontextmenu="return false;">
											<td colspan=3>Audio Files</td>
											<td colspan=5>
												<?php $attach_file = explode(",",$agnt_feedback['attach_file']);
												 foreach($attach_file as $mp){ ?>
													<audio controls='' style="background-color:#607F93">
													  <source src="<?php echo base_url(); ?>qa_files/qa_ameridial/qpc_esal/<?php echo $mp; ?>" type="audio/ogg">
													  <source src="<?php echo base_url(); ?>qa_files/qa_ameridial/qpc_esal/<?php echo $mp; ?>" type="audio/mpeg">
													</audio> </br>
												 <?php } ?>
											</td>
										</tr>
										<?php } ?>


									<?php }else if($campaign=='pcare_cs'){ ?>

										<tr>
											<td style="font-weight:bold; font-size:16px">Earned Score</td>
											<td><input type="text" readonly class="form-control"  value="<?php echo $agnt_feedback['earned_score'] ?>"></td>
											<td style="font-weight:bold; font-size:16px">Possible Score</td>
											<td><input type="text" readonly class="form-control" value="<?php echo $agnt_feedback['possible_score'] ?>"></td>
											<td style="font-weight:bold; font-size:16px">Overall Score:</td>
											<td><input type="text" readonly class="form-control pcsFatal" value="<?php echo $agnt_feedback['overall_score'] ?>"></td>
										</tr>

										<tr style="background-color:#EBDEF0; font-weight:bold; text-align:left; font-size:14px">
											<td colspan=5>Greeting & Introduction</td>
											<td><input type="text" readonly id="greeting_introduction_score" name="data[greeting_introduction_score]" class="form-control" style="font-weight:bold" value="<?php echo $conscious_selling['greeting_introduction_score'] ?>"></td>
										</tr>
										<tr>
											<td colspan=5 style="text-align:left;">Greeting, Welcome to the Company and Identification of Agent</td>
											<td>
												<select class="form-control greeting" name="data[greeting_to_company]" disabled>
													<option value="">-Select-</option>
													<option <?php echo $conscious_selling['greeting_to_company']=='Yes'?"selected":""; ?> value="Yes">Yes</option>
													<option <?php echo $conscious_selling['greeting_to_company']=='No'?"selected":""; ?> value="No">No</option>
												</select>
											</td>
										</tr>
										<tr>
											<td colspan=5 style="text-align:left;">Customer Identification- ("With whom do I have the pleasure of speaking?")</td>
											<td>
												<select class="form-control greeting" name="data[customer_identification]" disabled>
													<option value="">-Select-</option>
													<option <?php echo $conscious_selling['customer_identification']=='Yes'?"selected":""; ?> value="Yes">Yes</option>
													<option <?php echo $conscious_selling['customer_identification']=='No'?"selected":""; ?> value="No">No</option>
												</select>
											</td>
										</tr>
										<tr>
											<td colspan=5 style="text-align:left;">Identifying customer persona- ("Hi (Customer name), How are you doing today?")</td>
											<td>
												<select class="form-control greeting" name="data[identify_customer_personal]" disabled>
													<option value="">-Select-</option>
													<option <?php echo $conscious_selling['identify_customer_personal']=='Yes'?"selected":""; ?> value="Yes">Yes</option>
													<option <?php echo $conscious_selling['identify_customer_personal']=='No'?"selected":""; ?> value="No">No</option>
												</select>
											</td>
										</tr>
										<tr>
											<td colspan=5 style="text-align:left;">Opening Question- ("How may I assist you, (Customer name)?")</td>
											<td>
												<select class="form-control greeting" name="data[opening_question]" disabled>
													<option value="">-Select-</option>
													<option <?php echo $conscious_selling['opening_question']=='Yes'?"selected":""; ?> value="Yes">Yes</option>
													<option <?php echo $conscious_selling['opening_question']=='No'?"selected":""; ?> value="No">No</option>
												</select>
											</td>
										</tr>
										<tr>
											<td colspan=5 style="text-align:left;">Acknowledge Customer's Reason For Call/Assurance of help</td>
											<td>
												<select class="form-control greeting" name="data[acknowledge_customer_reason]" disabled>
													<option value="">-Select-</option>
													<option <?php echo $conscious_selling['acknowledge_customer_reason']=='Yes'?"selected":""; ?> value="Yes">Yes</option>
													<option <?php echo $conscious_selling['acknowledge_customer_reason']=='No'?"selected":""; ?> value="No">No</option>
												</select>
											</td>
										</tr>
										<tr>
											<td colspan=5 style="text-align:left;">Thank you statements ("Thank you for being a VIP customer; Thank you for giving us a call today")</td>
											<td>
												<select class="form-control greeting" name="data[thank_you_statement]" disabled>
													<option value="">-Select-</option>
													<option <?php echo $conscious_selling['thank_you_statement']=='Yes'?"selected":""; ?> value="Yes">Yes</option>
													<option <?php echo $conscious_selling['thank_you_statement']=='No'?"selected":""; ?> value="No">No</option>
												</select>
											</td>
										</tr>

										 <tr style="background-color:#EBDEF0; font-weight:bold; text-align:left; font-size:14px">
											<td colspan=5>Up Front Agreement</td>
											<td><input type="text" readonly id="up_front_agreement_score" name="data[up_front_agreement_score]" class="form-control" style="font-weight:bold" value="<?php echo $conscious_selling['up_front_agreement_score'] ?>"></td>
										</tr>
										<tr>
											<td colspan=5 style="text-align:left;">Asking Permission to propose an agenda- (saying "with your permission")</td>
											<td>
												<select class="form-control upfront" name="data[asking_permission_to_agenda]" disabled>
													<option value="">-Select-</option>
													<option <?php echo $conscious_selling['asking_permission_to_agenda']=='Yes'?"selected":""; ?> value="Yes">Yes</option>
													<option <?php echo $conscious_selling['asking_permission_to_agenda']=='No'?"selected":""; ?> value="No">No</option>
												</select>
											</td>
										</tr>
										<tr>
											<td colspan=5 style="text-align:left;">Getting Permission to proceed</td>
											<td>
												<select class="form-control upfront" name="data[getting_permission_to_proceed]" disabled>
													<option value="">-Select-</option>
													<option <?php echo $conscious_selling['getting_permission_to_proceed']=='Yes'?"selected":""; ?> value="Yes">Yes</option>
													<option <?php echo $conscious_selling['getting_permission_to_proceed']=='No'?"selected":""; ?> value="No">No</option>
												</select>
											</td>
										</tr>
										<tr>
											<td colspan=5 style="text-align:left;">Proposing an Agenda</td>
											<td>
												<select class="form-control upfront" name="data[proposing_agenda]" disabled>
													<option value="">-Select-</option>
													<option <?php echo $conscious_selling['proposing_agenda']=='Yes'?"selected":""; ?> value="Yes">Yes</option>
													<option <?php echo $conscious_selling['proposing_agenda']=='No'?"selected":""; ?> value="No">No</option>
												</select>
											</td>
										</tr>
										<tr>
											<td colspan=5 style="text-align:left;">Presenting a Timeframe for the Call</td>
											<td>
												<select class="form-control upfront" name="data[presenting_call_timeframe]" disabled>
													<option value="">-Select-</option>
													<option <?php echo $conscious_selling['presenting_call_timeframe']=='Yes'?"selected":""; ?> value="Yes">Yes</option>
													<option <?php echo $conscious_selling['presenting_call_timeframe']=='No'?"selected":""; ?> value="No">No</option>
												</select>
											</td>
										</tr>
										<tr>
											<td colspan=5 style="text-align:left;">Getting Permission to proceed</td>
											<td>
												<select class="form-control upfront" name="data[getting_permission_to_proceed2]" disabled>
													<option value="">-Select-</option>
													<option <?php echo $conscious_selling['getting_permission_to_proceed2']=='Yes'?"selected":""; ?> value="Yes">Yes</option>
													<option <?php echo $conscious_selling['getting_permission_to_proceed2']=='No'?"selected":""; ?> value="No">No</option>
												</select>
											</td>
										</tr>

										<tr style="background-color:#EBDEF0; font-weight:bold; font-size:14px">
											<td colspan=5>Discovery</td>
											<td><input type="text" readonly id="examine_diagnose_score" name="data[examine_diagnose_score]" class="form-control" style="font-weight:bold" value="<?php echo $conscious_selling['examine_diagnose_score'] ?>"></td>
										</tr>
										<tr>
											<td colspan=5 style="text-align:left;">Identify Challenges- ("What inspired you to try the product in the first place?")</td>
											<td>
												<select class="form-control examine" name="data[identify_challenges]" disabled>
													<option value="">-Select-</option>
													<option <?php echo $conscious_selling['identify_challenges']=='Yes'?"selected":""; ?> value="Yes">Yes</option>
													<option <?php echo $conscious_selling['identify_challenges']=='No'?"selected":""; ?> value="No">No</option>
												</select>
											</td>
										</tr>
										<tr>
											<td colspan=5 style="text-align:left;">Historical Impact- (How long has that been going on? What have you done to address it? Share with me what you love about the product? Share with me, what have you experienced by taking the product?)</td>
											<td>
												<select class="form-control examine" name="data[historical_impact]" disabled>
													<option value="">-Select-</option>
													<option <?php echo $conscious_selling['historical_impact']=='Yes'?"selected":""; ?> value="Yes">Yes</option>
													<option <?php echo $conscious_selling['historical_impact']=='No'?"selected":""; ?> value="No">No</option>
													<option <?php echo $conscious_selling['historical_impact']=='N/A'?"selected":""; ?> value="N/A">N/A</option>
												</select>
											</td>
										</tr>
										<tr>
											<td colspan=5 style="text-align:left;">Future State- (What would a future without challenges look like? What would you be doing different if you didn’t have these challenges)/Personal Priority- (“Based on the things you shared, this seems like a high personal priority, would you agree?”)</td>
											<td>
												<select class="form-control examine" name="data[future_state]" disabled>
													<option value="">-Select-</option>
													<option <?php echo $conscious_selling['future_state']=='Yes'?"selected":""; ?> value="Yes">Yes</option>
													<option <?php echo $conscious_selling['future_state']=='No'?"selected":""; ?> value="No">No</option>
												</select>
											</td>
										</tr>

										<tr style="background-color:#EBDEF0; font-weight:bold; font-size:14px">
											<td colspan=5>Solution Overview</td>
											<td><input type="text" readonly id="solution_overview_score" name="data[solution_overview_score]" class="form-control" style="font-weight:bold" value="<?php echo $conscious_selling['solution_overview_score'] ?>"></td>
										</tr>
										<tr>
											<td colspan=5 style="text-align:left;">Value Proposition-(Product/Company Promo, Explaining the S.S, Educating on Nutrition-"Why offer makes sense or solves customer's issues.")</td>
											<td>
												<select class="form-control solution" name="data[value_proporsion]" disabled>
													<option value="">-Select-</option>
													<option <?php echo $conscious_selling['value_proporsion']=='Yes'?"selected":""; ?> value="Yes">Yes</option>
													<option <?php echo $conscious_selling['value_proporsion']=='No'?"selected":""; ?> value="No">No</option>
												</select>
											</td>
										</tr>
										<tr>
											<td colspan=5 style="text-align:left;">1st Retention Attempt-(Must use 2 or more tools)</td>
											<td>
												<select class="form-control solution" name="data[1st_retension_attempt]" disabled>
													<option value="">-Select-</option>
													<option <?php echo $conscious_selling['1st_retension_attempt']=='Yes'?"selected":""; ?> value="Yes">Yes</option>
													<option <?php echo $conscious_selling['1st_retension_attempt']=='No'?"selected":""; ?> value="No">No</option>
												</select>
											</td>
										</tr>
										<tr>
											<td colspan=5 style="text-align:left;">Tactical Hold</td>
											<td>
												<select class="form-control solution" name="data[tactical_hold]" disabled>
													<option value="">-Select-</option>
													<option <?php echo $conscious_selling['tactical_hold']=='Yes'?"selected":""; ?> value="Yes">Yes</option>
													<option <?php echo $conscious_selling['tactical_hold']=='No'?"selected":""; ?> value="No">No</option>
													<option <?php echo $conscious_selling['tactical_hold']=='N/A'?"selected":""; ?> value="N/A">N/A</option>
												</select>
											</td>
										</tr>
										<tr>
											<td colspan=5 style="text-align:left;">2nd Retention Attempt-(Must use 2 or more tools) (Only when applicable)</td>
											<td>
												<select class="form-control solution" name="data[2nd_retension_attempt]" disabled>
													<option value="">-Select-</option>
													<option <?php echo $conscious_selling['2nd_retension_attempt']=='Yes'?"selected":""; ?> value="Yes">Yes</option>
													<option <?php echo $conscious_selling['2nd_retension_attempt']=='No'?"selected":""; ?> value="No">No</option>
													<option <?php echo $conscious_selling['2nd_retension_attempt']=='N/A'?"selected":""; ?> value="N/A">N/A</option>
												</select>
											</td>
										</tr>

										<tr style="background-color:#EBDEF0; font-weight:bold; font-size:14px">
											<td colspan=5>Confirmation</td>
											<td><input type="text" readonly id="conclusion_score" name="data[conclusion_score]" class="form-control" style="font-weight:bold" value="<?php echo $conscious_selling['conclusion_score'] ?>"></td>
										</tr>
										<tr>
											<td colspan=5 style="text-align:left;">Complete Confirmation of SuperSaver/Cancellation-(6 point on active SuperSaver and/or Cancellation #)</td>
											<td>
												<select class="form-control conclusion" name="data[comfirmation_of_supersaver]" disabled>
													<option value="">-Select-</option>
													<option <?php echo $conscious_selling['comfirmation_of_supersaver']=='Yes'?"selected":""; ?> value="Yes">Yes</option>
													<option <?php echo $conscious_selling['comfirmation_of_supersaver']=='No'?"selected":""; ?> value="No">No</option>
												</select>
											</td>
										</tr>
										<tr>
											<td colspan=5 style="text-align:left;">Daily Special –(One Time Order Confirmation)</td>
											<td>
												<select class="form-control conclusion" name="data[daily_special_confirmation]" disabled>
													<option value="">-Select-</option>
													<option <?php echo $conscious_selling['daily_special_confirmation']=='Yes'?"selected":""; ?> value="Yes">Yes</option>
													<option <?php echo $conscious_selling['daily_special_confirmation']=='No'?"selected":""; ?> value="No">No</option>
												</select>
											</td>
										</tr>

										<tr style="background-color:#EBDEF0; font-weight:bold; font-size:14px">
											<td colspan=5>Additional Offers</td>
											<td><input type="text" readonly id="package_return_score" name="data[package_return_score]" class="form-control" style="font-weight:bold" value="<?php echo $conscious_selling['package_return_score'] ?>"></td>
										</tr>
										<tr>
											<td colspan=5 style="text-align:left;">Made offer to save package-(Only applicable if cst requested return. Can be combined with SS retention. Location in call flexible)(Only when applicable)</td>
											<td>
												<select class="form-control package" name="data[made_save_package_offer]" disabled>
													<option value="">-Select-</option>
													<option <?php echo $conscious_selling['made_save_package_offer']=='Yes'?"selected":""; ?> value="Yes">Yes</option>
													<option <?php echo $conscious_selling['made_save_package_offer']=='No'?"selected":""; ?> value="No">No</option>
													<option <?php echo $conscious_selling['made_save_package_offer']=='N/A'?"selected":""; ?> value="N/A">N/A</option>
												</select>
											</td>
										</tr>
										<tr>
											<td colspan=5 style="text-align:left;">Daily Special-(Mandatory-Must be presented after confirmation and include feedback on if agent did/did not add value proposition)</td>
											<td>
												<select class="form-control package" name="data[daily_special]" disabled>
													<option value="">-Select-</option>
													<option <?php echo $conscious_selling['daily_special']=='Yes'?"selected":""; ?> value="Yes">Yes</option>
													<option <?php echo $conscious_selling['daily_special']=='No'?"selected":""; ?> value="No">No</option>
												</select>
											</td>
										</tr>

										<tr style="background-color:#EBDEF0; font-weight:bold; font-size:14px">
											<td colspan=5>Procedure</td>
											<td><input type="text" readonly id="procedure_score" name="data[procedure_score]" class="form-control" style="font-weight:bold" value="<?php echo $conscious_selling['procedure_score'] ?>"></td>
										</tr>
										<tr>
											<td colspan=5 style="text-align:left;">Verify Customer Information</td>
											<td>
												<select class="form-control procedure" name="data[verify_customer_info]" disabled>
													<option value="">-Select-</option>
													<option <?php echo $conscious_selling['verify_customer_info']=='Yes'?"selected":""; ?> value="Yes">Yes</option>
													<option <?php echo $conscious_selling['verify_customer_info']=='No'?"selected":""; ?> value="No">No</option>
												</select>
											</td>
										</tr>
										<tr>
											<td colspan=5 style="text-align:left;">Web Login (Only when applicable)</td>
											<td>
												<select class="form-control procedure" name="data[web_login]" disabled>
													<option value="">-Select-</option>
													<option <?php echo $conscious_selling['web_login']=='Yes'?"selected":""; ?> value="Yes">Yes</option>
													<option <?php echo $conscious_selling['web_login']=='No'?"selected":""; ?> value="No">No</option>
													<option <?php echo $conscious_selling['web_login']=='N/A'?"selected":""; ?> value="N/A">N/A</option>
												</select>
											</td>
										</tr>
										<tr>
											<td colspan=5 style="text-align:left;">Email Capture (Only when applicable)</td>
											<td>
												<select class="form-control procedure" name="data[email_capture]" disabled>
													<option value="">-Select-</option>
													<option <?php echo $conscious_selling['email_capture']=='Yes'?"selected":""; ?> value="Yes">Yes</option>
													<option <?php echo $conscious_selling['email_capture']=='No'?"selected":""; ?> value="No">No</option>
													<option <?php echo $conscious_selling['email_capture']=='N/A'?"selected":""; ?> value="N/A">N/A</option>
												</select>
											</td>
										</tr>
										<tr>
											<td colspan=5 style="text-align:left;">SMS Opt-In (Only when applicable)</td>
											<td>
												<select class="form-control procedure" name="data[sms_opt_in]" disabled>
													<option value="">-Select-</option>
													<option <?php echo $conscious_selling['sms_opt_in']=='Yes'?"selected":""; ?> value="Yes">Yes</option>
													<option <?php echo $conscious_selling['sms_opt_in']=='No'?"selected":""; ?> value="No">No</option>
													<option <?php echo $conscious_selling['sms_opt_in']=='N/A'?"selected":""; ?> value="N/A">N/A</option>
												</select>
											</td>
										</tr>
										<tr>
											<td colspan=5 style="text-align:left;">Documentation-(Use current guidelines)</td>
											<td>
												<select class="form-control procedure" name="data[documentation]" disabled>
													<option value="">-Select-</option>
													<option <?php echo $conscious_selling['documentation']=='Yes'?"selected":""; ?> value="Yes">Yes</option>
													<option <?php echo $conscious_selling['documentation']=='No'?"selected":""; ?> value="No">No</option>
												</select>
											</td>
										</tr>
										<tr>
											<td colspan=5 style="text-align:left;">Thank you Closing Statement/Identify Purity Products</td>
											<td>
												<select class="form-control procedure" name="data[thankyou_closing_statement]" disabled>
													<option value="">-Select-</option>
													<option <?php echo $conscious_selling['thankyou_closing_statement']=='Yes'?"selected":""; ?> value="Yes">Yes</option>
													<option <?php echo $conscious_selling['thankyou_closing_statement']=='No'?"selected":""; ?> value="No">No</option>
												</select>
											</td>
										</tr>

										<tr style="background-color:#EBDEF0; font-weight:bold; font-size:14px">
											<td colspan=5>Accuracy</td>
											<td><input type="text" readonly id="accuracy_score" name="data[accuracy_score]" class="form-control" style="font-weight:bold" value="<?php echo $conscious_selling['accuracy_score'] ?>"></td>
										</tr>
										<tr>
											<td colspan=5 style="text-align:left;">Agent provided correct information to caller and did not mislead (Product, shipping, cost, etc.)</td>
											<td>
												<select class="form-control accuracy" name="data[correct_information_to_caller]" disabled>
													<option value="">-Select-</option>
													<option <?php echo $conscious_selling['correct_information_to_caller']=='Yes'?"selected":""; ?> value="Yes">Yes</option>
													<option <?php echo $conscious_selling['correct_information_to_caller']=='No'?"selected":""; ?> value="No">No</option>
												</select>
											</td>
										</tr>
										<tr>
											<td colspan=5 style="text-align:left;">Correct Delay Length, Correct Sequence (Guidelines of the Offer)(Procedural Compliance)</td>
											<td>
												<select class="form-control accuracy" name="data[correct_delay_length]" disabled>
													<option value="">-Select-</option>
													<option <?php echo $conscious_selling['correct_delay_length']=='Yes'?"selected":""; ?> value="Yes">Yes</option>
													<option <?php echo $conscious_selling['correct_delay_length']=='No'?"selected":""; ?> value="No">No</option>
												</select>
											</td>
										</tr>
										<tr>
											<td colspan=5 style="text-align:left;">Correctly Used Purity Points-(Use PP Deposit guidelines) (Only when applicable)</td>
											<td>
												<select class="form-control accuracy" name="data[correctly_use_purity_points]" disabled>
													<option value="">-Select-</option>
													<option <?php echo $conscious_selling['correctly_use_purity_points']=='Yes'?"selected":""; ?> value="Yes">Yes</option>
													<option <?php echo $conscious_selling['correctly_use_purity_points']=='No'?"selected":""; ?> value="No">No</option>
													<option <?php echo $conscious_selling['correctly_use_purity_points']=='N/A'?"selected":""; ?> value="N/A">N/A</option>
												</select>
											</td>
										</tr>

										<tr style="background-color:#EBDEF0; font-weight:bold; font-size:14px">
											<td colspan=5>Call Management</td>
											<td><input type="text" readonly id="call_management_score" name="data[call_management_score]" class="form-control" style="font-weight:bold" value="<?php echo $conscious_selling['call_management_score'] ?>"></td>
										</tr>
										<tr>
											<td colspan=5 style="text-align:left;">Soft Skills (Empathy, positive demeanor, etc.)</td>
											<td>
												<select class="form-control call" name="data[soft_skill]" disabled>
													<option value="">-Select-</option>
													<option <?php echo $conscious_selling['soft_skill']=='Yes'?"selected":""; ?> value="Yes">Yes</option>
													<option <?php echo $conscious_selling['soft_skill']=='No'?"selected":""; ?> value="No">No</option>
												</select>
											</td>
										</tr>
										<tr>
											<td colspan=5 style="text-align:left;">Rapport Building</td>
											<td>
												<select class="form-control call" name="data[rapport_building]" disabled>
													<option value="">-Select-</option>
													<option <?php echo $conscious_selling['rapport_building']=='Yes'?"selected":""; ?> value="Yes">Yes</option>
													<option <?php echo $conscious_selling['rapport_building']=='No'?"selected":""; ?> value="No">No</option>
												</select>
											</td>
										</tr>
										<tr>
											<td colspan=5 style="text-align:left;">Maintaining Call Control-(dead air, pauses, call control, off topic, etc.)</td>
											<td>
												<select class="form-control call" name="data[maintain_call_control]" disabled>
													<option value="">-Select-</option>
													<option <?php echo $conscious_selling['maintain_call_control']=='Yes'?"selected":""; ?> value="Yes">Yes</option>
													<option <?php echo $conscious_selling['maintain_call_control']=='No'?"selected":""; ?> value="No">No</option>
												</select>
											</td>
										</tr>
										<tr>
											<td colspan=5 style="text-align:left;">Listening Comprehension-(Did the agent respond appropriately to the customer's questions, concerns etc.)</td>
											<td>
												<select class="form-control call" name="data[listening_comprehension]" disabled>
													<option value="">-Select-</option>
													<option <?php echo $conscious_selling['listening_comprehension']=='Yes'?"selected":""; ?> value="Yes">Yes</option>
													<option <?php echo $conscious_selling['listening_comprehension']=='No'?"selected":""; ?> value="No">No</option>
												</select>
											</td>
										</tr>

										<tr style="background-color:#F1948A; font-weight:bold; font-size:14px">
											<td colspan=6>Critical Drivers-Auto-Fails</td>
										</tr>
										<tr>
											<td colspan=5 style="text-align:left;">***Unauthorized Shipments/Not following up in the database</td>
											<td>
												<select class="form-control pcs_fatal" id="pcsAF1" name="data[unauthorized_shipment]" disabled>
													<option value="">-Select-</option>
													<option <?php echo $conscious_selling['unauthorized_shipment']=='No'?"selected":""; ?> value="No">No</option>
													<option <?php echo $conscious_selling['unauthorized_shipment']=='Yes'?"selected":""; ?> value="Yes">Yes</option>
												</select>
											</td>
										</tr>
										<tr>
											<td colspan=5 style="text-align:left;">***Inappropriate Language/Unprofessional Behavior</td>
											<td>
												<select class="form-control pcs_fatal" id="pcsAF2" name="data[inappropiate_language]" disabled>
													<option value="">-Select-</option>
													<option <?php echo $conscious_selling['inappropiate_language']=='No'?"selected":""; ?> value="No">No</option>
													<option <?php echo $conscious_selling['inappropiate_language']=='Yes'?"selected":""; ?> value="Yes">Yes</option>
												</select>
											</td>
										</tr>
										<tr>
											<td colspan=5 style="text-align:left;">***Badgering/Arguing with Customer</td>
											<td>
												<select class="form-control pcs_fatal" id="pcsAF3" name="data[arguing_with_customer]" disabled>
													<option value="">-Select-</option>
													<option <?php echo $conscious_selling['arguing_with_customer']=='No'?"selected":""; ?> value="No">No</option>
													<option <?php echo $conscious_selling['arguing_with_customer']=='Yes'?"selected":""; ?> value="Yes">Yes</option>
												</select>
											</td>
										</tr>
										<tr>
											<td colspan=5 style="text-align:left;">***Incorrect use of SS Actions-(Use current guidelines)</td>
											<td>
												<select class="form-control pcs_fatal" id="pcsAF4" name="data[incorrect_SS_action_use]" disabled>
													<option value="">-Select-</option>
													<option <?php echo $conscious_selling['incorrect_SS_action_use']=='No'?"selected":""; ?> value="No">No</option>
													<option <?php echo $conscious_selling['incorrect_SS_action_use']=='Yes'?"selected":""; ?> value="Yes">Yes</option>
												</select>
											</td>
										</tr>
										<tr>
											<td colspan=5 style="text-align:left;">***No S.S. Confirmation</td>
											<td>
												<select class="form-control pcs_fatal" id="pcsAF5" name="data[no_SS_confirmation]" disabled>
													<option value="">-Select-</option>
													<option <?php echo $conscious_selling['no_SS_confirmation']=='No'?"selected":""; ?> value="No">No</option>
													<option <?php echo $conscious_selling['no_SS_confirmation']=='Yes'?"selected":""; ?> value="Yes">Yes</option>
												</select>
											</td>
										</tr>
										<tr>
											<td colspan=5 style="text-align:left;">***Making Health Claims</td>
											<td>
												<select class="form-control pcs_fatal" id="pcsAF6" name="data[making_helth_claims]" disabled>
													<option value="">-Select-</option>
													<option <?php echo $conscious_selling['making_helth_claims']=='No'?"selected":""; ?> value="No">No</option>
													<option <?php echo $conscious_selling['making_helth_claims']=='Yes'?"selected":""; ?> value="Yes">Yes</option>
												</select>
											</td>
										</tr>
										<tr>
											<td colspan=5 style="text-align:left;">***No Retention Offers Made</td>
											<td>
												<select class="form-control pcs_fatal" id="pcsAF7" name="data[on_retension_offer]" disabled>
													<option value="">-Select-</option>
													<option <?php echo $conscious_selling['on_retension_offer']=='No'?"selected":""; ?> value="No">No</option>
													<option <?php echo $conscious_selling['on_retension_offer']=='Yes'?"selected":""; ?> value="Yes">Yes</option>
												</select>
											</td>
										</tr>
										<tr>
											<td colspan=2>Call Feedback:</td>
											<td colspan=4><textarea class="form-control" name="data[feedback1]"><?php echo $agnt_feedback['feedback1'] ?></textarea></td>
										</tr>
										<tr>
											<td colspan=2>Upload Files</td>
											<?php if($clf_id==0){ ?>
												<td colspan=4><input type="file" multiple class="form-control" id="attach_file" name="attach_file[]"></td>
											<?php }else{
												if($agnt_feedback['attach_file']!=''){ ?>
													<td colspan=4>
														<?php $attach_file = explode(",",$agnt_feedback['attach_file']);
														 foreach($attach_file as $mp){ ?>
															<audio controls='' style="background-color:#607F93">
															  <source src="<?php echo base_url(); ?>qa_files/qa_ameridial/purity_care/conscious_selling/<?php echo $mp; ?>" type="audio/ogg">
															  <source src="<?php echo base_url(); ?>qa_files/qa_ameridial/purity_care/conscious_selling/<?php echo $mp; ?>" type="audio/mpeg">
															</audio> </br>
														 <?php } ?>
													</td>
											<?php }else{
													echo '<td colspan=6><b>No Files</b></td>';
												  }
											} ?>
										</tr>



									<?php } else if($campaign=='bluebenefits'){ ?>
										<tr style="height:25px; font-weight:bold">
										<td colspan=3>PARAMETER</td>
										<td colspan=3>RATING</td>
										<td colspan=3>COMMENTS/NOTES</td>
									</tr>
									<tr><td class="eml" colspan=8>Greeting</td></tr>
									<tr>
										<td style="text-align:left;" colspan=3>1.1 Did the rep greet the customer promptly and properly?</td>
										<td colspan=3>
											<select class="form-control amd_point" name="data[greet_the_customer]" disabled>
												<option value="">-Select-</option>
												<option amd_val=2 <?php echo $agnt_feedback['greet_the_customer']=='Effective'?"selected":""; ?> value="Effective">Effective</option>
												<option amd_val=2 <?php echo $agnt_feedback['greet_the_customer']=='Unacceptable'?"selected":""; ?> value="Unacceptable">Unacceptable</option>
												<option amd_val=0 <?php echo $agnt_feedback['greet_the_customer']=='N/A'?"selected":""; ?> value="N/A">N/A</option>
											</select>
										</td>
										<td colspan=2><input type="text" class="form-control" name="data[cmt1]" value="<?php echo $agnt_feedback['cmt1']; ?>" disabled></td>
									</tr>
									<tr>
										<td style="text-align:left;" colspan=3>1.2 Did the rep use a pleasant, respectful tone? </td>
										<td colspan=3>
											<select class="form-control amd_point" name="data[respectful_tone]" disabled>
												<option value="">-Select-</option>
                       					 <option amd_val=2 <?php echo $agnt_feedback['respectful_tone']=='Effective'?"selected":""; ?> value="Effective">Effective</option>
												<option amd_val=2 <?php echo $agnt_feedback['respectful_tone']=='Unacceptable'?"selected":""; ?> value="Unacceptable">Unacceptable</option>
												<option amd_val=0 <?php echo $agnt_feedback['respectful_tone']=='N/A'?"selected":""; ?> value="N/A">N/A</option>
											</select>
										</td>
										<td colspan=2><input type="text" class="form-control" name="data[cmt2]" value="<?php echo $agnt_feedback['cmt2']; ?>" disabled></td>
									</tr>
                					  <tr>
										<td style="text-align:left;" colspan=3>1.3 Did the rep correctly verify the caller's info. prior to proceeding with the call? </td>
										<td colspan=3>
											<select class="form-control amd_point" name="data[correctly_verify_the_caller]" disabled>
												<option value="">-Select-</option>
                        				<option amd_val=2 <?php echo $agnt_feedback['correctly_verify_the_caller']=='Effective'?"selected":""; ?> value="Effective">Effective</option>
												<option amd_val=2 <?php echo $agnt_feedback['correctly_verify_the_caller']=='Unacceptable'?"selected":""; ?> value="Unacceptable">Unacceptable</option>
												<option amd_val=0 <?php echo $agnt_feedback['correctly_verify_the_caller']=='N/A'?"selected":""; ?> value="N/A">N/A</option>
											</select>
										</td>
										<td colspan=2><input type="text" class="form-control" name="data[cmt3]" value="<?php echo $agnt_feedback['cmt3']; ?>" disabled></td>
									</tr>
									<tr>
										<td style="text-align:left" colspan=3>1.4 Did the rep offer a willingness statement? (I'd be happy to help you with that, etc.)</td>
										<td colspan=3>
											<select class="form-control amd_point" name="data[willingness_statement]" disabled>
												<option value="">-Select-</option>
                        						<option amd_val=2 <?php echo $agnt_feedback['willingness_statement']=='Effective'?"selected":""; ?> value="Effective">Effective</option>
												<option amd_val=2 <?php echo $agnt_feedback['willingness_statement']=='Unacceptable'?"selected":""; ?> value="Unacceptable">Unacceptable</option>
												<option amd_val=0 <?php echo $agnt_feedback['willingness_statement']=='N/A'?"selected":""; ?> value="N/A">N/A</option>
											</select>
										</td>
										<td colspan=2><input type="text" class="form-control" name="data[cmt4]" value="<?php echo $agnt_feedback['cmt4']; ?>" disabled></td>
									</tr>
									<tr>
										<td style="text-align:left" colspan=3>1.5 Did the rep display a professional manner and refrain from speaking over or interrupting the caller?</td>
										<td colspan=3>
											<select class="form-control amd_point" name="data[professional_manner]" disabled>
												<option value="">-Select-</option>
                        						<option amd_val=2 <?php echo $agnt_feedback['professional_manner']=='Effective'?"selected":""; ?> value="Effective">Effective</option>
												<option amd_val=2 <?php echo $agnt_feedback['professional_manner']=='Unacceptable'?"selected":""; ?> value="Unacceptable">Unacceptable</option>
												<option amd_val=0 <?php echo $agnt_feedback['professional_manner']=='N/A'?"selected":""; ?> value="N/A">N/A</option>
											</select>
										</td>
										<td colspan=2><input type="text" class="form-control" name="data[cmt5]" value="<?php echo $agnt_feedback['cmt5']; ?>" disabled></td>
									</tr>
                 					 <tr>
                 					   <td class="eml" colspan="8">Call Processes</td>
                 					 </tr>
									<tr>
										<td style="text-align:left" colspan=3>2.1 Did the rep have any incomplete provider info?</td>
										<td colspan=3>
											<select class="form-control amd_point" name="data[incomplete_provider]" disabled>
												<option value="">-Select-</option>
												<option amd_val=5 <?php echo $agnt_feedback['incomplete_provider']=='Effective'?"selected":""; ?> value="Effective">Effective</option>
												<option amd_val=5 <?php echo $agnt_feedback['incomplete_provider']=='Unacceptable'?"selected":""; ?> value="Unacceptable">Unacceptable</option>
												<option amd_val=0 <?php echo $agnt_feedback['incomplete_provider']=='N/A'?"selected":""; ?> value="N/A">N/A</option>
											</select>
										</td>
										<td colspan=2><input type="text" class="form-control" name="data[cmt6]" value="<?php echo $agnt_feedback['cmt6']; ?>" disabled></td>
									</tr>
									<tr>
										<td style="text-align:left" colspan=3>2.2 Did the rep incorrectly quote any benefits? </td>
										<td colspan=3>
											<select class="form-control amd_point" name="data[incorrectly_quote]" disabled>
												<option value="">-Select-</option>
												<option amd_val=5 <?php echo $agnt_feedback['incorrectly_quote']=='Effective'?"selected":""; ?> value="Effective">Effective</option>
												<option amd_val=5 <?php echo $agnt_feedback['incorrectly_quote']=='Unacceptable'?"selected":""; ?> value="Unacceptable">Unacceptable</option>
												<option amd_val=0 <?php echo $agnt_feedback['incorrectly_quote']=='N/A'?"selected":""; ?> value="N/A">N/A</option>
											</select>
										</td>
										<td colspan=2><input type="text" class="form-control" name="data[cmt7]" value="<?php echo $agnt_feedback['cmt7']; ?>" disabled></td>
									</tr>
									<tr>
										<td style="text-align:left;" colspan=3>2.3 Did the rep incorrectly quote any copay or coinsurance? Or did they miss the coinsurance/copay?</td>
										<td colspan=3>
											<select class="form-control amd_point" id="hcpssAF1" name="data[miss_the_coinsurance]" disabled>
												<option value="">-Select-</option>
												<option amd_val=5 <?php echo $agnt_feedback['miss_the_coinsurance']=='Effective'?"selected":""; ?> value="Effective">Effective</option>
												<option amd_val=5 <?php echo $agnt_feedback['miss_the_coinsurance']=='Unacceptable'?"selected":""; ?> value="Unacceptable">Unacceptable</option>
												<option amd_val=0 <?php echo $agnt_feedback['miss_the_coinsurance']=='N/A'?"selected":""; ?> value="N/A">N/A</option>
											</select>
										</td>
										<td colspan=2><input type="text" class="form-control" name="data[cmt8]" value="<?php echo $agnt_feedback['cmt8']; ?>" disabled></td>
									</tr>
                 					<tr>
										<td style="text-align:left;" colspan=3>2.4 Did the rep incorrectly give CR/RC/MAB/RAA/CY or PY?</td>
										<td colspan=3>
											<select class="form-control amd_point" id="hcpssAF1" name="data[incorrectly_give_cr]" disabled>
												<option value="">-Select-</option>
												<option amd_val=5 <?php echo $agnt_feedback['incorrectly_give_cr']=='Effective'?"selected":""; ?> value="Effective">Effective</option>
												<option amd_val=5 <?php echo $agnt_feedback['incorrectly_give_cr']=='Unacceptable'?"selected":""; ?> value="Unacceptable">Unacceptable</option>
												<option amd_val=0 <?php echo $agnt_feedback['incorrectly_give_cr']=='N/A'?"selected":""; ?> value="N/A">N/A</option>
											</select>
										</td>
										<td colspan=2><input type="text" class="form-control" name="data[cmt9]" value="<?php echo $agnt_feedback['cmt9']; ?>" disabled></td>
									</tr>
                  					<tr>
										<td style="text-align:left;" colspan=3>2.5 Did the rep incorrectly quote the deductible? </td>
										<td colspan=3>
											<select class="form-control amd_point" id="hcpssAF1" name="data[incorrectly_deductible]" disabled>
												<option value="">-Select-</option>
												<option amd_val=5 <?php echo $agnt_feedback['incorrectly_deductible']=='Effective'?"selected":""; ?> value="Effective">Effective</option>
												<option amd_val=5 <?php echo $agnt_feedback['incorrectly_deductible']=='Unacceptable'?"selected":""; ?> value="Unacceptable">Unacceptable</option>
												<option amd_val=0 <?php echo $agnt_feedback['incorrectly_deductible']=='N/A'?"selected":""; ?> value="N/A">N/A</option>
											</select>
										</td>
										<td colspan=2><input type="text" class="form-control" name="data[cmt10]" value="<?php echo $agnt_feedback['cmt10']; ?>" disabled></td>
									</tr>
									<tr>
										<td style="text-align:left;" colspan=3>2.6 Did the rep give any other incorrect information or miss any of the following regarding plan: (Effective Date, Frequency/Limitation/Network/OOP Max/Precert/Pre-X, Term Date)</td>
										<td colspan=3>
											<select class="form-control amd_point" id="hcpssAF1" name="data[incorrect_information]" disabled>
												<option value="">-Select-</option>
												<option amd_val=5 <?php echo $agnt_feedback['incorrect_information']=='Effective'?"selected":""; ?> value="Effective">Effective</option>
												<option amd_val=5 <?php echo $agnt_feedback['incorrect_information']=='Unacceptable'?"selected":""; ?> value="Unacceptable">Unacceptable</option>
												<option amd_val=0 <?php echo $agnt_feedback['incorrect_information']=='N/A'?"selected":""; ?> value="N/A">N/A</option>
											</select>
										</td>
										<td colspan=2><input type="text" class="form-control" name="data[cmt11]" value="<?php echo $agnt_feedback['cmt11']; ?>" disabled></td>
									</tr>
									<tr>
										<td style="text-align:left;" colspan=3>2.7 Did the rep provide the correct Claims Address when necessary?   </td>
										<td colspan=3>
											<select class="form-control amd_point" id="hcpssAF1" name="data[correct_claims_address]" disabled>
												<option value="">-Select-</option>
												<option amd_val=5 <?php echo $agnt_feedback['correct_claims_address']=='Effective'?"selected":""; ?> value="Effective">Effective</option>
												<option amd_val=5 <?php echo $agnt_feedback['correct_claims_address']=='Unacceptable'?"selected":""; ?> value="Unacceptable">Unacceptable</option>
												<option amd_val=0 <?php echo $agnt_feedback['correct_claims_address']=='N/A'?"selected":""; ?> value="N/A">N/A</option>
											</select>
										</td>
										<td colspan=2><input type="text" class="form-control" name="data[cmt12]" value="<?php echo $agnt_feedback['cmt12']; ?>" disabled></td>
									</tr>
									<tr>
										<td style="text-align:left;" colspan=3>2.8  Did the rep include all information necessary regarding Medical Necessity?</td>
										<td colspan=3>
											<select class="form-control amd_point" id="hcpssAF1" name="data[medical_necessity]" disabled>
												<option value="">-Select-</option>
												<option amd_val=5 <?php echo $agnt_feedback['medical_necessity']=='Effective'?"selected":""; ?> value="Effective">Effective</option>
												<option amd_val=5 <?php echo $agnt_feedback['medical_necessity']=='Unacceptable'?"selected":""; ?> value="Unacceptable">Unacceptable</option>
												<option amd_val=0 <?php echo $agnt_feedback['medical_necessity']=='N/A'?"selected":""; ?> value="N/A">N/A</option>
											</select>
										</td>
										<td colspan=2><input type="text" class="form-control" name="data[cmt13]" value="<?php echo $agnt_feedback['cmt13']; ?>" disabled></td>
									</tr>
									<tr>
										<td style="text-align:left;" colspan=3>2.9  Did the rep include all details correctly regarding DME coverage when necessary?</td>
										<td colspan=3>
											<select class="form-control amd_point" id="hcpssAF1" name="data[correctly_dme_coverage]" disabled>
												<option value="">-Select-</option>
												<option amd_val=5 <?php echo $agnt_feedback['correctly_dme_coverage']=='Effective'?"selected":""; ?> value="Effective">Effective</option>
												<option amd_val=5 <?php echo $agnt_feedback['correctly_dme_coverage']=='Unacceptable'?"selected":""; ?> value="Unacceptable">Unacceptable</option>
												<option amd_val=0 <?php echo $agnt_feedback['correctly_dme_coverage']=='N/A'?"selected":""; ?> value="N/A">N/A</option>
											</select>
										</td>
										<td colspan=2><input type="text" class="form-control" name="data[cmt14]" value="<?php echo $agnt_feedback['cmt14']; ?>" disabled></td>
									</tr>


									<tr><td class="eml" colspan=8>Soft Skills</td></tr>
									<tr>
										<td style="text-align:left" colspan=3>3.1 Did the agent speak clearly, concisely and at an appropriate pace?</td>
										<td colspan=3>
											<select class="form-control amd_point" name="data[speak_clearly]" disabled>
												<option value="">-Select-</option>
												<option amd_val=2 <?php echo $agnt_feedback['speak_clearly']=='Effective'?"selected":""; ?> value="Effective">Effective</option>
												<option amd_val=2 <?php echo $agnt_feedback['speak_clearly']=='Unacceptable'?"selected":""; ?> value="Unacceptable">Unacceptable</option>
												<option amd_val=0 <?php echo $agnt_feedback['speak_clearly']=='N/A'?"selected":""; ?> value="N/A">N/A</option>
											</select>
										</td>
										<td colspan=2><input type="text" class="form-control" name="data[cmt15]" value="<?php echo $agnt_feedback['cmt15']; ?>" disabled></td>
									</tr>
									<tr>
										<td style="text-align:left" colspan=3>3.2 Did the agent avoid use of internal terms, technical terms, slang and jargon on the call and in email?</td>
										<td colspan=3>
											<select class="form-control amd_point" name="data[internal_terms]" disabled>
												<option value="">-Select-</option>
												<option amd_val=2 <?php echo $agnt_feedback['internal_terms']=='Effective'?"selected":""; ?> value="Effective">Effective</option>
												<option amd_val=2 <?php echo $agnt_feedback['internal_terms']=='Unacceptable'?"selected":""; ?> value="Unacceptable">Unacceptable</option>
												<option amd_val=0 <?php echo $agnt_feedback['internal_terms']=='N/A'?"selected":""; ?> value="N/A">N/A</option>
											</select>
										</td>
										<td colspan=2><input type="text" class="form-control" name="data[cmt16]" value="<?php echo $agnt_feedback['cmt16']; ?>" disabled></td>
									</tr>
									<tr>
										<td style="text-align:left" colspan=3>3.3 Did the agent demonstrate a strong use of empathy in responses where required on the call and in email?</td>
										<td colspan=3>
											<select class="form-control amd_point" name="data[agent_demonstrate]" disabled>
												<option value="">-Select-</option>
												<option amd_val=2 <?php echo $agnt_feedback['agent_demonstrate']=='Effective'?"selected":""; ?> value="Effective">Effective</option>
												<option amd_val=2 <?php echo $agnt_feedback['agent_demonstrate']=='Unacceptable'?"selected":""; ?> value="Unacceptable">Unacceptable</option>
												<option amd_val=0 <?php echo $agnt_feedback['agent_demonstrate']=='N/A'?"selected":""; ?> value="N/A">N/A</option>
											</select>
										</td>
										<td colspan=2><input type="text" class="form-control" name="data[cmt17]" value="<?php echo $agnt_feedback['cmt17']; ?>" disabled></td>
									</tr>
									<tr>
										<td style="text-align:left" colspan=3>3.4 Did the agent use "please" and "thank you" throughout the call and in email communication?</td>
										<td colspan=3>
											<select class="form-control amd_point" name="data[email_communication]" disabled>
												<option value="">-Select-</option>
												<option amd_val=2 <?php echo $agnt_feedback['email_communication']=='Effective'?"selected":""; ?> value="Effective">Effective</option>
												<option amd_val=2 <?php echo $agnt_feedback['email_communication']=='Unacceptable'?"selected":""; ?> value="Unacceptable">Unacceptable</option>
												<option amd_val=0 <?php echo $agnt_feedback['email_communication']=='N/A'?"selected":""; ?> value="N/A">N/A</option>
											</select>
										</td>
										<td colspan=2><input type="text" class="form-control" name="data[cmt18]" value="<?php echo $agnt_feedback['cmt18']; ?>" disabled></td>
									</tr>
									<tr>
										<td style="text-align:left" colspan=3>3.5 Did the agent minimize extended silences throughout the call?</td>
										<td colspan=3>
											<select class="form-control amd_point" name="data[minimize_extended_silences]" disabled>
												<option value="">-Select-</option>
												<option amd_val=2 <?php echo $agnt_feedback['minimize_extended_silences']=='Effective'?"selected":""; ?> value="Effective">Effective</option>
												<option amd_val=2 <?php echo $agnt_feedback['minimize_extended_silences']=='Unacceptable'?"selected":""; ?> value="Unacceptable">Unacceptable</option>
												<option amd_val=0 <?php echo $agnt_feedback['minimize_extended_silences']=='N/A'?"selected":""; ?> value="N/A">N/A</option>
											</select>
										</td>
										<td colspan=2><input type="text" class="form-control" name="data[cmt19]" value="<?php echo $agnt_feedback['cmt19']; ?>" disabled></td>
									</tr>
									<tr>
										<td style="text-align:left" colspan=3>3.6 Did the agent speak with sincere warmth in his/her voice?</td>
										<td colspan=3>
											<select class="form-control amd_point" name="data[speak_with_sincere_warmth]" disabled>
												<option value="">-Select-</option>
												<option amd_val=2 <?php echo $agnt_feedback['speak_with_sincere_warmth']=='Effective'?"selected":""; ?> value="Effective">Effective</option>
												<option amd_val=2 <?php echo $agnt_feedback['speak_with_sincere_warmth']=='Unacceptable'?"selected":""; ?> value="Unacceptable">Unacceptable</option>
												<option amd_val=0 <?php echo $agnt_feedback['speak_with_sincere_warmth']=='N/A'?"selected":""; ?> value="N/A">N/A</option>
											</select>
										</td>
										<td colspan=2><input type="text" class="form-control" name="data[cmt20]" value="<?php echo $agnt_feedback['cmt20']; ?>" disabled></td>
									</tr>
									<tr>
										<td style="text-align:left" colspan=3>3.7 Did the agent use correct sentence structure and grammar in email commumnication?</td>
										<td colspan=3>
											<select class="form-control amd_point" name="data[sentence_structure]" disabled>
												<option value="">-Select-</option>
												<option amd_val=2 <?php echo $agnt_feedback['sentence_structure']=='Effective'?"selected":""; ?> value="Effective">Effective</option>
												<option amd_val=2 <?php echo $agnt_feedback['sentence_structure']=='Unacceptable'?"selected":""; ?> value="Unacceptable">Unacceptable</option>
												<option amd_val=0 <?php echo $agnt_feedback['sentence_structure']=='N/A'?"selected":""; ?> value="N/A">N/A</option>
											</select>
										</td>
										<td colspan=2><input type="text" class="form-control" name="data[cmt21]" value="<?php echo $agnt_feedback['cmt21']; ?>" disabled></td>
									</tr>
									<tr>
										<td style="text-align:left" colspan=3>3.8 Did the agent demonstrate patience with the caller on call and in email communication?</td>
										<td colspan=3>
											<select class="form-control amd_point" name="data[agent_demonstrate_patience]" disabled>
												<option value="">-Select-</option>
												<option amd_val=2 <?php echo $agnt_feedback['agent_demonstrate_patience']=='Effective'?"selected":""; ?> value="Effective">Effective</option>
												<option amd_val=2 <?php echo $agnt_feedback['agent_demonstrate_patience']=='Unacceptable'?"selected":""; ?> value="Unacceptable">Unacceptable</option>
												<option amd_val=0 <?php echo $agnt_feedback['agent_demonstrate_patience']=='N/A'?"selected":""; ?> value="N/A">N/A</option>
											</select>
										</td>
										<td colspan=2><input type="text" class="form-control" name="data[cmt22]" value="<?php echo $agnt_feedback['cmt22']; ?>" disabled></td>
									</tr>
									
									<tr><td class="eml" colspan=8>Closing</td></tr>
									<tr>
										<td style="text-align:left;" colspan=3>4.1 Did the rep accurately and completely document the call? </td>
										<td colspan=3>
											<select class="form-control amd_point" name="data[accurately_and_completely_document]" disabled>
												<option value="">-Select-</option>
												<option amd_val=5 <?php echo $agnt_feedback['accurately_and_completely_document']=='Effective'?"selected":""; ?> value="Effective">Effective</option>
												<option amd_val=5 <?php echo $agnt_feedback['accurately_and_completely_document']=='Unacceptable'?"selected":""; ?> value="Unacceptable">Unacceptable</option>
												<option amd_val=0 <?php echo $agnt_feedback['accurately_and_completely_document']=='N/A'?"selected":""; ?> value="N/A">N/A</option>
											</select>
										</td >
										<td colspan=2><input type="text" class="form-control" name="data[cmt23]" value="<?php echo $agnt_feedback['cmt23']; ?>" disabled></td>
									</tr>
									<tr>
										<td style="text-align:left;" colspan=3>4.2 Did the rep complete the correct confirmation and closing?</td>
										<td colspan=3>
											<select class="form-control amd_point" name="data[correct_confirmation_and_closing]" disabled>
												<option value="">-Select-</option>
												<option amd_val=5 <?php echo $agnt_feedback['correct_confirmation_and_closing']=='Effective'?"selected":""; ?> value="Effective">Effective</option>
												<option amd_val=5 <?php echo $agnt_feedback['correct_confirmation_and_closing']=='Unacceptable'?"selected":""; ?> value="Unacceptable">Unacceptable</option>
												<option amd_val=0 <?php echo $agnt_feedback['correct_confirmation_and_closing']=='N/A'?"selected":""; ?> value="N/A">N/A</option>
											</select>
										</td>
										<td colspan=2><input type="text" class="form-control" name="data[cmt24]" value="<?php echo $agnt_feedback['cmt24']; ?>" disabled></td>
									</tr>
									<tr>
										<td style="text-align:left;" colspan=3>4.3 Did the rep thank the caller before closing?</td>
										<td colspan=3>
											<select class="form-control amd_point" name="data[caller_before_closing]" disabled>
												<option value="">-Select-</option>
												<option amd_val=5 <?php echo $agnt_feedback['caller_before_closing']=='Effective'?"selected":""; ?> value="Effective">Effective</option>
												<option amd_val=5 <?php echo $agnt_feedback['caller_before_closing']=='Unacceptable'?"selected":""; ?> value="Unacceptable">Unacceptable</option>
												<option amd_val=0 <?php echo $agnt_feedback['caller_before_closing']=='N/A'?"selected":""; ?> value="N/A">N/A</option>
											</select>
										</td>
										<td colspan=2><input type="text" class="form-control" name="data[cmt25]" value="<?php echo $agnt_feedback['cmt25']; ?>" disabled></td>
									</tr>
									<tr>
										<td style="text-align:left;" colspan=3>4.4 Did the rep do everything possible to assist the caller?</td>
										<td colspan=3>
											<select class="form-control amd_point" name="data[possible_to_assist_the_caller]" disabled>
												<option value="">-Select-</option>
												<option amd_val=5 <?php echo $agnt_feedback['possible_to_assist_the_caller']=='Effective'?"selected":""; ?> value="Effective">Effective</option>
												<option amd_val=5 <?php echo $agnt_feedback['possible_to_assist_the_caller']=='Unacceptable'?"selected":""; ?> value="Unacceptable">Unacceptable</option>
												<option amd_val=0 <?php echo $agnt_feedback['possible_to_assist_the_caller']=='N/A'?"selected":""; ?> value="N/A">N/A</option>
											</select>
										</td>
										<td colspan=2><input type="text" class="form-control" name="data[cmt26]" value="<?php echo $agnt_feedback['cmt26']; ?>" disabled></td>
									</tr>
									<tr>
										<td style="text-align:left;" colspan=3>4.5 Did the rep anticipate the caller's needs? (to avoid unecessary callbacks or confusion)</td>
										<td colspan=3>
											<select class="form-control amd_point" name="data[anticipate_the_caller]" disabled>
												<option value="">-Select-</option>
												<option amd_val=5 <?php echo $agnt_feedback['anticipate_the_caller']=='Effective'?"selected":""; ?> value="Effective">Effective</option>
												<option amd_val=5 <?php echo $agnt_feedback['anticipate_the_caller']=='Unacceptable'?"selected":""; ?> value="Unacceptable">Unacceptable</option>
												<option amd_val=0 <?php echo $agnt_feedback['anticipate_the_caller']=='N/A'?"selected":""; ?> value="N/A">N/A</option>
											</select>
										</td>
										<td colspan=2><input type="text" class="form-control" name="data[cmt27]" value="<?php echo $agnt_feedback['cmt27']; ?>" disabled></td>
									</tr>
									<tr>
										<td>Call Summary:</td>
										<td colspan="2"><textarea class="form-control" id="" name="data[call_summary]" disabled><?php echo $agnt_feedback['call_summary'] ?></textarea></td>
										<td>Feedback:</td>
										<td colspan="2"><textarea class="form-control" id="" name="data[feedback]" disabled><?php echo $agnt_feedback['feedback'] ?></textarea></td>
									</tr>



								

												<!-- Riya  -->


					


										<?php } else if($campaign=='pilgrim'){ ?>
										<tr style="height:25px; font-weight:bold">
										<td colspan="3">Parameter</td>
										<td>Weightage</td>
					                    <td colspan="2">Marking Status</td>
					                    <td colspan="4">Comments/Notes</td>
										</tr>
										<tr>
					                    <td class="eml" colspan="3">Did the agent give the proper introduction and include their name?</td>
					                    <td>8</td>
					                    <td colspan="2">
					                      <select class="form-control amd_pilgrim_point" name="data[proper_introduction]" disabled>
					                        <option value="">-- SELECT --</option>
					                        <option amd_val=8 amd_max=8 <?= ($agnt_feedback['proper_introduction']=="Yes")?"selected":""?> value="Yes">Yes</option>
					                        <option amd_val=0 amd_max=8 <?= ($agnt_feedback['proper_introduction']=="No")?"selected":""?> value="No">No</option>
					                        <option amd_val=0 amd_max=0 <?= ($agnt_feedback['proper_introduction']=="NA")?"selected":""?> value="NA">NA</option>
					                      </select>
					                    </td>
					                    <td colspan="4">
					                      <input type="text" name="data[cmt1]" class="form-control" value="<?= $agnt_feedback['cmt1']?>" disabled/>
					                    </td>
					                  </tr>
					                  <tr>
					                    <td class="eml" colspan=3>Did the agent explain the offer and/or products?</td>
					                    <td>10</td>
					                    <td colspan=2>
					                      <select class="form-control amd_pilgrim_point" name="data[explain_offer]" disabled>
					                        <option value="">-- SELECT --</option>
					                        <option amd_val=10 amd_max=10 <?= ($agnt_feedback['explain_offer']=="Yes")?"selected":""?> value="Yes">Yes</option>
					                        <option amd_val=0 amd_max=10 <?= ($agnt_feedback['explain_offer']=="No")?"selected":""?> value="No">No</option>
					                        <option amd_val=0 amd_max=0 <?= ($agnt_feedback['explain_offer']=="NA")?"selected":""?> value="NA">NA</option>
					                      </select>
					                    </td>
					                    <td colspan="4">
					                      <input type="text" name="data[cmt2]" class="form-control" value="<?= $agnt_feedback['cmt2']?>" disabled/>
					                    </td>
					                  </tr>
					                  <tr>
					                    <td class="eml" colspan=3>Did the agent give customer proper responses?</td>
					                    <td>10</td>
					                    <td colspan=2>
					                      <select class="form-control amd_pilgrim_point" name="data[proper_response]" disabled>
					                        <option value="">-- SELECT --</option>
					                        <option amd_val=10 amd_max=10 <?= ($agnt_feedback['proper_response']=="Yes")?"selected":""?> value="Yes">Yes</option>
					                        <option amd_val=0 amd_max=10 <?= ($agnt_feedback['proper_response']=="No")?"selected":""?> value="No">No</option>
					                        <option amd_val=0 amd_max=0 <?= ($agnt_feedback['proper_response']=="NA")?"selected":""?> value="NA">NA</option>
					                      </select>
					                    </td>
					                    <td colspan="4">
					                      <input type="text" name="data[cmt3]" class="form-control" value="<?= $agnt_feedback['cmt3']?>" disabled/>
					                    </td>
					                  </tr>
					                  <tr>
					                    <td class="eml" colspan=3>Did the agent correctly probe?</td>
					                    <td>8</td>
					                    <td colspan=2>
					                      <select class="form-control amd_pilgrim_point" name="data[correct_probe]" disabled>
					                        <option value="">-- SELECT --</option>
					                        <option amd_val=8 amd_max=8 <?= ($agnt_feedback['correct_probe']=="Yes")?"selected":""?> value="Yes">Yes</option>
					                        <option amd_val=0 amd_max=8 <?= ($agnt_feedback['correct_probe']=="No")?"selected":""?> value="No">No</option>
					                        <option amd_val=0 amd_max=0 <?= ($agnt_feedback['correct_probe']=="NA")?"selected":""?> value="NA">NA</option>
					                      </select>
					                    </td>
					                    <td colspan="4">
					                      <input type="text" name="data[cmt4]" class="form-control" value="<?= $agnt_feedback['cmt4']?>" disabled/>
					                    </td>
					                  </tr>
					                  <tr>
					                    <td class="eml" colspan=3>Did the agent disposition the call properly?</td>
					                    <td>10</td>
					                    <td colspan=2>
					                      <select class="form-control amd_pilgrim_point" name="data[proper_disposition]" disabled>
					                        <option value="">-- SELECT --</option>
					                        <option amd_val=10 amd_max=10 <?= ($agnt_feedback['proper_disposition']=="Yes")?"selected":""?> value="Yes">Yes</option>
					                        <option amd_val=0 amd_max=10 <?= ($agnt_feedback['proper_disposition']=="No")?"selected":""?> value="No">No</option>
					                        <option amd_val=0 amd_max=0 <?= ($agnt_feedback['proper_disposition']=="NA")?"selected":""?> value="NA">NA</option>
					                      </select>
					                    </td>
					                    <td colspan="4">
					                      <input type="text" name="data[cmt5]" class="form-control" value="<?= $agnt_feedback['cmt5']?>" disabled/>
					                    </td>
					                  </tr>
					                  <tr>
					                    <td class="eml" colspan=3>Was the agent polite & courteous?</td>
					                    <td>10</td>
					                    <td colspan=2>
					                      <select class="form-control amd_pilgrim_point" name="data[polite_agent]" disabled>
					                        <option value="">-- SELECT --</option>
					                        <option amd_val=10 amd_max=10 <?= ($agnt_feedback['polite_agent']=="Yes")?"selected":""?> value="Yes">Yes</option>
					                        <option amd_val=0 amd_max=10 <?= ($agnt_feedback['polite_agent']=="No")?"selected":""?> value="No">No</option>
					                        <option amd_val=0 amd_max=0 <?= ($agnt_feedback['polite_agent']=="NA")?"selected":""?> value="NA">NA</option>
					                      </select>
					                    </td>
					                    <td colspan="4">
					                      <input type="text" name="data[cmt6]" class="form-control" value="<?= $agnt_feedback['cmt6']?>" disabled/>
					                    </td>
					                  </tr>
					                  <tr>
					                    <td class="eml" colspan=3>Was the agent ready for the call (minimal dead air)?</td>
					                    <td>10</td>
					                    <td colspan=2>
					                      <select class="form-control amd_pilgrim_point" name="data[minimal_dead_air]" disabled>
					                        <option value="">-- SELECT --</option>
					                        <option amd_val=10 amd_max=10 <?= ($agnt_feedback['minimal_dead_air']=="Yes")?"selected":""?> value="Yes">Yes</option>
					                        <option amd_val=0 amd_max=10 <?= ($agnt_feedback['minimal_dead_air']=="No")?"selected":""?> value="No">No</option>
					                        <option amd_val=0 amd_max=0 <?= ($agnt_feedback['minimal_dead_air']=="NA")?"selected":""?> value="NA">NA</option>
					                      </select>
					                    </td>
					                    <td colspan="4">
					                      <input type="text" name="data[cmt7]" class="form-control" value="<?= $agnt_feedback['cmt7']?>" disabled/>
					                    </td>
					                  </tr>
					                  <tr>
					                    <td class="eml" colspan=3>Did the agent show energy, empathy and enthusiasm?</td>
					                    <td>2</td>
					                    <td colspan=2>
					                      <select class="form-control amd_pilgrim_point" name="data[energy]" disabled>
					                        <option value="">-- SELECT --</option>
					                        <option amd_val=2 amd_max=2 <?= ($agnt_feedback['energy']=="Yes")?"selected":""?> value="Yes">Yes</option>
					                        <option amd_val=0 amd_max=2 <?= ($agnt_feedback['energy']=="No")?"selected":""?> value="No">No</option>
					                        <option amd_val=0 amd_max=0 <?= ($agnt_feedback['energy']=="NA")?"selected":""?> value="NA">NA</option>
					                      </select>
					                    </td>
					                    <td colspan="4">
					                      <input type="text" name="data[cmt8]" class="form-control" value="<?= $agnt_feedback['cmt8']?>" disabled/>
					                    </td>
					                  </tr>
					                  <tr>
					                    <td class="eml" colspan=3>Did the agent use appropriate tone, pacing, grammar & pronunciation?</td>
					                    <td>2</td>
					                    <td colspan=2>
					                      <select class="form-control amd_pilgrim_point" name="data[tone_pacing]" disabled>
					                        <option value="">-- SELECT --</option>
					                        <option amd_val=2 amd_max=2 <?= ($agnt_feedback['tone_pacing']=="Yes")?"selected":""?> value="Yes">Yes</option>
					                        <option amd_val=0 amd_max=2 <?= ($agnt_feedback['tone_pacing']=="No")?"selected":""?> value="No">No</option>
					                        <option amd_val=0 amd_max=0 <?= ($agnt_feedback['tone_pacing']=="NA")?"selected":""?> value="NA">NA</option>
					                      </select>
					                    </td>
					                    <td colspan="4">
					                      <input type="text" name="data[cmt9]" class="form-control" value="<?= $agnt_feedback['cmt9']?>" disabled/>
					                    </td>
					                  </tr>
					                  <tr>
					                    <td class="eml" colspan=3>Did the agent show accurate and complete grasp of information?</td>
					                    <td>10</td>
					                    <td colspan=2>
					                      <select class="form-control amd_pilgrim_point" name="data[acc_comp_info]" disabled>
					                        <option value="">-- SELECT --</option>
					                        <option amd_val=10 amd_max=10 <?= ($agnt_feedback['acc_comp_info']=="Yes")?"selected":""?> value="Yes">Yes</option>
					                        <option amd_val=0 amd_max=10 <?= ($agnt_feedback['acc_comp_info']=="No")?"selected":""?> value="No">No</option>
					                        <option amd_val=0 amd_max=0 <?= ($agnt_feedback['acc_comp_info']=="NA")?"selected":""?> value="NA">NA</option>
					                      </select>
					                    </td>
					                    <td colspan="4">
					                      <input type="text" name="data[cmt10]" class="form-control" value="<?= $agnt_feedback['cmt10']?>" disabled/>
					                    </td>
					                  </tr>
					                  <tr>
					                    <td class="eml" colspan=3>Did the agent set up Gold Card correctly-ideology #, acct #, caller’s name in the notes, give caller
					                      acct # and code (no dash), & provide the phone number to access the lines (1-800-386-1000</td>
					                    <td>10</td>
					                    <td colspan=2>
					                      <select class="form-control amd_pilgrim_point" name="data[setup_gold_card]" disabled>
					                        <option value="">-- SELECT --</option>
					                        <option amd_val=10 amd_max=10 <?= ($agnt_feedback['setup_gold_card']=="Yes")?"selected":""?> value="Yes">Yes</option>
					                        <option amd_val=0 amd_max=10 <?= ($agnt_feedback['setup_gold_card']=="No")?"selected":""?> value="No">No</option>
					                        <option amd_val=0 amd_max=0 <?= ($agnt_feedback['setup_gold_card']=="NA")?"selected":""?> value="NA">NA</option>
					                      </select>
					                    </td>
					                    <td colspan="4">
					                      <input type="text" name="data[cmt11]" class="form-control" value="<?= $agnt_feedback['cmt11']?>" disabled/>
					                    </td>
					                  </tr>
					                  <tr>
					                    <td class="eml" colspan=3>Did the agent properly disengage disruptive/prank caller (this is the customer service line, we must
					                      remain professional. For chat services please dial 1-800-Free Sex)
					                      Properly document account if call back is necessary with call back #, name, & reason</td>
					                    <td>10</td>
					                    <td colspan=2>
					                      <select class="form-control amd_pilgrim_point" name="data[disengage_prank_call]" disabled>
					                        <option value="">-- SELECT --</option>
					                        <option amd_val=10 amd_max=10 <?= ($agnt_feedback['disengage_prank_call']=="Yes")?"selected":""?> value="Yes">Yes</option>
					                        <option amd_val=0 amd_max=10 <?= ($agnt_feedback['disengage_prank_call']=="No")?"selected":""?> value="No">No</option>
					                        <option amd_val=0 amd_max=0 <?= ($agnt_feedback['disengage_prank_call']=="NA")?"selected":""?> value="NA">NA</option>
					                      </select>
					                    </td>
					                    <td colspan="4">
					                      <input type="text" name="data[cmt12]" class="form-control" value="<?= $agnt_feedback['cmt12']?>" disabled/>
					                    </td>
					                  </tr>
											<tr>
												<td>Call Summary:</td>
												<td colspan="2"><textarea class="form-control" id="" name="data[call_summary]" disabled><?php echo $agnt_feedback['call_summary'] ?></textarea></td>
												<td>Feedback:</td>
												<td colspan="2"><textarea class="form-control" id="" name="data[feedback]" disabled><?php echo $agnt_feedback['feedback'] ?></textarea></td>
											</tr>









						<?php }elseif($campaign =='healthbridge'){ ?>

									<tr>
		                              	<!-- <td style="font-weight:bold; font-size:16px" colspan="">Possible Score</td>
		                                 <td><input type="text" readonly id="healthbridge_possible" name="data[possible_score]" class="form-control" value="<?= $agnt_feedback['possible_score']?>" style="font-weight:bold"></td>

		                                 <td style="font-weight:bold; font-size:16px" colspan="">Earned Score</td>
		                                 <td><input type="text" readonly id="healthbridge_earned" name="data[earned_score]" class="form-control" value="<?= $agnt_feedback['earned_score']?>" style="font-weight:bold"></td>                 -->               
		 	                             <td style="font-weight:bold; font-size:16px">Overall Score:</td>
		                                 <td colspan="3"><input type="text" readonly id="healthbridge_overall_score" name="data[overall_score]" class="form-control" value="<?= $agnt_feedback['overall_score']?>%" style="font-weight:bold"></td>
		                              </tr>
									<tr style="height:25px; font-weight:bold;">
										<td colspan=4></td>
										<td colspan="2">RATING</td>
										<td colspan=2>COMMENTS/NOTES</td>
									</tr>
                              <tr>
                                 <td class="eml" colspan=8>Accuracy</td>
                              </tr>
                              <tr>
                                 <td style="text-align:left;" colspan=4>1.1 Correct Information provided regarding account details, benefit, information, plan, etc</td>
                                 <td colspan=2>
                                    <select class="form-control healthbridge_point" name="data[correct_information]" disabled>
                                       <option value="">-Select-</option>
                                       <option healthbridge_val=6.25 <?php echo $agnt_feedback['correct_information'] == 'Exceeds' ? "selected" : ""; ?> value="Exceeds">Exceeds Expectations</option>
                                       <option healthbridge_val=5.75 <?php echo $agnt_feedback['correct_information'] == 'Meets' ? "selected" : ""; ?> value="Meets">Meets Expectations</option>
                                       <option healthbridge_val=3.125 <?php echo $agnt_feedback['correct_information'] == 'Needs' ? "selected" : ""; ?> value="Needs">Needs Improvement</option>
                                    </select>
                                 </td>
                                 <td colspan=2><input type="text" class="form-control" name="data[cmt1]" value="<?php echo $agnt_feedback['cmt1']; ?>" disabled></td>
                              </tr>
                              <tr>
                                 <td style="text-align:left;" colspan=4>1.2 Resolved all member concerns or questions. </td>
                                 <td colspan=2>
                                    <select class="form-control healthbridge_point" name="data[resolved_all]" disabled>
                                       <option value="">-Select-</option>
                                       <option healthbridge_val=6.25 <?php echo $agnt_feedback['resolved_all'] == 'Exceeds' ? "selected" : ""; ?> value="Exceeds">Exceeds Expectations</option>
                                       <option healthbridge_val=5.75 <?php echo $agnt_feedback['resolved_all'] == 'Meets' ? "selected" : ""; ?> value="Meets">Meets Expectations</option>
                                       <option healthbridge_val=3.125 <?php echo $agnt_feedback['resolved_all'] == 'Needs' ? "selected" : ""; ?> value="Needs">Needs Improvement</option>
                                    </select>
                                 </td>
                                 <td colspan=2><input type="text" class="form-control" name="data[cmt2]" value="<?php echo $agnt_feedback['cmt2']; ?>" disabled></td>
                              </tr>
                              <tr>
                                 <td style="text-align:left;" colspan=4>1.3 Added detailed notes to the member account. </td>
                                 <td colspan=2>
                                    <select class="form-control healthbridge_point" name="data[added_detailed]" disabled>
                                       <option value="">-Select-</option>
                                       <option healthbridge_val=6.25 <?php echo $agnt_feedback['added_detailed'] == 'Exceeds' ? "selected" : ""; ?> value="Exceeds">Exceeds Expectations</option>
                                       <option healthbridge_val=5.75 <?php echo $agnt_feedback['added_detailed'] == 'Meets' ? "selected" : ""; ?> value="Meets">Meets Expectations</option>
                                       <option healthbridge_val=3.125 <?php echo $agnt_feedback['added_detailed'] == 'Needs' ? "selected" : ""; ?> value="Needs">Needs Improvement</option>
                                    </select>
                                 </td>
                                 <td colspan=2><input type="text" class="form-control" name="data[cmt3]" value="<?php echo $agnt_feedback['cmt3']; ?>" disabled></td>
                              </tr>
                              <tr>
                                 <td style="text-align:left" colspan=4>1.4 Disposition the call appropriately.</td>
                                 <td colspan=2>
                                    <select class="form-control healthbridge_point" name="data[disposition_the]" disabled>
                                       <option value="">-Select-</option>
                                       <option healthbridge_val=6.25 <?php echo $agnt_feedback['disposition_the'] == 'Exceeds' ? "selected" : ""; ?> value="Exceeds">Exceeds Expectations</option>
                                       <option healthbridge_val=5.75 <?php echo $agnt_feedback['disposition_the'] == 'Meets' ? "selected" : ""; ?> value="Meets">Meets Expectations</option>
                                       <option healthbridge_val=3.125 <?php echo $agnt_feedback['disposition_the'] == 'Needs' ? "selected" : ""; ?> value="Needs">Needs Improvement</option>
                                    </select>
                                 </td>
                                 <td colspan=2><input type="text" class="form-control" name="data[cmt4]" value="<?php echo $agnt_feedback['cmt4']; ?>" disabled></td>
                              </tr>
                              <tr>
                                 <td class="eml" colspan="8">Adherence to Company Policies</td>
                              </tr>
                              <tr>
                                 <td style="text-align:left" colspan=4>2.1 Verified the member's name, last 4 SS#, DOB, and zipcode. </td>
                                 <td colspan=2>
                                    <select class="form-control healthbridge_point" name="data[verified_the]" disabled>
                                       <option value="">-Select-</option>
                                       <option healthbridge_val=6.25 <?php echo $agnt_feedback['verified_the'] == 'Exceeds' ? "selected" : ""; ?> value="Exceeds">Exceeds Expectations</option>
                                       <option healthbridge_val=5.75 <?php echo $agnt_feedback['verified_the'] == 'Meets' ? "selected" : ""; ?> value="Meets">Meets Expectations</option>
                                       <option healthbridge_val=3.125 <?php echo $agnt_feedback['verified_the'] == 'Needs' ? "selected" : ""; ?> value="Needs">Needs Improvement</option>
                                    </select>
                                 </td>
                                 <td colspan=2><input type="text" class="form-control" name="data[cmt5]" value="<?php echo $agnt_feedback['cmt5']; ?>" disabled></td>
                              </tr>
                              <tr>
                                 <td style="text-align:left" colspan=4>2.2 Used the verification button. </td>
                                 <td colspan=2>
                                    <select class="form-control healthbridge_point" name="data[used_the_verification]" disabled>
                                       <option value="">-Select-</option>
                                       <option healthbridge_val=6.25 <?php echo $agnt_feedback['used_the_verification'] == 'Exceeds' ? "selected" : ""; ?> value="Exceeds">Exceeds Expectations</option>
                                       <option healthbridge_val=5.75 <?php echo $agnt_feedback['used_the_verification'] == 'Meets' ? "selected" : ""; ?> value="Meets">Meets Expectations</option>
                                       <option healthbridge_val=3.125 <?php echo $agnt_feedback['used_the_verification'] == 'Needs' ? "selected" : ""; ?> value="Needs">Needs Improvement</option>
                                    </select>
                                 </td>
                                 <td colspan=2><input type="text" class="form-control" name="data[cmt6]" value="<?php echo $agnt_feedback['cmt6']; ?>" disabled></td>
                              </tr>
                              <tr>
                                 <td style="text-align:left;" colspan=4>2.3 Followed all company procedures, guidelines, and policies.</td>
                                 <td colspan=2>
                                    <select class="form-control healthbridge_point" name="data[followed_all_company]" disabled>
                                       <option value="">-Select-</option>
                                       <option healthbridge_val=6.25 <?php echo $agnt_feedback['followed_all_company'] == 'Exceeds' ? "selected" : ""; ?> value="Exceeds">Exceeds Expectations</option>
                                       <option healthbridge_val=5.75 <?php echo $agnt_feedback['followed_all_company'] == 'Meets' ? "selected" : ""; ?> value="Meets">Meets Expectations</option>
                                       <option healthbridge_val=3.125 <?php echo $agnt_feedback['followed_all_company'] == 'Needs' ? "selected" : ""; ?> value="Needs">Needs Improvement</option>
                                    </select>
                                 </td>
                                 <td colspan=2><input type="text" class="form-control" name="data[cmt7]" value="<?php echo $agnt_feedback['cmt7']; ?>" disabled></td>
                              </tr>
                              <tr>
                                 <td style="text-align:left;" colspan=4>2.4 Informed the member of call recording (OUTBOUND ONLY)</td>
                                 <td colspan=2>
                                    <select class="form-control healthbridge_point" name="data[informed_the_member]" disabled>
                                       <option value="">-Select-</option>
                                       <option healthbridge_val=6.25 <?php echo $agnt_feedback['informed_the_member'] == 'Exceeds' ? "selected" : ""; ?> value="Exceeds">Exceeds Expectations</option>
                                       <option healthbridge_val=5.75 <?php echo $agnt_feedback['informed_the_member'] == 'Meets' ? "selected" : ""; ?> value="Meets">Meets Expectations</option>
                                       <option healthbridge_val=3.125 <?php echo $agnt_feedback['informed_the_member'] == 'Needs' ? "selected" : ""; ?> value="Needs">Needs Improvement</option>
                                    </select>
                                 </td>
                                 <td colspan=2><input type="text" class="form-control" name="data[cmt8]" value="<?php echo $agnt_feedback['cmt8']; ?>" disabled></td>
                              </tr>
                              <tr>
                                 <td class="eml" colspan=8>Soft Skills</td>
                              </tr>
                              <tr>
                                 <td style="text-align:left" colspan=4>3.1 Proper Greeting and Closing was used including name, company, and name. </td>
                                 <td colspan=2>
                                    <select class="form-control healthbridge_point" name="data[proper_greeting]" disabled>
                                       <option value="">-Select-</option>
                                       <option healthbridge_val=5 <?php echo $agnt_feedback['proper_greeting'] == 'Exceeds' ? "selected" : ""; ?> value="Exceeds">Exceeds Expectations</option>
                                       <option healthbridge_val=3 <?php echo $agnt_feedback['proper_greeting'] == 'Meets' ? "selected" : ""; ?> value="Meets">Meets Expectations</option>
                                       <option healthbridge_val=2.5 <?php echo $agnt_feedback['proper_greeting'] == 'Needs' ? "selected" : ""; ?> value="Needs">Needs Improvement</option>
                                    </select>
                                 </td>
                                 <td colspan=2><input type="text" class="form-control" name="data[cmt9]" value="<?php echo $agnt_feedback['cmt9']; ?>" disabled></td>
                              </tr>
                              <tr>
                                 <td style="text-align:left" colspan=4>3.2 Clear communication, active listening, call control, and efficiency was demonstrated throughout the call. </td>
                                 <td colspan=2>
                                    <select class="form-control healthbridge_point" name="data[clear_communication]" disabled>
                                       <option value="">-Select-</option>
                                       <option healthbridge_val=5 <?php echo $agnt_feedback['clear_communication'] == 'Exceeds' ? "selected" : ""; ?> value="Exceeds">Exceeds Expectations</option>
                                       <option healthbridge_val=3 <?php echo $agnt_feedback['clear_communication'] == 'Meets' ? "selected" : ""; ?> value="Meets">Meets Expectations</option>
                                       <option healthbridge_val=2.5 <?php echo $agnt_feedback['clear_communication'] == 'Needs' ? "selected" : ""; ?> value="Needs">Needs Improvement</option>
                                    </select>
                                 </td>
                                 <td colspan=2><input type="text" class="form-control" name="data[cmt10]" value="<?php echo $agnt_feedback['cmt10']; ?>" disabled></td>
                              </tr>
                              <tr>
                                 <td style="text-align:left" colspan=4>3.3 Proper expectations were set, empathetic, pleasant voice tone, and positive attitude during the call. </td>
                                 <td colspan=2>
                                    <select class="form-control healthbridge_point" name="data[proper_expectations]" disabled>
                                       <option value="">-Select-</option>
                                       <option healthbridge_val=5 <?php echo $agnt_feedback['proper_expectations'] == 'Exceeds' ? "selected" : ""; ?> value="Exceeds">Exceeds Expectations</option>
                                       <option healthbridge_val=3 <?php echo $agnt_feedback['proper_expectations'] == 'Meets' ? "selected" : ""; ?> value="Meets">Meets Expectations</option>
                                       <option healthbridge_val=2.5 <?php echo $agnt_feedback['proper_expectations'] == 'Needs' ? "selected" : ""; ?> value="Needs">Needs Improvement</option>
                                    </select>
                                 </td>
                                 <td colspan=2><input type="text" class="form-control" name="data[cmt11]" value="<?php echo $agnt_feedback['cmt11']; ?>" disabled></td>
                              </tr>
                              <tr>
                                 <td style="text-align:left" colspan=4>3.4 Avoided industry jargon, excessive hold time, dead air, slang, interruptions, or self talk.</td>
                                 <td colspan=2>
                                    <select class="form-control healthbridge_point" name="data[avoided_industry]" disabled>
                                       <option value="">-Select-</option>
                                       <option healthbridge_val=5 <?php echo $agnt_feedback['avoided_industry'] == 'Exceeds' ? "selected" : ""; ?> value="Exceeds">Exceeds Expectations</option>
                                       <option healthbridge_val=3 <?php echo $agnt_feedback['avoided_industry'] == 'Meets' ? "selected" : ""; ?> value="Meets">Meets Expectations</option>
                                       <option healthbridge_val=2.5 <?php echo $agnt_feedback['avoided_industry'] == 'Needs' ? "selected" : ""; ?> value="Needs">Needs Improvement</option>
                                    </select>
                                 </td>
                                 <td colspan=2><input type="text" class="form-control" name="data[cmt12]" value="<?php echo $agnt_feedback['cmt12']; ?>" disabled></td>
                              </tr>
                              <tr>
                                 <td style="text-align:left" colspan=4>3.5 Verified current address, preffered phone number and email address. </td>
                                 <td colspan=2>
                                    <select class="form-control healthbridge_point" name="data[verified_current_address]" disabled>
                                       <option value="">-Select-</option>
                                       <option healthbridge_val=5 <?php echo $agnt_feedback['verified_current_address'] == 'Exceeds' ? "selected" : ""; ?> value="Exceeds">Exceeds Expectations</option>
                                       <option healthbridge_val=3 <?php echo $agnt_feedback['verified_current_address'] == 'Meets' ? "selected" : ""; ?> value="Meets">Meets Expectations</option>
                                       <option healthbridge_val=2.5 <?php echo $agnt_feedback['verified_current_address'] == 'Needs' ? "selected" : ""; ?> value="Needs">Needs Improvement</option>
                                    </select>
                                 </td>
                                 <td colspan=2><input type="text" class="form-control" name="data[cmt13]" value="<?php echo $agnt_feedback['cmt13']; ?>" disabled></td>
                              </tr>
                              <tr>
                                 <td class="eml" colspan=8>Payment Communication</td>
                              </tr>
                              <tr>
                                 <td style="text-align:left;" colspan=4>4.1 If applicable, requested payment from member and other family members.  </td>
                                 <td colspan=2>
                                    <select class="form-control healthbridge_point" name="data[if_applicable_requested]" disabled>
                                       <option value="">-Select-</option>
                                       <option healthbridge_val=6.25 <?php echo $agnt_feedback['if_applicable_requested'] == 'Exceeds' ? "selected" : ""; ?> value="Exceeds">Exceeds Expectations</option>
                                       <option healthbridge_val=5.75 <?php echo $agnt_feedback['if_applicable_requested'] == 'Meets' ? "selected" : ""; ?> value="Meets">Meets Expectations</option>
                                       <option healthbridge_val=3.125 <?php echo $agnt_feedback['if_applicable_requested'] == 'Needs' ? "selected" : ""; ?> value="Needs">Needs Improvement</option>
                                    </select>
                                 </td>
                                 <td colspan=2><input type="text" class="form-control" name="data[cmt14]" value="<?php echo $agnt_feedback['cmt14']; ?>" disabled></td>
                              </tr>
                              <tr>
                                 <td style="text-align:left;" colspan=4>4.2 If applicable, the member has outstanding balance after payment, ask if they would like us to set up a recurring payment. </td>
                                 <td colspan=2>
                                    <select class="form-control healthbridge_point" name="data[if_applicable_the_member]" disabled>
                                       <option value="">-Select-</option>
                                       <option healthbridge_val=6.25 <?php echo $agnt_feedback['if_applicable_the_member'] == 'Exceeds' ? "selected" : ""; ?> value="Exceeds">Exceeds Expectations</option>
                                       <option healthbridge_val=5.75 <?php echo $agnt_feedback['if_applicable_the_member'] == 'Meets' ? "selected" : ""; ?> value="Meets">Meets Expectations</option>
                                       <option healthbridge_val=3.125 <?php echo $agnt_feedback['if_applicable_the_member'] == 'Needs' ? "selected" : ""; ?> value="Needs">Needs Improvement</option>
                                    </select>
                                 </td>
                                 <td colspan=2><input type="text" class="form-control" name="data[cmt15]" value="<?php echo $agnt_feedback['cmt15']; ?>" disabled></td>
                              </tr>
                              <tr>
                                 <td style="text-align:left;" colspan=4>4.3 Did agent present the authorize payment ask before processing</td>
                                 <td colspan=2>
                                    <select class="form-control healthbridge_point" name="data[did_agent_present]" disabled>
                                       <option value="">-Select-</option>
                                       <option healthbridge_val=6.25 <?php echo $agnt_feedback['did_agent_present'] == 'Exceeds' ? "selected" : ""; ?> value="Exceeds">Exceeds Expectations</option>
                                       <option healthbridge_val=5.75 <?php echo $agnt_feedback['did_agent_present'] == 'Meets' ? "selected" : ""; ?> value="Meets">Meets Expectations</option>
                                       <option healthbridge_val=3.125 <?php echo $agnt_feedback['did_agent_present'] == 'Needs' ? "selected" : ""; ?> value="Needs">Needs Improvement</option>
                                    </select>
                                 </td>
                                 <td colspan=2><input type="text" class="form-control" name="data[cmt16]" value="<?php echo $agnt_feedback['cmt16']; ?>" disabled></td>
                              </tr>
                              <tr>
                                 <td style="text-align:left;" colspan=4>4.4 Did agent offer confirmation number</td>
                                 <td colspan=2>
                                    <select class="form-control healthbridge_point" name="data[did_agent_offer]" disabled>
                                       <option value="">-Select-</option>
                                       <option healthbridge_val=6.25 <?php echo $agnt_feedback['did_agent_offer'] == 'Exceeds' ? "selected" : ""; ?> value="Exceeds">Exceeds Expectations</option>
                                       <option healthbridge_val=5.75 <?php echo $agnt_feedback['did_agent_offer'] == 'Meets' ? "selected" : ""; ?> value="Meets">Meets Expectations</option>
                                       <option healthbridge_val=3.125 <?php echo $agnt_feedback['did_agent_offer'] == 'Needs' ? "selected" : ""; ?> value="Needs">Needs Improvement</option>
                                    </select>
                                 </td>
                                 <td colspan=2><input type="text" class="form-control" name="data[cmt17]" value="<?php echo $agnt_feedback['cmt17']; ?>" disabled></td>
                              </tr>
                             
                              <tr>
                                 <td class="eml" colspan=8>Auto Fails</td>
                              </tr>
                              <tr>
                                 <td style="text-align:left; color: red;" colspan=4>4.5 AAdhered to HIPAA regulations throughout the entire call.</td>
                                 <td colspan=2>
                                    <select class="form-control healthbridge_point" name="data[adhered_to_HIPAA]" disabled>
                                       <option value="">-Select-</option>
                                       <option healthbridge_val=0 <?php echo $agnt_feedback['adhered_to_HIPAA'] == 'Yes' ? "selected" : ""; ?> value="Yes">Yes</option>
                                       <option healthbridge_val=0 <?php echo $agnt_feedback['adhered_to_HIPAA'] == 'No' ? "selected" : ""; ?> value="No">No</option>
                                       
                                    </select>
                                 </td>
                                 <td colspan=2><input type="text" class="form-control" name="data[cmt19]" value="<?php echo $agnt_feedback['cmt19']; ?>" disabled></td>
                              </tr>
                              <tr>
                                 <td style="text-align:left; color: red;" colspan=4>4.6 Used inappropriate tone and language with the member</td>
                                 <td colspan=2>
                                   <select class="form-control healthbridge_point" name="data[used_inappropriate]" disabled>
                                       <option value="">-Select-</option>
                                       <option healthbridge_val=0 <?php echo $agnt_feedback['used_inappropriate'] == 'Yes' ? "selected" : ""; ?> value="Yes">Yes</option>
                                       <option healthbridge_val=0 <?php echo $agnt_feedback['used_inappropriate'] == 'No' ? "selected" : ""; ?> value="No">No</option>
                                       
                                    </select>
                                 </td>
                                 <td colspan=2><input type="text" class="form-control" name="data[cmt20]" value="<?php echo $agnt_feedback['cmt20']; ?>" disabled></td>
                              </tr>
                              <tr>
                                 <td style="text-align:left; color: red;" colspan=4>4.7 Did agent repeat card numbers back. </td>
                                 <td colspan=2>
                                    <select class="form-control healthbridge_point" name="data[did_agent_repeat]" disabled>
                                       <option value="">-Select-</option>
                                       <option healthbridge_val=0 <?php echo $agnt_feedback['did_agent_repeat'] == 'Yes' ? "selected" : ""; ?> value="Yes">Yes</option>
                                       <option healthbridge_val=0 <?php echo $agnt_feedback['did_agent_repeat'] == 'No' ? "selected" : ""; ?> value="No">No</option>
                                       
                                    </select>
                                 </td>
                                 <td colspan=2><input type="text" class="form-control" name="data[cmt21]" value="<?php echo $agnt_feedback['cmt21']; ?>" disabled></td>
                              </tr>
                              <tr>
                                 <td style="text-align:left; color: red;" colspan=4>4.8 Call Avoidance </td>
                                 <td colspan=2>
                                    <select class="form-control healthbridge_point" name="data[call_avoidance]" disabled>
                                       <option value="">-Select-</option>
                                       <option healthbridge_val=0 <?php echo $agnt_feedback['call_avoidance'] == 'Yes' ? "selected" : ""; ?> value="Yes">Yes</option>
                                       <option healthbridge_val=0 <?php echo $agnt_feedback['call_avoidance'] == 'No' ? "selected" : ""; ?> value="No">No</option>
                                       
                                    </select>
                                 </td>
                                 <td colspan=2><input type="text" class="form-control" name="data[cmt22]" value="<?php echo $agnt_feedback['cmt22']; ?>" disabled></td>
                              </tr>
								<tr>
                                 <td>Call Summary:</td>
                                 <td colspan="2"><textarea class="form-control" id="" name="data[call_summary]" disabled=""><?php echo $agnt_feedback['call_summary'] ?></textarea></td>
                                 <td>Feedback:</td>
                                 <td colspan="2"><textarea class="form-control" id="" name="data[feedback]" disabled=""><?php echo $agnt_feedback['feedback'] ?></textarea></td>
                               </tr>

							   <?php }elseif($campaign =='healthbridgenew'){ ?>

								<tr>
									<!-- <td style="font-weight:bold; font-size:16px" colspan="">Possible Score</td>
									<td><input type="text" readonly id="healthbridge_possible" name="data[possible_score]" class="form-control" value="<?= $agnt_feedback['possible_score']?>" style="font-weight:bold"></td>

									<td style="font-weight:bold; font-size:16px" colspan="">Earned Score</td>
									<td><input type="text" readonly id="healthbridge_earned" name="data[earned_score]" class="form-control" value="<?= $agnt_feedback['earned_score']?>" style="font-weight:bold"></td>                 -->               
									<td style="font-weight:bold; font-size:16px">Overall Score:</td>
									<td colspan="3"><input type="text" readonly id="healthbridge_overall_score" name="data[overall_score]" class="form-control" value="<?= $agnt_feedback['overall_score']?>%" style="font-weight:bold"></td>
								</tr>
								<tr style="height:25px; font-weight:bold;">
									<td colspan=3>Parameter</td>
									<td colspan="2">RATING</td>
									<td colspan="3">COMMENTS/NOTES</td>
								</tr>
								<tr>
                                 <td class="eml" colspan=8>Accuracy</td>
                              </tr>
                              <tr>
                                 <td style="text-align:left;" colspan=3>1.1 Resolved all member concerns or questions.</td>
                                 <td colspan="2">
                                    <select class="form-control healthbridge_point" name="data[resolved_all]" disabled>
                                      <!-- <option value="">-Select-</option> -->
									  <option healthbridge_val=5.75 healthbridge_max_val=7.25 <?php echo $agnt_feedback['resolved_all']=='Meets'?"selected":""; ?> value="Meets">Meets Expectations</option>
                                       <option healthbridge_val=7.25 healthbridge_max_val=7.25 <?php echo $agnt_feedback['resolved_all']=='Exceeds'?"selected":""; ?> value="Exceeds">Exceeds Expectations</option>
                                       <option healthbridge_val=3.125 healthbridge_max_val=7.25 <?php echo $agnt_feedback['resolved_all']=='Needs'?"selected":""; ?> value="Needs">Needs Improvement</option>
                                    </select>
                                 </td>
                                 <td colspan=3><input type="text" class="form-control" disabled name="data[cmt1]" value="<?php echo $agnt_feedback['cmt1']; ?>"></td>
                              </tr>
                              <tr>
                                 <td style="text-align:left;" colspan=3>1.2 Added detailed notes to the member account and Jira ticket, if needed. </td>
                                 <td colspan="2">
                                    <select class="form-control healthbridge_point" name="data[added_detailed]" disabled>
                                       <!-- <option value="">-Select-</option> -->
                                       <option healthbridge_val=7.25 healthbridge_max_val=7.25 <?php echo $agnt_feedback['added_detailed']=='Yes'?"selected":""; ?> value="Yes">Yes</option> 
                                       <option healthbridge_val=0 healthbridge_max_val=0 <?php echo $agnt_feedback['added_detailed']=='No'?"selected":""; ?> value="No">No</option>
                                    
                                    </select>
                                 </td>
                                 <td colspan=3><input type="text" class="form-control" disabled name="data[cmt2]" value="<?php echo $agnt_feedback['cmt2']; ?>"></td>
                              </tr>
                              <tr>
                                 <td style="text-align:left;" colspan=3>1.3 Dispositioned the call appropriately.</td>
                                 <td colspan="2">
                                    <select class="form-control healthbridge_point" name="data[dispositioned]" disabled>
                                       <!-- <option value="">-Select-</option> -->
                                       <option healthbridge_val=7.25 healthbridge_max_val=7.25 <?php echo $agnt_feedback['dispositioned']=='Yes'?"selected":""; ?> value="Yes">Yes</option> 
                                       <option healthbridge_val=0 healthbridge_max_val=0 <?php echo $agnt_feedback['dispositioned']=='No'?"selected":""; ?> value="No">No</option>
                                    </select>
                                 </td>
                                 <td colspan=3><input type="text" class="form-control" disabled name="data[cmt3]" value="<?php echo $agnt_feedback['cmt3']; ?>"></td>
                              </tr>
                            
                              <tr>
                                 <td class="eml" colspan="8">Adherence to Company Policies</td>
                              </tr>
                              <tr>
                                 <td style="text-align:left" colspan=3>2.1 Use of headset during calls. </td>
                                 <td colspan="2">
                                    <select class="form-control healthbridge_point" name="data[headset]" disabled>
                                        <!-- <option value="">-Select-</option> -->
										<option healthbridge_val=7.25 healthbridge_max_val=7.25 <?php echo $agnt_feedback['headset']=='Yes'?"selected":""; ?> value="Yes">Yes</option> 
                                       <option healthbridge_val=0 healthbridge_max_val=0 <?php echo $agnt_feedback['headset']=='No'?"selected":""; ?> value="No">No</option>
                                    </select>
                                 </td>
                                 <td colspan=3><input type="text" class="form-control" disabled name="data[cmt4]" value="<?php echo $agnt_feedback['cmt4']; ?>"></td>
                              </tr>
                              <tr>
                                 <td style="text-align:left" colspan=3>2.2 Used the verification button. </td>
                                 <td colspan="2">
                                    <select class="form-control healthbridge_point" name="data[used_the_verification]" disabled>
                                        <!-- <option value="">-Select-</option> -->
										<option healthbridge_val=7.25 healthbridge_max_val=7.25 <?php echo $agnt_feedback['used_the_verification']=='Yes'?"selected":""; ?> value="Yes">Yes</option> 
                                       <option healthbridge_val=0 healthbridge_max_val=0 <?php echo $agnt_feedback['used_the_verification']=='No'?"selected":""; ?> value="No">No</option>
                                    </select>
                                 </td>
                                 <td colspan=3><input type="text" class="form-control" disabled name="data[cmt5]" value="<?php echo $agnt_feedback['cmt5']; ?>"></td>
                              </tr>
                              <tr>
                                 <td style="text-align:left;" colspan=3>2.3 Followed all company procedures, guidelines, and policies.</td>
                                 <td colspan="2">
                                    <select class="form-control healthbridge_point" name="data[followed_all_company]" disabled>
                                       <!-- <option value="">-Select-</option> -->
                                       <option healthbridge_val=5.75 healthbridge_max_val=7.25 <?php echo $agnt_feedback['followed_all_company']=='Meets'?"selected":""; ?> value="Meets">Meets Expectations</option>
                                       <option healthbridge_val=7.25 healthbridge_max_val=7.25 <?php echo $agnt_feedback['followed_all_company']=='Exceeds'?"selected":""; ?> value="Exceeds">Exceeds Expectations</option>
                                       <option healthbridge_val=3.125 healthbridge_max_val=7.25 <?php echo $agnt_feedback['followed_all_company']=='Needs'?"selected":""; ?> value="Needs">Needs Improvement</option>
                                    </select>
                                 </td>
                                 <td colspan=3><input type="text" class="form-control" disabled name="data[cmt6]" value="<?php echo $agnt_feedback['cmt6']; ?>"></td>
                              </tr>
                            
                              <tr>
                                 <td class="eml" colspan=8>Soft Skills</td>
                              </tr>
                              <tr>
                                 <td style="text-align:left" colspan=3>3.1 Proper Greeting and Closing was used, included company name. Offered survey to the member. </td>
                                 <td colspan="2">
                                    <select class="form-control healthbridge_point" name="data[proper_greeting]" disabled>
                                       <!-- <option value="">-Select-</option> -->
                                       <option healthbridge_val=3 healthbridge_max_val=5.5 <?php echo $agnt_feedback['proper_greeting']=='Meets'?"selected":""; ?> value="Meets">Meets Expectations</option>
                                       <option healthbridge_val=5.5 healthbridge_max_val=5.5 <?php echo $agnt_feedback['proper_greeting']=='Exceeds'?"selected":""; ?> value="Exceeds">Exceeds Expectations</option>
                                       <option healthbridge_val=2.5 healthbridge_max_val=5.5 <?php echo $agnt_feedback['proper_greeting']=='Needs'?"selected":""; ?> value="Needs">Needs Improvement</option>
                                    </select>
                                 </td>
                                 <td colspan=3><input type="text" class="form-control" disabled name="data[cmt7]" value="<?php echo $agnt_feedback['cmt7']; ?>"></td>
                              </tr>
                              <tr>
                                 <td style="text-align:left" colspan=3>3.2 Clear communication, active listening, call control, and efficiency was demonstrated throughout the call. </td>
                                 <td colspan="2">
                                    <select class="form-control healthbridge_point" name="data[clear_communication]" disabled>
                                      <!-- <option value="">-Select-</option> -->
									  <option healthbridge_val=3 healthbridge_max_val=5.5 <?php echo $agnt_feedback['clear_communication']=='Meets'?"selected":""; ?> value="Meets">Meets Expectations</option>
                                       <option healthbridge_val=5.5 healthbridge_max_val=5.5 <?php echo $agnt_feedback['clear_communication']=='Exceeds'?"selected":""; ?> value="Exceeds">Exceeds Expectations</option>
                                       <option healthbridge_val=2.5 healthbridge_max_val=5.5 <?php echo $agnt_feedback['clear_communication']=='Needs'?"selected":""; ?> value="Needs">Needs Improvement</option>
                                    </select>
                                 </td>
                                 <td colspan=3><input type="text" class="form-control" disabled name="data[cmt8]" value="<?php echo $agnt_feedback['cmt8']; ?>"></td>
                              </tr>
                              <tr>
                                 <td style="text-align:left" colspan=3>3.3 Proper expectations were set, empathetic, pleasant voice tone, and positive attitude during the call. </td>
                                 <td colspan="2">
                                    <select class="form-control healthbridge_point" name="data[proper_expectations]" disabled>
                                       <!-- <option value="">-Select-</option> -->
                                       <option healthbridge_val=3 healthbridge_max_val=5.5 <?php echo $agnt_feedback['proper_expectations']=='Meets'?"selected":""; ?> value="Meets">Meets Expectations</option>
                                       <option healthbridge_val=5.5 healthbridge_max_val=5.5 <?php echo $agnt_feedback['proper_expectations']=='Exceeds'?"selected":""; ?> value="Exceeds">Exceeds Expectations</option>
                                       <option healthbridge_val=2.5 healthbridge_max_val=5.5 <?php echo $agnt_feedback['proper_expectations']=='Needs'?"selected":""; ?> value="Needs">Needs Improvement</option>
                                    </select>
                                 </td>
                                 <td colspan=3><input type="text" class="form-control" disabled name="data[cmt9]" value="<?php echo $agnt_feedback['cmt9']; ?>"></td>
                              </tr>
                              <tr>
                                 <td style="text-align:left" colspan=3>3.4 Avoided industry jargon, excessive hold time, dead air, slang, interruptions, or self talk.</td>
                                 <td colspan="2">
                                    <select class="form-control healthbridge_point" name="data[avoided_industry]" disabled>
                                        <!-- <option value="">-Select-</option> -->
										<option healthbridge_val=3 healthbridge_max_val=5.5 <?php echo $agnt_feedback['avoided_industry']=='Meets'?"selected":""; ?> value="Meets">Meets Expectations</option>
                                       <option healthbridge_val=5.5 healthbridge_max_val=5.5 <?php echo $agnt_feedback['avoided_industry']=='Exceeds'?"selected":""; ?> value="Exceeds">Exceeds Expectations</option>
                                       <option healthbridge_val=2.5 healthbridge_max_val=5.5 <?php echo $agnt_feedback['avoided_industry']=='Needs'?"selected":""; ?> value="Needs">Needs Improvement</option>
                                    </select>
                                 </td>
                                 <td colspan=3><input type="text" class="form-control" disabled name="data[cmt10]" value="<?php echo $agnt_feedback['cmt10']; ?>"></td>
                              </tr>
                              <tr>
                                 <td style="text-align:left" colspan=3>3.5 Verified current address, preferred phone number and email address.  </td>
                                 <td colspan="2">
                                    <select class="form-control healthbridge_point" name="data[verified_current_address]" disabled>
                                         <!-- <option value="">-Select-</option> -->
										 <option healthbridge_val=5.5 healthbridge_max_val=5.5 <?php echo $agnt_feedback['verified_current_address']=='Yes'?"selected":""; ?> value="Yes">Yes</option> 
                                       <option healthbridge_val=0 healthbridge_max_val=0 <?php echo $agnt_feedback['verified_current_address']=='No'?"selected":""; ?> value="No">No</option>
                                    </select>
                                 </td>
                                 <td colspan=3><input type="text" class="form-control" disabled name="data[cmt11]" value="<?php echo $agnt_feedback['cmt11']; ?>"></td>
                              </tr>
                              <tr>
                                 <td class="eml" colspan=8>Payment Communication</td>
                              </tr>
                              <tr>
                                 <td style="text-align:left;" colspan=3>4.1 If applicable, requested payment from member and other family members.  </td>
                                 <td colspan="2">
                                    <select class="form-control healthbridge_point" name="data[if_applicable_requested]" disabled>
                                     <!-- <option value="">-Select-</option> -->
                                     <option healthbridge_val=7.25 healthbridge_max_val=7.25 <?php echo $agnt_feedback['if_applicable_requested']=='Yes'?"selected":""; ?> value="Yes">Yes</option> 
                                       <option healthbridge_val=0 healthbridge_max_val=0 <?php echo $agnt_feedback['if_applicable_requested']=='No'?"selected":""; ?> value="No">No</option>
                                    </select>
                                 </td>
                                 <td colspan=3><input type="text" class="form-control" disabled name="data[cmt12]" value="<?php echo $agnt_feedback['cmt12']; ?>"></td>
                              </tr>
                              <tr>
                                 <td style="text-align:left;" colspan=3>4.2 If applicable, the member has outstanding balance after payment, ask if they would like us to set up a recurring payment. </td>
                                 <td colspan="2">
                                    <select class="form-control healthbridge_point" name="data[if_applicable_the_member]" disabled>
                                        <!-- <option value="">-Select-</option> -->
										<option healthbridge_val=7.25 healthbridge_max_val=7.25 <?php echo $agnt_feedback['if_applicable_the_member']=='Yes'?"selected":""; ?> value="Yes">Yes</option> 
                                       <option healthbridge_val=0 healthbridge_max_val=0 <?php echo $agnt_feedback['if_applicable_the_member']=='No'?"selected":""; ?> value="No">No</option>
                                    </select>
                                 </td>
                                 <td colspan=3><input type="text" class="form-control" disabled name="data[cmt13]" value="<?php echo $agnt_feedback['cmt13']; ?>"></td>
                              </tr>
                              <tr>
                                 <td style="text-align:left;" colspan=3>4.3 Did agent present the authorize payment ask before processing.</td>
                                 <td colspan="2">
                                    <select class="form-control healthbridge_point" name="data[did_agent_present]" disabled>
                                         <!-- <option value="">-Select-</option> -->
                                         <option healthbridge_val=7.25 healthbridge_max_val=7.25 <?php echo $agnt_feedback['did_agent_present']=='Yes'?"selected":""; ?> value="Yes">Yes</option> 
                                       <option healthbridge_val=0 healthbridge_max_val=0 <?php echo $agnt_feedback['did_agent_present']=='No'?"selected":""; ?> value="No">No</option>
                                    </select>
                                 </td>
                                 <td colspan=3><input type="text" class="form-control" disabled name="data[cmt14]" value="<?php echo $agnt_feedback['cmt14']; ?>"></td>
                              </tr>
                              <tr>
                                 <td style="text-align:left;" colspan=3>4.4 Did agent offer confirmation number</td>
                                 <td colspan="2">
                                    <select class="form-control healthbridge_point" name="data[did_agent_offer]" disabled>
                                     <!-- <option value="">-Select-</option> -->
									 <option healthbridge_val=7.25 healthbridge_max_val=7.25 <?php echo $agnt_feedback['did_agent_offer']=='Yes'?"selected":""; ?> value="Yes">Yes</option> 
                                       <option healthbridge_val=0 healthbridge_max_val=0 <?php echo $agnt_feedback['did_agent_offer']=='No'?"selected":""; ?> value="No">No</option>
                                    </select>
                                 </td>
                                 <td colspan=3><input type="text" class="form-control" disabled name="data[cmt15]" value="<?php echo $agnt_feedback['cmt15']; ?>"></td>
                              </tr>
                               <tr>
                                 <td class="eml" colspan=8>Auto Fails</td>
                              </tr>
                             
                              <tr>
                                 <td style="text-align:left; color: red;" colspan=3>4.5 Verified the member's name, last 4 SS#/member number, DOB, and address. </td>
                                 <td colspan="2">
                                    <select class="form-control healthbridge_point" id="fatal1" name="data[verified_all]" disabled>
                                       <!-- <option value="">-Select-</option> -->
                                       <option healthbridge_val=0 healthbridge_max_val=0 <?php echo $agnt_feedback['verified_all']=='Yes'?"selected":""; ?> value="Yes">Yes</option>
                                       <option healthbridge_val=0 healthbridge_max_val=0 <?php echo $agnt_feedback['verified_all']=='No'?"selected":""; ?> value="No">No</option>
                                       
                                    </select>
                                 </td>
                                 <td colspan=3><input type="text" class="form-control" disabled name="data[cmt16]" value="<?php echo $agnt_feedback['cmt16']; ?>"></td>
                              </tr>
                              <tr>
                                 <td style="text-align:left; color: red;" colspan=3>4.6 Correct Information provided regarding account details, benefit, information, plan, etc</td>
                                 <td colspan="2">
                                   <select class="form-control healthbridge_point" id="fatal2" name="data[correct_information]" disabled>
                                       <!-- <option value="">-Select-</option> -->
                                       <option healthbridge_val=0 healthbridge_max_val=0 <?php echo $agnt_feedback['correct_information']=='Yes'?"selected":""; ?> value="Yes">Yes</option>
                                       <option healthbridge_val=0 healthbridge_max_val=0 <?php echo $agnt_feedback['correct_information']=='No'?"selected":""; ?> value="No">No</option>
                                       
                                    </select>
                                 </td>
                                 <td colspan=3><input type="text" class="form-control" disabled name="data[cmt17]" value="<?php echo $agnt_feedback['cmt17']; ?>"></td>
                              </tr>
                              <tr>
                                 <td style="text-align:left; color: red;" colspan=3>4.7 Adhered to HIPAA regulations throughout the entire call. </td>
                                 <td colspan="2">
                                    <select class="form-control healthbridge_point" id="fatal3" name="data[regulations]" disabled>
                                       <!-- <option value="">-Select-</option> -->
                                       <option healthbridge_val=0 healthbridge_max_val=0 <?php echo $agnt_feedback['regulations']=='Yes'?"selected":""; ?> value="Yes">Yes</option>
                                       <option healthbridge_val=0 healthbridge_max_val=0 <?php echo $agnt_feedback['regulations']=='No'?"selected":""; ?> value="No">No</option>
                                       
                                    </select>
                                 </td>
                                 <td colspan=3><input type="text" class="form-control" disabled name="data[cmt18]" value="<?php echo $agnt_feedback['cmt18']; ?>"></td>
                              </tr>
                              <tr>
                                 <td style="text-align:left; color: red;" colspan=3>4.8 Used inappropriate tone and language with the member </td>
                                 <td colspan="2">
                                    <select class="form-control healthbridge_point" id="fatal4" name="data[inappropriate]" disabled>
                                       <!-- <option value="">-Select-</option> -->
                                       <option healthbridge_val=0 healthbridge_max_val=0 <?php echo $agnt_feedback['inappropriate']=='No'?"selected":""; ?> value="No">No</option>
                                       <option healthbridge_val=0 healthbridge_max_val=0 <?php echo $agnt_feedback['inappropriate']=='Yes'?"selected":""; ?> value="Yes">Yes</option>
                                       
                                       
                                    </select>
                                 </td>
                                 <td colspan=3><input type="text" class="form-control" disabled name="data[cmt19]" value="<?php echo $agnt_feedback['cmt19']; ?>"></td>
                              </tr>
                              <tr>
                                 <td style="text-align:left; color: red;" colspan=3>4.9 Call Avoidance </td>
                                 <td colspan="2">
                                    <select class="form-control healthbridge_point" id="fatal5" name="data[call_avoidance]" disabled>
                                       <!-- <option value="">-Select-</option> -->
                                      <option healthbridge_val=0 healthbridge_max_val=0 <?php echo $agnt_feedback['call_avoidance']=='No'?"selected":""; ?> value="No">No</option>
                                      <option healthbridge_val=0 healthbridge_max_val=0 <?php echo $agnt_feedback['call_avoidance']=='Yes'?"selected":""; ?> value="Yes">Yes</option> 
                                    </select>
                                 </td>
                                 <td colspan=3><input type="text" class="form-control" disabled name="data[cmt20]" value="<?php echo $agnt_feedback['cmt20']; ?>"></td>
                              </tr>
                              <tr>
                                 <td>Call Summary:</td>
                                 <td colspan="2"><textarea disabled class="form-control" id="" name="data[call_summary]"><?php echo $agnt_feedback['call_summary'] ?></textarea></td>
                                 <td>Feedback:</td>
                                 <td colspan="2"><textarea disabled class="form-control" id="" name="data[feedback]"><?php echo $agnt_feedback['feedback'] ?></textarea></td>
                              </tr>



                            <?php } else if($campaign=='compliance'){ ?>
							<tr style="height:45px">
                              <td class="eml2" colspan=2>Parameter</td>
                              <td class="eml2">Status</td>
                              <td class="eml2" style="width:150px">Issue Type</td>
                              <td class="eml2" colspan=4>Reason</td>
                             </tr>

                              <tr>
                              <td class="eml1" colspan=2 style="color: red;">Compliance (Yes/No)</td>
                              <td >
                               <select class="form-control compliance_point" name="data[compliance]" id="compliance_type" disabled="">
                                    <option value="">-Select-</option>
                                    <option compliance_val=100 <?php echo $agnt_feedback['compliance']=='Yes'?"selected":""; ?> value="Yes">Yes</option>
                                    <option compliance_val=0 <?php echo $agnt_feedback['compliance']=='No'?"selected":""; ?> value="No">No</option>
                                 </select>  
                                <!--  <select class="form-control compliance_point" id="compliance_type" name="data[compliance]" disabled>
									<option><?php echo $compliance['compliance'] ?></option>
								</select> -->
                                 
                              </td>
                              <td>
                                  <select class="form-control compliance_point" id="issue_type" name="data[compliance_issue_type]" disabled>
                                       <option value="">-Select-</option>
                                       <option <?php echo $agnt_feedback['compliance_issue_type']=='Blank Call'?"selected":""; ?> value="Blank Call">Blank Call</option>
                                       <option <?php echo $agnt_feedback['compliance_issue_type']=='Call Disconnection'?"selected":""; ?> value="Call Disconnection">Call Disconnection</option>
                                        <option <?php echo $agnt_feedback['compliance_issue_type']=='Call Transferred'?"selected":""; ?> value="Call Transferred">Call Transferred </option>
                                       <option <?php echo $agnt_feedback['compliance_issue_type']=='Product Related'?"selected":""; ?> value="Product Related">Product Related </option>
                                       <option <?php echo $agnt_feedback['compliance_issue_type']=='Product Related (Information/Enquiry)'?"selected":""; ?> value="Product Related (Information/Enquiry)">Product Related (Information/Enquiry)</option>
                                       
                                    </select>
                              </td>
                              <td colspan=4>
                                 <select class="form-control compliance_point" name="data[compliance_reason]" id="reason_type" disabled>
                                    <option value="">-Select-</option>
                                    <option <?php echo $agnt_feedback['compliance_reason']=='No voice is recorded on Call'?"selected":""; ?> value="No voice is recorded on Call">No voice is recorded on Call</option>
                                    <option <?php echo $agnt_feedback['compliance_reason']=='Call Disconnected while Customer was there'?"selected":""; ?> value="Call Disconnected while Customer was there">Call Disconnected while Customer was there</option>
                                    <option <?php echo $agnt_feedback['compliance_reason']=='Call Disconnected without Call Opening'?"selected":""; ?> value="Call Disconnected without Call Opening">Call Disconnected without Call Opening</option>
                                    <option <?php echo $agnt_feedback['compliance_reason']=='Did not retrieved from Secure line'?"selected":""; ?> value="Did not retrieved from Secure line">Did not retrieved from Secure line</option>
                                    <option <?php echo $agnt_feedback['compliance_reason']=='Asked to Call Other agent'?"selected":""; ?> value="Asked to Call Other agent">Asked to Call Other agent</option>
                                    <option <?php echo $agnt_feedback['compliance_reason']=='Transferred Back to IVR without Call Opening '?"selected":""; ?> value="Transferred Back to IVR without Call Opening " >Transferred Back to IVR without Call Opening </option>
                                    <option <?php echo $agnt_feedback['compliance_reason']=='Call Disconnected while Customer was there'?"selected":""; ?> value="Call Disconnected while Customer was there">Call Disconnected while Customer was there</option>
                                    <option <?php echo $agnt_feedback['compliance_reason']=='Call Disconnected while Customer was there'?"selected":""; ?> value="Call Disconnected while Customer was there">Call Disconnected while Customer was there</option>
                                    
                                 </select>
                              </td>
                           </tr>
                              <tr>
                                 <td >Call Summary:</td>
                                 <td colspan="3"><textarea class="form-control" id="" name="data[call_summary]" disabled><?php echo $agnt_feedback['call_summary'] ?></textarea></td>
                                 <td>Feedback:</td>
                                 <td colspan="4"><textarea class="form-control" id="" name="data[feedback]" disabled><?php echo $agnt_feedback['feedback'] ?></textarea></td>
                              </tr>



                               <?php } else if($campaign=='mcKinsey'){ ?>
							<tr style="height:25px; font-weight:bold">
										<td colspan=4></td>
										<td colspan="2">RATING</td>
										<td colspan=2>COMMENTS/NOTES</td>
									</tr>
									<tr><td class="eml" colspan=8>Greeting</td></tr>
									<tr>
										<td style="text-align:left;" colspan=4>1.1 Did the rep greet the caller properly? </td>
										<td colspan=2>
											<select class="form-control mckinsey_point" id="" name="data[caller_properly]" disabled>
												<option value="">-Select-</option>
												<option mckinsey_val=1 <?php echo $agnt_feedback['caller_properly']=='Effective'?"selected":""; ?> value="Effective">Effective</option>
												<option mckinsey_val=0 <?php echo $agnt_feedback['caller_properly']=='Unacceptable'?"selected":""; ?> value="Unacceptable">Unacceptable</option>
												<option mckinsey_val=1 <?php echo $agnt_feedback['caller_properly']=='N/A'?"selected":""; ?> value="N/A">N/A</option>
											</select>
										</td>
										<td colspan=2><input type="text" class="form-control" name="data[cmt1]" value="<?php echo $agnt_feedback['cmt1']; ?>" disabled></td>
									</tr>
									<tr>
										<td style="text-align:left;" colspan=4>1.2 Did the rep use a pleasant, respectful tone?   </td>
										<td colspan=2>
											<select class="form-control mckinsey_point" id="" name="data[respectful_tone]" disabled>
												<option value="">-Select-</option>
												<option mckinsey_val=1 <?php echo $agnt_feedback['respectful_tone']=='Effective'?"selected":""; ?> value="Effective">Effective</option>
												<option mckinsey_val=0 <?php echo $agnt_feedback['respectful_tone']=='Unacceptable'?"selected":""; ?> value="Unacceptable">Unacceptable</option>
												<option mckinsey_val=1 <?php echo $agnt_feedback['respectful_tone']=='N/A'?"selected":""; ?> value="N/A">N/A</option>
											</select>
										</td>
										<td colspan=2><input type="text" class="form-control" name="data[cmt2]" value="<?php echo $agnt_feedback['cmt2']; ?>" disabled></td>
									</tr>
									<tr>
										<td style="text-align:left;" colspan=4>1.3 Did the rep answer in a timely manner? (within 5 seconds)</td>
										<td colspan=2>
											<select class="form-control mckinsey_point" id="" name="data[timely_manner]" disabled>
												<option value="">-Select-</option>
												<option mckinsey_val=1 <?php echo $agnt_feedback['timely_manner']=='Effective'?"selected":""; ?> value="Effective">Effective</option>
												<option mckinsey_val=0 <?php echo $agnt_feedback['timely_manner']=='Unacceptable'?"selected":""; ?> value="Unacceptable">Unacceptable</option>
												<option mckinsey_val=1 <?php echo $agnt_feedback['timely_manner']=='N/A'?"selected":""; ?> value="N/A">N/A</option>
											</select>
										</td>
										<td colspan=2><input type="text" class="form-control" name="data[cmt3]" value="<?php echo $agnt_feedback['cmt3']; ?>" disabled></td>
									</tr>
									
									
									
									<tr><td class="eml" colspan=8>Data Collection/Case Details</td></tr>
									<tr>
										<td style="text-align:left;" colspan=4>2.1 Did the rep collect and verify the customers information appropriately and accurately? </td>
										<td colspan=2>
											<select class="form-control mckinsey_point" id="" name="data[appropriately_and_accurately]" disabled>
												<option value="">-Select-</option>
												<option mckinsey_val=1 <?php echo $agnt_feedback['appropriately_and_accurately']=='Effective'?"selected":""; ?> value="Effective">Effective</option>
												<option mckinsey_val=0 <?php echo $agnt_feedback['appropriately_and_accurately']=='Unacceptable'?"selected":""; ?> value="Unacceptable">Unacceptable</option>
												<option mckinsey_val=1 <?php echo $agnt_feedback['appropriately_and_accurately']=='N/A'?"selected":""; ?> value="N/A">N/A</option>
											</select>
										</td>
										<td colspan=2><input type="text" class="form-control" name="data[cmt4]" value="<?php echo $agnt_feedback['cmt4']; ?>" disabled></td>
									</tr>
									<tr>
										<td style="text-align:left;" colspan=4>2.2 Did the agent correctly define Type of Case?</td>
										<td colspan=2>
											<select class="form-control mckinsey_point" id="" name="data[type_of_case]" disabled>
												<option value="">-Select-</option>
												<option mckinsey_val=1 <?php echo $agnt_feedback['type_of_case']=='Effective'?"selected":""; ?> value="Effective">Effective</option>
												<option mckinsey_val=0 <?php echo $agnt_feedback['type_of_case']=='Unacceptable'?"selected":""; ?> value="Unacceptable">Unacceptable</option>
												<option mckinsey_val=1 <?php echo $agnt_feedback['type_of_case']=='N/A'?"selected":""; ?> value="N/A">N/A</option>
											</select>
										</td>
										<td colspan=2><input type="text" class="form-control" name="data[cmt5]" value="<?php echo $agnt_feedback['cmt5']; ?>" disabled></td>
									</tr>
									<tr>
										<td style="text-align:left;" colspan=4>2.3 Did the rep correctly mark all required dates and data?</td>
										<td colspan=2>
											<select class="form-control mckinsey_point" id="" name="data[dates_and_data]" disabled>
												<option value="">-Select-</option>
												<option mckinsey_val=1 <?php echo $agnt_feedback['dates_and_data']=='Effective'?"selected":""; ?> value="Effective">Effective</option>
												<option mckinsey_val=0 <?php echo $agnt_feedback['dates_and_data']=='Unacceptable'?"selected":""; ?> value="Unacceptable">Unacceptable</option>
												<option mckinsey_val=1 <?php echo $agnt_feedback['dates_and_data']=='N/A'?"selected":""; ?> value="N/A">N/A</option>
											</select>
										</td>
										<td colspan=2><input type="text" class="form-control" name="data[cmt6]" value="<?php echo $agnt_feedback['cmt6']; ?>" disabled></td>
									</tr>
									<tr>
										<td style="text-align:left;" colspan=4>2.4  Did the rep Contact Trace and ensure this case was/was not connected to any others, and report if cleaning was required?</td>
										<td colspan=2>
											<select class="form-control mckinsey_point" id="" name="data[cleaning_was_required]" disabled>
												<option value="">-Select-</option>
												<option mckinsey_val=1 <?php echo $agnt_feedback['cleaning_was_required']=='Effective'?"selected":""; ?> value="Effective">Effective</option>
												<option mckinsey_val=0 <?php echo $agnt_feedback['cleaning_was_required']=='Unacceptable'?"selected":""; ?> value="Unacceptable">Unacceptable</option>
												<option mckinsey_val=1 <?php echo $agnt_feedback['cleaning_was_required']=='N/A'?"selected":""; ?> value="N/A">N/A</option>
											</select>
										</td>
										<td colspan=2><input type="text" class="form-control" name="data[cmt7]" value="<?php echo $agnt_feedback['cmt7']; ?>" disabled></td>
									</tr>
									
									<tr><td class="eml" colspan=8>Soft Skills</td></tr>
									<tr>
										<td style="text-align:left;" colspan=4>3.1 Did the agent speak clearly, concisely and at an appropriate pace?</td>
										<td colspan=2>
											<select class="form-control mckinsey_point" id="" name="data[appropriate_pace]" disabled>
												<option value="">-Select-</option>
												<option mckinsey_val=1 <?php echo $agnt_feedback['appropriate_pace']=='Effective'?"selected":""; ?> value="Effective">Effective</option>
												<option mckinsey_val=0 <?php echo $agnt_feedback['appropriate_pace']=='Unacceptable'?"selected":""; ?> value="Unacceptable">Unacceptable</option>
												<option mckinsey_val=1 <?php echo $agnt_feedback['appropriate_pace']=='N/A'?"selected":""; ?> value="N/A">N/A</option>
											</select>
										</td>
										<td colspan=2><input type="text" class="form-control" name="data[cmt8]" value="<?php echo $agnt_feedback['cmt8']; ?>" disabled></td>
									</tr>
									<tr>
										<td style="text-align:left;" colspan=4>3.2 Did the agent demonstrate a strong use of empathy in responses where required on the call and in email?</td>
										<td colspan=2>
											<select class="form-control mckinsey_point" id="" name="data[call_and_in_email]" disabled>
												<option value="">-Select-</option>
												<option mckinsey_val=1 <?php echo $agnt_feedback['call_and_in_email']=='Effective'?"selected":""; ?> value="Effective">Effective</option>
												<option mckinsey_val=0 <?php echo $agnt_feedback['call_and_in_email']=='Unacceptable'?"selected":""; ?> value="Unacceptable">Unacceptable</option>
												<option mckinsey_val=1 <?php echo $agnt_feedback['call_and_in_email']=='N/A'?"selected":""; ?> value="N/A">N/A</option>
											</select>
										</td>
										<td colspan=2><input type="text" class="form-control" name="data[cmt9]" value="<?php echo $agnt_feedback['cmt9']; ?>" disabled></td>
									</tr>
									<tr>
										<td style="text-align:left;" colspan=4>3.3 Did the agent use "please" and "thank you" throughout the call and in email communication?</td>
										<td colspan=2>
											<select class="form-control mckinsey_point" id="" name="data[email_communication]" disabled>
												<option value="">-Select-</option>
												<option mckinsey_val=1 <?php echo $agnt_feedback['email_communication']=='Effective'?"selected":""; ?> value="Effective">Effective</option>
												<option mckinsey_val=0 <?php echo $agnt_feedback['email_communication']=='Unacceptable'?"selected":""; ?> value="Unacceptable">Unacceptable</option>
												<option mckinsey_val=1 <?php echo $agnt_feedback['email_communication']=='N/A'?"selected":""; ?> value="N/A">N/A</option>
											</select>
										</td>
										<td colspan=2><input type="text" class="form-control" name="data[cmt10]" value="<?php echo $agnt_feedback['cmt10']; ?>" disabled></td>
									</tr>
									<tr>
										<td style="text-align:left;" colspan=4>3.4 Did the agent minimize extended silences throughout the call?</td>
										<td colspan=2>
											<select class="form-control mckinsey_point" id="" name="data[throughout_the_call]" disabled>
												<option value="">-Select-</option>
												<option mckinsey_val=1 <?php echo $agnt_feedback['throughout_the_call']=='Effective'?"selected":""; ?> value="Effective">Effective</option>
												<option mckinsey_val=0 <?php echo $agnt_feedback['throughout_the_call']=='Unacceptable'?"selected":""; ?> value="Unacceptable">Unacceptable</option>
												<option mckinsey_val=1 <?php echo $agnt_feedback['throughout_the_call']=='N/A'?"selected":""; ?> value="N/A">N/A</option>
											</select>
										</td>
										<td colspan=2><input type="text" class="form-control" name="data[cmt11]" value="<?php echo $agnt_feedback['cmt11']; ?>" disabled></td>
									</tr>
									<tr>
										<td style="text-align:left;" colspan=4>3.5 Did the agent speak with sincere warmth in his/her voice?</td>
										<td colspan=2>
											<select class="form-control mckinsey_point" id="" name="data[her_voice]" disabled>
												<option value="">-Select-</option>
												<option mckinsey_val=1 <?php echo $agnt_feedback['her_voice']=='Effective'?"selected":""; ?> value="Effective">Effective</option>
												<option mckinsey_val=0 <?php echo $agnt_feedback['her_voice']=='Unacceptable'?"selected":""; ?> value="Unacceptable">Unacceptable</option>
												<option mckinsey_val=1 <?php echo $agnt_feedback['her_voice']=='N/A'?"selected":""; ?> value="N/A">N/A</option>
											</select>
										</td>
										<td colspan=2><input type="text" class="form-control" name="data[cmt12]" value="<?php echo $agnt_feedback['cmt12']; ?>" disabled></td>
									</tr>
									<tr>
										<td style="text-align:left;" colspan=4>3.6 Did the agent use correct sentence structure and grammar in email communication?</td>
										<td colspan=2>
											<select class="form-control mckinsey_point" id="" name="data[structure_and_grammar]" disabled>
												<option value="">-Select-</option>
												<option mckinsey_val=1 <?php echo $agnt_feedback['structure_and_grammar']=='Effective'?"selected":""; ?> value="Effective">Effective</option>
												<option mckinsey_val=0 <?php echo $agnt_feedback['structure_and_grammar']=='Unacceptable'?"selected":""; ?> value="Unacceptable">Unacceptable</option>
												<option mckinsey_val=1 <?php echo $agnt_feedback['structure_and_grammar']=='N/A'?"selected":""; ?> value="N/A">N/A</option>
											</select>
										</td>
										<td colspan=2><input type="text" class="form-control" name="data[cmt13]" value="<?php echo $agnt_feedback['cmt13']; ?>" disabled></td>
									</tr>
									<tr>
										<td style="text-align:left;" colspan=4>3.7 Did the agent demonstrate patience with the caller on call and in email communication?</td>
										<td colspan=2>
											<select class="form-control mckinsey_point" id="" name="data[demonstrate_patience]" disabled>
												<option value="">-Select-</option>
												<option mckinsey_val=1 <?php echo $agnt_feedback['demonstrate_patience']=='Effective'?"selected":""; ?> value="Effective">Effective</option>
												<option mckinsey_val=0 <?php echo $agnt_feedback['demonstrate_patience']=='Unacceptable'?"selected":""; ?> value="Unacceptable">Unacceptable</option>
												<option mckinsey_val=1 <?php echo $agnt_feedback['demonstrate_patience']=='N/A'?"selected":""; ?> value="N/A">N/A</option>
											</select>
										</td>
										<td colspan=2><input type="text" class="form-control" name="data[cmt14]" value="<?php echo $agnt_feedback['cmt14']; ?>" disabled></td>
									</tr>
									<tr><td class="eml" colspan=8>Status/Condition</td></tr>
									<tr>
										<td style="text-align:left;" colspan=4>4.1 Did the rep accurately and completely document the call?</td>
										<td colspan=2>
											<select class="form-control mckinsey_point" id="" name="data[document_the_call]" disabled>
												<option value="">-Select-</option>
												<option mckinsey_val=1 <?php echo $agnt_feedback['document_the_call']=='Effective'?"selected":""; ?> value="Effective">Effective</option>
												<option mckinsey_val=0 <?php echo $agnt_feedback['document_the_call']=='Unacceptable'?"selected":""; ?> value="Unacceptable">Unacceptable</option>
												<option mckinsey_val=1 <?php echo $agnt_feedback['document_the_call']=='N/A'?"selected":""; ?> value="N/A">N/A</option>
											</select>
										</td>
										<td colspan=2><input type="text" class="form-control" name="data[cmt15]" value="<?php echo $agnt_feedback['cmt15']; ?>" disabled></td>
									</tr>
									<tr>
										<td style="text-align:left;" colspan=4>4.2 Did the rep complete the correct confirmation and closing?</td>
										<td colspan=2>
											<select class="form-control mckinsey_point" id="" name="data[confirmation_and_closing]" disabled>
												<option value="">-Select-</option>
												<option mckinsey_val=1 <?php echo $agnt_feedback['confirmation_and_closing']=='Effective'?"selected":""; ?> value="Effective">Effective</option>
												<option mckinsey_val=0 <?php echo $agnt_feedback['confirmation_and_closing']=='Unacceptable'?"selected":""; ?> value="Unacceptable">Unacceptable</option>
												<option mckinsey_val=1 <?php echo $agnt_feedback['confirmation_and_closing']=='N/A'?"selected":""; ?> value="N/A">N/A</option>
											</select>
										</td>
										<td colspan=2><input type="text" class="form-control" name="data[cmt16]" value="<?php echo $agnt_feedback['cmt16']; ?>" disabled></td>
									</tr>
									<tr>
										<td style="text-align:left;" colspan=4>4.3 Did the rep provide the correct instructions based upon the Type of Case?</td>
										<td colspan=2>
											<select class="form-control mckinsey_point" id="" name="data[correct_instructions]" disabled>
												<option value="">-Select-</option>
												<option mckinsey_val=1 <?php echo $agnt_feedback['correct_instructions']=='Effective'?"selected":""; ?> value="Effective">Effective</option>
												<option mckinsey_val=0 <?php echo $agnt_feedback['correct_instructions']=='Unacceptable'?"selected":""; ?> value="Unacceptable">Unacceptable</option>
												<option mckinsey_val=1 <?php echo $agnt_feedback['correct_instructions']=='N/A'?"selected":""; ?> value="N/A">N/A</option>
											</select>
										</td>
										<td colspan=2><input type="text" class="form-control" name="data[cmt17]" value="<?php echo $agnt_feedback['cmt17']; ?>" disabled></td>
									</tr>
									<tr>
										<td style="text-align:left;" colspan=4>4.4 Did the rep do everything provide clear, concise direction on isolation or quarantine?</td>
										<td colspan=2>
											<select class="form-control mckinsey_point" id="" name="data[isolation_or_quarantine]" disabled>
												<option value="">-Select-</option>
												<option mckinsey_val=1 <?php echo $agnt_feedback['isolation_or_quarantine']=='Effective'?"selected":""; ?> value="Effective">Effective</option>
												<option mckinsey_val=0 <?php echo $agnt_feedback['isolation_or_quarantine']=='Unacceptable'?"selected":""; ?> value="Unacceptable">Unacceptable</option>
												<option mckinsey_val=1 <?php echo $agnt_feedback['isolation_or_quarantine']=='N/A'?"selected":""; ?> value="N/A">N/A</option>
											</select>
										</td>
										<td colspan=2><input type="text" class="form-control" name="data[cmt18]" value="<?php echo $agnt_feedback['cmt18']; ?>" disabled></td>
									</tr>
									<tr>
										<td style="text-align:left;" colspan=4>4.5 Did the rep make appropriate contact to the individual, managers, departments and Supervisors when required, and/or email any requested files and Guidance Letters? </td>
										<td colspan=2>
											<select class="form-control mckinsey_point" id="" name="data[guidance_letters]" disabled>
												<option value="">-Select-</option>
												<option mckinsey_val=1 <?php echo $agnt_feedback['guidance_letters']=='Effective'?"selected":""; ?> value="Effective">Effective</option>
												<option mckinsey_val=0 <?php echo $agnt_feedback['guidance_letters']=='Unacceptable'?"selected":""; ?> value="Unacceptable">Unacceptable</option>
												<option mckinsey_val=1 <?php echo $agnt_feedback['guidance_letters']=='N/A'?"selected":""; ?> value="N/A">N/A</option>
											</select>
										</td>
										<td colspan=2><input type="text" class="form-control" name="data[cmt19]" value="<?php echo $agnt_feedback['cmt19']; ?>"></td>
									</tr>
                              <tr>
                                 <td >Call Summary:</td>
                                 <td colspan="3"><textarea class="form-control" id="" name="data[call_summary]" disabled><?php echo $agnt_feedback['call_summary'] ?></textarea></td>
                                 <td>Feedback:</td>
                                 <td colspan="4"><textarea class="form-control" id="" name="data[feedback]" disabled><?php echo $agnt_feedback['feedback'] ?></textarea></td>
                              </tr>

                              <?php } else if($campaign=='compliance'){ ?>
							<tr style="height:45px">
                              <td class="eml2" colspan=2>Parameter</td>
                              <td class="eml2">Status</td>
                              <td class="eml2" style="width:150px">Issue Type</td>
                              <td class="eml2" colspan=4>Reason</td>
                             </tr>

                              <tr>
                              <td class="eml1" colspan=2 style="color: red;">Compliance (Yes/No)</td>
                              <td >
                               <select class="form-control compliance_point" name="data[compliance]" id="compliance_type" disabled="">
                                    <option value="">-Select-</option>
                                    <option compliance_val=100 <?php echo $agnt_feedback['compliance']=='Yes'?"selected":""; ?> value="Yes">Yes</option>
                                    <option compliance_val=0 <?php echo $agnt_feedback['compliance']=='No'?"selected":""; ?> value="No">No</option>
                                 </select>  
                                <!--  <select class="form-control compliance_point" id="compliance_type" name="data[compliance]" disabled>
									<option><?php echo $compliance['compliance'] ?></option>
								</select> -->
                                 
                              </td>
                              <td>
                                  <select class="form-control compliance_point" id="issue_type" name="data[compliance_issue_type]" disabled>
                                       <option value="">-Select-</option>
                                       <option <?php echo $agnt_feedback['compliance_issue_type']=='Blank Call'?"selected":""; ?> value="Blank Call">Blank Call</option>
                                       <option <?php echo $agnt_feedback['compliance_issue_type']=='Call Disconnection'?"selected":""; ?> value="Call Disconnection">Call Disconnection</option>
                                        <option <?php echo $agnt_feedback['compliance_issue_type']=='Call Transferred'?"selected":""; ?> value="Call Transferred">Call Transferred </option>
                                       <option <?php echo $agnt_feedback['compliance_issue_type']=='Product Related'?"selected":""; ?> value="Product Related">Product Related </option>
                                       <option <?php echo $agnt_feedback['compliance_issue_type']=='Product Related (Information/Enquiry)'?"selected":""; ?> value="Product Related (Information/Enquiry)">Product Related (Information/Enquiry)</option>
                                       
                                    </select>
                              </td>
                              <td colspan=4>
                                 <select class="form-control compliance_point" name="data[compliance_reason]" id="reason_type" disabled>
                                    <option value="">-Select-</option>
                                    <option <?php echo $agnt_feedback['compliance_reason']=='No voice is recorded on Call'?"selected":""; ?> value="No voice is recorded on Call">No voice is recorded on Call</option>
                                    <option <?php echo $agnt_feedback['compliance_reason']=='Call Disconnected while Customer was there'?"selected":""; ?> value="Call Disconnected while Customer was there">Call Disconnected while Customer was there</option>
                                    <option <?php echo $agnt_feedback['compliance_reason']=='Call Disconnected without Call Opening'?"selected":""; ?> value="Call Disconnected without Call Opening">Call Disconnected without Call Opening</option>
                                    <option <?php echo $agnt_feedback['compliance_reason']=='Did not retrieved from Secure line'?"selected":""; ?> value="Did not retrieved from Secure line">Did not retrieved from Secure line</option>
                                    <option <?php echo $agnt_feedback['compliance_reason']=='Asked to Call Other agent'?"selected":""; ?> value="Asked to Call Other agent">Asked to Call Other agent</option>
                                    <option <?php echo $agnt_feedback['compliance_reason']=='Transferred Back to IVR without Call Opening '?"selected":""; ?> value="Transferred Back to IVR without Call Opening " >Transferred Back to IVR without Call Opening </option>
                                    <option <?php echo $agnt_feedback['compliance_reason']=='Call Disconnected while Customer was there'?"selected":""; ?> value="Call Disconnected while Customer was there">Call Disconnected while Customer was there</option>
                                    <option <?php echo $agnt_feedback['compliance_reason']=='Call Disconnected while Customer was there'?"selected":""; ?> value="Call Disconnected while Customer was there">Call Disconnected while Customer was there</option>
                                    
                                 </select>
                              </td>
                           </tr>
                              <tr>
                                 <td >Call Summary:</td>
                                 <td colspan="3"><textarea class="form-control" id="" name="data[call_summary]" disabled><?php echo $agnt_feedback['call_summary'] ?></textarea></td>
                                 <td>Feedback:</td>
                                 <td colspan="4"><textarea class="form-control" id="" name="data[feedback]" disabled><?php echo $agnt_feedback['feedback'] ?></textarea></td>
                              </tr>



                               <?php } else if($campaign=='affinity'){ ?>
									</tr>
										<tr style="height:25px; font-weight:bold; background-color:#85C1E9">
										<td colspan=2>Parameter</td>
										<td colspan=2>Rating</td>
										<td colspan=2>Possible Score</td>
										<td colspan=2>Remarks</td>
									</tr>
									<tr>
										<td class="eml1" colspan=8 style="background-color:#3f5691; color: white;">HIPAA/VERIFICATION REQUIREMENTS</td>
									</tr>
									<tr>
										<td class="eml1" colspan=4>Did the agent verify the patient's name, date of birth and ID number?</td>
										<td>
											<select class="form-control affinity_point" name="data[date_of_birth]" disabled>
												
												<option affinity_val=5 <?php echo $agnt_feedback['date_of_birth'] == "Yes"?"selected":"";?> value="Yes">Yes</option>
												<option affinity_val=5 <?php echo $agnt_feedback['date_of_birth'] == "No"?"selected":"";?> value="No">No</option>
												<option affinity_val=0 <?php echo $agnt_feedback['date_of_birth'] == "N/A"?"selected":"";?> value="N/A">N/A</option>
											</select>
										</td>
										<td>5</td>
										<td colspan=4><input type="text" class="form-control" name="data[cmt1]" value="<?php echo $agnt_feedback['cmt1'] ?>" disabled></td>
										
									</tr>
									<tr>
										<td class="eml1" colspan=4>Did the agent verify the Provider's ID number (NPI and/or TIN)?</td>
										<td>
											<select class="form-control affinity_point " name="data[verify_the_provider]" disabled>
												
												<option affinity_val=5 <?php echo $agnt_feedback['verify_the_provider'] == "Yes"?"selected":"";?> value="Yes">Yes</option>
												<option affinity_val=5 <?php echo $agnt_feedback['verify_the_provider'] == "No"?"selected":"";?> value="No">No</option>
												<option affinity_val=0 <?php echo $agnt_feedback['verify_the_provider'] == "N/A"?"selected":"";?> value="N/A">N/A</option>
											</select>
										</td>
										<td>5</td>
										<td colspan=4><input type="text" class="form-control" name="data[cmt2]" value="<?php echo $agnt_feedback['cmt2'] ?>" disabled></td>
										
									</tr>
									<tr>
										<td class="eml1" colspan=8 style="background-color:#3f5691; color: white;">CALL HANDLING SKILLS </td>
									</tr>
									<tr>
										<td class="eml1" colspan=4>Did the agent adhere to the approved call opening greeting?  "Thank you for calling Affinity by Molina, my name is First Name only.  How can I help you today?"</td>
										<td>
											<select class="form-control affinity_point " name="data[you_today]" disabled>
												
												<option affinity_val=2 <?php echo $agnt_feedback['you_today'] == "Yes"?"selected":"";?> value="Yes">Yes</option>
												<option affinity_val=2 <?php echo $agnt_feedback['you_today'] == "No"?"selected":"";?> value="No">No</option>
												<option affinity_val=0 <?php echo $agnt_feedback['you_today'] == "N/A"?"selected":"";?> value="N/A">N/A</option>
											</select>
										</td>
										<td>2</td>
										<td colspan=4><input type="text" class="form-control" name="data[cmt3]" value="<?php echo $agnt_feedback['cmt3'] ?>" disabled></td>
									</tr>
									<tr>
										<td class="eml1" colspan=4>Did the agent adhere to the approved call closing script? (must ask: Is there anything else I can help you with today?, Would like to complete a brief survey?  Thank you for calling Affinity Health Plan, have a great day.)</td>
										<td>
											<select class="form-control affinity_point " name="data[great_day]" disabled>
												
												<option affinity_val=3 <?php echo $agnt_feedback['great_day'] == "Yes"?"selected":"";?> value="Yes">Yes</option>
												
												<option affinity_val=3 <?php echo $agnt_feedback['great_day'] == "No"?"selected":"";?> value="No">No</option>
												<option affinity_val=0 <?php echo $agnt_feedback['great_day'] == "N/A"?"selected":"";?> value="N/A">N/A</option>
											</select>
										</td>
										<td>3</td>
										<td colspan=4><input type="text" class="form-control" name="data[cmt4]" value="<?php echo $agnt_feedback['cmt4'] ?>" disabled></td>
									</tr>
									<tr>
										<td class="eml1" colspan=4>Did the agent adhere to the approved "hold" script? (no more than 2 minutes total hold time on a single call and no more than 30 seconds of silence)</td>
										<td>
											<select class="form-control affinity_point " id="bounce_infinity_AF1" name="data[seconds_of_silence]" disabled>
												
												<option affinity_val=2 <?php echo $agnt_feedback['seconds_of_silence'] == "Yes"?"selected":"";?> value="Yes">Yes</option>
												
												<option affinity_val=2 <?php echo $agnt_feedback['seconds_of_silence'] == "No"?"selected":"";?> value="No">No</option>
												<option affinity_val=0 <?php echo $agnt_feedback['seconds_of_silence'] == "N/A"?"selected":"";?> value="N/A">N/A</option>
											</select>
										</td>
										<td>2</td>
										<td colspan=4><input type="text" class="form-control" name="data[cmt5]" value="<?php echo $agnt_feedback['cmt5'] ?>" disabled></td>
									</tr>
									<tr>
										<td class="eml1" colspan=4>Did the agent adhere to the approved "transfer" script?</td>
										<td>
											<select class="form-control affinity_point " id="bounce_infinity_AF1" name="data[transfer_script]" disabled>
												
												<option affinity_val=2 <?php echo $agnt_feedback['transfer_script'] == "Yes"?"selected":"";?> value="Yes">Yes</option>
												
												<option affinity_val=2 <?php echo $agnt_feedback['transfer_script'] == "No"?"selected":"";?> value="No">No</option>
												<option affinity_val=0 <?php echo $agnt_feedback['transfer_script'] == "N/A"?"selected":"";?> value="N/A">N/A</option>
											</select>
										</td>
										<td>2</td>
										<td colspan=4><input type="text" class="form-control" name="data[cmt6]" value="<?php echo $agnt_feedback['cmt6'] ?>" disabled></td>
									</tr>

									<tr>
										<td class="eml1" colspan=8 style="background-color:#3f5691; color: white;"> CUSTOMER SERVICE SKILLS  </td>
									</tr>
									<tr>
										<td class="eml1" colspan=4>Did the agent acknowledge the caller and their needs? </td>
										<td>
											<select class="form-control affinity_point " name="data[their_needs]" disabled>
												
												<option affinity_val=6 <?php echo $agnt_feedback['their_needs'] == "Yes"?"selected":"";?> value="Yes">Yes</option>
												<option affinity_val=6 <?php echo $agnt_feedback['their_needs'] == "No"?"selected":"";?> value="No">No</option>
												<option affinity_val=0 <?php echo $agnt_feedback['their_needs'] == "N/A"?"selected":"";?> value="N/A">N/A</option>
											</select>
										</td>
										<td>6</td>
										<td colspan=4><input type="text" class="form-control" name="data[cmt7]" value="<?php echo $agnt_feedback['cmt7'] ?>" disabled></td>
									</tr>
									<tr>
										<td class="eml1" colspan=4>Did the agent listen to the caller without interruptions?</td>
										<td>
											<select class="form-control affinity_point " name="data[without_interruptions]" disabled>
												
												<option affinity_val=3 <?php echo $agnt_feedback['without_interruptions'] == "Yes"?"selected":"";?> value="Yes">Yes</option>
												<option affinity_val=3 <?php echo $agnt_feedback['without_interruptions'] == "No"?"selected":"";?> value="No">No</option>
												<option affinity_val=0 <?php echo $agnt_feedback['without_interruptions'] == "N/A"?"selected":"";?> value="N/A">N/A</option>
											</select>
										</td>
										<td>3</td>
										<td colspan=4><input type="text" class="form-control" name="data[cmt8]" value="<?php echo $agnt_feedback['cmt8'] ?>" disabled></td>
										<!-- <td> Critical</td> -->
									</tr>
									<tr>
										<td class="eml1" colspan=4>Did the agent sound clear, confident, friendly, polite and welcoming? Displayed empathy?</td>
										<td>
											<select class="form-control affinity_point " name="data[displayed_empathy]" disabled>
												
												<option affinity_val=3 <?php echo $agnt_feedback['displayed_empathy'] == "Yes"?"selected":"";?> value="Yes">Yes</option>
												<option affinity_val=3 <?php echo $agnt_feedback['displayed_empathy'] == "No"?"selected":"";?> value="No">No</option>
												<option affinity_val=0 <?php echo $agnt_feedback['displayed_empathy'] == "N/A"?"selected":"";?> value="N/A">N/A</option>
											</select>
										</td>
										<td>3</td>
										<td colspan=4><input type="text" class="form-control" name="data[cmt9]" value="<?php echo $agnt_feedback['cmt9'] ?>" disabled></td>
										
									</tr>
									<tr>
										<td class="eml1" colspan=4>Did the CRP determine if this was a repeat call and review the history of the issue for the caller?  (Agent will lose points if the caller indicated they had called before and the agent does not review notes.</td>
										<td>
											<select class="form-control affinity_point " id="" name="data[review_notes]" disabled>
												
												<option affinity_val=6 <?php echo $agnt_feedback['review_notes'] == "Yes"?"selected":"";?> value="Yes">Yes</option>
												<option affinity_val=6 <?php echo $agnt_feedback['review_notes'] == "No"?"selected":"";?> value="No">No</option>
												<option affinity_val=0 <?php echo $agnt_feedback['review_notes'] == "N/A"?"selected":"";?> value="N/A">N/A</option>
											</select>
										</td>
										<td>6</td>
										<td colspan=4><input type="text" class="form-control" name="data[cmt10]" value="<?php echo $agnt_feedback['cmt10'] ?>" disabled></td>
										
									</tr>
									<tr>
										<td class="eml1" colspan=4>Did the agent keep the caller informed of his/her actions? Avoid dead air - no more than 30 seconds)?</td>
										<td>
											<select class="form-control affinity_point " name="data[30_seconds]" disabled>
												
												<option affinity_val=3 <?php echo $agnt_feedback['30_seconds'] == "Yes"?"selected":"";?> value="Yes">Yes</option>
												<option affinity_val=3 <?php echo $agnt_feedback['30_seconds'] == "No"?"selected":"";?> value="No">No</option>
												<option affinity_val=0 <?php echo $agnt_feedback['30_seconds'] == "N/A"?"selected":"";?> value="N/A">N/A</option>
											</select>
										</td>
										<td>3</td>
										<td colspan=4><input type="text" class="form-control" name="data[cmt11]" value="<?php echo $agnt_feedback['cmt11'] ?>" disabled></td>
										
									</tr>
									<tr>
										<td class="eml1" colspan=4>Did the agent refrain from using jargon or acronyms?  CSR must use the proper pronunciation of terms on the call?</td>
										<td>
											<select class="form-control affinity_point " name="data[on_the_call]" disabled>
												
												<option affinity_val=3 <?php echo $agnt_feedback['on_the_call'] == "Yes"?"selected":"";?> value="Yes">Yes</option>
												<option affinity_val=3 <?php echo $agnt_feedback['on_the_call'] == "No"?"selected":"";?> value="No">No</option>
												<option affinity_val=0 <?php echo $agnt_feedback['on_the_call'] == "N/A"?"selected":"";?> value="N/A">N/A</option>
											</select>
										</td>
										<td>3</td>
										<td colspan=4><input type="text" class="form-control" name="data[cmt12]" value="<?php echo $agnt_feedback['cmt12'] ?>" disabled></td>
										
									</tr>
									<tr>
										<td class="eml1" colspan=4>Did the agent demonstrate control of the call and prevented escalations?</td>
										<td>
											<select class="form-control affinity_point " name="data[prevented_escalations]" disabled>
												
												<option affinity_val=6 <?php echo $agnt_feedback['prevented_escalations'] == "Yes"?"selected":"";?> value="Yes">Yes</option>
												<option affinity_val=6 <?php echo $agnt_feedback['prevented_escalations'] == "No"?"selected":"";?> value="No">No</option>
												<option affinity_val=0 <?php echo $agnt_feedback['prevented_escalations'] == "N/A"?"selected":"";?> value="N/A">N/A</option>
											</select>
										</td>
										<td>6</td>
										<td colspan=4><input type="text" class="form-control" name="data[cmt13]" value="<?php echo $agnt_feedback['cmt13'] ?>" disabled></td>
										
									</tr>
									<tr>
										<td class="eml1" colspan=4>Did the agent use the caller's name at least once during the call?  CSR should repeat the last name (Ms, Mrs, Mr).  If the last name is difficult to pronounce, the CSR should ask permission to use the first name.</td>
										<td>
											<select class="form-control affinity_point " name="data[first_name]" disabled>
												
												<option affinity_val=3 <?php echo $agnt_feedback['first_name'] == "Yes"?"selected":"";?> value="Yes">Yes</option>
												<option affinity_val=3 <?php echo $agnt_feedback['first_name'] == "No"?"selected":"";?> value="No">No</option>
												<option affinity_val=0 <?php echo $agnt_feedback['first_name'] == "N/A"?"selected":"";?> value="N/A">N/A</option>
											</select>
										</td>
										<td>3</td>
										<td colspan=4><input type="text" class="form-control" name="data[cmt14]" value="<?php echo $agnt_feedback['cmt14'] ?>" disabled></td>
										
									</tr>
									<tr>
										<td class="eml1" colspan=4>Did the agent attempt to resolve the caller's issue without needing to escalate the call?   If CSR attempts to resolve, and caller continues to insist to speak to a Supervisor points will not be taken off.</td>
										<td>
											<select class="form-control affinity_point " name="data[taken_off]" disabled>
												
												<option affinity_val=6 <?php echo $agnt_feedback['taken_off'] == "Yes"?"selected":"";?> value="Yes">Yes</option>
												<option affinity_val=6 <?php echo $agnt_feedback['taken_off'] == "No"?"selected":"";?> value="No">No</option>
												<option affinity_val=0 <?php echo $agnt_feedback['taken_off'] == "N/A"?"selected":"";?> value="N/A">N/A</option>
											</select>
										</td>
										<td>6</td>
										<td colspan=4><input type="text" class="form-control" name="data[cmt15]" value="<?php echo $agnt_feedback['cmt15'] ?>" disabled></td>
										
									</tr>

									<tr>
										<td class="eml1" colspan=8 style="background-color:#3f5691; color: white;">PRODUCT KNOWLEDGE  </td>
									</tr>
									<tr>
										<td class="eml1" colspan=4>Did the agent offer the most accurate/up to date information?</td>
										<td>
											<select class="form-control affinity_point " name="data[date_information]" disabled>
												
												<option affinity_val=7 <?php echo $agnt_feedback['date_information'] == "Yes"?"selected":"";?> value="Yes">Yes</option>
												<option affinity_val=7 <?php echo $agnt_feedback['date_information'] == "No"?"selected":"";?> value="No">No</option>
												<option affinity_val=0 <?php echo $agnt_feedback['date_information'] == "N/A"?"selected":"";?> value="N/A">N/A</option>
											</select>
										</td>
										<td>7</td>
										<td colspan=4><input type="text" class="form-control" name="data[cmt16]" value="<?php echo $agnt_feedback['cmt16'] ?>" disabled></td>
										
									</tr>
									<tr>
										<td class="eml1" colspan=4 >Did the agent offer detailed information/all possible solutions?</td>
										<td>
											<select class="form-control affinity_point " id="bounce_infinity_AF2" name="data[possible_solutions]" disabled>
												
												<option affinity_val=7 <?php echo $agnt_feedback['possible_solutions'] == "Yes"?"selected":"";?> value="Yes">Yes</option>
												<option affinity_val=7 <?php echo $agnt_feedback['possible_solutions'] == "No"?"selected":"";?> value="No">No</option>
												<option affinity_val=0 <?php echo $agnt_feedback['possible_solutions'] == "N/A"?"selected":"";?> value="N/A">N/A</option>
											</select>
										</td>
										<td>7</td>
										<td colspan=4><input type="text" class="form-control" name="data[cmt17]" value="<?php echo $agnt_feedback['cmt17'] ?>" disabled></td>
										
									</tr>
									<tr>
										<td class="eml1" colspan=4>Did the agent use all available resources/tools to assist the caller?</td>
										<td>
											<select class="form-control affinity_point " name="data[assist_the_caller]" disabled>
												
												<option affinity_val=7 <?php echo $agnt_feedback['assist_the_caller'] == "Yes"?"selected":"";?> value="Yes">Yes</option>
												<option affinity_val=7 <?php echo $agnt_feedback['assist_the_caller'] == "No"?"selected":"";?> value="No">No</option>
												<option affinity_val=0 <?php echo $agnt_feedback['assist_the_caller'] == "N/A"?"selected":"";?> value="N/A">N/A</option>
											</select>
										</td>
										<td>7</td>
										<td colspan=4><input type="text" class="form-control" name="data[cmt18]" value="<?php echo $agnt_feedback['cmt18'] ?>" disabled></td>
										
									</tr>


									
									<tr>
										<td class="eml1" colspan=8 style="background-color:#3f5691; color: white;">DOCUMENTATION </td>
									</tr>
									<tr>
										<td class="eml1" colspan=4>Did the agent document the customer/contact information?</td>
										<td>
											<select class="form-control affinity_point " id="bounce_infinity_AF4" name="data[contact_information]" disabled>
												
												<option affinity_val=7 <?php echo $agnt_feedback['contact_information'] == "Yes"?"selected":"";?> value="Yes">Yes</option>
												
												<option affinity_val=7 <?php echo $agnt_feedback['contact_information'] == "No"?"selected":"";?> value="No">No</option>
												<option affinity_val=0 <?php echo $agnt_feedback['contact_information'] == "N/A"?"selected":"";?> value="N/A">N/A</option>
											</select>
										</td>
										<td>7</td>
										<td colspan=4><input type="text" class="form-control" name="data[cmt19]" value="<?php echo $agnt_feedback['cmt19'] ?>" disabled></td>
										
									</tr>
									<tr>
										<td class="eml1" colspan=4>Did the agent use the most appropriate subject/category codes?</td>
										<td>
											<select class="form-control affinity_point " name="data[category_codes]" disabled>
												
												<option affinity_val=7 <?php echo $agnt_feedback['category_codes'] == "Yes"?"selected":"";?> value="Yes">Yes</option>
												<option affinity_val=7 <?php echo $agnt_feedback['category_codes'] == "No"?"selected":"";?> value="No">No</option>
												<option affinity_val=0 <?php echo $agnt_feedback['category_codes'] == "N/A"?"selected":"";?> value="N/A">N/A</option>
											</select>
										</td>
										<td>7</td>
										<td colspan=4><input type="text" class="form-control" name="data[cmt20]" value="<?php echo $agnt_feedback['cmt20'] ?>" disabled></td>
										
									</tr>
									<tr>
										<td class="eml1" colspan=4>Did the agent document the call in detail including inquiry, details and resolution?</td>
										<td>
											<select class="form-control affinity_point " name="data[details_and_resolution]" disabled>
												
												<option affinity_val=7 <?php echo $agnt_feedback['details_and_resolution'] == "Yes"?"selected":"";?> value="Yes">Yes</option>
												<option affinity_val=7 <?php echo $agnt_feedback['details_and_resolution'] == "No"?"selected":"";?> value="No">No</option>
												<option affinity_val=0 <?php echo $agnt_feedback['details_and_resolution'] == "N/A"?"selected":"";?> value="N/A">N/A</option>
											</select>
										</td>
										<td>7</td>
										<td colspan=4><input type="text" class="form-control" name="data[cmt21]" value="<?php echo $agnt_feedback['cmt21'] ?>" disabled></td>
										
									</tr><tr>
										<td class="eml1" colspan=4>Did the agent accurately route the inquiry to the appropriate party/group?</td>
										<td>
											<select class="form-control affinity_point " name="data[appropriate_party]" disabled>
												
												<option affinity_val=7 <?php echo $agnt_feedback['appropriate_party'] == "Yes"?"selected":"";?> value="Yes">Yes</option>
												<option affinity_val=7 <?php echo $agnt_feedback['appropriate_party'] == "No"?"selected":"";?> value="No">No</option>
												<option affinity_val=0 <?php echo $agnt_feedback['appropriate_party'] == "N/A"?"selected":"";?> value="N/A">N/A</option>
											</select>
										</td>
										<td>7</td>
										<td colspan=4><input type="text" class="form-control" name="data[cmt22]" value="<?php echo $agnt_feedback['cmt22'] ?>" disabled></td>
										
									</tr><tr>
										<td class="eml1" colspan=4>Did the agent upload the verbal request form in UMK2? (if applicable)</td>
										<td>
											<select class="form-control affinity_point " name="data[if_applicable]" disabled>
												
												<option affinity_val=5 <?php echo $agnt_feedback['if_applicable'] == "Yes"?"selected":"";?> value="Yes">Yes</option>
												<option affinity_val=5 <?php echo $agnt_feedback['if_applicable'] == "No"?"selected":"";?> value="No">No</option>
												<option affinity_val=0 <?php echo $agnt_feedback['if_applicable'] == "N/A"?"selected":"";?> value="N/A">N/A</option>
											</select>
										</td>
										<td>5</td>
										<td colspan=4><input type="text" class="form-control" name="data[cmt23]" value="<?php echo $agnt_feedback['cmt23'] ?>" disabled></td>
										
									</tr><tr>
										<td class="eml1" colspan=4>Did the agent take time at the beginning of the call to finish noting the previous call?</td>
										<td>
											<select class="form-control affinity_point " name="data[previous_call]" disabled>
												
												<option affinity_val=5 <?php echo $agnt_feedback['previous_call'] == "Yes"?"selected":"";?> value="Yes">Yes</option>
												<option affinity_val=5 <?php echo $agnt_feedback['previous_call'] == "No"?"selected":"";?> value="No">No</option>
												<option affinity_val=0 <?php echo $agnt_feedback['previous_call'] == "N/A"?"selected":"";?> value="N/A">N/A</option>
											</select>
										</td>
										<td>5</td>
										<td colspan=4><input type="text" class="form-control" name="data[cmt24]" value="<?php echo $agnt_feedback['cmt24'] ?>" disabled></td>
										
									</tr>
                              <tr>
                                 <td >Call Summary:</td>
                                 <td colspan="3"><textarea class="form-control" id="" name="data[call_summary]" disabled><?php echo $agnt_feedback['call_summary'] ?></textarea></td>
                                 <td>Feedback:</td>
                                 <td colspan="4"><textarea class="form-control" id="" name="data[feedback]" disabled><?php echo $agnt_feedback['feedback'] ?></textarea></td>
                              </tr>

                               <?php } else if($campaign=='affinity_pro'){ ?>
									</tr>
										</tr>
										<tr style="height:25px; font-weight:bold; background-color:#85C1E9">
										<td colspan=2>Parameter</td>
										<td colspan=2>Rating</td>
										<td colspan=1>Possible Score</td>
										<td colspan=3>Remarks</td>
									</tr>
									<tr>
										<td class="eml1" colspan=8 style="background-color:#3f5691; color: white;">Customer Experience and Personal Interaction</td>
									</tr>
									<tr>
										<td class="eml1" colspan=4>Appropriately allowed customer to express their feelings and expressed sincere and appropriate empathy </td>
										<td>
											<select class="form-control affinity_point" name="data[Interaction1]" disabled>
												
												<option affinity_val=6 <?php echo $agnt_feedback['Interaction1'] == "Yes"?"selected":"";?> value="Yes">Yes</option>
												<option affinity_val=6 <?php echo $agnt_feedback['Interaction1'] == "No"?"selected":"";?> value="No">No</option>
												<option affinity_val=0 <?php echo $agnt_feedback['Interaction1'] == "N/A"?"selected":"";?> value="N/A">N/A</option>
											</select>
										</td>
										
										<td colspan=4><input type="text" class="form-control" name="data[cmt1]" value="<?php echo $agnt_feedback['cmt1'] ?>" disabled></td>
										
									</tr>
									<tr>
										<td class="eml1" colspan=4>Enthusiastic, “smiled,” and displayed a positive helpful tone throughout the call </td>
										<td>
											<select class="form-control affinity_point " name="data[Interaction2]" disabled>
												
												<option affinity_val=4 <?php echo $agnt_feedback['Interaction2'] == "Yes"?"selected":"";?> value="Yes">Yes</option>
												<option affinity_val=4 <?php echo $agnt_feedback['Interaction2'] == "No"?"selected":"";?> value="No">No</option>
												<option affinity_val=0 <?php echo $agnt_feedback['Interaction2'] == "N/A"?"selected":"";?> value="N/A">N/A</option>
											</select>
										</td>
										
										<td colspan=4><input type="text" class="form-control" name="data[cmt2]" value="<?php echo $agnt_feedback['cmt2'] ?>" disabled></td>
										
									</tr>
									<tr>
										<td class="eml1" colspan=4>Demonstrated courteous and professional demeanor at all times while personalizing call as appropriate </td>
										<td>
											<select class="form-control affinity_point " name="data[Interaction3]" disabled>
												
												<option affinity_val=4 <?php echo $agnt_feedback['Interaction3'] == "Yes"?"selected":"";?> value="Yes">Yes</option>
												<option affinity_val=4 <?php echo $agnt_feedback['Interaction3'] == "No"?"selected":"";?> value="No">No</option>
												<option affinity_val=0 <?php echo $agnt_feedback['Interaction3'] == "N/A"?"selected":"";?> value="N/A">N/A</option>
											</select>
										</td>
										
										<td colspan=4><input type="text" class="form-control" name="data[cmt3]" value="<?php echo $agnt_feedback['cmt3'] ?>" disabled></td>
										
									</tr>
									<tr>
										<td class="eml1" colspan=4>Displayed a high level of confidence and demonstrated a “can do” attitude at all times  </td>
										<td>
											<select class="form-control affinity_point " name="data[Interaction4]" disabled>
												
												<option affinity_val=4 <?php echo $agnt_feedback['Interaction4'] == "Yes"?"selected":"";?> value="Yes">Yes</option>
												<option affinity_val=4 <?php echo $agnt_feedback['Interaction4'] == "No"?"selected":"";?> value="No">No</option>
												<option affinity_val=0 <?php echo $agnt_feedback['Interaction4'] == "N/A"?"selected":"";?> value="N/A">N/A</option>
											</select>
										</td>
										
										<td colspan=4><input type="text" class="form-control" name="data[cmt4]" value="<?php echo $agnt_feedback['cmt4'] ?>" disabled></td>
										
									</tr>
									<tr>
										<td class="eml1" colspan=4>Actively listened, avoided interruptions, maintained control, acknowledged all of the caller’s concerns and guided call towards a logical resolution  </td>
										<td>
											<select class="form-control affinity_point " name="data[Interaction5]" disabled>
												
												<option affinity_val=6 <?php echo $agnt_feedback['Interaction5'] == "Yes"?"selected":"";?> value="Yes">Yes</option>
												<option affinity_val=6 <?php echo $agnt_feedback['Interaction5'] == "No"?"selected":"";?> value="No">No</option>
												<option affinity_val=0 <?php echo $agnt_feedback['Interaction5'] == "N/A"?"selected":"";?> value="N/A">N/A</option>
											</select>
										</td>
										
										<td colspan=4><input type="text" class="form-control" name="data[cmt5]" value="<?php echo $agnt_feedback['cmt5'] ?>" disabled></td>
										
									</tr>

									<tr>
										<td class="eml1" colspan=4>Spoke clearly, at an appropriate pace and was easily understood, used appropriate positive word choices, phrases, and avoided technical jargon   </td>
										<td>
											<select class="form-control affinity_point " name="data[Interaction6]" disabled>
												
												<option affinity_val=4 <?php echo $agnt_feedback['Interaction6'] == "Yes"?"selected":"";?> value="Yes">Yes</option>
												<option affinity_val=4 <?php echo $agnt_feedback['Interaction6'] == "No"?"selected":"";?> value="No">No</option>
												<option affinity_val=0 <?php echo $agnt_feedback['Interaction6'] == "N/A"?"selected":"";?> value="N/A">N/A</option>
											</select>
										</td>
										
										<td colspan=4><input type="text" class="form-control" name="data[cmt6]" value="<?php echo $agnt_feedback['cmt6'] ?>" disabled></td>
										
									</tr>
									<tr>
										<td class="eml1" colspan=4>Remained focused and avoided unexplained dead air and was able to multi-task when appropriate </td>
										<td>
											<select class="form-control affinity_point " name="data[Interaction7]" disabled>
												
												<option affinity_val=2 <?php echo $agnt_feedback['Interaction7'] == "Yes"?"selected":"";?> value="Yes">Yes</option>
												<option affinity_val=2 <?php echo $agnt_feedback['Interaction7'] == "No"?"selected":"";?> value="No">No</option>
												<option affinity_val=0 <?php echo $agnt_feedback['Interaction7'] == "N/A"?"selected":"";?> value="N/A">N/A</option>
											</select>
										</td>
									
										<td colspan=4><input type="text" class="form-control" name="data[cmt7]" value="<?php echo $agnt_feedback['cmt7'] ?>" disabled></td>
										
									</tr>



									<tr>
										<td class="eml1" colspan=8 style="background-color:#3f5691; color: white;">Process and Procedure Adherence </td>
									</tr>
									<tr>
										<td class="eml1" colspan=4>Agent is prepared for the call and followed correct opening </td>
										<td>
											<select class="form-control affinity_point " name="data[Adherence1]" disabled>
												
												<option affinity_val=1 <?php echo $agnt_feedback['Adherence1'] == "Yes"?"selected":"";?> value="Yes">Yes</option>
												<option affinity_val=1 <?php echo $agnt_feedback['Adherence1'] == "No"?"selected":"";?> value="No">No</option>
												<option affinity_val=0 <?php echo $agnt_feedback['Adherence1'] == "N/A"?"selected":"";?> value="N/A">N/A</option>
											</select>
										</td>
										
										<td colspan=4><input type="text" class="form-control" name="data[cmt8]" value="<?php echo $agnt_feedback['cmt8'] ?>" disabled></td>
									</tr>
									<tr>
										<td class="eml1" colspan=4>Followed correct closing and exited call in a timely manner </td>
										<td>
											<select class="form-control affinity_point " name="data[Adherence2]" disabled>
												
												<option affinity_val=1 <?php echo $agnt_feedback['Adherence2'] == "Yes"?"selected":"";?> value="Yes">Yes</option>
												
												<option affinity_val=1 <?php echo $agnt_feedback['Adherence2'] == "No"?"selected":"";?> value="No">No</option>
												<option affinity_val=0 <?php echo $agnt_feedback['Adherence2'] == "N/A"?"selected":"";?> value="N/A">N/A</option>
											</select>
										</td>
										
										<td colspan=4><input type="text" class="form-control" name="data[cmt9]" value="<?php echo $agnt_feedback['cmt9'] ?>" disabled></td>
									</tr>
									<tr>
										<td class="eml1" colspan=4>Utilized correct hold and/or mute procedure </td>
										<td>
											<select class="form-control affinity_point " id="bounce_infinity_AF1" name="data[Adherence3]" disabled>
												
												<option affinity_val=2 <?php echo $agnt_feedback['Adherence3'] == "Yes"?"selected":"";?> value="Yes">Yes</option>
												
												<option affinity_val=2 <?php echo $agnt_feedback['Adherence3'] == "No"?"selected":"";?> value="No">No</option>
												<option affinity_val=0 <?php echo $agnt_feedback['Adherence3'] == "N/A"?"selected":"";?> value="N/A">N/A</option>
											</select>
										</td>
										
										<td colspan=4><input type="text" class="form-control" name="data[cmt10]" value="<?php echo $agnt_feedback['cmt10'] ?>" disabled></td>
									</tr>
									<tr>
										<td class="eml1" colspan=4>Utilized correct transfer procedure </td>
										<td>
											<select class="form-control affinity_point " id="bounce_infinity_AF1" name="data[Adherence4]" disabled>
												
												<option affinity_val=2 <?php echo $agnt_feedback['Adherence4'] == "Yes"?"selected":"";?> value="Yes">Yes</option>
												
												<option affinity_val=2 <?php echo $agnt_feedback['Adherence4'] == "No"?"selected":"";?> value="No">No</option>
												<option affinity_val=0 <?php echo $agnt_feedback['Adherence4'] == "N/A"?"selected":"";?> value="N/A">N/A</option>
											</select>
										</td>
										
										<td colspan=4><input type="text" class="form-control" name="data[cmt11]" value="<?php echo $agnt_feedback['cmt11'] ?>" disabled></td>
									</tr>

									<tr>
										<td class="eml1" colspan=4>Successfully verified HIPAA and verified caller is authorized  </td>
										<td>
											<select class="form-control affinity_point " id="bounce_infinity_AF1" name="data[Adherence5]" disabled>
												
												<option affinity_val=10 <?php echo $agnt_feedback['Adherence5'] == "Yes"?"selected":"";?> value="Yes">Yes</option>
												
												<option affinity_val=10 <?php echo $agnt_feedback['Adherence5'] == "No"?"selected":"";?> value="No">No</option>
												<option affinity_val=0 <?php echo $agnt_feedback['Adherence5'] == "N/A"?"selected":"";?> value="N/A">N/A</option>
											</select>
										</td>
										
										<td colspan=4><input type="text" class="form-control" name="data[cmt12]" value="<?php echo $agnt_feedback['cmt12'] ?>" disabled></td>
									</tr>
									<tr>
										<td class="eml1" colspan=4>Verified demographic & PCP information on file as appropriate, handled HEDIS alert correctly </td>
										<td>
											<select class="form-control affinity_point " id="bounce_infinity_AF1" name="data[Adherence6]" disabled>
												
												<option affinity_val=2 <?php echo $agnt_feedback['Adherence6'] == "Yes"?"selected":"";?> value="Yes">Yes</option>
												
												<option affinity_val=2 <?php echo $agnt_feedback['Adherence6'] == "No"?"selected":"";?> value="No">No</option>
												<option affinity_val=0 <?php echo $agnt_feedback['Adherence6'] == "N/A"?"selected":"";?> value="N/A">N/A</option>
											</select>
										</td>
										
										<td colspan=4><input type="text" class="form-control" name="data[cmt13]" value="<?php echo $agnt_feedback['cmt13'] ?>" disabled></td>
									</tr>
									<tr>
										<td class="eml1" colspan=4>Promoted Self Service options whenever appropriate </td>
										<td>
											<select class="form-control affinity_point " id="bounce_infinity_AF1" name="data[Adherence7]" disabled>
												
												<option affinity_val=2 <?php echo $agnt_feedback['Adherence7'] == "Yes"?"selected":"";?> value="Yes">Yes</option>
												
												<option affinity_val=2 <?php echo $agnt_feedback['Adherence7'] == "No"?"selected":"";?> value="No">No</option>
												<option affinity_val=0 <?php echo $agnt_feedback['Adherence7'] == "N/A"?"selected":"";?> value="N/A">N/A</option>
											</select>
										</td>
										
										<td colspan=4><input type="text" class="form-control" name="data[cmt14]" value="<?php echo $agnt_feedback['cmt14'] ?>" disabled></td>
									</tr>
									<tr>
										<td class="eml1" colspan=4>Erroneously referred member to Regulatory Agencies </td>
										<td>
											<select class="form-control " name="data[Adherence8]" disabled>
												
												<option <?php echo $agnt_feedback['Adherence8'] == "Yes"?"selected":"";?> value="Yes">Yes</option>
												
												<option <?php echo $agnt_feedback['Adherence8'] == "No"?"selected":"";?> value="No">No</option>
												<option <?php echo $agnt_feedback['Adherence8'] == "N/A"?"selected":"";?> value="N/A">N/A</option>
											</select>
										</td>
										
										<td colspan=4><input type="text" class="form-control" name="data[cmt15]" value="<?php echo $agnt_feedback['cmt15'] ?>" disabled></td>
									</tr>

									<tr>
										<td class="eml1" colspan=8 style="background-color:#3f5691; color: white;">Issue Resolution</td>
									</tr>
									<tr>
										<td class="eml1" colspan=4>Avoided assumptions, confirmed understanding of the issue by asking open and/or closed questions, correctly identified issue to be resolved and reviewed notes/history appropriately </td>
										<td>
											<select class="form-control affinity_point " name="data[Resolution1]" disabled>
												
												<option affinity_val=10 <?php echo $agnt_feedback['Resolution1'] == "Yes"?"selected":"";?> value="Yes">Yes</option>
												<option affinity_val=10 <?php echo $agnt_feedback['Resolution1'] == "No"?"selected":"";?> value="No">No</option>
												<option affinity_val=0 <?php echo $agnt_feedback['Resolution1'] == "N/A"?"selected":"";?> value="N/A">N/A</option>
											</select>
										</td>
										
										<td colspan=4><input type="text" class="form-control" name="data[cmt16]" value="<?php echo $agnt_feedback['cmt16'] ?>" disabled></td>
									</tr>
									<tr>
										<td class="eml1" colspan=4>Escalated the call appropriately or as requested by the caller </td>
										<td>
											<select class="form-control affinity_point " name="data[Resolution2]" disabled>
												
												<option affinity_val=10 <?php echo $agnt_feedback['Resolution2'] == "Yes"?"selected":"";?> value="Yes">Yes</option>
												<option affinity_val=10 <?php echo $agnt_feedback['Resolution2'] == "No"?"selected":"";?> value="No">No</option>
												<option affinity_val=0 <?php echo $agnt_feedback['Resolution2'] == "N/A"?"selected":"";?> value="N/A">N/A</option>
											</select>
										</td>
										
										<td colspan=4><input type="text" class="form-control" name="data[cmt17]" value="<?php echo $agnt_feedback['cmt17'] ?>" disabled></td>
										<!-- <td> Critical</td> -->
									</tr>
									<tr>
										<td class="eml1" colspan=4>FCR - Exhausted all available options by utilizing tools/resources/staff effectively to successfully resolve all of the caller’s concerns </td>
										<td>
											<select class="form-control affinity_point " name="data[Resolution3]" disabled>
												
												<option affinity_val=10 <?php echo $agnt_feedback['Resolution3'] == "Yes"?"selected":"";?> value="Yes">Yes</option>
												<option affinity_val=10 <?php echo $agnt_feedback['Resolution3'] == "No"?"selected":"";?> value="No">No</option>
												<option affinity_val=0 <?php echo $agnt_feedback['Resolution3'] == "N/A"?"selected":"";?> value="N/A">N/A</option>
											</select>
										</td>
										
										<td colspan=4><input type="text" class="form-control" name="data[cmt18]" value="<?php echo $agnt_feedback['cmt18'] ?>" disabled></td>
										
									</tr>
									<tr>
										<td class="eml1" colspan=4>Provided complete and accurate information, answered questions directly and set clear expectations on next steps </td>
										<td>
											<select class="form-control affinity_point " id="" name="data[Resolution4]" disabled>
												
												<option affinity_val=10 <?php echo $agnt_feedback['Resolution4'] == "Yes"?"selected":"";?> value="Yes">Yes</option>
												<option affinity_val=10 <?php echo $agnt_feedback['Resolution4'] == "No"?"selected":"";?> value="No">No</option>
												<option affinity_val=0 <?php echo $agnt_feedback['Resolution4'] == "N/A"?"selected":"";?> value="N/A">N/A</option>
											</select>
										</td>
										
										<td colspan=4><input type="text" class="form-control" name="data[cmt19]" value="<?php echo $agnt_feedback['cmt19'] ?>" disabled></td>
										
									</tr>
									<tr>
										<td class="eml1" colspan=4>Clearly and accurately documented account (description, categorization, resolution, 5Ws and/or linked Provider/Claim) </td>
										<td>
											<select class="form-control affinity_point " name="data[Resolution5]" disabled>
												
												<option affinity_val=10 <?php echo $agnt_feedback['Resolution5'] == "Yes"?"selected":"";?> value="Yes">Yes</option>
												<option affinity_val=10 <?php echo $agnt_feedback['Resolution5'] == "No"?"selected":"";?> value="No">No</option>
												<option affinity_val=0 <?php echo $agnt_feedback['Resolution5'] == "N/A"?"selected":"";?> value="N/A">N/A</option>
											</select>
										</td>
										
										<td colspan=4><input type="text" class="form-control" name="data[cmt20]" value="<?php echo $agnt_feedback['cmt20'] ?>" disabled></td>
										
									</tr>
									
									<tr>
										<td class="eml1" colspan=8 style="background-color:#3f5691; color: white;">Appeals & Grievance (Critical Error) (Conditional Section)  Applicable</td>
									</tr>
									<tr>
										<td class="eml1" colspan=4>Did the agent correctly identify as an Appeal? (Yes/No)</td>
										<td>
											<select class="form-control  " name="data[Applicable1]" disabled>
												
												<option <?php echo $agnt_feedback['Applicable1'] == "Yes"?"selected":"";?> value="Yes">Yes</option>
												<option <?php echo $agnt_feedback['Applicable1'] == "No"?"selected":"";?> value="No">No</option>
												
											</select>
										</td>
										
										<td colspan=4><input type="text" class="form-control" name="data[cmt21]" value="<?php echo $agnt_feedback['cmt21'] ?>" disabled></td>
										
									</tr>
									<tr>
										<td class="eml1" colspan=4 >Did the agent correctly identify as a Grievance? (Yes/No) </td>
										<td>
											<select class="form-control  " id="bounce_infinity_AF2" name="data[Applicable2]" disabled>
												
												<option <?php echo $agnt_feedback['Applicable2'] == "Yes"?"selected":"";?> value="Yes">Yes</option>
												<option <?php echo $agnt_feedback['Applicable2'] == "No"?"selected":"";?> value="No">No</option>
												
											</select>
										</td>
										
										<td colspan=4><input type="text" class="form-control" name="data[cmt22]" value="<?php echo $agnt_feedback['cmt22'] ?>" disabled></td>
										
									</tr>
									<tr>
										<td class="eml1" colspan=4>Did the agent correctly code the call? (This will be applicable to either a Grievance or Appeal) (Yes/No)</td>
										<td>
											<select class="form-control  " name="data[Applicable3]" disabled>
												
												<option <?php echo $agnt_feedback['Applicable3'] == "Yes"?"selected":"";?> value="Yes">Yes</option>
												<option <?php echo $agnt_feedback['Applicable3'] == "No"?"selected":"";?> value="No">No</option>
												
											</select>
										</td>
									
										<td colspan=4><input type="text" class="form-control" name="data[cmt23]" value="<?php echo $agnt_feedback['cmt23'] ?>" disabled></td>
										
									</tr>


									
									<tr>
										<td class="eml1" colspan=8 style="background-color:#3f5691; color: white;">One Molina </td>
									</tr>
									<tr>
										<td class="eml1" colspan=4>Wow call: the agent went the extra step, and did the right thing and the call could be used for training (Yes/No)</td>
										<td>
											<select class="form-control  " id="bounce_infinity_AF4" name="data[Molina1]" disabled>
												
												<option <?php echo $agnt_feedback['Molina1'] == "Yes"?"selected":"";?> value="Yes">Yes</option>
												
												<option <?php echo $agnt_feedback['Molina1'] == "No"?"selected":"";?> value="No">No</option>
												
											</select>
										</td>
										
										<td colspan=4><input type="text" class="form-control" name="data[cmt24]" value="<?php echo $agnt_feedback['cmt24'] ?>" disabled></td>
										
									</tr>

									<tr>
										<td class="eml1" colspan=8 style="background-color:#3f5691; color: white;">Reporting Data </td>
									</tr>
									<tr>
										<td class="eml1" colspan=4>Pharmacy Related Call</td>
										<td>
											<select class="form-control  " id="bounce_infinity_AF4" name="data[Data1]" disabled>
												
												<option <?php echo $agnt_feedback['Data1'] == "Yes"?"selected":"";?> value="Yes">Yes</option>
												
												<option <?php echo $agnt_feedback['Data1'] == "No"?"selected":"";?> value="No">No</option>
												
											</select>
										</td>
										
										<td colspan=4><input type="text" class="form-control" name="data[cmt25]" value="<?php echo $agnt_feedback['cmt25'] ?>" disabled></td>
										
									</tr>

									<tr>
										<td class="eml1" colspan=4>DSNP Member</td>
										<td>
											<select class="form-control  " id="bounce_infinity_AF4" name="data[Data2]" disabled>
												
												<option <?php echo $agnt_feedback['Data2'] == "Yes"?"selected":"";?> value="Yes">Yes</option>
												
												<option <?php echo $agnt_feedback['Data2'] == "No"?"selected":"";?> value="No">No</option>
												
											</select>
										</td>
										
										<td colspan=4><input type="text" class="form-control" name="data[cmt26]" value="<?php echo $agnt_feedback['cmt26'] ?>" disabled></td>
										
									</tr>
									<tr>
										<td>Call Summary:</td>
										<td colspan=3><textarea class="form-control" id="" name="data[call_summary]"><?php echo $agnt_feedback['call_summary'] ?></textarea></td>
										<td>Feedback:</td>
										<td colspan=3><textarea class="form-control" id="" name="data[feedback]"><?php echo $agnt_feedback['feedback'] ?></textarea></td>
									</tr>

                               <?php } else if($campaign=='cci_medicare'){ ?>
									<tr style="background-color:#A9CCE3; font-weight:bold">
										<td >Criticality</td>
										<td colspan=4>Proposed Paramerers</td>
										<td colspan="2">Maximum</td>
										<td colspan="2">Status</td>
									</tr>
									<tr>
										<td rowspan=7  style="background-color:#A9CCE3; font-weight:bold">Soft Skills</td>
										<td colspan=4>Call Opening</td>
										<td colspan=2>3</td>
										<td colspan="2">
											<select class="form-control affinity_point" name="data[call_opening]" disabled>
												
												<option affinity_val=3 <?php echo $agnt_feedback['call_opening']=='Yes'?"selected":""; ?> value="Yes">Yes</option>
												<option affinity_val=3 <?php echo $agnt_feedback['call_opening']=='No'?"selected":""; ?> value="No">No</option>
												<option affinity_val=0 <?php echo $agnt_feedback['call_opening']=='NA'?"selected":""; ?> value="NA">NA</option>
											</select>
										</td>
									</tr>
									<tr>
										
										<td colspan=4>Prepared for Call</td>
										<td colspan=2>3</td>
										<td colspan="2">
											<select class="form-control affinity_point" name="data[prepared_for_cal]" disabled>
												
												<option affinity_val=3 <?php echo $agnt_feedback['prepared_for_cal']=='Yes'?"selected":""; ?> value="Yes">Yes</option>
												<option affinity_val=3 <?php echo $agnt_feedback['prepared_for_cal']=='No'?"selected":""; ?> value="No">No</option>
												<option affinity_val=0 <?php echo $agnt_feedback['prepared_for_cal']=='NA'?"selected":""; ?> value="NA">NA</option>
											</select>
										</td>
									</tr>
									<tr>
										
										<td colspan=4>Serving with Empathy - Active Listening</td>
										<td colspan=2>5</td>
										<td colspan="2">
											<select class="form-control affinity_point" name="data[active_listening]" disabled>
												
                                                <option affinity_val=5 <?php echo $agnt_feedback['active_listening']=='Yes'?"selected":""; ?> value="Yes">Yes</option>
												<option affinity_val=5 <?php echo $agnt_feedback['active_listening']=='No'?"selected":""; ?> value="No">No</option>
												<option affinity_val=0 <?php echo $agnt_feedback['active_listening']=='NA'?"selected":""; ?> value="NA">NA</option>

											</select>
										</td>
									</tr>

									<tr>
										
										<td colspan=4>Serving with Empathy - Empathy</td>
										<td colspan=2>3</td>
										<td colspan="2">
											<select class="form-control affinity_point" name="data[empathy]" disabled>
												
												<option affinity_val=3 <?php echo $agnt_feedback['empathy']=='Yes'?"selected":""; ?> value="Yes">Yes</option>
												<option affinity_val=3 <?php echo $agnt_feedback['empathy']=='No'?"selected":""; ?> value="No">No</option>
												<option affinity_val=0 <?php echo $agnt_feedback['empathy']=='NA'?"selected":""; ?> value="NA">NA</option>
											</select>
										</td>
									</tr>

									<tr>
										
										<td colspan=4>Serving with Empathy - Positive Tone</td>
										<td colspan=2>4</td>
										<td colspan="2">
											<select class="form-control affinity_point" name="data[positive_tone]" disabled>
												
												<option affinity_val=4 <?php echo $agnt_feedback['positive_tone']=='Yes'?"selected":""; ?> value="Yes">Yes</option>
												<option affinity_val=4 <?php echo $agnt_feedback['positive_tone']=='No'?"selected":""; ?> value="No">No</option>
												<option affinity_val=0 <?php echo $agnt_feedback['positive_tone']=='NA'?"selected":""; ?> value="NA">NA</option>
											</select>
										</td>
									</tr>
									<tr>
										
										<td colspan=4>Serving with Empathy - Positive Language/Speaking Human</td>
										<td colspan=2>4</td>
										<td colspan="2">
											<select class="form-control affinity_point" name="data[positive_language/]" disabled>
												
												<option affinity_val=4 <?php echo $agnt_feedback['positive_language/']=='Yes'?"selected":""; ?> value="Yes">Yes</option>
												<option affinity_val=4 <?php echo $agnt_feedback['positive_language/']=='No'?"selected":""; ?> value="No">No</option>
												<option affinity_val=0 <?php echo $agnt_feedback['positive_language/']=='NA'?"selected":""; ?> value="NA">NA</option>
											</select>
										</td>
									</tr>

									<tr>
										
										<td colspan=4>Address Caller by Name</td>
										<td colspan=2>3</td>
										<td colspan="2">
											<select class="form-control affinity_point" name="data[address_caller_by_name]" disabled>
												
												<option affinity_val=3 <?php echo $agnt_feedback['address_caller_by_name']=='Yes'?"selected":""; ?> value="Yes">Yes</option>
												<option affinity_val=3 <?php echo $agnt_feedback['address_caller_by_name']=='No'?"selected":""; ?> value="No">No</option>
												<option affinity_val=0 <?php echo $agnt_feedback['address_caller_by_name']=='NA'?"selected":""; ?> value="NA">NA</option>
											</select>
										</td>
									</tr>
									
									<tr>
										<td rowspan=4 style="background-color:#A9CCE3; font-weight:bold">Documentation</td>
										<td colspan=4>Was the Call Documented - Category/Subcategory</td>
										<td colspan=2>10</td>
										<td colspan="2">
											<select class="form-control affinity_point" name="data[subcategory]" disabled>
												
												<option affinity_val=10 <?php echo $agnt_feedback['subcategory']=='Yes'?"selected":""; ?> value="Yes">Yes</option>
												<option affinity_val=10 <?php echo $agnt_feedback['subcategory']=='No'?"selected":""; ?> value="No">No</option>
												<option affinity_val=0 <?php echo $agnt_feedback['subcategory']=='NA'?"selected":""; ?> value="NA">NA</option>
											</select>
										</td>
									</tr>
									<tr>
										
										<td colspan=4>Was the Call Documented - Referral Second Case</td>
										<td colspan=2>5</td>
										<td colspan="2">
											<select class="form-control affinity_point" name="data[referral_second_case]" disabled>
												
												<option affinity_val=5 <?php echo $agnt_feedback['referral_second_case']=='Yes'?"selected":""; ?> value="Yes">Yes</option>
												<option affinity_val=5 <?php echo $agnt_feedback['referral_second_case']=='No'?"selected":""; ?> value="No">No</option>
												<option affinity_val=0 <?php echo $agnt_feedback['referral_second_case']=='NA'?"selected":""; ?> value="NA">NA</option>
											</select>
										</td>
									</tr>
									<tr>
										
										<td colspan=4>Documentation-Comments</td>
										<td colspan=2>5</td>
										<td colspan="2">
											<select class="form-control affinity_point" name="data[documentation_comments]" disabled>
												
                                               <option affinity_val=5 <?php echo $agnt_feedback['documentation_comments']=='Yes'?"selected":""; ?> value="Yes">Yes</option>
												<option affinity_val=5 <?php echo $agnt_feedback['documentation_comments']=='No'?"selected":""; ?> value="No">No</option>
												<option affinity_val=0 <?php echo $agnt_feedback['documentation_comments']=='NA'?"selected":""; ?> value="NA">NA</option>
											</select>
										</td>
									</tr>
									<tr>
										
										<td colspan=4>Entities Linked/Documented</td>
										<td colspan=2>5</td>
										<td colspan="2">
											<select class="form-control affinity_point" name="data[documented]" disabled>
												
                                                <option affinity_val=5 <?php echo $agnt_feedback['documented']=='Yes'?"selected":""; ?> value="Yes">Yes</option>
												<option affinity_val=5 <?php echo $agnt_feedback['documented']=='No'?"selected":""; ?> value="No">No</option>
												<option affinity_val=0 <?php echo $agnt_feedback['documented']=='NA'?"selected":""; ?> value="NA">NA</option>
											</select>
										</td>
									</tr>

									<tr>
										<td rowspan=4 style="background-color:#A9CCE3; font-weight:bold">Hold/Transfer Policy </td>
										<td colspan=4>Hold Policy</td>
										<td colspan=2>8</td>
										<td colspan="2">
											<select class="form-control affinity_point" name="data[hold_policy]" disabled>
												
												<option affinity_val=8 <?php echo $agnt_feedback['hold_policy']=='Yes'?"selected":""; ?> value="Yes">Yes</option>
												<option affinity_val=8 <?php echo $agnt_feedback['hold_policy']=='No'?"selected":""; ?> value="No">No</option>
												<option affinity_val=0 <?php echo $agnt_feedback['hold_policy']=='NA'?"selected":""; ?> value="NA">NA</option>
											</select>
										</td>
									</tr>

									<tr>
										
										<td colspan=4>Dead Air</td>
										<td colspan=2>8</td>
										<td colspan="2">
											<select class="form-control affinity_point" name="data[dead_air]" disabled>
												
												<option affinity_val=8 <?php echo $agnt_feedback['dead_air']=='Yes'?"selected":""; ?> value="Yes">Yes</option>
												<option affinity_val=8 <?php echo $agnt_feedback['dead_air']=='No'?"selected":""; ?> value="No">No</option>
												<option affinity_val=0 <?php echo $agnt_feedback['dead_air']=='NA'?"selected":""; ?> value="NA">NA</option>
											</select>
										</td>
									</tr>

									<tr>
										
										<td colspan=4>Hold Verbiage</td>
										<td colspan=2>2</td>
										<td colspan="2">
											<select class="form-control affinity_point"  name="data[hold_verbiage]" disabled>
												
												<option affinity_val=2 <?php echo $agnt_feedback['hold_verbiage']=='Yes'?"selected":""; ?> value="Yes">Yes</option>
												<option affinity_val=2 <?php echo $agnt_feedback['hold_verbiage']=='No'?"selected":""; ?> value="No">No</option>
												<option affinity_val=0 <?php echo $agnt_feedback['hold_verbiage']=='NA'?"selected":""; ?> value="NA">NA</option>
											</select>
										</td>
									</tr>

									<tr>
										
										<td colspan=4 >Appropriate Transfer</td>
										<td colspan=2>7</td>
										<td colspan="2">
											<select class="form-control affinity_point" name="data[appropriate_transfer]" disabled>
												
												<option affinity_val=7 <?php echo $agnt_feedback['appropriate_transfer']=='Yes'?"selected":""; ?> value="Yes">Yes</option>
												<option affinity_val=7 <?php echo $agnt_feedback['appropriate_transfer']=='No'?"selected":""; ?> value="No">No</option>
												<option affinity_val=0 <?php echo $agnt_feedback['appropriate_transfer']=='NA'?"selected":""; ?> value="NA">NA</option>
											</select>
										</td>
									</tr>
									
									<tr>
										<td rowspan=4 style="background-color:#A9CCE3; font-weight:bold">Policies & Procedures </td>
										<td colspan=4>Accessed Appropriate Systems</td>
										<td colspan=2>4</td>
										<td colspan="2">
											<select class="form-control affinity_point" name="data[accessed_appropriate_systems]" disabled>
												
												<option affinity_val=4 <?php echo $agnt_feedback['accessed_appropriate_systems']=='Yes'?"selected":""; ?> value="Yes">Yes</option>
												<option affinity_val=4 <?php echo $agnt_feedback['accessed_appropriate_systems']=='No'?"selected":""; ?> value="No">No</option>
												<option affinity_val=0 <?php echo $agnt_feedback['accessed_appropriate_systems']=='NA'?"selected":""; ?> value="NA">NA</option>
											</select>
										</td>
									</tr>

									<tr>
										
										<td colspan=4>Misc. Policies & Procedures</td>
										<td colspan=2>2</td>
										<td colspan="2">
											<select class="form-control affinity_point" name="data[policies_procedures]" disabled>
												
												<option affinity_val=2 <?php echo $agnt_feedback['policies_procedures']=='Yes'?"selected":""; ?> value="Yes">Yes</option>
												<option affinity_val=2 <?php echo $agnt_feedback['policies_procedures']=='No'?"selected":""; ?> value="No">No</option>
												<option affinity_val=0 <?php echo $agnt_feedback['policies_procedures']=='NA'?"selected":""; ?> value="NA">NA</option>
											</select>
										</td>
									</tr>

									<tr>
										
										<td colspan=4>Timeframes</td>
										<td colspan=2>2</td>
										<td colspan="2">
											<select class="form-control affinity_point"  name="data[timeframes]" disabled>
												
												<option affinity_val=2 <?php echo $agnt_feedback['timeframes']=='Yes'?"selected":""; ?> value="Yes">Yes</option>
												<option affinity_val=2 <?php echo $agnt_feedback['timeframes']=='No'?"selected":""; ?> value="No">No</option>
												<option affinity_val=0 <?php echo $agnt_feedback['timeframes']=='NA'?"selected":""; ?> value="NA">NA</option>
											</select>
										</td>
									</tr>

									<tr>
										
										<td colspan=4 >Offers Internal/External Telephone</td>
										<td colspan=2>2</td>
										<td colspan="2">
											<select class="form-control affinity_point"  name="data[external_telephone]" disabled>
												
												<option affinity_val=2 <?php echo $agnt_feedback['external_telephone']=='Yes'?"selected":""; ?> value="Yes">Yes</option>
												<option affinity_val=2 <?php echo $agnt_feedback['external_telephone']=='No'?"selected":""; ?> value="No">No</option>
												<option affinity_val=0 <?php echo $agnt_feedback['external_telephone']=='NA'?"selected":""; ?> value="NA">NA</option>
											</select>
										</td>
									</tr>

									<tr>
										<td rowspan=3 style="background-color:#A9CCE3; font-weight:bold">Calls Closing </td>
										<td colspan=4>Offer Additional Assistance</td>
										<td colspan=2>3</td>
										<td colspan="2">
											<select class="form-control affinity_point" name="data[offer_additional_assistance]" disabled>
												
												<option affinity_val=3 <?php echo $agnt_feedback['offer_additional_assistance']=='Yes'?"selected":""; ?> value="Yes">Yes</option>
												<option affinity_val=3 <?php echo $agnt_feedback['offer_additional_assistance']=='No'?"selected":""; ?> value="No">No</option>
												<option affinity_val=0 <?php echo $agnt_feedback['offer_additional_assistance']=='NA'?"selected":""; ?> value="NA">NA</option>
											</select>
										</td>
									</tr>

									<tr>
										
										<td colspan=4>Offer Survey Appropriately</td>
										<td colspan=2>10</td>
										<td colspan="2">
											<select class="form-control affinity_point" name="data[offer_survey_appropriately]" disabled>
												
												<option affinity_val=10 <?php echo $agnt_feedback['offer_survey_appropriately']=='Yes'?"selected":""; ?> value="Yes">Yes</option>
												<option affinity_val=10 <?php echo $agnt_feedback['offer_survey_appropriately']=='No'?"selected":""; ?> value="No">No</option>
												<option affinity_val=0 <?php echo $agnt_feedback['offer_survey_appropriately']=='NA'?"selected":""; ?> value="NA">NA</option>
											</select>
										</td>
									</tr>

									<tr>
										
										<td colspan=4>Thanks Member for Calling Branded Entity</td>
										<td colspan=2>2</td>
										<td colspan="2">
											<select class="form-control affinity_point" id="" name="data[calling_branded_entity]" disabled>
												
												<option affinity_val=2 <?php echo $agnt_feedback['calling_branded_entity']=='Yes'?"selected":""; ?> value="Yes">Yes</option>
												<option affinity_val=2 <?php echo $agnt_feedback['calling_branded_entity']=='No'?"selected":""; ?> value="No">No</option>
												<option affinity_val=0 <?php echo $agnt_feedback['calling_branded_entity']=='NA'?"selected":""; ?> value="NA">NA</option>
											</select>
										</td>
									</tr>

									<tr>
										<td rowspan=1 style="background-color:#A9CCE3; font-weight:bold">Information Accuracy </td>
										<td colspan=4>Information Accuracy</td>
										<td colspan=2>200</td>
										<td colspan="2">
											<select class="form-control affinity_point" id="all_fatal1" name="data[information_accuracy]" disabled>
												
												<option affinity_val=200 <?php echo $agnt_feedback['information_accuracy']=='Yes'?"selected":""; ?> value="Yes">Yes</option>
												<option affinity_val=200 <?php echo $agnt_feedback['information_accuracy']=='No'?"selected":""; ?> value="No">No</option>
												<option affinity_val=0 <?php echo $agnt_feedback['information_accuracy']=='NA'?"selected":""; ?> value="NA">NA</option>
											</select>
										</td>
									</tr>

									<tr>
										<td rowspan=3 style="background-color:#A9CCE3; font-weight:bold">Resolution Accountability </td>
										<td colspan=4>Completeness</td>
										<td colspan=2>83.3</td>
										<td colspan="2">
											<select class="form-control affinity_point" id="all_fatal2" name="data[completeness]" disabled>
												
												<option affinity_val=83.3 <?php echo $agnt_feedback['completeness']=='Yes'?"selected":""; ?> value="Yes">Yes</option>
												<option affinity_val=83.3 <?php echo $agnt_feedback['completeness']=='No'?"selected":""; ?> value="No">No</option>
												<option affinity_val=0 <?php echo $agnt_feedback['completeness']=='NA'?"selected":""; ?> value="NA">NA</option>
											</select>
										</td>
									</tr>

									<tr>
										
										<td colspan=4>Actions</td>
										<td colspan=2>66.64</td>
										<td colspan="2">
											<select class="form-control affinity_point" id="all_fatal3" name="data[actions]" disabled>
												
												<option affinity_val=66.64 <?php echo $agnt_feedback['actions']=='Yes'?"selected":""; ?> value="Yes">Yes</option>
												<option affinity_val=66.64 <?php echo $agnt_feedback['actions']=='No'?"selected":""; ?> value="No">No</option>
												<option affinity_val=0 <?php echo $agnt_feedback['actions']=='NA'?"selected":""; ?> value="NA">NA</option>
											</select>
										</td>
									</tr>
									<tr>
										
										<td colspan=4>Validate for Understanding</td>
										<td colspan=2>16.66</td>
										<td colspan="2">
											<select class="form-control affinity_point" id="all_fatal4" name="data[validate_for_understanding]" disabled>
												
												<option affinity_val=16.66 <?php echo $agnt_feedback['validate_for_understanding']=='Yes'?"selected":""; ?> value="Yes">Yes</option>
												<option affinity_val=16.66 <?php echo $agnt_feedback['validate_for_understanding']=='No'?"selected":""; ?> value="No">No</option>
												<option affinity_val=0 <?php echo $agnt_feedback['validate_for_understanding']=='NA'?"selected":""; ?> value="NA">NA</option>
											</select>
										</td>
									</tr>
									<tr>
										<td rowspan=1 style="background-color:#A9CCE3; font-weight:bold"> Privacy Compliance </td>
										<td colspan=4>Privacy Compliance</td>
										<td colspan=2>200</td>
										<td colspan="2">
											<select class="form-control affinity_point" id="all_fatal5" name="data[privacy_compliance]" disabled>
												
												<option affinity_val=200 <?php echo $agnt_feedback['privacy_compliance']=='Yes'?"selected":""; ?> value="Yes">Yes</option>
												<option affinity_val=200 <?php echo $agnt_feedback['privacy_compliance']=='No'?"selected":""; ?> value="No">No</option>
												<option affinity_val=0 <?php echo $agnt_feedback['privacy_compliance']=='NA'?"selected":""; ?> value="NA">NA</option>
											</select>
										</td>
									</tr>
                              <tr>
                                 <td >Call Summary:</td>
                                 <td colspan="3"><textarea class="form-control" id="" name="data[call_summary]" disabled><?php echo $agnt_feedback['call_summary'] ?></textarea></td>
                                 <td>Feedback:</td>
                                 <td colspan="4"><textarea class="form-control" id="" name="data[feedback]" disabled><?php echo $agnt_feedback['feedback'] ?></textarea></td>
                              </tr>


                               <?php } else if($campaign=='lockheed'){ ?>
									<tr style="background-color:#A9CCE3; font-weight:bold">
										<td >Criticality</td>
										<td colspan=4>Proposed Paramerers</td>
										<td colspan="4">Maximum</td>
										
									</tr>
									<tr>
										<td rowspan=4 style="background-color:#A9CCE3; font-weight:bold">Welcome Note/ Call opening process</td>
										<td colspan=3>Opening Script</td>
										<td>3</td>
										<td colspan="4">
											<select class="form-control amd_point" name="data[Opening_Script]" required>
												
												<option amd_val=3 <?php echo $agnt_feedback['Opening_Script']=='Yes'?"selected":""; ?> value="Yes">Yes</option>
												<option amd_val=3 <?php echo $agnt_feedback['Opening_Script']=='No'?"selected":""; ?> value="No">No</option>
												<option amd_val=3 <?php echo $agnt_feedback['Opening_Script']=='N/A'?"selected":""; ?> value="N/A">N/A</option>
											</select>
										</td>
									</tr>
									<tr>
										
										<td colspan=3>Did CSR demonstrate a good tone of voice throughout the call?</td>
										<td>3</td>
										<td colspan="4">
											<select class="form-control amd_point customer" name="data[throughout]" required>
												
												<option amd_val=3 <?php echo $agnt_feedback['throughout']=='Yes'?"selected":""; ?> value="Yes">Yes</option>
												<option amd_val=3 <?php echo $agnt_feedback['throughout']=='No'?"selected":""; ?> value="No">No</option>
												<option amd_val=3 <?php echo $agnt_feedback['throughout']=='N/A'?"selected":""; ?> value="N/A">N/A</option>
											</select>
										</td>
									</tr>
									<tr>
										
										<td colspan=3>Did CSR properly verify account & make appropriate updates if necessary?</td>
										<td>3</td>
										<td colspan="4">
											<select class="form-control amd_point business" name="data[necessary]" required>
												
                                                <option amd_val=3 <?php echo $agnt_feedback['necessary']=='Yes'?"selected":""; ?> value="Yes">Yes</option>
												<option amd_val=3 <?php echo $agnt_feedback['necessary']=='No'?"selected":""; ?> value="No">No</option>
												<option amd_val=3 <?php echo $agnt_feedback['necessary']=='N/A'?"selected":""; ?> value="N/A">N/A</option>

											</select>
										</td>
									</tr>

									<tr>
										
										<td colspan=3>Did CSR deliver assurance statement after purpose?</td>
										<td>2</td>
										<td colspan="4">
											<select class="form-control amd_point customer" name="data[purpose]" required>
												
												<option amd_val=2 <?php echo $agnt_feedback['purpose']=='Yes'?"selected":""; ?> value="Yes">Yes</option>
												<option amd_val=2 <?php echo $agnt_feedback['purpose']=='No'?"selected":""; ?> value="No">No</option>
												<option amd_val=2 <?php echo $agnt_feedback['purpose']=='N/A'?"selected":""; ?> value="N/A">N/A</option>
											</select>
										</td>
									</tr>

									
									<tr>
										<td rowspan=4 style="background-color:#A9CCE3; font-weight:bold">Follow up/ Skills</td>
										<td colspan=3>Did CSR followed proper follow up process?</td>
										<td>3</td>
										<td colspan="4">
											<select class="form-control amd_point" name="data[process]" required>
												
												<option amd_val=3 <?php echo $agnt_feedback['process']=='Yes'?"selected":""; ?> value="Yes">Yes</option>
												<option amd_val=3 <?php echo $agnt_feedback['process']=='No'?"selected":""; ?> value="No">No</option>
												<option amd_val=3 <?php echo $agnt_feedback['process']=='N/A'?"selected":""; ?> value="N/A">N/A</option>
											</select>
										</td>
									</tr>
									<tr>
										
										<td colspan=3>Did CSR followed follow up script?</td>
										<td>3</td>
										<td colspan="4">
											<select class="form-control amd_point customer" name="data[script]" required>
												
												<option amd_val=3 <?php echo $agnt_feedback['script']=='Yes'?"selected":""; ?> value="Yes">Yes</option>
												<option amd_val=3 <?php echo $agnt_feedback['script']=='No'?"selected":""; ?> value="No">No</option>
												<option amd_val=3 <?php echo $agnt_feedback['script']=='N/A'?"selected":""; ?> value="N/A">N/A</option>
											</select>
										</td>
									</tr>
									<tr>
										
										<td colspan=3>Personable/friendly/ polite?</td>
										<td>2</td>
										<td colspan="4">
											<select class="form-control amd_point customer" name="data[polite]" required>
												
                                               <option amd_val=2 <?php echo $agnt_feedback['polite']=='Yes'?"selected":""; ?> value="Yes">Yes</option>
												<option amd_val=2 <?php echo $agnt_feedback['polite']=='No'?"selected":""; ?> value="No">No</option>
												<option amd_val=2 <?php echo $agnt_feedback['polite']=='N/A'?"selected":""; ?> value="N/A">N/A</option>
											</select>
										</td>
									</tr>
									<tr>
										
										<td colspan=3>Did CSR demonstrate active listening skills?</td>
										<td>2</td>
										<td colspan="4">
											<select class="form-control amd_point customer" name="data[skills]" required>
												
                                                <option amd_val=2 <?php echo $agnt_feedback['skills']=='Yes'?"selected":""; ?> value="Yes">Yes</option>
												<option amd_val=2 <?php echo $agnt_feedback['skills']=='No'?"selected":""; ?> value="No">No</option>
												<option amd_val=2 <?php echo $agnt_feedback['skills']=='N/A'?"selected":""; ?> value="N/A">N/A</option>
											</select>
										</td>
									</tr>

									<tr>
										<td rowspan=7 style="background-color:#A9CCE3; font-weight:bold">Product/ Process / System Knowledge </td>
										<td colspan=3>Proper use of probing questions?</td>
										<td>3</td>
										<td colspan="4">
											<select class="form-control amd_point customer" name="data[questions]" required>
												
												<option amd_val=3 <?php echo $agnt_feedback['questions']=='Yes'?"selected":""; ?> value="Yes">Yes</option>
												<option amd_val=3 <?php echo $agnt_feedback['questions']=='No'?"selected":""; ?> value="No">No</option>
												<option amd_val=3 <?php echo $agnt_feedback['questions']=='N/A'?"selected":""; ?> value="N/A">N/A</option>
											</select>
										</td>
									</tr>

									<tr>
										
										<td colspan=3 style="color: red;">Did CSR validated Close Contacts?</td>
										<td>5</td>
										<td colspan="4">
											<select class="form-control amd_point business"  name="data[Contacts]" required>
												
												<option amd_val=5 <?php echo $agnt_feedback['Contacts']=='Yes'?"selected":""; ?> value="Yes">Yes</option>
												<option amd_val=5 <?php echo $agnt_feedback['Contacts']=='No'?"selected":""; ?> value="No">No</option>
												<option amd_val=5 <?php echo $agnt_feedback['Contacts']=='N/A'?"selected":""; ?> value="N/A">N/A</option>
											</select>
										</td>
									</tr>

									<tr>
										
										<td colspan=3>Did CSR initiated cleaning process?</td>
										<td>3</td>
										<td colspan="4">
											<select class="form-control amd_point business"  name="data[process1]" required>
												
												<option amd_val=3 <?php echo $agnt_feedback['process1']=='Yes'?"selected":""; ?> value="Yes">Yes</option>
												<option amd_val=3 <?php echo $agnt_feedback['process1']=='No'?"selected":""; ?> value="No">No</option>
												<option amd_val=3 <?php echo $agnt_feedback['process1']=='N/A'?"selected":""; ?> value="N/A">N/A</option>
											</select>
										</td>
									</tr>

									<tr>
										
										<td colspan=3 >Did CSR Reviewed Vaccination Record?</td>
										<td>3</td>
										<td colspan="4">
											<select class="form-control amd_point business" name="data[Record]" required>
												
												<option amd_val=3 <?php echo $agnt_feedback['Record']=='Yes'?"selected":""; ?> value="Yes">Yes</option>
												<option amd_val=3 <?php echo $agnt_feedback['Record']=='No'?"selected":""; ?> value="No">No</option>
												<option amd_val=3 <?php echo $agnt_feedback['Record']=='N/A'?"selected":""; ?> value="N/A">N/A</option>
											</select>
										</td>
									</tr>

									<tr>
										
										<td colspan=3 style="color: red;">Did CSR corrected CT Dates?</td>
										<td>5</td>
										<td colspan="4">
											<select class="form-control amd_point business"  name="data[Dates]" required>
												
												<option amd_val=5 <?php echo $agnt_feedback['Dates']=='Yes'?"selected":""; ?> value="Yes">Yes</option>
												<option amd_val=5 <?php echo $agnt_feedback['Dates']=='No'?"selected":""; ?> value="No">No</option>
												<option amd_val=5 <?php echo $agnt_feedback['Dates']=='N/A'?"selected":""; ?> value="N/A">N/A</option>
											</select>
										</td>
									</tr>
									<tr>
										
										<td colspan=3 >Did CSR use all available systems and tools?</td>
										<td>2</td>
										<td colspan="4">
											<select class="form-control amd_point business" name="data[tools]" required>
												
												<option amd_val=2 <?php echo $agnt_feedback['tools']=='Yes'?"selected":""; ?> value="Yes">Yes</option>
												<option amd_val=2 <?php echo $agnt_feedback['tools']=='No'?"selected":""; ?> value="No">No</option>
												<option amd_val=2 <?php echo $agnt_feedback['tools']=='N/A'?"selected":""; ?> value="N/A">N/A</option>
											</select>
										</td>
									</tr>
									<tr>
										
										<td colspan=3 >Did CSR provide complete and accurate information?</td>
										<td>5</td>
										<td colspan="4">
											<select class="form-control amd_point customer" name="data[information]" required>
												
												<option amd_val=5 <?php echo $agnt_feedback['information']=='Yes'?"selected":""; ?> value="Yes">Yes</option>
												<option amd_val=5 <?php echo $agnt_feedback['information']=='No'?"selected":""; ?> value="No">No</option>
												<option amd_val=5 <?php echo $agnt_feedback['information']=='N/A'?"selected":""; ?> value="N/A">N/A</option>
											</select>
										</td>
									</tr>
									
									<tr>
										<td rowspan=3 style="background-color:#A9CCE3; font-weight:bold">Closing Process </td>
										<td colspan=3>Additional Case Mgmt Required?</td>
										<td>2</td>
										<td colspan="4">
											<select class="form-control amd_point business" name="data[Required]" required>
												
												<option amd_val=2 <?php echo $agnt_feedback['Required']=='Yes'?"selected":""; ?> value="Yes">Yes</option>
												<option amd_val=2 <?php echo $agnt_feedback['Required']=='No'?"selected":""; ?> value="No">No</option>
												<option amd_val=2 <?php echo $agnt_feedback['Required']=='N/A'?"selected":""; ?> value="N/A">N/A</option>
											</select>
										</td>
									</tr>

									<tr>
										
										<td colspan=3 style="color: red;">Did CSR used Template for comments</td>
										<td>3</td>
										<td colspan="4">
											<select class="form-control amd_point"  name="data[comments]" required>
												
												<option amd_val=3 <?php echo $agnt_feedback['comments']=='Yes'?"selected":""; ?> value="Yes">Yes</option>
												<option amd_val=3 <?php echo $agnt_feedback['comments']=='No'?"selected":""; ?> value="No">No</option>
												<option amd_val=3 <?php echo $agnt_feedback['comments']=='N/A'?"selected":""; ?> value="N/A">N/A</option>
											</select>
										</td>
									</tr>

									<tr>
										
										<td colspan=3 style="color: red;">Did CSR Marked CT Complete?</td>
										<td>5</td>
										<td colspan="4">
											<select class="form-control amd_point"  name="data[Complete]" required>
												
												<option amd_val=5 <?php echo $agnt_feedback['Complete']=='Yes'?"selected":""; ?> value="Yes">Yes</option>
												<option amd_val=5 <?php echo $agnt_feedback['Complete']=='No'?"selected":""; ?> value="No">No</option>
												<option amd_val=5 <?php echo $agnt_feedback['Complete']=='N/A'?"selected":""; ?> value="N/A">N/A</option>
											</select>
										</td>
									</tr>
                              <tr>
                                 <td >Call Summary:</td>
                                 <td colspan="3"><textarea class="form-control" id="" name="data[call_summary]" disabled><?php echo $agnt_feedback['call_summary'] ?></textarea></td>
                                 <td>Feedback:</td>
                                 <td colspan="4"><textarea class="form-control" id="" name="data[feedback]" disabled><?php echo $agnt_feedback['feedback'] ?></textarea></td>
                              </tr>


                          <?php } else if($campaign=='cci_commercial'){ ?>
									<tr style="background-color:#A9CCE3; font-weight:bold">
										<td >Criticality</td>
										<td colspan=4>Proposed Paramerers</td>
										<td colspan="2">Maximum</td>
										<td colspan="2">Status</td>
									</tr>
									<tr>
										<td rowspan=7  style="background-color:#A9CCE3; font-weight:bold">Soft Skills</td>
										<td colspan=4>Call Opening</td>
										<td colspan=2>3</td>
										<td colspan="2">
											<select class="form-control affinity_point" name="data[call_opening]" disabled>
												
												<option affinity_val=3 <?php echo $agnt_feedback['call_opening']=='Yes'?"selected":""; ?> value="Yes">Yes</option>
												<option affinity_val=3 <?php echo $agnt_feedback['call_opening']=='No'?"selected":""; ?> value="No">No</option>
												<option affinity_val=0 <?php echo $agnt_feedback['call_opening']=='NA'?"selected":""; ?> value="NA">NA</option>
											</select>
										</td>
									</tr>
									<tr>
										
										<td colspan=4>Prepared for Call</td>
										<td colspan=2>3</td>
										<td colspan="2">
											<select class="form-control affinity_point" name="data[prepared_for_cal]" disabled>
												
												<option affinity_val=3 <?php echo $agnt_feedback['prepared_for_cal']=='Yes'?"selected":""; ?> value="Yes">Yes</option>
												<option affinity_val=3 <?php echo $agnt_feedback['prepared_for_cal']=='No'?"selected":""; ?> value="No">No</option>
												<option affinity_val=0 <?php echo $agnt_feedback['prepared_for_cal']=='NA'?"selected":""; ?> value="NA">NA</option>
											</select>
										</td>
									</tr>
									<tr>
										
										<td colspan=4>Serving with Empathy - Active Listening</td>
										<td colspan=2>5</td>
										<td colspan="2">
											<select class="form-control affinity_point" name="data[active_listening]" disabled>
												
                                                <option affinity_val=5 <?php echo $agnt_feedback['active_listening']=='Yes'?"selected":""; ?> value="Yes">Yes</option>
												<option affinity_val=5 <?php echo $agnt_feedback['active_listening']=='No'?"selected":""; ?> value="No">No</option>
												<option affinity_val=0 <?php echo $agnt_feedback['active_listening']=='NA'?"selected":""; ?> value="NA">NA</option>

											</select>
										</td>
									</tr>

									<tr>
										
										<td colspan=4>Serving with Empathy - Empathy</td>
										<td colspan=2>3</td>
										<td colspan="2">
											<select class="form-control affinity_point" name="data[empathy]" disabled>
												
												<option affinity_val=3 <?php echo $agnt_feedback['empathy']=='Yes'?"selected":""; ?> value="Yes">Yes</option>
												<option affinity_val=3 <?php echo $agnt_feedback['empathy']=='No'?"selected":""; ?> value="No">No</option>
												<option affinity_val=0 <?php echo $agnt_feedback['empathy']=='NA'?"selected":""; ?> value="NA">NA</option>
											</select>
										</td>
									</tr>

									<tr>
										
										<td colspan=4>Serving with Empathy - Positive Tone</td>
										<td colspan=2>4</td>
										<td colspan="2">
											<select class="form-control affinity_point" name="data[positive_tone]" disabled>
												
												<option affinity_val=4 <?php echo $agnt_feedback['positive_tone']=='Yes'?"selected":""; ?> value="Yes">Yes</option>
												<option affinity_val=4 <?php echo $agnt_feedback['positive_tone']=='No'?"selected":""; ?> value="No">No</option>
												<option affinity_val=0 <?php echo $agnt_feedback['positive_tone']=='NA'?"selected":""; ?> value="NA">NA</option>
											</select>
										</td>
									</tr>
									<tr>
										
										<td colspan=4>Serving with Empathy - Positive Language/Speaking Human</td>
										<td colspan=2>4</td>
										<td colspan="2">
											<select class="form-control affinity_point" name="data[positive_language/]" disabled>
												
												<option affinity_val=4 <?php echo $agnt_feedback['positive_language/']=='Yes'?"selected":""; ?> value="Yes">Yes</option>
												<option affinity_val=4 <?php echo $agnt_feedback['positive_language/']=='No'?"selected":""; ?> value="No">No</option>
												<option affinity_val=0 <?php echo $agnt_feedback['positive_language/']=='NA'?"selected":""; ?> value="NA">NA</option>
											</select>
										</td>
									</tr>

									<tr>
										
										<td colspan=4>Address Caller by Name</td>
										<td colspan=2>3</td>
										<td colspan="2">
											<select class="form-control affinity_point" name="data[address_caller_by_name]" disabled>
												
												<option affinity_val=3 <?php echo $agnt_feedback['address_caller_by_name']=='Yes'?"selected":""; ?> value="Yes">Yes</option>
												<option affinity_val=3 <?php echo $agnt_feedback['address_caller_by_name']=='No'?"selected":""; ?> value="No">No</option>
												<option affinity_val=0 <?php echo $agnt_feedback['address_caller_by_name']=='NA'?"selected":""; ?> value="NA">NA</option>
											</select>
										</td>
									</tr>
									
									<tr>
										<td rowspan=4 style="background-color:#A9CCE3; font-weight:bold">Documentation</td>
										<td colspan=4>Was the Call Documented - Category/Subcategory</td>
										<td colspan=2>10</td>
										<td colspan="2">
											<select class="form-control affinity_point" name="data[subcategory]" disabled>
												
												<option affinity_val=10 <?php echo $agnt_feedback['subcategory']=='Yes'?"selected":""; ?> value="Yes">Yes</option>
												<option affinity_val=10 <?php echo $agnt_feedback['subcategory']=='No'?"selected":""; ?> value="No">No</option>
												<option affinity_val=0 <?php echo $agnt_feedback['subcategory']=='NA'?"selected":""; ?> value="NA">NA</option>
											</select>
										</td>
									</tr>
									<tr>
										
										<td colspan=4>Was the Call Documented - Creating of second case</td>
										<td colspan=2>5</td>
										<td colspan="2">
											<select class="form-control affinity_point" name="data[referral_second_case]" disabled>
												
												<option affinity_val=5 <?php echo $agnt_feedback['referral_second_case']=='Yes'?"selected":""; ?> value="Yes">Yes</option>
												<option affinity_val=5 <?php echo $agnt_feedback['referral_second_case']=='No'?"selected":""; ?> value="No">No</option>
												<option affinity_val=0 <?php echo $agnt_feedback['referral_second_case']=='NA'?"selected":""; ?> value="NA">NA</option>
											</select>
										</td>
									</tr>
									<tr>
										
										<td colspan=4>Documentation-Comments</td>
										<td colspan=2>5</td>
										<td colspan="2">
											<select class="form-control affinity_point" name="data[documentation_comments]" disabled>
												
                                               <option affinity_val=5 <?php echo $agnt_feedback['documentation_comments']=='Yes'?"selected":""; ?> value="Yes">Yes</option>
												<option affinity_val=5 <?php echo $agnt_feedback['documentation_comments']=='No'?"selected":""; ?> value="No">No</option>
												<option affinity_val=0 <?php echo $agnt_feedback['documentation_comments']=='NA'?"selected":""; ?> value="NA">NA</option>
											</select>
										</td>
									</tr>
									<tr>
										
										<td colspan=4>Entities Linked/Documented</td>
										<td colspan=2>5</td>
										<td colspan="2">
											<select class="form-control affinity_point" name="data[documented]" disabled>
												
                                                <option affinity_val=5 <?php echo $agnt_feedback['documented']=='Yes'?"selected":""; ?> value="Yes">Yes</option>
												<option affinity_val=5 <?php echo $agnt_feedback['documented']=='No'?"selected":""; ?> value="No">No</option>
												<option affinity_val=0 <?php echo $agnt_feedback['documented']=='NA'?"selected":""; ?> value="NA">NA</option>
											</select>
										</td>
									</tr>

									<tr>
										<td rowspan=4 style="background-color:#A9CCE3; font-weight:bold">Hold/Transfer Policy </td>
										<td colspan=4>Hold Policy</td>
										<td colspan=2>8</td>
										<td colspan="2">
											<select class="form-control affinity_point" name="data[hold_policy]" disabled>
												
												<option affinity_val=8 <?php echo $agnt_feedback['hold_policy']=='Yes'?"selected":""; ?> value="Yes">Yes</option>
												<option affinity_val=8 <?php echo $agnt_feedback['hold_policy']=='No'?"selected":""; ?> value="No">No</option>
												<option affinity_val=0 <?php echo $agnt_feedback['hold_policy']=='NA'?"selected":""; ?> value="NA">NA</option>
											</select>
										</td>
									</tr>

									<tr>
										
										<td colspan=4>Dead Air</td>
										<td colspan=2>8</td>
										<td colspan="2">
											<select class="form-control affinity_point" name="data[dead_air]" disabled>
												
												<option affinity_val=8 <?php echo $agnt_feedback['dead_air']=='Yes'?"selected":""; ?> value="Yes">Yes</option>
												<option affinity_val=8 <?php echo $agnt_feedback['dead_air']=='No'?"selected":""; ?> value="No">No</option>
												<option affinity_val=0 <?php echo $agnt_feedback['dead_air']=='NA'?"selected":""; ?> value="NA">NA</option>
											</select>
										</td>
									</tr>

									<tr>
										
										<td colspan=4>Hold Verbiage</td>
										<td colspan=2>2</td>
										<td colspan="2">
											<select class="form-control affinity_point"  name="data[hold_verbiage]" disabled>
												
												<option affinity_val=2 <?php echo $agnt_feedback['hold_verbiage']=='Yes'?"selected":""; ?> value="Yes">Yes</option>
												<option affinity_val=2 <?php echo $agnt_feedback['hold_verbiage']=='No'?"selected":""; ?> value="No">No</option>
												<option affinity_val=0 <?php echo $agnt_feedback['hold_verbiage']=='NA'?"selected":""; ?> value="NA">NA</option>
											</select>
										</td>
									</tr>

									<tr>
										
										<td colspan=4 >Appropriate Transfer</td>
										<td colspan=2>7</td>
										<td colspan="2">
											<select class="form-control affinity_point" name="data[appropriate_transfer]" disabled>
												
												<option affinity_val=7 <?php echo $agnt_feedback['appropriate_transfer']=='Yes'?"selected":""; ?> value="Yes">Yes</option>
												<option affinity_val=7 <?php echo $agnt_feedback['appropriate_transfer']=='No'?"selected":""; ?> value="No">No</option>
												<option affinity_val=0 <?php echo $agnt_feedback['appropriate_transfer']=='NA'?"selected":""; ?> value="NA">NA</option>
											</select>
										</td>
									</tr>
									
									<tr>
										<td rowspan=4 style="background-color:#A9CCE3; font-weight:bold">Policies & Procedures </td>
										<td colspan=4>Accessed Appropriate Systems</td>
										<td colspan=2>4</td>
										<td colspan="2">
											<select class="form-control affinity_point" name="data[accessed_appropriate_systems]" disabled>
												
												<option affinity_val=4 <?php echo $agnt_feedback['accessed_appropriate_systems']=='Yes'?"selected":""; ?> value="Yes">Yes</option>
												<option affinity_val=4 <?php echo $agnt_feedback['accessed_appropriate_systems']=='No'?"selected":""; ?> value="No">No</option>
												<option affinity_val=0 <?php echo $agnt_feedback['accessed_appropriate_systems']=='NA'?"selected":""; ?> value="NA">NA</option>
											</select>
										</td>
									</tr>

									<tr>
										
										<td colspan=4>Misc. Policies & Procedures</td>
										<td colspan=2>2</td>
										<td colspan="2">
											<select class="form-control affinity_point" name="data[policies_procedures]" disabled>
												
												<option affinity_val=2 <?php echo $agnt_feedback['policies_procedures']=='Yes'?"selected":""; ?> value="Yes">Yes</option>
												<option affinity_val=2 <?php echo $agnt_feedback['policies_procedures']=='No'?"selected":""; ?> value="No">No</option>
												<option affinity_val=0 <?php echo $agnt_feedback['policies_procedures']=='NA'?"selected":""; ?> value="NA">NA</option>
											</select>
										</td>
									</tr>

									<tr>
										
										<td colspan=4>Timeframes</td>
										<td colspan=2>2</td>
										<td colspan="2">
											<select class="form-control affinity_point"  name="data[timeframes]" disabled>
												
												<option affinity_val=2 <?php echo $agnt_feedback['timeframes']=='Yes'?"selected":""; ?> value="Yes">Yes</option>
												<option affinity_val=2 <?php echo $agnt_feedback['timeframes']=='No'?"selected":""; ?> value="No">No</option>
												<option affinity_val=0 <?php echo $agnt_feedback['timeframes']=='NA'?"selected":""; ?> value="NA">NA</option>
											</select>
										</td>
									</tr>

									<tr>
										
										<td colspan=4 >Offers Internal/External Telephone</td>
										<td colspan=2>2</td>
										<td colspan="2">
											<select class="form-control affinity_point"  name="data[external_telephone]" disabled>
												
												<option affinity_val=2 <?php echo $agnt_feedback['external_telephone']=='Yes'?"selected":""; ?> value="Yes">Yes</option>
												<option affinity_val=2 <?php echo $agnt_feedback['external_telephone']=='No'?"selected":""; ?> value="No">No</option>
												<option affinity_val=0 <?php echo $agnt_feedback['external_telephone']=='NA'?"selected":""; ?> value="NA">NA</option>
											</select>
										</td>
									</tr>

									<tr>
										<td rowspan=3 style="background-color:#A9CCE3; font-weight:bold">Calls Closing </td>
										<td colspan=4>Offer Additional Assistance</td>
										<td colspan=2>3</td>
										<td colspan="2">
											<select class="form-control affinity_point" name="data[offer_additional_assistance]" disabled>
												
												<option affinity_val=3 <?php echo $agnt_feedback['offer_additional_assistance']=='Yes'?"selected":""; ?> value="Yes">Yes</option>
												<option affinity_val=3 <?php echo $agnt_feedback['offer_additional_assistance']=='No'?"selected":""; ?> value="No">No</option>
												<option affinity_val=0 <?php echo $agnt_feedback['offer_additional_assistance']=='NA'?"selected":""; ?> value="NA">NA</option>
											</select>
										</td>
									</tr>

									<tr>
										
										<td colspan=4>Offer Survey Appropriately</td>
										<td colspan=2>10</td>
										<td colspan="2">
											<select class="form-control affinity_point" name="data[offer_survey_appropriately]" disabled>
												
												<option affinity_val=10 <?php echo $agnt_feedback['offer_survey_appropriately']=='Yes'?"selected":""; ?> value="Yes">Yes</option>
												<option affinity_val=10 <?php echo $agnt_feedback['offer_survey_appropriately']=='No'?"selected":""; ?> value="No">No</option>
												<option affinity_val=0 <?php echo $agnt_feedback['offer_survey_appropriately']=='NA'?"selected":""; ?> value="NA">NA</option>
											</select>
										</td>
									</tr>

									<tr>
										
										<td colspan=4>Thanks Member for Calling Branded Entity</td>
										<td colspan=2>2</td>
										<td colspan="2">
											<select class="form-control affinity_point" id="" name="data[calling_branded_entity]" disabled>
												
												<option affinity_val=2 <?php echo $agnt_feedback['calling_branded_entity']=='Yes'?"selected":""; ?> value="Yes">Yes</option>
												<option affinity_val=2 <?php echo $agnt_feedback['calling_branded_entity']=='No'?"selected":""; ?> value="No">No</option>
												<option affinity_val=0 <?php echo $agnt_feedback['calling_branded_entity']=='NA'?"selected":""; ?> value="NA">NA</option>
											</select>
										</td>
									</tr>

									<tr>
										<td rowspan=1 style="background-color:#A9CCE3; font-weight:bold">Information Accuracy </td>
										<td colspan=4>Information Accuracy</td>
										<td colspan=2>200</td>
										<td colspan="2">
											<select class="form-control affinity_point" id="all_fatal1" name="data[information_accuracy]" disabled="">
												
												<option affinity_val=200 <?php echo $agnt_feedback['information_accuracy']=='Yes'?"selected":""; ?> value="Yes">Yes</option>
												<option affinity_val=200 <?php echo $agnt_feedback['information_accuracy']=='No'?"selected":""; ?> value="No">No</option>
												<!-- <option affinity_val=0 <?php echo $agnt_feedback['information_accuracy']=='NA'?"selected":""; ?> value="NA">NA</option> -->
											</select>
										</td>
									</tr>

									<tr>
										<td rowspan=3 style="background-color:#A9CCE3; font-weight:bold">Resolution Accountability </td>
										<td colspan=4>Completeness</td>
										<td colspan=2>83.3</td>
										<td colspan="2">
											<select class="form-control affinity_point" id="all_fatal2" name="data[completeness]" disabled="">
												
												<option affinity_val=83.3 <?php echo $agnt_feedback['completeness']=='Yes'?"selected":""; ?> value="Yes">Yes</option>
												<option affinity_val=83.3 <?php echo $agnt_feedback['completeness']=='No'?"selected":""; ?> value="No">No</option>
												<!-- <option affinity_val=0 <?php echo $agnt_feedback['completeness']=='NA'?"selected":""; ?> value="NA">NA</option> -->
											</select>
										</td>
									</tr>

									<tr>
										
										<td colspan=4>Actions</td>
										<td colspan=2>66.64</td>
										<td colspan="2">
											<select class="form-control affinity_point" id="all_fatal3" name="data[actions]" disabled="">
												
												<option affinity_val=66.64 <?php echo $agnt_feedback['actions']=='Yes'?"selected":""; ?> value="Yes">Yes</option>
												<option affinity_val=66.64 <?php echo $agnt_feedback['actions']=='No'?"selected":""; ?> value="No">No</option>
												<!-- <option affinity_val=0 <?php echo $agnt_feedback['actions']=='NA'?"selected":""; ?> value="NA">NA</option> -->
											</select>
										</td>
									</tr>
									<tr>
										
										<td colspan=4>Validate for Understanding</td>
										<td colspan=2>16.66</td>
										<td colspan="2">
											<select class="form-control affinity_point" id="all_fatal4" name="data[validate_for_understanding]" disabled="">
												
												<option affinity_val=16.66 <?php echo $agnt_feedback['validate_for_understanding']=='Yes'?"selected":""; ?> value="Yes">Yes</option>
												<option affinity_val=16.66 <?php echo $agnt_feedback['validate_for_understanding']=='No'?"selected":""; ?> value="No">No</option>
												<!-- <option affinity_val=0 <?php echo $agnt_feedback['validate_for_understanding']=='NA'?"selected":""; ?> value="NA">NA</option> -->
											</select>
										</td>
									</tr>
									<tr>
										<td rowspan=1 style="background-color:#A9CCE3; font-weight:bold"> Privacy Compliance </td>
										<td colspan=4>Privacy Compliance</td>
										<td colspan=2>200</td>
										<td colspan="2">
											<select class="form-control affinity_point" id="all_fatal5" name="data[privacy_compliance]" disabled="">
												
												<option affinity_val=200 <?php echo $agnt_feedback['privacy_compliance']=='Yes'?"selected":""; ?> value="Yes">Yes</option>
												<option affinity_val=200 <?php echo $agnt_feedback['privacy_compliance']=='No'?"selected":""; ?> value="No">No</option>
												<!-- <option affinity_val=0 <?php echo $agnt_feedback['privacy_compliance']=='NA'?"selected":""; ?> value="NA">NA</option> -->
											</select>
										</td>
									</tr>
                              <tr>
                                 <td >Call Summary:</td>
                                 <td colspan="3"><textarea class="form-control" id="" name="data[call_summary]" disabled><?php echo $agnt_feedback['call_summary'] ?></textarea></td>
                                 <td>Feedback:</td>
                                 <td colspan="4"><textarea class="form-control" id="" name="data[feedback]" disabled><?php echo $agnt_feedback['feedback'] ?></textarea></td>
                              </tr>



					<?php } ?>
									<!-- Riya End -->

									<tr><td colspan="8" style="background-color:#C5C8C8"></td></tr>

									<tr><td colspan=3 style="font-size:16px; font-weight:bold">Management Review:</td><td colspan=5><?php echo $agnt_feedback['mgnt_rvw_note'] ?></td></tr>
									<tr><td colspan=3 style="font-size:16px; font-weight:bold">Client Review:</td><td colspan=5><?php echo $agnt_feedback['client_rvw_note'] ?></td></tr>

									<tr><td colspan="8" style="background-color:#C5C8C8"></td></tr>

									<form id="form_agent_user" method="POST" action="">
										<input type="hidden" name="pnid" class="form-control" value="<?php echo $pnid; ?>">

										<tr>
											<td colspan=3 style="font-size:16px">Feedback Acceptance</td>
											<td colspan=2>
												<select class="form-control" id="" name="agnt_fd_acpt">
													<option value="">--Select--</option>
													<option <?php if(isset($agnt_feedback['agnt_fd_acpt'])) echo $agnt_feedback['agnt_fd_acpt']=='Acceptance'?"selected":""; ?> value="Acceptance">Acceptance</option>
													<option <?php if(isset($agnt_feedback['agnt_fd_acpt'])) echo $agnt_feedback['agnt_fd_acpt']=='Not Acceptance'?"selected":""; ?> value="Not Acceptance">Not Acceptance</option>
												</select>
											</td>
										</tr>
										<tr>
											<td colspan="3"  style="font-size:16px">Write Your Review Here</td>
											<td colspan="5"><textarea class="form-control" name="note"><?php echo $agnt_feedback['agent_rvw_note'] ?></textarea></td>
										</tr>

										<?php //if(is_access_qa_agent_module()==true){
										if(is_available_qa_feedback($agnt_feedback['entry_date'],72) == true){ ?>
											<tr>
												<?php if(isset($agnt_feedback['agnt_fd_acpt'])==''){ ?>
													<td colspan="8"><button class="btn btn-success waves-effect" type="submit" id='btnagentSave' name='btnSave' value="SAVE" style="width:500px">SAVE</button></td>
												<?php } ?>
											</tr>
										<?php }
										//} ?>

									</form>
								</tr>







								</tbody>
							</table>
						</div>
					</div>
				</div>
			</div>

		</form>
		</div>

	</section>
</div>
