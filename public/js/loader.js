$(document).ready(function() {
    var loader = $('.spinner-body');
    // Show the loader
    loader.show();
  
    // After 3 seconds, hide the loader
    setTimeout(function() {
      loader.hide();
    }, 2000);
  });
  