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

    .pledge_prorep_v2 {
        color: white;
    }

    .proRepPic, .signup-form {
        padding: 3em 5%;
        min-height: 550px;
        background-color: #0ab4c1;
    }

    .headline-right {
        margin-bottom: 0;
    }

      .wrapper-fluid {
        display: flex;
        width: 100%;
        overflow: hidden;
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

      [class^="grid"] .bg, .wrapper-fluid [class^="grid"] .bg {
        position: absolute;
        min-height: 100%;
        width: 100%;
        height: auto;
        max-width: none;
        z-index: 1;
        top: 0;
        left: 0;
        background-position: center center;
        background-size: cover;
        background-repeat: no-repeat;
      }

      .grid-padding {
            padding: 3em 5%;
        }

      label.radio input {
        -webkit-appearance: none;
        -moz-appearance: none;
        appearance: none;
        background: transparent;
            background-color: transparent;
        border: 1px solid #333;
        width: 30px;
        height: 30px;
        margin: 0 10px 10px 0;
        cursor: pointer;
        transition: all 0.25s ease;
        padding: 0;
        background-color: #c2e0e2;
        }

        .radio {
            font-size: .77em;
            color: white;
            padding-right: 5px;
        }

        input {
            font-size: .77m;
            color: #fff;
            background-color: #c2e0e2;
        }

        button, input, optgroup, select, textarea {
            margin: 0;
            font-family: inherit;
            font-size: inherit;
            line-height: inherit;
        }

        select, textarea, input {
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
                background-color: rgb(252, 252, 252);
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
            margin: .5em 0 0 0;
        }
      
      .vcenter {
        display: flex;
        flex-direction: column;
        justify-content: center;
      }

      .grid1 {
        border: none;
        border-right-color: currentcolor;
        border-right-style: none;
        border-right-width: medium;
        padding: 0;
        position: relative;
      }

      .grid1 {
        flex: 1;
      }

      .button, .small_button {
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
        margin: .5em 0 0 0;
    }

      img {
        max-width: 100%;
        height: auto;
        vertical-align: middle;
        border: none;
      }

      .no-border {
        border: none !important;
      }

      .hidden {
          display: none;
      }

      @media (max-width: 767px) {
        .wrapper-fluid {
            width: 100%;
            height: 100%;
            display: block;            
        }
      }
    </style>
  </head>

  <body>
      
    <?php include 'inc-nav.php'; ?>

    <div class="container content">

        <div class="row">

            <div class="col-12">
                <h3>Two column template</h3>

            <!--- BEGIN HTML --->
            <div class="wrapper-fluid pledge_prorep_v2 grid-padding">
                <div class="grid1 proRepPic">
                    <h2>Proportional Representation</h2>
                    <img src="images/180925-Votes_equal_Seats-01.svg" style="width: 65%; margin-bottom: 1.5em;" />
                    <p>With Proportional Representation, a party’s share of the seats in the legislature will be the determined by how many votes it received in the last election.</p>
                    <a class="button" href="pro_rep">Learn more</a>
                </div>
                <div class="grid1 signup-form">
                    <!-- start signup form -->
                    <h2 class="headline-right">Have you voted?</h2>
                    <div class="form">
                        <form id="voted_pledge_page_new_signup_form" class="ajaxForm signup_form" method="POST" action="/forms/signups" enctype="multipart/form-data">
                            <input name="authenticity_token" type="hidden" value="iamRZa//IzYyewGNIZoAqIIDS+csa8yU6rWxwK9/8b0=" />
                            <input name="page_id" type="hidden" value="5038" />
                            <input name="return_to" type="hidden" value="https://www.bcgreens.ca/voted_pledge" />

                            <div class="email_address_form" style="display:none;" aria-hidden="true">
                                <p><label for="email_address">Optional email code</label><br /><input name="email_address" type="text"
                                        class="text" id="email_address" autocomplete="off" /></p>
                            </div>

                            <div class="padbottommore small"><small>If you aren't David Juniper, <a href="/logout?page_id=5038">click here to reset the form</a>.</small></div>

                            <div class="form-errors"></div>

                            <div class="row-fluid" style="display: none">
                                                                                                                                                                                                    ">
                                <div class="span6" style="position: relative;">
                                    <div class="option-overlay"></div><label class="">Riding:</label>
                                    <select id="signup_custom_values_2017_sign_rid_custom" name="signup[custom_values][2017_sign_rid]">
                                        <option value="" selected="selected"></option>
                                        <option value="1">Adam Olsen / Saanich North-The Islands</option>
                                        <option value="2">Andrew Weaver / Oak Bay-Gordon Head</option>
                                        <option value="3">Kalen Harris / Victoria-Beacon Hill</option>
                                        <option value="4">Chris Maxwell / Victoria-Swan Lake</option>
                                        <option value="5">Mark Neufeld / Saanich South</option>
                                        <option value="6">Glenn Sollitt / Parksville-Qualicum</option>
                                        <option value="7">Lia Versaevel / Nanaimo-North Cowichan</option>
                                        <option value="8">Kathleen Harris / Nanaimo</option>
                                        <option value="9">Dan Hines / Kamloops-North Thompson</option>
                                        <option value="10">Donovan Cavers / Kamloops-South Thompson</option>
                                        <option value="11">Kim Charlesworth / Nelson-Creston</option>
                                        <option value="12">Rita Giesbrecht / Cariboo-Chilcotin</option>
                                        <option value="13">Sonia Furstenau / Cowichan Valley</option>
                                        <option value="14">Jonina Campbell / New Westminster</option>
                                        <option value="15">Kim Darwin / Powell River-Sunshine Coast</option>
                                        <option value="16">Joe Keithley / Burnaby-Lougheed</option>
                                        <option value="17">Rick McGowan / Burnaby-Deer Lake</option>
                                        <option value="18">Arthur Green / Fraser-Nicola</option>
                                        <option value="19">Ernie Sellentin / Courtenay-Comox</option>
                                        <option value="20">Ellisa Calder / Vancouver-Kingsway</option>
                                        <option value="21">Fraser-Nicola</option>
                                        <option value="22">Wayne Froese / Chilliwack</option>
                                        <option value="23">Peter Tam / Maple Ridge-Mission</option>
                                        <option value="24">Joshua Johnson / North Vancouver-Seymour</option>
                                        <option value="25">Jerry Kroll / Vancouver-Mount Pleasant</option>
                                        <option value="26">Alicia La Rue / Mid Island-Pacific Rim</option>
                                        <option value="27">Coquitlam-Burke Mountain</option>
                                        <option value="28">Prince George-Mackenzie</option>
                                        <option value="29">Nan Kendy / Prince George-Valemount</option>
                                        <option value="30">James Marshall / Vancouver-West End</option>
                                        <option value="31">Janet Fraser / Vancouver-Langara</option>
                                        <option value="32">Michael Markwick / West Vancouver-Capilano</option>
                                        <option value="33">Ian Soutar / Coquitlam-Burke Mountain</option>
                                        <option value="34">Aleksandra Muniak / Surrey-Cloverdale</option>
                                        <option value="35">Peter Hallschmid / Burnaby North</option>
                                        <option value="36">Alex Pope / Maple Ridge-Pitt Meadows</option>
                                        <option value="37">Amanda Konkin / Vancouver-Point Grey</option>
                                        <option value="38">Keli Westgate / Vernon-Monashee</option>
                                        <option value="39">Nicola Spurling / Coquitlam-Maillardville</option>
                                        <option value="40">William Marshall / Surrey-White Rock</option>
                                        <option value="41">Robert Stupka / Kelowna West</option>
                                        <option value="42">Valentine Wu / Burnaby-Edmonds</option>
                                        <option value="43">Bradley Shende / Vancouver-False Creek</option>
                                        <option value="44">Brendan Ralfs / Langford-Juan de Fuca</option>
                                        <option value="45">Alison Shaw / Kelowna-Lake Country</option>
                                        <option value="46">Sue Moen / North Island</option>
                                        <option value="47">Tim Binnema / Surrey-Fleetwood</option>
                                        <option value="48">Samson Boyer / Columbia River-Revelstoke</option>
                                        <option value="49">Kevin Babcock / Shuswap</option>
                                        <option value="50">David Wong / Vancouver-Hastings</option>
                                        <option value="51">Ryan Marciniw / Richmond North Centre</option>
                                        <option value="52">Simon Rear / Vancouver-Kensington</option>
                                        <option value="53">Larry Colero / Delta South</option>
                                        <option value="54">Richard Warrington / North Vancouver-Lonsdale</option>
                                        <option value="55">Andy MacKinnon / Esquimalt-Metchosin</option>
                                        <option value="56">Michael Wolfe / Richmond-Queensborough</option>
                                        <option value="57">Jodi Murphy / Surrey-Guildford</option>
                                        <option value="58">Roy Sakata / Richmond-Steveston</option>
                                        <option value="59">Rainer Wilkins / Kelowna-Mission</option>
                                        <option value="60">Jason Hanley / Port Coquitlam</option>
                                        <option value="61">Dana Taylor / West Vancouver-Sea to Sky</option>
                                        <option value="62">Louise Boutin / Vancouver-Fairview</option>
                                        <option value="63">Eric Kolotyluk / Vancouver-Fraserview</option>
                                        <option value="64">Michael Barkusky / Vancouver-Quilchena</option>
                                        <option value="65">Richard Jaques / Cariboo North</option>
                                        <option value="66">Hondo Arendt / North Coast</option>
                                        <option value="67">Pascal Tremblay / Surrey South</option>
                                        <option value="68">Josie Bleuer / Chilliwack-Kent</option>
                                        <option value="69">Rita Fromholt / Surrey-Whalley</option>
                                        <option value="70">Greg Powell / Richmond South Centre</option>
                                        <option value="71">Don Barthel / Port Moody-Coquitlam</option>
                                        <option value="72">Sam Troy / Kootenay West</option>
                                        <option value="73">Saira Aujla / Surrey-Green Timbers</option>
                                        <option value="74">Vonnie Lavers / Boundary-Similkameen</option>
                                        <option value="75">Bill Masse / Langley East</option>
                                        <option value="76">Jennifer Holmes / Abbotsford-Mission</option>
                                        <option value="77">Connie Sahlmark / Penticton</option>
                                        <option value="78">Aird Flavelle / Abbotsford South</option>
                                        <option value="79">Richard Krieger / Surrey-Newton</option>
                                        <option value="80">Jacquie Miller / Delta North</option>
                                        <option value="81">Yvonne Prest / Kootenay East</option>
                                        <option value="82">Elizabeth Walker / Langley</option>
                                        <option value="83">Kevin Eastwood / Abbotsford West</option>
                                        <option value="84">Veronica Greer / Surrey-Panorama</option>
                                        <option value="85">Hilary Crowley / Prince George-Mackenzie</option>
                                        <option value="86">Douglas Gook / Nechako Lakes</option>
                                    </select>
                                </div>
                                <div class="span6">
                                    <label class="">Sign size:</label>
                                    <select id="signup_custom_values_2017_sign_custom" name="signup[custom_values][2017_sign]">
                                        <option value="" selected="selected"></option>
                                        <option value="1">Standard (approx. 18" x 24")</option>
                                        <option value="2">Medium (approx. 48" x 36")</option>
                                        <option value="3">Large (approx. 48" x 96")</option>
                                        <option value="4">N/A</option>
                                    </select></div>
                                </div>

                            <div class="signup-tags">
                                <!-- _labeled_tags.html -->
                                <div class="labeled-tags-container">
                                    <div class="row-fluid">
                                        <div class="span12">
                                            <label for="radio_1039" class="radio"> <input type='radio' name='signup[labeled_tags][]' value='1039' id='radio_button_1039' checked=\"checked\" /> Yes, I voted for ProRep </label>
                                        </div>
                                    </div>

                                    <div class="row-fluid">
                                        <div class="span12">
                                            <label for="radio_1040" class="radio"> <input type='radio' name='signup[labeled_tags][]' value='1040' id='radio_button_1040' /> Yes, I voted for First Past the Post </label>
                                        </div>
                                    </div>

                                </div>
                                <!-- /_labeled_tags.html -->
                            </div>

                            <div class="row-fluid">
                                <div class="span6"><input class="text" id="signup_first_name" name="signup[first_name]" placeholder="First Name" type="text" value="David" /></div>
                                <div class="span6"><input class="text" id="signup_last_name" name="signup[last_name]" placeholder="Last Name" type="text" value="Juniper" /></div>
                            </div>

                            <div class="row-fluid"></div>

                            <div class="row-fluid padbottommore"></div>

                            <!-- Capture button text -->

                            <input class="submit-button" type="submit" name="commit" value="Submit" />
                            
                            <div class="form-submit"></div>
                        </form>

                        <!-- _privacy.html -->
                        <p class="small privacy-notice">By submitting this form, you consent to the BC Green Party retaining your personal
                            information for party activities as outlined in the <a href="/privacy" target="_blank">BC Green Party Privacy
                                Policy</a>. You may withdraw this consent at any time by contacting the party at 1-888-473-3686 or
                            info@bcgreens.ca.</p>

                        <!-- /_privacy.html -->
                    </div>
                    <!-- end signup form -->
                </div><!--  close right col -->
            </div>
            <!--- END HTML --->

            </div><!--  close col-12 -->
        </div><!--  close row -->

        <div class="row">
          <div class="col-md-6">
            <p><strong>HTML Markup</strong></p>
            <!--- BEGIN MARKUP --->
            <pre>
              <span>
              &lt;div class="wrapper-fluid pledge_prorep_v2 grid-padding"&gt;
                &lt;div class="grid1 proRepPic"&gt;
                    &lt;h2&gt;Proportional Representation&lt;/h2&gt;
                    &lt;img src="images/180925-Votes_equal_Seats-01.svg" style="width: 65%; margin-bottom: 1.5em;" /&gt;
                    &lt;p&gt;With Proportional Representation, a party’s share of the seats in the legislature will be the determined by how many votes it received in the last election.&lt;/p&gt;
                    &lt;a class="button" href="pro_rep"&gt;Learn more&lt;/a&gt;
                &lt;/div&gt;&lt;!-- close left col --&gt;
                &lt;div class="grid1 signup-form"&gt;
                    {% subpage "voted_pledge" with "voted_pledge_prorep_hp" %}
                &lt;/div&gt;&lt;!--  close right col --&gt;
            &lt;/div&gt;
              </span>
            </pre>
          <!--- END MARKUP --->
            </div>

            <div class="col-md-6">
            <?php include 'inc-themeCSS.php'; ?>
            <pre>
              <span>
              
              <span class="highlight">.pledge_prorep_v2 {
                    color: white;
                }</span>

                <span class="highlight">.proRepPic, .signup-form {
                    padding: 3em 5%;
                    min-height: 550px;
                    background-color: #0ab4c1;
                }</span>

                <span class="highlight">.headline-right {
                    margin-bottom: 0;
                }</span>

                <span class="themeCSS">
                .wrapper-fluid {
                    display: flex;
                    width: 100%;
                    overflow: hidden;
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

                [class^="grid"] .bg, .wrapper-fluid [class^="grid"] .bg {
                    position: absolute;
                    min-height: 100%;
                    width: 100%;
                    height: auto;
                    max-width: none;
                    z-index: 1;
                    top: 0;
                    left: 0;
                    background-position: center center;
                    background-size: cover;
                    background-repeat: no-repeat;
                }

                .grid-padding {
                        padding: 3em 5%;
                    }

                label.radio input {
                    -webkit-appearance: none;
                    -moz-appearance: none;
                    appearance: none;
                    background: transparent;
                        background-color: transparent;
                    border: 1px solid #333;
                    width: 30px;
                    height: 30px;
                    margin: 0 10px 10px 0;
                    cursor: pointer;
                    transition: all 0.25s ease;
                    padding: 0;
                    background-color: #c2e0e2;
                    }

                    .radio {
                        font-size: .77em;
                        color: white;
                        padding-right: 5px;
                    }

                    input {
                        font-size: .77m;
                        color: #fff;
                        background-color: #c2e0e2;
                    }

                    button, input, optgroup, select, textarea {
                        margin: 0;
                        font-family: inherit;
                        font-size: inherit;
                        line-height: inherit;
                    }

                    select, textarea, input {
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
                            background-color: rgb(252, 252, 252);
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
                        margin: .5em 0 0 0;
                    }
                
                .vcenter {
                    display: flex;
                    flex-direction: column;
                    justify-content: center;
                }

                .grid1 {
                    border: none;
                    border-right-color: currentcolor;
                    border-right-style: none;
                    border-right-width: medium;
                    padding: 0;
                    position: relative;
                }

                .grid1 {
                    flex: 1;
                }

                .button, .small_button {
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
                    margin: .5em 0 0 0;
                }

                img {
                    max-width: 100%;
                    height: auto;
                    vertical-align: middle;
                    border: none;
                }

                .no-border {
                    border: none !important;
                }

                .hidden {
                    display: none;
                }

                @media (max-width: 767px) {
                    .wrapper-fluid {
                        width: 100%;
                        height: 100%;
                        display: block;            
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