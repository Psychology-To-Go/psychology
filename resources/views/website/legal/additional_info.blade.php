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
<script async custom-element="amp-lightbox" src="https://cdn.ampproject.org/v0/amp-lightbox-0.1.js"></script>
<script async custom-element="amp-social-share" src="https://cdn.ampproject.org/v0/amp-social-share-0.1.js"></script>
<script async custom-element="amp-selector" src="https://cdn.ampproject.org/v0/amp-selector-0.1.js"></script>
<script async custom-element="amp-carousel" src="https://cdn.ampproject.org/v0/amp-carousel-0.1.js"></script>
@endslot
@slot('content')

<section style="background-color: #fff; padding: 4.5rem 0 4.5rem 0;">
  <div class="container-rounded mx-auto light-bg-1">
    <div class="container-large mx-auto">
      <div>
        <h1 class="sans_serif_h1 text-gradient-deepblue pb1">Information Disclaimer</h1>
        <p class="sans_serif_p pb3">Effective Date: 08. January 2020</p>
        <p class="sans_serif_p pb2">Psychology To Go does not offer personal mental health or any sort of medical advice.</p>
        <p class="sans_serif_p pb2">If you are facing a medical emergency, immediatly call your local emergency services or visit the nearest emergency room.</p>
        <p class="sans_serif_p pb2">You should consult your healthcare provider before starting any exercise or training program.</p>
        <p class="sans_serif_p pb2">The content, developed through collaboration with licensed medical professionals like psychologists or psychiatrists and external contributors, including text, graphics, and other material contained on the website, web apps, newsletter, and products and services ("Content"), is general and for informational purposes only. It does not constitute any sort of professional or medical advice.</p>
        <p class="sans_serif_p pb2">All of our produced Content is not intended to be a replacement or substitute for professional medical advice, diagnosis, therapy, or treatment.</p>
        <p class="sans_serif_p pb2">Always consult with your psychologist, psychiatrist, doctor or other qualified healthcare providers with any questions you may have regarding any medical or mental condition, procedure, therapy or treatment.</p>
        <p class="sans_serif_p pb2">Psychology To Go makes no guarantees about the efficacy or safety of services, products, therapies or treatments described on Psychology To Go's Content.</p>
        <p class="sans_serif_p pb2">Therapies and treatments are subject to constant change and are not intended to cover all possible mental health conditions.</p>
        <p class="sans_serif_p pb2">Psychology To Go does not recommend or endorse in any way a specific therapy, treatment, clinician, tests, product, procedure, opinion, service, or other information that may be mentioned in Psychology To Go's website, web apps and Content.</p>
        <p class="sans_serif_p pb2">The disclaimers herein are provided on this page for ease of reference. These disclaimers supplement and are a part of our <a href="{{ route('terms_of_use')}}" class="link-dark">Terms of Use</a>.</p>
      </div>
    </div>
  </div>
</section>
@endslot
@endcomponent
