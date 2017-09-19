<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="HyPCS">
    <!--<script type="text/javascript" src="js/jquery.js"> </script>
    <script type="text/javascript" src="js/scrLandingPage.js"> </script> -->
    <title>HyPCS</title>

    <link rel="stylesheet" href="https://unpkg.com/purecss@0.6.2/build/pure-min.css" integrity="sha384-" crossorigin="anonymous">

    <!--[if lte IE 8]>
    <link rel="stylesheet" href="https://unpkg.com/purecss@0.6.2/build/grids-responsive-old-ie-min.css">
    <![endif]-->
    <!--[if gt IE 8]><!-->
    <link rel="stylesheet" href="https://unpkg.com/purecss@0.6.2/build/grids-responsive-min.css">
    <!--<![endif]-->

    <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">

    <!--[if lte IE 8]>
    <link rel="stylesheet" href="/laravel/public/css/layouts/marketing-old-ie.css">
    <![endif]-->
    <!--[if gt IE 8]><!-->
    <!-- <link rel="stylesheet" type="text/css" href='{{ HTML::style("css/layouts/marketing.css") }}' /> -->
    <link rel="stylesheet" href="{{ HTML::style('css/layouts/marketing.css') }}">
    <!--<![endif]-->
</head>
<body>

<div class="header">
    <div class="home-menu pure-menu pure-menu-horizontal pure-menu-fixed">
        <a class="pure-menu-heading" href="">CashKeeper</a>

        <ul class="pure-menu-list">
            <li class="pure-menu-item pure-menu-selected"><a href="#" class="pure-menu-link">Home</a></li>
            <li class="pure-menu-item"><a href="datacenter.html" class="pure-menu-link">Data Center</a></li>
            <li class="pure-menu-item"><a href="#forms" class="pure-menu-link">Sign Up</a></li>
        </ul>
    </div>
</div>

<div class="splash-container">
    <div class="splash">
        <h1 class="splash-head">Join CashKeeper</h1>
        <p class="splash-subhead">
            Save, invest and let CashKeeper work for you!
        </p>
        <p>
            <a href="#forms" class="pure-button pure-button-primary">Get Started</a>
        </p>
    </div>
</div>

<div class="content-wrapper">
    <div class="content">
        <h2 class="content-head is-center">Cashkeeper. The best solution to save money in an effective way</h2>

        <div class="pure-g">
            <div class="l-box pure-u-1 pure-u-md-1-2 pure-u-lg-1-4">

                <h3 class="content-subhead">
                    <i class="fa fa-rocket"></i>
                    Get Started Quickly
                </h3>
                <p>
                    Saving Money was never easier. Just sign up and start!
                </p>
            </div>
            <div class="l-box pure-u-1 pure-u-md-1-2 pure-u-lg-1-4">
                <h3 class="content-subhead">
                    <i class="fa fa-mobile"></i>
                    Save a Lot of Money
                </h3>
                <p>
                    It was never easier to save money online! Keep track of your expenses on your PC, Smartphone or Tablet
                </p>
            </div>
            <div class="l-box pure-u-1 pure-u-md-1-2 pure-u-lg-1-4">
                <h3 class="content-subhead">
                    <i class="fa fa-th-large"></i>
                    Data Analysis
                </h3>
                <p>
                    CashKeeper keeps track of your expenses and can analyze your behaviour to improve it.
                </p>
            </div>
            <div class="l-box pure-u-1 pure-u-md-1-2 pure-u-lg-1-4">
                <h3 class="content-subhead">
                    <i class="fa fa-users"></i>
                    Community
                </h3>
                <p>
                    CashKeeper's social feature can compare your financial behaviour with others. Completely anonymous!
                </p>
            </div>
        </div>
    </div>

    <div class="ribbon l-box-lrg pure-g">
        <div class="l-box-lrg is-center pure-u-1 pure-u-md-1-2 pure-u-lg-2-5">
            <img width="300" alt="File Icons" class="pure-img-responsive" src="img/analysis.jpg">
        </div>
        <div class="pure-u-1 pure-u-md-1-2 pure-u-lg-3-5">

            <h2 class="content-head content-head-ribbon">CashKeeper Data Analysis</h2>

            <p>
                With our own data analysis software it is possible to visualize your data to find peaks in your expenses or incomes. The CashKeeper Data Analysis software keeps also track where, when and how did you pay and can also detect costs which are not necessary. A highlight of the software is the comparison tool with other users which is completely anonymous. Try it out!
            </p>
        </div>
    </div>

    <div id="forms" class="content">
        <h2 class="content-head is-center">You can register here!</h2>

        <div class="pure-g">
            <div class="l-box-lrg pure-u-1 pure-u-md-2-5">
                <form class="pure-form pure-form-stacked">
                    <fieldset>

                        <label for="name">Your Name</label>
                        <input id="RegisterName" type="text" placeholder="Your Name">


                        <label for="email">Your Email</label>
                        <input id="RegisterMail" type="email" placeholder="Your Email">

                        <label for="password">Your Password</label>
                        <input id="RegisterPassword" type="password" placeholder="Your Password">

                        <label for="password">Your Password Confirmation</label>
                        <input id="RegisterPasswordConf" type="password" placeholder="Your Password">

                        <button id="RegisterButton" type="submit" class="pure-button">Register</button>
                    </fieldset>
                </form>
            </div>

            <div class="l-box-lrg pure-u-1 pure-u-md-3-5">
                <p>If you want to get more information feel free to contact us by mail: <a href="info@cashkeeper.com">info@cashkeeper.com</a></p>
                <p>Already have an account? Then Sign in here!</p>

                <form class="pure-form pure-form-stacked">
                    <fieldset>

                        <label for="email">Mail</label>
                        <input id="LoginMail" type="email" placeholder="Mail">

                        <label for="password">Password</label>
                        <input id="LoginPassword" type="password" placeholder="Password">


                        <button id="LoginButton" type="submit" class="pure-button">Sign In</button>
                    </fieldset>
                </form>
            </div>
        </div>

    </div>

    <div class="footer l-box is-center">
        This site is created by Can Kaymakci and Javier Cruz
    </div>

</div>




</body>
</html>
