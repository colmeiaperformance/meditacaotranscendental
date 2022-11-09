<?php get_header(); ?>
<?php get_template_part('template-parts/sections/navbar'); ?>
<main class="page-instrutor">
  <?php echo do_shortcode( '[mt_render_employee]' ); ?>
  <?php get_template_part('template-parts/pages/instrutor/footer'); ?>
</main>
<style>
  #melhorPeriodo,
#melhorDia {
  width: 100%;
  font-weight: 500 !important;
  font-size: 1rem !important;
  color: #F29F05 !important;
  border: 1px solid #F29F05 !important;
  border-radius: 30px !important;
  text-align: left !important;
  background: url("../resources/images/dropdown.png") !important;
  background-position: right 0.75rem center !important;
  background-color: #fff !important;
  background-repeat: no-repeat !important;
}
#melhorPeriodo:active, #melhorPeriodo:focus,
#melhorDia:active,
#melhorDia:focus {
  box-shadow: none !important;
}
@media (max-width: 992px) {
  #melhorPeriodo,
#melhorDia {
    font-size: 1rem !important;
    line-height: 18px !important;
    padding: 7px 17px !important;
    margin: 0 auto;
  }
}
</style>
<?php get_footer();