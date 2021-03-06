<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
	<title>техноStore - интернет магазин техники</title>
	<link rel="stylesheet" href="./libs/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" href="./css/main.css">

	<link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,900|Open+Sans:400,600,700&amp;subset=cyrillic-ext" rel="stylesheet">

	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">

</head>

<body>

	<!-- white-plate -->
	<div class="white-plate">
		<div class="container-fluid">
			<!-- header -->
			<div class="header">
				<div class="row">
					<div class="col-md-10">
						<div class="site-logo">
							Админ панель
						</div>
					</div>
					<div class="col-md-2">
						<div class="admin-link">
							<!-- <i class="fas fa-unlock-alt"></i> -->
							<a href="../index.html">
								<img width="38" src="../img/icons/logout.svg" alt="">
							</a>
						</div>
					</div>
				</div>
			</div>
			<!-- // header -->
			<div class="line-between"></div>
			<!-- content block -->
			<div class="row">
				<div class="col-12">
					<div class="title-1">Добавить товар</div>

					<form>
						<div class="form-group">
							<input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Название">
						</div>
						<div class="form-group">
							<select class="form-control">
								<option value="">Телефоны</option>
								<option value="">Планшеты</option>
								<option value="">Ноутбуки</option>
								<option value="">Компьютеры</option>
							</select>
						</div>
						<div class="form-group">
							<input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Цена">
						</div>

						<div class="form-check form-check-inline">
							<input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1">
							<label class="form-check-label" for="inlineCheckbox1">распродажа</label>
						</div>
						<div class="form-check form-check-inline">
							<input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2">
							<label class="form-check-label" for="inlineCheckbox2">новинка</label>
						</div>

						<div class="form-group pt-3">
							<label for="exampleFormControlFile1">Фото:</label>
							<input type="file" class="form-control-file" id="exampleFormControlFile1">
						</div>

						<div class="form-group">
							<div class="form-group">
								<label for="exampleFormControlTextarea1">Описание:</label>
								<textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
							</div>
							<button type="submit" class="btn btn-primary">Добавить</button>
						</div>
					</form>

				</div>

			</div>
			<!-- content block -->
		</div>
	</div>
	<!-- // white-plate -->

	<div class="copyright">
		<p>
			Сделал Юрий Ключевский, на интенсиве от
			<a href="http://webcademy.ru" target="_blank">WebCademy.ru</a>
		</p>
	</div>

	<script src="js/main.js"></script>
</body>

</html>
