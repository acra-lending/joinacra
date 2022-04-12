<style>
    .my-slider-progress {
        background: #ccc;
}

    .my-slider-progress-bar {
        background: #0033a1;
        height: 2px;
        transition: width 400ms ease;
        width: 0;
    }
    .splide__slide img {
        width: 100%;
        height: auto;
        padding: 1rem;
        border-radius: 50%;
    }
    .splide__pagination__page.is-active {
        background-color: #0033a1;
    }
    blockquote:before { 
        content: "“";
        font-weight: bold;
        font-size:100px;
        color:#0033a1;
        position: absolute;
        top: -10px;
        left: 0;
    } 
    blockquote:after { 
        content: "”";
        font-weight: bold;
        font-size:100px;
        color:#0033a1;
        position: absolute;
        bottom: 0;
        right: 0;
    }
</style>
<section class="slider-section">
    <div class="container-lg py-5">
        <div class="col-lg-12 mx-auto">
            <h2 class="font-weight-bolder mb-4" style="font-size: 2.5rem; color: var(--primary-color);">An Insider's View</h2>
        </div>
        <div class="container">
            <div class="col-lg-12">
                <div id="card-slider" class="splide">
                    <div class="splide__track">
                          <ul class="splide__list">
                            @include('partials.slider.slide7')
                            @include('partials.slider.slide1')
                            @include('partials.slider.slide2')
                            @include('partials.slider.slide3')
                            @include('partials.slider.slide4')
                            @include('partials.slider.slide6')
                          </ul>
                    </div>
                    <div class="my-slider-progress">
                        <div class="my-slider-progress-bar"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<script>
    document.addEventListener( 'DOMContentLoaded', function () {
        // new Splide( '#card-slider', {
        //         type        : 'loop',
        //         autoplay    : true,
        //         rewind      : true,
        //         pauseOnHover: true,
        //         pauseOnFocus: true,
        //         // perPage    : 1
        //         // height     : '1rem',
        // }).mount();
        var splide = new Splide( '#card-slider', {
                type        : 'loop',
                autoplay    : false,
                rewind      : true,
                pauseOnHover: false,
                pauseOnFocus: false,
                cover       : true,
        } );
        var bar    = splide.root.querySelector( '.my-slider-progress-bar' );
  
        // Update the bar width:
        splide.on( 'mounted move', function () {
            var end = splide.Components.Controller.getEnd() + 1;
            bar.style.width = String( 100 * ( splide.index + 1 ) / end ) + '%';
        } );
        
        splide.mount();

});
</script>