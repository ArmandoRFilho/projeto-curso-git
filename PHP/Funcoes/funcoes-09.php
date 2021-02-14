<?php

$hierarquia = array(
    array(
        'nome_cargo'=>'CEO',
        'subordinados'=>array(
            //Inicio: Diretor Comercial
            array(
                'nome_cargo'=>'Diretor Comercial',
                'subordinados'=>array(
                //Inicio Gerente de Vendas
                array(
                    'nome_cargo'=>'Gerente de Vendas'
                )
                //Termino Gerente de Vendas
                )
            ),
            //Termino: Diretor Comercial
            //Inicio: Diretor Finaceiro
            array(
                'nome_cargo'=>'Diretor Finaceiro',
                'subordinados'=>array(
                    //Inicio: Gerente de Contas a Pagar
                    array(
                        'nome_cargo'=>'Gerente de Contas a Pagar',
                        'subordinados'=>array(
                            //Incio: Supervisor de Pagamentos
                            array(
                                'nome_cargo'=>'Supervisor de Pagamentos'
                            )
                        )   //Termino Supervisor de pagamentos
                    )
                ),   
                //Termino: Gerente Contas a Pagar
                //Inicio: Gerente de Compras
                array(
                    'nome_cargo'=>'Gerente de Compras',
                    'subordinados'=>array(
                        //Inicio Supervisor de Suprimento
                        array(
                            'nome_cargo'=>'Supervisor de Suprimentos'
                        )
                    )   //Termino Supervisor de Suprimentos
                )
                //Termino: Gerente de Compras
            )
        )   //Termino: Diretor Finaceiro
    )
    );
    function exibe($cargos){

        $html = '<ul>';

        foreach ($cargos as $cargo) {
            # code...
            $html .= "<li>";

            $html .= $cargo['nome_cargo'];

            if (isset($cargo['subordinados'])&& count($cargo['subordinados']) >0 ) {

                $html .= exibe($cargo['subordinados']);
            }

            $html .= "</li>";
        }

        $html .= "</ul>";

        return $html;
    }

    echo exibe($hierarquia);
    ?>