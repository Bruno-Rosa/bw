<!DOCTYPE html>
<html lang="en">
    <head>
		<?php
        require_once('header.php');
		require_once('func_main.php');
		title('Bem-vindo');
        ?>
    </head>
    <body>
        <div class="container">
            <table class="table table-bordered" id="ficha">
            	<thead>
                	<tr>
                    	<th></th>
                        <th>EXERCÍCIOS</th>
                        <th>SÉRIE</th>
                        <th>REP</th>
                        <th></th>
                        <th>EXERCÍCIOS</th>
                        <th>SÉRIE</th>
                        <th>REP</th>
                        <th></th>
                        <th>EXERCÍCIOS</th>
                        <th>SÉRIE</th>
                        <th>REP</th>
                    </tr>
                </thead>
                <tbody>
                	<tr>
                    	<td rowspan="12"><div class="rotate">PEITORAIS</div></td>
                        <td>Supino Reto</td>
                        <td><input type="number" class="form-control"></td>
                        <td><input type="number" class="form-control"></td>
                        <td rowspan="12"><div class="rotate">COSTAS</div></td>
                        <td>Puxador Costas</td>
                        <td><input type="number" class="form-control"></td>
                        <td><input type="number" class="form-control"></td>
                        <td rowspan="7"><div class="rotate">Tríceps</div></td>
                        <td>Puxador</td>
                        <td><input type="number" class="form-control"></td>
                        <td><input type="number" class="form-control"></td>
                    </tr>
                    <tr>
                        <td>Supino Inc.</td>
                        <td><input type="number" class="form-control"></td>
                        <td><input type="number" class="form-control"></td>
                        <td>Puxador Frente</td>
                        <td><input type="number" class="form-control"></td>
                        <td><input type="number" class="form-control"></td>
                        <td>Testa</td>
                        <td><input type="number" class="form-control"></td>
                        <td><input type="number" class="form-control"></td>
                    </tr>
                    <tr>
                        <td>Pec. Dec.</td>
                        <td><input type="number" class="form-control"></td>
                        <td><input type="number" class="form-control"></td>
                        <td>Remo Sentado</td>
                        <td><input type="number" class="form-control"></td>
                        <td><input type="number" class="form-control"></td>
                        <td>Francês</td>
                        <td><input type="number" class="form-control"></td>
                        <td><input type="number" class="form-control"></td>
                    </tr>
                    <tr>
                        <td>Crucifixo</td>
                        <td><input type="number" class="form-control"></td>
                        <td><input type="number" class="form-control"></td>
                        <td>Remo Unilateral</td>
                        <td><input type="number" class="form-control"></td>
                        <td><input type="number" class="form-control"></td>
                        <td>Supinado</td>
                        <td><input type="number" class="form-control"></td>
                        <td><input type="number" class="form-control"></td>
                    </tr>
                    <tr>
                        <td>Crucifixo I</td>
                        <td><input type="number" class="form-control"></td>
                        <td><input type="number" class="form-control"></td>
                        <td>Remo Curvado</td>
                        <td><input type="number" class="form-control"></td>
                        <td><input type="number" class="form-control"></td>
                        <td>Coice</td>
                        <td><input type="number" class="form-control"></td>
                        <td><input type="number" class="form-control"></td>
                    </tr>
                    <tr>
                        <td>Pullover Br</td>
                        <td><input type="number" class="form-control"></td>
                        <td><input type="number" class="form-control"></td>
                        <td>Crucifixo</td>
                        <td><input type="number" class="form-control"></td>
                        <td><input type="number" class="form-control"></td>
                        <td>Cordinha</td>
                        <td><input type="number" class="form-control"></td>
                        <td><input type="number" class="form-control"></td>
                    </tr>
                    <tr>
                        <td>Pullober</td>
                        <td><input type="number" class="form-control"></td>
                        <td><input type="number" class="form-control"></td>
                        <td>Invertido</td>
                        <td><input type="number" class="form-control"></td>
                        <td><input type="number" class="form-control"></td>
                        <td>Unilateral Inv.</td>
                        <td><input type="number" class="form-control"></td>
                        <td><input type="number" class="form-control"></td>
                    </tr>
                    <tr>
                        <td>Cross Over</td>
                        <td><input type="number" class="form-control"></td>
                        <td><input type="number" class="form-control"></td>
                        <td>Hiperextensão</td>
                        <td><input type="number" class="form-control"></td>
                        <td><input type="number" class="form-control"></td>
                        <th></th>
                        <th>EXERCÍCIOS</th>
                        <th>SÉRIE</th>
                        <th>REP</th>
                    </tr>
                    <tr>
                        <td>Fly</td>
                        <td><input type="number" class="form-control"></td>
                        <td><input type="number" class="form-control"></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td rowspan="5"><div class="rotate">Bíceps</div></td>
                        <td>Rosca Halt</td>
                        <td><input type="number" class="form-control"></td>
                        <td><input type="number" class="form-control"></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td>Rosca Alt</td>
                        <td><input type="number" class="form-control"></td>
                        <td><input type="number" class="form-control"></td>
                    </tr>
                    <tr>
                    	<td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td>Rosaca Scott</td>
                        <td><input type="number" class="form-control"></td>
                        <td><input type="number" class="form-control"></td>
                    </tr>
                    <tr>
                    	<td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td>Rosaca Cont</td>
                        <td><input type="number" class="form-control"></td>
                        <td><input type="number" class="form-control"></td>
                    </tr>
                    <tr>
                    	<td rowspan="11"><div class="rotate">COXA / PERNA / PANTURILHA</div></td>
                        <td>Agachamento</td>
                        <td><input type="number" class="form-control"></td>
                        <td><input type="number" class="form-control"></td>
                        <td rowspan="11"><div class="rotate">OMBRO / TRAPÉZIO</div></td>
                        <td>DesenvBarra</td>
                        <td><input type="number" class="form-control"></td>
                        <td><input type="number" class="form-control"></td>
                        <td>Rosca 21</td>
                        <td><input type="number" class="form-control"></td>
                        <td><input type="number" class="form-control"></td>
                    </tr>
                    <tr>
                        <td>Leg Press</td>
                        <td><input type="number" class="form-control"></td>
                        <td><input type="number" class="form-control"></td>
                        <td>Elev./ Lateral</td>
                        <td><input type="number" class="form-control"></td>
                        <td><input type="number" class="form-control"></td>
                        <th></th>
                        <th>EXERCÍCIOS</th>
                        <th>SÉRIE</th>
                        <th>REP</th>
                    </tr>
                    <tr>
                        <td>Banco Extensor</td>
                        <td><input type="number" class="form-control"></td>
                        <td><input type="number" class="form-control"></td>
                        <td>Elev. Frontal</td>
                        <td><input type="number" class="form-control"></td>
                        <td><input type="number" class="form-control"></td>
                        <td rowspan="4"><div class="rotate">Aérobico</div></td>
                        <td>Esteira</td>
                        <td><input type="number" class="form-control"></td>
                        <td><input type="number" class="form-control"></td>
                    </tr>
                    <tr>
                        <td>Banco Flexor</td>
                        <td><input type="number" class="form-control"></td>
                        <td><input type="number" class="form-control"></td>
                        <td>Posterior</td>
                        <td><input type="number" class="form-control"></td>
                        <td><input type="number" class="form-control"></td>
                        <td>Eliptico</td>
                        <td><input type="number" class="form-control"></td>
                        <td><input type="number" class="form-control"></td>
                    </tr>
                    <tr>
                        <td>Adução</td>
                        <td><input type="number" class="form-control"></td>
                        <td><input type="number" class="form-control"></td>
                        <td>Remo Alto</td>
                        <td><input type="number" class="form-control"></td>
                        <td><input type="number" class="form-control"></td>
                        <td>Bicicleta</td>
                        <td><input type="number" class="form-control"></td>
                        <td><input type="number" class="form-control"></td>
                    </tr>
                    <tr>
                        <td>Abdução</td>
                        <td><input type="number" class="form-control"></td>
                        <td><input type="number" class="form-control"></td>
                        <td>Encolhimento</td>
                        <td><input type="number" class="form-control"></td>
                        <td><input type="number" class="form-control"></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>A. Fundo</td>
                        <td><input type="number" class="form-control"></td>
                        <td><input type="number" class="form-control"></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <th></th>
                        <th>EXERCÍCIOS</th>
                        <th>SÉRIE</th>
                        <th>REP</th>
                    </tr>
                    <tr>
                        <td>Gluteos</td>
                        <td><input type="number" class="form-control"></td>
                        <td><input type="number" class="form-control"></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td rowspan="4"><div class="rotate">Abs</div></td>
                        <td>Supra</td>
                        <td><input type="number" class="form-control"></td>
                        <td><input type="number" class="form-control"></td>
                    </tr>
                    <tr>
                        <td>Pant. Sentado</td>
                        <td><input type="number" class="form-control"></td>
                        <td><input type="number" class="form-control"></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td>Infra</td>
                        <td><input type="number" class="form-control"></td>
                        <td><input type="number" class="form-control"></td>
                    </tr>
                    <tr>
                        <td>Gemeos Lag</td>
                        <td><input type="number" class="form-control"></td>
                        <td><input type="number" class="form-control"></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td>Obliquio</td>
                        <td><input type="number" class="form-control"></td>
                        <td><input type="number" class="form-control"></td>
                    </tr>
                    <tr>
                        <td>Gemeos em pé</td>
                        <td><input type="number" class="form-control"></td>
                        <td><input type="number" class="form-control"></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td>Remador</td>
                        <td><input type="number" class="form-control"></td>
                        <td><input type="number" class="form-control"></td>
                    </tr>
                </tbody>
            </table>
        </div>
        <?php
        require_once('footer.php');
        ?>
    </body>
</html>