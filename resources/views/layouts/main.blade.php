<!doctype html>
<html ⚡ lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width">
    {{ $seo }}
    <script async src="https://cdn.ampproject.org/v0.js"></script>
    @include('css.custom')
    <style amp-boilerplate="">
      body {
        -webkit-animation: -amp-start 8s steps(1, end) 0s 1 normal both;
        -moz-animation: -amp-start 8s steps(1, end) 0s 1 normal both;
        -ms-animation: -amp-start 8s steps(1, end) 0s 1 normal both;
        animation: -amp-start 8s steps(1, end) 0s 1 normal both;
      }
      @-webkit-keyframes -amp-start {
        from {
          visibility: hidden;
        }
        to {
          visibility: visible;
        }
      }
      @-moz-keyframes -amp-start {
        from {
          visibility: hidden;
        }
        to {
          visibility: visible;
        }
      }
      @-ms-keyframes -amp-start {
        from {
          visibility: hidden;
        }
        to {
          visibility: visible;
        }
      }
      @-o-keyframes -amp-start {
        from {
          visibility: hidden;
        }
        to {
          visibility: visible;
        }
      }
      @keyframes -amp-start {
        from {
          visibility: hidden;
        }
        to {
          visibility: visible;
        }
      }
    </style>
    <noscript
      ><style amp-boilerplate="">
        body {
          -webkit-animation: none;
          -moz-animation: none;
          -ms-animation: none;
          animation: none;
        }
      </style></noscript>
      @if (Cookie::get('consent'))
      <script async custom-element="amp-analytics" src="https://cdn.ampproject.org/v0/amp-analytics-0.1.js"></script>
      @endif
    {{ $js }}
    <meta name="p:domain_verify" content="0c941077902aead14ef4b531d2a134b9"/>
    <link rel="apple-touch-icon" sizes="57x57" href="{{ asset('assets/img/social/fav/apple-icon-57x57.png') }}">
    <link rel="apple-touch-icon" sizes="60x60" href="{{ asset('assets/img/social/fav/apple-icon-60x60.png') }}">
    <link rel="apple-touch-icon" sizes="72x72" href="{{ asset('assets/img/social/fav/apple-icon-72x72.png') }}">
    <link rel="apple-touch-icon" sizes="76x76" href="{{ asset('assets/img/social/fav/apple-icon-76x76.png') }}">
    <link rel="apple-touch-icon" sizes="114x114" href="{{ asset('assets/img/social/fav/apple-icon-114x114.png') }}">
    <link rel="apple-touch-icon" sizes="120x120" href="{{ asset('assets/img/social/fav/apple-icon-120x120.png') }}">
    <link rel="apple-touch-icon" sizes="144x144" href="{{ asset('assets/img/social/fav/apple-icon-144x144.png') }}">
    <link rel="apple-touch-icon" sizes="152x152" href="{{ asset('assets/img/social/fav/apple-icon-152x152.png') }}">
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('assets/img/social/fav/apple-icon-180x180.png') }}">
    <link rel="icon" type="image/png" sizes="36x36"  href="{{ asset('assets/img/social/fav/android-icon-36x36.png') }}">
    <link rel="icon" type="image/png" sizes="48x48"  href="{{ asset('assets/img/social/fav/android-icon-48x48.png') }}">
    <link rel="icon" type="image/png" sizes="72x72"  href="{{ asset('assets/img/social/fav/android-icon-72x72.png') }}">
    <link rel="icon" type="image/png" sizes="96x96"  href="{{ asset('assets/img/social/fav/android-icon-96x96.png') }}">
    <link rel="icon" type="image/png" sizes="144x144"  href="{{ asset('assets/img/social/fav/android-icon-144x144.png') }}">
    <link rel="icon" type="image/png" sizes="192x192"  href="{{ asset('assets/img/social/fav/android-icon-192x192.png') }}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('assets/img/social/fav/favicon-32x32.png') }}">
    <link rel="icon" type="image/png" sizes="96x96" href="{{ asset('assets/img/social/fav/favicon-96x96.png') }}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('assets/img/social/fav/favicon-16x16.png') }}">
    <link rel="manifest" href="{{ asset('assets/img/social/fav/manifest.json') }}">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="{{ asset('assets/img/social/fav/ms-icon-70x70.png') }}">
    <meta name="msapplication-TileImage" content="{{ asset('assets/img/social/fav/ms-icon-144x144.png') }}">
    <meta name="msapplication-TileImage" content="{{ asset('assets/img/social/fav/ms-icon-150x150.png') }}">
    <meta name="msapplication-TileImage" content="{{ asset('assets/img/social/fav/ms-icon-310x310.png') }}">
    <meta name="theme-color" content="#ffffff">
  </head>
  <body>
    @if (Cookie::get('consent'))
    <amp-analytics type="googleanalytics">
      <script type="application/json">
      {
        "vars": {
          "account": "UA-188855283-1"
        },
        "triggers": {
          "trackPageview": {
            "on": "visible",
            "request": "pageview"
          }
        }
      }
      </script>
    </amp-analytics>
    @endif
<header amp-fx="float-in-top"
  class="ampstart-headerbar fixed flex justify-start items-center top-0 left-0 right-0 pl2 pr4"
>
  <div
    role="button"
    aria-label="open sidebar"
    on="tap:sidebar.toggle"
    tabindex="0"
    class="ampstart-navbar-trigger pr2"
  >
    <amp-img alt="Psychology To Go Logo" class="round-nav-logo-small"
    width="1" height="1" layout="responsive"
    srcset="{{ asset('assets/img/social/fav/w_200.webp') }} 200w,
    {{ asset('assets/img/social/fav/w_310.webp') }} 310w"
    src="{{ asset('assets/img/social/fav/w_310.webp') }}">
    <amp-img fallback alt="Psychology To Go Logo" class="round-nav-logo-small"
    width="1" height="1" layout="responsive"
    srcset="{{ asset('assets/img/social/fav/w_200.jpg') }} 200w,
    {{ asset('assets/img/social/fav/w_310.jpg') }} 310w"
    src="{{ asset('assets/img/social/fav/w_310.jpg') }}">
    </amp-img></amp-img>
  </div>
  <div class="gallery-component-tagline xs-hide">
    <div>Psychology To Go</div>
  </div>
</header>

<!-- Start Sidebar -->
<amp-sidebar
  id="sidebar"
  class="ampstart-sidebar px3 gallery-sidebar"
  layout="nodisplay"
>
  <div class="flex justify-start items-center ampstart-sidebar-header">
    <div
      role="button"
      aria-label="close sidebar"
      on="tap:sidebar.toggle"
      tabindex="0"
      class="ampstart-navbar-trigger items-start"
    >
      ✕
    </div>
  </div>
  <nav class="ampstart-sidebar-nav ampstart-nav">
    <ul class="list-reset m0 p0 ampstart-label">
      <li role="heading" class="ampstart-sidebar-nav-title">
        © Psychology To Go
      </li>
      <li class="ampstart-nav-item gallery-sidebar-nav-item">
        <a class="ampstart-nav-link" href="{{ route('home')}}"
          ><div class="gallery-sidebar-nav-item-text">Home</div>
          <div class="gallery-sidebar-nav-item-icon">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100">
              <polyline
                fill="none"
                stroke="currentColor"
                points="27 5 72.167 50.167 27.335 95"
              ></polyline>
            </svg></div
        ></a>
      </li>
      <li class="ampstart-nav-item gallery-sidebar-nav-item">
        <a class="ampstart-nav-link" href="{{ route('about')}}"
          ><div class="gallery-sidebar-nav-item-text">
            About<br />The Author
          </div>
          <amp-img alt="Navigation About Author" class="gallery-sidebar-nav-item-image"
          width="1" height="1" layout="responsive"
          srcset="{{ asset('assets/img/social/nav/2_w_200.webp') }} 200w,
          {{ asset('assets/img/social/nav/2_w_409.webp') }} 409w"
          src="{{ asset('assets/img/social/nav/2_w_409.webp') }}">
          <amp-img fallback alt="Navigation About Author" class="gallery-sidebar-nav-item-image"
          width="1" height="1" layout="responsive"
          srcset="{{ asset('assets/img/social/nav/2_w_200.jpg') }} 200w,
          {{ asset('assets/img/social/nav/2_w_409.jpg') }} 409w"
          src="{{ asset('assets/img/social/nav/2_w_409.jpg') }}">
          </amp-img></amp-img>
          <div class="gallery-sidebar-nav-item-icon">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100">
              <polyline
                fill="none"
                stroke="currentColor"
                points="27 5 72.167 50.167 27.335 95"
              ></polyline>
            </svg></div
        ></a>
      </li>
      <li class="ampstart-nav-item gallery-sidebar-nav-item">
        <a class="ampstart-nav-link" href="{{ route('mental_health')}}"
          ><div class="gallery-sidebar-nav-item-text">
            Mental<br />Health
          </div>
          <amp-img alt="Navigation Mental Health" class="gallery-sidebar-nav-item-image"
          width="1" height="1" layout="responsive"
          srcset="{{ asset('assets/img/social/nav/1_w_200.webp') }} 200w,
          {{ asset('assets/img/social/nav/1_w_409.webp') }} 409w"
          src="{{ asset('assets/img/social/nav/1_w_409.webp') }}">
          <amp-img fallback alt="Navigation Mental Health" class="gallery-sidebar-nav-item-image"
          width="1" height="1" layout="responsive"
          srcset="{{ asset('assets/img/social/nav/1_w_200.jpg') }} 200w,
          {{ asset('assets/img/social/nav/1_w_409.jpg') }} 409w"
          src="{{ asset('assets/img/social/nav/1_w_409.jpg') }}">
          </amp-img></amp-img>
          <div class="gallery-sidebar-nav-item-icon">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100">
              <polyline
                fill="none"
                stroke="currentColor"
                points="27 5 72.167 50.167 27.335 95"
              ></polyline>
            </svg></div
        ></a>
      </li>
      <li class="ampstart-nav-item gallery-sidebar-nav-item">
        <a class="ampstart-nav-link" href="{{ route('types_of_therapy') }}"
          ><div class="gallery-sidebar-nav-item-text">
            Therapy<br />Types
          </div>
          <amp-img alt="Navigation Therapy Types" class="gallery-sidebar-nav-item-image"
          width="1" height="1" layout="responsive"
          srcset="{{ asset('assets/img/social/nav/5_w_200.webp') }} 200w,
          {{ asset('assets/img/social/nav/5_w_409.webp') }} 409w"
          src="{{ asset('assets/img/social/nav/5_w_409.webp') }}">
          <amp-img fallback alt="Navigation Therapy Types" class="gallery-sidebar-nav-item-image"
          width="1" height="1" layout="responsive"
          srcset="{{ asset('assets/img/social/nav/5_w_200.jpg') }} 200w,
          {{ asset('assets/img/social/nav/5_w_409.jpg') }} 409w"
          src="{{ asset('assets/img/social/nav/5_w_409.jpg') }}">
          </amp-img></amp-img>
          <div class="gallery-sidebar-nav-item-icon">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100">
              <polyline
                fill="none"
                stroke="currentColor"
                points="27 5 72.167 50.167 27.335 95"
              ></polyline>
            </svg></div
        ></a>
      </li>
      <li class="ampstart-nav-item gallery-sidebar-nav-item">
        <a class="ampstart-nav-link" href="{{ route('trending')}}"
          ><div class="gallery-sidebar-nav-item-text">
            Trending<br />Topics
          </div>
          <amp-img alt="Navigation Trending Topics" class="gallery-sidebar-nav-item-image"
          width="1" height="1" layout="responsive"
          srcset="{{ asset('assets/img/social/nav/3_w_200.webp') }} 200w,
          {{ asset('assets/img/social/nav/3_w_409.webp') }} 409w"
          src="{{ asset('assets/img/social/nav/3_w_409.webp') }}">
          <amp-img fallback alt="Navigation Trending Topics" class="gallery-sidebar-nav-item-image"
          width="1" height="1" layout="responsive"
          srcset="{{ asset('assets/img/social/nav/3_w_200.jpg') }} 200w,
          {{ asset('assets/img/social/nav/3_w_409.jpg') }} 409w"
          src="{{ asset('assets/img/social/nav/3_w_409.jpg') }}">
          </amp-img></amp-img>
          <div class="gallery-sidebar-nav-item-icon">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100">
              <polyline
                fill="none"
                stroke="currentColor"
                points="27 5 72.167 50.167 27.335 95"
              ></polyline>
            </svg></div
        ></a>
      </li>
      <li class="ampstart-nav-item gallery-sidebar-nav-item">
        <a class="ampstart-nav-link" href="{{ route('archive')}}"
          ><div class="gallery-sidebar-nav-item-text">
            To The<br />Blog
          </div>
          <amp-img alt="Navigation Blog" class="gallery-sidebar-nav-item-image"
          width="1" height="1" layout="responsive"
          srcset="{{ asset('assets/img/social/nav/6_w_200.webp') }} 200w,
          {{ asset('assets/img/social/nav/6_w_409.webp') }} 409w"
          src="{{ asset('assets/img/social/nav/6_w_409.webp') }}">
          <amp-img fallback alt="Navigation Blog" class="gallery-sidebar-nav-item-image"
          width="1" height="1" layout="responsive"
          srcset="{{ asset('assets/img/social/nav/6_w_200.jpg') }} 200w,
          {{ asset('assets/img/social/nav/6_w_409.jpg') }} 409w"
          src="{{ asset('assets/img/social/nav/6_w_409.jpg') }}">
          </amp-img></amp-img>
          <div class="gallery-sidebar-nav-item-icon">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100">
              <polyline
                fill="none"
                stroke="currentColor"
                points="27 5 72.167 50.167 27.335 95"
              ></polyline>
            </svg></div
        ></a>
      </li>
      <li class="ampstart-nav-item gallery-sidebar-nav-item">
        <a class="ampstart-nav-link" href="{{ route('resources') }}"
          ><div class="gallery-sidebar-nav-item-text">
            Picks<br />For You
          </div>
          <amp-img alt="Picks For You" class="gallery-sidebar-nav-item-image"
          width="1" height="1" layout="responsive"
          srcset="{{ asset('assets/img/social/nav/4_w_200.webp') }} 200w,
          {{ asset('assets/img/social/nav/4_w_409.webp') }} 409w"
          src="{{ asset('assets/img/social/nav/4_w_409.webp') }}">
          <amp-img fallback alt="Picks For You" class="gallery-sidebar-nav-item-image"
          width="1" height="1" layout="responsive"
          srcset="{{ asset('assets/img/social/nav/4_w_200.jpg') }} 200w,
          {{ asset('assets/img/social/nav/4_w_409.jpg') }} 409w"
          src="{{ asset('assets/img/social/nav/4_w_409.jpg') }}">
          </amp-img></amp-img>
          <div class="gallery-sidebar-nav-item-icon">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100">
              <polyline
                fill="none"
                stroke="currentColor"
                points="27 5 72.167 50.167 27.335 95"
              ></polyline>
            </svg></div
        ></a>
      </li>
    </ul>
  </nav>
</amp-sidebar>
{{ $content }}
<section class="rounded-top22 dark-bg" style="margin-bottom:-9%">
    <div class="gallery-base-container mx-auto">
        <div class="pic-center padding-nav-logo">
          <amp-img alt="Psychology To Go Logo" class="pic-center round-nav-logo"
          width="1" height="1" layout="responsive"
          srcset="{{ asset('assets/img/social/fav/w_200.webp') }} 200w,
          {{ asset('assets/img/social/fav/w_310.webp') }} 310w"
          src="{{ asset('assets/img/social/fav/w_310.webp') }}">
          <amp-img fallback alt="Psychology To Go Logo" class="pic-center round-nav-logo"
          width="1" height="1" layout="responsive"
          srcset="{{ asset('assets/img/social/fav/w_200.jpg') }} 200w,
          {{ asset('assets/img/social/fav/w_310.jpg') }} 310w"
          src="{{ asset('assets/img/social/fav/w_310.jpg') }}">
          </amp-img></amp-img>
      </div>
    <h2 class="text-gradient-orange center sans_serif_h2 py4">Psychology To Go</h2>
    <p class="sans_serif_p center center z1 mb2" style="color:#fff">
      © Psychology To Go. All rights reserved. Our website services, content and products
      are for informational purposes only. Psychology To Go does not provide medical
      advice, diagnosis, or treatment. <a href="{{route('additional_info')}}" class="n-link">See additional information</a>
    </p>
    <ul class="flex flex-wrap">
      <li class="sm-col-4 md-col-4 lg-col-4 pr2 py2 mx-auto">
        <p class="sans_serif_p center">
            <a href="{{ route('terms_of_use')}}" class="n-link">Terms of Use</a>
        </p>
      </li>
      <li class="sm-col-4 md-col-4 lg-col-4 pr2 py2 mx-auto">
        <p class="sans_serif_p center">
            <a href="{{ route('privacy_settings')}}" class="n-link">Privacy Settings</a>
        </p>
      </li>
      <li class="sm-col-4 md-col-4 lg-col-4 pr2 py2 mx-auto">
        <p class="sans_serif_p center">
            <a href="{{ route('privacy')}}" class="n-link">Privacy</a>
        </p>
      </li>
    </ul>
    <p class="sans_serif_p center center z1 pbxz10" style="color:#fff">
      Feel free to visit my <a href="https://www.youtube.com/channel/UCySf-H34sXWJzIpFQLQRKUQ" rel="noreferrer" target="_blank" class="n-link">YouTube Channel</a>
    </p>
  </div>
</section>
@if (Cookie::get('consent'))
@else
  <div class="lightbox-cookie" style="padding-top: 3%">
    <div style="padding-left: 5px; padding-right: 5px">
      <div class="container-cookie mx-auto light-bg-1" style="border-radius: 15px;padding-bottom: 20px;">
        <h2 class="sans_serif_h2 center" style="padding: 5px 0 10px 0;">Please accept our<br>Privacy Terms</h2>
        <div class="container-text" style="padding:0 1rem 0 1rem">
        <p class="small_p">
          At any time, you can change your preferences by clicking on “Privacy Settings” in the footer at the bottom of the page.
        </p>
        <p class="small_p">
          We rely on ads to provide free and trustworthy information about mental health.
          So, in order to access all of our content, we ask you to accept cookies. In addition to the necessary cookies that help our website function, we use cookies for analytical purposes or to display personalized content.
          To provide a relevant experience and to enhance our website, we collect and securely process your personal data.
        </p>
        <p class="small_p">
          We and our <a href="{{ route('privacy')}}" class="n-link">partners</a> process your personal data in the following ways:
        </p>
        <p class="small_p">(1) cookies or unique IDs, for storing and/or accessing information on your device,<br>
        (2) personalized ads and content,<br> (3) ad and content measurement,<br> (4) audience insights and product development,<br> (5) ensuring security,
        preventing fraud, and debug, and<br> (6) technically deliver ads or content.
      </p>
      <p class="small_p"><strong>Essential Data</strong><br>
          The Essential Data is needed to run the Site you are visiting technically. You can not deactivate them.
          <br>
           <strong>1. Session Cookie:</strong> PHP uses a Cookie to identify user sessions. Without this Cookie the Website is not working.<br>
           <strong>2. XSRF-Token Cookie:</strong> Laravel automatically generates a CSRF "token" for each active user session managed by the application. This token is used to verify that the authenticated user is the one actually making the requests to the application.</p>
        <p class="small_p">Your personal data use applies only while using the Psychology To Go Website. Some of our partners do not ask for your consent to process your data and rely on their legitimate business interest. Modify your settings by clicking on "Privacy Settings".</p>
        <p class="small_p">At this time, we cannot provide the full site experience if you disallow any purposes, features, or partners. Instead, we will present you with a version of our site that has 3 articles without ads, cookies, or tracking technologies.</p>
        </div>
        <div style="border-top: 3px solid #ccc;" class="flex">
            <form method="post"  action-xhr="/cookie-consent" target="_top">
              <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">
              <input type="hidden" name="url" value="{{ Request::url() }}">
              <button type="submit" name="button" class="button" style="color: #fff; background-color: #111;font-size: 1rem; margin-left: 20px;height: 48px;border:0">Accept</button>
            </form>
            <a href="{{ route('privacy_settings')}}" class="button" style="color: #fff; background-color: #555555; font-size: 1rem; margin-left: 20px;border:0">Privacy Settings</a>
        </div>
      </div>
    </div>
  </div>
@endif
<style amp-keyframes>
  @keyframes scaleAnimation {
    0%, 80%, 100% {
      -webkit-transform: scale(1, 1);
      transform: scale(1, 1);
    } 30%, 50% {
      -webkit-transform: scale(1.1, 1.1);
      transform: scale(1.1, 1.1);
    }
  }
</style>
</body>
</html>
