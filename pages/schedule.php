<?php
$index_status = "";
$vendors_status = "";
$schedule_status = "current_page";
$trans_status = "";
$faqs_status = "";
$title = "Schedule";
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
  <div class="schedule_main">
    <h2>Entertainment <?php echo $title ?></h2>
    <p><strong>Located at the Bernie Milton Pavilion</strong></p>
    <div class="schedules">
      <div class="sat">
        <h3>Saturday, October 2, 2021</h3>
        <p>12:00 - 12:45PM - Mirage</p>
        <p>1:00 - 1:45PM - Dragon Recorder Quartet</p>
        <p>2:00 - 2:45PM - Fall Creek Brass Band</p>
        <p>3:00 - 3:45PM - Go Gone</p>
        <p>4:00 - 4:45PM - Kitestring</p>
        <p>5:00 - 5:45PM - DJ WhoIsBrianTech</p>
      </div>
      <div class="sun">
        <h3>Sunday, October 3, 2021</h3>
        <p>12:00 - 12:45PM - IthAccordian</p>
        <p>1:00 - 1:45PM - East Hill Trio</p>
        <p>2:00 - 2:45PM - GIAC Jumpers</p>
        <p>3:00 - 3:45PM - Good Dog</p>
        <p>4:00 - 4:45PM - Busking Raed ft. Jow Haywood</p>
        <p>5:00 - 5:45PM - Papa Muse</p>
      </div>
    </div>
  </div>

  <?php include('includes/footer.php'); ?>

  <script type="text/javascript" src="/public/scripts/jquery-3.6.0.js"></script>
  <script type="text/javascript" src="/public/scripts/dropdown.js"></script>
  <script type="text/javascript" src="/public/scripts/show.js"></script>
</body>

</html>
