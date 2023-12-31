<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tela Inicial</title>
    <link rel="stylesheet" href="../css/telaOcorrencia.css">
</head>
<body>
    <header>
        <img src="../img/logo_grande.png" alt="logo noar">
        <h1>Associação Humanitária de Busca Salvamento Aéreo e Resgate</h1>
        <h1 id="cellphone-only">AHBSAR</h1>
    </header>
    <main>
        <form action="" class="form">
            <section class="rw" style="gap: 20px;">
                <div class="clm">
                    <label for="">Nome:</label>
                    <input type="text" name="" id="">
                </div>
                <div class="clm">
                    <label for="">Sobrenome:</label>
                    <input type="text" name="" id="">
                </div>
                <div class="clm">
                    <label for="">Idade:</label>
                    <input type="number" id="numeroInput" oninput="verificarNumero()">
                </div>
                <div class="clm">
                    <label for="">Telefone:</label>
                    <input type="text" name="" id="">
                </div>
                <div class="clm">
                    <label for="">Sexo:</label>
                    <div class="rw gap" style="margin-top: 10px;">
                        <div class="rw">
                            <input type="radio" name="teste" id="">
                            <label for="">Homem</label>
                        </div>
                        <div class="rw">
                            <input type="radio" name="teste" id="">
                            <label for="">Mulher</label>
                        </div>
                    </div>
                </div>
                <div class="clm">
                    <label for="">CPF/RG:</label>
                    <input type="text" name="" id="">
                </div>
            </section>

            <section class="rw" style="justify-content: space-between;">
                <div class="clm gap d1" style="position: relative;">
                    <h2>Possui acompanhante?</h2>
                    <div class="rw">
                        <input type="radio" name="peido" id="acompanhanteSim">
                        <label for="acompanhanteSim">Sim</label>
                    </div>
                    <div class="rw">
                        <input type="radio" name="peido" id="acompanhanteNao">
                        <label for="acompanhanteNao">Não</label>
                    </div>
                    <div id="formularioAcompanhante">
                        <input type="text" name="nomeAcompanhante" id="nomeAcompanhante" placeholder="Nome acompanhante">
                        <input type="text" name="idadeAcompanhante" id="idadeAcompanhante" placeholder="Idade acompanhante">
                        <input type="text" name="foneAcompanhante" id="foneAcompanhante" placeholder="Fone acompanhante">
                    </div>
                    <br>
                    <div class="clm">
                        <label for="">Local da Ocorrência</label>
                        <input type="text" name="" id="">
                    </div>
                </div>

                <div class="clm" style="text-align: center">
                    <h2>TIPO DE OCORRÊNCIA (PRÉ-HOSPITALAR) </h2>
                    <div class="rw gap">
                        <div class="clm gap">
                            <div class="rw gap">
                                <input type="checkbox" name="" id="">
                                <label for="">Causada por animais</label>
                            </div>
                            <div class="rw gap">
                                <input type="checkbox" name="" id="">
                                <label for="">Com meio de transporte</label>
                            </div>
                            <div class="rw gap">
                                <input type="checkbox" name="" id="">
                                <label for="">Desmoronamento / Deslizamento</label>
                            </div>
                            <div class="rw gap">
                                <input type="checkbox" name="" id="">
                                <label for="">Emergência médica</label>
                            </div>
                            <div class="rw gap">
                                <input type="checkbox" name="" id="">
                                <label for="">Queda de Altura 2M</label>
                            </div>
                            <div class="rw gap">
                                <input type="checkbox" name="" id="">
                                <label for="">Tentativa de Suicídio</label>
                            </div>
                            <div class="rw gap">
                                <input type="checkbox" name="" id="">
                                <label for="">Queda própria altura</label>
                            </div>
                        </div>
                        <div class="clm gap">
                            <div class="rw gap">
                                <input type="checkbox" name="" id="">
                                <label for="">Afogamento</label>
                            </div>
                            <div class="rw gap">
                                <input type="checkbox" name="" id="">
                                <label for="">Agressão</label>
                            </div>
                            <div class="rw gap">
                                <input type="checkbox" name="" id="">
                                <label for="">Atropelamento</label>
                            </div>
                            <div class="rw gap">
                                <input type="checkbox" name="" id="">
                                <label for="">Choque Elétrico</label>
                            </div>
                            <div class="rw gap">
                                <input type="checkbox" name="" id="">
                                <label for="">Desabamento</label>
                            </div>
                            <div class="rw gap">
                                <input type="checkbox" name="" id="">
                                <label for="">Domêstico</label>
                            </div>
                            <div class="rw gap">
                                <input type="checkbox" name="" id="">
                                <label for="">Esportiva</label>
                            </div>
                        </div>
                        <div class="clm gap">
                            <div class="rw gap">
                                <input type="checkbox" name="" id="">
                                <label for="">Intoxicação</label>
                            </div>
                            <div class="rw gap">
                                <input type="checkbox" name="" id="">
                                <label for="">Queda Bicicleta</label>
                            </div>
                            <div class="rw gap">
                                <input type="checkbox" name="" id="">
                                <label for="">Queda Moto</label>
                            </div>
                            <div class="rw gap">
                                <input type="checkbox" name="" id="">
                                <label for="">Queda Nível <2M</label>
                            </div>
                            <div class="rw gap">
                                <input type="checkbox" name="" id="">
                                <label for="">Trabalho</label>
                            </div>
                            <div class="rw gap">
                                <input type="checkbox" name="" id="">
                                <label for="">Transferência</label>
                            </div>
                            <div class="rw gap">
                                <input type="checkbox" name="" id="">
                                <input type="text" name="" id="">
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <main class="rw" style="justify-content: space-between;">
                <aside>
                    <section>
                        <h2>problemas encontrados suspeitos:</h2>
                        <div class="rw">
                            <div class="clm gap">
                                <div class="rw gap">
                                    <input type="checkbox" name="" id="">
                                    <label for="">Psiquiatrico</label>
                                </div>
                                <div class="rw gap">
                                    <input type="checkbox" name="" id="">
                                    <label for="">Respiratório</label>
                                </div>
                                <div class="rw gap">
                                    <input type="checkbox" name="" id="">
                                    <label for="">Diabetes</label>
                                </div>
                                <div class="rw gap">
                                    <input type="checkbox" name="" id="">
                                    <input type="text" name="" id="">
                                </div>
                            </div>
                            <div class="clm gap">
                                <div class="rw gap">
                                    <input type="checkbox" id="obstetricoCheckbox">
                                    <label for="obstetricoCheckbox">Obstétrico</label>
                                    <div class="menu gap" id="obstetricoMenu">
                                        <div class="closeBtn" onclick="fecharMenu('obstetricoMenu');">X</div>
                                        <div class="rw gap">
                                            <input type="checkbox" name="" id="">
                                            <label for="">Parto Emergencial</label>
                                        </div>
                                        <div class="rw gap">
                                            <input type="checkbox" name="" id="">
                                            <label for="">Gestante</label>
                                        </div>
                                        <div class="rw gap">
                                            <input type="checkbox" name="" id="">
                                            <label for="">Hemor. Excessiva</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="rw gap">
                                    <input type="checkbox" id="transporteCheckbox">
                                    <label for="transporteCheckbox">Transporte</label>
                                    <div class="menu gap" id="transporteMenu">
                                        <div class="closeBtn" onclick="fecharMenu('transporteMenu');">X</div>
                                        <div class="rw gap">
                                            <input type="checkbox" name="" id="">
                                            <label for="">Aéreo</label>
                                        </div>
                                        <div class="rw gap">
                                            <input type="checkbox" name="" id="">
                                            <label for="">Clinico</label>
                                        </div>
                                        <div class="rw gap">
                                            <input type="checkbox" name="" id="">
                                            <label for="">Emergencial</label>
                                        </div>
                                        <div class="rw gap">
                                            <input type="checkbox" name="" id="">
                                            <label for="">Pós-trauma</label>
                                        </div>
                                        <div class="rw gap">
                                            <input type="checkbox" name="" id="">
                                            <label for="">Samu</label>
                                        </div>
                                        <div class="rw gap">
                                            <input type="checkbox" name="" id="">
                                            <label for="">Sem Remoção</label>
                                        </div>
                                        <div class="rw gap" style="align-items: center;">
                                            <label for="">Outros:</label>
                                            <input type="text" name="" id="">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                    <br><br><br>
                    <section>
                        <div class="clm paciente">
                            <h2>Avaliação do paciente (GLASGOW)</h2>
                            <div class="rw gap">
                                <p>Nível consciência:</p>
                                <p style="white-space: nowrap;"><span id="resultadoSpan">____</span> que 5 anos</p>
                            </div>
                            <br><br>
                            <aside class="clm gap">
                                <div class="rw gap">
                                    <p>Abertura ocular:</p>
                                    <div class="clm gap">
                                        <div class="rw gap">
                                            <input type="checkbox" name="" id="">
                                            <label for="">espontânea</label>
                                        </div>
                                        <div class="rw gap">
                                            <input type="checkbox" name="" id="">
                                            <label for="">comando verbal</label>
                                        </div>
                                        <div class="rw gap">
                                            <input type="checkbox" name="" id="">
                                            <label for="">estimulo doloroso</label>
                                        </div>
                                        <div class="rw gap">
                                            <input type="checkbox" name="" id="">
                                            <label for="">nenhuma</label>
                                        </div>
                                    </div>
                                </div>
                                <br>
                                <div class="rw gap">
                                    <p>Resposta verbal:</p>
                                    <div class="clm gap">
                                        <div class="rw gap">
                                            <input type="checkbox" name="" id="">
                                            <label for="">orientado</label>
                                        </div>
                                        <div class="rw gap">
                                            <input type="checkbox" name="" id="">
                                            <label for="">confuso</label>
                                        </div>
                                        <div class="rw gap">
                                            <input type="checkbox" name="" id="">
                                            <label for="">palavras inapropriadas</label>
                                        </div>
                                        <div class="rw gap">
                                            <input type="checkbox" name="" id="">
                                            <label for="">palavras incompreensiveis</label>
                                        </div>
                                        <div class="rw gap">
                                            <input type="checkbox" name="" id="">
                                            <label for="">nenhuma resposta verbal</label>
                                        </div>
                                    </div>
                                </div>
                            </aside>
                            <br><br>
                            <aside class="rw">
                                <div class="rw gap">
                                    <p>resposta motora:</p>
                                    <div class="clm gap">
                                        <div class="rw gap">
                                            <input type="checkbox" name="" id="">
                                            <label for="">obedece comandos</label>
                                        </div>
                                        <div class="rw gap">
                                            <input type="checkbox" name="" id="">
                                            <label for="">localiza dor</label>
                                        </div>
                                        <div class="rw gap">
                                            <input type="checkbox" name="" id="">
                                            <label for="">movimento de retirada</label>
                                        </div>
                                        <div class="rw gap">
                                            <input type="checkbox" name="" id="">
                                            <label for="">flexão anormal</label>
                                        </div>
                                        <div class="rw gap">
                                            <input type="checkbox" name="" id="">
                                            <label for="">extensão anormal</label>
                                        </div>
                                        <div class="rw gap">
                                            <input type="checkbox" name="" id="">
                                            <label for="">flexão anormal</label>
                                        </div>
                                        <div class="clm gap">
                                            <label for="">Total (GCS) (3-15):</label>
                                            <input type="text" name="" id="">
                                        </div>
                                    </div>
                                </div>
                            </aside>
                        </div>
                    </section>
                </aside>
                <aside class="corpos">
                    <div class="hiddenCorpoSelect clm" id="listaEscondida">
                        <div class="linha">
                            <button type="button"><img src="../img/fraturas.png"></button>
                            <p>Fraturas / Luxações /Entorses</p>
                        </div>
                        <div class="linha">
                            <button type="button"><img src="../img/ferimentos.png"></button>
                            <p>Ferimentos Diversos</p>
                        </div>
                        <div class="linha">
                            <button type="button"><img src="../img/hemorragias.png"></button>
                            <p>Hemorragias</p>
                        </div>
                        <div class="linha">
                            <button type="button"><img src="../img/esviceração.png"></button>
                            <p>Esviceração</p>
                        </div>
                        <div class="linha">
                            <button type="button"><img src="../img/FAG.png"></button>
                            <p>F.A.G.   |  F.A.F.</p>
                        </div>
                        <div class="linha">
                            <button type="button"><img src="../img/amputação.png"></button>
                            <p>Amputação</p>
                        </div>
                        <div class="linha">
                            <button type="button"><img src="../img/queimadura1.png"></button>
                            <p>Queimadura 1º Grau</p>
                        </div>
                        <div class="linha">
                            <button type="button"><img src="../img/queimadura2.png"></button>
                            <p>Queimadura 2º Grau</p>
                        </div>
                        <div class="linha">
                            <button type="button"><img src="../img/queimadura3.png"></button>
                            <p>Queimadura 3º Grau</p>
                        </div>
                        <div>
                            <button class="botaoCorpoSelect">CONFIRMAR</button>
                        </div>
                    </div>
                    <h2>Localização dos traumas</h2>
                    <br><br>
                    <div class="rw">
                        <div class="clm">
                            <div class="corpo">
                                <img src="../img/corpo.png" alt="corpo">
                                <div class="cabeca clicavel" id="cabeca"></div>

                                <div class="ombroEsquerdo clicavel" id="ombroEs"></div>
                                <div class="ombroDireito clicavel" id="ombroDi"></div>

                                <div class="peito clicavel" id="peito"></div>

                                <div class="abdomen clicavel" id="abs"></div>

                                <div class="pelvis clicavel" id="pelvis"></div>

                                <div class="quadEsquerdo clicavel" id="quadEs"></div>
                                <div class="quadDireito clicavel" id="quadDir"></div>

                                <div class="tibiaEsquerda clicavel" id="tibiaEs"></div>
                                <div class="tibiaDireita clicavel" id="tibiaDir"></div>

                                <div class="peEsquerdo clicavel" id="peEs"></div>
                                <div class="peDireito clicavel" id="peDi"></div>

                                <div class="bracoEsquerdo clicavel" id="bracoEs"></div>
                                <div class="bracoDireito clicavel" id="bracoDi"></div>

                                <div class="anteEsquerdo clicavel" id="anteEs"></div>
                                <div class="anteDireito clicavel" id="anteDi"></div>

                                <div class="maoEsquerda clicavel" id="maoEs"></div>
                                <div class="maoDireita clicavel" id="maoDi"></div>
                            </div>
                            <br>
                            <h2 style="text-decoration: underline;">Frontal</h2>
                        </div>
                        <div class="clm" >
                            <div class="corpo">
                            <img src="../img/corpo.png" alt="corpo">
                                <div class="cabeca clicavel" id="cabeca"></div>

                                <div class="ombroEsquerdo clicavel" id="ombroEs"></div>
                                <div class="ombroDireito clicavel" id="ombroDi"></div>

                                <div class="peito clicavel" id="peito"></div>

                                <div class="abdomen clicavel" id="abs"></div>

                                <div class="pelvis clicavel" id="pelvis"></div>

                                <div class="quadEsquerdo clicavel" id="quadEs"></div>
                                <div class="quadDireito clicavel" id="quadDir"></div>

                                <div class="tibiaEsquerda clicavel" id="tibiaEs"></div>
                                <div class="tibiaDireita clicavel" id="tibiaDir"></div>

                                <div class="peEsquerdo clicavel" id="peEs"></div>
                                <div class="peDireito clicavel" id="peDi"></div>

                                <div class="bracoEsquerdo clicavel" id="bracoEs"></div>
                                <div class="bracoDireito clicavel" id="bracoDi"></div>

                                <div class="anteEsquerdo clicavel" id="anteEs"></div>
                                <div class="anteDireito clicavel" id="anteDi"></div>

                                <div class="maoEsquerda clicavel" id="maoEs"></div>
                                <div class="maoDireita clicavel" id="maoDi"></div>
                            </div>
                            <br>
                            <h2 style="text-decoration: underline;">Traseiro</h2>
                        </div>
                    </div>
                    <br><br>
                    <h2>Clique no local desejado para adicionar o problema</h2>
                </aside>
            </main>
            <div class="rw salvarAvancar">
                <label for="avancar">Salvar e Avançar</label>
                <button id="avancar"><img src="../img/setaAvancar.png"></button>
            </div>
        </form>
    </main>
</body>
<script src="../js/telaOcorrencia.js"></script>
</html>