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
                              <li class="splide__slide">
                                  <div class="row p-3">
                                      <div class="col-lg-5">
                                          <img src="{{asset('img/Barry-DeSemple.jpg')}}">
                                      </div>
                                        <div class="col-lg-7 pt-5">
                                            <blockquote>
                                                The culture here at Acra has allowed me to expand my role based on my past experience. I have been encouraged to apply my background as a commercial real estate broker in various ways. Management is not shy about approaching me for that perspective, and some of my input became part of our lending guidelines. It's frankly quite gratifying to be valued like this. I also very much appreciate that this is such a communicative organization. Even the most senior leaders are available for direct contact. Despite being a fully remote employee, I don't feel 'remote' from my team or the company at all.
                                            </blockquote>
                                            <h4 class="mt-5 mb-2">Barry DeSemple</h4>
                                            <h6>Underwriter IV</h6>
                                        </div>
                                  </div>
                              </li>
                  
                              <li class="splide__slide">
                                <div class="row p-3">
                                    <div class="col-lg-5">
                                        <img src="{{asset('img/Shabbie-Hutton.jpg')}}">
                                    </div>
                                      <div class="col-lg-7 pt-5">
                                          <blockquote>
                                              The most unique thing about my job here at the company is the constant opportunity to learn something new and grow. The company’s drive to remain the leader in the industry allows for us to adapt quickly to new markets and provide new products and processes to ensure we can meet the challenges ahead. I am proud to be a part of a company that has such a willingness to evolve and that takes the time to pay attention, not only to the industry but its employees as well.        
                                          </blockquote>
                                          <h4 class="mt-5 mb-2">Shabbie Hutton</h4>
                                          <h6>Learning and Development Trainer</h6>
                                      </div>
                                </div>
                              </li>
                  
                              <li class="splide__slide">
                                <div class="row p-3">
                                    <div class="col-lg-5">
                                        <img src="{{asset('img/Grace-Francuz.jpg')}}">
                                    </div>
                                      <div class="col-lg-7 pt-5">
                                          <blockquote>
                                              I started my job with the company the day after I graduated college. I had a clear vision and purpose that I wanted to gain experience and improve my skills right away. The company, along with my manager, helped establish goals that aligned with my strengths and interest for the future. This company highly focuses on mentoring and training their employees which has definitely helped with my professional development. Throughout the two years I have worked here, my department established a job rotation. This allowed me to enhance my knowledge of HR and get a better understanding of the business. Lastly, I am excited to say that my experience, so far, the management team has wanted me to continue my education and get my SHRM certification.
                                          </blockquote>
                                          <h4 class="mt-5 mb-2">Grace Francuz</h4>
                                          <h6>Human Resource Generalist</h6>
                                      </div>
                                </div>
                              </li>
                  
                              <li class="splide__slide">
                                <div class="row p-3">
                                    <div class="col-lg-5">
                                        <img src="{{asset('img/Ngoc-Van.jpg')}}">
                                    </div>
                                      <div class="col-lg-7 pt-5">
                                          <blockquote>
                                              Everyone believes what we are doing helps our customers, but no one forgets that we have families and friends outside of Acra Lending that are just as important. The team is understanding, supportive and encourages a good work-life balance.        
                                          </blockquote>
                                          <h4 class="mt-5 mb-2">Ngoc Van</h4>
                                          <h6>Loan Processor</h6>
                                      </div>
                                </div>
                              </li>
                  
                              <li class="splide__slide">
                                <div class="row p-3">
                                    <div class="col-lg-5">
                                        <img src="{{asset('img/John-Nguyen.jpg')}}">
                                    </div>
                                      <div class="col-lg-7 pt-5">
                                          <blockquote>
                                              We have a very employee-focused environment. Our managers and team leads will often discuss career development with us and offer opportunities to connect with people who can give us firsthand information about a role or experience. We also have monthly in-house classes for a multitude of topics so there's always plenty of development opportunities.        
                                          </blockquote>
                                          <h4 class="mt-5 mb-2">John Nguyen</h4>
                                          <h6>Digital Marketing Specialist</h6>
                                      </div>
                                </div>
                              </li>
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