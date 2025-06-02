SELECT 
    ciudadanos.dpi,
    ciudadanos.nombre,
    ciudadanos.apellido,
    ciudadanos.tel_movil,
    municipios.nombre_municipio,
    departamentos.nombre_depto,
FROM
    ciudadanos INNER JOIN municipios
    ON ciudadanos.cod_muni = municipios.cod_muni
    INNER JOIN departamentos
    ON municipios.cod_depto = departamentos.cod_depto;
    