@extends('layout.masterguest')
@section('content')

<div id="fullpage" class="fullpage-default">
    <div class="section animated-row" data-section="slide01">
        <div class="section-inner">
            <div class="welcome-box">
                <span class="judulsub animate" data-animate="fadeInUp">Glad You Here !</span>
            <h6 class="judul mb-0 animate" data-animate="fadeInUp">{{Auth::user()->name}}</h6>}</p>
                {{-- div class="scroll-down next-section animate data-animate=fadeInUp "><img alt="">
                <span>Swipe Up</span></div> --}}
            </div>
        </div>
    </div>
</div>

@endsection



