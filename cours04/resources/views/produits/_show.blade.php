<section class="inner-section shop-part">
    <div class="container bg-white">
        <div class="row content-reverse">
            <div class="col-lg-12">
                <div class="row flex-lg-row-reverse align-items-center g-5 py-5">
                    <div class="col-10 col-sm-8 col-lg-6">
                        @if ($carte->imagePath)
                        <img src="{{ asset($carte->imagePath) }}"
                            class="d-block mx-lg-auto img-fluid" alt="" width="700" height="500"
                            loading="lazy">

                        @else
                        <img src="{{ asset('images/produits/image-non-disponible.jpg') }}"
                            class="d-block mx-lg-auto img-fluid" alt="" width="700" height="500"
                            loading="lazy">
                        @endif

                    </div>
                    <div class="col-lg-6">
                        <h1 class="display-5 fw-bold text-body-emphasis lh-1 mb-3">
                            {{$carte->nom}}
                        </h1>
                        <p class="lead">
                            {{$carte->description}}
                        </p>
                        <div class="d-grid d-md-flex justify-content-md-start mt-3 gap-2">
                            <button type="button" class="btn btn-success btn-lg me-md-2 px-4">
                                Acheter
                            </button>
                            <button type="button" class="btn btn-outline-success btn-lg px-4">
                                Retour
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
