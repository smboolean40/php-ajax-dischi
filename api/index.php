<?php
require_once __DIR__ . "/../database.php";

if(!empty($_GET["action"])) {

	if($_GET["action"] == "albums") {

		$response = $database;

	} else if ($_GET["action"] == "genres") {

		$genres = [];

		foreach( $database as $album ) {
			if( !in_array($album["genre"], $genres) ) {
				$genres[] = $album["genre"];
			}
		}

		$response = $genres;

	} else if($_GET["action"] == "filterGenre") {

		$albumsFiltered = [];

		foreach( $database as $album ) {
			if( $album["genre"] == $_GET["genre"] || $_GET["genre"] == "" ) {
				$albumsFiltered[] = $album;
			}
		}

		$response = $albumsFiltered;
	} else {
		$response = ["errore, la action non è valida"];
	}
} else {
	$response = ["errore, inserisci una action"];
}


header("Content-Type: application/json");

echo json_encode($response);