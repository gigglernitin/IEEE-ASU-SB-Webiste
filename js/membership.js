$(document).ready(function(){
    var mag = "The flagship publication of IEEE, explores the development, applications and implications of new technologies. ";
    var myIEEE = "An interactive web portal exclusive to IEEE Members which allows for the customization of the member experience using gadgets, RSS feeds, et. al. ";
    var tv = "Internet television offering exclusive programming about technology and engineering.";
    var memNET = "An online search and networking tool that enables members to connect with technical and engineering experts worldwide. ";
    var xplore = "Discounted access to more than 3 million documents. ";
    var resumeLab = "An online service that allows IEEE members to develop a resume or curriculum vitae using a wide array of resume templates. ";
    var emailAlias = "Free for members with virus protection and spam filtering. ";
    var dicounts = "Membership pays for itself with as much as 50% off IEEE products. ";
    var careerAlerts = "A weekly email containing career advice plus the job of the week from the IEEE Job Site. ";
    var jobSite = "It helps a lot to find an appropriate job related to your field in engineering.";

    $('.benefits').click(function(){
      $('.benefits').removeClass('selected');
      $(this).addClass('selected');
      var currentID = $(this).attr('id');
      var topContainerID = $(this).parent().parent().attr('id');
      $('#cont-ben').remove();

      var parentDiv = $("<div></div>");
      parentDiv.addClass('row');
      parentDiv.attr('id', 'cont-ben');

      var firstChildDiv = $("<div></div>");
      var secChildDiv = $("<div></div>");
      var thirdChildDiv = $("<div></div>");

      firstChildDiv.addClass('col-sm-1');
      secChildDiv.addClass('col-sm-10');
      secChildDiv.addClass('benefits-category-cont');

      var benefitContent = $("<p></p>");

      if (currentID == "magazine") {
        benefitContent.text(mag);
      }

      if (currentID == "my-ieee") {
        benefitContent.text(myIEEE);
      }

      if (currentID == "ieee-tv") {
        benefitContent.text(tv);
      }

      if (currentID == "member-net") {
        benefitContent.text(memNET);
      }

      if (currentID == "xplore") {
        benefitContent.text(xplore);
      }

      if (currentID == "resume-lab") {
        benefitContent.text(resumeLab);
      }

      if (currentID == "email-alias") {
        benefitContent.text(emailAlias);
      }

      if (currentID == "discounts") {
        benefitContent.text(dicounts);
      }

      if (currentID == "alerts") {
        benefitContent.text(careerAlerts);
      }

      if (currentID == "job-site") {
        benefitContent.text(jobSite);
      }

      benefitContent.addClass('mem-cont');
      benefitContent.attr('style', "color:#000000");

      secChildDiv.append(benefitContent);

      // if (currentID == "magazine") {


      // }
      thirdChildDiv.addClass('col-sm-1');

      parentDiv.attr('id', 'cont-ben');

      parentDiv.append(firstChildDiv, secChildDiv, thirdChildDiv);
      $("#"+topContainerID).append(parentDiv);
    });
});
