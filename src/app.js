$(document).ready(function(){
    const source = $("#disco-template").html();
    var template = Handlebars.compile(source);

    $.ajax({
        url: '../database/dischi.php',
        method: 'GET',
        success: function(data) {
            for (var i = 0; i < data.length; i++) {
                var context = {
                poster: data[i].poster,
                title: data[i].title,
                author: data[i].author,
                year: data[i].year,
            };
                var html = template(context);
                $('.dischi-box').append(html);
            }
        }

    });
});
