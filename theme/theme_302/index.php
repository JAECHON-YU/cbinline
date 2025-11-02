<?php
if (!defined('_INDEX_')) define('_INDEX_', true);
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

if (G5_IS_MOBILE) {
    include_once(G5_THEME_MOBILE_PATH.'/index.php');
    return;
}

if(G5_COMMUNITY_USE === false) {
    include_once(G5_THEME_SHOP_PATH.'/index.php');
    return;
}

include_once(G5_THEME_PATH.'/head.php');
?>

<?php
if(defined('_INDEX_')) { // index에서만 실행
	if(is_mobile()){
		include G5_THEME_PATH.'/mobile_popup.php'; // 팝업레이어
	}else{
		include G5_BBS_PATH.'/newwin.inc.php'; // 팝업레이어
	}
}
?>


	<?php

	/* 
	#=========================================#
	| 테마적용방법 동영상팁
	#=========================================# 

	▶ Gnuboard 최신 버전 다운로드 및 설치방법
	http://ety.kr/board/ety_theme_manual/48

	▶ 카페24 접속하기
	http://ety.kr/board/ety_theme_manual/50


	▶ 카페24 호스팅 구매하기
	http://ety.kr/board/ety_theme_manual/49


	▶ 파일질라 ftp 설치 및 접속하기
	http://ety.kr/board/ety_theme_manual/51


	▶ 그누보드 설치하기
	http://ety.kr/board/ety_theme_manual/48


	▶ 테마 적용하기
	http://ety.kr/board/ety_theme_manual/37


	▶ 테마가 반응형이 안되는 경우
	http://ety.kr/board/ety_theme_manual/23


	▶ 1분 만에 레이아웃 쉽게 만드는 방법
	http://ety.kr/board/ety_theme_manual/26?page=2


	▶ pages 폴더 사용하는 방법
	http://ety.kr/board/ety_theme_manual/16?page=3


	▶ 질문답변게시판 안내
	http://ety.kr/board/qa



	▶ 각 서브페이지 이미지 위치 : /pages/img/etc/ 폴더내

	각 서브페이지의 배경은 /theme/테마이름/js/custom.js : 385번째줄 (breadcrumb-wrap 부분) 파일에서 한번에 수정이 가능합니다.
	만일 서브페이지 별로 배경을 다르게 하실 경우 custom.js 자바스크립트를 해당페이지에 복사하셔서
	원하는 배경을 설정하시면 됩니다.

	*/


	?>


	<!-------------------------- 

	좌측 플로팅 sns 배너를 사용하지 않을시에는 아래 두군데를 삭제하시면 됩니다. 상단과 하단쪽에 있습니다.

	<link href="<?php echo G5_THEME_URL?>/css/socialfloating.css" rel="stylesheet">
	<script src="<?php echo G5_THEME_URL ?>/js/jquery.socialfloating.js"></script>


	-------------------------->




	<!-------------------------- 슬라이드 시작 -------------------------->
	<div class="container no-padding"></div>
	<?php

	/* 
	#=========================================#
	| 테마적용방법 동영상팁
	#=========================================# 

	▶ 유튜브 슬라이드 크기조절 및 사용방법안내
	http://ety.kr/board/ety_theme_manual/34?page=2

	

	[유튜브동영상주소 사용팁]

	슬라이드의 세로사이즈는 이미지 사이즈와 함께 테마폴더/common.css 파일을 수정해주시면 됩니다.

	주소창에 있는 주소의 url 중에서
	https://www.youtube.com/watch?v=o70MzTHHNbI
	뒷부분 o70MzTHHNbI 값만 넣어주세요.


	* 테마폴더/js/script.js 맨 하단에서 슬라이드 속도를 조절 할 수 있습니다.



	*/

	// 유튜브주소값 수정하는 곳
	$yt_url = 'BLL-kW_TpT4';

	?>
	<section class="main-slider">


		<!-- 이미지 -->
		<div class="item image">
			<figure>
				<div class="slide-image slide-media" style="background-image:url('https://via.placeholder.com/2560x620');"><!-- 이미지 -->
					<img data-lazy="https://via.placeholder.com/2560x620" class="image-entity" /><!-- 이미지 -->
				</div>
				<figcaption class="caption ko lh1-5"><i class="material-icons f60 icon_ve">add_ic_call</i> 5.4 유튜브 3단 슬라이드<div class="small-text mt20">반응형으로 제작된 홈페이지 입니다.</div></figcaption>
			</figure>
		</div>


		<!-- 유튜브 -->
		<div class="item youtube">
			<iframe class="embed-player slide-media" src="https://www.youtube.com/embed/<?php echo $yt_url?>?version=3&vq=hd1080&t=160s&enablejsapi=1&controls=0&fs=0&iv_load_policy=3&rel=0&showinfo=0&loop=1&start=1" frameborder="0" allowfullscreen></iframe> 
			<figcaption class="caption ko lh1-5"><i class="material-icons f60 icon_ve">live_tv</i> YOUTUBE<div class="small-text mt20">반응형으로 제작된 홈페이지 입니다.</div></figcaption>
		</div>

		
		<!-- mp4 동영상 -->
		<div class="item video">
			<video class="slide-video slide-media" loop muted preload="metadata">
			  <source src="<?php echo G5_THEME_URL?>/images/movie.mp4" type="video/mp4" allowfullscreen />
			</video>
			<p class="video-caption caption lh1-5 ko">
				영상은 포함되어 있지 않습니다.<BR>
				MP4 동영상 SLIDE
			</p>
		</div>

	</section>







	<!-------------------------- 탭메뉴 -------------------------->
	<div class="container mt40 mb40">
		<div class="row">
			<div class="col-md-12">
				
					<div class="tabs-container new-tab">
						<!-------------------------- tabs -------------------------->
						<ul class="nav nav-tabs row" style="margin:0px 0px;">
							<li class="active col-md-3 col-sm-6 col-xs-6 text-center no-padding">
								<a data-toggle="tab" href="#tab-001" aria-expanded="true"><i class="material-icons vcenter">local_library</i> 게시물</a></li>
							<li class="col-md-3 col-sm-6 col-xs-6 text-center no-padding">
								<a data-toggle="tab" href="#tab-002" aria-expanded="false"><i class="material-icons vcenter">collections</i> 갤러리</a></li>
							<li class="col-md-3 col-sm-6 col-xs-6 text-center no-padding">
								<a data-toggle="tab" href="#tab-003" aria-expanded="false"><i class="material-icons vcenter">not_started</i> 미디어</a></li>
							<li class="col-md-3 col-sm-6 col-xs-6 text-center no-padding">
								<a data-toggle="tab" href="#tab-004" aria-expanded="false"><i class="material-icons vcenter">event_note</i> 행사안내</a>
							</li>
						</ul>

						<div class="tab-content" style="padding:0px; margin:0px;">
							<div id="tab-001" class="tab-pane fade in active ko">
								<!-- 
								동일한 최근게시물을 추가하시는 경우 테마폴더/js/custon.js 에도 슬라이드를 추가해주셔야 합니다.
								-->
								<?php echo latest('theme/theme_notice_no_title_carousel', 'notice', 6, 30);?>

							</div>
							<div id="tab-002" class="tab-pane fade ko">
								<!-- 최근갤러리 -->
								<?php echo latest('theme/gallery_list_carousel', 'gallery', 6, 40);?>
							</div>
							<div id="tab-003" class="tab-pane fade ko">
								<!-- 최근게시물 -->
								<?php echo latest('theme/gallery_list_carousel_yt', 'gallery_movie', 6, 30);?>
							</div>
							<div id="tab-004" class="tab-pane fade ko">
								<!-- 최근게시물 -->
								<?php echo latest('theme/theme_notice_no_title_carousel_2', 'free', 6, 30);?>
								
							</div>
						</div>
					</div><!-- ./End tabs -->

			</div>
		</div>
	</div>
	<!-------------------------- /텝메뉴 -------------------------->









	<!-------------------------- YOUR PARTNER -------------------------->

	<?php
	/*
	
	#=========================================#
	| 테마적용방법 동영상팁
	#=========================================# 

	▶ 수백개의 아이콘을 변경해보기
	http://ety.kr/board/ety_theme_manual/38?page=2

	▶ 아이콘박스에 링크걸기
	http://ety.kr/board/ety_theme_manual/24?page=2
	

	https://material.io/resources/icons/?style=outline
	위 주소에서 아이콘 이름만 교체하시면 바로 사용이 가능합니다.

	아래 예처럼 analytics 이나 phonelink_setup 처럼 이름만 변경해주세요.

	<i class="material-icons f60">analytics</i>
	<i class="material-icons f60">phonelink_setup</i>


	*/
	?>

	<!-------------------------- 아이콘박스 -------------------------->






	<div class="container mb60">
		
		<div class="row main-box">
			<div class="col-lg-2 col-md-6 col-sm-6 col-xs-6 p-r-5">
				<a href="javascript:void(0)">
				<div class="colored-boxed bg-white">
					<i class="material-icons f60">history_edu</i>
					<h3>타이틀</h3>
				</div>
				</a>
				<div class="mb10 hidden-md hidden-lg"></div><!-- mobile 간격 -->
			</div><!-- /col -->

			<div class="col-lg-2 col-md-6 col-sm-6 col-xs-6 p-l-5">
				<a href="javascript:void(0)">
				<div class="colored-boxed bg-white">
					<i class="material-icons f60">file_present</i>
					<h3>타이틀</h3>
				</div>
				</a>
				<div class="mb10 hidden-md hidden-lg"></div><!-- mobile 간격 -->
			</div><!-- /col -->

			<div class="col-lg-2 col-md-6 col-sm-6 col-xs-6 p-r-5">
				<a href="javascript:void(0)">
				<div class="colored-boxed bg-white">
					<i class="material-icons f60">description</i>
					<h3>타이틀</h3>
				</div>
				</a>
				<div class="mb10 hidden-md hidden-lg"></div><!-- mobile 간격 -->
			</div><!-- /col -->

			<div class="col-lg-2 col-md-6 col-sm-6 col-xs-6 p-l-5">
				<a href="javascript:void(0)">
				<div class="colored-boxed bg-white">
					<i class="material-icons f60">find_in_page</i>
					<h3>타이틀</h3>
				</div>
				</a>
				<div class="mb10 hidden-md hidden-lg"></div><!-- mobile 간격 -->
			</div><!-- /col -->

			<div class="col-lg-2 col-md-6 col-sm-6 col-xs-6 p-l-5">
				<a href="javascript:void(0)">
				<div class="colored-boxed bg-white">
					<i class="material-icons f60">tune</i>
					<h3>타이틀</h3>
				</div>
				</a>
				<div class="mb10 hidden-md hidden-lg"></div><!-- mobile 간격 -->
			</div><!-- /col -->

			<div class="col-lg-2 col-md-6 col-sm-6 col-xs-6 p-l-5">
				<a href="javascript:void(0)">
				<div class="colored-boxed bg-white">
					<i class="material-icons f60">restore</i>
					<h3>타이틀</h3>
				</div>
				</a>

				<div class="mb10 hidden-md hidden-lg"></div><!-- mobile 간격 -->
			</div><!-- /col -->
		</div><!-- /row -->
	</div><!-- /container -->
	<!-------------------------- 아이콘박스 끝 -------------------------->






	<!-------------------------- 온라인문의 -------------------------->
	<div class="container-fluid no-padding mb60">
		<div id="cta-bg" style="background:url('https://via.placeholder.com/2560x1080'); background-position: center top;background-repeat: no-repeat;"><!-- 배너 이미지 수정 -->
			<h2 class="ko">온라인문의</h2>
			<p class="lead ko color-777"><strong>먼저핀꽃은 먼저진다  남보다 먼저 공을 세우려고 조급히 서둘것이 아니다 – 채근담</strong></p>
			<a href="#" class="btn btn-default btn-ico btn-lg ko">바로가기</a>
		</div>
	</div>






	<!-------------------------- 갤러리 -------------------------->
	<?php
	/*

	[최근게시물 수정 팁영상]
	http://ety.kr/board/ety_theme_manual/47

	*/
	?>
	<?php echo latest('theme/basic_gallery', 'gallery', 8, 20);?>







	<!-------------------------- 와이드배너 -------------------------->
	<div class="wide-img-showcase mb60">
		<div class="row margin-0 wide-img-showcase-row">
			<div class="col-sm-6 col-xs-12 no-padding img-2" style="background: url('https://via.placeholder.com/1920x1080') scroll center no-repeat;background-size: cover;"><!-- 이미지 -->
				<div class="no-padding-inner ">
					<div>&nbsp;</div>
				</div>
			</div>
			<div class="col-sm-6 col-xs-12 col-sm-offset-6 no-padding gray">
				<div class="no-padding-inner gray">
					<h3 class="wow animated fadeInDownfadeInRight animated animated" style="visibility: visible;">Core features of <span class="colored-text">SOFTZONE</span></h3>
					<div class="services-box margin30 wow animated fadeInRight animated animated" style="visibility: visible; animation-name: fadeInRight;">
						<div class="services-box-icon">
							<i class="material-icons f50">commute</i>
						</div><!--services icon-->
						<div class="services-box-info">
							<h4 class="ko">물류시스템 브로슈어(영문)</h4>
							<p>
								대한민국을 대표하는 글로벌 물류및운송회사인 소프트존 입니다. 물류의 전과정과 프로세스, 해운, KD 등의 모든 정보가 
								포함되어 있습니다.
							</p>
						</div>
					</div><!--service box-->
					<div class="services-box margin30 wow animated fadeInRight animated animated" style="visibility: visible; animation-name: fadeInRight;">
						<div class="services-box-icon">
							<i class="material-icons f50">production_quantity_limits</i>
						</div><!--services icon-->
						<div class="services-box-info">
							<h4 class="ko">물류시스템 브로슈어(한글)</h4>
							<p>
								This is Soft Zone, a global logistics and transportation company representing Korea. All information such as logistics process, process, shipping, and KD Included.
							</p>
						</div>
					</div><!--service box-->

					<p><a href="#" class="btn btn-theme-dark btn-lg mt30 ko">바로가기</a></p>

				</div>
			</div>
		</div>
	</div><!-- /wide-img-showcase -->







	<!-------------------------- 하단 배너 -------------------------->
	<!-- 
	테마폴더/js/custom.js : 283줄
	-->
	<div class="container mb40">
		<div class="row">
			<div class="col-md-12">
				<div id="banner-carousel" class="owl-carousel owl-theme">
					<div class="item"><img src="https://via.placeholder.com/280x150"></div>
					<div class="item"><img src="https://via.placeholder.com/280x150"></div>
					<div class="item"><img src="https://via.placeholder.com/280x150"></div>
					<div class="item"><img src="https://via.placeholder.com/280x150"></div>
					<div class="item"><img src="https://via.placeholder.com/280x150"></div>
					<div class="item"><img src="https://via.placeholder.com/280x150"></div>
					<div class="item"><img src="https://via.placeholder.com/280x150"></div>
					<div class="item"><img src="https://via.placeholder.com/280x150"></div>
				</div>
			</div>
		</div>
	</div>
	<!-------------------------- 하단 배너 끝 -------------------------->



<?php
include_once(G5_THEME_PATH.'/tail.php');
?>