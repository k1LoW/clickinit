$(function() {
      $('#clickinit').click(function() {
                                if (confirm('Clickinit ?')) {
                                    $.get(clickinitInitUrl,
                                          null,
                                          function (res) {
                                              alert(res);
                                          }
                                         );
                                }
                            });
  });