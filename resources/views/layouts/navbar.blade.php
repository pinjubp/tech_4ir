@php
    $category = DB::table('categories')
                    ->Join('products','categories.id','=','products.category_id')                                                                                
                    ->whereNotNull('products.category_id')
                    ->select('categories.*')                                         
                    ->groupBy('products.category_id')                                      
                    ->get();

                    $brand = DB::table('brands')->get();
@endphp

<!--endnavbar-->

<nav id="navbar" class="navbar navbar-expand-lg navbar-dark  bg-primary">
  <div class="container">
   
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="{{ route('home') }}">Home</a>
        </li>
        
        <li class="nav-item">
          <a class="nav-link" href="{{ route('fronted.contact') }}">Service</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{ route('fronted.contact') }}">About</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{ route('fronted.contact') }}">Contact</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Category
          </a>
          <ul class="dropdown-menu" >              
            @foreach ($category as $item)
              <li><a class="dropdown-item" href="{{ route('search.category.product',$item->id) }}">{{ $item->category_name  }}</a></li>
            @endforeach                
          </ul>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Brand
          </a>
          <ul class="dropdown-menu" >              
            @foreach ($brand as $item)
              <li><a class="dropdown-item" href="{{ route('search.category.product',$item->id) }}">{{ $item->brand_name  }}</a></li>
            @endforeach                
          </ul>
        </li>
      </ul>  
        
    </div>
  </div>
</nav>