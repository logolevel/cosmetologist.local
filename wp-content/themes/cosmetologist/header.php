<!-- Navigation -->
<nav class="navbar navbar-default navbar-custom navbar-fixed-top">
    <div class="container">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header page-scroll">
            <button typ e="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                <span class="sr-only">Toggle navigation</span>
                Menu <i class="fa fa-bars"></i>
            </button>
            <a class="navbar-brand" href="<?php echo get_home_url(); ?>">Анастасия | <span class="sub-logo">косметолог</span></a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->              
        <?php
        wp_nav_menu( array(
            'menu'              => 'main-menu', 
            'container_class'   => 'collapse navbar-collapse',
            'container_id'      => 'bs-example-navbar-collapse-1', 
            'menu_class'        => 'nav navbar-nav navbar-right' ) 
        );
        ?>
        <!-- /.navbar-collapse -->
    </div>
    <!-- /.container -->
</nav>