$("#intro-content").click(function() {
  $("#intro-feedback").removeClass("hidden");
  $("#list-feedback").addClass("hidden");
});

$("#list-content").click(function() {
  $("#list-feedback").removeClass("hidden");
  $("#intro-feedback").addClass("hidden");
});

$("#map-content").click(function() {
  $("#map-feedback").removeClass("hidden");
  $("#parking-feedback").addClass("hidden");
  $("#bus-feedback").addClass("hidden");
});

$("#parking-content").click(function() {
  $("#parking-feedback").removeClass("hidden");
  $("#map-feedback").addClass("hidden");
  $("#bus-feedback").addClass("hidden");
});

$("#bus-content").click(function() {
  $("#bus-feedback").removeClass("hidden");
  $("#parking-feedback").addClass("hidden");
  $("#map-feedback").addClass("hidden");
});
