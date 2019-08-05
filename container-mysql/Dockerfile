############################################################
# Dockerfile para el servicio
# Basado en Ubuntu 18.04
############################################################

# Indicar la imagen base
FROM ubuntu:18.04

# Archivo Autor / Mantenimiento
LABEL maintainer="Luis Briceño<luis.briceno@gfourmis.co>"

# Comandos a ejecutar al iniciar el contenedor
# Ejemplo: 
# RUN apt update
# clavemuydificil
RUN apt-get update -y
RUN apt install -y mysql-server
# RUN apt-get clean && rm -rf /var/lib/apt/lists/*

# Puerto a exponer.
EXPOSE 3306

# Definir comandos que se ejecutan sobre el contenedor
# CMD ["executable","param1","param2"]

# Configurar que ejecutará al iniciar el contenedor
# ENTRYPOINT ["executable", "param1", "param2"]
