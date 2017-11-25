$(function()
{
	$('#NombreProyecto').on('change',onSelectProyect);

});

function onSelectProyect()
{
	var project_id=$(this).val();
	alert(project_id);
}