<div class="blog-masthead">
  <div class="container-fluid">
    <nav class="nav blog-nav">
      <a class="nav-link active" href="/">Home</a>
      <a class="nav-link" href="/posts/create">Create a blog post</a>
      <a class="nav-link" href="#">Press</a>
      <a class="nav-link" href="#">New hires</a>
      <a class="nav-link" href="#">About</a>
      @if(Auth::check())
      	<a href="#" class="nav-link ml-auto">{{Auth::user()->firstName}} {{Auth::user()->lastName}}</a>
      @endif
    </nav>
  </div>
</div>