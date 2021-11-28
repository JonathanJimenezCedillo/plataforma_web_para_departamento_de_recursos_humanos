

    <h1 class="text-center">ARCHIVOS A MODIFICAR</h1>
    <h3> NUMERO DE EMPLEADO <?php echo $dato ?></h3>

    <div class="container">
        <div class="row">
            <div class="col-12 col-md-6">
                    <form id="form-foto" method="post" enctype="multipart/form-data">
                    <h2>FOTO</h2>
                    <?php foreach ($documento as $fila): ?>
                        <img src="../../<?php echo $fila['foto']?>"class="img-fluid" style="height:250px; width: 450px;">
                    <?php endforeach ?>
                    <input type="hidden" name="numeroEmpleado" value="<?php echo $dato ?>">
                    <input type="file" name="fotoEmpleado">
                    <button type="button" id="btnFotoEmpleado" class="btn btn-lg btn-primary" onclick="modificarFoto()">Modificar</button>
                 </form>
            </div>

            <div class="col-12 col-md-6">
                <form id="form-actaNacimiento" method="post" enctype="multipart/form-data">
                    <h2>ACTA DE NACIMIENTO</h2>
                    <?php foreach ($documento as $fila): ?>
                        <iframe src="../../<?php echo $fila['acta']?>"  class="img-fluid" style=" height:250px; width: 450px;"></iframe>
                    <?php endforeach ?>
                    <input type="hidden" name="numeroEmpleado" value="<?php echo $dato ?>">
                    <input type="file" name="actaEmpleado">
                    <button type="button" id="btnActaEmpleado" class="btn btn-lg btn-primary"  onclick="modificarActaNacimiento()">Modificar</button>
                </form>

             </div>
         </div>

         <div class="row">
            <div class="col-12 col-md-6">
                <form id="form-curp" method="post" enctype="multipart/form-data">
                    <h2>CURP</h2>
                    <?php foreach ($documento as $fila): ?>
                        <iframe src="../../<?php echo $fila['curp']?>" class="img-fluid" style=" height:250px; width: 450px;"></iframe>
                    <?php endforeach ?>
                    <input type="hidden" name="numeroEmpleado" value="<?php echo $dato ?>">
                    <input type="file" name="curpEmpleado">
                    <button type="button" id="btnCurp" class="btn btn-lg btn-primary" onclick="modificarCurp()">Modificar</button>
                </form>
            </div>

            <div class="col-12 col-md-6">
                <form id="form-cv" method="post" enctype="multipart/form-data">
                    <h2>CURRICULIM VITAE</h2>
                    <?php foreach ($documento as $fila): ?>
                        <iframe src="../../<?php echo $fila['cv']?>" class="img-fluid" style=" height:250px; width: 450px;"></iframe>
                    <?php endforeach ?>
                    <input type="hidden" name="numeroEmpleado" value="<?php echo $dato ?>">
                    <input type="file" name="cvEmpleado">
                    <button id="btnCv" type="button" class="btn btn-lg btn-primary" onclick="modificarCv()">Modificar</button>
                </form>

            </div>
         </div>

         <div class="row">
             <div class="col-12 col-md-6">
                <form id="form-ine" method="post" enctype="multipart/form-data">
                    <h2>INE</h2>
                    <?php foreach ($documento as $fila): ?>
                        <iframe src="../../<?php echo $fila['ine']?>" class="img-fluid" style=" height:250px; width: 450px;"></iframe>
                    <?php endforeach ?>
                    <input type="hidden" name="numeroEmpleado" value="<?php echo $dato ?>">
                    <input type="file" name="ineEmpleado">
                    <button id="btnIne" type="button" class="btn btn-lg btn-primary" onclick="modificarIne()">Modificar</button>
                </form>

            </div>
            <div class="col-12 col-md-6">
                <form id="form-cbtd" method="post" enctype="multipart/form-data">
                    <h2>COMPROBANTE DE DOMICILIO</h2>
                    <?php foreach ($documento as $fila): ?>
                        <iframe src="../../<?php echo $fila['comprobante']?>" class="img-fluid" style=" height:250px; width: 450px;"></iframe>
                    <?php endforeach ?>
                    <input type="hidden" name="numeroEmpleado" value="<?php echo $dato ?>">
                    <input type="file" name="comprobanteD">
                    <button id="btncomprobanteD" type="button" class="btn btn-lg btn-primary" onclick="modificarComprobanteD()">Modificar</button>
                </form>

            </div>
         </div>

         <div class="row">
            <div class="col-12 col-md-6">
                <form id="form-croquis" method="post" enctype="multipart/form-data">
                    <h2>CROQUIS</h2>
                    <?php foreach ($documento as $fila): ?>
                        <iframe src="../../<?php echo $fila['croquis']?>" class="img-fluid" style=" height:250px; width: 450px;"></iframe>
                    <?php endforeach ?>
                     <input type="hidden" name="numeroEmpleado" value="<?php echo $dato ?>">
                    <input type="file" name="croquisEmpleado">
                    <button id="btnCroquis" type="button" class="btn btn-lg btn-primary" onclick="modificarCroquis()">Modificar</button>
                </form>

            </div>

            <div class="col-12 col-md-6">
                <form id="form-referencias" method="post" enctype="multipart/form-data">
                    <h2>REFERENCIAS LABORALES</h2>
                    <?php foreach ($documento as $fila): ?>
                        <iframe src="../../<?php echo $fila['referencias']?>" class="img-fluid" style=" height:250px; width: 450px;"></iframe>
                    <?php endforeach ?>
                     <input type="hidden" name="numeroEmpleado" value="<?php echo $dato ?>">
                    <input type="file" name="referenciaEmpleado">
                    <button id="btnReferencia" type="button" class="btn btn-lg btn-primary" onclick="modificarReferenciaL()">Modificar</button>
                </form>

            </div>
         </div>
    </div>


