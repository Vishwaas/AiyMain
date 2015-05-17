import Ember from 'ember';

export default Ember.View.extend({
	didInsertElement: function () {
		var _this = this;
		this.$('#scroll-images').on('scroll', function () {
			Ember.run.debounce(function () {
				_this.calculateNextLoadRequirement();
			}, 250);			
		});
	},

	calculateNextLoadRequirement: function () {
		var $scrollContainer = this.$('#scroll-images');
		var containerScrollHeight = $scrollContainer[0].scrollHeight;
		var containerScrolledHeight = $scrollContainer.scrollTop();
		var containerHeight = $scrollContainer.outerHeight();
		var imageHeight = $scrollContainer.find('.scroll-image-holder').eq(0).outerHeight();

		if((containerScrollHeight - containerScrolledHeight) < (containerHeight + imageHeight)) {
			this.get('controller').send('loadNextBatch');
		}
	}
});
