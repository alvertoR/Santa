<?php 

    session_start();
    include "../headerUser.php";  
    
?>

<section>
	<div class="separador"></div>
</section>
<div class="main">
    <div class="titulo-historia">
        <h2>Historia clínica</h2>
    </div>
    <div class="historia">
        <form id="formHistoria" action="" class="form-historia">             
            <!--Inicio Anamnesis, Signos clínicos observados y Tratamiento previo y respuestas-->
            
            <div class="containerVoz">
                <small>Anamnesis</small>
                <div class="input-voz">
                    <textarea name="anamnesis" id="anamnesis"></textarea>
                    <div class="microfono">
                        <img src="../../recursos/microfono/off.png" id="start-Anamnesis" alt="microfono-Off" >
                    </div>
                </div>
            </div>
            <div class="containerVoz">
                <small>Signos clínicos observados</small>
                <div class="input-voz">
                    <textarea name="signosClinicos" id="signosClinicos"></textarea>
                    <div class="microfono">
                        <img src="../../recursos/microfono/off.png" id="start-SignosClinicos" alt="microfono-Off" >
                    </div>
                </div>
            </div>
            <div class="containerVoz">
                <small>Tratamiento previo y respuesta</small>
                <div class="input-voz">
                    <textarea name="tratamientos" id="tratamiento"></textarea>
                    <div class="microfono">
                        <img src="../../recursos/microfono/off.png" id="start-tratamiento" alt="microfono-Off" >
                    </div>
                </div>
            </div>
            <!--Fin Anamnesis, Signos clínicos observados y Tratamiento previo y respuestas-->

            <!--Inicio select alimentación, habitat y estado reproductivo-->
            <div class="info-mascota">
                <ul>
                    <li>
                        <div class="card-select">
                            <small>Alimentación</small>
                            <div class="select">
                                <select id="" name="alimentacion">
                                    <option value="">Seleccione el tipo de Alimentación</option>
                                    <option value="Concentrado">Concentrado medicado</option>
                                    <option value="Concentrado comercial">Concentrado comercial</option>
                                    <option value="Dieta Barf">Dieta Barf</option>
                                    <option value="Dieta Casera">Dieta Casera</option>
                                </select>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="card-select">
                            <small>Habitat</small>
                            <div class="select">
                                <select id="" name="habitat">
                                    <option value="">Seleccione el tipo de habitat</option>
                                    <option value="Apartamento">Apartamento</option>
                                    <option value="Casa">Casa</option>
                                    <option value="Casaquinta">Casaquinta</option>
                                    <option value="Finca">Finca</option>
                                </select>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="card-select">
                            <small>Estado reproductivo</small>
                            <div class="select">
                                <select id="estoReproductivo" name="reproductivo">
                                    
                                </select>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
            <!--Fin select alimentación, habitat y estado reproductivo-->
            
            <!--Inicio Estado sanitario, viajes y observaciones-->
            <div class="containerVoz">
                <small>Estado sanitario</small>
                <div class="input-voz">
                    <textarea name="estadoSanitario" id="estadoSanitario"></textarea>
                    <div class="microfono">
                        <img src="../../recursos/microfono/off.png" id="start-estadoSanitario" alt="microfono-Off" >
                    </div>
                </div>
            </div>
            <div class="containerVoz">
                <small>Viajes</small>
                <div class="input-voz">
                    <textarea name="viajes" id="viajes"></textarea>
                    <div class="microfono">
                        <img src="../../recursos/microfono/off.png" id="start-viajes" alt="microfono-Off" >
                    </div>
                </div>
            </div>
            <div class="containerVoz">
                <small>Observaciones</small>
                <div class="input-voz">
                    <textarea name="observaciones" id="observaciones"></textarea>
                    <div class="microfono">
                        <img src="../../recursos/microfono/off.png" id="start-observaciones" alt="microfono-Off" >
                    </div>
                </div>
            </div>
            <!--Fin Estado sanitario, viajes y observaciones-->
            <div class="separador-historia"></div>

            <!--Inicio sección exámen clínico-->
            <div class="wrapper-examenes">
                <h2>Exámen Clínico</h2>
                <div class="top-examenes">
                    <div class="card-select">
                        <small>Actitud</small>
                        <div class="select">
                            <select id="" name="actitud">
                                <option value="">Seleccione el tipo de Actitud</option>
                                <option value="Hiperestésico">Hiperestésico</option>
                                <option value="Alerta">Alerta</option>
                                <option value="Letárgico">Letárgico</option>
                                <option value="Depresivo">Depresivo</option>
                                <option value="Estupor">Estupor</option>
                                <option value="Coma">Coma</option>
                            </select>
                        </div>
                    </div>
                    <div class="card-select">
                        <small>Temperamento</small>
                        <div class="select">
                            <select id="" name="tratamiento">
                                <option value="">Seleccione el temperamento</option>
                                <option value="Dócil">Dócil</option>
                                <option value="Agresivo">Agresivo</option>
                                <option value="Equilibrado">Equilibrado</option>
                                <option value="Linfático">Linfático</option>
                                <option value="Nervioso">Nervioso</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="mid-examenes">
                    <ul>
                        <li>
                            <div class="card-datos">
                                <h3>Fr.Respiratoria</h3>
                                <div class="input-card">
                                    <input type="text" name="frRespiratoria" id="">
                                    <small>Unid</small>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="card-datos">
                                <h3>Fr.Cardiaca</h3>
                                <div class="input-card">
                                    <input type="text" name="frCardiaca" id="">
                                    <small>Unid</small>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="card-datos">
                                <h3>Pulso</h3>
                                <div class="input-card">
                                    <input type="text" name="pulso" id="">
                                    <small>Unid</small>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="card-datos">
                                <h3>Temperatura</h3>
                                <div class="input-card">
                                    <input type="text" name="temperatura" id="">
                                    <small>Unid</small>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="card-fix">
                            <small>Cond. Corporal</small>
                                <div class="select-fix">
                                    <select id="" name="corporal">
                                        <option value=""></option>
                                        <option value="Caquético">Caquético</option>
                                        <option value="Delgado">Delgado</option>
                                        <option value="Normal">Normal</option>
                                        <option value="Sobrepeso">Sobrepeso</option>
                                        <option value="Obeso">Obeso</option>
                                    </select>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="card-fix">
                            <small>Carac. Pulmonar</small>
                                <div class="select-fix">
                                    <select id="" name="pulmonar">
                                        <option value=""></option>
                                        <option value="Fuerte">Fuerte</option>
                                        <option value="Regular">Regular</option>
                                        <option value="Débil">Débil</option>
                                    </select>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="card-fix">
                            <small>M. Mucosa</small>
                                <div class="select-fix">
                                    <select id="" name="mucosa">
                                        <option value=""></option>
                                        <option value="Cianóticas">Cianóticas</option>
                                        <option value="Ictérico">Ictérico</option>
                                        <option value="Hiperémicas">Hiperémicas</option>
                                        <option value="Rosadas">Rosadas</option>
                                        <option value="Pálidas">Pálidas</option>
                                    </select>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="card-datos">
                                <h3>TLLC</h3>
                                <div class="input-card">
                                    <input type="text" name="tllc" id="">
                                    <small>Unid</small>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="card-datos">
                                <h3>Peso</h3>
                                <div class="input-card">
                                    <input type="text" name="peso" id="">
                                    <small>Unid</small>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
            <!--Fin sección exámen clínico-->

            <!--Inicio sección anormalidades en los sistemas-->
            <div class="wrapper-anormalidades">
                <h2>Anormalidades en los sistemas</h2>
                <div class="wrapper-check">
                    <table class="check-left">
                        <tr>
                            <td>
                                <div class="check-anormalidades">
                                    <input type="checkbox" id="piel-anexos" >
                                    <label for="piel-anexos">Piel y anexos(Mucosas)</label>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <div class="check-anormalidades">
                                    <input type="checkbox" id="respiratorio" >
                                    <label for="respiratorio">Respiratorio</label>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <div class="check-anormalidades">
                                    <input type="checkbox" id="cardiovascular" >
                                    <label for="cardiovascular">Cardiovascular</label>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <div class="check-anormalidades">
                                    <input type="checkbox" id="digestivo" >
                                    <label for="digestivo">Digestivo</label>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <div class="check-anormalidades">
                                    <input type="checkbox" id="muscoesqueletico" >
                                    <label for="muscoesqueletico">Muscoesqueletico</label>
                                </div>
                            </td>
                        </tr>
                    </table>
                    <table class="check-right">
                        <tr>
                            <td>
                                <div class="check-anormalidades">
                                    <input type="checkbox" id="nervioso" >
                                    <label for="nervioso">Nervioso</label>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <div class="check-anormalidades">
                                    <input type="checkbox" id="genitounitario" >
                                    <label for="genitounitario">Genitounitario</label>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <div class="check-anormalidades">
                                    <input type="checkbox" id="glandulas-mamarias" >
                                    <label for="glandulas-mamarias">Glandulas Mamarias</label>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <div class="check-anormalidades">
                                    <input type="checkbox" id="organos-sentidos" >
                                    <label for="organos-sentidos">Órganos de los sentidos</label>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <div class="check-anormalidades">
                                    <input type="checkbox" id="ganglios" >
                                    <label for="ganglios">Ganglios linfáticos</label>
                                </div>
                            </td>
                        </tr>
                    </table>
                </div>  
            </div>

            <div id="Dpiel" class="containerVoz ocultar">
                <small>Piel y anexos(Mucosas)</small>
                <div class="input-voz">
                    <textarea name="text-pielAnexos" id="text-pielAnexos"></textarea>
                    <div class="microfono">
                        <img src="../../recursos/microfono/off.png" id="start-pielAnexos" alt="microfono-Off" >
                    </div>
                </div>
            </div>
            <div id="Drespiratorio" class="containerVoz ocultar">
                <small>Respiratorio</small>
                <div class="input-voz">
                    <textarea name="text-respiratorio" id="text-respiratorio"></textarea>
                    <div class="microfono">
                        <img src="../../recursos/microfono/off.png" id="start-respiratorio" alt="microfono-Off" >
                    </div>
                </div>
            </div>
            <div id="Dcardiovascular" class="containerVoz ocultar">
                <small>Cardiovascular</small>
                <div class="input-voz">
                    <textarea name="text-cardiovascular" id="text-cardiovascular"></textarea>
                    <div class="microfono">
                        <img src="../../recursos/microfono/off.png" id="start-cardiovascular" alt="microfono-Off" >
                    </div>
                </div>
            </div>
            <div id="Ddigestivo" class="containerVoz ocultar">
                <small>Digestivo</small>
                <div class="input-voz">
                    <textarea name="text-digestivo" id="text-digestivo"></textarea>
                    <div class="microfono">
                        <img src="../../recursos/microfono/off.png" id="start-digestivo" alt="microfono-Off" >
                    </div>
                </div>
            </div>
            <div id="Dmusco" class="containerVoz ocultar">
                <small>Muscoesqueletico</small>
                <div class="input-voz">
                    <textarea name="text-muscoEsqueletico" id="text-muscoEsqueletico"></textarea>
                    <div class="microfono">
                        <img src="../../recursos/microfono/off.png" id="start-muscoEsqueletico" alt="microfono-Off" >
                    </div>
                </div>
            </div>
            <div id="Dnervioso" class="containerVoz ocultar">
                <small>Nervioso</small>
                <div class="input-voz">
                    <textarea name="text-nervioso" id="text-nervioso"></textarea>
                    <div class="microfono">
                        <img src="../../recursos/microfono/off.png" id="start-nervioso" alt="microfono-Off" >
                    </div>
                </div>
            </div>
            <div id="Dgenito" class="containerVoz ocultar">
                <small>Genitounitario</small>
                <div class="input-voz">
                    <textarea name="text-genito" id="text-genito"></textarea>
                    <div class="microfono">
                        <img src="../../recursos/microfono/off.png" id="start-genito" alt="microfono-Off" >
                    </div>
                </div>
            </div>
            <div id="Dmamarias" class="containerVoz ocultar">
                <small>Glandulas Mamarias</small>
                <div class="input-voz">
                    <textarea name="text-mamarias" id="text-mamarias"></textarea>
                    <div class="microfono">
                        <img src="../../recursos/microfono/off.png" id="start-mamarias" alt="microfono-Off" >
                    </div>
                </div>
            </div>
            <div id="Dorganos" class="containerVoz ocultar">
                <small>Órganos de los sentidos</small>
                <div class="input-voz">
                    <textarea name="text-organos" id="text-organos"></textarea>
                    <div class="microfono">
                        <img src="../../recursos/microfono/off.png" id="start-organos" alt="microfono-Off" >
                    </div>
                </div>
            </div>
            <div id="Dganglios" class="containerVoz ocultar">
                <small>Ganglios linfáticos</small>
                <div class="input-voz">
                    <textarea name="text-ganglios" id="text-ganglios"></textarea>
                    <div class="microfono">
                        <img src="../../recursos/microfono/off.png" id="start-ganglios" alt="microfono-Off" >
                    </div>
                </div>
            </div>
            <!--Fin sección anormalidades en los sistemas-->

            <!--Inicio sección Lista de problemas-->
            <div class="wrapper-problemas">
                <h2>Lista de problemas</h2>
                <ul id="lista-problemas">
                    <li>
                        <div class="wrapper-card-problema">
                            <div class="card-problem">
                                <h3>Problema</h3>
                                <input type="text" name="problema[]" id="">
                            </div>
                            <div class="card-problem">
                                <h3>Diagnóstico</h3>
                                <input type="text" name="diagProblema[]" id="">
                            </div>
                            <div class="card-problem">
                                <h3>Exam Praclínicos</h3>
                                <div id="btn-modal0" class="button-examen">
                                    <p id="parrafo0">Asignar exámenes</p>
                                </div>
                                <div class="capa-modal0 hide-modal">
                                    <div class="bg-modal-examenes">
                                        <div class="pop-examenes">
                                            <div class="header-pop">
                                                <h3>Asignación de exámenes</h3>
                                                <p id="close0">_</p>
                                            </div>    
                                            <div class="mid-pop">
                                                <p>Marque los exámenes que desea formular</p>
                                                <ul>
                                                    <li>
                                                        <input type="checkbox" name="examen0[]" value="Biometría hemática" id="">
                                                        <span>Biometría hemática</span>
                                                    </li>
                                                    <li>
                                                        <input type="checkbox" name="examen0[]" value="BUN" id="">
                                                        <span>BUN</span>
                                                    </li>
                                                    <li>
                                                        <input type="checkbox" name="examen0[]" value="PCR virales" id="">
                                                        <span>PCR virales</span>
                                                    </li>
                                                    <li>
                                                        <input type="checkbox" name="examen0[]" value="Recuento de reticulocitos" id="">
                                                        <span>Recuento de reticulocitos</span>
                                                    </li>
                                                    <li>
                                                        <input type="checkbox" name="examen0[]" value="UREA" id="">
                                                        <span>UREA</span>
                                                    </li>
                                                    <li>
                                                        <input type="checkbox" name="examen0[]" value="L-MAT" id="">
                                                        <span>L-MAT</span>
                                                    </li>
                                                    <li>
                                                        <input type="checkbox" name="examen0[]" value="Frotis sanguineo" id="">
                                                        <span>Frotis sanguineo</span>
                                                    </li>
                                                    <li>
                                                        <input type="checkbox" name="examen0[]" value="Creatinina" id="">
                                                        <span>Creatinina</span>
                                                    </li>
                                                    <li>
                                                        <input type="checkbox" name="examen0[]" value="Biopsia" id="">
                                                        <span>Biopsia</span>
                                                    </li>
                                                    <li>
                                                        <input type="checkbox" name="examen0[]" value="ALT" id="">
                                                        <span>ALT</span>
                                                    </li>
                                                    <li>
                                                        <input type="checkbox" name="examen0[]" value="Excreción fraccional de sodio" id="">
                                                        <span>Excreción fraccional de sodio</span>
                                                    </li>
                                                    <li>
                                                        <input type="checkbox" name="examen0[]" value="AFF" id="">
                                                        <span>AFF</span>
                                                    </li>
                                                    <li>
                                                        <input type="checkbox" name="examen0[]" value="ASP" id="">
                                                        <span>ASP</span>
                                                    </li>
                                                    <li>
                                                        <input type="checkbox" name="examen0[]" value="DSMA" id="">
                                                        <span>DSMA</span>
                                                    </li>
                                                    <li>
                                                        <input type="checkbox" name="examen0[]" value="RX" id="">
                                                        <span>RX</span>
                                                    </li>
                                                    <li>
                                                        <input type="checkbox" name="examen0[]" value="PA" id="">
                                                        <span>PA</span>
                                                    </li>
                                                    <li>
                                                        <input type="checkbox" name="examen0[]" value="Electrolitos" id="">
                                                        <span>Electrolitos</span>
                                                    </li>
                                                    <li>
                                                        <input type="checkbox" name="examen0[]" value="RX contratado" id="">
                                                        <span>RX contratado</span>
                                                    </li>
                                                    <li>
                                                        <input type="checkbox" name="examen0[]" value="GGT" id="">
                                                        <span>GGT</span>
                                                    </li>
                                                    <li>
                                                        <input type="checkbox" name="examen0[]" value="UO/C" id="">
                                                        <span>UO/C</span>
                                                    </li>
                                                    <li>
                                                        <input type="checkbox" name="examen0[]" value="Ecografía" id="">
                                                        <span>Ecografía</span>
                                                    </li>
                                                    <li>
                                                        <input type="checkbox" name="examen0[]" value="PPT" id="">
                                                        <span>PPT</span>
                                                    </li>
                                                    <li>
                                                        <input type="checkbox" name="examen0[]" value="PO" id="">
                                                        <span>PO</span>
                                                    </li>
                                                    <li>
                                                        <input type="checkbox" name="examen0[]" value="Ecocardiograma" id="">
                                                        <span>Ecocardiograma</span>
                                                    </li>
                                                    <li>
                                                        <input type="checkbox" name="examen0[]" value="Albumina" id="">
                                                        <span>Albumina</span>
                                                    </li>
                                                    <li>
                                                        <input type="checkbox" name="examen0[]" value="Serología hemoparasitos" id="">
                                                        <span>Serología hemoparasitos</span>
                                                    </li>
                                                    <li>
                                                        <input type="checkbox" name="examen0[]" value="RM" id="">
                                                        <span>RM</span>
                                                    </li>
                                                    <li>
                                                        <input type="checkbox" name="examen0[]" value="Ácidos biliares" id="">
                                                        <span>Ácidos biliares</span>
                                                    </li>
                                                    <li>
                                                        <input type="checkbox" name="examen0[]" value="Serología virales" id="">
                                                        <span>Serología virales</span>
                                                    </li>
                                                    <li>
                                                        <input type="checkbox" name="examen0[]" value="TAC" id="">
                                                        <span>TAC</span>
                                                    </li>
                                                    <li>
                                                        <input type="checkbox" name="examen0[]" value="Bilirrubina" id="">
                                                        <span>Bilirrubina</span>
                                                    </li>
                                                    <li>
                                                        <input type="checkbox" name="examen0[]" value="PCR hemoparasitos" id="">
                                                        <span>PCR hemoparasitos</span>
                                                    </li>
                                                    <li>
                                                        <input type="checkbox" name="examen0[]" value="Presión arterial" id="">
                                                        <span>Presión arterial</span>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="end-pop">
                                                <div class="button-end" id="closeModal0">Guardar</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card-autorizar">
                            <h3>Autorizados</h3>
                            <div class="radio">
                                <div class="card-radio">
                                    <input type="radio" name="auth0" value="Sí" id="valor-S0">
                                    <label for="valor-S0">Si</label>
                                </div>
                                <div class="card-radio space-card">
                                    <input type="radio" name="auth0" value="No" id="valor-N0">
                                    <label for="valor-N0">No</label>
                                </div>
                            </div>
                        </div>
                        </div>     
                    </li>
                    <li>
                        <div class="wrapper-card-problema">
                            <div class="card-problem">
                                <h3>Problema</h3>
                                <input type="text" name="problema[]" id="">
                            </div>
                            <div class="card-problem">
                                <h3>Diagnóstico</h3>
                                <input type="text" name="diagProblema[]" id="">
                            </div>
                            <div class="card-problem">
                                <h3>Exam Praclínicos</h3>
                                <div id="btn-modal1" class="button-examen">
                                    <p id="parrafo1">Asignar exámenes</p>
                                </div>
                                <div class="capa-modal1 hide-modal">
                                    <div class="bg-modal-examenes">
                                        <div class="pop-examenes">
                                            <div class="header-pop">
                                                <h3>Asignación de exámenes</h3>
                                                <p id="close1">_</p>
                                            </div>    
                                            <div class="mid-pop">
                                                <p>Marque los exámenes que desea formular</p>
                                                <ul>
                                                    <li>
                                                        <input type="checkbox" name="examen1[]" value="Biometría hemática" id="">
                                                        <span>Biometría hemática</span>
                                                    </li>
                                                    <li>
                                                        <input type="checkbox" name="examen1[]" value="BUN" id="">
                                                        <span>BUN</span>
                                                    </li>
                                                    <li>
                                                        <input type="checkbox" name="examen1[]" value="PCR virales" id="">
                                                        <span>PCR virales</span>
                                                    </li>
                                                    <li>
                                                        <input type="checkbox" name="examen1[]" value="Recuento de reticulocitos" id="">
                                                        <span>Recuento de reticulocitos</span>
                                                    </li>
                                                    <li>
                                                        <input type="checkbox" name="examen1[]" value="UREA" id="">
                                                        <span>UREA</span>
                                                    </li>
                                                    <li>
                                                        <input type="checkbox" name="examen1[]" value="L-MAT" id="">
                                                        <span>L-MAT</span>
                                                    </li>
                                                    <li>
                                                        <input type="checkbox" name="examen1[]" value="Frotis sanguineo" id="">
                                                        <span>Frotis sanguineo</span>
                                                    </li>
                                                    <li>
                                                        <input type="checkbox" name="examen1[]" value="Creatinina" id="">
                                                        <span>Creatinina</span>
                                                    </li>
                                                    <li>
                                                        <input type="checkbox" name="examen1[]" value="Biopsia" id="">
                                                        <span>Biopsia</span>
                                                    </li>
                                                    <li>
                                                        <input type="checkbox" name="examen1[]" value="ALT" id="">
                                                        <span>ALT</span>
                                                    </li>
                                                    <li>
                                                        <input type="checkbox" name="examen1[]" value="Excreción fraccional de sodio" id="">
                                                        <span>Excreción fraccional de sodio</span>
                                                    </li>
                                                    <li>
                                                        <input type="checkbox" name="examen1[]" value="AFF" id="">
                                                        <span>AFF</span>
                                                    </li>
                                                    <li>
                                                        <input type="checkbox" name="examen1[]" value="ASP" id="">
                                                        <span>ASP</span>
                                                    </li>
                                                    <li>
                                                        <input type="checkbox" name="examen1[]" value="DSMA" id="">
                                                        <span>DSMA</span>
                                                    </li>
                                                    <li>
                                                        <input type="checkbox" name="examen1[]" value="RX" id="">
                                                        <span>RX</span>
                                                    </li>
                                                    <li>
                                                        <input type="checkbox" name="examen1[]" value="PA" id="">
                                                        <span>PA</span>
                                                    </li>
                                                    <li>
                                                        <input type="checkbox" name="examen1[]" value="Electrolitos" id="">
                                                        <span>Electrolitos</span>
                                                    </li>
                                                    <li>
                                                        <input type="checkbox" name="examen1[]" value="RX contratado" id="">
                                                        <span>RX contratado</span>
                                                    </li>
                                                    <li>
                                                        <input type="checkbox" name="examen1[]" value="GGT" id="">
                                                        <span>GGT</span>
                                                    </li>
                                                    <li>
                                                        <input type="checkbox" name="examen1[]" value="UO/C" id="">
                                                        <span>UO/C</span>
                                                    </li>
                                                    <li>
                                                        <input type="checkbox" name="examen1[]" value="Ecografía" id="">
                                                        <span>Ecografía</span>
                                                    </li>
                                                    <li>
                                                        <input type="checkbox" name="examen1[]" value="PPT" id="">
                                                        <span>PPT</span>
                                                    </li>
                                                    <li>
                                                        <input type="checkbox" name="examen1[]" value="PO" id="">
                                                        <span>PO</span>
                                                    </li>
                                                    <li>
                                                        <input type="checkbox" name="examen1[]" value="Ecocardiograma" id="">
                                                        <span>Ecocardiograma</span>
                                                    </li>
                                                    <li>
                                                        <input type="checkbox" name="examen1[]" value="Albumina" id="">
                                                        <span>Albumina</span>
                                                    </li>
                                                    <li>
                                                        <input type="checkbox" name="examen1[]" value="Serología hemoparasitos" id="">
                                                        <span>Serología hemoparasitos</span>
                                                    </li>
                                                    <li>
                                                        <input type="checkbox" name="examen1[]" value="RM" id="">
                                                        <span>RM</span>
                                                    </li>
                                                    <li>
                                                        <input type="checkbox" name="examen1[]" value="Ácidos biliares" id="">
                                                        <span>Ácidos biliares</span>
                                                    </li>
                                                    <li>
                                                        <input type="checkbox" name="examen1[]" value="Serología virales" id="">
                                                        <span>Serología virales</span>
                                                    </li>
                                                    <li>
                                                        <input type="checkbox" name="examen1[]" value="TAC" id="">
                                                        <span>TAC</span>
                                                    </li>
                                                    <li>
                                                        <input type="checkbox" name="examen1[]" value="Bilirrubina" id="">
                                                        <span>Bilirrubina</span>
                                                    </li>
                                                    <li>
                                                        <input type="checkbox" name="examen1[]" value="PCR hemoparasitos" id="">
                                                        <span>PCR hemoparasitos</span>
                                                    </li>
                                                    <li>
                                                        <input type="checkbox" name="examen1[]" value="Presión arterial" id="">
                                                        <span>Presión arterial</span>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="end-pop">
                                                <div class="button-end" id="closeModal1">Guardar</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card-autorizar">
                            <h3>Autorizados</h3>
                            <div class="radio">
                                <div class="card-radio">
                                    <input type="radio" name="auth1" value="Sí" id="valor-S1">
                                    <label for="valor-S1">Si</label>
                                </div>
                                <div class="card-radio space-card">
                                    <input type="radio" name="auth1" value="No" id="valor-N1">
                                    <label for="valor-N1">No</label>
                                </div>
                            </div>
                        </div>
                        </div>     
                    </li>
                </ul>
                <div class="add-problema">
                    <button id="new-problema">Agregar un nuevo problema</button>
                </div>
            </div>
            <!--Fin seccioón lista de problemas-->
            <div class="containerVoz">
                <small>Observaciones de autorización de exámenes</small>
                <div class="input-voz">
                    <textarea name="observacionesExamen" id="observacionesExamen"></textarea>
                    <div class="microfono">
                        <img src="../../recursos/microfono/off.png" id="start-observacionesExamen" alt="microfono-Off" >
                    </div>
                </div>
            </div>

            <!--Inicio sección Plan terapéutico, Diagnóstico y Tratamiento-->
            <div class="containerVoz">
                <small>Plan terapéutico</small>
                <div class="input-voz">
                    <textarea name="plan" id="plan"></textarea>
                    <div class="microfono">
                        <img src="../../recursos/microfono/off.png" id="start-plan" alt="microfono-Off" >
                    </div>
                </div>
            </div>
            <div class="containerVoz">
                <small>Diagnóstico</small>
                <div class="input-voz">
                    <textarea name="diagnostico" id="diagnostico"></textarea>
                    <div class="microfono">
                        <img src="../../recursos/microfono/off.png" id="start-diagnostico" alt="microfono-Off" >
                    </div>
                </div>
            </div>
            <div class="containerVoz">
                <small>Tratamiento</small>
                <div class="input-voz">
                    <textarea name="trata" id="trata"></textarea>
                    <div class="microfono">
                        <img src="../../recursos/microfono/off.png" id="start-trata" alt="microfono-Off" >
                    </div>
                </div>
            </div>
            <!--Fin sección Plan terapéutico, Diagnóstico y Tratamiento-->

            <!--Inicio pronóstico, proximo control y guardar-->
            <div class="wrapper-pronostico">
                <div class="card-select">
                    <small>Pronóstico</small>
                    <div class="select">
                        <select id="" name="pronosticoSelecc">
                            <option value="">Seleccione el pronóstico</option>
                            <option value="Bueno">Bueno</option>
                            <option value="Reservado">Reservado</option>
                            <option value="Malo">Malo</option>
                        </select>
                    </div>
                </div>
                <div class="containerVoz">
                    <div class="input-voz">
                        <textarea name="pronostico" id="pronostico"></textarea>
                        <div class="microfono">
                            <img src="../../recursos/microfono/off.png" id="start-pronostico" alt="microfono-Off" >
                        </div>
                    </div>
                </div>
            </div>
            <div class="wrapper-save">
                <div class="nombre">
                    <small>Próximo control</small>
                    <input type="date" name="proximoControl" id="" >
                </div>
                <div class="info-veterinario">
                    <p>Médico Veterinario Zootecnista: <span id="nombreMedico"></span></p>
                    <p class="separador-parrafos">Registro Medico: <span id="registroMedico"></span></p>
                </div>
            </div>
            <div class="save-historia">
                <button>Guardar</button>
            </div>
            <!--Fin pronóstico, proximo control y guardar-->
        </form>
    </div>
</div>
<script defer src="../../js/historia.js"></script>
<script defer src="../../js/nuevaHistoria.js"></script>
<?php include "../footerLoging.php" ?>