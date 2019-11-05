<template>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Url.Vue</div>

                    <div class="card-body">
                        Urls.vue cargando correctamente
                    </div>


                </div>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        name: "urls",
        mounted(){
            var currentUrl = window.location.pathname;
            console.log(currentUrl);

            axios.get('https://api.geainternacional.com/v1/endpoints/micrositios').then( response => { // returns a promise
                //var endp = response.data[0].endpoint ;
                var endp = response.data[0];
                console.log(endp);


                document.getElementById("content").innerHTML = endp;

                /*for (const res in response.data) {
                    console.log(`response.${res} = ${response[res]}`);
                }
        */
            });




        }
    }
</script>

<style scoped>

</style>
