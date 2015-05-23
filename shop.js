$(document).ready(function(){
    $(".hide").slideUp();
    //$("#inform").slideUp();
});

$(document).ready(function(){
    $("#r0").click(function(){
	  $(".hide").slideUp();
        $("#Meat").slideToggle();
    });
	 $("#r1").click(function(){
	   $(".hide").slideUp();
        $("#Cheese").slideToggle();
    });
	 $("#r2").click(function(){
	   $(".hide").slideUp();
        $("#Veggie").slideToggle();
    });
	 $("#r3").click(function(){
	   $(".hide").slideUp();
        $("#Condiment").slideToggle();
    });
	 $("#r4").click(function(){
	   $(".hide").slideUp();
        $("#Bread").slideToggle();
    });
});
 $(document).ready(function () {
   $("input[name='Meat']").change(function () {
      var maxAllowed = 2;
      var cnt = $("input[name='Meat']:checked").length;
      if (cnt > maxAllowed) 
      {
         $(this).prop("checked", "");
     }
	 var total = ' ';
	  $('input[name="Meat"]').each(function() {
        if ($(this).is(':checked')) {
            total += $(this).val();
        }
		
    });
	$("#meat_row").text(total);
  });
   $("input[name='Veggie']").change(function () {
      var maxAllowed = 4;
      var cnt = $("input[name='Veggie']:checked").length;
      if (cnt > maxAllowed) 
      {
         $(this).prop("checked", "");
     }
	  var total = ' ';
	  $('input[name="Veggie"]').each(function() {
        if ($(this).is(':checked')) {
            total += $(this).val();
        }
		
    });
	$("#veggie_row").text(total);
  });
   $("input[name='Cheese']").change(function () {
      var maxAllowed = 3;
      var cnt = $("input[name='Cheese']:checked").length;
      if (cnt > maxAllowed) 
      {
         $(this).prop("checked", "");
     }
	  var total = ' ';
	  $('input[name="Cheese"]').each(function() {
        if ($(this).is(':checked')) {
            total += $(this).val();
        }
		
    });
	$("#cheese_row").text(total);
  });
   $("input[name='Condiment']").change(function () {
      var maxAllowed = 3;
      var cnt = $("input[name='Condiment']:checked").length;
      if (cnt > maxAllowed) 
      {
         $(this).prop("checked", " ");
     }
	  var total = ' ';
	  $('input[name="Condiment"]').each(function() {
        if ($(this).is(':checked')) {
            total += $(this).val();
        }
		
    });
	$("#condiment_row").text(total);
  });
  $("#selectBread").change(function () {
  $("#bread_row").text($("#selectBread").val());
  });
});
   