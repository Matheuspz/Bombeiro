<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Ocorrência</title>
    <link rel="stylesheet" href="../css/telaOcorrencia3.css">
</head>
<body>
    <header>
        <img src="../img/logo_grande.png" alt="logoNOAR">
        <h1>Associação Humanitária de Busca Salvamento Aéreo e Resgate</h1>
        <h1 class="cellphone">AHBSAR</h1>
        <div class="menu">
            <div class="menu_burguer"></div>
            <nav class="hidden_nav">
                <ul>
                    <li><a href="telaOcorrencia2.php">Voltar</a></li>
                </ul>
            </nav>
        </div>
    </header>
    <form action="">
    <main>
       <aside class="aside1">
            <section class="aside1section1">
                <h1>Sinais Vitais</h1>
                <div class="sinaisVitaisGrid">
                    <div class="sinaisVitaisCell">
                        <label for="">Pressão Arterial:</label>
                        <div class="pressaoArterial">
                            <input type="number" name="" id="">
                            x
                            <input type="number" name="" id="">
                        </div>
                        <p>mmHg</p>
                    </div>
                    <div class="sinaisVitaisCell">
                        <label for="">Pulso:</label>
                        <div class="pulso">
                            <input type="number" name="" id="">
                            B.C.P.M
                        </div>
                    </div>
                    <div class="sinaisVitaisCell">
                        <label for="">Respiração:</label>
                        <div class="respiracao">
                            <input type="number" name="" id="">
                            MRM
                        </div>
                    </div>
                    <div class="sinaisVitaisCell">
                        <label for="">Saturação:</label>
                        <div class="saturacao">
                            <input type="number" name="" id="">
                            %
                        </div>
                    </div>
                    <div class="sinaisVitaisCell">
                        <label for="">Temperatura:</label>
                        <div class="temperatura">
                            <input type="number" name="" id="">
                            C°
                        </div>
                    </div>
                    <div class="sinaisVitaisCell">
                        <label for="">Perfusão:</label>
                        <div class="perfusaoGrid">

                            <div class="perfusaoCell">
                                <label for="">>2 Seg</label>
                                <input type="radio" name="perfusao" id="">
                            </div>

                            <div class="perfusaoCell">
                                <label for=""><2 Seg</label>
                                <input type="radio" name="perfusao" id="">
                            </div>

                        </div>
                    </div>
                    <div class="sinaisVitaisCell HGT">
                        <label for="">HGT:</label>
                        <div class="hgtGrid">

                            <input type="text" name="" id="">

                            <div class="hgtCell">
                                <input type="radio" name="hgt" id="">
                                <label for="">Anormal</label>
                            </div>

                            <div class="hgtCell">
                                <input type="radio" name="hgt" id="">
                                <label for="">Normal</label>
                            </div>

                        </div>
                    </div>
                </div>
            </section>
            <section class="aside1section2">
                <h1>Decisão de Transporte</h1>
                <div class="decisaoTransporteGrid">
                    <div class="decisaoTransporteCell">
                        <input type="radio" name="decisaoDeTransporte" id="" value="Critico">
                        <img src="../img/critico.png">
                        <p>Crítico</p>
                    </div>
                    <div class="decisaoTransporteCell">
                        <input type="radio" name="decisaoDeTransporte" id="" value="Instavel">
                        <img src="../img/instavel.png">
                        <p>Instável</p>
                    </div>
                    <div class="decisaoTransporteCell">
                        <input type="radio" name="decisaoDeTransporte" id="" value="PotencialmenteInstavel">
                        <img src="../img/potencialmenteinstavel.png">
                        <p>Potencialmente instável</p>
                    </div>
                    <div class="decisaoTransporteCell">
                        <input type="radio" name="decisaoDeTransporte" id="" value="Estavel">
                        <img src="../img/estavel.png">
                        <p>Estável</p>
                    </div>
                </div>
            </section>
       </aside>
       <aside class="aside2">
            <h1>Sinais e Sintomas</h1>
            <br><br>
            <div class="sinaisESintomasGrid">
                <aside class="aside2aside1">
                    <div class="sinaisESintomasCell">
                        <input type="checkbox" name="sinaisESintomas" id="">
                        <label for="">Abdômen Sensível ou Rígido</label>
                    </div>
                    <div class="sinaisESintomasCell">
                        <input type="checkbox" name="sinaisESintomas" id="">
                        <label for="">Afundamento de Crânio</label>
                    </div>
                    <div class="sinaisESintomasCell">
                        <input type="checkbox" name="sinaisESintomas" id="">
                        <label for="">Agitação</label>
                    </div>
                    <div class="sinaisESintomasCell">
                        <input type="checkbox" name="sinaisESintomas" id="">
                        <label for="">Amnésia</label>
                    </div>
                    <div class="sinaisESintomasCell">
                        <input type="checkbox" name="sinaisESintomas" id="">
                        <label for="">Angina de Peito</label>
                    </div>
                    <div class="sinaisESintomasCell">
                        <input type="checkbox" name="sinaisESintomas" id="">
                        <label for="">Apneia</label>
                    </div>
                    <div class="sinaisESintomasCell">
                        <input type="checkbox" name="sinaisESintomas" id="">
                        <label for="">Bradicardia</label>
                    </div>
                    <div class="sinaisESintomasCell">
                        <input type="checkbox" name="sinaisESintomas" id="">
                        <label for="">Bradipnéia</label>
                    </div>
                    <div class="sinaisESintomasCell">
                        <input type="checkbox" name="sinaisESintomas" id="">
                        <label for="">Bronco - Aspirando</label>
                    </div>
                    <div class="sinaisESintomasCell">
                        <input type="checkbox" name="sinaisESintomas" id="">
                        <label for="">Cefaléia</label>
                    </div>
                    <div class="sinaisESintomasCell">
                        <input type="checkbox" name="sinaisESintomas" id="" onchange="toggleHidden('hidden1')">
                        <label for="">Cianose</label>

                        <div class="hidden" id="hidden1">
                            <div class="hiddenCell">
                                <input type="radio" name="opcaoCianose" id="">
                                <label for="">Labios</label>
                            </div>
                            <div class="hiddenCell">
                                <input type="radio" name="opcaoCianose" id="">
                                <label for="">Extremidades</label>
                            </div>

                            <div class="X" onclick="fecharHidden('hidden1')">❌</div>
                        </div>
                    </div>
                    <div class="sinaisESintomasCell">
                        <input type="checkbox" name="sinaisESintomas" id="">
                        <label for="">Convulsão</label>
                    </div>
                    <div class="sinaisESintomasCell">
                        <input type="checkbox" name="sinaisESintomas" id="">
                        <label for="">Decorticação</label>
                    </div>
                    <div class="sinaisESintomasCell">
                        <input type="checkbox" name="sinaisESintomas" id="">
                        <label for="">Deformidade</label>
                    </div>
                    <div class="sinaisESintomasCell">
                        <input type="checkbox" name="sinaisESintomas" id="">
                        <label for="">Descerebração</label>
                    </div>
                    <div class="sinaisESintomasCell">
                        <input type="checkbox" name="sinaisESintomas" id="">
                        <label for="">Desmaio</label>
                    </div>
                    <div class="sinaisESintomasCell">
                        <input type="checkbox" name="sinaisESintomas" id="">
                        <label for="">Desvio de Traquéia</label>
                    </div>
                    <div class="sinaisESintomasCell">
                        <input type="checkbox" name="sinaisESintomas" id="">
                        <label for="">Dispnéia</label>
                    </div>
                    <div class="sinaisESintomasCell">
                        <input type="checkbox" name="sinaisESintomas" id="">
                        <label for="">Dor local</label>
                    </div>
                    <div class="sinaisESintomasCell">
                        <input type="checkbox" name="sinaisESintomas" id="" onchange="toggleHidden('hidden2')">
                        <label for="">Edema</label>

                        <div class="hidden Edema" id="hidden2">
                            <div class="hiddenCell">
                                <input type="radio" name="opcaoEdema" id="">
                                <label for="">Generalizado</label>
                            </div>
                            <div class="hiddenCell">
                                <input type="radio" name="opcaoEdema" id="">
                                <label for="">Localizado</label>
                            </div>

                            <div class="X" onclick="fecharHidden('hidden2')">❌</div>
                        </div>
                    </div>
                    <div class="sinaisESintomasCell">
                        <input type="checkbox" name="sinaisESintomas" id="">
                        <label for="">Enfisema Subcutânea</label>
                    </div>
                    <div class="sinaisESintomasCell">
                        <input type="checkbox" name="sinaisESintomas" id="">
                        <label for="">Estase de Jugular</label>
                    </div>
                    <div class="sinaisESintomasCell">
                        <input type="checkbox" name="sinaisESintomas" id="">
                        <label for="">Face Pálida</label>
                    </div>
                </aside>
                <aside class="aside2aside2">
                    <div class="sinaisESintomasCell">
                        <input type="checkbox" name="sinaisESintomas" id="" onchange="toggleHidden('hidden3')">
                        <label for="">Hemorragia</label>

                        <div class="hidden Hemorragia" id="hidden3">
                            <div class="hiddenCell">
                                <input type="radio" name="opcaoHemorragia" id="">
                                <label for="">Interna</label>
                            </div>
                            <div class="hiddenCell">
                                <input type="radio" name="opcaoHemorragia" id="">
                                <label for="">Externa</label>
                            </div>

                            <div class="X" onclick="fecharHidden('hidden3')">❌</div>
                        </div>
                    </div>
                    <div class="sinaisESintomasCell">
                        <input type="checkbox" name="sinaisESintomas" id="">
                        <label for="">Hipertensão</label>
                    </div>
                    <div class="sinaisESintomasCell">
                        <input type="checkbox" name="sinaisESintomas" id="">
                        <label for="">Hipotensão</label>
                    </div>
                    <div class="sinaisESintomasCell">
                        <input type="checkbox" name="sinaisESintomas" id="">
                        <label for="">Nâuseas e vômitos</label>
                    </div>
                    <div class="sinaisESintomasCell">
                        <input type="checkbox" name="sinaisESintomas" id="">
                        <label for="">Nasorogia</label>
                    </div>
                    <div class="sinaisESintomasCell">
                        <input type="checkbox" name="sinaisESintomas" id="">
                        <label for="">Óbito</label>
                    </div>
                    <div class="sinaisESintomasCell">
                        <input type="checkbox" name="sinaisESintomas" id="">
                        <label for="">Otorréia</label>
                    </div>
                    <div class="sinaisESintomasCell">
                        <input type="checkbox" name="sinaisESintomas" id="">
                        <label for="">Otorracia</label>
                    </div>
                    <div class="sinaisESintomasCell">
                        <input type="checkbox" name="sinaisESintomas" id="">
                        <label for="">O V A C E</label>
                    </div>
                    <div class="sinaisESintomasCell">
                        <input type="checkbox" name="sinaisESintomas" id="" onchange="toggleHidden('hidden4')">
                        <label for="">Parada</label>

                        <div class="hidden Parada" id="hidden4">
                            <div class="hiddenCell">
                                <input type="radio" name="opcaoParada" id="">
                                <label for="">Cardíaca</label>
                            </div>
                            <div class="hiddenCell">
                                <input type="radio" name="opcaoParada" id="">
                                <label for="">Respiratória</label>
                            </div>

                            <div class="X" onclick="fecharHidden('hidden4')">❌</div>
                        </div>
                    </div>
                    <div class="sinaisESintomasCell">
                        <input type="checkbox" name="sinaisESintomas" id="">
                        <label for="">Priaprismo</label>
                    </div>
                    <div class="sinaisESintomasCell">
                        <input type="checkbox" name="sinaisESintomas" id="">
                        <label for="">Prurido na pele</label>
                    </div>
                    <div class="sinaisESintomasCell">
                        <input type="checkbox" name="sinaisESintomas" id="">
                        <label for="">Sede</label>
                    </div>
                    <div class="sinaisESintomasCell">
                        <input type="checkbox" name="sinaisESintomas" id="">
                        <label for="">Sinal de Battle</label>
                    </div>
                    <div class="sinaisESintomasCell">
                        <input type="checkbox" name="sinaisESintomas" id="">
                        <label for="">Sinal de Guaxinim</label>
                    </div>
                    <div class="sinaisESintomasCell">
                        <input type="checkbox" name="sinaisESintomas" id="" onchange="toggleHidden('hidden5')">
                        <label for="">Pupilas</label>

                        <div class="hidden" id="hidden5">
                            <div class="hiddenCell">
                                <input type="radio" name="opcaoPupila" id="">
                                <label for="">Anisocoria</label>
                            </div>
                            <div class="hiddenCell">
                                <input type="radio" name="opcaoPupila" id="">
                                <label for="">Isocoria</label>
                            </div>
                            <div class="hiddenCell">
                                <input type="radio" name="opcaoPupila" id="">
                                <label for="">Midriase</label>
                            </div>
                            <div class="hiddenCell">
                                <input type="radio" name="opcaoPupila" id="">
                                <label for="">Miose</label>
                            </div>
                            <div class="hiddenCell">
                                <input type="radio" name="opcaoPupila" id="">
                                <label for="">Reagente</label>
                            </div>
                            <div class="hiddenCell">
                                <input type="radio" name="opcaoPupila" id="">
                                <label for="">Não Reagente</label>
                            </div>

                            <div class="X" onclick="fecharHidden('hidden5')">❌</div>
                        </div>
                    </div>
                    <div class="sinaisESintomasCell">
                        <input type="checkbox" name="sinaisESintomas" id="">
                        <label for="">Sudorese</label>
                    </div>
                    <div class="sinaisESintomasCell">
                        <input type="checkbox" name="sinaisESintomas" id="">
                        <label for="">Taquipinéia</label>
                    </div>
                    <div class="sinaisESintomasCell">
                        <input type="checkbox" name="sinaisESintomas" id="">
                        <label for="">Taquicardiaca</label>
                    </div>
                    <div class="sinaisESintomasCell">
                        <input type="checkbox" name="sinaisESintomas" id="">
                        <label for="">Tontura</label>
                    </div>
                    <div class="sinaisESintomasCell">
                        <input type="checkbox" name="sinaisESintomas" id="">
                        <label for="">Outro:</label>
                        <input type="text" name="" id="">
                    </div>
                </aside>
            </div>
       </aside>
    </main>
    <a href="telaOcorrencia4.php"><input type="submit" class="btn" value="Salvar e Avançar"></a>
    </form>
</body>
<script src="../js/telaOcorrencia.js"></script>
</html>