import Ember from 'ember';

export default Ember.Controller.extend({
	sectionLimit: 20,

	currentLoadedCount: 0,

	displayPhotos: [],

	useBackgroundImage: true,	

	arePhotosAvailable: Ember.computed('model.[]', function () {
		return !!this.get('model').length;
	}),

	nextLoadedCount: Ember.computed('model.[]', 'currentLoadedCount', 'sectionLimit', function () {
		var currentLoadedCount = this.get('currentLoadedCount');
		var remainingPhotos = (this.get('model').length - currentLoadedCount);
		var sectionLimit = this.get('sectionLimit');
		var nextBatch = (remainingPhotos < sectionLimit ? remainingPhotos : sectionLimit);

		nextBatch = nextBatch < 0 ? 0 : nextBatch;

		return (currentLoadedCount + nextBatch);
	}),

	mainView: Ember.computed('displayPhotos.[]', function (key, value) {
		if(arguments.length > 1) {
			return this.get('useBackgroundImage') ? value : this.getBgImg(value);
		}	
		return this.get('useBackgroundImage') ? this.get('displayPhotos')[0] : this.getBgImg(this.get('displayPhotos')[0]);
	}),	

	getBgImg: function (imgUrl) {
		return 'background-image:url(\'' + imgUrl + '\')';
	},		

	modelChange:function () {
		this.send('loadNextBatch');
	}.observes('model.[]'),

	actions: {
		selectPhoto: function (photoUrl) {
			this.set('mainView', photoUrl);
		},

		loadNextBatch: function () {
			var nextLoadedCount = this.get('nextLoadedCount');

			if(this.get('currentLoadedCount') >= this.get('model').length)	{
				return false;
			}

			this.set('displayPhotos', this.get('model').slice(0, (nextLoadedCount)));
			this.set('currentLoadedCount', nextLoadedCount);
		}
	}
});
