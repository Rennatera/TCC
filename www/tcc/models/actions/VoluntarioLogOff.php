<?php
	/**
	 * Realiza o logoff do voluntário
	 * @package Voluntario
	 */

	unset($_SESSION['Voluntario']);

	header('Location: /');