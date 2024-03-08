<ul class="list-group">
    @if($errors->any())
        @foreach($errors->all() as $error)
            <li style="color: red" class="list-group-item">
                {{$error}}
            </li>
        @endforeach
    @endif
</ul>
    <br/>


