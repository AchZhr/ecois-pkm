<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Pengajuan
        </h1>
    </section>
    <!-- Main content -->

    <section class="content">

        <div class="row">
            <div class="col-md-12">

                <div class="box box-info">
                    <div class='box-header  with-border'>
                        <h3 class='box-title'>Pengajuan</h3>

                    </div>
                    <div class="box-body">
                        <div>
                            <div class="box box-info">
                                <div class='box-header  with-border'>
                                    <h3 class='box-title'>Tambah Judul</h3>

                                </div>
                                <div class="box-body">
                                    <form action="<?= base_url('Pengajuan/tambahJudul') ?>" method="post">
                                        <div class="form-group">
                                            <label for="nama_barang" class="control-label">Judul *</label>
                                            <div class="input-group">
                                                <input type="text" class="form-control" name="judul" id="judul" placeholder="Judul" required />
                                                <span class="input-group-addon">
                                                    <span class="fa fa-file"></span>
                                                </span>
                                            </div>
                                            <div class="help-block with-errors"></div>
                                        </div>
                                        <button type="reset" class="btn btn-danger">Batal</button>
                                        <button type="submit" name="submit" class="btn btn-primary">Simpan</button>
                                    </form>
                                </div>
                                <div class="box-footer">


                                </div>
                            </div>
                        </div>

                        <table id="myTable" class="table table-bordered table-hover ">
                            <thead>
                                <tr>
                                    <th>Judul</th>



                                </tr>
                            </thead>
                            <tbody>
                                <?php $no = 0;
                                foreach ($param as $proposal) { ?>
                                    <tr>

                                        <td><?php echo $proposal->judul_proposal; ?></td>




                                    </tr>
                                <?php } ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>

    </section>
    <!-- Styles -->
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->
<footer class="main-footer">
    <div class="pull-right hidden-xs">
        <b>Version</b> 0.0.1
    </div>
    <strong>Copyright &copy; 2022 <a href="<?= base_url('Home') ?>">ECOIS UPN JATIM </a>.</strong> All rights
    reserved.
</footer>
<!-- /.control-sidebar -->
<!-- Add the sidebar's background. This div must be placed immediately after the control sidebar -->
<div class="control-sidebar-bg"></div>
</div>
<script src="<?php echo base_url() ?>assets/admin/plugins/dropdown/js/jquery.dd.js"></script>

<script src="<?php echo base_url() ?>assets/admin/plugins/sweetalert/sweetalert2.min.js"></script>
<script src="<?php echo base_url() ?>assets/admin/plugins/Bootstrap-validator/validator.js"></script>
<script src="<?php echo base_url() ?>assets/admin/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<script src="<?php echo base_url() ?>assets/admin/bower_components/jquery-knob/dist/jquery.knob.min.js"></script>
<!-- daterangepicker -->
<script src="<?php echo base_url() ?>assets/admin/bower_components/bootstrap-daterangepicker/daterangepicker.js"></script>
<!-- datepicker -->
<script src="<?php echo base_url() ?>assets/admin/bower_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js"></script>
<!-- Bootstrap WYSIHTML5 -->
<!-- Slimscroll -->
<script src="<?php echo base_url() ?>assets/admin/bower_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>
<!-- FastClick -->
<script src="<?php echo base_url() ?>assets/admin/bower_components/fastclick/lib/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="<?php echo base_url() ?>assets/admin/dist/js/adminlte.min.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="<?php echo base_url() ?>assets/admin/dist/js/pages/dashboard.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="<?php echo base_url() ?>assets/admin/dist/js/demo.js"></script>
<script src="<?php echo base_url() ?>assets/admin/bower_components/select2/dist/js/select2.min.js"></script>
<script>
    $(document).ready(function() {
        $('#myTable').DataTable();
    });
</script>
</body>

</html>