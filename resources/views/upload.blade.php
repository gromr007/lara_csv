@extends('layouts.app')

@section('content')

        <p>Загрузите файл, формата .csv</p>
        <!-- Signup Form -->
        <form id="signup-form" method="post" action="{{route("uploadStoreCsv")}}" enctype="multipart/form-data">
            @csrf
            <input type="file" class="file" name="csv" multiple accept=".csv, application/vnd.openxmlformats-officedocument.spreadsheetml.sheet, application/vnd.ms-excel">
            <input type="submit" value="Отправить" />
        </form>

@endsection
