$(document).ready(function(){
  $(document).foundation();


  $("#mosaic").click(function(){
    $("#formu").hide();
    $(".card-section").hide();
  });


  $(".calculate").click(function(){
    $("#result").val("");
    var id = $(this).attr('data-id');
    var actual_level = $("#actual_level_" + id).text();
    var desired_level = $("#desired_level_" + id).val();
    if (!desired_level) {
      desired_level = 100;
    }
    if (typeof actual_level !== 'number' || typeof desired_level !== 'number'){
      $("#result_" + id).val("Please, introduce numbers!");
    }
    var res = 0;
    for (i = +actual_level; i < +desired_level; i++){
      res += i * 100;
    }

    $("#result_" + id).text( "You need " + res + " XP!");
  });
});
