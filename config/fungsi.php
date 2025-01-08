<?php
define('ENC_IV', '1234567890123456');
define('ENC_KEY', 'kunci');
define('ENC_CIPH', 'AES-128-CTR');
define('ENC_OPT', 0);

function encrypt_text($text) {
    //$iv_length = openssl_cipher_iv_length(ENC_CIPH);
    // Using openssl_encrypt() function to encrypt the data
    $text_encrypted = openssl_encrypt($text, ENC_CIPH, ENC_KEY, ENC_OPT, ENC_IV);
    return $text_encrypted;
}

function decrypt_text($text_encrypted) {
    //$iv_length = openssl_cipher_iv_length(ENC_CIPH);
    // Using openssl_encrypt() function to encrypt the data
    $text_decrypted = openssl_decrypt($text_encrypted, ENC_CIPH, ENC_KEY, ENC_OPT, ENC_IV);
    return $text_decrypted;
}


function getUser($col, $id){
	$sql=mysqli_query($GLOBALS["koneksi"],"SELECT $col FROM user WHERE id='$id'");
	$data=mysqli_fetch_array($sql);
	return $data[0];
}

	
	
?>