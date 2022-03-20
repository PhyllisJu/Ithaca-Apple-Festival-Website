<?php
$index_status = "";
$vendors_status = "current_page";
$schedule_status = "";
$trans_status = "";
$faqs_status = "";
$title = "Vendors";
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


  <div class="vendor_main">
    <aside>
      <ul>
        <li><span id="intro-feedback" class="hidden arrow"> > </span><a href="#intro" id="intro-content">About
            Vendors</a></li>
        <li><span id="list-feedback" class="hidden arrow"> > </span><a href="#list" id="list-content">Vendor List</a>
        </li>
      </ul>
    </aside>

    <main>
      <div id="intro" class="intro_vendors">
        <h2>About <?php echo $title ?></h2>
        <!-- Source: instructor provided -->
        <p>With over 100 vendors present at the festival, there are many opportunities to be introduced to the rich
          artisan and culinary community in Ithaca. Our food vendors feature apple-centric and other fall classics for
          you to taste, and the craft vendors offer homemade goods like soaps, jewelry, sculptures, clothing, and more!
          This is the perfect place to learn about and support Ithaca's small businesses that encompass the heart of the
          town.</p>
      </div>

      <!-- Source: instructor provided -->
      <figure>
        <img alt="Apple vendors on the Apple Harvest Festival" src="/public/images/vendor1.jpg" width=1200 height=800 />
      </figure>

      <!-- Source: instructor provided -->
      <div id="list" class="list_vendors">
        <div class="list_text">
          <h2>Vendor List</h2>

          <h3>Apple & Produce Vendors</h3>
          <ul>
            <li>AJ Teeter Farm</li>
            <li>Bakers' Acres</li>
            <li>Ella's Acres</li>
            <li>Little Tree Orchards</li>
            <li>......</li>
          </ul>

          <h3>Cider & Wine Vendors</h3>
          <ul>
            <li>Ashley Lynn Winery</li>
            <li>Black Duck Cidery</li>
            <li>Finger Lakes Cider House</li>
            <li>New York Cider Company</li>
            <li>Thousand Islands Winery</li>
          </ul>

          <h3>Food Vendors</h3>
          <ul>
            <li>Coltivare</li>
            <li>CreamCycle</li>
            <li>Momo Bar</li>
            <li>On the Street Pitas</li>
            <li>......</li>
          </ul>

          <h3>Craft Vendors</h3>
          <ul>
            <li>Art by Mary Shelley</li>
            <li>Balance Aromatherapy</li>
            <li>Carolina Perez Designs</li>
            <li>Carriage House Woodcrafters</li>
            <li>...and many more!</li>
          </ul>
        </div>

        <!-- Source: instructor provided -->
        <div class="list_fig">
          <figure>
            <img alt="A jar vendor on the Apple Harvest Festival." src="/public/images/vendor2.jpg" width=1184 height=1184 />
          </figure>
          <!-- Source: instructor provided -->
          <figure>
            <img alt="A jewelry vendor on the Apple Harvest Festival." src="/public/images/vendor3.jpg" width=1000 height=835 />
          </figure>
        </div>
      </div>
    </main>
  </div>

  <?php include('includes/footer.php'); ?>

  <script type="text/javascript" src="/public/scripts/jquery-3.6.0.js"></script>
  <script type="text/javascript" src="/public/scripts/dropdown.js"></script>
  <script type="text/javascript" src="/public/scripts/sidebar.js"></script>
</body>

</html>
