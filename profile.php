<?php include "head.php" ?>

<body class="inner profile-page">
<div class="layout">

	<?php include "header-inner-page.php" ?>

	<main class="main">
		<div class="container">
			<div class="profile-aside">
				<div class="mob-mode">
					<img src="i/blank_ava.png" class="avatar-img" alt="user name">
					<button class="nav-toggle">
						<div class="icon"></div>
					</button>
				</div>
				<div class="profile-aside-wrap">
					<div class="user-info">
						<div class="avatar">
							<img src="i/blank_ava.png" class="avatar-img" alt="user name">
							<form enctype="multipart/form-data" method="POST">
								<label for="user-photo">Загрузить<br>фото</label>
								<input type="file" name="user-photo" id="user-photo" accept="image/*,image/jpeg">
							</form>
						</div>
						<div class="username">Екатерина Иванова</div>
						<div class="user-email">(ekaterina-ivanova@gmail.com)</div>
					</div>
					<div class="pr-nav">
						<ul>
							<li class="pr-nav-item"><a href="/">Мои мероприятия</a></li>
							<li class="pr-nav-item"><a href="/">Учебные мероприятия</a></li>
							<li class="pr-nav-item"><a href="/">Сообщения <span>(1)</span></a></li>
							<li class="pr-nav-item"><a href="/">Мой профиль</a></li>
							<li class="pr-nav-item"><a href="/">Выход</a></li>
						</ul>
					</div>
					<button data-toggle="modal" data-target="#modal-contact" class="btn">Написать нам</button>
				</div>
			</div>
			<div class="content-wrapper">
				<ul class="breadcrumbs">
					<li class="item-el"><a href="/">Главная</a></li>
					<li class="item-el">Личный кабинет</li>
				</ul>
				<article class="content">
					<h1>Личный кабинет</h1>
					<section class="group">
						<div class="group-title">Ваши курсы</div>
						<ul class="event-list">
							<li class="event-item">
                        <div class="aside-info aside-top-info">
                           <div class="time-b event-date"><i class="fa fa-calendar" aria-hidden="true"></i>&nbsp;12.05</div>
                           <div class="time-b event-time"><i class="fa fa-clock-o" aria-hidden="true"></i>19:30</div>
                           <div class="time-b event-vacancies"><em>5</em>свободных мест</div>
                        </div>
                        <div class="bg-img cover-img" style="background-image: url(pic/events/pic-2.jpg)"></div>
                        <div class="event-info">
                           <span class="event-type">Мастер-класс</span>
                           <a href="/" class="event-title h3">Cекреты развития голоса</a>
                           <a href="#" class="btn btn-sm">Записаться</a>
                        </div>
                     </li>
						</ul>
					</section>
					<section class="group">
						<div class="group-title">Ближайшие мероприятия</div>
						<ul class="event-list">
							<li class="event-item">
                        <div class="aside-info aside-top-info">
                           <div class="time-b event-date"><i class="fa fa-calendar" aria-hidden="true"></i>&nbsp;12.05</div>
                           <div class="time-b event-time"><i class="fa fa-clock-o" aria-hidden="true"></i>19:30</div>
                        </div>
                        <div class="bg-img cover-img" style="background-image: url(pic/events/pic-2.jpg)"></div>
                        <div class="event-info">
                           <span class="event-type">Мастер-класс</span>
                           <a href="/" class="event-title h3">секреты развития голоса и техники речи</a>
                           <a href="#" class="btn btn-sm">Записаться</a>
                        </div>
                     </li>
                     <li class="event-item">
                        <div class="aside-info aside-top-info">
                           <div class="time-b event-date"><i class="fa fa-calendar" aria-hidden="true"></i>&nbsp;12.05</div>
                           <div class="time-b event-time"><i class="fa fa-clock-o" aria-hidden="true"></i>19:30</div>
                           <div class="time-b event-vacancies"><em>5</em>свободных мест</div>
                        </div>
                        <div class="bg-img cover-img" style="background-image: url(pic/events/pic-2.jpg)"></div>
                        <div class="event-info">
                           <span class="event-type">Мастер-класс</span>
                           <a href="/" class="event-title h3">Cекреты развития голоса</a>
                           <a href="#" class="btn btn-sm">Записаться</a>
                        </div>
                     </li>
						</ul>
					</section>
					<section class="group">
						<div class="group-title">Пройденные курсы и мероприятия</div>
						<ul class="event-list">
							<li class="event-item">
                        <div class="aside-info aside-top-info">
                           <div class="time-b event-date"><i class="fa fa-calendar" aria-hidden="true"></i>&nbsp;12.05</div>
                           <div class="time-b event-time"><i class="fa fa-clock-o" aria-hidden="true"></i>19:30</div>
                        </div>
                        <div class="bg-img cover-img" style="background-image: url(pic/events/pic-2.jpg)"></div>
                        <div class="event-info">
                           <span class="event-type">Мастер-класс</span>
                           <a href="/" class="event-title h3">секреты развития голоса и техники речи</a>
                           <a href="#" class="btn btn-sm">Записаться</a>
                        </div>
                     </li>
                     <li class="event-item">
                        <div class="aside-info aside-top-info">
                           <div class="time-b event-date"><i class="fa fa-calendar" aria-hidden="true"></i>&nbsp;12.05</div>
                           <div class="time-b event-time"><i class="fa fa-clock-o" aria-hidden="true"></i>19:30</div>
                           <div class="time-b event-vacancies"><em>5</em>свободных мест</div>
                        </div>
                        <div class="bg-img cover-img" style="background-image: url(pic/events/pic-4.jpg)"></div>
                        <div class="event-info">
                           <span class="event-type">Мастер-класс</span>
                           <a href="/" class="event-title h3">Cекреты развития голоса</a>
                           <a href="#" class="btn btn-sm">Записаться</a>
                        </div>
                     </li>
						</ul>
						<a href="/" class="link">Показать все</a>
					</section>
					<section class="group group-recommend">
						<div class="group-title">Для вас рекомендованы следующие курсы</div>
						<ul class="event-list">
							<li class="event-item">
                        <div class="aside-info aside-top-info">
                           <div class="time-b event-date"><i class="fa fa-calendar" aria-hidden="true"></i>&nbsp;12.05</div>
                           <div class="time-b event-time"><i class="fa fa-clock-o" aria-hidden="true"></i>19:30</div>
                        </div>
                        <div class="bg-img cover-img" style="background-image: url(pic/events/pic-3.jpg)"></div>
                        <div class="event-info">
                           <span class="event-type">Мастер-класс</span>
                           <a href="/" class="event-title h3">секреты развития голоса и техники речи</a>
                           <a href="#" class="btn btn-sm">Записаться</a>
                        </div>
                     </li>
                     <li class="event-item">
                        <div class="aside-info aside-top-info">
                           <div class="time-b event-date"><i class="fa fa-calendar" aria-hidden="true"></i>&nbsp;12.05</div>
                           <div class="time-b event-time"><i class="fa fa-clock-o" aria-hidden="true"></i>19:30</div>
                           <div class="time-b event-vacancies"><em>5</em>свободных мест</div>
                        </div>
                        <div class="bg-img cover-img" style="background-image: url(pic/events/pic-1.jpg)"></div>
                        <div class="event-info">
                           <span class="event-type">Мастер-класс</span>
                           <a href="/" class="event-title h3">Cекреты развития голоса</a>
                           <a href="#" class="btn btn-sm">Записаться</a>
                        </div>
                     </li>
						</ul>
					</section>
					<div class="go-test">Не можете определиться какой курс вам подойдет? Наш несложный тест поможет сделать выбор</div>
					<button data-fancybox data-options='{ "src": "#quiz", "modal": true }' class="btn btn-sm">Пройти тест</button>
				</article>
			</div>
		</div>
	</main>
	<?php include "footer.php" ?>

   <?php include "modal-test.php" ?>