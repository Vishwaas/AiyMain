import Ember from 'ember';

export default Ember.View.extend({
	didInsertElement: function () {
		Ember.$(document).ready(this.initiateAppView);
		Ember.$(window).resize(this.initiateAppView);
	},

	initiateAppView: function () {
		/*var headerHeight = Ember.$('header').outerHeight();
		var footerHeight = Ember.$('footer').outerHeight();
		var windowHeight = window.innerHeight;
		var mainHeight = windowHeight - (headerHeight + footerHeight + 50);	
		//var footerTop = windowHeight - (footerHeight + 25);	
		//Ember.$('footer').css('top', footerTop);
		Ember.$('main').css('min-height', mainHeight);*/
	}
});
