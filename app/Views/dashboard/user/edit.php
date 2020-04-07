<?= view("dashboard/partials/_form-error"); ?>
<form action="/Catalogos/usuario/update/<?= $user->usuarioId ?>" method="POST" enctype="multipart/form-data">
<?= view("dashboard/user/_form",['textButton' => 'Actualizar','created' => false]); ?>
</form>