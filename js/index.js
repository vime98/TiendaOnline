    /*-------Barra de busqueda--------------------------*/
    $(document).on('click', '.search',function(){
        $('.search-bar').addClass('search-bar-active')
    })
    
    $(document).on('click', '.search-cancel',function(){
        $('.search-bar').removeClass('search-bar-active')
    })

    /* logica para cambiar entre log in y registro form*/
    /*$(document).on('click', '.user,.already-account',function(){
        $('.form').addClass('login-active').removeClass('sign-up-active')
    })*/

    $(document).on('click', '.sign-up-btn',function(){
        $('.form').addClass('sign-up-active').removeClass('login-active')
    })

    $(document).on('click', '.form-cancel',function(){
        $('.form').removeClass('login-active').removeClass('sign-up-active')
    })

    /*scrip corusel*/

    $(document).ready(function() {
        $('#adaptive').lightSlider({
            adaptiveHeight:true,
            auto:true,
            item:1,
            slideMargin:0,
            loop:true
        });
    });

    /*----  Categorias destacadas slider -------------*/
    $(document).ready(function() {
        $('#autoWidth').lightSlider({
            autoWidth:true,
            loop:true,
            onSliderLoad: function() {
                $('#autoWidth').removeClass('cS-hidden');
            } 
        });  
      });

    /*nav bar estatica*/
    $(Window).scroll(function(){
        if( $(document).scrollTop() > 50){
            $('.navigation').addClass('fix-nav');
        }
        else{
            $('.navigation').removeClass('fix-nav');
        } 
    })
    /*--para ser responsivo menu----------------------------*/
    $(document).ready(function(){
        $('.toggle').click(function(){
            $('.toggle').toggleClass('active')
            $('.navigation').toggleClass('active')
        })
    })

    function toggleSignUp(e){
        e.preventDefault();
        $('#main #logreg-forms').toggle(); // display:block or none
        $('#main #logreg-forms2').toggle(); // display:block or none
    }

    $(()=>{
        // Login Register Form
        $('#main #sign-up-btn').click(toggleSignUp);
        $('#main #already-account').click(toggleSignUp);
    })