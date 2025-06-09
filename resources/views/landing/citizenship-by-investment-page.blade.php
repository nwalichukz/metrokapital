@extends('layout.app-landing')
@section('content')
<!-- page-title -->
        <section class="page-title centred">
            <div class="bg-layer" style="{{ asset('background-image: url(assets/images/background/page-title.jpg)')}};"></div>
            <div class="pattern-layer">
                <div class="pattern-1" style="{{ asset('background-image: url(assets/images/shape/shape-18.png)')}};"></div>
                <div class="pattern-2" style="background-image: url(assets/images/shape/shape-17.png);"></div>
            </div>
            <div class="auto-container">
                <div class="content-box">
                 
                  
                <div class="image">
                    @if(!empty($image->name))
               
                    <!-- Slideshow container -->
<div class="slideshow-container">

<!-- Full-width images with number and caption text -->
<div class="mySlides fade">
  <div class="numbertext"> </div>

  <img src="{{asset('images/Property/'.$image->name)}}" alt="Property Image" style="width:100%">
  <div class="text">Property Image</div>
</div>

  <!-- Next and previous buttons -->
  <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
  <a class="next" onclick="plusSlides(1)">&#10095;</a>
</div>
<br>

<!-- The dots/circles -->
<div style="text-align:center">

</div>
                  
            
           
              @endif
            </div>

               {!!$data->description !!}




                </div>
            </div>
        
        <!-- page-title end -->


        <!-- error-section -->
        
          
        <br/>
        <br/>      
        <p style="border: 20px;">
                    
                    <a  href="{{url('/user/get-account-officer')}}" class="theme-btn btn-one">Apply Today</a>
</p>

<br/>
<br/>
<br/>
              
        </section>
        <!-- error-section end -->
         @endsection
