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
    <header class="intro-header" style="background-image: url('<?php bloginfo('template_url'); ?>/img/blog.jpg')">
    	<div class="container">
    		<div class="row">
    			<div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
    				<div class="site-heading">
    					<h1>Самый чистый блог</h1>
    					<hr class="small">
    					<span class="subheading">Я люблю свою работу и хочу рассказать о ней детально!</span>
    				</div>
    			</div>
    		</div>
    	</div>
    </header>

    <!-- Main Content -->
    <div class="container">
        <div class="row">


            <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                <div class="post-preview">

                    <?php
                        $current_page = (get_query_var('paged')) ? get_query_var('paged') : 1;
                        $args = array(
                        	'posts_per_page' => get_option('posts_per_page'),
                        	'paged'          => $current_page
                        );
                        query_posts( $args );
                     
                        $wp_query->is_archive = true;
                        $wp_query->is_home = false;
                     
                        while(have_posts()): the_post();
                    ?>

                    <a href="<?php the_permalink(); ?>">
                        <h2 class="post-title">
                            <?php the_title(); ?>
                        </h2>
                    </a>

                    <?php the_content('Далее...'); ?>

                    <p class="post-meta">Автор <a href="#"><?php the_author(); ?></a> <?php the_time('j M Y'); ?></p>
                    <hr>

                    <?php endwhile; ?>

                    <div class="col-lg-12">
                        <?php wp_pagenavi(); ?>
                    </div>

                </div>
            </div>
        </div>
    </div>

    <?php get_footer(); ?>

<?php wp_footer(); ?>
</body>

</html>