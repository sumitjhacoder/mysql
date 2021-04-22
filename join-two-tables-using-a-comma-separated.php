SELECT a.class,a.section,c.class as cls,GROUP_CONCAT(DISTINCT  s.section ORDER BY s.id)  as sec,d.designation as desig,ss.subject as sub FROM `teaching_staff` a 
LEFT JOIN `bdps_class_master` c ON c.id=a.class LEFT JOIN `bdps_sec_master` s ON find_in_set(s.id, a.section)
LEFT JOIN `tb_staff_designation` d ON d.id=a.designation 
LEFT JOIN `tb_subjectlist` ss ON ss.id=a.subjects where a.status=1 and(a.name LIKE '%latika%' or a.fathername LIKE '%latika%' or a.phone LIKE '%latika@bdps%' )
//imp.
//GROUP_CONCAT(DISTINCT  s.section ORDER BY s.id)  as sec 
// ON find_in_set(s.id, a.section)
