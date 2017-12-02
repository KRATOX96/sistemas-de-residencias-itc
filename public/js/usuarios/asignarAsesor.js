

$(function()
{
	$('#aceptar').on('click',onClickAceptar);
	

});
function onClickAceptar()
{
	var ASESORNOMBRE=$('#NombreAsesor').val();
	if(ASESORNOMBRE!='null'){
 alert('su solicitud se llevo a cabo con exito!!');
}
else
alert('No ha seleccionado ningun asesor')
}

