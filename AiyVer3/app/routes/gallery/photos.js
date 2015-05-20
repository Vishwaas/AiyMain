import Ember from 'ember';

export default Ember.Route.extend({
	getBgImg: function (imgUrl) {
		return 'background-image:url(\'' + imgUrl + '\')';
	},

	model: function () {
		var _this = this;

		//'url':'/api/aiy/photolist' for local development
		//'url':'api/aiy/photolist.php for production
		return Ember.$.ajax({
			'method':'GET',
			'url':'api/aiy/photolist.php'}).then(
			function(data){				
				data = (typeof data === 'string' || data instanceof String) ? JSON.parse(data) : data;

				return data.map(function (item) {
					return _this.getBgImg('assets/res/photogallery/' + item);
					//return ('assets/res/photogallery/' + item);
				});
			},
			function () {
				//console.log('reached error:'+JSON.stringify(msg));
				return [];
			});
	}
});
