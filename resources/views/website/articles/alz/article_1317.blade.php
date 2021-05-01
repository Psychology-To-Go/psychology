@component('layouts.main')
@slot('seo')
<title>What does it feel like to have early onset Alzheimer?</title>
<meta name="description" content="Someone with early-onset Alzheimer’s may start to have difficulties with memory, planning, and problem-solving. Besides, making poor financial decisions may be concerning, too. Forgetting to pay monthly bills is one of the first warning signs that might occur. Familiar day-to-day tasks require more and more concentration. A person with early-onset Alzheimer’s may show anxiety, confusion, depression, frustration, or suspicious behavior.">
<link rel="canonical" href="{{ Request::url() }}">
<meta name="csrf-token" content="{{ csrf_token() }}">
<meta name="apple-mobile-web-app-capable" content="yes"/>
<meta name="robots" content="index, follow">
<meta name="twitter:card" content="summary">
<meta name="twitter:title" content="What does it feel like to have early onset Alzheimer?">
<meta property="twitter:url" content="{{ Request::url() }}">
<meta name="twitter:description" content="Someone with early-onset Alzheimer’s may start to have difficulties with memory, planning, and problem-solving. Besides, making poor financial decisions may be concerning, too. Forgetting to pay monthly bills is one of the first warning signs that might occur. Familiar day-to-day tasks require more and more concentration. A person with early-onset Alzheimer’s may show anxiety, confusion, depression, frustration, or suspicious behavior.">
<!-- 1100 X 628 -->
<meta name="twitter:image" content="{{ asset('assets/blog/alz/1317/horizontal.jpg') }}">
<meta property="og:title" content="What does it feel like to have early onset Alzheimer?">
<meta property="og:site_name" content="Psychology To Go">
<meta property="og:description" content="Someone with early-onset Alzheimer’s may start to have difficulties with memory, planning, and problem-solving. Besides, making poor financial decisions may be concerning, too. Forgetting to pay monthly bills is one of the first warning signs that might occur. Familiar day-to-day tasks require more and more concentration. A person with early-onset Alzheimer’s may show anxiety, confusion, depression, frustration, or suspicious behavior.">
<!-- 1200 x 630 -->
<meta property="og:image" content="{{ asset('assets/blog/alz/1317/horizontal.jpg') }}">
<meta property="og:url" content="{{ Request::url() }}">
<meta property="og:type" content="website">
<link rel="preload" href="{{ asset('assets/blog/alz/1317/horizontal.jpg') }}" as="image">
<link rel="preload" href="{{ asset('assets/blog/alz/1317/vertical.jpg') }}" as="image">
<meta property="article:published_time" content="2021-01-03 21:29:22" />
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
@endslot
@slot('content')
<section style="background-color: #000;margin-top:-8%;" class="container-video">
<amp-video autoplay loop width="1920" class="showForDesktopTablet"
    height="1080"
    layout="responsive"
    poster="{{ asset('assets/blog/alz/1317/horizontal.jpg') }}">
    <source src="assets/blog/alz/1317/horizontal.webm"
      type="video/webm" />
    <source src="assets/blog/alz/1317/horizontal.mp4"
      type="video/mp4" />
    <div fallback>
      <p>This browser does not support the video element.</p>
    </div>
  </amp-video>
  <amp-video autoplay loop width="1080" class="showForMobile"
    height="1920"
    layout="responsive"
    poster="{{ asset('assets/blog/alz/1317/vertical.jpg') }}">
    <source src="assets/blog/alz/1317/vertical.webm"
      type="video/webm" />
    <source src="assets/blog/alz/1317/vertical.mp4"
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
      "transform": ["translateY(0px)","translateY(3px)","translateY(10px)","translateY(600px)"]
    }
  }]
}
</script>
</amp-animation>
<amp-position-observer  on="scroll:blogphototext.seekTo(percent=event.percent)" layout="nodisplay"></amp-position-observer>

<div class="text-container" id="blogphototext">
  <h1 class="huge_sans_serif_h1 center">What does it feel like to have early onset Alzheimer?</h1>
</div>


<button class="h-topic btn2h" on="tap:share_article">
<svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 24 24" style="margin-top: 2px"><path d="M0 0h24v24H0z" fill="none"/><path fill="white" d="M16.5 3c-1.74 0-3.41.81-4.5 2.09C10.91 3.81 9.24 3 7.5 3 4.42 3 2 5.42 2 8.5c0 3.78 3.4 6.86 8.55 11.54L12 21.35l1.45-1.32C18.6 15.36 22 12.28 22 8.5 22 5.42 19.58 3 16.5 3zm-4.4 15.55l-.1.1-.1-.1C7.14 14.24 4 11.39 4 8.5 4 6.5 5.5 5 7.5 5c1.54 0 3.04.99 3.57 2.36h1.87C13.46 5.99 14.96 5 16.5 5c2 0 3.5 1.5 3.5 3.5 0 2.89-3.14 5.74-7.9 10.05z"/></svg>
</button>
</section>
<section style="background-color: #fff; padding: 3.5rem 0 1.5rem 0;">
   <div class="container-rounded mx-auto light-bg-1">
      <div class="container-medium mx-auto">
         <div amp-fx="fade-in-scroll" data-repeat=""><p class="sans_serif_p"><b>Someone with early-onset Alzheimer’s may start to have difficulties with memory, planning, and problem-solving. Besides, making poor financial decisions may be concerning, too. Forgetting to pay monthly bills is one of the first warning signs that might occur. Familiar day-to-day tasks require more and more concentration. A person with early-onset Alzheimer’s may show anxiety, confusion, depression, frustration, or suspicious behavior.</b></p></div>
         <div amp-fx="fade-in-scroll" data-repeat=""><p class="sans_serif_p">Family, co-workers, and friends notice behavior changes first.</p></div>
         <div amp-fx="fade-in-scroll" data-repeat=""><p class="sans_serif_p">Typically, phrases like “You seem different” or “You seem very frustrated lately” serve as a good indicator. </p></div>
         <div amp-fx="fade-in-scroll" data-repeat=""><p class="sans_serif_p">Such behavior is a result of the individual’s frustration of not being able to understand the changes, which take place.</p></div>
         <div amp-fx="fade-in-scroll" data-repeat="">
            <div class="selectatopic dark-bg" style="max-width: 470px;">
               <div class="bigdick">
                  <svg xmlns="http://www.w3.org/2000/svg" enable-background="new 0 0 24 24" viewBox="0 0 24 24" fill="#e3e3e3" width="40px" height="40px">
                     <g>
                        <rect fill="none" height="24" width="24"/>
                     </g>
                     <g>
                        <g>
                           <path d="M13,8.57c-0.79,0-1.43,0.64-1.43,1.43s0.64,1.43,1.43,1.43s1.43-0.64,1.43-1.43S13.79,8.57,13,8.57z"/>
                           <path d="M13,3C9.25,3,6.2,5.94,6.02,9.64L4.1,12.2C3.85,12.53,4.09,13,4.5,13H6v3c0,1.1,0.9,2,2,2h1v3h7v-4.68 c2.36-1.12,4-3.53,4-6.32C20,6.13,16.87,3,13,3z M16,10c0,0.13-0.01,0.26-0.02,0.39l0.83,0.66c0.08,0.06,0.1,0.16,0.05,0.25 l-0.8,1.39c-0.05,0.09-0.16,0.12-0.24,0.09l-0.99-0.4c-0.21,0.16-0.43,0.29-0.67,0.39L14,13.83c-0.01,0.1-0.1,0.17-0.2,0.17h-1.6 c-0.1,0-0.18-0.07-0.2-0.17l-0.15-1.06c-0.25-0.1-0.47-0.23-0.68-0.39l-0.99,0.4c-0.09,0.03-0.2,0-0.25-0.09l-0.8-1.39 c-0.05-0.08-0.03-0.19,0.05-0.25l0.84-0.66C10.01,10.26,10,10.13,10,10c0-0.13,0.02-0.27,0.04-0.39L9.19,8.95 c-0.08-0.06-0.1-0.16-0.05-0.26l0.8-1.38c0.05-0.09,0.15-0.12,0.24-0.09l1,0.4c0.2-0.15,0.43-0.29,0.67-0.39l0.15-1.06 C12.02,6.07,12.1,6,12.2,6h1.6c0.1,0,0.18,0.07,0.2,0.17l0.15,1.06c0.24,0.1,0.46,0.23,0.67,0.39l1-0.4c0.09-0.03,0.2,0,0.24,0.09 l0.8,1.38c0.05,0.09,0.03,0.2-0.05,0.26l-0.85,0.66C15.99,9.73,16,9.86,16,10z"/>
                        </g>
                     </g>
                  </svg>
               </div>
               <div class="jump" style="color: #8193b2;">
                  Table of Content
               </div>
               <div on="tap:AMP.scrollTo(id='1', position='top', duration=500)" class="selector_topics" tabindex="0" role="button">​Who gets early-onset Alzheimer's?</div>
               <div on="tap:AMP.scrollTo(id='2', position='top', duration=500)" class="selector_topics" tabindex="0" role="button">How is early-onset Alzheimer’s diagnosed?</div>
               <div on="tap:AMP.scrollTo(id='3', position='top', duration=500)" class="selector_topics" tabindex="0" role="button">Can Alzheimer's be treated if caught early?</div>
               <div on="tap:AMP.scrollTo(id='4', position='top', duration=500)" class="selector_topics" tabindex="0" role="button">A word from the author</div>
               <div on="tap:AMP.scrollTo(id='resources', position='top', duration=500)" class="selector_topics" tabindex="0" role="button">List of Resources</div>
               <div on="tap:AMP.scrollTo(id='author', position='top', duration=500)" class="selector_topics" tabindex="0" role="button">About the Author</div>
            </div>
         </div>

      </div>
   </div>
</section>
@include('website.articles.ads.0')
<section id="1" style="background-color: #fff;">
   <div class="container-rounded mx-auto light-bg-1">
      <div class="container-medium mx-auto">
         <div amp-fx="fade-in-scroll" data-repeat="">
            <h2 class="sans_serif_h2 pb2">​Who gets early-onset Alzheimer's?</h2>
         </div>
         <div amp-fx="fade-in-scroll" data-repeat=""><p class="sans_serif_p"><b>Early-onset Alzheimer’s is diagnosed in adults that are under the age of 65. Some studies show Alzheimer’s starts progression from as early as the age of 18. However, it is most commonly diagnosed in the age group 40 to 50. </b></p></div>
         <div amp-fx="fade-in-scroll" data-repeat=""><p class="sans_serif_p">Many people are living with Alzheimer’s disease. However, <span role="button" tabindex="0" on="tap:lgtbx6NNkHWLJ" class="link">Younger people may get Alzheimer’s disease, but it is less common.<svg class="svgtrust" xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24"><path d="M0 0h24v24H0z" fill="none"/><path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm-2 15l-5-5 1.41-1.41L10 14.17l7.59-7.59L19 8l-9 9z"/></svg></span></p></div>
         <div amp-fx="fade-in-scroll" data-repeat=""><p class="sans_serif_p">Estimations for the USA go as high as 200,000.</p></div>
         <div id="picture-Section:3">
  <div class="mx-auto" style="max-width: 73rem">
  <div class="relative amp-shadow bordering" amp-fx="fade-in-scroll" data-repeat>
    <amp-img alt="USA Estimation: 200,000 people live with early-onset Alzheimer's" layout="responsive" class="bordering"
    srcset="{{ asset('assets/blog/alz/1317/3_1280.webp') }},
    {{ asset('assets/blog/alz/1317/3_2560.webp') }} 2x"
    src="{{ asset('assets/blog/alz/1317/3_2560.webp') }}" height="1440" width="2560">
    <amp-img fallback alt="USA Estimation: 200,000 people live with early-onset Alzheimer's" layout="responsive" class="bordering"
    srcset="{{ asset('assets/blog/alz/1317/3_1280.jpg') }},
    {{ asset('assets/blog/alz/1317/3_2560.jpg') }} 2x"
    src="{{ asset('assets/blog/alz/1317/3_2560.jpg') }}" height="1440" width="2560">
    </amp-img></amp-img>
      <div class="download" on="tap:piclgtbxRVQGz3OU" role="button" tabindex="0" amp-fx="fade-in" data-margin-start="20%">
        <svg xmlns="http://www.w3.org/2000/svg" style="display: block; transform: scale(-1,1); margin-left: -5px" viewBox="0 0 24 24" fill="#fff" width="27px" height="27px"><path d="M0 0h24v24H0z" fill="none"/><path d="M10 9V5l-7 7 7 7v-4.1c5 0 8.5 1.6 11 5.1-1-5-4-10-11-11z"/></svg>
        <span class="font_helv"style="color:#fff; font-size: 16px; margin: 3px 0 0 5px; font-weight:500;letter-spacing: .08em;">SHARE</span>
      </div>
  </div>
</div>
<amp-lightbox id="piclgtbxRVQGz3OU" layout="nodisplay">
  <div class="dark_ovrlay_lightroom" on="tap:piclgtbxRVQGz3OU.close" role="button" tabindex="0"></div>
      <div class="popup">
        <p class="sans_serif_p" style="margin:0; padding-top:0;">Share</p>
        <span role="button" tabindex="0" on="tap:piclgtbxRVQGz3OU.close" class="sans_serif_p xclose" style="margin:0; padding:0;" title="close popup" role="button" tabindex="0">X</span>
        <a class="iconsocialdownload2" href="{{ asset('assets/blog/alz/1317/3_2560.jpg') }}" download title="Download USA Estimation: 200,000 people live with early-onset Alzheimer's">
          <svg xmlns="http://www.w3.org/2000/svg" style="margin: 12px 0px 0px 13px" height="28" viewBox="0 0 24 24" width="28"><path d="M0 0h24v24H0z" fill="none"/><path d="M19.35 10.04C18.67 6.59 15.64 4 12 4 9.11 4 6.6 5.64 5.35 8.04 2.34 8.36 0 10.91 0 14c0 3.31 2.69 6 6 6h13c2.76 0 5-2.24 5-5 0-2.64-2.05-4.78-4.65-4.96zM17 13l-5 5-5-5h3V9h4v4h3z"/></svg>
        </a>
        <amp-social-share class="rounded"
          type="email"
          width="55"
          height="55"></amp-social-share>
        <amp-social-share class="rounded"
          type="facebook"
          data-param-app_id="193632038697722"
          width="55"
          height="55"></amp-social-share>
        <amp-social-share class="rounded"
          type="linkedin"
          width="55"
          height="55"></amp-social-share>
        <amp-social-share class="rounded"
          type="pinterest"
          data-param-media="{{ asset('assets/blog/alz/1317/3_2560.jpg') }}"
          width="55"
          height="55"></amp-social-share>
        <amp-social-share class="rounded"
          type="tumblr"
          width="55"
          height="55"></amp-social-share>
        <amp-social-share class="rounded"
          type="twitter"
          width="55"
          height="55"></amp-social-share>
        <amp-social-share class="rounded"
          type="whatsapp"
          width="55"
          height="55"></amp-social-share>
        <amp-social-share class="rounded"
          type="line"
          width="55"
          height="55"></amp-social-share>
          <div class="relative copybox">
            <p class="sans_serif_p" style="margin:0; padding:0;">{{ asset('assets/blog/alz/1317/3_2560.jpg') }}</p>
          </div>
        <p class="sublinkcopy">The picture is published with a <a href="https://creativecommons.org/licenses/by-sa/2.0/?ref=ccsearch&atype=rich" class="link" title="Link to the License explanation">CC BY-SA 2.0 license.</a> You can freely embed it on your website, by providing a link to this page. </p>
      </div>
  </amp-lightbox>
  <p class="subpicture">USA Estimation: 200,000 people live with early-onset Alzheimer's</p>
</div>

         <div amp-fx="fade-in-scroll" data-repeat=""><p class="sans_serif_p">If you want to know who gets Alzheimer’s, you can read about it in the <a class="link-dark" href="https://psychology-to-go.com/alzheimers">“All you need to know about Alzheimer’s”</a> guide.</p></div>
      </div>
   </div>
</section>
@include('website.articles.ads.2')
<section id="2" style="background-color: #fff;">
   <div class="container-rounded mx-auto light-bg-2">
      <div class="container-medium mx-auto">
         <div amp-fx="fade-in-scroll" data-repeat="">
            <h2 class="sans_serif_h2 pb2">How is early-onset Alzheimer’s diagnosed?</h2>
         </div>
         <div amp-fx="fade-in-scroll" data-repeat=""><p class="sans_serif_p">
<b>An early-onset Alzheimer’s requires a comprehensive medical evaluation. Usually, a cognitive test, as well as a neurological examination, is administered. However, health care providers are currently not focusing on early-onset Alzheimer’s. Thus, receiving a diagnosis can be a long process. Symptoms might be incorrectly attributed to stress.</b>
         </p></div>
         <div amp-fx="fade-in-scroll" data-repeat=""><p class="sans_serif_p">What to do if you are experiencing memory problems?</p></div>
         <div amp-fx="fade-in-scroll" data-repeat=""><p class="sans_serif_p">Write down your symptoms, including memory loss or other cognitive difficulties.</p></div>
         <div amp-fx="fade-in-scroll" data-repeat=""><p class="sans_serif_p">This list of symptoms can be shared with an Alzheimer’s specialist later on. </p></div>
         <div id="picture-Section:2">
  <div class="mx-auto" style="max-width: 73rem">
  <div class="relative amp-shadow bordering" amp-fx="fade-in-scroll" data-repeat>
    <amp-img alt="Early-onset Alzheimer's: Write down a list of symptoms to keep track of the development" layout="responsive" class="bordering"
    srcset="{{ asset('assets/blog/alz/1317/2_1280.webp') }},
    {{ asset('assets/blog/alz/1317/2_2560.webp') }} 2x"
    src="{{ asset('assets/blog/alz/1317/2_2560.webp') }}" height="1440" width="2560">
    <amp-img fallback alt="Early-onset Alzheimer's: Write down a list of symptoms to keep track of the development" layout="responsive" class="bordering"
    srcset="{{ asset('assets/blog/alz/1317/2_1280.jpg') }},
    {{ asset('assets/blog/alz/1317/2_2560.jpg') }} 2x"
    src="{{ asset('assets/blog/alz/1317/2_2560.jpg') }}" height="1440" width="2560">
    </amp-img></amp-img>
      <div class="download" on="tap:piclgtbxrt5vg5R4" role="button" tabindex="0" amp-fx="fade-in" data-margin-start="20%">
        <svg xmlns="http://www.w3.org/2000/svg" style="display: block; transform: scale(-1,1); margin-left: -5px" viewBox="0 0 24 24" fill="#fff" width="27px" height="27px"><path d="M0 0h24v24H0z" fill="none"/><path d="M10 9V5l-7 7 7 7v-4.1c5 0 8.5 1.6 11 5.1-1-5-4-10-11-11z"/></svg>
        <span class="font_helv"style="color:#fff; font-size: 16px; margin: 3px 0 0 5px; font-weight:500;letter-spacing: .08em;">SHARE</span>
      </div>
  </div>
</div>
<amp-lightbox id="piclgtbxrt5vg5R4" layout="nodisplay">
  <div class="dark_ovrlay_lightroom" on="tap:piclgtbxrt5vg5R4.close" role="button" tabindex="0"></div>
      <div class="popup">
        <p class="sans_serif_p" style="margin:0; padding-top:0;">Share</p>
        <span role="button" tabindex="0" on="tap:piclgtbxrt5vg5R4.close" class="sans_serif_p xclose" style="margin:0; padding:0;" title="close popup" role="button" tabindex="0">X</span>
        <a class="iconsocialdownload2" href="{{ asset('assets/blog/alz/1317/2_2560.jpg') }}" download title="Download Early-onset Alzheimer's: Write down a list of symptoms to keep track of the development">
          <svg xmlns="http://www.w3.org/2000/svg" style="margin: 12px 0px 0px 13px" height="28" viewBox="0 0 24 24" width="28"><path d="M0 0h24v24H0z" fill="none"/><path d="M19.35 10.04C18.67 6.59 15.64 4 12 4 9.11 4 6.6 5.64 5.35 8.04 2.34 8.36 0 10.91 0 14c0 3.31 2.69 6 6 6h13c2.76 0 5-2.24 5-5 0-2.64-2.05-4.78-4.65-4.96zM17 13l-5 5-5-5h3V9h4v4h3z"/></svg>
        </a>
        <amp-social-share class="rounded"
          type="email"
          width="55"
          height="55"></amp-social-share>
        <amp-social-share class="rounded"
          type="facebook"
          data-param-app_id="193632038697722"
          width="55"
          height="55"></amp-social-share>
        <amp-social-share class="rounded"
          type="linkedin"
          width="55"
          height="55"></amp-social-share>
        <amp-social-share class="rounded"
          type="pinterest"
          data-param-media="{{ asset('assets/blog/alz/1317/2_2560.jpg') }}"
          width="55"
          height="55"></amp-social-share>
        <amp-social-share class="rounded"
          type="tumblr"
          width="55"
          height="55"></amp-social-share>
        <amp-social-share class="rounded"
          type="twitter"
          width="55"
          height="55"></amp-social-share>
        <amp-social-share class="rounded"
          type="whatsapp"
          width="55"
          height="55"></amp-social-share>
        <amp-social-share class="rounded"
          type="line"
          width="55"
          height="55"></amp-social-share>
          <div class="relative copybox">
            <p class="sans_serif_p" style="margin:0; padding:0;">{{ asset('assets/blog/alz/1317/2_2560.jpg') }}</p>
          </div>
        <p class="sublinkcopy">The picture is published with a <a href="https://creativecommons.org/licenses/by-sa/2.0/?ref=ccsearch&atype=rich" class="link" title="Link to the License explanation">CC BY-SA 2.0 license.</a> You can freely embed it on your website, by providing a link to this page. </p>
      </div>
  </amp-lightbox>
  <p class="subpicture">Early-onset Alzheimer's: Write down a list of symptoms to keep track of the development</p>
</div>

         <div amp-fx="fade-in-scroll" data-repeat=""><p class="sans_serif_p">For example, difficulties performing my daily tasks at work (specifically arithmetic tasks), difficulties recalling a list of words, etc. </p></div>
         <div amp-fx="fade-in-scroll" data-repeat=""><p class="sans_serif_p">  <span role="button" tabindex="0" on="tap:lgtbxKCoS1zDH" class="link">Difficulty completing familiar tasks at home, at work, or at leisure: having problems with cooking, driving places, using a cell phone, or shopping.<svg class="svgtrust" xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24"><path d="M0 0h24v24H0z" fill="none"/><path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm-2 15l-5-5 1.41-1.41L10 14.17l7.59-7.59L19 8l-9 9z"/></svg></span></p></div>
         <div amp-fx="fade-in-scroll" data-repeat=""><p class="sans_serif_p">Find a neurologist, psychologist or doctor, who specialized in Alzheimer’s disease. </p></div>
         <div amp-fx="fade-in-scroll" data-repeat=""><p class="sans_serif_p">Those specialists administer neurological examinations and cognitive tests with you. </p></div>
       </div>
   </div>
</section>
@include('website.articles.ads.3')
<section id="3" style="background-color: #fff;">
   <div class="container-rounded mx-auto light-bg-1">
      <div class="container-medium mx-auto">
         <div amp-fx="fade-in-scroll" data-repeat="">
            <h2 class="sans_serif_h2 pb2">Can Alzheimer's be treated if caught early?</h2>
         </div>
         <div amp-fx="fade-in-scroll" data-repeat=""><p class="sans_serif_p"><b>Alzheimer’s is not curable. An early diagnosis of Alzheimer's gives chances to access treatment options and make financial plans for the future. While current medication does not prevent, cure or stop early-onset Alzheimer’s, it can help to lessen symptoms. Such symptoms include memory loss and other cognitive difficulties. </b></p></div>
         <div amp-fx="fade-in-scroll" data-repeat=""><p class="sans_serif_p">  <span role="button" tabindex="0" on="tap:lgtbxV43yT3X8" class="link">Current approaches focus on helping people maintain mental function, manage behavioral symptoms, and slow down certain problems, such as memory loss.<svg class="svgtrust" xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24"><path d="M0 0h24v24H0z" fill="none"/><path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm-2 15l-5-5 1.41-1.41L10 14.17l7.59-7.59L19 8l-9 9z"/></svg></span></p></div>
         <div amp-fx="fade-in-scroll" data-repeat=""><p class="sans_serif_p">In my opinion, after receiving an early-onset Alzheimer’s diagnosis one should visit a therapist at least every second month.</p></div>
         <div amp-fx="fade-in-scroll" data-repeat=""><p class="sans_serif_p">Comorbid diseases are common with Alzheimer’s.</p></div>
         <div amp-fx="fade-in-scroll" data-repeat=""><p class="sans_serif_p">One comorbid disease, which is treatable, is depression.</p></div>
         <div id="picture-Section:1">
           <div class="mx-auto" style="max-width: 73rem">
           <div class="relative amp-shadow bordering" amp-fx="fade-in-scroll" data-repeat>
             <amp-img alt="Early-onset Alzheimer's: Comorbide diseases like depression are common with Alzheimer's" layout="responsive" class="bordering"
             srcset="{{ asset('assets/blog/alz/1317/1_1280.webp') }},
             {{ asset('assets/blog/alz/1317/1_2560.webp') }} 2x"
             src="{{ asset('assets/blog/alz/1317/1_2560.webp') }}" height="1440" width="2560">
             <amp-img fallback alt="Early-onset Alzheimer's: Comorbide diseases like depression are common with Alzheimer's" layout="responsive" class="bordering"
             srcset="{{ asset('assets/blog/alz/1317/1_1280.jpg') }},
             {{ asset('assets/blog/alz/1317/1_2560.jpg') }} 2x"
             src="{{ asset('assets/blog/alz/1317/1_2560.jpg') }}" height="1440" width="2560">
             </amp-img></amp-img>
               <div class="download" on="tap:piclgtbxJnUyXIVF" role="button" tabindex="0" amp-fx="fade-in" data-margin-start="20%">
                 <svg xmlns="http://www.w3.org/2000/svg" style="display: block; transform: scale(-1,1); margin-left: -5px" viewBox="0 0 24 24" fill="#fff" width="27px" height="27px"><path d="M0 0h24v24H0z" fill="none"/><path d="M10 9V5l-7 7 7 7v-4.1c5 0 8.5 1.6 11 5.1-1-5-4-10-11-11z"/></svg>
                 <span class="font_helv"style="color:#fff; font-size: 16px; margin: 3px 0 0 5px; font-weight:500;letter-spacing: .08em;">SHARE</span>
               </div>
           </div>
         </div>
         <amp-lightbox id="piclgtbxJnUyXIVF" layout="nodisplay">
           <div class="dark_ovrlay_lightroom" on="tap:piclgtbxJnUyXIVF.close" role="button" tabindex="0"></div>
               <div class="popup">
                 <p class="sans_serif_p" style="margin:0; padding-top:0;">Share</p>
                 <span role="button" tabindex="0" on="tap:piclgtbxJnUyXIVF.close" class="sans_serif_p xclose" style="margin:0; padding:0;" title="close popup" role="button" tabindex="0">X</span>
                 <a class="iconsocialdownload2" href="{{ asset('assets/blog/alz/1317/1_2560.jpg') }}" download title="Download Early-onset Alzheimer's: Comorbide diseases like depression are common with Alzheimer's">
                   <svg xmlns="http://www.w3.org/2000/svg" style="margin: 12px 0px 0px 13px" height="28" viewBox="0 0 24 24" width="28"><path d="M0 0h24v24H0z" fill="none"/><path d="M19.35 10.04C18.67 6.59 15.64 4 12 4 9.11 4 6.6 5.64 5.35 8.04 2.34 8.36 0 10.91 0 14c0 3.31 2.69 6 6 6h13c2.76 0 5-2.24 5-5 0-2.64-2.05-4.78-4.65-4.96zM17 13l-5 5-5-5h3V9h4v4h3z"/></svg>
                 </a>
                 <amp-social-share class="rounded"
                   type="email"
                   width="55"
                   height="55"></amp-social-share>
                 <amp-social-share class="rounded"
                   type="facebook"
                   data-param-app_id="193632038697722"
                   width="55"
                   height="55"></amp-social-share>
                 <amp-social-share class="rounded"
                   type="linkedin"
                   width="55"
                   height="55"></amp-social-share>
                 <amp-social-share class="rounded"
                   type="pinterest"
                   data-param-media="{{ asset('assets/blog/alz/1317/1_2560.jpg') }}"
                   width="55"
                   height="55"></amp-social-share>
                 <amp-social-share class="rounded"
                   type="tumblr"
                   width="55"
                   height="55"></amp-social-share>
                 <amp-social-share class="rounded"
                   type="twitter"
                   width="55"
                   height="55"></amp-social-share>
                 <amp-social-share class="rounded"
                   type="whatsapp"
                   width="55"
                   height="55"></amp-social-share>
                 <amp-social-share class="rounded"
                   type="line"
                   width="55"
                   height="55"></amp-social-share>
                   <div class="relative copybox">
                     <p class="sans_serif_p" style="margin:0; padding:0;">{{ asset('assets/blog/alz/1317/1_2560.jpg') }}</p>
                   </div>
                 <p class="sublinkcopy">The picture is published with a <a href="https://creativecommons.org/licenses/by-sa/2.0/?ref=ccsearch&atype=rich" class="link" title="Link to the License explanation">CC BY-SA 2.0 license.</a> You can freely embed it on your website, by providing a link to this page. </p>
               </div>
           </amp-lightbox>
           <p class="subpicture">Early-onset Alzheimer's: Comorbide diseases like depression are common with Alzheimer's</p>
       </div>


         <div amp-fx="fade-in-scroll" data-repeat=""><p class="sans_serif_p">The therapist can assess depression by administering Beck’s Inventory. </p></div>
         <div amp-fx="fade-in-scroll" data-repeat=""><p class="sans_serif_p">In case comorbid depression is diagnosed the therapist can help with professional care.</p></div>
         <div amp-fx="fade-in-scroll" data-repeat=""><p class="sans_serif_p">Then, psychotherapy and antidepressants are a good way as a treatment plan (Again in my personal opinion).</p></div>
       </div>
   </div>
</section>
@include('website.articles.ads.4')
<section id="4" style="background-color: #fff;">
   <div class="container-rounded mx-auto light-bg-2">
      <div class="container-medium mx-auto">
         <div amp-fx="fade-in-scroll" data-repeat="">
            <h2 class="sans_serif_h2 pb2">A word from the author </h2>
         </div>
         <div amp-fx="fade-in-scroll" data-repeat=""><p class="sans_serif_p">Alzheimer’s is a disease affecting the brain. Ultimately, it has a fatal end. However, the progression of the disease starts slowly. This means one has plenty of good days left. Try not to focus on the end. Try to focus on what to do with the time that is left. </p></div>
         <div amp-fx="fade-in-scroll" data-repeat=""><p class="sans_serif_p"><span role="button" tabindex="0" on="tap:lgtbxxLim8ndN" class="link">What to do if you suspect Alzheimer’s disease: Getting checked by your healthcare provider can help determine if the symptoms you are experiencing are related to Alzheimer’s disease, or a more treatable conditions such as a vitamin deficiency or a side effect from medication<svg class="svgtrust" xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24"><path d="M0 0h24v24H0z" fill="none"/><path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm-2 15l-5-5 1.41-1.41L10 14.17l7.59-7.59L19 8l-9 9z"/></svg></span>
  </p></div>
         <div amp-fx="fade-in-scroll" data-repeat=""><p class="sans_serif_p">Besides, every good day can be used to do something meaningful. </p></div>
         <div id="picture-Section:4">
  <div class="mx-auto" style="max-width: 73rem">
  <div class="relative amp-shadow bordering" amp-fx="fade-in-scroll" data-repeat>
    <amp-img alt="Every good day can be used to do something meaningful." layout="responsive" class="bordering"
    srcset="{{ asset('assets/blog/alz/1317/4_1280.webp') }},
    {{ asset('assets/blog/alz/1317/4_2560.webp') }} 2x"
    src="{{ asset('assets/blog/alz/1317/4_2560.webp') }}" height="1440" width="2560">
    <amp-img fallback alt="Every good day can be used to do something meaningful." layout="responsive" class="bordering"
    srcset="{{ asset('assets/blog/alz/1317/4_1280.jpg') }},
    {{ asset('assets/blog/alz/1317/4_2560.jpg') }} 2x"
    src="{{ asset('assets/blog/alz/1317/4_2560.jpg') }}" height="1440" width="2560">
    </amp-img></amp-img>
      <div class="download" on="tap:piclgtbx8Mze2QVa" role="button" tabindex="0" amp-fx="fade-in" data-margin-start="20%">
        <svg xmlns="http://www.w3.org/2000/svg" style="display: block; transform: scale(-1,1); margin-left: -5px" viewBox="0 0 24 24" fill="#fff" width="27px" height="27px"><path d="M0 0h24v24H0z" fill="none"/><path d="M10 9V5l-7 7 7 7v-4.1c5 0 8.5 1.6 11 5.1-1-5-4-10-11-11z"/></svg>
        <span class="font_helv"style="color:#fff; font-size: 16px; margin: 3px 0 0 5px; font-weight:500;letter-spacing: .08em;">SHARE</span>
      </div>
  </div>
</div>
<amp-lightbox id="piclgtbx8Mze2QVa" layout="nodisplay">
  <div class="dark_ovrlay_lightroom" on="tap:piclgtbx8Mze2QVa.close" role="button" tabindex="0"></div>
      <div class="popup">
        <p class="sans_serif_p" style="margin:0; padding-top:0;">Share</p>
        <span role="button" tabindex="0" on="tap:piclgtbx8Mze2QVa.close" class="sans_serif_p xclose" style="margin:0; padding:0;" title="close popup" role="button" tabindex="0">X</span>
        <a class="iconsocialdownload2" href="{{ asset('assets/blog/alz/1317/4_2560.jpg') }}" download title="Download Every good day can be used to do something meaningful.">
          <svg xmlns="http://www.w3.org/2000/svg" style="margin: 12px 0px 0px 13px" height="28" viewBox="0 0 24 24" width="28"><path d="M0 0h24v24H0z" fill="none"/><path d="M19.35 10.04C18.67 6.59 15.64 4 12 4 9.11 4 6.6 5.64 5.35 8.04 2.34 8.36 0 10.91 0 14c0 3.31 2.69 6 6 6h13c2.76 0 5-2.24 5-5 0-2.64-2.05-4.78-4.65-4.96zM17 13l-5 5-5-5h3V9h4v4h3z"/></svg>
        </a>
        <amp-social-share class="rounded"
          type="email"
          width="55"
          height="55"></amp-social-share>
        <amp-social-share class="rounded"
          type="facebook"
          data-param-app_id="193632038697722"
          width="55"
          height="55"></amp-social-share>
        <amp-social-share class="rounded"
          type="linkedin"
          width="55"
          height="55"></amp-social-share>
        <amp-social-share class="rounded"
          type="pinterest"
          data-param-media="{{ asset('assets/blog/alz/1317/4_2560.jpg') }}"
          width="55"
          height="55"></amp-social-share>
        <amp-social-share class="rounded"
          type="tumblr"
          width="55"
          height="55"></amp-social-share>
        <amp-social-share class="rounded"
          type="twitter"
          width="55"
          height="55"></amp-social-share>
        <amp-social-share class="rounded"
          type="whatsapp"
          width="55"
          height="55"></amp-social-share>
        <amp-social-share class="rounded"
          type="line"
          width="55"
          height="55"></amp-social-share>
          <div class="relative copybox">
            <p class="sans_serif_p" style="margin:0; padding:0;">{{ asset('assets/blog/alz/1317/4_2560.jpg') }}</p>
          </div>
        <p class="sublinkcopy">The picture is published with a <a href="https://creativecommons.org/licenses/by-sa/2.0/?ref=ccsearch&atype=rich" class="link" title="Link to the License explanation">CC BY-SA 2.0 license.</a> You can freely embed it on your website, by providing a link to this page. </p>
      </div>
  </amp-lightbox>
  <p class="subpicture">Every good day can be used to do something meaningful.</p>
</div>

         <div amp-fx="fade-in-scroll" data-repeat=""><p class="sans_serif_p">Doing something meaningful decreases the risk of suffering comorbid depression. </p></div>
         <div amp-fx="fade-in-scroll" data-repeat=""><p class="sans_serif_p">A therapist can help to find meaning. </p></div>
         <div amp-fx="fade-in-scroll" data-repeat=""><p class="sans_serif_p">Thus, I can only recommend going to a good therapist. </p></div>
         <div amp-fx="fade-in-scroll" data-repeat=""><p class="sans_serif_p">In the <a href="https://psychology-to-go.com/alzheimers" class="link-dark">“All you need to know about Alzheimer’s”</a> guide, one can learn about symptoms, progression of the disease, and what a diagnosis might mean for one’s saving account. </p></div>
      </div>
   </div>
</section>
<section id="resources" style="background-color: #fff;">
  <div class="container-rounded mx-auto" style="padding-bottom: 0rem">
     <div class="container-medium mx-auto" style="padding-bottom: 3rem">
       <div amp-fx="fade-in-scroll" data-repeat="">
          <h2 class="sans_serif_h2 pb2">List of Resources</h2>
       </div>
      <div class="source_flex" amp-fx="fade-in-scroll" data-repeat="">
      <div class="sourcebox1">
        <p class="sans_serif_p" style="padding-top: 0px;margin-top: 20px;">
        <a class="link" on="tap:sources_list.toggleVisibility" role="button" tabindex="0">
         +4 Sources
        </a>
        </p>
      </div>
      <div class="sourcebox2"></div>
      <div class="sourcebox3" style="padding-bottom: 1rem">
      <amp-social-share class="rounded"
        type="email"
        width="55"
        height="55"></amp-social-share>
      <amp-social-share class="rounded"
        type="facebook"
        data-param-app_id="193632038697722"
        width="55"
        height="55"></amp-social-share>
      <amp-social-share class="rounded"
        type="linkedin"
        width="55"
        height="55"></amp-social-share>
      <amp-social-share class="rounded"
        type="pinterest"
        data-param-media="{{ asset('assets/blog/alz/1317/vertical.jpg') }}"
        width="55"
        height="55"></amp-social-share>
      <amp-social-share class="rounded"
        type="tumblr"
        width="55"
        height="55"></amp-social-share>
      <amp-social-share class="rounded"
        type="twitter"
        width="55"
        height="55"></amp-social-share>
      <amp-social-share class="rounded"
        type="whatsapp"
        width="55"
        height="55"></amp-social-share>
      <amp-social-share class="rounded"
        type="line"
        width="55"
        height="55"></amp-social-share>
      </div>
      </div>
      <div id="sources_list" hidden>
        <ul>
          <li>
            <p class="sans_serif_p">What is Alzheimer’s Disease? | CDC. (n.d.). www.cdc.gov. Retrieved April 26, 2021, from <a href="https://www.cdc.gov/aging/aginginfo/alzheimers.htm" target="_blank" rel="noreferrer" class="link">https://www.cdc.gov/aging/aginginfo/alzheimers.htm</a></p>
          </li>
          <li>
            <p class="sans_serif_p">Alzheimer’s Disease Fact Sheet. (n.d.). National Institute on Aging. Retrieved April 27, 2021, from <a href="https://www.nia.nih.gov/health/alzheimers-disease-fact-sheet" target="_blank" rel="noreferrer" class="link">https://www.nia.nih.gov/health/alzheimers-disease-fact-sheet</a></p>
          </li>
          <li>
            <p class="sans_serif_p">10 Warning Signs of Alzheimer’s. (n.d.). www.cdc.gov. Retrieved April 27, 2021, from <a href="https://www.cdc.gov/aging/healthybrain/ten-warning-signs.html" target="_blank" rel="noreferrer" class="link">https://www.cdc.gov/aging/healthybrain/ten-warning-signs.html</a></p>
          </li>
          <li>
            <p class="sans_serif_p">Pfoertner, P. (n.d.). All you need to know about alzheimer’s guide. Psychology-To-Go.Com. Retrieved April 27, 2021, from <a href="https://psychology-to-go.com/alzheimers" target="_blank" rel="noreferrer" class="link">https://psychology-to-go.com/alzheimers</a></p>
          </li>
        </ul>
      </div>
      <div amp-fx="fade-in-scroll" data-repeat style="border-top: 1px solid #ccc"></div>

    </div>
    </div>
  </div>
</section>
<section style="background-color: #fff;">
   <div class="container-rounded mx-auto" style="padding-top: 0rem;padding-bottom: 0rem">
      <div class="container-medium mx-auto" style="padding-top: 0rem;padding-bottom: 0rem">

        <div amp-fx="fade-in-scroll" data-repeat="" style="padding-top: 0rem;padding-bottom: 2rem">
           <h2 class="sans_serif_h2">Good Reads</h2>
        </div>
        <div class="overflow_good_reads flex">

          <div style="order:0" class="good_reads_box bordering">
            <a href="/alzheimers"><!--Guide URL !-->
            <amp-video autoplay loop width="360" class="bordering backgroundimage"
              height="640"
              layout="responsive"
              poster="{{ asset('assets/blog/alz/1317/vertical.jpg') }}"><!--Guide URL !-->
              <source src="assets/blog/alz/1317/vertical.webm"
                type="video/webm" /><!--Guide ID !-->
              <source src="assets/blog/alz/1317/vertical.mp4"
                type="video/mp4" />
              <div fallback>
                <p>This browser does not support the video element.</p>
              </div>
            </amp-video>
            <div class="innerbox dark-bg" style="border-radius:15px">
              <p class="good_read_category" style="color: #f7b42c;">EDITOR'S CHOICE</p>
              <p class="good_read_title">All you need to know about Alzheimer's Guide</p>
              <p class="good_read_read_now">Read Now</p>
            </div>
            </a>
          </div>
          <div style="order:1" class="good_reads_box bordering">
              <a href="/how-do-you-talk-to-someone-with-alzheimers">
                <amp-img alt="How do you talk to someone with Alzheimer's?" layout="responsive" class="bordering backgroundimage"
                srcset="{{ asset('assets/blog/alz/1282/vertical.webp') }}"
                src="{{ asset('assets/blog/alz/1282/vertical.webp') }}" height="640" width="360">
                <amp-img fallback alt="How do you talk to someone with Alzheimer's?" layout="responsive" class="bordering backgroundimage"
                srcset="{{ asset('assets/blog/alz/1282/vertical.jpg') }}"
                src="{{ asset('assets/blog/alz/1282/vertical.jpg') }}" height="640" width="360">
                </amp-img></amp-img>
            <div class="innerbox dark-bg" style="border-radius:15px">
              <p class="good_read_title uplift">How do you talk to someone with Alzheimer's?</p>
              <p class="good_read_read_now">Read Now</p>
            </div>
            </a>
          </div>
          <div style="order:2" class="good_reads_box bordering">
              <a href="/what-are-the-7-stages-of-alzheimers">
                <amp-img alt="What are the 7 stages of Alzheimer's?" layout="responsive" class="bordering backgroundimage"
                srcset="{{ asset('assets/blog/alz/1283/vertical.webp') }}"
                src="{{ asset('assets/blog/alz/1283/vertical.webp') }}" height="640" width="360">
                <amp-img fallback alt="What are the 7 stages of Alzheimer's?" layout="responsive" class="bordering backgroundimage"
                srcset="{{ asset('assets/blog/alz/1283/vertical.jpg') }}"
                src="{{ asset('assets/blog/alz/1283/vertical.jpg') }}" height="640" width="360">
                </amp-img></amp-img>
            <div class="innerbox dark-bg" style="border-radius:15px">
              <p class="good_read_title uplift">What are the 7 stages of Alzheimer's?</p>
              <p class="good_read_read_now">Read Now</p>
            </div>
            </a>
          </div>

        </div>
      </div>
   </div>
</section>
@include('website.articles.author.patric')
<amp-lightbox id="lgtbxxLim8ndN" layout="nodisplay">
<div class="dark_ovrlay_lightroom" on="tap:lgtbxxLim8ndN.close" role="button" tabindex="0"></div>
   <div class="popup">
     <p class="sans_serif_p" style="margin:0; padding-top:0; padding-bottom: 10px;">
       <svg class="trustboxsvg" xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24"><path d="M0 0h24v24H0z" fill="none"/><path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm-2 15l-5-5 1.41-1.41L10 14.17l7.59-7.59L19 8l-9 9z"/></svg>Trusted Source
     </p>
     <span role="button" tabindex="0" on="tap:lgtbxxLim8ndN.close" class="sans_serif_p xclose" style="margin:0; padding:0;outline: none;" title="close popup" role="button" tabindex="0">X</span>
     <p class="sans_serif_p" style="margin:0; padding:10px 0 0 0;">
        <b>Centers for Disease Control and Prevention (CDC)</b></p>
       <div class="relative copybox2">
         <p class="sans_serif_p" style="margin:0; padding:0 0 20px 0;"><em>Governmental Institution</em></p>
       </div>
       <a class="button" style="background-color: rgba(0, 0, 0, 0.95); color: #fff;" href="https://www.cdc.gov/aging/aginginfo/alzheimers.htm" target="_blank" rel="noreferrer">Go To Source</a>
   </div>
</amp-lightbox>
<amp-lightbox id="lgtbx6NNkHWLJ" layout="nodisplay">
<div class="dark_ovrlay_lightroom" on="tap:lgtbx6NNkHWLJ.close" role="button" tabindex="0"></div>
   <div class="popup">
     <p class="sans_serif_p" style="margin:0; padding-top:0; padding-bottom: 10px;">
       <svg class="trustboxsvg" xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24"><path d="M0 0h24v24H0z" fill="none"/><path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm-2 15l-5-5 1.41-1.41L10 14.17l7.59-7.59L19 8l-9 9z"/></svg>Trusted Source
     </p>
     <span role="button" tabindex="0" on="tap:lgtbx6NNkHWLJ.close" class="sans_serif_p xclose" style="margin:0; padding:0;outline: none;" title="close popup" role="button" tabindex="0">X</span>
     <p class="sans_serif_p" style="margin:0; padding:10px 0 0 0;">
        <b>Centers for Disease Control and Prevention (CDC)</b></p>
       <div class="relative copybox2">
         <p class="sans_serif_p" style="margin:0; padding:0 0 20px 0;"><em>Governmental Institution</em></p>
       </div>
       <a class="button" style="background-color: rgba(0, 0, 0, 0.95); color: #fff;" href="https://www.cdc.gov/aging/aginginfo/alzheimers.htm" target="_blank" rel="noreferrer">Go To Source</a>
   </div>
</amp-lightbox>
<amp-lightbox id="lgtbxV43yT3X8" layout="nodisplay">
<div class="dark_ovrlay_lightroom" on="tap:lgtbxV43yT3X8.close" role="button" tabindex="0"></div>
   <div class="popup">
     <p class="sans_serif_p" style="margin:0; padding-top:0; padding-bottom: 10px;">
       <svg class="trustboxsvg" xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24"><path d="M0 0h24v24H0z" fill="none"/><path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm-2 15l-5-5 1.41-1.41L10 14.17l7.59-7.59L19 8l-9 9z"/></svg>Trusted Source
     </p>
     <span role="button" tabindex="0" on="tap:lgtbxV43yT3X8.close" class="sans_serif_p xclose" style="margin:0; padding:0;outline: none;" title="close popup" role="button" tabindex="0">X</span>
     <p class="sans_serif_p" style="margin:0; padding:10px 0 0 0;">
        <b>National Institute on Aging</b></p>
       <div class="relative copybox2">
         <p class="sans_serif_p" style="margin:0; padding:0 0 20px 0;"><em>Governmental Institution</em></p>
       </div>
       <a class="button" style="background-color: rgba(0, 0, 0, 0.95); color: #fff;" href="https://www.nia.nih.gov/health/alzheimers-disease-fact-sheet" target="_blank" rel="noreferrer">Go To Source</a>
   </div>
</amp-lightbox>
<amp-lightbox id="lgtbxKCoS1zDH" layout="nodisplay">
<div class="dark_ovrlay_lightroom" on="tap:lgtbxKCoS1zDH.close" role="button" tabindex="0"></div>
   <div class="popup">
     <p class="sans_serif_p" style="margin:0; padding-top:0; padding-bottom: 10px;">
       <svg class="trustboxsvg" xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24"><path d="M0 0h24v24H0z" fill="none"/><path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm-2 15l-5-5 1.41-1.41L10 14.17l7.59-7.59L19 8l-9 9z"/></svg>Trusted Source
     </p>
     <span role="button" tabindex="0" on="tap:lgtbxKCoS1zDH.close" class="sans_serif_p xclose" style="margin:0; padding:0;outline: none;" title="close popup" role="button" tabindex="0">X</span>
     <p class="sans_serif_p" style="margin:0; padding:10px 0 0 0;">
        <b>Centers for Disease Control and Prevention (CDC)</b></p>
       <div class="relative copybox2">
         <p class="sans_serif_p" style="margin:0; padding:0 0 20px 0;"><em>Governmental Institution</em></p>
       </div>
       <a class="button" style="background-color: rgba(0, 0, 0, 0.95); color: #fff;" href="https://www.cdc.gov/aging/healthybrain/ten-warning-signs.html" target="_blank" rel="noreferrer">Go To Source</a>
   </div>
</amp-lightbox>


<amp-lightbox id="share_article" layout="nodisplay">
  <div class="dark_ovrlay_lightroom" on="tap:share_article.close" role="button" tabindex="0"></div>
      <div class="popup">
        <h2 class="sans_serif_h2" style="margin:0; padding-top:0;">Share</h2>
        <span role="button" tabindex="0" on="tap:share_article.close" class="sans_serif_p xclose" style="margin:0; padding:0;" title="close popup" role="button" tabindex="0">X</span>
        <amp-social-share class="rounded"
          type="email"
          width="55"
          height="55"></amp-social-share>
        <amp-social-share class="rounded"
          type="facebook"
          data-param-app_id="193632038697722"
          width="55"
          height="55"></amp-social-share>
        <amp-social-share class="rounded"
          type="linkedin"
          width="55"
          height="55"></amp-social-share>
        <amp-social-share class="rounded"
          type="pinterest"
          data-param-media="{{ asset('assets/blog/alz/1317/vertical.jpg') }}"
          width="55"
          height="55"></amp-social-share>
        <amp-social-share class="rounded"
          type="tumblr"
          width="55"
          height="55"></amp-social-share>
        <amp-social-share class="rounded"
          type="twitter"
          width="55"
          height="55"></amp-social-share>
        <amp-social-share class="rounded"
          type="whatsapp"
          width="55"
          height="55"></amp-social-share>
        <amp-social-share class="rounded"
          type="line"
          width="55"
          height="55"></amp-social-share>
          <div class="relative copybox">
            <p class="sans_serif_p" style="margin:0; padding:0;">{{ Request::url() }}</p>
          </div>
        <p class="sublinkcopy">This post is published with a <a href="https://creativecommons.org/licenses/by-sa/2.0/?ref=ccsearch&atype=rich" class="link" title="Link to the License explanation">CC BY-SA 2.0 license.</a> You can freely reuse it on your website, by providing a link to this page.</p>
      </div>
  </amp-lightbox>
@endslot
@endcomponent
