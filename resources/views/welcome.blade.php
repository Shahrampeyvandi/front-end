<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
       
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="{{ asset('css/normalize.css') }}">
        <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
       <link rel="stylesheet" type="text/css" href="{{ asset('css/app.css') }}">

               

        <!-- Styles -->
       
    </head>
    <body>
      @include('header.header')




      <section id="banner">
          
          
      </section>




       <div class="section">
           <div class="container">
               <div class="row" >
                 
                      {{-- left --}}
                  <div class="col-md-8">
                     <div class="left text-right">
                          <h5 class="card_title"><a href="#">عنوان</a></h5>
                      <p class="card_paragraph">
                          لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است و برای شرایط فعلی تکنولوژی مورد نیاز و کاربردهای متنوع با هدف بهبود ابزارهای کاربردی می باشد
                      <a href="{{ url('/show') }}"> <img width="5px" src="{{ asset('images/left-arrow.png') }}">  ادامه مطلب</a>
                      </p>


                      <div class="card_footer">
                            <div >
                                مرداد 1398
                                <img width="9px" src="{{ asset('images/clock.png') }}">
                           
                            </div>
                            <div>
                                dddddd
                            </div>
                      </div>
                     </div>
                  </div>
                   
                       {{-- right --}}
                  <div class="col-md-4">
                      
                     <div class="right">
                          <img  class="img-fluid" src="{{ asset('images/yoga.jpg') }}">
                     </div>
                      
                  </div>
                 
                 
              
               </div>
              @include('partials.prices')
           </div>
       </div>

    </body>
</html>
