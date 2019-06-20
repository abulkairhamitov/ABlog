<?php get_header('page') ?>

   <!-- Page Title
   ================================================== -->
   <div id="page-title">

      <div class="row">

         <div class="ten columns centered text-center">
            <h1>Добро пожаловать<span>.</span></h1>

            <p>Вы попали в мой летний блог, где я публикую описание каждого дня моего лета.</p>
         </div>

      </div>

   </div> <!-- Page Title End-->

   <!-- Content
   ================================================== -->
   <div class="content-outer">

      <div id="page-content" class="row">

         <div id="primary" class="eight columns">

            <?php if(have_posts()) { while (have_posts()) {the_post(); ?>
            <article class="post">

               <div class="entry-header cf">

                  <h1><a href="<?php the_permalink(); ?>" title=""><?php the_title(); ?></a></h1>

                  <p class="post-meta">

                     <time class="date" datetime="2014-01-14T11:24"><?php the_time('F jS, Y'); ?></time>
                     /
                     <span class="categories">
                      <?php the_tags ('' , '/') ?>
                     </span>

                  </p>

               </div>

               <div class="post-content">

                  <?php the_content(); ?>

               </div>

            </article> <!-- post end -->
         <?php } // While end
      } //End if ?>
      
            <!-- Pagination -->
            <nav class="col full pagination">
              <ul>
                  <li><span class="page-numbers prev inactive">Prev</span></li>
                <li><span class="page-numbers current">1</span></li>
                <li><a href="#" class="page-numbers">2</a></li>
                  <li><a href="#" class="page-numbers">3</a></li>
                  <li><a href="#" class="page-numbers">4</a></li>
                  <li><a href="#" class="page-numbers">5</a></li>
                  <li><a href="#" class="page-numbers">6</a></li>
                  <li><a href="#" class="page-numbers">7</a></li>
                  <li><a href="#" class="page-numbers">8</a></li>
                  <li><a href="#" class="page-numbers">9</a></li>
                <li><a href="#" class="page-numbers next">Next</a></li>
              </ul>
            </nav>

         </div> <!-- Primary End-->
          <div id="secondary" class="four columns end">
            <?php get_sidebar(); ?>
         </div> <!-- Secondary End-->
   <?php get_footer() ?>