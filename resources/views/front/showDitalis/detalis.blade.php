@extends('layout.master')

<!DOCTYPE html>
<html style="font-size: 16px;">
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <meta name="keywords" content="slaider, Our Sections &amp; Services, Our Sections &amp; Services, Business Center">
    <meta name="description" content="">
    <meta name="page_type" content="np-template-header-footer-from-plugin">
    <title>الرئيسة</title>
    <link rel="stylesheet" href="الرئيسة.css" media="screen">

    <link rel="stylesheet" href="{{asset('nicepage.css')}}" media="screen">
<link rel="stylesheet" href="{{asset('home.css')}}" media="screen">
<!-- CSS only -->
<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-kQtW33rZJAHjgefvhyyzcGF3C5TFyBQBA13V1RKPf4uH+bwyzQxZ6CmMZHmNBEfJ" crossorigin="anonymous"></script>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-uWxY/CJNBR+1zjPWmfnSnVxwRheevXITnMqoEIeG1LJrdI0GlVs/9cVSyPYXdcSF" crossorigin="anonymous">
    <script class="u-script" type="text/javascript" src="{{asset('jquery.js')}}" defer=""></script>
    <script class="u-script" type="text/javascript" src="{{asset('nicepage.js')}}" defer=""></script>
    <meta name="generator" content="Nicepage 3.26.0, nicepage.com">
    <link id="u-theme-google-font" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i|Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i">
    
    
    @if (App::getLocale() == 'en')
    <link href="{{ URL::asset('assets/css/ltr.css') }}" rel="stylesheet">
@else
    <link href="{{ URL::asset('assets/css/rtl.css') }}" rel="stylesheet">
@endif

    
    
    <script type="application/ld+json">{
		"@context": "http://schema.org",
		"@type": "Organization",
		"name": "",
		"logo": "{{asset('assets/images/logoo.png')}}",
		"sameAs": [
				"https://facebook.com/name",
				"https://twitter.com/name"
		]
}</script>
    <meta name="theme-color" content="#478ac9">
    <meta name="twitter:site" content="@">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="الرئيسة">
    <meta name="twitter:description" content="">
    <meta property="og:title" content="الرئيسة">
    <meta property="og:type" content="website">
    <link rel="icon" href="{{asset('assets/images/logoo.png')}}">

  </head>
  <body class="u-body">
    
    
    <header class="u-clearfix u-custom-color-2 u-header u-header" id="sec-02f2"><div class="u-clearfix u-sheet u-sheet-1">
        <a href="{{route('homee')}}" class="u-image u-logo u-image-1" data-image-width="376" data-image-height="376">
          <img src="{{asset('assets/images/logoo.png')}}" class="u-logo-image u-logo-image-1">
        </a>
        <nav class="u-menu u-menu-dropdown u-offcanvas u-menu-1">
          <div class="menu-collapse" style="font-size: 1rem; letter-spacing: 0px;">
            <a class="u-button-style u-custom-left-right-menu-spacing u-custom-padding-bottom u-custom-text-hover-color u-custom-top-bottom-menu-spacing u-nav-link u-text-active-palette-1-base u-text-hover-palette-2-base" href="#">
              <svg><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#menu-hamburger"></use></svg>
              <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><defs><symbol id="menu-hamburger" viewBox="0 0 16 16" style="width: 16px; height: 16px;"><rect y="1" width="16" height="2"></rect><rect y="7" width="16" height="2"></rect><rect y="13" width="16" height="2"></rect>
</symbol>
</defs></svg>
            </a>
          </div>
          <div class="u-custom-menu u-nav-container">
            <ul class="u-nav u-unstyled u-nav-1">
                <li class="u-nav-item"><a class="u-button-style u-nav-link u-text-active-palette-1-base u-text-hover-palette-2-light-1" href="{{route('homee')}}" style="padding: 10px 20px;">{{ trans('Grades_trans.home_sections') }}</a>
</li>



<li class="u-nav-item"><a class="u-button-style u-nav-link u-text-active-palette-1-base u-text-hover-palette-2-light-1" style="padding: 10px 20px; " href="{{route('homee')}}#servics" >{{ trans('sections.sections') }}</a></li>
<li class="u-nav-item"><a class="u-button-style u-nav-link u-text-active-palette-1-base u-text-hover-palette-2-light-1" style="padding: 10px 20px; "href="{{route('homee')}}#Partners" >{{ trans('sections.Partners') }}</a></li>
{{-- <li class="u-nav-item"><a class="u-button-style u-nav-link u-text-active-palette-1-base u-text-hover-palette-2-light-1" style="padding: 10px 20px;"> {{ trans('sections.ouer-Services') }}</a></li> --}}
<li class="u-nav-item"><a class="u-button-style u-nav-link u-text-active-palette-1-base u-text-hover-palette-2-light-1" href="{{route('about')}}" style="padding: 10px 20px;"> {{ trans('sections.about-us') }}</a>

<li class="u-nav-item"><a class="u-button-style u-nav-link u-text-active-palette-1-base u-text-hover-palette-2-light-1" href="{{route('homee')}}#contact-us" style="padding: 10px 20px;"> {{ trans('sections.contact-us') }}</a></li>
</li>
<li  class="u-nav-item">
<div class="btn-group mb-1">
    <li class="u-nav-item" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
      @if (App::getLocale() == 'ar')
      {{-- {{ LaravelLocalization::getCurrentLocaleName() }} --}}
     <img src="{{ URL::asset('assets/images/flags/EG.png') }}" alt="">
      @else
      {{-- {{ LaravelLocalization::getCurrentLocaleName() }} --}}
      <img src="{{ URL::asset('assets/images/flags/US.png') }}" alt="">
      @endif
    </li>
    <div class="dropdown-menu">
        @foreach(LaravelLocalization::getSupportedLocales() as $localeCode => $properties)
                <a class="dropdown-item" rel="alternate" hreflang="{{ $localeCode }}" href="{{ LaravelLocalization::getLocalizedURL($localeCode, null, [], true) }}">
                    {{ $properties['native'] }}
                </a>
        @endforeach
    </div>
</div>
</li>
</ul>

              </div>
            </div>
            <div class="u-black u-menu-overlay u-opacity u-opacity-70"></div>
          </div>
        </nav>
      </div></header>
      <br><br>

      <body>
        <section class="u-align-center u-clearfix u-custom-color-2 u-section-2" id="carousel_8f31">
          <div class="u-clearfix u-sheet u-valign-middle-lg u-valign-middle-md u-valign-middle-xl u-sheet-1">
            <h1 class="u-text u-text-default u-text-palette-1-base u-text-1" id="servics"> {{ trans('sections.section') }} {{$getService->Name}}</h1>
             
            <div class="u-expanded-width u-list u-list-1">
              <div class="u-repeater u-repeater-1">
    
                @foreach ($allServis as $Servis )
                    
                <div class="u-align-center u-container-style u-list-item u-radius-20 u-repeater-item u-shape-round u-video-cover u-white u-list-item-2">
                    <div class="u-container-layout u-similar-container u-container-layout-2">
                      <img src="{{asset($Servis->image_path)}}" alt="" class="u-expanded-width u-image u-image-contain u-image-default u-image-2" data-image-width="626" data-image-height="626">
                      <h4 class="u-text u-text-default u-text-palette-1-base u-text-4">  {{$Servis->Name}}</h4>
                      <p class="u-text u-text-palette-1-dark-2 u-text-5">   {{$Servis->Notes}}  </p>
                      {{-- <p class="u-text u-text-palette-1-dark-2 u-text-5">   {{$Servis->Describe}}  </p> --}}
                      <a href="{{route('allServices',$Servis->id)}}" class="u-active-palette-1-light-1 u-border-2 u-border-active-white u-border-hover-white u-border-white u-btn u-btn-round u-button-style u-hover-palette-1-light-1 u-palette-1-base u-radius-50 u-text-active-white u-text-hover-white u-btn-2" target="_blank">المزيد</a>
                    </div>
                  </div>
                         
                
                  @endforeach
    
    
    
    
    
    
    
    
    
                
              </div>
            </div>
          </div>
        </section>
      
  </body>
    










   <div>   <br>
      <br>
      <br>
      <br>
      <br>
      <br>
      <br>
      <br>
      <br>
      <br>
      <br>
      <br>
      <br>
      <br>
      <br>
      <br>
      <br>

</div>

    
  </body>
</div>
</div>
</div>
</div>
</div>

</div>
</div>
</div>
</div>
</section>
<section class="u-align-center u-clearfix u-section-4" id="sec-d678">
<div class="u-clearfix u-sheet u-sheet-1">
<div class="u-clearfix u-expanded-width u-gutter-10 u-layout-wrap u-layout-wrap-1">
<div class="u-gutter-0 u-layout">
<div class="u-layout-row">
<div class="u-size-30">
<div class="u-layout-col">
<div class="u-align-left u-container-style u-layout-cell u-left-cell u-size-30 u-layout-cell-1">
<div class="u-container-layout u-container-layout-1">
  
  <h2 class="u-text u-text-1" id="contact-us">{{ trans('sections.contact-us') }} &nbsp;</h2>
  <p class="u-text u-text-2">{{ trans('sections.locations-one') }}</p>
  <p class="u-text u-text-3">0122902228(+2)</p>
  <p class="u-text u-text-4">contacts@esbnyc.com</p>
</div>
</div>
<div class="u-align-left u-container-style u-layout-cell u-left-cell u-size-30 u-layout-cell-2">
<div class="u-container-layout u-valign-top u-container-layout-2">
  <div class="u-form u-form-1">




    @include('layouts.messages')


    <form id="contact-form" action="{{route('storeMessage')}}" method="POST" class="tm-contact-form mx-auto">

      @csrf
      <div class="form-group">
          <input type="text"   name="name" class="form-control rounded-0" placeholder="Name" required />
      </div>
      <div class="form-group">
          <input type="email" name="email" class="form-control rounded-0" placeholder="Email" required />
      </div>
      <div class="form-group">
        <input type="tect" name="phone" class="form-control rounded-0" placeholder="phone" required />

      </div>
      <div class="form-group">
          <textarea rows="8" name="topic" class="form-control rounded-0" placeholder="Message" maxlength="500" required></textarea>
      </div>

      <div class="form-group tm-text-right">
          <button type="submit" class="btn btn-primary"  >Send</button>
      </div>
  </form>

  </div>
</div>
</div>
</div>
</div>
<div class="u-size-30">
<div class="u-layout-col">
<div class="u-align-left u-container-style u-layout-cell u-right-cell u-size-60 u-layout-cell-3">
<div class="u-container-layout u-container-layout-3">
  <div class="u-expanded u-grey-light-2 u-map">
    <div class="embed-responsive">
      
      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d335.3379576346084!2d31.194239825559958!3d30.012152196830584!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2zMzDCsDAwJzQzLjgiTiAzMcKwMTEnNDAuMSJF!5e0!3m2!1sen!2s!4v1635453482337!5m2!1sen!2s" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>                        </div>

  </div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</section>


<div class="copyright py-4 text-center text-white">
<div class="container"><small>{{ trans('sections.Copyright') }}</small></div>

</div>

</body>
</html>
