<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="robots" content="NOINDEX, NOFOLLOW">
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <title>Automation Task</title>
  <link href="{{ asset('experiment/css/chessboard-1.0.0.min.css') }}" rel="stylesheet">
</head>
<body>
  <div class="container text-center">
    <h1 style="margin-top: 5rem;">Results are Delivered:</h1>
      <button type="submit" class="button blue" onclick="myFunction()">Copy text</button>
  </div>
    <pre>
    <textarea id="myInput" style="opacity:0">
      <div id="picture-Section:{{ $img_name }}">
        <div class="mx-auto" style="max-width: 73rem">
        <div class="relative amp-shadow bordering" amp-fx="fade-in-scroll" data-repeat>
          <amp-img alt="{{ $desc }}" layout="responsive" class="bordering"
          srcset="{{ $b }}{ asset('assets/blog/{{ $img_folder }}/{{ $img_name }}_1280.webp') }{{ $a }},
          {{ $b }}{ asset('assets/blog/{{ $img_folder }}/{{ $img_name }}_2560.webp') }{{ $a }} 2x"
          src="{{ $b }}{ asset('assets/blog/{{ $img_folder }}/{{ $img_name }}_2560.webp') }{{ $a }}" height="1440" width="2560">
          <amp-img fallback alt="{{ $desc }}" layout="responsive" class="bordering"
          srcset="{{ $b }}{ asset('assets/blog/{{ $img_folder }}/{{ $img_name }}_1280.jpg') }{{ $a }},
          {{ $b }}{ asset('assets/blog/{{ $img_folder }}/{{ $img_name }}_2560.jpg') }{{ $a }} 2x"
          src="{{ $b }}{ asset('assets/blog/{{ $img_folder }}/{{ $img_name }}_2560.jpg') }{{ $a }}" height="1440" width="2560">
          </amp-img></amp-img>
            <div class="download" on="tap:piclgtbx{{ $tap }}" role="button" tabindex="0" amp-fx="fade-in" data-margin-start="20%">
              <svg xmlns="http://www.w3.org/2000/svg" style="display: block; transform: scale(-1,1); margin-left: -5px" viewBox="0 0 24 24" fill="#fff" width="27px" height="27px"><path d="M0 0h24v24H0z" fill="none"/><path d="M10 9V5l-7 7 7 7v-4.1c5 0 8.5 1.6 11 5.1-1-5-4-10-11-11z"/></svg>
              <span class="font_helv"style="color:#fff; font-size: 16px; margin: 3px 0 0 5px; font-weight:500;letter-spacing: .08em;">SHARE</span>
            </div>
        </div>
      </div>
      <amp-lightbox id="piclgtbx{{ $tap }}" layout="nodisplay">
        <div class="dark_ovrlay_lightroom" on="tap:piclgtbx{{ $tap }}.close" role="button" tabindex="0"></div>
            <div class="popup">
              <p class="sans_serif_p" style="margin:0; padding-top:0;">Share</p>
              <span role="button" tabindex="0" on="tap:piclgtbx{{ $tap }}.close" class="sans_serif_p xclose" style="margin:0; padding:0;" title="close popup" role="button" tabindex="0">X</span>
              <a class="iconsocialdownload2" href="{{ $b }}{ asset('assets/blog/{{ $img_folder }}/{{ $img_name }}_2560.jpg') }{{ $a }}" download title="Download {{ $desc }}">
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
                data-param-media="{{ $b }}{ asset('assets/blog/{{ $img_folder }}/{{ $img_name }}_2560.jpg') }{{ $a }}"
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
                  <p class="sans_serif_p" style="margin:0; padding:0;">{{ $b }}{ asset('assets/blog/{{ $img_folder }}/{{ $img_name }}_2560.jpg') }{{ $a }}</p>
                </div>
              <p class="sublinkcopy">The picture is published with a <a href="https://creativecommons.org/licenses/by-sa/2.0/?ref=ccsearch&atype=rich" class="link" title="Link to the License explanation">CC BY-SA 2.0 license.</a> You can freely embed it on your website, by providing a link to this page. </p>
            </div>
        </amp-lightbox>
        <p class="subpicture">{{ $desc }}</p>
    </div>
  </textarea>
</pre>

  <script src="{{ asset('experiment/js/jquery.min.js') }}"></script>
  <script type="text/javascript">
  function myFunction() {
      /* Get the text field */
      var copyText = document.getElementById("myInput");

      /* Select the text field */
      copyText.select();
      copyText.setSelectionRange(0, 99999); /*For mobile devices*/

      /* Copy the text inside the text field */
      document.execCommand("copy");

      /* Alert the copied text */
      alert("Copied the text: " + copyText.value);
  }
  </script>
</body>
</html>
