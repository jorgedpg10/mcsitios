<template>
    <div>

        <!--<font-awesome-icon :icon="['fab', 'whatsapp']" />-->
        <el-container>
            <el-header>
                <div class="float-right">
                <a href="https://api.whatsapp.com/send?phone=593958637937" target="_blank"
                       class="btn btn-success btn-lg rounded-circle border border-white mr-2">
                        <i class="fab fa-whatsapp"></i>
                    </a>
                </div>
            </el-header>

            <el-main>
                <el-row>
                    <el-col :span="3">
                        <div class="grid-content"></div>
                    </el-col>
                    <el-col :span="18">
                        <div class="grid-content"><img src="/images/terminos.png" >
                        </div>
                    </el-col>
                    <el-col :span="3">
                        <div class="grid-content"></div>
                    </el-col>
                </el-row>

         <!--       <el-row>-->
                    <el-col :span="24">

                        <el-button class="boton-usuario" type="primary" round @click="dialogVisible = true">Decargar términos
                            de servicio y asistencia
                        </el-button>
                        <el-button class="boton-usuario" type="primary" round @click="dialogVis = true">
                            Solicitar factura electrónica
                        </el-button>

                    </el-col>

               <!-- </el-row>-->

            </el-main>

        </el-container>

        <!-- dialog descargar Términos -->
        <el-dialog
            class="modal-dial"
            title="Más cerca de asistirte"
            :visible.sync="dialogVisible"
            width="30%">

            <span>

            <div id="group-cedula" class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text"><b class="text-danger">*</b>&nbsp;<font-awesome-icon icon="id-card" /></span>
                </div>
                <input type="text" class="form-control border" id="input-cedula" aria-label="Small" aria-describedby="input-cedula" placeholder="Ingrese su cédula">

            </div>

                <el-checkbox v-model="checked">Acepto descargar los Términos del Servicio de Asistencia que conforman los servicios contenidos en el Producto, a partir de este momento, podrá disfrutar los beneficios que aquí se describen</el-checkbox>

            </span>
            <span slot="footer" class="dialog-footer">
                        <el-button @click="dialogVisible = false">Cancelar</el-button>
                        <el-button type="primary" @click="dialogVisible = false">Descargar</el-button>
            </span>
        </el-dialog>
        <!-- fin dialog 1 -->

        <!-- dialog 2 -->
        <el-dialog
            class="modal-dial"
            title="Tipo de Factura"
            :visible.sync="dialogVis"
            width="30%">

            <el-radio v-model="radio" :label="1">Datos </el-radio>
            <el-radio v-model="radio" :label="2">Consumidor Final</el-radio>
            <span slot="footer" class="dialog-footer">
                        <el-button @click="">Cancelar</el-button>
                        <el-button type="primary" @click="verificar">Siguiente</el-button> <!--@click="dialogVis = false"-->
            </span>
        </el-dialog>
        <!-- fin dialog 2 -->

        <!-- dialog datos -->
        <el-dialog
            class="modal-dial"
            title="Más cerca de asistirte"
            :visible.sync="dialogDatos"
            width="30%">

            <p class="text-muted texto-modal">Por favor ingrese sus datos fiscales para recibir su factura.</p>

            <!--ingrese cedula-->
            <div  class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text"><b class="text-danger">*</b>&nbsp;<font-awesome-icon icon="id-card" /></span>
                </div>
                <input type="text" class="form-control border" id="" aria-label="Small" aria-describedby="input-cedula" placeholder="Ingrese su cédula">

            </div>

            <!--ingrese nombres y apellidos-->
            <div  class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text"><b class="text-danger">*</b>&nbsp;<i class="fas fa-user"></i></span>
                </div>
                <input type="text" class="form-control border" id="" aria-label="Small" aria-describedby="input-cedula" placeholder="Ingrese su nombre y apellidos">

            </div>
            <!--ingrese su correo electronico-->
            <div  class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text"><b class="text-danger">*</b>&nbsp;<font-awesome-icon icon="envelope" /></i></span>
                </div>
                <input type="text" class="form-control border" id="" aria-label="Small" aria-describedby="input-cedula" placeholder="Ingrese su correo electrónico">

            </div>

            <!--ingrese su dirección-->
            <div  class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text"><b class="text-danger">*</b>&nbsp;<i class="fas fa-map-marker-alt"></i></span>
                </div>
                <input type="text" class="form-control border" id="" aria-label="Small" aria-describedby="input-cedula" placeholder="Ingrese su dirección">

            </div>

            <!--Ingrese su teléfono-->
            <div  class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text"><b class="text-danger">*</b>&nbsp;<i class="fas fa-mobile-alt"></i></span>
                </div>
                <input type="text" class="form-control border" id="" aria-label="Small" aria-describedby="input-cedula" placeholder="Ingrese su teléfono">

            </div>

            <span slot="footer" class="dialog-footer">
                        <el-button @click="">Cancelar</el-button>
                        <el-button type="primary" @click="">Solicitar</el-button>
            </span>
        </el-dialog>
        <!-- fin dialogDatos -->

        <!--Inicio dialogConsumidorFinal-->
        <el-dialog
            class="modal-dial"
            title="Más cerca de asistirte"
            :visible.sync="dialogConsumidorFinal"
            width="30%">

            <p class="text-muted texto-modal">Por favor ingrese sus datos para recibir su factura.</p>

            <!--ingrese cedula-->
            <div  class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text"><b class="text-danger">*</b>&nbsp;<font-awesome-icon icon="id-card" /></span>
                </div>
                <input type="text" class="form-control border" id="" aria-label="Small" aria-describedby="input-cedula" placeholder="Ingrese su cédula">

            </div>


            <!--ingrese su correo electronico-->
            <div  class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text"><b class="text-danger">*</b>&nbsp;<font-awesome-icon icon="envelope" /></i></span>
                </div>
                <input type="text" class="form-control border" id="" aria-label="Small" aria-describedby="input-cedula" placeholder="Ingrese su correo electrónico">

            </div>



            <span slot="footer" class="dialog-footer">
                        <el-button @click="">Cancelar</el-button>
                        <el-button type="primary" @click="">Solicitar</el-button>
            </span>
        </el-dialog>
        <!--Fin dialogConsumidorFinal-->

    </div>
</template>

<script>
    export default {
        data() {
            return {
                dialogVisible: false,
                dialogVis: false,
                dialogDatos: false,
                dialogConsumidorFinal: false,
                input: '', //este campo será para ingresar la cédula
                checked: false,
                radio: 0
            }
        },
        methods: {
            verificar(){
                this.modalReset();

                if (this.radio === 1){
                    this.dialogDatos = true;
                }else if(this.radio === 2){
                    this.dialogConsumidorFinal = true;
                }
            },
            modalReset(){
                this.dialogVis = false;
                this.dialogDatos = false;
            }
        }
    };


</script>


<style scoped>
    /*.el-row {
        margin-bottom: 20px;
    &:last-child {
         margin-bottom: 0;
     }
    }
    .el-col {
        border-radius: 4px;
    }
    .bg-purple-dark {
        background: #99a9bf;
    }*/
    .bg-purple {
        background: #d3dce6;
    }
    .bg-purple-light {
        background: #e5e9f2;
    }
    .grid-content {
        border-radius: 4px;
        min-height: 36px;
    }
    /*.row-bg {
        padding: 10px 0;
        background-color: #f9fafc;
    }

    .el-header, .el-footer {
        background-color: #B3C0D1;
        color: #333;
        text-align: center;
        line-height: 60px;
    }

    .el-aside {
        background-color: #D3DCE6;
        color: #333;
        text-align: center;
        line-height: 200px;
    }

    .el-main {
        background-color: #E9EEF3;
        color: #333;
        text-align: center;
        line-height: 80px;
    }*/

    .el-main {

        text-align: center;
        line-height: 80px;
    }

    body > .el-container {
        margin-bottom: 40px;
    }

    .el-container:nth-child(5) .el-aside,
    .el-container:nth-child(6) .el-aside {
        line-height: 260px;
    }

    .el-container:nth-child(7) .el-aside {
        line-height: 320px;
    }

    .el-checkbox__label {
        word-break: break-word;
    }

    .el-checkbox{
        display: flex;
        text-align: justify;
        align-items: center;
        white-space: inherit;
        word-break: break-word;

    }

    .modal-dial >>> .el-dialog{
        min-width: 315px;
    }

    .boton-usuario{
        width: 200px;
    }

    .el-button >>> span {
        white-space: initial;
    }

    .texto-modal{
        white-space: initial;
        word-break: break-word;
    }



</style>
