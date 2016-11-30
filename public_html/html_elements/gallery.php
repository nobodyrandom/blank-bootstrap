
<div class="section gallery-content">
    <div class="container gallery1">
        <div class="row">
            <div class="col-lg-12 text-center">

                <div class="gallery">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="gallery-item">
                                <div class="hover-bg">
                                    <a href="#nob-lb-gallery" data-slide-to="0" data-toggle="modal">
                                        <img src="//placehold.it/800x500" class="img-responsive img-rounded img-centered">
                                    </a>
                                </div>
                            </div>

                            <div class="gallery-item">
                                <div class="hover-bg">
                                    <a href="#nob-lb-gallery" data-slide-to="3" data-toggle="modal">
                                        <img src="//placehold.it/700x103" class="img-responsive img-rounded img-centered">
                                    </a>
                                </div>
                            </div>

                        </div>

                        <div class="col-md-4">
                            <div class="gallery-item">
                                <div class="hover-bg">
                                    <a href="#nob-lb-gallery" data-slide-to="1" data-toggle="modal">
                                        <img src="//placehold.it/800x501" class="img-responsive img-rounded img-centered">
                                    </a>
                                </div>
                            </div>

                            <div class="gallery-item">
                                <div class="hover-bg">
                                    <a href="#nob-lb-gallery" data-slide-to="4" data-toggle="modal">
                                        <img src="//placehold.it/700x104" class="img-responsive img-rounded img-centered">
                                    </a>
                                </div>
                            </div>

                        </div>

                        <div class="col-md-4">
                            <div class="gallery-item">
                                <div class="hover-bg">
                                    <a href="#nob-lb-gallery" data-slide-to="2" data-toggle="modal">
                                        <img src="//placehold.it/800x502" class="img-responsive img-rounded img-centered">
                                    </a>
                                </div>
                            </div>

                            <div class="gallery-item">
                                <div class="hover-bg">
                                    <a href="#nob-lb-gallery" data-slide-to="5" data-toggle="modal">
                                        <img src="//placehold.it/700x105" class="img-responsive img-rounded img-centered">
                                    </a>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<!-- Lightbox -->
<div id="nob-lb-gallery" class="modal fade carousel slide carousel-fit" tabindex="-1" role="dialog"
     aria-labelledby="Photo Gallery"
     aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-body">
                <ol class="carousel-indicators">
                    <li data-target="#nob-lb-gallery" data-slide-to="0" class="active"></li>

                    <?php
                    for ($i = 1; $i < 6; $i++) {
                        echo '<li data-target="#nob-lb-gallery" data-slide-to="' . $i . '" class=""></li>';
                    }
                    ?>

                </ol>
                <div class="carousel-inner">
                    <div class="item active">
                        <img alt="" src="//placehold.it/800x500">
                    </div>

                    <?php
                    for ($i = 1; $i < 6; $i++) {
                        echo '<div class="item"><img alt="" src="//placehold.it/800x50'.$i.'"></div>';
                    }
                    ?>
                </div>

                <a class="left carousel-control" href="#nob-lb-gallery" data-slide="prev"></a>
                <a class="right carousel-control" href="#nob-lb-gallery" data-slide="next"></a>
            </div>
        </div>
    </div>
</div>
