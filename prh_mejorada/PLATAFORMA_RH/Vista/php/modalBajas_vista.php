            <div class="container">
                    <div class="modal fade"  tabindex="-1" id="modalEliminar">
                          <div class="modal-dialog" role="document">
                            <div class="modal-content">
                              <div class="modal-header">
                                <h5 class="modal-title">Eliminar Registro</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                  <span aria-hidden="true">&times;</span>
                                </button>
                              </div>
                              <div class="modal-body">
                                <div class="alert alert-danger">
                                    <h4>¿Deseas eliminar registro?</h4>
                                </div>
                              </div>
                              <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>

                                 <button id="eliminar" type="button" data-dismiss="modal" class="btn btn-primary" onclick="eliminarBajas(<?php echo $fila['idempleado']; ?>)">
                                    Eliminar Registo</button>
                              </div>
                            </div>
                          </div>
                    </div>
                </div>
