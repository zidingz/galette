/*
    By Osvaldas Valutis, www.osvaldas.info
    adapted for Galette by Johan Cwiklinski, https://galette.eu
    Available for use under the MIT License
*/

'use strict';

;(function($, window, document, undefined) {
    $(function() {
    $('.inputfile').each(function() {
        var $input     = $( this ),
            $label     = $input.prev('label'),
            labelVal = $label.html();

        $input.on('change', function (e) {
            var fileName = '';

            if (this.files && this.files.length > 1) {
                fileName = (this.getAttribute( 'data-multiple-caption') || '').replace( '{count}', this.files.length );
            } else if (e.target.value) {
                fileName = e.target.value.split('\\').pop();
            }

       console.log(fileName);
            if (fileName) {
                $label.html(fileName);
            } else {
                $label.html(labelVal);
            }
        });

        // Firefox bug fix
        $input
            .on( 'focus', function() { $input.addClass('has-focus'); })
            .on( 'blur', function() { $input.removeClass('has-focus'); });
    });
    });
})(jQuery, window, document);
