<html>

<head>
    <title>TOKO SEPATU</title>

    <style>
        .error1 {
            color: black;
        }
    </style>
</head>

<body>
    <center>
        <form action="<?= base_url('tokosepatu/cetak'); ?>" method="post">
            <table>
                <tr>
                    <th>
                        <h2>TOKO SEPATU</h2>
                        <hr>
                    </th>
                </tr>
                <tr>>
                <td><b>Nama Pembeli</td>
 			<td>:</td>
 			<td>
 				<input type="text" name="nama" value="<?php echo set_value('nama'); ?>"
            </td>
                </tr>
 			<td><?=form_error('nama'); ?></td>
                <tr>
                    <td class="error1"><b> <?= form_error('nama'); ?></b></td>
                </tr>
                <tr>
                <tr>
 			<td><b>Nomer HP<b></td>
 			<td>:</td>
 			<td>
                 <input type="text" name='no' id='no' placeholder="No HP"></td>
                </tr>
                <tr>
                    <td class="error1"><b> <?= form_error('no'); ?></b></td>
                </tr>
                <tr>
            <td><b>Merek Sepatu</b></td>
 			<td>:</td>
 			<td>
                        <select name="merk" id="merk">
                            <option value="">--Pilih Merk Sepatu--</option>
                            <option value="Nike">NIKE</option>
                            <option value="Adidas">ADIDAS</option>
                            <option value="Kickers">KICKERS</option>
                            <option value="Eiger">EIGER</option>
                            <option value="Bucherri">BUCHERRI</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td class="error1"><b> <?= form_error('merk'); ?></b></td>
                </tr>
                <tr>
 			<td><b>Ukuran Sepatu</b></td>
 			<td>:</td>
 		    <td>
 				<select name="size" id="size">
 					<option value="">Pilih</option>
 					<option value="32">32</option>
 					<option value="33">33</option>
 					<option value="34">34</option>
 					<option value="35">35</option>
 					<option value="36">36</option>
 					<option value="37">37</option>
 					<option value="38">38</option>
 					<option value="39">39</option>
 					<option value="40">40</option>
 					<option value="41">41</option>
 					<option value="42">42</option>
 					<option value="43">43</option>
 					<option value="44">44</option>
 				</select>
 			<td><? form_error('size'); ?></td>
 		</tr>
              <tr>
                    <td class="error1"><b> <?= form_error('size'); ?></b></td>
                </tr>
                <tr>
                    <td align="center" colspan="3">
                        <input type="submit" name="KONFIRMASI">
                        <input type="reset" name="BATAL">
                    </td>
                </tr>
            </table>
    </center>
</body>

</html>