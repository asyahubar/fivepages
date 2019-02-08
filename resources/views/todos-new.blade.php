<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <style>
        body {
            background-color: wheat;
        }

        .container {
            text-align: center;
            margin-bottom: 20px;
        }
    </style>
    <title>Document</title>
</head>
<body>

<form action="/todo" method="post">
    {{ csrf_field() }}
    <div class="container">
        <label for="title">Title</label>
        <input type="text" name="title">
    </div>
    <div class="container">
        <label for="body">Description</label>
        <textarea name="body" id="" cols="30" rows="10"></textarea>
    </div>
    <div class="container">
        <label for="status">Status</label>
        <select name="status">
            <option value="in progress">In progress</option>
            <option value="done">Done</option>
            <option value="fail">Fail</option>
        </select>
    </div>
    <div class="container">
        <button>Submit</button>
    </div>
</form>

</body>
</html>