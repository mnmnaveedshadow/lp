

			<!-- Header -->
			<?php include './layouts/header.php'; ?>
			<!-- Header -->

           <!-- Sidebar -->
			<?php include './layouts/sidebar.php'; ?>
			<!-- /Sidebar -->

			<div class="page-wrapper">
				<div class="content">
					<div class="page-header">
						<div class="page-title">
							<h4>Marked Report</h4>
						</div>
					</div>
					<!-- /add -->


					<div class="card">
						<div class="card-body">
							<div id="del_report_filters">
								<div class="row">
									<!-- date range -->
									<div class="col-3">
										<div class="form-group">
											<label for="">From</label>
											<input type="date" id="date_from" class="form-control" name="" value="">
										</div>
									</div>
									<div class="col-3">
										<div class="form-group">
											<label for="">To</label>
											<input type="date" id="date_to" class="form-control" name="" value="">
										</div>
									</div>
									<!-- date range End -->
									<!-- status -->
									<div class="col-3">
										<div class="form-group">
											<label for="">Select Status</label>
											<select class="form-control" id="order_status" name="">
												<option value="1">Delivered</option>
												<option value="0">Pending</option>
												<option value="2">Returned</option>
											</select>
										</div>
									</div>
									<!-- status End -->
									<div class="col-3">
										<div class="form-group">
											<input type="checkbox" id="all_staff_check" onchange="" name="" value="1" checked>
											<label for="">All Staff</label>
											<button type="button" class="btn btn-warning btn-sm d-inline" onclick="selectStaff()" name="button">Select Staff</button>
										</div>
									</div>
								</div>
								<button type="button" class="btn btn-primary btn-sm" name="button" onclick="filterOrders()">Apply Filter</button>
							</div>
							<!-- filters end -->
							<div id="del_report">

							</div>
						</div>
					</div>
					<!-- /add -->
				</div>
			</div>
        </div>
		<!-- /Main Wrapper -->

		<div class="modal fade" style="" id="staff_id" tabindex="-1" aria-labelledby="mark_orders"  aria-hidden="true">
			<div class="modal-dialog" role="document" >
				<div class="modal-content">
					<button  class="btn btn-primary btn-sm">Select Staffs</button>
					<div class="container">
						
					</div>
				</div>
			</div>
		</div>


    <?php include './layouts/footer.php' ?>
		<script type="text/javascript">


		</script>
    </body>
</html>
