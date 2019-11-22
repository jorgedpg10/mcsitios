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
                        <div class="grid-content">

                            <img :src="ubicacionImagen">
                        </div>
                    </el-col>
                    <el-col :span="3">
                        <div class="grid-content"></div>
                    </el-col>
                </el-row>

                <el-col :span="24">

                    <el-button class="boton-usuario" type="primary" round @click="dialogVisible = true">
                        Decargar términos de servicio y asistencia
                    </el-button>
                    <el-button class="boton-usuario" type="primary" round @click="dialogVis = true">
                        Solicitar factura electrónica
                    </el-button>

                </el-col>

            </el-main>

        </el-container>

        <!-- dialog descargar Términos -->
        <el-dialog
            class="modal-dial"
            title="Más cerca de asistirte"
            :visible.sync="dialogVisible"
            width="30%">

            <span>
            <!--aqui deberia ir el mensaje de error-->
            <div id="group-cedula" class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text"><b class="text-danger">*</b>&nbsp;<font-awesome-icon icon="id-card"/></span>
                </div>
                <input type="text" class="form-control border" v-model="cedula" aria-label="Small"
                       aria-describedby="input-cedula" placeholder="Ingrese su cédula">

            </div>

                <el-checkbox v-model="checked">Acepto descargar los Términos del Servicio de Asistencia que conforman
                    los servicios contenidos en el Producto, a partir de este momento, podrá disfrutar los beneficios
                    que aquí se describen</el-checkbox>

            </span>
            <span slot="footer" class="dialog-footer">
                        <el-button @click="dialogVisible = false">Cancelar</el-button>
                        <el-button type="primary"  @click="comprobarCedula">Descargar</el-button>
            </span>
        </el-dialog>
        <!-- descargar Términos -->

        <!-- dialog Solicitar Factura -->
        <el-dialog
            class="modal-dial"
            title="Tipo de Factura"
            :visible.sync="dialogVis"
            width="30%">

            <el-radio v-model="radio" :label="1">Datos</el-radio>
            <el-radio v-model="radio" :label="2">Consumidor Final</el-radio>
            <span slot="footer" class="dialog-footer">
                        <el-button @click="">Cancelar</el-button>
                        <el-button type="primary" @click="verificar">Siguiente</el-button>
                <!--@click="dialogVis = false"-->
            </span>
        </el-dialog>
        <!-- fin dialog Solicitar Factura -->

        <!-- dialog datos -->
        <el-dialog
            class="modal-dial"
            title="Más cerca de asistirte"
            :visible.sync="dialogDatos"
            width="30%">

            <p class="text-muted texto-modal">Por favor ingrese sus datos fiscales para recibir su factura.</p>

            <!--ingrese cedula-->
            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text"><b class="text-danger">*</b>&nbsp;<font-awesome-icon icon="id-card"/></span>
                </div>
                <input type="text" class="form-control border" v-model="cedula2" aria-label="Small" aria-describedby="input-cedula"
                       placeholder="Ingrese su cédula">

            </div>

            <!--ingrese nombres y apellidos-->
            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text"><b class="text-danger">*</b>&nbsp;<i class="fas fa-user"></i></span>
                </div>
                <input type="text" class="form-control border" v-model="nombres" aria-label="Small" aria-describedby="input-cedula"
                       placeholder="Ingrese su nombre y apellidos">

            </div>
            <!--ingrese su correo electronico-->
            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text"><b class="text-danger">*</b>&nbsp;<font-awesome-icon
                        icon="envelope"/>
                    </span>
                </div>
                <input type="text" class="form-control border" v-model="correo" aria-label="Small" aria-describedby="input-cedula"
                       placeholder="Ingrese su correo electrónico">

            </div>

            <!--ingrese su dirección-->
            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text"><b class="text-danger">*</b>&nbsp;<i
                        class="fas fa-map-marker-alt"></i></span>
                </div>
                <input type="text" class="form-control border" v-model="direccion" aria-label="Small" aria-describedby="input-cedula"
                       placeholder="Ingrese su dirección">

            </div>

            <!--Ingrese su teléfono-->
            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text"><b class="text-danger">*</b>&nbsp;<i
                        class="fas fa-mobile-alt"></i></span>
                </div>
                <input type="text" class="form-control border" v-model="telefono" aria-label="Small" aria-describedby="input-cedula"
                       placeholder="Ingrese su teléfono">

            </div>

            <span slot="footer" class="dialog-footer">
                        <el-button @click="">Cancelar</el-button>
                        <el-button type="primary" @click="envioDatosFactura">Solicitar</el-button>
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
            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text"><b class="text-danger">*</b>&nbsp;<font-awesome-icon icon="id-card"/></span>
                </div>
                <input type="text" class="form-control border" id="" aria-label="Small" aria-describedby="input-cedula"
                       placeholder="Ingrese su cédula">

            </div>


            <!--ingrese su correo electronico-->
            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text"><b class="text-danger">*</b>&nbsp;<font-awesome-icon
                        icon="envelope"/>
                        </i></span>
                </div>
                <input type="text" class="form-control border" id="" aria-label="Small" aria-describedby="input-cedula"
                       placeholder="Ingrese su correo electrónico">

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
                radio: 0,
                ubicacionImagen: '',
                cedula1: '',
                pdfurl:'',
                cedula2:'',
                nombres:'',
                correo:'',
                direccion:'',
                telefono:''
            }
        },
        props: {
            iso_pais: {type: String},
            token: {type: String},
        }

        ,
        mounted() {
            var direccion = 'https://api.geainternacional.com/api/v1/micrositios/' + this.iso_pais + '/informacion/' +
                this.token;

            axios.get(direccion,
                {'headers': {'HTTP-CLIENT-ID': '11', 'HTTP-CLIENT-SECRET': 'pv1LYTKOJdxKLbe93TRiidXyqshFXmzc'}})
                .then(response => {
                    /*var myString = 'data:image/png;base64,' + response.data.imagen_base64; */
                    this.ubicacionImagen = response.data.url;

                });
        },
        methods: {
            verificar() {
                this.modalReset();

                if (this.radio === 1) {
                    this.dialogDatos = true;
                } else if (this.radio === 2) {
                    this.dialogConsumidorFinal = true;
                }
            },
            errorDescargaTerminos() {
                this.$message({
                    message: 'Usted no puede descargar',
                    type: 'warning'
                });
            },
            modalReset() {
                this.dialogVis = false;
                this.dialogDatos = false;
            },
            comprobarCedula(){

                    var token = 'QsEtu'; //ver si este token debería cambiar
                    var direccion2 = 'http://nimp_pruebas.develop.geaecuador.ec/api/v1/termino-de-uso/' + this.cedula +'/'+ token;

                axios.get(direccion2)
                    .then(response => {

                        /* ESTO ABRE EL PDF EN UNA VENTANA NUEVA USANDO LA URL
                        var windowJorge = window.open(response.data.url, "Terminos de uso"); */

                        /* ESTO ABRE EL PDF EN NUEVA VENTANA USANDO BASE64 */
                        this.pdfurl = "data:application/pdf;base64," + response.data.pdf_base64;
                        let pdfWindow = window.open("");

                        pdfWindow.document.write("<iframe width='100%' height='100%' src='" + this.pdfurl + "'></iframe>");

                    });

            },
            envioDatosFactura(){
                axios.post('//cobranza/cash/valida_vigencia_afiliados_micrositio', {
                    firstName: 'Fred',
                    lastName: 'Flintstone'
                })
                    .then(function (response) {
                        console.log(response);
                    })
                    .catch(function (error) {
                        console.log(error);
                    });
            },
        }
    };


</script>


<style scoped>

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

    .el-checkbox {
        display: flex;
        text-align: justify;
        align-items: center;
        white-space: inherit;
        word-break: break-word;

    }

    .modal-dial >>> .el-dialog {
        min-width: 315px;
    }

    .boton-usuario {
        width: 200px;
    }

    .el-button >>> span {
        white-space: initial;
    }

    .texto-modal {
        white-space: initial;
        word-break: break-word;
    }


</style>
