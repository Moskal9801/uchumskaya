document.addEventListener('DOMContentLoaded', function () {
	let getCoords = (elem) => {
			let box = elem.getBoundingClientRect();
			return {
				top: box.top + window.scrollY,
				right: box.right + window.scrollX,
				bottom: box.bottom + window.scrollY,
				left: box.left + window.scrollX,
				height: box.height,
			};
		},
		isOnScreen = (elem) => {
			let coefficient;
			window.innerWidth <= 768 ? coefficient = .75 : coefficient = .9;
			return window.scrollY > (getCoords(elem).top - window.innerHeight / coefficient);
		},
		isMobile = () => {
			return window.outerWidth <= 767;
		},
		isExist = (selector) => {
			return document.querySelector(selector);
		}

	//ХЭДЕР НА ЭКРАНАХ МЕНЬШЕ 1140px
	if (window.outerWidth <= 1140) {
		let mobileHeader = document.querySelector('.main-header'),
			openMenu = document.querySelector('.mobile .container__more .more__menu'),
			burgerMenu = document.querySelector('.main-menu'),
			burgerBackground = document.querySelector('.main-background'),
			openProducts = document.querySelector('.main-menu .menu-item-has-children a'),
			menu = document.querySelector('.main-menu .sub-menu'),
			subMenu = document.querySelectorAll('.main-menu .sub-menu .menu-item a');

		//ОТКРЫТИЕ БУРГЕР-МЕНЮ
		openMenu.onclick = function (e) {
			e.preventDefault();
			openMenu.classList.toggle('active');
			burgerMenu.classList.toggle('active');
			if (window.outerWidth <= 767) {
				document.documentElement.classList.toggle('no-scroll');
			}
			if (window.outerWidth <= 1140 && window.outerWidth > 767) {
				burgerBackground.classList.toggle('active');
			}
			if (burgerMenu.classList.contains('active')) {
				if (window.outerWidth <= 767) {
					burgerMenu.style.top = window.scrollY + 60 + "px";
				} else {
					burgerMenu.style.top = window.scrollY + 100 + "px";
				}
			} else {
				burgerMenu.style.top = -1000 + "px";
			}
		};

		//НАЖАТИЕ НА БЭКГРАУНД
		burgerBackground.onclick = function (e) {
			e.preventDefault();
			openMenu.classList.remove('active');
			burgerMenu.classList.remove('active');
			if (window.outerWidth <= 767) {
				document.documentElement.classList.remove('no-scroll');
			}
			if (window.outerWidth <= 1140 && window.outerWidth > 767) {
				burgerBackground.classList.remove('active');
			}
			if (burgerMenu.classList.contains('active')) {
				if (window.outerWidth <= 767) {
					burgerMenu.style.top = window.scrollY + 60 + "px";
				} else {
					burgerMenu.style.top = window.scrollY + 100 + "px";
				}
			} else {
				burgerMenu.style.top = -1000 + "px";
			}
		};

		//ПОВЕДЕНИЕ ХЭДЕРА И МЕНЮ ПРИ СКРОЛЛЕ
		let prevScrollpos = window.scrollY;

		window.addEventListener('scroll', function () {
			let currentScrollPos = window.scrollY;

			if (window.scrollY <= 2) {
				mobileHeader.classList.remove('hide');
				mobileHeader.classList.remove('no-hide');
				openMenu.classList.remove('active');
				burgerMenu.classList.remove('active');
				if (window.outerWidth <= 767) {
					document.documentElement.classList.remove('no-scroll');
				}
				if (window.outerWidth <= 1140 && window.outerWidth > 767) {
					burgerBackground.classList.remove('active');
				}
				if (burgerMenu.classList.contains('active')) {
					if (window.outerWidth <= 767) {
						burgerMenu.style.top = window.scrollY + 60 + "px";
					} else {
						burgerMenu.style.top = window.scrollY + 100 + "px";
					}
				} else {
					burgerMenu.style.top = -1000 + "px";
				}
			} else if (prevScrollpos > currentScrollPos) {
				mobileHeader.classList.add('no-hide');
				mobileHeader.classList.remove('hide');
				openMenu.classList.remove('active');
				burgerMenu.classList.remove('active');
				if (window.outerWidth <= 767) {
					document.documentElement.classList.remove('no-scroll');
				}
				if (window.outerWidth <= 1140 && window.outerWidth > 767) {
					burgerBackground.classList.remove('active');
				}
				if (burgerMenu.classList.contains('active')) {
					if (window.outerWidth <= 767) {
						burgerMenu.style.top = window.scrollY + 60 + "px";
					} else {
						burgerMenu.style.top = window.scrollY + 100 + "px";
					}
				} else {
					burgerMenu.style.top = -1000 + "px";
				}
			} else {
				mobileHeader.classList.add('hide');
				mobileHeader.classList.remove('no-hide');
				openMenu.classList.remove('active');
				burgerMenu.classList.remove('active');
				if (window.outerWidth <= 767) {
					document.documentElement.classList.remove('no-scroll');
				}
				if (window.outerWidth <= 1140 && window.outerWidth > 767) {
					burgerBackground.classList.remove('active');
				}
				if (burgerMenu.classList.contains('active')) {
					if (window.outerWidth <= 767) {
						burgerMenu.style.top = window.scrollY + 60 + "px";
					} else {
						burgerMenu.style.top = window.scrollY + 100 + "px";
					}
				} else {
					burgerMenu.style.top = -1000 + "px";
				}
			}
			prevScrollpos = currentScrollPos;
		});

		//ОТКРЫТИЕ МЕНЮ КАТЕГОРИЙ В ПРОДУКЦИИ
		openProducts.onclick = function (e) {
			e.preventDefault();
			openProducts.classList.toggle('active');
			menu.classList.toggle('active');
		};

		//ЗАКРЫТИЕ МЕНЮ КАТЕГОРИЙ В ПРОДУКЦИИ ПРИ КЛИКЕ КАТЕГОРИЮ
		subMenu.forEach(function (element) {
			element.onclick = function () {
				openProducts.classList.remove('active');
				menu.classList.remove('active');
			};
		});

		if (isExist('.single-page__products-page')) {
			openProducts.classList.add('active');
			menu.classList.add('active');
		}


	} else {
		let openProducts = document.querySelector('.desktop .menu-item-has-children a'),
			menu = document.querySelector('.desktop .sub-menu'),
			subMenu = document.querySelectorAll('.desktop .sub-menu .menu-item a');

		//ОТКРЫТИЕ МЕНЮ КАТЕГОРИЙ В ПРОДУКЦИИ
		openProducts.onclick = function (e) {
			e.preventDefault();
			openProducts.classList.toggle('active');
			menu.classList.toggle('active');
		};

		//ЗАКРЫТИЕ МЕНЮ КАТЕГОРИЙ В ПРОДУКЦИИ ПРИ КЛИКЕ НА ЛЮБОЙ ЭЛЕМЕНТ
		document.body.onclick = function (event) {
			if (!event.target.closest('.menu-item-has-children')) {
				openProducts.classList.remove('active');
				menu.classList.remove('active');
			}
		};

		//ЗАКРЫТИЕ МЕНЮ КАТЕГОРИЙ В ПРОДУКЦИИ ПРИ КЛИКЕ КАТЕГОРИЮ
		subMenu.forEach(function (element) {
			element.onclick = function () {
				openProducts.classList.remove('active');
				menu.classList.remove('active');
			};
		});
	}

	if(isExist('.home-page')) {
		if (window.outerWidth <= 480) {
			//СЛАЙДЕР БЭКГРАУНДА МОБИЛЬНОГО
			const sliderMobileBackground = new Swiper('.swiper__mobile-background', {
				slidesPerView: 1,
				spaceBetween: 0,
				loop: true,
				autoplay: {
					delay: 5000,
				},
				allowTouchMove: false,
				effect: 'fade',
				fadeEffect: {
					crossFade: true
				},
				pagination: {
					el: ".swiper__pagination",
					clickable: true,
				},
			});
		} else {
			//СЛАЙДЕР БЭКГРАУНДА ДЭСКТОПА
			const sliderDesktopBackground = new Swiper('.swiper__desktop-background', {
				slidesPerView: 1,
				spaceBetween: 0,
				loop: true,
				autoplay: {
					delay: 5000,
				},
				allowTouchMove: false,
				effect: 'fade',
				fadeEffect: {
					crossFade: true
				},
				pagination: {
					el: ".swiper__pagination",
					clickable: true,
				},
			});
		}

		//СЛАЙДЕР КОНТЕНТА
		const sliderContent = new Swiper('.swiper__container', {
			slidesPerView: 1,
			spaceBetween: 0,
			loop: true,
			autoplay: {
				delay: 5000,
			},
			allowTouchMove: false,
			effect: 'fade',
			fadeEffect: {
				crossFade: true
			},
			pagination: {
				el: ".swiper__pagination",
				clickable: true,
			},
		});

		//СЛАЙДЕР ОТЗЫВА
		if (window.outerWidth >= 876) {
			var sliderReviews = new Swiper(".reviews__content", {
				slidesPerView: 'auto',
				spaceBetween: 20,
				pagination: {
					el: ".reviews__pagination",
					clickable: true,
				},
			});
		} else {
			var sliderReviews = new Swiper(".reviews__content", {
				slidesPerView: 1,
				spaceBetween: 15,
				loop: true,
				autoplay: {
					delay: 5000,
				},
				allowTouchMove: false,
				pagination: {
					el: ".reviews__pagination",
					clickable: true,
				},
			});
		}
	} else if (isExist('.about-page')) {

		//СЛАЙДЕР ИСТОРИИ
		if (window.outerWidth > 767) {
			var sliderReviews = new Swiper(".history-swiper", {
				slidesPerView: 'auto',
				spaceBetween: 20,
				centeredSlides: true,
				navigation: {
					nextEl: ".nav-next",
					prevEl: ".nav-prev",
				},
			});
		} else {
			var sliderReviews = new Swiper(".history-swiper", {
				slidesPerView: 1,
				spaceBetween: 15,
				navigation: {
					nextEl: ".nav-next",
					prevEl: ".nav-prev",
				},
			});
		}

		//СЛАЙДЕР ОТЗЫВА
		if (window.outerWidth >= 876) {
			var sliderReviews = new Swiper(".reviews__content", {
				slidesPerView: 'auto',
				spaceBetween: 20,
				pagination: {
					el: ".reviews__pagination",
					clickable: true,
				},
			});
		} else {
			var sliderReviews = new Swiper(".reviews__content", {
				slidesPerView: 1,
				spaceBetween: 15,
				loop: true,
				autoplay: {
					delay: 5000,
				},
				allowTouchMove: false,
				pagination: {
					el: ".reviews__pagination",
					clickable: true,
				},
			});
		}
	} else if (isExist('.single-page__products-page')) {
		let itemsMenu = document.querySelectorAll('.menu-item-319'),
			itemsMenuu = document.querySelectorAll('.menu-item-65');

		itemsMenu.forEach(function (element) {
			element.classList.add('current-menu-item');
		});

		itemsMenuu.forEach(function (element) {
			element.classList.add('current-menu-item');
		});
	} else if (isExist('.single-page__vacancy-page')) {
		let itemsMenu = document.querySelectorAll('.menu-item-189');

		itemsMenu.forEach(function (element) {
			element.classList.add('current-menu-item');
		});
	} else if (isExist('.news-page')) {
		// ПОКАЗАТЬ ЕЩЕ НОВОСТИ
		jQuery( '#more-news' ).on( "click", function ( e ) {
			e.preventDefault();
			let loadMore = jQuery( this ),
				currentPage = loadMore.attr( 'data-current-page' );
			loadMore.text( 'Загрузка...' );

			const data = {
				"action":"load_more-news",
				"query":JSON.stringify( loadMore.data( "query" ) ),
				"page":currentPage,
			}

			jQuery.ajax( {
				url:"/wp-admin/admin-ajax.php",
				data:data,
				type:"POST",
				success:
					function ( data ) {
						if ( data ) {
							loadMore.html( "Загрузить ещё" );
							loadMore.prev().append( data );

							currentPage++;
							loadMore.attr( 'data-current-page', currentPage.toString() );

							if ( currentPage === parseInt( loadMore.attr( "data-max-pages" ) ) ) {
								loadMore.remove();
							}
						} else {
							loadMore.remove();
						}
					},
				error:function ( jqXHR, status, error ) {
					console.log( jqXHR + '; ' + status + '; ' + error );
				}
			} );
		} );
	} else if (isExist('.single-page__news-page')) {
		let itemsMenu = document.querySelectorAll('.menu-item-224');

		itemsMenu.forEach(function (element) {
			element.classList.add('current-menu-item');
		});
	}

	if (isExist('.default-page')) {
		let galItem = document.querySelectorAll( '.wp-block-gallery.columns-default .wp-block-image' );
		galItem.forEach( e => {
			src = e.querySelector( 'img' ).getAttribute( 'data-src-webp' );
			org_html = e.innerHTML;
			new_html = "<a href='" + src + "'>" + org_html + "</a>";
			e.innerHTML = new_html;
		} );

		// ДЕЛАЕМ ПОПАП ГАЛЛЕРЕИ-3
		$( '.wp-block-gallery.columns-default' ).each( function () {
			$( this ).magnificPopup( {
				delegate:'a',
				type:'image',
				gallery:{
					enabled:true
				},
				fixedContentPos:true,
				overflowY:'auto',
				callbacks:{
					open:function () {
						document.querySelector( 'html' ).style.overflow = 'auto';
						document.querySelector( 'html' ).style.marginRight = 'unset';
					},
					close:function () {
						document.querySelector( 'html' ).style.overflow = 'auto';
					},
				},
			} );
		} );

		//ОБОРАЧИВАЕМ БЛОК ГАЛЛЕРЕИ-1 В СВАЙПЕР
		let galleryElements = document.querySelectorAll('.wp-block-gallery.columns-1');
		galleryElements.forEach(function (element) {
			element.classList.add('swiper', 'swiper-default');
		});

		let imageElements = document.querySelectorAll('.wp-block-gallery.columns-1 .wp-block-image');
		imageElements.forEach(function (element) {
			element.classList.add('swiper-slide');
		});

		let wrapperElement = document.createElement('div');
		wrapperElement.classList.add('swiper-wrapper');

		let slideElements = document.querySelectorAll('.swiper-slide');
		slideElements.forEach(function (element) {
			wrapperElement.appendChild(element);
		});

		let firstGalleryElement = document.querySelector('.wp-block-gallery.columns-1');
		firstGalleryElement.appendChild(wrapperElement);

		let navBtnElement = document.createElement('div');
		navBtnElement.classList.add('swiper-nav');

		let prevBtnElement = document.createElement('div');
		prevBtnElement.classList.add('nav-prev');
		prevBtnElement.innerHTML =
			'<svg width="60" height="60" viewBox="0 0 60 60" fill="none" xmlns="http://www.w3.org/2000/svg">\n' +
			'<circle cx="30" cy="30" r="29.5" stroke="#54C442"/>\n' +
			'<path fill-rule="evenodd" clip-rule="evenodd" d="M34 21.5022L25.8732 30L34 38.4978L32.5634 40L23 30L32.5634 20L34 21.5022Z" fill="white"/>\n' +
			'</svg>\n';

		let nextBtnElement = document.createElement('div');
		nextBtnElement.classList.add('nav-next');
		nextBtnElement.innerHTML =
			'<svg width="60" height="60" viewBox="0 0 60 60" fill="none" xmlns="http://www.w3.org/2000/svg">\n' +
			'<circle cx="30" cy="30" r="29.5" stroke="#54C442"/>\n' +
			'<path fill-rule="evenodd" clip-rule="evenodd" d="M26 38.4978L34.1268 30L26 21.5022L27.4366 20L37 30L27.4366 40L26 38.4978Z" fill="#54C442"/>\n' +
			'</svg>\n';

		navBtnElement.appendChild(prevBtnElement);
		navBtnElement.appendChild(nextBtnElement);

		let paginationElement = document.createElement('div');
		paginationElement.classList.add('swiper-pagination');

		let swiperManagementElement = document.createElement('div');
		swiperManagementElement.classList.add('swiper-management');

		swiperManagementElement.appendChild(paginationElement);
		swiperManagementElement.appendChild(navBtnElement);

		firstGalleryElement.appendChild(swiperManagementElement);

		let swiper = new Swiper(".swiper-default", {
			navigation: {
				nextEl: ".nav-next",
				prevEl: ".nav-prev",
			},
			pagination: {
				el: ".swiper-pagination",
				type: "fraction",
			},
		});
	}

	window.addEventListener('load', function () {
		let scrollToTop = document.querySelector('#scrollToTop');

		scrollToTop.onclick = function (e) {
			e.preventDefault();
			window.scrollTo({
				top: 0,
				behavior: "smooth"
			});
		}

		//ЗАПРЕТ НА СИМВОЛЫ В ФОРМЕ ОБРАТНОЙ СВЯЗИ
		document.querySelectorAll( 'input[name=your-name]' ).forEach( function ( input ) {
			input.addEventListener( 'input', function () {
				this.value = this.value.replace( /[^a-zA-Zа-яА-Я\s]/g, '' );
			} );
		} );

		document.querySelectorAll( 'input[name=your-phone]' ).forEach( function ( input ) {
			input.addEventListener( 'input', function () {
				this.value = this.value.replace( /[^\d()+-]/g, '' );
			} );
		} );

		//ВЫВОД ПОПАПА ОБРАТНОЙ СВЯЗИ
		$( '.call-popup' ).magnificPopup( {
			type:'inline',
			callbacks:{
				beforeOpen:function () {
					this.st.mainClass = this.st.el.attr( 'data-effect' );
				},
				beforeClose:function () {
					var form = this.content.find( 'form' );
					if ( form.length ) {
						form[0].reset();
					}
				},
				open: function () {
					if (window.matchMedia('(min-width: 767px)').matches) {
						document.querySelector( 'html' ).style.overflow = 'auto';
						document.querySelector( 'html' ).style.marginRight = 'unset';
					}
				},
				close: function () {
					document.querySelector( 'html' ).style.overflow = 'auto';
				},
			},
			fixedContentPos:true,
			overflowY:'auto',
			closeOnBgClick: false,
			midClick:true,
			items:{
				src:'.popup__feedback',
			},
		} );

		//ВЫВОД ПОПАПА УСПЕШНОЙ ОТПРАВКИ ИЛИ ОШИБКИ
		let wpcf7 = document.querySelectorAll( '.wpcf7' );
		for ( let form of wpcf7 ) {
			form.addEventListener( 'wpcf7mailsent', function () {
				$.magnificPopup.close();
				$.magnificPopup.open( {
					type:'inline',
					items:{
						src:'.popup__sent',
					},
					fixedContentPos:true,
					overflowY:'auto',
				} );
			} );
			form.addEventListener( 'wpcf7mailfailed', function () {
				$.magnificPopup.close();
				$.magnificPopup.open( {
					type:'inline',
					items:{
						src:'.popup__failed',
					},
					fixedContentPos:true,
					overflowY:'auto',
				} );
			} );
		}
	});
})