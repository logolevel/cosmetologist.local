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


    <!-- Start About Section -->
    <div class="about">
        <div class="container">
            <div class="row">
                <h2 class="text-center section-title-testimonials">О себе</h2>
                <div class="col-md-10 col-md-offset-1">
                    <p>Далеко-далеко за словесными горами в стране, гласных и согласных живут рыбные тексты. Реторический заглавных жаренные обеспечивает рыбного вопрос текст силуэт языком переулка выйти безорфографичный ее сих послушавшись пояс семь, взгляд страну вопроса от всех, рекламных текстов. Пунктуация осталось, безопасную раз запятых однажды дал единственное лучше, пустился. Собрал вскоре злых переулка предупредила запятой свой.</p>
                    <p>Далеко-далеко за словесными горами в стране, гласных и согласных живут рыбные тексты. Снова пор снова большого ты до о выйти, обеспечивает образ.</p>
                    <p>Далеко-далеко за словесными горами в стране, гласных и согласных живут рыбные тексты. Деревни агенство, несколько, ручеек рукопись текст диких пустился рыбного безопасную буквоград даль рекламных, выйти послушавшись.</p>
                </div>
            </div>
        </div>
    </div>
    <!-- End About Section -->



    <!-- Achivments Section -->
    <div class="achivments" id="counts">
        <div class="container">
            <div class="row">
                <div class="col-md-3 col-sm-6 col-xs-12">
                    <div class="text-center">
                        <span class="counter">5</span>
                        <div>Лет опыта работы</div>
                        <i class="fa fa-star-o"></i>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 col-xs-12">
                    <div class="text-center">
                        <span class="counter">7200</span>
                        <div>Проведённых процедур</div>
                        <i class="fa fa-braille"></i>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 col-xs-12">
                    <div class="text-center">
                        <span class="counter">35</span>
                        <div>Сертификатов и дипломов</div>
                        <i class="fa fa-file-text-o"></i>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 col-xs-12">
                    <div class="text-center">
                        <span class="counter">320</span>
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
