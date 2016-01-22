(function($){
    $.fn.tableStyler = function(params){
        //parameters
        var defaults = {
            thBgColor: '#4CAF50',
            thTxtColor: 'black',
            trEven: '#f2f2f2',
            trOdd: 'white',
            trHover: 'grey'
        };

        var params = $.extend(true, {}, defaults, params);
        return this.each(function(){
            if(!(params.thTxtColor === 'white')){
                if(params.thBgColor === 'black'){
                    params.thTxtColor = 'white';
                }
            }

        //table
           $(this).css({
               'width': '100%',
               'text-align': 'center',
               'border-spacing': '2px'
           });
        //th
           $(this).find('th').css({'background-color':params.thBgColor, 'color': params.thTxtColor});
        //tr even
           $(this).find('tr:even')
               .css('background-color', params.trEven)
               .hover(
                   function(){
                   $(this).css('background-color', params.trHover)
                   },
                   function(){
                       $(this).css('background-color', params.trEven)
                   }
               );
        //tr odd
            $(this).find('tr:odd')
                .css('background-color', params.trOdd)
                .hover(
                    function(){
                        $(this).css('background-color', params.trHover)
                    },
                    function(){
                        $(this).css('background-color', params.trOdd)
                    }
                );

           });

        };

})(jQuery);

