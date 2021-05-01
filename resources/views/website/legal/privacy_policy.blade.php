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
<section style="background-color: #fff; padding: 4.5rem 0 1.5rem 0;">
  <div class="container-rounded mx-auto light-bg-1">
    <div class="container-medium mx-auto">

      <div amp-fx="fade-in fly-in-bottom" data-easing="cubic-bezier(0.76, 0, 0.24, 1)" data-duration="1500ms">
        <h1 class="sans_serif_h1 text-gradient-deepblue pb2 center">Welcome to our Privacy Policy</h1>
        <p class="sans_serif_p pb3 center">Effective Date: 15. January 2021</p>
        <br><br>
      </div>
      <div amp-fx="fade-in fly-in-bottom" data-easing="cubic-bezier(0.76, 0, 0.24, 1)" data-duration="2000ms">
        <h2 class="sans_serif_h2 pb2">Table of contents</h2>
        <p class="sans_serif_p pb2">Feel free to use this table of contents to move through our privacy policy. Just click on a link and you will be directed to the specific section.</p>
        <p class="sans_serif_p pb2">We want to ensure you understand the information we collect, how we use it, how we share it, and how you can control your information.
          Please read entirely through our Privacy Policy. Don't hesitate to reach out to us at psychology.to.go.2019@gmail.com if you have any questions.</p>
      </div>
      <div amp-fx="fade-in fly-in-bottom" data-easing="cubic-bezier(0.76, 0, 0.24, 1)" data-duration="2500ms">
        <div class="selectatopic" style="background: #161616; max-width: 470px;">
          <div class="bigdick">
            <svg xmlns="http://www.w3.org/2000/svg" enable-background="new 0 0 24 24" viewBox="0 0 24 24" fill="#e3e3e3" width="40px" height="40px"><g><rect fill="none" height="24" width="24"/></g><g><g><path d="M13,8.57c-0.79,0-1.43,0.64-1.43,1.43s0.64,1.43,1.43,1.43s1.43-0.64,1.43-1.43S13.79,8.57,13,8.57z"/><path d="M13,3C9.25,3,6.2,5.94,6.02,9.64L4.1,12.2C3.85,12.53,4.09,13,4.5,13H6v3c0,1.1,0.9,2,2,2h1v3h7v-4.68 c2.36-1.12,4-3.53,4-6.32C20,6.13,16.87,3,13,3z M16,10c0,0.13-0.01,0.26-0.02,0.39l0.83,0.66c0.08,0.06,0.1,0.16,0.05,0.25 l-0.8,1.39c-0.05,0.09-0.16,0.12-0.24,0.09l-0.99-0.4c-0.21,0.16-0.43,0.29-0.67,0.39L14,13.83c-0.01,0.1-0.1,0.17-0.2,0.17h-1.6 c-0.1,0-0.18-0.07-0.2-0.17l-0.15-1.06c-0.25-0.1-0.47-0.23-0.68-0.39l-0.99,0.4c-0.09,0.03-0.2,0-0.25-0.09l-0.8-1.39 c-0.05-0.08-0.03-0.19,0.05-0.25l0.84-0.66C10.01,10.26,10,10.13,10,10c0-0.13,0.02-0.27,0.04-0.39L9.19,8.95 c-0.08-0.06-0.1-0.16-0.05-0.26l0.8-1.38c0.05-0.09,0.15-0.12,0.24-0.09l1,0.4c0.2-0.15,0.43-0.29,0.67-0.39l0.15-1.06 C12.02,6.07,12.1,6,12.2,6h1.6c0.1,0,0.18,0.07,0.2,0.17l0.15,1.06c0.24,0.1,0.46,0.23,0.67,0.39l1-0.4c0.09-0.03,0.2,0,0.24,0.09 l0.8,1.38c0.05,0.09,0.03,0.2-0.05,0.26l-0.85,0.66C15.99,9.73,16,9.86,16,10z"/></g></g></svg>
          </div>
          <div class="jump" style="color: #f5f5f7;">
            Table of Content
          </div>
          <div on="tap:AMP.scrollTo(id='1', position='top', duration=500)" class="selector_topics" tabindex="0" role="button">Summary of changes</div>
          <div on="tap:AMP.scrollTo(id='2', position='top', duration=500)" class="selector_topics" tabindex="0" role="button">Thank you for using Psychology To Go!</div>
          <div on="tap:AMP.scrollTo(id='3', position='top', duration=500)" class="selector_topics" tabindex="0" role="button">We collect information in different ways</div>
          <div on="tap:AMP.scrollTo(id='4', position='top', duration=500)" class="selector_topics" tabindex="0" role="button">What we do with the info we collect</div>
          <div on="tap:AMP.scrollTo(id='5', position='top', duration=500)" class="selector_topics" tabindex="0" role="button">Transferring your information</div>
          <div on="tap:AMP.scrollTo(id='6', position='top', duration=500)" class="selector_topics" tabindex="0" role="button">How long we keep your information</div>
          <div on="tap:AMP.scrollTo(id='7', position='top', duration=500)" class="selector_topics" tabindex="0" role="button">How and when we share information</div>
          <div on="tap:AMP.scrollTo(id='8', position='top', duration=500)" class="selector_topics" tabindex="0" role="button">Your Choices, Your Rights, Your Security</div>
          <div on="tap:AMP.scrollTo(id='9', position='top', duration=500)" class="selector_topics" tabindex="0" role="button">Our policy on children’s information</div>
          <div on="tap:AMP.scrollTo(id='10', position='top', duration=500)" class="selector_topics" tabindex="0" role="button">Residents of the EEA</div>
          <div on="tap:AMP.scrollTo(id='11', position='top', duration=500)" class="selector_topics" tabindex="0" role="button">California residents</div>
          <div on="tap:AMP.scrollTo(id='12', position='top', duration=500)" class="selector_topics" tabindex="0" role="button">How we make changes to this policy</div>
          <div on="tap:AMP.scrollTo(id='13', position='top', duration=500)" class="selector_topics" tabindex="0" role="button">Contact us</div>
          <div on="tap:AMP.scrollTo(id='14', position='top', duration=500)" class="selector_topics" tabindex="0" role="button">Cookies Policy</div>
      </div>
    </div>

    </div>
  </div>
</section>
<section id="1" style="background-color: #fff;">
  <div class="container-rounded mx-auto">
    <div class="container-medium mx-auto">

      <div amp-fx="fade-in-scroll" data-repeat>
        <h2 class="sans_serif_h2 pb2">Summary of changes</h2>
        <p class="sans_serif_p pb2">More details about data we collect and how we use it has been published.</p>
      </div>

    </div>
  </div>
</section>
<section id="2" style="background-color: #fff;">
  <div class="container-rounded mx-auto light-bg-2">
    <div class="container-medium mx-auto">

        <div amp-fx="fade-in-scroll" data-repeat>
          <h2 class="sans_serif_h2 pb2">Thank you for using <br>Psychology To Go!</h2>
        </div>
        <div amp-fx="fade-in-scroll" data-repeat>
          <p class="sans_serif_p pb2">Our mission is to be your trusted source of information for mental health.
          To do that, we show you personalized content and ads. We do so, because we think you might be interested in relevant information.</p>
        </div>
        <div amp-fx="fade-in-scroll" data-repeat>
          <p class="sans_serif_p pb2">But, we also know that you have an interest in how we collect information from you and third-parties. Such collected information is only being used if we have a proper legal basis for doing so.</p>
        </div>
        <div amp-fx="fade-in-scroll" data-repeat>
          <p class="sans_serif_p pb2">This policy is written to explain to you what information we collect, how we use it, and what choices you have about it. The terms we use are technical nature, after all we are an internet platform.</p>
        </div>
        <div amp-fx="fade-in-scroll" data-repeat>
          <p class="sans_serif_p pb2">However, we have tried to provide the clearest and easiest explanations for you. In case you have questions, do not hesitate to contact us at: <br> psychology.to.go.2019@gmail.com</p>
        </div>
        <div amp-fx="fade-in-scroll" data-repeat>
          <p class="sans_serif_p pb2">Before continuing, we would like to bring your attention to the following statement: Whenever you access and/or use our Services, it falls under the Psychology To Go <a href="{{ route('terms_of_use')}}" class="link-dark">Terms of Use</a> (known as “Terms”).</p>
        </div>
        <div amp-fx="fade-in-scroll" data-repeat>
          <p class="sans_serif_p pb3">Thus, any bold and cursive terms displayed on this page, which might not be defined here, have a meaning provided in the <a href="{{ route('terms_of_use')}}" class="link-dark">Terms.</a></p>
        </div>
        <div amp-fx="fade-in-scroll" data-repeat>
          <p class="sans_serif_p pb2">
            <strong>
            <em>By using or otherwise accessing any services, you agree to this privacy policy. In addition you give consent to the collection, use, and processing of your personal data. This collection, use, and processing is in accordance with this privacy policy. In case you do not agree to those described terms or this privacy policy do not visit, use, or otherwise access any services.</em>
            </strong>
          </p>
        </div>

    </div>
  </div>
</section>
<section id="3" style="background-color: #fff;">
  <div class="container-rounded mx-auto light-bg-1">
    <div class="container-medium mx-auto">

        <div amp-fx="fade-in-scroll" data-repeat>
          <h2 class="sans_serif_h2 pb2">We collect information <br> in different ways</h2>
        </div>
        <div amp-fx="fade-in-scroll" data-repeat>
          <p class="sans_serif_p pb2">
            <strong>1. When you give it to us or give us permission to obtain it</strong><br>
            You may provide us with information in several ways. (1) Transactions with our Services - When you contact us.
          </p>
        </div>
        <div amp-fx="fade-in-scroll" data-repeat>
          <p class="sans_serif_p pb2">Your Personal Information that you provide may include your name, email address, physical address, zip/city, marital status, birth date, gender, and health information. Your health information may include diagnosis, time of diagnosis, what medications you're taking, and/or what type of care or therapy you are searching for. And all other information you might provide.</p>
        </div>
        <div amp-fx="fade-in-scroll" data-repeat>
          <p class="sans_serif_p pb2">
            <strong>2. We get technical information when you use Psychology To Go</strong><br>
            Whenever using our website, certain internet and network activity information gets created and logged automatically. This is true for your activity here on Psychology To Go. There are various types of information we collect. Here are some of them:
          </p>
        </div>
        <div amp-fx="fade-in-scroll" data-repeat>
          <p class="sans_serif_p pb2">
            <strong>Log data:</strong>
            When you use Psychology To Go, our servers record information known as log-data. This includes information that your browser automatically sends whenever you visit a website. This log data includes your Internet Protocol address. We use it to infer your approximate location. Other log data is browser type and settings,
            the date and time of your request, how you used Psychology To Go, cookie data and device data.
          </p>
        </div>
        <div amp-fx="fade-in-scroll" data-repeat>
          <p class="sans_serif_p pb2">
            <strong>Cookie data.</strong>
            Cookie data. We also use “cookies” (small text files sent by your computer each time you visit Psychology To Go) or similar technologies to get log data. When we use cookies or other similar technologies, we use session cookies (that last until you close your browser) or persistent cookies (that last until you or your browser delete them). For further information check our
            <a class="link-dark" on="tap:AMP.scrollTo(id='14', position='top', duration=500)">Cookie Policy.</a>
          </p>
        </div>
        <div amp-fx="fade-in-scroll" data-repeat>
          <p class="sans_serif_p pb3">Thus, any bold and cursive terms displayed on this page, which might not be defined here, have a meaning provided in the <a href="{{ route('terms_of_use')}}" class="link-dark">Terms.</a></p>
        </div>
        <div amp-fx="fade-in-scroll" data-repeat>
          <p class="sans_serif_p pb2">
            <strong>
              Device information.
            </strong>
            In addition to log data, we collect information about the device you’re using Psychology To Go on, including the type of device, operating system, settings, unique device identifiers and crash data that helps us understand when something breaks. Regardless, this depends on the permissions you've granted.
          </p>
        </div>
        <div amp-fx="fade-in-scroll" data-repeat>
          <p class="sans_serif_p pb2">
            <strong>
              Data Analytics
            </strong>
            Web analytics services, including third-party services such as Google Analytics, collect information about how visitors use our Websites. This happens on both an individual and aggregated basis.
            <a href="https://policies.google.com/technologies/partner-sites" target="_blank" class="link-dark">Learn more about Google Analytics</a>
          </p>
        </div>
        <div amp-fx="fade-in-scroll" data-repeat>
          <p class="sans_serif_p pb2">
            <strong>
              Social Media and Sharing:
            </strong>
            If you share an article or post a comment or other content with a friend/contact.
          </p>
        </div>
        <div amp-fx="fade-in-scroll" data-repeat>
          <p class="sans_serif_p pb3">
            <strong>
              Our partners and advertisers share information with us
            </strong>
            Online advertisers or third parties share information with us to measure, report on or improve the performance of ads on Psychology To Go. For the marketing purpose, we and our marketing partners collect information indicating an interest in particular subject matter.
          </p>
        </div>
        <div amp-fx="fade-in-scroll" data-repeat>
          <p class="sans_serif_p pb3">
            <strong>
            Cookies and Tracking Technologies
            </strong>
            With appropriate consent, we use cookies (and similar technologies) to help us collect, analyze, improve, secure, and market our Website and Services. Next to this, we use them to support functionality which enhances your browsing experience. You can read more in the
            <a class="link-dark" on="tap:AMP.scrollTo(id='15', position='top', duration=500)">Cookie Policy.</a>
          </p>
        </div>

        <div amp-fx="fade-in-scroll" data-repeat>
          <p class="sans_serif_p pb3">
            The website usage information, such as pages viewed, interactions, dwell time, and navigation is being collected, too. Next to other rights detailed below, you may choose to install the <a href="https://tools.google.com/dlpage/gaoptout/" target="_blank" class="link-dark">Google Analytics Opt-Out Browser Add-on.</a> Google Analytics Opt-Out Browser Add-on. This ensures  to opt out of Google Analytics data collection.
          </p>
        </div>

    </div>
  </div>
</section>
<section id="4" style="background-color: #fff;">
  <div class="container-rounded mx-auto light-bg-2">
    <div class="container-medium mx-auto">

        <div amp-fx="fade-in-scroll" data-repeat>
          <h2 class="sans_serif_h2 pb2">What we do with<br>the info we collect</h2>
        </div>
        <div amp-fx="fade-in-scroll" data-repeat>
          <p class="sans_serif_p pb2">
            <strong>We’re committed to showing you content that’s relevant. To do that, we use your personal information to provide and improve your experience. Next to this, we use it for the following purposes:</strong>
          </p>
        </div>
        <div amp-fx="fade-in-scroll" data-repeat>
          <p class="sans_serif_p pb2">
            <strong>1. To Provide and Enhance our Services</strong><br>
            All information, which was collected by us is used to enhance our services. This includes the proper technical delivery of our content. Next to it, to personalize features and content. And finally to make relevant suggestions for you regarding our Services.
          </p>
        </div>
        <div amp-fx="fade-in-scroll" data-repeat>
          <p class="sans_serif_p pb2">
            <strong>2. Transactions</strong><br>
            Your Personal Information is used by us to process your transactions. For example, to respond to your questions or comments. Other transactions include the sending of confirmations, responses to your requests, and for any related communications.
          </p>
        </div>
        <div amp-fx="fade-in-scroll" data-repeat>
          <p class="sans_serif_p pb2">
            <strong>3. Marketing</strong><br>
            We have a legitimate interest in delivering ads that are relevant, interesting and personal to you in order to generate revenue. Thus, we use the information we have to improve our advertising systems. This gives us the ability to show you much more relevant advertising. Of course, such an advertisement is interest-based. To understand how we are doing we are measuring the effectiveness and reach of advertisements and services. In addition, we might use your Personal Information for other  marketing and market research purposes. The aim is to learn more about our users. We are only contacting you for direct marketing purposes in accordance with applicable laws. At any time, you can opt out of our use of your Personal Information for marketing, market-research, or direct marketing. What you have to do is stated in the section <a class="link-dark" on="tap:AMP.scrollTo(id='8', position='top', duration=500)">Your Choices, Your Rights, Your Security.</a>
          </p>
        </div>
        <div amp-fx="fade-in-scroll" data-repeat>
          <p class="sans_serif_p pb2">
            <strong>4. Retargeting</strong><br>
            We use your information to allow us or third parties to deliver advertisements based on your interests. We have a legitimate interest in delivering ads that are relevant, interesting and personal to you in order to generate revenue.
          </p>
        </div>
        <div amp-fx="fade-in-scroll" data-repeat>
          <p class="sans_serif_p pb2">
            <strong>5. Analytics</strong><br>
            We have a legitimate interest in using information we collect to customize your Psychology To Go experience based on data we gathered with our Analytics. Details include your website visits, your electronic interactions with any feature on our website, and your electronic interactions with any emails that we send to you. These data are known as “Usage Data”. As you know, this data is sensible. Therefore we decided to pseudonymize Usage Data. This means that collected data for Analytic purposes are not stored with your name, instead, we use an ID number. We use such pseudonymized data also for the purpose of discovering trends and analysing statistics.
          </p>
        </div>
        <div amp-fx="fade-in-scroll" data-repeat>
          <p class="sans_serif_p pb2">
            <strong>6. Communications</strong><br>
            Of course we’d like to communicate with you. In order to use your information to send you marketing communications or to let you know about changes to our policies and Terms, we ask you to give additional consent. This will be clearly identifiable next to any form. Without your consent, you will not receive direct mailing from us! We only use information where we have a proper legal basis for doing so.
          </p>
        </div>
        <div amp-fx="fade-in-scroll" data-repeat>
          <p class="sans_serif_p pb2">
            <strong>7. Other Reasons</strong><br>
            We may use and collect Personal Information to work with law enforcement and keep Psychology To Go safe. We may get requests for access to information from law enforcement authorities like the police or courts. Our interests and those of third parties, like, complying with the law, and when obtaining professional legal advice or other professional advice.
          </p>
        </div>

    </div>
  </div>
</section>
<section id="5" style="background-color: #fff;">
  <div class="container-rounded mx-auto light-bg-1">
    <div class="container-medium mx-auto">

        <div amp-fx="fade-in-scroll" data-repeat>
          <h2 class="sans_serif_h2 pb2">Transferring <br>your information</h2>
        </div>
        <div amp-fx="fade-in-scroll" data-repeat>
          <p class="sans_serif_p pb2">
            <strong>
            <em>
              By using our website or services, you authorize us, to the maximum extent permitted by applicable law, to collect, store, maintain, process and transfer your information outside your home country, including Bulgaria, for the purposes described in this policy. The privacy protections and the rights of authorities to access your personal information in such countries may not be equivalent to those of your home country. You acknowledge that your personal information may thus be subject to other foreign laws and accessible to Bulgaria as well as foreign governments, courts, law enforcement and regulatory agencies.
            </em>
          </strong>
          </p>
        </div>

    </div>
  </div>
</section>
<section id="6" style="background-color: #fff;">
  <div class="container-rounded mx-auto light-bg-2">
    <div class="container-medium mx-auto">

        <div amp-fx="fade-in-scroll" data-repeat>
          <h2 class="sans_serif_h2 pb2">How long we keep <br> your information</h2>
        </div>
        <div amp-fx="fade-in-scroll" data-repeat>
          <p class="sans_serif_p pb2">
            We keep your information only so long as is necessary for the purposes for which it is processed. In addition, we only keep data until we fulfill the purposes described in this policy.
          </p>
        </div>
        <div amp-fx="fade-in-scroll" data-repeat>
          <p class="sans_serif_p pb2">
            The time frame may vary depending on the nature of your interaction with us. When we no longer need to use your information and there is no need for us to keep it to comply with our legal or regulatory obligations, then we either permanently delete or destroy your information or depersonalize it so that we can't identify you.
          </p>
        </div>

    </div>
  </div>
</section>
<section id="7" style="background-color: #fff;">
  <div class="container-rounded mx-auto light-bg-1">
    <div class="container-medium mx-auto">

        <div amp-fx="fade-in-scroll" data-repeat>
          <h2 class="sans_serif_h2 pb2">How and when <br>we share information</h2>
        </div>
        <div amp-fx="fade-in-scroll" data-repeat>
          <p class="sans_serif_p pb2">
            <strong>
            1. To Improve Our Services:
            </strong>
            Online advertisers and third-party companies that we or they use to audit or improve the delivery and performance of ads or content on our websites. These companies are authorized to use your personal information. However, they can only use it to provide these services to us.These third-parties currently may include:
            <a href="https://www.facebook.com/help/568137493302217" class="link-dark">Facebook,</a>
            <a href="https://tools.google.com/dlpage/gaoptout" class="link-dark">Google,</a>
            <a href="https://tools.google.com/dlpage/gaoptout" class="link-dark">Youtube,</a>
            <a href="https://help.pinterest.com/en/article/personalized-ads-on-pinterest" class="link-dark">Pinterest,</a>
            <a href="https://twitter.com/en/privacy" class="link-dark">Twitter</a>
          </p>
        </div>
        <div amp-fx="fade-in-scroll" data-repeat>
          <p class="sans_serif_p pb2">
            <strong>2. Third-Party Marketing:</strong><br>
              Third-Party Marketing: We provide advertisers with reports about the audience seeing their ads. This has the aim to show how their ads are performing. However, we don't share information that personally identifies you. For example, information like your name, email address are not shared. But, unless you give us permission. In any situation where we would process your data and share it with a third-party, we would obtain your consent, or opt in. If you do not opt in, then we won't share your information.
          </p>
        </div>
        <div amp-fx="fade-in-scroll" data-repeat>
          <p class="sans_serif_p pb2">
            <strong>3. Legal Requirements:</strong><br>
            We only share information if we believe that disclosure is reasonably necessary to comply with a law, regulation or legal request. We may access, preserve, and share information when we have a good faith belief it is necessary to detect, prevent, and address fraud, security or technical issues, and other illegal activity on our platform. We do so protect ourselves, you, and others, including as part of investigations; or to prevent death or imminent bodily harm.
          </p>
        </div>
        <div amp-fx="fade-in-scroll" data-repeat>
          <p class="sans_serif_p pb2">
            <strong>4. Online Marketing</strong><br>
            We might use, and whenever appropriate, disclose your information for market research and marketing purposes. The aim is to study our audience and offer as well as improve our Services. Our direct marketing purpose is only in accordance with applicable laws. At any time, you can opt out of our use of your information for the above mentioned purposes. For more information see
            <a class="link-dark" on="tap:AMP.scrollTo(id='8', position='top', duration=500)">Your Choices, Your Rights, Your Security.</a>
          </p>
        </div>
        <div amp-fx="fade-in-scroll" data-repeat>
          <p class="sans_serif_p pb2">
            <strong>5. We get technical information when you use Psychology To Go</strong><br>
            In any case of an acquisition, bankruptcy, dissolution, reorganization, or similar transaction or proceeding that involves the transfer of the information described in this Policy, we would share your information with a party involved in such a process. This could be a potential buyer.
          </p>
        </div>
        <div amp-fx="fade-in-scroll" data-repeat>
          <p class="sans_serif_p pb2">
            <strong>6. Finding Care</strong><br>
            When you try to contact a therapeut or you have chosen one through our website, then we will not share your personal information for Third-Party Marketing.
          </p>
        </div>


    </div>
  </div>
</section>
<section id="8" style="background-color: #fff;">
  <div class="container-rounded mx-auto light-bg-2">
    <div class="container-medium mx-auto">

        <div amp-fx="fade-in-scroll" data-repeat>
          <h2 class="sans_serif_h2 pb2">Your Choices, <br>Your Rights, <br>Your Security</h2>
        </div>
        <div amp-fx="fade-in-scroll" data-repeat>
          <p class="sans_serif_p pb2">
            There are various choices in regard to your personal information, which you can make. Write us an Email to psychology.to.go.2019@gmail.com to inform us. We do not offer a form currently.
            Thus, please inform us in your Email from which country you are. Additionally, tell us what choices you would like to make. The applicable law will be based on your country. See
            <a class="link-dark" on="tap:AMP.scrollTo(id='10', position='top', duration=500)">EEA/UK Addendum,</a>
            <a class="link-dark" on="tap:AMP.scrollTo(id='11', position='top', duration=500)">California residents,</a>
            and
            <a class="link-dark" on="tap:AMP.scrollTo(id='8', position='top', duration=500)">Your Choices, Your Rights, Your Security,</a>
            for your applicable choices and rights. However, here enlisted are the following choices and rights you have.
          </p>
        </div>
        <div amp-fx="fade-in-scroll" data-repeat>
          <p class="sans_serif_p pb2">
            <strong>Accessing your personal information:</strong>
            The information we collect on your behalf can be requested by you. As soon as it is required by law and depending on the request, we can grant access to the collected personal data about you. Please see your additional rights depending where you life:
            <a class="link-dark" on="tap:AMP.scrollTo(id='10', position='top', duration=500)">EEA/UK Addendum,</a>
            <a class="link-dark" on="tap:AMP.scrollTo(id='11', position='top', duration=500)">California residents.</a>
          </p>
        </div>

        <div amp-fx="fade-in-scroll" data-repeat>
          <p class="sans_serif_p pb2">
            <strong>Changing your personal information:</strong>
            Of course, we do rely on your participation to update and correct your personal information. Here we would like to point out that we may keep historical information in our backup files. Those files are permitted by law. In case that our Website does not permit you to update or correct data, then please contact us. Moreover, when we process your information on behalf of our partners, then we can forward your request to the individual partner. Additionally, we may follow the instructions provided by the individual partner concerning the modification of data.
          </p>
        </div>

        <div amp-fx="fade-in-scroll" data-repeat>
          <p class="sans_serif_p pb2">
            <strong>Deleting your personal information:</strong>
            Whenever we collect personal information on our own behalf, then we usually keep your data for a specific period. We only keep information as long as necessary to fulfill the purposes outlined in this policy. The exception is, if it is required or permitted by law. However, you may request information about how long we keep a specific type of information. Besides, you can always contact us via Email and request that we delete your personal information. In case that it is required by law, then we will grant the request and delete the information. But, keep in mind that in some scenarios we must keep your personal information. Such a scenario could be: (1) we have to comply with our legal obligations, (2) resolve a dispute, (3) enforce our agreements, and (4) or for another one of our business purposes. In the scenario. That we have processed your information on behalf of a partner, then we will forward your deletion request. However, we would have to wait for further instructions by the partner.
          </p>
        </div>

        <div amp-fx="fade-in-scroll" data-repeat>
          <p class="sans_serif_p pb2">
            <strong>Objecting to specific processing:</strong>
            In case we process data on our own behalf, you could object to our use of your personal information. Here you would have to contact us via Email. We would like to point out that California residents may have the right to object - or opt-out - of having information sold to third parties. If you would like to opt out of the sale of your information as defined under the California Consumer Privacy Act (CCPA), please send us an Email to psychology.to.go.2019@gmail.com with the headline “do not sell my personal information”. Then include your first and last name as well as your specific Email address. We do not discriminate against California consumers who exercise any of their rights described in this Policy.
          </p>
        </div>

        <div amp-fx="fade-in-scroll" data-repeat>
          <p class="sans_serif_p pb2">
            <strong>Online Tracking:</strong>
            This website does not currently support the feature to recognize automated browser signals regarding tracking mechanisms. This may include "Do Not Track" instructions.
          </p>
        </div>

        <div amp-fx="fade-in-scroll" data-repeat>
          <p class="sans_serif_p pb2">
              <strong>Promotional Emails:</strong>
              You might have provided us with your email address for the purpose of allowing us to send our newsletter. Other purposes could have been surveys, offers, and other promotional materials, or third-party content. Simply press Unsubscribe within the latest Email to stop receiving promotional Emails.
          </p>
        </div>

        <div amp-fx="fade-in-scroll" data-repeat>
          <p class="sans_serif_p pb2">
            <strong>Revoking your consent: </strong>
            In case that you revoke your consent for processing your personal information, we may no longer be able to provide our services to you. However, it can happen that we have to limit or deny your request to revoke consent if the law permits or requires us to do so. This also accounts to the case if we are unable to adequately verify your identity. You may revoke consent to processing (where such processing is based upon consent) by contacting us at the Email address mentioned in this privacy policy.
          </p>
        </div>

        <div amp-fx="fade-in-scroll" data-repeat>
          <p class="sans_serif_p pb2">
            If you do want to make requests for access, deletion, Do-Not-Sell, or any other privacy requests, you may get in touch with us at psychology.to.go.2019@gmail.com.
          </p>
        </div>

        <div amp-fx="fade-in-scroll" data-repeat>
          <p class="sans_serif_p pb2">
            <strong>Your Choice:</strong>
              Our third-party partners - who analyze and help us manage advertising - may use cookies or similar technologies. They provide you advertising based on your interests  as well as browsing activities. Please visit <a href="http://www.youronlinechoices.eu" target="_blank" class="link-dark"> http://www.youronlinechoices.eu</a> if you are located in the European Union. Please note you may receive generic ads, which would not be based on your personal information. Besides, you can choose to not be included in
              <a href="https://tools.google.com/dlpage/gaoptout/" target="_blank" class="link-dark"> Google Analytics here.</a>
          </p>
        </div>

        <div amp-fx="fade-in-scroll" data-repeat>
          <p class="sans_serif_p pb2">
            <strong>Your Security: </strong>
            The security of your Personal Information is important to us. We try to protect all submitted personal information. Herein, we follow generally accepted standards of protection. In addition, we take various precautions to protect information against misuse as well as loss. But, transmission of information over the internet is never fully secure. This is why we can not guarantee the security of your personal information when you choose to send it to us. Any transmissions are at your own risk.
          </p>
        </div>

        <div amp-fx="fade-in-scroll" data-repeat>
          <p class="sans_serif_p pb2">
            In the case that you have questions about the protection and security of your personal information, then do not hesitate to contact us at psychology.to.go.2019@gmail.com
          </p>
        </div>

        <div amp-fx="fade-in-scroll" data-repeat>
          <p class="sans_serif_p pb2">
            <strong>Links to third party websites:</strong>
          Yes, our services can contain links to other websites. Regardless, this privacy policy does not apply to those other websites. Therefore, we do not accept liability for the content of any other website. Please check the privacy policy of any other website, before using and transferring any of your personal information to it.
          </p>
        </div>

    </div>
  </div>
</section>
<section id="9" style="background-color: #fff;">
  <div class="container-rounded mx-auto light-bg-1">
    <div class="container-medium mx-auto">

        <div amp-fx="fade-in-scroll" data-repeat>
          <h2 class="sans_serif_h2 pb2">Our policy on <br>children’s information</h2>
        </div>
        <div amp-fx="fade-in-scroll" data-repeat>
          <p class="sans_serif_p pb2">
            No personal information from our Website about children is collected or maintained. As a child qualifies at our website anybody, who is under the age of 18. Thus, we do not allow the use of our website to children. Once we become aware that a child has sent personal information, we will immediately remove their information from our system.
          </p>
        </div>
        <div amp-fx="fade-in-scroll" data-repeat>
          <p class="sans_serif_p pb2"><strong>Finding a Therapeut: Information Provided on Behalf of Children</strong><br>
            As long as a parent or the legal guardian of a child tries to find a therapeut on our website, they may act on the behalf of the child. Any information provided on behalf of the child will be treated as personal information. Therefore, treated as stated within this privacy policy.
          </p>
        </div>


    </div>
  </div>
</section>
<section id="10" style="background-color: #fff;">
  <div class="container-rounded mx-auto light-bg-2">
    <div class="container-medium mx-auto">

        <div amp-fx="fade-in-scroll" data-repeat>
          <h2 class="sans_serif_h2 pb2">Residents of the EEA</h2>
        </div>
        <div amp-fx="fade-in-scroll" data-repeat>
          <p class="sans_serif_p pb2">
            This addendum does apply to all users, who reside in the European Economic Area (short “EEA”). This also counts for users residing in the United Kingdom. In general: The provisions of which shall prevail over conflicting provisions in this privacy policy for all EEA/UK residents only.
          </p>
        </div>
        <div amp-fx="fade-in-scroll" data-repeat>
          <p class="sans_serif_p pb2">
            <strong>Data Controller:</strong>
            For the purposes of data protection law, the controller is Psychology To Go, which can be contacted at:
          </p>
        </div>
        <div amp-fx="fade-in-scroll" data-repeat>
          <p class="sans_serif_p pb2">
            Data Protection Officer Patric Pfoertner - Psychology To Go <br>
            Ivan Pamuchiev,<br>
            5600 Troyan<br>
            Bulgaria<br>
            Email: psychology.to.go.2019@gmail.com

          </p>
        </div>
        <div amp-fx="fade-in-scroll" data-repeat>
          <p class="sans_serif_p pb2">
            <strong>Legal Basis for Processing Data: </strong>
            Our legal basis for processing your personal information will typically be one of the following:
          </p>
        </div>
        <div amp-fx="fade-in-scroll" data-repeat>
          <p class="sans_serif_p pb2">
            <strong>Consent: </strong>You have actively consented for us to process data. This could be through completing a form on the site, or have indicated your consent with another affirmative act.
          </p>
        </div>
        <div amp-fx="fade-in-scroll" data-repeat>
          <p class="sans_serif_p pb2">
            <strong>Legitimate Interests:</strong>
            We have a legitimate interest in processing your personal information, such include (1) ensuring our website meets the standard of usability and security a user expects, (2) helping us identify areas for improvement, (3) enabling us to communicate effectively regarding services we offer, and (4) enabling us to process contacts, queries, or complaints.
          </p>
        </div>
        <div amp-fx="fade-in-scroll" data-repeat>
          <p class="sans_serif_p pb2">
            <strong>Legal Obligation:</strong>
            Processing your personal information is necessary to us in order to comply with our legal and/or regulatory obligations.
          </p>
        </div>
        <div amp-fx="fade-in-scroll" data-repeat>
          <p class="sans_serif_p pb2">
            <strong>Contractual Obligation:</strong>
            Processing your personal information is necessary to us in order to perform the tasks associated with a contract to which you are a party. Besides to take part in your requests prior to entering into a contract.
          </p>
        </div>
        <div amp-fx="fade-in-scroll" data-repeat>
          <p class="sans_serif_p pb2">
            <strong>Your Data Rights:</strong>
            Besides your already mentioned rights of access and corrections (See Sections “Your Rights”), EEA and UK residents have certain other rights. These rights have been defined in the General Data Protection Regulation (GDPR) and the Data Protection Act 2018. Thus, we are obliged to handle your requests in accordance with the law. However, this also implies that there could be legal reasons why we can not fulfill all types of requests.
          </p>
        </div>
        <div amp-fx="fade-in-scroll" data-repeat>
          <p class="sans_serif_p pb2">
            <strong>Consent Withdrawal:</strong>
            You have the right to withdraw your consent in relation to our processing of your personal information based on your consent.
          </p>
        </div>
        <div amp-fx="fade-in-scroll" data-repeat>
          <p class="sans_serif_p pb2">
            Additionally, you can unsubscribe from our marketing emails. At any time, this can be archived by clicking the “Unsubscribe” Link in the last Email, which you have received. If you reside in the European Union or United Kingdom, then you can always opt out of EDAA members online advertising networks and behavioral advertising. You can archive this through the European Interactive Digital Advertising Alliance (EDAA)'s consumer opt-out page. Which you can find under the following link: <a href="http://youronlinechoices.eu/" target="_blank" class="link-dark">http://youronlinechoices.eu/</a>
          </p>
        </div>
        <div amp-fx="fade-in-scroll" data-repeat>
          <p class="sans_serif_p pb2">
            <strong>Erasure:</strong>
            In certain circumstances, you do have the right to request a deletion of your personal information.
          </p>
        </div>
        <div amp-fx="fade-in-scroll" data-repeat>
          <p class="sans_serif_p pb2">
            <strong>Restriction of Processing: </strong>
            In certain circumstances, you do have the right to request that we restrict the processing of your personal information.
          </p>
        </div>
        <div amp-fx="fade-in-scroll" data-repeat>
          <p class="sans_serif_p pb2">
              <strong>Object to Processing:</strong>
              You do have the right to object to the use of your personal information. You have the same right for disclosures of your personal information.
          </p>
        </div>
        <div amp-fx="fade-in-scroll" data-repeat>
          <p class="sans_serif_p pb2">
            <strong>Data Portability: </strong>
            In certain circumstances, you do have the right to request that we transmit your personal information to you or another company.
          </p>
        </div>
        <div amp-fx="fade-in-scroll" data-repeat>
          <p class="sans_serif_p pb2">
            Besides, we do process all requests in accordance with the law. Thus, there could be legal reasons why we can not always fulfill all types of requests. However, to exercise your enlisted rights, please send us an Email. For further questions about this privacy policy, you can contact us under the same Email: psychology.to.go.2019@gmail.com
          </p>
        </div>
        <div amp-fx="fade-in-scroll" data-repeat>
          <p class="sans_serif_p pb2">
            <strong>International Transfer:</strong>
             We operate in Bulgaria, which is in the European Union. Therefore, we transfer, store, and process personal information outside of the UK and of course outside European countries, which are not Bulgaria. However, by sending us an Email or contacting us, you do acknowledge this transfer, storing, and processing.
             <br>
             We rely on approved data transfer mechanisms. Like for example the EU Standard Contractual Clause. We do so to ensure that personal information is adequately safeguarded.
          </p>
        </div>
        <div amp-fx="fade-in-scroll" data-repeat>
          <p class="sans_serif_p pb2">
            <strong>Cookies and other Tracking Technologies:</strong>
            We do use cookies to help us collect, analyze, improve, secure and market our website and services. However, we only do so with your appropriate consent. <br>
            We ask you to read more about how and why we use cookies in our
              <a class="link-dark" on="tap:AMP.scrollTo(id='14', position='top', duration=500)"> Cookies Policy.</a>
          </p>
        </div>
        <div amp-fx="fade-in-scroll" data-repeat>
          <p class="sans_serif_p pb2">
            <strong>Facebook pages in the UK/EU/EEA:</strong>
            In case you visit the Psychology To Go Facebook page(s), then Facebook does record details collected from your interaction with our content. For this processing, Psychology To Go and Facebook Ireland act as a joint controller under the terms of this
            <a class="link-dark" href="https://www.facebook.com/legal/terms/page_controller_addendum"> agreement</a>.
          </p>
        </div>
        <div amp-fx="fade-in-scroll" data-repeat>
          <p class="sans_serif_p pb2">
            <strong>Concerns and Questions:</strong>
            Whenever you have a question, comment or concerns about the way in which we have handled a specific privacy matter, then you may contact us via Email: psychology.to.go.2019@gmail.com
          </p>
        </div>
        <div amp-fx="fade-in-scroll" data-repeat>
          <p class="sans_serif_p pb2">
            <strong>Complaints:</strong>
            In case we were not able to resolve any questions or concerns you have, then you have the right to lodge a complaint. We have attached the information of the Commissioner’s Office, which is the Supervisory Authority in the UK. Additionally, you can find the information about the European Data Protection Supervisor.
            <br><br>
            <strong>UK:</strong> https://ico.org.uk/concerns / 0303 123 1113 / casework@ico.org.uk/ <br><br>
            <strong>Europe:</strong> https://edps.europa.eu / +32 2 283 19 00 / edps@edps.europa.eu

          </p>
        </div>
    </div>
  </div>
</section>
<section id="11" style="background-color: #fff;">
  <div class="container-rounded mx-auto light-bg-1">
    <div class="container-medium mx-auto">

        <div amp-fx="fade-in-scroll" data-repeat>
          <h2 class="sans_serif_h2 pb2">California residents</h2>
        </div>

        <div amp-fx="fade-in-scroll" data-repeat>
          <p class="sans_serif_p pb2">
            The California Consumer Privacy Act (CCPA) requires us to disclose categories of personal information we collect. Moreover it requires us to disclose how we use it. This also accounts for the categories of sources from whom we collect personal information. And the third parties with whom we share it, which has been explained above.
          </p>
        </div>
        <div amp-fx="fade-in-scroll" data-repeat>
          <p class="sans_serif_p pb2">
            We have collected  and do collect personal information from you, as described in the <a class="link-dark" on="tap:AMP.scrollTo(id='3', position='top', duration=500)"> “We collect information in different ways”</a> section of this Privacy Policy.
          </p>
        </div>
        <div amp-fx="fade-in-scroll" data-repeat>
          <p class="sans_serif_p pb2">
            Besides, we are required to information about rights California residents have under California law. The following rights you may exercise:
          </p>
        </div>
        <div amp-fx="fade-in-scroll" data-repeat>
          <p class="sans_serif_p pb2">
            <strong>Right to Know and Acces:</strong> You may send us an Email to psychology.to.go.2019@gmail.com requesting information regarding the: (1) categories of personal information we collect, use, or share, (2) purposes for which categories of personal information are collected or used by us, (3) categories of sources from which we collect personal information, and (4) specific pieces of Personal Information we have collected about you.
          </p>
        </div>
        <div amp-fx="fade-in-scroll" data-repeat>
          <p class="sans_serif_p pb2">
            <strong>Right to Equal Service:</strong>
            We will not discriminate against you whenever you exercise your privacy rights.
          </p>
        </div>
        <div amp-fx="fade-in-scroll" data-repeat>
          <p class="sans_serif_p pb2">
            <strong>Right to Delete:</strong>
            You may send an Email request to delete personal information about you that we have collected.
          </p>
        </div>
        <div amp-fx="fade-in-scroll" data-repeat>
          <p class="sans_serif_p pb2">
            If you would like to opt out of the sale of your information as defined under the California Consumer Privacy Act (CCPA), please send us an Email to psychology.to.go.2019@gmail.com with the headline “do not sell my personal information”. Then include your first and last name as well as your specific Email address. We do not discriminate against California consumers who exercise any of their rights described in this Policy.
          </p>
        </div>
        <div amp-fx="fade-in-scroll" data-repeat>
          <p class="sans_serif_p pb2">
            We collect the categories of personal information. We have disclosed these categories of personal information for business purposes to affiliates, service providers and third parties, as described in the
            <a class="link-dark" on="tap:AMP.scrollTo(id='7', position='top', duration=500)"> “How and when we share information”</a>
          </p>
        </div>

    </div>
  </div>
</section>
<section id="12" style="background-color: #fff;">
  <div class="container-rounded mx-auto light-bg-2">
    <div class="container-medium mx-auto">

        <div amp-fx="fade-in-scroll" data-repeat>
          <h2 class="sans_serif_h2 pb2">How we make changes <br>to this policy</h2>
        </div>
        <div amp-fx="fade-in-scroll" data-repeat>
          <p class="sans_serif_p pb2">
            We may update this Privacy Policy to reflect changes to our information practices. If we do, we’ll post any changes on this page. We encourage you to periodically review this page. This way you will be up to date to our privacy practices.
          </p>
        </div>
        <div amp-fx="fade-in-scroll" data-repeat>
          <p class="sans_serif_p pb2">
            However, if you continue to use Psychology To Go after those changes are in effect, you agree to the new policy. If the changes are significant, we get your consent or may provide a notice, as required by law.
          </p>
        </div>

    </div>
  </div>
</section>
<section id="13" style="background-color: #fff;">
  <div class="container-rounded mx-auto light-bg-1">
    <div class="container-medium mx-auto">

        <div amp-fx="fade-in-scroll" data-repeat>
          <h2 class="sans_serif_h2 pb2">Contact us</h2>
        </div>
        <div amp-fx="fade-in-scroll" data-repeat>
          <p class="sans_serif_p pb2">

            Psychology To Go<br>
            Ivan Pamuchiev,<br>
            5600 Troyan <br>
            Bulgaria<br>

            Email address: psychology.to.go.2019@gmail.com

          </p>
        </div>


    </div>
  </div>
</section>
<section id="14" style="background-color: #fff; padding-bottom: 4rem;">
  <div class="container-rounded mx-auto light-bg-2">
    <div class="container-medium mx-auto">

        <div amp-fx="fade-in-scroll" data-repeat>
          <h2 class="sans_serif_h2 pb2">Cookies Policy</h2>
        </div>
        <div amp-fx="fade-in-scroll" data-repeat>
          <p class="sans_serif_p pb2">
            You may get cookies or other related technology from us. This also counts for third parties. This happens when you use our Services. In addition to the necessary cookies that help our website function, we use cookies for analytical purposes or to display personalized content.
          </p>
        </div>
        <div amp-fx="fade-in-scroll" data-repeat>
          <p class="sans_serif_p pb2">
            The time frame may vary depending on the nature of your interaction with us. When we no longer need to use your information and there is no need for us to keep it to comply with our legal or regulatory obligations, then we either permanently delete or destroy your information or depersonalize it so that we can't identify you.
            In case you use our Website and Services from a mobile device, we may collect various information. Such information could be unique user ID, cell phone model, operating system, and carrier. We need such information to ensure that our website and services work correctly. Additionally, we need them to gather data for our customer analytics efforts.
          </p>
        </div>
        <div amp-fx="fade-in-scroll" data-repeat>
          <p class="sans_serif_p pb2">
            Like other websites, we use cookies to identify and show ads that are relevant to your interest. Here, we may share information with third parties. Such third parties provide services on our behalf to help with our general business activities. For example, authentication services, technology providers, email service providers, data analyzers, and business intelligence providers. This is solely for the purpose of enhancing our service and developing products as well as services. We authorize companies to use your information only as necessary to provide the latter services. Our third parties include, however they are not limited to the following: Facebook, Google, Pinterest, Laravel, Twitter.
          </p>
        </div>
        <div amp-fx="fade-in-scroll" data-repeat>
          <p class="sans_serif_p pb2">
            At our website you can change your cookie settings at any time. You can do so by visiting <a class="link-dark" href="{{ route('privacy_settings') }}"> Privacy Settings</a>. However you might have the option to elect to reject cookies by adjusting your Browser’s Settings. Doing so will limit the features available to you on our website.
          </p>
        </div>
        <div amp-fx="fade-in-scroll" data-repeat>
          <p class="sans_serif_p pb2">
            <strong>Cookies used on our Website (Not for UK, EU, and EEA):</strong>
          </p>
        </div>
        <div amp-fx="fade-in-scroll" data-repeat>
          <p class="sans_serif_p pb2">
            <strong>1. Essential Cookies:</strong>
            All cookies are used to enable your device to use our Website. These cookies are essential in order to browse through the pages and use other features. Disabling those cookies may result in preventing you to use the Website in the way it was intended to work. Additionally, such cookies help us to keep our Website and Services safe and secure.
          </p>
        </div>
        <div amp-fx="fade-in-scroll" data-repeat>
          <p class="sans_serif_p pb2">
            <strong>2. Storing and Accessing Information:</strong>
            Access and storage of information, which is already stored on your phone. For example: Device Identifiers, Cookies, Advertising Identifiers, or other technologies.
          </p>
        </div>
        <div amp-fx="fade-in-scroll" data-repeat>
          <p class="sans_serif_p pb2">
            <strong>3. Personalization:</strong>
            Collecting and Processing of information about your use of this website is used to personalise your viewed content and advertisements. For example, the pages you surf on the websites are used to make inferences about your interests. This data is then used to inform future selection of advertising and/or content.
          </p>
        </div>
        <div amp-fx="fade-in-scroll" data-repeat>
          <p class="sans_serif_p pb2">
          <strong>4. Ads Selection, Delivery, and Reporting:</strong>
          Herein, the collected information is combined with previously collected information in order to choose and deliver advertisements for you. Moreover, to measure the delivery and effectiveness of such advertisements. Previously collected data may include your interests to selected ads. How often the same ad was shown to you. When and where they were shown. And whether you took any action related to the advertisements. Such an action could be for example clicking an ad or making a purchase. But, this does not include the Personalisation, which is the collection and processing of information about your use of this service to subsequently personalise advertising. The same count for content, which you see in other contexts, such as websites or apps, over time.
          </p>
        </div>
        <div amp-fx="fade-in-scroll" data-repeat>
          <p class="sans_serif_p pb2">
              <strong>5. Selecting, Delivering, and Reporting Content:</strong>
              Herein, the collected information is combined with previously collected information in order to choose and deliver content for you. Moreover, to measure the delivery and effectiveness of such content. Previously collected data may include your interests to selected content. How often the same content  was shown to you. When and where the content was shown. And whether you took any action related to the content. Such an action could be for example clicking on the content. But, this does not include the Personalisation, which is the collection and processing of information about your use of this service to subsequently personalise content or ads. The same count for content and ads, which you see in other contexts, such as websites or apps, over time.
          </p>
        </div>
        <div amp-fx="fade-in-scroll" data-repeat>
          <p class="sans_serif_p pb2">
              <strong>6. Measuring:</strong>
              The collected information about your use of our content is used to measure, understand, and report on your usage of the service. The same counts for the combination with previously collected information. However, this does not include the Personalisation, which is the collection and processing of information about your use of this service to subsequently personalise advertising. The same count for content, which you see in other contexts, such as websites or apps, over time.
          </p>
        </div>
        <div amp-fx="fade-in-scroll" data-repeat>
          <p class="sans_serif_p pb2">
            <strong>Cookies used on our Website (in UK, EU, and EEA):</strong>
          </p>
        </div>
        <div amp-fx="fade-in-scroll" data-repeat>
          <p class="sans_serif_p pb2">
              <strong>1. Storing and Accessing information on a device:</strong>
              Device Identifiers, Cookies or other information can be stored as well as accessed on your device. The purpose behind this was presented to you in this Privacy Policy.
          </p>
        </div>
        <div amp-fx="fade-in-scroll" data-repeat>
          <p class="sans_serif_p pb2">
              <strong>2. Selecting basic ads:</strong>
              Various ads may be shown to you based on the content you’re viewing. In addition, ads may be shown based on the app you’re using, your approximate location, or your device type.
          </p>
        </div>
        <div amp-fx="fade-in-scroll" data-repeat>
          <p class="sans_serif_p pb2">
              <strong>3. Creating a personalised ads profile:</strong>
              A personalised ads profile might be built about you. This would be built by using data collected about your interests. The aim is to show you ads that are relevant to you.
          </p>
        </div>
        <div amp-fx="fade-in-scroll" data-repeat>
          <p class="sans_serif_p pb2">
            <strong>4. Selecting personalised ads: </strong>
            Based on your profile, personalised ads might be shown to you. The aim is to show you ads that are relevant to you.
        </p>
        </div>
        <div amp-fx="fade-in-scroll" data-repeat>
          <p class="sans_serif_p pb2">
              <strong>5. Creating a personalised content profile:</strong>
              Based on your interest a profile might be built in order to show you personalised content. The aim is to show you content that is relevant to you.
          </p>
        </div>
        <div amp-fx="fade-in-scroll" data-repeat>
          <p class="sans_serif_p pb2">
              <strong>6. Selecting personalised content:</strong>
              Based on a profile about you, personalised content may be shown to you.
          </p>
        </div>
        <div amp-fx="fade-in-scroll" data-repeat>
          <p class="sans_serif_p pb2">
              <strong>7. Measuring performance of ads:</strong>
              The ads that you see or interact with may be measured for performance and effectiveness purposes.
          </p>
        </div>
        <div amp-fx="fade-in-scroll" data-repeat>
          <p class="sans_serif_p pb2">
              <strong>8. Measuring performance of content:</strong>
              The content that you see and interact with may be measured for performance and effectiveness purposes.
          </p>
        </div>
        <div amp-fx="fade-in-scroll" data-repeat>
          <p class="sans_serif_p pb2">
              <strong>9. Applying market research to generate audience insights:</strong>
              In order to learn more about the audience and to know who is visiting our website and views the ads, we may use market research.
          </p>
        </div>
        <div amp-fx="fade-in-scroll" data-repeat>
          <p class="sans_serif_p pb2">
              <strong>10. Developing and improving products: </strong>
              Your data may be used in order to develop new products or to improve existing systems and software.
          </p>
        </div>
        <div amp-fx="fade-in-scroll" data-repeat>
          <p class="sans_serif_p pb2">
              <strong>
              11. Ensuring security, preventing fraud, and debugging:
              </strong>
              In order to prevent fraudulent activities, to secure our systems and process work properly as well as securely, we may use your data. In addition, we may use your data for monitoring. The purpose is again, to prevent fraudulent activities, to secure our systems and process work properly as well as securely, we may use your data.
          </p>
        </div>
        <div amp-fx="fade-in-scroll" data-repeat>
          <p class="sans_serif_p pb2">
            <strong>12. Technically delivering ads or content:</strong>
            Your device can receive and send information that allows you to view and interact with content. The same counts for ads.
          </p>
        </div>
        <div amp-fx="fade-in-scroll" data-repeat>
          <p class="sans_serif_p pb2">
              <strong>13. Matching and combining offline data sources:</strong>
              Some offline data sources may be combined with your online activities. There are one or more purposes why this is happening.
          </p>
        </div>
        <div amp-fx="fade-in-scroll" data-repeat>
          <p class="sans_serif_p pb2">
            <strong>14. Linking different devices:</strong>
            Different devices can be determined as belonging to you or your household. There are one or more purposes why this is happening.
          </p>
        </div>
        <div amp-fx="fade-in-scroll" data-repeat>
          <p class="sans_serif_p pb2">
            <strong>15. Receiving and useing automatically-sent device characteristics for identification: </strong>
            Your device might be distinguished from other devices. This is done by information, which it automatically sends. For example the IP address or the browser type.
          </p>
        </div>

    </div>
  </div>
</section>
@endslot
@endcomponent
