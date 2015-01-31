$(function(){

  $('button').click(function(){

    $.getJSON('/services/authorsToJson.php', function(data) {
  	    $.each(data, function(id, obj) {
  		      $("#table").append("<tr><td>" + obj.name + " </td><td>" + obj.jokeid + "</td><td>" + obj.joketext + "</td></tr>");
  	     });
  	}); 

  });
}); 