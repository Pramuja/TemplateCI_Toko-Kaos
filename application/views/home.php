		<!-- MAIN -->
		<div class="main">
			<!-- MAIN CONTENT -->
			<div class="main-content">
				<div class="container-fluid">
				<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
				<h2 style="font-family: sans-serif; font-size: 30px; color: #676A6D">Kaos Populer</h2>
				<link rel="stylesheet" href="<?=base_url()?>assets/css/swiper.min.css">
				<link rel="stylesheet" href="<?=base_url()?>assets/css/slider.css">
				
				<div class="swiper-container">
        <div class="swiper-wrapper">
            <div class="swiper-slide" style="height: 470px;">
                <div class="imgBx">
                    <img src="<?=base_url()?>assets/img/kaos1.jpg" style="height: 400px; width: 300px;">
                </div>
                <div class="details">
                    <h3><b>3 Second</b> <br><span> <b>Kode 1</b></span></h3>
                </div>
            </div>
            <div class="swiper-slide" style="height: 470px;">
                <div class="imgBx">
                    <img src="<?=base_url()?>assets/img/kaos2.jpg" style="height: 400px; width: 300px;">
                </div>
                <div class="details">
                    <h3><b>3 Second</b> <br><span> <b>Kode 2</b></span></h3>
                </div>
            </div>
            <div class="swiper-slide" style="height: 470px;">
                <div class="imgBx">
                    <img src="<?=base_url()?>assets/img/kaos9.jpg" style="height: 400px; width: 300px;">
                </div>
                <div class="details">
                    <h3><b>3 Second</b> <br><span> <b>Kode 9</b></span></h3>
                </div>
            </div>
            <div class="swiper-slide" style="height: 470px;">
                <div class="imgBx">
                    <img src="<?=base_url()?>assets/img/kaoss1.jpg" style="height: 400px; width: 300px;">
                </div>
                <div class="details">
                    <h3>Cressida <br><span> <b>Kode 1</b></span></h3>
                </div>
            </div>
            <div class="swiper-slide" style="height: 470px;">
                <div class="imgBx">
                    <img src="<?=base_url()?>assets/img/kaoss7.jpg" style="height: 400px; width: 300px;">
                </div>
                <div class="details">
                    <h3>Cressida <br><span> <b>Kode 7</b></span></h3>
                </div>
            </div>
            <div class="swiper-slide" style="height: 470px;">
                <div class="imgBx">
                    <img src="<?=base_url()?>assets/img/kaoss4.jpg" style="height: 400px; width: 300px;">
                </div>
                <div class="details">
                    <h3>Cressida <br><span> <b>Kode 4</b></span></h3>
                </div>
            </div>
        </div>
        <!-- Add Pagination -->
        <div class="swiper-pagination"></div>
    </div>
    <script src="<?=base_url()?>assets/scripts/swiper.min.js"></script>
    <script>
        var swiper = new Swiper('.swiper-container', {
            effect: 'coverflow',
            grabCursor: true,
            centeredSlides: true,
            slidesPerView: 'auto',
            coverflowEffect: {
                rotate: 0,
                stretch: 0,
                depth: 500,
                modifier: 1,
                slideShadows: true,
            },
            pagination: {
                el: '.swiper-pagination',
            },
        });
    </script>
				</div>
			</div>
			<!-- END MAIN CONTENT -->
		</div>
		<!-- END MAIN -->