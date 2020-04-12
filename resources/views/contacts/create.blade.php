@extends('layouts.app')

@section('content')
    
    <h1 class="text-center">お問い合わせフォーム</h1>
    
    <div class="row mt-5">
        <div class="col-6 offset-3">
            {!! Form::open(['route' => 'contacts.confirm']) !!}
                
                <div class="form-group">
                    {!! Form::label('name', '名前') !!}
                    {{ Form::text('name', '', ['class'=> 'form-control', 'placeholder' => '名前を入力してください']) }}
                </div>
                <div class="form-group">
                    {!! Form::label('email', 'メールアドレス') !!}
                    {{ Form::text('email', null, ['class'=> 'form-control', 'placeholder' => 'メールアドレスを入力してください']) }}
                </div>
                <div class="form-group">
                    {!! Form::label('content', 'お問い合わせ内容') !!}
                    {{ Form::textarea('content', null, ['class'=> 'form-control', 'placeholder' => 'お問い合わせを1000字以内で入力してください']) }}
                </div>
                
                <div class="text-center">
                    {!! Form::submit('確認', ['class' => '']) !!}
                </div>
                
            {!! Form::close() !!}
        </div>
    </div>
@endsection