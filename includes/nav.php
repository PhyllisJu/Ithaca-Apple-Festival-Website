<nav>

  <!-- Source: instructor provided -->
  <div class="logo">
    <a href="/"><img alt="Festival logo" src="/public/images/logo.svg" /></a>
  </div>
  <!-- Source: (original work) Phyllis Ju -->
  <ul>
    <li id="home-dropdown"><a class="<?php echo $index_status ?>" href="/">Home</a>
      <ul id="home-menu" class="hidden">
        <li><a href="/#location">Location</a></li>
        <li><a href="/#time">Time</a></li>
      </ul>
    </li>
    <li id="vendors-dropdown"><a class="<?php echo $vendors_status ?>" href="/about-vendors">Vendors</a>
      <ul id="vendors-menu" class="hidden">
        <li><a href="/about-vendors#intro">About</a></li>
        <li><a href="/about-vendors#list">List</a></li>
      </ul>
    </li>
    <li><a class="<?php echo $schedule_status ?>" href="/event-schedule">Schedule</a></li>
    <li id="trans-dropdown"><a class="<?php echo $trans_status ?>" href="/transport-to-festival">Transportation</a>
      <ul id="trans-menu" class="hidden">
        <li><a href="/transport-to-festival#map">Map</a></li>
        <li><a href="/transport-to-festival#parking">Parking</a></li>
        <li><a href="/transport-to-festival#bus">Bus</a></li>
      </ul>
    </li>
    <li><a class="<?php echo $faqs_status ?>" href="/faqs">FAQs</a></li>
  </ul>

</nav>
