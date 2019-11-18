<template>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header"></div>

                    <div class="card-body" >
                        <!--<p>el endopoint :</p>
                        <p>{{ obj.endpoint }}</p>-->
                        <p>la imagen es:</p>
                        <img :src="direccion" width="300">
                    </div>

                </div>
            </div>
        </div>
    </div>
</template>

<script>
    var download = require("downloadjs");

    export default {
        name: "urls",
        data(){
            return {
                obj: {},
                direccion: '',
                //token: "",
            }
        },
        mounted(){
            axios.get('https://api.geainternacional.com/api/v1/micrositios/ec/informacion/5E9Mp',
                { 'headers': { 'HTTP-CLIENT-ID': '11', 'HTTP-CLIENT-SECRET': 'pv1LYTKOJdxKLbe93TRiidXyqshFXmzc'} })
                .then( response => {
                //console.log(response.data[0].download_url);
                //this.direccion = response.data[0].download_url;
                    console.log(response.data.imagen_base64);
                    var myString = 'data:image/png;base64,' + response.data.imagen_base64;

                    console.log(myString);
                    var image = new Image();
                    image.src = myString;
                    document.body.appendChild(image);

            });

                /*  var currentUrl = window.location.pathname;
                  var url_limpia = currentUrl.replace('/','');

                   axios.get('https://api.geainternacional.com/v1/endpoints/micrositios').then( response => {
                       var res = response.data;
                          var objeto = res.filter( dato => dato.iso_pais === url_limpia ).pop();
                          this.obj = objeto;
                   });*/

                // var url = obj.endpoint +'/condicion-general/5E9Mp';

            }
        }



</script>

<style scoped>

</style>
