<?php
if(!isset($_COOKIE[username])) {
  header( "Location: index.php" );
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

    h3 {
      text-transform: uppercase;
      font-size: 1.75em;
    }

     .campaign1{
         background-color: #638fb4;
     }

     .campaign2{
         background-color: #947cba;
     }

     .campaign3{
         background-color: #009a44;
     }

     [class^="campaign"] div {
        padding: 55px;
     }

     [class^="campaign"] h3, [class^="campaign"] p {
       color: white;
     }

     [class^="campaign"] h3 {
      display: block;
      height: 85px;
     }

    [class^="grid"] a.grid-anchor, .wrapper-fluid [class^="grid"] a.grid-anchor {
      position: absolute;
      top: 0;
      left: 0;
      z-index: 10;
    }

    [class^="grid"]:last-child, .wrapper-fluid [class^="grid"]:last-child {
      border-right: none;
    }

    h3 {
      font-family: "ITCAvantGardePro-Bk",Helvetica,Arial,sans-serif;
      font-weight: bold;
      margin: 0 0 0.75em;
      padding: 0;
      line-height: 1.25em;
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
        padding: 0 !important;
        position: relative;
      }

      .grid1 {
        flex: 1;
      }

      img {
        max-width: 100%;
        height: auto;
        vertical-align: middle;
        border: none;
      }

      .highlight {
        color: #00A75C;
      }

      .no-border {
        border: none !important;
      }

      @media (max-width: 1060px) {
        .campaigns, .campaignBox {
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
            <h3>Three column template</h3>

            <!--- BEGIN HTML --->
            <div class="campaigns vcenter">

                <div class="wrapper-fluid campaignBox"> 
                
                    <div class="grid1 campaign1">
                        <img src="images/160906-Salmon_Wide.jpg" />
                        <div>
                            <h3>Wild salmon</h3>
                            <p>BC’s wild salmon are in crisis. Only bold and decisive action will revive the province's stocks.</p><p>While we have had some success keeping this issue at the top of government's agenda by securing a Wild Salmon Secretariat and a Wild Salmon Advisory Council with a direct line to the Premier, the government's slow movement on removing fish farms out of migratory routes is unacceptable.</p>
                        </div>
                        <a class="grid-anchor" href="salmon"></a>
                    </div>
                
                    <div class="grid1 campaign2">
                        <img src="images/160906-Housing_wide.jpg" />
                        <div>
                            <h3>Affordable housing</h3>
                            <p>Our communities should be vibrant, welcoming and affordable - they should be places where people from all walks of life can thrive.</p><p>Homes are the centre of community, and our homes should be places for people to live in; not treated like commodities to be bought, and sold, and traded exclusively for profit. Yet our real estate has turned into a playground for the wealthy: a place for speculators to park their capital and reap huge returns, while ordinary British Columbians struggle to find a suitable place to live.</p>		
                        </div>
                        <a class="grid-anchor" href="housing"></a>
                    </div>
                    
                    <div class="grid1 campaign3">
                        <img src="images/160906-Clean-Energy_wide.jpg" />
                        <div>
                            <h3>Clean growth strategy</h3>
                            <p>There is opportunity in every challenge. Climate change is no different. In mitigating future climate change and adapting to what is already inevitable, we can build a sustainable and prosperous 21st century economy.</p><p> The world needs a leader that will recognize and embrace that opportunity. British Columbia can be that leader. We are perfectly poised to lead the way forward.</p>		
                        </div>
                        <a class="grid-anchor" href="clean_growth"></a>
                    </div>
                
                </div>
            
            </div>
            <!--- END HTML --->

            <div class="col-12">
              <p>Some words about the code.</p>
              <p>The <span class="highlight">green</span> rules are CSS rules that have been written specifically for this page. The black rules are CSS rules that already exist and was re-used.</p>
            </div>
          </div>
          <br />
          <div class="col-md-6">
            <p><strong>HTML Markup</strong></p>
            <!--- BEGIN MARKUP --->
            <pre>
              <span>
                &lt;div class="wrapper-fluid"&gt;
                  &lt;div class="grid1 grid-ras"&gt;
                    &lt;div class="bg vcenter"&gt;&lt;!-- RAs  --&gt;
                      &lt;div class="wrapper-fluid"&gt;
                        &lt;div class="grid5 no-border"&gt;
                          &lt;h2&gt;Riding &lt;br /&gt;Associations&lt;/h2&gt;
                        &lt;/div&gt;
                        &lt;div class="grid7 no-border"&gt;&lt;/div&gt;
                      &lt;/div&gt;
                    &lt;/div&gt;
                    &lt;a class="grid-anchor" href="ridings"&gt;&lt;/a&gt;
                  &lt;/div&gt;
                  &lt;div class="grid1 grid-leader"&gt;
                    &lt;div class="bg vcenter"&gt;&lt;!-- Leader  --&gt;
                      &lt;div class="wrapper-fluid"&gt;
                        &lt;div class="grid5 no-border"&gt;
                            &lt;h2&gt;Andrew &lt;br /&gt;Weaver&lt;/h2&gt;
                        &lt;/div&gt;
                        &lt;div class="grid7 no-border"&gt;&lt;/div&gt;
                      &lt;/div&gt;
                    &lt;/div&gt;
                    &lt;a class="grid-anchor" href="leader"&gt;&lt;/a&gt;
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
              <span class="highlight">h3 {
                text-transform: uppercase;
                font-size: 1.75em;
              }</span>

              <span class="highlight">.campaign1{
                  background-color: #638fb4;
              }</span>

              <span class="highlight">.campaign2{
                  background-color: #947cba;
              }</span>

              <span class="highlight">.campaign3{
                  background-color: #009a44;
              }</span>

              <span class="highlight">[class^="campaign"] div {
                  padding: 55px;
              }</span>

             <span class="highlight">[class^="campaign"] h3, [class^="campaign"] p {
                color: white;</span>

              <span class="highlight">[class^="campaign"] h3 {
                display: block;
                height: 85px;
              }</span>

              <span class="highlight">h3 {
                font-family: "ITCAvantGardePro-Bk",Helvetica,Arial,sans-serif;
                font-weight: bold;
                margin: 0 0 0.75em;
                padding: 0;
                line-height: 1.25em;
              }</span>

              <span class="themeCSS">
              [class^="grid"] a.grid-anchor, .wrapper-fluid [class^="grid"] a.grid-anchor {
                position: absolute;
                top: 0;
                left: 0;
                z-index: 10;
              }

              [class^="grid"]:last-child, .wrapper-fluid [class^="grid"]:last-child {
                border-right: none;
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
                  padding: 0 !important;
                  position: relative;
                }

                .grid1 {
                  flex: 1;
                }

                img {
                  max-width: 100%;
                  height: auto;
                  vertical-align: middle;
                  border: none;
                }

                .highlight {
                  color: #00A75C;
                }

                .no-border {
                  border: none !important;
                }

                @media (max-width: 1060px) {
                  .campaigns, .campaignBox {
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