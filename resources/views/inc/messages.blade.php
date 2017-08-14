
{{--//bad stuff happens--}}
@if(count($errors) > 0)
    @foreach($errors->all() as $error)
        <div class="alert alert-danger">
            {{$error}}
        </div>
    @endforeach


@endif

{{--//save sessions with sucess--}}
@if(session('success'))
    <div class="alert alert-success">
        {{session('success')}}
    </div>
@endif

{{--//sessions are not seving--}}
@if(session('error'))
    <div class="alert alert-danger">
        {{session('error')}}
    </div>
@endif
