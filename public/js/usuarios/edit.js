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




