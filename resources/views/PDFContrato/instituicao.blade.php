<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

    <title>Contrato Empresa</title>
</head>

<body>

    <head>
        <img src="https://acertestagios.com.br/img/logo-email.png" style="text-align: center;  width: 220px;margin-left: 30%;">
    </head>

    <body style="text-align: left; margin-left:40px;margin-right: 20px;"><br><br><br>

        @foreach($query as $instituicao)

        <form style="padding: 50px; margin-right: 20px; border: solid 1px silver;">
            <p style="text-align: center; background: silver;">Convênio com agente de integração </p>
            <p style="text-align: center; border: 1px solid silver;margin-top: -20px;">INSTITUIÇÃO DE ENSINO</p>
            <table style="border: 1px solid silver; font-size: 12px; width: 580px; margin-top: -18px;">
                <tr>
                    <th></th>
                    <th></th>
                </tr>

                <tr>
                    <td colspan=2 style="border: 1px solid silver;">
                        Instituição: {{$instituicao->nomeINS}}
                    </td>
                </tr>

                <tr>
                    <td style="border: 1px solid silver;" colspan=2>
                        Endereço: {{$instituicao->ruaINS}}, {{$instituicao->numINS}}, {{$instituicao->bairroINS}} - {{$instituicao->cidadeINS}}
                    </td style="border: 1px solid silver;">
                </tr>
                <tr>

                    <td style="border: 1px solid silver;">CNPJ: {{$instituicao->cnpjINS}}</td>
                    <td style="border: 1px solid silver;">Telefone: {{$instituicao->foneINS}}</td>
                </tr>
                <tr>
                    <td style="border: 1px solid silver;">Representado pelo Diretor(a)</td>
                    <td style="border: 1px solid silver;">Nome: {{$instituicao->diretorNome}}<br>RG: {{$instituicao->diretorRG}}<br>CPF: {{$instituicao->diretorCPF}}</td>
                </tr>
                <tr>
                    <td style="border: 1px solid silver;">Responsável pela coordenação de estágio na Instituição:</td>
                    <td style="border: 1px solid silver;">Nome: {{$instituicao->coordenadorNome}}<br>RG: {{$instituicao->coordenadorRG}}<br>CPF: {{$instituicao->coordenadorCPF}}</td>
                </tr>

            </table>

            <p style="text-align: center; background: silver;">AGENTE DE INTEGRAÇÃO</p>
            <table style="border: 1px solid silver; font-size: 12px; width: 580px; margin-top: -20px;">
                <tr>
                    <th></th>
                    <th></th>
                    <th></th>
                    <th></th>
                </tr>

                <tr>
                    <td colspan=4 style="border: 1px solid silver;">
                        Razão social: F. PRESSI PIFFER - INTEGRADORA DE ESTAGIOS
                    </td>
                </tr>

                <tr>

                    <td colspan=2 style="border: 1px solid silver;">CNPJ: 42.071.011/0001-02</td>
                    <td colspan=2 style="border: 1px solid silver;">Insc. Estadual: ISENTO</td>
                </tr>
                <tr>
                    <td colspan=2 style="border: 1px solid silver;">Representante: FRANCIELI PRESSI PIFFER</td>
                    <td colspan=2 style="border: 1px solid silver;">Cargo: SOCIO PROPIETÁRIA</td>
                </tr>
                <tr>
                    <td colspan=4 style="border: 1px solid silver;">
                        Endereço: Rua rio grande do Sul 1286
                    </td>
                </tr>
                <tr>
                    <td style="border: 1px solid silver;">CEP: 85801-010</td>
                    <td style="border: 1px solid silver;">Bairro: Centro</td>
                    <td style="border: 1px solid silver;">Cidade: Cascavel</td>
                    <td style="border: 1px solid silver;">Estado: PR</td>
                </tr>
                <tr>
                    <td colspan=1 style="border: 1px solid silver;">Fone: 45 9853-4521</td>
                    <td colspan=3 style="border: 1px solid silver;">E-mail: acertestagios@gmail.com</td>
                </tr>
                <tr>
                    <td colspan=1 style="border: 1px solid silver;">Fone: (45) 999034477</td>
                    <td colspan=3 style="border: 1px solid silver;">Site: WWW.ACERTESTAGIOS.COM.BR</td>
                </tr>

            </table>

            </div>
            </div>


        </form>
        <p style="font-size:12px ;">
            A Instituição de Ensino e o Agente de Integração firmam o presente Convênio de acordo com as seguintes condições:<br>
            CLÁUSULA 1ª − O presente Convênio tem como objeto o desenvolvimento de atividades conjuntas para a operacionalização de programa de estágio não-obrigatório, que será sempre de interesse curricular, com previsão no Projeto Pedagógico do respectivo Curso, constituindo-se em meio para que os discentes, futuros profissionais das diferentes áreas do saber, tenham treinamento prático na linha de sua formação, em situações reais de vida e trabalho, nos termos da Lei nº 11.788 de 25 de setembro de 2008 e demais legislações regulamentadoras.<br>
            <br>
            CLÁUSULA 2ª – AGENTE DE INTEGRAÇÃO OBRIGA-SE:<br>
            A realizar nos termos do Artigo 5º da Lei do Estágio, realiza os procedimentos técnicos, administrativos e operacionais relativos a estas contratações, além de aperfeiçoar o instituto do estágio mediante condições acordadas em instrumento jurídico adequado, para:<br>
            a) Identificar oportunidades de estágio;<br>
            b) Ajustar suas condições de realização;<br>
            c) Fazer o acompanhamento jurídico-administrativo;<br>
            d) Providenciar o Termo de Compromisso de Estágio (TCE) a ser firmado entre a Unidade Concedente do estágio, o Estudante e a Instituição de Ensino, nos termos do Artigo 5º da Lei do Estágio;<br>
            e) Contratação do seguro contra acidentes pessoais em favor do estagiário, cuja apólice seja compatível com valores de mercado, quando este ônus não for suportado pela Unidade Concedente<br>
            f) Encaminhar o estagiário, para áreas compatíveis com sua linha de formação e etapa do curso em que se encontra matriculado, de acordo com a legislação aplicável e com as normas e diretrizes do Regulamento Geral de Estágios.<br>
            g) Desenvolver esforços para captar novas oportunidades de estágio, obtendo das Unidades Concedentes a identificação e características dos programas e das oportunidades a serem concedidas;<br>
            h) Promover o ajuste das condições de estágio definidas pela Instituição de Ensino com as disponibilidades da Unidade Concedente do estágio, indicando as principais atividades a serem desenvolvidas pelos Estagiários cujos currículos escolares se compatibilizem;<br>
            i) Encaminhar às Unidades Concedentes de estágios os Estudantes cadastrados e interessados nas respectivas oportunidades de estágios;<br>
            a) Orientar os estagiários quanto à legislação que disciplina o estágio, à necessidade de entrega dos relatórios, bem como que em hipótese alguma o horário de estágio poderá coincidir com o de aulas e poderá ser reduzido pelo menos 50% nos dias de provas acadêmicas;<br>
            j) Acompanhamento da vigência do Termo de Compromisso de Estágio, avaliando e propondo às Empresas a possibilidade de renovações dos Contratos de Estágios, sempre que for do interesse do Estudante, da Instituição de Ensino e da Empresa;<br>
            k) Confirmação de regularidade da situação escolar dos Estagiários junto às respectivas Instituições de Ensino;<br>
            l) Assegurar-se de que a Unidade Concedente designe funcionário de seu quadro de pessoal, com formação ou experiência profissional na área de conhecimento desenvolvida no curso do estagiário, para orientar e supervisionar até 10 (dez) estagiários simultaneamente;<br>
            m) Garantir que a Unidade Concedente de estágio permitirá visitas, sem prévio aviso, para que a Instituição de Ensino possa verificar as condições de oferta do estágio;<br>
            n) Cumprir e estar de pleno acordo com o Regulamento Geral de Estágios, bem como com o Regulamento de Estágios da Instituição de Ensino em que o estagiário estiver matriculado.<br>
            o) Manter total sigilo das informações e dados dos interessados e daqueles que vierem a estagiar sob sua atividade de integração sob as penas da lei;<br>
            p) Informar e orientar o estagiário de que o início da atividade de estágio só poderá ocorrer depois da formalização do TCE, e a sua prorrogação após a formalização do Termo Aditivo, ambos firmados pela Concedente, pela Instituição de Ensino e pelo estagiário;<br>
            q) Informar às Unidades Concedentes da obrigatoriedade de, por ocasião do desligamento do estagiário, fornecer Termo de Realização do Estágio com indicação resumida das atividades desenvolvidas, dos períodos e da avaliação de desempenho;<br>
            r) Cadastrar as Unidades Concedentes de estágio, fornecendo relatório contendo, declarações firmadas por seus gestores, que permitam a avaliação, inclusive, do próprio local caso necessário, de suas instalações, capazes de propiciar aos estagiários, adequada formação cultural e profissional, nos termos do art. 7º. II da Lei 11.788/08.<br>
            <br>
            CLÁUSULA 3ª − As ações do Agente previstas na cláusula 2a, não implicarão quaisquer ônus para a Instituição de Ensino, nem para seus discentes que vierem a beneficiar-se de tais ações.<br>
            <br>
            <br>
            CLÁUSULA 4ª – A Instituição de Ensino se obriga a:<br>
            <br>
            a) Fornecer ao Agente, quando solicitado, informações acadêmicas dos discentes contratados ou prestes a serem contratados com intermediação do Agente;<br>
            b) Propiciar condições que facilitem a inclusão de seus discentes nas oportunidades abertas pelo Agente;<br>
            c) Divulgar junto a seus discentes, quando for o caso, as oportunidades de estágios disponibilizadas;<br>
            d) Comunicar à Concedente, no início do período letivo ou quando solicitado, no prazo de 10 (dez) dias, as datas de realização das avaliações acadêmicas, em especial, as intermediárias que forem por interesse didático-pedagógico, designadas ao longo do período letivo;<br>
            e) Assinar como interveniente, os Termos de Compromissos de Estágios e Aditivos que vierem a ser celebrados entre seus discentes e a Unidade Concedente;<br>
            f) Confirmar a situação de regularidade acadêmica de seus discentes contratados ou prestes a serem contratados com intermediação do Agente, quando solicitado pelo Agente;<br>
            g) Avaliar as instalações da parte concedente do estágio e sua adequação à formação cultural e profissional do educando;<br>
            h) Indicar Professor orientador, da área a ser desenvolvida no estágio, como responsável pelo acompanhamento e avaliação das atividades do Estagiário;<br>
            i) Exigir do Educando a apresentação periódica, em prazo não superior a seis meses, de relatório das atividades;<br>
            j) Zelar pelo cumprimento do Termo de Compromisso, reorientando o Estagiário para outro local em caso de descumprimento de suas normas;<br>
            k) Elaborar normas complementares e instrumentos de avaliação dos estágios de seus Educandos;<br>
            l) Comunicar à parte concedente do estágio, no início do período letivo, as datas de realização de avaliações escolares ou acadêmicas.<br>
            <br>
            CLÁUSULA 5ª − Disposições Gerais.<br>
            <br>
            a) O presente Convênio é celebrado por prazo determinado de 05 anos, podendo ser denunciado por uma das partes, mediante comunicado por escrito, com antecedência mínima de 30 (trinta) dias, sem atribuição de qualquer multa ou penalidade legal ou contratual pela rescisão;<br>
            b) A Instituição de Ensino não se responsabiliza por eventuais danos, materiais ou morais, por ato doloso ou culposo do estagiário ao patrimônio da Concedente durante o cumprimento do estágio;<br>
            c) Ocorrendo a denúncia, serão tomadas as seguintes providências:<br>
            - Excluir do cadastro do Agente, todos os discentes da Instituição de Ensino, aguardando por oportunidade de estágio;<br>
            - Notificar publicamente sobre o cancelamento do Convênio e informar que os discentes em estágio poderão permanecer na Concedente até a data do término previsto no TCE/Aditivo de estágio e que não deverão ser prorrogados.<br>
            d) O estágio objeto do presente Convênio não cria vínculo empregatício de qualquer natureza entre o estagiário e a Concedente, conforme previsto no parágrafo 1º, do artigo 12 da Lei 11.788/08.<br>
            E, por estarem inteiramente de acordo, com as cláusulas estipuladas, as partes concordam que este Convênio, na totalidade de seus termos, preservados os efeitos de atos jurídicos, em vigor, praticados sob a égide dos mesmos, o assinam em 2 (duas) vias de igual teor e forma, juntamente com as testemunhas.<br>
            <br>
            
        <div>
            <p style="text-align: right; margin-right: 20px; margin-top: 20px;"> Cascavel, <?php echo date('j,F') . " de " . date('Y'); ?>
        </div>
        <div style="margin-left: 20px; margin-top: 70px; border-top: 1px solid silver; width: 300px; text-align: center;">
            Assinatura</div>

        </p>
        @endforeach
    </body>
    <footer>
    </footer>
</body>

</html>