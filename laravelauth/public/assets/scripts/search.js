var Search = function () {

         // initialize the toggle switches
        var inittoggles = function () {
                jQuery('.toggleyes').toggles({
                    text:{
                        on:'YES',
                        off:'NO'
                    }
                });
            
            
        }

        return {

            //main function to initiate the theme
            init: function () {

                //IMPORTANT!!!: Do not modify the core handlers call order.

                //core handlers
                inittoggles(); // initialize toggle switches  
            }

        }
}();