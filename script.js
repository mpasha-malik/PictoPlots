var icons =  ["image1", "image2", "image3", "image4", "image5", "image6", "image7", "image8", "image9", "image10"];
var Movies =  ["Gladiator", "game of thrones", "venom", "The godfather", "Inception", "Forrest Gump", "Parasite", "Spider Man", "Joker", "The Batman"];


function showTitle() {
    var movie_name = $("#movie_name"). val();
    $("#show_title").html('Title: "' + movie_name + '"');     
};

function getMovie() {
    $("#show_title"). html("");
    var get_movie = $("#get_movie"). val();
    if(get_movie == 8){
        $("#next_play").hide();
    }
    var movie_number = parseInt(get_movie) + 1;
    $("#get_movie").val(movie_number);
     $("#movie_icon").attr("src","/PictoPlots/" + icons[movie_number] + ".png");
    $("#movie_name").val(Movies[movie_number]);
};