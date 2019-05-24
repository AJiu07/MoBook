@extends('common.layout')

@section('page_content')
<div class="twelve wide stretched column">
    <form class="ui form" action="#" method="POST">
        <input type="hidden" name="_token" value="hd9uLlMnbIHJM7H1Rg1nlwt0VCbEqOjW276Fi5fS">                                                            <div class="field">
            <label>旧密码</label>
            <input type="password" name="old_password" placeholder="请输入旧密码">
        </div>
        <div class="field">
            <label>新密码</label>
            <input type="password" name="new_password" placeholder="请输入新密码">
        </div>
        <div class="field">
            <label>重复新密码</label>
            <input type="password" name="new_password_confirmation" placeholder="请重复输入新密码">
        </div>
        <button class="ui green button" type="submit">确认修改</button>
    </form>
</div>
</div>
</div>
@endsection