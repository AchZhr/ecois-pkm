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
                        <table id="myTable" class="table table-bordered table-hover ">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Nidn</th>
                                    <th>Nama</th>
                                    <th>Gender</th>
                                    <th>Jurusan</th>
                                    <th>NoHP</th>
                                    <th>Email</th>


                                </tr>
                            </thead>
                            <tbody>
                                <?php $no = 0;
                                foreach ($param as $proposal) { ?>
                                    <tr>
                                        <td><?php echo ++$no; ?></td>

                                        <td><?php echo $proposal->nidn; ?></td>
                                        <td><?php echo $proposal->nama; ?></td>
                                        <td><?php echo $proposal->jk; ?></td>
                                        <td><?php echo $proposal->jurusan; ?></td>
                                        <td><?php echo $proposal->nohp; ?></td>
                                        <td><?php echo $proposal->email; ?></td>

                                        <!-- <td><?php

                                                    // echo anchor(site_url('Pengajuan/detail/' . $proposal->id_proposal), '<i class="fa fa-file fa-lg"></i>&nbsp;&nbsp;Detail', array('title' => 'Detail', 'class' => 'btn btn-sm btn-info'));

                                                    ?>
                                        </td> -->



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