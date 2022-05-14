<?= $this->extend('layouts/app') ?>
<?= $this->section('main-content') ?>
	<section class="body">
		<div class="inner-wrapper">
			<section role="main" class="content-body">
				<header class="page-header">
					<h2 class="font-bold"><i class="fa fa-fw fa-list" aria-hidden="true"></i> Product List</h2>
				
					<div class="pull-right">
						<a href="<?= base_url(); ?>/products/add" type="button" id="" class="mt-sm mr-xl btn btn-default">ADD NEW PRODUCT</a>
					</div>
				</header>


				<!-- start: page -->
				<section  class="panel">
						<header class="main-panel-heading">
							<h2 class="panel-title"><i class="fa fa-search" aria-hidden="true"></i> Product Detail Record</h2>
						</header>
						<div  class="panel-body">
							<div class="table-responsive">
								<table style="width: 100%" class="table table-bordered table-striped mb-none" id="product_list">
									<thead>
										<tr>
											<th>Name</th>
											<th>Image</th>
											<th>Category</th>
											<th>Sub Category</th>
											<th>Price</th>
											<th>Status</th>
											<th>Operations</th>
										</tr>
									</thead>
									<tbody>
										
									</tbody>
								</table>
							</div>
						</div>
				</section>
				<!-- end: page -->
			</section>
		</div>
	</section>	
<?= $this->endSection() ?> 		
