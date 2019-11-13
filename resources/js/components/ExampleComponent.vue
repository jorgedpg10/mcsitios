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

        <!-- dialog 1 -->
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
                        <el-button @click="dialogVisible = false">Cancel</el-button>
                        <el-button type="primary" @click="dialogVisible = false">Confirm</el-button>
            </span>
        </el-dialog>
        <!-- fin dialog 1 -->

        <!-- dialog 2 -->
        <el-dialog
            class="modal-dial"
            title="Tipo de Factura"
            :visible.sync="dialogVis"
            width="30%">

            <span>





            </span>
            <span slot="footer" class="dialog-footer">
                        <el-button @click="dialogVis = false">Cancel</el-button>
                        <el-button type="primary" @click="dialogVis = false">Confirm</el-button>
            </span>
        </el-dialog>
    </div>
</template>

<script>
    export default {
        data() {
            return {
                value1: true,
                value2: true,
                dialogVisible: false,
                dialogVis: false,
                input: '', //este campo será para ingresar la cèdula
                checked: false
            }
        },
        methods: {

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

    }

    .el-dialog{
        min-width: 300px;
    }

    .boton-usuario{
        width: 200px;
    }

    .el-button >>> span {
        white-space: initial;
    }

</style>
