<html>
<head>
	<title>Simple CRUD by @aviantorichad</title>
	<link rel="stylesheet" media="all" href="guanteng.css" />
	<script type="text/javascript" src="guanteng.js"></script>
</head>
<body onload="showData()">
<div id="kontainer">
	<div id="wrapper_loading">
		<div id="loading">Sedang beraksi... <span style="float:right;font-size:10px;">( <a href="#" onclick="showPopUpLoading('none')">cancel</a> )</span></div>
	</div>
	<div id="header"><center><h1>Simple CRUD</h1></center></div>
	<div><center><h3>Tabel Semua User</h3></center></div>
	<div style="text-align:right;"><input type="button" id="btn_add" name="add" value="Tambah User" onclick="showPopUpAdd('block')" /></div>
	<div id="view_data"></div>
	<div id="wrapper_popup">
		<div id="popup_add">
			<div><center><h3><span id="cap_editor">Tambah User</span></h3></center></div>
			<div><input type="hidden" name="id" id="txt_id"/></div>
			<div><input type="text" name="nama" id="txt_nama" maxlength="50" placeholder="nama lengkap user" /></div>
			<div><input type="text" name="username" id="txt_username" maxlength="10" placeholder="username" /></div>
			<div><input type="password" name="password" id="txt_password" maxlength="32" placeholder="password" /></div>
			<div style="text-align:center"><input type="button" name="update" id="btn_update" value="Update" onclick="aksi('update_user')" /><input type="button" name="save" id="btn_save" value="Simpan" onclick="aksi('add_user')" /><input type="button" name="cancel" id="btn_cancel" value="Close" class="cancel" onclick="showPopUpAdd('none')" /></div>
		</div>
	</div>
	<div id="footer">
		<center><h5>copyleft &copy; kamiberdua<br/><a href="http://warungkost.com" title="Terimakasih Udah Diajarin Mas" target="_blank">Belajar Bersama</a></h5></center>
	</div>
</div>
</body>
</html>