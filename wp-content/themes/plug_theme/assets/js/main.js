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

	window.addEventListener('load', function () {

	});
})