<?php get_header();?>

<body>

<div class="wrapper">
    <!-- Sidebar -->
    <nav id="sidebar">
        <div class="sidebar-header">
            <h3>Bootstrap Sidebar</h3>
        </div>
<!-- MENU -->
<?php if ( has_nav_menu( 'header-menu' ) ) { ?>
	<?php wp_nav_menu( array( 
		'theme_location' 	=> 'header-menu',
		'menu_class'     	=> 'list-unstyled components'
		)
	); ?>
<?php } ?>

        

    </nav>
    <!-- Page Content -->
    <div id="content">

       
    </div>
</div>
    
    <!-- Contenido principal -->
    <div id="content">

    <div class="container">
        <div class="row" id="presentacion">
            <div class="col-12">
                <h1>AIN CORTÉS CATONI</h1>
                <h2>CENTRAL 370, EL BOSQUE, SANTIAGO, CHILE!</h2>
            </div>
        </div>
        <div class="row" id="rrss">
            <div class="col-12">
                <ul>
                    <li><i class="fab fa-facebook-square"></i></li>
                    <li><i class="fab fa-twitter-square"></i></li>
                    <li><i class="fab fa-instagram"></i></li>
                </ul>
            </div>
            
        </div>
        
        

        <div class="row my-5" id="experiencia">
            <div class="col-12">
                <h1>EXPERIENCIA</h1>
            </div>
        </div>


        <?php
        $arg = array(
          'post_type'		 => 'experiencia',
          'posts_per_page' => 6
        );

        $get_arg = new WP_Query( $arg );

        while ( $get_arg->have_posts() ) {
          $get_arg->the_post();
        ?>
        
        <div class="row my-3" id="cargo-1">
            <div class="col-6">
                <h3> <?php the_field('Empresa') ?></h3>
                <h4><?php the_field('cargo') ?></h4>
                <p><?php the_field('descripcion_del_cargo') ?></p>
            </div>
            <div class="col-6">
                <p><?php the_field('fecha') ?></p>
            </div>
        </div>
          
                   
                     
        

        <?php } wp_reset_postdata();
      ?>


<div class="row my-5" id="experiencia">
            <div class="col-12">
                <h1>EDUCACIÓN</h1>
            </div>
        </div>


        <?php
        $arg = array(
          'post_type'		 => 'educacion',
          'posts_per_page' => 6
        );

        $get_arg = new WP_Query( $arg );

        while ( $get_arg->have_posts() ) {
          $get_arg->the_post();
        ?>
        
        <div class="row my-3" id="cargo-1">
            <div class="col-6">
                <h3> <?php the_field('Empresa') ?></h3>
                <h4><?php the_field('cargo') ?></h4>
                <p><?php the_field('descripcion_del_cargo') ?></p>
            </div>
            <div class="col-6">
                <p><?php the_field('fecha') ?></p>
            </div>
        </div>
          
  
        <?php } wp_reset_postdata();
      ?>

<div class="row my-5" id="experiencia">
            <div class="col-12">
                <h1>HABILIDADES</h1>
            </div>
        </div>


        <?php
        $arg = array(
          'post_type'		 => 'habilidades',
          'posts_per_page' => 6
        );

        $get_arg = new WP_Query( $arg );

        while ( $get_arg->have_posts() ) {
          $get_arg->the_post();
        ?>
        
        <div class="row my-3" id="cargo-1">
            <div class="col-6">
                <h3> <?php the_field('Empresa') ?></h3>
                <h4><?php the_field('cargo') ?></h4>
                <p><?php the_field('descripcion_del_cargo') ?></p>
            </div>
            <div class="col-6">
                <p><?php the_field('fecha') ?></p>
            </div>
        </div>
          
                   
                     
        

        <?php } wp_reset_postdata();
      ?>




    </div>
    </div>

    
  </div>

  <?php get_footer();?>

    

