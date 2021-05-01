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
    <p>
<a href="https://www.scribbr.com/apa-citation-generator/new/webpage/">Visit here for resources creating</a>
    </p>
      <button type="submit" class="button blue" onclick="myCitationElement1()">Copy Quote</button>
        <button type="submit" class="button blue" onclick="myCitationElement2()">Copy Lightbox</button>
  </div>

  <pre>
  <textarea id="CitationElement1" style="opacity:0">
  <span role="button" tabindex="0" on="tap:lgtbx{{ $tap }}" class="link">{{ $desc }}<svg class="svgtrust" xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24"><path d="M0 0h24v24H0z" fill="none"/><path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm-2 15l-5-5 1.41-1.41L10 14.17l7.59-7.59L19 8l-9 9z"/></svg></span>
  </textarea>
  </pre>

  <pre>
  <textarea id="CitationElement2" style="opacity:0">
    <amp-lightbox id="lgtbx{{ $tap }}" layout="nodisplay">
    <div class="dark_ovrlay_lightroom" on="tap:lgtbx{{ $tap }}.close" role="button" tabindex="0"></div>
       <div class="popup">
         <p class="sans_serif_p" style="margin:0; padding-top:0; padding-bottom: 10px;">
           <svg class="trustboxsvg" xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24"><path d="M0 0h24v24H0z" fill="none"/><path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm-2 15l-5-5 1.41-1.41L10 14.17l7.59-7.59L19 8l-9 9z"/></svg>Trusted Source
         </p>
         <span role="button" tabindex="0" on="tap:lgtbx{{ $tap }}.close" class="sans_serif_p xclose" style="margin:0; padding:0;outline: none;" title="close popup" role="button" tabindex="0">X</span>
         <p class="sans_serif_p" style="margin:0; padding:10px 0 0 0;">
            <b>{{ $organisation }}</b></p>
           <div class="relative copybox2">
             <p class="sans_serif_p" style="margin:0; padding:0 0 20px 0;"><em>{{ $sort }}</em></p>
           </div>
           <a class="button" style="background-color: rgba(0, 0, 0, 0.95); color: #fff;" href="{{ $link }}" target="_blank" rel="noreferrer">Go To Source</a>
       </div>
    </amp-lightbox>
    </textarea>
  </pre>


  <script src="{{ asset('experiment/js/jquery.min.js') }}"></script>
  <script type="text/javascript">
  function myCitationElement1() {
      /* Get the text field */
      var copyText = document.getElementById("CitationElement1");

      /* Select the text field */
      copyText.select();
      copyText.setSelectionRange(0, 99999); /*For mobile devices*/

      /* Copy the text inside the text field */
      document.execCommand("copy");

      /* Alert the copied text */
      alert("Copied the text: " + copyText.value);
  }
  function myCitationElement2() {
      /* Get the text field */
      var copyText = document.getElementById("CitationElement2");

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
