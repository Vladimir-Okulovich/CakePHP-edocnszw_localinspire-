<div id="answersuccesmodal" class="js-modal-window u-modal-window" style="width: 620px;">
    <div class="card mb-9">
        <!-- Header -->
        <header class="bg-white mt-3 py-3 px-5">
            <div class="d-flex justify-content-between align-items-center">
                <h3 class="h6 bold mb-0">Answer submitted successfully</h3>

                <button type="button" class="close text-darker" aria-label="Close" onclick="Custombox.modal.close();">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
        </header>
        <!-- End Header -->

        <div class="card-body bg-white">

            <!-- Process Section -->
            <div class="container">
                <div class="row">
                    <div class="col-md-12 mb-12 mb-md-0">
                        <!-- Process -->
                        <div class="text-center">
                            <div class="position-relative">
                                <div id="SVGcircleProcess4" class="svg-preloader min-height-155 mb-2">
                                    <!-- Icon -->
                                    <span class="text-primary btn btn-lg btn-icon mt-7">
                                        <span class="fab fa-whmcs font-size-6 btn-icon__inner btn-icon__inner-bottom-minus"></span>
                                    </span>
                                    <!-- End Icon -->

                                    <!-- SVG Shape -->
                                    <figure class="w-100 position-absolute top-0 right-0 left-0 z-index-n1">
                                        <img class="js-svg-injector" src="<?= $this->Url->build('/', ['fullBase' => true]); ?>circle-process-1.svg" alt="Image Description" data-parent="#SVGcircleProcess4">
                                    </figure>
                                    <!-- End SVG Shape -->
                                </div>

                                <h2 class="h4 font-weight-semi-bold text-primary">Thank you for your answer!</h2>
                                <p class="mb-10"></p>
                            </div>
                            <!-- End Process -->
                        </div>
                    </div>
                    <!-- End Process Section -->
                </div>
            </div>
            <!-- End Report Success Modal Window -->
        </div>
    </div>
</div>