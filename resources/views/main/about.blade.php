@extends('layouts.app')

@section('title')
    Orolinks Lingua
@endsection

@section('content')
    <div class="container">
      <h1 style="text-align: left;">About</h1>
        <div class="bd-example m-0 border-0">

          <nav>
            <div class="nav nav-tabs mb-3" id="nav-tab" role="tablist">
              <button class="nav-link active" id="nav-home-tab" data-bs-toggle="tab" data-bs-target="#nav-home" type="button" role="tab" aria-controls="nav-home" aria-selected="true">About</button>
              <button class="nav-link" id="nav-profile-tab" data-bs-toggle="tab" data-bs-target="#nav-profile" type="button" role="tab" aria-controls="nav-profile" aria-selected="false">Mission</button>
              <button class="nav-link" id="nav-contact-tab" data-bs-toggle="tab" data-bs-target="#nav-contact" type="button" role="tab" aria-controls="nav-contact" aria-selected="false">Vision</button>
            </div>
          </nav>
          <div class="tab-content" id="nav-tabContent">
            <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
              <div class="col">
                <div class="card">
                  <div class="card-header" style="text-align:right;">
                    Featured
                  </div>
                  <div class="card-body">
                    <p style="text-align:left;">
                      We are a start-up ESL company that aims to build a better foundation for delivering excellent and quality services to our clientele in the ESL industry. To enable the non-English speakers to speak English with fluency and enable them to come along with native English speakers in different aspects of life. We are not just committed to delivering outstanding services to our clients but also to generating job opportunities in our community. This dual focus not only positions our company as a valuable service provider but also as a vital contributor to local economic development. By prioritizing excellence in your offerings, we set a high standard for the customer experience, ensuring that every interaction with your brand is positive and memorable.
                    </p>
                  </div>
                </div>
              </div>
            </div>

            <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
              <div class="col">
                <div class="card">
                  <div class="card-header" style="text-align:right;">
                    Featured
                  </div>
                  <div class="card-body">
                    <p style="text-align:left;">
                      <b><i>Orolinks Lingua</i></b>  is dedicated tp providing high-quality language services to its clients around the world, with a focus on improving the English communication skills of non-native speakers. We uphold high standards to ensure that every interaction with our brand is positive and memorable.
                    </p>
                  </div>
                </div>
              </div>
            </div>

            <div class="tab-pane fade" id="nav-contact" role="tabpanel" aria-labelledby="nav-contact-tab">
              <div class="col">
                <div class="card">
                  <div class="card-header" style="text-align:right;">
                    Featured
                  </div>
                  <div class="card-body">
                    <p style="text-align:left;">
                      We envision a future where language learning is not just a means of communication, but a gateway to boundless opportunities. Our commitment lies not only in providing exceptional services to our clients but also in creating sustainable job opportunities within our community. By empowering individuals with language skills, we aim to bridge cultural divides and empower communities to thrive in an increasingly interconnected world.
                    </p>
                  </div>
                </div>
              </div>
            </div>
          </div>

        </div>
    </div>
@endsection


{{-- @extends('layouts.footer') --}}
{{-- @section('footer') --}}
