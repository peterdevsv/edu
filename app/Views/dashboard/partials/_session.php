<link href="/js/pnotify/dist/pnotify.css" rel="stylesheet">
<link href="/js/pnotify/dist/pnotify.buttons.css" rel="stylesheet">
<link href="/js/pnotify/dist/pnotify.nonblock.css" rel="stylesheet">
<?php if(session('message')): ?>
	<script src="/js/jquery-3.4.1.slim.min.js"></script>
	<script src="/js/pnotify/dist/pnotify.js"></script>
	<script src="/js/pnotify/dist/pnotify.buttons.js"></script>
	<script src="/js/pnotify/dist/pnotify.nonblock.js"></script>
	<script>	
		new PNotify({
			title: 'NOTIFICACIÓN',
			text: '<?= session('message') ?>',
			type:'success',
			styling: 'bootstrap3'
		})
	</script>
	<?php endif ?>