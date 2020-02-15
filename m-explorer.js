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


  //filters persistence
  var getUrlParameter = function getUrlParameter(sParam) {
    var sPageURL = window.location.search.substring(1),
      sURLVariables = sPageURL.split('&'),
      sParameterName,
      i;

    for (i = 0; i < sURLVariables.length; i++) {
      sParameterName = sURLVariables[i].split('=');

      if (sParameterName[0] === sParam) {
        return sParameterName[1] === undefined ? true : decodeURIComponent(sParameterName[1]);
      }
    }
  };

  var domain = getUrlParameter('domain');
  var text = getUrlParameter('text');
  var limit = getUrlParameter('limit');
  var text = getUrlParameter('text');
  var gold = getUrlParameter('gold');
  var origin = getUrlParameter('origin');
  var genesis = getUrlParameter('genesis');
  var ascending = getUrlParameter('ascending');

  //if (domain) {
  //  $("#select2_domains").click();
  //  $("#select2_domains").val(domain).trigger('change');
  //}

  if (text) {
    $('#text').val(text);
  }

  if (limit) {
    $('#limit').val(limit);
  }

  if (gold) {
    $('#gold').prop('checked', true);
  }

  if (origin) {
    $('#origin').prop('checked', true);
  }

  if (genesis) {
    $('#genesis').prop('checked', true);
  }

  if (ascending) {
    $('#ascending').prop('checked', true);
  }

});
