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
    <!-- ///////////////////////////////////////////////////////////////// -->
    <!-- ///////////////////////////////////////////////////////////////// -->
    <!-- IMPORTANTE-->
    <!-- //////////////////////////////////////////////////////////////////-->
    <!-- //////////////////////////////////////////////////////////////////-->
    <!-- <link rel="stylesheet" type="text/css" href='{{ HTML::style("css/layouts/marketing.css") }}' /> -->
    <!-- <link rel="stylesheet" href="{{ HTML::style('css/layouts/marketing.css') }}"> -->
    <!--<![endif]-->

    <!-- Styles -->
    <style>
        * {
            -webkit-box-sizing: border-box;
            -moz-box-sizing: border-box;
            box-sizing: border-box;
        }

        /*
         * -- BASE STYLES --
         * Most of these are inherited from Base, but I want to change a few.
         */
        body {
            line-height: 1.7em;
            color: #7f8c8d;
            font-size: 13px;
        }

        h1,
        h2,
        h3,
        h4,
        h5,
        h6,
        label {
            color: #34495e;
        }

        .pure-img-responsive {
            max-width: 100%;
            height: auto;
        }

        /*
         * -- LAYOUT STYLES --
         * These are some useful classes which I will need
         */
        .l-box {
            padding: 1em;
        }

        .l-box-lrg {
            padding: 2em;
            border-bottom: 1px solid rgba(0,0,0,0.1);
        }

        .is-center {
            text-align: center;
        }



        /*
         * -- PURE FORM STYLES --
         * Style the form inputs and labels
         */
        .pure-form label {
            margin: 1em 0 0;
            font-weight: bold;
            font-size: 100%;
        }

        .pure-form input[type] {
            border: 2px solid #ddd;
            box-shadow: none;
            font-size: 100%;
            width: 100%;
            margin-bottom: 1em;
        }

        /*
         * -- PURE BUTTON STYLES --
         * I want my pure-button elements to look a little different
         */
        .pure-button {
            background-color: #89bdd3;
            color: white;
            padding: 0.5em 2em;
            border-radius: 5px;
        }

        a.pure-button-primary {
            background: white;
            color: #9ad3de;
            border-radius: 5px;
            font-size: 120%;
        }


        /*
         * -- MENU STYLES --
         * I want to customize how my .pure-menu looks at the top of the page
         */

        .home-menu {
            padding: 0.5em;
            text-align: center;
            box-shadow: 0 1px 1px rgba(0,0,0, 0.10);
        }
        .home-menu {
            background: #89bdd3;
        }
        .pure-menu.pure-menu-fixed {
            /* Fixed menus normally have a border at the bottom. */
            border-bottom: none;
            /* I need a higher z-index here because of the scroll-over effect. */
            z-index: 4;
        }

        .home-menu .pure-menu-heading {
            color: white;
            font-weight: 400;
            font-size: 120%;
        }

        .home-menu .pure-menu-selected a {
            color: white;
        }

        .home-menu a {
            color: white;
        }
        .home-menu li a:hover,
        .home-menu li a:focus {
            background: none;
            border: none;
            color: #AECFE5;
        }


        /*
         * -- SPLASH STYLES --
         * This is the blue top section that appears on the page.
         */

        .splash-container {
            background: #9ad3de;
            z-index: 1;
            overflow: hidden;
            /* The following styles are required for the "scroll-over" effect */
            width: 100%;
            height: 88%;
            top: 0;
            left: 0;
            position: fixed !important;
        }

        .splash {
            /* absolute center .splash within .splash-container */
            width: 80%;
            height: 50%;
            margin: auto;
            position: absolute;
            top: 100px; left: 0; bottom: 0; right: 0;
            text-align: center;
            text-transform: uppercase;
        }

        /* This is the main heading that appears on the blue section */
        .splash-head {
            font-size: 20px;
            font-weight: bold;
            color: white;
            border: 3px solid white;
            padding: 1em 1.6em;
            font-weight: 100;
            border-radius: 5px;
            line-height: 1em;
        }

        /* This is the subheading that appears on the blue section */
        .splash-subhead {
            color: white;
            letter-spacing: 0.05em;
            opacity: 0.8;
        }

        /*
         * -- CONTENT STYLES --
         * This represents the content area (everything below the blue section)
         */
        .content-wrapper {
            /* These styles are required for the "scroll-over" effect */
            position: absolute;
            top: 87%;
            width: 100%;
            min-height: 12%;
            z-index: 2;
            background: white;

        }

        /* We want to give the content area some more padding */
        .content {
            padding: 1em 1em 3em;
        }

        /* This is the class used for the main content headers (<h2>) */
        .content-head {
            font-weight: 400;
            text-transform: uppercase;
            letter-spacing: 0.1em;
            margin: 2em 0 1em;
        }

        /* This is a modifier class used when the content-head is inside a ribbon */
        .content-head-ribbon {
            color: white;
        }

        /* This is the class used for the content sub-headers (<h3>) */
        .content-subhead {
            color: #89bdd3;
        }
        .content-subhead i {
            margin-right: 7px;
        }

        /* This is the class used for the dark-background areas. */
        .ribbon {
            background: #2d3e50;
            color: #aaa;
        }

        /* This is the class used for the footer */
        .footer {
            background: #111;
            position: fixed;
            bottom: 0;
            width: 100%;
        }

        /*
         * -- TABLET (AND UP) MEDIA QUERIES --
         * On tablets and other medium-sized devices, we want to customize some
         * of the mobile styles.
         */
        @media (min-width: 48em) {

            /* We increase the body font size */
            body {
                font-size: 16px;
            }

            /* We can align the menu header to the left, but float the
            menu items to the right. */
            .home-menu {
                text-align: left;
            }
            .home-menu ul {
                float: right;
            }

            /* We increase the height of the splash-container */
            /*    .splash-container {
                    height: 500px;
                }*/

            /* We decrease the width of the .splash, since we have more width
            to work with */
            .splash {
                width: 50%;
                height: 50%;
            }

            .splash-head {
                font-size: 250%;
            }


            /* We remove the border-separator assigned to .l-box-lrg */
            .l-box-lrg {
                border: none;
            }

        }

        /*
         * -- DESKTOP (AND UP) MEDIA QUERIES --
         * On desktops and other large devices, we want to over-ride some
         * of the mobile and tablet styles.
         */
        @media (min-width: 78em) {
            /* We increase the header font size even more */
            .splash-head {
                font-size: 300%;
            }
        }
    </style>
</head>
<body>

<div class="header">
    <div class="home-menu pure-menu pure-menu-horizontal pure-menu-fixed">
        <a class="pure-menu-heading" href="">HyPCS</a>

        <ul class="pure-menu-list">
            <li class="pure-menu-item pure-menu-selected"><a href="#" class="pure-menu-link">Ingresa</a></li>
            <li class="pure-menu-item"><a href="datacenter.html" class="pure-menu-link">¿Quién soy?</a></li>
            <li class="pure-menu-item"><a href="#forms" class="pure-menu-link">Contacto</a></li>
        </ul>
    </div>
</div>

<div class="splash-container">
    <div class="splash">
        <h1 class="splash-head">HyPCS</h1>
        <p class="splash-subhead">
            Consultoria en Sistemas
        </p>
        <p>
            <a href="#forms" class="pure-button pure-button-primary">Inicia Sesión</a>
        </p>
    </div>
</div>

<div class="content-wrapper">
    <div class="content">
        <h2 class="content-head is-center">HyP Consultoría en Sistemas</h2>

        <div class="pure-g">
            <div class="l-box pure-u-1 pure-u-md-1-2 pure-u-lg-1-4">

                <h3 class="content-subhead">
                    <i class="fa fa-rocket"></i>
                    Quién soy
                </h3>
                <p>
                    Es una empresa, ante el SAT, registrada en el régimen de “Persona Física con Actividad Empresarial”.

                    “H&P Consultoría en Sistemas” (H&PCS) comienza a ofrecer sus servicios en 1996, bajo el nombre de “HCG Sistemas de Cómputo” comercializando productos de software y hardware, y realizando instalaciones de cableado estructurado, considerando siempre que las soluciones administrativas instaladas en una plataforma (hardware, sistemas operativos y comunicaciones) bien soportada y puesta a punto, funcionarán correctamente y quedando por mejorar los procesos de información y alimentación de datos por parte de la empresa - cliente.

                    Actualmente se ofrecen las soluciones anteriores, adicionando los servicios de consultoría para optimización de procesos y uso de herramientas ofimáticas. Es distribuidor de los sistemas administrativos de ASPEL® y CONTPAQ i®, soportando los requisitos fiscales publicados por el SAT. Además, se busca ofrecer soluciones a la medida según los requerimientos del cliente.

                </p>
            </div>
            <!--
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
            </div> -->
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
        This site is created by Team International
    </div>

</div>




</body>
</html>
