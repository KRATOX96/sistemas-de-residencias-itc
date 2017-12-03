$(function()
{
	$('#NombreProyecto').on('change',onSelectProyect);
	

});

function onSelectProyect()
{

	var project_id=$(this).val();
	if(project_id!=0){
	//AJAX

	$.get('api/proyecto/'+project_id+'/proyectosValidos',function(data){
	$('#NombreP').val(''+data[0].PROYECTONOMBRE);
	$('#Lugar').val(''+data[0].PROYECTOLUGAR);
	$('#textArea').val(''+data[0].PROYECTODESCRIPCION);
	});
}



}

$(function()
{
	$('#aceptar').on('click',onClickAceptar);
	

});

function onClickAceptar()
{
	var project_id=$('#NombreProyecto').val();
	if(project_id!=0){
 alert('su solicitud se llevo a cabo con exito!!');
}
else
alert('No ha seleccionado ningun proyecto')
}

//funcion terminar residencia

jQuery(document).ready(function($){
     $('#terminar').on('submit',function(e){
        if(!confirm('Do you want to delete this item?')){
              e.preventDefault();
        }
      });
});



