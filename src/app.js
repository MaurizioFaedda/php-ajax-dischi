$(document).ready(function(){
    const source = $("#disco-template").html();
    var template = Handlebars.compile(source);

    if($(".dischi-box").children().length == 0){

        $.ajax({
            url: '../database/dischi.php',
            method: 'GET',
            success: function(data) {
                var genres = [];
                for (var i = 0; i < data.length; i++) {
                    var context = {
                        poster: data[i].poster,
                        title: data[i].title,
                        author: data[i].author,
                        year: data[i].year,
                    };
                    var html = template(context);
                    $('.dischi-box').append(html);
                    var current_genre = data[i].genre;
                    if(!genres.includes(current_genre)) {
                        genres.push(current_genre);
                    }
                }
                for (var i = 0; i < genres.length; i++) {
                    $('#genres').append(`
                        <option value="${genres[i]}">${genres[i]}</option>
                    ` );

                }
            }


        });
    };


    $('#genres').change(function(){

        $('.dischi-box').empty();

        var selected_genre = $(this).val();

        $.ajax({
            url: '../database/dischi.php',
            method: 'GET',
            data: {
                genre: selected_genre
            },
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

});
