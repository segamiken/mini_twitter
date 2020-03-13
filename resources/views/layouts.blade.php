<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>mini_twitter</title>
    <link href="{{ mix('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <div id="app">
        <navbar></navbar>
        <div id="nav">
          <router-link to="/">List</router-link> |
          <router-link to="/create">Form</router-link> |
          <router-link to="/:id">Detail</router-link> |
        </div>
        <router-view/>
      </div>
<script src="{{mix('js/app.js')}}"></script>
</body>
</html>