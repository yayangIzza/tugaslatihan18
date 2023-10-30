Nama  : Yayang Izzatul Haq<br>
NIM   : 22205052<br>
Kelas : PBO<br>


<form action="" method="POST">
    <table>
        <tr>
            <td>masukan nilai awal</td>
            <td>:</td>
            <td><input type="text" name="nilai" placeholder="masukan nilai" required <>/td>
        </tr>
            <tr>
                <td>masukan nilai kelipatan</td>
                <td>:</td>
                <td><input type="text" name="lipat" placeholder="masukan nilai kelipatan" reqired <>/td>
</tr>
<tr>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
                <td><input type="submit" name="submit" value="TAMPILKAN" <>/td>
</tr>
</table>
</form>

<php
if (isset($POST[ 'submit' ])) {
    $nilai = $_POST ['nilsi' ];
    $lipat = $_POST ['lipat' ];

    for ($i= 1; $i <= $nilai; $i++) {
        if ( $bagi = $i % $lipat == 0) {

            echo ' kelipatan nilai ' . $lipat . ' dari nilai ' . $nilai . ' adalah  . $i . '<br>';
        }
    }

}
?>