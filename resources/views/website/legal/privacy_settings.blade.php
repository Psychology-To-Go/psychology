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
        <h1 class="sans_serif_h1 text-gradient-deepblue pb2">Privacy Settings</h1>
        <p class="sans_serif_p pb3">At any time, you can change your preferences by clicking on “Privacy Settings” in the footer at the bottom of the page.</p>
        <p class="sans_serif_p pb2">Here we explain how we and our partners process and use your personal data. Whenever you want you can use our tracking free site. You may disallow any sort of tracking and object this way to the processing of your information by us and our partners. Nevertheless, we rely on ads to provide free and trustworthy information about mental health. Further do we use your data to create a compelling experience.
            In addition to the necessary cookies that help our website function, we use cookies for analytical purposes or to display personalized content.
           So, in order to access all of our content, we ask you to accept cookies. At this time, we cannot provide the full site experience if you disallow any purposes, features, or partners. Instead, we will present you with a version of our site that has 3 articles without ads, cookies, or tracking technologies. Only the essential cookies will be used in order for the website to work. Feel free to additionally read our
           <a href="{{ route('privacy')}}" class="link-dark">Privacy Policy</a>.</p>
      </div>
      <div class="pt3">
        <button on="tap:partners.toggleVisibility" class="togglebtn" style="background:#2F80ED; color:#fff;">Partners</button>
        <div id="partners" hidden>
              <button on="tap:google.toggleVisibility" class="togglebtn" style="background:#eee; color:#000;">1. Google Advertising Products</button>
              <div id="google" hidden style="border: 1px solid #DCDBDB">
                <p class="z1 pb1 pt2 px2 small_p"><strong>Link:</strong> <a href="https://policies.google.com/privacy" target="_blank" class="link-dark">Show Privacy Policy</a></p>
                <p class="z1 pb1 pt1 px2 small_p">
                  <strong>Purposes:</strong> (1) Store and/or access information on a device, (2) Select basic ads, (3)  Create a personalised ads profile,
                  (4) Select personalised ads, (5) Create a personalised content profile, (6) Select personalised content, (7) Measure ad performance, (8) Apply market research to generate audience insights, and
                  (9) Develop and improve products
                </p>
                <p class="z1 pb1 pt1 px2 small_p">
                  <strong>Special:</strong> (1) Ensure security, prevent fraud, and debug, and (2) Technically deliver ads or content
                </p>
                <p class="z1 pb1 pt1 px2 small_p">
                  <strong>Features:</strong> (1) Match and combine offline data sources, and (2) Link different devices
                </p>
              </div>
              <button on="tap:ga.toggleVisibility" class="togglebtn" style="background:#eee; color:#000;">2. Google Analytics</button>
              <div id="ga" hidden style="border: 1px solid #DCDBDB">
                <p class="z1 pb1 pt2 px2 small_p"><strong>Link:</strong> <a href="https://policies.google.com/privacy" target="_blank" class="link-dark">Show Privacy Policy</a></p>
                <p class="z1 pb1 pt1 px2 small_p">
                  <strong>Purposes:</strong> (1) Store and/or access information on a device, (2) Measure website performance, (3)  Create a personalised ads profile,
                  (4) Apply market research to generate audience insights, and (5) Develop and improve products
                </p>
                <p class="z1 pb1 pt1 px2 small_p">
                  <strong>Special:</strong> (1) Ensure security, prevent fraud, and debug, and (2) Technically deliver ads or content
                </p>
                <p class="z1 pb1 pt1 px2 small_p">
                  <strong>Features:</strong> (1) Match and combine offline data sources, and (2) Link different devices
                </p>
              </div>
              <button on="tap:facebook.toggleVisibility" class="togglebtn" style="background:#eee; color:#000;">3. Facebook Pixel</button>
              <div id="facebook" hidden style="border: 1px solid #DCDBDB">
                <p class="z1 pb1 pt2 px2 small_p"><strong>Link:</strong> <a href="https://www.facebook.com/policy.php" target="_blank" class="link-dark">Show Privacy Policy</a></p>
                <p class="z1 pb1 pt1 px2 small_p">
                <strong>Custom Purposes:</strong> This third-party stores and/or accesses information on a device, but additional consent is required from your side, when using their service.
                </p>
              </div>
              <button on="tap:insta.toggleVisibility" class="togglebtn" style="background:#eee; color:#000;">4. Instagram</button>
              <div id="insta" hidden style="border: 1px solid #DCDBDB">
                <p class="z1 pb1 pt2 px2 small_p"><strong>Link:</strong> <a href="https://help.instagram.com/519522125107875" target="_blank" class="link-dark">Show Privacy Policy</a></p>
                <p class="z1 pb1 pt1 px2 small_p">
                <strong>Custom Purposes:</strong> This third-party stores and/or accesses information on a device, but additional consent is required from your side, when using their service.
                </p>
              </div>
              <button on="tap:pin.toggleVisibility" class="togglebtn" style="background:#eee; color:#000;">5. Pinterest</button>
              <div id="pin" hidden style="border: 1px solid #DCDBDB">
                <p class="z1 pb1 pt2 px2 small_p"><strong>Link:</strong> <a href="https://policy.pinterest.com/en/privacy-policy" target="_blank" class="link-dark">Show Privacy Policy</a></p>
                <p class="z1 pb1 pt1 px2 small_p">
                <strong>Custom Purposes:</strong> This third-party stores and/or accesses information on a device, but additional consent is required from your side, when using their service.
                </p>
              </div>
              <button on="tap:tw.toggleVisibility" class="togglebtn" style="background:#eee; color:#000;">6. Twitter</button>
              <div id="tw" hidden style="border: 1px solid #DCDBDB">
                <p class="z1 pb1 pt2 px2 small_p"><strong>Link:</strong> <a href="https://twitter.com/en/privacy" target="_blank" class="link-dark">Show Privacy Policy</a></p>
                <p class="z1 pb1 pt1 px2 small_p">
                <strong>Custom Purposes:</strong> This third-party stores and/or accesses information on a device, but additional consent is required from your side, when using their service.
                </p>
              </div>
        </div>
        <button on="tap:us.toggleVisibility" class="togglebtn" style="background:#d8e7fc; color:#2F80ED;">How we use your data</button>
        <div id="us" hidden>
              <button on="tap:Purposes.toggleVisibility" class="togglebtn" style="background:#ccc; color:#000;">1. Purposes</button>
              <div id="Purposes" hidden style="background:#ccc; color:#000;">
                <button on="tap:1.toggleVisibility" class="togglebtn" style="background:#eee; color:#000;">1.1 Store and/or access information on a device</button>
                <div id="1" hidden style="border: 1px solid #DCDBDB;background:#fff;">
                  <p class="z1 pb1 pt1 px2 small_p">
                    <strong>Summary:</strong> Cookies, "Laravel Sessions", device identifiers, or other information can be stored and/or accessed on your device for the purposes presented to you.
                      <br><strong>Essential Data</strong><br>
                        The Essential Data is needed to run the Site you are visiting technically. You can not deactivate them.
                        <br>
                         <strong>1. Session Cookie:</strong> PHP uses a Cookie to identify user sessions. Without this Cookie the Website is not working.<br>
                         <strong>2. XSRF-Token Cookie:</strong> Laravel automatically generates a CSRF "token" for each active user session managed by the application. This token is used to verify that the authenticated user is the one actually making the requests to the application.
                  </p>
                  <p class="z1 pb1 pt1 px2 small_p">
                    <strong>Legal Note:</strong> (1) Google Analytics, (2) Google Advertising Products
                  </p>
                </div>
                <button on="tap:2.toggleVisibility" class="togglebtn" style="background:#eee; color:#000;">1.2 Select basic ads</button>
                <div id="2" hidden style="border: 1px solid #DCDBDB;background:#fff;">
                  <p class="z1 pb1 pt1 px2 small_p">
                    <strong>Summary:</strong> Ads can be shown to you based on the content you’re viewing, the app you’re using, your approximate location, or your device type.
                  </p>
                  <p class="z1 pb1 pt1 px2 small_p">
                    <strong>Legal Note:</strong> To do basic ad selection our partners can: Use real-time information about the context in which the ad will be shown. Further, to show the ad, they use information about the content and the device, including: (1) device type and capabilities, (2) user agent, (3) The URL the user is at, (4) user IP address. In addition the use of a user’s non-precise geolocation data. Last but not least, controlling the frequency of ads shown to a user. Finally, the order in which ads are shown to a user. Also, preventing an ad from serving in an unsuitable editorial or “brand-unsafe” context.
                  </p>
                  <p class="z1 pb1 pt1 px2 small_p">
                    <strong>Partners include:</strong> (1) Google Advertising Products, (2) Google Analytics
                  </p>
                </div>
                <button on="tap:3.toggleVisibility" class="togglebtn" style="background:#eee; color:#000;">1.3 Create a personalised ads profiles</button>
                <div id="3" hidden style="border: 1px solid #DCDBDB;background:#fff;">
                  <p class="z1 pb1 pt1 px2 small_p">
                    <strong>Summary:</strong> A profile might be created about you and your interests to show you personalised ads that are relevant to you.
                  <p class="z1 pb1 pt1 px2 small_p">
                    <strong>Legal Note:</strong> To build a personalised ads profile partners can collect a user’s information. This includes user’s activity, interest, demographics, and/or location. The aim here is to create a users profile for further use in personalised advertising. Our partners combine information, which had been previously collected about the user. This includes information from other websites and apps. Finally, they also edit the user profile for the use in personalised advertising.
                  </p>
                  <p class="z1 pb1 pt1 px2 small_p">
                    <strong>Partners include:</strong></p>
                  <p class="z1 pb1 pt1 px2 small_p">
                    (1) Google Advertising Products, (2) Google Analytics
                  </p>
                </div>
                <button on="tap:4.toggleVisibility" class="togglebtn" style="background:#eee; color:#000;">1.4 Select personalised ads</button>
                <div id="4" hidden style="border: 1px solid #DCDBDB;background:#fff;">
                  <p class="z1 pb1 pt1 px2 small_p">
                    <strong>Summary:</strong> Personalised ads might be shown to you based on a profile created about you.
                  </p>
                  <p class="z1 pb1 pt1 px2 small_p">
                    <strong>Legal Note:</strong> To select personalised ads partners can choose personalised ads based on an user profile. This includes historical data, user’s prior activity, interest, visits to websites or apps. Even location and/or demographic information might be used to choose ads.
                  </p>
                  <p class="z1 pb1 pt1 px2 small_p">
                    <strong>Partners include:</strong></p>
                  <p class="z1 pb1 pt1 px2 small_p">
                    (1) Google Advertising Products, (2) Google Analytics
                  </p>
                </div>
                <button on="tap:5.toggleVisibility" class="togglebtn" style="background:#eee; color:#000;">1.5 Create a personalised content profile</button>
                <div id="5" hidden style="border: 1px solid #DCDBDB;background:#fff;">
                  <p class="z1 pb1 pt1 px2 small_p">
                    <strong>Summary:</strong> A profile can be created about you and your interests to show you personalised content that is most relevant to you.
                  </p>
                  <p class="z1 pb1 pt1 px2 small_p">
                    <strong>Legal Note:</strong> To build a personalised content profile partners can collect a user’s information. This includes user’s activity, interest, demographics, and/or location. The aim here is to create a users profile for further use in personalised content. Our partners combine information, which had been previously collected about the user. This includes information from other websites and apps. Finally, they also edit the user profile for the use in personalised content.</p>
                  <p class="z1 pb1 pt1 px2 small_p">
                    <strong>Partners include:</strong></p>
                  <p class="z1 pb1 pt1 px2 small_p">
                    (1) Google Advertising Products, (2) Google Analytics
                  </p>
                </div>
                <button on="tap:6.toggleVisibility" class="togglebtn" style="background:#eee; color:#000;">1.6 Select personalised content</button>
                <div id="6" hidden style="border: 1px solid #DCDBDB;background:#fff;">
                  <p class="z1 pb1 pt1 px2 small_p">
                    <strong>Summary:</strong> Personalised content might be shown to you based on a profile created about you.
                  <p class="z1 pb1 pt1 px2 small_p">
                    <strong>Legal Note:</strong> To select personalised content, partners can choose personalised content based on an user profile. This includes historical data, user’s prior activity, interest, visits to websites or apps. Even location and/or demographic information might be used to choose content.</p>
                  <p class="z1 pb1 pt1 px2 small_p">
                    <strong>Partners include:</strong></p>
                  <p class="z1 pb1 pt1 px2 small_p">
                    (1) Google Advertising Products, (2) Google Analytics
                  </p>
                </div>
                <button on="tap:7.toggleVisibility" class="togglebtn" style="background:#eee; color:#000;">1.7 Measure ad performance</button>
                <div id="7" hidden style="border: 1px solid #DCDBDB;background:#fff;">
                  <p class="z1 pb1 pt1 px2 small_p">
                    <strong>Summary:</strong> The performance and effectiveness of advertisements that you see or interact with can be measured.
                  </p>
                  <p class="z1 pb1 pt1 px2 small_p">
                    <strong>Legal Note:</strong> The ad performance can be measured by our partners. They might measure whether and how ads were delivered. They might measure how an user interacts with it. Thus, they will provide reports about the ads including performance and effectiveness. These reports are shared with publishers, who displayed it on their property. Further, they can measure whether the ad is being served in a suitable editorial environmental or “brand-safe” context. They also determine the percentage of the ad that had the opportunity to be seen, including the duration. All previously collected information (from other websites and apps) are being combined, too.
                  </p>
                  <p class="z1 pb1 pt1 px2 small_p">
                    <strong>Partners include:</strong></p>
                  <p class="z1 pb1 pt1 px2 small_p">
                   (1) Google Advertising Products, (2) Google Analytics
                  </p>
                </div>
                <button on="tap:8.toggleVisibility" class="togglebtn" style="background:#eee; color:#000;">1.8 Measure content performance</button>
                <div id="8" hidden style="border: 1px solid #DCDBDB;background:#fff;">
                  <p class="z1 pb1 pt1 px2 small_p">
                    <strong>Summary:</strong> Performance and effectiveness of content that you see or interact with can be measured.
                  </p>
                  <p class="z1 pb1 pt1 px2 small_p">
                    <strong>Legal Note:</strong> To define content performance and effectiveness, partners can measure and report how content was delivered. Also, how the user interacted with it. Using directly measurable or known information, about users who interacted with the content. Finally, combining this information with other previously collected information (i.e. from other websites and apps).
                  </p>
                  <p class="z1 pb1 pt1 px2 small_p">
                    <strong>Partners include:</strong></p>
                  <p class="z1 pb1 pt1 px2 small_p">
                    (1) Google Advertising Products, (2) Google Analytics
                  </p>
                </div>
                <button on="tap:9.toggleVisibility" class="togglebtn" style="background:#eee; color:#000;">1.9 Apply market research to generate audience insights</button>
                <div id="9" hidden style="border: 1px solid #DCDBDB;background:#fff;">
                  <p class="z1 pb1 pt1 px2 small_p">
                    <strong>Summary:</strong> Market research is used to study the audiences, including who visits sites or apps, and views ads.
                  </p>
                  <p class="z1 pb1 pt1 px2 small_p">
                    <strong>Legal Note:</strong> Applying market research in order to create audience insights, our partners can aggregate reports to advertisers, including their representatives. Such reports include the audiences reached by their ads, through panel-based and similarly derived insights. They also provide aggregated reports to the publishers. Such reports include the audiences that were served or interacted with content and/or ads on their property. Herein, applying panel-based and similarly derived insights. In addition, they associate offline data with an online user. The purpose of market research generates audience insights once the partner has declared to combine and match offline data sources. This matching and combining of offline with online data is explained in “Feature”. Lastly, they combine this information with previously collected information from other websites and apps.
                  </p>
                  <p class="z1 pb1 pt1 px2 small_p">
                    <strong>Partners include:</strong></p>
                  <p class="z1 pb1 pt1 px2 small_p">
                    (1) Google Advertising Products, (2) Google Analytics
                  </p>
                </div>
                <button on="tap:10.toggleVisibility" class="togglebtn" style="background:#eee; color:#000;">1.10 Develop and improve products</button>
                <div id="10" hidden style="border: 1px solid #DCDBDB;background:#fff;">
                  <p class="z1 pb1 pt1 px2 small_p">
                    <strong>Summary:</strong> Your data can be used to improve existing software, and to develop new products/software.
                  </p>
                  <p class="z1 pb1 pt1 px2 small_p">
                    <strong>Legal Note:</strong> In order to create new products and improve existing products, partners can collect information collected to improve their products with new features. Additionally, they can develop new products. Finally, new algorithms and models are being created through machine learning.
                  </p>
                  <p class="z1 pb1 pt1 px2 small_p">
                    <strong>Partners include:</strong></p>
                  <p class="z1 pb1 pt1 px2 small_p">
                    (1) Google Advertising Products, (2) Google Analytics
                  </p>
                </div>
              </div>

              <button on="tap:SpecialP.toggleVisibility" class="togglebtn" style="background:#ccc; color:#000;">2. Special Purposes</button>
              <div id="SpecialP" hidden style="background:#ccc; color:#000;">
                <button on="tap:sx1.toggleVisibility" class="togglebtn" style="background:#eee; color:#000;">2.1 Ensure security, prevent fraud, and debug</button>
                <div id="sx1" hidden style="border: 1px solid #DCDBDB;background:#fff;">
                  <p class="z1 pb1 pt1 px2 small_p">
                    <strong>Summary:</strong> Your data can be used to monitor for fraudulent activity. This is done to and prevent fraudulent activity.This ensures that systems and processes work securely.
                  </p>
                  <p class="z1 pb1 pt1 px2 small_p">
                    <strong>Legal Note:</strong> To prevent fraud, debug and secure security, our partners can detect malicious, invalid, fraudulent as well as illegal activities. The aim is to prevent any illegal activity. They do so by measuring, monitoring and enhancing performance of our systems.
                  </p>
                  <p class="z1 pb1 pt1 px2 small_p">
                    <strong>Legal Note:</strong> (1) Google Analytics, (2) Google Advertising Products
                  </p>
                </div>
                <button on="tap:sx2.toggleVisibility" class="togglebtn" style="background:#eee; color:#000;">2.2 Technically deliver ads or contents</button>
                <div id="sx2" hidden style="border: 1px solid #DCDBDB;background:#fff;">
                  <p class="z1 pb1 pt1 px2 small_p">
                    <strong>Summary:</strong> Your device can get and send information allowing you to see and interact with ads as well as content.
                  </p>
                  <p class="z1 pb1 pt1 px2 small_p">
                    <strong>Legal Note:</strong> To display information and act to technical requests our partners can use a user’s IP address for delivering an ad online. Thus, they can respond to an user’s interaction with an ad. Thus, sending them to the individual landing page. Herein, they can use information about device type and capabilities for displaying ads or content. For example, delivering the right size of the ad.
                  </p>
                  <p class="z1 pb1 pt1 px2 small_p">
                    <strong>Partners include:</strong> (1) Google Advertising Products, (2) Google Analytics
                  </p>
                </div>
              </div>

              <button on="tap:Features.toggleVisibility" class="togglebtn" style="background:#ccc; color:#000;">3. Features</button>
              <div id="Features" hidden style="background:#ccc; color:#000;">
                <button on="tap:1fe.toggleVisibility" class="togglebtn" style="background:#eee; color:#000;">3.1 Match and combine offline data sources</button>
                <div id="1fe" hidden style="border: 1px solid #DCDBDB;background:#fff;">
                  <p class="z1 pb1 pt1 px2 small_p">
                    <strong>Summary:</strong> Data from offline data sources can be paired with your online activity. This can have one or more purposes.
                  </p>
                  <p class="z1 pb1 pt1 px2 small_p">
                    <strong>Legal Note:</strong> Our Partners can pair data obtained offline with data collected online. This is done in support of one or more Purposes or Special Purposes.
                  </p>
                  <p class="z1 pb1 pt1 px2 small_p">
                    <strong>Partners include:</strong> (1) Google Advertising Products, (2) Google Analytics
                  </p>
                </div>
                <button on="tap:2fe.toggleVisibility" class="togglebtn" style="background:#eee; color:#000;">3.2 Link different devices</button>
                <div id="2fe" hidden style="border: 1px solid #DCDBDB;background:#fff;">
                  <p class="z1 pb1 pt1 px2 small_p">
                    <strong>Summary:</strong> Various devices can be determined as belonging to you or your household. This is done in support of one or more of purposes.
                  </p>
                  <p class="z1 pb1 pt1 px2 small_p">
                    <strong>Legal Note:</strong> Our Partners can determine that two or more devices could belong to the same household or user. They can actively scan for device capabilities in order to identify. In case that the user or users have allowed partners to actively scan for device identification. Further information can be discovered under the point “Special Feature.
                  </p>
                  <p class="z1 pb1 pt1 px2 small_p">
                    <strong>Partners include:</strong> (1) Google Advertising Products, (2) Google Analytics
                  </p>
                </div>
                <button on="tap:3fe.toggleVisibility" class="togglebtn" style="background:#eee; color:#000;">3.3 Receive and use automatically-sent device characteristics for identification</button>
                <div id="3fe" hidden style="border: 1px solid #DCDBDB;background:#fff;">
                  <p class="z1 pb1 pt1 px2 small_p">
                    <strong>Summary:</strong> Your device could be differentiated from others due to information it sends automatically. This can include IP address or browser type.
                  <p class="z1 pb1 pt1 px2 small_p">
                    <strong>Legal Note:</strong> To build a personalised ads profile partners can collect a user’s information. This includes user’s activity, interest, demographics, and/or location. The aim here is to create a users profile for further use in personalised advertising. Our partners combine information, which had been previously collected about the user. This includes information from other websites and apps. Finally, they also edit the user profile for the use in personalised advertising.
                  </p>
                  <p class="z1 pb1 pt1 px2 small_p">
                    <strong>Partners include:</strong></p>
                  <p class="z1 pb1 pt1 px2 small_p">
                    (1) Google Advertising Products, (2) Google Analytics
                  </p>
                </div>
              </div>

              <button on="tap:sdf.toggleVisibility" class="togglebtn" style="background:#ccc; color:#000;">4. Special Features</button>
              <div id="sdf" hidden style="background:#ccc; color:#000;">
                <button on="tap:1fgh.toggleVisibility" class="togglebtn" style="background:#eee; color:#000;">4.1 Use precise geolocation data</button>
                <div id="1fgh" hidden style="border: 1px solid #DCDBDB;background:#fff;">
                  <p class="z1 pb1 pt1 px2 small_p">
                    <strong>Summary:</strong> The precise geolocation data of your device can be used to serve on or more purposes. This means that your location can be accurate to within several meters.
                  </p>
                  <p class="z1 pb1 pt1 px2 small_p">
                    <strong>Legal Note:</strong> Partners can collect and process your device’s precise geolocation. This has one or more purposes.
                  </p>
                  <p class="z1 pb1 pt1 px2 small_p">
                    <strong>Partners include:</strong> (1) Google Analytics, (2) Google Advertising Products
                  </p>
                </div>
              </div>

              <button on="tap:sdf2.toggleVisibility" class="togglebtn" style="background:#ccc; color:#000;">5. Partner Custom Purpose</button>
              <div id="sdf2" hidden style="background:#ccc; color:#000;">
                <button on="tap:51.toggleVisibility" class="togglebtn" style="background:#eee; color:#000;">5.1 Facebook Pixel Consent</button>
                <div id="51" hidden style="border: 1px solid #DCDBDB;background:#fff;">
                  <p class="z1 pb1 pt1 px2 small_p">
                    <strong>Summary:</strong> User has to give consent for Facebook Pixel.
                  </p>
                  <p class="z1 pb1 pt1 px2 small_p">
                    <strong>Legal Note:</strong> User gives explicit consent for Facebook Pixel.
                  </p>
                  <p class="z1 pb1 pt1 px2 small_p">
                    <strong>Link:</strong>
                    <a href="https://www.facebook.com/policy.php" target="_blank" class="link-dark">Facebook Pixel</a>
                  </p>
                </div>
                <button on="tap:52.toggleVisibility" class="togglebtn" style="background:#eee; color:#000;">5.2 Instagram Consent</button>
                <div id="52" hidden style="border: 1px solid #DCDBDB;background:#fff;">
                  <p class="z1 pb1 pt1 px2 small_p">
                    <strong>Summary:</strong> User has to give consent for Instagram.
                  </p>
                  <p class="z1 pb1 pt1 px2 small_p">
                    <strong>Legal Note:</strong> User gives explicit consent for Instagram.
                  </p>
                  <p class="z1 pb1 pt1 px2 small_p">
                    <strong>Link:</strong>
                    <a href="https://help.instagram.com/519522125107875" target="_blank" class="link-dark">Instagram</a>
                  </p>
                </div>
                <button on="tap:53.toggleVisibility" class="togglebtn" style="background:#eee; color:#000;">5.3 Pinterest Consent</button>
                <div id="53" hidden style="border: 1px solid #DCDBDB;background:#fff;">
                  <p class="z1 pb1 pt1 px2 small_p">
                    <strong>Summary:</strong> User has to give consent for Pinterest.
                  </p>
                  <p class="z1 pb1 pt1 px2 small_p">
                    <strong>Legal Note:</strong> User gives explicit consent for Pinterest.
                  </p>
                  <p class="z1 pb1 pt1 px2 small_p">
                    <strong>Link:</strong>
                    <a href="https://policy.pinterest.com/en/privacy-policy" target="_blank" class="link-dark">Pinterest</a>
                  </p>
                </div>
                <button on="tap:54.toggleVisibility" class="togglebtn" style="background:#eee; color:#000;">5.4 Twitter Consent</button>
                <div id="54" hidden style="border: 1px solid #DCDBDB;background:#fff;">
                  <p class="z1 pb1 pt1 px2 small_p">
                    <strong>Summary:</strong> User has to give consent for Twitter.
                  </p>
                  <p class="z1 pb1 pt1 px2 small_p">
                    <strong>Legal Note:</strong> User gives explicit consent for Twitter.
                  </p>
                  <p class="z1 pb1 pt1 px2 small_p">
                    <strong>Link:</strong>
                    <a href="https://twitter.com/en/privacy" target="_blank" class="link-dark">Twitter</a>
                  </p>
                </div>
              </div>

        </div>
      </div>
    </div>
  </div>
</section>
<div class="cookiebarje" style="background: #eee">
  <div class="containerwidths">
  <div class="flex width-max12 flex-wrap mx-auto pb2">
    <div class="pt2 sm-col-6 pl2">
      <form method="post"  action-xhr="/cookie-unconsent" target="_top">
        <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">
        <button type="submit" name="button" class="btn btn-border" style="background:#222; color:#fff;font-weight:600">Disallow All</button>
      </form>
    </div>
    @if (Cookie::get('consent') !== null)
    @else
    <div class="pt2 sm-col-6 pl2">
        <form method="post"  action-xhr="/cookie-consent-privacy-settings" target="_top">
          <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">
          <input type="hidden" name="url" value="{{ Request::url() }}">
          <button type="submit" name="button" class="btn btn-border" style="background:#2F80ED; color:#fff;font-weight:600">Accept and Go to Website</button>
        </form>
    </div>
    @endif
    </div>
  </div>
</div>
@endslot
@endcomponent
