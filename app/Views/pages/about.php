<?= $this->extend('templates/template'); ?>

<!DOCTYPE html>
<html>
    
    <?= $this->section('content'); ?>
    <head>
        <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css">
<<<<<<< HEAD
        <!-- <link rel="stylesheet" type="text/css" href="/Assets/AdminLTE-3.2.0/dist/css/style.css"> -->

        <style>
            /* @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400&display=swap'); */
*{
	margin:0px;
	padding:0px;
	box-sizing: border-box;
	font-family: 'Poppins', sans-serif;
}
.section{
	width: 100%;
	min-height: 100vh;
	background-color: #ddd;
    margin-top:70px ;
}
.container{
	width: 80%;
	display: block;
	margin:auto;
	padding-top: 0px;
}
.content-section{
	float: left;
	width: 55%;
    margin-top: 20px ;
}
.image-section{
	float: right;
	width: 40%;
}
.image-section img{
	width: 100%;
	height: auto;
}
.content-section .title{
	text-transform: uppercase;
	font-size: 28px;
}
.content-section .content h3{
	margin-top: 20px;
	color:#5d5d5d;
	font-size: 21px;
}
.content-section .content p{
	margin-top: 10px;
	font-family: sans-serif;
	font-size: 18px;
	line-height: 1.5;
}
.content-section .content .button{
	margin-top: 30px;
}
.content-section .content .button a{
	background-color: #3d3d3d;
	padding:12px 40px;
	text-decoration: none;
	color:#fff;
	font-size: 25px;
	letter-spacing: 1.5px;
}
.content-section .content .button a:hover{
	background-color: #a52a2a;
	color:#fff;
}
.content-section .social{
	margin: 40px 40px;
}
.content-section .social i{
	color:#a52a2a;
	font-size: 30px;
	padding:0px 10px;
}
.content-section .social i:hover{
	color:#3d3d3d;
}
@media screen and (max-width: 768px){
	.container{
	width: 80%;
	display: block;
	margin:auto;
	padding-top:50px;
}
.content-section{
	float:none;
	width:100%;
	display: block;
	margin:auto;
}
.image-section{
	float:none;
	width:100%;
	
}
.image-section img{
	width: 100%;
	height: auto;
	display: block;
	margin:auto;
}
.content-section .title{
	text-align: center;
	font-size: 19px;
}
.content-section .content .button{
	text-align: center;
}
.content-section .content .button a{
	padding:9px 30px;
}
.content-section .social{
	text-align: center;
}

}
        </style>
=======
        <link rel="stylesheet" type="text/css" href="/Assets/AdminLTE-3.2.0/dist/css/style.css">
>>>>>>> origin/master
    </head>
    
<body>
    <div class="section">
        <div class="container">
            <div class="content-section">
                <div class="title">
                    <h1>About Us</h1>
                </div>
                <div class="content">
                    <h3>Siber-Ket merupakan sistem yang didesain untuk membantu karyawan dalam mempermudah tugas mereka untuk membuat akun member pelanggan</h3>
                    <p>Dengan Siber-Ket, karyawan dapat menghemat waktu pelayanan pelanggan dalam membuat akun member</p>
                    <div class="button">
                        <a href="">Read More</a>
                    </div>
                </div>
                <div class="social">
                    <a href=""><i class="fab fa-facebook-f"></i></a>
                    <a href=""><i class="fab fa-twitter"></i></a>
                    <a href=""><i class="fab fa-instagram"></i></a>
                </div>
            </div>
            <div class="image-section">
                <img src="/Assets/AdminLTE-3.2.0/img/siber-ket-gambar-about.png">
            </div>
        </div>
    </div>
</body>
 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</html>

<?= $this->endSection('content'); ?>