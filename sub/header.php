<!DOCTYPE html>
<html lang="ko">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>현대자동차 - 캐스퍼 서브 홈페이지(스크롤 레이아웃)</title>
  <!-- css초기화 -->
  <link href="./css/reset.css" rel="stylesheet" type="text/css">
  <!-- 공통서식 -->
  <link href="./css/common.css" rel="stylesheet" type="text/css">
  <!-- 레이아웃 서식 -->
  <link href="./css/layout.css" rel="stylesheet" type="text/css">
  <!-- 서브 서식 -->
  <link href="./css/sub.css" rel="stylesheet" type="text/css">
  
  <!-- 폰트어썸 주소 -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.1/css/all.min.css" integrity="sha512-2SwdPD6INVrV/lHTZbO2nodKhrnDdJK9/kg2XD1r9uGqPo1cUbujc+IYdlYdEErWNu69gVcYgdxlmVmzTWnetw==" crossorigin="anonymous" referrerpolicy="no-referrer" />

  <!-- 제이쿼리 -->
  <script src="./javascript/jquery-3.7.1.js"></script>
  
</head>
<body>

  <!-- 상단 헤더영역 시작 -->
  <header>
    <h1>
      <a href="../index.html" title="메인페이지 바로가기">
        <img src="./images/logo-casper_black.png" alt="상단로고_화이트">
      </a>
    </h1>

    <!-- 상단 메인메뉴 -->
    <nav>
      <ul class="gnb" aria-label="메인메뉴">
        <li><a href="#intro" title="소개" class="arctic_scroll">소개</a></li>
        <li><a href="#test_drive" title="체험" class="arctic_scroll">체험</a></li>
        <li><a href="#event" title="이벤트" class="arctic_scroll">이벤트</a></li>
        <li><a href="#buy_info" title="구매" class="arctic_scroll">구매</a></li>
        <li><a href="#customer" title="고객지원" class="arctic_scroll">고객지원</a></li>
      </ul>
    </nav>

    <!-- 오른쪽 끝에 배치될 아이콘 2개 -->
    <div class="nav_icon icon1">
      <a href="../login.php" title="로그인페이지로 이동하기"><span class="fas fa-user"></span></a>
      <span class="fas fa-user"></span>
      <span>로그인</span>
      <span class="fas fa-bell"></span>
      <span>알림</span>
    </div>

    
  </header>
