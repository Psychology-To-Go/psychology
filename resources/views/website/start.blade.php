@component('layouts.main')
@slot('seo')
<title>Psychology To Go: Health information you can trust</title>
<meta name="description" content="Psychology To Go is committed to being your source for practical guidance on mental health. Come to us in your pursuit of valid information.">
<link rel="canonical" href="{{ Request::url() }}">
<meta name="csrf-token" content="{{ csrf_token() }}">
<meta name="apple-mobile-web-app-capable" content="yes"/>
<meta name="robots" content="index, follow">
<meta name="twitter:card" content="summary">
<meta name="twitter:title" content="Psychology To Go: Health information you can trust">
<meta property="twitter:url" content="{{ Request::url() }}">
<meta name="twitter:description" content="Psychology To Go is committed to being your source for practical guidance on mental health. Come to us in your pursuit of valid information.">
<!-- 1100 X 628 -->
<meta name="twitter:image" content="{{ asset('assets/assets/horizontal.jpg') }}">
<meta property="og:title" content="Psychology To Go: Health information you can trust">
<meta property="og:site_name" content="Psychology To Go">
<meta property="og:description" content="Psychology To Go is committed to being your source for practical guidance on mental health. Come to us in your pursuit of valid information.">
<!-- 1200 x 630 -->
<meta property="og:image" content="{{ asset('assets/assets/horizontal.jpg') }}">
<meta property="og:url" content="{{ Request::url() }}">
<meta property="og:type" content="website">
<link rel="preload" href="{{ asset('assets/assets/horizontal.jpg') }}" as="image">
<link rel="preload" href="{{ asset('assets/assets/vertical.jpg') }}" as="image">
@endslot
@slot('js')
<script async custom-element="amp-fx-collection" src="https://cdn.ampproject.org/v0/amp-fx-collection-0.1.js"></script>
<script async custom-element="amp-lightbox" src="https://cdn.ampproject.org/v0/amp-lightbox-0.1.js"></script>
<script async custom-element="amp-social-share" src="https://cdn.ampproject.org/v0/amp-social-share-0.1.js"></script>
<script async custom-element="amp-bind" src="https://cdn.ampproject.org/v0/amp-bind-0.1.js"></script>
<script async custom-template="amp-mustache" src="https://cdn.ampproject.org/v0/amp-mustache-0.2.js"></script>
<script async custom-element="amp-sidebar" src="https://cdn.ampproject.org/v0/amp-sidebar-0.1.js"></script>
<script async custom-element="amp-form" src="https://cdn.ampproject.org/v0/amp-form-0.1.js"></script>
<script async custom-element="amp-video" src="https://cdn.ampproject.org/v0/amp-video-0.1.js"></script>
<script async custom-element="amp-animation" src="https://cdn.ampproject.org/v0/amp-animation-0.1.js"></script>
<script async custom-element="amp-position-observer" src="https://cdn.ampproject.org/v0/amp-position-observer-0.1.js"></script>
<script async custom-element="amp-youtube" src="https://cdn.ampproject.org/v0/amp-youtube-0.1.js"></script>
@endslot
@slot('content')
<section style="background-color: #000;margin-top:-8%;" class="container-video">
<amp-video autoplay loop width="1920" class="showForDesktopTablet" style="opacity:0.5"
    height="1080"
    layout="responsive"
    poster="{{ asset('assets/assets/horizontal.jpg') }}">
    <source src="assets/assets/horizontal.webm"
      type="video/webm" />
    <source src="assets/assets/horizontal.mp4"
      type="video/mp4" />
    <div fallback>
      <p>This browser does not support the video element.</p>
    </div>
  </amp-video>
  <amp-video autoplay loop width="1080" class="showForMobile" style="opacity:0.5"
    height="1920"
    layout="responsive"
    poster="{{ asset('assets/assets/vertical.jpg') }}">
    <source src="assets/assets/vertical.webm"
      type="video/webm" />
    <source src="assets/assets/vertical.mp4"
      type="video/mp4" />
    <div fallback>
      <p>This browser does not support the video element.</p>
    </div>
  </amp-video>
<amp-animation id="blogphototext"
layout="nodisplay">
<script type="application/json">
{
"duration": "0.3s",
"fill": "both",
"direction": "alternate",
  "selector": "#blogphototext",
  "animations": [{
    "keyframes": {
      "opacity": [1, 0.9, 1, 0.4],
      "transform": ["translateY(0px)","translateY(3px)","translateY(10px)","translateY(500px)"]
    }
  }]
}
</script>
</amp-animation>
<amp-position-observer  on="scroll:blogphototext.seekTo(percent=event.percent)" layout="nodisplay"></amp-position-observer>

<div class="text-container" id="blogphototext">
  <h1 class="huge_sans_serif_h1 center">Psychology To Go: Health information you can trust</h1>
</div>
</section>

<section style="background-color: #fff;">
   <div class="container-rounded mx-auto light-bg-1">
      <div class="container-medium mx-auto">
         <div amp-fx="fade-in-scroll" data-repeat="">
           <amp-video autoplay loop width="1920" class="bordering amp-shadow"
               height="1080"
               layout="responsive"
               poster="{{ asset('assets/blog/alz/1302/horizontal.jpg') }}">
               <source src="assets/blog/alz/1302/horizontal.webm"
                 type="video/webm" />
               <source src="assets/blog/alz/1302/horizontal.mp4"
                 type="video/mp4" />
               <div fallback>
                 <p>This browser does not support the video element.</p>
               </div>
             </amp-video>
             <div class="text-container showForDesktopTablet" style="max-width:750px; top:45%">
               <p class="good_read_category center" style="color: #f7b42c; margin: 0; padding:0">EDITOR'S CHOICE</p>
               <h2 class="sans_serif_h1 center" style="margin:2% 0 0 0">All you need to know about Alzheimer's</h2>
               <a class="button" style="color: #fff; background-color: #8193b2;font-size: 18px; margin: 5% 0 0 0" href="/alzheimers">Read Now</a>
             </div>
             <div class="text-container showForMobile">
               <h2 class="sans_serif_p center" style="margin:25% 0 3% 0"><strong>All you need to know about Alzheimer's</strong></h2>
               <a class="link"  href="/alzheimers">Read Now</a>
             </div>
         </div>
      </div>
   </div>
</section>
@include('website.articles.author.patric')
@endslot
@endcomponent
