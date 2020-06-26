@extends('layout.masterguest')
@section('content')

<div id="fullpage" class="fullpage-default" style="
background-image: url(fixedasset/images/1.png),
url(fixedasset/images/2.png),
url(fixedasset/images/3.png),
url(fixedasset/images/4.png);">
    <div class="section animated-row" data-section="slide01">
        <div class="section-inner">
            <div class="welcome-box">
                <span class="judulsub animate" data-animate="fadeInUp">Official Website</span>
            <h6 class="judul mb-0 animate" data-animate="fadeInUp">{{ config('app.name') }}</h6>
                <p class="animate" data-animate="fadeInUp">{{ config('app.description') }}</p>
                {{-- div class="scroll-down next-section animate data-animate=fadeInUp "><img alt="">
                <span>Swipe Up</span></div> --}}
            </div>
        </div>
    </div>
</div>

@endsection



