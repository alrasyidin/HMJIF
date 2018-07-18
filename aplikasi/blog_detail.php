<?php  

$slug = $_GET['post-slug'] ? $_GET['post-slug'] : "";

$data = array("judul", "image", "views", "isi", "tgl_dibuat");

$artikel = getUserData($data, "WHERE slug = '$slug' LIMIT 1");

// print_r($artikel);
?>

<div class="awal awal--blog section">
	<div class="container">
		<div class="w-75 mx-auto text-center">
			<h2 class="section__header awal__header"><?= $artikel[0]["judul"]; ?></h2>

			<div class="section__info">
				<time class="section__overlay"><?= date("F j, Y" ,strtotime($artikel[0]["tgl_dibuat"])); ?></time>
				<span class="section__view">Dilihat <?= $artikel[0]["views"]; ?></span>
			</div>

		</div>
	</div>
</div>

<div class="container">
	<div class="article">
		<article class="article__detail text-justify py-5">
			<?= $artikel[0]["isi"]; ?>
		</article>
	</div>
</div>
