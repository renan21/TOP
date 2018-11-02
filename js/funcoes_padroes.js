/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
$(function(){
    $('body').ready(function(){
        console.log("teste");
    });
});

function showMsg(msg, time){
    $("#div_msg").remove();
    $('body').append("<div id='div_msg' style='background-color: rgba(0,0,0,0.7); text-align: center; position: fixed; top: 20px; padding: 20px; width: 500px;  border-radius: 50px; color: white; font-weight: bold; left: calc(50% - 250px); z-index: 15000'>"+ msg +"</div>");
    setTimeout(function(){
        $("#div_msg").remove();
    }, time);
}

