$(function() {
      $('#clickinit').click(function() {
                                var documentWidth = $(document).width();
                                var documentHeight = $(document).height();

                                var $over = $('<div>')
                                    .attr({id:'clickinitOver'
                                          })
                                    .css({position:'absolute',
                                          opacity:'0.6',
                                          width:documentWidth,
                                          height:documentHeight,
                                          backgroundColor:'#FFFFFF',
                                          zIndex: 100});
                                $('body').prepend($over);

                                if (confirm('Clickinit ?')) {
                                    alert('Wait one moment');
                                    $.get(clickinitInitUrl,
                                          null,
                                          function (res) {
                                              alert(res);
                                              $over.remove();
                                          }
                                         );
                                } else {
                                    $over.remove();
                                }
                            });
  });