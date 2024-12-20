
<x-master title=aa>

<body id="top">

  <!-- 
    - #HEADER
  -->

 





  <main>
    <article>

      <!-- 
        - #HERO
      -->

      <section class="hero" id="home">
        <div class="container">

          <h2 class="h1 hero-title">Let your dreams take flight.</h2>

          <p class="hero-text">
            The sky isn’t the limit—it’s just the beginning of your journey.

          </p>

          <div class="btn-group">
            <button class="btn btn-primary">Learn more</button>

            <a class="btn btn-secondary" href="{{route('Flight.All')}}">Book now</a>
          </div>

        </div>
      </section>





  




      <!-- 
        - #POPULAR
      -->

      <section class="popular" id="destination">
        <div class="container">

          <p class="section-subtitle"> one flight at a time</p>

          <h3 class="h2 section-title">Every journey begins with a single ticket. <p>where will yours take you?</p> </h3>

          <p class="section-text">
            Discover new horizons, one flight at a time 
          </p>

          <ul class="popular-list">
            @foreach($flights->slice(0, 3) as $flight)
            <li>
              <div class="popular-card">

                <figure class="card-img">
                  <img src="{{ asset('storage/'.$flight->imageCity) }}" alt="San miguel, italy" loading="lazy">
                </figure>

                <div class="card-content">

                  <div class="card-rating">
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                  </div>

                  <p class="card-subtitle">
                    <a href="{{route('Flight.show',$flight->id)}}">{{$flight->to_city}}</a>
                  </p>

                  <h3 class="h3 card-title">
                    <a href="#">{{$flight->to_city}}</a>
                  </h3>

                  <p class="card-text">
                    @if ($flight->is_direct === 1)
                    Direct flights
                    @else
                    Stops
                    @endif
                    {{$flight->duration}} Hour
                  </p>

                </div>

              </div>
            </li>
            @endforeach
          

           

          </ul>

          <a type="button" href="{{route('Flight.All')}}" class="btn btn-primary " style="text-align:center" value="More destintion"> 
            More destintion
          </a>
        </div>
      </section>





      <!-- 
        - #PACKAGE
      -->

      <section class="package" id="package">
        <div class="container">

          <p class="section-subtitle">Popular Flights</p>

          <h2 class="h2 section-title">Checkout Our Flights</h2>

          <p class="section-text">
            The sky isn’t the limit—it’s just the beginning of your journey.
          </p>

          <ul class="package-list">
            @foreach($flights->slice(0, 3) as $flight)
            <li>
              <div class="package-card">

                <figure class="card-banner">
                  <img src="{{ asset('storage/'.$flight->imageCity) }}" alt="Experience The Great Holiday On Beach" loading="lazy">
                </figure>

                <div class="card-content">

                  <h3 class="h3 card-title">
                     <div class="imageAirline">
                      <img src="{{ asset('storage/'.$flight->imageAirline) }}" alt="Experience The Great Holiday On Beach" loading="lazy">
                    </div>
                  </h3>

                  <p class="card-text">
                    <table>
                      <tr>
                        <th>  <ion-icon name="time"></ion-icon></th>
                        <th>{{$flight->created_at->format('D M Y')}}</th>                     
                      </tr>
                      <tr>
                        <th>  <ion-icon name="location-outline"></ion-icon></th>
                        <th>{{$flight->from_city}}</th>                    
                        <td><ion-icon name="airplane-outline" style="color:#588CD0;margin:0 30px"></ion-icon></td>
                      <th> <ion-icon name="pin-outline"></ion-icon></th>
                      <th>{{$flight->to_city}}</th> 
                    </tr>
                    <tr>
                      <th>  <ion-icon name="hourglass-outline"></ion-icon></th>
                      <td><b style="margin-right: 10px">For  :</b>{{$flight->duration}} Hour</td>                     
                    </tr>
                    </table>
                  </p>

                  <ul class="card-meta-list">

                    <li class="card-meta-item">
                      <div class="meta-box">
                        <ion-icon name="time"></ion-icon>

                        <p class="text">{{$flight->duration}}</p>
                      </div>
                    </li>

                    <li class="card-meta-item">
                      <div class="meta-box">
                        <ion-icon name="airplane-outline"></ion-icon>

                        <p class="text">
                          @if ($flight->is_direct === 1)
                          Direct flights
                          @else
                          Stops
                          @endif
                          
                        </p>
                      </div>
                    </li>

                    <li class="card-meta-item">
                      <div class="meta-box">
                        <ion-icon name="location"></ion-icon>

                        <p class="text">{{$flight->to_city}}</p>
                      </div>
                    </li>

                  </ul>

                </div>

                <div class="card-price">

                  <div class="wrapper">

                    <p class="reviews">(25 reviews)</p>

                    <div class="card-rating">
                      <ion-icon name="star"></ion-icon>
                      <ion-icon name="star"></ion-icon>
                      <ion-icon name="star"></ion-icon>
                      <ion-icon name="star"></ion-icon>
                      <ion-icon name="star"></ion-icon>
                    </div>

                  </div>

                  <p class="price">
                    ${{$flight->price}}
                    <span>/ per person</span>
                  </p>

                  <a  class="btn btn-secondary" href="{{route('Flight.show',$flight->id)}}">Book Now</a>
                 
                </div>

              </div>
            </li>

       
            

            @endforeach

          </ul>
        
       
          
          <a class="btn btn-primary" style="text-align:center" href="{{route('Flight.All')}}">View All Packages</a>

        </div>
      </section>





      




    </article>
  </main>











  <!-- 
    - #GO TO TOP
  -->

  <a href="#top" class="go-top" data-go-top>
    <ion-icon name="chevron-up-outline"></ion-icon>
  </a>




</x-master>

