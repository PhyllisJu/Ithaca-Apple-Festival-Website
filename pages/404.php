 <!-- Source: (original work) Phyllis Ju -->
 <?php
  $index_status = "";
  $vendors_status = "";
  $schedule_status = "";
  $trans_status = "";
  $faqs_status = "";
  $title = "Page Not Found";
  ?>
 <!DOCTYPE html>
 <html lang="en">

 <head>
   <meta charset="utf-8" />
   <meta name="viewport" content="width=device-width, initial-scale=1" />
   <title><?php echo $title ?> </title>
   <link rel="stylesheet" type="text/css" href="/public/styles/site.css" />
 </head>

 <body>

   <?php include('includes/header.php'); ?>

   <?php include('includes/nav.php'); ?>

   <div class="not_found">
     <h2><?php echo $title ?></h2>
     <p>Oops! The page you are trying to search for is not found.</p>
     <p>You can try to go back to the <a href="/">home page</a>.</p>
     <p>You can also use the navigation bar to go to other pages.</p>
   </div>


   <div class="not_found_footer"><?php include('includes/footer.php'); ?></div>

   <script type="text/javascript" src="/public/scripts/jquery-3.6.0.js"></script>
   <script type="text/javascript" src="/public/scripts/dropdown.js"></script>
 </body>

 </html>
