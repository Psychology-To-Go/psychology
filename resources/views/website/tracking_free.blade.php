@component('layouts.tracking_free')
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
<meta name="twitter:image" content="{{ asset('assets/img/social/psych-to-go-t.jpg') }}">
<meta property="og:title" content="{{ $title }}">
<meta property="og:site_name" content="Psychology To Go">
<meta property="og:description" content="{{ $desc }}">
<!-- 1200 x 630 -->
<meta property="og:image" content="{{ asset('assets/img/social/psych-to-go-f.jpg') }}">
<meta property="og:url" content="{{ Request::url() }}">
<meta property="og:type" content="website">
@endslot
@slot('js')
<script async custom-element="amp-fx-collection" src="https://cdn.ampproject.org/v0/amp-fx-collection-0.1.js"></script>
<script async custom-element="amp-bind" src="https://cdn.ampproject.org/v0/amp-bind-0.1.js"></script>
<script async custom-template="amp-mustache" src="https://cdn.ampproject.org/v0/amp-mustache-0.2.js"></script>
<script async custom-element="amp-sidebar" src="https://cdn.ampproject.org/v0/amp-sidebar-0.1.js"></script>
<script async custom-element="amp-form" src="https://cdn.ampproject.org/v0/amp-form-0.1.js"></script>
@endslot
@slot('content')
<section style="background-color: #fff; padding: 4.5rem 0 4.5rem 0;">
  <div class="container-rounded mx-auto light-bg-1">
    <div class="container-large mx-auto">
        <div>
          <h1 class="sans_serif_h1 text-gradient-deepblue pb2">Tracking Free</h1>
          <p class="sans_serif_p pb3">Welcome to our tracking free website. Currently only essential Cookies are working.</p>
          <p class="sans_serif_p pb2">We are still working on providing the 3 Articles. They will be soon accesible for you. Visit our <a href="{{ route('privacy_settings')}}" target="_blank" class="link-dark">Privacy Settings</a> to accept the <a href="{{ route('privacy')}}" target="_blank" class="link-dark">Privacy Policy</a>. Then you can browse our website with all its features. Until then, we wish you a great day! </p>
        </div>
    </div>
  </div>
</section>
@endslot
@endcomponent
