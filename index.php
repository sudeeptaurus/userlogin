<?php

session_start();

// if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] != true) {
//   header("location: login.php");
//   exit;
// }

$page = 'home';
include "includes/header.php";
include "includes/navigation.php";


?>

<!-- Page Content -->
<div class="container">

  <!-- Welcome - ?php echo $_SESSION['email']; ? -->

  <!-- Heading Row -->
  <div class="row align-items-center my-5">

    <div class="col-lg-8">

      <div>
        <div id="carouselExampleFade" class="carousel slide carousel-fade" data-ride="carousel">
          <div class="carousel-inner">
            <div class="carousel-item active">
              <img src="./img/5.png" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
              <img src="./img/6.png" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
              <img src="./img/4.jpg" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
              <img src="./img/3.jpeg" class="d-block w-100" alt="...">
            </div>
          </div>
          <a class="carousel-control-prev" href="#carouselExampleFade" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
          </a>
          <a class="carousel-control-next" href="#carouselExampleFade" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
          </a>
        </div>
      </div>

    </div>
    <!-- /.col-lg-8 -->
    <div class="col-lg-4">
      <h1 class="font-weight-light align-content-center"><b>ScienceHiFY</b></h1>
      <h5>To Catalyse the Growth of Science</h5>
      <p>The achievements of Indian science are national assets. A platform which treasures and displays them
        collectively is assured of providing the necessary guidance and inspiration for the younger generation. This
        platform helps in the enrichment and widening the usefulness of this great estate.</p>
      <!-- <a class="btn btn-primary" href="login.html">Subscribe</a> -->
    </div>



    <!-- /.col-md-4 -->
  </div>
  <!-- /.row -->
  <div class="row">
    <div class="alert alert-success col-lg-4" role="alert">
      <h4 class="alert-heading">Thought of the Day!</h4>
      <hr>
      <p>“I seem to have been only like a boy playing on the seashore, and diverting myself in now and then finding a smoother pebble or a prettier shell than ordinary, whilst the great ocean of truth lay all undiscovered before me.”
      </p>

      <p class="mb-0">– Isaac Newton</p>
    </div>
    <div class="col-lg-1"></div>

    <div class="col-lg-3">
      <iframe class="my-0" src="http://skepticalscience.net/widgets/heat_widget/heat_widget.htm?yr=2009&um=a&sk=roundtab_c9641c.css&fc=%23934914&bc=%23c9641c&tc=%23ffffff" style="border: medium none; background-color: transparent; overflow: hidden;" frameborder="0" height="310" scrolling="no" width="206" id="sksIframe"></iframe>
    </div>




    <div class="col-lg-4">
      <!-- start sw-rss-feed code -->
      <script type="text/javascript">
        rssfeed_url = new Array();
        rssfeed_url[0] = "https://www.sciencedaily.com/rss/top/science.xml";
        rssfeed_frame_width = "350";
        rssfeed_frame_height = "300";
        rssfeed_scroll = "on";
        rssfeed_scroll_step = "6";
        rssfeed_scroll_bar = "off";
        rssfeed_target = "_blank";
        rssfeed_font_size = "12";
        rssfeed_font_face = "";
        rssfeed_border = "on";
        rssfeed_css_url = "https://feed.surfing-waves.com/css/style2a.css";
        rssfeed_title = "on";
        rssfeed_title_name = "";
        rssfeed_title_bgcolor = "#3366ff";
        rssfeed_title_color = "#fff";
        rssfeed_title_bgimage = "";
        rssfeed_footer = "off";
        rssfeed_footer_name = "rss feed";
        rssfeed_footer_bgcolor = "#fff";
        rssfeed_footer_color = "#333";
        rssfeed_footer_bgimage = "";
        rssfeed_item_title_length = "50";
        rssfeed_item_title_color = "#666";
        rssfeed_item_bgcolor = "#fff";
        rssfeed_item_bgimage = "";
        rssfeed_item_border_bottom = "on";
        rssfeed_item_source_icon = "off";
        rssfeed_item_date = "off";
        rssfeed_item_description = "on";
        rssfeed_item_description_length = "120";
        rssfeed_item_description_color = "#666";
        rssfeed_item_description_link_color = "#333";
        rssfeed_item_description_tag = "off";
        rssfeed_no_items = "0";
        rssfeed_cache = "337ed0529de55c75cba009f56c638ed9";
      </script>
      <script type="text/javascript" src="//feed.surfing-waves.com/js/rss-feed.js"></script>
      <!-- The link below helps keep this service FREE, and helps other people find the SW widget. Please be cool and keep it! Thanks. -->
      <div style="color:#ccc;font-size:10px; text-align:right; width:300px;">powered by <a href="https://taurusonline.net" rel="noopener" target="_blank" style="color:#ccc;">Taurus Hard Soft Solutions</a></div>
      <!-- end sw-rss-feed code -->

    </div>
  </div>

  <!-- Call to Action Well -->
  <div class="row">
    <div class="col-lg-7">
      <div class="card my-5 py-4 text-left">
        <div class="card-body" id="collapse">
          <p class="text-dark m-0">Ancient and medieval India had a flourishing culture with rich scientific
            traditions
            and an advanced society. In fact, several Indian concepts of those times were later absorbed into modern
            science as we understand it today. In addition, modern town planning, drainage and grain storage systems,
            bread-making, copper and bronze craftsmanship, maritime structures, including ship building, agricultural
            techniques and practices during the Indus Valley Civilization (the youngest and largest of three ancient
            civilizations) have astonished the world with their sophistication. Astronomical and mathematical
            achievements, such as the system of decimal place value numeration, the concept of zero, surgical
            practices,
            iron metallurgy – all these are well documented and are widely accepted to have an origin in India.</p>
          <br></br>
          <p class="text-dark m-0">By the first quarter of the 20th century, there were a number of scientific
            establishments, universities, colleges and research institutes where eminent Indian scientists were
            engaged
            in
            practically every field of education, science & technology, industries and services. Continuous efforts
            were
            made to increase and widen the base of scientific education and research in the country. Several brilliant
            Indian scientists with vision such as C.V. Raman, K.S. Krishnan, K.R. Ramanathan, J.C. Bose, S.N. Bose,
            M.N.
            Saha, P.C. Ray, P.C. Mahalanobis, J.C. Ghosh, J.N. Mukherjee, S.S. Bhatnagar, S.L. Hora, S.K. Mitra,
            BirbalSahni, K.N. Bahl, D.M. Bose, U.N. Brahmachari, R.N. Chopra, D.N. Wadia and many others – were ready
            to
            take up leadership roles as a mission to make the country scientifically rich and internationally
            competitive.
          </p>
          <br></br>
          <div id="summary">
            <p class="text-dark m-0 collapse" id="collapseSummary">India could feel proud for its unique contributions
              to
              science in the ancient past.
              However various factors caused a setback to scientific research in India. Despite the fact that we
              produce
              thousands of science graduates every year, at present, the real research, development and inventions are
              comparatively lower.
              <br></br>
              Although Indian science is in a position to take up the challenges of diverse
              research
              and has several competent and highly qualified scientists, lacks resources and an authoritative
              projection
              of
              its achievements. Thus the necessity of a platform that could speak on behalf of the Indian scientific
              community is considered of vital importance. The achievements of India in science are national assets.
              And
              a
              platform which treasures and displays them collectively is assured of providing the necessary guidance
              and
              inspiration for the younger generation, to put forth greater exertions in order to enrich and widen the
              usefulness of this great estate.


              <br></br>
              Today, science has emerged as the most revolutionary, co-operative activity of
              mankind.
              In the scientific method lies a validity and universality which transcends any other principle devised
              by
              man.
              Science seeks and discovers, cutting across sectarian, national and ideological frontiers. It fosters
              co-operation and creates a value system which nurtures man’s highest capabilities and aspirations.</p>

            <p></p><a class="collapsed" data-toggle="collapse" href="#collapseSummary" aria-expanded="false" aria-controls="collapseSummary">Read More/Read Less</a></p>
          </div>

          <p class="text-dark m-0">Some of the academies in India working for the promotion of Science are:
            <br></br>
            <p>Indian Academy of Sciences, Bengaluru- <a href="https://www.ias.ac.in/Home/" class="text-primary" target="_blank">https://www.ias.ac.in/Home/</a></p>
            <p>The Indian National Science Academy in New Delhi- <a href="http://insaindia.res.in/index.php" class="text-primary" target="_blank">http://insaindia.res.in/index.php</a></p>
            <p>The National Academy of Sciences, Allahabad, India- <a href="http://www.nasi.org.in/index.htm" class="text-primary" target="_blank">http://www.nasi.org.in/index.htm</a></p>
          </p>
        </div>
      </div>
    </div>


    <br>
    <div class="col-lg-5">

      <div class="card my-5 py-4">



        <div class="card-body">
          <h2 class="card-title">Why Journals?</h2>
          <!-- <p class="card-text">Recent Releases</p> -->


          <p class="text-dark m-0">Journals provide factual information, with peer reviewed articles to ensure the
            standard of quality and scientific validity. Many experts and Scientists, write about their research
            findings and experiments which would give an insight about the topic. They also drive your zeal to write
            an enriching work. It sharpens your authority with your chosen topics. Topics can be viewed from various
            angles, hence formulating your individual opinion and conclusion. Journals would help you get a way out
            into the world filled with innumerable activities and limitless thoughts.</p>
        </div>

        <div class="card-footer">
          <a href="currentscience.php" class="btn btn-primary btn-block">More Info</a>
        </div>
      </div>

      <div class="card my-5 py-4">

        <div class="card-body">
          <!-- <h2 class="card-title">Subscribe</h2> -->
          <p class="card-text text-center"><b>Here's an opportunity for you to Subscribe to some enlightening
              Journals for a year
              or
              more or a lifetime. Get your personal copy at your door step after every fortnight!</b></p>
        </div>

        <div class="card-footer">
          <?php
          if ($loggedin) {
            echo '<a href="subscriptions.php" class="btn btn-primary btn-block">Subscribe</a>';
          } else {
            echo '<a href="login.php" class="btn btn-primary btn-block">Subscribe</a>';
          }
          ?>
        </div>
      </div>

    </div>

  </div>

</div>

<?php
include "includes/footer.php";

?>