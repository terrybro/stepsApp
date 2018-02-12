<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>title</title>
    <script defer src="https://use.fontawesome.com/releases/v5.0.6/js/all.js"></script>
    <link rel="stylesheet" href="../css/stylesheet.css">
    <link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Indie+Flower" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ URL::asset('../css/app.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('../css/steps.css') }}">

  </head>
  <body>

    <div id="mySettings" class="settings">
      You need to log in to add a lesson
      <input type="text" value="uname" />
      <input type="text" value="pword" />
      <button>Submit</button>
    </div>

    <div id="container">

      <div id="header">
          <div class="col"><span class="fab fa-leanpub"></span> Teach me</div>
          <div class="scroll"><span class="fas fa-bars"></span></div>
      </div>

      <nav>

        @foreach ($topics as $topic)

        <a href="{{ url('lessons/'.$topic->id) }}">

        <div  class="topic">
          <h2><span class= '{{ $topic->logo }}'></span></h2>
          @foreach ($topic->lessons as $lesson)
              <p>{{ $topic->lessons->count() }} lessons</p>
          @endforeach
        </div>
        </a>
        @endforeach

      </nav>

      <div id="lessons">
        <div id="wizard">


            <h1>Header</h1>
            <div>Content</div>
            <h1>Header</h1>
            <div>Content</div>


        </div>
      </div>
      <footer>
        &copy; Terry Broughton 2018
      </footer>
    </div>

  <script src="//ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js" type="text/javascript"></script>
  <script type="text/javascript" src="{{ URL::asset('js/jquery.steps.js') }}"></script>

  <script type="text/javascript">
  $(function() {
      var wizard = $("#wizard").steps();
      $('.scroll').click(function() {
        if ($('.settings').css("margin-top")!='0px') {
            $(".settings").css({"margin-top":"0px"});
          }else{
            $(".settings").css({"margin-top":"-220px"});
                };
            });
  });
  </script>
  </body>
</html>
