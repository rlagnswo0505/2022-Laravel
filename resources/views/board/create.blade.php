<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Create</title>
</head>
<body>
  <h1>Boards Create</h1>
  <form action="<?=route('boards.store')?>" method="post">
  <div><label for="">제목 : <input type="text" name="title" id=""></label></div>
  <div><label for="">내용 : <textarea type="text" name="ctnt" id=""></textarea></label></div>
  <input type="submit" value="저장">
  <!-- 보안때문에 사용 @csrf를 안붙이면 안들어감 -->
  @csrf
  </form>
</body>
</html>