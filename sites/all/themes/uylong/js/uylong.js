(function ($) {
    Drupal.behaviors.uylong= {
        attach: function(context, settings) {
           $(".block-menu-menu-primary-menu ul.menu li a").each(function(){
               $(this).hover(function(){
                   $(this).parent().addClass('active-hover');
               });
               $(this).mouseout(function(){
                   $(this).parent().removeClass('active-hover');
               });
               if($(this).hasClass('active')){
                   $(this).parent().addClass('active');
               }else{
                   $(this).parent().removeClass('active');
               }

           });

            $(".sidebar-first .menu-name-main-menu ul.menu li a").each(function(){
                $(this).wrap('<div class="parent-item"/>');
            });

            $(".sidebar-first .menu-name-main-menu ul.menu li ul.menu").hide();

            $(".sidebar-first .menu-name-main-menu ul.menu li").each(function(){
                    var ul_child = $('ul.menu',this);
                        if($(this).hasClass('active') || $(this).hasClass('active-trail')){
                            ul_child.show();
                        }else{
                            ul_child.hide();
                        }

            });
        }
    }
})(jQuery);