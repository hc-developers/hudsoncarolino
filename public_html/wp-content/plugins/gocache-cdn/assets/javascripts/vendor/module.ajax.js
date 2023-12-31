MONKEY.Wrapper( 'MONKEY.AjaxWrapper', function(namespace, callback) {

	MONKEY( 'Ajax.' + namespace, function(Model) {

		Model.fn.initialize = function() {
			this.emitter();
		};

		Model.fn.emitter = function() {
			var emitter = jQuery({});
			this.on     = jQuery.proxy( emitter, 'on' );
			this.fire   = jQuery.proxy( emitter, 'trigger' );
		};

		Model.fn._done = function(identifier, response) {
			this.fire( 'ajax.done' + identifier, [ response ] );
		};

		Model.fn._fail = function(identifier, throwError, status) {
			this.fire( 'ajax.fail' + identifier, [ throwError.responseJSON, status ] );
		};

		Model.fn._request = function(identifier, params, options) {
			var defaults = {
				type     :'GET',
				dataType :'json',
				data     :( params || {} )
			};

			var ajax = jQuery.ajax( jQuery.extend( defaults, options ) );

			ajax.done( jQuery.proxy( this, '_done', identifier ) );
			ajax.fail( jQuery.proxy( this, '_fail', identifier ) );
		};

		callback( Model );

	});

});
