<section class="content-header">
	<h1>
	Purchase
	</h1>
</section>
<section class="content">
	<div class="row">
		<div class="col-md-6 col-sm-6 col-xs-12">
			<div class="info-box">
				<form method="post" action="">
					<div class="box-header">
						<h3 class="box-title">Data Pembelian</h3>
					</div>
					<div class="box-body">
						<div class="form-group">
							<label>Invoice</label>
						</div>
						<div class="form-group">
							<label>Suppliers</label>
							<select class="form-control select2" style="width: 100%;" tabindex="1" aria-hidden="true">
								<?php
									$data=$eng->select("suppliers");
										while ($row=$data->fetch()) {
										echo "
										<option value='$row[id_suppliers]'>
																$row[name]
										</option>
										";
									}
								?>
							</select>
						</div>
						<div class="form-group">
							<label>Date Of Purchase</label>
							<div class="input-group date">
								<div class="input-group-addon">
									<i class="fa fa-calendar"></i>
								</div>
								<input type="text" class="form-control pull-right" id="datepicker">
							</div>
						</div>
						<div class="form-group">
							<label>Total Price</label>
						</div>
						<div class="form-group">
							<label>User ID</label>
						</div>
					</div>
					<div class="box-footer">
						<button class="btn btn-primary pull-right">Acept!</button>
					</div>
				</form>
			</div>
		</div>
		<div class="col-md-6 col-sm-6 col-xs-12">
			<div class="info-box">
				<form method="post" action="">
					<div class="box-header">
						<h3 class="box-title">Purchase Details Data</h3>
					</div>
					<div class="box-body">
						<div class="form-group">
							<label>Name of Goods</label>
						</div>
						<div class="form-group">
							<label>Amount</label>
						</div>
						<div class="form-group">
							<label>Expired</label>
						</div>
						<div class="form-group">
							<label>Price</label>
						</div>
					</div>
					<div class="box-footer">
						<button class="btn btn-primary pull-right">Acept!</button>
					</div>
				</form>
			</div>
		</div>
	</div>
	<div class="row">
		<div class="col-md-12 col-sm-6 col-xs-12">
			<div class="info-box">
				<form method="post" action="#">
					<div class="box-header">
						<h3 class="box-title">Data Barang</h3>
					</div>
					<div class="box-body">
						<div class="form-group">
							<label>ID Item</label>
						</div>
						<div class="form-group">
							<label>Name</label>
						</div>
						<div class="form-group">
							<label>Amount</label>
						</div>
						<div class="form-group">
							<label>Price</label>
						</div>
						<div class="form-group">
							<label>Total Price</label>
						</div>
						<div class="form-group">
						</div>
					</div>
					<div class="box-footer">
						<button class="btn btn-primary pull-right">Acept!</button>
						<button class="btn btn-danger pull-right">Delete</button>
					</div>
				</form>
			</div>
		</div>
	</div>
</section>