@extends('layouts.app')

@section('content')


        <p>Данные из БД:</p>

        <table class="table_csv">
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Код</th>
                    <th>Наименование</th>
                    <th>Уровень1</th>
                    <th>Уровень2</th>
                    <th>Уровень3</th>
                    <th>Цена</th>
                    <th>ЦенаСП</th>
                    <th>Количество</th>
                    <th>Поля свойств</th>
                    <th>Совместные покупки</th>
                    <th>Единица измерения</th>
                    <th>Картинка</th>
                    <th>Выводить на главной</th>
                    <th>Описание</th>
                </tr>
            </thead>
            <tbody class="content">
            </tbody>
        </table>
        <div class="end"></div>


@endsection
