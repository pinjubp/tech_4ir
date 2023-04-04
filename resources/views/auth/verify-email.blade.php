@extends('layouts.app')
@section('content')

    <div class="container  p-3 mt-3 mb-3" >
        <div class="row">
            <div class="col-md-12">
                <div class="alert alert-success" role="alert">
                    Before continuing, could you verify your email address by clicking on the link we just emailed to you? If you didn\'t receive the email, we will gladly send you another.
                </div> 
                @if (session('status') == 'verification-link-sent')
                    <div class="alert alert-success" role="alert">
                        A new verification link has been sent to the email address you provided in your profile settings.
                    </div>                    
                @endif
                <form method="POST" action="{{ route('verification.send') }}">
                    @csrf            
                    <div>
                        <input type="submit" class="btn btn-primary mx-auto d-block" value="Resend Verification Email">                        
                    </div>
                </form>
                {{-- <a href="{{ route('profile.show') }}" class="btn btn-secondary mx-auto d-block  mt-3 mb-3" style="width: 200px;"> Edit Profile</a> --}}

                <form method="POST" action="{{ route('logout') }}" class="inline">
                    @csrf                            
                    <input type="submit" class="btn btn-primary mx-auto d-block" value="Log Out">
                </form>
               
            </div>
        </div>
    </div>
@endsection