<?php if (! empty($errors)) : ?>
	<link href="/js/pnotify/dist/pnotify.css" rel="stylesheet">
	<link href="/js/pnotify/dist/pnotify.buttons.css" rel="stylesheet">
	<link href="/js/pnotify/dist/pnotify.nonblock.css" rel="stylesheet">
	<script src="/js/jquery-3.4.1.slim.min.js"></script>
	<script src="/js/pnotify/dist/pnotify.js"></script>
	<script src="/js/pnotify/dist/pnotify.buttons.js"></script>
	<script src="/js/pnotify/dist/pnotify.nonblock.js"></script>
	<?php foreach ($errors as $error) : ?>
		<script>	
			new PNotify({
				title: 'ALGO SALIO MAL',
				text: '<?= esc($error) ?>',
				type:'error',
				styling: 'bootstrap3'
			})
		</script>
	<?php endforeach ?>
	<?php endif ?>