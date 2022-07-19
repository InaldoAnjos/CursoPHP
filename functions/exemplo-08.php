<?php 
//Função Recursiva
$hierarquia = array(
	array(
		'nome_do_cargo'=>'CEO',
		'subordinados'=>array(
			//Ínicio: Diretor Comercial
			array(
				'nome_do_cargo'=>'Diretor Comercial',
				'subordinados'=>array(
					//Ínicio: Gerente de Vendas
					array(
						'nome_do_cargo'=>'Gerente de Vendas'
					)
					//Término: Gerente de Vendas
				)
			),
			//Término: Diretor Comercial
			//Ínicio: Diretor Financeiro
			array(
				'nome_do_cargo'=>'Diretor Financeiro',
				'subordinados'=>array(
					//Ínicio: Gerente de Pagamentos
					array(						
						'nome_do_cargo'=>'Gerente de Pagamentos',
						'subordinados'=>array(
							//Ínicio: Supervisor de Pagamentos
							array(
								'nome_do_cargo'=>'Supervisor de Pagamentos'
							)
							//Término: Supervisor de Pagamentos
						)
					)
					//Términdo: Gerente de Pagamentos
				)
			),
			//Término: Diretor Financeiro
			//Ínicio: Diretor de Pessoal
			array(
				'nome_do_cargo'=>'Diretor de Pessoal',
				'subordinados'=>array(
					//Ínicio: Gerente de RH
					array(
						'nome_do_cargo'=>'Gerente de RH',
						'subordinados'=>array(
							//Ínicio de Supervisor de RH
							array(
								'nome_do_cargo'=>'Supervisor de RH'
							)
							//Término: Supervisor de RH
						)
					)
					//Término: Gerente de RH
				)		

			)
			//Término: Diretor de Pessoal
		)
	)
);


function exibe($cargos){

	$html = '<ul>';

	foreach ($cargos as $cargo) {
		$html .= "<li>";

		$html .= $cargo['nome_do_cargo'];

		if(isset($cargo['subordinados']) && count($cargo['subordinados']) > 0){
			$html .= exibe($cargo['subordinados']);
		}

		$html .= "</li>";
	}

	$html .= '</ul>';

	return $html;
}

echo exibe($hierarquia);

 ?>