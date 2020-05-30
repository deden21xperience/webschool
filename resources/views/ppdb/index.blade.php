<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  {{-- prevent favicon.ico requests payload? 
    https://stackoverflow.com/questions/1321878/how-to-prevent-favicon-ico-requests
  --}}
  <link rel="shortcut icon" href="data:image/x-icon;," type="image/x-icon">
  <link rel="stylesheet" href="{{asset('vendors/materialize-costum/materialize.css')}}">
  <title>ppdb</title>
</head>

<body>
  {{-- <div id="app">
    <main-ppdb>
  </div> --}}

  <script src="{{ asset('js/vendor.js') }}"></script>
  <script src="{{ asset('js/manifest.js') }}"></script>
  <script src="{{ asset('js/app.js') }}"></script>
  <script src="{{ asset('auth.js') }}"></script>

  <script src="{{ asset('vendors/materialize-costum/materialize.js') }}"></script>
  <script>
    document.addEventListener('DOMContentLoaded', function() {
        var elems = document.querySelectorAll('select');
        var instances = M.FormSelect.init(elems);
        var autocomplete = document.querySelectorAll('.autocomplete');
        var instances = M.Autocomplete.init(autocomplete, {
          data: {
            'Sumedang': "",
            'Bandung': ""
          }
        });
        var modal = document.querySelectorAll('.modal');
        var instances = M.Modal.init(modal);
      });
  </script>
</body>

</html>