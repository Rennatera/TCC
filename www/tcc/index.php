<?php
	require_once ( dirname( __FILE__ ) . '/Bootstrap.php' );
	require_once ( dirname( __FILE__ ) . '/Lib/Router/Router.php' );
	require_once ( dirname( __FILE__ ) . '/inc/Database.class.php' );
	require_once ( dirname( __FILE__ ) . '/inc/Config.class.php' );

	//Inicializa o plugin de controle de rotas
	$router = new Router();

	//--------------------------------------------------------
	// Regras de Rotas
	// Página não encontrada
	$router->set404(function()
	{
		header('Location: /');
	});

	$router->get('/', function() {
		require_once 'controller/Home.php';
	});

	$router->get('/contato', function() {
		require_once 'controller/Contato.php';
	});

	$router->get('/eventos', function() {
		require_once 'controller/Evento.php';
	});

	$router->get('/cadastro-voluntario', function() {
		require_once 'controller/VoluntarioCadastro.php';
	});

	$router->get('/cadastro-instituicao', function() {
		require_once 'controller/InstituicaoCadastro.php';
	});

	$router->get('/cadastro-evento', function() {
		//Se o usuário não estiver logado vai redirecionar para a tela inicial
		if(!isset($_SESSION['Instituicao'])) header('Location: /');

		require_once 'controller/EventoCadastro.php';
	});

	$router->get('/login-voluntario', function() {
		require_once 'controller/VoluntarioLogin.php';
	});
	
	$router->get('/login-instituicao', function() {
		require_once 'controller/InstituicaoLogin.php';
	});

	$router->get('/home-instituicao', function() {
		//Se o usuário não estiver logado vai redirecionar para a tela inicial
		if(!isset($_SESSION['Instituicao'])) header('Location: /');

		require_once 'controller/InstituicaoHome.php';
	});

	$router->get('/home-voluntario', function() {
		//Se o usuário não estiver logado vai redirecionar para a tela inicial
		if(!isset($_SESSION['Voluntario'])) {
			header('Location: /');
		}

		require_once 'controller/VoluntarioHome.php';
	});

	$router->get('/logoff-voluntario', function() {
		require_once 'models/actions/VoluntarioLogOff.php';
	});

	$router->get('/logoff-instituicao', function() {
		require_once 'models/actions/InstituicaoLogOff.php';
	});

	$router->get('/doacao-voluntario', function() {
		//Se o usuário não estiver logado vai redirecionar para a tela inicial
		if(!isset($_SESSION['Voluntario'])) {
			header('Location: /');
		}
		
		require_once 'controller/VoluntarioDoacao.php';
	});

	// $router->get('/log', function() {
	// 	require_once 'controller/Log.php';
	// });

	// $router->get('/doar', function() {
	// 	require_once 'controller/Doar.php';
	// });

	$router->get('/cad-notificacao', function() {
	require_once 'controller/CadNotificacao.php';
	});

	$router->get('/visualizar-notificacao', function() {
	require_once 'controller/VisualizarNotificacao.php';
	});

	 $router->get('/View-not-voluntario', function() {
	 	require_once 'controller/VisualizarNotificacaoVoluntario.php';
	 });

	$router->get('/resgatar', function() {
		require_once 'controller/Resgatar.php';
	 });

	$router->get('/Prin-not-instituicao', function() {
	require_once 'controller/PrincipalNotificacao.php';
	});

	$router->get('/visualizar-not-cad', function() {
	 	require_once 'controller/PrincipalNotificacaoVoluntario.php';
	 });


	//----------------ROTAS POST
	$router->post('/cadastra-voluntario', function() {
		require_once 'models/actions/VoluntarioGrava.php';
	});

	$router->post('/cadastra-instituicao', function() {
		require_once 'models/actions/InstituicaoGrava.php';
	});

	$router->post('/login-voluntario', function() {
		require_once 'models/actions/VoluntarioLogin.php';
	});

	$router->post('/login-instituicao', function() {
		require_once 'models/actions/InstituicaoLogin.php';
	});

	$router->post('/fazer-doacao', function() {
		require_once 'models/actions/DoacaoGrava.php';
	});

	$router->run();