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
                 
                  


               {!!$data->description !!}




                </div>
            </div>
        
        <!-- page-title end -->


        <!-- error-section -->
        
          
        <br/>
        <br/>      
        <p style="border: 20px;">
                    
                    <a  href="#" class="theme-btn btn-one">Apply Today</a>
</p>

<br/>
<br/>
<br/>
              
        </section>
        <!-- error-section end -->
         @endsection
