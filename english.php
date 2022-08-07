<?php
$title = $name . " sent a Tiranga to you on the occasion of the 75th Independence day. You also don't keep it to yourself Send it to all your friends.";
$summery = "Azadi ka Amrit Mahotsav is a 75-week grand celebration launched by honorable prime minister Shri Narendra Modi to mark 75 years of Independence";
$alt = "Azadi Ka Amrit Mahotsav, 75th Year of Independence Day of India";
?>
<!DOCTYPE html>
<html prefix="og: https://ogp.me/ns#" lang="en">

<head>
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="<?= base_url("style.css"); ?>" />

  <!-- Meta Tags -->
  <title><?= $title; ?></title>
  <meta name="keywords" content="Azadi Ka Amrit Mahotsav, azadi ka amrut mahotsav, amrit mahotsav, amrit mahotsav.nic.in, amrit mahotsav 2022, azadi ka amrit mahotsav website,azadi ka amrut mahotsav website" />
  <meta name="description" content="<?= $summery; ?>" />
  <meta property="og:title" content="<?= $title; ?>" />
  <meta property="og:site_name" content="<?= $alt; ?>" />
  <meta property="og:url" content="<?= base_url(); ?>" />
  <meta property="og:image" content="<?= base_url("images/75eng.png"); ?>" />
  <meta property="og:image:secure_url" content="<?= base_url("images/75eng.png"); ?>" />
  <meta property="og:image:type" content="image/png" />
  <meta property="og:image:width" content="879" />
  <meta property="og:image:height" content="502" />
  <meta property="og:image:alt" content="<?= $alt; ?>" />

  <meta property="twitter:card" content="summary" />
  <meta property="twitter:title" content="<?= $title; ?>" />
  <meta property="twitter:site" content="<?= $title; ?>" />
  <meta property="twitter:description" content="<?= $summery; ?>" />
  <meta property="twitter:image" content="<?= base_url("images/75eng.png"); ?>" />

  <script>
    var baseurl = '<?= base_url("", true); ?>';
    var lang = '<?= LANG; ?>';
  </script>

  <!-- Google tag (gtag.js) -->
  <script async src="https://www.googletagmanager.com/gtag/js?id=G-SQHH6Y65NQ"></script>
  <script>
    window.dataLayer = window.dataLayer || [];

    function gtag() {
      dataLayer.push(arguments);
    }
    gtag('js', new Date());
    gtag('config', 'G-SQHH6Y65NQ');
  </script>
</head>

<body>
  <div id="fb-root"></div>
  <script async defer crossorigin="anonymous" src="https://connect.facebook.net/en_GB/sdk.js#xfbml=1&version=v14.0&appId=267021713952434&autoLogAppEvents=1" nonce="CO1HZq4m"></script>
  <div class="container pb-5">
    <div class="text-center mt-4">
      <img style="max-height: 100px;" class="img-fluid" src="<?= base_url("images/75eng.png"); ?>" alt="">
      <img class="img-fluid" src="<?= base_url("images/wish.png"); ?>" alt="">
      <p class="imgtext">We are proud to be an Indians.!!!</p>
    </div>

    <p class="text1"><?= $name; ?></p>
    <p class="text2">has sent you a</p>
    <div class="flags-container">
      <div class="flag-container-1">
        <div class="flag">
          <div class="saffron"></div>
          <div class="white"></div>
          <div class="green"></div>
        </div>
      </div>
      <div class="flag-container-2">
        <div class="flag">
          <div class="saffron"></div>
          <div class="white"></div>
          <div class="green"></div>
        </div>
      </div>
    </div>
    <p class="text3">National Flag, Tiranga</p>

    <div class="text-center mt-4 fs-6">
      Before you,
      <img style="height: 20px;" src="https://hitwebcounter.com/counter/counter.php?page=8023709&style=0025&nbdigits=1&type=page&initCount=0" />
      people have sent <span class="fs-4">National Flag</span> to their friends and family. You also hurry, because it has to be sent before <span class="fs-3">15th August</span>.
    </div>

    <div class="text-center mt-4">
      <button id="send" class="btn fs-5 flagcolor rounded-pill px-5" type="button" data-bs-toggle="modal" data-bs-target="#share">
        <svg xmlns="http://www.w3.org/2000/svg" width="22" height="30" fill="currentColor" class="bi bi-share me-2" viewBox="0 0 16 16">
          <path d="M13.5 1a1.5 1.5 0 1 0 0 3 1.5 1.5 0 0 0 0-3zM11 2.5a2.5 2.5 0 1 1 .603 1.628l-6.718 3.12a2.499 2.499 0 0 1 0 1.504l6.718 3.12a2.5 2.5 0 1 1-.488.876l-6.718-3.12a2.5 2.5 0 1 1 0-3.256l6.718-3.12A2.5 2.5 0 0 1 11 2.5zm-8.5 4a1.5 1.5 0 1 0 0 3 1.5 1.5 0 0 0 0-3zm11 5.5a1.5 1.5 0 1 0 0 3 1.5 1.5 0 0 0 0-3z" />
        </svg>
        Send Tiranga to your friends
      </button>
    </div>
    <div class="text-center pt-5">
      <a href="<?= base_url("hi/$name"); ?>" class="btn btn-link">तिरंगा, हिंदी वेबसाइट के लिए यहाँ क्लिक करे</a>
    </div>
  </div>
  <footer>
    <!-- The Modal -->
    <div class="modal" id="share">
      <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
          <!-- Modal body -->
          <div class="modal-body">
            <div class="mt-4 text-center">
              <div class="fs-4">
                Send <span class="fblike">National Flag</span><br />
                to your Friends and Family
              </div>
            </div>
            <img class="img-fluid" src="<?= base_url("images/wish.png"); ?>" alt="" />
            <div class="mt-4 text-center">
              <div class="fblike fs-4 text-start">
                <span class="txt4">Step 1: </span>
                <span class="txt1">Click</span>
                <span class="txt3">on Like button</span>
              </div>
              <div class="ps-0">
                <img style="max-width: 200px;" class="img-fluid" src="https://c.tenor.com/oKQAAvDbdvkAAAAC/no.gif" alt="" />
              </div>
            </div>
            <div class="d-grid px-1">
              <div class="fb-page text-center" data-href="https://www.facebook.com/rkmsmeerutofficial" data-tabs="about" data-width="" data-height="" data-small-header="true" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="false">
                <blockquote cite="https://www.facebook.com/rkmsmeerutofficial" class="fb-xfbml-parse-ignore">
                  <a href="https://www.facebook.com/rkmsmeerutofficial">RKMS MEERUT</a>
                </blockquote>
              </div>
            </div>
            <div class="d-grid px-1">
              <div class="mt-4 text-center">
                <div class="fblike fs-4 text-start">
                  <span class="txt4">Step 2: </span>
                  <span class="txt1">Enter your name</span>
                  <span class="txt3">below</span>
                </div>
                <input type="text" class="form-control mt-3" id="name" placeholder="Type your name here...">
                <div id="error" class="invalid-feedback text-start">Please type your name.</div>
                <div class="fblike fs-4 my-3 text-start">
                  <span class="txt4">Step 3: </span>
                  <span class="txt1">Share</span>
                  <span class="txt3">to your friends</span>
                </div>
                <button id="wpshare" class="btn flagcolor btnshare" data-text='Someone has sent a National Flag to you. Click on below link to view the message. https://flag.share.ind.in' data-original-title="Share to WhatsApp" rel="tooltip" data-placement="left" data-action="share/whatsapp/share">
                  <svg xmlns="http://www.w3.org/2000/svg" width="22" height="30" fill="currentColor" class="bi bi-whatsapp" viewBox="0 0 16 16">
                    <path d="M13.601 2.326A7.854 7.854 0 0 0 7.994 0C3.627 0 .068 3.558.064 7.926c0 1.399.366 2.76 1.057 3.965L0 16l4.204-1.102a7.933 7.933 0 0 0 3.79.965h.004c4.368 0 7.926-3.558 7.93-7.93A7.898 7.898 0 0 0 13.6 2.326zM7.994 14.521a6.573 6.573 0 0 1-3.356-.92l-.24-.144-2.494.654.666-2.433-.156-.251a6.56 6.56 0 0 1-1.007-3.505c0-3.626 2.957-6.584 6.591-6.584a6.56 6.56 0 0 1 4.66 1.931 6.557 6.557 0 0 1 1.928 4.66c-.004 3.639-2.961 6.592-6.592 6.592zm3.615-4.934c-.197-.099-1.17-.578-1.353-.646-.182-.065-.315-.099-.445.099-.133.197-.513.646-.627.775-.114.133-.232.148-.43.05-.197-.1-.836-.308-1.592-.985-.59-.525-.985-1.175-1.103-1.372-.114-.198-.011-.304.088-.403.087-.088.197-.232.296-.346.1-.114.133-.198.198-.33.065-.134.034-.248-.015-.347-.05-.099-.445-1.076-.612-1.47-.16-.389-.323-.335-.445-.34-.114-.007-.247-.007-.38-.007a.729.729 0 0 0-.529.247c-.182.198-.691.677-.691 1.654 0 .977.71 1.916.81 2.049.098.133 1.394 2.132 3.383 2.992.47.205.84.326 1.129.418.475.152.904.129 1.246.08.38-.058 1.171-.48 1.338-.943.164-.464.164-.86.114-.943-.049-.084-.182-.133-.38-.232z" />
                  </svg>
                  <span class="ps-1">WhatsApp</span>
                </button>
                <a id="fbshare" target="_blank" class="btn flagcolor btnshare" href="#">
                  <svg xmlns="http://www.w3.org/2000/svg" width="22" height="30" fill="currentColor" class="bi bi-facebook" viewBox="0 0 16 16">
                    <path d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951z" />
                  </svg>
                  <span class="ps-1">Facebook</span>
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
      <script src="<?= base_url("script.js"); ?>"></script>
  </footer>
</body>

</html>