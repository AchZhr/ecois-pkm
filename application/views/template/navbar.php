 <!--====== Main Header ======-->
 <header class="header--style-1">

     <!--====== Nav 1 ======-->
     <nav class="primary-nav primary-nav-wrapper--border">
         <div class="container">

             <!--====== Primary Nav ======-->
             <div class="primary-nav">

                 <!--====== Main Logo ======-->
                 <a class="main-logo" href="<?= base_url('Home'); ?>">

                     <h2 style="color: black;">Ecois</h2>
                     <!-- <img src="images/logo/logo-1.png" alt=""> -->
                 </a>
                 <!--====== End - Main Logo ======-->



                 <!--====== Dropdown Main plugin ======-->
                 <div class="menu-init" id="navigation">

                     <button class="btn btn--icon toggle-button toggle-button--secondary fas fa-bars" type="button"></button>

                     <!--====== Menu ======-->
                     <div class="ah-lg-mode">

                         <span class="ah-close">✕ Close</span>

                         <!--====== List ======-->
                         <ul class="ah-list ah-list--design1 ah-list--link-color-secondary">
                             <?php
                                if ($this->session->userdata('logged_in')) {


                                ?>
                                 <li class="has-dropdown" data-tooltip="tooltip" data-placement="left" title="Account">

                                     <a><i class="far fa-user-circle"></i></a>

                                     <!--====== Dropdown ======-->

                                     <span class="js-menu-toggle"></span>
                                     <ul>



                                         <li>

                                             <a target="_blank" href="<?= base_url('Mahasiswa') ?>"><i class="fas fa-user u-s-m-r-6"></i>

                                                 <span>Akun</span></a>
                                         </li>


                                         <li>

                                             <a href="<?= base_url('front/logout') ?>"><i class="fas fa-lock-open u-s-m-r-6"></i>

                                                 <span>Keluar</span></a>
                                         </li>



                                     </ul>


                                     <!--====== End - Dropdown ======-->
                                 </li>
                             <?php
                                } else {


                                ?>
                                 <li>

                                     <a href="<?= base_url('User') ?>"><i class="far fa-user-circle"></i></a>
                                 </li>
                             <?php

                                }
                                ?>

                             <li>

                                 <a href="<?= base_url('Home') ?>"><i class="fas fa-home u-c-brand"></i></a>
                             </li>






                             <li>
                                 <a href="<?= base_url('Home/about') ?>"><i class="fas fa-info-circle"></i></a>
                             </li>




                         </ul>
                         <!--====== End - List ======-->
                     </div>
                     <!--====== End - Menu ======-->
                 </div>
                 <!--====== End - Dropdown Main plugin ======-->
             </div>
             <!--====== End - Primary Nav ======-->
         </div>
     </nav>
     <!--====== End - Nav 1 ======-->



 </header>
 <!--====== End - Main Header ======-->