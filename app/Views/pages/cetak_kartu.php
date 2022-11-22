<style>
    .card{
        height: 204px; 
    width: 323px; 
    background-image: url('/assets/AdminLTE-3.2.0/img/bg.png');
    }
</style>

<body>
    <div class="card">
        <img style="position: absolute; width: 27px; height: 34px; left: 25px; top: 17px;" src="/Assets/AdminLTE-3.2.0/img/siber-ket-with-bg.png">
        <span style="position: absolute; width: 105px; height: 14px; left: 99px; top: 22px; font-family: 'Inter'; font-style: normal; font-weight: 700; font-size: 12px; line-height: 15px; text-align: center; color: #FFFFFF;"><b>KARTU MEMBER</b></span>
        <span style="position: absolute; width: 185px; height: 9px; left: 58px; top: 36px; font-family: 'Inter'; font-style: normal; font-weight: 600; font-size: 10px; line-height: 12px; text-align: center; color: #FFFFFF;"><b>SIBER-KET</b></span>
        <table cellspacing="0em" style="position: absolute; width: 236px; height: 11px; left: 39px; top: 71px; font-family: 'Inter'; font-style: normal; font-weight: 500; font-size: 10px; line-height: 12px; color: #FFFFFF;">
            <div class="row">
                <tr>
                    <td scope="col">Nama</td>
                    <td>: <?= $member['namaLengkap'] ?></td>
                </tr>
                <tr>
                    <td scope="col">NIK</td>
                    <td>: <?= $member['nik'] ?></td>
                </tr>
                <tr>
                    <td scope="col">Alamat</td>
                    <td>: <?= $member['alamat'] ?></td>
                </tr>
            </div>
        </table>
    </div>  
</body> 
<script>
		window.print();
	</script>