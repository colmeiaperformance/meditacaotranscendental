<div class="most-popular">
<h4 class="underline">Artigos mais lidos</h4>
  <?php if ( function_exists('wpp_get_mostpopular') ) { ?>
    <?php
    /* Get up to the top 5 posts from the last 7 days */
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
        'post_html' => '<li>{thumb} {title} <span class="wpp-excerpt">{summary}</span></li>'
      ));
} ?>
</div>
