
<?php echo '<?xml version="1.0" encoding="UTF-8"?>'; ?>
<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">
  @foreach ($blogs as $post)
    <url>
      <loc>{{ url('/' . $post->slug) }}</loc>
      <lastmod>{{date('M,d,Y',strtotime($post->created_at))}}</lastmod>
      <changefreq>weekly</changefreq>
      <priority>0.6</priority>
    </url>
  @endforeach
</urlset>
