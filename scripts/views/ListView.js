var Backbone = require('backbone');
var $ = require('jquery');
var _ = require('underscore');
var ListCollection = require('./../collections/ListCollection');
var ListItemView = require('./ListItemView.js');

module.exports = Backbone.View.extend({
	initialize: function() {
		this.collection = new ListCollection();
		this.collection.on('reset', this.render, this);

		this.renderUi();
	},

	events: {
		'click .item-title': 'itemTitleClick'
	},

	itemTitleClick: function(event) {
		$(event.currentTarget).parent().toggleClass('item-open');
	},

	renderUi: function() {
		var template = _.template($("#hitlistUiTemplate").html());

		this.$el.html(template({}));
	},

	search: function(query) {
		this.collection.search(query);
	},

	render: function() {
		this.$el.find('.list-container').html('');

		_.each(this.collection.models, _.bind(function(model) {
			var newEl = $('<div class="list-item"/>');
			this.$el.find('.list-container').append(newEl);

			var itemView = new ListItemView({
				el: newEl,
				model: model
			});		
		}, this));

	}
});