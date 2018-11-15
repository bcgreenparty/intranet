<?php
if (!isset($_COOKIE[username])) {
    header("Location: index.php");
}
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <!--- JQuery --->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <!--- Custom CSS -->
    <link rel="stylesheet" type="text/css" href="css/styles.css" />
    <!-- Custom JS --->
    <script src="js/jquery.js"></script>
    <link href="https://fonts.googleapis.com/css?family=Oswald" rel="stylesheet"> 
    <style type="text/css">

        .body {
            background-image: url(images/IMG_1771-Background.jpg);
            background-attachment: fixed;
            font-weight: 400;
            background-color: #F6F6F6;
            background-size: cover;
            -webkit-background-size: cover;
            -moz-background-size: cover;
            -o-background-size: cover;
            background-repeat: no-repeat;
            background-position: center center;
        }

        .toplevel-signup {
            height: 85vh;
            color: white;
        }

         .wrapper-fluid {
            height: 100%;
            display: flex;
         }

         .wrapper-fluid .grid1 {
            flex: 1;
        }

        .grid-padding {
            padding: 3em 5%;
        }

        .grid1 {
            border: none;
        }

        .span3 {
            width: 22.92817679558011% !important;
            *width: 22.87498530621841%;
        }

        [class^="grid"], .wrapper-fluid [class^="grid"] {
            padding: 3em 5%;
            -webkit-box-sizing: border-box;
            -moz-box-sizing: border-box;
            box-sizing: border-box;
            float: none;
            border: 1px #FFF solid;
            border-left: none;
            border-bottom: none;
            border-collapse: collapse;
        }

        [class^="grid"], .wrapper-fluid [class^="grid"] {
            -webkit-box-sizing: border-box;
            -moz-box-sizing: border-box;
            box-sizing: border-box;
            min-height: 30px;
            float: none;
            display: block;
            width: 100%;
            padding: 1.5em 5%;
            border-top: 1px #FFF solid;
            border-left: none;
            border-right: none;
            border-bottom: none;
            position: relative;
        }

        .row-fluid [class*="span"] {
            display: block;
            width: 100%;
            min-height: 30px;
            -webkit-box-sizing: border-box;
            -moz-box-sizing: border-box;
            box-sizing: border-box;
            float: left;
            margin-left: 2.7624309392265194%;
            *margin-left: 2.709239449864817%;
        }

        .signup-feature {
            position: absolute;
            bottom: 10px;
            left: 45px;
            width: 100%;
        }

        .width-container {
            width: 100%;
        }

        .width-container.main {
            padding: 0 !important;
        }

        .signup-feature .width-container.main {
            padding: 0 !important;
        }

        .signup-feature .width-container.main {
            position: absolute;
            bottom: 10px;
        }

        .signup-feature {
            width: 100%;
            height: 60vh;
            background-size: cover;
            display: block;
            background-repeat: repeat-x;
            background-color: transparent;
            background-position: center center;
            background-attachment: fixed;
            text-align: center;
        }

        input {
            margin-bottom: 1em;
            max-width: 100%;
            display: inline-block;
            font-size: 1em;
            line-height: 1.25;
            padding: 0.5em 0.65em;
            border-width: 1px;
            border-color: #CCC;
            border-style: solid;
            color: #333;
            background: #FCFCFC;
            vertical-align: middle;
        }

        .signup-text {
            position: absolute;
            bottom: 15px;
            left: 60px;
        }

        .submit-button, .success-button {
            cursor: pointer;
            display: inline-block;
            -moz-border-radius: 3px;
            -webkit-border-radius: 3px;
            border-radius: 3px;
            padding: .5em;
            text-align: center;
            border: none;
            font: 1em Lato,Arial,sans-serif;
            color: #FFF;
            background-color: #00BC6A;
            text-decoration: none;
            vertical-align: 0%;
            /* margin: .5em 0 0 0; */
        }

        h1 {
            font-size: 2.75em;
            font-family: "ITCAvantGardePro-Bold",Helvetica,Arial,sans-serif;
        }
            
        .hidden {
            display: none !important;
        }

        .no-borders {
            border: none !important;
        }

        @media (max-width: 970px) {
            .row-fluid .span3 {
                float: none;
                width: 60% !important;
            }

            h1 {
                display: none;
            }
      }
     
    </style>
  </head>

  <body>
      
    <?php include 'inc-nav.php'; ?>

    <div class="container content">

      <div class="row">

          <div class="col-12">
            <h3>Two column with single background</h3>

            <!--- BEGIN HTML --->

            <div class="body">
                <div class="toplevel-signup" style="color: #FFF">
                    <div class="wrapper-fluid">

                        <div class="grid1 grid-padding">
                            <div class="sign-up-box">
                                <div class="signup-feature grid-padding">
                                    <div class="main width-container clearfix" >
                                        <div id="content">
                                            <div>
                                                <div class="form">
                                                    <div class="grid1 grid-padding no-borders">
                                                        <div class="sign-up-box">
                                                            <div class="signup-feature grid-padding">
                                                                <div class="main width-container clearfix">
                                                                    <form id="sign_up_page_new_signup_form" class="ajaxForm signup_form" method="POST" action="/forms/signups" enctype="multipart/form-data"><input name="authenticity_token" type="hidden" value="JR6bsgopj5S8pmhnLjffAmOg1qXXtNajUfQwTlcpP9A="/><input name="page_id" type="hidden" value="1596"/><input name="return_to" type="hidden" value="https://www.bcgreens.ca/sign_up"/><div class="email_address_form" style="display:none;" aria-hidden="true"><p><label for="email_address">Optional email code</label><br/><input name="email_address" type="text" class="text" id="email_address" autocomplete="off"/></p></div>
                                                                        <div class="form-errors"></div>
                                                                        <div class="row-fluid">
                                                                            <div class="span3"><input class="text" id="signup_email" name="signup[email]" placeholder="Email" type="email" value="webmaster@greenparty.bc.ca" /></div>
                                                                            <div class="span3"><input class="text" id="signup_submitted_address" name="signup[submitted_address]" placeholder="Postal code" type="text" value="HoHoHo" /></div>
                                                                            <div class="hidden"><input name="signup[email_opt_in]" type="hidden" value="0" /><input class="checkbox" checked="checked" id="signup_email_opt_in" name="signup[email_opt_in]" type="checkbox" value="1" /></div>
                                                                            <div class="span3" style="text-align: left;"><input class="submit-button" type="submit" name="commit" value="Signup" /> <div class="form-submit"></div></div>
                                                                        </div>
                                                                    </form>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div><!--- close left panel --->

                        <div class="grid1">
                            <div class="signup-text hideOnMobile">
                                <h1>We want a future  we can believe in</h1>
                            </div>
                        </div><!--- close right panel --->

                    </div>
                </div>
                <!--- END HTML --->
            </div>
            
            <div class="col-12">
              <p>This design appeared at the top of the home page and featured the website background image. The background image featuring Andrew Weaver is therefore not part of this design per se. Instead, this design is really a window through which you are looking at the website background image. This is why there is no mention of the background image in the CSS. The background image is assigned to the BODY tag and the relevant CSS rules are also assigned to the BODY tag. The result is that no CSS is required to display the image. As long as the background of the relevant DIV elements is set to transparent the background image will show.</p>       
            </div>

          </div>
          <br />
          <div class="col-md-6">
            <p><strong>HTML Markup</strong></p>
            <!--- BEGIN MARKUP --->
            <pre>
              <span>
              &lt;div class="body"&gt;
                &lt;div class="toplevel-signup" style="color: #FFF"&gt;
                    &lt;div class="wrapper-fluid"&gt;

                        &lt;div class="grid1 grid-padding"&gt;
                            &lt;div class="sign-up-box"&gt;
                                &lt;div class="signup-feature grid-padding"&gt;
                                    &lt;div class="main width-container clearfix" &gt;
                                        &lt;div id="content"&gt;
                                            &lt;div&gt;
                                                &lt;div class="form"&gt;
                                                    &lt;div class="grid1 grid-padding no-borders"&gt;
                                                        &lt;div class="sign-up-box"&gt;
                                                            &lt;div class="signup-feature grid-padding"&gt;
                                                                &lt;div class="main width-container clearfix"&gt;
                                                                    &lt;form id="sign_up_page_new_signup_form" class="ajaxForm signup_form" method="POST" action="/forms/signups" enctype="multipart/form-data"&gt;&lt;input name="authenticity_token" type="hidden" value="JR6bsgopj5S8pmhnLjffAmOg1qXXtNajUfQwTlcpP9A="/&gt;&lt;input name="page_id" type="hidden" value="1596"/&gt;&lt;input name="return_to" type="hidden" value="https://www.bcgreens.ca/sign_up"/&gt;&lt;div class="email_address_form" style="display:none;" aria-hidden="true"&gt;&lt;p&gt;&lt;label for="email_address"&gt;Optional email code&lt;/label&gt;&lt;br/&gt;&lt;input name="email_address" type="text" class="text" id="email_address" autocomplete="off"/&gt;&lt;/p&gt;&lt;/div&gt;
                                                                        &lt;div class="form-errors"&gt;&lt;/div&gt;
                                                                        &lt;div class="row-fluid"&gt;
                                                                            &lt;div class="span3"&gt;&lt;input class="text" id="signup_email" name="signup[email]" placeholder="Email" type="email" value="webmaster@greenparty.bc.ca" /&gt;&lt;/div&gt;
                                                                            &lt;div class="span3"&gt;&lt;input class="text" id="signup_submitted_address" name="signup[submitted_address]" placeholder="Postal code" type="text" value="HoHoHo" /&gt;&lt;/div&gt;
                                                                            &lt;div class="hidden"&gt;&lt;input name="signup[email_opt_in]" type="hidden" value="0" /&gt;&lt;input class="checkbox" checked="checked" id="signup_email_opt_in" name="signup[email_opt_in]" type="checkbox" value="1" /&gt;&lt;/div&gt;
                                                                            &lt;div class="span3" style="text-align: left;"&gt;&lt;input class="submit-button" type="submit" name="commit" value="Signup" /&gt; &lt;div class="form-submit"&gt;&lt;/div&gt;&lt;/div&gt;
                                                                        &lt;/div&gt;
                                                                    &lt;/form&gt;
                                                                &lt;/div&gt;
                                                            &lt;/div&gt;
                                                        &lt;/div&gt;
                                                    &lt;/div&gt;
                                                &lt;/div&gt;
                                            &lt;/div&gt;
                                        &lt;/div&gt;
                                    &lt;/div&gt;
                                &lt;/div&gt;
                            &lt;/div&gt;
                        &lt;/div&gt;&lt;!--- close left panel ---&gt;

                        &lt;div class="grid1"&gt;
                            &lt;div class="signup-text hideOnMobile"&gt;
                                &lt;h1&gt;We want a future  we can believe in&lt;/h1&gt;
                            &lt;/div&gt;
                        &lt;/div&gt;&lt;!--- close right panel ---&gt;

                    &lt;/div&gt;
                &lt;/div&gt;
              </span>
            </pre>
          <!--- END MARKUP --->
          </div>

           <div class="col-md-6">
            <?php include 'inc-themeCSS.php'; ?>
            <pre>
              <span>

            <span class="highlight">.toplevel-signup {
                height: 85vh;
                color: white;
            }</span>

            <span class="highlight">.signup-feature {
                position: absolute;
                bottom: 10px;
                left: 45px;
                width: 100%;
            }</span>

            <span class="highlight">.signup-feature {
                width: 100%;
                height: 60vh;
                text-align: center;
            }</span>
            
            <span class="highlight">.signup-text {
                position: absolute;
                bottom: 15px;
                left: 60px;
            }</span>

            <span class="highlight">h1 {
                font-size: 2.75em;
                font-family: "ITCAvantGardePro-Bold",Helvetica,Arial,sans-serif;
            }</span>

            <span class="themeCSS">
              .body {
                background-image: url(../images/IMG_1771-Background.jpg);
                background-attachment: fixed;
                font-weight: 400;
                background-color: #F6F6F6;
                background-size: cover;
                -webkit-background-size: cover;
                -moz-background-size: cover;
                -o-background-size: cover;
                background-repeat: no-repeat;
                background-position: center center;
            }

            .wrapper-fluid {
                height: 100%;
                display: flex;
            }

            .wrapper-fluid .grid1 {
                flex: 1;
            }

            .grid-padding {
                padding: 3em 5%;
            }

            .grid1 {
                border: none;
            }

            .span3 {
                width: 22.92817679558011% !important;
                *width: 22.87498530621841%;
            }

            [class^="grid"], .wrapper-fluid [class^="grid"] {
                padding: 3em 5%;
                -webkit-box-sizing: border-box;
                -moz-box-sizing: border-box;
                box-sizing: border-box;
                float: none;
                border: 1px #FFF solid;
                border-left: none;
                border-bottom: none;
                border-collapse: collapse;
            }

            [class^="grid"], .wrapper-fluid [class^="grid"] {
                -webkit-box-sizing: border-box;
                -moz-box-sizing: border-box;
                box-sizing: border-box;
                min-height: 30px;
                float: none;
                display: block;
                width: 100%;
                padding: 1.5em 5%;
                border-top: 1px #FFF solid;
                border-left: none;
                border-right: none;
                border-bottom: none;
                position: relative;
            }

            .row-fluid [class*="span"] {
                display: block;
                width: 100%;
                min-height: 30px;
                -webkit-box-sizing: border-box;
                -moz-box-sizing: border-box;
                box-sizing: border-box;
                float: left;
                margin-left: 2.7624309392265194%;
                *margin-left: 2.709239449864817%;
            }

            .width-container {
                width: 100%;
            }

            .width-container.main {
                padding: 0 !important;
            }

            .signup-feature .width-container.main {
                padding: 0 !important;
            }

            .signup-feature .width-container.main {
                position: absolute;
                bottom: 10px;
            }

            input {
                margin-bottom: 1em;
                max-width: 100%;
                display: inline-block;
                font-size: 1em;
                line-height: 1.25;
                padding: 0.5em 0.65em;
                border-width: 1px;
                border-color: #CCC;
                border-style: solid;
                color: #333;
                background: #FCFCFC;
                vertical-align: middle;
            }

            .submit-button, .success-button {
                cursor: pointer;
                display: inline-block;
                -moz-border-radius: 3px;
                -webkit-border-radius: 3px;
                border-radius: 3px;
                padding: .5em;
                text-align: center;
                border: none;
                font: 1em Lato,Arial,sans-serif;
                color: #FFF;
                background-color: #00BC6A;
                text-decoration: none;
                vertical-align: 0%;
                /* margin: .5em 0 0 0; */
            }
                
            .hidden {
                display: none !important;
            }

            .no-borders {
                border: none !important;
            }

            @media (max-width: 970px) {
                .row-fluid .span3 {
                    float: none;
                    width: 60% !important;
                }

                h1 {
                    display: none;
                }
            }
                </span>
              </span>
            </pre>
           </div>
        </div>
    </div><!-- end container -->

    <?php include 'inc-footer.php'; ?>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  </body>
</html>