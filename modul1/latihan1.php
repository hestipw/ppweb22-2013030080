<!Doctype html>
<html>
<head>
	<title>Kalkulator</title>
	<style>
         table{background:blue; padding:10px; border-radius:5px;}
         table input{width:100%; border:0px;}
         table tr td select{width:100%;}
        </style>
</head>
<body>
	<form method="post" action="">
		<table>
			<tr>
				<td>Kalkulator</td>
			</tr>
			<tr>
				<td colspan="2"><input type="text" name="satu" value=""></td>
			</tr>
			<tr>
				<td colspan="2"><input type="text" name="dua" value=""></td>
			</tr>
			<tr>
				<td colspan="2">
					<select name="operator">
						<option>- Pilih Operator -</option>
						<option value="+">+</option>
						<option value="-">-</option>
						<option value="X">X</option>
						<option value="/">/</option>
					</select>
				</td>
			</tr>
			<tr>
				
				<td><input type="submit" name="submit" value="="></td>
			</tr>
			<tr>
				<td colspan="2"><input type="text" name="hasil" value=""></td>
			</tr>
	</form>
</body>
</html>