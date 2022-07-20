<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>COACHTECH</title>
  </head>
  <style>
    body{
      background-color: #2a2a80;
    }

    h2{
      margin-bottom: 10pt;
    }

    ul{
      margin: 0pt;
      margin-left: 5pt;
      padding: 0pt;
      line-height: 10pt;
    }

    button{
      width: 48pt;
      height: 29pt;
      background-color: white;
      border-style: solid;
      border-radius: 4pt;
      font-size: 9pt;      
      font-weight: bold;
    }
    
    .div-todolist{
      width: 50vw;
      height: 250pt;
      background-color: white;
      margin: 20vh auto;
      border-radius: 8pt;
      padding: 10pt 15pt;
    }

    .form-add{
      display: flex;
      justify-content: space-between;
      margin-bottom: 10pt;
    }

    .txt-add{
      width: 80%; 
      border-color: lightgray;     
      border-radius: 3pt;
      border-style: solid;
      border-width: 1pt;
    }

    .btn-add{
      border-color: magenta;
      color: magenta;
    }

    .tbl-todo{
      width: 100%;
      margin:auto;
      text-align: center;
    }

    .th-element{
      width: 150pt;
      height: 30pt;
    }

    .txt-update{
      width: 80%;
      height: 15pt;      
      border-color: lightgray;     
      border-radius: 3pt;
      border-style: solid;
      border-width: 1pt;
    }

    .btn-update{
      border-color: orange;
      color: orange;
    }

    .btn-delete{
      border-color: cyan;
      color: cyan;
    }
  </style>
  <body>
    <div class='div-todolist'>
      <h2>Todo List</h2>
      @if (count($errors) > 0)
      <ul>
        @foreach ($errors->all() as $error)
        <li>
          {{$error}}
        </li>
        @endforeach
      </ul>
      @endif
        <form action="/add" method="post" class="form-add">
          @csrf
          <input class="txt-add" type="text" name="content">
          <button class="btn-add">追加</button>
        </form>
      <table class="tbl-todo">
        <tr>
          <th class="th-element">作成日</th>
          <th class="th-element">タスク名</th>
          <th>更新</th>
          <th>削除</th>
        </tr>
        @foreach ($todos as $todo)
        <tr>
          <td class="td-created-at">
            {{$todo->created_at}}
          </td>
          <td>
            <form action="/edit" method="post">
              @csrf
              <input class="txt-update" type="text" name="content" value="{{$todo->content}}">
              <input type="hidden" name="id" value="{{$todo->id}}">              
          </td>
          <td>
              <button class="btn-update">更新</button>
            </form>
          </td>
          <td>
            <form action="/delete" method="post">
              @csrf
              <input type="hidden" name="id" value="{{$todo->id}}">              
              <button class="btn-delete">削除</button>
            </form>
          </td>
        </tr>
        @endforeach
      </table>
    </div>
  </body>
</html>
