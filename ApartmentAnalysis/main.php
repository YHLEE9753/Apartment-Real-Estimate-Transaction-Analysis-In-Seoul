<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Apartment Real Estimate Transaction Analysis In Seoul</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-wEmeIV1mKuiNpC+IOBjI7aAzPcEZeedi5yW5f2yOq55WWLwNGmvvx4Um1vskeMj0" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700;900&display=swap" rel="stylesheet">
    
    <!--부트스트랩-->
    <!-- 합쳐지고 최소화된 최신 CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css">
    <!-- 부가적인 테마 -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap-theme.min.css">
    <!-- 합쳐지고 최소화된 최신 자바스크립트 -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.min.js"></script>
    <style src="s.css"></style>
</head>

<body>
    <header style="padding: 40px; padding-bottom: 10px;">
    <br>
    <br>
        <h1 id = "title" style="text-align: center;" > <strong>Apartment Real Estimate Transaction Analysis In Seoul</strong> </h1>
        <br>
        <br>
        <h3 style="text-align: center;" ><strong>Select an Area</strong></h3>
        <br>
        <br>
        <!--<div style="height:100px; width:45%;float:left;"></div>-->
        <div style >
        <div style="height:80px; width:45%;float:left;"></div>
          <form method="post" action="result.php">
            <select name='mygu'>
              <option selected>Select</option>
              <option value="강남구" >강남구</option>
              <option value="강동구">강동구</option>
              <option value="강북구">강북구</option>
              <option value="강서구" >강서구</option>
              <option value="관악구" >관악구</option>
              <option value="광진구" >광진구</option>
              <option value="구로구" >구로구</option>
              <option value="금천구" >금천구</option>
              <option value="노원구" >노원구</option>
              <option value="도봉구" >도봉구</option>
              <option value="동대문구" >동대문구</option>
              <option value="동작구" >동작구</option>
              <option value="마포구" >마포구</option>
              <option value="서대문구" >서대문구</option>
              <option value="서초구" >서초구</option>
              <option value="성동구" >성동구</option>
              <option value="성북구" >성북구</option>
              <option value="송파구" >송파구</option>
              <option value="양천구" >양천구</option>
              <option value="영등포구" >영등포구</option>
              <option value="용산구" >용산구</option>
              <option value="은평구" >은평구</option>
              <option value="종로구" >종로구</option>
              <option value="중구" >중구</option>
              <option value="중남구" >중남구</option>
            </select>
            <input type="submit" value="Search" style="text-align: center;">
          </form>
        </div>
    <div style="height:100px; width:100%;float:left;"></div>
    </header>
  <br>
  <br>
  <footer>
    <p><Strong>Database Practice Web Programming 6Team</Strong></p>
    <p><a href="https://www.data.go.kr/data/15057511/openapi.do" target='_blank'><Strong>Data Source1 : Apartment contract dataset</Strong></a></p>
  </footer>
</div>

</html>