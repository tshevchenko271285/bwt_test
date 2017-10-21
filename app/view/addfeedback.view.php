<!--
страница 3 - форма обратной связи. 
поля: 
	имя, 
	email, 
	сообщение 
(все поля обязательные, валидация должна быть и на стороне клиента, и на сторонесервера). 
Также добавить капчу.
-->

<div class="row">
	<h1 class="text-center">Оставить отзыв</h1>
	<form class="form-horizontal" action="http://<?= $_SERVER['SERVER_NAME']?>/feedback/save">

		<div class="form-group">
			<label class="col-sm-2 control-label">Имя</label>
			<div class="col-sm-8">
				<input name="name" type="name" class="form-control" placeholder="Name">
			</div>
		</div>

		<div class="form-group">
			<label class="col-sm-2 control-label">Email</label>
			<div class="col-sm-8">
				<input name="email" type="email" class="form-control" placeholder="Email">
			</div>
		</div>
		<div class="form-group">
			<label class="col-sm-2 control-label">Сообщение</label>
			<div class="col-sm-8">
				<textarea name="message" class="form-control" rows="3" placeholder="Текст сообщения"></textarea>
			</div>
		</div>
		<div class="form-group">
			<div class="col-sm-offset-2 col-sm-8">
				<button type="submit" class="btn btn-default">Send</button>
			</div>
		</div>

	</form>
</div>