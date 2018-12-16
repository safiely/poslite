<div class="row">
	<div class="col-lg-12">
		<h1 class="page-header">Stock Out Items</h1>
	</div>
	<!-- /.col-lg-12 -->
</div>
<!-- /.row -->
<div class="row">
	<div class="col-lg-12">
		<div class="panel panel-default">
			<div class="panel-heading">
				Out of Stocks Items
			</div>
			<div class="panel-body">
				<div class="row">
					<div class="col-md-12">
						<div class="form-group">
							<button class="btn btn-primary" id="mail" disabled="disabled" data-loading-text="<i class='fa fa-spinner fa-spin'></i> Sending Email...">Mail Order</button>
						</div>

						<div id="message" style="display: none;">
							<div class="alert alert-success">
								An email order has been sent to your suppliers.
							</div>
						</div>
						<hr>
					</div>
				 	<?php foreach ($items as $item): ?>
						<form method="POST" action="<?php echo base_url('ItemController/add_stocks') ?>">
							<div class="col-md-6 form-group">
								<div class="col-md-4">
									<?php echo ucwords($item->name) ?>:
									<input type="hidden" name="item_id" value="<?php echo $item->id ?>">
									<input type="hidden" name="item_name" value="<?php echo $item->name ?>">
								</div>
								<div class="col-md-8">
									<div class="input-group">
								      <input type="text" autocomplete="off" name="stocks" class="form-control" placeholder="Stocks to add">
								      <span class="input-group-btn">
								        <button class="btn btn-default" type="submit">Stock-in</button>
								      </span>
								    </div>
								</div>
								 
							</div>
						</form>
					<?php endforeach; ?>
				</div>
				<!-- /.row (nested) -->
			</div>
			<!-- /.panel-body -->
		</div>
		<!-- /.panel -->
	</div>
	<!-- /.col-lg-12 -->
</div>  


 


