<?php 
function hashClave($clavePlana){
	return password_hash($clavePlana, PASSWORD_DEFAULT);
}

function verifyKey($clavePlana,$claveEncriptada){
return password_verify($clavePlana, $claveEncriptada );
}