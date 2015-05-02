import Ember from 'ember';

export default Ember.Component.extend({
	classNames: ['menu-item'],

	menuContent: {},

	subMenus: [],

	isSubmenuVisible: false,

	currentComponentIndex: 0,

	_menuImg: Ember.computed('menuContent.menuImg', function () {
		return this.getBgImg(this.get('menuContent.menuImg'));
	}),

	_subMenus: function () {
		var subMenus = Ember.copy(this.get('subMenus'), true);
		
		var k = subMenus.map(function (item) {
			item.menuImg = this.getBgImg(item.menuImg);
			return item;
		}, this);

		return k;
	}.property('subMenus.[]'),

	didInsertElement: function () {
		var menuHeight = this.$('.menu-container').outerHeight();		
		var subMenuOffset = '-' + menuHeight + 'px';
		var currentComponentIndex = Ember.$('.menu-item').index(this.$());

		this.$('.submenu-container').css('top', subMenuOffset);
		this.set('currentComponentIndex', currentComponentIndex);
	},

	actions: {
		menuClick: function (url) {
			var _this = this;
			var clickNamespace = 'click.menu-item' + this.get('currentComponentIndex');

			Ember.$('body').on(clickNamespace, function () {				
				Ember.$('body').off(clickNamespace);
				_this.set('isSubmenuVisible', false);
			});
			this.set('isSubmenuVisible', true);

			if(url) {
				this.sendAction('urlSelection', url);
			}
		},

		subMenuClick: function (url) {
			if(url) {
				this.sendAction('urlSelection', url);
			}
		}
	},

	getBgImg: function (imgUrl) {
		return 'background-image:url(\'' + imgUrl + '\')';
	},

	getSourceFromEvent: function (event) {
		return  event.target || event.srcElement || event.originalTarget;
	}
});
