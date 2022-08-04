/*=============================================
ELIMINAR PRODUCTO
=============================================*/
$(".tablas").on("click", "#btnEliminarProducto", function(){

  var idproducto = $(this).attr("idproducto");
  
  swal({
    title: '¿Está seguro de borrar el producto?',
    text: "¡Si no lo está puede cancelar la accíón!",
    type: 'warning',
    showCancelButton: true,
    confirmButtonColor: '#3085d6',
      cancelButtonColor: '#d33',
      cancelButtonText: 'Cancelar',
      confirmButtonText: 'Si, borrar producto!'
  }).then(function(result){

    if(result.value){

      window.location = "index.php?ruta=inicio&idproducto="+idproducto;

    }

  })

})