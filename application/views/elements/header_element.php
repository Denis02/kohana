<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/php; charset=utf-8" charset="utf-8" />
    <meta name="autor" content="Татьяна Хмелёвская" />
    <meta name="keywords" content="фотограф в Виннице, услуги фотографа, фотограф, фотосъемка, Винница, профессиональный фотограф, свадебное фото, фотосъемка свадьбы, фото для корпоративов, студийная съемка, корпоративное фото, панорамная съемка, создание портфолио, портфолио для моделей, фотограф у Вінниці, послуги фотографа, фотограф, фотозйомка, Вінниця, професійний фотограф, весільне фото, фотозйомка весілля, фото для корпоративів, студійна зйомка, корпоративне фото, панорамна зйомка, створення портфоліо, портфоліо для моделей" />
    <meta name="description" content="Татьяна Хмелевская - фотограф любитель, предлагает свои услуги по фотосъемке." />
    <title>Татьяна Хмелёвская</title>
    <link href="/i/camera.png" rel="icon" type="image/x-icon" />
    <link href="/css/style.css" rel="stylesheet" type="text/css" />
	<link href="/css/lightbox.css" rel="stylesheet" type="text/css" />
</head>
<body>
	<div id="container">
		<div id="header">
			<div>
                <a href="/"><img src="/i/logo.png" /></a>
            </div>
		</div>
		<div id="menu">
			<ul>
				<li><a href="/">Главная</a></li>
				<li class="portfolio"><a href="/portfolio">Портфолио</a>
				<?php if(isset($categories)){?>
                    <ul>
						<?php foreach($categories as $cat){?>
							<li><a href="/portfolio?category=<?php echo $cat['folder']?>"><?php echo $cat['name']?></a></li>
						<?php }?>	
                    </ul>
				<?php }?>	
                </li>
				<li><a href="/contacts">Контакты</a></li>
			</ul>
		</div>
		<hr />