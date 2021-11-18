-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th10 17, 2021 lúc 05:00 PM
-- Phiên bản máy phục vụ: 10.4.21-MariaDB
-- Phiên bản PHP: 7.4.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `webtimviec`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `apply_job`
--

CREATE TABLE `apply_job` (
  `job_user` varchar(5) NOT NULL,
  `job_apply` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `apply_job`
--

INSERT INTO `apply_job` (`job_user`, `job_apply`) VALUES
('23', '38'),
('23', '38'),
('23', '41');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `cong_viec`
--

CREATE TABLE `cong_viec` (
  `job_id` int(11) NOT NULL,
  `job_own` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `job_name` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `job_quantity` int(11) DEFAULT NULL,
  `job_salary` int(20) DEFAULT NULL,
  `job_language` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `job_experiment` varchar(500) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `job_environment` varchar(500) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `job_profit` varchar(500) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `job_address` varchar(500) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `job_hotline` varchar(15) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `job_email` varchar(500) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `job_start` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `job_end` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `job_img` varchar(500) COLLATE utf8mb4_unicode_ci NOT NULL,
  `job_class` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `cong_viec`
--

INSERT INTO `cong_viec` (`job_id`, `job_own`, `job_name`, `job_quantity`, `job_salary`, `job_language`, `job_experiment`, `job_environment`, `job_profit`, `job_address`, `job_hotline`, `job_email`, `job_start`, `job_end`, `job_img`, `job_class`) VALUES
(38, 'Senior DevOps Engineer ', 'Kỹ sư phần mềm ', 30, 25, 'C++, Java, Python.', 'Có hơn 5 năm kinh nghiệm của DevOps', 'Chúng tôi đang tìm kiếm các Kỹ sư / Kỹ sư về để tham gia vào đội ngũ  hiện có của chúng tôi. ', 'Chăm sóc sức khỏe tư nhân cho gia đình; Môi trường làm việc nhịp độ nhanh; nhiều quyền lợi hấp dẫn.', 'Số 6F5, Ngõ 330, Nguyễn Trãi, Thanh Xuân, Hà Nội', '0378 965 775', 'Nab@gmail.com ', '1/11/2021', '30/11/2021', 'https://gawler.org.au/wp-content/uploads/cache/images/nab_logo/nab_logo-2403186929.jpg ', 'be'),
(41, 'CareerLink\'s Client ', 'Game Designer ', 25, 20, 'C++, Java, Python.', 'Tiếng Anh giao tiếp tốt; Ưu tiên ứng viên có năng ', 'Xây dựng, thiết kế và lên kế hoạch thêm mới content cho Game; Tham gia các quá trình đánh giá, ph', 'Chăm sóc sức khỏe tư nhân cho gia đình; Môi trường làm việc nhịp độ nhanh; Nhiều quyền lợi hấp dẫn', 'Phòng 307, DMC Tower, 535 Kim Mã , Quận Ba Đình , ', '0308 985 875', 'CareerLink@gmail.com', '25/11/2021', '31/12/2021', 'https://www.careerlink.vn/images/common/logo-1200.png ', 'khac'),
(42, 'Công ty TNHH Livespo Pharma', 'Kỹ sư phần mềm', 60, 27, 'PHP, Nodejs, Python ', 'Có ít nhất 1 năm kinh nghiệm làm FullStack; Có kin', 'Tiếp nhận, phân tích yêu cầu; Phân tích và đề xuất giải pháp; Lập trình theo thiết kế; Vận hành hệ t', 'Chế độ bảo hiểm theo đúng quy định Nhà nước; Nghỉ các ngày chủ nhật và 2 Thứ 7/ tháng; Du lịch hàng ', 'Tầng 2, Toà nhà N03T5, khu Ngoại giao đoàn , Quận ', '0878 985 375', 'Pharma@gmail.com', '30/12/2021', '25/01/2022', 'https://dxwd4tssreb4w.cloudfront.net/image/ad22f1b74382e8850c8b62d7dee1cad3', 'be'),
(45, 'Công ty cổ phần tập đoàn AUSTDOOR', 'Kỹ sư phần mềm', 18, 21, 'C++, C#, Python.', 'Tốt nghiệp Đại Học chuyên ngành CNTT, Tài chính kế', 'Thời gian làm việc: 8h – 17h hàng ngày từ thứ 2 đến hết thứ 7 (nghỉ 02 thứ 7 trên tháng); Có nhiều c', 'Được tham gia các khóa đào tạo kỹ năng & nghiệp vụ của công ty; Thưởng lễ tết; thưởng theo quý; khám', 'Số 37 Lê Văn Thiêm, Nhân Chính , Quận Thanh Xuân ,', '0378 965 565', 'Outsdoor@gmail.com', '30/12/2021', '25/01/2022', 'https://dxwd4tssreb4w.cloudfront.net/image/7943f5818962e7c074017e3abf5afc99 ', 'be'),
(46, 'Công Ty Cổ Phần Woodsland', 'Chuyên Viên Hệ Thống', 43, 25, 'C++, Java, Python.', 'Trình độ học vấn: Tốt nghiệp Cao đẳng/ Đại học trở', 'Chúng tôi đang tìm kiếm các Kỹ sư / Kỹ sư về để tham gia vào đội ngũ  hiện có của chúng tôi. Bạn sẽ ', 'Chế độ bảo hiểm theo đúng quy định Nhà nước; Nghỉ các ngày chủ nhật và 2 Thứ 7/ tháng; Du lịch hàng ', 'Số 6F5, Ngõ 330, Nguyễn Trãi, Thanh Xuân, Hà Nội', '0878 985 375', 'Woodsland@gmail.com', '25/11/2021', '31/12/2021', 'https://cdn.dribbble.com/users/7615098/screenshots/15759382/media/d61350525677c0a36206b9a4d1cb39c2.jpg?compress=1&resize=400x300', 'khac'),
(47, 'Công ty cổ phần BETA MEDIA', ' Nhân Viên Digital Marketing ', 53, 19, 'C++,HTML,Nodejs', 'Có ít nhất 01 năm kinh nghiệm về lập kế hoạch, tri', ' Thu thập, phân tích thông tin thị trường, thông tin về sản phẩm, thông tin về các chương trình Digi', 'Chăm sóc sức khỏe tư nhân cho gia đình; Môi trường làm việc nhịp độ nhanh; Nhiều quyền lợi hấp dẫn', 'Tòa nhà Golden West, Số 2 Lê Văn Thiêm , Quận Than', '039 535 2273 ', 'Betamedia@gmail.com', '15/11/2021', '20/12/2021', 'https://dxwd4tssreb4w.cloudfront.net/image/011e8a4a76bf3124aa45f6806883506d ', 'khac'),
(48, 'Tập đoàn KAROFI HOLDING', 'Chuyên Viên Hệ Thống', 21, 26, 'C++, Java, C#', 'Tốt nghiệp Cử nhân trở lên chuyên ngành CNTT, Toán', 'Khảo sát chi tiết yêu cầu nghiệp vụ liên quan đến quản lý kho và vận hành sản xuất (Hỗ trợ phân hệ M', 'Thời gian làm việc từ thứ 2- thứ 6 hàng tuần, nghỉ Thứ 7- Chủ Nhật; Ghi nhận cống hiến, mức thưởng t', 'Tòa Hudland, Số 6 Nguyễn Hữu Thọ, Linh Đàm , Quận ', '0353 585 875', 'Karofi@gmail.com', '12/11/2021', '30/11/2021', 'https://dxwd4tssreb4w.cloudfront.net/image/8ff0a39cc9f8b40853826f26a6fa60d6 ', 'khac'),
(49, 'Công Ty CP Chuỗi Thực Phẩm TH ', 'Chuyên Viên Ứng Dụng ', 34, 17, 'C++, Java, Python', ' Ít nhất 1 năm kinh nghiệm lập trình ứng dụng PHP,', 'Triển khai thử nghiệm công nghệ (POC) và lựa chọn giải pháp; Thống nhất yêu cầu, xây dựng tài liệu t', 'Bảo hiểm sức khỏe, tai nạn cho toàn bộ nhân viên công ty; Chế độ phúc lợi đầy đủ (tham gia BHXH, BHY', 'Tầng 2 Tòa nhà Bắc Á, số 9 Đào Duy Anh , Quận Đống', '0247 306 2323 ', 'TH@gmail.com', '27/11/2021', '28/01/2022', 'https://www.typhuviet.vn/wp-content/uploads/group-avatars/9/60f7ee6c70105-bpfull.jpg ', 'khac'),
(50, 'Bigtree Technology & Consulting Vietnam ', 'Frontend Developer', 10, 15, ' HTML, CSS, JavaScript', 'Nắm vững kinh nghiệm về Frontend với ngôn ngữ Reac', 'Phát triển WEB Application (Trao đổi giải thưởng, Hỗ trợ kinh doanh, Online Shopping,...); Phát triể', 'Thử việc 100% lương - Được 1 ngày nghỉ có lương sau khi tiêm 1 mũi Vaccine Covid (2 mũi 2 ngày nghỉ)', 'số 444 - Hoàng Hoa Thám - Thụy Khuê - Hà Nội', '0878 955 375', 'Bigtree@gmail.com', '15/12/2021', '31/1/2022', 'https://www.bigtreetc.com/wp-content/uploads/2019/08/btc_logo.png ', 'fe'),
(52, 'SMART SOLUTIONS', 'Lập trình viên', 15, 23, 'NET, Java, Python,C++', 'Trình độ học vấn: Tốt nghiệp Cao đẳng/ Đại học trở', 'Xây dựng, thiết kế và lên kế hoạch thêm mới content cho Game; Tham gia các quá trình đánh giá, ph', 'Chăm sóc sức khỏe tư nhân cho gia đình; Chế độ BHYT cho nhân viên; Tăng lương 2 lần/năm', 'Ngõ 12 Khuất Duy Tiến, Thanh Xuân, Hà Nội ', '0475 985 875', 'smartsolution@gmail.com', '25/11/2021', '31/12/2021', 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcR1xOiIb0CqfJVN85lG2G4OvVgHfaa8RuhuGA2UnNqaEvx5_3N8rv5aB0UhGWSFQ36eu_o&usqp=CAU ', 'khac'),
(53, 'Công ty cổ phần đầu tư và công nghệ Ninja ', 'Lập trình viên', 15, 21, 'Javascript, HTML, CSS', 'Sử dụng thành thạo PHP và mô hình MVC trong PHP; P', 'Tham gia các công đoạn tìm hiểu yêu cầu, phân tích, thiết kế, nghiên cứu công nghệ khi được phân côn', 'Được làm việc trong môi trường chuyên nghiệp và thân thiện; Có cơ hội nâng cao năng lực, vị trí nghề', 'Tòa nhà Mỹ Sơn, 62 Nguyễn Huy Tưởng, Thanh Xuân, H', '0878 985 354', 'ninja@gmail.com', '30/12/2021', '25/01/2022', 'https://timviec365.vn/pictures/2020/03/06/exq1635305460.jpg ', 'khac'),
(54, 'Công Ty Cp Tm Trực Tuyến Đặng Gia ', 'Lập trình viên', 17, 21, 'PHP, Nodejs, Python,C++', 'Tốt nghiệp Đại học chuyên ngành CNTT hoặc tương đư', 'Phát triển các ứng dụng web, xây dựng và lập trình phát triển các website, landing-page và các API t', 'Môi trường làm việc năng động, thân thiện, cơ hội thăng tiến cao; Có cơ hội để phát huy tối đa năng ', 'Nhà A14 ngách 3/10 đường liên Cơ, Phường Cầu Diễn,', '0434 985 875', 'danggia@gmail.com', '25/11/2021', '28/01/2022', 'https://secure.gravatar.com/avatar/54f549c4090e17e62ccf366b889ef924?s=500&d=mm&r=g ', 'khac'),
(55, 'Công ty Cổ phần Lendbiz  ', 'Frontend Developer', 18, 25, 'CSS,Html,Javascript', 'Tốt nghiệp chuyên ngành Công nghệ thông tin hoặc c', 'Xây dựng giao diện cho hệ thống quản lý nội bộ của công ty; Xây dựng giao diện web cho các sản phẩm ', 'Thưởng theo chính sách thưởng của công ty, có Công đoàn chăm sóc đời sống nhân viên; Được đóng bảo h', 'Căn TT5-1B-25, Khu đô thị mới Đại Kim, Phường Đại ', '0247 306 2454 ', 'Lendbiz  @gmail.com', '30/12/2021', '28/01/2022', 'https://timviec365.vn/pictures/2021/10/11/avatar16334.png', 'fe'),
(56, 'Công ty cổ phần EMSO Việt Nam ', 'Lập trình viên', 24, 12, 'NodeJS,ReactJS ', 'Làm việc nhóm và đưa ra góp ý về thuật toán hoặc đ', 'Tham gia phát triển product của công ty. Làm việc nhóm và đưa ra góp ý về thuật toán hoặc đề xuất ý ', 'Được đào tạo, tham gia các khóa học nâng cao nghiệp vụ, học thêm Ngoại ngữ; Nâng cao tác phong làm v', 'Toà A2 Thăng Long Garden, 250 Minh Khai, Hai Bà Tr', '0308 431 875', 'emso@gmail.com', '01/01/2022', '31/01/2022', 'https://timviec365.vn/pictures/2021/09/24/avatar215466.png ', 'khac'),
(57, 'Công Ty Tnhh Đầu Tư Launchzone', 'Kỹ Sư Phần Mềm ', 25, 21, 'C++, Java, Python.', 'Cử nhân hoặc kỹ sư, ưu tiên chuyên ngành công nghệ', 'Phân tích yêu cầu phần mềm, yêu cầu thiết kế để lên các yêu cầu kiểm thử cho dự án; Tạo mới test cas', ' BHXH, BHYT: Theo quy định; Nghỉ phép: 12 ngày phép/ năm; Phụ cấp ăn trưa, gửi xe khi làm việc tại v', 'W2 Vinhomes West Point - Lô HH, đường Phạm Hùng, P', '0878 985 332', 'Launchzone@gmail.com', '30/12/2021', '28/01/2022', 'https://pbs.twimg.com/profile_images/1422469154888581123/XXWRaA9x.jpg ', 'be'),
(58, 'Công ty TNHH Med247 ', 'Tester ', 20, 15, 'C++, Java, Python.', 'Tốt nghiệp Cao đẳng/Đại học chuyên ngành CNTT, Toá', 'Nghiên cứu yêu cầu và thiết kế của dự án; Lập kế hoạch test và kịch bản test, chuẩn bị dữ liệu test;', 'Môi trường IT thuần nhưng cực trẻ trung, sáng tạo, năng động; Có cơ hội phát triển nghề nghiệp, hưởn', 'Tầng 14, tòa nhà Kim khí Thăng Long, số 1 Lương Yê', '0962 900 966 ', 'tuyendung@med247.com ', '22/11/2021', '31/12/2021', 'http://image.laodong.com.vn/Uploaded/ViecLam/RecruitmentPhoto/30-06-20/d5e8ba33-60f3-449e-b979-ca4610898bce.png.ashx?width=228px ', 'test'),
(59, 'MICROTEC VIETNAM COLTD', 'Nhân Viên Triển Khai Dự Án ', 26, 21, 'PHP, Nodejs, Python ', 'Có kiến thức và kinh nghiệm cài đặt cấu hình ứng d', 'Tham gia các dự án triển khai phần mềm hiện đại, tiên tiến nhất hiện nay cho hệ thống ATM/KIOS/digit', 'Lương hấp dẫn theo năng lực, thưởng 2 lần/năm và review lương hàng năm Bảo hiểm sức khỏe từ Liberty,', '194 Đường Trần Quang Khải, French Quarter, Ly Thai', '0874 935 575', 'Microtec @gmail.com', '30/12/2021', '31/01/2022', 'https://images.vietnamworks.com/pictureofcompany/21/10596497.png ', 'khac'),
(60, 'CÔNG TY TNHH VIỆN THẨM MỸ OSKA ', 'Lập trình viên ', 12, 24, 'Html,CSS,Javascript', ' Lập trình viên ngôn ngữ Javascript, nodejs.Triển ', 'Tham gia xây dựng mới, nâng cấp các ứng dụng phần mềm quản lý của Công ty. Nghiên cứu công nghệ mới,', 'Mức lương cạnh tranh hấp dẫn Lương, Thưởng , Nghỉ lễ theo quy định Được làm trong môi trường Startup', 'Tòa nhà Indochina Plaza Hanoi, số 241 đường Xuân T', '0858 925 375', 'oska@gmail.com', '1/11/2021', '31/12/2021', 'https://images.vietnamworks.com/pictureofcompany/3e/11058259.png ', 'fe'),
(61, 'Công Ty Tài Chính Trách Nhiệm Hữu Hạn MB Shinsei ', 'Chuyên Viên Hệ Thống', 23, 25, 'Html,CSS,Javascript', 'Đại học trở lên, chuyên ngành tài chính, ngân hàng', 'Phối hợp với CNTT để xây dựng và hoàn thiện các tài liệu đặc tả để thiết lập, phát triển giải pháp h', 'Thu nhập và thưởng hấp dẫn, cạnh tranh theo năng lực Bảo hiểm sức khỏe cao cấp MIC Thời gian làm việ', 'Tòa Nhà Trường Thịnh, Số 1 Phùng Chí Kiên, Nghĩa Đ', '0247 306 2564', 'MB Shinsei@gmail.com', '26/11/2021', '12/01/2022', 'https://images02.vietnamworks.com//companyprofile/vietnamworks/vi/Mcredit-Logo.png ', 'khac'),
(62, 'CÔNG TY TNHH TÂM LÝ VÀ GIÁO DỤC MINERVA EDUCATION', 'Chuyên Viên Quản Lý CNTT', 12, 19, 'Html,CSS,Javascript', 'Tốt nghiệp Cao Đẳng, Đại Học ngành CNTT hoặc các C', 'Chuyên viên Quản lý Website và Hệ thống Quản lý Học tập (LMS) cung cấp kiến thức và kỹ năng quản lý ', 'Lương thưởng xứng đáng với năng lực làm việc Phụ cấp ăn trưa tại văn phòng Chế độ nghỉ phép, nghỉ lễ', 'Tầng 2, block A, 92 Xuân Diệu, Phường Tứ Liên, Quậ', '0975 365 323 ', 'minerva@gmail.com', '30/12/2021', '04/02/2022', 'https://images.vietnamworks.com/pictureofcompany/70/11046488.png ', 'khac'),
(63, 'CÔNG TY CỔ PHẦN PHÁT TRIỂN CÔNG NGHỆ LIÊN VIỆT', 'Tester ', 28, 16, 'C++, Java, Python.', 'Tốt nghiệp chuyên ngành công nghệ thông tin hoặc c', 'Tham gia test các dự án phần mềm của công ty với vai trò Tester hoặc Test Leader tùy quy mô dự án. -', 'Du lịch nghỉ mát, team building nhiều lần trong năm; Ăn trưa, café đồ ăn nhẹ miễn phí tại văn phòng;', '109 Trần Hưng Đạo, Cửa Nam, Hoàn Kiếm, Hanoi, Viet', '0128 985 875', 'Lienviet@gmail.com', '20/11/2021', '05/01/2022', 'https://images.vietnamworks.com/pictureofcompany/23/10710211.png ', 'test'),
(64, 'CÔNG TY CP TOVCHAIN', 'Backend Developer ', 25, 25, 'PHP, Nodejs, Python ', 'Thành thạo MỘT trong các ngôn ngữ lập trình sau: S', 'Tham gia xây dựng, triển khai các dự án của công ty: Defi, Fintech, Blockchain platform,....; Tìm hi', 'Lương tháng 13, Thưởng hiệu quả công việc, review lương lên tới 3 lần hàng năm, thưởng nghỉ lễ BHXH,', ' Số 8 Tạ Quang Bửu, Hai Bà Trưng, Hà Nội ', '0743 985 875', 'Tovchain@gmail.com', '30/12/2021', '28/02/2022', 'https://images.vietnamworks.com/pictureofcompany/d1/11050102.png ', 'be'),
(65, 'CÔNG TY TNHH SAMSUNG DISPLAY VIỆT NAM', 'Kỹ sư phần mềm', 23, 16, 'Python/C/C++/C#', 'Tốt nghiệp Đại học chuyên ngành CNTT hoặc tương đư', 'Phân tích và xây dựng Machine learning và Deep Learning model hỗ trợ việc phán định lỗi sản phẩm (th', 'Singning Bonus (lên đến 3 tháng lương); Tháng lương thứ 13; thưởng PI 2 lần/năm (tổng thu nhập cạnh ', 'Lô 59K KCN Quang Minh - Mê Linh, Huyện Mê Linh, Hà', '0878 976 375', 'samsung124@gmail.com', '25/11/2021', '31/12/2021', 'https://www.phoneworld.com.pk/wp-content/uploads/2018/09/Brand-Logo-Samsung-1-1-1-1.png ', 'khac'),
(66, 'NEOS VIETNAM INTERNATIONAL COLTD', 'Software Tester ', 11, 21, 'C++, Java, Python.', 'Có kinh nghiệm từ 1 năm trở lên, làm tester ít nhấ', 'Tham gia test game, mobile, web, dự án AI/IOT; Làm tester cho các dự án phần mềm của khách hàng Nhật', 'Thưởng lương tháng 13 và theo dự án Tham gia lớp học tiếng Nhật, đào tạo chuyên môn do công ty tổ ch', '7th Floor, Ocean Park Building, No.1 Dao Duy Anh, ', '0419 985 875', 'neos@gmail.com', '27/11/2021', '20/01/2022', 'https://images.vietnamworks.com/pictureofcompany/03/10624584.png ', 'test'),
(67, 'Công Ty Cổ Phần Hasaki Beauty & S.P.A', 'Tester ', 31, 22, 'C++, Python, Java', 'Tốt nghiệp Cao đẳng trở lên chuyên ngành CNTT; Có ', ' Tham gia kiểm thử, test ,các phần mềm, hệ thống ứng dụng mobile; Xây dựng kịch bản test, xây dựng t', 'Chế độ bảo hiểm theo đúng quy định Nhà nước; Nghỉ các ngày chủ nhật và 2 Thứ 7/ tháng; Du lịch hàng ', 'Tầng 13, Tòa nhà 789, Số 147 đường Hoàng Quốc Việt', '0308 775 875', 'Hasaki@gmail.com', '19/11/2021', '19/12/2021', 'https://dxwd4tssreb4w.cloudfront.net/image/0066b203c36c763a4b4fce24c4012d22 ', 'test'),
(68, 'Công Ty Cổ Phần Tập Đoàn Ominext', 'Tester ', 9, 19, 'C++, C#, Java', 'Tốt nghiệp chuyên ngành công nghệ thông tin hoặc c', 'Tiếp nhận, phân tích yêu cầu; Phân tích và đề xuất giải pháp; Lập trình theo thiết kế; Vận hành hệ t', 'Chăm sóc sức khỏe tư nhân cho gia đình; Chế độ BHYT cho nhân viên; Tăng lương 2 lần/năm', 'Lô 14 Nguyễn Cảnh Dị, phường Đại Kim , Quận Hoàng ', '0278 985 875', 'Ominext@gmail.com', '23/12/2021', '23/01/2022', 'https://dxwd4tssreb4w.cloudfront.net/image/0a419dcb68c335d41452d3add739b630 ', ''),
(69, 'CÔNG TY CỔ PHẦN TEKY HOLDINGS', 'Tester ', 18, 19, 'C++, Python, Java', 'Tốt nghiệp Đại học hoặc cao hơn chuyên ngành Khoa ', 'Thiết kế và phát triển các nền tảng, dịch vụ, hệ thống, tính năng cho các sản phẩm EdTech của công t', 'Được làm việc cùng đội ngũ số 1 Việt Nam trong mảng STEAM cho K12: nhân sự tại TEKY là những người đ', 'Tầng 5, Tòa nhà Mac Plaza, Số 10 Trần Phú , Quận H', '0422 985 875', 'teky@gmail.com', '1/11/2021', '31/12/2021', 'https://dxwd4tssreb4w.cloudfront.net/image/2bf0e8adfa6be0b41e9bd5c557d4afba ', ''),
(70, 'Viemart LLC', 'Backend Developer ', 32, 16, 'C++, Java, Python.', 'Trình độ học vấn: Tốt nghiệp Cao đẳng/ Đại học trở', 'Tiếp nhận, phân tích yêu cầu; Phân tích và đề xuất giải pháp; Lập trình theo thiết kế; Vận hành hệ t', 'Bảo hiểm sức khỏe, tai nạn cho toàn bộ nhân viên công ty; Chế độ phúc lợi đầy đủ (tham gia BHXH, BHY', 'Tầng 12A, Tòa nhà Handico Tower, Khu đô thị Mễ Trì', '0358 306 2323 ', 'Viemartllc@gmail.com', '30/12/2021', '12/02/2022', 'https://dxwd4tssreb4w.cloudfront.net/image/25131794a190824f0d20fca3e57b8174 ', ''),
(71, 'FPT Telecom ', 'Frontend Developer', 35, 14, 'C++, Python, Java', 'Tốt nghiệp Đại Học chuyên ngành Công nghệ thông ti', 'Tham gia phát triển các dự án về Web, xây dựng các chức năng front-end của Website, Web application;', 'Chăm sóc sức khỏe tư nhân cho gia đình; Môi trường làm việc nhịp độ nhanh; Nhiều quyền lợi hấp dẫn', '125 Hoàng Quốc Việt, Nghĩa Đô, Cầu Giấy, Hà Nội', '0108 985 875', 'FPTtelecom @gmail.com', '20/12/2021', '20/01/2022', 'https://dxwd4tssreb4w.cloudfront.net/image/7f1e8d88bba6dc19f8a4dc14a80872d1', ''),
(72, 'Magenest.JSC', 'Tester ', 25, 10, 'C++, Python, Java', 'Có kiến thức cơ bản về CNTT. - Có kiến thức cơ bản', ' Chịu trách nhiệm trong việc xác định các yêu cầu Test, mục tiêu test; Thiết lập các thủ tục kiểm tr', 'Chế độ bảo hiểm theo đúng quy định Nhà nước; Nghỉ các ngày chủ nhật và 2 Thứ 7/ tháng; Du lịch hàng ', 'Văp phòng Magenest - Tầng 4, tòa nhà GP Invest, 17', '0218 665 732', 'MagenestJSC@gmail.com', '12/11/2021', '12/01/2022', 'https://dxwd4tssreb4w.cloudfront.net/image/9c50d3d60d0ef4199c828a9de10ee2d7 ', ''),
(73, 'CÔNG TY CỔ PHẦN SYNOPEX', 'Lập trình viên', 36, 11, 'PHP, Nodejs, Python ', 'Tốt nghiệp ngành Công nghệ thông tin, Điện, Điện t', 'Viết chương trình cho máy kiểm tra tính năng sản phẩm; Nghiên cứu các phương pháp lập trình để kiểm ', 'Tăng lương, thưởng: 1 năm 1 lần; Có hỗ trợ xe đưa đón theo lộ trình; Nghỉ 02 thứ bẩy cách tuần và ch', 'P503, tầng 5, tòa nhà Licogi 12, số 21 Đại Từ, Đại', '0308 985 321', 'Synopex@gmail.com', '25/12/2021', '25/02/2022', 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQwMYUTOPDR0pVLGO8WrBFtYYcz22aLhrr44fUhgCGqjK4sN3qlIImd5V20MSS6kj5jhHI&usqp=CAU ', ''),
(74, 'Ngân hàng TNHH MTV Woori', 'Backend Developer ', 25, 16, 'C++, Java, Python.', ' Có kinh nghiệm phát triển thiết kế màn hình web m', 'Phát triển HTML, CSS của màn hình internet banking; Phát triển HTML, CSS lĩnh vực Front-end mobile b', 'Thưởng : 300% lương cơ bản; Phụ cấp ăn trưa, đi lại, điện thoại, tiếng Hàn, làm thêm giờ (nếu có); P', 'Head Office – 34F Keangnam Hanoi Landmark 72, Pham', '0112 985 875', 'MTVwoori@gmail.com', '17/11/2021', '15/01/2022', 'https://dxwd4tssreb4w.cloudfront.net/image/a0e40d21e83be0931b168dfe36b2e12d ', '');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tai_khoan`
--

CREATE TABLE `tai_khoan` (
  `user_id` int(10) NOT NULL,
  `username` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_password` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_email` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_fullname` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_birthday` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_gender` varchar(5) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `tai_khoan`
--

INSERT INTO `tai_khoan` (`user_id`, `username`, `user_password`, `user_email`, `user_fullname`, `user_birthday`, `user_gender`) VALUES
(1, 'kiennhatnheo', 'ef4d475b11063cb637094367991390', 'kien1902@gmail.com', 'Nguyễn Trung Kiên', '19/02/2001', 'Nam'),
(2, 'minh123', 'ddc83bf88c241349a4211172137545', 'minh@gmail.com', 'Trần Ngọc Minh', '04/09/2003', 'Nam'),
(3, 'kien123', '5d2297b2f56654636090aaad75d057', 'kien190201@gmail.com', 'Nguyễn Trung Kiên', '19/02/2001', 'Nam'),
(4, 'kiennhatnheo1', '5d2297b2f56654636090aaad75d0578f', '', 'Nguyễn Trung Kiên', '', ''),
(5, 'demo', 'fe01ce2a7fbac8fafaed7c982a04e229', 'demo@gmail.com', 'Nguyễn Văn A', '15/04/2000', 'Nữ'),
(6, 'demo', 'fe01ce2a7fbac8fafaed7c982a04e229', 'demo@gmail.com', 'Nguyễn Văn A', '15/04/2000', 'Nữ'),
(7, 'demo123', '62cc2d8b4bf2d8728120d052163a77df', 'bnguyen@gmail.com', 'Nguyễn Thị B', '04/09/2003', 'Nữ'),
(21, '123123', '4297f44b13955235245b2497399d7a93', 'c@gmail.com', 'Trần Thị C', '15/04/2000', 'Nữ'),
(22, 'userdemo', 'c4ca4238a0b923820dcc509a6f75849b', 'vuong123@gmail.com', 'Đỗ Minh Vượng', '20/11/2001', 'Nữ'),
(23, 'userdemo1', 'c4ca4238a0b923820dcc509a6f75849b', 'linhngu@gmail.com', 'Phan Việt Linh', '01/01/2001', 'Nam'),
(24, 'userdemo2', 'c4ca4238a0b923820dcc509a6f75849b', 'caovu123@gmail.com', 'Cao Đức Vũ', '01/01/2001', 'Nữ'),
(25, 'kiennhatnheo2', '5d2297b2f56654636090aaad75d0578f', 'linhngu@gmail.com', 'Nguyễn Trung Kiên', '19/02/2001', 'Nam');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `cong_viec`
--
ALTER TABLE `cong_viec`
  ADD PRIMARY KEY (`job_id`);

--
-- Chỉ mục cho bảng `tai_khoan`
--
ALTER TABLE `tai_khoan`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `cong_viec`
--
ALTER TABLE `cong_viec`
  MODIFY `job_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=76;

--
-- AUTO_INCREMENT cho bảng `tai_khoan`
--
ALTER TABLE `tai_khoan`
  MODIFY `user_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
