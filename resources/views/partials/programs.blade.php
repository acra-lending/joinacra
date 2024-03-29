{{ header('Access-Control-Allow-Origin: https://joinacralending.com') }}
<style>
    .progress { position:relative; width:100%; background-color: var(--gray-color); height: 20px; }
    .bar { background-color: var(--primary-color); width:0%; height:40px; }
    .percent { position:absolute; display:inline-block; left:50%; top:50%; color: #fff;}
</style>
<section class="about-section" id="programs">
    <img src="{{ asset('/img/Acra-Icon-White-01.svg') }}" alt="acra-icon">
    <div class="container pt-5 pb-1">
        <div class="row">
            <div class="col-lg-6 col-md-6 com-sm-12 px-5">
                <div>
                    <h2 class="text-white mb-4 pb-2">Why work for us?</h2>
                    <p class="text-white" style="font-size: 0.95rem; line-height: 1.5rem;">
                        We're building one of the strongest independent growing companies across America, and we are always on the lookout for ambitious, talented, and motivated individuals to join our thriving team! We are a team-first culture that ensures every employee has the opportunity to grow and learn.
                    </p>
                </div>
                <div class="p-4 mb-4" style="background-color: rgba(0, 32, 92, 0.8)">
                    <h2 class="text-white mb-4 pb-2">Current Job Openings</h2>
                    <p class="text-white mb-4" style="font-size: 0.95rem; line-height: 1.5rem;">
                        Job positions are available across our offices in California, Florida, Georgia, Oregon, and Utah; including positions but not limited to:
                    </p>
                        <ul class="text-white">
                            <li class="list-unstyled p-1">Underwriters</li>
                            <li class="list-unstyled p-1">Account Executives</li>
                            <li class="list-unstyled p-1">Transaction Managers</li>
                            <li class="list-unstyled p-1">Funders</li>
                            <li class="list-unstyled p-1">Appraisers</li>
                            <li class="list-unstyled p-1">Compliance</li>
                        </ul>
            </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12" id="form">
                <div class="box p-4">
                    <div class="mx-auto text-left">
                        {{ Form::open(['action' => 'App\Http\Controllers\FormController@submit', 'method' => 'POST', 'enctype' => 'multipart/form-data']) }}
                        @if(count($errors) > 0)
                            @foreach($errors->all() as $error)
                                <div class="alert alert-light bg-danger">
                                    {{ $error }}
                                </div>
                            @endforeach
                        @endif
                        <div class="container">
                            <h2 class="py-2 text-center font-weight-bold" style="color: var(--primary-color);">Get More Information</h2>
                            
                                <div class="col-sm-12">
                                    <input id="first_name" maxlength="40" name="first_name" size="20" type="text" placeholder="First Name" required />
                                </div>
                                <div class="col-sm-12">
                                    <input id="last_name" maxlength="80" name="last_name" size="20" type="text" placeholder="Last Name" required />
                                </div>
                                <div class="col-sm-12">
                                    <input id="phone" maxlength="40" name="phone_number" size="20" type="text" placeholder="Phone" required />
                                @if($errors->has('message'))
                                <div class="error">{{message}}</div>
                                @endif
                                </div>
                                <div class="col-sm-12">
                                    <input id="email" maxlength="80" name="email" size="20" type="email" placeholder="Email" required />
                                </div>
                                <div class="col-sm-12">
                                    <input id="referral" maxlength="80" name="referral" size="20" type="text" placeholder="Referred by" />
                                </div>
                                <div class="col-sm-12">
                                    <select style="color: gray; font-size: 16px; padding-left: 0;" class="form-control mb-2" name="interested_in" title="interested_in" required >
                                        <option disabled selected value>I'm interested in...</option>
                                        <option value="Account Executive">Account Executive</option>
                                        <option value="Transaction Manager">Transaction Manager</option>
                                        <option value="Underwriter">Underwriter</option>
                                        <option value="Appraiser">Appraiser</option>
                                        <option value="Compliance">Compliance</option>
                                        <option value="Other">Other</option>
                                    </select>
                                </div>
                                <div class="col-sm-12">
                                        <label for="attachment" class="col-form-label-sm" style="color: var(--gray-color);">Upload Resume (optional)</label>
                                </div>
                                <div class="col-sm-6">
                                        <label for="file-upload" class="form-label custom-file-upload btn btn-small text-white">Choose File</label>
                                        <input type="file" id="file-upload" name="attachment" class="form-control mb-2">
                                </div>
                                <div class="col-sm-12 pt-1">
                                    {!! htmlFormSnippet() !!}
                                </div>
                                <div class="row mt-2 pt-3">
                                    <div class="container">
                                        <div class="col-12">
                                            <button type="submit" class="btn btn-primary float-right mb-2 shadow-lg" style="border-radius: 0px; width: 100%; font-size: 1.25rem;" name="submit">Submit</button> 
                                            <div class="progress mt-3" hidden>
                                                <div class="bar"></div>
                                                <div class="percent">0%</div>
                                            </div>
                                            <p class="complete" style="padding-top: 1rem; line-height: 1.5rem;"></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        {{ Form::close() }}
                    </div>    
                </div>
            </div>
        </div>
    </div>
</section>
<script>
    $('#file-upload').change(function() {
  var i = $(this).prev('label').clone();
  var file = $('#file-upload')[0].files[0].name;
  $(this).prev('label').text(file);
});
</script>