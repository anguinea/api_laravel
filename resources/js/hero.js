import $ from 'jquery';
import Flickity from 'flickity';

export default class Api{
	constructor (){
		this.initEls();
		this.initEvents();
	}

	initEls(){
		this.$els = {
			nameTab: $('.js-name-search'),
		}
		this.initSlider();
	}

	initEvents(){
		
	}

	initSlider(){
		var elem = document.querySelector('.main-carousel');
		this.slider = new Flickity( elem, { 
		});
	}

	
}

new Api();