$( document ).ready(function() {
    (function($, viewport){
        
        var width = $(".width-match-element").first().width();
    
        // For XS and SM
        if( viewport.is('<md') ) {
            $(".timeline-right").toggleClass( "timeline-inverted", false );
            $("ul.timeline").attr("width", width * 2);
        }

        // For MD and LG
        if( viewport.is('>=md') ) {
            $(".timeline-right").toggleClass( "timeline-inverted", true );
        }

        // Execute code each time window size changes
        $(window).resize(
            viewport.changed(function() {
                if( viewport.is('<md') ) {
                    $(".timeline-right").toggleClass( "timeline-inverted", false );
                    width = $(".width-match-element").first().width();
                    $("ul.timeline").attr("width", width * 2);
                }
                if( viewport.is('>=md') ) {
                    $(".timeline-right").toggleClass( "timeline-inverted", true );
                    width = $(".width-match-element").first().width();
                    $("ul.timeline").attr("width", width);
                }
            })
        ); 

    })(jQuery, ResponsiveBootstrapToolkit);
});
