<ul class="text-right the-menu">
    <li class="ml-4"><a class="{{Route::is('home')  ? 'active' : ''}}" href="{{route('home')}}">خانه</a></li>
    <li class="ml-4"><a class="{{Route::is('portfolio')  ? 'active' : ''}}" href="{{route('portfolio')}}">نمونه کارها</a></li>
    <li class="ml-4"><a class="{{Route::is('about')  ? 'active' : ''}}" href="{{route('about')}}">درباره برندت</a></li>
    <li class="ml-4"><a class="{{Route::is('blog')  ? 'active' : ''}}" href="{{route('blog')}}">آموزش</a></li>
    <li class="ml-4"><a class="{{Route::is('contact')  ? 'active' : ''}}" href="{{route('contact')}}">تماس</a></li>
</ul>