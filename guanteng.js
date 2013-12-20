//by Richad Avianto '3')/

function showPopUpAdd(cmd) {
	document.getElementById("wrapper_popup").style.display = cmd;
	if(cmd == "none") {
		document.getElementById("txt_nama").value = null;
		document.getElementById("txt_username").value = null;
		document.getElementById("txt_password").value = null;
		document.getElementById("btn_save").style.display = 'block';
		document.getElementById("btn_update").style.display = 'none';
	document.getElementById("cap_editor").innerHTML = 'Tambah User';
	}
}
function showPopUpLoading(cmd) {
	document.getElementById("wrapper_loading").style.display = cmd;
}
function bikinAjx() {
	if (window.XMLHttpRequest) {
		return new XMLHttpRequest;
	}
	if (window.ActiveXObject) {
		return new ActiveXObject("Microsoft.XMLHTTP");
	}
}
function hasilData() {
	var data;
	if (doIt.readyState==4 && doIt.status==200) {
		data = doIt.responseText;
		showData();
		//window.location.href="index.php?by+a+v+i+a+n+t+o+r+i+c+h+a+d";
	} else {
		showPopUpLoading('block');
	}
}

function aksi(list, param1) {
	doIt = bikinAjx();
	switch(list){
		case "add_user":
			var apaYa = 'exe=add_user&nama='+document.getElementById("txt_nama").value+'&username='+document.getElementById("txt_username").value+'&password='+document.getElementById("txt_password").value;
			break;
		case "update_user":
			var apaYa = 'exe=update_user&nama='+document.getElementById("txt_nama").value+'&username='+document.getElementById("txt_username").value+'&password='+document.getElementById("txt_password").value+'&id='+document.getElementById("txt_id").value;
			break;
		case "del_user":
			var apaYa = 'exe=del_user&id='+param1;
			break;			
		default:
			break;
	}
	var url="proses_user.php";
	doIt.onreadystatechange=hasilData;
	doIt.open("POST", url, true);
	doIt.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
	doIt.send(apaYa);
}

function edit(id, nama, username, password) {
	document.getElementById("cap_editor").innerHTML = 'Edit User';
	document.getElementById("txt_id").value = id;
	document.getElementById("txt_nama").value = nama;
	document.getElementById("txt_username").value = username;
	document.getElementById("txt_password").value = password;
	document.getElementById("btn_save").style.display = 'none';
	document.getElementById("btn_update").style.display = 'block';
	showPopUpAdd('block');
}

function showData() {
	doIt = bikinAjx();
	var url="view_user.php";
	url=url+"?sid="+Math.random();
	doIt.onreadystatechange=showDataResult;
	doIt.open("GET",url,true);
	doIt.send(null);
}

function showDataResult() {
	var data;
	if (doIt.readyState==4 && doIt.status==200) {
		data = doIt.responseText;
		document.getElementById("view_data").innerHTML = data;
		showPopUpAdd('none');
		showPopUpLoading('none');
	} else {
		showPopUpLoading('block');
	}
}