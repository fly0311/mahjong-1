<?php

DB::exec('CREATE TABLE user (
	id			INT UNSIGNED AUTO_INCREMENT PRIMARY KEY NOT NULL,
	username	VARCHAR(32) UNIQUE NOT NULL,
	password	VARCHAR(64) NOT NULL
)');

DB::exec('ALTER TABLE user ADD INDEX (username)');
