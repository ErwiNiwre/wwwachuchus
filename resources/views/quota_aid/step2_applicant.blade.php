<div class="col-lg-12">
    <div class="ibox float-e-margins">
        <div class="ibox-title">
            <h5>Datos del Solicitante <small>something... @{{modality}}</small></h5>
            <div class="ibox-tools">
            </div>
        </div>
        <div class="ibox-content">
            <form method="get" class="form-horizontal">
                <div class="hr-line-dashed"></div>
                <div class="form-group"><label class="col-sm-4 control-label">Tipo de Solicitante</label>
                    <div class="col-sm-4">
                        <select class="form-control m-b" name="accountType" @change="change_applicant()" v-model="applicant_type">
                            <option value="1">Beneficiario</option>                            
                            <option value="2">Tutor</option>
                            <option value="3">Apoderado</option>
                        </select>
                    </div>
                </div>
                <div class="hr-line-dashed"></div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group"><label class="col-sm-4 control-label">Primer Nombre</label>
                            <div class="col-sm-8"><input type="text" name="applicant_first_name" v-model="applicant_first_name" class="form-control"></div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group"><label class="col-sm-4 control-label">Segundo Nombre</label>
                            <div class="col-sm-8"><input type="text" name="applicant_second_name" v-model="applicant_second_name" class="form-control"></div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4">
                        <div class="form-group"><label class="col-sm-6 control-label">Apellido Paterno</label>
                            <div class="col-sm-6"><input type="text" name="applicant_last_name" v-model="applicant_last_name" class="form-control"></div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group"><label class="col-sm-6 control-label">Apellido Materno</label>
                            <div class="col-sm-6"><input type="text" name="applicant_mothers_last_name" v-model="applicant_mothers_last_name" class="form-control"></div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group"><label class="col-sm-6 control-label">Apellido de Casada</label>
                            <div class="col-sm-6"><input type="text" name="applicant_surname_husband" v-model="applicant_surname_husband" class="form-control"></div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4">
                        <div class="form-group"><label class="col-sm-6 control-label">Carnet de Identidad</label>
                            <div class="col-sm-6"><input type="text" name="applicant_identity_card" v-model="applicant_identity_card" class="form-control"></div>
                        </div>
                    </div>
                    <div class="col-md-5">
                        <div class="form-group"><label class="col-sm-4 control-label">Ciudad de Expedición</label>
                            <div class="col-sm-8">
                                <select class="form-control m-b" name="applicant_city_identity_card" v-model="applicant_city_identity_card">
                                    <option :value="null"></option>
                                    <option v-for="city in cities" :value="city.id">@{{ city.name }}</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group"><label class="col-sm-4 control-label">Genero</label>
                            <div class="col-sm-8">
                                <select class="form-control m-b" name="applicant_gender" v-model="applicant_gender">
                                    <option value="M">Masculino</option>
                                    <option value="F">Femenino</option>
                                </select>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4">
                        <div class="form-group"><label class="col-sm-6 control-label">Parentesco</label>
                            <div class="col-sm-6">
                                <select class="form-control m-b" name="applicant_kinship" v-model="applicant_kinship">
                                    <option :value="null"></option>
                                    <option v-for="kinship in kinships" :value="kinship.id">@{{ kinship.name }}</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group"><label class="col-sm-6 control-label">Telefono del Solicitante</label>
                            <div class="col-sm-6"><input type="text" name="applicant_phone_number" v-model="applicant_phone_number" class="form-control"></div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group"><label class="col-sm-6 control-label">Celular del Solicitante</label>
                            <div class="col-sm-6"><input type="text" name="applicant_cell_phone_number" v-model="applicant_cell_phone_number" class="form-control"></div>
                        </div>
                    </div>
                </div>
                <div class="hr-line-dashed"></div>
                <div class="row" v-if=" show_advisor_form ">
                    <h3 class="m-t-none m-b">Datos del Tutor Legal</h3>
                    <div class="row">
                        <div class="col-md-4">
                            <div class="form-group"><label class="col-sm-4 control-label">Nombre de Juzgado</label>
                                <div class="col-sm-8"><input type="text" name="advisor_name_court" v-model="applicant_city_identity_card" class="form-control"></div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group"><label class="col-sm-4 control-label">Nro de Resolucion</label>
                                <div class="col-sm-8"><input type="text" name="advisor_resolution_number" v-model="advisor_resolution_number" class="form-control"></div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group"><label class="col-sm-4 control-label">Fecha de Resolucion</label>
                                <div class="col-sm-8"><input type="text" name="advisor_resolution_date" v-model="advisor_resolution_date" class="form-control"></div>
                            </div>
                        </div>
                    </div>
                    <div class="hr-line-dashed"></div>
                </div>
                <div class="row" v-if=" show_apoderado_form ">
                    <h3 class="m-t-none m-b">Datos del Apoderado</h3>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group"><label class="col-sm-4 control-label">Primer Nombre</label>
                                <div class="col-sm-8"><input type="text" name="legal_guardian_first_name" v-model="legal_guardian_first_name" class="form-control"></div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group"><label class="col-sm-4 control-label">Segundo Nombre</label>
                                <div class="col-sm-8"><input type="text" name="legal_guardian_second_name" v-model="legal_guardian_second_name" class="form-control"></div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4">
                            <div class="form-group"><label class="col-sm-6 control-label">Apellido Paterno</label>
                                <div class="col-sm-6"><input type="text" name="legal_guardian_last_name" v-model="legal_guardian_last_name" class="form-control"></div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group"><label class="col-sm-6 control-label">Apellido Materno</label>
                                <div class="col-sm-6"><input type="text" name="legal_guardian_mothers_last_name" v-model="legal_guardian_mothers_last_name" class="form-control"></div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group"><label class="col-sm-6 control-label">Apellido de Casada</label>
                                <div class="col-sm-6"><input type="text" name="legal_guardian_surname_husband" v-model="legal_guardian_surname_husband" class="form-control"></div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-5">
                            <div class="form-group"><label class="col-sm-6 control-label">Carnet de Identidad</label>
                                <div class="col-sm-6"><input type="text" name="legal_guardian_identity_card" v-model="legal_guardian_identity_card" class="form-control"></div>
                            </div>
                        </div>
                        <div class="col-md-7">
                            <div class="form-group"><label class="col-sm-4 control-label">Ciudad de Expedición</label>
                                <div class="col-sm-8">
                                    <select class="form-control m-b" name="legal_guardian_city_identity_card" v-model="legal_guardian_city_identity_card">
                                        <option :value="null"></option>
                                        <option v-for="city in cities" :value="city.id">@{{ city.name }}</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4">
                            <div class="form-group"><label class="col-sm-6 control-label">Nro de Poder</label>
                                <div class="col-sm-6"><input type="text" name="legal_guardian_number_authority" v-model="legal_guardian_number_authority" class="form-control"></div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group"><label class="col-sm-6 control-label">Notaria de Fe Publica Nro</label>
                                <div class="col-sm-6"><input type="text" name="legal_guardian_notary_of_public_faith" v-model="legal_guardian_notary_of_public_faith" class="form-control"></div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group"><label class="col-sm-6 control-label">Notario</label>
                                <div class="col-sm-6"><input type="text" name="legal_guardian_notary" v-model="legal_guardian_notary" class="form-control"></div>
                            </div>
                        </div>
                    </div>
                    <div class="hr-line-dashed"></div>
                </div>
            </form>
        </div>
    </div>
    <div class="ibox float-e-margins">
        <div class="ibox-title">
            <h5>Direccion del Solicitante (@{{ applicant_type }}) <small class="m-l-sm">something //// </small></h5>
            <div class="ibox-tools">
            </div>
        </div>
        <div class="ibox-content">
            <div class="row">
                <div class="col-md-4">
                    <div class="form-group"><label class="col-sm-4 control-label">Zona</label>
                        <div class="col-sm-8"><input type="text" name="beneficiary_zone" v-model="beneficiary_zone" class="form-control"></div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group"><label class="col-sm-4 control-label">Calle</label>
                        <div class="col-sm-8"><input type="text" name="beneficiary_street" v-model="beneficiary_street" class="form-control"></div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group"><label class="col-sm-4 control-label">Nro</label>
                        <div class="col-sm-8"><input type="text" name="beneficiary_number_address" v-model="beneficiary_number_address" class="form-control"></div>
                    </div>
                </div>
</div>
        </div>
</div>
</div>