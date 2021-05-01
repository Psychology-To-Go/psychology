<!doctype html>
<html ⚡ lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width">
    {{ $seo }}
    <link rel="preload" as="script" href="https://cdn.ampproject.org/v0.js">
    <script async src="https://cdn.ampproject.org/v0.js"></script>
    @include('css.tracking_free')
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
    {{ $js }}
    <meta name="p:domain_verify" content="0c941077902aead14ef4b531d2a134b9"/>
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('assets/img/social/fav/apple-icon-180x180.png') }}">
    <link rel="icon" type="image/png" sizes="192x192"  href="{{ asset('assets/img/social/fav/android-icon-192x192.png') }}">
    <link rel="icon" type="image/png" sizes="96x96" href="{{ asset('assets/img/social/fav/favicon-96x96.png') }}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('assets/img/social/fav/favicon-16x16.png') }}">
    <meta name="msapplication-TileImage" content="{{ asset('assets/img/social/fav/ms-icon-144x144.png') }}">
  </head>
  <body>
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
  <div class="gallery-component-tagline xs-hide" amp-fx="float-in-top">
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
      Yes!! :) We have a <a href="https://www.youtube.com/channel/UCySf-H34sXWJzIpFQLQRKUQ" target="_blank" class="n-link">YouTube Channel</a>
    </p>
  </div>
</section>
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
