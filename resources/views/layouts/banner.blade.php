<div id="myCarousel" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-indicators">
      <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
      <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
      <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
    </div>
    <div class="carousel-inner">
      
      @foreach ($introdata as $data)
        <div class="carousel-item @if ($data->id == 1) active @endif">
           
         
        <img src="{{ (!empty($data->banner ))?
          url('upload/intro_img/'.$data->banner):url('upload/no_image.jpg')   }}" class=" img-fluid w-100 h-auto"  alt="">
        <div class="container">
          <div class="carousel-caption">
            <h1>{{ $data->introduction }}</h1>
            <p>{!! $data->intro_details !!}</p>
            <p><a class="btn btn-lg btn-primary" href="{{ route('item.detail',$data->link)  }}">Learn more</a></p>
          </div>
        </div>
      </div>
      @endforeach            
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#myCarousel" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#myCarousel" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>