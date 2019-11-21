se deben mostrar 5 tipos de archivos
cg: condiciones generales, pdf
pp: politicas de privacidad, pdf
in: informacion del producto, png
st: soporte tecnico, png
tu: terminos de uso, pdf = vamos a asumir que esto se llama terminos de servicio

18/11
Llegamos a la conclusión con Jose de que la siguiente API 
ya no va a ser utilizada.

[
{
"iso_pais": "ec",
"pais": "Ecuador",
 "id_osm": "108089",
 "endpoint": "http://nimp_pruebas.develop.geaecuador.ec"
 },
 {
 "iso_pais": "gt",
 "pais": "Guatemala",
 "id_osm": "1521463",
 "endpoint": "http://sigagt.geainternacional.com/api/v1"
 }
 ]


En su lugar la Url me debe llegar el Isocode y el token

es decir que me puede llegar una Url. ejemplo:

jorge.com/ec/token

y de ahí debo ubicarla dentro de mi axios en:

api.geainternacional.com/api/v1/siga/micrositios/{ISOCODE}/politica-de-privacidad/{token}

para imprimir la foto que devuelva.

---
http://nimp_pruebas.develop.geaecuador.ec/api/v1/termino-de-uso/0945786238/QsEtu // esta es la url para descargar el archivo 
de terminos de servicio (que necesita cedula)

http://nimp_pruebas.develop.geaecuador.ec/api/v1/condicion-general/5E9Mp // esta va a ser la url para
descargar el archivo que no necesita cedula (cond general)





