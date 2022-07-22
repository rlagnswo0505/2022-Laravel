<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Index</title>
  <style>
    a {
      text-decoration: none;
    }
  </style>
</head>
<body>
  <h1>Boards Index</h1>
  <div>any</div>
  <div>
    <a href="<?=route('boards.create')?>">
    <button type="button">글쓰기</button>
    </a>

    <a href="<?=route('boards.show',['i_board' => 10])?>">
      <button type="button">디테일</button>
    </a>
  </div>
  <div>
    <table>
      <thead>
        <tr>
        <th>no</th>
        <th>제목</th>
        <th>조회수</th>
        <th>등록일</th>
        </tr>
      </thead>
      <tbody>
      @foreach($list as $item)
        <tr>
        <td>{{$item -> id}}</td>
        <td>{{$item -> title}}</td>
        <td>{{$item -> hits}}</td>
        <td>{{$item -> created_at}}</td>
        </tr>
        @endforeach
      </tbody>
    </table>


  </div>
</body>
</html>
