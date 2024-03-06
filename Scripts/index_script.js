let form_elem;  
let show_filed=0;
function select_change(val){
	let ob1 = document.getElementById('acc_no');
	let ob2 = document.getElementById('passwd_f');
	let ob3 = document.getElementById('submit_b');
	console.log(val);
	if( val !== '--'){
		ob1.disabled=false;
		ob2.disabled=false;
		ob3.disabled=false;
	}
	else {
		ob1.disabled=true;
		ob2.disabled=true;
		ob3.disabled=true;
	}
}	



function enter_data(obj){
	console.log(obj);
	form_elem = obj;
	if (obj.id == 'acc_no' || obj.id == 'passwd_f' || obj.id == 'keypad'){
		document.getElementById('keypad').style.display='flex';
	}
	else {
		hide_keypad();
	}
}



function func(val){
	form_elem.value += val;
}

function backspace_func(){
	form_elem.value=form_elem.value.slice(0,-1);
}