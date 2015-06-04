// ready
$(document).ready(function () {
    $.get( "php/generateMenu.php", function( data ) {
        $( "#menu" ).html( data );
        $('.dropdown-submenu > a').submenupicker();
    });
});
