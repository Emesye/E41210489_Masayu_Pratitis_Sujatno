@extends('layouts.main')

@section ('container')
    


	<h3><?= $nama;?></h3>
    <p><?= $Nim;?></p>
	<img src="img/<?= $image;?>" alt="<?= $nama;?>" width="150">
    
@endsection