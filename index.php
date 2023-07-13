<?php
session_start();
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="stylefai.css">
    <title>First Article Inspection - FAI</title>
</head>

<body>


    <?php
    if (isset($_SESSION['msg']))
        echo $_SESSION['msg'];
    unset($_SESSION['msg']);
    ?>
    <br>

    <form id="formulario" method="POST" action="processa.php">

        <header class="topo">
            <div class="controleSgi">
                <p>F-0046</p>
            </div>

            <div class="titulo-fai">
                <h1>First Article Inspection - FAI</h1>
            </div>
        </header>
        <!---------------------------------------------------------------------------------------->
        <!--Identificação do Modelo-->
        <!---------------------------------------------------------------------------------------->

        <fieldset>
            <legend><strong>Identificação do Modelo</strong></legend>

            <label for="">Data: </label>
            <input value="<?php echo date('Y-m-d'); ?>" type="date" name="data" required><br><br>

            <label for="">Modelo: </label>
            <input type="text" name="modelo" placeholder="Modelo" required><br><br>

            <label for="">Partnumber: </label>
            <input type="text" name="partnumber" placeholder="PartNumber" required><br><br>

            <label for="">Codigo: </label>
            <input type="text" name="codigo" placeholder="Codigo" required><br><br>

            <label for="">Versao: </label>
            <input type="text" name="versao" placeholder="Versao da PCI" required><br><br>

            <label for="">Ordem: </label>
            <input type="text" name="ordem" placeholder="Ordem de produção" required><br><br>

        </fieldset>

        <!---------------------------------------------------------------------------------------->
        <!--Linha-->
        <!---------------------------------------------------------------------------------------->

        <fieldset>
            <legend><strong>Linha</strong></legend>

            <label for="linhaa">Linha SMT - Lado A</label>
            <select id="linhaa" name="linhaa" required>
                <option selected disabled value="">Selecione</option>
                <option value="LM-13">LM-13</option>
                <option value="LM-14">LM-14</option>
                <option value="LM-15">LM-15</option>
                <option value="LM-16">LM-16</option>
                <option value="LM-17">LM-17</option>
                <option value="LM-18">LM-18</option>
                <option value="LM-19">LM-19</option>
                <option value="LM-20">LM-20</option>
            </select><br><br>

            <?php
            if (isset($_POST["linhaa"])) {
                $text = $_POST["linhaa"];
            }
            ?>



            <label for="linhab">Linha SMT - Lado B</label>
            <select id="linhab" name="linhab" required>
                <option selected disabled value="">Selecione</option>
                <option value="LM-13">LM-13</option>
                <option value="LM-14">LM-14</option>
                <option value="LM-15">LM-15</option>
                <option value="LM-16">LM-16</option>
                <option value="LM-17">LM-17</option>
                <option value="LM-18">LM-18</option>
                <option value="LM-19">LM-19</option>
                <option value="LM-20">LM-20</option>
            </select><br><br>

            <?php
            if (isset($_POST["linhab"])) {
                $text = $_POST["linhab"];
            }
            ?>

            <label for="linhaimc">Linha IMC </label>
            <select id="linhaimc" name="linhaimc" required>
                <option selected disabled value="">Selecione</option>
                <option value="LM-02">LM-02</option>
                <option value="LM-04">LM-04</option>
                <option value="LM-06">LM-06</option>
                <option value="LM-08">LM-08</option>
                <option value="LM-10">LM-10</option>
                <option value="LM-12">LM-12</option>
                <option value="LM-14">LM-14</option>
            </select><br><br>

            <?php
            if (isset($_POST["linhaimc"])) {
                $text = $_POST["linhaimc"];
            }
            ?>

        </fieldset>

        <!---------------------------------------------------------------------------------------->
        <!--SMT - Printer, SPI, NXT, XP, XP2-->
        <!---------------------------------------------------------------------------------------->

        <fieldset>
            <legend><strong>SMT - Printer, SPI, NXT, XP, XP2</strong></legend>


            <label for="modelosolda"> Pasta de Solda </label>
            <input type="text" name="modelosolda" id="modelosolda" placeholder="modelo" required /> <br><br>

            <label for="squeegee">Sessão do Squeegee</label>
            <select id="squeegee" name="squeegee" required>
                <option selected disabled value="">Selecione</option>
                <option>Longa</option>
                <option>Curta</option>
            </select><br><br>

            <?php
            if (isset($_POST["squeegee"])) {
                $text = $_POST["squeegee"];
            }
            ?>

            <label for="spinome"> SPI - Status </label>
            <select id="spinome" name="spinome" required>
                <option selected disabled value="">Selecione</option>
                <option>Ativo</option>
                <option>Inativo</option>
            </select><br><br>

            <?php
            if (isset($_POST["spinome"])) {
                $text = $_POST["spinome"];
            }
            ?>


            <label for="stencila">Stencil Lado A</label>
            <input type="text" name="stencila" id="stencila" required /><br><br>


            <label for="printervelocidadea">(Lado A) Printer: Velocidade</label>
            <select id="printervelocidadea" name="printervelocidadea" required>
                <option selected disabled value="">Selecione</option>
                <option>50 mm/s</option>
                <option>55 mm/s</option>
                <option>60 mm/s</option>
                <option>65 mm/s</option>
                <option>70 mm/s</option>
                <option>75 mm/s</option>
                <option>80 mm/s</option>
                <option>85 mm/s</option>
                <option>90 mm/s</option>
                <option>95 mm/s</option>
                <option>100mm/s</option>
            </select><br><br>

            <?php
            if (isset($_POST["printervelocidadea"])) {
                $text = $_POST["printervelocidadea"];
            }
            ?>

            <label for="printerpressaoa">(Lado A) Printer: Pressão </label>
            <select id="printerpressaoa" name="printerpressaoa" required>
                <option selected disabled value="">Selecione</option>
                <option>8.00 kg</option>
                <option>9.00 kg</option>
                <option>10.00 kg</option>
                <option>11.00 kg</option>
                <option>12.00 kg</option>
                <option>13.00 kg</option>
                <option>14.00 kg</option>
                <option>15.00 kg</option>
                <option>16.00 kg</option>
                <option>17.00 kg</option>
                <option>18.00 kg</option>
                <option>19.00 kg</option>
                <option>20.00 kg</option>
            </select><br><br>

            <?php
            if (isset($_POST["printerpressaoa"])) {
                $text = $_POST["printerpressaoa"];
            }
            ?>


            <label for="stencilb">Stencil Lado B</label>
            <input type="text" name="stencilb" id="stencilb" required /><br><br>

            <label for="printervelocidadeb">(Lado B) Printer: Velocidade</label>
            <select id="printervelocidadeb" name="printervelocidadeb" required>
                <option selected disabled value="">Selecione</option>
                <option>50 mm/s</option>
                <option>55 mm/s</option>
                <option>60 mm/s</option>
                <option>65 mm/s</option>
                <option>70 mm/s</option>
                <option>75 mm/s</option>
                <option>80 mm/s</option>
                <option>85 mm/s</option>
                <option>90 mm/s</option>
                <option>95 mm/s</option>
                <option>100mm/s</option>
            </select><br><br>

            <?php
            if (isset($_POST["printervelocidadeb"])) {
                $text = $_POST["printervelocidadeb"];
            }
            ?>

            <label for="printerpressaob">(Lado B) Printer: Pressão</label>
            <select id="printerpressaob" name="printerpressaob" required>
                <option selected disabled value="">Selecione</option>
                <option>8.00 kg</option>
                <option>9.00 kg</option>
                <option>10.00 kg</option>
                <option>11.00 kg</option>
                <option>12.00 kg</option>
                <option>13.00 kg</option>
                <option>14.00 kg</option>
                <option>15.00 kg</option>
                <option>16.00 kg</option>
                <option>17.00 kg</option>
                <option>18.00 kg</option>
                <option>19.00 kg</option>
                <option>20.00 kg</option>
            </select><br><br>

            <?php
            if (isset($_POST["printerpressaob"])) {
                $text = $_POST["printerpressaob"];
            }
            ?>

        </fieldset>

        <!---------------------------------------------------------------------------------------->
        <!--Reflow-->
        <!---------------------------------------------------------------------------------------->
        <fieldset>
            <legend><strong>Reflow</strong></legend>


            <label for="rnome">Programa</label>
            <input type="text" name="rnome" id="rnome" required /><br><br>

            <label for="n2">N2</label>
            <select id="n2" name="n2" required>
                <option selected disabled value="">Selecione</option>
                <option>Ativo</option>
                <option>Inativo</option>
            </select><br><br>

            <?php
            if (isset($_POST["n2"])) {
                $text = $_POST["n2"];
            }
            ?>


            <label for="mecalor">Mecalor</label>
            <select id="mecalor" name="mecalor" required>
                <option selected disabled value="">Selecione</option>
                <option>Ativo</option>
                <option>Inativo</option>
            </select><br><br>

            <?php
            if (isset($_POST["mecalor"])) {
                $text = $_POST["mecalor"];
            }
            ?>

            <label for="posforno">Aspecto pós-forno</label>
            <select id="posforno" name="posforno" required>
                <option selected disabled value="">Selecione</option>
                <option>OK</option>
                <option>Solda não curada</option>
            </select><br><br>

            <?php
            if (isset($_POST["posforno"])) {
                $text = $_POST["posforno"];
            }
            ?>

            <label for="velocidadeConveyor">Speed Conveyor </label>
            <select id="velocidadeConveyor" name="velocidadeConveyor" required>
                <option selected disabled value="">Selecione</option>
                <option>40s</option>
                <option>50s</option>
                <option>60s</option>
                <option>70s</option>
                <option>80s</option>
                <option>85s</option>
                <option>90s</option>
                <option>95s</option>
            </select><br><br>

            <?php
            if (isset($_POST["velocidadeConveyor"])) {
                $text = $_POST["velocidadeConveyor"];
            }
            ?>

            <label for="adjconveyor">Conveyor encaixe </label>
            <select id="adjconveyor" name="adjconveyor" required>
                <option selected disabled value="">Selecione</option>
                <option>OK</option>
                <option>Risco</option>
            </select><br><br>

            <?php
            if (isset($_POST["adjconveyor"])) {
                $text = $_POST["adjconveyor"];
            }
            ?>

        </fieldset>

        <!---------------------------------------------------------------------------------------->
        <!--AOI, Raio X, Router-->
        <!---------------------------------------------------------------------------------------->

        <fieldset>
            <legend><strong>AOI, Raio X, Router</strong></legend>


            <label for="aoipolaridade">AOI - Polaridade </label>
            <select id="aoipolaridade" name="aoipolaridade" required>
                <option selected disabled value="">Selecione</option>
                <option>OK</option>
                <option>NC</option>
            </select><br><br>

            <?php
            if (isset($_POST["aoipolaridade"])) {
                $text = $_POST["aoipolaridade"];
            }
            ?>

            <label for="aoipresenca">AOI - Presença </label>
            <select id="aoipresenca" name="aoipresenca" required>
                <option selected disabled value="">Selecione</option>
                <option>OK</option>
                <option>NC</option>
            </select><br><br>

            <?php
            if (isset($_POST["aoipresenca"])) {
                $text = $_POST["aoipresenca"];
            }
            ?>

            <label for="raiox">Raio X - Resultado BGA's </label>
            <select id="raiox" name="raiox" required>
                <option selected disabled value="">Selecione</option>
                <option>OK</option>
                <option>NC</option>
            </select><br><br>

            <?php
            if (isset($_POST["raiox"])) {
                $text = $_POST["raiox"];
            }
            ?>

            <label for="router">Router - Aspecto do Corte </label>
            <select id="router" name="router" required>
                <option selected disabled value="">Selecione</option>
                <option>OK</option>
                <option>NC</option>
            </select><br><br>

            <?php
            if (isset($_POST["router"])) {
                $text = $_POST["router"];
            }
            ?>

        </fieldset>

        <!---------------------------------------------------------------------------------------->
        <!--IMC-->
        <!---------------------------------------------------------------------------------------->

        <fieldset>
            <legend><strong>IMC</strong></legend>

            <label for="imcdescarregamento">Posto de Descarregamento</label>
            <select id="imcdescarregamento" name="imcdescarregamento" required>
                <option selected disabled value="">Selecione</option>
                <option>Automatico</option>
                <option>Manual</option>
                <option>Inativo</option>
            </select><br><br>


            <?php
            if (isset($_POST["imcdescarregamento"])) {
                $text = $_POST["imcdescarregamento"];
            }
            ?>

            <label for="ict">ICT - Versão do Programa</label>
            <select id="ict" name="ict" required>
                <option selected disabled value="">Selecione</option>
                <option>Ativo</option>
                <option>Inativo</option>
            </select><br><br>

            <?php
            if (isset($_POST["ict"])) {
                $text = $_POST["ict"];
            }
            ?>

            <label for="imcfctversao">FCT - Versão do Teste</label>
            <input type="text" name="imcfctversao" id="imcfctversao" required><br><br>

            <label for="imcfctjigs">FCT - Postos mesma versão</label>
            <select id="imcfctjigs" name="imcfctjigs" required>
                <option selected disabled value="">Selecione</option>
                <option>OK</option>
                <option>NC</option>
            </select><br><br>

            <?php
            if (isset($_POST["imcfctjigs"])) {
                $text = $_POST["imcfctjigs"];
            }
            ?>

            <label for="imcunderfill">Underfill - Aplicação (ECAT)</label>
            <select id="imcunderfill" name="imcunderfill" required>
                <option selected disabled value="">Selecione</option>
                <option>NA</option>
                <option>OK</option>
                <option>NC</option>
            </select><br><br>

            <?php
            if (isset($_POST["imcunderfill"])) {
                $text = $_POST["imcunderfill"];
            }
            ?>


            <label for="imchotbarp">Hotbar - Pressão</label>
            <input type="text" name="imchotbarp" id="imchotbarp" required><br><br>

            <label for="imchotbart">Hotbar - Temperatura</label>
            <input type="text" name="imchotbart" id="imchotbart" required><br><br>

            <label for="imchotbartempo">Hotbar - Tempo</label>
            <input type="text" name="imchotbartempo" id="imchotbartempo" required><br><br>

            <label for="imcfctperif">FCT(Perif.) Versão do teste</label>
            <input type="text" name="imcfctperif" id="imcfctperif" required><br><br>

            <label for="imcperifvisual">Periféricos - Inspeção Visual</label>
            <select id="imcperifvisual" name="imcperifvisual" required>
                <option selected disabled value="">Selecione</option>
                <option>NA</option>
                <option>OK</option>
                <option>NC</option>
            </select><br><br>

            <?php
            if (isset($_POST["imcperifvisual"])) {
                $text = $_POST["imcperifvisual"];
            }
            ?>


            <label for="oqcmemram">OQC - Mem. RAM onboard</label>
            <select id="oqcmemram" name="oqcmemram" required>
                <option selected disabled value="">Selecione</option>
                <option>Não aplicável</option>
                <option>Adata</option>
                <option>Smart</option>
                <option>Samsung</option>
                <option>Hynix</option>
                <option>Micron</option>
            </select><br><br>

            <?php
            if (isset($_POST["oqcmemram"])) {
                $text = $_POST["oqcmemram"];
            }
            ?>

            <label for="oqcmemvid">OQC - Mem. Video onboard</label>
            <select id="oqcmemvid" name="oqcmemvid" required>
                <option selected disabled value="">Selecione</option>
                <option>Não aplicável</option>
                <option>Adata</option>
                <option>Smart</option>
                <option>Samsung</option>
                <option>Hynix</option>
                <option>Micron</option>
            </select><br><br>

            <?php
            if (isset($_POST["oqcmemvid"])) {
                $text = $_POST["oqcmemvid"];
            }
            ?>

            <label for="oqcproces">OQC - Processador (modelo)</label>
            <input type="text" name="oqcproces" id="oqcproces" required><br><br>

            <label for="oqcvrbios">OQC - Versão de BIOS</label>
            <input type="text" name="oqcvrbios" id="oqcvrbios" required><br><br>

            <label for="oqcvrme">OQC - Versão de ME</label>
            <input type="text" name="oqcvrme" id="oqcvrme" required><br><br>

        </fieldset>

        <br><br>
        <input type="submit" value="Cadastrar">
    </form>

</body>

</html>