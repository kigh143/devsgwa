<?xml version="1.0" encoding="UTF-8"?>
<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9"
        xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance"
        xsi:schemaLocation="http://www.sitemaps.org/schemas/sitemap/0.9
        http://www.sitemaps.org/schemas/sitemap/0.9/sitemap.xsd">
    
<?php foreach ($urls as $url): ?>
    <url>
        <loc><?= esc($url['loc']) ?></loc>
        <lastmod><?= esc($url['lastmod']) ?></lastmod>
        <changefreq><?= esc($url['changefreq']) ?></changefreq>
        <priority><?= esc($url['priority']) ?></priority>
    </url>
<?php endforeach; ?>
    
</urlset>
