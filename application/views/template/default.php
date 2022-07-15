<?php
$this->data['param'] = $param;
$this->load->view('template/head.php');
$this->load->view('template/navbar.php');
$this->load->view($view, $this->data);
