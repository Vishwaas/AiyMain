import Ember from 'ember';

export default Ember.Route.extend({
	getBgImg: function (imgUrl) {
		return 'background-image:url(\'' + imgUrl + '\')';
	},

	model: function () {
		var _this = this;
		return Ember.$.ajax({
			'method':'GET',
			'url':'/api/aiy/photolist'}).then(
			function(data){
				//console.log('reached success:'+JSON.stringify(data));
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
