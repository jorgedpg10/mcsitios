const getBtn = document.getElementById('get-btn');

const getData = () => {
    axios.get('https://api.geainternacional.com/v1/endpoints/micrositios').then(response => { // returns a promise
        var endp = response.data[0].endpoint ;
        console.log(endp);


        document.getElementById("content").innerHTML = endp;

        /*for (const res in response.data) {
            console.log(`response.${res} = ${response[res]}`);
        }
*/
    });
};

getBtn.addEventListener('click', getData);
