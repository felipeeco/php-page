	$('.carouselExampleIndicators').carousel()

	$('#job-post-slider').slick({
		dots: false,
		autoplay: true,
		autoplaySpeed: 8000,
		prevArrow: '<span class="slider-arrow left"><i class="fas fa-chevron-circle-left"></i></span>',
		nextArrow:'<span class="slider-arrow right"><i class="fas fa-chevron-circle-right"></i></span>',
		infinite: true,
		speed: 500,
		fade: true,
		cssEase: 'linear'
		});

		$('#job-post-slider').magnificPopup({
			type: 'image',
			delegate: 'a',
			gallery:{
				enabled:true,
				arrowMarkup: '<button class="mfp-arrow slider-arrow %dir%"></button>',
				tCounter: '',
			},
			callbacks: {
				buildControls: function() {
				this.contentContainer.append(this.arrowLeft.add(this.arrowRight));
				},
				open: function (){   
					$('.mfp-figure').append('<span class="zoomImg" onclick="magnificZoom()"><i class="fas fa-search-plus"></i></span>');
				},
			}
		});

		function magnificZoom() {
			$('.mfp-figure figure').toggleClass('zoom');
			$('.mfp-image-holder .mfp-close').toggleClass('hasZoom');
		}