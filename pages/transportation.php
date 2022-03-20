<?php
$index_status = "";
$vendors_status = "";
$schedule_status = "";
$trans_status = "current_page";
$faqs_status = "";
$title = "Transportation";
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

  <div class="trans_content">
    <aside>
      <ul>
        <li><span id="map-feedback" class="hidden arrow"> > </span><a id="map-content" href="#map">Map</a></li>
        <li><span id="parking-feedback" class="hidden arrow"> > </span><a href="#parking" id="parking-content">Parking</a></li>
        <li><span id="bus-feedback" class="hidden arrow"> > </span><a id="bus-content" href="#bus">Bus Schedule</a></li>
      </ul>
    </aside>

    <main>
      <!-- Source: instructor provided -->
      <div id="map" class="map">
        <h2>Map</h2>
        <picture>
          <img alt="Map of Apple Harvest Festival in Ithaca" src="/public/images/map.png" width=900 height=694 />
        </picture>
      </div>

      <!-- Source: instructor provided -->
      <div id="parking" class="parking">
        <h2>Parking</h2>
        <p>Residents and visitors can park in the Seneca, and Cayuga Street garages and walk to anywhere in Downtown
          Ithaca. <strong>Please note the Green Garage is closed for construction.</strong></p>

        <p>Garage parking is <strong>$1.00 per hour</strong> in the garages. On-street parking is <strong>$1.50 per
            hour</strong> during the week until 6pm.</p>

        <p>For additional downtown parking, visit <a href="https://www.cityofithaca.org/243/Parking" target="_blank">Parking in Ithaca.</a></p>
      </div>

      <!-- Source: instructor provided -->
      <div id="bus" class="bus">
        <h2>Bus Schedule</h2>
        <p><em>*Effective August 22, 2021 through January 22, 2022*</em></p>

        <h3>Route 10: Mon-Fri</h3>
        <p>Cornell – Commons Shuttle</p>
        <p>Also Serving: Sage Hall, Boldt Hall, Milstein Hall, Goldwin Smith Hall.</p>
        <p>[No College Ave. or Schwartz CPA due to construction on College Ave.]</p>

        <h3>Route 11: Everyday</h3>
        <p>Ithaca College – Commons</p>
        <p>Also Serving: College Circle Apts., Challenge, South Hill Business Park, South Hill Elementary, Longview</p>

        <h3>Route 20: Everyday</h3>
        <p>Enfield – Commons</p>
        <p>Also Serving: Greenstar, Eco Village, Agway. Select trips serve Cornell West Campus.</p>
        <p>Saturday & Sunday: First trip is demand hiker drop-off at Bock Harvey Nature Preserve or the entrance to
          Upper Treman State Park.</p>

        <h3>Route 30: Everyday</h3>
        <p>Ithaca Mall – Cornell – Commons</p>
        <p>Also Serving: Cornell, Community Corners, Kendal, Tops (Lansing), YMCA</p>
        <p>Detour: Partial Detour in Collegetown</p>

        <p><em>*For more information, please visit their website at: <a href="https://tcatbus.com/" target="_blank">www.tacatbus.com</a>*</em></p>
      </div>
    </main>
  </div>

  <?php include('includes/footer.php'); ?>

  <script type="text/javascript" src="/public/scripts/jquery-3.6.0.js"></script>
  <script type="text/javascript" src="/public/scripts/dropdown.js"></script>
  <script type="text/javascript" src="/public/scripts/sidebar.js"></script>
</body>

</html>
