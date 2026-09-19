<?php global $Wcms ?>

<!DOCTYPE html>
<html lang="<?= $Wcms->getSiteLanguage() ?>">
	<head>
		<!-- Encoding, browser compatibility, viewport -->
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" crossorigin="anonymous">

		<!-- Search Engine Optimization (SEO) -->
		<meta name="title" content="<?= $Wcms->get('config', 'siteTitle') ?> - <?= $Wcms->page('title') ?>" />
		<meta name="description" content="<?= $Wcms->page('description') ?>">
		<meta name="keywords" content="<?= $Wcms->page('keywords') ?>">
		<meta property="og:url" content="<?= $this->url() ?>" />
		<meta property="og:type" content="website" />
		<meta property="og:site_name" content="<?= $Wcms->get('config', 'siteTitle') ?>" />
		<meta property="og:title" content="<?= $Wcms->page('title') ?>" />
		<meta name="twitter:site" content="<?= $this->url() ?>" />
		<meta name="twitter:title" content="<?= $Wcms->get('config', 'siteTitle') ?> - <?= $Wcms->page('title') ?>" />
		<meta name="twitter:description" content="<?= $Wcms->page('description') ?>" />

		<!-- Website and page title -->
		<title>
			<?= $Wcms->get('config', 'siteTitle') ?> - <?= $Wcms->page('title') ?>

		</title>

		<!-- Admin CSS -->
		<?= $Wcms->css() ?>
		
		<!-- Theme CSS -->
		<link rel="stylesheet" rel="preload" as="style" href="<?= $Wcms->asset('css/style.css') ?>">
	</head>

	<body class="coffee-site">
		<!-- Admin settings panel and alerts -->
		<?= $Wcms->settings() ?>

		<?= $Wcms->alerts() ?>

		<div class="coffee-layout">
			<aside class="coffee-sidebar">
				<div class="coffee-brand"><span class="coffee-mark">CC</span><div><strong>WonderBrew Café</strong><small>Roasted with care</small></div></div>
				<nav class="coffee-nav" aria-label="Main navigation">
					<p class="nav-label">Explore</p>
					<a href="<?= $Wcms->url('store') ?>">Shop menu</a>
					<a href="<?= $Wcms->url('store-cart') ?>">Basket</a>
					<a href="<?= $Wcms->url('coffee-blog') ?>">Coffee blog</a>
					<a href="<?= $Wcms->url('coffee-photo') ?>">Photography</a>
					<p class="nav-label">Learn</p>
					<a href="<?= $Wcms->url('coffee-education') ?>">Coffee education</a>
					<a href="<?= $Wcms->url('coffee-about') ?>">About the cafe</a>
				</nav>
				<div class="sidebar-footer"><a class="sidebar-account" href="<?= $Wcms->url('store-login') ?>">Sign in</a><a href="<?= $Wcms->url('loginURL') ?>">Staff login</a></div>
			</aside>

			<main class="coffee-main">
				<div class="coffee-mobile-bar"><span>WonderBrew Café</span><button type="button" onclick="document.body.classList.toggle('sidebar-open')" aria-label="Open navigation">Menu</button></div>
				<div class="coffee-content">
					<?= $Wcms->page('content') ?>
				</div>
				<section class="coffee-note"><?= $Wcms->block('subside') ?></section>
			</main>
		</div>

		<footer class="wrapper style2">
			<div class="inner">
				<!-- Footer -->
				<?= $Wcms->footer() ?>

			</div>
		</footer>

		<!-- Admin JavaScript. More JS libraries can be added below -->
		<?= $Wcms->js() ?>
		<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>

	</body>
</html>
