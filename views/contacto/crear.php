<div class="container">
    <div class="row">
        <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
            <form action="<?php echo "index.php?t=". seg::codificar("contacto")."&met=". seg::codificar("mostrar")?>" method="post">
                <div class="mb-3">
                    <label for="exampleInputText1" class="form-label">Nombre</label>
                    <input type="text" class="form-control" id="exampleInputText1" aria-describedby="textHelp" name="txtNombre_contacto" value="<?php echo isset($nombre)?$nombre:""?>">
                    <div id="textHelp" class="form-text"><?php echo isset($error[0])?$error[0]:""?></div>
                </div>

                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Correo</label>
                    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="txtCorreo_contacto" value="<?php echo isset($correo)?$correo:""?>">
                    <div id="emailHelp" class="form-text"><?php echo isset($error[1])?$error[1]:""?></div>
                </div>

                <div class="mb-3">
                    <label for="exampleFormControlTextarea1" class="form-label">Comentario</label>
                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="txtComentario_contacto"><?php echo isset($comentario)?$comentario:""?></textarea>
                    <div id="emailHelp" class="form-text"><?php echo isset($error[2])?$error[2]:""?></div>
                </div>

                <button type="submit" class="btn btn-info">Enviar</button>
                <button type="reset" class="btn btn-secondary">Borrar Datos</button>

            </form>
        </div>
    </div>
</div>
