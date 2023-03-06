$(document).ready(function(){
  console.log("(-_-')");
  console.log("¿What are you doing?");
  $(".customer-has-company").on("change",function(){
    answer = $(this).val();
    if(answer == "Y"){
      $(".customer-company-data").slideDown().removeClass("hidden");
    }else{
      $(".customer-company-data").slideUp().addClass("hidden");
    }
  });
})