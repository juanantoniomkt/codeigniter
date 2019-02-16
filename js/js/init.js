

var app = new Vue(
  {
    el: '#app',
    data: 
    {
      message: 'Hello Vue!'
    }
  })  


(function($)
{
$(function()
  {

    $('.sidenav').sidenav();
    $('.parallax').parallax();

  }); // end of document ready
})(jQuery); // end of jQuery name space