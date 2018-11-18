$ = jQuery.noConflict();
$(document).ready(function() {
    $("body").on("click", "#log_out", function () {
        App.deleteCookie('Authorization');
        location.href = '/login/';
    });
    
});