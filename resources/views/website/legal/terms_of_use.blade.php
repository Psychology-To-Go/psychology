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
        <h1 class="sans_serif_h1 text-gradient-deepblue pb2 center">Welcome to our Terms of Use</h1>
        <p class="sans_serif_p pb3 center">Effective Date: 15. January 2021</p>
        <br><br>
      </div>
      <div amp-fx="fade-in fly-in-bottom" data-easing="cubic-bezier(0.76, 0, 0.24, 1)" data-duration="2000ms">
        <h2 class="sans_serif_h2 pb2">Table of contents</h2>
        <p class="sans_serif_p pb2">Feel free to use this table of contents to move through our Terms of Use. Just click on a link and you will be directed to the specific section.</p>
      </div>
      <div amp-fx="fade-in fly-in-bottom" data-easing="cubic-bezier(0.76, 0, 0.24, 1)" data-duration="2500ms">
        <div class="selectatopic" style="background: #161616; max-width: 470px;">
          <div class="bigdick">
            <svg xmlns="http://www.w3.org/2000/svg" enable-background="new 0 0 24 24" viewBox="0 0 24 24" fill="#e3e3e3" width="40px" height="40px"><g><rect fill="none" height="24" width="24"/></g><g><g><path d="M13,8.57c-0.79,0-1.43,0.64-1.43,1.43s0.64,1.43,1.43,1.43s1.43-0.64,1.43-1.43S13.79,8.57,13,8.57z"/><path d="M13,3C9.25,3,6.2,5.94,6.02,9.64L4.1,12.2C3.85,12.53,4.09,13,4.5,13H6v3c0,1.1,0.9,2,2,2h1v3h7v-4.68 c2.36-1.12,4-3.53,4-6.32C20,6.13,16.87,3,13,3z M16,10c0,0.13-0.01,0.26-0.02,0.39l0.83,0.66c0.08,0.06,0.1,0.16,0.05,0.25 l-0.8,1.39c-0.05,0.09-0.16,0.12-0.24,0.09l-0.99-0.4c-0.21,0.16-0.43,0.29-0.67,0.39L14,13.83c-0.01,0.1-0.1,0.17-0.2,0.17h-1.6 c-0.1,0-0.18-0.07-0.2-0.17l-0.15-1.06c-0.25-0.1-0.47-0.23-0.68-0.39l-0.99,0.4c-0.09,0.03-0.2,0-0.25-0.09l-0.8-1.39 c-0.05-0.08-0.03-0.19,0.05-0.25l0.84-0.66C10.01,10.26,10,10.13,10,10c0-0.13,0.02-0.27,0.04-0.39L9.19,8.95 c-0.08-0.06-0.1-0.16-0.05-0.26l0.8-1.38c0.05-0.09,0.15-0.12,0.24-0.09l1,0.4c0.2-0.15,0.43-0.29,0.67-0.39l0.15-1.06 C12.02,6.07,12.1,6,12.2,6h1.6c0.1,0,0.18,0.07,0.2,0.17l0.15,1.06c0.24,0.1,0.46,0.23,0.67,0.39l1-0.4c0.09-0.03,0.2,0,0.24,0.09 l0.8,1.38c0.05,0.09,0.03,0.2-0.05,0.26l-0.85,0.66C15.99,9.73,16,9.86,16,10z"/></g></g></svg>
          </div>
          <div class="jump" style="color: #f5f5f7;">
            Table of Content
          </div>
          <div on="tap:AMP.scrollTo(id='1', position='top', duration=500)" class="selector_topics" tabindex="0" role="button">Introduction</div>
          <div on="tap:AMP.scrollTo(id='2', position='top', duration=500)" class="selector_topics" tabindex="0" role="button">Access to the Site</div>
          <div on="tap:AMP.scrollTo(id='3', position='top', duration=500)" class="selector_topics" tabindex="0" role="button">Third-Party Links & Ads; Other Users</div>
          <div on="tap:AMP.scrollTo(id='4', position='top', duration=500)" class="selector_topics" tabindex="0" role="button">Disclaimers</div>
          <div on="tap:AMP.scrollTo(id='5', position='top', duration=500)" class="selector_topics" tabindex="0" role="button">Limitation on Liability</div>
          <div on="tap:AMP.scrollTo(id='6', position='top', duration=500)" class="selector_topics" tabindex="0" role="button">Copyright Policy</div>
          <div on="tap:AMP.scrollTo(id='7', position='top', duration=500)" class="selector_topics" tabindex="0" role="button">General</div>
          <div on="tap:AMP.scrollTo(id='8', position='top', duration=500)" class="selector_topics" tabindex="0" role="button">Privacy Policy</div>
          <div on="tap:AMP.scrollTo(id='9', position='top', duration=500)" class="selector_topics" tabindex="0" role="button">Copyright/Trademark Information</div>
          <div on="tap:AMP.scrollTo(id='10', position='top', duration=500)" class="selector_topics" tabindex="0" role="button">Contact Information</div>
      </div>
    </div>

    </div>
  </div>
</section>
<section id="1" style="background-color: #fff;">
  <div class="container-rounded mx-auto">
    <div class="container-medium mx-auto">

      <div amp-fx="fade-in-scroll" data-repeat>
        <h2 class="sans_serif_h2 pb2">Introduction</h2>
        <p class="sans_serif_p pb2">The Psychology To Go website located at psychology-to-go.com is a copyrighted work belonging to Psychology-To-Go.com. Certain features of the Site may be subject to additional guidelines, terms, or rules, which will be posted on the Site in connection with such features.</p>
      </div>
      <div amp-fx="fade-in-scroll" data-repeat>
        <p class="sans_serif_p pb2">
          All such additional terms, guidelines, and rules are incorporated by reference into these Terms.
        </p>
      </div>
      <div amp-fx="fade-in-scroll" data-repeat>
        <p class="sans_serif_p pb2">
          These Terms of Use described the legally binding terms and conditions that oversee your use of the Site. BY LOGGING INTO THE SITE, YOU ARE BEING COMPLIANT THAT THESE TERMS and you represent that you have the authority and capacity to enter into these Terms. YOU SHOULD BE AT LEAST 18 YEARS OF AGE TO ACCESS THE SITE. IF YOU DISAGREE WITH ALL OF THE PROVISION OF THESE TERMS, DO NOT LOG INTO AND/OR USE THE SITE.
        </p>
      </div>
      <div amp-fx="fade-in-scroll" data-repeat>
        <p class="sans_serif_p pb2">
          You agree that the Terms of Use, combined with your act of using the Services, has the same legal force and effect as a written contract with your written signature and satisfy any laws that require a writing or signature. You further agree that you shall not challenge the validity, enforceability, or admissibility of the Terms of Use on the grounds that it was electronically transmitted or authorized.
        </p>
      </div>

      <div amp-fx="fade-in-scroll" data-repeat>
        <p class="sans_serif_p pb2">
          PLEASE BE AWARE THAT THESE TERMS INCLUDE LIMITATIONS ON THE LIABILITY OF PSYCHOLOGY TO GO AND OUR OBLIGATIONS RELATING TO THE SERVICES, CERTAIN CONDITIONS WITH RESPECT TO JURISDICTION, AND CERTAIN EXCLUSIONS OF HEALTHLINE’S RESPONSIBILITY.
        </p>
      </div>

      <div amp-fx="fade-in-scroll" data-repeat>
        <p class="sans_serif_p pb2">
          THE SERVICES DO NOT PROVIDE MEDICAL ADVICE.
        </p>
      </div>
    </div>
  </div>
</section>
<section id="2" style="background-color: #fff;">
  <div class="container-rounded mx-auto light-bg-2">
    <div class="container-medium mx-auto">

        <div amp-fx="fade-in-scroll" data-repeat>
          <h2 class="sans_serif_h2 pb2">Access to the Site</h2>
        </div>
        <div amp-fx="fade-in-scroll" data-repeat>
          <p class="sans_serif_p pb2">
            <strong>Subject to these Terms:</strong>
            Psychology To Go grants you a non-transferable, non-exclusive, revocable, limited license to access the Site solely for your own personal, noncommercial use.
          </p>
        </div>
        <div amp-fx="fade-in-scroll" data-repeat>
          <p class="sans_serif_p pb2">
            <strong>Certain Restrictions:</strong>
            The rights approved to you in these Terms are subject to the following restrictions: (a) you shall not sell, rent, lease, transfer, assign, distribute, host, or otherwise commercially exploit the Site; (b) you shall not change, make derivative works of, disassemble, reverse compile or reverse engineer any part of the Site; (c) you shall not access the Site in order to build a similar or competitive website; and (d) except as expressly stated herein, no part of the Site may be copied, reproduced, distributed, republished, downloaded, displayed, posted or transmitted in any form or by any means unless otherwise indicated, any future release, update, or other addition to functionality of the Site shall be subject to these Terms.  All copyright and other proprietary notices on the Site must be retained on all copies thereof.
          </p>
        </div>
        <div amp-fx="fade-in-scroll" data-repeat>
          <p class="sans_serif_p pb2">
          Psychology To Go reserves the right to change, suspend, or cease the Site with or without notice to you.  You approved that Psychology To Go will not be held liable to you or any third-party for any change, interruption, or termination of the Site or any part.
          </p>
        </div>
        <div amp-fx="fade-in-scroll" data-repeat>
          <p class="sans_serif_p pb2">
              <strong>No Support or Maintenance.</strong>
               You agree that Company will have no obligation to provide you with any support in connection with the Site.
          </p>
        </div>
        <div amp-fx="fade-in-scroll" data-repeat>
          <p class="sans_serif_p pb2">
            Excluding any User Content that you may provide, you are aware that all the intellectual property rights, including copyrights, patents, trademarks, and trade secrets, in the Site and its content are owned by Psychology To Go or Psychology To Go's suppliers. Note that these Terms and access to the Site do not give you any rights, title or interest in or to any intellectual property rights, except for the limited access rights expressed in Section 2.1. Psychology To Go and its suppliers reserve all rights not granted in these Terms.
          </p>
        </div>

    </div>
  </div>
</section>
<section id="3" style="background-color: #fff;">
  <div class="container-rounded mx-auto light-bg-1">
    <div class="container-medium mx-auto">

        <div amp-fx="fade-in-scroll" data-repeat>
          <h2 class="sans_serif_h2 pb2">Third-Party Links & Ads; Other Users</h2>
        </div>

        <div amp-fx="fade-in-scroll" data-repeat>
          <p class="sans_serif_p pb2">
            <strong>Third-Party Links & Ads. </strong>
            The Site may contain links to third-party websites and services, and/or display advertisements for third-parties.  Such Third-Party Links & Ads are not under the control of Psychology To Go, and Psychology To Go is not responsible for any Third-Party Links & Ads.  Psychology To Go provides access to these Third-Party Links & Ads only as a convenience to you, and does not review, approve, monitor, endorse, warrant, or make any representations with respect to Third-Party Links & Ads.  You use all Third-Party Links & Ads at your own risk, and should apply a suitable level of caution and discretion in doing so. When you click on any of the Third-Party Links & Ads, the applicable third party’s terms and policies apply, including the third party’s privacy and data gathering practices.
          </p>
        </div>
        <div amp-fx="fade-in-scroll" data-repeat>
          <p class="sans_serif_p pb2">
            <strong>Other Users.</strong>
            Each Site user is solely responsible for any and all of its own User Content.  Because we do not control User Content, you acknowledge and agree that we are not responsible for any User Content, whether provided by you or by others.  You agree that Psychology To Go will not be responsible for any loss or damage incurred as the result of any such interactions.  If there is a dispute between you and any Site user, we are under no obligation to become involved.
          </p>
        </div>
        <div amp-fx="fade-in-scroll" data-repeat>
          <p class="sans_serif_p pb2">
            You hereby release and forever discharge the Psychology To Go and our officers, employees, agents, successors, and assigns from, and hereby waive and relinquish, each and every past, present and future dispute, claim, controversy, demand, right, obligation, liability, action and cause of action of every kind and nature, that has arisen or arises directly or indirectly out of, or that relates directly or indirectly to, the Site. If you are a California resident, you hereby waive California civil code section 1542 in connection with the foregoing, which states: "a general release does not extend to claims which the creditor does not know or suspect to exist in his or her favor at the time of executing the release, which if known by him or her must have materially affected his or her settlement with the debtor."
          </p>
        </div>
        <div amp-fx="fade-in-scroll" data-repeat>
          <p class="sans_serif_p pb2">
            <strong>Cookies and Web Beacons.</strong>
            Like any other website, Psychology To Go uses ‘cookies’. These cookies are used to store information including visitors’ preferences, and the pages on the website that the visitor accessed or visited. The information is used to optimize the users’ experience by customizing our web page content based on visitors’ browser type and/or other information.
          </p>
        </div>
        <div amp-fx="fade-in-scroll" data-repeat>
          <p class="sans_serif_p pb2">
            <strong>Our Advertising Partners.</strong>
            Some of advertisers on our site may use cookies and web beacons. Our advertising partners are listed below. Each of our advertising partners has their own Privacy Policy for their policies on user data. For easier access, we hyperlinked to their Privacy Policies below.
            <br>
                Google: https://policies.google.com/technologies/ads
          </p>
        </div>


    </div>
  </div>
</section>
<section id="4" style="background-color: #fff;">
  <div class="container-rounded mx-auto light-bg-2">
    <div class="container-medium mx-auto">

        <div amp-fx="fade-in-scroll" data-repeat>
          <h2 class="sans_serif_h2 pb2">Disclaimers</h2>
        </div>
        <div amp-fx="fade-in-scroll" data-repeat>
          <p class="sans_serif_p pb2">
            The site is provided on an "as-is" and "as available" basis, and Psychology To Go and our suppliers expressly disclaim any and all warranties and conditions of any kind, whether express, implied, or statutory, including all warranties or conditions of merchantability, fitness for a particular purpose, title, quiet enjoyment, accuracy, or non-infringement.  We and our suppliers make not guarantee that the site will meet your requirements, will be available on an uninterrupted, timely, secure, or error-free basis, or will be accurate, reliable, free of viruses or other harmful code, complete, legal, or safe.  If applicable law requires any warranties with respect to the site, all such warranties are limited in duration to ninety (90) days from the date of first use.
          </p>
        </div>
        <div amp-fx="fade-in-scroll" data-repeat>
          <p class="sans_serif_p pb2">
            Some jurisdictions do not allow the exclusion of implied warranties, so the above exclusion may not apply to you.  Some jurisdictions do not allow limitations on how long an implied warranty lasts, so the above limitation may not apply to you. Please also check our <a href="{{ route('additional_info')}}" class="link-dark">Additional Info.</a>
          </p>
        </div>

    </div>
  </div>
</section>
<section id="5" style="background-color: #fff;">
  <div class="container-rounded mx-auto light-bg-1">
    <div class="container-medium mx-auto">

        <div amp-fx="fade-in-scroll" data-repeat>
          <h2 class="sans_serif_h2 pb2">Limitation on Liability</h2>
        </div>
        <div amp-fx="fade-in-scroll" data-repeat>
          <p class="sans_serif_p pb2">
            To the maximum extent permitted by law, in no event shall Psychology To Go or our suppliers be liable to you or any third-party for any lost profits, lost data, costs of procurement of substitute products, or any indirect, consequential, exemplary, incidental, special or punitive damages arising from or relating to these terms or your use of, or incapability to use the site even if Psychology To Go has been advised of the possibility of such damages.  Access to and use of the site is at your own discretion and risk, and you will be solely responsible for any damage to your device or computer system, or loss of data resulting therefrom.
          </p>
        </div>
        <div amp-fx="fade-in-scroll" data-repeat>
          <p class="sans_serif_p pb2">
            To the maximum extent permitted by law, notwithstanding anything to the contrary contained herein, our liability to you for any damages arising from or related to this agreement, will at all times be limited to a maximum of fifty EUR (50 EUR). The existence of more than one claim will not enlarge this limit.  You agree that our suppliers will have no liability of any kind arising from or relating to this agreement.
          </p>
        </div>
        <div amp-fx="fade-in-scroll" data-repeat>
          <p class="sans_serif_p pb2">
            Some jurisdictions do not allow the limitation or exclusion of liability for incidental or consequential damages, so the above limitation or exclusion may not apply to you.
          </p>
        </div>
        <div amp-fx="fade-in-scroll" data-repeat>
          <p class="sans_serif_p pb2">
            <strong>Term and Termination.</strong>
          </p>
        </div>
        <div amp-fx="fade-in-scroll" data-repeat>
          <p class="sans_serif_p pb2">
          Subject to this Section, these Terms will remain in full force and effect while you use the Site.  We may suspend or terminate your rights to use the Site at any time for any reason at our sole discretion, including for any use of the Site in violation of these Terms. Upon termination of your rights under these Terms, your Account and right to access and use the Site will terminate immediately.  You understand that any termination of your Account may involve deletion of your User Content associated with your Account from our live databases.  Psychology To Go will not have any liability whatsoever to you for any termination of your rights under these Terms.  Even after your rights under these Terms are terminated, the following provisions of these Terms will remain in effect: Sections 2 through 2.5, Section 3 and Sections 4 through 10.
          </p>
        </div>

    </div>
  </div>
</section>
<section id="6" style="background-color: #fff;">
  <div class="container-rounded mx-auto light-bg-2">
    <div class="container-medium mx-auto">

        <div amp-fx="fade-in-scroll" data-repeat>
          <h2 class="sans_serif_h2 pb2">Copyright Policy</h2>
        </div>

        <div amp-fx="fade-in-scroll" data-repeat>
          <p class="sans_serif_p pb2">
            Psychology To Go respects the intellectual property of others and asks that users of our Site do the same.  In connection with our Site, we have adopted and implemented a policy respecting copyright law that provides for the removal of any infringing materials and for the termination of users of our online Site who are repeat infringers of intellectual property rights, including copyrights.  If you believe that one of our users is, through the use of our Site, unlawfully infringing the copyright(s) in a work, and wish to have the allegedly infringing material removed, the following information in the form of a written notification must be provided to our designated Copyright Agent:
          </p>
        </div>
        <div amp-fx="fade-in-scroll" data-repeat>
          <p class="sans_serif_p pb2">
            your physical or electronic signature; <br>
            identification of the copyrighted work(s) that you claim to have been infringed; <br>
            identification of the material on our services that you claim is infringing and that you request us to remove;
             <br>sufficient information to permit us to locate such material;
             <br>your address, telephone number, and e-mail address;
             <br>a statement that you have a good faith belief that use of the objectionable material is not authorized by the copyright owner, its agent, or under the law; and
             <br>a statement that the information in the notification is accurate, and under penalty of perjury, that you are either the owner of the copyright that has allegedly been infringed or that you are authorized to act on behalf of the copyright owner.

          </p>
        </div>
        <div amp-fx="fade-in-scroll" data-repeat>
          <p class="sans_serif_p pb2">
            Please note that, any misrepresentation of material fact in a written notification automatically subjects the complaining party to liability for any damages, costs and attorney’s fees incurred by us in connection with the written notification and allegation of copyright infringement.
          </p>
        </div>

    </div>
  </div>
</section>
<section id="7" style="background-color: #fff;">
  <div class="container-rounded mx-auto light-bg-1">
    <div class="container-medium mx-auto">

        <div amp-fx="fade-in-scroll" data-repeat>
          <h2 class="sans_serif_h2 pb2">General</h2>
        </div>

        <div amp-fx="fade-in-scroll" data-repeat>
          <p class="sans_serif_p pb2">
            These Terms are subject to occasional revision, and if we make any substantial changes, we may notify you by sending you an e-mail to the last e-mail address you provided to us and/or by prominently posting notice of the changes on our Site.  You are responsible for providing us with your most current email address.  In the event that the last e-mail address that you have provided us is not valid our dispatch of the e-mail containing such notice will nonetheless constitute effective notice of the changes described in the notice.  Any changes to these Terms will be effective upon the earliest of thirty (30) calendar days following our dispatch of an email notice to you or thirty (30) calendar days following our posting of notice of the changes on our Site.  These changes will be effective immediately for new users of our Site.  Continued use of our Site following notice of such changes shall indicate your acknowledgement of such changes and agreement to be bound by the terms and conditions of such changes. Dispute Resolution. Please read this Arbitration Agreement carefully. It is part of your contract with Psychology To Go and affects your rights.  It contains procedures for MANDATORY BINDING ARBITRATION AND A CLASS ACTION WAIVER.
          </p>
        </div>
        <div amp-fx="fade-in-scroll" data-repeat>
          <p class="sans_serif_p pb2">
            <strong>Applicability of Arbitration Agreement. </strong>
            All claims and disputes in connection with the Terms or the use of any product or service provided by the Psychology To Go that cannot be resolved informally or in small claims court shall be resolved by binding arbitration on an individual basis under the terms of this Arbitration Agreement.  Unless otherwise agreed to, all arbitration proceedings shall be held in Bulgarian.  This Arbitration Agreement applies to you and the Psychology To Go, and to any subsidiaries, affiliates, agents, employees, predecessors in interest, successors, and assigns, as well as all authorized or unauthorized users or beneficiaries of services or goods provided under the Terms.
          </p>
        </div>
        <div amp-fx="fade-in-scroll" data-repeat>
          <p class="sans_serif_p pb2">
            <strong>Notice Requirement and Informal Dispute Resolution.</strong>
            Before either party may seek arbitration, the party must first send to the other party a written Notice of Dispute describing the nature and basis of the claim or dispute, and the requested relief.  A Notice to the Psychology To Go should be sent to: psychology.to.go.2019@gmail.com. After the Notice is received, you and the Psychology To Go may attempt to resolve the claim or dispute informally.  If you and the Psychology To Go do not resolve the claim or dispute within thirty (30) days after the Notice is received, either party may begin an arbitration proceeding.  The amount of any settlement offer made by any party may not be disclosed to the arbitrator until after the arbitrator has determined the amount of the award to which either party is entitled.
          </p>
        </div>
        <div amp-fx="fade-in-scroll" data-repeat>
          <p class="sans_serif_p pb2">
            <strong>Arbitration Rules.</strong>
            Arbitration shall be initiated through the Bulgarian Arbitration Association, an established alternative dispute resolution provider that offers arbitration as set forth in this section.  If BAA is not available to arbitrate, the parties shall agree to select an alternative ADR Provider.  The rules of the ADR Provider shall govern all aspects of the arbitration except to the extent such rules are in conflict with the Terms.  The BAA Consumer Arbitration Rules governing the arbitration are available online at en.arbitrationcourtbg.org or by calling the BAA at +359 892 283 551  The arbitration shall be conducted by a single, neutral arbitrator.  Any claims or disputes where the total amount of the award sought is less than Ten Thousand EUR (10,000.00 EUR) may be resolved through binding non-appearance-based arbitration, at the option of the party seeking relief.  For claims or disputes where the total amount of the award sought is Ten Thousand EUR (10,000.00 EUR) or more, the right to a hearing will be determined by the Arbitration Rules.  Any hearing will be held in a location within 100 miles of your residence, unless you reside outside Bulgaria, and unless the parties agree otherwise.  If you reside outside of Bulgaria, the arbitrator shall give the parties reasonable notice of the date, time and place of any oral hearings. Any judgment on the award rendered by the arbitrator may be entered in any court of competent jurisdiction.  If the arbitrator grants you an award that is greater than the last settlement offer that the Psychology To Go made to you prior to the initiation of arbitration, the Psychology To Go will pay you the greater of the award or 500.00 EUR.  Each party shall bear its own costs and disbursements arising out of the arbitration and shall pay an equal share of the fees and costs of the ADR Provider.
          </p>
        </div>
        <div amp-fx="fade-in-scroll" data-repeat>
          <p class="sans_serif_p pb2">
            <strong>Additional Rules for Non-Appearance Based Arbitration:</strong>
            If non-appearance based arbitration is elected, the arbitration shall be conducted by telephone, online and/or based solely on written submissions; the specific manner shall be chosen by the party initiating the arbitration.  The arbitration shall not involve any personal appearance by the parties or witnesses unless otherwise agreed by the parties.
          </p>
        </div>
        <div amp-fx="fade-in-scroll" data-repeat>
          <p class="sans_serif_p pb2">
            <strong>Time Limits. </strong>
            If you or the Psychology To Go pursues arbitration, the arbitration action must be initiated and/or demanded within the statute of limitations and within any deadline imposed under the BAA Rules for the pertinent claim.
          </p>
        </div>
        <div amp-fx="fade-in-scroll" data-repeat>
          <p class="sans_serif_p pb2">
            <strong>Authority of Arbitrator.</strong>
            If arbitration is initiated, the arbitrator will decide the rights and liabilities of you and the Psychology To Go, and the dispute will not be consolidated with any other matters or joined with any other cases or parties.  The arbitrator shall have the authority to grant motions dispositive of all or part of any claim.  The arbitrator shall have the authority to award monetary damages, and to grant any non-monetary remedy or relief available to an individual under applicable law, the BAA Rules, and the Terms.  The arbitrator shall issue a written award and statement of decision describing the essential findings and conclusions on which the award is based.  The arbitrator has the same authority to award relief on an individual basis that a judge in a court of law would have.  The award of the arbitrator is final and binding upon you and the Psychology To Go.
          </p>
        </div>
        <div amp-fx="fade-in-scroll" data-repeat>
          <p class="sans_serif_p pb2">
          <strong>Waiver of Jury Trial. </strong>
          HE PARTIES HEREBY WAIVE THEIR CONSTITUTIONAL AND STATUTORY RIGHTS TO GO TO COURT AND HAVE A TRIAL IN FRONT OF A JUDGE OR A JURY, instead electing that all claims and disputes shall be resolved by arbitration under this Arbitration Agreement.  Arbitration procedures are typically more limited, more efficient and less expensive than rules applicable in a court and are subject to very limited review by a court.  In the event any litigation should arise between you and the Psychology To Go in any state or federal court in a suit to vacate or enforce an arbitration award or otherwise, YOU AND THE Psychology To Go WAIVE ALL RIGHTS TO A JURY TRIAL, instead electing that the dispute be resolved by a judge.
          </p>
        </div>
        <div amp-fx="fade-in-scroll" data-repeat>
          <p class="sans_serif_p pb2">
            <strong>Waiver of Class or Consolidated Actions.</strong>
            All claims and disputes within the scope of this arbitration agreement must be arbitrated or litigated on an individual basis and not on a class basis, and claims of more than one customer or user cannot be arbitrated or litigated jointly or consolidated with those of any other customer or user.
          </p>
        </div>
        <div amp-fx="fade-in-scroll" data-repeat>
          <p class="sans_serif_p pb2">
          <strong>Confidentiality.</strong>
          All aspects of the arbitration proceeding shall be strictly confidential.  The parties agree to maintain confidentiality unless otherwise required by law.  This paragraph shall not prevent a party from submitting to a court of law any information necessary to enforce this Agreement, to enforce an arbitration award, or to seek injunctive or equitable relief.
          </p>
        </div>
        <div amp-fx="fade-in-scroll" data-repeat>
          <p class="sans_serif_p pb2">
          <strong>Severability. </strong>If any part or parts of this Arbitration Agreement are found under the law to be invalid or unenforceable by a court of competent jurisdiction, then such specific part or parts shall be of no force and effect and shall be severed and the remainder of the Agreement shall continue in full force and effect.
          </p>
        </div>
        <div amp-fx="fade-in-scroll" data-repeat>
          <p class="sans_serif_p pb2">
            <strong>Right to Waive.</strong> Any or all of the rights and limitations set forth in this Arbitration Agreement may be waived by the party against whom the claim is asserted.  Such waiver shall not waive or affect any other portion of this Arbitration Agreement.
          </p>
        </div>
        <div amp-fx="fade-in-scroll" data-repeat>
          <p class="sans_serif_p pb2">
          <strong>Survival of Agreement. </strong>his Arbitration Agreement will survive the termination of your relationship with Psychology TO Go.
          </p>
        </div>
        <div amp-fx="fade-in-scroll" data-repeat>
          <p class="sans_serif_p pb2">
          <strong>Small Claims Court.</strong> Nonetheless the foregoing, either you or the Psychology To Go may bring an individual action in small claims court.
          </p>
        </div>
        <div amp-fx="fade-in-scroll" data-repeat>
          <p class="sans_serif_p pb2">
          <strong>Emergency Equitable Relief.</strong> Anyhow the foregoing, either party may seek emergency equitable relief before a state or federal court in order to maintain the status quo pending arbitration.  A request for interim measures shall not be deemed a waiver of any other rights or obligations under this Arbitration Agreement.
          </p>
        </div>
        <div amp-fx="fade-in-scroll" data-repeat>
          <p class="sans_serif_p pb2">
          <strong>Claims Not Subject to Arbitration.</strong> Notwithstanding the foregoing, claims of defamation, violation of the Computer Fraud and Abuse Act, and infringement or misappropriation of the other party’s patent, copyright, trademark or trade secrets shall not be subject to this Arbitration Agreement.
          </p>
        </div>
        <div amp-fx="fade-in-scroll" data-repeat>
          <p class="sans_serif_p pb2">
          In any circumstances where the foregoing Arbitration Agreement permits the parties to litigate in court, the parties hereby agree to submit to the personal jurisdiction of the courts located within Sofia, Bulgaria, for such purposes.
          </p>
        </div>
        <div amp-fx="fade-in-scroll" data-repeat>
          <p class="sans_serif_p pb2">
            The Site may be subject to Bulgarian export control laws and may be subject to export or import regulations in other countries. You agree not to export, re-export, or transfer, directly or indirectly, any Bulgarian technical data acquired from Psychology To Go, or any products utilizing such data, in violation of the Bulgarian export laws or regulations.
          </p>
        </div>
        <div amp-fx="fade-in-scroll" data-repeat>
          <p class="sans_serif_p pb2">
          Psychology To Go is located at the address in Section 10.8. If you are a California resident, you may report complaints to the Complaint Assistance Unit of the Division of Consumer Product of the California Department of Consumer Affairs by contacting them in writing at 400 R Street, Sacramento, CA 95814, or by telephone at (800) 952-5210.
          </p>
        </div>
        <div amp-fx="fade-in-scroll" data-repeat>
          <p class="sans_serif_p pb2">
            <strong>Electronic Communications.</strong> The communications between you and Psychology To Go use electronic means, whether you use the Site or send us emails, or whether Psychology To Go posts notices on the Site or communicates with you via email. For contractual purposes, you (a) consent to receive communications from Psychology To Go in an electronic form; and (b) agree that all terms and conditions, agreements, notices, disclosures, and other communications that Psychology To Go provides to you electronically satisfy any legal obligation that such communications would satisfy if it were be in a hard copy writing.
          </p>
        </div>
        <div amp-fx="fade-in-scroll" data-repeat>
          <p class="sans_serif_p pb2">
            <strong>Entire Terms.</strong> These Terms constitute the entire agreement between you and us regarding the use of the Site. Our failure to exercise or enforce any right or provision of these Terms shall not operate as a waiver of such right or provision. The section titles in these Terms are for convenience only and have no legal or contractual effect. The word "including" means "including without limitation". If any provision of these Terms is held to be invalid or unenforceable, the other provisions of these Terms will be unimpaired and the invalid or unenforceable provision will be deemed modified so that it is valid and enforceable to the maximum extent permitted by law.  Your relationship to Psychology To Go is that of an independent contractor, and neither party is an agent or partner of the other.  These Terms, and your rights and obligations herein, may not be assigned, subcontracted, delegated, or otherwise transferred by you without Psychology To Go’s prior written consent, and any attempted assignment, subcontract, delegation, or transfer in violation of the foregoing will be null and void.  Psychology To Go may freely assign these Terms.  The terms and conditions set forth in these Terms shall be binding upon assignees.
          </p>
        </div>


    </div>
  </div>
</section>
<section id="8" style="background-color: #fff;">
  <div class="container-rounded mx-auto light-bg-2">
    <div class="container-medium mx-auto">

        <div amp-fx="fade-in-scroll" data-repeat>
          <h2 class="sans_serif_h2 pb2">Your Privacy.</h2>
        </div>
        <div amp-fx="fade-in-scroll" data-repeat>
          <p class="sans_serif_p pb2">
            Please read our <a class="link-dark" href="{{ route('privacy')}}">Privacy Policy</a>
          </p>
        </div>

    </div>
  </div>
</section>
<section id="9" style="background-color: #fff;">
  <div class="container-rounded mx-auto light-bg-1">
    <div class="container-medium mx-auto">

        <div amp-fx="fade-in-scroll" data-repeat>
          <h2 class="sans_serif_h2 pb2">Copyright/Trademark Information.</h2>
        </div>
        <div amp-fx="fade-in-scroll" data-repeat>
          <p class="sans_serif_p pb2">
            Copyright ©. All rights reserved.  All trademarks, logos and service marks displayed on the Site are our property or the property of other third-parties. You are not permitted to use these Marks without our prior written consent or the consent of such third party which may own the Marks.
          </p>
        </div>

    </div>
  </div>
</section>
<section id="10" style="background-color: #fff; padding-bottom: 4rem;">
  <div class="container-rounded mx-auto light-bg-2">
    <div class="container-medium mx-auto">

        <div amp-fx="fade-in-scroll" data-repeat>
          <h2 class="sans_serif_h2 pb2">Contact Information</h2>
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

    </div>
  </div>
</section>
@endslot
@endcomponent
