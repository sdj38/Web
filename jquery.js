/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

$(document).ready(function(){
    $("#fish").slideUp();
    $("#inform").slideUp();
});
$(document).ready(function(){
    $("#home").click(function(){
        $("#fish").slideToggle();
    });
    $("#about").click(function(){
        $("#inform").slideToggle();
    });
   $("#home").hover(function(){
    $("#home").css("background-color", "cornsilk");
    }, function(){
    $("#home").css("background-color", "moccasin");
});
 $("#about").hover(function(){
    $("#about").css("background-color", "cornsilk");
    }, function(){
    $("#about").css("background-color", "moccasin");
});
 $("#home").hover(function(){
    $("#home").css("background-color", "cornsilk");
    }, function(){
    $("#home").css("background-color", "moccasin");
});
 $("#ments").hover(function(){
    $("#ments").css("background-color", "cornsilk");
    }, function(){
    $("#ments").css("background-color", "moccasin");
});
});