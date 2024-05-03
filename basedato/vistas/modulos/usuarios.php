<?php

$usuarios = UsuariosControlador::ctrMostrarUsuarios(null, null);

$roles = RolesControlador::ctrMostrarRoles(null, null);

?>



<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Lista de usuarios</h1>

                    <button type="button" class="btn btn-success" data-toggle="modal" data-target="#agregar-usuario">
                        <i class="fas fa-plus"></i> Agregar usuario
                    </button>

                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="<?php echo $url; ?>">Home</a></li>
                        <li class="breadcrumb-item active">Productos</li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <div class="nk-content ">
                    <div class="container-fluid">
                        <div class="nk-content-inner">
                            <div class="nk-content-body">
                                <div class="components-preview wide-md mx-auto">
                                    
                                    <div class="nk-block nk-block-lg">
                                        
                                        <div class="card card-bordered card-preview">
                                            <div class="card-inner">
                                                <table class="datatable-init nowrap table">
                                                    <thead>
                                                        <tr>
                                                            <th>Nombre</th>
                                                            <th>Email</th>
                                                            <th>Estado</th>
                                                            <th>Acciones</th>
                                                           
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <?php

                                                        foreach ($usuarios as $key => $value) {

                                                            //$rol = Funciones::mostrarRol($value["idRolUsuario"]);

                                                        ?>

                                                            <tr>
                                                                <td>
                                                                    <?php echo $value["nombre_usuario"]; ?>
                                                                </td>
                                                                <td>
                                                                    <?php echo $value["email_usuario"]; ?>
                                                                </td>
                                                                <td>
                                                                    <?php

                                                                    if ($value["estado_usuario"] == 1) {
                                                                        echo "Activo";
                                                                    } else {
                                                                        echo "Inactivo";
                                                                    }
                                                                    ?>
                                                                </td>
                                                                <td>Editar - Eliminar</td>

                                                            </tr>

                                                        <?php } ?>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div><!-- .card-preview -->
                                    </div> <!-- nk-block -->

                                   
                                </div><!-- .components-preview -->
                            </div>
                        </div>
                    </div>
                </div>
    <!-- /.content -->
</div>

<div class="modal fade" id="agregar-usuario">

    <form id="agregarUsuario" method="post">

        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Agregar usuario</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">

                    <div class="form-group">
                        <label>Nombre</label>
                        <input type="text" name="nombre_usuario" class="form-control" placeholder="Ingrese el nombre del usuario">
                    </div>
                    <div class="form-group">
                        <label>Email</label>
                        <input type="email" name="email_usuario" class="form-control" placeholder="Ingrese el email del usuario">
                    </div>
                    <div class="form-group">
                        <label>Password</label>
                        <input type="password" name="password_usuario" class="form-control" placeholder="Ingrese la contraseña">
                    </div>

                    <div class="form-group">
                        <label>Roles</label>
                        <select class="form-control" name="id_rol_usuario">

                            <option value="">Seleccione un rol</option>
                            <?php foreach ($roles as $key => $value) { ?>

                                <option value="<?php echo $value["id_rol"]; ?>"><?php echo $value["nombre_rol"]; ?></option>

                            <?php } ?>
                        </select>
                    </div>

                </div>

                <?php
                $agregarUsuario = new UsuariosControlador();
                $agregarUsuario->ctrAgregarUsuario();
                ?>

                <div class="modal-footer justify-content-between">
                    <button type="button" class="btn btn-default" data-dismiss="modal"><i class="fas fa-times"></i> Cerrar</button>
                    <button type="sumbit" class="btn btn-primary"><i class="fas fa-save"></i> Guardar</button>
                </div>
            </div>

        </div>

    </form>
</div>