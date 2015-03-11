<?
	$sql=" select *from post order by postdate desc limit 3";
	$tin=mysql_query($sql);
?>

<div id="body">
<? 

	$dong= mysql_fetch_array($tin);
?>

			<div class="header" >
				<div>
					<a href="http://www2.uet.vnu.edu.vn/coltech/"><img src="img/moinhat.jpg" alt="Image"/></a>
					<div>
						<h1><a href="http://www2.uet.vnu.edu.vn/coltech/">VietlandSoft tuyển dụng PHP developer, Tester, Trainee</a></h1>
						<p>
                        <a href="http://www2.uet.vnu.edu.vn/coltech/">
							Cty cổ phần phần mềm VietlandSoft là công ty startup trong lĩnh vực IT, đang trong quá trình phát triển và xây dựng…
                        </a>
						</p>
					</div>
				</div>
				<ul>
					<li>
						<a href="http://career.fpt-software.com/recruitment.asp?mnID=4" class="figure"><img src="img/moinhat1.jpg" alt="Image"/></a>
						<a href="http://career.fpt-software.com/recruitment.asp?mnID=4"><p>THÔNG TIN TUYỂN DỤNG FSOFT</p></a>
					</li>
					<li>
						<a href="http://www.cncaptech.edu.vn/" class="figure"><img src="img/moinhat2.jpg" alt="Image"></a>
						<a href="http://www.cncaptech.edu.vn/"><p>
                        APTECH ĐÀO TẠO - DOANH NGHIỆP TUYỂN DỤNG</p></a>
					</li>
					<li class="last">
						<a href="http://hrtech.vn/" class="figure"><img src="img/moinhat3.jpg" alt="Image"></a>
						<a href="http://hrtech.vn/"><p>CLB NGUỒN NHÂN LỰC - ĐH CÔNG NGHỆ - ĐHQGHN</p></a>
					</li>
				</ul>
			</div>
		