(function ( $ ) {
   $.fn.TimerRotate = function( options ) {
       var self = this;
       var settings = $.extend({
           target: ".rotate_item",
           interval: 3000,
           fadetime: 300,
       }, options );

       function Test(items,index) {
            last = index - 1 ;
            last = (last <0 ) ?  items.length - 1 : last;
            index = (index > items.length -1) ? 0 : index;

            $(items[last]).animate({ opacity: 0.0},settings.fadetime);
            $(items[index]).animate({ opacity: 1.0},settings.fadetime);

            setTimeout(function(){Test(items,index +1)}, settings.interval+settings.fadetime);
       };

       this.find(settings.target).css("opacity",0.0);
       this.find(settings.target).first().css("opacity",1.0);
       return Test(self.find(settings.target),0);
   };
}( jQuery ));