const validar=()=>{
const pro_nombre=document.querySelector('#pro_nombre');
const pro_precio=document.querySelector('#pro_precio');
const prov_id=document.querySelector('#prov_id');

if(pro_nombre.value.length==0){
	Swal.fire({
		icon: 'error',
		title:'ERROR',
		text:'El campo nombre es obligatorio'
	});
	return false;
     }
if(pro_precio.value.length==0){
	Swal.fire({
		icon: 'error',
		title:'ERROR',
		text:'El campo precio es obligatorio'
	});
	return false;
     }

     if(prov_id.value.length==0){
	Swal.fire({
		icon: 'error',
		title:'ERROR',
		text:'El campo proveedor es obligatorio'
	});
	return false;
     }

         
}