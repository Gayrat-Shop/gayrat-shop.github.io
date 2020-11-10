<?php
    $pageTitle = "Gayrat-Shop | Старница с товаром";
?>

<?php include("./templates/_head.php"); ?>

	<!-- white-plate -->
	<div class="white-plate">
		<div class="container-fluid">
			<!-- header -->
			<div class="header">
				<div class="row">
					<div class="col-md-6">
						<a href="index.html" class="site-logo">
							<span>Gayrat</span>Shop
						</a>
					</div>
					<div class="col-md-6">
						<div class="admin-link">
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
			<div class="row">
				<!-- Left aside -->
				<div class="col-md-3">
					<ul class="nav">
						<li class="nav__element"><a href="!#" class="nav__link">Телефоны</a></li>
						<li class="nav__element"><a href="!#" class="nav__link">Планшеты</a></li>
						<li class="nav__element"><a href="!#" class="nav__link nav__link--active">Ноутбуки</a></li>
						<li class="nav__element"><a href="!#" class="nav__link">Компьютеры</a></li>
					</ul>
				</div>
				<!-- // Left aside -->
				<!-- Center Part -->
				<div class="col-md-9">
					<div class="product-title">Apple iMac 27" Retina 5K Core i5 3.8 ГГц, 8 ГБ, 2 ТБ Fusion Drive, Radeon Pro 580 8 ГБ</div>

					<div class="row">
						<div class="col-6">
							<img src="img/products/imac.jpg" alt="">
						</div>
						<div class="col-6">
							<div class="product-price">164 990 руб</div>
							<a href="order.html" class="product-btn-order">Сделать заказ</a>
							<div class="product-desc">
								<p>Настольный компьютер, который погружает вас в контент. Буквально. Эта идея лежит в основе современного iMac — и сегодня она актуальна как никогда.</p>
								<p>Совершенно новые процессоры, инновационные графические технологии, передовые накопители и разъёмы с впечатляющей пропускной способностью — всё это новый iMac. А его дисплей Retina способен оживить любую картинку, ведь по яркости и качеству цветопередачи ему нет равных среди iMac.</p>
								<p>Работать на iMac теперь ещё интереснее и увлекательнее.</p>

							</div>

						</div>
					</div>

				</div>
				<!-- // Center Part -->
			</div>
			<!-- content block -->
		</div>
	</div>
	<!-- // white-plate -->

	<?php include("./templates/_footer.php"); ?>