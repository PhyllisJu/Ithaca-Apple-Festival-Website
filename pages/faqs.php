<?php
$index_status = "";
$vendors_status = "";
$schedule_status = "";
$trans_status = "";
$faqs_status = "current_page";
$title = "FAQs";
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
  <div class="faqs_main">
    <h2><?php echo $title ?></h2>
    <ol>
      <li>What safety precautions are in place due to COVID-19?
        <p id="short-text1">We recommend everyone to <strong>wear a mask</strong> in crowded areas. <span class="show" id="show-more1">Show more</span></p>
        <p class="hidden" id="long-text1">The event is typically crowded and adequate social distancing is not always
          possible, so we recommend that everyone, but especially unvaccinated individuals, <strong>wear a mask</strong>
          in crowded areas to protect our population. <span class="show" id="show-less1">Show less</span></p>
      </li>

      <li>How much money should I bring?
        <p id="short-text2">The entry is <strong>free</strong>! The amount of money depends on the goods you want to
          purchase and parking charge. <span class="show" id="show-more2">Show more</span></p>
        <p class="hidden" id="long-text2"><strong>Entry to the event is completely free!</strong> The amount of money
          you should bring is dependent on what, if anything, you wish to purchase at the festival.</p>
        <p class="hidden" id="long-text2-2">If you are driving, there is a <strong>$5 charge to park at the parking
            garage</strong> (You can find more parking information in <a href="/transport-to-festival#parking" target="_blank">transportation page</a>). If you plan to eat
          at the festival, you may also wish to bring at least $10. Prices of the various baked goods, produce, and
          crafts vary by vendor. Many of our vendors and their items can be found here. <span class="show" id="show-less2">Show less</span></p>
      </li>

      <li>Can I pay with a credit card?
        <p id="short-text3">You can bring a credit card with some cash. <span class="show" id="show-more3">Show
            more</span></p>
        <p class="hidden" id="long-text3">Most of our vendors accept credit cards, however, you should bring some cash
          in case a shop you are interested in does not accept them. <span class="show" id="show-less3">Show less</span>
        </p>
      </li>

      <li>When is the best time to attend?
        <p id="short-text4"><strong>Mid-day Friday</strong> has the smallest crowds. <span class="show" id="show-more4">Show more</span></p>
        <p class="hidden" id="long-text4">If you are looking to avoid the crowds, attending <strong>mid-day
            Friday</strong> is a good idea. However, many attendees find that the crowds on the weekend add to the
          energy and fun of the festival. <span class="show" id="show-less4">Show less</span></p>
      </li>
    </ol>
  </div>

  <?php include('includes/footer.php'); ?>

  <script type="text/javascript" src="/public/scripts/jquery-3.6.0.js"></script>
  <script type="text/javascript" src="/public/scripts/dropdown.js"></script>
  <script type="text/javascript" src="/public/scripts/show.js"></script>
</body>

</html>
