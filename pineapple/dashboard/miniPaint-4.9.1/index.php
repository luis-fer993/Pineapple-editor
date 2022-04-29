<?php

session_start();

require '../../../php/database.php';

$records = $conn->prepare('SELECT id, name, email, password FROM users WHERE id = :id');
$records->bindParam(':id', $_SESSION['user_id']);
$records->execute();
$results = $records->fetch(PDO::FETCH_ASSOC);

$user = null;

if (count($results) > 0) {
	$user = $results;
}

//consulta de suscripcion

$records1 = $conn->prepare('SELECT id,suscripcion,fecha_exp,codigo,cod_us FROM suscripcion WHERE id = :id');
$records1->bindParam(':id', $_SESSION['user_id']);
$records1->execute();
$results1 = $records1->fetch(PDO::FETCH_ASSOC);

if (count($results1) > 0) {
    $plan_user = $results1;
}

function saber_plan($fechaactual, $fechaexp, $sus, $cod, $cod_us)
{
    if ($fechaactual > $fechaexp) {
        $plan = "free";
    } elseif ($cod !== $cod_us) {
        $plan = "free";
    } else {
        $plan = $sus;
    }

    return $plan;
}

$hoy = date("Y-m-d");
$exp = $plan_user["fecha_exp"];
$suscripcion = $plan_user["suscripcion"];
$codigo = $plan_user["codigo"];
$codigo_user = $plan_user["cod_us"];

$plan = saber_plan($hoy, $exp, $suscripcion, $codigo, $codigo_user);



if ((isset($_SESSION['user_id']))&& ($plan == "basic"|| $plan =="pro") || $user["email"]=="admin@pineapple.com") ;
 else {
    header('Location: ../index.php');
}

?>




<!DOCTYPE html>
<html dir="ltr" lang="en-US">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta http-equiv="x-ua-compatible" content="IE=edge" />
	<title>miniPaint - image editor</title>
	<meta name="description" content="miniPaint is free online image editor using HTML5. Edit, adjust your images, add effects online in your browser, without installing anything..." />
	<meta name="keywords" content="photo, image, picture, transparent, layers, free, edit, html5, canvas, javascript, online, photoshop, gimp, effects, sharpen, blur, magic eraser tool, clone tool, rotate, resize, photoshop online, online tools, tilt shift, sprites, keypoints" />
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=0" />
	<link rel="icon" sizes="192x192" href="images/favicon.png">
	<!-- <link rel="manifest" href="manifest.json"> -->
	<!-- Google -->
	<meta itemprop="name" content="miniPaint" />
	<meta itemprop="description" content="miniPaint is free online image editor using HTML5. Edit, adjust your images, add effects online in your browser, without installing anything..." />
	<meta itemprop="image" content="https://viliusle.github.io/miniPaint/images/preview.jpg" />
	<!-- Twitter -->
	<meta name="twitter:card" content="summary_large_image" />
	<meta name="twitter:title" content="miniPaint" />
	<meta name="twitter:description" content="miniPaint is free online image editor using HTML5. Edit, adjust your images, add effects online in your browser, without installing anything..." />
	<meta name="twitter:image" content="https://viliusle.github.io/miniPaint/images/preview.jpg" />
	<meta name="twitter:image:alt" content="miniPaint is free online image editor using HTML5. Edit, adjust your images, add effects online in your browser, without installing anything..." />
	<!-- Facebook, Pinterest -->
	<meta property="og:title" content="miniPaint" />
	<meta property="og:type" content="article" />
	<meta property="og:url" content="https://viliusle.github.io/miniPaint/" />
	<meta property="og:image" content="https://viliusle.github.io/miniPaint/images/preview.jpg" />
	<meta property="og:description" content="miniPaint is free online image editor using HTML5. Edit, adjust your images, add effects online in your browser, without installing anything..." />
	<meta property="og:site_name" content="miniPaint" />
	
	<script src="dist/bundle.js"></script>
</head>
<body>
	<div class="wrapper">

		<nav aria-label="Main Menu" class="main_menu" id="main_menu"></nav>
		
		<div class="submenu">
			<a class="logo" href="#">miniPaint</a>
			<div class="block attributes" id="action_attributes"></div>
			<button class="undo_button" id="undo_button" type="button">
				<span class="sr_only">Undo</span>
			</button>
		</div>
		
		<div class="sidebar_left" id="tools_container"></div>


		<div class="middle_area" id="middle_area">

			<canvas class="ruler_left" id="ruler_left"></canvas>
			<canvas class="ruler_top" id="ruler_top"></canvas>

			<div class="main_wrapper" id="main_wrapper">
				<div class="canvas_wrapper" id="canvas_wrapper">
					<div id="mouse"></div>
					<div class="transparent-grid" id="canvas_minipaint_background"></div>
					<canvas id="canvas_minipaint">
						<div class="trn error">
							Your browser does not support canvas or JavaScript is not enabled.
						</div>
					</canvas>
				</div>
			</div>
		</div>

		<div class="sidebar_right">
			<div class="preview block">
				<h2 class="trn toggle" data-target="toggle_preview">Preview</h2>
				<div id="toggle_preview"></div>
			</div>
			
			<div class="colors block">
				<h2 class="trn toggle" data-target="toggle_colors">Colors</h2>
				<div class="content" id="toggle_colors"></div>
			</div>
			
			<div class="block" id="info_base">
				<h2 class="trn toggle toggle-full" data-target="toggle_info">Information</h2>
				<div class="content" id="toggle_info"></div>
			</div>
			
			<div class="details block" id="details_base">
				<h2 class="trn toggle toggle-full" data-target="toggle_details">Layer details</h2>
				<div class="content" id="toggle_details"></div>
			</div>
			
			<div class="layers block">
				<h2 class="trn">Layers</h2>
				<div class="content" id="layers_base"></div>
			</div>
		</div>
	</div>
	<div class="mobile_menu">
		<button class="left_mobile_menu" id="left_mobile_menu_button" type="button">
			<span class="sr_only">Toggle Menu</span>
		</button>
		<button class="right_mobile_menu" id="mobile_menu_button" type="button">
			<span class="sr_only">Toggle Menu</span>
		</button>
	</div>
	<div class="hidden" id="tmp"></div>
	<div id="popups"></div>
</body>
</html>
