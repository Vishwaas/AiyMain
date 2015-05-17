import Ember from 'ember';
import config from './config/environment';

var Router = Ember.Router.extend({
  location: config.locationType
});

export default Router.map(function() {
  this.route('home', {path: '/'});
  this.route('contact', {path: '/contact'});
  this.resource('about', function() {
    this.route('institute', {path: '/'});
    this.route('guruji');
  });
  this.resource('gallery', function() {
    this.route('photos', {path: '/'});
    this.route('videos');
  });
});
