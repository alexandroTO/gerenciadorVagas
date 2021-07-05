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
        <img src="/img/logo-email.png" style="margin: auto; display:block;">
    </head>
    @foreach($query as $cont)


    <body style="text-align: left; margin-left:40px;margin-right: 20px;"><br><br><br>
        <p>Ao <?php echo date('j'); ?> dia do mês de <?php echo date('F') ?> de <?php echo date('Y'); ?>, na cidade de CASCAVEL-PR, em atendimento ao prescrito no Art. 3º, inciso II da lei nº 11.788/2008, as partes a seguir nomeadas.<br>
            {{$cont->nomeINS}}, pessoa jurídica de direito privado, inscrita no CNPJ/MF sob nº {{$cont->cnpjINS}}, mantenedora da {{$cont->nomeINS}}, instituição de educação superior, adiante denominado Instituição de Ensino, representado(a) por: {{$cont->diretorNome}}, Telefone: {{$cont->foneINS}};<br>
            <br>
            ESTUDANTE {{$cont->nomeAlunoEST}}, adiante denominado(a) ESTAGIÁRIO, RG:{{$cont->rgEST}} CPF: {{$cont->cpfEST}}, Data de nascimento: {{$cont->dataNascimentoEST}}, Telefone: {{$cont->foneEST}}, Endereço: {{$cont->ruaEST}}, {{$cont->numEST}}, Cascavel/PR. Matriculado no Curso de {{$cont->curso}}, periodo:{{$cont->periodo}}, turno {{$cont->turno}}.<br>
            <br>
            {{$cont->nomeFantasiaEMP}}: adiante denominado (a) PARTE CONCEDENTE DE ESTÁGIO, representado por: {{$cont->representanteNome}}, CARGO: {{$cont->representanteCargo}}, Endereço: {{$cont->ruaEMP}}, {{$cont->numEMP}}, {{$cont->bairroEMP}}, Cidade: {{$cont->cidadeEMP}}, Estado: {{$cont->estadoEMP}}, Telefone: {{$cont->foneEMP}}, CNPJ:{{$cont->cnpjEMP}}.<br>
            <br>
            Celebram entre si este TERMO DE COMPROMISSO DE ESTÁGIO E PLANO ESTÁGIO, intermediado pelo F. PRESSI PIFFER - INTEGRADORA DE ESTAGIOS , com Sede na Rua rio grande sul 1286, SALA1, Centro, Cascavel-PR, CEP: 85.801-010 COM INSCRIÇÃO NO CNPJ 42.071.011/0001-02,, convencionando as cláusulas e condições seguintes:<br>
            <br>
            CLÁUSULA 1ª – Este TERMO DE COMPROMISSO DE ESTÁGIO E PLANO ESTÁGIO indica as condições de adequação do estagiário à proposta pedagógica do curso, à etapa e modalidade da formação escolar do estudante e ao horário e calendário escolar<br>
            <br>
            CLÁUSULA 2ª – Na vigência do presente Termos e na forma, o estagiário estará coberto por uma apólice de seguro n°038561, seguradora Zurich Minas Brasil Seguros S/A, contra acidentes pessoais, invalidez permanente total ou parcial por acidente, morte acidental, despesas médicas hospitalares e assistência funeral.<br>
            <br>
            CLÁUSULA 3ª- Ficam compromissadas entre as partes as seguintes condições básicas:<br>
            a) Zelar pelo fiel cumprimento deste TERMO DE COMPROMISSO DE ESTAGIO E PLANO DE ESTAGIO;<br>
            b) Este TERMO DE COMPROMISSO DE ESTAGIO E PLANO DE ESTÁGIO vigorará a partir de sua assinatura, podendo ser denunciado a qualquer tempo, unilateralmente, mediante comunicação escrita às demais partes, ou ser prorrogado por meio de ADITIVOS, respeitando o limite máximo de vigência de, 2 (dois) anos, exceto quando se tratar de estagiário portador de deficiência.<br>
            c) As atividades de ESTÁGIO definidas em comum acordo entre as partes serão desenvolvidas no seguinte horário: De segunda a sexta-feira das 09h00min as 12h00min e das 13h30min as 16h30min, totalizando 30 horas semanais.<br>
            d) As atividades a serem desenvolvidas pelo ESTAGIÁRIO estão de acordo com a programação curricular estabelecida para cada curso e com o itinerário formativo do educando.<br>
            e) O PLANO DE ESTÁGIO, elaborado de acordo entre o ESTAGIARIO, a Parte Concedente e a Instituição de Ensino, é incorporado, na sua primeira fase, a este TERMO DE COMPROMISSO DE ESTAGIO, e por meio de PLANOS DE ESTAGIO ADITIVOS, incorporando as fases seguintes:<br>
            <br>
            CLÁUSULA 4ª: Cabe a INSTITUIÇÃO DE ENSINO:<br>
            a) Avaliar as instalações da parte concedente do estágio e sua adequação à formação cultural e profissional do educando;<br>
            b) Indicar professor orientador, da área a ser desenvolvida no estágio, como responsável pelo acompanhamento e avaliação das atividades do estagiário;<br>
            c) Zelar para que as atividades previstas no Plano de Estágio permaneçam em consonância com a programação curricular estabelecida para o curso e com o itinerário formativo do educando, bem como pelo cumprimento deste Termo de Compromisso, tomando as providências necessárias no caso de descumprimento de quaisquer das cláusulas e condições desses documentos e de seus eventuais aditivos.<br>
            d) Solicitar do educando a apresentação periódica, em prazo não superior a 6 (seis) meses, de relatório das atividades;<br>
            e) Zelar pelo cumprimento do Termo de Compromisso, reorientando o estagiário para outro local em caso de descumprimento de suas normas;<br>
            f) Elaborar normas complementares e instrumento de avaliação dos estágios de seus educandos;<br>
            g) Comunicar a parte concedente de estágio, quando solicitado, no prazo de 10 (dez) dias, as datas de realização de avaliações escolares ou acadêmicas.
            <br>
            CLÁUSULA 5ª: Cabe ao ESTAGIARIO:<br>
            a) Preencher e entregar à INSTITUIÇÃO DE ENSINO, os relatórios de atividades previstas sobre seu Estágio;<br>
            b) Informar imediatamente à INSTITUIÇÃO DE ENSINO qualquer desvirtuamento das condições pactuadas, assumindo integral responsabilidade por sua omissão;<br>
            c) Manter atualizadas todas as suas informações cadastrais, tanto em relação a PARTE CONCEDENTE quanto a INSTITUIÇÃO DE ENSINO;<br>
            d) Receber Bolsa-auxílio ou outra forma de contraprestação que venha a ser acordada, bem como auxílio transporte, quando o estágio for não obrigatório;<br>
            e) Caso tenha interesse, poderá providenciar sua inscrição e contribuição como segurado facultativo do Regime Geral da Previdência Social;<br>
            f) Gozar 30 (trinta) dias de recesso, preferencialmente durante suas férias escolares, sempre que o estágio tenha duração igual ou superior a 1 (um) ano, ou proporcional, quando o estágio tiver duração inferior a 1 (um) ano;<br>
            g) Observar, obedecer e cumprir as normas internas da PARTE CONCEDENTE DE ESTAGIO, preservando o sigilo e a confidencialidade das informações que tiver acesso.<br>
            <br>
            CLÁUSULA 6 – Compete a PARTE CONCEDENTE DE ESTÁGIO<br>
            a) Ofertar instalações que tenham condições de proporcionar ao educando atividades de aprendizagem social, profissional e cultural;<br>
            b) Indicar um funcionário do seu quadro de pessoal, com formação ou experiência profissional na área de conhecimento desenvolvida no curso do estagiário, para orientar e supervisionar até 10 (dez) estagiários simultaneamente;<br>
            c) Contratar em favor do Estagiário seguro conta acidentes pessoais (morte acidental e invalidez permanente parcial ou total ou parcial por acidente) na forma ajustada pelo convênio firmado entre PARTE CONCEDENTE e CISD;<br>
            d) Por ocasião do desligamento do estagiário, entregar-lhe o termo de realização de estágio com indicação resumida das atividades desenvolvidas, dos períodos e da avaliação de desempenho;<br>
            e) Manter a disposição da fiscalização documentos que comprovem a relação de estágio;<br>
            f) Enviar à INSTITUIÇÃO DE ENSINO, com prioridade mínima de 6 (seis) meses, relatórios de atividades, com vista obrigatória ao estagiário;<br>
            g) Garantir ao ESTAGIARIO a aplicação da legislação relacionada a saúde e segurança no trabalho;<br>
            h) Permitir que a carga horária do estagiário seja reduzida, pelo menos metade, sem qualquer desconto nos valores de bolsa-auxílio ou outra forma de contraprestação, quando a Instituição de Ensino adote e informe no início do período letivo a época de verificação de aprendizagem periódicas ou finais;<br>
            i) Conceder ao ESTAGIARIO, sempre que o estágio tenha duração igual ou superior a 1 (um) ano, período de recesso remunerado de 30 (trinta) dias, a ser gozado preferencialmente durante suas férias escolares ou, se tiver duração inferior a 1 (um) ano, os dias de recesso serão concedidos de maneira proporcional.<br>
            j) Pagar a Bolsa- Auxílio ou outra forma de contraprestação na forma acordada, bem como a do auxílio transporte, no caso de estágio não obrigatório.<br>
            k) Permitir, independentemente de aviso prévio, que a INSTITUIÇÃO DE ENSINO possa verificar as condições em que se realiza o estágio.<br>
            l) Zelar para que a proporcionalidade do número de estagiários de ensino médio regular em relação ao número de seus empregados, previstas no art. 17 da Lei n° 11.788/2008, seja constantemente respeitada.<br>
            <br>
            CLAUSULA 7ª: O presente TERMO DE COMPROMISSO DE ESTAGIO E PLANO DE ESTAGIO pode ser denunciado, a qualquer tempo, mediante comunicação escrita pelo denunciante as demais partes.<br>
            <br>
            <br>
            CLAUSULA 8ª: O não cumprimento por qualquer parte de qualquer das cláusulas do presente TERMO DE COMPROMISSO DE ESTAGIO E PLANO DE ESTAGIO constitui motivo de imediata rescisão.<br>
            <br>
            CLÁUSULA 9ª: O Plano de Estágio a seguir estabelece as atividades a serem desenvolvidas pelo ESTAGIARIO e visam o aprendizado de competências próprias da atividade profissional e a contextualização curricular, objetivando o desenvolvimento do educando para a vida cidadã e para o trabalho, sendo que estão compatíveis com a programação curricular estabelecida para o curso e com o itinerário formativo do educando.<br>
            <br>
            PÁRÁGRAFO ÚNICO: As atividades dos semestres subsequentes não previstas neste instrumento poderão ser incorporadas ao presente termo de compromisso de estágio e plano de estágio por meio de planos de estágio aditivos.<br>
            <br>
            Descrição das Atividades:<br>
            Auxiliar no setor administrativo da empresa, arquivo de documentos, auxiliar no registro de funcionários, emissão de documentos e demais atividades pertinentes do setor.<br>
            <br>
            Parágrafo único:<br>
            Informações complementares:<br>
            1. Área ou setor do estágio: {{$cont->setorVAG}}<br>
            2. Lotação do estagiário: {{$cont->lotacaoVAG}}<br>
            3. Endereço da lotação: {{$cont->ruaEMP}}, {{$cont->numEMP}}, {{$cont->bairroEMP}}, - {{$cont->cidadeEMP}}<br>
            4. Horário do estágio: De segunda a sexta-feira das 09h00min as 12h00min e das 13h30min às 16h30min<br>
            5. Supervisor(a) do estágio na P.C. E: {{$cont->convenioNome}}<br>
            6. Função do Supervisor de Estágio: {{$cont->convenioCargo}}<br>
            7. Formação do supervisor: {{$cont->convenioFormacao}}, com experiência de {{$cont->convenioTempExp}} anos em {{$cont->convenioCargo}}<br>
            8. Orientador na I.E: {{$cont->coordenadorNome}}<br>
            9. Bolsa auxilio: {{$cont->auxilio}}<br>
            10. Auxilio transporte: {{$cont->auxTransporteVAG}}<br>
            11. Modalidade: Estagio: Não Obrigatório<br>
            12. Vigência do Estagio: {{$cont->vigenciaVAG}}<br>
            <br>
            CLÁUSULA 18 ª - Fica eleito o Foro da Comarca Central da Região Metropolitana de Curitiba, Paraná, para dirimir eventuais dúvidas ou litígios sobre o convênio.<br>
            <br>
            E por estarem de pleno acordo, firmam o presente instrumento em quatro vias de igual teor e forma, na presença de duas testemunhas, ao final qualificada.<br>
            <br>
            <br>
            CASCAVEL, 09 de março de 2018<br>
            Indicação do professor orientador por parte da instituição de ensino (art. 7°, inciso III, Lei n° 11.788/08)<br>
        </p>
        @endforeach
    </body>
    <footer>
    </footer>
</body>

</html>