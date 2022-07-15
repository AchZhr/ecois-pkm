<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Ecois</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.7 -->
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/admin/bower_components/bootstrap/dist/css/bootstrap.min.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/admin/bower_components/font-awesome/css/font-awesome.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/admin/bower_components/Ionicons/css/ionicons.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/admin/dist/css/AdminLTE.min.css">
    <!-- iCheck -->
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/admin/plugins/iCheck/square/blue.css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

    <!-- Google Font -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>

<body class="hold-transition login-page">

    <style>
        @media screen and (min-width: 600px) {
            .daftar {
                width: 40%;
            }


        }
    </style>
    <div class="register-box daftar">
        <div class="login-logo">
            <a href="<?php echo base_url('Home') ?>">Ecois</a>
        </div>
        <!-- /.login-logo -->
        <div class="login-box-body">

            <form action="<?php echo base_url('Home/regist') ?>" method="post">
                <p class="login-box-msg">Pendaftaran</p>



                <div></div>
                <div class="form-group has-feedback">
                    <label for="">Status</label>

                    <select type="text" id="stat" class="form-control" name="sat" placeholder="Gender">
                        <option selected disabled>Pilih</option>
                        <option value="Dosen">Dosen</option>
                        <option value="Mahasiswa">Mahasiswa</option>

                    </select>
                </div>
                <div class="form-group has-feedback">
                    <label for="" id="lid">Npm</label>
                    <input type="text" class="form-control" id="userid" name="userid" placeholder="NPM" required>
                    <span class="glyphicon glyphicon-user form-control-feedback"></span>
                </div>
                <div class="form-group has-feedback">
                    <label for="">Nama</label>

                    <input type="text" class="form-control" name="nama" placeholder="Nama" required>
                    <span class="glyphicon glyphicon-user form-control-feedback"></span>
                </div>
                <div class="form-group has-feedback">
                    <label for="">Gender</label>

                    <select type="text" id="gender" class="form-control" name="jk" placeholder="Gender">
                        <option selected disabled>Pilih</option>
                        <option value="Laki-Laki">Laki-Laki</option>
                        <option value="Perempuan">Perempuan</option>

                    </select>
                </div>


                <div class="form-group has-feedback">
                    <label for="">Jurusan</label>

                    <select type="text" id="jur" class="form-control" name="js" placeholder="Fakultas">
                        <option selected disabled>Pilih</option>
                        <option value="Ekonomi Pembangunan">Ekonomi Pembangunan</option>
                        <option value="Manajemen">Manajemen</option>
                        <option value="Akuntansi">Akuntansi</option>
                        <option value="Kewirausahaan">Kewirausahaan</option>
                        <option value="Agriteknologi">Agriteknologi</option>
                        <option value="Agribisnis">Agribisnis</option>

                        <option value="Teknik Kimia">
                            Teknik Kimia</option>
                        <option value="Teknik Industri">Teknik Industri</option>
                        <option value="Teknologi Pangan">Teknologi Pangan</option>
                        <option value="Teknik Lingkungan">Teknik Lingkungan</option>
                        <option value="Teknik Sipil">Teknik Sipil</option>
                        <option value="Teknik Mesin">Teknik Mesin</option>
                        <option value="Ilmu Admin Negara/Publik">
                            Ilmu Admin Negara/Publik</option>
                        <option value="Ilmu Admin Niaga/Bisnis">Ilmu Admin Niaga/Bisnis</option>
                        <option value="Ilmu Komunikasi">Ilmu Komunikasi</option>
                        <option value="Hubungan Internasional">Hubungan Internasional</option>
                        <option value="Teknik Arsitektur">Teknik Arsitektur</option>
                        <option value="Disain Komunikasi Visual">Disain Komunikasi Visual</option>
                        <option value="Ilmu Hukum">Ilmu Hukum</option>
                        <option value=" Teknik Informatika">
                            Teknik Informatika</option>
                        <option value="Sistem Informasi">Sistem Informasi</option>
                        <option value="Sains Data">Sains Data</option>


                    </select>
                </div>
                <div class="form-group has-feedback">
                    <label for="">No HP</label>

                    <input type="text" class="form-control" name="nohp" placeholder="No HP" required>
                    <span class="glyphicon glyphicon-book form-control-feedback"></span>
                </div>
                <div class="form-group has-feedback">
                    <label for="">Email</label>

                    <input type="text" class="form-control" name="email" placeholder="Email" required>
                    <span class="glyphicon glyphicon-send form-control-feedback"></span>
                </div>
                <div class="form-group has-feedback">
                    <label for="">Password</label>

                    <input type="password" class="form-control" name="password" placeholder="Password" required>
                    <span class="glyphicon glyphicon-lock form-control-feedback"></span>
                </div>
                <div class="row">

                    <!-- /.col -->
                    <div class="col-xs-12">
                        <button type="submit" name="submit" class="btn btn-primary btn-block btn-flat">Submit</button>
                    </div>

                </div>
            </form>
            <div class="social-auth-links text-center">
                <p>- Atau -</p>

                <a href="<?php echo base_url('Mahasiswa') ?>" class="btn btn-success btn-block btn-flat"></i>kembali Ke Login</a>
            </div>


        </div>

        <br>
        <br>
        <!-- /.login-box-body -->
    </div>
    <!-- /.login-box -->

    <!-- jQuery 3 -->
    <script src="<?php echo base_url() ?>assets/admin/bower_components/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap 3.3.7 -->
    <script src="<?php echo base_url() ?>assets/admin/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>

    <script>
        $(document).ready(function() {
            $('form').submit(function(e) {
                if ($('#gender').val() == null || $('#gender').val() == 'Pilih') {
                    alert("Pilih Gender")
                    e.preventDefault()
                } else if ($('#stat').val() == null || $('#stat').val() == 'Pilih') {
                    alert("Pilih status")
                    e.preventDefault()

                } else if ($('#jur').val() == null || $('#jur').val() == 'Pilih') {
                    alert("Pilih Jurusan")
                    e.preventDefault()

                }
            })

            $('#stat').on('change', function(e) {
                var optionSelected = $("option:selected", this);
                var valueSelected = this.value;
                if (valueSelected == 'Dosen') {
                    $('#lid').text('Nidn');
                    $('#userid').attr("placeholder", "Nidn");
                    // $('#c2').attr("placeholder", "Password");
                    // $('#type').val('P');
                    // $(this).css("display", "none");
                    // $("#b2").css("display", "block");
                    // $("#info").css("display", "none");
                } else {
                    $('#lid').text('Npm');
                    $('#userid').attr("placeholder", "Npm");

                }
            })
        })
    </script>

</body>

</html>