(function (api, $) {

  wp.customize.bind('preview-ready', function () {

    var colors = [
      'qlwapp[scheme][brand]',
      'qlwapp[scheme][text]',
      'qlwapp[scheme][link]',
      'qlwapp[scheme][name]',
      'qlwapp[scheme][label]',
      'qlwapp[scheme][message]',
      'qlwapp[scheme][contact-role-color]',
      'qlwapp[scheme][contact-name-color]',
      'qlwapp[scheme][contact-availability-color]',
    ];

    $.each(colors, function (index, color) {
      api(color, function (value) {
        value.bind(function (to) {
          document.querySelector('#qlwapp').style.setProperty('--' + color.replace(/\[/g, '-').replace(/\]/g, ''), to);
        });
      });
    });

    api.selectiveRefresh.bind('partial-content-rendered', function (placement) {      
      $('#qlwapp').qlwapp();
    });

  });
})(wp.customize, jQuery);
