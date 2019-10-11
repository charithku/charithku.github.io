
<div class="row">
	<div class="col-lg-12">
  		<div class="main">
			<section class="panel">
				<header class="panel-heading">
					Update Device Transaction
				</header>
				<div class="panel-body">
					<div class="position-center">
						<form role="form">
						<div class="form-group">
							<label for="serial">ItemCode</label>
							<input type="text" class="form-control" placeholder="Enter Itemcode" name="itemcode">
						</div>
						<div class="form-group">
							<label for="serial_qty">Serial</label>
							<input type="text" class="form-control" placeholder="Enter Serial or Qty(if non-serial)" name="serial_qty" required>
						</div>
						<div class="form-group">
							<label for="itemcode">siteID</label>
							<input type="text" class="form-control" placeholder="Enter siteId/Any other location" name="siteId" required>
						</div>
						<div class="form-group">
							<label for="issuer">Issued by</label>
							<input type="text" class="form-control" placeholder="Issued by" name="issuer" required>
						</div>
						<div class="form-group">
							<label for="transID">ERP Transaction ID</label>
							<input type="text" class="form-control" placeholder="ERP Transaction ID" name="transID">
						</div>
						
        				<button type="reset" class="btn btn-warning signin">Cancel</button>
						<button type="submit" class="btn btn-info registerbtn">Submit</button>
					</form>
					</div>

				</div>
			</section>
		</div>
	</div>
</div>
</body>
</html>