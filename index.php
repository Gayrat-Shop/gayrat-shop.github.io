<?php
	$pageTitle = "Главная страница";
	include("./templates/_head.php");
?> 
	 
	
	<!-- white-plate -->
	<div class="white-plate">
		<div class="container-fluid">
			<!-- header -->
			<div class="header">
				<div class="row">
					<div class="col-sm-6">
						<a href="index.html" class="site-logo">
							<span>Gayrat</span>Shop
						</a>
					</div>
					<div class="col-sm-6">
						<div class="admin-link">
							<!-- <i class="fas fa-unlock-alt"></i> -->
							<a href="./login.html">
								<img width="38" src="img/icons/padlock.svg" alt="">
							</a>
						</div>
					</div>
				</div>
			</div>
			<!-- // header -->
			<div class="line-between"></div>
			<!-- content block -->
			<?php include("./templates/_aside.php"); ?>
				<!-- // Left aside -->
				<!-- Center Part -->
				<div class="col-md-9 col-lg-10">
					<div class="row">

					<?php include ("./templates/_product-item.php"); ?>
					</div>
				</div>
				<!-- // Center Part -->
			</div>
			<!-- content block -->
		</div>
	</div>
	<!-- // white-plate -->

     <?php include("./templates/_footer.php"); ?>