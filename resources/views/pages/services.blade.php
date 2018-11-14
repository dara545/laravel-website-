@extends('layouts.app')
@section('content')
    
        <section id="newsletter">
          <div class="container">
            <h1>Abonneer op onze nieuwsbrief</h1>
            <form>
              <input type="email" placeholder="Vul hier uw Email...">
              <button type="submit" class="button_1">Aboneer</button>
            </form>
          </div>
        </section>
    
        <section id="main">
          <div class="container">
            <article id="main-col">
              <h1 class="page-title">Services</h1>
              <ul id="services">
                <li>
                  <h3>Website Design</h3>
                  <p>De prijzen voor een dergelijke website variëren van 2.750 tot 10.000 euro, maar dan heb je ook wat!. Vraag onze offerte op.</p>
                              <p>Prijzen: €1,000 - €3,000</p>
                </li>
                <li>
                  <h3>Website Onderhoud</h3>
                  <p>Gemiddelde kosten voor het laten maken van een professionele website  website. Zo'n onderhoudscontract zou ongeveer 50 tot 250 euro per       maand kosten.</p>
                              <p>Prijzen: €250 per maand</p>
                </li>
                <li>
                  <h3>Website Hosting</h3>
                  <p>Website hosting. Het goedkoopste pakket kost 5 euro per maand. Je betaalt wel 10 euro setupkosten (terwijl dit automatisch gaat). Verder betaal je jaarlijks ongeveer 11 euro voor een domeinnaam.</p>
                              <p>Prijzen: €5,0 - 25,00 per maand</p>
                </li>
              </ul>
            </article>
    
            <aside id="sidebar">
              <div class="dark">
                <h3>Neem contact op</h3>
                          <form class="quote" action="/" method="POST">
                            {{csrf_field() }}
                              <div>
                                  <label>Naam</label><br>
                                  <input type="text" name="name" placeholder="Naam">
                              </div>
                              <div>
                                  <label>Email</label><br>
                                  <input type="email"  name="email" placeholder="Email adres">
                              </div>
                              <div>
                                  <label>Bericht</label><br>
                                  <textarea placeholder="Bericht" name="message"></textarea>
                              </div>
                              {{-- <input type="hidden" name="_token" value="{{ csrf _token() }}"> --}}
                              <button class="button_1" type="submit" name="submit" >Verzend</button>

                        </form>
              </div>
            </aside>
          </div>
        </section>
    
        <footer>
          <p>Dara Web Deisgn, Copyright &copy; 2018</p>
        </footer>




@endsection