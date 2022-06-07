<?php
	/**
	 * Realiza o logoff da instituição
	 * @package Instituicao
	 */

	unset($_SESSION['Instituicao']);

	header('Location: /');