<?php 
    include("../conecta.php");
    session_start();

    require_once '../php/classes.php';

    if($_SERVER['REQUEST_METHOD'] === 'POST') {
        $pressao1 = $_POST['pressao1'];
        $pressao2 = $_POST['pressao2'];
        $pressao = $pressao1.'x'.$pressao2;
        $pulso = $_POST['pulso'];
        $respiracao = $_POST['respiracao'];
        $saturacao = $_POST['saturacao'];
        $temperatura = $_POST['temperatura'];
        $perfusao = $_POST['perfusao'];
        $hgtValor = $_POST['hgtValor'];

        $decisaoDeTransporte = $_POST['decisaoDeTransporte'];

        $abdomenSensivelRigido = isset($_POST['AbdomenSensivelRigido']) ? $_POST['AbdomenSensivelRigido'] : null;
        $afundamentoCranio = isset($_POST['AfundamentoCranio']) ? $_POST['AfundamentoCranio'] : null;
        $agitacao = isset($_POST['Agitacao']) ? $_POST['Agitacao'] : null;
        $amnesia = isset($_POST['Amnesia']) ? $_POST['Amnesia'] : null;
        $anginaPeito = isset($_POST['anginaPeito']) ? $_POST['anginaPeito'] : null;
        $apneia = isset($_POST['Apneia']) ? $_POST['Apneia'] : null;
        $bradicardia = isset($_POST['Bradicardia']) ? $_POST['Bradicardia'] : null;
        $bradipneia = isset($_POST['Bradipneia']) ? $_POST['Bradipneia'] : null;
        $broncoAspirando = isset($_POST['BroncoAspirando']) ? $_POST['BroncoAspirando'] : null;
        $afundamentoCranio = isset($_POST['AfundamentoCranio']) ? $_POST['AfundamentoCranio'] : null;
        $cefaleia = isset($_POST['Cefaleia']) ? $_POST['Cefaleia'] : null;
        $opcaoCianose = isset($_POST['opcaoCianose']) ? $_POST['opcaoCianose'] : null;
        $convulsao = isset($_POST['Convulsao']) ? $_POST['Convulsao'] : null;
        $decorticacao = isset($_POST['Decorticacao']) ? $_POST['Decorticacao'] : null;
        $deformidade = isset($_POST['Deformidade']) ? $_POST['Deformidade'] : null;
        $descerebracao = isset($_POST['Descerebracao']) ? $_POST['Descerebracao'] : null;
        $desmaio = isset($_POST['Desmaio']) ? $_POST['Desmaio'] : null;
        $desvioTraqueia = isset($_POST['DesvioTraqueia']) ? $_POST['DesvioTraqueia'] : null;
        $dispneia = isset($_POST['Dispneia']) ? $_POST['Dispneia'] : null;
        $dorLocal = isset($_POST['DorLocal']) ? $_POST['DorLocal'] : null;
        $opcaoEdema = isset($_POST['opcaoEdema']) ? $_POST['opcaoEdema'] : null;
        $enfisemaSubcutanea = isset($_POST['EnfisemaSubcutanea']) ? $_POST['EnfisemaSubcutanea'] : null;
        $estaseJugular = isset($_POST['EstaseJugular']) ? $_POST['EstaseJugular'] : null;
        $facePalida = isset($_POST['FacePalida']) ? $_POST['FacePalida'] : null;
        $opcaoHemorragia = isset($_POST['opcaoHemorragia']) ? $_POST['opcaoHemorragia'] : null;
        $hipertensao = isset($_POST['Hipertensao']) ? $_POST['Hipertensao'] : null;
        $hipotensao = isset($_POST['Hipotensao']) ? $_POST['Hipotensao'] : null;
        $nauseasVomitos = isset($_POST['NauseasVomitos']) ? $_POST['NauseasVomitos'] : null;
        $nasorogia = isset($_POST['Nasorogia']) ? $_POST['Nasorogia'] : null;
        $obito = isset($_POST['Obito']) ? $_POST['Obito'] : null;
        $otorreia = isset($_POST['Otorreia']) ? $_POST['Otorreia'] : null;
        $otorracia = isset($_POST['Otorracia']) ? $_POST['Otorracia'] : null;
        $ovace = isset($_POST['Ovace']) ? $_POST['Ovace'] : null;
        $opcaoParada = isset($_POST['opcaoParada']) ? $_POST['opcaoParada'] : null;
        $priaprismo = isset($_POST['Priaprismo']) ? $_POST['Priaprismo'] : null;
        $pruridoPele = isset($_POST['PruridoPele']) ? $_POST['PruridoPele'] : null;
        $sede = isset($_POST['Sede']) ? $_POST['Sede'] : null;
        $sinalBattle = isset($_POST['SinalBattle']) ? $_POST['SinalBattle'] : null;
        $sinalGuaxinim = isset($_POST['SinalGuaxinim']) ? $_POST['SinalGuaxinim'] : null;
        $opcaoPupila = isset($_POST['opcaoPupila']) ? $_POST['opcaoPupila'] : null;
        $sudorese = isset($_POST['Sudorese']) ? $_POST['Sudorese'] : null;
        $taquipineia = isset($_POST['Taquipineia']) ? $_POST['Taquipineia'] : null;
        $taquicardiaca = isset($_POST['Taquicardiaca']) ? $_POST['Taquicardiaca'] : null;
        $tontura = isset($_POST['Tontura']) ? $_POST['Tontura'] : null;
        $outro = isset($_POST['Outro']) ? $_POST['Outro'] : null;        



        $sinaisVitais = new SinaisVitais(
            $pressao,
            $pulso,
            $respiracao,
            $saturacao,
            $temperatura,
            $perfusao,
            $hgtValor
        );

        $decisaoTransporte = new DecisaoTransporte(
            $decisaoDeTransporte,
        );

        $sinasSintomas = new SinaisSintomas(
            $abdomenSensivelRigido,
            $afundamentoCranio,
            $agitacao,
            $amnesia,
            $anginaPeito,
            $apneia,
            $bradicardia,
            $bradipneia,
            $broncoAspirando,
            $cefaleia,
            $opcaoCianose,
            $convulsao,
            $decorticacao,
            $deformidade,
            $descerebracao,
            $desmaio,
            $desvioTraqueia,
            $dispneia,
            $dorLocal,
            $opcaoEdema,
            $enfisemaSubcutanea,
            $estaseJugular,
            $facePalida,
            $opcaoHemorragia,
            $hipertensao,
            $hipotensao,
            $nauseasVomitos,
            $nasorogia,
            $obito,
            $otorreia,
            $otorracia,
            $ovace,
            $opcaoParada,
            $priaprismo,
            $pruridoPele,
            $sede,
            $sinalBattle,
            $sinalGuaxinim,
            $opcaoPupila,
            $sudorese,
            $taquipineia,
            $taquicardiaca,
            $tontura,
            $outro
        );


        $_SESSION['sinaisVitais'] = $sinaisVitais;
        $_SESSION['decisaoTransporte'] = $decisaoTransporte;
        $_SESSION['sinasSintomas'] = $sinasSintomas;

        header('Location: telaOcorrencia4.php');
    }
?>
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
    <form action="telaOcorrencia3.php" method="post"> <!--  -->
    <main>
       <aside class="aside1">
            <section class="aside1section1">
                <h1>Sinais Vitais</h1>
                <div class="sinaisVitaisGrid">
                    <div class="sinaisVitaisCell">
                        <label for="">Pressão Arterial:</label>
                        <div class="pressaoArterial">
                            <input type="number" name="pressao1" id="">
                            x
                            <input type="number" name="pressao2" id="">
                        </div>
                        <p>mmHg</p>
                    </div>
                    <div class="sinaisVitaisCell">
                        <label for="">Pulso:</label>
                        <div class="pulso">
                            <input type="number" name="pulso" id="">
                            B.C.P.M
                        </div>
                    </div>
                    <div class="sinaisVitaisCell">
                        <label for="">Respiração:</label>
                        <div class="respiracao">
                            <input type="number" name="respiracao" id="">
                            MRM
                        </div>
                    </div>
                    <div class="sinaisVitaisCell">
                        <label for="">Saturação:</label>
                        <div class="saturacao">
                            <input type="number" name="saturacao" id="">
                            %
                        </div>
                    </div>
                    <div class="sinaisVitaisCell">
                        <label for="">Temperatura:</label>
                        <div class="temperatura">
                            <input type="number" name="temperatura" id="">
                            C°
                        </div>
                    </div>
                    <div class="sinaisVitaisCell">
                        <label for="">Perfusão:</label>
                        <div class="perfusaoGrid">

                            <div class="perfusaoCell">
                                <label for="">>2 Seg</label>
                                <input type="radio" name="perfusao" id="" value=">2seg">
                            </div>

                            <div class="perfusaoCell">
                                <label for=""><2 Seg </label>
                                <input type="radio" name="perfusao" id="" value="<2seg">
                            </div>

                        </div>
                    </div>
                    <div class="sinaisVitaisCell HGT">
                        <label for="">HGT:</label>
                        <div class="hgtGrid">

                            <input type="text" name="hgtValor" id="">

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
                        <input type="radio" name="decisaoDeTransporte" id="" value="4">
                        <img src="../img/critico.png">
                        <p>Crítico</p>
                    </div>
                    <div class="decisaoTransporteCell">
                        <input type="radio" name="decisaoDeTransporte" id="" value="3">
                        <img src="../img/instavel.png">
                        <p>Instável</p>
                    </div>
                    <div class="decisaoTransporteCell">
                        <input type="radio" name="decisaoDeTransporte" id="" value="2">
                        <img src="../img/potencialmenteinstavel.png">
                        <p>Potencialmente instável</p>
                    </div>
                    <div class="decisaoTransporteCell">
                        <input type="radio" name="decisaoDeTransporte" id="" value="1">
                        <img src="../img/estavel.png">
                        <p>Estável</p>
                    </div>
                </div>
            </section>
       </aside>
       <aside class="aside2">
            <h1>Sinais e Sintomas</h1>                              <!-- SINAIS E SINTOMAS -->
            <br><br>
            <div class="sinaisESintomasGrid">
                <aside class="aside2aside1">
                    <div class="sinaisESintomasCell">
                        <input type="checkbox" name="AbdomenSensivelRigido" id="" value="1">
                        <label for="">Abdômen Sensível ou Rígido</label>
                    </div>
                    <div class="sinaisESintomasCell">
                        <input type="checkbox" name="AfundamentoCranio" id="" value="1">
                        <label for="">Afundamento de Crânio</label>
                    </div>
                    <div class="sinaisESintomasCell">
                        <input type="checkbox" name="Agitacao" id="" value="1">
                        <label for="">Agitação</label>
                    </div>
                    <div class="sinaisESintomasCell">
                        <input type="checkbox" name="Amnesia" id="" value="1">
                        <label for="">Amnésia</label>
                    </div>
                    <div class="sinaisESintomasCell">
                        <input type="checkbox" name="AnginaPeito" id=""value="1">
                        <label for="">Angina de Peito</label>
                    </div>
                    <div class="sinaisESintomasCell">
                        <input type="checkbox" name="Apneia" id="" value="1">
                        <label for="">Apneia</label>
                    </div>
                    <div class="sinaisESintomasCell">
                        <input type="checkbox" name="Bradicardia" id="" value="1">
                        <label for="">Bradicardia</label>
                    </div>
                    <div class="sinaisESintomasCell">
                        <input type="checkbox" name="Bradipneia" id="" value="1">
                        <label for="">Bradipnéia</label>
                    </div>
                    <div class="sinaisESintomasCell">
                        <input type="checkbox" name="BroncoAspirando" id="" value="1">
                        <label for="">Bronco - Aspirando</label>
                    </div>
                    <div class="sinaisESintomasCell">
                        <input type="checkbox" name="Cefaleia" id="" value="1">
                        <label for="">Cefaléia</label>
                    </div>
                    <div class="sinaisESintomasCell">
                        <input type="checkbox" name="sinaisESintomas" id="" onchange="toggleHidden('hidden1')">
                        <label for="">Cianose</label>

                        <div class="hidden" id="hidden1">
                            <div class="hiddenCell">
                                <input type="radio" name="opcaoCianose" id="" value="1">
                                <label for="">Labios</label>
                            </div>
                            <div class="hiddenCell">
                                <input type="radio" name="opcaoCianose" id="" value="1">
                                <label for="">Extremidades</label>
                            </div>

                            <div class="X" onclick="fecharHidden('hidden1')">❌</div>
                        </div>
                    </div>
                    <div class="sinaisESintomasCell">
                        <input type="checkbox" name="Convulsao" id="" value="1">
                        <label for="">Convulsão</label>
                    </div>
                    <div class="sinaisESintomasCell">
                        <input type="checkbox" name="Decorticacao" id="" value="1">
                        <label for="">Decorticação</label>
                    </div>
                    <div class="sinaisESintomasCell">
                        <input type="checkbox" name="Deformidade" id="" value="1">
                        <label for="">Deformidade</label>
                    </div>
                    <div class="sinaisESintomasCell">
                        <input type="checkbox" name="Descerebracao" id="" value="1">
                        <label for="">Descerebração</label>
                    </div>
                    <div class="sinaisESintomasCell">
                        <input type="checkbox" name="Desmaio" id="" value="1">
                        <label for="">Desmaio</label>
                    </div>
                    <div class="sinaisESintomasCell">
                        <input type="checkbox" name="DesvioTraqueia" id="" value="1"> 
                        <label for="">Desvio de Traquéia</label>
                    </div>
                    <div class="sinaisESintomasCell">
                        <input type="checkbox" name="Dispneia" id="" value="1">
                        <label for="">Dispnéia</label>
                    </div>
                    <div class="sinaisESintomasCell">
                        <input type="checkbox" name="DorLocal" id="" value="1"> 
                        <label for="">Dor local</label>
                    </div>
                    <div class="sinaisESintomasCell">
                        <input type="checkbox" name="sinaisESintomas" id="" onchange="toggleHidden('hidden2')">
                        <label for="">Edema</label>

                        <div class="hidden Edema" id="hidden2">
                            <div class="hiddenCell">
                                <input type="radio" name="opcaoEdema" id="" value="1">
                                <label for="">Generalizado</label>
                            </div>
                            <div class="hiddenCell">
                                <input type="radio" name="opcaoEdema" id="" value="1">
                                <label for="">Localizado</label>
                            </div>

                            <div class="X" onclick="fecharHidden('hidden2')">❌</div>
                        </div>
                    </div>
                    <div class="sinaisESintomasCell">
                        <input type="checkbox" name="EnfisemaSubcutanea" id="" value="1">
                        <label for="">Enfisema Subcutânea</label>
                    </div>
                    <div class="sinaisESintomasCell">
                        <input type="checkbox" name="EstaseJugular" id="" value="1">
                        <label for="">Estase de Jugular</label>
                    </div>
                    <div class="sinaisESintomasCell">
                        <input type="checkbox" name="FacePalida" id="" value="1">
                        <label for="">Face Pálida</label>
                    </div>
                </aside>
                <aside class="aside2aside2">
                    <div class="sinaisESintomasCell">
                        <input type="checkbox" name="sinaisESintomas" id="" onchange="toggleHidden('hidden3')">
                        <label for="">Hemorragia</label>

                        <div class="hidden Hemorragia" id="hidden3">
                            <div class="hiddenCell">
                                <input type="radio" name="opcaoHemorragia" id="" value="1">
                                <label for="">Interna</label>
                            </div>
                            <div class="hiddenCell">
                                <input type="radio" name="opcaoHemorragia" id="" value="1">
                                <label for="">Externa</label>
                            </div>

                            <div class="X" onclick="fecharHidden('hidden3')">❌</div>
                        </div>
                    </div>
                    <div class="sinaisESintomasCell">
                        <input type="checkbox" name="Hipertensao" id="" value="1">
                        <label for="">Hipertensão</label>
                    </div>
                    <div class="sinaisESintomasCell">
                        <input type="checkbox" name="Hipotensao" id="" value="1">
                        <label for="">Hipotensão</label>
                    </div>
                    <div class="sinaisESintomasCell">
                        <input type="checkbox" name="NauseasVomitos" id="" value="1">
                        <label for="">Nâuseas e vômitos</label>
                    </div>
                    <div class="sinaisESintomasCell">
                        <input type="checkbox" name="Nasorogia" id="" value="1">
                        <label for="">Nasorogia</label>
                    </div>
                    <div class="sinaisESintomasCell">
                        <input type="checkbox" name="Obito" id="" value="1">
                        <label for="">Óbito</label>
                    </div>
                    <div class="sinaisESintomasCell">
                        <input type="checkbox" name="Otorreia" id="" value="1">
                        <label for="">Otorréia</label>
                    </div>
                    <div class="sinaisESintomasCell">
                        <input type="checkbox" name="Otorracia" id="" value="1">
                        <label for="">Otorracia</label>
                    </div>
                    <div class="sinaisESintomasCell">
                        <input type="checkbox" name="Ovace" id="" value="1">
                        <label for="">O V A C E</label>
                    </div>
                    <div class="sinaisESintomasCell">
                        <input type="checkbox" name="sinaisESintomas" id="" onchange="toggleHidden('hidden4')">
                        <label for="">Parada</label>

                        <div class="hidden Parada" id="hidden4">
                            <div class="hiddenCell">
                                <input type="radio" name="opcaoParada" id="" value="1">
                                <label for="">Cardíaca</label>
                            </div>
                            <div class="hiddenCell">
                                <input type="radio" name="opcaoParada" id="" value="1">
                                <label for="">Respiratória</label>
                            </div>

                            <div class="X" onclick="fecharHidden('hidden4')">❌</div>
                        </div>
                    </div>
                    <div class="sinaisESintomasCell">
                        <input type="checkbox" name="Priaprismo" id="" value="1">
                        <label for="">Priaprismo</label>
                    </div>
                    <div class="sinaisESintomasCell">
                        <input type="checkbox" name="PruridoPele" id="" value="1">
                        <label for="">Prurido na pele</label>
                    </div>
                    <div class="sinaisESintomasCell">
                        <input type="checkbox" name="Sede" id="" value="1">
                        <label for="">Sede</label>
                    </div>
                    <div class="sinaisESintomasCell">
                        <input type="checkbox" name="SinalBattle" id="" value="1">
                        <label for="">Sinal de Battle</label>
                    </div>
                    <div class="sinaisESintomasCell">
                        <input type="checkbox" name="SinalGuaxinim" id="" value="1">
                        <label for="">Sinal de Guaxinim</label>
                    </div>
                    <div class="sinaisESintomasCell">
                        <input type="checkbox" name="sinaisESintomas" id="" onchange="toggleHidden('hidden5')">
                        <label for="">Pupilas</label>

                        <div class="hidden" id="hidden5">
                            <div class="hiddenCell">
                                <input type="radio" name="opcaoPupila" id="" value="1">
                                <label for="">Anisocoria</label>
                            </div>
                            <div class="hiddenCell">
                                <input type="radio" name="opcaoPupila" id="" value="1">
                                <label for="">Isocoria</label>
                            </div>
                            <div class="hiddenCell">
                                <input type="radio" name="opcaoPupila" id="" value="1">
                                <label for="">Midriase</label>
                            </div>
                            <div class="hiddenCell">
                                <input type="radio" name="opcaoPupila" id="" value="1">
                                <label for="">Miose</label>
                            </div>
                            <div class="hiddenCell">
                                <input type="radio" name="opcaoPupila" id="" value="1">
                                <label for="">Reagente</label>
                            </div>
                            <div class="hiddenCell">
                                <input type="radio" name="opcaoPupila" id="" value="1">
                                <label for="">Não Reagente</label>
                            </div>

                            <div class="X" onclick="fecharHidden('hidden5')">❌</div>
                        </div>
                    </div>
                    <div class="sinaisESintomasCell">
                        <input type="checkbox" name="Sudorese" id="" value="1">
                        <label for="">Sudorese</label>
                    </div>
                    <div class="sinaisESintomasCell">
                        <input type="checkbox" name="Taquipineia" id="" value="1">
                        <label for="">Taquipinéia</label>
                    </div>
                    <div class="sinaisESintomasCell">
                        <input type="checkbox" name="Taquicardiaca" id="" value="1">
                        <label for="">Taquicardiaca</label>
                    </div>
                    <div class="sinaisESintomasCell">
                        <input type="checkbox" name="Tontura" id="" value="1">
                        <label for="">Tontura</label>
                    </div>
                    <div class="sinaisESintomasCell">
                        <input type="checkbox" name="Outro" id="" value="1">
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