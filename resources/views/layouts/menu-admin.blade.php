<nav class="navbar navbar-expand navbar-dark bg-dark d-flex justify-content-between">
    <div class="nav navbar-nav">
        <a class="nav-item nav-link active" href="{{route('post_index')}}">پست ها</a>
        <a class="nav-item nav-link active" href="{{route('category_index')}}">دسته ها</a>
        <a class="nav-item nav-link active" href="{{route('work_index')}}">نمونه کار</a>
        <a class="nav-item nav-link active" href="{{route('team_index')}}">تیم</a>
        <a class="nav-item nav-link active" href="{{route('contact_index')}}">تماس</a>
    </div>
    <div class="nav navbar-nav">
    <form action="{{route('logout')}}" method="POST">
        @csrf
        <button type="submit" class="nav-item nav-link active"> خروج </button>
    </form>
    </div>
</nav>