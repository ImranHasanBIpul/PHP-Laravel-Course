<!DOCTYPE html>
<html lang="en">
<?php include "includes/head.php";?>

<body>

<?php include "includes/navber.php";?>


	<!-- Page container -->
	<div class="page-container">

		<!-- Page content -->
		<div class="page-content">

			<!-- Main sidebar -->
			<div class="sidebar sidebar-main">
				<div class="sidebar-content">

					<!-- User menu -->
					<div class="sidebar-user">
						<div class="category-content">
							<div class="media">
								<a href="#" class="media-left"><img src="assets/images/placeholder.jpg" class="img-circle img-sm" alt=""></a>
								<div class="media-body">
									<span class="media-heading text-semibold">Victoria Baker</span>
									<div class="text-size-mini text-muted">
										<i class="icon-pin text-size-small"></i> &nbsp;Santa Ana, CA
									</div>
								</div>

								<div class="media-right media-middle">
									<ul class="icons-list">
										<li>
											<a href="#"><i class="icon-cog3"></i></a>
										</li>
									</ul>
								</div>
							</div>
						</div>
					</div>
					<!-- /user menu -->


					<!-- Main navigation -->
					<?php include 'includes/navigation.php'; ?>
					<!-- /main navigation -->

				</div>
			</div>
			<!-- /main sidebar -->


			<!-- Main content -->
			<div class="content-wrapper">

				<!-- Page header -->
				<div class="page-header">
			

					<div class="breadcrumb-line">
						<ul class="breadcrumb">
							<li><a href="bannar.php"> <i class="icon-home2 position-left"></i> Bannar</a></li>
							<li class="active">List</li>
						</ul>

					</div>
				</div>
				<!-- /page header -->


				<!-- Content area -->
				<div class="content">

					<!-- Basic datatable -->
					<div class="panel panel-flat">
						<div class="panel-heading">
							<h5 class="panel-title">Bannar</h5>
							<div class="heading-elements">
								<ul class="icons-list">
								<li style="margin-right: 10px;" class=""><a href="bannarAdd.php" class="btn btn-primary text-light add-new">Add New</a></li>
			                		<!-- <li><a data-action="collapse"></a></li>
			                		<li><a data-action="reload"></a></li>
			                		<li><a data-action="close"></a></li> -->
			                	</ul>
		                	</div>
						</div>

						<div class="panel-body">
				<table class="table table-bordered datatable-basic">
							<thead>
								<tr>
									<th width="5%";>SL-</th>
									<th width="20%";>First Name</th>
									<th width="20%";>Last Name</th>
									<th width="20%";>Job Title</th>
									<th width="20%";>DOB</th>
									<th width="5%";>Status</th>
									<th width="10%"; class="text-center">Actions</th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<td>01</td>
									<td>Mathe</td>
									<td><a href="#">Enright</a></td>
									<td>Traffic Court Referee</td>
									<td>22 Jun 1972</td>
									<td><span class="label label-success">Active</span></td>
									<td class="text-center">
									
										<ul class="icons-list">
										<a href="bannarUpdate.php"><i class="icon-pencil7"></i>
										<a href="#"><i class="icon-trash"></i>
									
										</ul>
									</td>
								</tr>
								
							</tbody>
						</table>
						</div>

						
					</div>
					<!-- /basic datatable -->


				

					<!-- Footer -->
					<div class="footer text-muted">
						&copy; 2015. <a href="#">Limitless Web App Kit</a> by <a href="http://themeforest.net/user/Kopyov" target="_blank">Eugene Kopyov</a>
					</div>
					<!-- /footer -->

				</div>
				<!-- /content area -->

			</div>
			<!-- /main content -->

		</div>
		<!-- /page content -->

	</div>
	<!-- /page container -->
	<?php include "includes/footer.php";?>
</body>
</html>
