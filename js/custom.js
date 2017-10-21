(function(){
	var app = {
		data : {},
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


				console.info('Валидация формы пройдена!!!', app.data);
				$.post("/feedback/save", app.data)
				 .done(function(response) {
				  	console.log("Response : " + response);
				});
			};
		},
		validateFrom : function(form){
			var data, inputs, input, valid, formGroup, label, textError;

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
					app.getData(input);
				}
			});

			return valid;
		},
		getData : function(input){
			console.log(input.attr('name'), input.val());
			var name, value;
			name = input.attr('name');
			value = input.val();
			switch(name) {
				case 'name' :
					app.data.name = value; break;
				case 'email' :
					app.data.email = value; break;
				case 'message' :
					app.data.message = value; break;
				
			};
		}
	};

	app.initialize();
}());