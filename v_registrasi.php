<section> 
    <h1><?php echo $judul ?></h1>
    <table>
    <tr>
					<th>E-mail</th>
					<th>:</th>
					<td>
						<input type="text" name="e-mail" id="e-mail">
					</td>
				</tr>
				<tr>
					<th>Username</th>
					<td>:</td>
					<td>
						<input type="text" name="username" id="username">
					</td>
				</tr>
                <tr>
					<th>Password</th>
					<th>:</th>
					<td>
						<input type="password" name="password" id="password">
					</td>
				</tr>
                <tr>
					<th>Alamat</th>
					<th>:</th>
					<td>
						<input type="text" name="alamat" id="alamat">
					</td>
				</tr>
                <tr>
					<th>Jenis Kelamin</th>
					<td>:</td>
					<td>
						<select name="jenis-kelamin" id="jenis-kelamin">
							<option value="">Pilih Jenis Kelamin</option>
							<option value="Laki-laki">Laki-laki</option>
							<option value="Perempuan">Perempuan</option>
						</select>
					</td>
				</tr>
				<tr>
					<td colspan="3" align="center">
						<input type="submit" value="Submit">
					</td>
				</tr>