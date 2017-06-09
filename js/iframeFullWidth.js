$( document ).ready(function() {
    (function($, viewport){
        var width = $(".width-match-element").first().width();
        $(".full-width").attr("width", width);
        
        // Execute code each time window size changes
        $(window).resize(
            viewport.changed(function() {
                var width = $(".width-match-element").first().width();
                $(".full-width").attr("width", width);
            })
        ); 

    })(jQuery, ResponsiveBootstrapToolkit);
});
