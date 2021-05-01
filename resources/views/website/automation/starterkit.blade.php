@component('layouts.main')
@slot('seo')
<title>{{ $title }}</title>
<meta name="description" content="{{ $desc }}">
<link rel="canonical" href="{{ Request::url() }}">
<meta name="csrf-token" content="{{ csrf_token() }}">
<meta name="apple-mobile-web-app-capable" content="yes"/>
<meta name="robots" content="index, follow">
<meta name="twitter:card" content="summary">
<meta name="twitter:title" content="{{ $title }}">
<meta property="twitter:url" content="{{ Request::url() }}">
<meta name="twitter:description" content="{{ $desc }}">
<!-- 1100 X 628 -->
<meta name="twitter:image" content="{{ asset('assets/blog/alz/$id/horizontal.jpg') }}">
<meta property="og:title" content="{{ $title }}">
<meta property="og:site_name" content="Psychology To Go">
<meta property="og:description" content="{{ $desc }}">
<!-- 1200 x 630 -->
<meta property="og:image" content="{{ asset('assets/blog/alz/$id/horizontal.jpg') }}">
<meta property="og:url" content="{{ Request::url() }}">
<meta property="og:type" content="website">
<link rel="preload" href="{{ asset('assets/blog/alz/$id/horizontal.jpg') }}" as="image">
<link rel="preload" href="{{ asset('assets/blog/alz/$id/vertical.jpg') }}" as="image">
<meta property="article:published_time" content="{{ $published }}" />
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
    poster="{{ asset('assets/blog/alz/$id/horizontal.jpg') }}">
    <source src="assets/blog/alz/$id/horizontal.webm"
      type="video/webm" />
    <source src="assets/blog/alz/$id/horizontal.mp4"
      type="video/mp4" />
    <div fallback>
      <p>This browser does not support the video element.</p>
    </div>
  </amp-video>
  <amp-video autoplay loop width="1080" class="showForMobile"
    height="1920"
    layout="responsive"
    poster="{{ asset('assets/blog/alz/$id/vertical.jpg') }}">
    <source src="assets/blog/alz/$id/vertical.webm"
      type="video/webm" />
    <source src="assets/blog/alz/$id/vertical.mp4"
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
  <h1 class="huge_sans_serif_h1 center">{{ $title }}</h1>
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
               <!--ID here !-->
               <div on="tap:AMP.scrollTo(id='resources', position='top', duration=500)" class="selector_topics" tabindex="0" role="button">List of Resources</div>
               <div on="tap:AMP.scrollTo(id='author', position='top', duration=500)" class="selector_topics" tabindex="0" role="button">About the Author</div>
            </div>
         </div>


      </div>
   </div>
</section>
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

<!--Remember this !-->
  <div class="selectatopic dark-bg" amp-fx="fade-in-scroll" data-repeat style="margin-bottom: 40px">
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
       Remember this
    </div>
      <p class="sans_serif_p" style="color: #fff;padding: 0px 13px 5px 10px; margin: 0;font-style:italic">
      The brain of a patient diagnosed with Alzheimer's disease underwent many cellular and molecular changes. The two major clinical signs that stand in association with the disease are ...
    </p>
  </div>
<!--Sections here !-->

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
         +13 Sources <!--Change here !-->
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
        data-param-media="{{ asset('assets/blog/alz/$id/vertical.jpg') }}"
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
            <p class="sans_serif_p">Perl, D. P. (2010). Neuropathology of Alzheimer’s Disease. Mount Sinai Journal of Medicine: A Journal of Translational and Personalized Medicine, 77(1), 32–42. <a href="https://doi.org/10.1002/msj.20157 " target="_blank" rel="noreferrer" class="link">https://doi.org/10.1002/msj.20157</a></p>
          </li>
          <li>
            <p class="sans_serif_p">What is Alzheimer’s Disease? | CDC. (n.d.). CDC. Retrieved July 8, 2020, from <a href="https://www.cdc.gov/aging/aginginfo/alzheimers.htm " target="_blank" rel="noreferrer" class="link">cdc.gov/aging/aginginfo/alzheimers</a></p>
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
              poster="{{ asset('assets/blog/alz/$id/vertical.jpg') }}"><!--Guide URL !-->
              <source src="assets/blog/alz/$id/vertical.webm"
                type="video/webm" /><!--Guide ID !-->
              <source src="assets/blog/alz/$id/vertical.mp4"
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
          data-param-media="{{ asset('assets/blog/alz/$id/vertical.jpg') }}"
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
