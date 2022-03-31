<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Nano Folio - Simple HTML Template</title>
	<link rel="stylesheet" href="fontawesome/css/all.min.css">
	<link href="https://fonts.googleapis.com/css2?family=Source+Sans+Pro&display=swap" rel="stylesheet">
    <link href="css/tooplate-style.css" rel="stylesheet">

    <style>
        #haha {
            /* border: 1px solid black; */
            padding: 20px;
            margin-top: 20px;

        }

        #haha a {
            margin-right: 20px;
			text-align:center;
        }

        .mt-20 {
            margin-top: 20px;
        }
    </style>


</head>
<body>
	<div class="tm-container-fluid">
        <!-- code here -->
        <section class="menu" id="haha" style="background-color: #99CCCC;">
			<center>
            <a href="#">Home</a>
            <a href="#">About</a>
			<a href="#">Contact</a>
			</center>
        </section>

        <section class="tm-bgcolor-2 tm-p-50 mt-20" style="border-radius: 15px; margin-bottom: 20px;">
            <h1>
				<center>
                <?php
                    $pageTitle = 'Kata-Kata Mutiara';
                    echo $pageTitle.' Bijak';
                ?>
				</center>
            </h1>
           
                <p>"Bukan yang terkuat dari spesies yang bertahan hidup, juga bukan yang paling cerdas, tetapi yang paling responsif terhadap perubahan." - Charles Darwin</p>
				<p>"Jangan khawatir tentang kegagalan, khawatir tentang peluang yang kamu lewatkan ketika kamu bahkan tidak mencoba." -Jack Canfield</p>
				<p>"Dicintai secara mendalam oleh seseorang memberimu kekuatan sementara mencintai seseorang secara mendalam memberimu keberanian." - Lao Tzu</p>
        </section>

		<section class="tm-site-header tm-flex-center tm-mb-50 tm-bgcolor-1 tm-border-rounded">
			<i class="fas fa-users fa-2x"></i>
			<h1>Bahagia terus ya!</h1>
		</section>

		<section class="tm-about tm-mb-80 tm-p-50 tm-bgcolor-2 tm-border-rounded"style="border:10px;">
			<div class="tm-about-header tm-flex-center">
				<i class="fas fa-heart fa-3x"></i>
				<h2>Untuk Kamu</h2>
			</div>
			<div class="tm-about-text">
				<p class="tm-mb-40">"Aku egois, tidak sabaran, merasa sedikit tidak aman. Aku membuat kesalahan, aku lepas kendali, dan kadang-kadang sulit dikendalikan. Tapi jika kau tidak bisa menghadapiku disaat terburukku, kau juga tidak pantas untuk mendapatkanku di saat terbaikku." – Marilyn Monroe.</p>
				<p class="tm-mb-0">"Orang yang berhenti belajar akan menjadi pemilik masa lalu, orang yang terus belajar akan menjadi pemilik masa depan."</p>
			</div>
		</section>

		<section class="tm-contact tm-mb-50 tm-bgcolor-3 tm-border-rounded">
			<div class="tm-contact-header tm-flex-center">
				<i class="fas fa-map-pin fa-3x"></i>
				<h2>Contact</h2>
			</div>
			<div class="tm-contact-form-container" style="float:right;">
				<form id="contact-form" action="" method="POST" class="tm-contact-form">
		          	<input type="text" name="name" placeholder="name" required="" />
		          	<input type="email" name="email" placeholder="email" required="" />
		          	<textarea rows="5" name="message" class="tm-mb-30" placeholder="message" required=""></textarea>		          	
		          	<button type="submit" class="tm-right tm-btn-submit">send</button>          	
		        </form>    
			</div>
			<div class="tm-contact-info">
				<address class="tm-mb-30">
					ingin menulis sebuah kata kata? 
					silahkan hubungi semua akun sosial
					yang sudah di cantumkan.
					tengkyu! 
					loveyou all
				</address>
				<div class="tm-text-white tm-mb-40">Tel: <a href="tel:0100200340" class="tm-link-white">0231-1189-0987</a></div>
				<div class="tm-flex">
					<a href="https://facebook.com" class="tm-social-link"><i class="fab fa-facebook"></i></a>
					<a href="https://twitter.com" class="tm-social-link"><i class="fab fa-twitter"></i></a>
					<a href="https://instagram.com" class="tm-social-link"><i class="fab fa-instagram"></i></a>
				</div>
			</div>
		</section>

		<footer class="tm-footer">
			Copyright 2020 Nano Folio - Design: <a rel="sponsored" href="https://www.tooplate.com" class="tm-link-gray">Tooplate</a>
		</footer>
	</div>

</body>
</html>