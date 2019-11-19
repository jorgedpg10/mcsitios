<template>
    <div>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-24 contenedor" >

                        <iframe :src="pdfurl" v-if="pdfurl" class="pdf" />

                </div>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        name: "politicaPrivacidad",
        data() {
            return {
                pdfurl: null
            }
        },
        mounted() {
            axios.get('http://nimp_pruebas.develop.geaecuador.ec/api/v1/condicion-general/5E9Mp').then(response => {

                //var blob = new Blob([response.data.pdf_base64]);
                // var url = URL.createObjectURL(blob);
                this.pdfurl = "data:application/pdf;base64," + response.data.pdf_base64;

            });

        }
    }


</script>

<style scoped>

    .contenedor{
        width: 100%;
    }
    .pdf{
        width: 100%;
        height: 100vh;
    }
</style>
