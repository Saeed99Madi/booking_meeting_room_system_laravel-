
<!DOCTYPE html>
<html lang='en'>
<head>
    <meta http-equiv='Content-Type' content='text/html; charset=utf-8' />


    <title>Demos | FullCalendar</title>


    <link rel="apple-touch-icon" sizes="180x180" href="{{asset('/assetsCal/favicon/apple-touch-icon.png')}}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{asset('/assetsCal/favicon/favicon-32x32.png')}}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{asset('/assetsCal/favicon/favicon-16x16.png')}}">
    <link rel="manifest" href="{{asset('/assetsCal/favicon/site.webmanifest')}}">
    <link rel="mask-icon" href="{{asset('/assetsCal/favicon/safari-pinned-tab.svg')}}" color="#5bbad5">
    <meta name="msapplication-TileColor" content="#da532c">
    <meta name="theme-color" content="#ffffff">






    <link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Muli:300,400,600,800,900' />
    <link href='{{asset('/assetsCal/base.css')}}' rel='stylesheet' />
    <link href='{{asset('/assetsCal/demos.css')}}' rel='stylesheet' />





    <script>
        (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
            (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
            m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
        })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

        ga('create', 'UA-3534877-8', 'auto');
        ga('send', 'pageview');
    </script>









    <script src='{{asset('/assetsCal/js/demos.js')}}'></script>

</head>
<body >


<div class='topbar'>
    <div class='topbar__container container'>

        <div class='topbar__branding'>
            <a class='branding' href='/'>
                <div class='branding-graphic'></div>
                <div class='branding-text'>FullCalendar</div>
            </a>
        </div>

        <div class='topbar__nav'>
            <div class='topbar__nav-item' id='demos-nav-item'>
                <a class='topbar__nav-handle' href='/demos'>
                    Demos
                </a>
            </div>
            <div class='topbar__nav-item '>
                <a class='topbar__nav-handle' href='/docs'>
                    Docs
                </a>
            </div>
            <div class='topbar__nav-item '>
                <div class='topbar__nav-handle'>
                    Support
                </div>
                <div class='topbar__flyout-wrap'>
                    <div class='topbar__flyout'>
                        <div class='topbar__flyout-item'>
                            <a class='topbar__flyout-handle' href='/getting-help'>
                                Getting Help
                            </a>
                        </div>
                        <div class='topbar__flyout-item'>
                            <a class='topbar__flyout-handle' href='/reporting-bugs'>
                                Reporting Bugs
                            </a>
                        </div>
                        <div class='topbar__flyout-item'>
                            <a class='topbar__flyout-handle' href='/requesting-features'>
                                Requesting Features
                            </a>
                        </div>
                        <div class='topbar__flyout-item'>
                            <a class='topbar__flyout-handle' href='/contributing'>
                                Contributing
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class='topbar__nav-item'>
                <a class='topbar__nav-handle button button--lightblue button--outlined' href='/pricing'>
                    Pricing
                </a>
            </div>
        </div>

        <div class='topbar__notice'>
            <a class='topbar__notice-link' href='https://github.com/fullcalendar/fullcalendar/releases' target='_blank'>
                v5.8.0
            </a>

        </div>

        <div class='topbar__github'>
            <a class='topbar__github-link' href='https://github.com/fullcalendar/fullcalendar' target='_blank'>
                <div class='topbar__github-graphic'></div>
            </a>
        </div>

    </div>
</div>


<div class='page-content-tray'>
    <div class='demos'>
        <div class='demos__container container container--wide'>
            <div class='demos__sidebar'>
                <h2 class='demos__sidebar-title'>
                    Demos
                </h2>
                <div class='accordion' id='demo-accordion'></div>
            </div>
            <div class='demos__main'>
                <div class='demos__main-container' id='demo-content'>
                </div>
            </div>
        </div>
    </div>
</div>


<div class='footer'>
    <div class='footer__container container'>
        <div class='footer__left'>
            <p>
                <a href='/blog/2021/02/10percent-profits-to-effective-charities' style='color:inherit'>
                    <strong>10%</strong>
                    of profits donated to
                    <strong>effective charities</strong>
                </a>
            </p>
            <p>
                <a href='https://docs.google.com/forms/d/e/1FAIpQLSf9mPTzy0tMSRN53y0CSnHLgS6uwlne2sK-tcwIbUZzs_LOUA/viewform?usp=sf_link' target='_blank'>
                    Does your company use FullCalendar? Tell us &raquo;
                </a>
            </p>

        </div>
        <div class='footer__right'>
            <p>
                &copy; 2021&nbsp; FullCalendar LLC
            </p>
            <ul class='inline-list'>
                <li><a href='https://github.com/fullcalendar' target='_blank'>GitHub</a></li>
                <li><a href='/license'>License</a></li>
                <li><a href='/blog'>Blog</a></li>
                <li><a href='/donate'>Donate</a></li>
            </ul>
        </div>
    </div>
</div>


</body>
</html>
