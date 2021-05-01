<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="robots" content="NOINDEX, NOFOLLOW">
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <title>Generator</title>

</head>
<body>
  <h1 style="margin-top: 5rem;">Pictures</h1>
    <form method="post" action="{{ route('automation_post')}}">
      {{ csrf_field() }}
      <div class="form">
        <p class="mb2">What id for the folder?</p>
        <input type="text" value="" name="id" class="input-field" placeholder="1">
        <p class="mb2">Name of the Picture</p>
        <input type="text" value="" name="name" class="input-field" placeholder="not the _2250 part :)">
        <p class="mb2">What is your phrase?</p>
        <input type="text" value="" name="phrase" class="input-field" placeholder="Alzheimers is a progressive form of dementia">
        <br>
      <button type="submit" class="button blue">Continue</button>
      </div>
    </form>
  <h1 style="margin-top: 5rem;">Citation</h1>
    <form method="post" action="{{ route('citation_post')}}">
      {{ csrf_field() }}
      <div class="form">
        <p class="mb2">What is the quote?</p>
        <input type="text" value="" name="quote" class="input-field" placeholder="Alzheimers is a progressive form of dementia">
        <p class="mb2">What Organisation?</p>
        <input type="text" value="" name="organisation" class="input-field" placeholder="Alzheimers Association">
        <p class="mb2">What Sort of Organisation?</p>
        <input type="text" value="" name="sort" class="input-field" placeholder="Non-Profit Organisation">
        <p class="mb2">Do you have a link?</p>
        <input type="text" value="" name="link" class="input-field" placeholder="https://www.alz.org/alzheimers">
        <br>
      <button type="submit" class="button blue">Continue</button>
      </div>
    </form>

</body>
</html>
