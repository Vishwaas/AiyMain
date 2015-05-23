import Ember from 'ember';
import Env from 'aiy/config/environment';

export default Ember.Route.extend({
	getBgImg: function (imgUrl) {
		return 'background-image:url(\'' + imgUrl + '\')';
	},

	model: function () {
		var _this = this;		
		
		return Ember.$.ajax({
			'method':'GET',
			'url':Env.APP.photosHost}).then(
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
