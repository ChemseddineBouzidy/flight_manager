
{{$Flight->from_city}}
{{ asset('storage/'.$Flight->imageAirline) }} 


{{($Flight->pilots->name)}}


<x-master title=aa>

    <body id="top">
    
      <!-- 
        - #HEADER
      -->
    
     
    
    
    
    
    
      <main>
        <article>
    
  

    
    
    
    
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
              
                <li>
                  <div class="package-card">
    
                    <figure class="card-banner">
                      <img src="{{ asset('storage/'.$Flight->imageCity) }}" alt="Experience The Great Holiday On Beach" loading="lazy">
                    </figure>
    
                    <div class="card-content">
    
                      <h3 class="h3 card-title">
                         <div class="imageAirline">
                          <img src="{{ asset('storage/'.$Flight->imageAirline) }}" alt="Experience The Great Holiday On Beach" loading="lazy">
                        </div>
                      </h3>
    
                      <p class="card-text">
                        <table>
                          <tr>
                            <th>  <ion-icon name="time"></ion-icon></th>
                            <th>{{$Flight->created_at->format('D M Y')}}</th>                     
                          </tr>
                          <tr>
                            <th>  <ion-icon name="location-outline"></ion-icon></th>
                            <th>{{$Flight->from_city}}</th>                    
                            <td><ion-icon name="airplane-outline" style="color:#588CD0;margin:0 30px"></ion-icon></td>
                          <th> <ion-icon name="pin-outline"></ion-icon></th>
                          <th>{{$Flight->to_city}}</th> 
                        </tr>
                        <tr>
                          <th>  <ion-icon name="hourglass-outline"></ion-icon></th>
                          <td><b style="margin-right: 10px">For  :</b>{{$Flight->duration}} Hour</td>                     
                        </tr>
                        </table>
                      </p>
    
                      <ul class="card-meta-list">
    
                        <li class="card-meta-item">
                          <div class="meta-box">
                            <ion-icon name="time"></ion-icon>
    
                            <p class="text">{{$Flight->duration}}</p>
                          </div>
                        </li>
    
                        <li class="card-meta-item">
                          <div class="meta-box">
                            <ion-icon name="airplane-outline"></ion-icon>
    
                            <p class="text">
                              @if ($Flight->is_direct === 1)
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
    
                            <p class="text">{{$Flight->to_city}}</p>
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
                        {{($Flight->pilots->name)}}
                        <span>/ per person</span>
                      </p>
    
                    
                     
                    </div>
                 
                  </div>
                </li>
    
           
                
    
    
              </ul>
            
           
              
              <button class="btn btn-primary">View All Packages</button>
    
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
    
    