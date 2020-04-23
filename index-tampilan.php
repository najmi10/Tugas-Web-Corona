<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Self Checkup Covid-19</title>

    <!-- CSS Bootstraps -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous" />
  </head>
      <style>
    body {
    margin: 0;
    padding: 0;
}


.navbar {
    padding: 10px 0;
    background-image: #333333;
}

.navbar-brand {
    font-weight: 750;
    text-transform: uppercase;
    font-size: 2em;
    color: #262626;
}

.nav-item {
    font-weight: 750;
    text-transform: uppercase;
}

/* header css */
#header {
  background-image: linear-gradient(to bottom, #33e9b9, #42edc5, #51f0d1, #60f4db, #70f7e5, #81f9f0, #93faf8, #a5fbff, #c1faff, #dffaff, #f5fbff, #ffffff);
    background-position: center;
    background-size: cover;
    width: 100%;
    height: 100vh;
    margin: 0;
    padding-top: 80px;
  }

  #header h1 {
    margin: 0 20px 10px 0;
    font-size: 65px;
    font-weight: 700;
    line-height: 56px;
    color: black;
    padding-top: 15px;
  }
  
  #header h2 {
    padding-top: 15px;
    color: #484848;
    margin: 0 20px 0 0;
    font-size: 20px;
  }

  
  #header .btn-get-started {
    font-family: "Raleway", sans-serif;
    font-weight: 500;
    font-size: 16px;
    letter-spacing: 1px;
    display: inline-block;
    padding: 10px 30px;
    border-radius: 50px;
    transition: 0.5s;
    color: #4B0082	;
    border: 2px solid #4B0082	;
  }
  
  #header .btn-get-started:hover {
    background: #24c9c0;
    color: #fff;
    border: 2px solid #24c9c0;
  }
  
  #header .animated {
    animation: up-down 2s ease-in-out infinite alternate-reverse both;
  }
  
  .img-fluid {
      padding-left: 4.5em;
      width: 700px;
  }

  .img-hmm {
      padding-left: 4.5em;
      width: 400px;
  }
  
  /* About CSS */
  #about {
    width: 100%;
    height: 80vh;
    margin: 0;
    padding-top: 0;
    box-shadow: 0px 10px 20px #73f5ad; 
  }

  #about h2 {
    text-align: center;
    font-weight: 800;
    padding: 20px;
    color: #f573ca;
}

#about h3 {
    font-weight: 800;
    color: #000000;
}

/* footer */
#footer {
    background-color: #708090;
    width: 100%;
    height: 25vh;
    margin: 0;
    padding: 0;
}

#footer h3 {
    margin-top: 1.5em;
    width: 900px;
}

#footer .tentang {
    color: #FFB6C1	;
}

#footer a {
    color: #FFB6C1	;
}
</style>

<body>
<section id="mynav">
    <nav class="navbar navbar-expand-lg navbar-light bg-light navbar-static-top">
        <div class="container">
        <a class="navbar-brand ml-4" href="#">COVID-19</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ml-auto">
            <li class="nav-item mr-4">
                <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link mr-4" href="http://localhost/corona_web/tentang/about.php">About</a>
            </li>
            <li class="nav-item">
                <a class="nav-link mr-4" href="http://localhost/corona_web/check/cobaform">Test</a>
            </li>
            <li>
            <a href="http://localhost/corona_web/login/logout.php"><button class="btn btn-outline-success my-2 my-sm-0" type="submit">Logout</button></a>  
            </li>
            </ul>
            </form>
        </div>
        </div>
        </nav> 
        </section>
        <!-- end navbar -->

    <!-- Section Header -->
    <section id="header">
        <div class="container">
        <div class="row">
            
            <div class="col-lg-6 pt-5 pt-lg-0 order-2 order-lg-1 d-flex flex-column justify-content-center">
                <h1 data-aos="fade-right">Self Checkup Coronavirus</h1>
                <h2 data-aos="fade-right" data-aos-delay="400"><p>Saat ini dengan mulai munculnya ODP, PDP dan kasus Positif COVID-19 di Indonesia, tentunya self-assesment COVID-19 akan dibutuhkan oleh masyarakat. Self assesment ini adalah alat sederhana yang bisa membantu menentukan apakah Anda sehat-sehat saja atau ada gejala yang memerlukan penilaian, pemeriksaan dan pengujian lebih lanjut untuk COVID-19.
                Alat self assesment diadaptasi dari Self Assesment COVID-19 dari British Columbia, Kanada. Anda dapat menyelesaikan penilaian ini untuk diri sendiri maupun orang lain.</p>
                </h2>
                <div data-aos="fade-left" data-aos-delay="800">
                    <a href="http://localhost/corona_web/check/cobaform" class="btn-get-started scrollto ">CHECK UP</a>
                </div>
                </div>
                <div class="col-lg-6 order-1 order-lg-2 hero-img" data-aos="fade-left" data-aos-delay="200">
                <img src="gambar/wearing_a_mask_monochromatic.svg" class="img-fluid animated" alt="">

            </div>
        </div>
    </div>
    </section>
    <!-- end header -->

    <!-- section about -->
    <section id="about">
        <div class="container">

        <div class="row">

            <div class="col-lg-6 order-1 order-lg-1 hero-img" data-aos="fade-left" data-aos-delay="200">
                <img src="gambar/21.jpg" alt="" class="img-hm"> <!-- fotomu kekno kene -->
            </div>

            <div class="col-lg-6 pt-5 pt-lg-0 order-2 order-lg-2 d-flex flex-column justify-content-center">
                <h2>About Me</h2>
                <p><h3>Namaku Naisya Najmi. Bersekolah di SMK Telkom Malang jurusan Rekayasa Perangkat Lunak. Saya berasal dari Kab.Tulungagung, Jawa Timur.</h3></p>
            </div>

            </div>
        </div>
    </section>
    <!-- end About -->

    <!-- Section footer  -->
    <section id="footer">
        <div class="footer">
        </div>
        <div class="container">
            <div class="row">
            <div class="col-lg-6 order-1 order-lg-1 hero-img">
                <h1>Follow Us</h1>
                <ul class="tentang">
                    <li><a href="https://www.instagram.com/naisya.ca/?hl=id"><h2>Instagram</h2></a></li>
                    <li><a href="https://twitter.com/NaisyaNajmi"><h2>Twitter</h2></a></li>
                    <li><a href="https://m.facebook.com/naisya.caca.121"><h2>Facebook</h2></a></li>
                </ul>
            </div>
            </div>
        </div>
    </section>

    <!-- JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="js/main.js"></script>


</body>
</html>