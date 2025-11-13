
<?php
  include('./sub/header.php');
?>

<main>
<form name="login" method="post" action="login_check.php">
    <fieldset>
      <legend>로그인</legend>
      <p>
        <label for="id_txt"></label>
        <input type="text" placeholder="아이디를 입력해주세요." id="id_txt" name="id_txt" class="tb">
      </p>
      <p>
        <label for="pw_txt"></label>
        <input type="password" placeholder="비밀번호를 입력해주세요." id="pw_txt" name="pw_txt" class="tb">
      </p>
      <p>
        <input type="checkbox" id="id_save">
        <label for="id_save">아이디 저장</label>
      </p>
      <p>
        <input type="submit" value="로그인" id="login_btn" class="tb">
      </p>
      <p>
        <a href="#" title="아이디 찾기">아이디 찾기</a>
        <a href="#" title="비밀번호 찾기">비밀번호 찾기</a>
        <a href="./php/register.php" title="회원가입">회원가입</a>
      </p>
    </fieldset>
  </form>

</main>
<?php
  include('./sub/footer.php');
?>
<!-- 제이쿼리 -->
 
<script src="./javascript/jquery.cookie.js"></script>
<script>
  $(document).ready(function(){
    // 1. 쿠키이름 저장(개발자가 알아서)
    let key = $.cookie('idChk'); 

    // 2. 만약에 브라우저에 key변수에 값이 저장되어 있다면(쿠키가 있다면)
    if(key){ 
      $('#id_txt').val(key); //id가 id박스안에 표시되어야(체크박스에 체크)
      $('#id_save').prop('checked', true); //체크박스에 체크가 되어 있음.
    }
    // 3.체크박스를 체크하지 않고 다시 체크를 풀 경우(쿠키 저장하지 않겠다/삭제)
    $('#id_save').change(function(){
      if($(this).is(':checked')){ //is메서드는 체크여부를 true/false로 알려줌
        //쿠키 생성하기
        $.cookie('idChk', $('#mb_id').val(), {expires:7, path:'/'});
      }else{ //체크를 하지 않은 경우
        //쿠키 생성하지 않음 또는 기존 쿠키 삭제
        $.removeCookie('idChk', {path:'/'});
      }
    });

    
  })
  