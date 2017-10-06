<div id="gallery">
<?php
    if(isset($data['files'])){
		$files = $data['files'];
		$dir="photo/".$_GET['category']; // Путь к директории, в которой лежат фото
		$dir2="photo/i/".$_GET['category']; // Путь к директории, в которой лежат уменьшенные копии фото
		/* Вывод ссылок на фото, в виде уменьшенных фото, по 3 в строке (при отсутствии уменьшенной копии используется оригинал фото) */
		for ($i = 0; $i < count($files); $i++) {
			$photo = file_exists($dir2."/".$files[$i])?$dir2."/".$files[$i]:$dir."/".$files[$i];
			echo '<div class="gallery_img"><a href="'.$dir."/".$files[$i].'" data-lightbox="image"><img src="'.$photo.'"></a></div>';
			if (($i + 1) % 3 == 0) echo '<br />'; 
		}
	}
?>
</div>
<script src="/js/jquery-1.11.0.min.js"></script>
<script src="/js/lightbox.min.js"></script>
