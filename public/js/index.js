$(document).ready(function() {
  $(".fancybox").fancybox({
    titlePosition : 'over',
    width: 420,
    padding: 0,
    beforeShow: function() {
      /*this.title = $(this.element).attr('title');
      /*this.title = '<h4>'+'Algo' + this.title + '' +
                   '<p>' + $(this.element).parent().find('img').attr('alt') + '</p>'+
                   '<p>'+'Algo mas'+'</p> </h4>';
     this.title = $(this.element).attr('title');
      this.title = '<h4>' + this.title + '</h4>' + '<p>' + $(this.element).parent().find('img').attr('alt') + '</p>';*/
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
    //console.log(newRes[1].indexOf('='));
http://www.megamaderas.mx/public/Productos?page&page=3
http://www.megamaderas.mx/Productos?page&page=3
    if (newRes[1].indexOf('=')<0) {
      $('html, body').animate({ scrollTop: $('#divVerMas').offset().top }, 'slow');
      $('#divVerMas').hide();
    }else {
      $('html, body').animate({ scrollTop: $('#divVerMas').offset().top }, 'slow');
      //$('#aNextPage').attr('href',newRes[1]);//this work
      var arrayNewUrl = newRes[1].split('mx/');
      var newUrl = arrayNewUrl[0]+'mx/public/'+arrayNewUrl[1];
      $('#aNextPage').attr('href',newRUrl);
    }
    $('#divProductos').append(newRes[0]);
    $(".fancybox").fancybox({
      titlePosition : 'over',
      width: 420,
      padding: 0,
      beforeShow: function() {
        this.title = $(this.element).attr('title')+'Hola';
        /*this.title = '<h4>'+'Algo' + this.title + '' +
                     '<p>' + $(this.element).parent().find('img').attr('alt') + '</p>'+
                     '<p>'+'Algo mas'+'</p> </h4>';*/
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
    //console.log("error");
  })
  .always(function() {
    //console.log("complete");
  });

}
