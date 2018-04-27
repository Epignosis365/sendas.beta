<head>

     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=Edge">
     <meta name="description" content="">
     <meta name="keywords" content="">
     <meta name="author" content="">
     <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
     <meta name="verify-admitad" content="06498ec4c3" />
     
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <!--- FAVICON -->
     <?php echo '<link rel="shortcut icon" type="image/x-icon" href="images/logo-short.png" />'; ?>

     <link rel="stylesheet" href="css/bootstrap.min.css">
     <link rel="stylesheet" href="css/magnific-popup.css">
     <link rel="stylesheet" href="css/font-awesome.min.css">

     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
     <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
     <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
     
     <!-- Slick -->
     <link type="text/css" rel="stylesheet" href="css/slick.css" />
     <link type="text/css" rel="stylesheet" href="css/slick-theme.css" />

     <!-- Bootstrap core CSS 
     <link href="vendor/bootstrap/css/bootstrap.min.css_" rel="stylesheet">-->

     <!-- MAIN CSS -->
     <link rel="stylesheet" href="css/templatemo-style.css">
     <link rel="stylesheet" href="css/menu-principal.css">

     <link href='//fonts.googleapis.com/css?family=Ubuntu:400,300,300italic,400italic,500,500italic,700,700italic' rel='stylesheet' type='text/css'>

     <!--
     <link href='https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700' rel='stylesheet' type='text/css'>     
     
     <link href='//fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic' rel='stylesheet' type='text/css'>
     -->
     <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.1/css/font-awesome.min.css" rel="stylesheet" />
     <!--
     <link href="//netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css_" rel="stylesheet" id="bootstrap-css">
     <script src="//netdna.bootstrapcdn.com/bootstrap/3.1.0/js/bootstrap.min.js_"></script>


     <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
     <script type="text/javascript" src="http://code.jquery.com/jquery-1.9.1.min.js_"></script>
     <link rel="stylesheet" href="http://ajax.googleapis.com/ajax/libs/jqueryui/1.10.1/themes/base/minified/jquery-ui.min.css_" type="text/css" /> 

     <script type="text/javascript" src="http://code.jquery.com/ui/1.10.1/jquery-ui.min.js_"></script> 
     -->

     <script type="text/javascript">

     function toggleDiv(divId) {

          $("#"+divId).toggle('500');

     }

     $(document).ready(function() {
          $("div.bhoechie-tab-menu>div.list-group>a").mouseover(function(e) {
             e.preventDefault();
             $(this).siblings('a.active').removeClass("active");
             $(this).addClass("active");
             var index = $(this).index();
             $("div.bhoechie-tab>div.bhoechie-tab-content").removeClass("active");
             $("div.bhoechie-tab>div.bhoechie-tab-content").eq(index).addClass("active");
         });
     });
     </script>

     <script type="text/javascript">
          $(function () {
               $('[data-toggle="tooltip"]').tooltip()
          })
     </script>
     <script type="text/javascript">
          function openNav() {
              document.getElementById("mySidenav").style.width = "70%";
              // document.getElementById("flipkart-navbar").style.width = "50%";
              document.body.style.backgroundColor = "rgba(0,0,0,0.4)";
          }

          function closeNav() {
              document.getElementById("mySidenav").style.width = "0";
              document.body.style.backgroundColor = "rgba(0,0,0,0)";
          }
     </script>
     <script type="text/javascript">
          $(document).ready( function() {
              $('#Carousel').carousel({
                    interval:   7000
               });
               
               var clickEvent = false;
               $('#Carousel').on('click', '.nav a', function() {
                         clickEvent = true;
                         $('.nav li').removeClass('active');
                         $(this).parent().addClass('active');         
               }).on('slid.bs.Carousel', function(e) {
                    if(!clickEvent) {
                         var count = $('.nav').children().length -1;
                         var current = $('.nav li.active');
                         current.removeClass('active').next().addClass('active');
                         var id = parseInt(current.data('slide-to'));
                         if(count == id) {
                              $('.nav li').first().addClass('active');     
                         }
                    }
                    clickEvent = false;
               });
          });
     </script>

     <script type="text/javascript">/*
          $(document).ready(function() {
              $('#CarouselUpPub').carousel({
                  interval: 7000
              })
          });
          /*
          $(document).ready(function() {
            $('#media_last').carousel({
              pause: true,
              interval: false,
            });
          });
          */
     </script>

     <script type="text/javascript">
          function setCookie(cname, cvalue, exdays) {
              var d = new Date();
              d.setTime(d.getTime() + (exdays * 24 * 60 * 60 * 1000));
              var expires = "expires="+d.toUTCString();
              document.cookie = cname + "=" + cvalue + ";" + expires + ";path=/";
          }

          function getCookie(cname) {
              var name = cname + "=";
              var ca = document.cookie.split(';');
              for(var i = 0; i < ca.length; i++) {
                  var c = ca[i];
                  while (c.charAt(0) == ' ') {
                      c = c.substring(1);
                  }
                  if (c.indexOf(name) == 0) {
                      return c.substring(name.length, c.length);
                  }
              }
              return "";
          }

          function checkCookie() {
              var user = getCookie("username");
              if (user != "") {
                  alert("Welcome again " + user);
              } else {
                  user = prompt("Please enter your name:", "");
                  if (user != "" && user != null) {
                      setCookie("username", user, 365);
                  }
              }
          } 
     </script>

     <script>
          $(document).ready(function(){
              $('[data-toggle="popover"]').popover();   
          });
     </script>

     <script type="text/javascript">
          function yesVilleSelected(that) {
               if (that.value != "") {                    
                    var villeSelect = document.getElementById(that.value);
                    setCookie('villeSelectedON', that.value, 30);
                    //alert(getCookie('villeSelectedON'));
               }
          }
     </script>

     <script type="text/javascript">          
          function yesnoCheck(that) {
               if (that.value == "DFT" || that.value == "") {
                    
                    document.getElementById("DFT").style.display = "block";
               } else {
                    setCookie('provinceSelected', that.value, 30);                    
                    //alert(getCookie('provinceSelected'));
                    document.getElementById("DFT").style.display = "none";
               }

               if (that.value == "AB") {
                    setCookie('villeSelected', that.value, 30);
                    document.getElementById("AB").style.display = "block";
               } else {
                      document.getElementById("AB").style.display = "none";
                      document.getElementById("DFT").style.display = "none";                 
               }
              

              if (that.value == "BC") {
                    setCookie('villeSelected', that.value, 30);
                    document.getElementById("BC").style.display = "block";
               } else {
                      document.getElementById("BC").style.display = "none";
                      document.getElementById("DFT").style.display = "none";
               }
              

              if (that.value == "MB") {
                    setCookie('villeSelected', that.value, 30);
                    document.getElementById("MB").style.display = "block";
               } else {
                      document.getElementById("MB").style.display = "none";
                      document.getElementById("DFT").style.display = "none";
               }
              

              if (that.value == "NB") {
                    setCookie('villeSelected', that.value, 30);
                    document.getElementById("NB").style.display = "block";
               } else {
                      document.getElementById("NB").style.display = "none";
                      document.getElementById("DFT").style.display = "none";
               }
              

              if (that.value == "NL") {
                    setCookie('villeSelected', that.value, 30);
                    document.getElementById("NL").style.display = "block";
               } else {
                      document.getElementById("NL").style.display = "none";
                      document.getElementById("DFT").style.display = "none";
               }
                      

              if (that.value == "NT") {
                    setCookie('villeSelected', that.value, 30);
                    document.getElementById("NT").style.display = "block";
               } else {
                      document.getElementById("NT").style.display = "none";
                      document.getElementById("DFT").style.display = "none";
               }
              

              if (that.value == "NS") {
                    setCookie('villeSelected', that.value, 30);
                    document.getElementById("NS").style.display = "block";
               } else {
                      document.getElementById("NS").style.display = "none";
                      document.getElementById("DFT").style.display = "none";
               }
              

              if (that.value == "ON") {
                    setCookie('villeSelected', that.value, 30);
                    document.getElementById("ON").style.display = "block";
               } else {
                      document.getElementById("ON").style.display = "none";
                      document.getElementById("DFT").style.display = "none";
               }
              

              if (that.value == "PE") {
                    setCookie('villeSelected', that.value, 30);
                    document.getElementById("PE").style.display = "block";
               } else {
                      document.getElementById("PE").style.display = "none";
                      document.getElementById("DFT").style.display = "none";
               }
              

              if (that.value == "QC") {
                    setCookie('villeSelected', that.value, 30);
                    document.getElementById("QC").style.display = "block";
               } else {
                      document.getElementById("QC").style.display = "none";
                      document.getElementById("DFT").style.display = "none";
               }
              

              if (that.value == "SK") {
                    setCookie('villeSelected', that.value, 30);
                    document.getElementById("SK").style.display = "block";
               } else {
                      document.getElementById("SK").style.display = "none";
                      document.getElementById("DFT").style.display = "none";
               }
              

              if (that.value == "YT") {
                    setCookie('villeSelected', that.value, 30);
                    document.getElementById("YT").style.display = "block";
               } else {
                      document.getElementById("YT").style.display = "none";
                      document.getElementById("DFT").style.display = "none";
               }
         }
     </script>
</head>