<?php echo '<?xml version="1.0" encoding="UTF-8"?>'; ?>
<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9" xmlns:image="http://www.google.com/schemas/sitemap-image/1.1">
    <url>
        <loc>{{ route('home') }}/</loc>
        <lastmod>2019-01-09</lastmod>
    </url>
    <url>
        <loc>{{ route('thread.archive') }}</loc>
        <lastmod>2019-01-09</lastmod>
    </url>
    <url>
        <loc>{{ route('category.archive') }}</loc>
        <lastmod>2019-01-09</lastmod>
    </url>
    @foreach(\App\Category::all() as $v)
    <url>
        <loc>{{$v->path()}}</loc>
        <lastmod>{{ $v->updated_at->format('Y-m-d')}}</lastmod>
    </url>
    @endforeach
    @foreach(\App\Thread::all() as $v)
    <url>
        <loc>{{$v->path()}}</loc>
        <lastmod>{{ $v->updated_at->format('Y-m-d')}}</lastmod>
    </url>
    @endforeach
</urlset>


