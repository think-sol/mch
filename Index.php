<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="css/animate.css" />
	  <link rel="stylesheet" href="aos/dist/aos.css" />

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="./Css/Index.css" crossorigin="anonymous">
    <link rel="stylesheet" href="./Css/Navbar.css" crossorigin="anonymous">
    <link rel="stylesheet" href="./Css/Footer.css" crossorigin="anonymous">

    <title>Hello, world!</title>
  </head>
  <body>
    <?php include("./Navbar.php") ?>
    <div>
        <!----Image Slider----->
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel" style="background-color:black">
            <ol class="carousel-indicators">
              <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
              <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
              <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
              <div class="carousel-item active">
                  <img class="d-block w-100" src="./Images/carousel1.jpg" style="height:600px;opacity:0.4"  alt="First slide">
                  <div class="carousel-caption d-none d-md-block">
                    <h1 class="animated bounceInLeft delay-1ms">Government Affairs</h1>
                  </div>
              </div>
              <div class="carousel-item">
                <img class="d-block w-100" src="./Images/carousel2.jpg" style="height:600px;opacity:0.4" alt="Second slide">
                <div class="carousel-caption d-none d-md-block">
                    <h1 class="animated fadeIn delay-1s">Public Relations</h1>
                </div>
              </div>
              <div class="carousel-item">
                <img class="d-block w-100" src="./Images/carousel3.jpg" style="height:600px;opacity:0.4" alt="Third slide">
                <div class="carousel-caption d-none d-md-block">
                    <h1 class="animated bounceInRight delay-1ms">Strategic Planning</h1>
                </div>
              </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="sr-only">Next</span>
            </a>
        </div>

        <div style="row ">
          <div class="about-section">
            <div class="container-fluid">
              <div class="col-xl-12 col-sm-12" style="display:flex;justify-content:center" >
                  <div class="about-body">
                    <h2 data-aos="fadeUp" style="color:#1F9D56">ABOUT MCH</h2>
                    <p data-aos="zoom-in-up" data-aos-duration="1500" style="font-size:20px;font-weight:400"><b>MCH</b> is a full – service, woman-owned, minority advocacy firm that specializes in government affairs, public relations, 
                        strategic planning, and communications. Drawing upon years of experience in the government, corporate, grassroots, 
                        political and educational arenas, MCH provides professional support and innovative solutions to meet the needs of our
                        diverse client base. </p>
                  </div>
              </div>
            </div>
          <div>
        </div>

        <div class="parallax"></div>

        <div style="background-color:#eeeeee">
          <div class="container formula-container" style="padding-top:20px;padding-bottom:50px">
            <div class="row">
                <div class="col-sm-12">
                  <h2 data-aos="fade-right" data-aos-duration="1200" style="color:#1F9D56">OUR GOAL:</h2>
                  <p data-aos="fade-left" data-aos-duration="1500" style="font-size:20px;font-weight:400"> 
                      Our goal is to empower and engage progressive non-government organizations, corporations and government 
                      agencies that want to further expand their mission and vision, creating change and positively impacting 
                      communities and public policy.
                  </p>
                </div>
            </div>
            <div class="row formula-section">
                <div class="col-sm-12">
                  <h3 data-aos="fade-in" data-aos-duration="1200" style="color:#1F9D56">OUR FORMULA FOR SUCCESS:</h3>
                  <div style="display:flex;align-items:center;justify-content:space-between;margin-top:50px">
                        <div data-aos="fade-in-left" data-aos-duration="1400" class="box">
                          <div class="formula-box" title="Advocacy" data-toggle="collapse" href="#shout" role="button" aria-expanded="false" aria-controls="shout">
                              <img src="./Images/shout.png" />
                          </div>
                          <p>Advocacy</p>
                        </div>
                        <h1 data-aos="fade-in-left" data-aos-duration="1600">+</h1>
                        <div data-aos="fade-in-left" data-aos-duration="1800" class="box">
                          <div class="formula-box" title="Access" data-toggle="collapse" href="#access" role="button" aria-expanded="false" aria-controls="access">
                            <img src="./Images/access.png" />
                          </div>
                          <p>Access</p>
                        </div>
                        <h1 data-aos="fade-in-left" data-aos-duration="2000">+</h1>
                        <div data-aos="fade-in-left" data-aos-duration="2200" class="box">
                          <div class="formula-box" title="Strategic Planning" data-toggle="collapse" href="#planning" role="button" aria-expanded="false" aria-controls="planning">
                            <img src="./Images/planning.png" />
                          </div>
                            <p>Strategic Planning</p>
                        </div>
                        <h1 data-aos="fade-in-left" data-aos-duration="2400">=</h1>
                        <div data-aos="fade-in-left" data-aos-duration="2600" class="box">
                          <div class="formula-box" title="Innovation">
                            <img src="./Images/innovation.png" />
                          </div>
                          <p>Innovation</p>
                        </div>
                  </div>
                </div>
            </div>
            <div class="row">
              <div class="col-sm-12">
                <div class="collapse multi-collapse"  id="shout">
                  <div class="card card-body" style="background-color:#eeeeee">
                    <h3 style="color:#1F9D56">Advocacy</h3>
                    <p>
                        MCH engages, enables and empowers clients to create positive change, impact the political landscape and activate communities. 
                         MCH understands that effective advocacy is an integral tool for our client’s success.  
                    </p>
                  </div>
                </div>
              </div>
              <div class="col-sm-12">
                <div class="collapse multi-collapse" id="access">
                  <div class="card card-body" style="background-color:#eeeeee">
                    <h3 style="color:#1F9D56">Access</h3>
                    <p>
                        The breadth and depth of the diverse networks of MCH and our partners further allow us to leverage resources and access 
                        for our clients.  With a myriad of relationships that range globally and across industries, MCH has developed strong 
                        relationships key leaders and stakeholders within international governments, private and public sector, academic institutions, 
                        grassroots organizations as well as sports and entertainment arenas 
                    </p>
                  </div>
                </div>
              </div>
              <div class="col-sm-12">
                <div class="collapse multi-collapse" id="planning">
                  <div class="card card-body" style="background-color:#eeeeee">
                    <h3 style="color:#1F9D56">Strategic Planning</h3>
                    <p>
                        Our integrated approach includes engagement and communication with the client’s key stakeholders and decision-makers
                         to develop a realistic plan of action with goals and outcomes that builds the client’s capacity, increases awareness 
                         and meets the complex needs of our clients.s 
                    </p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>


        <div class="parallax"></div>


        <div style="padding-top:30px" class="clients-and-expertise-container">
          <div class="container-fluid clients-and-expertise-section">
          <div class="row clients-and-expertise-body" style="margin-bottom:30px">
              <div class="col-sm-6">
                    <img data-aos='fade-right' data-aos-easing="ease" data-aos-duration="1500" src="./Images/expertise.png" class="image"/>
              </div>
              <div class="col-sm-6" style="display:flex;justify-content:flex-end">
                    <img data-aos="fade-left" data-aos-easing="ease" data-aos-duration="1500" src="./Images/clients.png" class="image" />
              </div>
          </div>
          </div>
        <div>
        

        
    </div>
    <?php include("./Footer.php") ?>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  
    <script src="aos/dist/aos.js"></script>
    <script>
      AOS.init();
    </script>

    <!-- The core Firebase JS SDK is always required and must be listed first -->
<script src="https://www.gstatic.com/firebasejs/7.12.0/firebase-app.js"></script>

<!-- TODO: Add SDKs for Firebase products that you want to use
     https://firebase.google.com/docs/web/setup#available-libraries -->
<script src="https://www.gstatic.com/firebasejs/7.12.0/firebase-analytics.js"></script>

<script>
  // Your web app's Firebase configuration
  var firebaseConfig = {
    apiKey: "AIzaSyCLlCCwss4tj-hGfWYdPS0686u-3k9CG-Y",
    authDomain: "mch-strategies.firebaseapp.com",
    databaseURL: "https://mch-strategies.firebaseio.com",
    projectId: "mch-strategies",
    storageBucket: "mch-strategies.appspot.com",
    messagingSenderId: "283109009646",
    appId: "1:283109009646:web:c025af272301008c646bff",
    measurementId: "G-PTHPDFP93L"
  };
  // Initialize Firebase
  firebase.initializeApp(firebaseConfig);
  firebase.analytics();
</script>
  </body>
</html>