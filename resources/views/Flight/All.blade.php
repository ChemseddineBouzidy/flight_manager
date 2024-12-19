
<x-master title="All Flights">
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
</style>
    <body id="top">
    
      <!-- 
        - #HEADER
      -->
    
     
    
    
    
    
    
      <main>
        <article>
    
          <!-- 
            - #HERO
          -->
    
          <section class="a" id="home">
            <div class="container">
    
              <h2 class="h1 hero-title">Let your dreams take flight.</h2>
    
              <p class="hero-text">
                The sky isn’t the limit—it’s just the beginning of your journey.
    
              </p>

    
            </div>
          </section>
    
          <!-- 
            - #POPULAR
          -->
    
          <section class="popular" id="destination">
            <div class="container">
    
              <p class="section-subtitle"> one flight at a time</p>
    
              <h3 class="h2 section-title"> <p>where will yours take you?</p> </h3>
    
              <p class="section-text">
                Discover new horizons, one flight at a time 
              </p>
    
              <ul class="popular-list">
                @foreach($flights as $flight)
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
    
    