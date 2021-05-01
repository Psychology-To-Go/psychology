@component('layouts.main')
@slot('seo')
<title>What is stage 5 Alzheimer's?</title>
<meta name="description" content="The fifth of seven stages is called the moderately severe decline. The individual begins to need help with daily activities. A person may experience confusion with time and place, difficulties recalling personal details, and difficulties dressing oneself. For example, buttoning a shirt is increasingly difficult for a person in stage five. The seven stages system was developed by Dr. Barry Reisberg.">
<link rel="canonical" href="{{ Request::url() }}">
<meta name="csrf-token" content="{{ csrf_token() }}">
<meta name="apple-mobile-web-app-capable" content="yes"/>
<meta name="robots" content="index, follow">
<meta name="twitter:card" content="summary">
<meta name="twitter:title" content="What is stage 5 Alzheimer's?">
<meta property="twitter:url" content="{{ Request::url() }}">
<meta name="twitter:description" content="The fifth of seven stages is called the moderately severe decline. The individual begins to need help with daily activities. A person may experience confusion with time and place, difficulties recalling personal details, and difficulties dressing oneself. For example, buttoning a shirt is increasingly difficult for a person in stage five. The seven stages system was developed by Dr. Barry Reisberg.">
<!-- 1100 X 628 -->
<meta name="twitter:image" content="{{ asset('assets/blog/alz/1302/horizontal.jpg') }}">
<meta property="og:title" content="What is stage 5 Alzheimer's?">
<meta property="og:site_name" content="Psychology To Go">
<meta property="og:description" content="The fifth of seven stages is called the moderately severe decline. The individual begins to need help with daily activities. A person may experience confusion with time and place, difficulties recalling personal details, and difficulties dressing oneself. For example, buttoning a shirt is increasingly difficult for a person in stage five. The seven stages system was developed by Dr. Barry Reisberg.">
<!-- 1200 x 630 -->
<meta property="og:image" content="{{ asset('assets/blog/alz/1302/horizontal.jpg') }}">
<meta property="og:url" content="{{ Request::url() }}">
<meta property="og:type" content="website">
<link rel="preload" href="{{ asset('assets/blog/alz/1302/horizontal.jpg') }}" as="image">
<link rel="preload" href="{{ asset('assets/blog/alz/1302/vertical.jpg') }}" as="image">
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
<section style="background-color: #000;margin-top:-8%;" class="container-large mx-auto">
<amp-video autoplay loop width="1920" class="showForDesktopTablet"
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
  <amp-video autoplay loop width="1080" class="showForMobile"
    height="1920"
    layout="responsive"
    poster="{{ asset('assets/blog/alz/1302/vertical.jpg') }}">
    <source src="assets/blog/alz/1302/vertical.webm"
      type="video/webm" />
    <source src="assets/blog/alz/1302/vertical.mp4"
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
  <h1 class="huge_sans_serif_h1 center">What is stage 5 Alzheimer's?</h1>
</div>
<button class="h-topic btn2h" on="tap:share_article">
<svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 24 24" style="margin-top: 2px"><path d="M0 0h24v24H0z" fill="none"/><path fill="white" d="M16.5 3c-1.74 0-3.41.81-4.5 2.09C10.91 3.81 9.24 3 7.5 3 4.42 3 2 5.42 2 8.5c0 3.78 3.4 6.86 8.55 11.54L12 21.35l1.45-1.32C18.6 15.36 22 12.28 22 8.5 22 5.42 19.58 3 16.5 3zm-4.4 15.55l-.1.1-.1-.1C7.14 14.24 4 11.39 4 8.5 4 6.5 5.5 5 7.5 5c1.54 0 3.04.99 3.57 2.36h1.87C13.46 5.99 14.96 5 16.5 5c2 0 3.5 1.5 3.5 3.5 0 2.89-3.14 5.74-7.9 10.05z"/></svg>
</button>
</section>
<section style="background-color: #fff; padding: 3.5rem 0 1.5rem 0;">
   <div class="container-rounded mx-auto light-bg-1">
      <div class="container-medium mx-auto">
        <div amp-fx="fade-in-scroll" data-repeat=""><p class="sans_serif_p"><b>The fifth of seven stages is called the moderately severe decline. The individual begins to need help with daily activities. A person may experience confusion with time and place, difficulties recalling personal details, and difficulties dressing oneself. For example, buttoning a shirt is increasingly difficult for a person in stage five. The seven stages system was developed by Dr. Barry Reisberg.</b></p></div>
        <div amp-fx="fade-in-scroll" data-repeat=""><p class="sans_serif_p">As mentioned in <a class="link-dark" href="https://psychology-to-go.com/what-are-the-7-stages-of-alzheimers">“What are the 7 stages of Alzheimer's”</a>, Alzheimer’s is a progressive disease.</p></div>
        <div amp-fx="fade-in-scroll" data-repeat=""><p class="sans_serif_p">Moving from the fourth to the fifth stage brings a new set of problems with it.</p></div>

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
               <div on="tap:AMP.scrollTo(id='0', position='top', duration=500)" class="selector_topics" tabindex="0" role="button">Significant confusion with time and place</div>
<div on="tap:AMP.scrollTo(id='1', position='top', duration=500)" class="selector_topics" tabindex="0" role="button">Difficulties recalling personal details</div>
<div on="tap:AMP.scrollTo(id='2', position='top', duration=500)" class="selector_topics" tabindex="0" role="button">Difficulties with everyday activity</div>
<div on="tap:AMP.scrollTo(id='3', position='top', duration=500)" class="selector_topics" tabindex="0" role="button">A Word from the author</div>
               <div on="tap:AMP.scrollTo(id='resources', position='top', duration=500)" class="selector_topics" tabindex="0" role="button">List of Resources</div>
               <div on="tap:AMP.scrollTo(id='author', position='top', duration=500)" class="selector_topics" tabindex="0" role="button">About the Author</div>
            </div>
         </div>


      </div>
   </div>
</section>


@include('website.articles.ads.0')
<section id="0" style="background-color: #fff;">
   <div class="container-rounded mx-auto light-bg-1">
      <div class="container-medium mx-auto">
         <div amp-fx="fade-in-scroll" data-repeat="">
            <h2 class="sans_serif_h2">Significant confusion with time and place</h2>
         </div>
         <div amp-fx="fade-in-scroll" data-repeat=""><p class="sans_serif_p">Your beloved person might face confusing situations with places and time daily.</p></div>
         <div amp-fx="fade-in-scroll" data-repeat=""><p class="sans_serif_p">The Mini-Mental-Status-Test is assessing the severity of this confusion. For example, a question can be “where are you right now”, “in which hospital are you right now”, or “in what room number are you”.</p></div>
         <div amp-fx="fade-in-scroll" data-repeat=""><p class="sans_serif_p">They seem like very simple questions for a healthy person. But, keep in mind <span role="button" tabindex="0" on="tap:lgtbxoePSGwqp" class="link">Alzheimer's is a progressive disease beginning with mild memory loss and possibly leading to loss of the ability to carry on a conversation and respond to the environment.<svg class="svgtrust" xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24"><path d="M0 0h24v24H0z" fill="none"/><path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm-2 15l-5-5 1.41-1.41L10 14.17l7.59-7.59L19 8l-9 9z"/></svg></span></p></div>
         <div amp-fx="fade-in-scroll" data-repeat=""><p class="sans_serif_p">However, damaged neuronal circuits responsible for spatial orientation can not anymore deliver the information needed to answer correctly.</p></div>
         <div amp-fx="fade-in-scroll" data-repeat=""><p class="sans_serif_p">The brain structure responsible to navigate the spatial environment is called the hippocampus.</p></div>
         <div id="picture-Section:2">
  <div class="mx-auto" style="max-width: 73rem">
  <div class="relative amp-shadow bordering" amp-fx="fade-in-scroll" data-repeat>
    <amp-img alt="The Hippocampus is responsible to navigate through a spatial environment." layout="responsive" class="bordering"
    srcset="{{ asset('assets/blog/alz/1302/2_1280.webp') }},
    {{ asset('assets/blog/alz/1302/2_2560.webp') }} 2x"
    src="{{ asset('assets/blog/alz/1302/2_2560.webp') }}" height="1440" width="2560">
    <amp-img fallback alt="The Hippocampus is responsible to navigate through a spatial environment." layout="responsive" class="bordering"
    srcset="{{ asset('assets/blog/alz/1302/2_1280.jpg') }},
    {{ asset('assets/blog/alz/1302/2_2560.jpg') }} 2x"
    src="{{ asset('assets/blog/alz/1302/2_2560.jpg') }}" height="1440" width="2560">
    </amp-img></amp-img>
      <div class="download" on="tap:piclgtbx1UgryDh7" role="button" tabindex="0" amp-fx="fade-in" data-margin-start="20%">
        <svg xmlns="http://www.w3.org/2000/svg" style="display: block; transform: scale(-1,1); margin-left: -5px" viewBox="0 0 24 24" fill="#fff" width="27px" height="27px"><path d="M0 0h24v24H0z" fill="none"/><path d="M10 9V5l-7 7 7 7v-4.1c5 0 8.5 1.6 11 5.1-1-5-4-10-11-11z"/></svg>
        <span class="font_helv"style="color:#fff; font-size: 16px; margin: 3px 0 0 5px; font-weight:500;letter-spacing: .08em;">SHARE</span>
      </div>
  </div>
</div>
<amp-lightbox id="piclgtbx1UgryDh7" layout="nodisplay">
  <div class="dark_ovrlay_lightroom" on="tap:piclgtbx1UgryDh7.close" role="button" tabindex="0"></div>
      <div class="popup">
        <p class="sans_serif_p" style="margin:0; padding-top:0;">Share</p>
        <span role="button" tabindex="0" on="tap:piclgtbx1UgryDh7.close" class="sans_serif_p xclose" style="margin:0; padding:0;" title="close popup" role="button" tabindex="0">X</span>
        <a class="iconsocialdownload2" href="{{ asset('assets/blog/alz/1302/2_2560.jpg') }}" download title="Download The Hippocampus is responsible to navigate through a spatial environment.">
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
          data-param-media="{{ asset('assets/blog/alz/1302/2_2560.jpg') }}"
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
            <p class="sans_serif_p" style="margin:0; padding:0;">{{ asset('assets/blog/alz/1302/2_2560.jpg') }}</p>
          </div>
        <p class="sublinkcopy">The picture is published with a <a href="https://creativecommons.org/licenses/by-sa/2.0/?ref=ccsearch&atype=rich" class="link" title="Link to the License explanation">CC BY-SA 2.0 license.</a> You can freely embed it on your website, by providing a link to this page. </p>
      </div>
  </amp-lightbox>
  <p class="subpicture">The Hippocampus is responsible to navigate through a spatial environment.</p>
</div>

         <div amp-fx="fade-in-scroll" data-repeat=""><p class="sans_serif_p">Hippocampus is embedded deep into the temporal lobe.</p></div>
         <div amp-fx="fade-in-scroll" data-repeat=""><p class="sans_serif_p">The confusion with time and seasons is also tested by the Mini-Mental-Status-Test.</p></div>
         <div amp-fx="fade-in-scroll" data-repeat=""><p class="sans_serif_p">Again, the Mini-Mental-Status-Test is assessing the severity of this confusion. For instance, a question can be “what day of the week is it today?” or “what month do we have currently?”.</p></div>

         <div id="picture-Section:1">
  <div class="mx-auto" style="max-width: 73rem">
  <div class="relative amp-shadow bordering" amp-fx="fade-in-scroll" data-repeat>
    <amp-img alt="The Mini-Mental-Status-Test measures cognitive impairment." layout="responsive" class="bordering"
    srcset="{{ asset('assets/blog/alz/1302/1_1280.webp') }},
    {{ asset('assets/blog/alz/1302/1_2560.webp') }} 2x"
    src="{{ asset('assets/blog/alz/1302/1_2560.webp') }}" height="1440" width="2560">
    <amp-img fallback alt="The Mini-Mental-Status-Test measures cognitive impairment." layout="responsive" class="bordering"
    srcset="{{ asset('assets/blog/alz/1302/1_1280.jpg') }},
    {{ asset('assets/blog/alz/1302/1_2560.jpg') }} 2x"
    src="{{ asset('assets/blog/alz/1302/1_2560.jpg') }}" height="1440" width="2560">
    </amp-img></amp-img>
      <div class="download" on="tap:piclgtbxa1VtzpRp" role="button" tabindex="0" amp-fx="fade-in" data-margin-start="20%">
        <svg xmlns="http://www.w3.org/2000/svg" style="display: block; transform: scale(-1,1); margin-left: -5px" viewBox="0 0 24 24" fill="#fff" width="27px" height="27px"><path d="M0 0h24v24H0z" fill="none"/><path d="M10 9V5l-7 7 7 7v-4.1c5 0 8.5 1.6 11 5.1-1-5-4-10-11-11z"/></svg>
        <span class="font_helv"style="color:#fff; font-size: 16px; margin: 3px 0 0 5px; font-weight:500;letter-spacing: .08em;">SHARE</span>
      </div>
  </div>
</div>
<amp-lightbox id="piclgtbxa1VtzpRp" layout="nodisplay">
  <div class="dark_ovrlay_lightroom" on="tap:piclgtbxa1VtzpRp.close" role="button" tabindex="0"></div>
      <div class="popup">
        <p class="sans_serif_p" style="margin:0; padding-top:0;">Share</p>
        <span role="button" tabindex="0" on="tap:piclgtbxa1VtzpRp.close" class="sans_serif_p xclose" style="margin:0; padding:0;" title="close popup" role="button" tabindex="0">X</span>
        <a class="iconsocialdownload2" href="{{ asset('assets/blog/alz/1302/1_2560.jpg') }}" download title="Download The Mini-Mental-Status-Test measures cognitive impairment.">
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
          data-param-media="{{ asset('assets/blog/alz/1302/1_2560.jpg') }}"
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
            <p class="sans_serif_p" style="margin:0; padding:0;">{{ asset('assets/blog/alz/1302/1_2560.jpg') }}</p>
          </div>
        <p class="sublinkcopy">The picture is published with a <a href="https://creativecommons.org/licenses/by-sa/2.0/?ref=ccsearch&atype=rich" class="link" title="Link to the License explanation">CC BY-SA 2.0 license.</a> You can freely embed it on your website, by providing a link to this page. </p>
      </div>
  </amp-lightbox>
  <p class="subpicture">The Mini-Mental-Status-Test measures cognitive impairment.</p>
</div>

         <div amp-fx="fade-in-scroll" data-repeat=""><p class="sans_serif_p">There are various brain regions associated with the sense of time, including the basal ganglia, cerebellum, frontal cortex, hippocampus, and parietal cortex.</p></div>
         <div amp-fx="fade-in-scroll" data-repeat=""><p class="sans_serif_p">Damaged neuronal circuits in these areas might be responsible for the confusion with time.</p></div>
         <div amp-fx="fade-in-scroll" data-repeat=""><p class="sans_serif_p">Therefore, the beloved person begins to need help with daily activities.</p></div>
      </div>
   </div>
</section>
@include('website.articles.ads.1')
<section id="1" style="background-color: #fff;">
   <div class="container-rounded mx-auto light-bg-2">
      <div class="container-medium mx-auto">
         <div amp-fx="fade-in-scroll" data-repeat="">
            <h2 class="sans_serif_h2">Difficulties recalling personal details</h2>
         </div>
         <div amp-fx="fade-in-scroll" data-repeat=""><p class="sans_serif_p">In stage five recalling details about oneself becomes difficult. On a good day, the information might be present, however, other times it might not be.</p></div>
         <div id="picture-Section:3">
           <div class="mx-auto" style="max-width: 73rem">
           <div class="relative amp-shadow bordering" amp-fx="fade-in-scroll" data-repeat>
             <amp-img alt="In stage five recalling details about oneself becomes difficult." layout="responsive" class="bordering"
             srcset="{{ asset('assets/blog/alz/1302/3_1280.webp') }},
             {{ asset('assets/blog/alz/1302/3_2560.webp') }} 2x"
             src="{{ asset('assets/blog/alz/1302/3_2560.webp') }}" height="1440" width="2560">
             <amp-img fallback alt="In stage five recalling details about oneself becomes difficult." layout="responsive" class="bordering"
             srcset="{{ asset('assets/blog/alz/1302/3_1280.jpg') }},
             {{ asset('assets/blog/alz/1302/3_2560.jpg') }} 2x"
             src="{{ asset('assets/blog/alz/1302/3_2560.jpg') }}" height="1440" width="2560">
             </amp-img></amp-img>
               <div class="download" on="tap:piclgtbx1Aha4fh0" role="button" tabindex="0" amp-fx="fade-in" data-margin-start="20%">
                 <svg xmlns="http://www.w3.org/2000/svg" style="display: block; transform: scale(-1,1); margin-left: -5px" viewBox="0 0 24 24" fill="#fff" width="27px" height="27px"><path d="M0 0h24v24H0z" fill="none"/><path d="M10 9V5l-7 7 7 7v-4.1c5 0 8.5 1.6 11 5.1-1-5-4-10-11-11z"/></svg>
                 <span class="font_helv"style="color:#fff; font-size: 16px; margin: 3px 0 0 5px; font-weight:500;letter-spacing: .08em;">SHARE</span>
               </div>
           </div>
         </div>
         <amp-lightbox id="piclgtbx1Aha4fh0" layout="nodisplay">
           <div class="dark_ovrlay_lightroom" on="tap:piclgtbx1Aha4fh0.close" role="button" tabindex="0"></div>
               <div class="popup">
                 <p class="sans_serif_p" style="margin:0; padding-top:0;">Share</p>
                 <span role="button" tabindex="0" on="tap:piclgtbx1Aha4fh0.close" class="sans_serif_p xclose" style="margin:0; padding:0;" title="close popup" role="button" tabindex="0">X</span>
                 <a class="iconsocialdownload2" href="{{ asset('assets/blog/alz/1302/3_2560.jpg') }}" download title="Download In stage five recalling details about oneself becomes difficult.">
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
                   data-param-media="{{ asset('assets/blog/alz/1302/3_2560.jpg') }}"
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
                     <p class="sans_serif_p" style="margin:0; padding:0;">{{ asset('assets/blog/alz/1302/3_2560.jpg') }}</p>
                   </div>
                 <p class="sublinkcopy">The picture is published with a <a href="https://creativecommons.org/licenses/by-sa/2.0/?ref=ccsearch&atype=rich" class="link" title="Link to the License explanation">CC BY-SA 2.0 license.</a> You can freely embed it on your website, by providing a link to this page. </p>
               </div>
           </amp-lightbox>
           <p class="subpicture">In stage five recalling details about oneself becomes difficult.</p>
       </div>

         <div amp-fx="fade-in-scroll" data-repeat=""><p class="sans_serif_p">Typically, recalling one’s phone number is not anymore possible.</p></div>
         <div amp-fx="fade-in-scroll" data-repeat=""><p class="sans_serif_p">The first numbers might come easy, but your beloved one might forget ending numbers or mix numbers in-between.</p></div>
         <div amp-fx="fade-in-scroll" data-repeat=""><p class="sans_serif_p">One’s age is often not the right one. My grandpa always thought he would be 70, however his age was 89 at this time.</p></div>
         <div amp-fx="fade-in-scroll" data-repeat=""><p class="sans_serif_p">Other personal details that either get mixed up or are not anymore recallable are:</p></div>
         <div amp-fx="fade-in-scroll" data-repeat="">
           <div class="blog_table_div" style="max-width:900px">
             <table style="width:100%" class="blog_table">
               <caption>What do stage 5 Alzheimer’s patient forget?</caption>
               <tr>
                 <th>8 Examples</th>
               </tr>
               <tr>
                 <td>1. Date of Marriage</td>
               </tr>
               <tr>
                 <td>2. One’s own birthday</td>
               </tr>
               <tr>
                 <td>3. Birthday of Others</td>
               </tr>
               <tr>
                 <td>4. Passwords</td>
               </tr>
               <tr>
                 <td>5. One’s own middle name</td>
               </tr>
               <tr>
                 <td>6. One’s own place of birth</td>
               </tr>
               <tr>
                 <td>7. How many children one has</td>
               </tr>
               <tr style="border-bottom: 0px">
                 <td style="border-bottom: 0px">8. Specific personal dates (e.g. engagement day)</td>
               </tr>
             </table>
         </div>
        </div>
         <div amp-fx="fade-in-scroll" data-repeat=""><p class="sans_serif_p">There is more to the list, however, it depends on the person.</p></div>
      </div>
   </div>
</section>
@include('website.articles.ads.2')
<section id="2" style="background-color: #fff;">
   <div class="container-rounded mx-auto light-bg-1">
      <div class="container-medium mx-auto">
         <div amp-fx="fade-in-scroll" data-repeat="">
            <h2 class="sans_serif_h2">Difficulties with everyday activity</h2>
         </div>
         <div amp-fx="fade-in-scroll" data-repeat=""><p class="sans_serif_p">In the fifth stage, the individual is capable to go to the toilet and shower themselves, usually.</p></div>
         <div amp-fx="fade-in-scroll" data-repeat=""><p class="sans_serif_p">Besides, keep in mind <span role="button" tabindex="0" on="tap:lgtbx8y2656Dx" class="link">worldwide, around 50 million people have dementia, and there are nearly 10 million new cases every year.<svg class="svgtrust" xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24"><path d="M0 0h24v24H0z" fill="none"/><path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm-2 15l-5-5 1.41-1.41L10 14.17l7.59-7.59L19 8l-9 9z"/></svg></span>. Thus, there are plenty individuals needing help in their daily activities.</p></div>
         <div amp-fx="fade-in-scroll" data-repeat=""><p class="sans_serif_p">Such daily activity can include:</p></div>
         <div amp-fx="fade-in-scroll" data-repeat="">
           <div class="blog_table_div" style="max-width:900px">
             <table style="width:100%" class="blog_table">
               <caption>Daily activities someone with stage 5 Alzheimer's needs help with</caption>
               <tr>
                 <th>10 Examples</th>
               </tr>
               <tr>
                 <td>1. Cutting paper</td>
               </tr>
               <tr>
                 <td>2. Preparing food</td>
               </tr>
               <tr>
                 <td>3. Finding things (e. g. keys)</td>
               </tr>
               <tr>
                 <td>4. Making financial decision</td>
               </tr>
               <tr>
                 <td>5. Going shopping</td>
               </tr>
               <tr>
                 <td>6. Having a hobby</td>
               </tr>
               <tr>
                 <td>7. Walking (e. g. in a park)</td>
               </tr>
               <tr>
                 <td>8. Going to bed</td>
               </tr>
               <tr>
                 <td>9. Cleaning the house</td>
               </tr>
               <tr style="border-bottom: 0px">
                 <td style="border-bottom: 0px">10. Brushing teeth</td>
               </tr>
             </table>
         </div>
        </div>

      </div>
   </div>
</section>
@include('website.articles.ads.3')
<section id="3" style="background-color: #fff;">
   <div class="container-rounded mx-auto light-bg-2">
      <div class="container-medium mx-auto">
         <div amp-fx="fade-in-scroll" data-repeat="">
            <h2 class="sans_serif_h2">A Word from the author</h2>
            <div amp-fx="fade-in-scroll" data-repeat=""><p class="sans_serif_p">I would like to point out, that someone in this stage is still capable to do a lot of things. However, the help is most needed where the fine motor skill is required.</p></div>
            <div amp-fx="fade-in-scroll" data-repeat=""><p class="sans_serif_p">The additional help should only serve as a way to keeping one’s independence.</p></div>
            <div amp-fx="fade-in-scroll" data-repeat=""><p class="sans_serif_p">In <a class="link-dark" href="https://psychology-to-go.com/what-are-the-7-stages-of-alzheimers">“What are the 7 stages of Alzheimer's”</a> you will see that in the following stages the sense of independence decreases more and more.</p></div>
            <div amp-fx="fade-in-scroll" data-repeat=""><p class="sans_serif_p">So there you have it. These are things to expect in stage five. However, independence is still given in most aspects of life.</p></div>
         </div>
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
         +3 Sources <!--Change here !-->
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
        data-param-media="{{ asset('assets/blog/alz/1302/vertical.jpg') }}"
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
        <ul><!--Change here !-->
          <li>
            <p class="sans_serif_p">Pförtner, P. (n.d.). What are the 7 stages of Alzheimer’s? Psychology-to-Go.Com. Retrieved April 29, 2021, from https://psychology-to-go.com/what-are-the-7-stages-of-alzheimers <a href="https://psychology-to-go.com/what-are-the-7-stages-of-alzheimers" target="_blank" rel="noreferrer" class="link">https://psychology-to-go.com/what-are-the-7-stages-of-alzheimers</a></p>
          </li>
          <li>
            <p class="sans_serif_p">What is Alzheimer’s Disease? | CDC. (n.d.). CDC. Retrieved April 29, 2021, from <a href="https://www.cdc.gov/aging/aginginfo/alzheimers.htm" target="_blank" rel="noreferrer" class="link">https://www.cdc.gov/aging/aginginfo/alzheimers.htm</a></p>
          </li>
          <li>
            <p class="sans_serif_p">Dementia. (2020, September 21). WHO.  Retrieved April 30, 2021, from<a href="https://www.who.int/news-room/fact-sheets/detail/dementia" target="_blank" rel="noreferrer" class="link">https://www.who.int/news-room/fact-sheets/detail/dementia</a></p>
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
              poster="{{ asset('assets/blog/alz/1302/vertical.jpg') }}"><!--Guide URL !-->
              <source src="assets/blog/alz/1302/vertical.webm"
                type="video/webm" /><!--Guide ID !-->
              <source src="assets/blog/alz/1302/vertical.mp4"
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
<amp-lightbox id="lgtbx8y2656Dx" layout="nodisplay">
<div class="dark_ovrlay_lightroom" on="tap:lgtbx8y2656Dx.close" role="button" tabindex="0"></div>
   <div class="popup">
     <p class="sans_serif_p" style="margin:0; padding-top:0; padding-bottom: 10px;">
       <svg class="trustboxsvg" xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24"><path d="M0 0h24v24H0z" fill="none"/><path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm-2 15l-5-5 1.41-1.41L10 14.17l7.59-7.59L19 8l-9 9z"/></svg>Trusted Source
     </p>
     <span role="button" tabindex="0" on="tap:lgtbx8y2656Dx.close" class="sans_serif_p xclose" style="margin:0; padding:0;outline: none;" title="close popup" role="button" tabindex="0">X</span>
     <p class="sans_serif_p" style="margin:0; padding:10px 0 0 0;">
        <b>World Health Organization (WHO)</b></p>
       <div class="relative copybox2">
         <p class="sans_serif_p" style="margin:0; padding:0 0 20px 0;"><em>Specialized agency of the United Nations</em></p>
       </div>
       <a class="button" style="background-color: rgba(0, 0, 0, 0.95); color: #fff;" href="https://www.who.int/news-room/fact-sheets/detail/dementia" target="_blank" rel="noreferrer">Go To Source</a>
   </div>
</amp-lightbox>

<amp-lightbox id="lgtbxoePSGwqp" layout="nodisplay">
<div class="dark_ovrlay_lightroom" on="tap:lgtbxoePSGwqp.close" role="button" tabindex="0"></div>
   <div class="popup">
     <p class="sans_serif_p" style="margin:0; padding-top:0; padding-bottom: 10px;">
       <svg class="trustboxsvg" xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24"><path d="M0 0h24v24H0z" fill="none"/><path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm-2 15l-5-5 1.41-1.41L10 14.17l7.59-7.59L19 8l-9 9z"/></svg>Trusted Source
     </p>
     <span role="button" tabindex="0" on="tap:lgtbxoePSGwqp.close" class="sans_serif_p xclose" style="margin:0; padding:0;outline: none;" title="close popup" role="button" tabindex="0">X</span>
     <p class="sans_serif_p" style="margin:0; padding:10px 0 0 0;">
        <b>Centers for Disease Control and Prevention (CDC)</b></p>
       <div class="relative copybox2">
         <p class="sans_serif_p" style="margin:0; padding:0 0 20px 0;"><em>Governmental</em></p>
       </div>
       <a class="button" style="background-color: rgba(0, 0, 0, 0.95); color: #fff;" href="https://www.cdc.gov/aging/aginginfo/alzheimers.htm" target="_blank" rel="noreferrer">Go To Source</a>
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
          data-param-media="{{ asset('assets/blog/alz/1302/vertical.jpg') }}"
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
