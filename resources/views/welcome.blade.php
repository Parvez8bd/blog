@extends('master')

@section('title', $title)

@section('header')
<header>
    <h1>This is header</h1>
</header>
@endsection

@section('main')
<h1>Hello {{ $title }} page!</h1>

{{ 5 + 8 }}
<h1>Dam {{ $price }} taka</h1>

@if(5 == 6)
    {{ "True" }}
@else 
    {{ "False" }}
@endif

@for($i = 0; $i < 10; $i++)
    <p>{{ $i }}</p>
@endfor

<h3>first</h3>
    <ul>
        @foreach($student as $key => $value)
                <h3>Key: {{ $key }}</h3>
                @foreach($value as $index => $data)
                            <li>{{ $index }} : {{ $data }}</li>
                @endforeach
        @endforeach
    </ul>
<h3>2nd</h3>
    <ul>
        @foreach($student as $key => $value)

                <h3>Key: {{ $key }}</h3>

                @foreach($value as $index => $data)
                    
                        @if($index == "age")
                            <li>{{ $index }} : {{ $data }} Days</li>
                        @else
                            <li>{{ $index }} : {{ $data }}</li>
                        @endif
                    
                @endforeach
            
        @endforeach
    </ul>
    <h3>3nd</h3>
    <ul>
        @foreach($student as $key => $value)
            @if($key != 1)
                <h3>Key: {{ $key }}</h3>

                @foreach($value as $index => $data)
                    
                        @if($index == "age")
                            <li>{{ $index }} : {{ $data }} Days</li>
                        @else
                            <li>{{ $index }} : {{ $data }}</li>
                        @endif
                    
                @endforeach
            @endif
        @endforeach
    </ul>
    <h3>4th</h3>
    <ul>
        @foreach($student as $key => $value)
            @if($key != 1)
                <h3>Key: {{ $key }}</h3>

                @foreach($value as $index => $data)
                    @if($index != 'address')
                        @if($index == "age")
                            <li>{{ $index }} : {{ $data }} Days</li>
                        @else
                            <li>{{ $index }} : {{ $data }}</li>
                        @endif
                    @endif
                @endforeach   
            @endif
        @endforeach
    </ul>



@endsection


@section('footer')
<footer>
    <h1>This is footer</h1>
</footer>
@endsection
