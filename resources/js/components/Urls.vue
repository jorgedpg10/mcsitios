<template>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Url.Vue</div>

                    <div class="card-body">
                        Urls.vue cargando correctamente
                    </div>

                    <div>
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


             /*
                 res.filter(dato => res.iso_pais == currentUrl).pop()
                 Object { type: "ec", ep: "alsdjflkaklsd" }

                 for(let item  of res){
                     console.log(item);
                 }*/



        }
    }
</script>

<style scoped>

</style>
