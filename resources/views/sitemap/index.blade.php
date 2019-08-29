<?php echo '<?xml version="1.0" encoding="UTF-8"?>'; ?>
<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">
  @foreach ($categories as $post)
    <url>
      <loc>{{ url('/blog/kategori') }}</loc>
      <lastmod>{{date('M,d,Y',strtotime($post['created_at']))}}</lastmod>
      <changefreq>weekly</changefreq>
      <priority>0.6</priority>
    </url>
  @endforeach
  @foreach ($blogs as $post)
  <url>
    <loc>{{ url('/blog') }}</loc>
    <lastmod>{{date('M,d,Y',strtotime($post['created_at']))}}</lastmod>
    <changefreq>weekly</changefreq>
    <priority>0.6</priority>
  </url>
@endforeach
@foreach ($produk as $post)
<url>
  <loc>{{ url('/produk') }}</loc>
  <lastmod>{{date('M,d,Y',strtotime($post['created_at']))}}</lastmod>
  <changefreq>weekly</changefreq>
  <priority>0.6</priority>
</url>
@endforeach
@foreach ($user as $post)
<url>
  <loc>{{ url('/login') }}</loc>
  <lastmod>{{date('M,d,Y',strtotime($post['created_at']))}}</lastmod>
  <changefreq>weekly</changefreq>
  <priority>0.6</priority>
</url>
@endforeach
@foreach ($servis as $post)
<url>
  <loc>{{ url('/pickup') }}</loc>
  <lastmod>{{date('M,d,Y',strtotime($post['created_at']))}}</lastmod>
  <changefreq>weekly</changefreq>
  <priority>0.6</priority>
</url>
@endforeach
@foreach ($sys as $post)
<url>
  <loc>{{ url('/sysadmin') }}</loc>
  <lastmod>{{date('M,d,Y',strtotime($post['created_at']))}}</lastmod>
  <changefreq>weekly</changefreq>
  <priority>0.6</priority>
</url>
@endforeach
@foreach ($jasa as $post)
<url>
  <loc>{{ url('/jasa') }}</loc>
  <lastmod>{{date('M,d,Y',strtotime($post['created_at']))}}</lastmod>
  <changefreq>weekly</changefreq>
  <priority>0.6</priority>
</url>
@endforeach
@foreach ($user as $post)
<url>
  <loc>{{ url('/register') }}</loc>
  <lastmod>{{date('M,d,Y',strtotime($post['created_at']))}}</lastmod>
  <changefreq>weekly</changefreq>
  <priority>0.6</priority>
</url>
@endforeach
</urlset>

