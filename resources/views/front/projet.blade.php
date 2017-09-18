@extends('layouts.master')

@section('title')
    U-Interiors - Projet
@endsection

@section('content')
    <section id="content-slider" class="row">
    	<div class="col-md-10">
          	<div class="flex-container">
	            <div class="flexslider">
	                <ul class="slides">
	                    <li>
	                        <img src="{{url('images/slide1.jpg')}}" alt="ERES MYKONOS"/>
	                        <p class="work-title"><span>ERES</span> MYKONOS</p>
	                    </li>
	         
	                    <li>
	                        <img src="{{url('images/slide2.jpg')}}" alt="ERES MYKONOS"/>
	                        <p class="work-title"><span>ERES</span> MYKONOS</p>
	                    </li>
	         
	                    <li>
	                        <img src="{{url('images/slide3.jpg')}}" alt="ERES MYKONOS"/>
	                        <p class="work-title"><span>ERES</span> MYKONOS</p>
	                    </li>
	                </ul>
	            </div>
        	</div>
    	</div>
    </section>
	
	<section id="content-project-share" class="row col-md-10">
		<a href="">PARTAGER CE PROJET</a>
	</section>

    <section id="content-project-infos" class="row col-md-10">
	</section>

	<section id="content-project-description" class="row col-md-10">
	</section>
	
	<section id="content-project-vignettes" class="row">
		<img src="images/fake03.jpg" alt="">
	</section>
@endsection