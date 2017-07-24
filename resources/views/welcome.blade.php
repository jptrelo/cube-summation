<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Cube Summation</title>

        <!-- Bootstrap -->
        <link rel="stylesheet" href="{{ elixir('css/app.css') }}">

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

    </head>
    <body>
         <script type="text/javascript">
            function insertText(elemID, text)
            {
              var elem = document.getElementById(elemID);
              elem.innerHTML = text;
            }
            var sampleInput = "2 \n" +
                              "4 5 \n" +
                              "UPDATE 2 2 2 4 \n" +
                              "QUERY 1 1 1 3 3 3 \n" +
                              "UPDATE 1 1 1 23 \n" +
                              "QUERY 2 2 2 4 4 4 \n" +
                              "QUERY 1 1 1 3 3 3 \n" +
                              "2 4 \n" +
                              "UPDATE 2 2 2 1 \n" +
                              "QUERY 1 1 1 1 1 1 \n" +
                              "QUERY 1 1 1 2 2 2 \n" +
                              "QUERY 2 2 2 2 2 2 \n";
          </script>

          <style type="text/css">
              .row{
                padding-top: 20px;
              }
              button.btn{
                font-weight: bold;
              }
          </style>

          <div class="container-fluid">
                
                <form class="form-horizontal" action="{{ url('cube') }}" method="post">
                  {{ csrf_field() }}
                    <div class="row">
                        <div class="col-sm-12">
                            <h1>Cube Summation</h1>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-6">   
                            <textarea name="input" id="input" rows="20" cols="40" class="form-control">
                            @if( !empty($results) )
                              @foreach( $results as $result )
                              {{ $result }}
                              @endforeach
                            @elseif (!empty($noInput))
                                {{ $noInput }}
                            @endif
                            </textarea>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-6" style="text-align:right;">
                            <button type="button" id="sampleInputBtn"
                            class="btn btn-default" onclick="insertText('input', sampleInput);">
                            Sample Input
                            </button>
                            <button type="submit" class="btn btn-success">Submit</button>                            
                        </div>
                    </div>
                </form>
                
          </div>
    </body>
</html>
