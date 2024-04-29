@extends('layouts.app')

@section('title')
    Orolinks Lingua
@endsection

@section('content')
    <div class="container"> 

      <main>
        <div class="py-5 text-center">
          {{-- <img class="d-block mx-auto mb-4" src="{{ asset('images/logo v3.0.png') }}" alt="" width="300" height="150"> --}}
          <h2>Registration form</h2>

        <div class="row g-5">
          <div class="col-md-2 col-lg-2"></div>
          <div class="col-md-8 col-lg-8">
            <form class="needs-validation" novalidate>
              @csrf
              <div class="row g-3">
                <div class="col-sm-6">
                  <input type="text" class="form-control" id="firstName" placeholder="First Name" value="" required>
                  <div class="invalid-feedback">
                    Valid first name is required.
                  </div>
                </div>

                <div class="col-sm-6">
                  <input type="text" class="form-control" id="lastName" placeholder="Last Name" value="" required>
                  <div class="invalid-feedback">
                    Valid last name is required.
                  </div>
                </div>

                <div class="col-sm-6">
                  <input type="number" class="form-control" id="lastName" placeholder="Age" value="" required>
                  <div class="invalid-feedback">
                    Valid last age is required.
                  </div>
                </div>

                <div class="col-sm-6">
                  <select class="form-select" aria-label="Default select example">
                    <option selected>Gender</option>
                    <option value="1">Male</option>
                    <option value="2">Female</option>
                  </select>
                  <div class="invalid-feedback">
                    Valid Age is required.
                  </div>
                </div>

                <div class="col-12">
                  <div class="input-group has-validation">
                    <span class="input-group-text">@</span>
                    <input type="text" class="form-control" id="username" placeholder="Username" required>
                  <div class="invalid-feedback">
                      Your username is required.
                    </div>
                  </div>
                </div>

                <div class="col-12">
                  <input type="email" class="form-control" id="email" placeholder="Email" required>
                  <div class="invalid-feedback">
                    Please enter a valid email address for shipping updates.
                  </div>
                </div>

                <div class="col-12">
                  <input type="text" class="form-control" id="address" placeholder="Address" required>
                  <div class="invalid-feedback">
                    Please enter your address.
                  </div>
                </div>

                <div class="col-md-5">
                  <input type="text" class="form-control" id="country" placeholder="Country" required>
                  <div class="invalid-feedback">
                    Please select a valid country.
                  </div>
                </div>

                <div class="col-md-4">
                  <input type="text" class="form-control" id="state" placeholder="State" required>
                  <div class="invalid-feedback">
                    Please provide a valid state.
                  </div>
                </div>

                <div class="col-md-3">
                  <input type="text" class="form-control" id="zip" placeholder="Zip Code" required>
                  <div class="invalid-feedback">
                    Zip code required.
                  </div>
                </div>
              </div>

              <hr class="my-4">

              <div class="col-md-12" style="text-align:left">
                    <p>
                      <h5>Promotions:</h5>
                    </p>
                    <p>
                      One(1) free class per student referral.
                    </p>
              </div>

              <hr class="my-4">

              <h4 class="mb-3">Payment</h4>

              <div class="col-md-4" style="text-align: left;">
                <div class="form-check">
                  <input id="credit" name="paymentMethod" type="radio" class="form-check-input" checked required>
                  <label class="form-check-label" for="credit">Paypal</label>
                </div>
                <div class="form-check">
                  <input id="debit" name="paymentMethod" type="radio" class="form-check-input" required>
                  <label class="form-check-label" for="debit">Wire Transfer</label>
                </div>
                <div class="form-check">
                  <input id="paypal" name="paymentMethod" type="radio" class="form-check-input" required>
                  <label class="form-check-label" for="paypal">Other</label>
                </div>
              </div>

                <hr class="my-4">

                <div class="form-check" style="text-align: left;">
                  <input id="paypal" name="paymentMethod" type="radio" class="form-check-input" required>
                  <label class="form-check-label" for="paypal">
                    I have read, understood and agreed to the information stated above.
                  </label>
                </div>

                <br>

                <button class="w-50 btn btn-primary btn-lg text-center" type="submit">Register</button>

              </div>
            </form>
          </div>
        </div>
      </main>

    </div>
@endsection


{{-- @extends('layouts.footer') --}}
{{-- @section('footer') --}}