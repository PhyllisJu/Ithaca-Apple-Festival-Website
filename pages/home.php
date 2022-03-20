<?php
$index_status = "current_page";
$vendors_status = "";
$schedule_status = "";
$trans_status = "";
$faqs_status = "";
$title = "Home";
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title> AppleFest <?php echo $title ?> </title>
  <link rel="stylesheet" type="text/css" href="/public/styles/site.css" />
</head>

<body>

  <?php include('includes/header.php'); ?>

  <?php include('includes/nav.php'); ?>

  <!-- Source: instructor provided -->
  <div id="slides">
    <figure class="home_banner">
      <img alt="A photo of the Apple Harvest Festival" src="/public/images/home_banner.jpg" width=900 height=675 />
    </figure>
  </div>

  <!-- Source: instructor provided -->
  <div class="loc_main" id="location">
    <div class="location">
      <h2>Location</h2>
      <p>Located on the Ithaca Commons</p>
    </div>

    <!-- Source: instructor provided -->
    <div>
      <figure>
        <img alt="The Apple Harvest Festival is located on the Ithaca Commons." src="/public/images/commons.jpg" width=700 height=467 />
      </figure>
    </div>
  </div>

  <!-- Source: instructor provided -->
  <div class="hours_main" id="time">
    <div class="hours">
      <h2>Festival Hours</h2>
      <p><strong>October 1 - October 3, 2021</strong></p>
      <p>Friday, October 1: 12pm - 6pm</p>
      <p>Saturday, October 2: 10am - 6pm</p>
      <p>Sunday, October 3: 10am - 6pm</p>

      <p>We are excited to welcome you back to one of Ithaca’s most celebrated events: the Apple Harvest Festival! Join
        us for three days of farm-fresh bites, local crafts, live music, and fall activities for all ages.</p>
    </div>

    <!-- Source: instructor provided -->
    <figure>
      <img alt="A basket of apples." src="/public/images/hours.jpg" width=1521 height=1521 />
    </figure>
  </div>

  <?php include('includes/footer.php'); ?>

  <script type="text/javascript" src="/public/scripts/jquery-3.6.0.js"></script>
  <script type="text/javascript" src="/public/scripts/dropdown.js"></script>
</body>

</html>
