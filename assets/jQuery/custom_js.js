$(document).ready(function(){
//alert('ujuruyruyr');
//$( "#menu-item-293 > ul" ).append( "<li></li>" );
//$( "#menu-item-293 > ul > li:nth-child(2)" ).addClass("menu-item menu-item-type-post_type menu-item-object-page menu-item-294 nav-item");
//$( "#menu-item-293 > ul > li:nth-child(2)" ).html( "<a href='http://localhost/wp-login.php'>Test Login</a>" );
//$( "#menu-item-293 > ul > li:nth-child(2)" ).addClass( "dropdown-item" );

//$("#navbarsExample04 > a").prependTo("#menu-item-293 > ul");

/* Adding Clases for Pagination Elements */

$( "#nap_naz_pag li a" ).addClass( "page-link" );
$( "#paginacija li a" ).addClass( "page-link" );
$('[data-toggle="tooltip"]').tooltip();

});

// ODVAJA BODY SAJTA OD NAVBAR-A
$(document).ready(function(e) {
   var h = $('#main_navbar').height()+15;
$('#header_container').animate({ paddingTop: h });
});

$(document).ready(function() {
    $("div.bhoechie-tab-menu>ul.list-group>a").click(function(e) {
        e.preventDefault();
        $(this).siblings('a.active').removeClass("active");
        $(this).addClass("active");
        var index = $(this).index();
        $("div.bhoechie-tab>div.bhoechie-tab-content").removeClass("active");
        $("div.bhoechie-tab>div.bhoechie-tab-content").eq(index).addClass("active");
    });
});