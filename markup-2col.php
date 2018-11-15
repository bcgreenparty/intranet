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
        display: block;
        width: 100%;
        padding-bottom: 10px;
        border-bottom: 1px solid black;
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

      .grid-ras {
        height: 378px;
        color: #F4F4F4;
      } 

      .grid-ras .bg {
        background-image: url("images/markup-ridingassociations-3.jpg");
      }

      .grid-ras h2 {
        font-family: Oswald;
        font-weight: 500;
        text-transform: uppercase;
        margin-bottom: 0.25em;
        color: #FFF;
      }

      .grid-leader {
        height: 378px;
      }

      .grid-leader .bg {
        background-image: url("images/markup-andrewweaver-beach-web.jpg");
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

      .grid5 {
        flex: 5;
      }

      .grid7 {
        flex: 7;
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
            <div class="wrapper-fluid">
              <div class="grid1 grid-ras">
                <div class="bg vcenter"><!-- RAs  -->
                  <div class="wrapper-fluid">
                    <div class="grid5 no-border">
                      <h2>Riding <br />Associations</h2>
                    </div>
                    <div class="grid7 no-border"></div>
                  </div>
                </div>
                <a class="grid-anchor" href="ridings"></a>
              </div>
              <div class="grid1 grid-leader">
                <div class="bg vcenter"><!-- Leader  -->
                  <div class="wrapper-fluid">
                    <div class="grid5 no-border">
                        <img src="images/markup-logo-aw-grayscale.png" alt="Andrew Weaver" />
                    </div>
                    <div class="grid7 no-border"></div>
                  </div>
                </div>
                <a class="grid-anchor" href="leader"></a>
              </div>
              
            </div>
            <!--- END HTML --->

            <div class="col-12">
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
              <span class="highlight"><strong>.grid-ras</strong> {
                height: 349px;
                color: #F4F4F4;
              }</span>
              <span class="highlight"><strong>.grid-ras .bg</strong> {
                background-image: url("ridingassociations-3.jpg");
              }</span>
              <span class="highlight"><strong>.grid-ras h2</strong> {
                font-family: Oswald;
                font-weight: 500;
                text-transform: uppercase;
                margin-bottom: 0.25em;
                color: #FFF;
              }</span>
              <span class="highlight"><strong>.grid-leader .bg</strong> {
                background-image: url("andrewweaver-beach-web.JPG");
              }</span>
              <span class="themeCSS">
                .wrapper-fluid {
                  display: flex;
                  width: 100%;
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
                  padding: 0;
                  position: relative;
                }
                .grid1 {
                  flex: 1;
                }
                .grid5 {
                  flex: 5;
                }
                .grid7 {
                  flex: 7;
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
                @media (max-width: 767px) {
                  .wrapper-fluid {
                  width: 100%;
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