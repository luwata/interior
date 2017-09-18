@extends('layouts.master')

@section('title')
    U-Interiors - Réalisations
@endsection

@section('content')
    <section id="content-map" class="row">
      <div class="col-md-10 col-md-push-1">
		<img src="{{url('images/map.jpg')}}" alt="map" class="img-responsive">
      </div>
    </section>
	
	<section id="content-filters" class="row">
		<nav class="col-md-10 col-md-push-1">
			<a href="#">TOUS</a>
			<ul>
				<li class="active"><a href="#">LUXE</a></li>
				<li><a href="#">FASHION RETAIL</a></li>
				<li><a href="#">TERTIAIRE</a></li>
				<li><a href="#">HOTELLERIE / RESIDENTIEL</a></li>
				<li><a href="#">EPHEMERE</a></li>
			</ul>
		</nav>
	</section>

	<section id="content-works" class="row">
		<div class="col-md-10 col-md-push-1">
			<a href="#">
				<figure class="col-md-4">
					<img src="{{url('images/works-01.png')}}" alt="work01" class="img-responsive"/>
					<figcaption>						
						<p>
							<img src="{{url('images/cross-top-left.png')}}" alt="">
							SEPTEMBRE 2017
						</p>
	                  	<div>
	                    	<h3>YVES DELORME<br/>
		                    	<span>RUE DE RICHELIEU</span>, 
		                    	<span>PARIS, FRANCE</span>
	                    	</h3>
	                  	</div>
					</figcaption>			
				</figure>
			</a>
			
			<a href="#">
				<figure class="col-md-4">
					<img src="{{url('images/works-02.jpg')}}" alt="work02" class="img-responsive"/>
					<figcaption>						
						<p>
							<img src="{{url('images/cross-top-left.png')}}" alt="">
							SEPTEMBRE 2017
						</p>
	                  	<div>
	                    	<h3>ERES<br/>
		                    	<span>BON MARCH&#201;</span>, 
		                    	<span>PARIS, FRANCE</span>
	                    	</h3>
	                  	</div>
					</figcaption>			
				</figure>
			</a>

			<a href="#">
				<figure class="col-md-4">
					<img src="{{url('images/works-01.png')}}" alt="work03" class="img-responsive"/>
					<figcaption>						
						<p>
							<img src="{{url('images/cross-top-left.png')}}" alt="">
							SEPTEMBRE 2017
						</p>
	                  	<div>
	                    	<h3>MAISON LEJABY<br/>
		                    	<span>RUE DES SAINT-P&#200;RES</span>, 
		                    	<span>PARIS, FRANCE</span>
	                    	</h3>
	                  	</div>
					</figcaption>			
				</figure>
			</a>
		</div>
	</section>


	<section id="content-works" class="row">
		<div class="col-md-10 col-md-push-1">
			<a href="{{route('projet')}}">
				<figure class="col-md-4">
					<img src="{{url('images/works-04.jpg')}}" alt="work04" class="img-responsive"/>
					<figcaption>						
						<p>
							<img src="{{url('images/cross-top-left.png')}}" alt="">
							JUIN 2017
						</p>
	                  	<div>
	                    	<h3>ERES<br/>
		                    	<span></span> 
		                    	<span>MYKONOS, GR&#200;CE</span>
	                    	</h3>
	                  	</div>
					</figcaption>			
				</figure>
			</a>
			
			<a href="#">
				<figure class="col-md-4">
					<img src="{{url('images/works-05.jpg')}}" alt="work05" class="img-responsive"/>
					<figcaption>						
						<p>
							<img src="{{url('images/cross-top-left.png')}}" alt="">
							MAI 2017
						</p>
	                  	<div>
	                    	<h3>RIVES<br/>
		                    	<span>PRINTEMPS</span>, 
		                    	<span>PARIS, FRANCE</span>
	                    	</h3>
	                  	</div>
					</figcaption>			
				</figure>
			</a>

			<a href="#">
				<figure class="col-md-4">
					<img src="{{url('images/works-06.jpg')}}" alt="work06" class="img-responsive"/>
					<figcaption>						
						<p>
							<img src="{{url('images/cross-top-left.png')}}" alt="">
							MAI 2017
						</p>
	                  	<div>
	                    	<h3>ERES<br/>
		                    	<span></span> 
		                    	<span>HONG KONG, CHINE</span>
	                    	</h3>
	                  	</div>
					</figcaption>			
				</figure>
			</a>
		</div>
	</section>


	<section id="content-works" class="row">
		<div class="col-md-10 col-md-push-1">
			<a href="#">
				<figure class="col-md-4">
					<img src="{{url('images/works-01.png')}}" alt="work07" class="img-responsive"/>
					<figcaption>						
						<p>
							<img src="{{url('images/cross-top-left.png')}}" alt="">
							MAI 2017
						</p>
	                  	<div>
	                    	<h3>ERES<br/>
		                    	<span>OBERPOLLINGER<span>, 
		                    	<span>MUNICH, ALLEMAGNE</span>
	                    	</h3>
	                  	</div>
					</figcaption>			
				</figure>
			</a>
			
			<a href="#">
				<figure class="col-md-4">
					<img src="{{url('images/works-08.jpg')}}" alt="work08" class="img-responsive"/>
					<figcaption>						
						<p>
							<img src="{{url('images/cross-top-left.png')}}" alt="">
							MAI 2017
						</p>
	                  	<div>
	                    	<h3>RIVES<br/>
		                    	<span>PRINTEMPS</span>, 
		                    	<span>PARIS, FRANCE</span>
	                    	</h3>
	                  	</div>
					</figcaption>			
				</figure>
			</a>

			<a href="#">
				<figure class="col-md-4">
					<img src="{{url('images/works-09.jpg')}}" alt="work09" class="img-responsive"/>
					<figcaption>						
						<p>
							<img src="{{url('images/cross-top-left.png')}}" alt="">
							MAI 2017
						</p>
	                  	<div>
	                    	<h3>YVES DELORME<br/>
		                    	<span>PRINTEMPS</span>, 
		                    	<span>PARIS, FRANCE</span>
	                    	</h3>
	                  	</div>
					</figcaption>			
				</figure>
			</a>
		</div>
	</section>


	<section id="content-works" class="row">
		<div class="col-md-10 col-md-push-1">
			<a href="#">
				<figure class="col-md-4">
					<img src="{{url('images/works-01.png')}}" alt="work10" class="img-responsive"/>
					<figcaption>						
						<p>
							<img src="{{url('images/cross-top-left.png')}}" alt="">
							AVRIL 2017
						</p>
	                  	<div>
	                    	<h3>ERES<br/>
		                    	<span></span> 
		                    	<span>BONIFACIO, FRANCE</span>
	                    	</h3>
	                  	</div>
					</figcaption>			
				</figure>
			</a>
			
			<a href="#">
				<figure class="col-md-4">
					<img src="{{url('images/works-11.jpg')}}" alt="work11" class="img-responsive"/>
					<figcaption>						
						<p>
							<img src="{{url('images/cross-top-left.png')}}" alt="">
							AVRIL 2017
						</p>
	                  	<div>
	                    	<h3>YVES DELORME<br/>
		                    	<span></span> 
		                    	<span>WALTON STREET, LONDRES, UK</span>
	                    	</h3>
	                  	</div>
					</figcaption>			
				</figure>
			</a>

			<a href="#">
				<figure class="col-md-4">
					<img src="{{url('images/works-12.jpg')}}" alt="work12" class="img-responsive"/>
					<figcaption>						
						<p>
							<img src="{{url('images/cross-top-left.png')}}" alt="">
							AVRIL 2017
						</p>
	                  	<div>
	                    	<h3>YVES DELORME<br/>
		                    	<span>BLOOMINGDALE'S</span>, 
		                    	<span>NEW YORK, US<span>
	                    	</h3>
	                  	</div>
					</figcaption>			
				</figure>
			</a>

		</div>
	</section>

@endsection