function contar(){
	document.querySelector('#btn_prin_contador').onclick=mostrar_alerta;
}
function mostrar_alerta(){
	document.querySelector('#btn_prin_contador').style.display= 'none';
	var actual=document.querySelector('.cuenta_atras').innerHTML
	if(actual>0){
		document.querySelector('.cuenta_atras').innerHTML= actual - 1;
		setTimeout("mostrar_alerta()",1000);
	}else{
		document.querySelector('.cuenta_atras').style.display= 'none';
		document.querySelector('.span_escrito').innerHTML= 'Ya ha sido actualizada su cuenta';
	}
}
window.onload=contar;
function aparecer(){
	document.querySelector('div.contador').style.display= 'block';
	document.querySelector('div.contador_espera').style.display= 'none';
}

function cambiaPes(n){
	if(n=="1"){
		document.querySelector('#pes_1').style.display="block";
		document.querySelector('#pes_2').style.display="none";
		document.querySelector('#pes_3').style.display="none";
		document.querySelector('#pes_4').style.display="none";
		document.querySelector('#pes_5').style.display="none";
		document.querySelector('#la_2').style.color="444";
		document.querySelector('#la_3').style.color="444";
		document.querySelector('#la_4').style.color="444";
		document.querySelector('#la_5').style.color="444";
		principal.style.background="#3399ff";
		principala.style.color="#EEE";
	}
	if(n=="2"){
		document.querySelector('#pes_1').style.display="none";
		document.querySelector('#pes_2').style.display="block";
		document.querySelector('#pes_3').style.display="none";
		document.querySelector('#pes_4').style.display="none";
		document.querySelector('#pes_5').style.display="none"
		document.querySelector('#la_2').style.color="fff";
		document.querySelector('#la_3').style.color="444";
		document.querySelector('#la_4').style.color="444";
		document.querySelector('#la_5').style.color="444";
		principal.style.background="hsla(0,0%,91%,1)";
		principala.style.color="#444";
	}
	if(n=="3"){
		document.querySelector('#pes_1').style.display="none";
		document.querySelector('#pes_2').style.display="none";
		document.querySelector('#pes_3').style.display="block";
		document.querySelector('#pes_4').style.display="none";
		document.querySelector('#pes_5').style.display="none";
		document.querySelector('#la_2').style.color="444";
		document.querySelector('#la_3').style.color="fff";
		document.querySelector('#la_4').style.color="444";
		document.querySelector('#la_5').style.color="444";
		principal.style.background="hsla(0,0%,91%,1)";
		principala.style.color="#444";
	}
	if(n=="4"){
		document.querySelector('#pes_1').style.display="none";
		document.querySelector('#pes_2').style.display="none";
		document.querySelector('#pes_3').style.display="none";
		document.querySelector('#pes_4').style.display="block";
		document.querySelector('#pes_5').style.display="none";
		document.querySelector('#la_2').style.color="444";
		document.querySelector('#la_3').style.color="444";
		document.querySelector('#la_4').style.color="fff";
		document.querySelector('#la_5').style.color="444";
		principal.style.background="hsla(0,0%,91%,1)";
		principala.style.color="#444";
	}
	if(n=="5"){
		document.querySelector('#pes_1').style.display="none";
		document.querySelector('#pes_2').style.display="none";
		document.querySelector('#pes_3').style.display="none";
		document.querySelector('#pes_4').style.display="none";
		document.querySelector('#pes_5').style.display="block";
		document.querySelector('#la_2').style.color="444";
		document.querySelector('#la_3').style.color="444";
		document.querySelector('#la_4').style.color="444";
		document.querySelector('#la_5').style.color="fff";
		principal.style.background="hsla(0,0%,91%,1)";
		principala.style.color="#444";
	}
}

function cambiaPes2(n, p, t){
	if(n=="1"){
		alert(n);
		for(var i=0;i<t;i++){
			alert('Hay '+t+' valores, vamos por el '+i+', suma: '+t+i);
			/*if(n==i){
				document.querySelector('#pes_'+i).display = 'block';
			}else{
				document.querySelector()
			}*/
		}
	}
}






















