<!-- Content Section -->
<div class="bg-light">
  <main>
    <div class="container space-2">
      <div class="row justify-content-md-between">
        <div class="col-md-7 mb-7 mb-md-0">

          <div class="pr-md-4">
            <!-- Title -->
            <div class="mb-3">
              <h2 class="h4 text-primary font-weight-normal mb-2">Share your business with <span class="font-weight-semi-bold">family & friends</span>, invite them to visit you on localinspire!</h2>
              <p>Get your friends & family here to share their personal reviews and business photos with everyone here at localinspire.</p>
            </div>
            <!-- End Title -->

            <!-- Clipboard Input -->
            <form>
              <div class="js-focus-state mb-2">
                <div class="input-group">
                  <input id="referralLink" type="text" class="form-control" value="<?= $this->Url->build(['prefix' => false, 'controller' => 'businesses', 'action' => 'view', \Cake\Utility\Text::slug(strtolower($active_business->name)), strtolower($active_business->city->name), $active_business->city->state->code, $active_business->id], ['fullBase' => true]); ?>">
                  <div class="input-group-append">
                    <a class="js-clipboard input-group-text" href="javascript:;" data-content-target="#referralLink" data-class-change-target="#linkIcon" data-default-class="fas fa-clone" data-success-class="fas fa-check">
                      <span id="linkIcon" class="fas fa-clone"></span>
                    </a>
                  </div>
                </div>
              </div>
              <small class="form-text text-muted">Copy and share your profile page with friends!</small>
            </form>
            <!-- End Clipboard Input -->
            <div class="text-center">
              <span class="u-divider u-divider--xs u-divider--text mt-5 mb-5">Or</span>
            </div>

            <script>
              //jQuery
              $(".js-social-share").on("click", function(e) {
                e.preventDefault();

                windowPopup($(this).attr("href"), 700, 500);
              });

              // Vanilla JavaScript
              var jsSocialShares = document.querySelectorAll(".js-social-share");
              if (jsSocialShares) {
                [].forEach.call(jsSocialShares, function(anchor) {
                  anchor.addEventListener("click", function(e) {
                    e.preventDefault();

                    windowPopup(this.href, 500, 300);
                  });
                });
              }

              function windowPopup(url, width, height) {
                // Calculate the position of the popup so
                // it’s centered on the screen.
                var left = (screen.width / 2) - (width / 2),
                  top = (screen.height / 2) - (height / 2);

                window.open(
                  url,
                  "",
                  "menubar=no,toolbar=no,resizable=yes,scrollbars=yes,width=" + width + ",height=" + height + ",top=" + top + ",left=" + left
                );
              }
            </script>


            <div class="text-center">
              <!-- Sharingbutton Facebook -->
              <a href="#" data-businessid="<?= $active_business->id ?>" class="btn btn-social btn-facebook bold pr-4 mr-3" onclick="share_fb('<?= $this->Url->build(['prefix' => false, 'controller' => 'businesses', 'action' => 'view', \Cake\Utility\Text::slug(strtolower($active_business->name)), strtolower($active_business->city->name), $active_business->city->state->code, $active_business->id], ['fullBase' => true]); ?>');return false;" rel="nofollow" share_url="<?= $this->Url->build(['prefix' => false, 'controller' => 'businesses', 'action' => 'view', \Cake\Utility\Text::slug(strtolower($active_business->name)), strtolower($active_business->city->name), $active_business->city->state->code, $active_business->id], ['fullBase' => true]); ?>" target="_blank"><i class="fab fa-facebook ml-2 mr-3"></i> Share on Facebook </a>

              <script>
                function share_fb(url) {
                  saveShare({
                    business_id: "<?= $active_business->id ?>",
                    facebook: true
                  });
                  window.open('https://www.facebook.com/sharer/sharer.php?u=' + url, 'facebook-share-dialog', "width=626, height=436")
                }
              </script>
              <a class="btn btn-social btn-twitter bold pr-4 twittersharebtn" data-businessid="<?= $active_business->id ?>" target="_blank" href="https://twitter.com/intent/tweet?text=Check out my reviews and business photos on @localinspirecom Join me on localinspire and let's make our businesses great again! <?= $this->Url->build(['prefix' => false, 'controller' => 'businesses', 'action' => 'view', \Cake\Utility\Text::slug(strtolower($active_business->name)), strtolower($active_business->city->name), $active_business->city->state->code, $active_business->id], ['fullBase' => true]); ?>" data-size="large"><span class="fab fa-twitter ml-2 mr-3"></span> Share on Twitter</a></span>
            </div>
          </div>
        </div>
        <div class="col-md-5 col-lg-4">
          <!-- Stats -->
          <div class="bg-primary shadow-primary-lg rounded pt-4 pb-5 px-5">
            <!-- Title & Settings -->
            <div class="d-flex justify-content-between align-items-center">
              <h4 class="h6 text-white bold mb-0">Share stats for your business</h4>


            </div>
            <!-- End Title & Settings -->

            <hr class="opacity-md mt-3 mb-4">

            <!-- Referral Info -->
            <div class="py-2">
              <div class="row">
                <div class="col-6">
                  <div class="mb-3">
                    <span class="d-block text-white-70 font-size-1">Overall:</span>

                    <span class="text-white font-size-3 font-weight-medium text-lh-sm"><?= number_format($business_shares_all) ?></span>
                  </div>
                  <span class="text-white-70 font-size-1">This week:</span>
                  <span class="text-white font-weight-medium font-size-1"><?= number_format($business_shares_all_this_week) ?></span><br> <span class="text-white-70 font-size-1">This month:</span>
                  <span class="text-white font-weight-medium font-size-1"><?= number_format($business_shares_all_this_month) ?></span><br>
                  <span class="text-white-70 font-size-1">Last month:</span>
                  <span class="text-white font-weight-medium font-size-1"><?= number_format($business_shares_all_last_month) ?></span>
                </div>

                <div class="col-6 align-self-end">
                  <span class="d-block text-white-70 font-size-1">Facebook Shares: <?= number_format($business_shares_facebook) ?></span>
                  <span class="d-block text-white-70 font-size-1">Facebook Clicks: <?= number_format($business_facebook_clicks) ?></span>
                  <span class="d-block text-white-70 font-size-1">Twitter Shares: <?= number_format($business_shares_twitter) ?></span>
                  <span class="d-block text-white-70 font-size-1">Twitter Clicks: <?= number_format($business_twitter_clicks) ?></span>
                  <br>
                  <!-- Pie Circle -->
                  <div class="js-pie text-center" data-circles-text-class="content-centered-y" data-circles-value="<?= $business_shares_all_this_week ?>" data-circles-max-value="<?= $business_shares_all ?>" data-circles-bg-color="rgba(255, 255, 255, 0.1)" data-circles-fg-color="#ffffff" data-circles-radius="50" data-circles-stroke-width="4" data-circles-duration="2000" data-circles-scroll-animate="true" data-circles-color="#ffffff" data-circles-font-size="24"></div>
                  <!-- End Pie Circle -->
                </div>
              </div>
            </div>
            <!-- End Referral Info -->
          </div>
          <!-- End Stats -->
        </div>
        <?php if (1 == 2) { ?>
          <div class="col-md-5 col-lg-4">
            <div class="row justify-content-lg-between align-items-lg-center mb-9">
              <div class="col-md-12">
                <h4 class="text-center mt-2">Business Shares</h4>
                <div class="row justify-content-center">
                  <div class="col-md-6">

                    <!-- Stats -->
                    <div class="text-center">
                      <div class="position-relative">
                        <div class="u-indicator-dots">
                          <h4 class="display-4 text-primary mb-0"><?= number_format($business_shares_facebook) ?></h4>
                        </div>
                      </div>
                      <p class="mb-0">Facebook shares</p>
                    </div>
                    <!-- End Stats -->
                    <div class="text-center">
                      <div class="position-relative">
                        <!-- <div class="u-indicator-dots"> -->
                        <h4 class="display-4 text-primary mb-0"><?= number_format($business_facebook_clicks) ?></h4>
                        <!-- </div> -->
                      </div>
                      <p class="mb-0">Facebook clicks</p>
                    </div>
                  </div>

                  <div class="col-md-6">
                    <!-- Stats -->
                    <div class="text-center">
                      <div class="position-relative">
                        <!-- <div class="u-indicator-dots"> -->
                        <h4 class="display-4 text-primary mb-0"><?= number_format($business_shares_twitter) ?></h4>
                        <!-- </div> -->
                      </div>
                      <p class="mb-0">Twitter tweets</p>
                    </div>
                    <!-- End Stats -->
                    <div class="text-center">
                      <div class="position-relative">
                        <!-- <div class="u-indicator-dots"> -->
                        <h4 class="display-4 text-primary mb-0"><?= number_format($business_twitter_clicks) ?></h4>
                        <!-- </div> -->
                      </div>
                      <p class="mb-0">Twitter clicks</p>
                    </div>
                  </div>

                </div>
                <!-- End Stats -->
              </div>

              <!-- End Info -->
            </div>
          </div>
        <?php } ?>
        <?php if (1 == 2) { ?>
          <div class="col-md-5 col-lg-4">
            <!-- Stats -->
            <div class="bg-primary shadow-primary-lg rounded pt-4 pb-5 px-5">
              <!-- Title & Settings -->
              <div class="d-flex justify-content-between align-items-center">
                <h4 class="h6 text-white bold mb-0">Family & friend's who join via your referral</h4>


              </div>
              <!-- End Title & Settings -->

              <hr class="opacity-md mt-3 mb-4">

              <!-- Referral Info -->
              <div class="py-2">
                <div class="row">
                  <div class="col-6">
                    <div class="mb-3">
                      <span class="d-block text-white-70 font-size-1">Overall:</span>

                      <span class="text-white font-size-3 font-weight-medium text-lh-sm">50</span>
                    </div>
                    <span class="text-white-70 font-size-1">This month:</span>
                    <span class="text-white font-weight-medium font-size-1">25</span><br>
                    <span class="text-white-70 font-size-1">Last month:</span>
                    <span class="text-white font-weight-medium font-size-1">5</span>
                  </div>

                  <div class="col-6 align-self-end">
                    <!-- Pie Circle -->
                    <div class="js-pie text-center" data-circles-text-class="content-centered-y" data-circles-value="54" data-circles-max-value="100" data-circles-bg-color="rgba(255, 255, 255, 0.1)" data-circles-fg-color="#ffffff" data-circles-radius="50" data-circles-stroke-width="4" data-circles-duration="2000" data-circles-scroll-animate="true" data-circles-color="#ffffff" data-circles-font-size="24"></div>
                    <!-- End Pie Circle -->
                  </div>
                </div>
              </div>
              <!-- End Referral Info -->
            </div>
            <!-- End Stats -->
          </div>
        <?php } ?>
      </div>







      <div style="display:none">
        <hr class="my-7">
        <!-- Title -->
        <div class="row align-items-center mb-4">
          <div class="col-md-8 mb-3 mb-md-0">
            <h2 class="h5 mb-0">Suggested people to follow</h2>
            <p class="mb-0">We think these people would offer great recommendations.</p>
          </div>
          <div class="col-md-4 text-md-right">
            <a class="btn btn-sm btn-soft-primary transition-3d-hover" href="#">Show More Suggestions</a>
          </div>
        </div>
        <!-- End Title -->

        <div class="card-deck d-block d-lg-flex card-lg-gutters-2">
          <!-- Friends List -->
          <a class="card card-frame mb-3" href="#">
            <div class="card-body">
              <div class="media">
                <div class="u-avatar mr-3">
                  <img class="img-fluid rounded-circle" src="https://via.placeholder.com/100x100/img9.jpg" alt="Image Description">
                </div>
                <div class="media-body">
                  <h4 class="h6 text-dark mb-0">Patrick Garner</h4>
                  <span>Refer</span>
                </div>
              </div>
            </div>
          </a>
          <!-- End Friends List -->

          <!-- Friends List -->
          <a class="card card-frame mb-3" href="#">
            <div class="card-body">
              <div class="media">
                <span class="btn btn-icon btn-soft-primary rounded-circle mr-3">
                  <span class="btn-icon__inner">CB</span>
                </span>
                <div class="media-body">
                  <h4 class="h6 text-dark mb-0">Cameron Brown</h4>
                  <span>Refer</span>
                </div>
              </div>
            </div>
          </a>
          <!-- End Friends List -->

          <!-- Friends List -->
          <a class="card card-frame mb-3" href="#">
            <div class="card-body">
              <div class="media">
                <div class="u-avatar mr-3">
                  <img class="img-fluid rounded-circle" src="https://via.placeholder.com/100x100/img8.jpg" alt="Image Description">
                </div>
                <div class="media-body">
                  <h4 class="h6 text-dark mb-0">Gabriel Junior</h4>
                  <span>Refer</span>
                </div>
              </div>
            </div>
          </a>
          <!-- End Friends List -->
        </div>

        <div class="card-deck d-block d-lg-flex card-lg-gutters-2">
          <!-- Friends List -->
          <a class="card card-frame mb-3" href="#">
            <div class="card-body">
              <div class="media">
                <span class="btn btn-icon btn-soft-danger rounded-circle mr-3">
                  <span class="btn-icon__inner">JM</span>
                </span>
                <div class="media-body">
                  <h4 class="h6 text-dark mb-0">Joseph Mack</h4>
                  <span>Refer</span>
                </div>
              </div>
            </div>
          </a>
          <!-- End Friends List -->

          <!-- Friends List -->
          <a class="card card-frame mb-3" href="#">
            <div class="card-body">
              <div class="media">
                <div class="u-avatar mr-3">
                  <img class="img-fluid rounded-circle" src="https://via.placeholder.com/100x100/img11.jpg" alt="Image Description">
                </div>
                <div class="media-body">
                  <h4 class="h6 text-dark mb-0">Cler Lockhart</h4>
                  <span>Refer</span>
                </div>
              </div>
            </div>
          </a>
          <!-- End Friends List -->

          <!-- Friends List -->
          <a class="card card-frame mb-3" href="#">
            <div class="card-body">
              <div class="media">
                <div class="u-avatar mr-3">
                  <img class="img-fluid rounded-circle" src="https://via.placeholder.com/100x100/img9.jpg" alt="Image Description">
                </div>
                <div class="media-body">
                  <h4 class="h6 text-dark mb-0">Sean Lewis</h4>
                  <span>Refer</span>
                </div>
              </div>
            </div>
          </a>
          <!-- End Friends List -->
        </div>

        <div class="card-deck d-block d-lg-flex card-lg-gutters-2">
          <!-- Friends List -->
          <a class="card card-frame mb-3" href="#">
            <div class="card-body">
              <div class="media">
                <div class="u-avatar mr-3">
                  <img class="img-fluid rounded-circle" src="https://via.placeholder.com/100x100/img10.jpg" alt="Image Description">
                </div>
                <div class="media-body">
                  <h4 class="h6 text-dark mb-0">Olivia Charles</h4>
                  <span>Refer</span>
                </div>
              </div>
            </div>
          </a>
          <!-- End Friends List -->

          <!-- Friends List -->
          <a class="card card-frame mb-3" href="#">
            <div class="card-body">
              <div class="media">
                <span class="btn btn-icon btn-soft-success rounded-circle mr-3">
                  <span class="btn-icon__inner">JC</span>
                </span>
                <div class="media-body">
                  <h4 class="h6 text-dark mb-0">James Collins</h4>
                  <span>Refer</span>
                </div>
              </div>
            </div>
          </a>
          <!-- End Friends List -->

          <!-- Friends List -->
          <a class="card card-frame mb-3" href="#">
            <div class="card-body">
              <div class="media">
                <div class="u-avatar mr-3">
                  <img class="img-fluid rounded-circle" src="https://via.placeholder.com/100x100/img2.jpg" alt="Image Description">
                </div>
                <div class="media-body">
                  <h4 class="h6 text-dark mb-0">Amanta Owens</h4>
                  <span>Refer</span>
                </div>
              </div>
            </div>
          </a>
          <!-- End Friends List -->
        </div>
   

      <hr class="my-7">

      <!-- Title -->
      <div class="mb-3">
        <h2 class="h4">How referral works</h2>
      </div>
      <!-- End Title -->

      <!-- Icon Blocks -->
      <div class="row">
        <div class="col-md-4 mb-9 mb-md-0">
          <div class="pr-lg-4">
            <figure id="SVGanalysis" class="svg-preloader mb-3 ie-analysis">
              <img class="js-svg-injector w-75" src="<?= $this->Url->build('/svg/', ['fullBase' => true]); ?>analysis.svg" alt="Image Description" data-parent="#SVGanalysis">
            </figure>
            <h4 class="h5">Refer friends</h4>
            <p>Send referrals to your friends either here or in your app.</p>
          </div>
        </div>
        <div class="col-md-4 mb-9 mb-md-0">
          <div class="pr-lg-4">
            <figure id="SVGinTheOffice" class="svg-preloader mb-3 ie-in-the-office">
              <img class="js-svg-injector w-75" src="<?= $this->Url->build('/svg/', ['fullBase' => true]); ?>in-the-office.svg" alt="Image Description" data-parent="#SVGinTheOffice">
            </figure>
            <h4 class="h5">Follow along</h4>
            <p>Follow your friend's progress and send encouraging messages along the way.</p>
          </div>
        </div>
        <div class="col-md-4">
          <div class="pr-lg-4">
            <figure id="SVGmakeItRain" class="svg-preloader mb-3 ie-make-it-rain">
              <img class="js-svg-injector w-75" src="<?= $this->Url->build('/svg/', ['fullBase' => true]); ?>make-it-rain.svg" alt="Image Description" data-parent="#SVGmakeItRain">
            </figure>
            <h4 class="h5">Get paid</h4>
            <p>When your friend starts building, you'll get paid after their first task completion.</p>
          </div>
        </div>
      </div>
      <!-- End Icon Blocks -->
    </div> </div>
  </main>
</div>
<!-- End Content Section -->
<!-- ========== END MAIN ========== -->