@component('layouts.main')
@slot('seo')
<title>About: Patric Pförtner</title>
<meta name="description" content="Hi, my name is Patric Pfoertner and I graduated 2020 with a B. Sc. Psychology from the NBU. Currently, I work and study in Germany. My specialisations are Cognitive Psychology paired with a good slack of Clinical Psychology. Just this year I started publishing my research in the CBB Journal. Besides, I am a Keynote Speaker and I can offer a psychological consultation. ">
<link rel="canonical" href="{{ Request::url() }}">
<meta name="csrf-token" content="{{ csrf_token() }}">
<meta name="apple-mobile-web-app-capable" content="yes"/>
<meta name="robots" content="index, follow">
<meta name="twitter:card" content="summary">
<meta name="twitter:title" content="About: Patric Pförtner">
<meta property="twitter:url" content="{{ Request::url() }}">
<meta name="twitter:description" content="Hi, my name is Patric Pfoertner and I graduated 2020 with a B. Sc. Psychology from the NBU. Currently, I work and study in Germany. My specialisations are Cognitive Psychology paired with a good slack of Clinical Psychology. Just this year I started publishing my research in the CBB Journal. Besides, I am a Keynote Speaker and I can offer a psychological consultation. ">
<!-- 1100 X 628 -->
<meta name="twitter:image" content="{{ asset('assets/author/horizontal.jpg') }}">
<meta property="og:title" content="About: Patric Pförtner">
<meta property="og:site_name" content="Psychology To Go">
<meta property="og:description" content="Hi, my name is Patric Pfoertner and I graduated 2020 with a B. Sc. Psychology from the NBU. Currently, I work and study in Germany. My specialisations are Cognitive Psychology paired with a good slack of Clinical Psychology. Just this year I started publishing my research in the CBB Journal. Besides, I am a Keynote Speaker and I can offer a psychological consultation. ">
<!-- 1200 x 630 -->
<meta property="og:image" content="{{ asset('assets/author/horizontal.jpg') }}">
<meta property="og:url" content="{{ Request::url() }}">
<meta property="og:type" content="website">
<link rel="preload" href="{{ asset('assets/author/horizontal.jpg') }}" as="image">
<link rel="preload" href="{{ asset('assets/author/vertical.jpg') }}" as="image">
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
<amp-video autoplay loop width="1920" class="showForDesktopTablet"
    height="1080"
    layout="responsive"
    poster="{{ asset('assets/author/horizontal.jpg') }}">
    <source src="assets/author/horizontal.webm"
      type="video/webm" />
    <source src="assets/author/horizontal.mp4"
      type="video/mp4" />
    <div fallback>
      <p>This browser does not support the video element.</p>
    </div>
  </amp-video>
  <amp-video autoplay loop width="1080" class="showForMobile"
    height="1920"
    layout="responsive"
    poster="{{ asset('assets/author/vertical.jpg') }}">
    <source src="assets/author/vertical.webm"
      type="video/webm" />
    <source src="assets/author/vertical.mp4"
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
  <h1 class="huge_sans_serif_h1 center">About: Patric Pförtner</h1>
</div>


<button class="h-topic btn2h" on="tap:share_article">
<svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 24 24" style="margin-top: 2px"><path d="M0 0h24v24H0z" fill="none"/><path fill="white" d="M16.5 3c-1.74 0-3.41.81-4.5 2.09C10.91 3.81 9.24 3 7.5 3 4.42 3 2 5.42 2 8.5c0 3.78 3.4 6.86 8.55 11.54L12 21.35l1.45-1.32C18.6 15.36 22 12.28 22 8.5 22 5.42 19.58 3 16.5 3zm-4.4 15.55l-.1.1-.1-.1C7.14 14.24 4 11.39 4 8.5 4 6.5 5.5 5 7.5 5c1.54 0 3.04.99 3.57 2.36h1.87C13.46 5.99 14.96 5 16.5 5c2 0 3.5 1.5 3.5 3.5 0 2.89-3.14 5.74-7.9 10.05z"/></svg>
</button>
</section>
<section style="background-color: #fff; padding: 3.5rem 0 1.5rem 0;">
   <div class="container-rounded mx-auto light-bg-1">
      <div class="container-medium mx-auto">
         <div amp-fx="fade-in-scroll" data-repeat=""><p class="sans_serif_p"><b>Hi, my name is Patric Pfoertner and I graduated 2020 with a B. Sc. Psychology from the NBU. Currently, I work and study in Germany. My specialisations are Cognitive Psychology paired with a good slack of Clinical Psychology. Just this year I started publishing my research in the CBB Journal. Besides, I am a Keynote Speaker and I can offer a psychological consultation.</b></p></div>
         <div amp-fx="fade-in-scroll" data-repeat=""><p class="sans_serif_p">On this page you can get an idea of who I am. Feel free to jump to the section you are most interested in.</p></div>
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
                <div on="tap:AMP.scrollTo(id='0', position='top', duration=500)" class="selector_topics" tabindex="0" role="button">My Interests</div>
                <div on="tap:AMP.scrollTo(id='1', position='top', duration=500)" class="selector_topics" tabindex="0" role="button">Work Experience</div>
                <div on="tap:AMP.scrollTo(id='2', position='top', duration=500)" class="selector_topics" tabindex="0" role="button">Education</div>
                <div on="tap:AMP.scrollTo(id='3', position='top', duration=500)" class="selector_topics" tabindex="0" role="button">Publications & Recognitions</div>
            </div>
         </div>


      </div>
   </div>
</section>
<section id="0" style="background-color: #fff;">
   <div class="container-rounded mx-auto light-bg-2">
      <div class="container-medium mx-auto">
         <div amp-fx="fade-in-scroll" data-repeat="">
            <h2 class="sans_serif_h2">My Interests</h2>
         </div>
         <div amp-fx="fade-in-scroll" data-repeat="">
           <p class="sans_serif_p">Various things caught my attention over the years. For instance, I was fascinated by playing the piano. Years later I decided to give the church organ a shot. Feel free to call me a fan-boy, when it comes to the music of Bach, Vivaldi, or Mozart.</p>
         </div>
         <div amp-fx="fade-in-scroll" data-repeat="">
           <p class="sans_serif_p">Some of my favorite peaces on the piano: Ballade pour Adeline, Four Seasons (Spring & Winter), Moonlight Sonata</p>
         </div>
         <div amp-fx="fade-in-scroll" data-repeat="">
           <p class="sans_serif_p">And some of my favorite peaces on the church organ: Toccata and Fugue in D Minor, Marriage of Figaro 'Overture' (Yes, I played it on my sister's white wedding), Eine kleine Nachtmusik (never learned it fully, though) </p>
         </div>
         <div amp-fx="fade-in-scroll" data-repeat="">
           <amp-youtube class="amp-shadow"
             data-videoid="U9BO1dazswE"
             layout="responsive"
             width="480"
             height="270"
           ></amp-youtube>
            <p class="subpicture">Listen to a person playing 'Eine kleine Nachtmusik' on the church organ. You might like it!</p>
         </div>
         <div amp-fx="fade-in-scroll" data-repeat="">
           <p class="sans_serif_p">Enough about me hammering the white and black keys of an instrument.</p>
         </div>
         <div amp-fx="fade-in-scroll" data-repeat="">
           <p class="sans_serif_p">These days I am particularly interested in researching mental health topics from the ground up. Psychologists seem to call this 'psychoeducation'. However, I call it a free time activity.</p>
         </div>
         <div amp-fx="fade-in-scroll" data-repeat="">
           <p class="sans_serif_p">On this website, you can find me write about topics like Alzheimer's, depression, and even personality disorders.</p>
         </div>
         <div amp-fx="fade-in-scroll" data-repeat="">
           <p class="sans_serif_p">And from time to time, I publish YouTube videos on the same topics. The link to my small channel is at the very end of this page. (Literally the last phrase)</p>
         </div>
      </div>
   </div>
</section>
<section id="1" style="background-color: #fff;">
   <div class="container-rounded mx-auto light-bg-1">
      <div class="container-medium mx-auto">
         <div amp-fx="fade-in-scroll" data-repeat="">
            <h2 class="sans_serif_h2">Work Experience</h2>
         </div>
         <div amp-fx="fade-in-scroll" style="border-bottom: 1px solid #555"data-repeat="">
           <p class="sans_serif_p">
             <strong style="color: rgb(200, 100, 164)">Dipl. Psychologist, coach and psychotherapist König: </strong>Intern<br>
             <em style="color:#555; font-size: 1.6rem">Since Mai 2020</em>
             <ul style="font-size: 1.5rem;margin-top:-20px">
              <li>Being part of psychotherapy sessions (private clients and prisoners)</li>
              <li>Implementing MPU preparatory courses</li>
              <li>
                <a href="https://www.gunter-koenig.de/" class="link" rel="nofollow">Website of Gunter König</a>
              </li>
            </ul>
           </p>
         </div>
         <div amp-fx="fade-in-scroll" style="border-bottom: 1px solid #555"data-repeat="">
           <p class="sans_serif_p">
             <strong style="color: rgb(200, 100, 164)">Psychology-To-Go: </strong> Running the website <br>
             <em style="color:#555; font-size: 1.6rem">Since September 2019</em>
             <ul style="font-size: 1.5rem;margin-top:-20px">
              <li>Writing mental health articles for education purposes</li>
              <li>Such topics include: "Alzheimer's, Depression, Personality Disorder, etc." </li>
            </ul>
           </p>
         </div>
         <div amp-fx="fade-in-scroll" style="border-bottom: 1px solid #555"data-repeat="">
           <p class="sans_serif_p">
             <strong style="color: rgb(200, 100, 164)">‘Vasil Levski’ High school: </strong> B. Sc. internship <br>
             <em style="color:#555; font-size: 1.6rem">School year 2019</em>
             <ul style="font-size: 1.5rem;margin-top:-20px">
              <li>First professional experience as an intern of the school psychologist</li>
            </ul>
           </p>
         </div>
         <div amp-fx="fade-in-scroll" style="border-bottom: 1px solid #555"data-repeat="">
           <p class="sans_serif_p">
             <strong style="color: rgb(200, 100, 164)">INVESTBULGARIA AGENCY: </strong> internship <br>
             <em style="color:#555; font-size: 1.6rem">01. August  2016 - 27. February 2017</em>
             <ul style="font-size: 1.5rem;margin-top:-20px">
              <li>Working in the “Marketing and investment services Department”</li>
            </ul>
           </p>
         </div>
         <div amp-fx="fade-in-scroll" style="border-bottom: 1px solid #555"data-repeat="">
           <p class="sans_serif_p">
             <strong style="color: rgb(200, 100, 164)">Entrepreneurship: </strong> CEO of my own E-Commerce business<br>
             <em style="color:#555; font-size: 1.6rem">2014 - 2017</em>
             <ul style="font-size: 1.5rem;margin-top:-20px">
              <li>Import and sale of Powerbanks and other mobile phone equipment</li>
            </ul>
           </p>
         </div>
         <div amp-fx="fade-in-scroll" style="border-bottom: 1px solid #555"data-repeat="">
           <p class="sans_serif_p">
             <strong style="color: rgb(200, 100, 164)">JUNIOR-Company: </strong> Executive board + project manager <br>
             <em style="color:#555; font-size: 1.6rem">School Year 2011 - 2012</em>
             <ul style="font-size: 1.5rem;margin-top:-20px">
              <li>Individual design of mobile phone cases and leather bracelets</li>
              <li>Donation of the proceeds for two cleft lip operations (Help! - Wir helfen! e.v.)</li>
            </ul>
           </p>
         </div>
      </div>
   </div>
</section>
<section id="2" style="background-color: #fff;">
   <div class="container-rounded mx-auto light-bg-2">
      <div class="container-medium mx-auto">
         <div amp-fx="fade-in-scroll" data-repeat="">
            <h2 class="sans_serif_h2">Education</h2>
         </div>
         <div amp-fx="fade-in-scroll" style="border-bottom: 1px solid #555"data-repeat="">
           <p class="sans_serif_p">
             <strong style="color: rgb(200, 100, 164)">SRH Hochschule für Gesundheit, Gera: </strong>M. Sc.<br>
             <em style="color:#555; font-size: 1.6rem">Since September 2020</em>
             <ul style="font-size: 1.5rem;margin-top:-20px">
              <li>Finishing probably February 2022</li>
              <li>4 semesters of mental health and psychotherapy</li>
            </ul>
           </p>
         </div>
         <div amp-fx="fade-in-scroll" style="border-bottom: 1px solid #555"data-repeat="">
           <p class="sans_serif_p">
             <strong style="color: rgb(200, 100, 164)">New Bulgarian University, Sofia: </strong>B. Sc.<br>
             <em style="color:#555; font-size: 1.6rem">2017 - 2020</em>
             <ul style="font-size: 1.5rem;margin-top:-20px">
              <li>8 Semester Psychology (in English)</li>
            </ul>
           </p>
         </div>
         <div amp-fx="fade-in-scroll" style="border-bottom: 1px solid #555"data-repeat="">
           <p class="sans_serif_p">
             <strong style="color: rgb(200, 100, 164)">College Heilbronn, Campus Schwäbisch Hall: </strong>MUR<br>
             <em style="color:#555; font-size: 1.6rem">2014 - 2017</em>
             <ul style="font-size: 1.5rem;margin-top:-20px">
              <li>5 Semester Management und Unternehmensrechnung (MUR)</li>
               <li>"5 semesters of management and corporate accounting (MUR)"</li>
            </ul>
           </p>
         </div>
         <div amp-fx="fade-in-scroll" style="border-bottom: 1px solid #555"data-repeat="">
           <p class="sans_serif_p">
             <strong style="color: rgb(200, 100, 164)">Hariolf-Grammar school, Ellwangen: </strong>General University Entrance Qualification<br>
             <em style="color:#555; font-size: 1.6rem">2006 - 2014</em>
           </p>
         </div>
      </div>
   </div>
</section>
<section id="3" style="background-color: #fff;">
   <div class="container-rounded mx-auto light-bg-1">
      <div class="container-medium mx-auto">
         <div amp-fx="fade-in-scroll" data-repeat="">
            <h2 class="sans_serif_h2">Publications & Recognitions</h2>
         </div>
         <div amp-fx="fade-in-scroll" style="border-bottom: 1px solid #555"data-repeat="">
           <p class="sans_serif_p">
             Patric Pförtner, Penka Hristova*. Thematic bootstrapping: Performance differences between expert chess players and novices, Cognition, Brain, Behavior, Volume XXV, No.1 (March), 55-68, ISSN: Print 2247-9228. DOI: 10.24193/cbb.2021.25.04
             <a class="link" rel="noreferrer"href="https://www.researchgate.net/publication/350417388_Thematic_bootstrapping_Performance_differences_between_expert_chess_players_and_novices">Link to my publication</a>
           </p>
         </div>
         <div amp-fx="fade-in-scroll" style="border-bottom: 1px solid #555"data-repeat="">
           <p class="sans_serif_p">
             Presenter / Panelist: Annual conference of the Department of Cognitive Science, New Bulgarian University - February 2021.
           </p>
         </div>
      </div>
   </div>
</section>




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
          data-param-media="{{ asset('assets/author/vertical.jpg') }}"
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
