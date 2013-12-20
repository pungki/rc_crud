
		<table>
			<tr>
				<th width="40%">Nama Lengkap</th><th width="20%">Username</th><th width="20%">Password</th><th width="20%">Tundakan</th>
			</tr>
			<?php
			require "konektor.php";
			$qRow = mysql_query("SELECT * FROM user ORDER BY id ASC");
			while($res = mysql_fetch_array($qRow)) {
				echo "<tr><td>".$res['nama']."</td><td>".$res['username']."</td><td>".$res['password']."</td><td><center><a href='#' onclick=\"edit('$res[id]', '$res[nama]', '$res[username]', '$res[password]')\">edit</a> | <a href='#' onclick=\"cek=confirm('Anda yakin ingin menghapus item ini ?');if(cek){aksi('del_user', '$res[id]')}else{return}\">delete</a></center></td></tr>";
			} 
			?>
		</table>