<!-- Modal -->
<div class="modal fade" id="modal-beneficios" role="dialog" data-bs-backdrop="static" data-bs-keyboard="false"
  tabindex="-1" aria-labelledby="modal-beneficiosLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
    <div class="modal-content">
      <div class="modal-header border-0">
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <div class="row">
          <div class="col-md-4">
            <img src="<?php echo get_template_directory_uri() . '/images/beneficios/logo.jpeg'; ?>"
              class="img-fluid w-100">
          </div>
          <div class="col-md-8 ms-auto">
            <div class="modal-body-title">Inscreva-se em nossa palestra gratuita</div>
            <div class="modal-body-text">Clique no botão abaixo para acessar as datas mais próximas</div>
          </div>
        </div>

      </div>
      <div class="modal-footer border-0">
        <button type="button" class="btn mt-0" onclick="window.location='<?php echo home_url( ) . '/agendamento'; ?>'">Quero me inscrever</button>
      </div>
    </div>
  </div>
</div>


<script>
jQuery(document).ready(function() {
  jQuery("html").bind("mouseleave", function() {
    console.log("Socorro");
    jQuery('#modal-beneficios').modal('show');
    jQuery("html").unbind("mouseleave");
  });
});
</script>