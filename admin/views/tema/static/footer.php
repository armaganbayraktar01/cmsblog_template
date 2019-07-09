</section>
    <!-- /.Main content -->

  </div>
  <!-- /.content-wrapper -->

  <!-- Sidebar control -->
  <?php require View::admin('static/_menus/sidebar_control'); ?>
</div>
<!-- ./wrapper -->

<!-- JQUERY -->
<script src="<?=Url::vendor('jquery/jquery.min.js')?>"></script>
<script src="<?=Url::vendor('jquery-ui/jquery-ui.min.js')?>"></script>
<script>
  $.widget.bridge('uibutton', $.ui.button);
</script>
<!-- Bootstrap 3.4.1 -->
<script src="<?= Url::vendor('bootstrap/js/bootstrap.min.js')?>"></script>
<script src="<?= Url::vendor('bootstrap/js/wysihtml5.all.min.js')?>"></script>
<!-- AdminLTE App -->
<script src="<?= Url::vendor('adminlte/js/adminlte.min.js')?>"></script>
<script src="<?= Url::vendor('adminlte/js/pages/dashboard.js')?>"></script>
<script src="<?= Url::vendor('adminlte/js/demo.js')?>"></script>
</body>

<!-- Footer -->

<footer class="py-5 bg-dark">
  <div class="container">
    <p class="m-0 text-center text-white">Copyright &copy; Your Website 2019</p>
  </div>
</footer>