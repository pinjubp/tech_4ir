@if(Session::has('success'))                


<div class="alert alert-success  alert-dismissable">
    {{Session::get('success')}}
    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button> 
</div>
@endif 
@if(Session::has('error'))                


<div class="alert alert-danger  alert-dismissable">
    {{Session::get('error')}}
    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button> 
</div>
@endif
@if(Session::has('warning'))                   

<div class="alert alert-warning  alert-dismissable">
    {{Session::get('warning')}}
    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button> 
</div>
@endif 
@if(Session::has('info'))                    

<div class="alert alert-info  alert-dismissable">
    {{Session::get('info')}}
    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button> 
</div>
@endif 