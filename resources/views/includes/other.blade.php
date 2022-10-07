 <!-- Editor Styles -->
 <style id="hs_editor_style" type="text/css">
      /* HubSpot Styles (default) */
      .cell_1625237631161-padding {
        padding-top: 0px !important;
        padding-bottom: 0px !important;
        padding-left: 0px !important;
        padding-right: 0px !important;
      }
    </style>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato:regular&display=swap">


    <!--  Added by GoogleAnalytics integration -->
    <script>
      var _hsp = window._hsp = window._hsp || [];
      _hsp.push(['addPrivacyConsentListener', function(consent) {
        if (consent.allowed || (consent.categories && consent.categories.analytics)) {
          (function(i, s, o, g, r, a, m) {
            i['GoogleAnalyticsObject'] = r;
            i[r] = i[r] || function() {
              (i[r].q = i[r].q || []).push(arguments)
            }, i[r].l = 1 * new Date();
            a = s.createElement(o),
              m = s.getElementsByTagName(o)[0];
            a.async = 1;
            a.src = g;
            m.parentNode.insertBefore(a, m)
          })(window, document, 'script', '//www.google-analytics.com/analytics.js', 'ga');
          ga('create', 'UA-650383-34', 'auto');
          ga('send', 'pageview');
        }
      }]);
    </script>


    <!-- /Added by GoogleAnalytics integration -->
    <link rel="canonical" href="index.html">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdnjs.cloudflare.com" rel="preconnect" crossorigin>
    <link href="https://cdnjs.cloudflare.com" rel="dns-prefetch" crossorigin>
    <link href="https://use.fontawesome.com" rel="preconnect" crossorigin>
    <link href="https://use.fontawesome.com" rel="dns-prefetch" crossorigin>
    <link href="https://fonts.googleapis.com" rel="preconnect" crossorigin>
    <link href="https://fonts.googleapis.com" rel="dns-prefetch" crossorigin>
    <link href="https://fast.wistia.com" rel="preconnect" crossorigin>
    <link href="https://fast.wistia.com" rel="dns-prefetch" crossorigin>
    <link href="https://static.zdassets.com" rel="preconnect" crossorigin>
    <link href="https://static.zdassets.com" rel="dns-prefetch" crossorigin>
    <link href="https://www.bugherd.com" rel="preconnect" crossorigin>
    <link href="https://www.bugherd.com" rel="dns-prefetch" crossorigin>

    <!-- BEGIN Custom Fonts optimized load -->
    <script>
      WebFontConfig = {
        typekit: {
          id: 'nbi0cux'
        },
        custom: {
          families: ['FontAwesome'],
          urls: ['//use.fontawesome.com/f7a386584d.css']
        },
        fontinactive: function(family, fvd) {
          if (family === 'FontAwesome') {
            console.log("fontawesome load failed");
          }
        },
        timeout: 1000,
        active: function() {
          sessionStorage.fonts = true;
        }
      };
      (function(d) {
        var wf = d.createElement('script'),
          s = d.scripts[0];
        wf.src = '//cdnjs.cloudflare.com/ajax/libs/webfont/1.6.28/webfontloader.js';
        wf.async = true;
        s.parentNode.insertBefore(wf, s);
      })(document);
    </script>
    <!-- END Custom Fonts optimized load -->

<script>
      (function(d) {
        var s = d.createElement("script");
        s.setAttribute("data-account", "1goMyyk63l");
        s.setAttribute("src", "https://cdn.userway.org/widget.js");
        (d.body || d.head).appendChild(s);
      })(document)
    </script>

    <!-- TrustBox script -->
    <script defer type="text/javascript" src="https://widget.trustpilot.com/bootstrap/v5/tp.widget.bootstrap.min.js" async></script>
    <!-- End TrustBox script -->


    <!-- Wicked Reports script -->
    <script defer type="text/javascript" src="https://widget.wickedreports.com/v2/2957/wr-a106266a6ec8631cdaff82d93ba4602a.js" async></script>
    <!-- End Wicked Reports script -->

    <!-- ManyChat -->
    <script src="https://widget.manychat.com/669142493438534.js" defer></script>
    <script charset="utf-8" type="text/javascript" src="https://js.hsforms.net/forms/v2.js"></script>
    
    
    <script>
      hbspt.forms.create({
        portalId: "1151181",
        formId: "4396ad0b-4bf1-40a5-b4d4-8c065dc5b4d2"
      });
      // add custom script after it
      var array = [];
      window.addEventListener('message', event => {
        // in the onFormSubmit global form event, grab the data and push it to the above array
        if (event.data.type === 'hsFormCallback' && event.data.eventName === 'onFormSubmit') {
          let vars = ['email'];
          let len = vars.length;
          for (i = 0; i < len; i++) {
            for (j in event.data.data) {
              if (event.data.data[j]["name"] == vars[i]) {
                let object = {
                  name: '',
                  value: ''
                };
                object.name = vars[i];
                object.value = event.data.data[j]["value"];
                array.push(object);
              }
            }
          }
        }
        // after the form has submitted and data sent to Hubspot, get the data from the array and then redirect the page, adding the data to the URL
        if (event.data.type === 'hsFormCallback' && event.data.eventName === 'onFormSubmitted') {
          var email = array[2].value
          window.location = "https://signup.creditrepaircloud.com/?email=" + encodeURIComponent(email);
        }
      });
    </script>



    <!--  Added by AdRoll integration -->
    <script type="text/javascript">
      adroll_adv_id = "7D2XLIYRQNBNJD6Z6KK36H";
      adroll_pix_id = "6E4GUEZB5FGUZNQIK625OT";
      var _hsp = window._hsp = window._hsp || [];
      (function() {
        var _onload = function() {
          if (document.readyState && !/loaded|complete/.test(document.readyState)) {
            setTimeout(_onload, 10);
            return
          }
          if (!window.__adroll_loaded) {
            __adroll_loaded = true;
            setTimeout(_onload, 50);
            return
          }
          _hsp.push(['addPrivacyConsentListener', function(consent) {
            if (consent.allowed || (consent.categories && consent.categories.advertisement)) {
              var scr = document.createElement("script");
              var host = (("https:" == document.location.protocol) ? "https://s.adroll.com" : "http://a.adroll.com");
              scr.setAttribute('async', 'true');
              scr.type = "text/javascript";
              scr.src = host + "/j/roundtrip.js";
              ((document.getElementsByTagName('head') || [null])[0] || document.getElementsByTagName('script')[0].parentNode).appendChild(scr);
            }
          }]);
        };
        if (window.addEventListener) {
          window.addEventListener('load', _onload, false);
        } else {
          window.attachEvent('onload', _onload)
        }
      }());
    </script>