$(document).ready(function(){
    var filter = $("#price-filter");
    var price = $("#price");
    var manufacturer = $("#manufacturer");
    var amount = $("#amount");
    var category = $('#category');

    filter.slider({
        range: "min",
        value: parseInt(filter.attr('data-start')),
        min: parseInt(filter.attr('data-min')),
        max: parseInt(filter.attr('data-max')),
        slide: function( event, ui ) {
            price.val( ui.value );
        }
    });
    price.val( filter.slider( "value" ) );

    manufacturer.selectmenu().selectmenu( "menuWidget" ).addClass( "selectoverflow" );
    amount.selectmenu().selectmenu( "menuWidget" ).addClass( "selectoverflow" );
    category.selectmenu().selectmenu( "menuWidget" ).addClass( "selectoverflow" );
});

$('.open-nav').click(function(){
    var navigation = $('#navigation');
    if(navigation.attr('data-active') == 'no'){
        navigation.addClass('active');
        navigation.attr('data-active', 'yes');
    } else {
        navigation.removeClass('active');
        navigation.attr('data-active', 'no');
    }
});