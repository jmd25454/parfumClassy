<?php  
// função para validar uma mensagem e retornar um texto apropriado
function validar_msg($msg)
{

	switch ($msg) {
		case 'embranco':
			$retorno = '<h3 class="util">Informe todos os dados para efetuar o login!</h3>';
			break;

		case 'invalido':
			$retorno = '<h3 class="util">Atenção: Usuário ou senha inválidos</h3>';
			break;

		case 'cadembranco':
			$retorno = '<h3 class="util">Preencha todos os dados do perfume para cadastrar!</h3>';
			break;

		case 'edtembranco':
			$retorno = '<h3 class="util">Preencha todos os dados do perfume para editar!</h3>';
			break;

		case 'cadastrado':
			$retorno = '<h3 class="util">Perfume cadastrado com sucesso!</h3>';
			break;

		case 'errocadastro':
			$retorno = '<h3 class="util">Atenção: erro ao efetuar o cadastro. Tente novamente mais tarde...</h3>';
			break;

		case 'idinvalido':
			$retorno = '<h3 class="util">Atenção: perfume inválido. por favor, repita a operação</h3>';
			break;

		case 'perfumedeletado':
			$retorno = '<h3 class="util">Perfume excluído com sucesso!</h3>';
			break;

		case 'errodeletar':
			$retorno = '<h3 class="util">Atenção: erro ao excluir perfume. Tente novamente mais tarde...</h3>';
			break;

		case 'editado':
			$retorno = '<h3 class="util">Dados do perfume alterados com sucesso!</h3>';
			break;

		case 'erroeditar':
			$retorno = '<h3 class="util">Atenção: erro ao alterar dados do perfume. Tente novamente mais tarde...</h3>';
			break;

		default:
			$retorno = '';
			break;
	}

	return $retorno;

}
?>