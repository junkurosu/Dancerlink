<?php echo '<?xml version="1.0" encoding="UTF-8"?>'; ?>
<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9" xmlns:image="http://www.google.com/schemas/sitemap-image/1.1">
    <url>
        <loc>{{ route('home') }}/</loc>
        <lastmod>2020-3-27</lastmod>
    </url>
    <url>
        <loc>{{ route('studio.pref') }}</loc>
        <lastmod>2020-3-27</lastmod>
    </url>
    <url>
        <loc>{{ route('studio.archive') }}</loc>
        <lastmod>2020-3-27</lastmod>
    </url>
    <url>
        <loc>{{ route('studioRegister') }}</loc>
        <lastmod>2020-3-27</lastmod>
    </url>
    @foreach(\App\Studio::all() as $v)
    <url>
        <loc>'{{ route('studio.archive') }}/{{$v->id}}'</loc>
        <lastmod>{{ $v->updated_at->format('Y-m-d')}}</lastmod>
    </url>
    @endforeach
    
</urlset>


