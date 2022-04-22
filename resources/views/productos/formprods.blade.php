@csrf
<input type="hidden" name="id" value="{{$producto->_id}}">
                            <div class="container-fluid">
                                <div class="row">
                                    <div class="form-group col">
                                        <label class="col-form-label col-form-label-sm" for="codprod">Código</label>
                                        <input type="text" value="{{$producto->codprod}}" name="codprod" class="form-control form-control-sm col-sm-4" id="codprod" placeholder="Ej: AA-0001">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="form-group col">
                                        <label class="col-form-label col-form-label-sm" for="nombreprod">Nombre del Producto</label>
                                        <input type="text" value="{{$producto->nombreprod}}" name="nombreprod" class="form-control form-control-sm col-sm-10" id="nombreprod" placeholder="Nombre del producto">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="form-group col">
                                        <label class="col-form-label col-form-label-sm" for="descriprod">Descripción</label>
                                        <input type="text" value="{{$producto->descriprod}}" name="descriprod" class="form-control form-control-sm col-sm-10" id="nombreprod" placeholder="Descripción del producto">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="form-group col">
                                        <label class="col-form-label col-form-label-sm" for="typprod">Tipo de Producto</label>
                                        <input type="text"value="{{$producto->typprod}}" name="typprod" class="form-control form-control-sm col-sm-10" id="typprod" placeholder="Tipo de producto">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="form-group col">
                                        <label class="col-form-label col-form-label-sm" for="costunit">Costo Unitario</label>
                                        <input type="number" value="{{$producto->costunit}}" name="costunit" class="form-control form-control-sm col-sm-4" id="costunit" step="0000.0001" placeholder="000.000">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="form-group col">
                                        <label class="col-form-label col-form-label-sm" for="cantprod">Cantidad</label>
                                        <input type="number" value="{{$producto->cantprod}}" name="cantprod" class="form-control form-control-sm col-sm-4" id="cantprod" placeholder="0000">
                                    </div>
                                </div>
                            </div>
                           