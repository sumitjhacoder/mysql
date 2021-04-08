UPDATE demo_student_fee_detail AS new,( SELECT * FROM  demo_student_fee_detail where session='2020-2021' ) AS old 
SET new.tp_apr = old.tp_apr
WHERE new.adm_no= old.adm_no and new.session='2021-2022' and new.adm_no in (1,31)
