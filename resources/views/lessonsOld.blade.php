<!DOCTYPE html>
<html>
    <head>
        <title>Demo</title>
        <meta charset="utf-8">

        <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
        <script type="text/javascript" src="{{ URL::asset('js/jquery.steps.js') }}"></script>
        <script type="text/javascript" src="{{ URL::asset('js/app.js') }}"></script>
        <link rel="stylesheet" href="{{ URL::asset('css/app.css') }}">
        <link rel="stylesheet" href="{{ URL::asset('css/steps.css') }}">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">


    </head>
    <body>
    <div id="overlay" onclick="off()"></div>
    <h1>How to do stuff    <input type='button' class='basic' onclick="on()" value="Edit stuff"/></h1>

    <div id="wizard">
      @foreach ($tasks as $task)
        <h1>{{ $task->title }}</h1>
        <div>{{ $task->body }}</div>

      @endforeach



    </div>
    <div id="modal">
      <form action="/" method="POST">
        {{ csrf_field() }}
        <div class="form-group">
          <label for="title">Title:</label>
          <input type="text" class="form-control" id="title" name="title">
        </div>
        <div class="form-group">
          <label for="body">Body:</label>
          <textarea class="form-control" id="body" name="body"></textarea>
        </div>

        <button type="submit" class="btn btn-primary">Publish</button>
      </form>
		</div>

    </div>
    </body>
    <script>



        var wizard = $("#wizard").steps();


    </script>
</html>
