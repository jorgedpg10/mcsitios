<template>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header"></div>

                    <div class="card-body">
                        <p>el endopoint al que debemos ir es:</p>
                        <p>{{ obj.endpoint }}</p>
                    </div>

                </div>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        name: "urls",
        data(){
            return {
                obj: {}
            }
        },
        mounted(){

            var currentUrl = window.location.pathname;
            var url_limpia = currentUrl.replace('/','')

             axios.get('https://api.geainternacional.com/v1/endpoints/micrositios').then( response => {
                 var res = response.data;

                    var objeto = res.filter( dato => dato.iso_pais === url_limpia ).pop();
                    this.obj = objeto;

             });

        }
    }


</script>

<style scoped>

</style>
