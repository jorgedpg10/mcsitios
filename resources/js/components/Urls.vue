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
                obj: {},
                //token: "",
            }
        },
        mounted(){
            axios.get('http://nimp_pruebas.develop.geaecuador.ec/api/v1/condicion-general/5E9Mp').then( response => {
                //console.log(response.data.pdf_base64);
                /*
                var myString = "Mi nombre es Jorge";
                var b64 = btoa(myString);
                var unicode = atob(b64);

                console.log(b64);
                console.log(unicode);
                var blob = new Blob([b64], {Type: 'text/plain' });
                var url = URL.createObjectURL(blob);
                console.log(url); */

                var blob = new Blob([response.data.pdf_base64], {Type: 'application/pdf' });
                var url = URL.createObjectURL(blob);
                console.log(url);
                //console.log(response.data);

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
