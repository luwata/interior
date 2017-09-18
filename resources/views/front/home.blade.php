@extends('layouts.master')

@section('title')
	U-Interiors - Accueil
@endsection

@section('content')
		<section id="content-movie" class="row">
          <div class="col-md-10 col-md-push-1">
            <video autoplay="autoplay">
              <source src="{{url('media/uinteriors2.mp4')}}" type="video/mp4">
            </video>
          </div>

        </section>
        <section id="content-open" class="row hidden-xs">
            <div class="col-md-10 col-md-push-1">
              <div id="bloc-float">
                <!-- A FINALISER -->
                <div>
                  <p></p>
                  <p>
                    A l’écoute des spécificités de vos projets d’agencement, nous avons à cœur d’aborder chaque collaboration comme un nouveau défi et de vous apporter le service le plus adapté.  
                    Demeurer disponible et respecter nos engagements, plus qu’une philosophie, c’est un état d’esprit.
                  </p>
                </div>
                <div>
                  <br />
                  <a href="" class="tpl-link">+ D'INFOS</a>
                </div>
              </div>
            </div>
            <img src="{{url('images/open.jpg')}}" alt="">
        </section>

        <section id="content-expert" class="row">

          <div class="row">

              <div class="col-xs-6 col-md-3 col-md-push-1">
                
                  <div class="content-title">
                    <div>
                      <div class="trema"></div>
                      <span>NOS</span>
                    </div>                
                    <h2>EXPERTISES</h2>
                  </div>
                
              </div>

              <div class="col-xs-12 col-md-4 col-md-push-2">
                <p>
                  Spécialistes du développement technique et de la <span>Fabrication de mobilier</span>, nous vous accompagnons dans la mise en œuvre de tous vos projets. 
                </p> 
              </div>

          </div>

          <div class="row">
            <div class="col-xs-12 col-md-11 col-md-push-1">
              <p class="col-xs-12 col-md-5 col-md-push-4">
                Que vous souhaitiez déployer un réseau de grande envergure ou réaliser une pièce unique, en <span>France</span> ou à <span>l’international</span>, nous aurons toujours des solutions pertinentes à vous proposer.
              </p>
              <div class="col-xs-12 col-md-10 hidden-xs">
                <p>BUREAU D'&#201;TUDES &amp; D'ING&#201;NIERIE</p>
                <p>PRODUCTION</p>
                <p>LOGISTIQUE &amp; INSTALLATION</p>
                <p>PILOTAGE &amp; MA&#206;TRISE D'OEUVRE</p>
              </div>
            </div>
          </div>

          <div class="row">
            <div class="col-xs-12 col-md-6 col-md-push-3">
              <a href="" class="tpl-link">+ D'INFOS</a>
            </div>
          </div>

        </section>

        <section id="content-last-works" class="row">

          <div class="row">

            <div class="col-xs-6 col-md-10 col-md-push-1">
              <div class="content-title-large">
                <div>
                  <div class="trema-large"></div>
                  <span>NOS</span>
                </div>                
                <h2><span>DERNI&#200;RES</span> R&#201;ALISATIONS</h2>
              </div>
            </div>
          </div>

          <div class="row">

            <div class="col-xs-12 col-md-10 col-md-push-1">
              <span class="cross-top-left"></span>
              <span class="cross-bottom-right"></span>
              <a href="#">
                <figure class="col-xs-12 col-md-6">
                  <img src="{{url('images/home-work01.jpg')}}" alt="" class="img-responsive">
                  <figcaption>
                    <p>AVRIL 2017</p>
                    <div>
                      <h3>YVES DELORME</h3>
                      <h6>WALTON STREET</h6>
                      <h3>LONDRES, UK</h3>
                    </div>
                  </figcaption>
                </figure>
              </a>
              <a href="{{route('projet')}}">
                <figure class="col-xs-12 col-md-6">
                  <img src="{{url('images/home-work02.jpg')}}" alt="" class="img-responsive">
                  <figcaption>
                    <p>JUIN 2017</p>
                    <div>
                      <h3>ERES</h3>
                      <h3>MYKONOS, GR&#200;CE</h3>
                    </div>
                  </figcaption>
                </figure>
              </a>
            </div>

          </div>

          <div class="row">
            <div class="col-xs-12 col-sm-9 col-md-6 col-md-push-3">
              <a href="" class="tpl-link">+ DE PROJETS</a>
            </div>
          </div>

        </section>
@endsection