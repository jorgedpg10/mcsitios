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
            console.log(currentUrl.replace('/',''));

            const datos = [
                { type: 'ec', ep: 'alsdjflkaklsd'},{ type: 'pa', ep: 'alsdjflkaklsd'}]
            undefined
            datos.filter(dato => dato === 'ec')
            Array []

            datos.filter(dato => dato.type === 'ec')
            Array [ {…} ]

            datos.filter(dato => dato.type === 'ec').pop()
            Object { type: "ec", ep: "alsdjflkaklsd" }



            axios.get('https://api.geainternacional.com/v1/endpoints/micrositios').then( response => {
                var res = response.data;
                console.log(res);
                console.log()

                /*for(let item  of res){
                    console.log(item);
                }*/

            });

        }
    }
</script>

<style scoped>

</style>
