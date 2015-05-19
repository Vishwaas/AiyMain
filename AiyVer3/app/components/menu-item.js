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
		var currentComponentIndex = Ember.$('.menu-item').index(this.$());
		var _this = this;
		
		this.adjustSubMenuOffset();

		Ember.$(window).on('resize', function () {
			_this.adjustSubMenuOffset();
		});
		
		this.set('currentComponentIndex', currentComponentIndex);
		this.$().on('mouseenter', '.main-menu', function () {
			_this.handleMouseEnter();
		});
	},

	adjustSubMenuOffset: function () {
		var menuHeight = this.$('.menu-container').outerHeight();		
		var subMenuOffset = '-' + menuHeight + 'px';

		this.$('.submenu-container').css('top', subMenuOffset);
	},

	actions: {
		menuClick: function (url) {
			/*
				var _this = this;
				var clickNamespace = 'click.menu-item' + this.get('currentComponentIndex');

				Ember.$('body').on(clickNamespace, function () {				
					Ember.$('body').off(clickNamespace);
					_this.set('isSubmenuVisible', false);
				});
				this.set('isSubmenuVisible', true);
			*/

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

	mouseLeave: function () {
		if (this.get('isSubmenuVisible')) {
			this.set('isSubmenuVisible', false);
		}
	},

	handleMouseEnter: function () {
		if (!this.get('isSubmenuVisible')) {
			this.set('isSubmenuVisible', true);
		}
	},

	getBgImg: function (imgUrl) {
		return 'background-image:url(\'' + imgUrl + '\')';
	},

	getSourceFromEvent: function (event) {
		return  event.target || event.srcElement || event.originalTarget;
	}
});
