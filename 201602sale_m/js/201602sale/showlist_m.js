// JavaScript Document

$(function(){
        $("#AA").on("touchstart click", MENUDOWN);      
        function MENUDOWN(){
                $("#MENU").removeClass("UPUP").addClass("DOWNDOWN");
                $(".bg").show();           
                $(".close_btn").on("touchstart click", MENUUP);
                return false;
        } 
        function MENUUP(){       
                $("#MENU").removeClass("DOWNDOWN").addClass("UPUP");
                  $(".bg").hide();
                $(".close_btn").off("touchstart click", MENUUP);
                return false;
        }
})



