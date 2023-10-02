#1.Tìm những nhân viên làm việc ở phòng số 4
SELECT * FROM `nhanvien` 
WHERE PHG = 4
ORDER BY TenNV;

#2.Tìm những nhân viên có mức lương trên 30000
SELECT * FROM `nhanvien` 
WHERE Luong > 30000
ORDER BY TenNV;

#3.Tìm các nhân viên có mức lương trên 25,000 ở phòng 4 hoặc các nhân viên có mức lương trên 30,000 ở phòng 5
SELECT * FROM `nhanvien` 
WHERE (Luong > 25000 AND PHG = 4) 
OR (Luong > 30000 AND PHG =5)
ORDER BY TenNV;

#4.Cho biết họ tên đầy đủ của các nhân viên có họ bắt đầu bằng ký tự ‘N’
SELECT HoNV, TenLot, TenNV 
FROM `nhanvien` 
WHERE HoNV LIKE 'N%'
ORDER BY TenNV;

#5.Tìm những nhân viên làm việc ở phòng số 4
SELECT HoNV, TenLot, TenNV, MaNV 
FROM `nhanvien` 
WHERE PHG = 4
ORDER BY TenNV;

#6.Tìm các nhân viên có mức lương trên 25,000 ở phòng 4 hoặc các nhân viên có mức lương trên 30,000 ở phòng 5
SELECT HoNV, TenLot, TenNV, MaNV, Ma_NQL  
FROM `nhanvien` 
WHERE (Luong > 25000 AND PHG = 4) 
OR (Luong > 30000 AND PHG =5)
ORDER BY TenNV;

#7.Cho biết họ tên đầy đủ của các nhân viên có họ bắt đầu bằng ký tự ‘N’
SELECT * FROM `nhanvien`
WHERE HoNV LIKE 'N%'
ORDER BY TenNV;

#8.Cho biết các nhân viên sinh trước ngày 30/4/1975 hoặc ở TP HCM hoặc làm việc tại phòng số 4
SELECT * FROM `nhanvien` 
WHERE NgSinh < '1975-04-30' OR DChi LIKE '%Tp HCM' OR PHG = 4
ORDER BY TenNV;

#9. Cho biết các nhân viên sinh trước năm 1975
SELECT * FROM `nhanvien` 
WHERE YEAR(NgSinh) < '1975'
ORDER BY TenNV;

#11. Với mỗi phòng ban, cho biết tên phòng ban và địa điểm phòng
SELECT TenPHG, DiaDiem 
FROM `phongban` 
INNER JOIN `diadiem_phg` 
ON `phongban`.`MaPHG` = `diadiem_phg`.`MaPHG`
ORDER BY TenPHG;

#12. Tìm tên những người trưởng phòng của từng phòng ban
SELECT TenPHG, HoNV, TenLot, TenNV
FROM `phongban`
INNER JOIN `nhanvien`
ON `phongban`.`TrPHG` = `nhanvien`.`MaNV`
ORDER BY TenNV;

#13. Tìm tên và địa chỉ của tất cả các nhân viên của phòng "Nghiên cứu".
SELECT HoNV, TenLot, TenNV, DChi, TenPHG
FROM `nhanvien`
INNER JOIN `phongban`
ON `nhanvien`.`PHG` = `phongban`.`MaPHG`
WHERE PHG = 5
ORDER BY TenNV;

#14. Với mọi đề án ở "Ha Noi", liệt kê các mã số đề án (MADA), mã số phòng ban chủ trì đề án (PHONG),
#họ tên trưởng phòng (HONV, TENLOT, TENNV) cũng như địa chỉ (DCHI) và ngày sinh (NGSINH) của người ấy.
SELECT MaDA, Phong, HoNV, TenLot, TenNV, DChi, NgSinh
FROM `dean`
INNER JOIN `phongban`
ON `dean`.`Phong` = `phongban`.`MaPHG`
INNER JOIN `nhanvien`
ON `phongban`.`TrPHG` = `nhanvien`.`MaNV`
WHERE DDiem_DA = 'Hà Nội'
ORDER BY TenNV;

#16. Với mỗi phòng ban, liệt kê tên phòng ban (TENPHG) 
#và lương trung bình của những nhân viên làm việc cho phòng ban đó.*/
SELECT TenPHG, AVG(Luong) AS LuongTB
FROM `nhanvien`
INNER JOIN `phongban`
ON `nhanvien`.`PHG` = `phongban`.`MaPHG`
GROUP BY PHG
ORDER BY TenPHG ASC;

#17. Lương trung bình của tất cả các nữ nhân viên
SELECT AVG(Luong) AS LuongTBNuNV
FROM `nhanvien`
WHERE Phai = 'Nữ'
GROUP BY Phai;

#18. Với mỗi nhân viên, cho biết số lượng nhân viên mà nhân viên đó quản lý trực tiếp.
SELECT ql.HoNV, ql.TenLot, ql.TenNV, ql.MaNV, COUNT(nv.MaNV)
FROM `nhanvien` ql
LEFT JOIN `nhanvien` nv ON `ql`.`MaNV` = `nv`.`Ma_NQL`
GROUP BY ql.MaNV
ORDER BY ql.MaNV;

