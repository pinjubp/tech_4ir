@extends('layouts.app')
@section('content')
<section id="contact" class="get-started mt-5 mb-5">
    <div class="container">
      <div class="row text-center">
        <h2 class="display-3 fw-bold">Get Started</h2>
        <div class="heading-line mb-5"></div>  
          <p class="lead">
          Lorem ipsum dolor sit amet consectetur adipisicing elit.
           Sint porro temporibus distinctio.
          </p>
      </div>
      @include('pages.alert')
      <!-- start the cta contaent -->
      <div class="row  mt-5">
        <div class="col-12 col-lg-6 gradient shadow p-3" data-aos="fade-right">
            <div class="cta-info w-100">
              <h4 class="display-4 fw-bold">{{ $contactintro[0]->contact_intro }}</h4>
              {!! $contactintro[0]->contact_details  !!}

            </div>
        </div>
        <div class="col-12 col-lg-6 bg-white shadow p-3" data-aos="fade-left">
            <div class="form w-100 pb-2">
              <h3 class="display-3--title mb-5">send your queries</h3>

                <form method="POST" action="{{ route('contact.store') }}" class="row">
                  @csrf
                    <div class="col-lg-6 col-md-6 mb-3">
                      <input type="text" placeholder="First Name" id="name" name="name" class="shadow form-control form-control-lg">
                      @error('name')   
                          <span class="text-danger">{{ $message }}</span>    
                      @enderror
                    </div>
                    <div class="col-lg-6 col-md-6 mb-3">
                      <input type="phone" placeholder="phone" id="phone" name="phone" class="shadow form-control form-control-lg">
                    </div>
                    <div class="col-lg-12 mb-3">
                      <input type="email" placeholder="Email" id="email" name="email" class="shadow form-control form-control-lg">
                      @error('email')   
                          <span class="text-danger">{{ $message }}</span>    
                      @enderror
                    </div>
                    <div class="col-lg-12 mb-3">
                      <textarea placeholder="Message" name="message" id="message" class="shadow form-control form-control-lg"  rows="8"></textarea>
                      @error('message')   
                          <span class="text-danger">{{ $message }}</span>    
                      @enderror
                    </div>
                    <div class="text-center d-grid mt-1">
                        {{-- <button type="button" class="shadow btn btn-primary rounded-pill pt-3 pb-3">
                          Submit
                          <a href="#"><i class="fas fa-paper-plane"></i></a></i>
                        </button> --}}
                        <input type="submit" class="shadow btn btn-primary rounded-pill pt-3 pb-3" value="Submit">
                    </div>
                </form>
            </div>
        </div>
      </div>
    </div>
  </section>    
@endsection