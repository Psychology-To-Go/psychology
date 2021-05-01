<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="robots" content="NOINDEX, NOFOLLOW">
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <title>Automation Task</title>
  <link href="{{ asset('experiment/css/chessboard-1.0.0.min.css') }}" rel="stylesheet">
  <style media="screen">
  .flexbox{display: flex;}
    .sourcebox1{order: 0;padding: 20px; width: 30%;}
    .sourcebox2{order: 1;padding: 20px; width: 30%;}
    .sourcebox3{order: 2;padding: 20px; width: 30%;}
  </style>
</head>
<body>


  <div style="margin-top: 2rem">
    <button class="button blue" style="margin-top:10px; margin-bottom: 30px" onclick="mySectionsHtmlTable()">1. Table</button>
    <button class="button blue" style="margin-top:10px; margin-bottom: 30px" onclick="mySectionsHtmlSection()">2. Sections</button>
  </div>
  <!--
  Put here what you got from writer.blade.php!
  -->


  <script type="text/javascript">

  function mySectionsHtmlSection(){
    /* Get the text field */
    var headings = [];
    var blob = "'";
    var at = "@";
    var dot = ".";
    var tag_names = {
      h2:1,
      h3:1,
      h4:1,
      h5:1,
      h6:1
    };

    function walk(root) {
      if (root.nodeType === 1 && root.nodeName !== 'script') {
        if (tag_names.hasOwnProperty(root.nodeName.toLowerCase())) {
          headings.push(root);
        } else {
          for (var i = 0; i < root.childNodes.length; i++) {
            walk(root.childNodes[i]);
          }
        }
      }
    }

    walk(document.body);

    for( var i = 0; i < headings.length; i++ ) {
      document.write(at + 'include(' + blob + 'website' + dot + 'articles' + dot + 'ads' + dot + i + blob + ')');
      document.write('<section id="');
      document.write(i);
      document.write('" style="background-color: #fff;">');
      document.write('<div class="container-rounded mx-auto light-bg-2"><div class="container-medium mx-auto"><div amp-fx="fade-in-scroll" data-repeat>');
      document.write('<h2 class="sans_serif_h2">');
      document.write(headings[i].innerHTML);
      document.write('</h2></div></div></div></section>');
    }
  }


  function mySectionsHtmlTable(){
    /* Get the text field */
    var headings = [];
    var blob = "'";
    var tag_names = {
      h1:1,
      h2:1,
      h3:1,
      h4:1,
      h5:1,
      h6:1
    };

    function walk(root) {
      if (root.nodeType === 1 && root.nodeName !== 'script') {
        if (tag_names.hasOwnProperty(root.nodeName.toLowerCase())) {
          headings.push(root);
        } else {
          for (var i = 0; i < root.childNodes.length; i++) {
            walk(root.childNodes[i]);
          }
        }
      }
    }

    walk(document.body);

    for( var i = 0; i < headings.length; i++ ) {
      document.write('<div on="tap:AMP.scrollTo(id=' + blob + i + blob + ', position=' + blob + 'top' + blob + ', duration=500)" class="selector_topics" tabindex="0" role="button">' + headings[i].innerHTML + '</div>');
    }
  }

  function mySectionsHtmlParagraph(){
    /* Get the text field */
    var headings = [];
    var xj = document.getElementById("xj").value;
    var blob = "'";
    var tag_names = {
      p:1,
      ul:1,
      ol:1
    };

    function walk(root) {
      if (root.nodeType === 1 && root.nodeName !== 'script') {
        if (tag_names.hasOwnProperty(root.nodeName.toLowerCase())) {
          headings.push(root);
        } else {
          for (var i = 0; i < root.childNodes.length; i++) {
            walk(root.childNodes[i]);
          }
        }
      }
    }

    walk(document.body);

    for( var i = 0; i < headings.length; i++ ) {
      document.write('<div amp-fx="fade-in-scroll" data-repeat>');
      document.write(headings[i].innerHTML);
      document.write('</div>');
    }
  }

    function mySectionsHtmlYouTube(){
      var xxj = document.getElementById("xxj").value;

      document.write('<div amp-fx="fade-in-scroll" data-repeat><div class="amp-shadow"><amp-youtube data-videoid="');
      document.write(xxj);
      document.write('" credentials="omit" layout="responsive" width="480" height="270"></amp-youtube></div></div>');
    }

    function mySectionsHtmlKeyPhrase(){
      var xxxj = document.getElementById("xxxj").value;

      document.write('<div class="selectatopic" amp-fx="fade-in-scroll" data-repeat style="background: #fff; margin-bottom: 40px"><div class="bigdick"><svg xmlns="http://www.w3.org/2000/svg" enable-background="new 0 0 24 24" viewBox="0 0 24 24" fill="#222" width="40px" height="40px"><g><rect fill="none" height="24" width="24"/></g><g><g><path d="M13,8.57c-0.79,0-1.43,0.64-1.43,1.43s0.64,1.43,1.43,1.43s1.43-0.64,1.43-1.43S13.79,8.57,13,8.57z"/><path d="M13,3C9.25,3,6.2,5.94,6.02,9.64L4.1,12.2C3.85,12.53,4.09,13,4.5,13H6v3c0,1.1,0.9,2,2,2h1v3h7v-4.68 c2.36-1.12,4-3.53,4-6.32C20,6.13,16.87,3,13,3z M16,10c0,0.13-0.01,0.26-0.02,0.39l0.83,0.66c0.08,0.06,0.1,0.16,0.05,0.25 l-0.8,1.39c-0.05,0.09-0.16,0.12-0.24,0.09l-0.99-0.4c-0.21,0.16-0.43,0.29-0.67,0.39L14,13.83c-0.01,0.1-0.1,0.17-0.2,0.17h-1.6 c-0.1,0-0.18-0.07-0.2-0.17l-0.15-1.06c-0.25-0.1-0.47-0.23-0.68-0.39l-0.99,0.4c-0.09,0.03-0.2,0-0.25-0.09l-0.8-1.39 c-0.05-0.08-0.03-0.19,0.05-0.25l0.84-0.66C10.01,10.26,10,10.13,10,10c0-0.13,0.02-0.27,0.04-0.39L9.19,8.95 c-0.08-0.06-0.1-0.16-0.05-0.26l0.8-1.38c0.05-0.09,0.15-0.12,0.24-0.09l1,0.4c0.2-0.15,0.43-0.29,0.67-0.39l0.15-1.06 C12.02,6.07,12.1,6,12.2,6h1.6c0.1,0,0.18,0.07,0.2,0.17l0.15,1.06c0.24,0.1,0.46,0.23,0.67,0.39l1-0.4c0.09-0.03,0.2,0,0.24,0.09 l0.8,1.38c0.05,0.09,0.03,0.2-0.05,0.26l-0.85,0.66C15.99,9.73,16,9.86,16,10z"/></g></g></svg></div><div class="sans_serif_p" style="color: #222; padding: 12px 8px 8px 42px"><strong>Key idea</strong></div><p class="sans_serif_p" style="padding: 0px 13px 5px 10px; margin: 0;font-style:italic">');
      document.write(xxxj);
      document.write('</p></div>');
    }

    function mySectionsHtmlImages(){
      /* Get the text field */
      var headings = [];
      var xj = document.getElementById("xj").value;
      var blob = "'";
      var tag_names = {
        img:1
      };

      function walk(root) {
        if (root.nodeType === 1 && root.nodeName !== 'script') {
          if (tag_names.hasOwnProperty(root.nodeName.toLowerCase())) {
            headings.push(root);
          } else {
            for (var i = 0; i < root.childNodes.length; i++) {
              walk(root.childNodes[i]);
            }
          }
        }
      }

      walk(document.body);

      for( var i = 0; i < headings.length; i++ ) {
        document.write('<amp-img alt="" layout="responsive" srcset="https://psychology-to-go.com/assets/img/blog/' + xj + '/' + i + '_1499.webp, https://psychology-to-go.com/assets/img/blog/' + xj + '/' + i + '_2560.webp 2x" src="https://psychology-to-go.com/assets/img/blog/' + xj + '/' + i + '_2560.webp" height="1440" width="2560"> <amp-img fallback alt="" layout="responsive" srcset="https://psychology-to-go.com/assets/img/blog/' + xj + '/' + i + '_1499.jpg, https://psychology-to-go.com/assets/img/blog/' + xj + '/' + i + '_2560.jpg 2x" src="https://psychology-to-go.com/assets/img/blog/' + xj + '/' + i + '_2560.jpg" height="1440" width="2560"> </amp-img></amp-img>');
      }
    }

    </script>
</body>
</html>
