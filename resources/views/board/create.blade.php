<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>{{isset($data) ? '글수정' : '글쓰기'}}</title>
</head>
<body>
  <h1>@isset($data) 글수정 @else 글쓰기 @endif</h1>
  <form action="{{ isset($data) ? route('boards.update') : route('boards.store')}}" method="post">
    <input type="hidden" name="id" value="{{ isset($data) ? $data->id : 0}}">
  <div><label for="">제목 : <input type="text" name="title" value="{{ isset($data) ? $data->title : ''}}" id=""></label></div>
  <div><label for="">내용 : <textarea type="text" name="ctnt" id="">{{ isset($data) ? $data->ctnt : ''}}</textarea></label></div>
  <input type="submit" value="저장">
  <!-- 보안때문에 사용, @csrf를 안붙이면 안들어감 -->
  @csrf
  </form>
</body>
</html>
