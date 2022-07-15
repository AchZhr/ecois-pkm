	<aside class="main-sidebar">
		<!-- sidebar: style can be found in sidebar.less -->
		<section class="sidebar">
			<!-- Sidebar user panel -->
			<div class="user-panel">
				<div class="pull-left image">
					<img src="<?php echo base_url('assets/admin/dist/img/user.png') ?>" class="img-circle" alt="User Image">
				</div>
				<div class="pull-left info">
					<p> <?php echo $this->session->userdata('nama'); ?> </p>
					<a href="#"><i class="fa fa-circle text-success"></i><?php echo $this->session->userdata('userid'); ?></a>
				</div>
			</div>
			<!-- /.search form -->
			<!-- sidebar menu: : style can be found in sidebar.less -->
			<ul class="sidebar-menu" data-widget="tree">
				<li class="header">MENU</li>
				<li>
					<a href="<?php echo base_url('User') ?>">
						<i class="fa fa-dashboard"></i> <span>DASHBOARD</span>
						<span class="pull-right-container">
						</span>
					</a>
				</li>

				<?php if ($this->session->userdata('status') != 0) { ?>
					<?php if ($this->session->userdata('role') == 0) { ?>

						<li>
							<a href="<?php echo base_url('Pengajuan') ?>">
								<i class="fa fa-file"></i> <span>Pengajuan Proposal</span>
								<span class="pull-right-container">
								</span>
							</a>
						</li>
						<li>
							<a href="<?php echo base_url('Pengajuan/judul') ?>">
								<i class="fa fa-inbox"></i> <span>Judul</span>
								<span class="pull-right-container">
								</span>
							</a>
						</li>
					<?php } else if ($this->session->userdata('role') == 1) { ?>

						<li>
							<a href="<?php echo base_url('Pengajuan/pengajuanProposal') ?>">
								<i class="fa fa-inbox"></i><span>Pengajuan Proposal</span>
								<span class="pull-right-container">
								</span>
							</a>
						</li>
						<li>
							<a href="<?php echo base_url('Pengajuan/judul') ?>">
								<i class="fa fa-user"></i> <span>Judul</span>
								<span class="pull-right-container">
								</span>
							</a>
						</li>

					<?php } else if ($this->session->userdata('role') == 9 || $this->session->userdata('role') == 8) { ?>

						<li>
							<a href="<?php echo base_url('Pengajuan/proposal') ?>">
								<i class="fa fa-file"></i><span>Pengajuan Prposal</span>
								<span class="pull-right-container">
								</span>
							</a>
						</li>
						<li>
							<a href="<?php echo base_url('Mahasiswa') ?>">
								<i class="fa fa-user"></i><span>Mahasiswa</span>
								<span class="pull-right-container">
								</span>
							</a>
						</li>
						<li>
							<a href="<?php echo base_url('Dosen') ?>">
								<i class="fa fa-user"></i><span>Dosen</span>
								<span class="pull-right-container">
								</span>
							</a>
						</li>
						<li>
							<a href="<?php echo base_url('Admin/verifikasiMahasiswa') ?>">
								<i class="fa fa-user"></i><span>Verifikasi Mahasiswa</span>
								<span class="pull-right-container">
								</span>
							</a>
						</li>
						<li>
							<a href="<?php echo base_url('Admin/verifikasiDosen') ?>">
								<i class="fa fa-user"></i><span>Verifikasi Dosen</span>
								<span class="pull-right-container">
								</span>
							</a>
						</li>
						<?php if ($this->session->userdata('role') == 9) { ?>

							<!-- <li>
								<a href="<?php echo base_url('Admin/usaha') ?>">
									<i class="fa fa-user"></i><span>Admin</span>
									<span class="pull-right-container">
									</span>
								</a>
							</li> -->

						<?php } ?>

						<li>
							<a href="<?php echo base_url('Pengajuan/judul') ?>">
								<i class="fa fa-inbox"></i> <span>Judul</span>
								<span class="pull-right-container">
								</span>
							</a>
						</li>
					<?php } ?>
				<?php } ?>




			</ul>

		</section>
		<!-- /.sidebar -->
	</aside>