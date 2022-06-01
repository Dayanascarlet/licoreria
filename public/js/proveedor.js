const validar=()=>{
const prov_nombre=document.querySelector('#prov_nombre');
const prov_apellido=document.querySelector('#prov_apellido');
const prov_cedula=document.querySelector('#prov_cedula');
const prov_ruc=document.querySelector('#prov_ruc');

if(prov_nombre.value.length==0){
	Swal.fire({
		icon: 'error',
		title:'ERROR',
		text:'El campo nombre es obligatorio'
	});
	return false;
     }
if(prov_apellido.value.length==0){
	Swal.fire({
		icon: 'error',
		title:'ERROR',
		text:'El campo apellido es obligatorio'
	});
	return false;
     }

     if(prov_cedula.value.length==0){
	Swal.fire({
		icon: 'error',
		title:'ERROR',
		text:'El campo cedula es obligatorio'
	});
	return false;
     }
          if(prov_ruc.value.length==0){
	Swal.fire({
		icon: 'error',
		title:'ERROR',
		text:'El campo ruc es obligatorio'
	});
	return false;
     }
 }