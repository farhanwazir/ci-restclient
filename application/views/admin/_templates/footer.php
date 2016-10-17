<?php /* */
defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<footer class="main-footer">
    <div class="pull-right hidden-xs">
        <b><?php echo lang('footer_version'); ?></b> 1.2.1
    </div>
    <strong><?php echo lang('footer_copyright'); ?> &copy; <?php echo date('Y'); ?> <a href="http://springlabs.com.mx"
                                                                                       target="_blank">SpringLabs</a>.</strong> <?php echo lang('footer_all_rights_reserved'); ?>
    .
</footer>
</div>

<script src="<?php echo base_url($frameworks_dir . '/auricell/js/communicator.js'); ?>"></script>

<script src="<?php echo base_url($plugins_dir . '/slimscroll/slimscroll.min.js'); ?>"></script><?php /* */
if ($mobile == TRUE): ?>
    <script src="<?php echo base_url($plugins_dir . '/fastclick/fastclick.min.js'); ?>"></script><?php /* */
endif; ?>

<script src="<?php echo base_url($plugins_dir . '/animsition/animsition.min.js'); ?>"></script>
<?php if ($this->router->fetch_class() == 'users' && ($this->router->fetch_method() == 'create' OR $this->router->fetch_method() == 'edit')): ?>
    <script src="<?php echo base_url($plugins_dir . '/pwstrength/pwstrength.min.js'); ?>"></script>
<?php endif; ?>
<script src="<?php echo base_url($frameworks_dir . '/adminlte/js/adminlte.min.js'); ?>"></script>
<script src="<?php echo base_url($frameworks_dir . '/domprojects/js/dp.min.js'); ?>"></script>
<script src="<?php echo base_url($plugins_dir . '/daterangepicker/moment.js'); ?>"></script>
<script src="<?php echo base_url($plugins_dir . '/daterangepicker/daterangepicker.js'); ?>"></script>
<script src="<?php echo base_url($plugins_dir . '/icheck/js/icheck.min.js'); ?>"></script>
<script src="<?php echo base_url($plugins_dir . '/inputmask/jquery.inputmask.bundle.min.js'); ?>"></script>

<script
    src="<?php echo base_url($plugins_dir . '/bootstrap-switch/js/bootstrap-switch.min.js'); ?>"></script><!-- Bootstrap-table data export -->

<script
    src="<?php echo base_url($plugins_dir . '/tableExport/tableExport.js'); ?>"></script><!--Export table dependency of bootstrap-table -->
<script
    src="<?php echo base_url($plugins_dir . '/tableExport/jquery.base64.js'); ?>"></script> <!--Export table dependency of bootstrap-table -->
<!-- PDF Export -->
<script
    src="<?php echo base_url($plugins_dir . '/tableExport/jspdf/libs/sprintf.js'); ?>"></script><!--Export table dependency of bootstrap-table -->
<script
    src="<?php echo base_url($plugins_dir . '/tableExport/jspdf/jspdf.js'); ?>"></script> <!--Export table dependency of bootstrap-table -->
<script
    src="<?php echo base_url($plugins_dir . '/tableExport/jspdf/libs/base64.js'); ?>"></script> <!--Export table dependency of bootstrap-table -->
<!-- PNG Expoert -->
<script
    src="<?php echo base_url($plugins_dir . '/tableExport/html2canvas.js'); ?>"></script> <!--Export table dependency of bootstrap-table -->

<script>
    $(document).ready(function () {

        $('input[name="telephone"]').inputmask();
        $('input[name="age"]').inputmask();

        !$('input:not(".iCheckOff"):not("[data-field]")').iCheck({
            checkboxClass: 'icheckbox_flat-blue',
            radioClass: 'iradio_flat-blue',
            increaseArea: '-20%'
        });

        $.extend($.fn.bootstrapTable.defaults, $.fn.bootstrapTable.locales['es-MX']);


        $('.bs-tbl').on('load-error.bs.table', function (status, res) {
            new PNotify({title: 'Table remote data', text: 'Status: ' + status + ', Res: ' + res, type: 'error'});
        });
        $('.bs-tbl').on('load-success.bs.table', function (data) {
            if (data == null) {
                new PNotify({title: 'Table remote data', text: 'data: ' + data, type: 'error'});
            }
        });
    });
</script>

</body>
</html>
