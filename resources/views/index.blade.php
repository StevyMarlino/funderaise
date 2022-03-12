@extends('layouts.front')

@section('content')
    <main class="container0 ">
        <article>
            <div class="container4">
            <div>
            <div>
                <h1>Reliable fundraising for all  moments in life.<h1>
                <p>Get help. Give kindness.</p>
            </div>
            <div>
            <form id="indexform" action=" {{ url('step1') }}">
                <button type="submit">
                    <h5>Start a funding</h5>
                </button>
</form>
            </div>
</div>
            <div>
                 <img src="{{ asset('img/background1.jpg') }}">
            </div>
            </div>
        </article>
        <section>
            <p class="text">Top Fundraiser.</p>
           <div class="container1">
           @forelse($index as $funderaise)
    <a href="{{ route('details',$funderaise->id) }}" >
                <div>
             <img src="{{ asset($funderaise->file)}}" class="image1">
                        
                        <h2> {{ $funderaise->title }}</h2>
                        <p id="textlength"> {{ $funderaise->description }}</p>
                        <p> {{ number_format($funderaise->number)  }} FCFA</p>
                </div>
    @empty
    No data 
    @endforelse
    </div>

        </section>
    
        <div class="stories">
            <p class="text">Success stories</p>
            <div class="container2">
                <div>
                    <img src="{{ asset('img/background1.jpg') }}" class="image3">
                </div>
                <div>
                    <div>
                    <h1>Fundraising ideas</h1>
                    <p>What makes these fundraisers so successful? We've compiled a list of common mistakes that our successful fundraisers avoid that will steer your fundraiser 
                        towards success and be sure to help any fundraiser
                         that needs a boost.</p>
                    </div>
                </div>
            </div>
        </div>
</main>
<div class="secondnavbar">
            <ul>
                <li> <a href="#" >Discover</a>
                <div class="first">
                    <ul>
                        <li><a href="#">Fundraiser</a></li>
                        <li><a href="#">Success stories</a></li>
                    </ul>
                </div>
                </li>
                <li><a href="#"> Fundraiser for</a>
                    <div class="first">
                        <ul>
                            <li><a href="#">Education</a></li>
                            <li><a href="#">Medical</a></li>
                    
                        </ul>
                    </div>
                </li>
                <li><a href="#" >How it works</a></li>
                <li><a href="/signup.html">Sign in</a></li>
                <li><a href="#">Login</a></li>
            </ul>
        </div>
@endsection
 