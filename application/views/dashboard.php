<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Dashboard
        </h1>
    </section>
    <!-- Main content -->

    <section class="content">
        <div class="row">
            <div class='col-xs-12'>
                <div class='box box-primary'>
                    <div class='box-header  with-border'>
                        <h3 class='box-title'>Dashboard</h3>
                    </div>
                    <div class="box-body">
                        <?php if ($this->session->userdata('status') == 0) { ?>
                            <div class="alert alert-danger alert-dismissible">
                                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                                <h4><i class="icon fa fa-ban"></i> Alert!</h4>
                                Danger alert preview. This alert is dismissable. A wonderful serenity has taken possession of my entire
                                soul, like these sweet mornings of spring which I enjoy with my whole heart.
                            </div>
                        <?php } else { ?>
                            <?php if ($this->session->userdata('role') == 0) { ?>
                                <form>
                                    <div class="form-group">
                                        <label for="nama_barang" class="control-label">Npm</label>
                                        <div class="input-group">


                                            <input type="text" class="form-control" name="nama" id="nama_barang" data-error="Nama Barang harus diisi" readonly placeholder="nama barang" value="<?= $param->npm ?>" required />
                                            <span class="input-group-addon">
                                                <span class="fa fa-cube"></span>
                                            </span>
                                        </div>
                                        <div class="help-block with-errors"></div>
                                    </div>
                                    <div class="form-group">
                                        <label for="harga" class="control-label">Nama</label>
                                        <div class="input-group">
                                            <input type="text" name="harga" id="harga" data-error="harga harus di isi" class="form-control" readonly placeholder="Harga Barang" value="<?= $param->nama ?>" required>
                                            <span class="input-group-addon">
                                                <span class="fa fa-cube">
                                                </span>
                                            </span>
                                        </div>
                                        <div class="help-block with-errors"></div>
                                    </div>

                                    <div class="form-group">
                                        <label for="nama_barang" class="control-label">Jurusan</label>
                                        <div class="input-group">


                                            <input type="text" class="form-control" name="nama" id="nama_barang" data-error="Nama Barang harus diisi" readonly placeholder="nama barang" value="<?= $param->jurusan ?>" required />
                                            <span class="input-group-addon">
                                                <span class="fa fa-cube"></span>
                                            </span>
                                        </div>
                                        <div class="help-block with-errors"></div>
                                    </div>
                                    <div class="form-group">
                                        <label for="nama_barang" class="control-label">No HP</label></label>
                                        <div class="input-group">


                                            <input type="text" class="form-control" name="nama" id="nama_barang" data-error="Nama Barang harus diisi" readonly placeholder="nama barang" value="<?= $param->nohp ?>" required />
                                            <span class="input-group-addon">
                                                <span class="fa fa-cube"></span>
                                            </span>
                                        </div>
                                        <div class="help-block with-errors"></div>
                                    </div>

                                    <div class="form-group">
                                        <label for="harga" class="control-label">Email</label>
                                        <div class="input-group">
                                            <input type="text" name="harga" id="harga" data-error="harga harus di isi" class="form-control" readonly placeholder="Harga Barang" value="<?= $param->email ?>">
                                            <span class="input-group-addon">
                                                <span class="fa fa-cube">
                                                </span>
                                            </span>
                                        </div>
                                        <div class="help-block with-errors"></div>
                                    </div>


                                </form>
                            <?php } else if ($this->session->userdata('role') == 1) { ?>
                                <div class="row">
                                    <div class="col-lg-12 col-xs-12">
                                        <!-- small box -->
                                        <div class="small-box bg-aqua">
                                            <div class="inner">
                                                <h3><?= $param ?></h3>

                                                <p>Tim Dalam Bimbingan</p>
                                            </div>
                                            <div class="icon">
                                                <i class="ion ion-bag"></i>
                                            </div>
                                            <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
                                        </div>
                                    </div>

                                </div>
                            <?php } else if ($this->session->userdata('role') == 9 || $this->session->userdata('role') == 9) { ?>
                                <div class="row">
                                    <div class="col-lg-3 col-xs-6">
                                        <!-- small box -->
                                        <div class="small-box bg-aqua">
                                            <div class="inner">
                                                <h3><?= $param['m'] ?></h3>

                                                <p>Mahasiswa</p>
                                            </div>
                                            <div class="icon">
                                                <i class="ion ion-bag"></i>
                                            </div>
                                            <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
                                        </div>
                                    </div>
                                    <!-- ./col -->
                                    <div class="col-lg-3 col-xs-6">
                                        <!-- small box -->
                                        <div class="small-box bg-green">
                                            <div class="inner">
                                                <h3><?= $param['d'] ?></h3>

                                                <p>Dosen</p>
                                            </div>
                                            <div class="icon">
                                                <i class="ion ion-stats-bars"></i>
                                            </div>
                                            <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
                                        </div>
                                    </div>
                                    <!-- ./col -->
                                    <div class="col-lg-3 col-xs-6">
                                        <!-- small box -->
                                        <div class="small-box bg-yellow">
                                            <div class="inner">
                                                <h3><?= $param['k'] ?></h3>

                                                <p>Tim</p>
                                            </div>
                                            <div class="icon">
                                                <i class="ion ion-person-add"></i>
                                            </div>
                                            <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
                                        </div>
                                    </div>
                                    <!-- ./col -->
                                    <div class="col-lg-3 col-xs-6">
                                        <!-- small box -->
                                        <div class="small-box bg-red">
                                            <div class="inner">
                                                <h3><?= $param['p'] ?></h3>

                                                <p>Pengajuan</p>
                                            </div>
                                            <div class="icon">
                                                <i class="ion ion-pie-graph"></i>
                                            </div>
                                            <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
                                        </div>
                                    </div>
                                    <!-- ./col -->
                                </div>
                            <?php } ?>


                        <?php } ?>


                    </div><!-- /.box-body -->
                </div><!-- /.box -->
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
        $('form').submit(function(e) {
            e.preventDefault()
        })
    })
</script>
</body>

</html>