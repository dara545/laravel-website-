@extends('layouts.app')
@section('content')


<section id="showcase">
        <div class="container">
          <h1>Voordelig Professioneel Web Design</h1>
          <p>Hallo ik ben Dara Al-Ali, Als junior web develloper kunt u mij inhuren om een op maat gemaakte website te
            laten bouwen. Samen met u kunnen we bepalen wat voor website u voor oog hebt en wat de opzet daarvan wordt. Als
            opdrachtgever bepaalt u hoe het eindproduct eruit gaat zien.</p>
        </div>
      </section>
    
      <section id="newsletter">
        <div class="container">
          <h1>abonneer op onze nieuwsbrief</h1>
          <form>
            <input type="email" placeholder="Uw email...">
            <button type="submit" class="button_1">Abonneer</button>
          </form>
        </div>
      </section>
    
      <section id="boxes">
        <div class="container">
          <div class="box">
            <img src="snelvinden.jpg">
            <h3>Beter Vindbaarheid</h3>
            <p>Wij zorgen voor een website dat via zoekmachines snel vindbaar is op het web.</p>
          </div>
          <div class="box">
            <img src="mobilefirst.jpeg">
            <h3>Mobile First</h3>
            <p>De mobiele gebruiker ziet de website exact hetzelfde als de desktop gebruiker.</p>
          </div>
          <div class="box">
            <img src="grafischontwerp.jpeg">
            <h3>Grafisch Otwerp</h3>
            <p>In overleg met opdrachtgever ontwerpen we een modern en strak design met een aangename
              gebruiksvriendelijkheid</p>
          </div>
        </div>
      </section>
    
      <footer>
        <p>Dara Web Design, Copyright &copy; 2018</p>
      </footer>




@endsection