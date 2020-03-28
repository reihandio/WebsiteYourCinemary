<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
  <html>
    <head>
      <!--Import Google Icon Font-->
      <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <!--Import materialize.css-->
      <link type="text/css" rel="stylesheet" href="assets/css/materialize.css"  media="screen,projection"/>

      <!-- CSS SAYA -->
      <link rel="stylesheet" href="assets/css/style.css">
      <link rel="Icon" href="assets/img/logo/logoitem.PNG">
      <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

      <!--Let browser know website is optimized for mobile-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
      <title>Your Cinemary | Taking Your Imagination to The Next Level</title>
    </head>

    <body>

        <!-- PRELOADER
        <div class="container preloader">
          <div class="row">
            <div class="col s12 m3"></div>
            <div class="col s12 m6">
              <div class="div1">
                <div class="div2"></div>
              </div>
            </div>
            <div class="col s12 m3"></div>
          </div>
        </div> -->


        
        <!-- navbar -->
        <div class="navbar-fixed scrollspy" id="navbar">
            <nav class="grey darken-3">
              <div class="container">
                <div class="nav-wrapper">
                  <a href="#navbar" class="brand-logo"><img src="assets/img/logo/logoputih.PNG"></a>
                  <a href="#" data-target="mobile-nav" class="sidenav-trigger"><i class="material-icons">menu</i></a>
                  <ul class="right hide-on-med-and-down">
                    <li><a href="#about">About Us</a></li>
                    <li><a href="#urban">Urban</a></li>
                    <li><a href="#folkgreen">Folkgreen</a></li>
                    <li><a href="#video">Video</a></li>
                    <li><a href="#services">Package</a></li>
                    <li><a href="#contact">Contact Us</a></li>
                    <li><a href="<?= base_url(); ?>login">Login/Register</a></li>
                  </ul>
                </div>
              </div>
            </nav>
          </div>

          <!-- sidenav -->
          <ul class="sidenav" id="mobile-nav">
            <li><a href="#about">About Us</a></li>
            <li><a href="#urban">Urban</a></li>
            <li><a href="#folkgreen">Folkgreen</a></li>
            <li><a href="#video">Video</a></li>
            <li><a href="#services">Package</a></li>
            <li><a href="#contact">Contact Us</a></li>
          </ul>

          <!-- slider -->
          <div class="slider">
              <ul class="slides">
              <li>
                  <img src="assets/img/slider/new1.jpg"> <!-- random image -->
                  <div class="caption center-align">
                    <h3>Your Cinemary</h3>
                    <h5 class="light grey-text text-lighten-3">Taking Your Imagination to The Next Level</h5>
                  </div>
                </li>
                <li>
                    <img src="assets/img/slider/new2.jpg"> <!-- random image -->
                    <div class="caption left-align">
                      <h3>Your Cinemary</h3>
                      <h5 class="light grey-text text-lighten-3">Taking Your Imagination to The Next Level</h5>
                    </div>
                </li>
                <li>
                    <img src="assets/img/slider/new3.jpg"> <!-- random image -->
                    <div class="caption right-align">
                      <h3>Your Cinemary</h3>
                      <h5 class="light grey-text text-lighten-3">Taking Your Imagination to The Next Level</h5>
                    </div>
                </li>
                <li>
                  <img src="assets/img/slider/8.jpg"> <!-- random image -->
                  <div class="caption center-align">
                    <h3>Your Cinemary</h3>
                    <h5 class="light grey-text text-lighten-3">Taking Your Imagination to The Next Level</h5>
                  </div>
                </li>
                <li>
                    <img src="assets/img/slider/9.jpg"> <!-- random image -->
                    <div class="caption left-align">
                      <h3>Your Cinemary</h3>
                      <h5 class="light grey-text text-lighten-3">Taking Your Imagination to The Next Level</h5>
                    </div>
                </li>
                <li>
                    <img src="assets/img/slider/10.jpg"> <!-- random image -->
                    <div class="caption right-align">
                      <h3>Your Cinemary</h3>
                      <h5 class="light grey-text text-lighten-3">Taking Your Imagination to The Next Level</h5>
                    </div>
                </li>
              </ul>
            </div>

            <!-- About Us -->
            <section id="about" class="about scrollspy">
              <div class="container">
                <div class="row">
                  <h3 class="center light grey-text text-darken-3 ">About Us</h3>
                  <div class="col m6 light">
                    <h5>We Know What We are Doing.</h5>
                    <p>We trying to make the best moment of your life, we design, we create, we implement.</p>
                  </div>
                  <div class="col m6 light">
                    <p>PHOTOGRAPHY</p>
                    <div class="progress">
                        <div class="determinate" style="width: 85%"></div>
                    </div>
                    <p>VIDEOGRAPHY</p>
                    <div class="progress">
                        <div class="determinate" style="width: 95%"></div>
                    </div>
                    <p>EDITING</p>
                    <div class="progress">
                        <div class="determinate" style="width: 90%"></div>
                    </div>
                  </div>
                </div>
              </div>
            </section>

            <!-- Urban Style Photography Parallax -->
            <section id='urban' class="urban grey darken-1 scrollspy">>
                
                <div class="container">
                  <h3 class="center light white-text">URBAN PHOTOGRAPHY</h3>
                  <div class="row">
                    <div class="col m4 s12 center">
                      <img src="assets/img/urban/urb1.jpg" class="responsive-img materialboxed">
                    </div>
                    <div class="col m4 s12 center">
                      <img src="assets/img/urban/urb2.jpg" class="responsive-img materialboxed">
                    </div>
                    <div class="col m4 s12 center">
                      <img src="assets/img/urban/urb3.jpg" class="responsive-img materialboxed">
                    </div>
                  </div>
                  <div class="row">
                    <div class="col m4 s12 center">
                      <img src="assets/img/urban/urban1.jpg" class="responsive-img materialboxed">
                    </div>
                    <div class="col m4 s12 center light" class="responsive-img materialboxed">
                      <h5>Urban Photography</h5>
                      <p> is an interdisciplinary field of visual practice concerned with 
                        the evocation and representation of urban spaces and the lives of those living, working and moving through such spaces.</p>
                      
                    </div>
                    <div class="col m4 s12 center">
                      <img src="assets/img/urban/urban4.jpg" class="responsive-img materialboxed">
                    </div>
                  </div>
                        
                </div>

             </section>

             <!-- Presets Urban  -->
             <section id="preseturban" class="grey darken-3">
              <div class="container preseturban">
                <div class="row">
                  <div class="col m6 s12 center light">
                      <img src="assets/img/preseturban/preset1.png" class="responsive-img materialboxed">
                  </div>
                  <div class="col m6 s12 center">
                      <h4 class="orange-text darken-4">ORANGE GREY PRESETS</h4>
                      <p class="white-text">IDR 20.000</p>
                      <p class="white-text">This effect will make the image visible, some color changes to orange and gray are very significant</p>
                  </div>
                </div>
                <div class="row">
                  <div class="col m6 s12 center light">
                    <img src="assets/img/preseturban/preset2.png" class="responsive-img materialboxed">
                  </div>  
                  <div class="col m6 s12 center">
                        <h4 class="green-text">GREENLIGHT GREY PRESETS</h4>
                        <p class="white-text">IDR 20.000</p>
                        <p class="white-text">This effect will make the image visible. Some color changes look like folkgreens, but this color will make it slightly brighter than folkgreen
                          </p>
                    </div>
                 </div>

              </div>
            </section>


             
             <!-- FolkGreen Parallax -->
             <section id='folkgreen' class="folkgreen grey darken-1 scrollspy">
                
                <div class="container">
                  <h3 class="center light white-text">FOLK GREEN</h3>
                  
                  <div class="row">
                    <div class="col m6 s12 center">
                      <img src="assets/img/folkgreen/folk1.jpg" class="responsive-img materialboxed">
                    </div>
                    <div class="col m6 s12 center">
                      <img src="assets/img/folkgreen/folk2.jpg" class="responsive-img materialboxed">
                    </div>
                  </div>

                  <div class="row">
                    <div class="col m6 s12 center light">
                      <h5 class="center light white-text">Folkgreen Photography</h5>
                      <p class="center light white-text"> Capturing the best interaction between you and the natures. Folk Photography has a calmy ambiance, make you feel relaxed. </p>
    
                      </div>
                    <div class="col m6 s12 center">
                        <img src="assets/img/folkgreen/folk3.jpg" class="responsive-img materialboxed">
                    </div>
                  </div>
                    
                  <div class="row">
                    <div class="col m6 s12 center">
                      <img src="assets/img/folkgreen/green2.jpg" class="responsive-img materialboxed">
                    </div>
                    <div class="col m6 s12 center">
                      <img src="assets/img/folkgreen/green5.jpg" class="responsive-img materialboxed">
                    </div>
                  </div>
                        
                </div>
              </section>
              

              <!-- Presets Folk  -->
             <section id="presetfolk" class="grey darken-3">
                <div class="container presetfolk">
                  <div class="row">
                    <div class="col m4 s12 center light">
                        <img src="assets/img/presetfolk/presetfolk1.png" class="responsive-img materialboxed">
                    </div>
                    <div class="col m4 s12 center">
                        <img src="assets/img/presetfolk/presetfolk2.png" class="responsive-img materialboxed">
                    </div>
                    <div class="col m4 s12 center">
                        <img src="assets/img/presetfolk/presetfolk3.png" class="responsive-img materialboxed">
                    </div>
                  </div>
                  <div class="row">
                      <div class="col m4 s12 center light">
                        <h4 class="green-text text-darken-3">FOLKGREEN PRESETS</h4>
                        <p class="white-text">IDR 20.000</p>
                      </div>
                      <div class="col m4 s12 center light">
                          <h4 class="green-text text-darken-3">DARK RED GREY PRESETS</h4>
                          <p class="white-text">IDR 20.000</p>
                      </div>
                      <div class="col m4 s12 center light">
                          <h4 class="green-text text-darken-3">FOLKGREEN LIGHT PRESETS</h4>
                          <p class="white-text">IDR 20.000</p>
                      </div>
                   </div>
  
                </div>
              </section>
           

              <!-- Video Parallax -->
                  
              <section id='video' class="video grey darken-1 scrollspy">
                      <div class="container">
                        <h3 class="center light white-text">VIDEOGRAPHY OF CINEMARY</h3>
                        <p class="center light white-text">These Are Some Footage From Cinemary</p>
                        <p class="center light white-text">Edited by Bagaz</p>
                        
                        <div class="row">
                          <div class="col m12 s12 center">
                              <div class="video-container">
                                  <iframe width="560" height="315" src="https://www.youtube.com/embed/nUJcIhigVQw" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                              </div>
                          </div>
                        </div> 
                        <div class="row">
                            <div class="col m12 s12 center">
                                <div class="video-container">
                                    <iframe width="560" height="315" src="https://www.youtube.com/embed/8AT8ztgdfcs" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                </div>
                            </div>
                        </div>      
                      </div>
                </section>
                  

              <!-- Services -->
              <section id="services" class="services grey lighten-3 scrollspy">
                <div class="container">
                  <div class="row">
                    <h2 class="light center grey-text text-darken-3">START YOUR OWN IMAGINATION</h2>
                    <p class="light center grey-text text-darken-3">Select Your Own Packages.</p>
                    <div class="col m4 s12">
                      <div class="card-panel center">
                        <i class="material-icons large">local_atm</i>
                        <h4>RICH</h4>
                        <h5>IDR 200.000</h5>
                        <p>Package Includes: </p>
                        <p>Choosing your own themes</p>
                        <p>All Photos Edited + Video</p>
                      </div>
                    </div>
                    <div class="col m4 s12">
                      <div class="card-panel center">
                          <i class="material-icons large">loyalty </i>
                          <h4>MIDDLE</h4>
                          <h5>IDR 150.000</h5>
                          <p>Package Includes: </p>
                          <p>Choosing your own themes</p>
                          <p>Select 50 Edited Photos</p>
                      </div>
                    </div>
                    <div class="col m4 s12">
                        <div class="card-panel center">
                            <i class="material-icons large">money_off</i>
                            <h4>LITE</h4>
                            <h5>IDR 100.000</h5>
                            <p>Package Includes: </p>
                            <p>Choosing your own themes</p>
                            <p>Select 30 Edited Photos</p>
                        </div>
                      </div>
                  </div>
                </div>
              </section>

              <!-- Contact Us -->
              <section id='contact' class="contact grey darken-1 scrollspy">
                <div class="container">
                  <h3 class="white-text center">Contact Us</h3>
                  <div class="row">
                    <div class="col m5 s12">
                        <ul class="collection with-header">
                          <li class="collection-item"><i class="tiny material-icons">location_on</i> Jl. Ceger Raya, Mega Persada Residence C-10, Tangerang Selatan, Banten, Jawa Barat, Indonesia</li>
                          <li class="collection-item"><i class="tiny material-icons">phone</i> 08569885258</li></li>
                          <li class="collection-item"><i class="tiny material-icons">email</i> tugassmartweb@gmail.com</li></li>
                        </ul>
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3966.017263569511!2d106.7239142143106!3d-6.261455863043355!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69f07fc0c2753f%3A0xb732b8bc583df6fb!2sMega+Persada+Residence!5e0!3m2!1sen!2sid!4v1561177550969!5m2!1sen!2sid" width="370" height="350" frameborder="0" style="border:0" allowfullscreen></iframe>
                    </div>
                    <div class="col m7 s12">
                    <form class="contact" method="post" action="<?= base_url('user/contact'); ?>">
                          <div class="card-panel">
                            <h5>Feel Free to Ask a Question</h5>
                            <?= $this->session->flashdata('message'); ?>
                            <div class="input-field">
                              <input type="text" name="name" id="name" required class="validate">
                              <label for="name">Name</label>
                            </div>
                            <div class="input-field">
                                <input type="email" name="email" id="email" class="validate">
                                <label for="email">Email</label>
                            </div>
                            <div class="input-field">
                                <input type="text" name="phone" id="phone">
                                <label for="phone">Phone</label>
                            </div>
                            <div class="input-field">
                                <textarea name="question" id="question" class="materialize-textarea"></textarea>
                                <label for="question">Question</label>
                            </div>
                            <button type="submit" class="btn grey darken-1">Send</button>
                          </div>
                        </form>
                      </div>
                  </div>
                </div>
              </section>




              <!--Footer-->
              <footer class="page-footer grey darken-3">
                  <div class="container">
                    <div class="row">
                      <div class="col l6 s12">
                        <h5 class="white-text">Your Cinemary</h5>
                        <p class="grey-text text-lighten-4">We are a team of college students working on this project like it's our full time job. Any amount would help support and continue development on this project and is greatly appreciated.</p>
              
              
                      </div>
                      <div class="col l3 s12">
                        <h5 class="white-text">Connect</h5>
                        <ul>
                          <li><a href="https://www.instagram.com/yourcinemary/"><img src="https://img.icons8.com/color/48/000000/instagram-new.png"></a></li>
                        </ul>
                      </div>
                    </div>
                  </div>
                  <div class="footer-copyright">
                    <div class="container">
                      <p>Taking Your Imagination to the Next Level</p>
                    </div>
                  </div>
                </footer>

              


      <!--JavaScript at end of body for optimized loading-->
      <script type="text/javascript" src="assets/js/materialize.min.js"></script>


      <script>
        const sideNav = document.querySelectorAll('.sidenav');
        M.Sidenav.init(sideNav);

        const slider = document.querySelectorAll('.slider');
        M.Slider.init(slider,{
          indicators : false,
          height : 500,
          transition : 600,
          interval : 2000

        } );

        const parallax = document.querySelectorAll('.parallax');
        M.Parallax.init(parallax);

        const materialbox = document.querySelectorAll('.materialboxed');
        M.Materialbox.init(materialbox);

        const scrollspy = document.querySelectorAll('.scrollspy');
        M.ScrollSpy.init(scrollspy, {
          scrollOffset:60
        });

        

        // // preloader
        // document.querySelector('.navbar-fixed').style.display="none";
        // document.querySelector('.sidenav').style.display="none";
        // document.querySelector('.slider').style.display="none";
        // document.querySelector('.about').style.display="none";
        // document.querySelector('.parallax-container').style.display="none";
        // document.querySelector('.preseturban').style.display="none";
        // document.querySelector('.folkgreen').style.display="none";
        // document.querySelector('.presetfolk').style.display="none";
        // document.querySelector('.videoparallax').style.display="none";
        
        // document.querySelector('.div1').classList.add('progress');
        // document.querySelector('.div2').classList.add('indeterminate');

        // setTimeout(function(){
        //   document.querySelector('.div1').classList.remove('progress');
        //   document.querySelector('.div2').classList.remove('indeterminate');
        //   document.querySelector('.preloader').style.display="none";
        //   document.querySelector('.navbar-fixed').style.display="block";
        //   document.querySelector('.sidenav').style.display="block";
        //   document.querySelector('.slider').style.display="block";
        //   document.querySelector('.about').style.display="block";
        //   document.querySelector('.parallax-container').style.display="block";
        //   document.querySelector('.preseturban').style.display="block";
        //   document.querySelector('.folkgreen').style.display="block";
        //   document.querySelector('.presetfolk').style.display="block";
        //   document.querySelector('.videoparallax').style.display="block";
        // },4000);



      </script>
    </body>
  </html>
        
<!--  -->
<!--  -->