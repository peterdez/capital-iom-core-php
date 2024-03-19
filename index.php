<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Capital-iom</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link href="https://fonts.googleapis.com/css2?family=Lora:ital,wght@0,400..700;1,400..700&family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="style-home.css"> 
</head>
  <body>
  <div id="myOverlay" class="overlay">
  <span class="closebtn" onclick="closeSearch()" title="Close Overlay">×</span>
  <div class="overlay-content">
    <form action="/action_page.php">
      <input type="text" class="rounded-start" placeholder="Search.." name="search">
      <button type="submit" class="rounded-end"><i class="fa fa-search"></i></button>
    </form>
  </div>
</div>
  <?php include_once 'navigation_home.php'; ?>
  <section id="hero_section" class="">
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center my-5 text-white">
                <h1 class="title lora-fnt">Invest with us. Bank with us</h1>
                <h2 class="subtitle lora-fnt">Grow with us.</h2>
                <p class="w-50 m-auto fs-5">Explore the ultimate suite of financial services designed to simplify asset 
                    and cash management for businesses, intermediaries and high net worth individuals.</p>
            </div>
            <div class="col-md-12 boxes">
                <div class="row gx-4">
                    <div class="col-md-4">
                    <div class="p-4 box bg-white rounded-3 mb-2">
                        <h5>Investment Platform</h5>
                        <p>
                        Use our international investment platform to place your own 
                        trades across an almost unlimited universe of assets.
                        </p>
                        <button type="button" class="btn btn-primary">Learn more</button>
                    </div>
                    </div>
                    <div class="col-md-4">
                    <div class="p-4 box bg-white rounded-3 mb-2">
                        <h5>Investment Management</h5>
                        <p>Let us manage your investments. Select the optimal discretionary strategy to meet you or 
                            your client's long-term financial goals.</p>
                            <button type="button" class="btn btn-primary">Learn more</button>
                    </div>
                    </div>
                    <div class="col-md-4">
                    <div class="p-4 box bg-white rounded-3 mb-2">
                        <h5>Banking</h5>
                        <p>With competitive rates of interest and fast account opening, we serve corporates, 
                            trusts and high net worth individuals.</p>
                        <button type="button" class="btn btn-primary">Learn more</button>
                    </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
  </section>

  <footer class="mt-5 py-5">
    <div class="container">
    <div id="footer_top" class="row">
        <div class="col-md-6">
        <a class="navbar-brand" href="#"><img src = "img/capital-iom_Logo.svg" class="w-20 mb-4" alt="My Happy SVG"/></a>
            <div class="social-box">
            <a
            class="btn btn-secondary"
            href="#!"
            role="button"
            ><i class="fa fa-linkedin"></i
            ></a>
            <a
            class="btn btn-secondary"
            href="#!"
            role="button"
            ><i class="fa fa-facebook"></i
            ></a>
            <a
            class="btn btn-secondary"
            href="#!"
            role="button"
            ><i class="fa fa-instagram"></i
            ></a>
            <a
            class="btn btn-secondary"
            href="#!"
            role="button"
            ><i class="fa fa-twitter"></i
            ></a>
            </div>
        </div>
        <div class="col-md-6 d-flex justify-content-end">
            <div class="footer-box">
            <h6 class="text-white fw-semibold">Services</h6>
            <ul class="list-group list-group-flush">
            <li class="list-group-item"><a href="">Investment<br>Platform</a></li>
            <li class="list-group-item"><a href="">Investment<br>Management</a></li>
            <li class="list-group-item"><a href="">Corporate<br>Banking</a></li>
            </ul>
           </div>
           <div class="footer-box">
           <h6 class="text-white fw-semibold">Company</h6>
            <ul class="list-group list-group-flush">
            <li class="list-group-item"><a href="">About us</a></li>
            <li class="list-group-item"><a href="">Blog</a></li>
            <li class="list-group-item"><a href="">People</a></li>
            </ul>
           </div>
           <div class="footer-box">
           <h6 class="text-white fw-semibold">Resources</h6>
            <ul class="list-group list-group-flush">
            <li class="list-group-item"><a href="">Investment<br>Platform<br>Resources</a></li>
            <li class="list-group-item"><a href="">Investment<br>Management<br>Resources</a></li>
            <li class="list-group-item"><a href="">Capital International<br>Bank Resources</a></li>
            </ul>
           </div>
        </div>

        <div id="footer_bottom" class="row mt-5">
            <div id="footer_description" class="col-md-6">
                <p>Regulated activities are carried out on behalf of the Capital International Group
                     by its licensed member companies. Full company details, website terms and 
                     privacy & cookie notice can be viewed <a href="#">here</a>.</p>
                <p id="copyright">© Capital International Group, 2024</p>
            </div>
            <div id="cookies_pref" class="col-md-6 text-end">
                <p><a href="" class="fw-semibold">Cookie Preferences</a></p>
            </div>
        </div>
    </div>
    </div>
  </footer>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
<script>
function openSearch() {
    document.getElementById("myOverlay").style.display = "block";
}

function closeSearch() {
    document.getElementById("myOverlay").style.display = "none";
}
</script>  
</body>
</html>