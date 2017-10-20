(function(){

	var app = {
		initialize : function(){
			this.modules();
			this.setUpListeners();
		},
		modules : function(){

		},
		setUpListeners : function(){
			$('form').on('submit', app.submitFrom);
		},
		submitFrom : function(e) {
			e.preventDefault();
			var form = $(this);
			if(app.validateFrom(form) === true){
				console.info('Валидация формы пройдена!!!');
			};
		},
		validateFrom : function(form){
			var inputs, input, valid, formGroup, label, textError;
			valid = true;
			inputs = form.find('input');
			inputs.push(form.find('textarea'));
			$.each(inputs, function(index, value){
				input = $(value);
				value = input.val();
				formGroup = input.parents('.form-group');
				label = formGroup.find('label')
						.text().toLowerCase();
				textError = 'Введите ' + label;

				if(value.length < 3) {
					formGroup.addClass('has-error');
					input.tooltip({
						trigger : 'manual',
						placement : 'right',
						title : textError,
					}).tooltip('show');
					valid = false;
				} else {
					input.tooltip('hide');
					formGroup.removeClass('has-error');
					formGroup.addClass('has-success');
				}

			});
			return valid;
		}
	};

	app.initialize();
}());