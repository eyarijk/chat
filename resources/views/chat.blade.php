@extends('layouts.main')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading"><div class="text-center">Чат</div></div>

                <div class="panel-body" style="height: 340px; overflow: auto;">
                    <chat :key=text v-for="text in text.pesan">@{{ text }}</chat>
                </div>
            </div>
            <div class="panel-footer">
                <div class="input-group">
                    <input type="text" class="form-control" name="" id="chat_value" placeholder="Написати повідомлення..." v-model='input' @keyup.enter='push'>
                    <span class="input-group-btn">
                        <button class="btn btn-warning" @click.prevent='push'>Відправити</button>
                    </span>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

<style type="text/css">
    .chatcolor{
        color: #fff;
        background-color: #f0ad4e;
        padding: 10px;
        border-bottom-left-radius: 24px;
        border-bottom-right-radius: 28px;
        border-top-right-radius: 28px;
        margin-top: 6px;
    }
</style>