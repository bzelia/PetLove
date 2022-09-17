<!doctype html>
<html lang="pt-br">
    <head>
        <link rel="stylesheet" href="stylesheet.css">
        <script src="jquery-2.1.4.min.js"></script><!--Versão 3.1.0-->
        <script src="javascript.js"></script>
        <style>
            .container{ width: 100%; }
.popup{position:absolute; width: 30%; height: 200px; background: #CCC; border-radius:10px; padding: 10px; display:none;}
.login{float:left;  background: #333; color: #FFF; font-weight:bold; border-radius: 5px; text-align:center; padding: 20px; cursor:pointer;}
            </style>
    </head>
            
    <body>         
        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ad at consectetur consequuntur, cumque, cupiditate earum esse excepturi facilis in molestias neque, porro quisquam quos rem saepe sapiente similique tempore voluptates.
        <div class="login">Login</div>
        <div class="popup"><h1>Popup</h1></div>


        <script>
            $(document).ready(function(){
    $('.login').on('click',function(){
        var larguradatela=$(window).width();
        var larguradoelemento=$('.popup').width();
        var alturadatela=$(window).height();
        var alturadoelemento=$('.popup').height();
        var alturadodocumento=$(document).height();
        var left=((larguradatela - larguradoelemento)/2);
        var top=((alturadodocumento - alturadatela)+(alturadatela - alturadoelemento)/2);

        $('.popup').css({
            'display':'block',
            'top':top,
            'left':left
        });

        $('.container').css({
            'background':'#000'
        });

        $('body').css({
            'background': '#000'
        });
    });
});
        </script>
    </body>
</html>