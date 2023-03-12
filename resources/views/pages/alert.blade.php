@if(Session::has('success'))                

<div class="alert hidealert alert-success alert-dismissible fade show" role="alert">    
    {{Session::get('success')}}
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>
@endif 
@if(Session::has('error'))                

<div class="alert hidealert alert-error alert-dismissible fade show" role="alert">    
    {{Session::get('error')}}
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>
@endif
@if(Session::has('warning'))                   
<div class="alert hidealert alert-warning alert-dismissible fade show" role="alert">    
    {{Session::get('warning')}}
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>
@endif 
@if(Session::has('info'))                    
<div class="alert hidealert alert-info alert-dismissible fade show" role="alert">    
    {{Session::get('info')}}
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>
@endif 