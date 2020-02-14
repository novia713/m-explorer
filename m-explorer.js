$(document).ready(function () {
  $(document).foundation();


  $("#mosaic").click(function () {
    $("#formu").hide();
    $(".card-section").hide();
    $(".or").hide();
  });


  $(".calculate").click(function () {
    $("#result").val("");
    var id = $(this).attr('data-id');
    var actual_level = $("#actual_level_" + id).text();
    var desired_level = $("#desired_level_" + id).val();
    if (!desired_level) {
      desired_level = 100;
    }
    if (typeof actual_level !== 'number' || typeof desired_level !== 'number') {
      $("#result_" + id).val("Please, introduce numbers!");
    }
    var res = 0;
    for (i = +actual_level; i < +desired_level; i++) {
      res += i * 100;
    }

    $("#result_" + id).text("You need " + res + " XP!");
  });

  $("#sort_coll_id_asc").click(function () {
    var result = $('.card').sort(function (a, b) {
      var contentA = parseInt($(a).attr('coll-id'));
      var contentB = parseInt($(b).attr('coll-id'));
      return (contentA < contentB) ? -1 : (contentA > contentB) ? 1 : 0;
    });

    $('#cards-container').html(result);
  });

  $("#sort_coll_id_desc").click(function () {
    var result = $('.card').sort(function (a, b) {
      var contentA = parseInt($(a).attr('coll-id'));
      var contentB = parseInt($(b).attr('coll-id'));
      return (contentA > contentB) ? -1 : (contentA < contentB) ? 1 : 0;
    });

    $('#cards-container').html(result);
  }); sort_level_asc

  $("#sort_level_asc").click(function () {
    var result = $('.card').sort(function (a, b) {
      var contentA = parseInt($(a).attr('level'));
      var contentB = parseInt($(b).attr('level'));
      return (contentA < contentB) ? -1 : (contentA > contentB) ? 1 : 0;
    });

    $('#cards-container').html(result);
  });

  $("#sort_level_desc").click(function () {
    var result = $('.card').sort(function (a, b) {
      var contentA = parseInt($(a).attr('level'));
      var contentB = parseInt($(b).attr('level'));
      return (contentA > contentB) ? -1 : (contentA < contentB) ? 1 : 0;
    });

    $('#cards-container').html(result);
  });


  $("#select2_domains").select2({
    width: '12em',
    height: '2em',
    ajax: {
      url: 'https://ws.marble.cards/task/search/get_domains_task',
      dataType: 'json',
      processResults: function (data, params) {
        return {
          results: $.map(data, function (data) {
            return {
              id: data.id,
              text: "<img src='" + data.favicon_url + "' height='16px' width='16'/>&nbsp;" + data.domain
            };
          })
        };
      },
      cache: true,
    },
    escapeMarkup: function (markup) { return markup; },
  });

});
