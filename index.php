<?php
    require_once('header.php');
?>
		<!-- Тут начинается карусель -->
		<div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
			<div class="carousel-inner">
				<div class="carousel-item active">
					<img src="img/slide1.jpg" class="d-block w-100" alt="...">
				</div>
				<div class="carousel-item">
					<img src="img/slide2.jpg" class="d-block w-100" alt="...">
				</div>
				<div class="carousel-item">
					<img src="img/slide3.jpg" class="d-block w-100" alt="...">
				</div>
			</div>
			<button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls"  data-bs-slide="prev">
				<span class="carousel-control-prev-icon" aria-hidden="true"></span>
				<span class="visually-hidden">Предыдущий</span>
			</button>
			<button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls"  data-bs-slide="next">
				<span class="carousel-control-next-icon" aria-hidden="true"></span>
				<span class="visually-hidden">Следующий</span>
			</button>
		</div>
		<!-- Тут заканчивается карусель -->
		
		<div class="container py-4">
			<h1 class="text-center mb-3">Технологии которые мы изучаем</h1>
			<div class="row text-center">
				<div class="col-md-4">
					<i class="fa-brands fa-html5 fa-9x" style="color: #f06529;"></i>
					<h3>HTML</h3>
				</div>
				<div class="col-md-4">
					<i class="fa-brands fa-css3-alt fa-9x" style="color: #2965f1;"></i>
					<h3>CSS</h3>
				</div>
				<div class="col-md-4">
					<i class="fa-brands fa-bootstrap fa-9x" style="color: #563d7c;"></i>
					<h3>Bootstrap</h3>
				</div>
			</div>
		</div>

		<div class="container-fluid bg-image py-5 my-3">
			<div class="col-sm-7 mx-auto p-4 border border-white" style="background: rgba(0, 0, 0, .5); box-shadow: 0 0 10px 1px black">
				<h3>Lorem Ipsum</h3>
				<p>
					Lorem ipsum dolor sit amet, consectetur adipisicing elit. Animi aspernatur consequatur dicta illo ipsam quae. Accusantium blanditiis corporis, deserunt, eius ex, facilis fuga magnam magni nostrum odio officia quo quod repellendus sapiente sit. Aperiam architecto assumenda dolor ducimus earum explicabo facilis fugit id modi molestias nam natus necessitatibus nisi nobis non odit officiis placeat possimus quasi reprehenderit soluta totam, ullam voluptas voluptate, voluptatum. A accusamus dolorem eum hic natus obcaecati quaerat quas ullam vel velit? Consequatur facere illo mollitia neque sequi! Assumenda autem doloremque dolores ea fuga hic id molestiae nihil officia quas quasi, reiciendis saepe soluta suscipit voluptatem? Modi.
				</p>
			</div>
		</div>

		<div class="container my-3">
			<div class="row">
				<div class="col-sm-3">
					<p>
						<strong><i class="fa-solid fa-map-location-dot"></i> Адрес:</strong> <br>г.Москва
					</p>
					<p>
						<strong><i class="fa-solid fa-phone"></i> Телефон: </strong> <br>+79885478744
					</p>
					<p>
						<strong><i class="fa-solid fa-business-time"></i> Время работы: </strong> <br>ПН-ПТ с 9:30-18:00
					</p>
				</div>
				<div class="col-sm-9">
					<form action="">
						<div class="mb-3">
							<input type="text" class="form-control" placeholder="Номер телефона">
						</div>
						<div class="mb-3">
							<input type="text" class="form-control" placeholder="Имя">
						</div>
						<div class="mb-3">
							<textarea class="form-control" placeholder="Сообщение"></textarea>
						</div>
						<div class="mb-3">
							<input type="submit" class="form-control btn btn-primary">
						</div>
					</form>
				</div>
			</div>
		</div>
		<script type="text/javascript" charset="utf-8" async src="https://api-maps.yandex.ru/services/constructor/1.0/js/?um=constructor%3A718ba5492bc2f2b5f77bb53d0c327fcc227fcafa7aa8f707ecfc02b7b7fb0a06&amp;width=100%25&amp;height=400&amp;lang=ru_RU&amp;scroll=true"></script>
		<footer class="container-fluid bg-dark text-light text-center py-5">
			<div class="container">
				&copy; 2022 FC-PH-1901-1
			</div>
		</footer>
		<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
  </body>
</html>