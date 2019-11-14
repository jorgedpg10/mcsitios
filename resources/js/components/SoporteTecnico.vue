<template>
    <div>
        <el-container>
            <el-main>
                <el-row>
                    <el-col :span="3">
                        <div class="grid-content"></div>
                    </el-col>
                    <el-col :span="18">
                        <div class="grid-content "><img class="img-mostrar" src="/images/soporte-tecnico.png">
                        </div>
                    </el-col>
                    <el-col :span="3">
                        <div class="grid-content"></div>
                    </el-col>
                </el-row>


                <el-col :span="24">
                    <el-button class="boton-usuario" type="primary" round @click="dialogVisible = true">Decargar
                        términos
                        de servicio y asistencia
                    </el-button>
                    <el-button class="boton-usuario" type="primary" round @click="dialogVis = true">
                        Solicitar factura electrónica
                    </el-button>

                </el-col>


            </el-main>
        </el-container>
    </div>
</template>

<script>
    export default {}
</script>

<style scoped>

    .img-mostrar {
        width: 100%;
    }

    .grid-content {
        border-radius: 4px;
        min-height: 36px;
    }

    .boton-usuario {
        width: 200px;
    }

    .el-main {

        text-align: center;
        line-height: 80px;
    }

    body > .el-container {
        margin-bottom: 40px;
    }


</style>
