<div class="most-popular">
<h4 class="underline">Artigos mais lidos</h4>
  <?php if ( function_exists('wpp_get_mostpopular') ) { ?>
    <?php
    wpp_get_mostpopular(array(
        'limit'     => 3,
        'order_by' => 'views',
        'post_type' => 'post',
        'stats_date' => 1,
        'stats_views ' => 0,
        'stats_author' => 1,
        'excerpt_length' => 123,
        'thumbnail_width' => 100,
				'thumbnail_height' => 100,
        'post_html' => '<li class="list-group-item position-relative d-flex">{thumb_img}<div><h3><a href="{url}" class="stretched-link">{title}</a></h3><p>{summary}</p><span>{stats}</span></div></li>'));
    } ?>
</div>
 <!-- <div class="most-popular">
    <h4 class="underline">Artigos mais lidos</h4>
  <ul class="list-group">
      <li class="list-group-item position-relative"> 
        <h3><a href="#" class="stretched-link">Lorem ipsum dolor sit amet, consectetur</a></h3>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua</p>
        <span>Por: Admin - 01 de Março de 2022</span>
      </li>
       <li class="list-group-item position-relative"> 
        <h3><a href="#" class="stretched-link">Lorem ipsum dolor sit amet, consectetur</a></h3>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua</p>
        <span>Por: Admin - 01 de Março de 2022</span>
      </li>
       <li class="list-group-item position-relative"> 
        <h3><a href="#" linkclass="stretched-link">Lorem ipsum dolor sit amet, consectetur</a></h3>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua</p>
        <span>Por: Admin - 01 de Março de 2022</span>
      </li>
    </ul>  -->
