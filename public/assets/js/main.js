var url = 'http://ecotec.com.devel';
window.addEventListener("load", function ()
{
//    $('.btn-like').css('cursor', 'pointer');
//    $('.btn-dislike').css('cursor', 'pointer');
//    //Boton like
//    function like()
//    {
//        $('.btn-like').unbind('click').click(function ()
//        {
//            console.log('like');
//            $(this).addClass('btn-dislike').removeClass('btn-like');
//            $(this).attr('src', url + '/img/hearts-red.png');
//
//            $.ajax({
//                url: url + '/like/' + $(this).data('id'),
//                type: 'GET',
//                success: function (response)
//                {
//                    if (response.like) {
//                        console.log('Has dado like a la publicación');
//                    } else
//                    {
//                        console.log('Error like');
//                    }
//                }
//            });
//
//            dislike();
//        });
//    }
//    like();
//    //Botón dislike
//    function dislike()
//    {
//        $('.btn-dislike').unbind('click').click(function ()
//        {
//            console.log('dislike');
//            $(this).addClass('btn-like').removeClass('btn-dislike');
//            $(this).attr('src', url + '/img/hearts-black.png');
//
//            $.ajax({
//                url: url + '/dislike/' + $(this).data('id'),
//                type: 'GET',
//                success: function (response)
//                {
//                    if (response.like) {
//                        console.log('Has dado dislike a la publicación');
//                    } else
//                    {
//                        console.log('Error dislike');
//                    }
//                }
//            });
//
//            like();
//        });
//    }
//    dislike();

    //Buscador
    $('#buscadorMaterial').submit(function ()
    {
        $(this).attr('action', url + '/home/materials/' + $('#buscadorMaterial #buscarMaterial').val());
    });

    $('#buscadorHerramienta').submit(function ()
    {
        $(this).attr('action', url + '/home/tools/' + $('#buscadorHerramienta #buscarHerramienta').val());
    });

    $('#buscadorEntorno').submit(function ()
    {
        $(this).attr('action', url + '/home/environments/' + $('#buscadorEntorno #buscarEntorno').val());
    });

    $('#buscadorClasificacionAsesor').submit(function ()
    {
        $(this).attr('action', url + '/home/classification-advisers/' + $('#buscadorClasificacionAsesor #buscarClasificacionAsesor').val());
    });

    $('#buscadorClasificacionServicio').submit(function ()
    {
        $(this).attr('action', url + '/home/classification-services/' + $('#buscadorClasificacionServicio #buscarClasificacionServicio').val());
    });
    
    $('#buscadorClasificacionProducto').submit(function ()
    {
        $(this).attr('action', url + '/home/classification-products/' + $('#buscadorClasificacionProducto #buscarClasificacionProducto').val());
    });
});
