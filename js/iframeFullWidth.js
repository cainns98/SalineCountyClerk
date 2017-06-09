$( document ).ready(function() {
    (function($, viewport){
        var width = $(".width-match-element").first().width();
        
        // For XS
        if( viewport.is('<sm') ) {
            $(".split-list-group-item .left").toggleClass( "vertical", true );
        }

        // For SM, MD, and LG
        if( viewport.is('>=sm') ) {
            $(".split-list-group-item .left").toggleClass( "horizontal", true );
        }

        // Execute code each time window size changes
        $(window).resize(
            viewport.changed(function() {
                if( viewport.is('<sm') ) {
                    $(".split-list-group-item .left").toggleClass( "vertical", true );
                    $(".split-list-group-item .left").toggleClass( "horizontal", false );
                }
                if( viewport.is('>=sm') ) {
                    $(".split-list-group-item .left").toggleClass( "horizontal", true );
                    $(".split-list-group-item .left").toggleClass( "vertical", false );
                }
            })
        ); 

    })(jQuery, ResponsiveBootstrapToolkit);
});
