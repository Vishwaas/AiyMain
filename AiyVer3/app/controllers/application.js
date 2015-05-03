import Ember from 'ember';

export default Ember.Controller.extend({
	homeMenu: {'label':'Home', 'url':'home', 'menuImg': 'assets/res/home.png'},

	aboutMenu: {'label':'About Us', 'url':'', 'menuImg': 'assets/res/aboutUs.png'},

	contactMenu: {'label':'Contact Us', 'url':'contact', 'menuImg': 'assets/res/contactUs.png'},

	galleryMenu: {'label':'Gallery', 'url':'', 'menuImg': 'assets/res/gallery.png'},

	gallerySubMenus: [{'label':'Video', 'url':'gallery.video', 'menuImg':'assets/res/video.png'}, {'label':'Photo', 'url':'gallery.photo', 'menuImg':'assets/res/photo.png'}],

	abousUsSubMenus: [{'label':'Institute', 'url':'about.institute', 'menuImg':'assets/res/abtIns.png'}, {'label':'Guruji', 'url':'about.guruji', 'menuImg':'assets/res/abtGuruji.png'}],

	actions: {
		handleUrlSelection: function (url) {
			this.transitionToRoute(url);
		}
	}
});
