<nav class="orange">
    <div class="nav-wrapper">
      <a href="/" class="brand-logo">Posts</a>
      <ul id="nav-mobile" class="right hide-on-med-and-down">
        <li class="{{ Request::path() == 'post/create' ? 'active' : ''}}"><a href="/post/create">New Post</a></li>
        <li class="{{ Request::path() == 'users' ? 'active' : ''}}"><a href="/users">Users</a></li>
        <li class="{{ Request::path() == '' ? 'active' : ''}}"><a href="collapsible.html">JavaScript</a></li>
      </ul>
    </div>
</nav>