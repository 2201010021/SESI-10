<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan Form 02</title>
</head>
<body>

    <form name="Latihan02" id="Latihan02" method="POST" onsubmit="return checkform(this)">
        <div>
            NIM
            <input type="text" id="nim" name="txNIM">
        </div>
        <div>
            NAMA
            <input type="text" id="nama" name="txNAMA">
        </div>
        <div>
            JENIS KELAMIN
            <input type="radio" name="txJK" id="JK" value="L">Laki-Laki
            <input type="radio" name="txJK" id="JK" value="P">Perempuan
        </div>
        <div>
            JURUSAN
            <select id="jurusan" name="txJURUSAN">
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
            <input type="checkbox" id="txhobi" name="menyanyi">Menyanyi
            <input type="checkbox" id="txhobi" name="memasak">Memasak
            <input type="checkbox" id="txhobi" name="menari">Menari
            <input type="checkbox" id="txhobi" name="olahraga">Olahraga
            <input type="checkbox" id="txhobi" name="menulis">Menulis
            <input type="checkbox" id="txhobi" name="melukis">Melukis
            <input type="checkbox" id="txhobi" name="menangis">Menangis
            <input type="checkbox" id="txhobi" name="berenang">Berenang
            <input type="checkbox" id="txhobi" name="bermain">Bermain
            <input type="checkbox" id="txhobi" name="bermain musik">Bermain Musik
        </div>

        <div>
            <button type="submit"> Kirim Data </button>
        </div>
    </form>

    <script>
        function checkform() {
            let f = document.getElementById("Latihan02").elements;
            let nim = f.nim.value;
            console.log("NIM: "+nim);

            let nama = f.nama.value;
            console.log("NAMA: "+nama);

            let jeniskelamin = f.JK.value;
            console.log("JENIS KELAMIN: "+jeniskelamin);

            let jurusan = f.jurusan.value;
            console.log("JURUSAN: "+jurusan);

            let hobi_menyanyi = f.txhobi[0].checked;
            let hobi_memasak = f.txhobi[1].checked;
            let hobi_menari = f.txhobi[2].checked;
            let hobi_olahraga = f.txhobi[3].checked;
            let hobi_menulis = f.txhobi[4].checked;
            let hobi_melukis = f.txhobi[5].checked;
            let hobi_menangis = f.txhobi[6].checked;
            let hobi_berenang = f.txhobi[7].checked;
            let hobi_bermain = f.txhobi[8].checked;
            let hobi_bermainmusik = f.txhobi[9].checked;

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