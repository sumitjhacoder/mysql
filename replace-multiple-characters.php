//sr_no='JVM CHIRCHITA/2020-2021/451';
//SELECT max(REPLACE(REPLACE(REPLACE(sr_no,'JVM CHIRCHITA/',''),'-',''),'/',''))as sr_no
SELECT REPLACE(REPLACE(REPLACE(sr_no,'JVM CHIRCHITA/',''),'-',''),'/','') as sr_no
FROM `jvmc_transfer_certificate`
ORDER BY `sr_no`
