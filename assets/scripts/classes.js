/*
 * Projeto: Legus
 * Desenvolvimento: LAB2B
 */

var Util = {
	bannerCaroulsel: () => {
		return new Swiper(".swiper-banner", {
			slidesPerView: 1,
			slidesPerGroup: 1,
			centeredSlides: true,
			autoplay: 1000,
			loop: true,
			pagination: {
				el: ".swiper-pagination",
				clickable: true,
			},
		});
	},

	videoCarousel: () => {
		return new Swiper(".swiper-container", {
				loop: true,
				pagination: {
					el: ".swiper-pagination",
					clickable: true,
				},
				breakpoints: {
					// when window width is >= 300px
					300: {
						slidesPerView: 1,
						slidesPerGroup: 1,
						spaceBetween: 5,
						centeredSlides: false,
					},
				},
				breakpoints: {
					// when window width is >= 900px
					900: {
						slidesPerView: 3,
						slidesPerGroup: 3,
						spaceBetween: 5,
						centeredSlides: false,
					},
				}
		});
	},

	cardCarousel: () => {
		return new Swiper(".swiper-card", {
			slidesPerView: 2,
			slidesPerGroup: 1,
			centeredSlides: true,
			autoplay: 1500,
			loop: true,
			pagination: {
				el: ".swiper-pagination",
				clickable: true,
			},
			 breakpoints: {
				// when window width is >= 600px
				600: {
					slidesPerView: 1,
					slidesPerGroup: 1,
					spaceBetween: 5,
					centeredSlides: true
					
				},
				 // when window width is >= 900px
				 900: {
					slidesPerView: 3,
					slidesPerGroup: 3,
					spaceBetween: 5,
					 centeredSlides: false
				},
			}
		});
	},

	addFile: () => {
		const uppy = new Uppy.Core()
    uppy.use(Uppy.Dashboard, { 
      trigger: '#addFile'
    })
    .use(Uppy.Tus, {
      endpoint: 'https://tusd.tusdemo.net/files/'
    })
    uppy.on('complete', (result) => {
      console.log('Upload completo!:', result.successful)
    })
      
	}

}
