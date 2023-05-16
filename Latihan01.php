<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan Form 01</title>
</head>
<body>

    <form name="Latihan01" method="POST" onsubmit="return checkform(this)">
        <div>
            NIM
            <input type="text" name="txNIM">
        </div>
        <div>
            NAMA
            <input type="text" name="txNAMA">
        </div>
        <div>
            JENIS KELAMIN
            <input type="radio" name="txJK" value="L">Laki-Laki
            <input type="radio" name="txJK" value="P">Perempuan
        </div>
        <div>
            JURUSAN
            <select name="txJURUSAN">
                <option value="TI-KAB">TI-KAB<option>
                <option value="TI-MTI">TI-MTI<option>
                <option value="TI-PAR">TI-PAR<option>
                <option value="SK">SK<option>
                <option value="DKV">DKV<option>
                <option value="DGM">DGM<option>
            </select>
        </div>
        <div>
            HOBI
            <input type="checkbox" name="menyanyi">Menyanyi
            <input type="checkbox" name="memasak">Memasak
            <input type="checkbox" name="menari">Menari
            <input type="checkbox" name="olahraga">Olahraga
            <input type="checkbox" name="menulis">Menulis
            <input type="checkbox" name="melukis">Melukis
            <input type="checkbox" name="menangis">Menangis
            <input type="checkbox" name="berenang">Berenang
            <input type="checkbox" name="bermain">Bermain
            <input type="checkbox" name="bermain musik">Bermain Musik
        </div>

        <div>
            <button type="submit"> Kirim Data </button>
        </div>
    </form>

    <script>
        function checkform(frm) {
            let f = frm.elements;
            let nim = f.namedItem("txNIM").value;
            console.log("NIM: "+nim);

            let nama = f.namedItem("txNAMA").value;
            console.log("NAMA: "+nama);

            let jeniskelamin = f.namedItem("txJK").value;
            console.log("JENIS KELAMIN: "+jeniskelamin);

            let jurusan = f.namedItem("txJURUSAN").value;
            console.log("JURUSAN: "+jurusan);

            let hobi_menyanyi = f.namedItem("menyanyi").checked;
            let hobi_memasak = f.namedItem("memasak").checked;
            let hobi_menari = f.namedItem("menari").checked;
            let hobi_olahraga = f.namedItem("olahraga").checked;
            let hobi_menulis = f.namedItem("menulis").checked;
            let hobi_melukis = f.namedItem("melukis").checked;
            let hobi_menangis = f.namedItem("menangis").checked;
            let hobi_berenang = f.namedItem("berenang").checked;
            let hobi_bermain = f.namedItem("bermain").checked;
            let hobi_bermainmusik = f.namedItem("bermain musik").checked;

            console.log("HOBI_MENYANYI: "+hobi_menyanyi);
            console.log("HOBI_MEMASAK: "+hobi_memasak);
            console.log("HOBI_MENARI: "+hobi_menari);
            console.log("HOBI_OLAHRAGA: "+hobi_olahraga);
            console.log("HOBI_MENULIS: "+hobi_menulis);
            console.log("HOBI_MELUKIS: "+hobi_melukis);
            console.log("HOBI_MENANGIS: "+hobi_menangis);
            console.log("HOBI_BERENANG: "+hobi_berenang);
            console.log("HOBI_BERMAIN: "+hobi_bermain);
            console.log("HOBI_BERMAIN MUSIK: "+hobi_bermainmusik);
            return false;

        

        }
    </script>
    
</body>
</html>