<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title><?php bloginfo('name'); ?></title>

    <link href='https://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
		<?php wp_head(); ?>
</head>

<body>

		<?php get_header(); ?>

    <!-- Page Header -->
    <!-- Set your background image for this header on the line below. -->
    <header class="intro-header" style="background-image: url('<?php bloginfo('template_url'); ?>/img/main.jpg')">
    	<div class="container">
    		<div class="row">
    			<div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
    				<div class="site-heading">
    					<h1 class="index-title">Косметолог</h1>
    					<hr class="small">
    					<span class="subheading">Привет! Меня зовут Анастасия и я делаю этот мир чище!</span>
    				</div>
    			</div>
    		</div>
    	</div>
    </header>

    <!-- Main Content -->

    <!-- Services Section -->
    <div class="container section-services">
        <div class="row">
					<div class="col-md-12">
						<h2 class="text-center section-title-services">Услуги</h2>
					</div>
					<div class="col-md-4 col-sm-6 text-center services-description">
							<img src="<?php bloginfo('template_url'); ?>/img/1.jpg" alt="" class="services-img img-circle">
							<h4>Чистка лица</h4>
							<p>Короткое описание процедуры или на каких брендах делается и т.д.</p>
					</div>
					<div class="col-md-4 col-sm-6 text-center services-description">
							<img src="<?php bloginfo('template_url'); ?>/img/2.jpg" alt="" class="services-img img-circle">
							<h4>Чистка спины</h4>
							<p>Короткое описание процедуры или на каких брендах делается и т.д.</p>
					</div>
					<div class="col-md-4 col-sm-6 text-center services-description">
							<img src="<?php bloginfo('template_url'); ?>/img/3.jpg" alt="" class="services-img img-circle">
							<h4>Пилинг</h4>
							<p>Короткое описание процедуры или на каких брендах делается и т.д.</p>
					</div>
					<div class="col-md-4 col-sm-6 text-center services-description">
							<img src="<?php bloginfo('template_url'); ?>/img/4.jpg" alt="" class="services-img img-circle">
							<h4>Маски, коненраты</h4>
							<p>Короткое описание процедуры или на каких брендах делается и т.д.</p>
					</div>
					<div class="col-md-4 col-sm-6 text-center services-description">
							<img src="<?php bloginfo('template_url'); ?>/img/5.jpg" alt="" class="services-img img-circle">
							<h4>Уходы</h4>
							<p>Короткое описание процедуры или на каких брендах делается и т.д.</p>
					</div>
					<div class="col-md-4 col-sm-6 text-center services-description">
							<img src="<?php bloginfo('template_url'); ?>/img/6.jpg" alt="" class="services-img img-circle">
							<h4>Мезотерапия</h4>
							<p>Короткое описание процедуры или на каких брендах делается и т.д.</p>
					</div>
                    <div class="col-md-12 text-center">
                        <a href="<?php echo get_site_url(); ?>/service" class="btn btn-danger">Подробнее...</a>
                    </div>
        </div>
    </div>

    <!-- Achivments Section -->
    <div class="achivments">
        <div class="container">
            <div class="row">
                <div class="col-md-3 col-sm-6 col-xs-12">
                    <div class="text-center">
                        <span>5</span>
                        <div>Лет опыта работы</div>
                        <i class="fa fa-star-o"></i>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 col-xs-12">
                    <div class="text-center">
                        <span>7200</span>
                        <div>Проведённых процедур</div>
                        <i class="fa fa-braille"></i>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 col-xs-12">
                    <div class="text-center">
                        <span>35</span>
                        <div>Сертификатов и дипломов</div>
                        <i class="fa fa-file-text-o"></i>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 col-xs-12">
                    <div class="text-center">
                        <span>320</span>
                        <div>Постоянных клиентов</div>
                        <i class="fa fa-users"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Achivments Section -->

    <!-- Testimonials Section -->
    <div class="container section-testimonials">
    	<div class="row">
    		<div class="col-md-12">
    			<h2 class="text-center section-title-testimonials">Отзывы</h2>
    		</div>

            <div class="col-sm-12 col-md-8 col-md-offset-2">
                <?php echo do_shortcode( '[testimonial_view id=3]' );?>
            </div>

    	</div>

    	<div class="col-md-12 text-center">
    	<a href="<?php echo get_site_url(); ?>/testimonials" class="btn btn-info">Оставить отзыв</a>
    	</div>
    </div>




    <?php get_footer(); ?>

<?php wp_footer(); ?>
</body>

</html>
