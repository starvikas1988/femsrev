<div class="wrap">
  <section class="app-content">
    <div class="row">
      <div class="col-12">
        <div class="widget">
          <div class="row">
            <div class="col-md-10">
              <header class="widget-header">
                <h4 class="widget-title">Search Feedback</h4>
              </header>
            </div>
            <hr class="widget-separator">
          </div>
          <div class="widget-body">
            <form id="form_audit_user" action="<?php echo base_url('qa_ameridial/pilgrim'); ?>" method="GET">
              <div class="row">
                <div class="col-md-3">
                  <div class="form-group">
                    <label>From Date (mm/dd/yyyy)</label>
                    <input type="text" id="from_date" name="from_date" value="<?php echo mysql2mmddyy($from_date); ?>" class="form-control">
                  </div>
                </div>
                <div class="col-md-3">
									<div class="form-group">
										<label>To Date (mm/dd/yyyy)</label>
										<input type="text" id="to_date" name="to_date" value="<?php echo mysql2mmddyy($to_date); ?>" class="form-control">
									</div>
								</div>
                <div class="col-md-3">
									<div class="form-group">
										<label>Agent</label>
										<select class="form-control" id="" name="agent_id">
											<option value="">-Select-</option>
											<?php foreach($agentName as $row):
												$sCss='';
												if($row['id']==$agent_id) $sCss='Selected';
											?>
												<option value="<?php echo $row['id']; ?>" <?php echo $sCss; ?>><?php echo $row['name']; ?></option>
											<?php endforeach; ?>
										</select>
									</div>
								</div>
              </div>
              <div class="row">
								<div class="col-md-4">
									<div class="form-group">
										<label>File No</label>
										<input type="text" id="" name="file" value="<?php echo $file; ?>" class="form-control">
									</div>
								</div>
                <div class="col-md-1" style="margin-top:20px">
									<button class="btn btn-success waves-effect" a href="<?php echo base_url()?>qa_ameridial/pilgrim" type="submit" id='btnView' name='btnView' value="View">View</button>
								</div>
							</div>
            </form>
          </div>
        </div>
      </div>
    </div>

    <div class="row">
			<div class="col-12">
				<div class="widget">

					<div class="row">
						<div class="col-md-12">
							<header class="widget-header">
								<h4 class="widget-title">
									<div class="pull-left">Ameridial [Pilgrim]</div>
									<?php if(is_access_qa_module()==true){
                    $pilgrim_id=0;?>
										<div class="pull-right"><a class="btn btn-primary" href="<?php echo base_url(); ?>qa_ameridial/add_edit_pilgrim/<?= $pilgrim_id ?>">Add Audit</a></div>
									<?php } ?>
								</h4>
							</header>
						</div>
						<hr class="widget-separator">
					</div>
					<div class="widget-body">
						<div class="table-responsive">
							<table id="default-datatable" data-plugin="DataTable" class="table table-striped skt-table" cellspacing="0" width="100%">
								<thead>
									<tr class="bg-info">
										<th>SL</th>
										<th>Auditor</th>
										<th>Audit Date</th>
										<th>Fusion ID</th>
										<th>Agent Name</th>
										<th>L1 Supervisor</th>
										<th>Call Duration</th>
										<th>Total Score</th>
										<th>Audio</th>
										<th>Agent Review Date</th>
										<th>Mgnt Review By</th>
										<th>Mgnt Review Date</th>
										<th>Action</th>
									</tr>
								</thead>
								<tbody>
									<?php $i=1;
									foreach($pilgrim as $row): ?>
									<tr>
										<td><?= $i++; ?></td>
										<td><?= $row['auditor_name']; ?></td>
										<td><?= $row['audit_date']; ?></td>
										<td><?= $row['fusion_id']; ?></td>
										<td><?= $row['fname']." ".$row['lname']; ?></td>
										<td><?= $row['tl_name']; ?></td>
										<td><?= $row['call_duration']; ?></td>
										<td><?= $row['overall_score']."%"; ?></td>
										<td>
										<?php
											if($row['attach_file']!=''){
											$attach_file = explode(",",$row['attach_file']);
											foreach($attach_file as $mp){
										?>
											<audio controls='' style="width:120px; height:25px; background-color:#607F93">
											  <source src="<?= base_url(); ?>qa_files/qa_ameridial/pilgrim/<?= $mp; ?>" type="audio/ogg">
											  <source src="<?= base_url(); ?>qa_files/qa_ameridial/pilgrim/<?= $mp; ?>" type="audio/mpeg">
											</audio>
										<?php }
											}	?>
										</td>
										<td><?= $row['agent_rvw_date']; ?></td>
										<td><?= $row['mgnt_name']; ?></td>
										<td><?= $row['mgnt_rvw_date']; ?></td>
										<td>
											<?php $fbid=$row['id']; ?>
											<a class="btn btn-success" href="<?php echo base_url(); ?>Qa_ameridial/add_edit_pilgrim/<?= $fbid ?>" title="Click to Review" style="margin-left:5px; font-size:10px;">Edit/Review Feedback</a>
										</td>
									</tr>
									<?php endforeach; ?>
								</tbody>
								<tfoot>
									<tr class="bg-info">
										<th>SL</th>
										<th>Auditor</th>
										<th>Audit Date</th>
										<th>Fusion ID</th>
										<th>Agent Name</th>
										<th>L1 Supervisor</th>
										<th>Call Duration</th>
										<th>Total Score</th>
										<th>Audio</th>
										<th>Agent Review Date</th>
										<th>Mgnt Review By</th>
										<th>Mgnt Review Date</th>
										<th>Action</th>
									</tr>
								</tfoot>
							</table>
						</div>
					</div>
				</div>
			</div>
		</div>
  </section>
</div>
