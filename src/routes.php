<?php

use Vclaim\Bridging\GenerateBpjs;
use Vclaim\Bridging\ReferensiController;

Route::get('sample', function() {
	$generate = new GenerateBpjs;
	return $generate->generateSignature(config("bpjs.api.consid"), config("bpjs.api.seckey"));
});

Route::get('referensi/{kode}', function($kode){
	$referensi = new ReferensiController();
	$referensi = $referensi->getDiagnosa($kode);
	return $referensi;
});