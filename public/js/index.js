$(document).ready(function() {
  $(".fancybox").fancybox({
    titlePosition : 'over',
    width: 420,
    padding: 0,
    beforeShow: function() {
      this.title = $(this.element).attr('title');
      this.title = '<h4>' + this.title + '</h4>' + '<p>' + $(this.element).parent().find('img').attr('alt') + '</p>';
    },
    helpers: {
      title: {
        type: 'inside',
        position: 'top'
      },
    }
  });

  $('#aNextPage').on('click', function(event) {
    event.preventDefault();
    if ($(this).attr('href')!='') {
      var page = $(this).attr('href').split('=')[0];
      var numberPage = $(this).attr('href').split('=')[1];
      nextPageProductos(page,numberPage);
    }
    else {
      $('#aNextPage').hide();
    }
  });
});

function nextPageProductos(page,nPage) {
  $.ajax({
    url: page,
    data: {page: nPage}
  })
  .done(function(response) {
    var newRes = response.split('<!---->');
    console.log(newRes[1].indexOf('='));
    if (newRes[1].indexOf('=')<0) {
      $('#aNextPage').hide();
    }else {
      $('#aNextPage').attr('href',newRes[1]);
    }
    $('#divProductos').append(newRes[0]);
    $(".fancybox").fancybox({
      titlePosition : 'over',
      width: 420,
      padding: 0,
      beforeShow: function() {
        this.title = $(this.element).attr('title');
        this.title = '<h4>' + this.title + '</h4>' + '<p>' + $(this.element).parent().find('img').attr('alt') + '</p>';
      },
      helpers: {
        title: {
          type: 'inside',
          position: 'top'
        },
      }
    });

  })
  .fail(function() {
    console.log("error");
  })
  .always(function() {
    console.log("complete");
  });

}
