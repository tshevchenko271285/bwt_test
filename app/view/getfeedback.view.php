<h1 class="text-center">Отзывы</h1>
<div class="row">
<div class="col-sm-offset-2 col-sm-8">
<? foreach($this->data['feedbacks'] as $feedback){ ?>
	<blockquote class="clearfix feedback">
		<p><?= $feedback->message; ?></p>
		<p class="pull-left small"><?= $feedback->name; ?>(<?= $feedback->email; ?>)</p>
		<p class="pull-right small"><?= $feedback->date; ?></p>	
	</blockquote>
<? } ?>
</div>
</div>

<!-- [id] => 1
                    [name] => Timofey
                    [email] => emailemail
                    [message] =>  Тестовый текст
                    [date] => 2017-10-21 10:27:03 -->