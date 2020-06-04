@extends('layouts.app')

@section('content')

    <h1 class="text-center">お問い合わせ内容</h1>
    
    <div class="row mt-5">
        <div class="col-6 offset-3">
            
            <div class="mb-3">
                <div>名前：</div>
                <div>{{$confirms->name}}</div>
            </div>
            <div class="mb-3">
                <div>メールアドレス：</div>
                <div>{{$confirms->email}}</div>
            </div>
            <div class="mb-3">
                <div>内容：</div>
                <div class="word-wrapping">{{$confirms->content}}</div>
            </div>
            
            <div class="text-center ">
                {!! Form::open(['route' => ['contacts.store', $confirms]]) !!}
                    {!! Form::submit('送信', ['name' => 'action', 'class' => 'confirm-submit']) !!}
                    {!! Form::submit('修正', ['name' => 'action', 'class' => '']) !!}
                {!! Form::close() !!}    
            </div>
            
        </div>
    </div>
    
    
    
@endsection