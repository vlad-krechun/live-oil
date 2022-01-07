'use strict';
const burger = document.querySelector('.header__burger');
const  burgerMenu = document.querySelector('.header__menu');

burger.addEventListener('click', () => {

	burger.classList.toggle('active');
	burgerMenu.classList.toggle('active');
	document.body.classList.toggle('lock');
});
