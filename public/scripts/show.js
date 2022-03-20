$("#show-more1").click(function() {
  $("#long-text1").removeClass("hidden");
  $("#short-text1").addClass("hidden");
});

$("#show-more2").click(function() {
  $("#long-text2").removeClass("hidden");
  $("#long-text2-2").removeClass("hidden");
  $("#short-text2").addClass("hidden");
});

$("#show-more3").click(function() {
  $("#long-text3").removeClass("hidden");
  $("#short-text3").addClass("hidden");
});

$("#show-more4").click(function() {
  $("#long-text4").removeClass("hidden");
  $("#short-text4").addClass("hidden");
});

$("#show-less1").click(function() {
  $("#short-text1").removeClass("hidden");
  $("#long-text1").addClass("hidden");
});

$("#show-less2").click(function() {
  $("#short-text2").removeClass("hidden");
  $("#long-text2-2").addClass("hidden");
  $("#long-text2").addClass("hidden");
});

$("#show-less3").click(function() {
  $("#short-text3").removeClass("hidden");
  $("#long-text3").addClass("hidden");
});

$("#show-less4").click(function() {
  $("#short-text4").removeClass("hidden");
  $("#long-text4").addClass("hidden");
});
