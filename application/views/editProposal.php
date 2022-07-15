<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Edit Pengajuan
        </h1>
    </section>
    <!-- Main content -->

    <section class="content">
        <div class="row">
            <div class='col-xs-12'>
                <div class='box box-primary'>
                    <div class='box-header  with-border'>
                        <h3 class='box-title'>Edit Pengajuan</h3>
                    </div>
                    <div class="box-body">
                        <?php echo form_open_multipart('Pengajuan/save', array('role' => "form", 'id' => "myForm", 'data-toggle' => "validator")); ?>
                        <div class="form-group">
                            <label for="nama_barang" class="control-label">Periode</label>
                            <div class="input-group">
                                <input type="text" class="form-control" name="periode" id="period" readonly value="<?= $param['p']->tahun ?>" />
                                <span class="input-group-addon">
                                    <span class="fa fa-file"></span>
                                </span>
                            </div>
                            <div class="help-block with-errors"></div>
                        </div>

                        <div class="form-group">
                            <label for="nama_barang" class="control-label">Judul *</label>
                            <div class="input-group">
                                <input type="text" class="form-control" name="judul" id="judul" placeholder="Judul" required value="<?= $param['p']->judul ?>" />
                                <span class="input-group-addon">
                                    <span class="fa fa-file"></span>
                                </span>
                            </div>
                            <div class="help-block with-errors"></div>
                        </div>

                        <div class="form-group">
                            <label for="nama_barang" class="control-label">Abstrak *</label>
                            <div class="input-group">
                                <textarea type="text" class="form-control" rows="10" name="abs" id="abs" placeholder="Abstrak" required><?= $param['p']->abstrak ?></textarea>
                                <span class="input-group-addon">
                                    <span class="fa fa-file"></span>
                                </span>
                            </div>
                            <div class="help-block with-errors"></div>
                        </div>

                        <div class="form-group">
                            <label for="kategori" class="control-label">Kategori</label>
                            <div class="input-group">
                                <select class="form-control" name="kategori" id="kategori" style="width: 100%;">
                                    <option selected value="<?= $param['p']->kategori ?>"><?= $param['p']->kategori ?></option>

                                    <option value="PKM-RE">PKM-RE</option>
                                    <option value="PKM-RSH">PKM-RSH</option>
                                    <option value="PKM-K">PKM-K</option>
                                    <option value="PKM-PM">PKM-PM</option>
                                    <option value="PKM-PI">PKM-PI</option>
                                    <option value="PKM-KC">PKM-KC</option>
                                    <option value="PKM-VGK">PKM-VGK</option>
                                    <option value="PKM-GFT">PKM-GFT</option>
                                    <option value="PKM-AI">PKM-AI</option>


                                </select>

                                <span class="input-group-addon">
                                    <span class="fa fa-list"></span>
                                </span>
                            </div>
                            <div class="help-block with-errors"></div>
                        </div>
                        <div class="form-group">
                            <label for="nama_barang" class="control-label">Dana Ajuan *</label>
                            <div class="input-group">
                                <input type="number" class="form-control" name="dana" id="dana" placeholder="Dana Ajuan" required value="<?= $param['p']->dana_ajuan ?>" />
                                <span class="input-group-addon">
                                    <span class="fa fa-file"></span>
                                </span>
                            </div>
                            <div class="help-block with-errors"></div>
                        </div>
                        <div class="form-group">
                            <label for="nama_barang" class="control-label">Nidn Pembimbing *</label>
                            <div class="input-group">
                                <input type="text" class="form-control" name="nidn" id="nidn" placeholder="Nidn Dosen Pembimbing" required value="<?= $param['p']->nidn ?>" />
                                <span class="input-group-addon">
                                    <span class="fa fa-file"></span>
                                </span>
                            </div>
                            <div class="help-block with-errors"></div>
                        </div>

                        <div class="form-group">
                            <label for="nama_barang" class="control-label">Npm Ketua *</label>
                            <div class="input-group">
                                <input type="text" class="form-control" name="npmk" id="npmk" placeholder="Npm Ketua" required value="<?= $param['p']->npm ?>" />
                                <span class="input-group-addon">
                                    <span class="fa fa-file"></span>
                                </span>
                            </div>
                            <div class="help-block with-errors"></div>
                        </div>

                        <div class="form-group">
                            <label for="nama_barang" class="control-label">Npm Anggota 1</label>
                            <div class="input-group">
                                <input type="text" class="form-control" name="npm1" id="npm1" placeholder="Npm Anggota 1" value="<?= $param['a']->anggota1 ?>" />
                                <span class="input-group-addon">
                                    <span class="fa fa-file"></span>
                                </span>
                            </div>
                            <div class="help-block with-errors"></div>
                        </div>

                        <div class="form-group">
                            <label for="nama_barang" class="control-label">Npm Anggota 2</label>
                            <div class="input-group">
                                <input type="text" class="form-control" name="npm2" id="npm2" placeholder="Npm Anggota 2" value="<?= $param['a']->anggota2 ?>" />
                                <span class="input-group-addon">
                                    <span class="fa fa-file"></span>
                                </span>
                            </div>
                            <div class="help-block with-errors"></div>
                        </div>

                        <div class="form-group">
                            <label for="nama_barang" class="control-label">Npm Anggota 3</label>
                            <div class="input-group">
                                <input type="text" class="form-control" name="npm3" id="npm3" placeholder="Npm Anggota 3" value="<?= $param['a']->anggota3 ?>" />
                                <span class="input-group-addon">
                                    <span class="fa fa-file"></span>
                                </span>
                            </div>
                            <div class="help-block with-errors"></div>
                        </div>

                        <div class="form-group">
                            <label for="nama_barang" class="control-label">Npm Anggota 4</label>
                            <div class="input-group">
                                <input type="text" class="form-control" name="npm4" id="npm4" placeholder="Npm Anggota 4" value="<?= $param['a']->anggota4 ?>" />
                                <span class="input-group-addon">
                                    <span class="fa fa-file"></span>
                                </span>
                            </div>
                            <div class="help-block with-errors"></div>
                        </div>



                        <div class="form-group">
                            <label for="foto" class="control-label">file Proposal</label>
                            <div class="input-group">
                                <input type="file" name="propo" class="form-control">
                                <input type="hidden" name="filnya" value="<?= $param['p']->filename ?>">
                                <input type="hidden" name="idnya" value="<?= $param['p']->id_proposal ?>">

                                <a target="_blank" href="<?= base_url('uploads/') ?><?= $param['p']->filename ?>" download><?= $param['p']->filename ?></a>

                                <span class="input-group-addon">
                                    <span class="fa fa-file">
                                    </span>
                                </span>
                            </div>
                            <div class="help-block with-errors"></div>
                        </div>
                        <div class="box-footer">
                            <a href="<?php echo base_url('Pengajuan') ?>" class="btn btn-default ">Batal</a>
                            <button type="submit" name="submit" class="btn btn-primary">Simpan</button>

                        </div>
                        </form>
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
            if ($('#kategori').val() == null || $('#kategori').val() == 'Pilih') {
                alert("Pilih Kategori")
                e.preventDefault()

            }
        })
    })
</script>
</body>

</html>