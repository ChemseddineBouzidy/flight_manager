{{-- 
{{$Flight->from_city}}
{{ asset('storage/'.$Flight->imageAirline) }} 


{{($Flight->pilots->name)}} --}}


<x-master title=aa>
  <STYle>
    @import url("https://fonts.googleapis.com/css?family=Roboto:400,400i,700");

.card {
  background: #fff;
  border-radius: 4px;
  box-shadow: 0px 14px 80px rgba(34, 35, 58, 0.5);
  max-width: 1150px;
  display: flex;
  flex-direction: row;
  border-radius: 25px;
  position: relative;
}
.card h2 {
  margin: 0;
  padding: 0 1rem;
}
.card .title {
  padding: 1rem;
  text-align: right;
  color: green;
  font-weight: bold;
  font-size: 12px;
}
.card .desc {
  padding: 0.5rem 1rem;
  font-size: 12px;
}
.card .actions {
  display: grid;
  grid-template-columns: repeat(3, 1fr);
  align-items: center;
  padding: 0.5rem 1rem;
}
.card svg {
  width: 105px;
  height: 140px;
  margin: 0 auto;
}

.img-avatar {
  width: 100px;
  height: 100px;
  position: absolute;
  border-radius: 50%;
  /* border: 6px solid white; */
  /* background-image: linear-gradient(-60deg, #16a085 0%, #f4d03f 100%); */

  top: 72px;
    left: 136px;
}

.card-text {
  display: grid;
  grid-template-columns: 1fr 2fr;
}

.title-total {
  padding: 2.5em 1.5em 1.5em 1.5em;
}

path {
  /* fill: white; */
}

.img-portada {
  width: 100%;
}

.portada {
  width: 100%;
  height: 100%;
  border-top-left-radius: 20px;
  border-bottom-left-radius: 20px;
  background-image: url("https://media.istockphoto.com/id/666297356/photo/flightdeck-view.jpg?s=612x612&w=0&k=20&c=k1xJzMomxdJrAperEbE1dnZ2aoHXZDz3PiAL5TaU1bw=");
  background-position: bottom center;
  background-size: cover;
}

button {
  border: none;
  background: none;
  font-size: 24px;
  color: #8bc34a;
  cursor: pointer;
  transition:.5s;
  &:hover{
    color: #4CAF50  ;
    transform: rotate(22deg)
  }
}

  </STYle>
  <style>
    .a {
  /* background-image: url("../images/hero.jpg"); */
  background-repeat: no-repeat;
  background-size: cover;
  background-position: center;
  background-color: hsla(0, 0%, 100%, 0.7);
  background-blend-mode: overlay;
  display: grid;
  place-items: center;
  height: 10px;
  text-align: center;
  padding-top: 125px;
}
.social-link {
  color: var(--bright-navy-blue);

}
.navbar-link {
  padding: 15px 20px;
  color: var(--bright-navy-blue);
  font-weight: var(--fw-500);
  font-size: var(--fs-4);
  transition: var(--transition);
  text-transform: capitalize;
}
/* .imageAirline{
  width: 400px;

} */
.imageAirline .desc {

width: 400px;
font-size: 18px;
height:100px ;
}
.imageAirline .desc img{
float: left;
width: 100px;
height: 100px
}

</style>
    <body id="top">
    
      <!-- 
        - #HEADER
      -->
    
     
    
    
    
    
    
      <main>
        <article>
    
  
          <section class="a" id="home">
            <div class="container">
    
              <h2 class="h1 hero-title">Let your dreams take flight.</h2>
    
              <p class="hero-text">
                The sky isn’t the limit—it’s just the beginning of your journey.
    
              </p>

    
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
              
                <li>
                  <div class="package-card">
    
                    <figure class="card-banner">
                      <img src="{{ asset('storage/'.$Flight->imageCity) }}" alt="Experience The Great Holiday On Beach" loading="lazy">
                    </figure>
    
                    <div class="card-content">
    
                      <h3 class="h3 card-title">
                         <div class="imageAirline">
                       
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
                        {{-- {{($Flight->pilots->name)}} --}}
                        ${{$Flight->price}}
                        <span>/ per person</span>
                      </p>
    
                    
                     
                    </div>
                 
                  </div>
                </li>
    
                <div class="card">
                
                  <div class="card-text">
                    <div class="portada">
                    
                    </div>
                    <div class="title-total">  
                   
                        
                         
                      <div class="title">{{($Flight->pilots->license_number)}}</div>
                      <h2>{{($Flight->pilots->name)}}  <BR> </h2>
                      <br>
                   
                  <div class="desc">
                    FullName : <b>{!!($Flight->pilots->name)!!}  </b><br>
                    License Number : <b>{!!($Flight->pilots->license_number)!!}  </b><br>
                    License Expiration Date  : <b>{!!($Flight->pilots->license_expiry)!!} </b><br>
                    Experience Years : <b>{!!($Flight->pilots->experience_years)!!} </b> <br>
                    <br>
                    Royal Air Maroc is the largest country's airline with routes for more than 80 countries across the world. Read more about Royal Air Maroc and its unique flight



                  </div>
                  <div class="actions">
                    <button><i class="far fa-heart"></i></button>
                    <button><i class="far fa-envelope"></i></button>
                    <button><i class="fas fa-user-friends"></i></button>
                  </div></div>
                 
                  </div>
                  
                 
                  
                </div>
                
    
    
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
    
    