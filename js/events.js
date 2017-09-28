$(document).ready(function(){
    $('#ras-event').hide();
    $('#icompete-event').hide();
    $('#req-event').hide();

    $('.image').mouseover(function(){
      $(this).find('img')
        .css('opacity','0.3');

      var x = $(this).offset().left;
      var y = $(this).offset().top;

      var hoveringCont = $('<div></div>');
      hoveringCont.addClass('hover-cont');

      var seemoreBtn = $('<button>More Details</button>');
      seemoreBtn.addClass('seemore-btn');
      seemoreBtn.attr('id', currentID);

      var title = $('<h4></h4>');
      title.addClass('text-over');

      var currentID = $(this).parent().parent().attr('id');
      if (currentID == 'ras') {
        title.text('IEEE ASU SB In Partnership with IEEE RAS HSC "Auxilio"');
      }
      else if (currentID == 'icompete'){
        title.text("I-Compete");
      }
      else if (currentID == 'recruitment') {
        title.text("IEEE ASU SB Members Recruitment");
      }

      hoveringCont.append(title);
      hoveringCont.append(seemoreBtn);
      $(this).append(hoveringCont);

    });
    $('.image').mouseout(function(){
      $(this).find('img')
        .css('opacity','1');
      $('.hover-cont').remove();
    });

    $('.image').click(function() {
      var id = $(this).parent().parent().attr('id');
      if (id == 'ras') {
        $('#icompete-event').hide();
        $('#req-event').hide();
        $('#ras-event').show();
      }
      else if (id == 'icompete') {
        $('#icompete-event').show();
        $('#req-event').hide();
        $('#ras-event').hide();
      }
      else if (id == 'recruitment') {
        $('#icompete-event').hide();
        $('#req-event').show();
        $('#ras-event').hide();
      }
    });
});
