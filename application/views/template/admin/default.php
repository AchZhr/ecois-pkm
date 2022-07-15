<?php
$this->data['param'] = $param;
$this->load->view('template/admin/head.php');
$this->load->view('template/admin/navbar.php');
$this->load->view('template/admin/sidebar.php');
$this->load->view($view, $this->data);
