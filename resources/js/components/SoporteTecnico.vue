<template>
    <div>
        <el-container>
            <el-main>
                <el-row>
                    <el-col :span="3">
                        <div class="grid-content"></div>
                    </el-col>
                    <el-col :span="18">
                        <div class="grid-content ">
                            <img class="img-mostrar" src="/images/soporte-tecnico.png">
                        </div>
                        <div class="grid-content instrucciones" >
                            <h5 class="titulo-soporte">Soporte técnico</h5>
                            <p>Si tiene un problema con la aplicación, por favor no dude en enviar su novedad a nuestro personal de soporte.</p>
                        </div>
                    </el-col>
                    <el-col :span="3">
                        <div class="grid-content"></div>
                    </el-col>
                </el-row>


                <el-col :span="24">
                    <el-button class="boton-usuario" type="primary" round @click="">
                        Enviar correo
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
    .titulo-soporte{
        font-weight: bold;
    }
    .instrucciones{
        text-align: left;
        margin-top: 10px;
        margin-left: 10px;
    }

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

    .el-button >>> span {
        white-space: initial;
    }

    .el-main {

        text-align: center;
    }

    body > .el-container {
        margin-bottom: 40px;
    }


</style>
