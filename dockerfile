FROM mysql:5.6

COPY TokoOlahraga/olahraga.sql /docker-entrypoint-initdb.d/