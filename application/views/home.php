  <!--====== App Content ======-->
  <div class="app-content">

      <!--====== Section 1 ======-->
      <div class="u-s-p-y-30">
          <div class="container">
              <div class="row">
                  <div class="col-lg-12">
                      <div class="bp u-s-m-b-30">
                          <div class="bp__wrap">

                              <div class="bp__info-wrap">


                                  <span class="bp__h1">

                                      <a href="blog-detail.html">Panduan Pkm</a></span>


                                  <div class="gl-l-r">
                                      <div>

                                          <span class="bp__read-more">

                                              <a target="_blank" href="https://drive.google.com/drive/folders/1QZyQHpp58J724D7gTUlVw2TnXFEpCPvm?usp=sharing
">Download</a></span>
                                      </div>

                                  </div>
                              </div>
                          </div>
                      </div>
                      <div class="bp bp--img u-s-m-b-30">
                          <div class="bp__wrap">

                              <div class="bp__info-wrap">

                                  <span class="bp__h1">

                                      <a href="#">Daftar Judul Pkm</a></span>
                                  <br>

                                  <div class="container">
                                      <table id="table_id" class="row-border" style="width:100%">
                                          <thead>
                                              <tr>
                                                  <th align="center">Judul</th>


                                              </tr>
                                          </thead>

                                          <tbody>
                                              <?php foreach ($param as $judul) : ?>

                                                  <tr>
                                                      <td><?= $judul->judul_proposal ?></td>

                                                  </tr>
                                              <?php endforeach ?>


                                          </tbody>
                                      </table>
                                  </div>


                                  <div class="gl-l-r">

                                  </div>
                              </div>
                          </div>
                      </div>


                  </div>
              </div>
          </div>
      </div>
      <!--====== End - Section 1 ======-->
  </div>
  <!--====== End - App Content ======-->
  <br>
  <br>

  <!--====== Main Footer ======-->
  <footer>
      <div class="outer-footer">
          <div class="container">
              <div class="row">
                  <div class="col-lg-4 col-md-6">
                      <div class="outer-footer__content u-s-m-b-40">

                          <span class="outer-footer__content-title">Kontak Kami</span>
                          <div class="outer-footer__text-wrap"><i class="fas fa-home"></i>

                              <span>Jl.Raya Rungkut Madya, Gunung Anyar, Surabaya</span>
                          </div>
                          <div class="outer-footer__text-wrap"><i class="fas fa-phone-volume"></i>

                              <span>0878 1148 8302</span>
                          </div>
                          <div class="outer-footer__text-wrap"><i class="far fa-envelope"></i>

                              <span>ecois.upnjatim@gmail.com</span>
                          </div>
                          <!-- <div class="outer-footer__social">
                            <ul>
                                <li>

                                    <a class="s-tw--color-hover" href="#"><i class="fa-brands fa-tiktok"></i></a>
                                </li>
                                <li>

                                    <a class="s-insta--color-hover" href="#"><i class="fab fa-instagram"></i></a>
                                </li>
                            </ul>
                        </div> -->
                      </div>
                  </div>
                  <!-- <div class="col-lg-4 col-md-6">
                    <div class="row">
                        <div class="col-lg-6 col-md-6">
                            <div class="outer-footer__content u-s-m-b-40">

                                <span class="outer-footer__content-title">Information</span>
                                <div class="outer-footer__list-wrap">
                                    <ul>
                                        <li>

                                            <a href="cart.html">Cart</a>
                                        </li>
                                        <li>

                                            <a href="dashboard.html">Account</a>
                                        </li>
                                        <li>

                                            <a href="shop-side-version-2.html">Manufacturer</a>
                                        </li>
                                        <li>

                                            <a href="dash-payment-option.html">Finance</a>
                                        </li>
                                        <li>

                                            <a href="shop-side-version-2.html">Shop</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6">
                            <div class="outer-footer__content u-s-m-b-40">
                                <div class="outer-footer__list-wrap">

                                    <span class="outer-footer__content-title">Our Company</span>
                                    <ul>
                                        <li>

                                            <a href="about.html">About us</a>
                                        </li>
                                        <li>

                                            <a href="contact.html">Contact Us</a>
                                        </li>
                                        <li>

                                            <a href="index.html">Sitemap</a>
                                        </li>
                                        <li>

                                            <a href="dash-my-order.html">Delivery</a>
                                        </li>
                                        <li>

                                            <a href="shop-side-version-2.html">Store</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> -->
                  <!-- <div class="col-lg-4 col-md-12">
                    <div class="outer-footer__content">

                        <span class="outer-footer__content-title">Join our Newsletter</span>
                        <form class="newsletter">
                            <div class="u-s-m-b-15">
                                <div class="radio-box newsletter__radio">

                                    <input type="radio" id="male" name="gender">
                                    <div class="radio-box__state radio-box__state--primary">

                                        <label class="radio-box__label" for="male">Male</label>
                                    </div>
                                </div>
                                <div class="radio-box newsletter__radio">

                                    <input type="radio" id="female" name="gender">
                                    <div class="radio-box__state radio-box__state--primary">

                                        <label class="radio-box__label" for="female">Female</label>
                                    </div>
                                </div>
                            </div>
                            <div class="newsletter__group">

                                <label for="newsletter"></label>

                                <input class="input-text input-text--only-white" type="text" id="newsletter" placeholder="Enter your Email">

                                <button class="btn btn--e-brand newsletter__btn" type="submit">SUBSCRIBE</button>
                            </div>

                            <span class="newsletter__text">Subscribe to the mailing list to receive updates on
                                promotions, new arrivals, discount and coupons.</span>
                        </form>
                    </div>
                </div> -->
              </div>
          </div>
      </div>
      <div class="lower-footer">
          <div class="container">
              <div class="row">
                  <div class="col-lg-12">
                      <div class="lower-footer__content">
                          <div class="lower-footer__copyright">

                              <span>Copyright © 2022</span>

                              <a href="index.html">ECOIS UPN JATIM</a>

                              <span>All Right Reserved</span>
                          </div>

                      </div>
                  </div>
              </div>
          </div>
      </div>
  </footer>

  <!--====== Modal Section ======-->



  <!--====== End - Newsletter Subscribe Modal ======-->
  <!--====== End - Modal Section ======-->
  </div>
  <!--====== End - Main App ======-->


  <!--====== Google Analytics: change UA-XXXXX-Y to be your site's ID ======-->

  <script src="https://www.google-analytics.com/analytics.js" async defer></script>

  <!--====== Vendor Js ======-->
  <script src="<?php echo base_url(); ?>assets/client/js/vendor.js"></script>

  <!--====== jQuery Shopnav plugin ======-->
  <script src="<?php echo base_url(); ?>assets/client/js/jquery.shopnav.js"></script>

  <!--====== App ======-->
  <script src="<?php echo base_url(); ?>assets/client/js/app.js"></script>
  <script src="https://code.jquery.com/jquery-1.10.2.js"></script>
  <script src="https://code.jquery.com/ui/1.10.4/jquery-ui.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

  <script src="//cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
  <script>
      $(document).ready(function() {
          $('#table_id').DataTable();

      })
  </script>

  </body>

  </html>