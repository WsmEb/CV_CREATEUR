$(document).ready(function(){
  $("#full-name-input").on("keyup",function(){
    $("#full-name").text($(this).val());
  }),
  $("#email-input").on("keyup",function(){
    $("#email").text($("#email-input").val())
  }),
  $("#date-input").on("change",function(){
    $("#date").text($("#date-input").val())
  }),

  $("#phone-input").on("keyup",function(){
    $("#phone").text($("#phone-input").val())
  }),
  $("#adress-input").on("keyup",function(){
    $("#adress").text($("#adress-input").val())
  }),
  $("#website-input").on("keyup",function() { 
    $("#websites").text($("#website-input").val())
   }),
   $("#objective-input").on("keyup",function(){
    $("#objective").text($("#objective-input").val());
   }),
   $("#from-input").on("change",function(){
    $("#from").text($("#from-input").val())
   }),
   $("#to-input").on("change",function(){
    $("#to").text($("#to-input").val())
   }),
   $("#field-input").on("keyup",function(){
    $("#filed").text($("#field-input").val())
   })
})


